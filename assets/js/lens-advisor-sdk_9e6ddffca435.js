this.iris = (function () {
    "use strict";
    const PREFIX = "iris:";
    const CALL = "iris:call";
    const EMIT = "iris:emit";
    const SET = "iris:set";
    const RESULT = "iris:result";
    const VERSION = 1;
    const DEFAULT_TIMEOUT = 8e3;
    let seq = 0;
    const nextId = () => `iris-${Date.now().toString(36)}-${(seq += 1)}`;
    const normalizeOrigin = (value) => {
        if (!value || value === "*") return value;
        try {
            return new URL(value).origin;
        } catch (err) {
            return value;
        }
    };
    const describeError = (err) =>
        (err && (err.description || err.message)) ||
        (typeof err === "string" ? err : "") ||
        "Unknown error";
    function createBridge({ peer, origin, namespace, eventTarget, eventPrefix = PREFIX }) {
        const handlers = /* @__PURE__ */ new Map();
        const pending = /* @__PURE__ */ new Map();
        const peerOrigin = normalizeOrigin(origin);
        let listening = false;
        const peerWindow = () => (typeof peer === "function" ? peer() : peer);
        const post = (message) => {
            const target = peerWindow();
            if (!target) return false;
            try {
                target.postMessage({ v: VERSION, ...message }, peerOrigin || "*");
                return true;
            } catch (err) {
                console.error("[iris] bridge post failed:", err);
                return false;
            }
        };
        const trusted = (event) => {
            const data = event.data;
            if (!data || typeof data.type !== "string" || data.type.indexOf(PREFIX) !== 0)
                return false;
            const target = peerWindow();
            if (target && event.source !== target) return false;
            if (peerOrigin && peerOrigin !== "*" && event.origin !== peerOrigin) return false;
            return true;
        };
        const announce = (eventName, detail) => {
            const target = eventTarget || (typeof window !== "undefined" ? window : null);
            if (target) target.dispatchEvent(new CustomEvent(eventName, { detail }));
        };
        const settle = (message) => {
            const entry = pending.get(message.id);
            if (!entry) return;
            pending.delete(message.id);
            clearTimeout(entry.timer);
            if (message.ok) entry.resolve(message.value);
            else entry.reject(new Error(message.error || "Remote call failed"));
        };
        const runCall = async (message) => {
            const handler = handlers.get(message.name);
            if (typeof handler !== "function") {
                if (message.id) {
                    post({
                        type: RESULT,
                        id: message.id,
                        ok: false,
                        error: `No handler registered for "${message.name}"`,
                    });
                } else {
                    console.warn(`[iris] no handler registered for "${message.name}"`);
                }
                return;
            }
            try {
                const value = await handler(...(message.args || []));
                if (message.id) post({ type: RESULT, id: message.id, ok: true, value });
            } catch (err) {
                if (message.id)
                    post({ type: RESULT, id: message.id, ok: false, error: describeError(err) });
                else console.error(`[iris] handler "${message.name}" threw:`, err);
            }
        };
        const onMessage = (event) => {
            if (!trusted(event)) return;
            const message = event.data;
            if (message.type === RESULT) return settle(message);
            if (message.type === CALL) return void runCall(message);
            if (message.type === EMIT) return announce(message.name, message.detail);
            if (message.type === SET) {
                if (namespace) namespace[message.name] = message.value;
                announce(eventPrefix + message.name, message.value);
            }
        };
        return {
            /** Register a function the peer may call by name. */
            expose(name, fn) {
                handlers.set(name, fn);
                return this;
            },
            /** Register several at once: exposeAll({ close, addToCart }). */
            exposeAll(map) {
                Object.keys(map || {}).forEach((name) => handlers.set(name, map[name]));
                return this;
            },
            /** Invoke a function the peer exposed. Resolves with its return value. */
            call(name, ...args) {
                return new Promise((resolve, reject) => {
                    const id = nextId();
                    const timer = setTimeout(() => {
                        pending.delete(id);
                        reject(new Error(`Timed out calling "${name}"`));
                    }, DEFAULT_TIMEOUT);
                    pending.set(id, { resolve, reject, timer });
                    if (!post({ type: CALL, name, args, id })) {
                        pending.delete(id);
                        clearTimeout(timer);
                        reject(new Error("No peer window to call"));
                    }
                });
            },
            /** Fire-and-forget call: no reply expected, no id burned. */
            notify(name, ...args) {
                post({ type: CALL, name, args });
            },
            /** Dispatch a CustomEvent on the peer. */
            emit(name, detail) {
                post({ type: EMIT, name, detail });
            },
            /** Write a value onto the peer's iris / LensAdvisor object. */
            set(name, value) {
                post({ type: SET, name, value });
            },
            start() {
                if (listening) return this;
                window.addEventListener("message", onMessage);
                listening = true;
                return this;
            },
            stop() {
                if (!listening) return this;
                window.removeEventListener("message", onMessage);
                listening = false;
                pending.forEach((entry) => {
                    clearTimeout(entry.timer);
                    entry.reject(new Error("Bridge closed"));
                });
                pending.clear();
                return this;
            },
        };
    }
    const WIDGET_PATH = "/sdk/view";
    const INFERRED_API_BASE = (() => {
        if (typeof document === "undefined") return "";
        try {
            const current = document.currentScript;
            if (current && current.src) return new URL(current.src).origin;
            const match = Array.from(document.scripts)
                .reverse()
                .find((s) => /lens-advisor-sdk\.js/.test(s.src));
            if (match) return new URL(match.src).origin;
        } catch (_) {}
        return "";
    })();
    let TRANSLATION_MAPS = null;
    function setTranslations(maps) {
        if (maps && typeof maps === "object") TRANSLATION_MAPS = maps;
    }
    function pageLocale() {
        return (window.Shopify && window.Shopify.locale) || document.documentElement.lang || "";
    }
    function translateText(text, locale) {
        if (!TRANSLATION_MAPS || typeof text !== "string" || !text) return text;
        const key = text
            .trim()
            .replace(/[\r\n]+/g, " ")
            .replace(/\s{2,}/g, " ");
        const code = String(locale || pageLocale()).toLowerCase();
        const map = TRANSLATION_MAPS[code] || TRANSLATION_MAPS[code.split("-")[0]] || {};
        return map[key] || (TRANSLATION_MAPS.en || {})[key] || text;
    }
    let liveCfg = null;
    let activeBridge = null;
    const iris = {
        init(opts) {
            liveCfg = normalize(opts);
            document.dispatchEvent(
                new CustomEvent("LensAdvisor:init:start", { detail: { flowId: liveCfg.flowId } }),
            );
            onReady(() => bindSelector(liveCfg));
            if (liveCfg.platform === "shopify") {
                initShopifyMode(liveCfg);
                document.dispatchEvent(
                    new CustomEvent("LensAdvisor:init:complete", {
                        detail: { flowId: liveCfg.flowId },
                    }),
                );
            } else {
                prewarmSettings(liveCfg);
                document.dispatchEvent(
                    new CustomEvent("LensAdvisor:init:complete", {
                        detail: { flowId: liveCfg.flowId },
                    }),
                );
            }
            return liveCfg;
        },
        /**
         * Merge a partial context patch into the live cfg. Call this from the
         * merchant snippet whenever Shopify's selected variant changes so the next
         * iris button click (and any open iframe) sees the fresh product data.
         *
         *     iris.updateContext({ variant_id, price, image });
         */
        updateContext(patch) {
            if (!liveCfg) {
                console.warn("[iris] updateContext() called before init().");
                return;
            }
            if (!patch || typeof patch !== "object") return;
            Object.assign(liveCfg.context, patch);
            pushContextToIframe(liveCfg);
            return liveCfg;
        },
        /** Programmatic open — bypasses selector binding (debug / dashboard preview). */
        open(opts) {
            const cfg = normalize(opts);
            const layout = opts.settings && opts.settings.layout;
            if (layout) {
                const known = ["drawer", "modal", "horizontal", "horizontal-boxy"];
                cfg.runtime = {
                    layout: known.includes(layout.type) ? layout.type : "modal",
                    contentSize: layout.content_size,
                    contentHeight: layout.content_height,
                    storefrontButton: opts.settings.storefront_button || {},
                };
            }
            openOverlay(cfg);
            return cfg;
        },
        // Store setting `add_to_cart_custom_event` — set by the settings
        // fetch. When true AND the merchant defined a postAddToCart hook,
        // it runs after a successful cart add: on Shopify the snippet calls
        // `LensAdvisor.postAddToCart(payload)` instead of redirecting to
        // /cart; on every other platform the launcher calls
        // `iris.postAddToCart(payload)` after the merchant's onAddToCart
        // resolves.
        addToCartCustomEvent: false,
        // Platform hook (non-Shopify) — merchant-defined, from their own
        // page JS or the Settings → Custom JS injector.
        postAddToCart: null,
    };
    function normalize(opts) {
        const platform = String((opts && opts.platform) || "");
        if (!opts || (!opts.flowId && platform !== "shopify")) {
            throw new Error("[iris] init() requires a `flowId`.");
        }
        const cfg = {
            flowId: opts.flowId ? String(opts.flowId) : "",
            selector: opts.selector ? String(opts.selector) : "",
            apiBase: (opts.apiBase || INFERRED_API_BASE || "").replace(/\/$/, ""),
            // Storefront platform hint ("shopify", "woocommerce", …) — picks the
            // platform adapter and is threaded through to the widget.
            platform,
            // Shopify-adapter input, built entirely from metafields by the
            // app-block snippet: { assign_by, variants: { <id>: { available,
            // price, frame_sku, image, flow: { id, layout, button } | null } } }.
            assignments:
                opts.assignments && typeof opts.assignments === "object" ? opts.assignments : null,
            hideAddToCart: opts.hideAddToCart !== false,
            context: opts.context && typeof opts.context === "object" ? opts.context : {},
            onAddToCart: typeof opts.onAddToCart === "function" ? opts.onAddToCart : null,
        };
        if (platform === "shopify") setTranslations(opts.translations);
        if (cfg.context.locale == null) {
            cfg.context.locale = pageLocale();
        }
        return cfg;
    }
    function prewarmSettings(cfg) {
        if (!cfg.flowId) return;
        fetchRuntime(cfg)
            .then((rt) => {
                cfg.runtime = rt;
                onReady(() => applyTriggerStyles(cfg));
            })
            .catch(() => {});
    }
    function pushContextToIframe(cfg) {
        if (activeBridge) activeBridge.notify("setContext", { ...cfg.context });
    }
    function onReady(fn) {
        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", fn, { once: true });
        } else {
            fn();
        }
    }
    function bindSelector(cfg) {
        if (!cfg.selector) return;
        if (document.querySelectorAll(cfg.selector).length === 0) {
            console.warn(
                `[iris] selector \`${cfg.selector}\` matched no elements at init time (will still bind via delegation).`,
            );
        }
        document.addEventListener(
            "click",
            (event) => {
                const hit = event.target.closest && event.target.closest(cfg.selector);
                if (!hit) return;
                event.preventDefault();
                event.stopPropagation();
                openOverlay(cfg);
            },
            true,
        );
    }
    function fetchRuntime(cfg) {
        return fetch(`${cfg.apiBase}/api/v1/flows/${encodeURIComponent(cfg.flowId)}/settings`)
            .then((res) =>
                res.ok ? res.json() : Promise.reject(new Error(`settings ${res.status}`)),
            )
            .then((data) => {
                const settings = data?.settings || {};
                const layout = settings?.layout?.type;
                const known = ["drawer", "modal", "horizontal", "horizontal-boxy"];
                applyStoreExtras(data?.store || {});
                setTranslations(data?.translations);
                return {
                    layout: known.includes(layout) ? layout : "modal",
                    contentSize: settings?.layout?.content_size,
                    contentHeight: settings?.layout?.content_height,
                    storefrontButton: settings.storefront_button || {},
                };
            });
    }
    let storeExtrasApplied = false;
    function applyStoreExtras(store) {
        iris.addToCartCustomEvent = store.add_to_cart_custom_event === true;
        if (storeExtrasApplied) return;
        storeExtrasApplied = true;
        if (store.post_add_to_cart_js && !window.LensAdvisor.postAddToCart) {
            try {
                window.LensAdvisor.postAddToCart = new Function("cart", store.post_add_to_cart_js);
            } catch (err) {
                console.error("[iris] postAddToCart body failed to compile:", err);
            }
        }
    }
    function applyButtonStyles(el, sb, locale) {
        if (sb.text) el.textContent = translateText(sb.text, locale);
        if (sb.background_color) el.style.backgroundColor = sb.background_color;
        if (sb.text_color) el.style.color = sb.text_color;
        if (sb.border_radius_px != null) el.style.borderRadius = `${sb.border_radius_px}px`;
        el.style.border = `${sb.border_width_px ?? 1}px solid ${sb.border_color || "#000000"}`;
        if (sb.padding_px != null) el.style.padding = `${sb.padding_px}px`;
        if (sb.full_width === false && sb.width_px != null) {
            el.style.width = `${sb.width_px}px`;
            el.style.maxWidth = "100%";
        }
    }
    function applyTriggerStyles(cfg) {
        const sb = cfg.runtime && cfg.runtime.storefrontButton;
        if (!sb) return;
        document
            .querySelectorAll(cfg.selector)
            .forEach((node) => applyButtonStyles(node, sb, cfg.context.locale));
    }
    function initShopifyMode(cfg) {
        onReady(() => {
            applyVariant(cfg, currentVariantId(cfg));
            watchVariantChanges(cfg);
        });
        window.addEventListener("pageshow", (event) => {
            const backForward =
                window.performance && performance.navigation && performance.navigation.type === 2;
            if (event.persisted || backForward) {
                window.location.reload();
            }
        });
    }
    function currentVariantId(cfg) {
        const fromUrl = new URLSearchParams(window.location.search).get("variant");
        return String(fromUrl || cfg.context.variant_id || "");
    }
    function atcSelector(injection) {
        const parts = [];
        const cls = String(injection.unique_css_class || "")
            .trim()
            .replace(/^\./, "");
        if (cls && injection.search_rule !== "product-form") {
            parts.push("." + (window.CSS && CSS.escape ? CSS.escape(cls) : cls));
        }
        if (injection.search_rule !== "custom_css_class") {
            parts.push('form[action*="/cart/add"] [type=submit]');
        }
        return parts.join(",");
    }
    function placeTrigger(cfg, injection) {
        document.querySelectorAll("[data-iris-clone]").forEach((el) => el.remove());
        let trigger = document.querySelector(cfg.selector);
        if (!trigger) {
            trigger = document.createElement("button");
            trigger.type = "button";
            trigger.className = cfg.selector.replace(/^\./, "");
            trigger.textContent = "Customize Your Lenses";
            trigger.style.display = "none";
        }
        trigger.style.width = "100%";
        trigger.style.padding = "12px";
        trigger.style.margin = "5px 0";
        trigger.style.fontWeight = "600";
        trigger.style.cursor = "pointer";
        if (injection.mode === "extension") return trigger;
        const selector = atcSelector(injection);
        const matches = selector ? document.querySelectorAll(selector) : [];
        if (!matches.length) return trigger;
        const where = injection.position === "after" ? "afterend" : "beforebegin";
        matches.forEach((atc, index) => {
            if (index === 0) {
                const placed =
                    where === "beforebegin"
                        ? atc.previousElementSibling === trigger
                        : atc.nextElementSibling === trigger;
                if (!placed) atc.insertAdjacentElement(where, trigger);
                return;
            }
            if (injection.mode === "first") return;
            const clone = trigger.cloneNode(true);
            clone.setAttribute("data-iris-clone", "");
            atc.insertAdjacentElement(where, clone);
        });
        return trigger;
    }
    function applyVariant(cfg, variantId) {
        if (!variantId) return;
        const a = cfg.assignments;
        const entry = a && a.variants ? a.variants[String(variantId)] : null;
        if (entry) {
            if (entry.price != null) cfg.context.price = entry.price;
            if (entry.frame_sku != null) cfg.context.frame_sku = entry.frame_sku;
            if (entry.title != null) cfg.context.variant_title = entry.title;
            if (entry.options != null) cfg.context.variant_options = entry.options;
            if (entry.image) cfg.context.image = entry.image;
        }
        cfg.context.variant_id = String(variantId);
        pushContextToIframe(cfg);
        const flow = entry && entry.available !== false ? entry.flow : null;
        const injection = (flow && flow.injection) || {};
        placeTrigger(cfg, injection);
        toggleTriggerVsAddToCart(cfg, Boolean(flow && flow.id), injection);
        if (!flow || !flow.id) {
            cfg.flowId = "";
            return;
        }
        cfg.flowId = String(flow.id);
        const known = ["drawer", "modal", "horizontal", "horizontal-boxy"];
        cfg.runtime = {
            layout: known.includes(flow.layout) ? flow.layout : "modal",
            contentSize: flow.content_size,
            contentHeight: flow.content_height,
            storefrontButton: flow.button || {},
        };
        applyTriggerStyles(cfg);
    }
    function toggleTriggerVsAddToCart(cfg, hasFlow, injection) {
        document.querySelectorAll(cfg.selector).forEach((el) => {
            el.style.display = hasFlow ? "block" : "none";
        });
        if (!cfg.hideAddToCart) return;
        if (hasFlow) {
            const selector = atcSelector(injection);
            if (!selector) return;
            document.querySelectorAll(selector).forEach((btn) => {
                btn.style.display = "none";
                btn.setAttribute("data-iris-hidden-atc", "");
            });
        } else {
            document.querySelectorAll("[data-iris-hidden-atc]").forEach((btn) => {
                btn.style.display = "";
                btn.removeAttribute("data-iris-hidden-atc");
            });
        }
    }
    function watchVariantChanges(cfg) {
        let current = currentVariantId(cfg);
        const handle = () => {
            const next = currentVariantId(cfg);
            if (next && next !== current) {
                current = next;
                applyVariant(cfg, next);
            }
        };
        window.addEventListener("popstate", handle);
        const pushState = history.pushState;
        const replaceState = history.replaceState;
        history.pushState = function (...args) {
            pushState.apply(this, args);
            handle();
        };
        history.replaceState = function (...args) {
            replaceState.apply(this, args);
            handle();
        };
        document.addEventListener(
            "change",
            (event) => {
                const input = event.target;
                if (!input || input.name !== "id" || !input.value) return;
                if (String(input.value) === current) return;
                current = String(input.value);
                applyVariant(cfg, current);
            },
            true,
        );
    }
    function scrapeAdditionalInformations(ptSlug) {
        const props = {};
        const fields = document.querySelectorAll(
            'input[name^="la-properties"], select[name^="la-properties"], input[name^="_la-properties"], select[name^="_la-properties"]',
        );
        fields.forEach((field) => {
            const fieldPt = field.dataset ? field.dataset.prescriptionType : "";
            if (fieldPt && fieldPt !== ptSlug) return;
            const name = field.name.replace(/^(?:_)?la-properties\[|\]$/g, "");
            if (field.value && (field.type !== "radio" || field.checked)) {
                props[name] = field.value;
            }
        });
        return props;
    }
    function openOverlay(cfg) {
        if (!cfg.flowId) {
            console.warn("[iris] no flow is assigned to the current variant.");
            return;
        }
        document.dispatchEvent(
            new CustomEvent("LensAdvisor:selectLensModal:open", { detail: { flowId: cfg.flowId } }),
        );
        cfg.context.additional_informations = scrapeAdditionalInformations("");
        if (!storeExtrasApplied) {
            fetchRuntime(cfg).catch(() => {});
        }
        const layout = (cfg.runtime && cfg.runtime.layout) || "modal";
        mountOverlay(
            cfg,
            layout,
            cfg.runtime && cfg.runtime.contentSize,
            cfg.runtime && cfg.runtime.contentHeight,
        );
    }
    function mountOverlay(cfg, layout, contentSize, contentHeight) {
        if (document.querySelector("iris-root")) return null;
        const host = document.createElement("iris-root");
        document.body.appendChild(host);
        const shadow = host.attachShadow({ mode: "closed" });
        host.__shadow = shadow;
        shadow.innerHTML = buildShadowHTML(layout, contentSize, contentHeight);
        const lockTargets = [document.documentElement, document.body];
        let prevOverflows = null;
        let prevPaddingRight = "";
        const lockScroll = () => {
            if (prevOverflows) return;
            prevOverflows = lockTargets.map((el) => ({
                value: el.style.getPropertyValue("overflow"),
                priority: el.style.getPropertyPriority("overflow"),
            }));
            prevPaddingRight = document.body.style.paddingRight;
            const scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
            lockTargets.forEach((el) => el.style.setProperty("overflow", "hidden", "important"));
            if (scrollbarWidth > 0) document.body.style.paddingRight = `${scrollbarWidth}px`;
        };
        const unlockScroll = () => {
            if (!prevOverflows) return;
            lockTargets.forEach((el, index) => {
                const prev = prevOverflows[index];
                if (prev.value) el.style.setProperty("overflow", prev.value, prev.priority);
                else el.style.removeProperty("overflow");
            });
            document.body.style.paddingRight = prevPaddingRight;
            prevOverflows = null;
        };
        const opener = document.activeElement;
        const close = () => {
            unlockScroll();
            if (activeBridge) {
                activeBridge.stop();
                activeBridge = null;
            }
            host.remove();
            if (opener && opener.isConnected && typeof opener.focus === "function") opener.focus();
            document.dispatchEvent(
                new CustomEvent("LensAdvisor:selectLensModal:close", {
                    detail: { flowId: cfg.flowId },
                }),
            );
        };
        shadow.querySelector("[data-backdrop]").addEventListener("click", close);
        const onKey = (e) => {
            if (e.key === "Escape") {
                close();
                document.removeEventListener("keydown", onKey);
            }
        };
        document.addEventListener("keydown", onKey);
        const bridge = createBridge({
            peer: () => {
                const frame = shadow.querySelector("iframe");
                return frame && frame.contentWindow;
            },
            origin: cfg.apiBase,
            namespace: iris,
            // document, not window — the launcher's own lifecycle events
            // (LensAdvisor:init:*, LensAdvisor:selectLensModal:*) dispatch there,
            // so merchant scripts already listen on document. An emitted step
            // event has to land in the same place or half the events are
            // invisible to the same listener.
            eventTarget: document,
        });
        activeBridge = bridge;
        bridge.exposeAll({
            // Widget listener is live — deliver the context keys that can't ride
            // the URL (objects — additional_informations).
            ready: () => pushContextToIframe(cfg),
            close: () => close(),
            lockScroll: () => lockScroll(),
            unlockScroll: () => unlockScroll(),
            // Add-to-Cart imminent — re-read the page's _la-properties with the
            // selected PT so the BR carries final, gated values. Returned to the
            // caller, so the widget awaits one call instead of posting and
            // racing a timeout against a reply it can't correlate.
            rescrape: (pt) => {
                cfg.context.additional_informations = scrapeAdditionalInformations(pt || "");
                return { ...cfg.context };
            },
            // Throwing keeps the overlay open and rejects the widget's call, so
            // it can drop its spinner and toast the message; the customer retries
            // without losing the walked flow state.
            addToCart: async (payload) => {
                if (!cfg.onAddToCart) {
                    console.warn(
                        "[iris] add to cart requested but no onAddToCart callback was provided in init().",
                    );
                    close();
                    return;
                }
                await cfg.onAddToCart(payload || {});
                if (cfg.platform === "shopify") {
                    await appendBundleCartAttribute((payload || {}).bundle_request_id);
                } else {
                    const hook =
                        typeof iris.postAddToCart === "function"
                            ? iris.postAddToCart
                            : window.LensAdvisor && window.LensAdvisor.postAddToCart;
                    if (iris.addToCartCustomEvent && typeof hook === "function") {
                        try {
                            await hook(payload || {});
                        } catch (err) {
                            console.error("[iris] postAddToCart threw:", err);
                        }
                    }
                }
                close();
            },
        });
        bridge.start();
        shadow.querySelectorAll("[data-sentinel]").forEach((sentinel) => {
            sentinel.addEventListener("focus", () => {
                bridge.notify(sentinel.dataset.sentinel === "start" ? "focusLast" : "focusFirst");
            });
        });
        const iframe = shadow.querySelector("iframe");
        const loader = shadow.querySelector(".loader");
        requestAnimationFrame(() =>
            requestAnimationFrame(() => {
                iframe.addEventListener("load", () => {
                    loader.classList.add("hidden");
                    iframe.focus();
                });
                iframe.src = buildWidgetUrl(cfg);
            }),
        );
        return host;
    }
    function appendBundleCartAttribute(bundleRequestId) {
        if (!bundleRequestId) return Promise.resolve();
        const root = (window.Shopify && window.Shopify.routes && window.Shopify.routes.root) || "/";
        const attributes = {};
        attributes["_iris_bundle_id_" + bundleRequestId] = bundleRequestId;
        return fetch(root + "cart/update.js", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ attributes }),
        }).catch((err) => {
            console.warn("[iris] _iris_bundle_id cart attribute update failed:", err);
        });
    }
    function buildWidgetUrl(cfg) {
        const params = new URLSearchParams({ flow_id: cfg.flowId });
        if (cfg.platform) params.set("platform", cfg.platform);
        for (const [k, v] of Object.entries(cfg.context)) {
            if (v != null && v !== "" && typeof v !== "object") {
                params.set(k, String(v));
            }
        }
        return `${cfg.apiBase}${WIDGET_PATH}?${params.toString()}`;
    }
    function buildShadowHTML(layout, contentSize, contentHeight) {
        const panelClass = ["drawer", "horizontal", "horizontal-boxy"].includes(layout)
            ? layout
            : "modal";
        const size = parseInt(contentSize, 10);
        const height = parseInt(contentHeight, 10);
        const vars = [];
        if (["modal", "drawer"].includes(panelClass) && size >= 20 && size <= 90) {
            vars.push(`--la-panel-width: ${size}vw`);
        }
        if (panelClass === "modal" && height >= 40 && height <= 92) {
            vars.push(`--la-panel-height: ${height}vh`);
        }
        const panelStyle = vars.length ? ` style="${vars.join("; ")}"` : "";
        return `<style>
        :host {
            all: initial;
            position: fixed; inset: 0;
            z-index: 2147483647;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }
        .backdrop {
            position: absolute; inset: 0;
            background: rgba(0, 0, 0, 0.5);
            animation: fade-in 0.18s ease-out;
        }
        /* Full-takeover layouts cover the viewport — no dim backdrop to
           click behind, so suppress it (the element stays for the
           close-on-click listener; it's just hidden). */
        .backdrop.fullscreen { display: none; }
        /* Base panel — only shared chrome. Position/size/animation come
           from the layout-specific class so the two never fight. */
        .panel {
            position: absolute; background: #fff;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            display: flex; flex-direction: column;
            overflow: hidden;
        }
        /* Modal/drawer width bands — settings.layout.content_size (the
           inline --la-panel-width, in vw) is a DESKTOP concept:
             > 1200px  merchant width applies (media query below)
             768-1200  tuned defaults (30% of a tablet is unusable)
             < 768px   full width (drawer) / 92vw (modal) */
        .panel.modal {
            top: 50%; left: 50%;
            width: min(640px, 92vw);
            height: min(var(--la-panel-height, 720px), 92vh);
            height: min(var(--la-panel-height, 720px), 92dvh);
            border-radius: 12px;
            animation: pop-in 0.22s ease-out both;
        }
        .panel.drawer {
            top: 0; right: 0; bottom: 0;
            height: 100%;
            width: min(560px, 100vw);
            animation: slide-in 0.22s ease-out both;
        }
        @media (min-width: 1200px) {
            .panel.modal { width: min(var(--la-panel-width, 640px), 92vw); }
            .panel.drawer { width: min(var(--la-panel-width, 560px), 100vw); }
        }
        /* Full-takeover layouts — the widget owns the responsive collapse
           internally; the launcher panel is just full-viewport at all widths. */
        .panel.horizontal, .panel.horizontal-boxy {
            /* Sized by inset alone — an explicit 100vh overrides bottom:0
               and overshoots the REAL viewport inside in-app browsers
               (Slack's webview), hanging the iframe's footer below the
               fold. The absolutely-positioned panel inside the fixed
               inset-0 host tracks the actual visible area with no
               viewport units at all. */
            top: 0; left: 0; right: 0; bottom: 0;
            border-radius: 0; box-shadow: none;
            animation: fade-in 0.18s ease-out both;
        }
        @media (max-width: 767.98px) {
            .panel.drawer { width: 100vw; }
            .panel.modal { width: 92vw; }
        }
        .close {
            position: absolute; top: 12px; right: 12px;
            width: 32px; height: 32px; border-radius: 16px; border: 0;
            background: rgba(0, 0, 0, 0.06); cursor: pointer; font-size: 18px;
            line-height: 1; color: #111;
            z-index: 2;
        }
        .close:hover { background: rgba(0, 0, 0, 0.1); }
        .body {
            position: relative;
            flex: 1; display: flex;
        }
        iframe {
            flex: 1; width: 100%; border: 0; background: transparent;
        }
        .loader {
            position: absolute; inset: 0;
            display: flex; flex-direction: column; gap: 14px;
            align-items: center; justify-content: center;
            background: #fff;
            transition: opacity 180ms ease;
        }
        .loader-text {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            font-size: 13px;
            color: #6b7280;
        }
        .loader.hidden {
            opacity: 0;
            pointer-events: none;
        }
        .spinner {
            width: 36px; height: 36px;
            border: 3px solid rgba(0, 0, 0, 0.08);
            border-top-color: #2563eb;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
        @keyframes fade-in { from { opacity: 0; } to { opacity: 1; } }
        @keyframes slide-in { from { transform: translateX(100%); } to { transform: translateX(0); } }
        /* Modal centers via translate(-50%,-50%); pop-in nudges + fades. */
        .panel.modal { transform: translate(-50%, -50%); }
        @keyframes pop-in {
            from { opacity: 0; transform: translate(-50%, -46%) scale(0.96); }
            to   { opacity: 1; transform: translate(-50%, -50%) scale(1); }
        }
        /* Focus-trap sentinels: focusable but invisible. display:none or
           visibility:hidden would drop them from the tab order, which is
           their whole job — so they hide by size/opacity instead. */
        .sentinel {
            position: absolute;
            width: 1px; height: 1px;
            opacity: 0;
            overflow: hidden;
        }
    </style>
    <div class="backdrop ${layout === "horizontal" || layout === "horizontal-boxy" ? "fullscreen" : ""}" data-backdrop></div>
    <div class="panel ${panelClass}"${panelStyle} role="dialog" aria-modal="true" aria-label="LensAdvisor">
        <span class="sentinel" data-sentinel="start" tabindex="0"></span>
        <div class="body">
            <iframe
                title="LensAdvisor"
                allow="clipboard-write; camera; microphone; local-network-access"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            <div class="loader">
                <div class="spinner"></div><div class="loader-text">Loading...</div>
            </div>
        </div>
        <span class="sentinel" data-sentinel="end" tabindex="0"></span>
    </div>`;
    }
    class LensAdvisorButton extends HTMLElement {
        connectedCallback() {
            if (!this.getAttribute("flow-id")) {
                this.style.display = "none";
                return;
            }
            this.setAttribute("role", "button");
            this.setAttribute("tabindex", "0");
            const s = this.style;
            if (!s.cursor) s.cursor = "pointer";
            if (!s.display) s.display = "block";
            if (!s.width) s.width = "100%";
            if (!s.textAlign) s.textAlign = "center";
            if (!s.margin) s.margin = "5px 0px";
            if (!s.padding) s.padding = "8px";
            this.addEventListener("click", () => this._open());
            const config = (window.LensAdvisor && window.LensAdvisor.config) || {};
            setTranslations(config.translations);
            applyButtonStyles(this, this._settings().storefront_button || {});
        }
        // The flow's settings (layout, button CSS/text, display toggles), read
        // straight from the tag's `settings` attribute — no API call.
        _settings() {
            try {
                return JSON.parse(this.getAttribute("settings") || "{}").settings || {};
            } catch (e) {
                return {};
            }
        }
        _open() {
            const flowId = this.getAttribute("flow-id");
            if (!flowId) return;
            const config = (window.LensAdvisor && window.LensAdvisor.config) || {};
            iris.open({
                flowId,
                platform: config.platform || "shopify",
                apiBase: config.apiBase,
                hideAddToCart: config.hideAddToCart,
                onAddToCart: config.onAddToCart,
                settings: this._settings(),
                context: {
                    ...(config.context || {}),
                    product_id: this.getAttribute("product-id"),
                    variant_id: this.getAttribute("variant-id"),
                    price: this.getAttribute("price"),
                    image: this.getAttribute("image"),
                    frame_name: this.getAttribute("frame-name"),
                    frame_sku: this.getAttribute("frame-sku"),
                },
            });
        }
    }
    if (
        typeof window !== "undefined" &&
        window.customElements &&
        !window.customElements.get("lensadvisor-btn")
    ) {
        window.customElements.define("lensadvisor-btn", LensAdvisorButton);
    }
    if (typeof window !== "undefined") {
        window.iris = iris;
        window.LensAdvisor = window.LensAdvisor || {};
        window.LensAdvisor.iris = iris;
    }
    return iris;
})();
