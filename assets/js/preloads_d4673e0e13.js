
    (function() {
      var preconnectOrigins = ["https://cdn.shopify.com","https://extensions.shopifycdn.com"];
      var scripts = ["/cdn/shopifycloud/checkout-web/assets/c1/polyfills.Db3KX98s.js","/cdn/shopifycloud/checkout-web/assets/c1/app.CXtRp3i3.js","/cdn/shopifycloud/checkout-web/assets/c1/esnext-vendor.Dqyj125j.js","/cdn/shopifycloud/checkout-web/assets/c1/context-browser.DOFRZ-r4.js","/cdn/shopifycloud/checkout-web/assets/c1/checkout-policy.C2Cwz0Ei.js","/cdn/shopifycloud/checkout-web/assets/c1/helpers-installmentsNotSupportedForAddress.Bybh2nNo.js","/cdn/shopifycloud/checkout-web/assets/c1/receipt-mapper-load-recovery.BYbrftZn.js","/cdn/shopifycloud/checkout-web/assets/c1/receipt-eager-mappers.CVvmJYbJ.js","/cdn/shopifycloud/checkout-web/assets/c1/consent-manager-shared.DAs-KGQg.js","/cdn/shopifycloud/checkout-web/assets/c1/sections-shared.C7TAMJx2.js","/cdn/shopifycloud/checkout-web/assets/c1/error-logger-report-graphql-error.Ddp2Ibpx.js","/cdn/shopifycloud/checkout-web/assets/c1/shop-pay-normalizeBuyerDetails.CeqPVyS0.js","/cdn/shopifycloud/checkout-web/assets/c1/helpers-derivations.BlcznGm_.js","/cdn/shopifycloud/checkout-web/assets/c1/utilities-shopCashMoney.CAHSOHtn.js","/cdn/shopifycloud/checkout-web/assets/c1/color-contrast-colorContrast.CbZpj7-L.js","/cdn/shopifycloud/checkout-web/assets/c1/graphql-redeemable.CqLuOA3V.js","/cdn/shopifycloud/checkout-web/assets/c1/hydrate.DeP6DaKs.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useShopPayExternalAppContext.Hfrruks6.js","/cdn/shopifycloud/checkout-web/assets/c1/locale-en.BqHdjmAI.js","/cdn/shopifycloud/checkout-web/assets/c1/OnePage.DJ3jmODh.js","/cdn/shopifycloud/checkout-web/assets/c1/components-DeliveryTransition.BocULuNA.js","/cdn/shopifycloud/checkout-web/assets/c1/useShopPayButtonClassName.RgQ9IfZj.js","/cdn/shopifycloud/checkout-web/assets/c1/cross-border-hooks.C7s1l99V.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-usePickupPoints.CXII3I83.js","/cdn/shopifycloud/checkout-web/assets/c1/ChangeCompanyLocationLink.BO8K6qOQ.js","/cdn/shopifycloud/checkout-web/assets/c1/BillingAddressForm.CCo6x7zJ.js","/cdn/shopifycloud/checkout-web/assets/c1/PhoneField._uP2x-bL.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useSuppressShopPayModalOnLoad.B9U2HH5V.js","/cdn/shopifycloud/checkout-web/assets/c1/components-RedirectionNotice.module.ZVp34LP0.js","/cdn/shopifycloud/checkout-web/assets/c1/Popover.-UdC0dq4.js","/cdn/shopifycloud/checkout-web/assets/c1/Choice.CWR8CZky.js","/cdn/shopifycloud/checkout-web/assets/c1/Checkbox.BqhC_MTg.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useCanChangeCompanyLocation.DS6wCUnv.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useForceShopPayUrl.BoLOx1qJ.js","/cdn/shopifycloud/checkout-web/assets/c1/ImpressionEventCapture.ByJ6DwXG.js","/cdn/shopifycloud/checkout-web/assets/c1/utilities-previous.B1Al1795.js","/cdn/shopifycloud/checkout-web/assets/c1/CaptureEvents-ButtonWithRegisterWebPixel.Bx8ujyC0.js","/cdn/shopifycloud/checkout-web/assets/c1/ShopPayLogo.lg2Iebtg.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useWalletsTimeout.tiYCIW-W.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-usePostPurchase.0rN4BVhn.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useWalletsMonorailTrack.D5flaLXM.js","/cdn/shopifycloud/checkout-web/assets/c1/EmptyState.CR4S57nz.js","/cdn/shopifycloud/checkout-web/assets/c1/Section-SectionStyleOverride.DLCMJKDp.js","/cdn/shopifycloud/checkout-web/assets/c1/AutocompleteField-hooks.C1R0LIbh.js","/cdn/shopifycloud/checkout-web/assets/c1/PendingShipping.BufLNndg.js","/cdn/shopifycloud/checkout-web/assets/c1/RememberMeSection.DoBky5a4.js","/cdn/shopifycloud/checkout-web/assets/c1/PaymentIcon.CCPtpm1X.js","/cdn/shopifycloud/checkout-web/assets/c1/cvv-cvvBridge.C3XuIbuc.js","/cdn/shopifycloud/checkout-web/assets/c1/payment-usePaymentExemptionReason.BA5Y1aLP.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useGeneralPaymentErrorMessage.DpshqbQt.js","/cdn/shopifycloud/checkout-web/assets/c1/PaymentLine.BljcKcPT.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useUpdateCheckoutAddress.CvyPU20j.js","/cdn/shopifycloud/checkout-web/assets/c1/Section.BJdpgz7D.js","/cdn/shopifycloud/checkout-web/assets/c1/PaymentErrorBanner.Bhep8eh7.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useOnePageFormSubmit.BZOi-dCI.js","/cdn/shopifycloud/checkout-web/assets/c1/PaymentButtons.Dcq0y2hj.js","/cdn/shopifycloud/checkout-web/assets/c1/PayButton-sizing.CzEzBoIZ.js","/cdn/shopifycloud/checkout-web/assets/c1/useShopPaySessionTokenStorage.Bo13Ki6W.js","/cdn/shopifycloud/checkout-web/assets/c1/sandbox-helpers.DlsqjCPs.js","/cdn/shopifycloud/checkout-web/assets/c1/utils-useViolationsHandler.BSF5Zz3z.js","/cdn/shopifycloud/checkout-web/assets/c1/checkout-as-guest-amazon-pay.CGr46lHF.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-payment-button.DdkwrZ44.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useShouldRevealExtension.BaDdPDQ4.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-usePreselectSpi.Doj9O0yO.js","/cdn/shopifycloud/checkout-web/assets/c1/Switch.D60kVcFm.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useAvailableShopPromotionDiscounts.D0Kplri6.js","/cdn/shopifycloud/checkout-web/assets/c1/Middot.BrP8KdBH.js","/cdn/shopifycloud/checkout-web/assets/c1/EstimatedDeliveryContent.DpgLvGs7.js","/cdn/shopifycloud/checkout-web/assets/c1/shipping-methods-consolidated-included.9jXXjmPO.js","/cdn/shopifycloud/checkout-web/assets/c1/ShippingLines.CHRWzyyj.js","/cdn/shopifycloud/checkout-web/assets/c1/ShipmentBreakdown.DXm0v3Wo.js","/cdn/shopifycloud/checkout-web/assets/c1/MerchandiseModal.Dis-ZwRk.js","/cdn/shopifycloud/checkout-web/assets/c1/ShippingMethodSelector.B05ITiOv.js","/cdn/shopifycloud/checkout-web/assets/c1/TextArea.BzQ5BV-L.js","/cdn/shopifycloud/checkout-web/assets/c1/SubscriptionPriceBreakdown.DxgAEEXO.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useShopPayNewSignupLoginExperiment.Fs21R-Zg.js","/cdn/shopifycloud/checkout-web/assets/c1/MobileOrderSummary.D67EfPk_.js","/cdn/shopifycloud/checkout-web/assets/c1/hooks-useStableHostMethodsReferences.QIJwDNlv.js","/cdn/shopifycloud/checkout-web/assets/c1/BillingAddressSelector.B2azpzgu.js","/cdn/shopifycloud/checkout-web/assets/c1/StockProblems-StockProblemsLineItemList.Ui0Bm-rP.js","/cdn/shopifycloud/checkout-web/assets/c1/extensibility-browser-engine.ClMNiXLu.js","/cdn/shopifycloud/checkout-web/assets/c1/utilities-extension-execution-errors.DRRMnW6G.js","/cdn/shopifycloud/checkout-web/assets/c1/performance-index.B-SecsVc.js","/cdn/shopifycloud/checkout-web/assets/c1/extensions-rpc.CUMyYP4T.js","/cdn/shopifycloud/checkout-web/assets/c1/component-RuntimeExtension.BKScwXbD.js","/cdn/shopifycloud/checkout-web/assets/c1/AnnouncementRuntimeExtensions.DhiHtTPH.js","/cdn/shopifycloud/checkout-web/assets/c1/QRCode.CQ-aPPRz.js","/cdn/shopifycloud/checkout-web/assets/c1/utilities-dates.ChO2GdxN.js","/cdn/shopifycloud/checkout-web/assets/c1/NumberField.Cp3dKfHG.js","/cdn/shopifycloud/checkout-web/assets/c1/extensions-remote-dom.GvnH009d.js","/cdn/shopifycloud/checkout-web/assets/c1/EmailField.AOf1yudn.js","/cdn/shopifycloud/checkout-web/assets/c1/Sheet.B1J5-FcU.js","/cdn/shopifycloud/checkout-web/assets/c1/extension-targets-rendering-extension-targets.DHiyOTgR.js","/cdn/shopifycloud/checkout-web/assets/c1/dist-v4.EwEgHOG0.js","/cdn/shopifycloud/checkout-web/assets/c1/ExtensionsInner.BfqEIa8K.js","/cdn/shopifycloud/checkout-web/assets/c1/adapter-host.B__zZUWy.js","/cdn/shopifycloud/checkout-web/assets/c1/sandbox.CPHgddd6.worker.js","/cdn/shopifycloud/checkout-web/assets/c1/sandbox-2025-07.Dj7kyiOY.worker.js","https://extensions.shopifycdn.com/shopifycloud/checkout-web/assets/c1/polyfills-entry-modern.DzNfZ5Oj.worker.js"];
      var styles = ["/cdn/shopifycloud/checkout-web/assets/c1/assets/app.CM6PQxCl.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/checkout-policy.Dy6nOzcc.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/stopwatch.CA9UAEYG.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/OnePage.DkWpx8b4.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/DeliveryTransition.CxmS455s.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/RememberMeSection.DQeXjG1A.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/Section.CU18S7Ap.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/PaymentLine.D3bcP-mr.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/useOnePageFormSubmit.tSP6pJcp.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/PaymentIcon.gzvCNwz_.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/cvvBridge.CIy8uDiZ.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/Choice.DNWz77j7.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/sizing.ZgfJ23-d.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/BillingAddressForm.BdwN7V1K.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/Switch.Dq_6Ius6.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/EmptyState.BEvzDDvy.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/useShopPayButtonClassName.CpHF4L7Q.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/PhoneField.uZEuHncj.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/Middot.D7Ujmshx.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/ShippingLines.LcqrKXE1.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/MerchandiseModal.D6OuIVjc.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/RedirectionNotice.B8v_QGNW.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/EstimatedDeliveryContent.B_THySFF.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/MobileOrderSummary.2B5x30PG.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/PaymentButtons.BbF1yV61.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/RuntimeExtension.DWkDBM73.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/AnnouncementRuntimeExtensions.DWE5rRxz.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/QRCode.BZ_m5G5a.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/Checkbox.CfwUdlpL.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/Popover.Bi1nHaU-.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/NumberField.CRpcZnVJ.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/Sheet.BXWsWJJp.css","/cdn/shopifycloud/checkout-web/assets/c1/assets/useShopPaySessionTokenStorage.DfWUBaTh.css"];
      var fontPreconnectUrls = [];
      var fontPrefetchUrls = [];
      var imgPrefetchUrls = ["https://cdn.shopify.com/s/files/1/0751/8073/6750/files/smith-logo-desktop_x320.png?v=1758670583"];

      function preconnect(url, callback) {
        var link = document.createElement('link');
        link.rel = 'dns-prefetch preconnect';
        link.href = url;
        link.crossOrigin = '';
        link.onload = link.onerror = callback;
        document.head.appendChild(link);
      }

      function preconnectAssets() {
        var resources = preconnectOrigins.concat(fontPreconnectUrls);
        var index = 0;
        (function next() {
          var res = resources[index++];
          if (res) preconnect(res, next);
        })();
      }

      function prefetch(url, as, callback) {
        var link = document.createElement('link');
        if (link.relList.supports('prefetch')) {
          link.rel = 'prefetch';
          link.fetchPriority = 'low';
          link.as = as;
          if (as === 'font') link.type = 'font/woff2';
          link.href = url;
          link.crossOrigin = '';
          link.onload = link.onerror = callback;
          document.head.appendChild(link);
        } else {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', url, true);
          xhr.onloadend = callback;
          xhr.send();
        }
      }

      function prefetchAssets() {
        var resources = [].concat(
          scripts.map(function(url) { return [url, 'script']; }),
          styles.map(function(url) { return [url, 'style']; }),
          fontPrefetchUrls.map(function(url) { return [url, 'font']; }),
          imgPrefetchUrls.map(function(url) { return [url, 'image']; })
        );
        var index = 0;
        function run() {
          var res = resources[index++];
          if (res) prefetch(res[0], res[1], next);
        }
        var next = (self.requestIdleCallback || setTimeout).bind(self, run);
        next();
      }

      function onLoaded() {
        try {
          if (parseFloat(navigator.connection.effectiveType) > 2 && !navigator.connection.saveData) {
            preconnectAssets();
            prefetchAssets();
          }
        } catch (e) {}
      }

      if (document.readyState === 'complete') {
        onLoaded();
      } else {
        addEventListener('load', onLoaded);
      }
    })();
  