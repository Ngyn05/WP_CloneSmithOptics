<html class="js" lang="vi">
  <head>
<script id="smith-vietnamese-render-guard">
  document.documentElement.classList.add('smith-i18n-pending');
  window.setTimeout(function () {
    document.documentElement.classList.remove('smith-i18n-pending');
  }, 2500);
</script>
<style id="smith-vietnamese-render-guard-style">
  html.smith-i18n-pending .smith-source-snapshot,
  html.smith-i18n-pending .smith-page-source-snapshot,
  html.smith-i18n-pending .smith-page-source-snapshot--reviews {
    visibility: hidden !important;
  }
</style>
<script id="privacy-fix">
    window.Shopify = window.Shopify || {};
    window.Shopify.analyticsProcessingAllowed = true;
    window.Shopify.marketingAllowed = true;
    window.Shopify.preferencesProcessingAllowed = true;
    window.Shopify.saleOfDataAllowed = true;
    window.Shopify.customerPrivacy = {
        getTrackingConsent: function(){ return "yes"; },
        setTrackingConsent: function(c, cb){ if(cb) cb({error:null}); },
        userCanBeTracked: function(){ return true; },
        getRegulation: function(){ return ""; },
        getShopPrefs: function(){ return {}; },
        shouldShowGDPRBanner: function(){ return false; },
        userDataCanBeSold: function(){ return true; },
        analyticsProcessingAllowed: function(){ return true; },
        marketingAllowed: function(){ return true; },
        preferencesProcessingAllowed: function(){ return true; },
        saleOfDataAllowed: function(){ return true; },
        analyticsAllowed: function(){ return true; },
        marketingProcessingAllowed: function(){ return true; },
        currentVisitorConsent: function(){ return { analytics:"yes", marketing:"yes", preferences:"yes", sale_of_data:"yes" }; }
    };
</script>

<style id="instant-render-fix">
    html, body {
        background-color: #ffffff !important;
        color: #181818 !important;
        opacity: 1 !important;
        visibility: visible !important;
        display: block !important;
    }
    body.gradient {
        background: #ffffff !important;
    }
    .boost-sd__modal-backdrop, .boost-sd__bis-popup-backdrop {
        display: none !important;
    }
</style>
<!-- Loomi Script Removed -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/smith-local-interactivity.js?ver=<?php echo rawurlencode(SMITH_THEME_VERSION); ?>"></script>


    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600;1,700&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="preconnect" href="<?php echo get_template_directory_uri(); ?>/assets/misc/asset_bb9821a468.bin" crossorigin=""><link rel="preconnect" href="https://assets.visually.io"><link rel="preconnect" href="https://www.googletagmanager.com"><link rel="preconnect" href="https://www.lightboxcdn.com"><link rel="preload" as="font" type="font/woff2" crossorigin="" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Graphik-Regular_cbe1db55b7.woff2">
  <link rel="preload" as="font" type="font/woff2" crossorigin="" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Graphik-Semibold_b3ce14d55e.woff2"><link rel="dns-prefetch" href="https://static.klaviyo.com">
<link rel="dns-prefetch" href="https://a.klaviyo.com"><link rel="dns-prefetch" href="https://live.visually-io.com"><link rel="dns-prefetch" href="https://smithoptics.locally.com">

    <!--LOOMI SDK-->
<!--DO NOT EDIT-->
<!--Start - Anti Flicker-->


<!-- Loomi Script Removed -->
<!--End - Anti Flicker-->
<link rel="preconnect" href="https://live.visually-io.com/" crossorigin="" data-em-disable="">
<link rel="dns-prefetch" href="https://live.visually-io.com/" data-em-disable="">
<link href="https://assets.visually.io/vsly/lib/visually.js?cb=e9ab902a" rel="preload" as="script" data-em-disable="">
<link href="https://assets.visually.io/widgets/vsly-preact.min.js" rel="preload" as="script" data-em-disable="">
<!--LOOMI SDK-->


    

    <meta name="theme-color" content="">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-1-dark_2627276f2b.png">
    <?php
    // Các URL snapshot được router phục vụ trực tiếp nên cần lấy metadata từ
    // Page đã đồng bộ. Các URL WordPress chuẩn tiếp tục do Yoast xuất bên dưới.
    $smith_header_page = function_exists('smith_current_database_route') ? smith_current_database_route() : null;
    if ($smith_header_page instanceof WP_Post) {
        $smith_route_title = get_post_meta($smith_header_page->ID, '_yoast_wpseo_title', true);
        $smith_route_description = get_post_meta($smith_header_page->ID, '_yoast_wpseo_metadesc', true);
        echo '<title>' . esc_html($smith_route_title) . '</title>' . "\n";
        echo '<meta name="description" content="' . esc_attr($smith_route_description) . '">' . "\n";
        echo '<link rel="canonical" href="' . esc_url(smith_database_route_canonical(home_url('/'))) . '">' . "\n";
    }
    ?>

    
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/constants_7d0457c608.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/pubsub_2702fd1ca5.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/global_71f0c9eb1a.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/details-disclosure_0ce44b2809.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/details-modal_d269b2ea34.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/search-form_fb4f270fdf.js" defer></script>

    <!-- Add customer tags to cart for Elevar -->
    
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/animations_e3c7824c61.js" defer></script>
    
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/lensadvizor-widget.min_3bd6e41657.css" as="style" crossorigin="">
    
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/asset_4c3b5ac78a.css" as="style">

    
    
    

    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/75180736750/digital_wallets/dialog">
<meta name="shopify-checkout-api-token" content="5bc93d8df1233cfea0cfd8d703fac12b">
<meta id="in-context-paypal-metadata" data-shop-id="75180736750" data-venmo-supported="true" data-environment="production" data-locale="en_US" data-paypal-v4="true" data-currency="USD">
<link rel="alternate" hreflang="x-default" href="<?php echo get_template_directory_uri(); ?>/assets/misc/en-us_5a1455af2c.bin">







<link rel="preconnect" href="https://shop.app" crossorigin="anonymous">
<script async="async" src="https://shop.app/checkouts/internal/preloads.js?locale=en-US&amp;configuration_id=3770417390&amp;edited_at=1775056336&amp;shop_id=75180736750" crossorigin="anonymous"></script>
<script id="apple-pay-shop-capabilities" type="application/json">{"shopId":75180736750,"countryCode":"US","currencyCode":"USD","merchantCapabilities":["supports3DS"],"merchantId":"gid:\/\/shopify\/Shop\/75180736750","merchantName":"Smith Optics","requiredBillingContactFields":["postalAddress","email","phone"],"requiredShippingContactFields":["postalAddress","email","phone"],"shippingType":"shipping","supportedNetworks":["visa","masterCard","amex","discover","elo","jcb"],"total":{"type":"pending","label":"Smith Optics","amount":"1.00"},"shopifyPaymentsEnabled":true,"supportsSubscriptions":true}</script>
<script id="shopify-features" type="application/json">{"accessToken":"5bc93d8df1233cfea0cfd8d703fac12b","betas":["rich-media-storefront-analytics"],"domain":"www.smithoptics.com","predictiveSearch":true,"shopId":75180736750,"locale":"en"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "v8pti0-6j.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"USD","rate":"1.0"};
Shopify.country = "US";
Shopify.theme = {"name":"Production | eHouse","id":165441208558,"schema_name":"Dawn","schema_version":"15.3.0","theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "www.smithoptics.com/cdn";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/en-us/";
Shopify.shopJsCdnBaseUrl = "https://cdn.shopify.com/shopifycloud/shop-js";
Shopify.SignInWithShop = Shopify.SignInWithShop || {};
Shopify.SignInWithShop.User = Shopify.SignInWithShop.User || {};
Shopify.SignInWithShop.User.recognized = false;</script>
<script>
  window.ShopifyPay = window.ShopifyPay || { redirectState: null, apiHost: "" };
  window.Shopify = window.Shopify || {};
  window.Shopify.routes = window.Shopify.routes || { root: "/" };
</script>
<link id="shopify-accelerated-checkout-styles" rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/assets/css/asset_4c3b5ac78a.css" crossorigin="anonymous">
<style id="shopify-accelerated-checkout-cart">
        #shopify-buyer-consent {
  margin-top: 1em;
  display: inline-block;
  width: 100%;
}

#shopify-buyer-consent.hidden {
  display: none;
}

#shopify-subscription-policy-button {
  background: none;
  border: none;
  padding: 0;
  text-decoration: underline;
  font-size: inherit;
  cursor: pointer;
}

#shopify-subscription-policy-button::before {
  box-shadow: none;
}

      </style>
<script id="sections-script" data-sections="header" defer src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts_c765ff4169.js"></script>
<script id="snippets-script" data-snippets="elevar-customizations" defer src="<?php echo get_template_directory_uri(); ?>/assets/js/snippet-scripts_9b322c0d34.js"></script>
<script id="shopify-cfh-end">window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>

    <style data-shopify="">
      
        :root,
        .color-scheme-1 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        

        

        --color-foreground: 24,24,24;
        --color-background-contrast: 191,191,191;
        --color-shadow: 24,24,24;
        --color-button: 24,24,24;
        --color-button-text: 255,255,255;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 24,24,24;
        --color-link: 24,24,24;
        --color-card-background: 245,245,245;
        --color-footer-link: 51,51,51;
        --color-disabled-unactive: 163,163,163;
        --color-horizontal-rule: 210,210,210;
        --color-highlight: 0,118,114;
        --color-badge-foreground: 24,24,24;
        --color-badge-background: 255,255,255;
        --color-badge-border: 24,24,24;
        --payment-terms-background-color: rgb(255 255 255);
      }

      /* MOBILE ONLY CLASS */
      .mobile-color-used.mobile-color-scheme-1 {
        @media screen and (max-width: 1199px) {
          --color-background: 255,255,255;
          
            --gradient-background: #ffffff;
          
          --color-foreground: 24,24,24;
          --color-background-contrast: 191,191,191;
          --color-shadow: 24,24,24;
          --color-button: 24,24,24;
          --color-button-text: 255,255,255;
          --color-secondary-button: 255,255,255;
          --color-secondary-button-text: 24,24,24;
          --color-link: 24,24,24;
          --color-footer-link: 51,51,51;
          --color-disabled-unactive: 163,163,163;
          --color-horizontal-rule: 210,210,210;
          --color-highlight: 0,118,114;
          --color-badge-foreground: 24,24,24;
          --color-badge-background: 255,255,255;
          --color-badge-border: 24,24,24;
          --payment-terms-background-color: rgb(255 255 255);
        }
      }
      
        
        .color-scheme-2 {
          --color-background: 245,245,245;
        
          --gradient-background: #f5f5f5;
        

        

        --color-foreground: 18,18,18;
        --color-background-contrast: 181,181,181;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 243,243,243;
        --color-secondary-button: 245,245,245;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-card-background: 245,245,245;
        --color-footer-link: 51,51,51;
        --color-disabled-unactive: 163,163,163;
        --color-horizontal-rule: 210,210,210;
        --color-highlight: 0,118,114;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 245,245,245;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(245 245 245);
      }

      /* MOBILE ONLY CLASS */
      .mobile-color-used.mobile-color-scheme-2 {
        @media screen and (max-width: 1199px) {
          --color-background: 245,245,245;
          
            --gradient-background: #f5f5f5;
          
          --color-foreground: 18,18,18;
          --color-background-contrast: 181,181,181;
          --color-shadow: 18,18,18;
          --color-button: 18,18,18;
          --color-button-text: 243,243,243;
          --color-secondary-button: 245,245,245;
          --color-secondary-button-text: 18,18,18;
          --color-link: 18,18,18;
          --color-footer-link: 51,51,51;
          --color-disabled-unactive: 163,163,163;
          --color-horizontal-rule: 210,210,210;
          --color-highlight: 0,118,114;
          --color-badge-foreground: 18,18,18;
          --color-badge-background: 245,245,245;
          --color-badge-border: 18,18,18;
          --payment-terms-background-color: rgb(245 245 245);
        }
      }
      
        
        .color-scheme-3 {
          --color-background: 36,40,51;
        
          --gradient-background: #242833;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 47,52,66;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 24,24,24;
        --color-secondary-button: 36,40,51;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-card-background: 245,245,245;
        --color-footer-link: 51,51,51;
        --color-disabled-unactive: 163,163,163;
        --color-horizontal-rule: 210,210,210;
        --color-highlight: 0,118,114;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 36,40,51;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(36 40 51);
      }

      /* MOBILE ONLY CLASS */
      .mobile-color-used.mobile-color-scheme-3 {
        @media screen and (max-width: 1199px) {
          --color-background: 36,40,51;
          
            --gradient-background: #242833;
          
          --color-foreground: 255,255,255;
          --color-background-contrast: 47,52,66;
          --color-shadow: 18,18,18;
          --color-button: 255,255,255;
          --color-button-text: 24,24,24;
          --color-secondary-button: 36,40,51;
          --color-secondary-button-text: 255,255,255;
          --color-link: 255,255,255;
          --color-footer-link: 51,51,51;
          --color-disabled-unactive: 163,163,163;
          --color-horizontal-rule: 210,210,210;
          --color-highlight: 0,118,114;
          --color-badge-foreground: 255,255,255;
          --color-badge-background: 36,40,51;
          --color-badge-border: 255,255,255;
          --payment-terms-background-color: rgb(36 40 51);
        }
      }
      
        
        .color-scheme-4 {
          --color-background: 18,18,18;
        
          --gradient-background: #121212;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 146,146,146;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 18,18,18;
        --color-secondary-button: 18,18,18;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-card-background: 245,245,245;
        --color-footer-link: 51,51,51;
        --color-disabled-unactive: 163,163,163;
        --color-horizontal-rule: 210,210,210;
        --color-highlight: 0,118,114;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 18,18,18;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(18 18 18);
      }

      /* MOBILE ONLY CLASS */
      .mobile-color-used.mobile-color-scheme-4 {
        @media screen and (max-width: 1199px) {
          --color-background: 18,18,18;
          
            --gradient-background: #121212;
          
          --color-foreground: 255,255,255;
          --color-background-contrast: 146,146,146;
          --color-shadow: 18,18,18;
          --color-button: 255,255,255;
          --color-button-text: 18,18,18;
          --color-secondary-button: 18,18,18;
          --color-secondary-button-text: 255,255,255;
          --color-link: 255,255,255;
          --color-footer-link: 51,51,51;
          --color-disabled-unactive: 163,163,163;
          --color-horizontal-rule: 210,210,210;
          --color-highlight: 0,118,114;
          --color-badge-foreground: 255,255,255;
          --color-badge-background: 18,18,18;
          --color-badge-border: 255,255,255;
          --payment-terms-background-color: rgb(18 18 18);
        }
      }
      
        
        .color-scheme-5 {
          --color-background: 0,118,114;
        
          --gradient-background: #007672;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 0,0,0;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 0,118,114;
        --color-secondary-button: 0,118,114;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-card-background: 245,245,245;
        --color-footer-link: 51,51,51;
        --color-disabled-unactive: 163,163,163;
        --color-horizontal-rule: 210,210,210;
        --color-highlight: 0,118,114;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 0,118,114;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(0 118 114);
      }

      /* MOBILE ONLY CLASS */
      .mobile-color-used.mobile-color-scheme-5 {
        @media screen and (max-width: 1199px) {
          --color-background: 0,118,114;
          
            --gradient-background: #007672;
          
          --color-foreground: 255,255,255;
          --color-background-contrast: 0,0,0;
          --color-shadow: 18,18,18;
          --color-button: 255,255,255;
          --color-button-text: 0,118,114;
          --color-secondary-button: 0,118,114;
          --color-secondary-button-text: 255,255,255;
          --color-link: 255,255,255;
          --color-footer-link: 51,51,51;
          --color-disabled-unactive: 163,163,163;
          --color-horizontal-rule: 210,210,210;
          --color-highlight: 0,118,114;
          --color-badge-foreground: 255,255,255;
          --color-badge-background: 0,118,114;
          --color-badge-border: 255,255,255;
          --payment-terms-background-color: rgb(0 118 114);
        }
      }
      
        
        .color-scheme-9f2d5e41-56c3-48cd-9f9c-84d6c0a32fda {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 191,191,191;
        --color-shadow: 24,24,24;
        --color-button: 255,255,255;
        --color-button-text: 33,37,41;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 24,24,24;
        --color-link: 24,24,24;
        --color-card-background: 245,245,245;
        --color-footer-link: 51,51,51;
        --color-disabled-unactive: 163,163,163;
        --color-horizontal-rule: 210,210,210;
        --color-highlight: 0,118,114;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 255,255,255;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(255 255 255);
      }

      /* MOBILE ONLY CLASS */
      .mobile-color-used.mobile-color-scheme-9f2d5e41-56c3-48cd-9f9c-84d6c0a32fda {
        @media screen and (max-width: 1199px) {
          --color-background: 255,255,255;
          
            --gradient-background: #ffffff;
          
          --color-foreground: 255,255,255;
          --color-background-contrast: 191,191,191;
          --color-shadow: 24,24,24;
          --color-button: 255,255,255;
          --color-button-text: 33,37,41;
          --color-secondary-button: 255,255,255;
          --color-secondary-button-text: 24,24,24;
          --color-link: 24,24,24;
          --color-footer-link: 51,51,51;
          --color-disabled-unactive: 163,163,163;
          --color-horizontal-rule: 210,210,210;
          --color-highlight: 0,118,114;
          --color-badge-foreground: 255,255,255;
          --color-badge-background: 255,255,255;
          --color-badge-border: 255,255,255;
          --payment-terms-background-color: rgb(255 255 255);
        }
      }
      
        
        .color-scheme-0b1d22a0-20ea-41b6-90f7-ae0b5ab46b01 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        

        

        --color-foreground: 24,24,24;
        --color-background-contrast: 191,191,191;
        --color-shadow: 24,24,24;
        --color-button: 24,24,24;
        --color-button-text: 255,255,255;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 24,24,24;
        --color-link: 24,24,24;
        --color-card-background: 245,245,245;
        --color-footer-link: 51,51,51;
        --color-disabled-unactive: 163,163,163;
        --color-horizontal-rule: 210,210,210;
        --color-highlight: 0,118,114;
        --color-badge-foreground: 24,24,24;
        --color-badge-background: 255,255,255;
        --color-badge-border: 24,24,24;
        --payment-terms-background-color: rgb(255 255 255);
      }

      /* MOBILE ONLY CLASS */
      .mobile-color-used.mobile-color-scheme-0b1d22a0-20ea-41b6-90f7-ae0b5ab46b01 {
        @media screen and (max-width: 1199px) {
          --color-background: 255,255,255;
          
            --gradient-background: #ffffff;
          
          --color-foreground: 24,24,24;
          --color-background-contrast: 191,191,191;
          --color-shadow: 24,24,24;
          --color-button: 24,24,24;
          --color-button-text: 255,255,255;
          --color-secondary-button: 255,255,255;
          --color-secondary-button-text: 24,24,24;
          --color-link: 24,24,24;
          --color-footer-link: 51,51,51;
          --color-disabled-unactive: 163,163,163;
          --color-horizontal-rule: 210,210,210;
          --color-highlight: 0,118,114;
          --color-badge-foreground: 24,24,24;
          --color-badge-background: 255,255,255;
          --color-badge-border: 24,24,24;
          --payment-terms-background-color: rgb(255 255 255);
        }
      }
      
        
        .color-scheme-ed87d823-a4ae-4cdf-9045-0aa12a1a9f36 {
          --color-background: 251,246,235;
        
          --gradient-background: #fbf6eb;
        

        

        --color-foreground: 24,24,24;
        --color-background-contrast: 230,198,129;
        --color-shadow: 24,24,24;
        --color-button: 24,24,24;
        --color-button-text: 255,255,255;
        --color-secondary-button: 251,246,235;
        --color-secondary-button-text: 24,24,24;
        --color-link: 24,24,24;
        --color-card-background: 245,245,245;
        --color-footer-link: 51,51,51;
        --color-disabled-unactive: 163,163,163;
        --color-horizontal-rule: 210,210,210;
        --color-highlight: 0,118,114;
        --color-badge-foreground: 24,24,24;
        --color-badge-background: 251,246,235;
        --color-badge-border: 24,24,24;
        --payment-terms-background-color: rgb(251 246 235);
      }

      /* MOBILE ONLY CLASS */
      .mobile-color-used.mobile-color-scheme-ed87d823-a4ae-4cdf-9045-0aa12a1a9f36 {
        @media screen and (max-width: 1199px) {
          --color-background: 251,246,235;
          
            --gradient-background: #fbf6eb;
          
          --color-foreground: 24,24,24;
          --color-background-contrast: 230,198,129;
          --color-shadow: 24,24,24;
          --color-button: 24,24,24;
          --color-button-text: 255,255,255;
          --color-secondary-button: 251,246,235;
          --color-secondary-button-text: 24,24,24;
          --color-link: 24,24,24;
          --color-footer-link: 51,51,51;
          --color-disabled-unactive: 163,163,163;
          --color-horizontal-rule: 210,210,210;
          --color-highlight: 0,118,114;
          --color-badge-foreground: 24,24,24;
          --color-badge-background: 251,246,235;
          --color-badge-border: 24,24,24;
          --payment-terms-background-color: rgb(251 246 235);
        }
      }
      
        
        .color-scheme-53c49903-1c90-4a45-8872-b14ef8662a50 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        

        

        --color-foreground: 24,24,24;
        --color-background-contrast: 191,191,191;
        --color-shadow: 24,24,24;
        --color-button: 24,24,24;
        --color-button-text: 255,255,255;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 24,24,24;
        --color-link: 24,24,24;
        --color-card-background: 245,245,245;
        --color-footer-link: 51,51,51;
        --color-disabled-unactive: 163,163,163;
        --color-horizontal-rule: 210,210,210;
        --color-highlight: 0,118,114;
        --color-badge-foreground: 24,24,24;
        --color-badge-background: 255,255,255;
        --color-badge-border: 24,24,24;
        --payment-terms-background-color: rgb(255 255 255);
      }

      /* MOBILE ONLY CLASS */
      .mobile-color-used.mobile-color-scheme-53c49903-1c90-4a45-8872-b14ef8662a50 {
        @media screen and (max-width: 1199px) {
          --color-background: 255,255,255;
          
            --gradient-background: #ffffff;
          
          --color-foreground: 24,24,24;
          --color-background-contrast: 191,191,191;
          --color-shadow: 24,24,24;
          --color-button: 24,24,24;
          --color-button-text: 255,255,255;
          --color-secondary-button: 255,255,255;
          --color-secondary-button-text: 24,24,24;
          --color-link: 24,24,24;
          --color-footer-link: 51,51,51;
          --color-disabled-unactive: 163,163,163;
          --color-horizontal-rule: 210,210,210;
          --color-highlight: 0,118,114;
          --color-badge-foreground: 24,24,24;
          --color-badge-background: 255,255,255;
          --color-badge-border: 24,24,24;
          --payment-terms-background-color: rgb(255 255 255);
        }
      }
      
        
        .color-scheme-eebbb37e-5c71-4bb2-a306-8294aca4c258 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        

        

        --color-foreground: 24,24,24;
        --color-background-contrast: 191,191,191;
        --color-shadow: 24,24,24;
        --color-button: 24,24,24;
        --color-button-text: 255,255,255;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 24,24,24;
        --color-link: 24,24,24;
        --color-card-background: 243,243,243;
        --color-footer-link: 24,24,24;
        --color-disabled-unactive: 209,209,209;
        --color-horizontal-rule: 209,209,209;
        --color-highlight: 94,96,58;
        --color-badge-foreground: 24,24,24;
        --color-badge-background: 255,255,255;
        --color-badge-border: 24,24,24;
        --payment-terms-background-color: rgb(255 255 255);
      }

      /* MOBILE ONLY CLASS */
      .mobile-color-used.mobile-color-scheme-eebbb37e-5c71-4bb2-a306-8294aca4c258 {
        @media screen and (max-width: 1199px) {
          --color-background: 255,255,255;
          
            --gradient-background: #ffffff;
          
          --color-foreground: 24,24,24;
          --color-background-contrast: 191,191,191;
          --color-shadow: 24,24,24;
          --color-button: 24,24,24;
          --color-button-text: 255,255,255;
          --color-secondary-button: 255,255,255;
          --color-secondary-button-text: 24,24,24;
          --color-link: 24,24,24;
          --color-footer-link: 24,24,24;
          --color-disabled-unactive: 209,209,209;
          --color-horizontal-rule: 209,209,209;
          --color-highlight: 94,96,58;
          --color-badge-foreground: 24,24,24;
          --color-badge-background: 255,255,255;
          --color-badge-border: 24,24,24;
          --payment-terms-background-color: rgb(255 255 255);
        }
      }
      
        
        .color-scheme-483c8951-d37a-4c28-bf98-9fcacfe9cbef {
          --color-background: 237,243,248;
        
          --gradient-background: #edf3f8;
        

        

        --color-foreground: 0,0,0;
        --color-background-contrast: 145,182,212;
        --color-shadow: 0,0,0;
        --color-button: 0,0,0;
        --color-button-text: 255,255,255;
        --color-secondary-button: 237,243,248;
        --color-secondary-button-text: 0,0,0;
        --color-link: 0,0,0;
        --color-card-background: 245,245,245;
        --color-footer-link: 51,51,51;
        --color-disabled-unactive: 163,163,163;
        --color-horizontal-rule: 210,210,210;
        --color-highlight: 0,118,114;
        --color-badge-foreground: 0,0,0;
        --color-badge-background: 237,243,248;
        --color-badge-border: 0,0,0;
        --payment-terms-background-color: rgb(237 243 248);
      }

      /* MOBILE ONLY CLASS */
      .mobile-color-used.mobile-color-scheme-483c8951-d37a-4c28-bf98-9fcacfe9cbef {
        @media screen and (max-width: 1199px) {
          --color-background: 237,243,248;
          
            --gradient-background: #edf3f8;
          
          --color-foreground: 0,0,0;
          --color-background-contrast: 145,182,212;
          --color-shadow: 0,0,0;
          --color-button: 0,0,0;
          --color-button-text: 255,255,255;
          --color-secondary-button: 237,243,248;
          --color-secondary-button-text: 0,0,0;
          --color-link: 0,0,0;
          --color-footer-link: 51,51,51;
          --color-disabled-unactive: 163,163,163;
          --color-horizontal-rule: 210,210,210;
          --color-highlight: 0,118,114;
          --color-badge-foreground: 0,0,0;
          --color-badge-background: 237,243,248;
          --color-badge-border: 0,0,0;
          --payment-terms-background-color: rgb(237 243 248);
        }
      }
      

      body, .color-scheme-1, .color-scheme-2, .color-scheme-3, .color-scheme-4, .color-scheme-5, .color-scheme-9f2d5e41-56c3-48cd-9f9c-84d6c0a32fda, .color-scheme-0b1d22a0-20ea-41b6-90f7-ae0b5ab46b01, .color-scheme-ed87d823-a4ae-4cdf-9045-0aa12a1a9f36, .color-scheme-53c49903-1c90-4a45-8872-b14ef8662a50, .color-scheme-eebbb37e-5c71-4bb2-a306-8294aca4c258, .color-scheme-483c8951-d37a-4c28-bf98-9fcacfe9cbef {
        color: rgb(var(--color-foreground));
        background-color: rgb(var(--color-background));
      }

      :root {
        /* Font families */
        /* Horizon Way of Handling Fonts */
        --font-body--family: Graphik, serif;
        --font-body--style: 'normal';
        --font-body--weight: 400;
        --font-heading--family: Graphik, serif;
        --font-heading--style: 'normal';
        --font-heading--weight: 400;

        /* Legacy Way of Handling Fonts */
        --font-body-family: Graphik, serif;
        --font-body-style: 'normal';
        --font-body-weight: 400;
        --font-body-weight-bold: 700 ;

        --font-heading-family: Graphik, serif;
        --font-heading-style: 'normal';
        --font-heading-weight: 400;

        --font-body-scale: 1.0;
        --font-heading-scale: 1.0;

        --media-padding: px;
        --media-border-opacity: 0.05;
        --media-border-width: 0px;
        --media-radius: 0px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 4px;
        --media-shadow-blur-radius: 5px;
        --media-shadow-visible: 0;

        --page-width: 147rem;
        --page-width-margin: 0rem;

        --product-card-image-padding: 0.0rem;
        --product-card-corner-radius: 0.0rem;
        --product-card-text-alignment: left;
        --product-card-border-width: 0.0rem;
        --product-card-border-opacity: 0.1;
        --product-card-shadow-opacity: 0.0;
        --product-card-shadow-visible: 0;
        --product-card-shadow-horizontal-offset: 0.0rem;
        --product-card-shadow-vertical-offset: 0.4rem;
        --product-card-shadow-blur-radius: 0.5rem;

        --collection-card-image-padding: 0.0rem;
        --collection-card-corner-radius: 0.0rem;
        --collection-card-text-alignment: left;
        --collection-card-border-width: 0.0rem;
        --collection-card-border-opacity: 0.1;
        --collection-card-shadow-opacity: 0.0;
        --collection-card-shadow-visible: 0;
        --collection-card-shadow-horizontal-offset: 0.0rem;
        --collection-card-shadow-vertical-offset: 0.4rem;
        --collection-card-shadow-blur-radius: 0.5rem;

        --blog-card-image-padding: 0.0rem;
        --blog-card-corner-radius: 0.0rem;
        --blog-card-text-alignment: left;
        --blog-card-border-width: 0.0rem;
        --blog-card-border-opacity: 0.1;
        --blog-card-shadow-opacity: 0.0;
        --blog-card-shadow-visible: 0;
        --blog-card-shadow-horizontal-offset: 0.0rem;
        --blog-card-shadow-vertical-offset: 0.4rem;
        --blog-card-shadow-blur-radius: 0.5rem;

        --badge-corner-radius: 4.0rem;

        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 0px;
        --popup-shadow-opacity: 0.05;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 4px;
        --popup-shadow-blur-radius: 5px;

        --drawer-border-width: 1px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: 4px;
        --drawer-shadow-blur-radius: 5px;

        --spacing-sections-desktop: 0px;
        --spacing-sections-mobile: 0px;

        --grid-desktop-vertical-spacing: 8px;
        --grid-desktop-horizontal-spacing: 8px;
        --grid-mobile-vertical-spacing: 4px;
        --grid-mobile-horizontal-spacing: 4px;

        --text-boxes-border-opacity: 0.1;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 0px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 4px;
        --text-boxes-shadow-blur-radius: 5px;

        --buttons-radius: 40px;
        --buttons-radius-outset: 41px;
        --buttons-border-width: 1px;
        --buttons-border-opacity: 1.0;
        --buttons-shadow-opacity: 0.0;
        --buttons-shadow-visible: 0;
        --buttons-shadow-horizontal-offset: 0px;
        --buttons-shadow-vertical-offset: 4px;
        --buttons-shadow-blur-radius: 5px;
        --buttons-border-offset: 0.3px;

        --inputs-radius: 40px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 4px;
        --inputs-shadow-blur-radius: 5px;
        --inputs-radius-outset: 41px;

        --variant-pills-radius: 40px;
        --variant-pills-border-width: 1px;
        --variant-pills-border-opacity: 0.55;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: 0px;
        --variant-pills-shadow-vertical-offset: 4px;
        --variant-pills-shadow-blur-radius: 5px;

        --logo-mobile-width: 72px;

        /* Letter-spacing / Tracking */
        --letter-spacing--display-tight: -0.03em;
        --letter-spacing--display-normal: 0em;
        --letter-spacing--display-loose: 0.03em;

        --letter-spacing--heading-tight: -0.03em;
        --letter-spacing--heading-normal: 0em;
        --letter-spacing--heading-loose: 0.03em;

        --letter-spacing--body-tight: -0.03em;
        --letter-spacing--body-normal: 0em;
        --letter-spacing--body-loose: 0.03em;

        /* Line height / Leading */
        --line-height: 1;

        --line-height--display-tight: 1;
        --line-height--display-normal: 1.1;
        --line-height--display-loose: 1.2;

        --line-height--heading-tight: 1.15;
        --line-height--heading-normal: 1.25;
        --line-height--heading-loose: 1.35;

        --line-height--body-tight: 1.2;
        --line-height--body-normal: 1.4;
        --line-height--body-loose: 1.6;


        /* Typography preset variables */
        --font-size--paragraph: 1.6rem;--font-size--h1: clamp(4.8rem, 7.2vw, 7.2rem);--font-size--h2: clamp(3.6rem, 4.8vw, 4.8rem);--font-size--h3: 3.2rem;--font-size--h4: 2.4rem;--font-size--h5: 2.0rem;--font-size--h6: 1.6rem;--font-paragraph--weight: 400;--font-paragraph--letter-spacing: var(--letter-spacing--body-normal);--font-paragraph--line-height: var(--line-height--body-normal);--font-paragraph--case: none;--font-paragraph--size: var(--font-size--paragraph);--font-paragraph--family: var(--font-body-family);--font-paragraph--style: var(--font-body-style);--font-h1--weight: var(--font-heading--weight);--font-h1--letter-spacing: var(--letter-spacing--heading-normal);--font-h1--size: var(--font-size--h1);--font-h1--family: var(--font-heading--family);--font-h1--style: var(--font-heading--style);--font-h1--case: none;--font-h1--line-height: var(--line-height--display-normal);--font-h2--weight: var(--font-heading--weight);--font-h2--letter-spacing: var(--letter-spacing--heading-normal);--font-h2--size: var(--font-size--h2);--font-h2--family: var(--font-heading--family);--font-h2--style: var(--font-heading--style);--font-h2--case: none;--font-h2--line-height: var(--line-height--display-normal);--font-h3--weight: var(--font-heading--weight);--font-h3--letter-spacing: var(--letter-spacing--heading-normal);--font-h3--size: var(--font-size--h3);--font-h3--family: var(--font-heading--family);--font-h3--style: var(--font-heading--style);--font-h3--case: none;--font-h3--line-height: var(--line-height--display-normal);--font-h4--weight: var(--font-miller-display, serif--weight);--font-h4--letter-spacing: var(--letter-spacing--heading-normal);--font-h4--size: var(--font-size--h4);--font-h4--family: var(--font-miller-display, serif--family);--font-h4--style: var(--font-miller-display, serif--style);--font-h4--case: none;--font-h4--line-height: var(--line-height--display-normal);--font-h5--weight: var(--font-heading--weight);--font-h5--letter-spacing: var(--letter-spacing--heading-normal);--font-h5--size: var(--font-size--h5);--font-h5--family: var(--font-heading--family);--font-h5--style: var(--font-heading--style);--font-h5--case: none;--font-h5--line-height: var(--line-height--display-normal);--font-h6--weight: var(--font-heading--weight);--font-h6--letter-spacing: var(--letter-spacing--heading-normal);--font-h6--size: var(--font-size--h6);--font-h6--family: var(--font-heading--family);--font-h6--style: var(--font-heading--style);--font-h6--case: none;--font-h6--line-height: var(--line-height--display-normal);

         /* Hardcoded font sizes */
        --font-size--2xs: 0.625rem;
        --font-size--xs: 0.8125rem;
        --font-size--sm: 0.875rem;
        --font-size--md: 1rem;
        --font-size--lg: 1.125rem;
        --font-size--xl: 1.25rem;
        --font-size--2xl: 1.5rem;
        --font-size--3xl: 2rem;
        --font-size--4xl: 2.5rem;
        --font-size--5xl: 3rem;
        --font-size--6xl: 3.5rem;
      }

      *,
      *::before,
      *::after {
        box-sizing: border-box;
      }

      html {
        box-sizing: border-box;
        font-size: calc(var(--font-body-scale) * 62.5%);
        height: 100%;
        scroll-behavior: smooth;
      }

      body {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        grid-template-columns: 100%;
        min-height: 100%;
        margin: 0;
        font-family: var(--font-body-family);
        font-style: var(--font-body-style);
        font-weight: var(--font-body-weight);
      }
    </style>

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/theme_096af15b31.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/component-cart-items_0daf2c9a72.css" media="print" onload="this.media='all'">
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/graphik_107eb3fb49.css" rel="stylesheet" type="text/css" media="all">
    
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/component-localization-fo_c73185dfd3.css" rel="stylesheet" type="text/css" media="all">
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/localization-form_a298ce48fa.js" defer></script><link href="<?php echo get_template_directory_uri(); ?>/assets/css/component-locale-selector_4cb34922b5.css" rel="stylesheet" type="text/css" media="all">
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/locale-selector_5d693af6f0.js" defer></script><script>
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }

      // Prevent regios app from breaking collection pages on URL change (prevent their navigation checking events)
      const originalSetInterval = window.setInterval;
      window.setInterval = function (fn, delay, ...args) {
        const stack = new Error().stack || '';
        if (stack.includes('collection_page_discount.js') && fn.toString().includes('window.location.href')) {
          return 0;
        }
        return originalSetInterval(fn, delay, ...args);
      };

      const originalNavigationAdd = window.navigation.addEventListener;
      window.navigation.addEventListener = function (type, listener, options) {
        const stack = new Error().stack || '';
        if (
          stack.includes('collection_page_discount.js') &&
          type === 'navigate' &&
          typeof listener === 'function' &&
          listener.toString().includes('navigationType') &&
          listener.toString().includes('push') &&
          listener.toString().includes('replace')
        ) {
          return;
        }
        return originalNavigationAdd.call(this, type, listener, options);
      };
    </script><script async="" crossorigin="" fetchpriority="high" src="<?php echo get_template_directory_uri(); ?>/assets/js/es-modules-shim.2.4.0_96e7068f44.js"></script>
<script type="importmap">
  {
    "imports": {
      "@theme/scrolling": "//www.smithoptics.com/cdn/shop/t/401/assets/scrolling.js?v=10957690925586738441788382342"
    }
  }
</script>

<link rel="modulepreload" href="<?php echo get_template_directory_uri(); ?>/assets/js/scrolling_17d901bb10.js" fetchpriority="low">
<!-- START Digioh Fast Activation Javascript -->
    <script async="" type="text/javascript" src="https://www.lightboxcdn.com/vendor/c7c5f4ee-f64b-4e8d-95e1-9beddf2e4b7a/lightbox_inline.js" data-disabled-tracker="true" type="text/plain"></script>
    <!-- END Digioh Fast Activation Javascript -->

    
<script>
  window.__elevarProductCategoryMetafields = {};
  
</script>
<script>
  
</script>


    <script>
      window.currencyCodeEnabled = false
    </script>
  <!-- BEGIN app block: shopify://apps/elevar-conversion-tracking/blocks/dataLayerEmbed/bc30ab68-b15c-4311-811f-8ef485877ad6 -->



<script type="module" dynamic="">
  const configUrl = "/a/elevar/static/configs/855ac318aa784984720258e36dea337d75d87795/config.js";
  const config = (await import(configUrl)).default;
  const scriptUrl = config.script_src_app_theme_embed;

  if (scriptUrl) {
    const { handler } = await import(scriptUrl);

    await handler(
      config,
      {
        cartData: {
  marketId: "30058905838",
  localeCountryCode:"US",
  attributes:{},
  cartTotal: "0.0",
  currencyCode:"USD",
  items: []
}
,
        user: {
  cartTotal: "0.0",
  currencyCode:"USD",
  customer: {},
}
,
        isOnCartPage:false,
        collectionView:null,
        searchResultsView:null,
        productView:null,
      }
    );
  }
</script>


<!-- END app block --><!-- BEGIN app block: shopify://apps/triplewhale/blocks/triple_pixel_snippet/483d496b-3f1a-4609-aea7-8eee3b6b7a2a --><link rel="preconnect dns-prefetch" href="https://api.config-security.com/" crossorigin="">
<link rel="preconnect dns-prefetch" href="https://conf.config-security.com/" crossorigin="">
<script>
/* >> TriplePixel :: start*/
window.TriplePixelData={TripleName:"v8pti0-6j.myshopify.com",ver:"2.16",plat:"SHOPIFY",isHeadless:false,src:'SHOPIFY_EXT',product:{id:"",name:``,price:"",variant:"",av:{  }},search:"",collection:"",cart:"notification",template:"index",curr:"USD" || "USD", market:"30058905838"},function(W,H,A,L,E,_,B,N){function O(U,T,P,H,R){void 0===R&&(R=!1),H=new XMLHttpRequest,P?(H.open("POST",U,!0),H.setRequestHeader("Content-Type","text/plain")):H.open("GET",U,!0),H.send(JSON.stringify(P||{})),H.onreadystatechange=function(){4===H.readyState&&200===H.status?(R=H.responseText,U.includes("/first")?eval(R):P||(N[B]=R)):(299<H.status||H.status<200)&&T&&!R&&(R=!0,O(U,T-1,P))}}if(N=window,!N[H+"sn"]){N[H+"sn"]=1,L=function(){return Date.now().toString(36)+"_"+Math.random().toString(36)};try{A.setItem(H,1+(0|A.getItem(H)||0)),(E=JSON.parse(A.getItem(H+"U")||"[]")).push({u:location.href,r:document.referrer,t:Date.now(),id:L()}),A.setItem(H+"U",JSON.stringify(E))}catch(e){}var i,m,p;A.getItem('"!nC`')||(_=A,A=N,A[H]||(E=A[H]=function(t,e,i){return void 0===i&&(i=[]),"State"==t?E.s:(W=L(),(E._q=E._q||[]).push([W,t,e].concat(i)),W)},E.s="Installed",E._q=[],E.ch=W,B="configSecurityConfModel",N[B]=1,O("https://conf.config-security.com/model",5),i=L(),m=A[atob("c2NyZWVu")],_.setItem("di_pmt_wt",i),p={id:i,action:"profile",avatar:_.getItem("auth-security_rand_salt_"),time:m[atob("d2lkdGg=")]+":"+m[atob("aGVpZ2h0")],host:A.TriplePixelData.TripleName,plat:A.TriplePixelData.plat,url:window.location.href.slice(0,500),ref:document.referrer,ver:A.TriplePixelData.ver},O("https://api.config-security.com/event",5,p),O("https://api.config-security.com/first?host=".concat(p.host,"&plat=").concat(p.plat),5)))}}("","TriplePixel",localStorage);
/* << TriplePixel :: end*/
</script>



<!-- END app block --><!-- BEGIN app block: shopify://apps/eg-auto-add-to-cart/blocks/app-embed/0f7d4f74-1e89-4820-aec4-6564d7e535d2 -->











  
    <script async="" type="text/javascript" src="https://cdn.506.io/eg/script.js?shop=v8pti0-6j.myshopify.com&amp;v=12"></script>
  



  <meta id="easygift-shop" itemid="c2hvcF8kXzE3ODg5MzM5MDk=" content="{&quot;isInstalled&quot;:true,&quot;installedOn&quot;:&quot;2025-07-09T21:54:02.114Z&quot;,&quot;appVersion&quot;:&quot;3.0&quot;,&quot;subscriptionName&quot;:&quot;Unlimited&quot;,&quot;cartAnalytics&quot;:true,&quot;freeTrialEndsOn&quot;:null,&quot;settings&quot;:{&quot;reminderBannerStyle&quot;:{&quot;position&quot;:{&quot;horizontal&quot;:&quot;right&quot;,&quot;vertical&quot;:&quot;bottom&quot;},&quot;backgroundColor&quot;:&quot;#FFFFFF&quot;,&quot;borderRadius&quot;:null,&quot;padding&quot;:null,&quot;headerFontSize&quot;:null,&quot;subHeaderFontSize&quot;:null,&quot;fontFamily&quot;:null,&quot;primaryColor&quot;:&quot;#000000&quot;,&quot;cssStyles&quot;:&quot;       .aca-reminder-banner-container {\n           border-radius: 2px;\n       }&quot;,&quot;headerText&quot;:&quot;Don't forget your limited edition gift with purchases over $275&quot;,&quot;subHeaderText&quot;:null,&quot;showImage&quot;:false,&quot;imageUrl&quot;:&quot;https:\/\/cdn.506.io\/eg\/eg_notification_default_512x512.png&quot;,&quot;displayAfter&quot;:5,&quot;closingMode&quot;:&quot;doNotAutoClose&quot;,&quot;selfcloseAfter&quot;:5,&quot;reshowBannerAfter&quot;:&quot;everyNewSession&quot;},&quot;addedItemIdentifier&quot;:&quot;_Gifted&quot;,&quot;ignoreOtherAppLineItems&quot;:null,&quot;customVariantsInfoLifetimeMins&quot;:1440,&quot;redirectPath&quot;:null,&quot;ignoreNonStandardCartRequests&quot;:false,&quot;bannerStyle&quot;:{&quot;position&quot;:{&quot;horizontal&quot;:&quot;right&quot;,&quot;vertical&quot;:&quot;bottom&quot;},&quot;backgroundColor&quot;:&quot;#FFFFFF&quot;,&quot;borderRadius&quot;:null,&quot;padding&quot;:null,&quot;headerFontSize&quot;:null,&quot;subHeaderFontSize&quot;:null,&quot;fontFamily&quot;:null,&quot;primaryColor&quot;:&quot;#000000&quot;,&quot;cssStyles&quot;:&quot;.aca-banner-container {\n    font-family: neue-haas-unica, sans-serif;\n}\n.aca-banner-container {\n    border-radius: .1rem;\n}\n.aca-banner-image \u003e img{\n    #content:url(\&quot;https:\/\/devshop.smithoptics.com\/cdn\/shop\/files\/matteBlack_3Q_147388bb-6cc2-4aed-80dc-d50f0c4e193e.png?v=1757704917\u0026width=140\&quot;);\n}&quot;},&quot;themePresetId&quot;:&quot;0&quot;,&quot;notificationStyle&quot;:{&quot;position&quot;:{&quot;horizontal&quot;:&quot;right&quot;,&quot;vertical&quot;:&quot;bottom&quot;},&quot;backgroundColor&quot;:&quot;#FFFFFF&quot;,&quot;borderRadius&quot;:null,&quot;headerFontSize&quot;:null,&quot;subHeaderFontSize&quot;:null,&quot;padding&quot;:null,&quot;fontFamily&quot;:null,&quot;primaryColor&quot;:&quot;#000000&quot;,&quot;duration&quot;:&quot;3.0&quot;,&quot;cssStyles&quot;:&quot;.aca-notification-container {\n    font-family: neue-haas-unica, sans-serif;\n}\n.aca-notification-container {\n    border-radius: 2px !important;\n}&quot;,&quot;hasCustomizations&quot;:false},&quot;fetchCartData&quot;:false,&quot;useLocalStorage&quot;:{&quot;enabled&quot;:false,&quot;expiryMinutes&quot;:null},&quot;popupStyle&quot;:{&quot;buttonTextColor&quot;:null,&quot;backgroundColor&quot;:&quot;#FFFFFF&quot;,&quot;borderRadius&quot;:null,&quot;padding&quot;:null,&quot;headerFontSize&quot;:null,&quot;subHeaderFontSize&quot;:null,&quot;bodyColor&quot;:null,&quot;bodyFontSize&quot;:null,&quot;subscriptionLabel&quot;:null,&quot;priceShowZeroDecimals&quot;:true,&quot;headerFontFamily&quot;:null,&quot;bodyFontFamily&quot;:null,&quot;primaryColor&quot;:&quot;#3A3A3A&quot;,&quot;secondaryColor&quot;:&quot;#3A3A3A&quot;,&quot;cssStyles&quot;:null,&quot;hasCustomizations&quot;:false,&quot;addButtonText&quot;:&quot;Select&quot;,&quot;dismissButtonText&quot;:&quot;Close&quot;,&quot;outOfStockButtonText&quot;:&quot;Out of Stock&quot;,&quot;imageUrl&quot;:null,&quot;showProductLink&quot;:false,&quot;closeModalOutsideClick&quot;:true},&quot;refreshAfterBannerClick&quot;:false,&quot;disableReapplyRules&quot;:false,&quot;disableReloadOnFailedAddition&quot;:false,&quot;autoReloadCartPage&quot;:false,&quot;ajaxRedirectPath&quot;:null,&quot;allowSimultaneousRequests&quot;:false,&quot;applyRulesOnCheckout&quot;:false,&quot;enableCartCtrlOverrides&quot;:true,&quot;customRedirectFromCart&quot;:null,&quot;scriptSettings&quot;:{&quot;branding&quot;:{&quot;removalRequestSent&quot;:null,&quot;show&quot;:false},&quot;productPageRedirection&quot;:{&quot;enabled&quot;:false,&quot;products&quot;:[],&quot;redirectionURL&quot;:&quot;\/&quot;},&quot;debugging&quot;:{&quot;enabled&quot;:false,&quot;enabledOn&quot;:null,&quot;stringifyObj&quot;:false},&quot;reApplyValueBasedRulesInCart&quot;:false,&quot;useFinalPriceGetEntireCart&quot;:false,&quot;disableRedirectAfterFormSubmit&quot;:false,&quot;fetchCartDataBeforeRequest&quot;:false,&quot;enableBuyNowInterceptions&quot;:false,&quot;removeProductsAddedFromExpiredRules&quot;:false,&quot;useFinalPrice&quot;:false,&quot;hideGiftedPropertyText&quot;:false,&quot;customCSS&quot;:null,&quot;decodePayload&quot;:false,&quot;delayUpdates&quot;:2000,&quot;fetchProductInfoFromSavedDomain&quot;:false,&quot;hideAlertsOnFrontend&quot;:false,&quot;removeEGPropertyFromSplitActionLineItems&quot;:false},&quot;promoCodeMessageStyle&quot;:{&quot;message&quot;:&quot;Free gift added!&quot;},&quot;accessToEnterprise&quot;:false},&quot;translations&quot;:null,&quot;defaultLocale&quot;:&quot;en&quot;,&quot;shopDomain&quot;:&quot;www.smithoptics.com&quot;}">


<script defer>
  (async function() {
    try {

      const blockVersion = "v3"
      if (blockVersion != "v3") {
        return
      }

      let metaErrorFlag = false;
      if (metaErrorFlag) {
        return
      }

      // Parse metafields as JSON
      const metafields = {};

      // Process metafields in JavaScript
      let savedRulesArray = [];
      for (const [key, value] of Object.entries(metafields)) {
        if (value) {
          for (const prop in value) {
            // avoiding Object.Keys for performance gain -- no need to make an array of keys.
            savedRulesArray.push(value);
            break;
          }
        }
      }

      const metaTag = document.createElement('meta');
      metaTag.id = 'easygift-rules';
      metaTag.content = JSON.stringify(savedRulesArray);
      metaTag.setAttribute('itemid', 'cnVsZXNfJF8xNzg4OTMzOTA5');

      document.head.appendChild(metaTag);
      } catch (err) {
        
      }
  })();
</script>


  <script type="text/javascript" defer>

    (function () {
      try {
        window.EG_INFO = window.EG_INFO || {};
        var shopInfo = {"isInstalled":true,"installedOn":"2025-07-09T21:54:02.114Z","appVersion":"3.0","subscriptionName":"Unlimited","cartAnalytics":true,"freeTrialEndsOn":null,"settings":{"reminderBannerStyle":{"position":{"horizontal":"right","vertical":"bottom"},"backgroundColor":"#FFFFFF","borderRadius":null,"padding":null,"headerFontSize":null,"subHeaderFontSize":null,"fontFamily":null,"primaryColor":"#000000","cssStyles":"       .aca-reminder-banner-container {\n           border-radius: 2px;\n       }","headerText":"Don't forget your limited edition gift with purchases over $275","subHeaderText":null,"showImage":false,"imageUrl":"https:\/\/cdn.506.io\/eg\/eg_notification_default_512x512.png","displayAfter":5,"closingMode":"doNotAutoClose","selfcloseAfter":5,"reshowBannerAfter":"everyNewSession"},"addedItemIdentifier":"_Gifted","ignoreOtherAppLineItems":null,"customVariantsInfoLifetimeMins":1440,"redirectPath":null,"ignoreNonStandardCartRequests":false,"bannerStyle":{"position":{"horizontal":"right","vertical":"bottom"},"backgroundColor":"#FFFFFF","borderRadius":null,"padding":null,"headerFontSize":null,"subHeaderFontSize":null,"fontFamily":null,"primaryColor":"#000000","cssStyles":".aca-banner-container {\n    font-family: neue-haas-unica, sans-serif;\n}\n.aca-banner-container {\n    border-radius: .1rem;\n}\n.aca-banner-image \u003e img{\n    #content:url(\"https:\/\/devshop.smithoptics.com\/cdn\/shop\/files\/matteBlack_3Q_147388bb-6cc2-4aed-80dc-d50f0c4e193e.png?v=1757704917\u0026width=140\");\n}"},"themePresetId":"0","notificationStyle":{"position":{"horizontal":"right","vertical":"bottom"},"backgroundColor":"#FFFFFF","borderRadius":null,"headerFontSize":null,"subHeaderFontSize":null,"padding":null,"fontFamily":null,"primaryColor":"#000000","duration":"3.0","cssStyles":".aca-notification-container {\n    font-family: neue-haas-unica, sans-serif;\n}\n.aca-notification-container {\n    border-radius: 2px !important;\n}","hasCustomizations":false},"fetchCartData":false,"useLocalStorage":{"enabled":false,"expiryMinutes":null},"popupStyle":{"buttonTextColor":null,"backgroundColor":"#FFFFFF","borderRadius":null,"padding":null,"headerFontSize":null,"subHeaderFontSize":null,"bodyColor":null,"bodyFontSize":null,"subscriptionLabel":null,"priceShowZeroDecimals":true,"headerFontFamily":null,"bodyFontFamily":null,"primaryColor":"#3A3A3A","secondaryColor":"#3A3A3A","cssStyles":null,"hasCustomizations":false,"addButtonText":"Select","dismissButtonText":"Close","outOfStockButtonText":"Out of Stock","imageUrl":null,"showProductLink":false,"closeModalOutsideClick":true},"refreshAfterBannerClick":false,"disableReapplyRules":false,"disableReloadOnFailedAddition":false,"autoReloadCartPage":false,"ajaxRedirectPath":null,"allowSimultaneousRequests":false,"applyRulesOnCheckout":false,"enableCartCtrlOverrides":true,"customRedirectFromCart":null,"scriptSettings":{"branding":{"removalRequestSent":null,"show":false},"productPageRedirection":{"enabled":false,"products":[],"redirectionURL":"\/"},"debugging":{"enabled":false,"enabledOn":null,"stringifyObj":false},"reApplyValueBasedRulesInCart":false,"useFinalPriceGetEntireCart":false,"disableRedirectAfterFormSubmit":false,"fetchCartDataBeforeRequest":false,"enableBuyNowInterceptions":false,"removeProductsAddedFromExpiredRules":false,"useFinalPrice":false,"hideGiftedPropertyText":false,"customCSS":null,"decodePayload":false,"delayUpdates":2000,"fetchProductInfoFromSavedDomain":false,"hideAlertsOnFrontend":false,"removeEGPropertyFromSplitActionLineItems":false},"promoCodeMessageStyle":{"message":"Free gift added!"},"accessToEnterprise":false},"translations":null,"defaultLocale":"en","shopDomain":"www.smithoptics.com"};
        var productRedirectionEnabled = shopInfo.settings.scriptSettings.productPageRedirection.enabled;
        if (["Unlimited", "Enterprise"].includes(shopInfo.subscriptionName) && productRedirectionEnabled) {
          var products = shopInfo.settings.scriptSettings.productPageRedirection.products;
          if (products.length > 0) {
            var productIds = products.map(function(prod) {
              var productGid = prod.id;
              var productIdNumber = parseInt(productGid.split('/').pop());
              return productIdNumber;
            });
            var productInfo = null;
            var isProductInList = productIds.includes(productInfo.id);
            if (isProductInList) {
              var redirectionURL = shopInfo.settings.scriptSettings.productPageRedirection.redirectionURL;
              if (redirectionURL) {
                window.location = redirectionURL;
              }
            }
          }
        }

        
      } catch(err) {
      return
    }})()
  </script>



<!-- END app block --><!-- BEGIN app block: shopify://apps/sc-easy-redirects/blocks/app/be3f8dbd-5d43-46b4-ba43-2d65046054c2 -->
    <!-- common for all pages -->
    
    
        
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/esc-redirect-app-live-fea_f0ef82884d.js" async=""></script>
        
    




<!-- END app block --><!-- BEGIN app block: shopify://apps/regios-discounts/blocks/regios_discounts_embed/dc1514bb-4830-4102-bffa-e8b300bac5bd -->

<script id="regios-dopp-config" type="application/json">
{
  "discountConfigs": {"1558753247470":"{\"config\":{\"message\":\"1% off all products (testing example)\",\"isEnabled\":true,\"customLogic\":{\"id\":\"\u003croot\u003e\",\"type\":\"ROOT\",\"entryPoint\":{\"id\":\"check-if-0\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMERS\",\"selectedCustomers\":[{\"id\":\"gid:\/\/shopify\/Customer\/9011381960942\",\"name\":\"khalob@redvanworkshop.com\",\"caption\":\"khalob@redvanworkshop.com\"},{\"id\":\"gid:\/\/shopify\/Customer\/8824683593966\",\"name\":\"Khalob C\",\"caption\":\"khalob+smtih@redvanworkshop.com\"},{\"id\":\"gid:\/\/shopify\/Customer\/8824680284398\",\"name\":\"Khalob C\",\"caption\":\"khalob+smith@redvanworkshop.com\"}]}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"ALL_PRODUCTS\"}}],\"then\":{\"id\":\"apply-discount-0\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"1% off all products\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"1\"},\"dimensions\":{\"width\":332,\"height\":396},\"position\":{\"x\":628.4949579831933,\"y\":-1.6881302521008479}},\"otherwise\":null,\"dimensions\":{\"width\":292,\"height\":253},\"position\":{\"x\":246,\"y\":0},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"SKIP\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2025-11-04T14:56:11Z\",\"endDate\":\"2025-11-04T19:13:10Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1559014506734":"{\"config\":{\"message\":\"STRIKETHROUGH-TEST-PROMO\",\"isEnabled\":true,\"customLogic\":{\"id\":\"\u003croot\u003e\",\"type\":\"ROOT\",\"entryPoint\":{\"id\":\"entrypoint\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8936803369198\"}}],\"then\":{\"id\":\"entrypoint-then-apply-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"20% Off\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"20\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":568.2105339108126,\"y\":10.691996160902747}},\"otherwise\":null,\"tooltips\":{},\"dimensions\":{\"width\":261,\"height\":160},\"position\":{\"x\":246,\"y\":0}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2025-11-05T17:24:06Z\",\"endDate\":\"2025-12-01T18:09:57Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1559040491758":"null","1559041245422":"{\"config\":{\"message\":\"Employee Discount\",\"isEnabled\":true,\"customLogic\":{\"id\":\"\u003croot\u003e\",\"type\":\"ROOT\",\"position\":{\"x\":0,\"y\":0},\"dimensions\":{\"width\":150,\"height\":0},\"entryPoint\":{\"id\":\"check-if335\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"entrypoint\",\"then\":{\"id\":\"entrypoint-then-apply-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"50% Off\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"50\"},\"position\":{\"x\":1220.7116439931915,\"y\":6.044672851561771},\"dimensions\":{\"width\":332,\"height\":308}},\"type\":\"CHECK_IF\",\"position\":{\"x\":578,\"y\":0},\"tooltips\":{},\"matchType\":\"AND\",\"otherwise\":{\"id\":\"entrypoint-otherwise-group-2\",\"then\":{\"id\":\"entrypoint-then-apply-discount-2\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"70% Off\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"70\"},\"position\":{\"x\":1352.824850177889,\"y\":398.03445695413615},\"dimensions\":{\"width\":332,\"height\":308}},\"type\":\"CHECK_IF\",\"position\":{\"x\":1004.4308318147413,\"y\":412.3358955956047},\"tooltips\":{},\"matchType\":\"AND\",\"otherwise\":{\"id\":\"check-if446\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount144\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"50\"},\"dimensions\":{\"width\":332,\"height\":340},\"position\":{\"x\":1805.5402661796802,\"y\":754.0344569541362},\"title\":\"50% Off\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8931545612526,8961485865198,8961651015918\"}}],\"dimensions\":{\"width\":292,\"height\":252},\"position\":{\"x\":1443,\"y\":752.840477911147},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"asListOfIds\":\"459518804206\",\"selectedCollections\":[]},\"includeOrExclude\":\"INCLUDE\"},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedCollections\":[],\"asListOfIds\":\"8916003487982,8931545612526,8961485865198,8961651015918\",\"selectedProducts\":[]}}],\"dimensions\":{\"width\":292,\"height\":325}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"asListOfIds\":\"458138484974,460642877678\",\"selectedCollections\":[]},\"includeOrExclude\":\"INCLUDE\"},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"selectedCollections\":[],\"tagsToCheck\":[\"dwo\"]}}],\"dimensions\":{\"width\":292,\"height\":338}},\"otherwise\":null,\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMER_TAGS\",\"tagsToCheck\":[\"employee\"]}}],\"position\":{\"x\":246,\"y\":0},\"dimensions\":{\"width\":261,\"height\":160},\"tooltips\":{}}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2025-11-06T00:22:52Z\",\"endDate\":null,\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1559053435118":"{\"config\":{\"message\":\"IPA Pro 60% Off DIscount\",\"isEnabled\":true,\"customLogic\":{\"id\":\"\u003croot\u003e\",\"type\":\"ROOT\",\"entryPoint\":{\"id\":\"entrypoint\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMER_TAGS\",\"selectedCustomers\":[{\"id\":\"gid:\/\/shopify\/Customer\/8690698092782\",\"name\":\"nickwramage240@gmail.com\",\"caption\":\"nickwramage240@gmail.com\"}],\"tagsToCheck\":[\"SmithPro-IPA-Tier2\"]}}],\"then\":{\"id\":\"check-if661\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"entrypoint-then-apply-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"IPA Pro 60% Off Discount\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"60\"},\"dimensions\":{\"width\":370,\"height\":396},\"position\":{\"x\":952.216524124254,\"y\":-112.15941053801613}},\"otherwise\":{\"id\":\"check-if705\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount697\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"50\"},\"dimensions\":{\"width\":332,\"height\":396},\"position\":{\"x\":1450,\"y\":331.8405894619839},\"title\":\"IPA Pro 50% Off Discount\"},\"otherwise\":{\"id\":\"check-if381\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount532\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"30\"},\"dimensions\":{\"width\":332,\"height\":340},\"position\":{\"x\":1862,\"y\":774.7677754280209},\"title\":\"IPA Pro 30% Off Discount\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"456925282542\"}}],\"dimensions\":{\"width\":292,\"height\":232},\"position\":{\"x\":1474,\"y\":775.8405894619839},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"456924463342,458138484974,460345442542,457447702766,456924397806,457447637230,460271976686,456924430574,458402365678,460642877678\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"selectedCollections\":[],\"tagsToCheck\":[\"dwo\",\"exclude_from_pro\"]}}],\"dimensions\":{\"width\":292,\"height\":465},\"position\":{\"x\":954.2949200242301,\"y\":323.56895128405296},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"459518804206\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982,8931545612526,8961485865198,8961651015918\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"selectedCollections\":[],\"tagsToCheck\":[\"dwo\",\"exclude_from_pro\"]}}],\"position\":{\"x\":587.8750838736851,\"y\":-4.844631524764594},\"dimensions\":{\"width\":292,\"height\":398},\"tooltips\":{}},\"otherwise\":null,\"tooltips\":{},\"dimensions\":{\"width\":292,\"height\":160},\"position\":{\"x\":246,\"y\":0}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2025-11-05T20:30:31Z\",\"endDate\":null,\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1559058677998":"{\"config\":{\"message\":\"IPA Pro 50% Off Discount\",\"isEnabled\":true,\"customLogic\":{\"id\":\"converted-legacy-root\",\"type\":\"ROOT\",\"entryPoint\":{\"id\":\"check-if601\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"converted-legacy-criteria\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982,8931545612526,8961485865198,8961651015918\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"selectedCollections\":[],\"selectedProducts\":[],\"tagsToCheck\":[\"dwo\",\"exclude_from_pro\"]}}],\"then\":{\"id\":\"converted-legacy-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"IPA Pro 50% Off Discount\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"50\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":974,\"y\":0}},\"otherwise\":{\"id\":\"check-if802\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount444\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"30\"},\"dimensions\":{\"width\":332,\"height\":340},\"position\":{\"x\":1386,\"y\":356},\"title\":\"IPA Pro 30% Off Discount\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"456925282542\"}}],\"dimensions\":{\"width\":292,\"height\":232},\"position\":{\"x\":998,\"y\":356},\"tooltips\":{}},\"dimensions\":{\"width\":292,\"height\":325},\"position\":{\"x\":578,\"y\":0},\"tooltips\":{}},\"otherwise\":null,\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMER_TAGS\",\"tagsToCheck\":[\"SmithPro-IPA-Tier1\"]}}],\"position\":{\"x\":246,\"y\":0},\"dimensions\":{\"width\":289,\"height\":160},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2025-11-05T20:43:19Z\",\"endDate\":null,\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1559310926062":"null","1561844089070":"{\"config\":{\"message\":\"BFCM 2025 (Non Pros)\",\"isEnabled\":true,\"customLogic\":{\"id\":\"\u003croot\u003e\",\"type\":\"ROOT\",\"entryPoint\":{\"id\":\"entrypoint\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMER_TAGS\",\"tagsToCheck\":[\"SmithPro-IPA-Tier1\",\"SmithPro-IPA-Tier2\",\"SmithPro-OPL\",\"employee\"]}}],\"then\":{\"id\":\"check-if974\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"entrypoint-then-apply-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"20% Off\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"20\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":1043.9885899564695,\"y\":-3.1493952286311497}},\"otherwise\":{\"id\":\"check-if663\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount937\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"40\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":1450,\"y\":352.85060477136886},\"title\":\"40% Off\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458138484974,460642877678\"}}],\"dimensions\":{\"width\":292,\"height\":180},\"position\":{\"x\":1054,\"y\":352.85060477136886},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458138681582,458138583278,457477882094,457411264750,456923087086,457402777838,458070196462,457403269358,457405661422,458075111662,456923152622,458075439342,457405825262\",\"tagsToCheck\":[\"full_price\"]}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982,8931545612526,8933393694958,8933393727726,8934697173230,8934697205998,8961485865198,8961651015918,8976873292014,8976873324782\"}}],\"position\":{\"x\":662.8575817419362,\"y\":3.2589971471775385},\"dimensions\":{\"width\":292,\"height\":513},\"tooltips\":{}},\"otherwise\":null,\"tooltips\":{},\"dimensions\":{\"width\":292,\"height\":220},\"position\":{\"x\":218.230299704829,\"y\":-4.272261583872421}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2025-11-25T08:00:00Z\",\"endDate\":\"2025-11-28T01:45:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1562561315054":"{\"config\":{\"message\":\"BFCM 2025 (Non Pros) Site Exclusives 30%\",\"isEnabled\":true,\"customLogic\":{\"id\":\"\u003croot\u003e\",\"type\":\"ROOT\",\"entryPoint\":{\"id\":\"entrypoint\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMER_TAGS\",\"tagsToCheck\":[\"SmithPro-IPA-Tier1\",\"SmithPro-IPA-Tier2\",\"SmithPro-OPL\",\"employee\",\"SmithPro-OPL\"]}}],\"then\":{\"id\":\"check-if974\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"entrypoint-then-apply-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"20% Off\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"20\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":1062.3499388229598,\"y\":-7.739732445253702}},\"otherwise\":{\"id\":\"check-if663\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount937\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"40\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":1454.3683980406995,\"y\":352.85060477136886},\"title\":\"40% Off\"},\"otherwise\":{\"id\":\"check-if636\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount242\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"30\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":1896.925146737231,\"y\":715.5669791439132},\"title\":\"30% Off Web Exclusive\"},\"otherwise\":null,\"conditions\":[{\"type\":\"IF_IN_CART\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_VARIANTS\",\"selectedProducts\":[],\"selectedProductVariants\":[],\"compactFormat\":{\"8935916339438\":\"47037333930222\",\"8935916994798\":\"47042039349486\"}}}],\"dimensions\":{\"width\":292,\"height\":300},\"position\":{\"x\":1474,\"y\":708.8506047713688},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458138484974,460642877678\"}}],\"dimensions\":{\"width\":292,\"height\":180},\"position\":{\"x\":1054,\"y\":352.85060477136886},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458138681582,458138583278,457477882094,456923087086,458075439342,457405825262,457403269358,458075111662,456923152622,458070196462,457405661422\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982,8933393694958,8933393727726,8934697173230,8934697205998,8976873292014,8976873324782\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_VARIANTS\",\"selectedProductVariants\":[],\"compactFormat\":{\"8935916339438\":\"47037333930222\",\"8935916994798\":\"47042039349486\"}}}],\"position\":{\"x\":662.8575817419362,\"y\":3.2589971471775385},\"dimensions\":{\"width\":292,\"height\":566},\"tooltips\":{}},\"otherwise\":null,\"tooltips\":{},\"dimensions\":{\"width\":292,\"height\":220},\"position\":{\"x\":218.230299704829,\"y\":-4.272261583872421}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2025-11-28T01:45:00Z\",\"endDate\":\"2025-12-02T07:59:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1564643786990":"{\"config\":{\"message\":\"Testing Copy of BFCM 2025 (Non Pros)\",\"isEnabled\":true,\"customLogic\":{\"id\":\"\u003croot\u003e\",\"type\":\"ROOT\",\"entryPoint\":{\"id\":\"check-if843\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"check-if755\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"entrypoint-then-apply-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"40% Off\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"40\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":1097.9184669701528,\"y\":-204.09659111186448}},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"459518804206\"}}],\"position\":{\"x\":710.3287546943376,\"y\":-5.236710107905614},\"dimensions\":{\"width\":292,\"height\":180},\"tooltips\":{}},\"otherwise\":{\"id\":\"check-if926\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount944\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"20\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":998.7501278122061,\"y\":258.5947905625383},\"title\":\"20% Off\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"459518804206\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProductVariants\":[],\"selectedProducts\":[],\"asListOfIds\":\"8999084851438\"}}],\"dimensions\":{\"width\":292,\"height\":253},\"position\":{\"x\":565.1770056271239,\"y\":202.9940753091775},\"tooltips\":{}},\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMERS\",\"selectedCustomers\":[{\"id\":\"gid:\/\/shopify\/Customer\/9011381960942\",\"name\":\"khalob@redvanworkshop.com\",\"caption\":\"khalob@redvanworkshop.com\"},{\"id\":\"gid:\/\/shopify\/Customer\/8554517692654\",\"name\":\"Nick Wramage\",\"caption\":\"nick.wramage@smithoptics.com\"}]}}],\"position\":{\"x\":218.230299704829,\"y\":-4.272261583872421},\"dimensions\":{\"width\":292,\"height\":200},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2025-12-01T18:11:00Z\",\"endDate\":\"2025-12-01T18:11:47Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1565719888110":"{\"config\":{\"isEnabled\":true,\"message\":\"BFCM Free GIFT With Purchase\",\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"customLogic\":{\"id\":\"\u003croot\u003e\",\"type\":\"ROOT\",\"entryPoint\":{\"id\":\"check-if709\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"entrypoint\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"conditions\":[{\"type\":\"PURCHASE_REQUIREMENTS\",\"minOrMax\":\"MIN\",\"requirements\":{\"requirementType\":\"SUBTOTAL\",\"quantity\":\"\",\"subtotal\":\"275.00\",\"appliesTo\":\"ENTIRE_ORDER\",\"disableCurrencyConversion\":true}}],\"then\":{\"id\":\"entrypoint-then-auto-add-to-cart\",\"type\":\"ADD_TO_CART\",\"title\":\"BFCM Free GIFT With Purchase\",\"dimensions\":{\"width\":650,\"height\":765},\"position\":{\"x\":974,\"y\":0},\"variants\":{\"8999084851438\":\"47092960952558,47092960985326,47092961018094\"},\"discounts\":{}},\"otherwise\":null,\"tooltips\":{},\"dimensions\":{\"width\":292,\"height\":200},\"position\":{\"x\":578,\"y\":-0.5}},\"otherwise\":null,\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMER_TAGS\",\"tagsToCheck\":[\"gwp-testing\"]}}],\"position\":{\"x\":246,\"y\":0},\"dimensions\":{\"width\":261,\"height\":160},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"developerOptions\":{\"alwaysThrow\":false},\"cartLineSortOrder\":\"NONE\"},\"startDate\":\"2025-11-28T17:20:17Z\",\"endDate\":\"2025-11-28T17:31:59Z\",\"discountClass\":\"AUTO_ADD_TO_CART\",\"discountClasses\":[\"AUTO_ADD_TO_CART\"]}","1569940308206":"null","1569967636718":"null","1571019620590":"{\"config\":{\"message\":\"BFCM 2025 (Non Pros) Site Exclusives 40%\",\"isEnabled\":true,\"customLogic\":{\"id\":\"\u003croot\u003e\",\"type\":\"ROOT\",\"entryPoint\":{\"id\":\"entrypoint\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMERS\",\"tagsToCheck\":[\"SmithPro-IPA-Tier1\",\"SmithPro-IPA-Tier2\",\"SmithPro-OPL\",\"employee\",\"SmithPro-OPL\"],\"selectedCustomers\":[{\"id\":\"gid:\/\/shopify\/Customer\/9200156934382\",\"name\":\"Regios Technologies, Inc.\",\"caption\":\"support@regiostech.com\"},{\"id\":\"gid:\/\/shopify\/Customer\/9011381960942\",\"name\":\"khalob@redvanworkshop.com\",\"caption\":\"khalob@redvanworkshop.com\"}]}}],\"then\":{\"id\":\"check-if974\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"entrypoint-then-apply-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"20% Off\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"20\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":1062.3499388229598,\"y\":-7.739732445253702}},\"otherwise\":{\"id\":\"check-if663\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount937\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"40\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":1454.3683980406995,\"y\":352.85060477136886},\"title\":\"40% Off\"},\"otherwise\":{\"id\":\"apply-discount242\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"30\"},\"dimensions\":{\"width\":332,\"height\":332},\"position\":{\"x\":1474,\"y\":708.8506047713688},\"title\":\"30% Off Web Exclusive\"},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458396762350\"}}],\"dimensions\":{\"width\":218,\"height\":160},\"position\":{\"x\":1086.3722826342505,\"y\":389.44535905356514},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"457402843374,455767294190\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_VARIANTS\",\"selectedProductVariants\":[],\"compactFormat\":{\"8935916994798\":\"47042039349486\"}}}],\"position\":{\"x\":643.1527140515228,\"y\":39.85375142937378},\"dimensions\":{\"width\":292,\"height\":286},\"tooltips\":{}},\"otherwise\":null,\"tooltips\":{},\"dimensions\":{\"width\":292,\"height\":180},\"position\":{\"x\":219.66169746625587,\"y\":-7.973573146888139}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2025-12-16T12:43:55Z\",\"endDate\":\"2026-01-15T16:57:53Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1572799480046":"{\"config\":{\"message\":\"Boxing Day 2025 20% Off\",\"isEnabled\":true,\"customLogic\":{\"type\":\"ROOT\",\"id\":\"root\",\"entryPoint\":{\"id\":\"wizard-6224\",\"type\":\"CHECK_IF\",\"matchType\":\"OR\",\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"LOCATION\",\"selectedCustomers\":[],\"countryCodes\":[\"CA\"]}},{\"type\":\"MARKET_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_MARKETS\",\"ids\":[\"30351229166\"]}}],\"then\":{\"id\":\"check-if973\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount991\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"20\"},\"dimensions\":{\"width\":332,\"height\":308},\"position\":{\"x\":1022,\"y\":0},\"title\":\"20% Off\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982,8931545612526,8933393694958,8933393727726,8934697173230,8934697205998,8961485865198,8961651015918,8976873292014,8976873324782\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"457402843374,458142515438,457411461358,457405858030,457758540014,457402679534,457402777838,458070196462,457405661422,456922628334,457402581230,456923152622,457405726958,457406120174,458402562286,457402941678,457411297518,457403269358,457406906606,463090647278,457406873838,458402595054\"}}],\"dimensions\":{\"width\":292,\"height\":733},\"position\":{\"x\":608.1731174570375,\"y\":-5.885763634860837},\"tooltips\":{}},\"otherwise\":null,\"dimensions\":{\"width\":211,\"height\":213},\"position\":{\"x\":216.3145868095417,\"y\":0},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2025-12-26T08:00:00Z\",\"endDate\":\"2025-12-27T07:59:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1572818747630":"null","1572828348654":"null","1572829429998":"null","1572975640814":"null","1574560825582":"null","1574562169070":"null","1577584951534":"null","1579641340142":"{\"config\":{\"message\":\"30% Off Prescription \u0026 Blue Light\",\"isEnabled\":true,\"customLogic\":{\"type\":\"ROOT\",\"id\":\"root\",\"entryPoint\":{\"id\":\"wizard-6120\",\"type\":\"CHECK_IF\",\"matchType\":\"OR\",\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458138484974,460345442542,456924397806,460271976686,456924430574,460642877678\"}}],\"then\":{\"id\":\"wizard-6120-then-apply-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"30% Off\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"30\"},\"dimensions\":{\"width\":370,\"height\":428},\"position\":{\"x\":648.9047216494387,\"y\":100.03456621083505}},\"otherwise\":null,\"dimensions\":{\"width\":292,\"height\":345},\"position\":{\"x\":246,\"y\":-0.6973718331752252},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2026-01-15T16:52:38Z\",\"endDate\":\"2026-02-01T07:59:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1583732424942":"null","1583986245870":"null","1583996502254":"null","1584013181166":"null","1584014688494":"null","1584256352494":"null","1585077944558":"null","1585379049710":"null","1585380819182":"null","1585381671150":"null","1585931419886":"null","1587009388782":"null","1589237580014":"null","1590462316782":"null","1590467035374":"null","1590471852270":"null","1590474178798":"null","1590730916078":"null","1592946753774":"null","1596863185134":"null","1597460938990":"null","1598558634222":"null","1599347425518":"null","1602101477614":"null","1602317484270":"null","1602317811950":"null","1607815889134":"null","1607828504814":"null","1607994867950":"{\"config\":{\"message\":\"Buy 2 Sunglasses Get Replacement Lenses Free\",\"isEnabled\":true,\"customLogic\":{\"type\":\"ROOT\",\"id\":\"root\",\"entryPoint\":{\"id\":\"check-if534\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"wizard-92\",\"type\":\"BUY_X\",\"requirements\":[{\"quantity\":2,\"productEligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"456924430574,458070196462\"}}],\"then\":{\"id\":\"wizard-92-then-apply-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"Buy 2 Sunglass Get Lens Free\",\"value\":{\"type\":\"GET_Y\",\"customerGets\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"457405661422\"},\"atDiscountedValue\":{\"type\":\"PERCENTAGE\",\"percentage\":\"100\"},\"quantity\":\"1\"},\"dimensions\":{\"width\":650,\"height\":768},\"position\":{\"x\":1369.4309605533829,\"y\":-34.36309468467957}},\"otherwise\":null,\"dimensions\":{\"width\":650,\"height\":649},\"position\":{\"x\":606.4125970639244,\"y\":-15.651207166318976},\"maximumTimesToApply\":1},\"otherwise\":null,\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMER_TAGS\",\"tagsToCheck\":[\"employee\",\"SmithPro-IPA-Tier2\",\"SmithPro-IPA-Tier1\",\"SmithPro-OPL\",\"SmithPro-EV\"]}},{\"type\":\"MARKET_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_MARKETS\",\"ids\":[\"33097646318\",\"33097515246\",\"33097679086\",\"33097580782\",\"31346819310\",\"31346950382\"]}}],\"position\":{\"x\":223.82745651438154,\"y\":-15.651207166318976},\"dimensions\":{\"width\":292,\"height\":365},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2026-05-01T07:00:00Z\",\"endDate\":\"2026-05-15T06:59:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1608339685614":"{\"config\":{\"message\":\"REI May Bike Promo Window\",\"isEnabled\":true,\"customLogic\":{\"id\":\"converted-legacy-root\",\"type\":\"ROOT\",\"entryPoint\":{\"id\":\"converted-legacy-criteria\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"LOGGED_IN_CUSTOMERS\"}},{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMER_SEGMENTS\",\"asListOfIds\":\"553725985006\"}}],\"then\":{\"id\":\"check-if453\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"converted-legacy-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"60% REI Discount Applied\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"60\"},\"dimensions\":{\"width\":332,\"height\":340},\"position\":{\"x\":974,\"y\":-0.5}},\"otherwise\":{\"id\":\"check-if219\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount842\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"50\"},\"dimensions\":{\"width\":332,\"height\":364},\"position\":{\"x\":1438,\"y\":387.5},\"title\":\"50% REI Discount Applied\"},\"otherwise\":{\"id\":\"check-if502\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount681\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"40\"},\"dimensions\":{\"width\":332,\"height\":364},\"position\":{\"x\":1858,\"y\":799.5},\"title\":\"40% REI Discount Applied\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"459956879598\"}}],\"dimensions\":{\"width\":292,\"height\":232},\"position\":{\"x\":1470,\"y\":799.5},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8935877705966,8935877443822,8935877509358,8935876853998\"}}],\"dimensions\":{\"width\":292,\"height\":252},\"position\":{\"x\":1050,\"y\":387.5},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8935915421934,8935917158638,8950167961838,8939133632750,8939133534446,8935916601582,8935915553006,8935917093102\"}}],\"position\":{\"x\":642,\"y\":0},\"dimensions\":{\"width\":292,\"height\":272},\"tooltips\":{}},\"otherwise\":null,\"dimensions\":{\"width\":288,\"height\":305},\"position\":{\"x\":245.5,\"y\":0},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2026-05-03T07:00:00Z\",\"endDate\":\"2026-05-18T06:59:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1610084417774":"null","1610090184942":"null","1610785882350":"{\"config\":{\"message\":\"Spring Sale 20% Off (May Map 2026)\",\"isEnabled\":true,\"customLogic\":{\"type\":\"ROOT\",\"id\":\"root\",\"entryPoint\":{\"id\":\"wizard-6224\",\"type\":\"CHECK_IF\",\"matchType\":\"OR\",\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"LOCATION\",\"selectedCustomers\":[],\"countryCodes\":[\"CA\",\"US\"]}},{\"type\":\"MARKET_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_MARKETS\",\"ids\":[\"30351229166\",\"30058905838\"]}}],\"then\":{\"id\":\"check-if973\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount991\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"20\"},\"dimensions\":{\"width\":332,\"height\":364},\"position\":{\"x\":1037.9522633744857,\"y\":-2.175308641975306},\"title\":\"20% Off\"},\"otherwise\":{\"id\":\"check-if477\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount102\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"30\"},\"dimensions\":{\"width\":332,\"height\":340},\"position\":{\"x\":1430,\"y\":388},\"title\":\"30% Off\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"472130912494,460642877678,458138484974,460345442542,456924397806,456924430574\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"tagsToCheck\":[\"exclude_from_map\"]}}],\"dimensions\":{\"width\":292,\"height\":365},\"position\":{\"x\":1042,\"y\":388},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458142515438,467072188654,469899509998,457402679534,457758212334,457402777838,458070196462,457405661422\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"tagsToCheck\":[\"exclude_from_map\"]}}],\"dimensions\":{\"width\":292,\"height\":498},\"position\":{\"x\":608.1731174570375,\"y\":-5.885763634860837},\"tooltips\":{}},\"otherwise\":null,\"dimensions\":{\"width\":280,\"height\":271},\"position\":{\"x\":216.3145868095417,\"y\":0},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2026-05-15T07:00:00Z\",\"endDate\":\"2026-05-26T06:59:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1611032264942":"{\"config\":{\"message\":\"EMEA Spring Sale 20% Off (May Map 2026)\",\"isEnabled\":true,\"customLogic\":{\"type\":\"ROOT\",\"id\":\"root\",\"entryPoint\":{\"id\":\"wizard-6224\",\"type\":\"CHECK_IF\",\"matchType\":\"OR\",\"conditions\":[{\"type\":\"MARKET_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_MARKETS\",\"ids\":[\"31346950382\",\"33097580782\",\"33097679086\",\"33097515246\",\"31346819310\",\"33097646318\"]}}],\"then\":{\"id\":\"check-if973\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount991\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"20\"},\"dimensions\":{\"width\":332,\"height\":340},\"position\":{\"x\":1022,\"y\":0},\"title\":\"- 20%\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458142515438,467072188654,469899509998,457402679534,457758212334,457402777838,458070196462,457405661422\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"tagsToCheck\":[\"exclude_from_map\"]}}],\"dimensions\":{\"width\":292,\"height\":498},\"position\":{\"x\":608.1731174570375,\"y\":-5.885763634860837},\"tooltips\":{}},\"otherwise\":null,\"dimensions\":{\"width\":280,\"height\":217},\"position\":{\"x\":216.3145868095417,\"y\":0},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2026-05-15T07:00:00Z\",\"endDate\":\"2026-05-26T06:59:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1611094753518":"null","1612353339630":"null","1613475971310":"null","1614543159534":"null","1614919237870":"null","1625590890734":"null","1625796903150":"{\"config\":{\"message\":\"Testing Promo For eHouse\",\"isEnabled\":true,\"customLogic\":{\"type\":\"ROOT\",\"id\":\"root\",\"entryPoint\":{\"id\":\"wizard-6224\",\"type\":\"CHECK_IF\",\"matchType\":\"OR\",\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMERS\",\"selectedCustomers\":[],\"countryCodes\":[\"CA\",\"US\"],\"asListOfIds\":\"9988522868974,9453788725486\"}}],\"then\":{\"id\":\"check-if973\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount991\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"20\"},\"dimensions\":{\"width\":332,\"height\":364},\"position\":{\"x\":1037.9522633744857,\"y\":-2.175308641975306},\"title\":\"20% Off\"},\"otherwise\":{\"id\":\"check-if477\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount102\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"30\"},\"dimensions\":{\"width\":332,\"height\":340},\"position\":{\"x\":1430,\"y\":388},\"title\":\"30% Off\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"472130912494,460642877678,458138484974,460345442542,456924397806,456924430574\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"tagsToCheck\":[\"exclude_from_map\"]}}],\"dimensions\":{\"width\":292,\"height\":365},\"position\":{\"x\":1042,\"y\":388},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458142515438,467072188654,469899509998,457402679534,457758212334,457402777838,458070196462,457405661422\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"tagsToCheck\":[\"exclude_from_map\"]}}],\"dimensions\":{\"width\":292,\"height\":372},\"position\":{\"x\":608.1731174570375,\"y\":-5.885763634860837},\"tooltips\":{}},\"otherwise\":null,\"dimensions\":{\"width\":292,\"height\":272},\"position\":{\"x\":216.3145868095417,\"y\":0},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2026-06-24T07:00:00Z\",\"endDate\":null,\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1627336704238":"{\"config\":{\"message\":\"Summer Sale 20% Off (July 4th 2026)\",\"isEnabled\":true,\"customLogic\":{\"type\":\"ROOT\",\"id\":\"root\",\"entryPoint\":{\"id\":\"wizard-6224\",\"type\":\"CHECK_IF\",\"matchType\":\"OR\",\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"LOCATION\",\"selectedCustomers\":[],\"countryCodes\":[\"CA\",\"US\"]}},{\"type\":\"MARKET_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_MARKETS\",\"ids\":[\"30351229166\",\"30058905838\"]}}],\"then\":{\"id\":\"check-if973\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount991\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"20\"},\"dimensions\":{\"width\":332,\"height\":364},\"position\":{\"x\":1037.9522633744857,\"y\":-2.175308641975306},\"title\":\"20% Off\"},\"otherwise\":{\"id\":\"check-if477\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount102\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"30\"},\"dimensions\":{\"width\":332,\"height\":340},\"position\":{\"x\":1430,\"y\":388},\"title\":\"30% Off\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"472130912494,460642877678,458138484974,460345442542,456924397806,456924430574\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"tagsToCheck\":[\"exclude_from_map\"]}}],\"dimensions\":{\"width\":292,\"height\":365},\"position\":{\"x\":1042,\"y\":388},\"tooltips\":{}},\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458142515438,467072188654,469899509998,457402679534,457758212334,457402777838,458070196462,457405661422\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"tagsToCheck\":[\"exclude_from_map\"]}}],\"dimensions\":{\"width\":292,\"height\":498},\"position\":{\"x\":608.1731174570375,\"y\":-5.885763634860837},\"tooltips\":{}},\"otherwise\":null,\"dimensions\":{\"width\":280,\"height\":271},\"position\":{\"x\":216.3145868095417,\"y\":0},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2026-07-03T07:00:00Z\",\"endDate\":\"2026-07-07T06:59:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1627337261294":"{\"config\":{\"message\":\"Summer Sale 30% Off RX (July 4th 2026 Extension)\",\"isEnabled\":true,\"customLogic\":{\"type\":\"ROOT\",\"id\":\"root\",\"entryPoint\":{\"id\":\"wizard-6224\",\"type\":\"CHECK_IF\",\"matchType\":\"OR\",\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"LOCATION\",\"selectedCustomers\":[],\"countryCodes\":[\"US\"]}},{\"type\":\"MARKET_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_MARKETS\",\"ids\":[\"30058905838\"]}}],\"then\":{\"id\":\"check-if973\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount991\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"30\"},\"dimensions\":{\"width\":332,\"height\":364},\"position\":{\"x\":1037.9522633744857,\"y\":-2.175308641975306},\"title\":\"30% Off\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"472130912494,458138484974,460345442542,456924397806,456924430574,460642877678\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"tagsToCheck\":[\"exclude_from_map\"]}}],\"dimensions\":{\"width\":292,\"height\":418},\"position\":{\"x\":608.1731174570375,\"y\":-5.885763634860837},\"tooltips\":{}},\"otherwise\":null,\"dimensions\":{\"width\":228,\"height\":265},\"position\":{\"x\":216.3145868095417,\"y\":0},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2026-07-07T07:00:00Z\",\"endDate\":\"2026-07-13T06:59:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1627340865774":"{\"config\":{\"message\":\"EMEA Summer Sale 20% Off (July 4th Map 2026)\",\"isEnabled\":true,\"customLogic\":{\"type\":\"ROOT\",\"id\":\"root\",\"entryPoint\":{\"id\":\"wizard-6224\",\"type\":\"CHECK_IF\",\"matchType\":\"OR\",\"conditions\":[{\"type\":\"MARKET_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_MARKETS\",\"ids\":[\"31346950382\",\"33097580782\",\"33097679086\",\"33097515246\",\"31346819310\",\"33097646318\"]}}],\"then\":{\"id\":\"check-if973\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"apply-discount991\",\"type\":\"APPLY_DISCOUNT\",\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"20\"},\"dimensions\":{\"width\":332,\"height\":340},\"position\":{\"x\":1022,\"y\":0},\"title\":\"- 20%\"},\"otherwise\":null,\"conditions\":[{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCTS\",\"selectedProducts\":[],\"asListOfIds\":\"8916003487982\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"INCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458142515438,467072188654,469899509998,457402679534,457758212334,457402777838,458070196462,457405661422\"}},{\"type\":\"PRODUCT_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_PRODUCT_TAGS\",\"tagsToCheck\":[\"exclude_from_map\"]}}],\"dimensions\":{\"width\":292,\"height\":498},\"position\":{\"x\":608.1731174570375,\"y\":-5.885763634860837},\"tooltips\":{}},\"otherwise\":null,\"dimensions\":{\"width\":280,\"height\":217},\"position\":{\"x\":216.3145868095417,\"y\":0},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2026-07-03T07:00:00Z\",\"endDate\":\"2026-07-07T06:59:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1634033991918":"null","1634040971502":"null","1636413047022":"null","1636647960814":"{\"config\":{\"message\":\"Buy One Prescription Eyewear Get One Half Off\",\"isEnabled\":true,\"customLogic\":{\"type\":\"ROOT\",\"id\":\"root\",\"entryPoint\":{\"id\":\"check-if534\",\"type\":\"CHECK_IF\",\"matchType\":\"AND\",\"then\":{\"id\":\"wizard-92\",\"type\":\"BUY_X\",\"requirements\":[{\"quantity\":1,\"productEligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"458070196462\"}}],\"then\":{\"id\":\"wizard-92-then-apply-discount\",\"type\":\"APPLY_DISCOUNT\",\"title\":\"Buy One Get One 50% Off\",\"value\":{\"type\":\"GET_Y\",\"customerGets\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"477827891438\"},\"atDiscountedValue\":{\"type\":\"PERCENTAGE\",\"percentage\":\"50\"},\"quantity\":\"02\"},\"dimensions\":{\"width\":650,\"height\":768},\"position\":{\"x\":1220.7847170300665,\"y\":-28.007265669135506}},\"otherwise\":{\"dimensions\":{\"width\":428,\"height\":629},\"position\":{\"x\":674,\"y\":913.9927343308644},\"type\":\"BUY_X\",\"id\":\"BUY_X424\",\"requirements\":[{\"productEligibility\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"456924397806,456924430574\"},\"quantity\":2}],\"maximumTimesToApply\":1,\"then\":{\"dimensions\":{\"width\":650,\"height\":768},\"position\":{\"x\":1280,\"y\":1101.9927343308646},\"type\":\"APPLY_DISCOUNT\",\"id\":\"APPLY_DISCOUNT31\",\"title\":\"Buy One Get One 50% Off\",\"value\":{\"type\":\"GET_Y\",\"customerGets\":{\"type\":\"SPECIFIC_COLLECTIONS\",\"selectedCollections\":[],\"asListOfIds\":\"477827891438\"},\"atDiscountedValue\":{\"type\":\"PERCENTAGE\",\"percentage\":\"50\"},\"quantity\":\"01\"}},\"otherwise\":null},\"dimensions\":{\"width\":324,\"height\":512},\"position\":{\"x\":606.4125970639244,\"y\":-15.651207166318976},\"maximumTimesToApply\":1},\"otherwise\":null,\"conditions\":[{\"type\":\"CUSTOMER_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_CUSTOMER_TAGS\",\"tagsToCheck\":[\"employee\",\"SmithPro-IPA-Tier2\",\"SmithPro-IPA-Tier1\",\"SmithPro-OPL\",\"SmithPro-EV\"]}},{\"type\":\"MARKET_ELIGIBILITY\",\"includeOrExclude\":\"EXCLUDE\",\"eligibility\":{\"type\":\"SPECIFIC_MARKETS\",\"ids\":[\"33097646318\",\"33097515246\",\"33097679086\",\"33097580782\",\"31346819310\",\"31346950382\"]}}],\"position\":{\"x\":223.82745651438154,\"y\":-15.651207166318976},\"dimensions\":{\"width\":292,\"height\":365},\"tooltips\":{}},\"dimensions\":{\"width\":150,\"height\":0},\"position\":{\"x\":0,\"y\":0}},\"customerEligibility\":{\"type\":\"ALL_CUSTOMERS\"},\"productEligibility\":{\"type\":\"ALL_PRODUCTS\"},\"developerOptions\":{\"alwaysThrow\":false},\"minimumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"maximumPurchaseRequirements\":{\"requirementType\":\"NONE\",\"quantity\":\"0\",\"subtotal\":\"0\",\"appliesTo\":\"ELIGIBLE_LINE_ITEMS\"},\"value\":{\"type\":\"PERCENTAGE\",\"percentage\":\"0\"},\"appliesToSellingPlans\":\"ALL_SELLING_PLANS\",\"salePriceHandlingStrategy\":\"APPLY_TO_COMPARE_AT_PRICE\",\"cartLineSortOrder\":\"HIGHEST_PRICED_PRODUCTS\"},\"startDate\":\"2026-08-01T07:00:00Z\",\"endDate\":\"2026-09-01T06:59:59Z\",\"discountClass\":\"PRODUCT\",\"discountClasses\":[\"PRODUCT\"]}","1638105776366":"null","1638130516206":"null","1644489539822":"null"},
  "calculateDiscountBasedOnQuantity": false,
  "countryCode": "US",
  "currencyCode": "USD",
  "currencySymbol": "$",
  
  "customer": null,
  
  "customerMetafieldsToCheck": "",
  
  "moneyFormat": "$0.00",
  "moneyFormatString": "${{amount}}",
  
  "themeType": "dawn",
  "badgeTemplate": "[discount_message]",
  "badgeCss": "",
  "descriptionTemplate": "",
  "descriptionCss": "",
  "priceOnSaleClass": "",
  "delay": 0,
  "logLevel": "none",
  "regularPriceTemplate": "[regular_price]",
  "salePriceTemplate": "[sale_price]",
  "regiosDiscountsAppProxyUrl": "\/apps\/regios-discounts",
  "useAppProxyForManualCodeStrikethrough": false,
  "cart": {
    "attributes": {},
    "discountCodes": [],
    "items": [
      
    ]
  },
  "featureFlags": "",
  "designMode": false,
  
    "marketId": 30058905838,
  

  "doppV3Fallbacks": {
    
      "product": null,
    
    "keep-this-last": ""
  }
  
}
</script>

<script id="regios-dopp-script">
  var configScript = document.getElementById('regios-dopp-config');

  if (!configScript) {
    throw new Error('[Regios Discounts] Critical error: Configuration script not found.');
  } 

  var config = JSON.parse(configScript.textContent);
  window.RegiosDOPP = Object.assign(window.RegiosDOPP || {}, config);
</script>


<!-- END app block --><!-- BEGIN app block: shopify://apps/contentsquare-analytics/blocks/csq_tag_snippet_script/019a7cb2-3ace-7c1e-bb5d-112ee54f5310 -->




<script type="text/javascript">
  // Contentsquare Main Tracking Tag
  (function () {
    var domainHashMap = null;
    var tagHash = "b91ef650ade9d";
    var hostname = window.location.hostname;

    var hash = null;
    var longestDomain = "";
    if (domainHashMap && typeof domainHashMap === "object") {
      if (domainHashMap[hostname]) {
        hash = domainHashMap[hostname];
      } else {
        for (var domain in domainHashMap) {
          if (domainHashMap.hasOwnProperty(domain) && hostname.endsWith("." + domain)) {
            if(domain.length > longestDomain.length) {
              longestDomain = domain;
              hash = domainHashMap[domain];
            }
          }
        }
      }
    } else {
      hash = tagHash;
    }
    if (!hash) {
      return;
    }

    window._uxa = window._uxa || [];
    window._uxa.push(["setOption", "startMode", 2]);
    if (typeof CS_CONF === "undefined") {
      window._uxa.push([
        "setPath",
        window.location.pathname + window.location.hash.replace("#", "?__")
      ]);
      var mt = document.createElement("script");
      mt.type = "text/javascript";
      mt.async = true;
      mt.src = "//t.contentsquare.net/uxa/" + hash + ".js";
      document.getElementsByTagName("head")[0].appendChild(mt);
    } else {
      window._uxa.push([
        "trackPageview",
        window.location.pathname + window.location.hash.replace("#", "?__")
      ]);
    }
  })();

  window.Shopify.loadFeatures(
    [
      {
        name: 'consent-tracking-api',
        version: '0.1',
      },
    ],
    error => {
      if (error) {
        // Rescue error
        console.error('Error loading Shopify consent-tracking-api:', error);
      }
      // If error is false, the API has loaded and ready to use!
      const initialAnalyticsAllowed = window.Shopify.customerPrivacy.analyticsProcessingAllowed();
      if(initialAnalyticsAllowed) {
         _uxa.push(["data-collection:start"]);
      }

      document.addEventListener("visitorConsentCollected", (event) => {
        const analyticsAllowed = event.detail.analyticsAllowed;
        if(analyticsAllowed) {
          _uxa.push(["data-collection:start"]);
        } else {
          _uxa.push(["data-collection:stop"])
        }
      });
    },
  );
</script><!-- END app block --><!-- BEGIN app block: shopify://apps/attentive/blocks/attn-tag/8df62c72-8fe4-407e-a5b3-72132be30a0d --><script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/misc/load_81c01befab.bin" onerror=" var fallbackScript = document.createElement('script'); fallbackScript.src = 'https://cdn.attn.tv/smith/dtag.js'; document.head.appendChild(fallbackScript);" data-source="loaded?source=app-embed" defer></script>


<!-- END app block --><!-- BEGIN app block: shopify://apps/klaviyo-email-marketing-sms/blocks/klaviyo-onsite-embed/2632fe16-c075-4321-a88b-50b567f42507 -->












  <script async="" src="https://static.klaviyo.com/onsite/js/X83XRa/klaviyo.js?company_id=X83XRa" data-disabled-tracker="true" type="text/plain"></script>
  <script>!function(){if(!window.klaviyo){window._klOnsite=window._klOnsite||[];try{window.klaviyo=new Proxy({},{get:function(n,i){return"push"===i?function(){var n;(n=window._klOnsite).push.apply(n,arguments)}:function(){for(var n=arguments.length,o=new Array(n),w=0;w<n;w++)o[w]=arguments[w];var t="function"==typeof o[o.length-1]?o.pop():void 0,e=new Promise((function(n){window._klOnsite.push([i].concat(o,[function(i){t&&t(i),n(i)}]))}));return e}}})}catch(n){window.klaviyo=window.klaviyo||[],window.klaviyo.push=function(){var n;(n=window._klOnsite).push.apply(n,arguments)}}}}();</script>

  




  <script>
    window.klaviyoReviewsProductDesignMode = false
  </script>









<!-- END app block --><!-- BEGIN app block: shopify://apps/weglot-translate-your-store/blocks/weglot/3097482a-fafe-42ff-bc33-ea19e35c4a20 -->

  
    
  

  

  
  
    
      

      
      
      
        
      
    
      

      
      
      
        
      
    
      

      
      
      
        
      
    
      

      
      
      
        
      
    
  


<!--Start Weglot Script-->
<script type="application/json" id="weglot-data">{"allLanguageUrls":{"en":"https://www.smithoptics.com/en-us","it":"https://www.smithoptics.com/it-us","de":"https://www.smithoptics.com/de-us","fr-ca":"https://www.smithoptics.com/fr-ca-us","fr":"https://www.smithoptics.com/fr-us"},"originalCanonicalUrl":"https://www.smithoptics.com/en-us","originalPath":"/en-us","settings":{"auto_switch":false,"auto_switch_fallback":null,"category":10,"custom_settings":{"button_style":{"with_name":true,"full_name":true,"is_dropdown":true,"with_flags":false,"custom_css":".weglot-container {\n  display: none!important;\n}","flag_type":"rectangle_mat"},"switchers":[],"ai_disclaimer_selector":"","translate_search":true,"loading_bar":true,"hide_switcher":false,"wait_transition":true,"localeRules":[{"translatedFormat":"CODE-([a-zA-Z]{2})","originalFormat":"CODE-([a-zA-Z]{2})","position":0}],"excluded_attributes":[{"selector":".locale-selector__locale-link.submit-locale","attributes":["href"]}],"translate_inside_exclusions":[{"value":".locale-selector__locale-info"}],"shopify_theme_app_extension":true,"shopify_extension_connected":true,"definitions":{"urls":[]}},"deleted_at":null,"dynamics":[{"value":"div[id^=\"boost-sd-widget-\"]"},{"value":".boost-sd__filter-option-heading"},{"value":".boost-sd__filter-option-item-label"},{"value":".boost-sd__product-item"},{"value":".boost-sd__toolbar-container"},{"value":"shopify-payment-terms"},{"value":"product-recommendations"},{"value":"#bc-instant-search"},{"value":".boost-sd__product-count"},{"value":".boost-sd__pagination-button-text"},{"value":".boost-sd__product-short-description"}],"excluded_blocks":[{"value":".boost-sd__product-title","description":null},{"value":".product__title","description":null},{"value":".boost-sd__suggestion-queries-item-title","description":null},{"value":".locale-selector__locale-link","description":"WG Support - Switcher's links"},{"value":"request.path","description":null},{"value":".breadcrumbs","description":"breadcrumbs"},{"value":".breadcrumbs__link","description":null}],"excluded_paths":[],"external_enabled":false,"host":"www.smithoptics.com","is_dns_set":true,"is_https":true,"language_from":"en","language_from_custom_flag":null,"language_from_custom_name":null,"languages":[{"connect_host_destination":null,"custom_code":null,"custom_flag":null,"custom_local_name":null,"custom_name":null,"enabled":true,"language_to":"it"},{"connect_host_destination":null,"custom_code":null,"custom_flag":null,"custom_local_name":null,"custom_name":null,"enabled":true,"language_to":"de"},{"connect_host_destination":null,"custom_code":null,"custom_flag":null,"custom_local_name":null,"custom_name":null,"enabled":true,"language_to":"fr-ca"},{"connect_host_destination":null,"custom_code":null,"custom_flag":null,"custom_local_name":null,"custom_name":null,"enabled":true,"language_to":"fr"}],"media_enabled":false,"page_views_enabled":false,"technology_id":2,"technology_name":"Shopify","translation_engine":3,"url_type":"SUBDIRECTORY","versions":{"translation":1788367897,"slugTranslation":1786484025}}}</script>
<script src="https://cdn.weglot.com/weglot.min.js?api_key=wg_e7c60cbd9d2d5940cda4279cd16dad976" async=""></script>
<!--End Weglot Script-->

<!-- END app block --><!-- BEGIN app block: shopify://apps/boost-ai-search-filter/blocks/boost-sd-ssr/7fc998ae-a150-4367-bab8-505d8a4503f7 --><script type="text/javascript">"use strict";(()=>{var UNSAFE_MERGE_KEYS=["__proto__","constructor","prototype"];function mergeDeepMutate(target,...sources){if(!target)return target;if(sources.length===0)return target;const isObject=obj=>!!obj&&typeof obj==="object";const isPlainObject=obj=>{if(!isObject(obj))return false;const proto=Object.getPrototypeOf(obj);return proto===Object.prototype||proto===null};for(const source of sources){if(!source)continue;for(const key in source){if(!Object.prototype.hasOwnProperty.call(source,key))continue;if(UNSAFE_MERGE_KEYS.includes(key))continue;const sourceValue=source[key];if(!(key in target)){target[key]=sourceValue;continue}const targetValue=target[key];if(Array.isArray(targetValue)&&Array.isArray(sourceValue)){target[key]=targetValue.concat(...sourceValue)}else if(isPlainObject(targetValue)&&isPlainObject(sourceValue)){target[key]=mergeDeepMutate(targetValue,sourceValue)}else{target[key]=sourceValue}}}return target}var Application=class{constructor(config,dataObjects){this.modules=[];this.cachedModulesByConstructor=new Map;this.status="created";this.cachedEventListeners={};this.registryBlockListeners=[];this.readyListeners=[];this.mode="production";this.logLevel=1;this.blocks={};const boostWidgetIntegration=window.boostWidgetIntegration;this.config=config||{logLevel:boostWidgetIntegration?.config?.logLevel,env:"production"};this.logLevel=this.config.logLevel??(this.mode==="production"?2:this.logLevel);if(this.config.logLevel==null){this.config.logLevel=this.logLevel}this.dataObjects=dataObjects||{};this.logger={debug:(...args)=>{if(this.logLevel<=0){console.debug("Boost > [DEBUG] ",...args)}},info:(...args)=>{if(this.logLevel<=1){console.info("Boost > [INFO] ",...args)}},warn:(...args)=>{if(this.logLevel<=2){console.warn("Boost > [WARN] ",...args)}},error:(...args)=>{if(this.logLevel<=3){console.error("Boost > [ERROR] ",...args)}}}}bootstrap(){if(this.status==="bootstrapped"){this.logger.warn("Application already bootstrapped");return}if(this.status==="started"){this.logger.warn("Application already started");return}this.loadModuleEventListeners();this.dispatchLifecycleEvent({name:"onBeforeAppBootstrap",payload:null});if(this.config?.customization?.app?.onBootstrap){this.config.customization.app.onBootstrap(this)}this.extendAppConfigFromModules();this.extendAppConfigFromGlobalVariables();this.initializeDataObjects();this.assignGlobalVariables();this.status="bootstrapped";this.dispatchLifecycleEvent({name:"onAppBootstrap",payload:null})}async initModules(){await Promise.all(this.modules.map(async module=>{if(!module.shouldInit()){this.logger.info("Module not initialized",module.constructor.name,"shouldInit returned false");return}module.onBeforeModuleInit?.();this.dispatchLifecycleEvent({name:"onBeforeModuleInit",payload:{module}});this.logger.info(`Initializing ${module.constructor.name} module`);try{await module.init();this.dispatchLifecycleEvent({name:"onModuleInit",payload:{module}})}catch(error){this.logger.error(`Error initializing module ${module.constructor.name}:`,error);this.dispatchLifecycleEvent({name:"onModuleError",payload:{module,error:error instanceof Error?error:new Error(String(error))}})}}))}getModule(constructor){const module=this.cachedModulesByConstructor.get(constructor);if(module&&!module.shouldInit()){return void 0}return module}getModuleByName(name){const module=this.modules.find(mod=>{const ModuleClass=mod.constructor;return ModuleClass.moduleName===name});if(module&&!module.shouldInit()){return void 0}return module}registerBlock(block){if(!block.id){this.logger.error("Block id is required");return}const blockId=block.id;if(this.blocks[blockId]){this.logger.error(`Block with id ${blockId} already exists`);return}this.blocks[blockId]=block;if(window.boostWidgetIntegration.blocks){window.boostWidgetIntegration.blocks[blockId]=block}this.dispatchLifecycleEvent({name:"onRegisterBlock",payload:{block}});this.registryBlockListeners.forEach(listener=>{try{listener(block)}catch(error){this.logger.error("Error in registry block listener:",error)}})}addRegistryBlockListener(listener){this.registryBlockListeners.push(listener);Object.values(this.blocks).forEach(block=>{try{listener(block)}catch(error){this.logger.error("Error in registry block listener for existing block:",error)}})}removeRegistryBlockListener(listener){const index=this.registryBlockListeners.indexOf(listener);if(index>-1){this.registryBlockListeners.splice(index,1)}}onReady(handler){if(this.status==="started"){try{handler()}catch(error){this.logger.error("Error in ready handler:",error)}}else{this.readyListeners.push(handler)}}assignGlobalVariables(){if(!window.boostWidgetIntegration){window.boostWidgetIntegration={}}Object.assign(window.boostWidgetIntegration,{TAEApp:this,config:this.config,dataObjects:this.dataObjects,blocks:this.blocks})}async start(){this.logger.info("Application starting");this.bootstrap();this.dispatchLifecycleEvent({name:"onBeforeAppStart",payload:null});await this.initModules();this.status="started";this.dispatchLifecycleEvent({name:"onAppStart",payload:null});this.readyListeners.forEach(listener=>{try{listener()}catch(error){this.logger.error("Error in ready listener:",error)}});if(this.config?.customization?.app?.onStart){this.config.customization.app.onStart(this)}}destroy(){if(this.status!=="started"){this.logger.warn("Application not started yet");return}this.modules.forEach(module=>{this.dispatchLifecycleEvent({name:"onModuleDestroy",payload:{module}});module.destroy()});this.modules=[];this.resetBlocks();this.status="destroyed";this.dispatchLifecycleEvent({name:"onAppDestroy",payload:null})}setLogLevel(level){this.logLevel=level;this.updateConfig({logLevel:level})}loadModule(ModuleConstructor){if(!ModuleConstructor){return this}const app=this;const moduleInstance=new ModuleConstructor(app);if(app.cachedModulesByConstructor.has(ModuleConstructor)){this.logger.warn(`Module ${ModuleConstructor.name} already loaded`);return app}this.modules.push(moduleInstance);this.cachedModulesByConstructor.set(ModuleConstructor,moduleInstance);this.logger.info(`Module ${ModuleConstructor.name} already loaded`);return app}updateConfig(newConfig){if(typeof newConfig==="function"){this.config=newConfig(this.config)}else{mergeDeepMutate(this.config,newConfig)}return this.config}dispatchLifecycleEvent(event){switch(event.name){case"onBeforeAppBootstrap":this.triggerEvent("onBeforeAppBootstrap",event);break;case"onAppBootstrap":this.logger.info("Application bootstrapped");this.triggerEvent("onAppBootstrap",event);break;case"onBeforeModuleInit":this.triggerEvent("onBeforeModuleInit",event);break;case"onModuleInit":this.logger.info(`Module ${event.payload.module.constructor.name} initialized`);this.triggerEvent("onModuleInit",event);break;case"onModuleDestroy":this.logger.info(`Module ${event.payload.module.constructor.name} destroyed`);this.triggerEvent("onModuleDestroy",event);break;case"onBeforeAppStart":this.triggerEvent("onBeforeAppStart",event);break;case"onAppStart":this.logger.info("Application started");this.triggerEvent("onAppStart",event);break;case"onAppDestroy":this.logger.info("Application destroyed");this.triggerEvent("onAppDestroy",event);break;case"onAppError":this.logger.error("Application error",event.payload.error);this.triggerEvent("onAppError",event);break;case"onModuleError":this.logger.error("Module error",event.payload.module.constructor.name,event.payload.error);this.triggerEvent("onModuleError",event);break;case"onRegisterBlock":this.logger.info(`Block registered with id: ${event.payload.block.id}`);this.triggerEvent("onRegisterBlock",event);break;default:this.logger.warn("Unknown lifecycle event",event);break}}triggerEvent(eventName,event){const eventListeners=this.cachedEventListeners[eventName];if(eventListeners){eventListeners.forEach(listener=>{try{if(eventName==="onRegisterBlock"&&event.payload&&"block"in event.payload){listener(event.payload.block)}else{listener(event)}}catch(error){this.logger.error(`Error in event listener for ${eventName}:`,error,"Event data:",event)}})}}extendAppConfigFromModules(){this.modules.forEach(module=>{const extendAppConfig=module.extendAppConfig;if(extendAppConfig){mergeDeepMutate(this.config,extendAppConfig)}})}extendAppConfigFromGlobalVariables(){const initializedGlobalConfig=window.boostWidgetIntegration?.config;if(initializedGlobalConfig){mergeDeepMutate(this.config,initializedGlobalConfig)}}initializeDataObjects(){this.modules.forEach(module=>{const dataObject=module.dataObject;if(dataObject){mergeDeepMutate(this.dataObjects,dataObject)}})}resetBlocks(){this.logger.info("Resetting all blocks");this.blocks={}}loadModuleEventListeners(){this.cachedEventListeners={};const eventNames=["onBeforeAppBootstrap","onAppBootstrap","onModuleInit","onModuleDestroy","onBeforeAppStart","onAppStart","onAppDestroy","onAppError","onModuleError","onRegisterBlock"];this.modules.forEach(module=>{eventNames.forEach(eventName=>{const eventListener=(...args)=>{if(this.status==="bootstrapped"||this.status==="started"){if(!module.shouldInit())return}return module[eventName]?.(...args)};if(typeof eventListener==="function"){if(!this.cachedEventListeners[eventName]){this.cachedEventListeners[eventName]=[]}if(eventName==="onRegisterBlock"){this.cachedEventListeners[eventName]?.push((block=>{eventListener.call(module,block)}))}else{this.cachedEventListeners[eventName]?.push(eventListener.bind(module))}}})})}};var Module=class{constructor(app){this.app=app}shouldInit(){return true}destroy(){}init(){}get extendAppConfig(){return{}}get dataObject(){return{}}};var BoostTAEAppModule=class extends Module{constructor(){super(...arguments);this.boostTAEApp=null}get TAEApp(){const boostTAE=getBoostTAE();if(!boostTAE){throw new Error("Boost TAE is not initialized")}this.boostTAEApp=boostTAE;return this.boostTAEApp}get TAEAppConfig(){return this.TAEApp.config}get TAEAppDataObjects(){return this.TAEApp.dataObjects}};var AdditionalElement=class extends BoostTAEAppModule{get extendAppConfig(){return {additionalElementSettings:Object.assign(
        {
          
            default_sort_order: {"search":"relevance","all":"relevance"},
          
        }, {"customSortingList":"relevance|best-selling|price-ascending|price-descending|created-descending","enableCollectionSearch":false})};}};AdditionalElement.moduleName="AdditionalElement";function getShortenToFullParamMap(){const shortenUrlParamList=getBoostTAE().config?.filterSettings?.shortenUrlParamList;const map={};if(!Array.isArray(shortenUrlParamList)){return map}shortenUrlParamList.forEach(item=>{if(typeof item!=="string")return;const idx=item.lastIndexOf(":");if(idx===-1)return;const full=item.slice(0,idx).trim();const short=item.slice(idx+1).trim();if(!full.startsWith("pf_"))return;if(full.length>0&&short.length>0){map[short]=full}});return map}function generateUUID(){return "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx".replace(/[x]/g,function(){const r=Math.random()*16|0;return r.toString(16)});}function getQueryParamByKey(key){const urlParams=new URLSearchParams(window.location.search);return urlParams.get(key)}function convertValueRequestStockStatus(v){if(typeof v==="string"){if(v==="out-of-stock")return false;return true}if(Array.isArray(v)){return v.map(_v=>{if(_v==="out-of-stock"){return false}return true})}return false}function isMobileWidth(){return window.innerWidth<576}function isTabletPortraitMaxWidth(){return window.innerWidth<=991}function detectDeviceByWidth(){let result="";if(isMobileWidth()){result+="mobile|"}else{result=result.replace("mobile|","")}if(isTabletPortraitMaxWidth()){result+="tablet_portrait_max"}else{result=result.replace("tablet_portrait_max","")}return result}function getSortBy(){const{generalSettings:{collection_id=0,page="collection",default_sort_by:defaultSortBy}={},additionalElementSettings:{default_sort_order:defaultSortOrder={},customSortingList}={}}=getBoostTAE().config;const defaultSortingList=["relevance","best-selling","manual","title-ascending","title-descending","price-ascending","price-descending","created-ascending","created-descending"];const sortQueryKey=getQueryParamByKey("sort");const sortingList=customSortingList?customSortingList.split("|"):defaultSortingList;if(sortQueryKey&&sortingList.includes(sortQueryKey))return sortQueryKey;const searchPage=page==="search";const collectionPage=page==="collection";if(searchPage)sortingList.splice(sortingList.indexOf("manual"),1);const{all,search}=defaultSortOrder;if(collectionPage){if(collection_id in defaultSortOrder){return defaultSortOrder[collection_id]}else if(all){return all}else if(defaultSortBy){return defaultSortBy}}else if(searchPage){return search||"relevance"}return""}var addParamsLocale=(params={})=>{params.return_all_currency_fields=false;return{...params,currency_rate:window.Shopify?.currency?.rate,currency:window.Shopify?.currency?.active,country:window.Shopify?.country}};var getLocalStorage=key=>{try{const value=localStorage.getItem(key);if(value)return JSON.parse(value);return null}catch{return null}};var setLocalStorage=(key,value)=>{try{localStorage.setItem(key,JSON.stringify(value))}catch(error){getBoostTAE().logger.error("Error setLocalStorage",error)}};var removeLocalStorage=key=>{try{localStorage.removeItem(key)}catch(error){getBoostTAE().logger.error("Error removeLocalStorage",error)}};function roundToNearest50(num){const remainder=num%50;if(remainder>25){return num+(50-remainder)}else{return num-remainder}}function lazyLoadImages(dom){if(!dom)return;const lazyImages=dom.querySelectorAll(".boost-sd__product-image-img[loading='lazy']");lazyImages.forEach(function(img){inViewPortHandler(img.parentElement,element=>{const imgElement=element.querySelector(".boost-sd__product-image-img[loading='lazy']");if(imgElement){imgElement.removeAttribute("loading")}})})}function inViewPortHandler(elements,callback){const observer=new IntersectionObserver(function intersectionObserverCallback(entries,observer2){entries.forEach(function(entry){if(entry.isIntersecting){callback(entry.target);observer2.unobserve(entry.target)}})});if(Array.isArray(elements)){elements.forEach(element=>observer.observe(element))}else{observer.observe(elements)}}var isBadUrl=url=>{try{if(!url){const searchString2=getWindowLocation().search;if(!searchString2||searchString2.length<=1){return false}return checkSearchStringForXSS(searchString2)}if(typeof url==="string"){const questionMarkIndex=url.indexOf("?");const searchString2=questionMarkIndex>=0?url.substring(questionMarkIndex):"";if(!searchString2||searchString2.length<=1){return false}return checkSearchStringForXSS(searchString2)}const searchString=url.search;if(!searchString||searchString.length<=1){return false}return checkSearchStringForXSS(searchString)}catch{return true}};var checkSearchStringForXSS=searchString=>{const urlParams=decodeURIComponent(searchString).split("&");for(let i=0;i<urlParams.length;i++){if(isBadSearchTerm(urlParams[i])){return true}}return false};var getWindowLocation=()=>{const href=window.location.href;const escapedHref=href.replace(/%3C/g,"&lt;").replace(/%3E/g,"&gt;");const rebuildHrefArr=[];for(let i=0;i<escapedHref.length;i++){rebuildHrefArr.push(escapedHref.charAt(i))}const rebuildHref=rebuildHrefArr.join("").split("&lt;").join("%3C").split("&gt;").join("%3E");let rebuildSearch="";const hrefWithoutHash=rebuildHref.replace(/#.*$/,"");if(hrefWithoutHash.split("?").length>1){rebuildSearch=hrefWithoutHash.split("?")[1];if(rebuildSearch.length>0){rebuildSearch="?"+rebuildSearch}}return{pathname:window.location.pathname,href:rebuildHref,search:rebuildSearch}};var isBadSearchTerm=term=>{if(typeof term=="string"){term=term.toLowerCase();const domEvents=["img src","script","alert","onabort","popstate","afterprint","beforeprint","beforeunload","blur","canplay","canplaythrough","change","click","contextmenu","copy","cut","dblclick","drag","dragend","dragenter","dragleave","dragover","dragstart","drop","durationchange","ended","error","focus","focusin","focusout","fullscreenchange","fullscreenerror","hashchange","input","invalid","keydown","keypress","keyup","load","loadeddata","loadedmetadata","loadstart","mousedown","mouseenter","mouseleave","mousemove","mouseover","mouseout","mouseout","mouseup","offline","online","pagehide","pageshow","paste","pause","play","playing","progress","ratechange","resize","reset","scroll","search","seeked","seeking","select","show","stalled","submit","suspend","timeupdate","toggle","touchcancel","touchend","touchmove","touchstart","unload","volumechange","waiting","wheel"];const potentialEventRegex=new RegExp(domEvents.join("=|on"));const countOpenTag=(term.match(/</g)||[]).length;const countCloseTag=(term.match(/>/g)||[]).length;const isAlert=(term.match(/alert\(/g)||[]).length;const isConsoleLog=(term.match(/console\.log\(/g)||[]).length;const isExecCommand=(term.match(/execCommand/g)||[]).length;const isCookie=(term.match(/document\.cookie/g)||[]).length;const isJavascript=(term.match(/j.*a.*v.*a.*s.*c.*r.*i.*p.*t/g)||[]).length;const isPotentialEvent=potentialEventRegex.test(term);if(countOpenTag>0&&countCloseTag>0||countOpenTag>1||countCloseTag>1||isAlert||isConsoleLog||isExecCommand||isCookie||isJavascript||isPotentialEvent){return true}}return false};var isCollectionPage=()=>{return getBoostTAE().config.generalSettings?.page==="collection"};var isSearchPage=()=>{return getBoostTAE().config.generalSettings?.page==="search"};var isCartPage=()=>{return getBoostTAE().config.generalSettings?.page==="cart"};var isProductPage=()=>{return getBoostTAE().config.generalSettings?.page==="product"};var isHomePage=()=>{return getBoostTAE().config.generalSettings?.page==="index"};var isVendorPage=()=>{return window.location.pathname.indexOf("/collections/vendors")>-1};var getCurrentPage=()=>{let currentPage="";switch(true){case isCollectionPage():currentPage="collection_page";break;case isSearchPage():currentPage="search_page";break;case isProductPage():currentPage="product_page";break;case isCartPage():currentPage="cart_page";break;case isHomePage():currentPage="home_page";break;default:break}return currentPage};var checkExistFilterOptionParam=()=>{const queryParams=new URLSearchParams(window.location.search);const shortenToFullMap=getShortenToFullParamMap();for(const key of queryParams.keys()){if(key.startsWith("pf_"))return true;const resolved=shortenToFullMap[key];if(typeof resolved==="string"&&resolved.startsWith("pf_"))return true}return false};function getCustomerId(){return window?.__st?.cid||window?.meta?.page?.customerId||window?.ShopifyAnalytics?.meta?.page?.customerId||window?.ShopifyAnalytics?.lib?.user?.()?.traits()?.uniqToken}function isShopifyTypePage(){return window.location.pathname.indexOf("/collections/types")>-1}var Analytics=class _Analytics extends BoostTAEAppModule{saveRequestId(type,request_id,bundles=[]){const requestIds=getLocalStorage(_Analytics.STORAGE_KEY_PRE_REQUEST_IDS)||{};requestIds[type]=request_id;if(Array.isArray(bundles)){bundles?.forEach(bundle=>{let placement="";switch(type){case"search":placement=_Analytics.KEY_PLACEMENT_BY_TYPE.search_page;break;case"suggest":placement=_Analytics.KEY_PLACEMENT_BY_TYPE.instant_search;break;case"product_page_bundle":placement=_Analytics.KEY_PLACEMENT_BY_TYPE.product_page;break;default:break}requestIds[`${bundle.widgetId||""}_${placement}`]=request_id})}setLocalStorage(_Analytics.STORAGE_KEY_PRE_REQUEST_IDS,requestIds)}savePreAction(type){setLocalStorage(_Analytics.STORAGE_KEY_PRE_ACTION,type)}};Analytics.moduleName="Analytics";Analytics.STORAGE_KEY_PRE_REQUEST_IDS="boostSdPreRequestIds";Analytics.STORAGE_KEY_PRE_ACTION="boostSdPreAction";Analytics.KEY_PLACEMENT_BY_TYPE={product_page:"product_page",search_page:"search_page",instant_search:"instant_search"};var AppSettings=class extends BoostTAEAppModule{get extendAppConfig(){const config={cdn:"https://cdn.boostcommerce.io",bundleUrl:"https://services.mybcapps.com/bc-sf-filter/bundles",productUrl:"https://services.mybcapps.com/bc-sf-filter/products",productListingUrl:"https://services.mybcapps.com/bc-sf-filter/product-listing",subscriptionUrl:"https://services.mybcapps.com/bc-sf-filter/subscribe-b2s",nodeSSRUrl:"https://services.mybcapps.com/bc-sf-ssr-node",rubySSRUrl:"https://services.mybcapps.com/bc-sf-ssr-ruby",ssrUrl:"",taeSettings:window.boostWidgetIntegration?.taeSettings||{instantSearch:{enabled:false}},generalSettings:Object.assign(
  {preview_mode:false,preview_path:"",page:"index",custom_js_asset_url:"",custom_css_asset_url:"",collection_id: 0,collection_handle:"",collection_product_count: 0,...
            {
              
              
            },collection_tags: null,current_tags: null,default_sort_by:"",swatch_extension:"png",no_image_url:"https://cdn.shopify.com/extensions/01a0575f-8c3f-7d54-8f62-c86cf024a6dc/product-filter-search-224/assets/boost-pfs-no-image.jpg",search_term:"",template:"index",currencies:["CAD","EUR","GBP","USD"],current_currency:"USD",published_locales:{...
                {"en":true}
              },current_locale:"en",ssr_engine:"node",ssr_version:"v1"},
  {"addCollectionToProductUrl":false}
),translation:{},...
        {
          
          
          
            translation: {"refineDesktop":"Filter","refine":"Refine By","refineMobile":"Refine By","refineMobileCollapse":"Hide Filter","clear":"Clear","clearAll":"Clear All","viewMore":"View More","viewLess":"View Less","apply":"Apply","applyAll":"Apply All","close":"Close","back":"Back","showLimit":"Show","collectionAll":"All","under":"Under","above":"Above","ratingStar":"Star","ratingStars":"Stars","ratingUp":"& Up","showResult":"Show result","searchOptions":"Search Options","inCollectionSearch":"Search for products in this collection","loadPreviousPage":"Load Previous Page","loadMore":"Load more {{ amountProduct }} Products","loadMoreTotal":"{{ from }} - {{ to }} of {{ total }} Products","viewAs":"View as","listView":"List view","gridView":"Grid view","gridViewColumns":"Grid view {{count}} Columns","search":{"generalTitle":"General Title (when no search term)","resultHeader":"Search results for \"{{ terms }}\"","resultNumber":"Showing {{ count }} results for \"{{ terms }}\"","seeAllProducts":"See all products","resultEmpty":"\"{{ terms }}\" is off the map. Adjust your spelling or broaden your search — your next adventure is out there.","resultEmptyWithSuggestion":"Sorry, nothing found for \"{{ terms }}\". Check out these items instead?","searchTotalResult":"Showing {{ count }} result","searchTotalResults":"Showing {{ count }} results","searchPanelProduct":"Products","searchPanelCollection":"Collections","searchPanelPage":"Stories & Pages","searchTipsTitle":"Search tips","searchTipsContent":"Spell check — even the best explorers misread the map.{{ breakline }}Cast a wider net — try broader search terms.{{ breakline }}Trim it down — fewer words, more ground covered.{{ breakline }}Try a different angle — product type, model, or feature might be your best route in.","noSearchResultSearchTermLabel":"Need a starting point? Here's what others are exploring.","noSearchResultProductsLabel":"See what the crew is searching for","searchBoxOnclickRecentSearchLabel":"Where you've been exploring","searchBoxOnclickSearchTermLabel":"See what the crew is searching for","searchBoxOnclickProductsLabel":"Popular with the adventure crowd"},"suggestion":{"viewAll":"View all {{ count }} products","didYouMean":"Did you mean: {{ terms }}","searchBoxPlaceholder":"Search","suggestQuery":"Show {{ count }} results for {{ terms }}","instantSearchSuggestionsLabel":"See what the crew is searching for:","instantSearchCollectionsLabel":"Collections","instantSearchProductsLabel":"Products","instantSearchPagesLabel":"Stories","searchBoxOnclickRecentSearchLabel":"Where you've been exploring","searchBoxOnclickSearchTermLabel":"See what the crew is searching for","searchBoxOnclickProductsLabel":"Popular with the adventure crowd","noSearchResultSearchTermLabel":"Need a starting point? Here's what others are exploring.","noSearchResultProductsLabel":"See what the crew is searching for"},"error":{"noFilterResult":"Sorry, no products matched your selection","noSearchResult":"Sorry, no products matched the keyword","noProducts":"No products found in this collection","noSuggestionResult":"Sorry, nothing found for \"{{ terms }}\".","noSuggestionProducts":"Sorry, nothing found for \"{{ terms }}\"."},"recommendation":{"bundle-700403":"Buy the Full Kit","cartpage-044171":"Don't forget these for your adventure!","cartpage-756772":"Gear up and go","cartdrawer-458801":"Frequently bought together","cartpage-738020":"Frequently bought together","homepage-616382":"New Arrivals & Best Sellers","checkoutpage-805724":"One More Thing for Your Adventure","collectionpage-618645":"Trending products","productpage-072658":"You May Also Like","homepage-630412":"Best Sellers","collectionpage-521117":"Recently Viewed","productpage-372624":"Recently Viewed","collectionpage-658716":"Hand-picked products","cartpage-143280":"Still interested in this?","cartpage-078652":"Similar Products","collectionpage-470884":"Most Popular Products","collectionpage-603347":"Just dropped"},"productItem":{"qvBtnLabel":"Quick view","atcAvailableLabel":"Add to cart","soldoutLabel":"Sold out","productItemSale":"Sale","productItemSoldOut":"Sold out","viewProductBtnLabel":"View product","atcSelectOptionsLabel":"Select options","amount":"None","savingAmount":"Save {{saleAmount}}","swatchButtonText1":"+{{count}}","swatchButtonText2":"+{{count}}","swatchButtonText3":"+{{count}}","inventoryInStock":"In stock","inventoryLowStock":"Only {{count}} left!","inventorySoldOut":"Sold out","atcAddingToCartBtnLabel":"Adding...","atcAddedToCartBtnLabel":"Added!","atcFailedToCartBtnLabel":"Failed!"},"quickView":{"qvQuantity":"Quantity","qvViewFullDetails":"View full details","buyItNowBtnLabel":"Buy it now","qvQuantityError":"Please input quantity"},"cart":{"atcMiniCartSubtotalLabel":"Subtotal","atcMiniCartEmptyCartLabel":"Your Cart Is Currently Empty","atcMiniCartCountItemLabel":"item","atcMiniCartCountItemLabelPlural":"items","atcMiniCartShopingCartLabel":"Your cart","atcMiniCartViewCartLabel":"View cart","atcMiniCartCheckoutLabel":"Checkout"},"recentlyViewed":{"recentProductHeading":"Recently Viewed Products"},"mostPopular":{"popularProductsHeading":"Popular Products"},"perpage":{"productCountPerPage":"Display: {{count}} per page"},"productCount":{"textDescriptionCollectionHeader":"{{count}} product","textDescriptionCollectionHeaderPlural":"{{count}} products","textDescriptionToolbar":"{{from}} - {{to}} out of {{total}}","textDescriptionToolbarPlural":"{{from}} - {{to}} out of {{total}}","textDescriptionPagination":"Showing {{from}} - {{to}} of {{total}} product","textDescriptionPaginationPlural":"Showing {{from}} - {{to}} of {{total}} products"},"pagination":{"loadPreviousText":"Load Previous Page","loadPreviousInfiniteText":"Load Previous Page","loadMoreText":"Load more","prevText":"Previous","nextText":"Next"},"sortingList":{"sorting":"Sort by","relevance":"Relevance","best-selling":"Most Popular","price-ascending":"Price Low to High","price-descending":"Price High to Low","created-descending":"Newest First"},"collectionHeader":{"collectionAllProduct":"Products"},"breadcrumb":{"home":"Home","collections":"Collections","pagination":"Page {{ page }} of {{totalPages}}","toFrontPage":"Back to the front page"},"sliderProduct":{"prevButton":"Previous","nextButton":"Next"},"filterOptions":{"filterOption|TwQPwZz1np|pf_pt_product_type":"Product Type","filterOption|TwQPwZz1np|pf_p_price":"Price $","filterOption|nmS6-cMskY|pf_m_::rvw::frame_fit":"Fit","filterOption|nmS6-cMskY|pf_m_::rvw::series":"Collection","filterOption|nmS6-cMskY|pf_p_price_range":"Price Range","filterOption|TwQPwZz1np|pf_opt_lens_color":"Lens color","filterOption|TwQPwZz1np|pf_m_::rvw::helmet_type":"Helmet Type","filterOption|TwQPwZz1np|pf_m_::rvw::apparel_type":"Apparel Type","filterOption|TwQPwZz1np|pf_m_::rvw::series":"Collection","filterOption|TwQPwZz1np|pf_m_::algolia::best_for":"Best For","filterOption|TwQPwZz1np|pf_m_::rvw::technology":"Technology","filterOption|nmS6-cMskY|pf_m_::rvw::technology":"Technology","filterOption|nmS6-cMskY|pf_m_::rvw::helmet_type":"Helmet Type","filterOption|nmS6-cMskY|pf_m_::rvw::apparel_type":"Apparel Type","filterOption|nmS6-cMskY|pf_pt_product_type":"Product Type","filterOption|nmS6-cMskY|pf_m_::algolia::best_for":"Best For","filterOption|nmS6-cMskY|pf_opt_lens_color":"Lens color","filterOption|7YPCAmk1J2|pf_opt_type":"Prescription Type","filterOption|7YPCAmk1J2|pf_m_::rvw::frame_fit":"Frame Fit","filterOption|7YPCAmk1J2|pf_m_::algolia::best_for":"Best For","filterOption|7YPCAmk1J2|pf_p_price":"Price","filterOption|y2UXvDyLuR|pf_opt_frame_color":"Frame Color","filterOption|y2UXvDyLuR|pf_opt_color":"Lens Color","filterOption|y2UXvDyLuR|pf_opt_strap_color":"Strap Color","filterOption|iGsCtK5WYx|pf_m_::rvw::technology":"TECHNOLOGY","filterOption|iGsCtK5WYx|pf_m_::rvw::frame_fit":"FIT","filterOption|iGsCtK5WYx|pf_m_::rvw::series":"COLLECTION","filterOption|nmS6-cMskY|pf_r_review_ratings":"Review Ratings","filterOption|TwQPwZz1np|pf_r_review_ratings":"Review Ratings","filterOption|7YPCAmk1J2|pf_r_review_ratings":"Review Ratings","filterOption|y2UXvDyLuR|pf_r_review_ratings":"Review Ratings","filterOption|iGsCtK5WYx|pf_r_review_ratings":"Review Ratings","filterOption|iE1Iv9UtWL|pf_m_::rvw::apparel_type":"Apparel Type","filterOption|iE1Iv9UtWL|pf_p_price_range":"Price Range","filterOption|iE1Iv9UtWL|pf_opt_size":"Size","filterOption|g2YYW_5RKW|pf_opt_frame_color":"Frame Color","filterOption|g2YYW_5RKW|pf_m_::rvw::best_for":"Metafield-rvw-best_for","filterOption|g2YYW_5RKW|pf_opt_color":"Color","filterOption|nmS6-cMskY|pf_opt_color":"Color","filterOption|nmS6-cMskY|pf_t_special_deals":"Special Deals","filterOption|fJhzKiY68S|pf_pt_product_type":"Product Type","filterOption|fJhzKiY68S|pf_m_::rvw::helmet_type":"Helmet Type","filterOption|fJhzKiY68S|pf_m_::rvw::apparel_type":"Apparel Type","filterOption|fJhzKiY68S|pf_m_::algolia::best_for":"Best For","filterOption|fJhzKiY68S|pf_m_::rvw::series":"Collection","filterOption|fJhzKiY68S|pf_m_::rvw::technology":"Technology","filterOption|fJhzKiY68S|pf_m_::rvw::frame_fit":"Fit","filterOption|fJhzKiY68S|pf_p_price_range":"Price Range","filterOption|fJhzKiY68S|pf_ps_on_sale":"On Sale","filterOption|fJhzKiY68S|pf_opt_lens_color":"Lens color","filterOption|fJhzKiY68S|pf_r_review_ratings":"Review Ratings","filterOption|fJhzKiY68S|pf_opt_color":"Color","filterOption|AERNQPfYgo|pf_pt_product_type":"Product Type","filterOption|AERNQPfYgo|pf_m_::rvw::helmet_type":"Helmet Type","filterOption|AERNQPfYgo|pf_m_::rvw::apparel_type":"Apparel Type","filterOption|AERNQPfYgo|pf_m_::algolia::best_for":"Best For","filterOption|AERNQPfYgo|pf_m_::rvw::series":"Collection","filterOption|AERNQPfYgo|pf_m_::rvw::technology":"Technology","filterOption|AERNQPfYgo|pf_m_::rvw::frame_fit":"Fit","filterOption|AERNQPfYgo|pf_p_price_range":"Price Range","filterOption|AERNQPfYgo|pf_ps_on_sale":"On Sale","filterOption|AERNQPfYgo|pf_opt_lens_color":"Lens color","filterOption|AERNQPfYgo|pf_r_review_ratings":"Review Ratings","filterOption|AERNQPfYgo|pf_opt_color":"Color"},"predictiveBundle":{}},
          
        }
      };const ssr_engine=config.generalSettings?.ssr_engine||"node";switch(ssr_engine){case"ruby":config.ssrUrl=config.rubySSRUrl;break;default:config.ssrUrl=config.nodeSSRUrl}return config}onBeforeAppStart(){const{templateMetadata,env}=this.TAEAppConfig;if(templateMetadata?.themeLibVersion){const themeLibVersion=templateMetadata.themeLibVersion;const versionParts=themeLibVersion.split(".").map(Number);if(versionParts[0]>1||versionParts[0]===1&&versionParts[1]>=89||env==="staging"||env==="development"){this.TAEAppConfig.generalSettings.ssr_version="v2"}}}};AppSettings.moduleName="AppSettings";var AssetFilesLoader=class extends BoostTAEAppModule{constructor(){super(...arguments);this.cacheVersionString=Date.now().toString()}onAppStart(){this.loadAssetFiles();this.assetLoadingPromise("themeCSS").then(()=>{this.TAEApp.updateConfig({themeCssLoaded:true})});this.assetLoadingPromise("settingsCSS").then(()=>{this.TAEApp.updateConfig({settingsCSSLoaded:true})})}loadAssetFiles(){this.loadThemeCSS();this.loadSettingsCSS();this.loadMainScript();this.loadRTLCSS();this.loadCustomizedCSSAndScript()}loadCustomizedCSSAndScript(){const{assetFilesLoader,templateMetadata}=this.TAEAppConfig;const themeCSSLinkElement=assetFilesLoader.themeCSS.element;const settingCSSLinkElement=assetFilesLoader.settingsCSS.element;const loadResources=()=>{if(this.TAEAppConfig.assetFilesLoader.themeCSS.status!=="loaded"||this.TAEAppConfig.assetFilesLoader.settingsCSS.status!=="loaded")return;if(templateMetadata?.customizeCssUrl){this.loadCSSFile("customizedCSS")}if(templateMetadata?.customizeJsUrl){this.loadScript("customizedScript")}};themeCSSLinkElement?.addEventListener("load",loadResources);settingCSSLinkElement?.addEventListener("load",loadResources)}loadSettingsCSS(){const result=this.loadCSSFile("settingsCSS");return result}loadThemeCSS(){const result=this.loadCSSFile("themeCSS");return result}loadRTLCSS(){const rtlDetected=document.documentElement.getAttribute("dir")==="rtl";if(rtlDetected){const result=this.loadCSSFile("rtlCSS");return result}}loadMainScript(){const result=this.loadScript("mainScript");return result}preloadModuleScript(module){const TAEAppConfig=this.TAEAppConfig;const inStagingEnv=TAEAppConfig.env==="staging";const themeLibVersion=inStagingEnv?"staging":TAEAppConfig.templateMetadata?.themeLibVersion;if(!inStagingEnv)return;if(!["filter","recommendation","instant-search"].includes(module))return;const scriptUrl=`${TAEAppConfig.cdn}/${"widget-integration"}/${themeLibVersion}/${module}.module.js`;const link=document.createElement("link");link.rel="preload";link.as="script";link.href=scriptUrl;document.head?.appendChild(link)}loadResourceByName(name,options){if(this.TAEAppConfig.assetFilesLoader[name].element)return;const assetsState=this.TAEAppConfig.assetFilesLoader[name];const resourceType=options?.resourceType||assetsState.type;const inStagingEnv=this.TAEAppConfig.env==="staging";let url=options?.url||assetsState.url;if(!url){switch(name){case"themeCSS":url=this.TAEAppConfig.templateMetadata?.themeCssUrl||this.TAEAppConfig.fallback?.themeCssUrl;if(inStagingEnv){url+=`?v=${this.cacheVersionString}`}break;case"settingsCSS":url=this.TAEAppConfig.templateMetadata?.settingsCssUrl||this.TAEAppConfig.fallback?.settingsCssUrl;break;case"rtlCSS":{const{themeCSS}=this.TAEAppConfig.assetFilesLoader;if(themeCSS.url){const themeCssUrl=new URL(themeCSS.url);const themeCssPathWithoutFilename=themeCssUrl.pathname.split("/").slice(0,-1).join("/");const rtlCssPath=themeCssPathWithoutFilename+"/rtl.css";url=new URL(rtlCssPath,themeCssUrl.origin).href;if(inStagingEnv){url+=`?v=${this.cacheVersionString}`}}break}case"mainScript":url=`${this.TAEAppConfig.cdn}/${"widget-integration"}/${inStagingEnv?"staging":this.TAEAppConfig.templateMetadata?.themeLibVersion}/${"bc-widget-integration.js"}`;if(inStagingEnv){url+=`?v=${this.cacheVersionString}`}break;case"customizedCSS":url=this.TAEAppConfig.templateMetadata?.customizeCssUrl;break;case"customizedScript":url=this.TAEAppConfig.templateMetadata?.customizeJsUrl;break}}if(!url)return;if(resourceType==="stylesheet"){const link=document.createElement("link");link.rel="stylesheet";link.type="text/css";link.media="all";link.href=url;document.head.appendChild(link);this.TAEApp.updateConfig({assetFilesLoader:{[name]:{element:link,status:"loading",url}}});link.onload=()=>{this.TAEApp.updateConfig({assetFilesLoader:{[name]:{element:link,status:"loaded",url}}})};link.onerror=()=>{this.TAEApp.updateConfig({assetFilesLoader:{[name]:{element:link,status:"error",url}}})}}else if(resourceType==="script"){const script=document.createElement("script");script.src=url;const strategy=options?.strategy;if(strategy==="async"){script.async=true}else if(strategy==="defer"){script.defer=true}if(assetsState.module){script.type="module"}if(strategy==="async"||strategy==="defer"){const link=document.createElement("link");link.rel="preload";link.as="script";link.href=url;document.head?.appendChild(link)}document.head.appendChild(script);this.TAEApp.updateConfig({assetFilesLoader:{[name]:{element:script,status:"loading",url}}});script.onload=()=>{this.TAEApp.updateConfig({assetFilesLoader:{[name]:{element:script,status:"loaded",url}}})};script.onerror=()=>{this.TAEApp.updateConfig({assetFilesLoader:{[name]:{element:script,status:"error",url}}})};script.onprogress=()=>{this.TAEApp.updateConfig({assetFilesLoader:{[name]:{element:script,status:"loading",url}}})}}}loadCSSFile(name,url){return this.loadResourceByName(name,{url,resourceType:"stylesheet"})}loadScript(name,url,strategy){return this.loadResourceByName(name,{strategy,url,resourceType:"script"})}assetLoadingPromise(name,timeout=5e3){return new Promise((resolve,reject)=>{let timeoutNumber=null;const{assetFilesLoader}=this.TAEAppConfig;const asset=assetFilesLoader[name];if(asset.status==="loaded"){return resolve(true)}if(!asset.element){this.loadResourceByName(name)}const assetElement=this.TAEAppConfig.assetFilesLoader[name]?.element;if(!assetElement){this.TAEApp.logger.warn(`Asset ${name} not foumd`);return resolve(false)}assetElement?.addEventListener("load",()=>{if(timeoutNumber)clearTimeout(timeoutNumber);resolve(true)});assetElement?.addEventListener("error",()=>{if(timeoutNumber)clearTimeout(timeoutNumber);reject(new Error(`Failed to load asset ${name}`))});timeoutNumber=setTimeout(()=>{reject(new Error(`Timeout loading asset ${name}`))},timeout)})}get extendAppConfig(){return{themeCssLoaded:false,settingsCSSLoaded:false,assetFilesLoader:{themeCSS:{type:"stylesheet",element:null,status:"not-initialized",url:null},settingsCSS:{type:"stylesheet",element:null,status:"not-initialized",url:null},rtlCSS:{type:"stylesheet",element:null,status:"not-initialized",url:null},customizedCSS:{type:"stylesheet",element:null,status:"not-initialized",url:null},mainScript:{type:"script",element:null,status:"not-initialized",url:null},customizedScript:{type:"script",element:null,status:"not-initialized",url:null}}}}};AssetFilesLoader.moduleName="AssetFilesLoader";var B2B=class extends BoostTAEAppModule{setQueryParams(urlParams){const{b2b}=this.TAEAppConfig;if(!b2b.enabled)return;urlParams.set("company_location_id",`${b2b.current_company_id}_${b2b.current_location_id}`);const shopifyCurrencySettings=window.Shopify?.currency;if(shopifyCurrencySettings){urlParams.set("currency",shopifyCurrencySettings.active);urlParams.set("currency_rate",shopifyCurrencySettings.rate.toString())}}get extendAppConfig(){return {b2b:Object.assign({enabled:false}, 
        {
          
        }
        )};}};B2B.moduleName="B2B";var Fallback=class _Fallback extends BoostTAEAppModule{get extendAppConfig(){return{fallback:{containerElement:".boost-sd__filter-product-list",themeCssUrl:"https://cdn.boostcommerce.io/widget-integration/theme/default/1.0.1/main.css",settingsCssUrl:"https://boost-cdn-staging.bc-solutions.net/widget-integration/theme/default/staging/default-settings.css"}}}dispatchEvent(){const enableEvent=new CustomEvent(_Fallback.EVENT_NAME);window.dispatchEvent(enableEvent)}async loadFallbackSectionFromShopify(payload){return fetch(payload.url||`${window.location.origin}/?section_id=${payload.sectionName}`).catch(error=>{this.TAEApp.logger.error("Error loading fallback section from Shopify:",error);throw error}).then(res=>res.text())}get containerElement(){const{containerElement}=this.TAEAppConfig.fallback;if(containerElement instanceof HTMLElement){return containerElement}return document.querySelector(containerElement)}async loadFilterProductFallback(){const{fallback,cdn="https://boost-cdn-prod.bc-solutions.net",templateMetadata}=this.TAEAppConfig;const customizedFallbackSettings=fallback?.customizedTemplate||templateMetadata.customizedFallback;if(customizedFallbackSettings){const{source,templateName,templateURL}=customizedFallbackSettings;switch(source){case"Shopify":{if(!templateName&&!templateURL){this.TAEApp.logger.warn("Both templateName and templateURL are undefined");return}const html=await this.loadFallbackSectionFromShopify({sectionName:templateName,url:templateURL});const container=this.containerElement;if(!container){this.TAEApp.logger.warn("Container element not found for fallback template");return}container.innerHTML=html;this.dispatchEvent();return}default:this.TAEApp.logger.warn(`Unsupported source for customized template: ${source}`);return}}const script=document.createElement("script");script.src=`${cdn}/fallback-theme/1.0.12/boost-sd-fallback-theme.js`;script.defer=true;script.onload=()=>{this.dispatchEvent()};document.body.appendChild(script)}};Fallback.moduleName="Fallback";Fallback.EVENT_NAME="boost-sd-enable-product-filter-fallback";var SimplifiedIntegration=class extends BoostTAEAppModule{constructor(){super(...arguments);this.ensurePlaceholder=()=>{const{simplifiedIntegration:{enabled,selectedSelector,placeholderAdded}}=this.TAEAppConfig;if(!enabled||!selectedSelector){if(!this.oldldSICollectionFilterContainerDetected()){this.backwardCompatibilityModule?.legacyUpdateAppStatus("ready")}return}if(placeholderAdded){return}const container=document.querySelector(selectedSelector);if(container&&container instanceof HTMLElement){this.renderPlaceholder(container);this.collectionFilterModule?.initBlock()}else{this.TAEApp.logger.error(`Placeholder container not found: ${selectedSelector}. Please update the selector in Boost's app embed`)}}}get collectionFilterModule(){return this.TAEApp.getModule(CollectionFilter)}get backwardCompatibilityModule(){return this.TAEApp.getModule(BackwardCompatibilityV1)}get extendAppConfig(){
      
      
     ;return {simplifiedIntegration:{enabled:false,collectionPage:false,instantSearch:false,productListSelector:{collectionPage:[],searchPage:[]},selectedSelector:"",selectorFromMetafield:"",selectorFromAppEmbed:
            
              "#MainContent div[id^=\"shopify-section-template\"] div[id^=\"boost-product-grid\"]"
            
             || "",allSyncedCollections:
          
            {"syncedCollections":[460604342510,457455108334,459956879598,460609257710,457403269358]}
          
         || {syncedCollections:[]},placeholderAdded:false,placeholder:`<!-- TEMPLATE PLACEHOLDER --><!-- This is global variable filter settings layout --><div class='boost-sd-container'><div class='boost-sd-layout boost-sd-layout--has-filter-vertical'>  <div class='boost-sd-left boost-filter-tree-column'>   <!-- TEMPLATE FILTER TREE PLACEHOLDER -->   <div id="boost-sd__filter-tree-wrapper" class="boost-sd__filter-tree-wrapper">    <div class="boost-sd__filter-tree-vertical ">     <div class="boost-sd__filter-tree-vertical-placeholder">      <div class="boost-sd__filter-tree-vertical-placeholder-item">       <span class="boost-sd__placeholder-item" style="width:80%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:65%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:40%; border-radius: 0;"></span>      </div>      <div class="boost-sd__filter-tree-vertical-placeholder-item">       <span class="boost-sd__placeholder-item" style="width:80%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:65%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:40%; border-radius: 0;"></span>      </div>      <div class="boost-sd__filter-tree-vertical-placeholder-item">       <span class="boost-sd__placeholder-item" style="width:80%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:65%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:40%; border-radius: 0;"></span>      </div>      <div class="boost-sd__filter-tree-vertical-placeholder-item">       <span class="boost-sd__placeholder-item" style="width:80%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:65%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:40%; border-radius: 0;"></span>      </div>      <div class="boost-sd__filter-tree-vertical-placeholder-item">       <span class="boost-sd__placeholder-item" style="width:80%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:65%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:40%; border-radius: 0;"></span>      </div>     </div>    </div>   </div>  </div>  <div class='boost-sd-right boost-product-listing-column'>   <!-- TEMPLATE TOOLBAR PLACEHOLDER-->   <div class="boost-sd__toolbar-container">    <div class="boost-sd__toolbar-inner">     <div class="boost-sd__toolbar-content">      <div class="boost-sd__toolbar boost-sd__toolbar--3_1">       <span class="boost-sd__toolbar-item boost-sd__placeholder-item" style="height: 28px; border-radius: 0;"></span>       <span class="boost-sd__toolbar-item boost-sd__placeholder-item" style="height: 28px; border-radius: 0; margin-bottom: 0"></span>       <span class="boost-sd__toolbar-item boost-sd__placeholder-item" style="height: 28px; border-radius: 0; margin-bottom: 0"></span>      </div>     </div>    </div>   </div>   <!-- TEMPLATE PRODUCT LIST PLACEHOLDER-->   <div class="boost-sd__product-list-placeholder boost-sd__product-list-placeholder--3-col">    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>   </div>   <div class="boost-sd__pagination boost-sd__pagination--center">    <span class="boost-sd__placeholder-item" style="height: 40px; border-radius: 0;"></span>   </div>  </div></div></div><style> .boost-sd__collection-header {  width: 100%;  height: 130px;  display: block;  background: -webkit-gradient(linear,    left top,    right top,    color-stop(8%, #eee),    color-stop(18%, #e6e6e6),    color-stop(33%, #eee));  background-color: #eee;  animation: banner-place-holder-shimmer 2s linear infinite forwards; } .boost-sd__collection-header:empty {  display: block; } .boost-sd__collection-header .boost-sd__placeholder-item {  height: 130px; } @media only screen and (min-width: 992px) {  .boost-sd__collection-header,  .boost-sd__collection-header .boost-sd__placeholder-item {   height: 150px;  } } @keyframes banner-place-holder-shimmer {  0% {   background-position: -1500px 0;  }  100% {   background-position: 1500px 0;  } } .boost-sd__in-collection-search {  margin-bottom: 20px;  margin-top: 20px;  width: 100%;  max-width: 100%;  display: flex;  position: relative; } .boost-sd__in-collection-search--horizontal {  margin: 20px auto 0;  max-width: 592px; } @media only screen and (min-width: 992px) {  .boost-sd__in-collection-search {   margin-bottom: 16px;   margin-top: 16px;  } } .boost-sd__filter-tree-vertical {  margin-top: 0;  margin-right: 0; } .boost-sd__filter-tree-vertical-placeholder {  background: transparent;  width: 100%;  max-width: 100%;  display: none; } .boost-sd__filter-tree-vertical-placeholder-list {  margin: 30px 10px 0;  padding: 0;  list-style: none; } .boost-sd__filter-tree-vertical-placeholder-item {  max-width: 100%;  padding: 20px 0;  display: block; } .boost-sd__filter-tree-vertical-placeholder-item:first-child {  padding-top: 0; } .boost-sd__filter-tree-vertical-placeholder-item:not(:last-child) {  border-bottom: 1px solid #ebebeb; } .boost-sd__filter-tree-vertical-placeholder-item::before, .boost-sd__filter-tree-vertical-placeholder-item::after, { display: none; } .boost-sd__filter-tree-horizontal-placeholder {  display: none; } @media only screen and (min-width: 992px) {  .boost-sd__filter-tree-vertical {   width: 272px;  }  .boost-sd-layout .boost-sd-left .boost-sd__filter-tree-wrapper .boost-sd__filter-tree-vertical {   margin-right: 16px;   margin-left: 0;  }  .boost-sd__filter-tree-vertical-placeholder,  .boost-sd__filter-tree-horizontal-placeholder {   display: inline-block;  }  .boost-sd-layout--has-filter-horizontal {   flex-wrap: wrap;   margin-top: 0;  }  .boost-sd-layout--has-filter-horizontal .boost-sd-left,  .boost-sd-layout--has-filter-horizontal .boost-sd-right {   flex: 0 0 100%;  }  .boost-sd__filter-tree-horizontal {   width: 100%;  }  .boost-sd__filter-tree-horizontal-placeholder {   padding: 16px 0;   border-top: 1px solid #ebebeb;   width: 100%;   max-width: 100%;   background: transparent;  }  .boost-sd__filter-tree-horizontal-placeholder-list {   margin: 0;   padding: 0;   list-style: none;   border-bottom: 1px solid #e8e9eb;  }  .boost-sd__filter-tree-horizontal-placeholder-item {   border: none;   display: inline-block;   margin-right: 35px;   position: relative;  }  .boost-sd__filter-tree-horizontal-placeholder-button {   width: auto;   height: auto;   display: inline-block;   position: relative;   padding: 5px 15px 5px 0;   margin: 0;   min-height: auto;   min-width: 0;   border-radius: 0;   box-shadow: none;   background: none;   border: none;   letter-spacing: normal;   text-align: left;   cursor: pointer;  }  .boost-sd__filter-tree-horizontal-placeholder-button .boost-sd__placeholder-item {   width: 80px;   height: 10px;   display: inline-block;   margin: 0 15px 0 0;  }  .boost-sd__filter-tree-horizontal-placeholder-icon {   transform: rotate(-90deg);  } } .boost-sd__in-collection-search {  margin-bottom: 20px;  margin-top: 20px;  width: 100%;  max-width: 100%;  display: flex;  position: relative; } .boost-sd__in-collection-search--horizontal {  margin: 20px auto 0;  max-width: 592px; } @media only screen and (min-width: 992px) {  .boost-sd__in-collection-search {   margin-bottom: 16px;   margin-top: 16px;  } } .boost-sd__toolbar-container {  width: 100%;  margin-bottom: 16px; } .boost-sd__toolbar-inner {  max-width: 1216px;  margin: 0 auto; } .boost-sd__toolbar-content {  border-bottom: 1px solid #ebebeb;  border-top: 1px solid #ebebeb;  padding: 16px 0; } .boost-sd__toolbar {  align-items: center;  width: 100%;  display: flex;  flex-wrap: wrap;  column-gap: 16px;  justify-content: space-between; } .boost-sd__toolbar .boost-sd__placeholder-item {  flex-basis: 45%; } .boost-sd__toolbar .boost-sd__placeholder-item:first-child {  flex-basis: 100%;  margin-bottom: 16px; } @media only screen and (min-width: 992px) {  .boost-sd__toolbar-content {   display: flex;   align-items: center;   border-bottom: none;   padding: 16px 0 16px;   border-top: 1px solid #ebebeb;   border-bottom: 0;  }  .boost-sd__toolbar {   flex-wrap: inherit;  }  .boost-sd__toolbar .boost-sd__placeholder-item {   flex-basis: auto;  }  .boost-sd__toolbar .boost-sd__placeholder-item:first-child {   flex-basis: auto;   margin-bottom: 0;  }  .boost-sd__toolbar--3_1 .boost-sd__toolbar-item {   flex: 1;  }  .boost-sd__toolbar--3_1 .boost-sd__toolbar-item:nth-child(2) {   justify-content: center;  }  .boost-sd__toolbar--3_1 .boost-sd__toolbar-item:nth-child(3) {   justify-content: end;  } } .boost-sd__product-list-placeholder {  gap: 16px;  margin-bottom: 32px;  flex-wrap: wrap;  width: 100%;  display: flex; } .boost-sd__product-list-placeholder--1-col .boost-sd__product-list-placeholder-item {  width: 100%; } .boost-sd__product-list-placeholder--2-col .boost-sd__product-list-placeholder-item, .boost-sd__product-list-placeholder--3-col .boost-sd__product-list-placeholder-item, .boost-sd__product-list-placeholder--4-col .boost-sd__product-list-placeholder-item, .boost-sd__product-list-placeholder--5-col .boost-sd__product-list-placeholder-item, .boost-sd__product-list-placeholder--6-col .boost-sd__product-list-placeholder-item {  width: calc(50% - 8px); } .boost-sd__product-list-placeholder .boost-sd__product-list-placeholder-item .boost-sd__placeholder-item:first-child {  height: 222px; } .boost-sd__placeholder-list-item {  background: rgba(0, 0, 0, 0.07);  min-width: 50px;  height: 20px;  animation: 2s infinite place-holder-animation;  display: inline-block; } .boost-sd__product-list-placeholder--list-view .boost-sd__product-list-placeholder-item {  flex-direction: row;  display: flex;  width: 100%; } .boost-sd__sd__placeholder-list-view-layout-info-group {  width: 100%;  padding-left: 16px;  display: flex;  flex-direction: column;  align-items: baseline;  gap: 16px;  text-align: left;  justify-content: center; } .boost-sd__placeholder-list-view-layout-image {  flex: 160px;  width: auto;  max-width: 160px;  height: 160px; } .boost-sd__pagination {  padding-top: 10px;  padding-bottom: 10px;  justify-content: center;  align-items: center;  display: flex; } @media only screen and (min-width: 576px) {  .boost-sd__product-list-placeholder {   gap: 32px;   margin-bottom: 64px;  }  .boost-sd__product-list-placeholder--3-col .boost-sd__product-list-placeholder-item,  .boost-sd__product-list-placeholder--4-col .boost-sd__product-list-placeholder-item,  .boost-sd__product-list-placeholder--5-col .boost-sd__product-list-placeholder-item,  .boost-sd__product-list-placeholder--6-col .boost-sd__product-list-placeholder-item {   width: calc(33.3333333333% - (32px - 32px / 3));  } } @media only screen and (min-width: 992px) {  .boost-sd__product-list-placeholder .boost-sd__placeholder-item:not(:last-child) {   margin-bottom: 8px;  }  .boost-sd__product-list-placeholder .boost-sd__placeholder-item:first-child {   margin-bottom: 16px;  }  .boost-sd__product-list-placeholder--3-col .boost-sd__product-list-placeholder-item .boost-sd__placeholder-item:first-child {   height: 382px;  }  .boost-sd__product-list-placeholder--4-col .boost-sd__product-list-placeholder-item .boost-sd__placeholder-item:first-child {   height: 275px;  }  .boost-sd__product-list-placeholder--5-col .boost-sd__product-list-placeholder-item .boost-sd__placeholder-item:first-child {   height: 215px;  }  .boost-sd__product-list-placeholder--6-col .boost-sd__product-list-placeholder-item .boost-sd__placeholder-item:first-child {   height: 175px;  }  .boost-sd__product-list-placeholder--3-col .boost-sd__product-list-placeholder-item {   width: calc(33.3333333333% - (32px - 32px / 3));  }  .boost-sd__product-list-placeholder--4-col .boost-sd__product-list-placeholder-item {   width: calc(25% - (32px - 32px / 4));  }  .boost-sd__product-list-placeholder--5-col .boost-sd__product-list-placeholder-item {   width: calc(20% - (32px - 32px / 5));  }  .boost-sd__product-list-placeholder--6-col .boost-sd__product-list-placeholder-item {   width: calc(16.6666667% - (32px - 32px / 6));  } } .boost-sd-container * {  box-sizing: border-box; } .boost-sd__placeholder-item {  background: rgba(0, 0, 0, 0.07);  border-radius: 50rem;  min-width: 50px;  max-width: 100%;  height: 20px;  animation: 2s infinite place-holder-animation;  display: inline-block; } .boost-sd__placeholder-item:empty {  display: block; } .boost-sd__placeholder-item:not(:last-child) {  margin-bottom: 18px; } .boost-sd-layout {  margin: 20px auto 0; } .boost-sd-left {  position: relative; } .boost-sd-layout .boost-sd-right {  width: 100%;  margin-bottom: 20px; } @keyframes place-holder-animation {  0% {   opacity: 1;  }  50% {   opacity: 0.5;  }  100% {   opacity: 1;  } } @media only screen and (min-width: 992px) {  .boost-sd-layout {   display: flex;   max-width: 1216px;  }  .boost-sd-layout .boost-sd-right {   flex: auto;   max-width: 100%;  } }</style>`,isOnboarding:JSON.parse(
            
              false
            
           || "false"),neededToHideElements:[]}};}init(){const app=this.TAEApp;const simplifiedIntegration=this.TAEAppConfig.simplifiedIntegration;const{templateMetadata:{integratedTheme={}}}=this.TAEAppConfig;const themeId=window.Shopify?.theme?.id;if(!themeId){app.logger.warn("Theme ID is missing");return}let themeIntegration=integratedTheme[themeId];if(!themeIntegration||Object.keys(themeIntegration).length===0){app.logger.warn("Theme is not integrated with SimplifiedIntegration flow");return}const{collectionPage=false,searchPage=false,instantSearch=false,productListSelector={}}=themeIntegration;const{page:currentPage,collection_id:collectionId=0}=this.TAEAppConfig.generalSettings;const isCollectionPage2=currentPage==="collection";const isSearchPage2=currentPage==="search";if(simplifiedIntegration.isOnboarding){const isCollectionSynced=this.checkSyncedCollection(collectionId);if(!isCollectionSynced){return}}if(isCollectionPage2&&collectionPage||isSearchPage2&&searchPage){const{collectionPage:collectionPageSelectors=[],searchPage:searchPageSelectors=[]}=productListSelector;const selectors=isCollectionPage2?collectionPageSelectors:searchPageSelectors;if(selectors.length===0){this.app.logger.warn("empty selectors");return}const customClassSelector=selectors[selectors.length-1];let attempts=0;const intervalId=setInterval(()=>{const hasCustomClass=!!document.querySelector(customClassSelector);const effectiveSelectors=hasCustomClass?selectors:selectors.slice(0,-1);const elements=effectiveSelectors.slice(0,-1);const mainElement=effectiveSelectors[effectiveSelectors.length-1];const selector=simplifiedIntegration.selectorFromAppEmbed||mainElement;const container=document.querySelector(selector);if(container){let insertionContainer;if(hasCustomClass){const allMatches=document.querySelectorAll(customClassSelector);insertionContainer=allMatches[allMatches.length-1]||container}else{insertionContainer=container}simplifiedIntegration.neededToHideElements=hasCustomClass?[customClassSelector]:elements;simplifiedIntegration.selectorFromMetafield=mainElement;simplifiedIntegration.selectedSelector=selector;this.renderPlaceholder(insertionContainer);this.collectionFilterModule?.initBlock();clearInterval(intervalId)}else if(++attempts>100){clearInterval(intervalId)}},50);this.TAEApp.updateConfig({simplifiedIntegration:{...simplifiedIntegration,...themeIntegration,enabled:true}})}if(instantSearch){this.setupISW()}}onAppStart(){document.addEventListener("DOMContentLoaded",()=>{this.ensurePlaceholder()})}oldldSICollectionFilterContainerDetected(){const productFilterBlock=document.querySelector(".boost-sd__filter-product-list");return!!productFilterBlock}checkSyncedCollection(collectionId){const{simplifiedIntegration}=this.TAEAppConfig;const{allSyncedCollections:{syncedCollections}}=simplifiedIntegration;const currentCollectionSynced=syncedCollections?.includes(collectionId);const collectionAllSynced=collectionId===0&&syncedCollections?.length>0;if(!currentCollectionSynced&&!collectionAllSynced){this.TAEApp.logger.warn("collection not synced -> fallback original theme");return false}return true}renderPlaceholder(originalContainer){const{simplifiedIntegration}=this.TAEAppConfig;const placeholder=simplifiedIntegration?.placeholder||"";const neededToHideElements=simplifiedIntegration?.neededToHideElements||[];const selectedSelector=simplifiedIntegration?.selectedSelector||"";originalContainer.style.display="none";this.hideNeededElements();const newProductFilterDiv=document.createElement("div");newProductFilterDiv.innerHTML=placeholder||"";newProductFilterDiv.className="boost-sd__filter-product-list boost-sd__placeholder-product-filter-tree";originalContainer.insertAdjacentElement("afterend",newProductFilterDiv);if(simplifiedIntegration){simplifiedIntegration.placeholderAdded=true;if(neededToHideElements&&selectedSelector){neededToHideElements.push(selectedSelector)}}}hideNeededElements(){const{simplifiedIntegration:{neededToHideElements}}=this.TAEAppConfig;if(neededToHideElements&&neededToHideElements.length>0){this.hideElements(neededToHideElements)}}removePlaceholder(){const{simplifiedIntegration:{placeholderAdded}}=this.TAEAppConfig;if(placeholderAdded){const placeholder=document.querySelector(".boost-sd__placeholder-product-filter-tree");if(placeholder instanceof HTMLElement){placeholder.remove()}}}hideElements(elements){if(!Array.isArray(elements))return;elements.forEach(selector=>{document.querySelectorAll(selector).forEach(el=>{if(el instanceof HTMLElement){el.style.display="none"}})})}setupISW(){this.TAEApp.updateConfig({taeSettings:{instantSearch:{enabled:true}}})}};SimplifiedIntegration.moduleName="SimplifiedIntegration";var CollectionFilter=class _CollectionFilter extends BoostTAEAppModule{constructor(){super(...arguments);this.initBlock=async()=>{const filterDom=document.querySelector(".boost-sd__filter-product-list:not(.boost-sd__filter-product-list--ready)");if(!filterDom){this.app.logger.error("Filter DOM not found");this.backwardCompatibilityV1Module?.legacyUpdateAppStatus("ready");return}this.assetFileLoaderModule?.preloadModuleScript("filter");const appConfig=this.TAEAppConfig;const{customization}=appConfig;if(typeof customization?.filter?.beforeRender==="function"){customization.filter.beforeRender()}const filterDomId=`${this.widgetId}-${generateUUID()}`;filterDom?.classList?.add("boost-sd__filter-product-list--ready");filterDom.id=filterDomId;const urlParams=this.prepareFilterAPIQueryParams();const response=await this.filterAPI(urlParams);const block={id:filterDomId,document:filterDom,widgetId:this.widgetId,defaultSort:urlParams.get("sort")||"",defaultParams:this.filterAPIDefaultParams,filterTree:{options:[]},dynamicBundles:[]};const backwardCompatibilityV1=this.backwardCompatibilityV1Module;backwardCompatibilityV1?.legacyAssignDefaultBlockAttributes(block,filterDom,"filter");const{html,bundles}=response;if(bundles){block.dynamicBundles=bundles}if(response.filter){response.filter.options=this.updateValuesOptions(response.filter.options);block.filterTree=response.filter}try{await Promise.all([this.assetFileLoaderModule?.assetLoadingPromise("themeCSS"),this.assetFileLoaderModule?.assetLoadingPromise("settingsCSS")])}catch{}if(html){filterDom.innerHTML=html}block.cache={[urlParams.toString()]:{...response,timestamp:new Date().getTime()}};this.TAEApp.registerBlock(block);this.saveFilterAPIResponseAnalyticData(response?.meta?.rid,response.bundles);this.syncAppConfigWithFilterAPIResponse(response);this.block=block;this.savePageLimitSettings();this.backwardCompatibilityV1Module?.legacyUpdateAppStatus("ready")}}get backwardCompatibilityV1Module(){return this.TAEApp.getModule(BackwardCompatibilityV1)}get b2bModule(){return this.TAEApp.getModule(B2B)}get fallbackModule(){return this.TAEApp.getModule(Fallback)}get simplifiedIntegrationModule(){return this.TAEApp.getModule(SimplifiedIntegration)}get analyticModule(){return this.TAEApp.getModule(Analytics)}get assetFileLoaderModule(){return this.TAEApp.getModule(AssetFilesLoader)}get extendAppConfig(){return {filterUrl:"https://services.mybcapps.com/bc-sf-filter/filter",filterSettings:Object.assign({swatch_extension:"png",...
        {
          
        }}, {"showFilterOptionCount":true,"showRefineBy":true,"showOutOfStockOption":false,"showSingleOption":true,"keepToggleState":false,"changeMobileButtonLabel":false,"sortingAvailableFirst":false,"showLoading":true,"activeScrollToTop":true,"showVariantImageBasedOnSelectedFilter":"pf_opt_frame_color","productAndVariantAvailable":true,"availableAfterFiltering":false,"isShortenUrlParam":true,"filterLayout":"vertical","filterTreeMobileStyle":"style3","filterTreeVerticalStyle":"style-default","filterTreeHorizontalStyle":"style1","stickyFilterOnDesktop":false,"stickyFilterOnMobile":false,"shortenUrlParamList":["pf_pt_product_type:product_type","pf_m_::rvw::helmet_type:helmet_type","pf_m_::rvw::apparel_type:apparel_type","pf_m_::algolia::best_for:best_for","pf_m_::rvw::series:series","pf_m_::rvw::technology:technology","pf_m_::rvw::frame_fit:frame_fit","pf_p_price_range:price_range","pf_ps_on_sale:on_sale","pf_opt_lens_color:lens_color","pf_p_price:price","pf_opt_type:type1","pf_opt_frame_color:frame_color","pf_opt_color:color","pf_opt_strap_color:strap_color","pf_r_review_ratings:review_ratings","pf_opt_size:size","pf_m_::rvw::best_for:best_for1","pf_c_collection:collection","pf_t_special_deals:special_deals"],"style":{"filterTitleTextColor":"","filterTitleFontSize":"","filterTitleFontWeight":"","filterTitleFontTransform":"","filterTitleFontFamily":"","filterOptionTextColor":"","filterOptionFontSize":"","filterOptionFontFamily":"","filterMobileButtonTextColor":"","filterMobileButtonFontSize":"","filterMobileButtonFontWeight":"","filterMobileButtonFontTransform":"","filterMobileButtonFontFamily":"","filterMobileButtonBackgroundColor":""}})};}get apiEndpoint(){let{filterUrl,searchUrl}=this.app.config;const{ssrUrl,generalSettings}=this.TAEAppConfig;if(generalSettings.ssr_version==="v2"&&ssrUrl){filterUrl=`${ssrUrl}/filter`;searchUrl=`${ssrUrl}/search`}const urlParams=new URLSearchParams(window.location.search);const searchQuery=urlParams.get("q");return isSearchPage()||searchQuery?searchUrl:filterUrl}get widgetId(){const{templateMetadata,generalSettings}=this.TAEAppConfig;const currentPage=generalSettings?.page||"collection";const widgetName=currentPage==="collection"?"collectionFilters":"searchPage";const widgetId=templateMetadata[widgetName]||"default";return widgetId}get filterAPIDefaultParams(){const{shop,templateSettings,templateMetadata,generalSettings,templateId,simplifiedIntegration}=this.TAEAppConfig;const historyParams=this.getHistoryParams();const productPerPage=typeof templateSettings?.themeSettings?.productList?.productsPerPage==="number"?templateSettings.themeSettings.productList.productsPerPage:16;const savedLimit=getLocalStorage(_CollectionFilter.LIMIT);const savedLimitSetting=getLocalStorage(_CollectionFilter.LIMIT_SETTING);const adminSettingChanged=savedLimitSetting&&savedLimitSetting!==`${productPerPage}`;const limit=adminSettingChanged?productPerPage:savedLimit&&!isNaN(Number(savedLimit))?Number(savedLimit):productPerPage;const widgetId=this.widgetId;const isMobileViewport=isMobileWidth();const viewportWidth=window.innerWidth;const showFilterTreeByDefault=templateSettings?.filterSettings?.filterLayout==="vertical"&&templateSettings?.filterSettings?.filterTreeVerticalStyle==="style-default"?true:false;const productPerRow=isMobileViewport?templateSettings?.themeSettings?.productList?.productsPerRowOnMobile||2:templateSettings?.themeSettings?.productList?.productsPerRowOnDesktop||3;const productImageMaxWidth=isMobileViewport?viewportWidth/productPerRow:viewportWidth/(productPerRow+(showFilterTreeByDefault?1:0));const deviceTypeByViewportWidth=detectDeviceByWidth();const showListViewDefault=templateSettings?.themeSettings?.additionalElements?.toolbar?.elements?.viewAs?.showListViewDefault;const defaultViewAs=showListViewDefault===true?"list":`grid--${isMobileWidth()?templateSettings?.themeSettings?.productList?.productsPerRowOnMobile||2:templateSettings?.themeSettings?.productList?.productsPerRowOnDesktop||3}`;return {_:"pf",t:Date.now().toString(),sid:generateUUID(),shop:shop.domain,page:Number(historyParams?.page||1),limit,sort:historyParams?.sort||getSortBy(),locale:generalSettings.current_locale,event_type:"init",pg:getCurrentPage(),build_filter_tree:true,collection_scope:generalSettings.collection_id||"0",money_format:shop.money_format,money_format_with_currency:shop.money_format_with_currency,widgetId,viewAs:defaultViewAs,device:deviceTypeByViewportWidth,first_load:true,productImageWidth:roundToNearest50(productImageMaxWidth),productPerRow,grid_col:productPerRow,widget_updated_at:templateMetadata?.updatedAt,templateId,current_locale:(window?.Shopify?.routes?.root||"/")?.replace(/\/$/,""),simplifiedIntegration:simplifiedIntegration.enabled||false,customer_id:getCustomerId(),insert_banners:templateMetadata?.featureOptions?.enableBannerInterleaving||false,...addParamsLocale()};}savePageLimitSettings(){const{templateSettings}=this.TAEAppConfig;const productPerPage=typeof templateSettings?.themeSettings?.productList?.productsPerPage==="number"?templateSettings.themeSettings.productList.productsPerPage:16;const savedLimit=getLocalStorage(_CollectionFilter.LIMIT);const savedLimitSetting=getLocalStorage(_CollectionFilter.LIMIT_SETTING);const adminSettingChanged=savedLimitSetting&&savedLimitSetting!==`${productPerPage}`;const currentLimit=adminSettingChanged?productPerPage:savedLimit&&!isNaN(Number(savedLimit))?Number(savedLimit):productPerPage;if(typeof window!=="undefined"&&window.localStorage){try{localStorage.setItem(_CollectionFilter.LIMIT_SETTING,`${productPerPage}`);localStorage.setItem(_CollectionFilter.LIMIT,`${currentLimit}`)}catch(e){this.app.logger.error("Failed to save limit settings to localStorage",e)}}}syncAppConfigWithFilterAPIResponse(res){const{shop}=this.TAEAppConfig;if(res.meta?.money_format){shop.money_format=res.meta.money_format}if(res.meta?.money_format_with_currency){shop.money_format_with_currency=res.meta.money_format_with_currency}if(res.meta?.currency){shop.currency=res.meta.currency}this.app.updateConfig({shop});this.backwardCompatibilityV1Module?.legacyUpdateAppStatus("ready")}prepareFilterAPIQueryParams(){const{generalSettings,filterSettings,customization}=this.TAEAppConfig;const paramsHistory=this.getHistoryParams();const defaultParams=this.filterAPIDefaultParams;const urlParams=new URLSearchParams;Object.entries(defaultParams).forEach(([key,value])=>{urlParams.set(key,value!==void 0?value.toString():"")});urlParams.set("search_no_result",Object.keys(paramsHistory?.paramMap||{}).length===0?"true":"false");if(paramsHistory?.paramMap){Object.keys(paramsHistory.paramMap).forEach(key=>{paramsHistory.paramMap[key].forEach(v=>urlParams.append(`${key}[]`,key.startsWith(`${defaultParams._}_st_`)?convertValueRequestStockStatus(v).toString():v))})}const searchParams=new URLSearchParams(window.location.search);const searchQuery=searchParams.get("q");if(searchQuery){if(isVendorPage())urlParams.set("vendor",searchQuery);else if(isShopifyTypePage())urlParams.set("product_type",searchQuery);else urlParams.set("q",searchQuery);if(isCollectionPage()){urlParams.set("incollection_search","true");urlParams.set("event_type","incollection_search")}this.setSearchQueryParamsWithSuggetion(urlParams)}if(generalSettings.collection_tags?.length){generalSettings.collection_tags.forEach(tag=>{urlParams.append("tag[]",tag)})}if(filterSettings.sortingAvailableFirst){urlParams.set("sort_first","available")}const availableAfterFiltering=filterSettings?.availableAfterFiltering;const productAndVariantAvailable=filterSettings?.productAndVariantAvailable;const hasFilterParams=Array.from(urlParams.keys()).some(key=>key.startsWith("pf_"));const showAvailable=!availableAfterFiltering&&productAndVariantAvailable?"true":availableAfterFiltering?hasFilterParams?"true":"false":"false";urlParams.set("product_available",showAvailable);urlParams.set("variant_available",showAvailable);if(filterSettings.showOutOfStockOption){urlParams.set("zero_options","true")}this.b2bModule?.setQueryParams(urlParams);if(customization?.filter?.customizedAPIParams){const{customizedAPIParams}=customization.filter;Object.entries(customizedAPIParams).forEach(([key,value])=>{urlParams.set(key,value)})}return urlParams}setSearchQueryParamsWithSuggetion(params){const SUGGESTION_DATA="boostSDSuggestionData";const CLICK_SUGGESTION_TERM="boostSDClickSuggestionTerm";const term=getLocalStorage(CLICK_SUGGESTION_TERM);if(!term)return;const suggestionData=getLocalStorage(SUGGESTION_DATA);if(!suggestionData)return;params.set("query",suggestionData.query);params.set("parent_request_id",suggestionData.id);params.set("suggestion",term);params.set("item_rank",(suggestionData.suggestions.findIndex(item=>item===term)+1).toString());removeLocalStorage(CLICK_SUGGESTION_TERM);removeLocalStorage(SUGGESTION_DATA)}saveFilterAPIResponseAnalyticData(reqId,bundles){const type=isSearchPage()?"search":"filter";const analytic=this.analyticModule;if(reqId){analytic?.saveRequestId(type,reqId);if(bundles){analytic?.saveRequestId(type,reqId,bundles)}}analytic?.savePreAction(type)}formatPercentSaleLabel(to,from=0){let label="";if(!from){label=`under ${to}%`}else if(!to){label=`above ${from}%`}else{label=`${from}% - ${to}%`}return label}updateValuesOptions(options){if(!Array.isArray(options))return options;return options.map(option=>{if(option.filterType==="percent_sale"){option.values=option.values?.map(item=>{item.key=item.key.replace("*-",":").replace("-*",":").replace("-",":");item.label=this.formatPercentSaleLabel(item.to,item.from);return item})}return option})}async filterAPI(params){const appConfig=this.TAEAppConfig;const queryString=params.toString();const response=await fetch(`${this.apiEndpoint}?${queryString}`,{method:"GET"});const HTTP_STATUS_NEED_FALLBACK=[404,413,403,500];if(HTTP_STATUS_NEED_FALLBACK.includes(response.status)){if(appConfig.simplifiedIntegration?.enabled){const simplifiedIntegration=this.simplifiedIntegrationModule;simplifiedIntegration?.hideNeededElements();simplifiedIntegration?.removePlaceholder()}else{this.fallbackModule?.loadFilterProductFallback()}}return response.json()}getHistoryParams(){const url=new URL(window.location.href);const isXSS=isBadUrl(url);if(isXSS){this.app.logger.error("[Security] Potential XSS detected in URL parameters. Ignoring query params.",window.location.href);return}const rawSearch=url.search;const FILTER_HISTORY_PREFIX="pf_";const DEFAULT_SEPARATOR=",";const REGEX_ESCAPE_PATTERN=/[.*+?^${}()|[\]\\]/g;const{searchParams}=url;const sort=searchParams.get("sort");const page=searchParams.get("page");const paramMap={};const shortenToFullMap=getShortenToFullParamMap();const separator=this.TAEAppConfig.customization?.filter?.customizedAPIParams?.multipleValueSeparator||DEFAULT_SEPARATOR;const escapedSeparator=separator.replace(REGEX_ESCAPE_PATTERN,"\\$&");const encodedSeparator=encodeURIComponent(separator);const escapedEncodedSeparator=encodedSeparator.replace(REGEX_ESCAPE_PATTERN,"\\$&");const splitRegex=new RegExp(`${escapedSeparator}|${escapedEncodedSeparator}`);for(const key of searchParams.keys()){let actualKey=key;let values;if(shortenToFullMap[key]){actualKey=shortenToFullMap[key];const escapedKey=key.replace(REGEX_ESCAPE_PATTERN,"\\$&");const matchResult=rawSearch.match(new RegExp(`[?&]${escapedKey}=([^&]+)`));const rawVal=matchResult?matchResult[1]:"";const parts=rawVal.split(splitRegex);values=parts.map(p=>decodeURIComponent(p.replace(/\+/g," ")))}else{values=searchParams.getAll(key)}if(actualKey.startsWith(FILTER_HISTORY_PREFIX)&&!paramMap[actualKey]){if(actualKey==="pf_tag"){paramMap.tag=values}else{paramMap[actualKey]=values}}}return{paramMap,sort,page}}};CollectionFilter.moduleName="CollectionFilter";CollectionFilter.LIMIT="boostSDLimit";CollectionFilter.LIMIT_SETTING="boostSDLimitSetting";var BackwardCompatibilityV1=class extends BoostTAEAppModule{shouldInit(){const{templateMetadata:{themeLibVersion}={}}=this.TAEAppConfig;if(!themeLibVersion)return true;const feLibMajorVersion=themeLibVersion.split(".")[0];return Number(feLibMajorVersion)<=1}get collectionFilterModule(){return this.TAEApp.getModule(CollectionFilter)}init(){window.boostSDTaeUtils={lazyLoadImages,inViewPortHandler,initCollectionFilter:()=>{setTimeout(()=>{this.collectionFilterModule?.initBlock()})}}}onAppStart(){const app=this.TAEApp;const{env}=this.TAEAppConfig;const mergedCustomizedFilterParams={...(this.TAEAppConfig.customization?.filter?.customizedAPIParams || {}),...(window.boostSdCustomParams || {})};this.TAEApp.updateConfig(config=>{config.customization={...config.customization,filter:{...config.customization?.filter,customizedAPIParams:mergedCustomizedFilterParams}};return config});window.boostSdCustomParams=mergedCustomizedFilterParams;Object.assign(window.boostWidgetIntegration,{generalSettings:{...this.TAEAppConfig.generalSettings,templateId:this.TAEAppConfig.templateId},simplifiedIntegration:this.TAEAppConfig.simplifiedIntegration,taeSettings:this.TAEAppConfig.taeSettings,env,app:{[env]:{customization:{},...this.TAEAppConfig,...window.boostWidgetIntegration.app?.[env]}},customization:{...this.TAEAppConfig.customization,filter:{...this.TAEAppConfig.customization?.filter,customizedAPIParams:mergedCustomizedFilterParams}},regisCustomization:function(fc,scope){if(typeof fc==="function"&&fc.name&&!scope){const functionName=fc.name;window.boostWidgetIntegration.app[env].customization[functionName]=fc}else if(typeof fc==="function"&&fc.name&&scope){window.boostWidgetIntegration.app[env].customization[scope]=window.boostWidgetIntegration.app[env].customization[scope]||{};const functionName=fc.name;window.boostWidgetIntegration.app[env].customization[scope][functionName]=fc}else{app.logger.error("Invalid function or function does not have a name.")}}});Object.assign(window,{boostSDData:this.TAEAppDataObjects})}onBeforeAppStart(){Object.assign(window,{boostWidgetIntegration:{...window.boostWidgetIntegration,status:"initializing"}})}legacyUpdateAppStatus(status){Object.assign(window.boostWidgetIntegration,{status})}legacyIsUsingRecommendationAppV3(){return window.boostSDAppConfig?.themeInfo?.taeFeatures?.recommendation==="installed"}legacyInitRecommendationWidgets(widgets){window.boostWidgetIntegration.app[this.TAEAppConfig.env].recommendationWidgets=widgets}legacyAssignDefaultBlockAttributes(block,blockDOM,blockType){const{templateSettings}=this.app.config;Object.assign(block,{widgetInfo:templateSettings,templateSettings,app:window.boostWidgetIntegration.app?.[this.app.config.env],document:blockDOM,id:blockDOM.id||block.id,blockType:blockType||"filter"});if(!("widgetId"in block)){Object.assign(block,{widgetId:blockDOM.id||block.id})}}};BackwardCompatibilityV1.moduleName="BackwardCompatibilityV1";var BackInStock=class extends BoostTAEAppModule{constructor(){super(...arguments);this.initBlock=()=>{const bisDom=document.createElement("div");bisDom.id="bc-bis";bisDom.className="boost-sd__bis";bisDom.style.display="none";document.body.appendChild(bisDom);this.block={id:"bc-bis",document:bisDom};this.backwardCompatibilityV1Module?.legacyAssignDefaultBlockAttributes(this.block,bisDom,"backInStock");this.TAEApp.registerBlock(this.block)}}get extendAppConfig(){return {klaviyoBISUrl:"https://a.klaviyo.com/client/back-in-stock-subscriptions",backInStock:Object.assign(
  {enabled:false,productSettings:{},displaySettings:{},isTurbo:false},
  {"enabled":false,"productSettings":{"showOnPreOrderProduct":{"show":false},"showOnVariantOutOfStock":{"show":false},"hideOnSpecificCollection":{"hide":false,"collectionIds":[]},"hideOnSpecificTag":{"hide":false,"tags":[]}},"displaySettings":{"button":{"type":"floating","buttonText":"Notify me when available.","textColor":"#ffffff","backgroundColor":"#000000"},"signUpForm":{"header":"Notify me","description":"Get a notification as soon as this product is back in stock by signing up below","buttonText":"Notify me when available","textColor":"#ffffff","backgroundColor":"#000000"},"confirmationMessage":{"show":true,"message":"Chúng tôi sẽ gửi thông báo cho bạn ngay khi có hàng.","textColor":"#FFFFFF","iconColor":"#FFFFFF","backgroundColor":"#00A47C"}},"notificationSettings":{"emailProvider":"boost","automatic":true,"customizeEmail":{"name":"","address":"back-in-stock@notifyboost.net","subject":"{{product.title_incl_variant}} is back in stock!","heading":"{{product.title_incl_variant}} is available now!","description":"Limited stock only at {{shop.name}}. Click ‘Buy now’ & grab yours before it goes out of stock again!","button":"Buy now","takeCustomerTo":"product","contentTextColor":"#FFFFFF","backgroundColor":"#000000","ctaTextColor":"#FFFFFF","ctaBackgroundColor":"#000000"},"htmlTemplate":{"content":""}}}
)};}get backwardCompatibilityV1Module(){return this.TAEApp.getModule(BackwardCompatibilityV1)}onModuleInit(){document.addEventListener("DOMContentLoaded",this.initBlock)}onModuleDestroy(){document.removeEventListener("DOMContentLoaded",this.initBlock)}};BackInStock.moduleName="BackInStock";var Cart=class extends BoostTAEAppModule{constructor(){super(...arguments);this.initBlock=()=>{this.block={id:"cart",document:document.body};this.backwardCompatibilityModule?.legacyAssignDefaultBlockAttributes(this.block,this.block.document,"cart");this.TAEApp.registerBlock(this.block)}}get extendAppConfig(){return{customization:{cart:{}}}}get backwardCompatibilityModule(){return this.TAEApp.getModule(BackwardCompatibilityV1)}onModuleInit(){document.addEventListener("DOMContentLoaded",this.initBlock)}onMouduleDestroy(){document.removeEventListener("DOMContentLoaded",this.initBlock)}};Cart.moduleName="Cart";var CountdownTimer=class extends BoostTAEAppModule{constructor(){super(...arguments);this.initBlock=()=>{if(this.block)return;const countdownTimerDom=document.querySelector(".boost-sd__countdown-timer-wrapper");if(!countdownTimerDom)return;const{template}=this.TAEAppConfig;if(typeof template?.countdownTimerPlaceholder==="string"){countdownTimerDom.innerHTML=template.countdownTimerPlaceholder}this.block={id:countdownTimerDom.id||"boost-sd-countdown-timer",document:countdownTimerDom};this.block.blockType="countdownTimer";this.TAEApp.registerBlock(this.block)}}onModuleInit(){if(document.readyState==="loading"){document.addEventListener("DOMContentLoaded",this.initBlock)}else{this.initBlock()}document.addEventListener("shopify:section:load",this.initBlock)}onModuleDestroy(){document.removeEventListener("DOMContentLoaded",this.initBlock);document.removeEventListener("shopify:section:load",this.initBlock)}};CountdownTimer.moduleName="CountdownTimer";var PreOrder=class extends BoostTAEAppModule{constructor(){super(...arguments);this.initBlock=()=>{const preOrderDom=document.querySelector(".boost-sd__preOrder-container");const{customization,template}=this.TAEAppConfig;if(typeof customization?.preOrder?.beforeRender==="function"){customization.preOrder.beforeRender()}if(!preOrderDom){return}if(typeof template?.preOrderPlaceholder==="string"){preOrderDom.innerHTML=template.preOrderPlaceholder}this.block={id:preOrderDom.id||"bc-pre-order",document:preOrderDom};this.backwardCompatibilityV1Module?.legacyAssignDefaultBlockAttributes(this.block,preOrderDom,"preOrder");this.TAEApp.registerBlock(this.block)}}get extendAppConfig(){return{customization:{preOrder:{}}}}get backwardCompatibilityV1Module(){return this.TAEApp.getModule(BackwardCompatibilityV1)}onModuleInit(){document.addEventListener("DOMContentLoaded",this.initBlock)}onModuleDestroy(){document.removeEventListener("DOMContentLoaded",this.initBlock)}};PreOrder.moduleName="PreOrder";var PredictiveBundle=class extends BoostTAEAppModule{constructor(){super(...arguments);this.initBlock=()=>{const predictiveBundleDom=document.querySelector(".boost-sd-widget-predictive-bundle");if(!predictiveBundleDom){return}this.block={id:predictiveBundleDom.id||"bc-predictive-bundle",document:predictiveBundleDom};this.backwardCompatibilityV1Module?.legacyAssignDefaultBlockAttributes(this.block,predictiveBundleDom,"predictiveBundle");this.TAEApp.registerBlock(this.block)}}get extendAppConfig(){return{predictiveBundle:{multiBundleSupport:false}}}get backwardCompatibilityV1Module(){return this.TAEApp.getModule(BackwardCompatibilityV1)}onModuleInit(){document.addEventListener("DOMContentLoaded",this.initBlock)}onModuleDestroy(){document.removeEventListener("DOMContentLoaded",this.initBlock)}};PredictiveBundle.moduleName="PredictiveBundle";var Recommendation=class extends BoostTAEAppModule{constructor(){super(...arguments);this.blocks={};this.initBlocks=()=>{if(this.backwardCompatibilityV1Module?.legacyIsUsingRecommendationAppV3()){this.backwardCompatibilityV1Module?.legacyInitRecommendationWidgets({});return}const{recommendationWidgets}=this.TAEAppConfig;this.backwardCompatibilityV1Module?.legacyInitRecommendationWidgets(recommendationWidgets);
      
      
      
    ;const recommendationWidgetDOMs=document.querySelectorAll('[id^="boost-sd-widget-"]');for(const widgetDOM of recommendationWidgetDOMs){widgetDOM.innerHTML=`<!-- TEMPLATE RECOMMENDATION PLACEHOLDER--><div class="boost-sd__rc-pl"><div class="boost-sd__rc-title-pl">  <span class="boost-sd__rc-pl-item" style="width: 150px; height: 30px;"></span></div><div class="boost-sd__rc-product-list-pl">  <span class="boost-sd__rc-pl-item"></span>  <span class="boost-sd__rc-pl-item"></span>  <span class="boost-sd__rc-pl-item"></span>  <span class="boost-sd__rc-pl-item"></span></div><div class="boost-sd__rc-info-pl">  <span class="boost-sd__rc-pl-item"></span>  <span class="boost-sd__rc-pl-item"></span>  <span class="boost-sd__rc-pl-item"></span></div></div><style> .boost-sd__rc-pl {  width: 100%;  min-height: 600px; } .boost-sd__rc-pl-item {  display: block;  width: 100%;  height: 20px;  background: rgba(0, 0, 0, 0.07);  margin-bottom: 16px;  animation: 2s infinite place-holder-animation; } .boost-sd__rc-title-pl {  width: 100%;  display: flex;  padding: 0 0 30px; } .boost-sd__rc-product-list-pl {  display: flex;  width: 100%;  padding: 0;  gap: 32px;  position: relative;  margin-bottom: 20px; } .boost-sd__rc-product-list-pl .boost-sd__rc-pl-item:nth-child(3), .boost-sd__rc-product-list-pl .boost-sd__rc-pl-item:nth-child(4) {  display: none; } .boost-sd__rc-product-list-pl .boost-sd__rc-pl-item {  display: block;  flex-wrap: wrap;  width: calc(50% - 8px);  height: 218px; } .boost-sd__rc-info-pl .boost-sd__rc-pl-item:nth-child(2) {  width: 80% } .boost-sd__rc-info-pl .boost-sd__rc-pl-item:nth-child(3) {  width: 50% } @media only screen and (min-width: 768px) {  .boost-sd__rc-pl-item {   margin-bottom: 8px;  }  .boost-sd__rc-title-pl {   padding-bottom: 60px;  }  .boost-sd__rc-product-list-pl .boost-sd__rc-pl-item:nth-child(3),  .boost-sd__rc-product-list-pl .boost-sd__rc-pl-item:nth-child(4) {   display: block;  }  .boost-sd__rc-product-list-pl .boost-sd__rc-pl-item {   height: 382px;   width: calc(25% - 8px);  }  .boost-sd__rc-info-pl .boost-sd__rc-pl-item:first-child {   width: 50%  }  .boost-sd__rc-info-pl .boost-sd__rc-pl-item:nth-child(2) {   width: 40%  }  .boost-sd__rc-info-pl .boost-sd__rc-pl-item:nth-child(3) {   width: 30%  } } @keyframes place-holder-animation {  0% {   opacity: 1;  }  50% {   opacity: 0.5;  }  100% {   opacity: 1;  } }</style>`;this.initBlock(widgetDOM)}}}get extendAppConfig(){const recommendationWidgets={};
      
      
        
          recommendationWidgets['home-page'] = {"homepage-616382":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"newest-arrivals","limit":12,"layoutDisplay":"carousel","rules":[]},"widgetName":"New Arrivals & Best Sellers","widgetStatus":"live","widgetDesignSettings":{"widgetId":"homepage-616382","tenantId":"v8pti0-6j.myshopify.com","layoutDisplay":"carousel","numberOfProductPerRow":4,"numberOfRecommendProduct":12,"templateType":"customization","themePreview":"","titleAlignment":"center","titleFont":"Poppins","titleFontSize":14,"titleFontStyle":"100","titleTextColor":"#181818","titleTextTransform":"capitalize"}},"homepage-630412":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"bestsellers","limit":12,"layoutDisplay":"carousel","rules":[{"conditions":[],"consequences":[]}]},"widgetName":"Best Sellers","widgetStatus":"draft","widgetDesignSettings":{"widgetId":"homepage-630412","tenantId":"v8pti0-6j.myshopify.com","layoutDisplay":"carousel","numberOfProductPerRow":4,"numberOfRecommendProduct":12,"templateType":"customization","themePreview":"","titleAlignment":"center","titleFont":"Poppins","titleFontSize":14,"titleFontStyle":"100","titleTextColor":"#181818","titleTextTransform":"capitalize"}}}
        
      
        
          recommendationWidgets['cart-page'] = {"cartpage-143280":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"recently-viewed","limit":12,"layoutDisplay":"carousel","rules":[]},"widgetName":"Still interested in this?","widgetStatus":"draft","widgetDesignSettings":{"tenantId":"v8pti0-6j.myshopify.com","widgetId":"defaultSettings","layoutDisplay":"carousel","templateType":"customization","themePreview":"","numberOfRecommendProduct":12,"numberOfProductPerRow":4,"titleAlignment":"left","titleTextColor":"#3D4246","titleFont":"Poppins","titleTextTransform":"capitalize","titleFontSize":14,"titleFontStyle":"100"}},"cartpage-078652":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"related-items","limit":12,"layoutDisplay":"carousel","rules":[],"modelType":"Alternative","secondaryAlgorithm":"bestsellers"},"widgetName":"Similar Products","widgetStatus":"draft","widgetDesignSettings":{"tenantId":"v8pti0-6j.myshopify.com","widgetId":"defaultSettings","layoutDisplay":"carousel","templateType":"customization","themePreview":"","numberOfRecommendProduct":12,"numberOfProductPerRow":4,"titleAlignment":"left","titleTextColor":"#3D4246","titleFont":"Poppins","titleTextTransform":"capitalize","titleFontSize":14,"titleFontStyle":"100"}},"cartpage-044171":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"personalized-recommendation","limit":12,"layoutDisplay":"carousel","rules":[],"modelType":"PersonalizedSearch","secondaryAlgorithm":"FBT"},"widgetName":"Don't forget these for your adventure!","widgetStatus":"draft","widgetDesignSettings":{"widgetId":"cartpage-044171","tenantId":"v8pti0-6j.myshopify.com","layoutDisplay":"carousel","numberOfProductPerRow":4,"numberOfRecommendProduct":12,"templateType":"customization","themePreview":"","titleAlignment":"left","titleFont":"Poppins","titleFontSize":14,"titleFontStyle":"100","titleTextColor":"#3D4246","titleTextTransform":"capitalize"}},"cartpage-738020":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"frequently-bought-together","limit":12,"layoutDisplay":"carousel","rules":[{"conditions":[],"consequences":[]}],"modelType":"FBT","secondaryAlgorithm":"bestsellers"},"widgetName":"Frequently bought together","widgetStatus":"draft","widgetDesignSettings":{"layoutDisplay":"carousel","numberOfProductPerRow":4,"numberOfRecommendProduct":12,"templateType":"customization","themePreview":"","titleAlignment":"left","titleFont":"Poppins","titleFontSize":14,"titleFontStyle":"100","titleTextColor":"#3D4246","titleTextTransform":"capitalize"}},"cartpage-756772":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"frequently-bought-together","limit":12,"layoutDisplay":"carousel","rules":[{"conditions":[],"consequences":[]}],"modelType":"FBT","secondaryAlgorithm":"Complementary"},"widgetName":"Gear up and go","widgetStatus":"draft","widgetDesignSettings":{"layoutDisplay":"carousel","numberOfProductPerRow":4,"numberOfRecommendProduct":12,"templateType":"customization","themePreview":"","titleAlignment":"left","titleFont":"Poppins","titleFontSize":14,"titleFontStyle":"100","titleTextColor":"#3D4246","titleTextTransform":"capitalize"}}}
        
      
        
          recommendationWidgets['cart-drawer'] = {"cartdrawer-458801":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"frequently-bought-together","limit":12,"layoutDisplay":"carousel","rules":[{"conditions":[],"consequences":[]}],"modelType":"FBT","secondaryAlgorithm":"bestsellers"},"widgetName":"Frequently bought together","widgetStatus":"draft","widgetDesignSettings":{"layoutDisplay":"carousel","numberOfRecommendProduct":12,"templateType":"customization","themePreview":"","titleAlignment":"left","titleFont":"Poppins","titleFontSize":14,"titleFontStyle":"100","titleTextColor":"#3D4246","titleTextTransform":"capitalize","numberOfProductPerRowSlideCart":2,"numberOfProductPerRowPopupCart":4}}}
        
      
        
          recommendationWidgets['product-page'] = {"productpage-372624":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"recently-viewed","limit":12,"layoutDisplay":"carousel","rules":[]},"widgetName":"Recently Viewed","widgetStatus":"draft","widgetDesignSettings":{"widgetId":"productpage-372624","tenantId":"v8pti0-6j.myshopify.com","layoutDisplay":"carousel","numberOfProductPerRow":4,"numberOfRecommendProduct":12,"templateType":"customization","themePreview":"","titleAlignment":"left","titleFont":"Poppins","titleFontSize":14,"titleFontStyle":"100","titleTextColor":"#3D4246","titleTextTransform":"capitalize"}},"productpage-072658":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"related-items","limit":12,"layoutDisplay":"carousel","rules":[{"conditions":[{"option":"all-products","value":null}],"consequences":[]}],"modelType":"Alternative","secondaryAlgorithm":"bestsellers"},"widgetName":"You May Also Like","widgetStatus":"live","widgetDesignSettings":{"widgetId":"productpage-072658","tenantId":"v8pti0-6j.myshopify.com","layoutDisplay":"carousel","numberOfProductPerRow":4,"numberOfRecommendProduct":12,"templateType":"customization","themePreview":"","titleAlignment":"left","titleFont":"Poppins","titleFontSize":14,"titleFontStyle":"100","titleTextColor":"#181818","titleTextTransform":"capitalize"}}}
        
      
        
          recommendationWidgets['collection-page'] = {"collectionpage-603347":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"newest-arrivals","limit":12,"layoutDisplay":"carousel","rules":[]},"widgetName":"Just dropped","widgetStatus":"draft","widgetDesignSettings":{"tenantId":"v8pti0-6j.myshopify.com","widgetId":"defaultSettings","layoutDisplay":"carousel","templateType":"customization","themePreview":"","numberOfRecommendProduct":12,"numberOfProductPerRow":4,"titleAlignment":"left","titleTextColor":"#3D4246","titleFont":"Poppins","titleTextTransform":"capitalize","titleFontSize":14,"titleFontStyle":"100"}},"collectionpage-470884":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"trending-products","limit":12,"layoutDisplay":"carousel","rules":[],"calculatedBasedOn":"purchase-events","rangeOfTime":"7-day"},"widgetName":"Most Popular Products","widgetStatus":"draft","widgetDesignSettings":{"tenantId":"v8pti0-6j.myshopify.com","widgetId":"defaultSettings","layoutDisplay":"carousel","templateType":"customization","themePreview":"","numberOfRecommendProduct":12,"numberOfProductPerRow":4,"titleAlignment":"left","titleTextColor":"#3D4246","titleFont":"Poppins","titleTextTransform":"capitalize","titleFontSize":14,"titleFontStyle":"100"}},"collectionpage-618645":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"trending-products","limit":12,"layoutDisplay":"carousel","rules":[],"calculatedBasedOn":"view-events","rangeOfTime":"7-day"},"widgetName":"Trending products","widgetStatus":"live","widgetDesignSettings":{"widgetId":"collectionpage-618645","tenantId":"v8pti0-6j.myshopify.com","layoutDisplay":"carousel","numberOfProductPerRow":4,"numberOfRecommendProduct":12,"templateType":"customization","themePreview":"","titleAlignment":"left","titleFont":"Poppins","titleFontSize":14,"titleFontStyle":"100","titleTextColor":"#181818","titleTextTransform":"capitalize"}},"collectionpage-658716":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"hand-picked-products","limit":12,"layoutDisplay":"carousel","rules":[{"conditions":[{"option":"collectionId","value":["469899509998"],"conductor":"equal"}],"consequences":[{"option":"productId","value":[8935917158638,8935915421934,8935916765422,8935916732654,8935917027566,8961551728878],"conductor":"equal"}]}]},"widgetName":"Hand-picked products","widgetStatus":"draft","widgetDesignSettings":{"layoutDisplay":"carousel","numberOfProductPerRow":4,"numberOfRecommendProduct":12,"templateType":"customization","themePreview":"","titleAlignment":"left","titleFont":"Poppins","titleFontSize":14,"titleFontStyle":"100","titleTextColor":"#3D4246","titleTextTransform":"capitalize"}},"collectionpage-521117":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"recently-viewed","limit":12,"layoutDisplay":"carousel","rules":[]},"widgetName":"Recently Viewed","widgetStatus":"draft","widgetDesignSettings":{"widgetId":"collectionpage-521117","tenantId":"v8pti0-6j.myshopify.com","layoutDisplay":"carousel","numberOfProductPerRow":4,"numberOfRecommendProduct":12,"templateType":"customization","themePreview":"","titleAlignment":"left","titleFont":"Poppins","titleFontSize":14,"titleFontStyle":"100","titleTextColor":"#3D4246","titleTextTransform":"capitalize"}}}
        
      
        
          recommendationWidgets['defaultSettings'] = {"titleAlignment":"left","titleTextColor":"#3D4246","titleFont":"Poppins","titleTextTransform":"capitalize","titleFontSize":14,"titleFontStyle":"100","buttonBackgroundColor":"","buttonTextColor":"","tenantId":"v8pti0-6j.myshopify.com","widgetId":"defaultSettings"}
        
      
        
          recommendationWidgets['dynamicBundleDefaultSettings'] = {"titleAlignment":"center","titleTextColor":"#7A7A7A","titleFont":"Poppins","titleTextTransform":"uppercase","titleFontSize":12,"titleFontStyle":"regular","buttonBackgroundColor":"#111111","buttonTextColor":"#FFFFFF","tenantId":"v8pti0-6j.myshopify.com","widgetId":"dynamicBundleDefaultSettings"}
        
      
        
          recommendationWidgets['dynamic-bundle'] = {"bundle-700403":{"params":{"shop":"v8pti0-6j.myshopify.com","recommendationType":"dynamic-bundle"},"widgetDesignSettings":{"tenantId":"v8pti0-6j.myshopify.com","widgetId":"bundle-700403","templateType":"default","titleName":"Buy the Full Kit","buttonText":"Add collection to cart","bundleImageType":"combo","bundleImageData":"","bundleImageLink":"","description":"Buy {{quantity}} items and save {{discount}}","bundleBadgeText":"Most popular","bundleBadgeColor":"#008060","bundleBadgeTextColor":"#FFFFFF","bundleHighlightOption":1,"variantSelection":"single","titleAlignment":"center","titleTextColor":"#7A7A7A","titleFont":"Poppins","titleTextTransform":"uppercase","titleFontSize":12,"titleFontStyle":"regular","buttonBackgroundColor":"#111111","buttonTextColor":"#FFFFFF"}}}
        
      
    ;return{recommendUrl:"https://services.mybcapps.com/discovery/recommend",recommendationWidgets}}get backwardCompatibilityV1Module(){return this.TAEApp.getModule(BackwardCompatibilityV1)}get assetFileLoaderModule(){return this.TAEApp.getModule(AssetFilesLoader)}onModuleInit(){document.addEventListener("DOMContentLoaded",this.initBlocks)}onModuleDestroy(){document.removeEventListener("DOMContentLoaded",this.initBlocks)}initBlock(dom){const block={id:dom.id,document:dom};this.assetFileLoaderModule?.preloadModuleScript("recommendation");this.backwardCompatibilityV1Module?.legacyAssignDefaultBlockAttributes(block,dom,"recommendation");block.widgetId=dom.id?.replace("boost-sd-widget-","");this.TAEApp.registerBlock(block);this.blocks[block.id]=block}};Recommendation.moduleName="Recommendation";var Search=class extends BoostTAEAppModule{constructor(){super(...arguments);this.block={id:"bc-instant-search",document:document.createElement("div")};this.initBlock=()=>{if(!this.enabled)return;this.assetFileLoaderModule?.preloadModuleScript("instant-search");const{document:document2,id}=this.block;document2.id=id;window.document.body.appendChild(document2);this.backwardCompatibilityV1Module?.legacyAssignDefaultBlockAttributes(this.block,document2,"instantSearch");this.TAEApp.registerBlock(this.block)}}get backwardCompatibilityV1Module(){return this.TAEApp.getModule(BackwardCompatibilityV1)}get assetFileLoaderModule(){return this.TAEApp.getModule(AssetFilesLoader)}get extendAppConfig(){return{searchUrl:"https://services.mybcapps.com/bc-sf-filter/search"}}get enabled(){const{taeSettings,templateId,simplifiedIntegration}=this.TAEAppConfig;const isInstantSearchEnabled=taeSettings?.instantSearch?.enabled&&templateId&&(!simplifiedIntegration.enabled||simplifiedIntegration.instantSearch);return isInstantSearchEnabled}onModuleInit(){document.addEventListener("DOMContentLoaded",this.initBlock)}onMouduleDestroy(){document.removeEventListener("DOMContentLoaded",this.initBlock)}};Search.moduleName="Search";var SEOEnhancement=class extends BoostTAEAppModule{shouldInit(){return this.TAEAppConfig.generalSettings.enableRobot}init(){const isSupportedPage=isCollectionPage()||isSearchPage();if(!isSupportedPage)return;if(document.querySelector('meta[name="robots"]'))return;const hasFilterParam=checkExistFilterOptionParam();const hasOrphanQ=!!getQueryParamByKey("q")&&!isSearchPage();if(!hasFilterParam&&!hasOrphanQ)return;const meta=document.createElement("meta");meta.name="robots";meta.content="noindex,nofollow,nosnippet";meta.setAttribute("data-boost-injected","seo-enhancement");document.head.append(meta)}get extendAppConfig(){return{generalSettings:{enableRobot:true}}}};SEOEnhancement.moduleName="SEOEnhancement";var ShopifyMetafield=class extends BoostTAEAppModule{get extendAppConfig(){return {shop:{name:"Smith Optics",url:"https://www.smithoptics.com",domain:"v8pti0-6j.myshopify.com",currency:"USD",money_format: "\u0026#36;{{amount}}",money_format_with_currency: "\u0026#36;{{amount}} USD"},integration:{},...
        {
          
            integration: Object.assign({}, {"emailSMS":{"klaviyo":"active"},"reviews":"ReviewsIO"}),
          
        }
      };}};ShopifyMetafield.moduleName="ShopifyMetafield";var ShopifyDataObject=class extends BoostTAEAppModule{get dataObject(){return {user: 
        {
          
        }
      ,product:{...(
          
            ""
          
         || {})}};}};ShopifyDataObject.moduleName="ShopifyDataObject";var TemplateManagement=class extends BoostTAEAppModule{get extendAppConfig(){let templateId="";templateId=templateId=
      
        "kZtLwzteDN"
       || "";let templateMetadata={};templateMetadata=
      
      
        {"collectionFilters":"kZtLwzteDN/themes/dawn/main__0__liquid","productList":"kZtLwzteDN/product-list/main__0__liquid","productItem":"kZtLwzteDN/product-item/main__0__liquid","collectionHeader":"kZtLwzteDN/collection-header/main__0__liquid","searchPage":"kZtLwzteDN/themes/dawn/search__0__liquid","mostPopularProducts":"kZtLwzteDN/no-search-result-page/most-popular-products__0__liquid","recommendation":"kZtLwzteDN/recommendation/main__0__liquid","recommendationDynamicBundle":"kZtLwzteDN/recommendation/dynamic-bundle__0__liquid","recommendationEmbeddedBundle":"kZtLwzteDN/recommendation/embedded-bundle__0__liquid","recommendationVolumeBundleProduct":"kZtLwzteDN/recommendation/volume-bundle/volume-product__0__liquid","recommendationVolumeBundlePopup":"kZtLwzteDN/recommendation/volume-bundle/volume-popup__0__liquid","recommendationVolumeBundleBlock":"kZtLwzteDN/recommendation/volume-bundle/main__0__liquid","tierDiscountBundlePopup":"kZtLwzteDN/tier-discount-bundle/tier-discount-popup__0__liquid","tierDiscountBundleBlock":"kZtLwzteDN/tier-discount-bundle/main__0__liquid","instantSearchWidget":"kZtLwzteDN/instant-search-widget/main__0__liquid","quickView":"kZtLwzteDN/quickview/main__0__liquid","cart":"kZtLwzteDN/cart/main__0__liquid","placeholderFilterTree":"kZtLwzteDN/place-holder/place-holder__0__liquid","placeholderRecommendation":"kZtLwzteDN/recommendation-placeholder/main__0__liquid","preOrder":"kZtLwzteDN/pre-order/main__0__liquid","preOrderPlaceholder":"kZtLwzteDN/pre-order-placeholder/main__0__liquid","backInStock":"kZtLwzteDN/back-in-stock/main__0__liquid","countdownTimer":"kZtLwzteDN/countdown-timer/main__0__liquid","countdownTimerPlaceholder":"kZtLwzteDN/countdown-timer-placeholder/main__0__liquid","templateVersion":"2.50.1","setupVersion":"v3","applyUniqueVersion":true,"themeNameLib":"dawn","themeLibVersion":"1.88.2","themeCssVersion":"2.50.1","themeCssUrl":"https://cdn.boostcommerce.io/widget-integration/theme/dawn/2.50.1/main.css","settingsCssUrl":"https://cdn.shopify.com/s/files/1/0751/8073/6750/files/boost-app-do-not-delete-this-file-v8pti0-6j__tJiMrMVK7m-settings.css?v=1788454982","updatedAt":1788454983,"featureOptions":{"enableBannerInterleaving":true},"customizeCssUrl":"https://cdn.boostcommerce.io/widget-integration/theme/customization/v8pti0-6j.myshopify.com/kZtLwzteDN/customization-1787769969233.css","customizeJsUrl":"https://cdn.boostcommerce.io/widget-integration/theme/customization/v8pti0-6j.myshopify.com/kZtLwzteDN/customization-1786518293104.js","integratedTheme":{"157538844910":{"collectionPage":true,"searchPage":true,"instantSearch":true,"productListSelector":{"collectionPage":["#MainContent div[id$=\"__banner\"][id^=\"shopify-section-template\"]","#MainContent div[id$=\"__product-grid\"][id^=\"shopify-section-template\"]",".boost-sd__collection-template"],"searchPage":["#MainContent section[id$=\"__main\"][id^=\"shopify-section-template\"]",".boost-sd__search-template"]}},"160494059758":{"collectionPage":true,"searchPage":true,"instantSearch":true,"productListSelector":{"collectionPage":["#MainContent div[id$=\"__banner\"][id^=\"shopify-section-template\"]","#MainContent div[id$=\"__product-grid\"][id^=\"shopify-section-template\"]",".boost-sd__collection-template"],"searchPage":["#MainContent section[id$=\"__main\"][id^=\"shopify-section-template\"]",".boost-sd__search-template"]}},"160596328686":{"collectionPage":true,"searchPage":true,"instantSearch":true,"productListSelector":{"collectionPage":["#MainContent div[id$=\"__banner\"][id^=\"shopify-section-template\"]","#MainContent div[id$=\"__product-grid\"][id^=\"shopify-section-template\"]",".boost-sd__collection-template"],"searchPage":["#MainContent section[id$=\"__main\"][id^=\"shopify-section-template\"]",".boost-sd__search-template"]}},"161165934830":{"collectionPage":true,"searchPage":true,"instantSearch":true,"productListSelector":{"collectionPage":["#MainContent div[id$=\"__banner\"][id^=\"shopify-section-template\"]","#MainContent div[id$=\"__product-grid\"][id^=\"shopify-section-template\"]",".boost-sd__collection-template"],"searchPage":["#MainContent section[id$=\"__main\"][id^=\"shopify-section-template\"]",".boost-sd__search-template"]}},"164572135662":{"collectionPage":true,"searchPage":true,"instantSearch":true,"productListSelector":{"collectionPage":["#MainContent div[id$=\"__banner\"][id^=\"shopify-section-template\"]","#MainContent div[id$=\"__product-grid\"][id^=\"shopify-section-template\"]",".boost-sd__collection-template"],"searchPage":["#MainContent section[id$=\"__main\"][id^=\"shopify-section-template\"]",".boost-sd__search-template"]}},"164882284782":{"collectionPage":true,"searchPage":true,"instantSearch":true,"productListSelector":{"collectionPage":["#MainContent div[id$=\"__banner\"][id^=\"shopify-section-template\"]","#MainContent div[id$=\"__product-grid\"][id^=\"shopify-section-template\"]",".boost-sd__collection-template"],"searchPage":["#MainContent section[id$=\"__main\"][id^=\"shopify-section-template\"]",".boost-sd__search-template"]}},"165259509998":{"collectionPage":true,"searchPage":true,"instantSearch":true,"productListSelector":{"collectionPage":["#MainContent div[id$=\"__banner\"][id^=\"shopify-section-template\"]","#MainContent div[id$=\"__product-grid\"][id^=\"shopify-section-template\"]",".boost-sd__collection-template"],"searchPage":["#MainContent section[id$=\"__main\"][id^=\"shopify-section-template\"]",".boost-sd__search-template"]}},"165441208558":{"collectionPage":true,"searchPage":true,"instantSearch":true,"productListSelector":{"collectionPage":["#MainContent div[id$=\"__banner\"][id^=\"shopify-section-template\"]","#MainContent div[id$=\"__product-grid\"][id^=\"shopify-section-template\"]",".boost-sd__collection-template"],"searchPage":["#MainContent section[id$=\"__main\"][id^=\"shopify-section-template\"]",".boost-sd__search-template"]}}}}
      
       || {};let templateSettings={};templateSettings=
    
    
      {"appPreferenceSettings":{"watermark":false},"preOrderSettings":{"notificationSettings":{"emailProvider":"boost","automatic":false,"customizeEmail":{"name":"Smith Optics (Boost)","address":"pre-order@notifyboost.net","subject":"Preorder confirmed: {{order.name}}","heading":"Thanks for preordering from {{shop.name}}","description":"Your recent order {{order.name}} includes at least one preorder item. Please note the payment and shipping information below. Your preorder will be delivered as soon as possible.","button":"View order","contentTextColor":"#000000","backgroundColor":"#ffffff","ctaTextColor":"#ffffff","ctaBackgroundColor":"#000000"},"htmlTemplate":{"content":""},"shippingUpdateEmail":{"subject":"Shipping update for Order {{order.name}}","heading":"Shipping update for Order {{order.name}}","description":"Thanks for preordering from {{shop.name}}. Due to unforeseen circumstances, your preorder products in order {{order.name}} will be delayed. We will do our best to ship your product as soon as possible."}}},"generalSettings":{"addCollectionToProductUrl":false,"breakpointmobile":"575px","breakpointtabletportraitmin":"576px","breakpointtabletportraitmax":"991px","breakpointtabletlandscapetmin":"992px","breakpointtabletlandscapemax":"1199px","breakpointdesktop":"1200px"},"searchSettings":{"searchPanelBlocks":{"searchTermSuggestions":{"label":"Need a starting point? Here's what others are exploring.","searchTermList":["lowdown","bobcat","riptide","wildcat","embark","guides choice","barra","lowdown 2","venture","truss"],"backup":[],"type":"based_on_data","active":true},"mostPopularProducts":{"label":"See what the crew is searching for","productList":["riptide","guides-choice","bobcat","lowdown-2","wildcat","guides-choice-bifocal","guides-choice-xl","embark","wildcat-replacement-lens","lowdown-xl-2"],"backup":[],"type":"based_on_data","active":true},"products":{"label":"Products","pageSize":25,"active":true,"displayImage":true},"collections":{"label":"Collections","pageSize":25,"active":true,"displayImage":true,"displayDescription":true,"excludedValues":[{"value":"468168868078","label":"Hide from NA [hidden]","handle":"hide-from-na","sort_order":"best-selling"},{"value":"467199852782","label":"ExpertVoice Special Discount","handle":"expertvoice-standard-discount-copy","sort_order":"best-selling"},{"value":"461562872046","label":"ExpertVoice One Time Deal","handle":"expert-voice-one-time-deal","sort_order":"best-selling"},{"value":"462552858862","label":"ExpertVoice Standard Discount","handle":"expertvoice-standard-discount","sort_order":"best-selling"},{"value":"457455960302","label":"ExpertVoice Flash Deal","handle":"expertvoice-flash-sale","sort_order":"best-selling"},{"value":"460207030510","label":"HP Carousel - New Arrivals [hidden]","handle":"hp-carousel-new-arrivals","sort_order":"best-selling"},{"value":"462115635438","label":"ExpertVoice Drop (Hidden)","handle":"expertvoice-drop","sort_order":"best-selling"},{"value":"467934904558","label":"Hide from EMEA [hidden]","handle":"hide-from-emea","sort_order":"best-selling"},{"value":"457455108334","label":"EasyGift All Products [hidden]","handle":"easygift-all-products","sort_order":"best-selling"},{"value":"459518836974","label":"Full Price Products [hidden]","handle":"full-price-products","sort_order":"best-selling"},{"value":"459942625518","label":"Full Price Retail [hidden]","handle":"full-price-retail","sort_order":"best-selling"},{"value":"459942723822","label":"Full Price Prescription [hidden]","handle":"full-price-prescription","sort_order":"best-selling"},{"value":"459956879598","label":"Full Price Products Except Gift Card [hidden]","handle":"full-price-products-except-gift-card","sort_order":"best-selling"},{"value":"460270665966","label":"Full Price Products Except Prescription [hidden]","handle":"full-price-products-except-prescription","sort_order":"best-selling"},{"value":"460642877678","label":"LensAdvisor Products","handle":"lensadvisor-products","sort_order":"best-selling"},{"value":"463090647278","label":"Snow Goggles (In Season) [Hidden]","handle":"snow-goggles-in-season","sort_order":"best-selling"},{"value":"467199820014","label":"ExpertVoice Goggles (With Exclusions)","handle":"goggles-copy","sort_order":"best-selling"},{"value":"467199590638","label":"Expert Voice Sale","handle":"smith-optics-sale-copy","sort_order":"best-selling"},{"value":"462554366190","label":"ExpertVoice All Products With Exclusions [hidden]","handle":"expertvoice-all-products-hidden-copy","sort_order":"best-selling"},{"value":"460604342510","label":"ExpertVoice All Products [hidden]","handle":"expertvoice-all-products","sort_order":"best-selling"},{"value":"472178000110","label":"ExpertVoice Helmets With Exclusions","handle":"expertvoice-helmets-with-exclusions","sort_order":"best-selling"},{"value":"472178032878","label":"ExpertVoice Sunglasses With Exclusions","handle":"expertvoice-helmets-with-exclusions-copy","sort_order":"best-selling"},{"value":"472178065646","label":"ExpertVoice Apparel With Exclusions","handle":"expertvoice-sunglasses-with-exclusions-copy","sort_order":"best-selling"},{"value":"472927568110","label":"Test-Smart-collection","handle":"test-smart-collection","sort_order":"best-selling"},{"value":"460697796846","label":"Brown Lens Fishing and Water Sunglasses","handle":"brown-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460697862382","label":"Green Lens Fishing and Water Sunglasses","handle":"green-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460697895150","label":"Blue Mirror Lens Fishing and Water Sunglasses","handle":"blue-mirror-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460697927918","label":"Yellow Lens Fishing and Water Sunglasses","handle":"yellow-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460697960686","label":"PolarChromic Brown Green Lens Fishing and Water Sunglasses","handle":"polarchromic-brown-green-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460697993454","label":"Gray Green Lens Fishing and Water Sunglasses","handle":"gray-green-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460698026222","label":"Opal Mirror Lens Fishing and Water Sunglasses","handle":"opal-mirror-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460698058990","label":"PolarChromic Blue Lens Fishing and Water Sunglasses","handle":"polarchromic-blue-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460698124526","label":"Black Lens Fishing and Water Sunglasses","handle":"black-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460698157294","label":"Bronze Lens Fishing and Water Sunglasses","handle":"bronze-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"474893025518","label":"ExpertVoice Flash Deal Rx Options (Hidden)","handle":"expert-voice-flash-deal-rx-options-hidden","sort_order":"best-selling"},{"value":"474932936942","label":"Full Price Products + Lens Advisor for CS [hidden]","handle":"full-price-products-lens-advisor-hidden-for-warranty","sort_order":"best-selling"},{"value":"475956347118","label":"ExpertVoice Deal Days (Hidden)","handle":"expertvoice-deal-days-hidden","sort_order":"best-selling"}]},"pages":{"label":"Stories & Pages","pageSize":25,"active":true,"displayImage":true,"displayExcerpt":true},"searchEmptyResultMessages":{"active":true,"label":"\"{{ terms }}\" is off the map. Adjust your spelling or broaden your search — your next adventure is out there."},"searchTips":{"label":"Search tips","active":true,"searchTips":"Spell check — even the best explorers misread the map.{{ breakline }}Cast a wider net — try broader search terms.{{ breakline }}Trim it down — fewer words, more ground covered.{{ breakline }}Try a different angle — product type, model, or feature might be your best route in."}},"suggestionNoResult":{"search_terms":{"label":"Need a starting point? Here's what others are exploring.","status":true,"data":["lowdown","bobcat","riptide","wildcat","embark","guides choice","barra","lowdown 2","venture","truss"],"type":"based_on_data","backup":[]},"products":{"label":"See what the crew is searching for","status":true,"data":["riptide","guides-choice","bobcat","lowdown-2","wildcat","guides-choice-bifocal","guides-choice-xl","embark","wildcat-replacement-lens","lowdown-xl-2"],"type":"based_on_data","backup":[]}},"enableInstantSearch":false,"productAvailable":false,"showSuggestionProductImage":true,"showSuggestionProductPrice":true,"showSuggestionProductSalePrice":true,"showSuggestionProductSku":false,"showSuggestionProductVendor":false,"suggestionBlocks":[{"type":"suggestions","label":"See what the crew is searching for:","status":"active","number":5},{"type":"collections","label":"Collections","status":"active","number":3,"excludedValues":[{"value":"468168868078","label":"Hide from NA [hidden]","handle":"hide-from-na","sort_order":"best-selling"},{"value":"467199852782","label":"ExpertVoice Special Discount","handle":"expertvoice-standard-discount-copy","sort_order":"best-selling"},{"value":"461562872046","label":"ExpertVoice One Time Deal","handle":"expert-voice-one-time-deal","sort_order":"best-selling"},{"value":"462552858862","label":"ExpertVoice Standard Discount","handle":"expertvoice-standard-discount","sort_order":"best-selling"},{"value":"457455960302","label":"ExpertVoice Flash Deal","handle":"expertvoice-flash-sale","sort_order":"best-selling"},{"value":"460207030510","label":"HP Carousel - New Arrivals [hidden]","handle":"hp-carousel-new-arrivals","sort_order":"best-selling"},{"value":"462115635438","label":"ExpertVoice Drop (Hidden)","handle":"expertvoice-drop","sort_order":"best-selling"},{"value":"467934904558","label":"Hide from EMEA [hidden]","handle":"hide-from-emea","sort_order":"best-selling"},{"value":"457455108334","label":"EasyGift All Products [hidden]","handle":"easygift-all-products","sort_order":"best-selling"},{"value":"459518836974","label":"Full Price Products [hidden]","handle":"full-price-products","sort_order":"best-selling"},{"value":"459942625518","label":"Full Price Retail [hidden]","handle":"full-price-retail","sort_order":"best-selling"},{"value":"459942723822","label":"Full Price Prescription [hidden]","handle":"full-price-prescription","sort_order":"best-selling"},{"value":"459956879598","label":"Full Price Products Except Gift Card [hidden]","handle":"full-price-products-except-gift-card","sort_order":"best-selling"},{"value":"460270665966","label":"Full Price Products Except Prescription [hidden]","handle":"full-price-products-except-prescription","sort_order":"best-selling"},{"value":"460642877678","label":"LensAdvisor Products","handle":"lensadvisor-products","sort_order":"best-selling"},{"value":"463090647278","label":"Snow Goggles (In Season) [Hidden]","handle":"snow-goggles-in-season","sort_order":"best-selling"},{"value":"467199820014","label":"ExpertVoice Goggles (With Exclusions)","handle":"goggles-copy","sort_order":"best-selling"},{"value":"467199590638","label":"Expert Voice Sale","handle":"smith-optics-sale-copy","sort_order":"best-selling"},{"value":"462554366190","label":"ExpertVoice All Products With Exclusions [hidden]","handle":"expertvoice-all-products-hidden-copy","sort_order":"best-selling"},{"value":"460604342510","label":"ExpertVoice All Products [hidden]","handle":"expertvoice-all-products","sort_order":"best-selling"},{"value":"472178000110","label":"ExpertVoice Helmets With Exclusions","handle":"expertvoice-helmets-with-exclusions","sort_order":"best-selling"},{"value":"472178032878","label":"ExpertVoice Sunglasses With Exclusions","handle":"expertvoice-helmets-with-exclusions-copy","sort_order":"best-selling"},{"value":"472178065646","label":"ExpertVoice Apparel With Exclusions","handle":"expertvoice-sunglasses-with-exclusions-copy","sort_order":"best-selling"},{"value":"472927568110","label":"Test-Smart-collection","handle":"test-smart-collection","sort_order":"best-selling"},{"value":"460697796846","label":"Brown Lens Fishing and Water Sunglasses","handle":"brown-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460697862382","label":"Green Lens Fishing and Water Sunglasses","handle":"green-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460697895150","label":"Blue Mirror Lens Fishing and Water Sunglasses","handle":"blue-mirror-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460697927918","label":"Yellow Lens Fishing and Water Sunglasses","handle":"yellow-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460697960686","label":"PolarChromic Brown Green Lens Fishing and Water Sunglasses","handle":"polarchromic-brown-green-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460697993454","label":"Gray Green Lens Fishing and Water Sunglasses","handle":"gray-green-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460698026222","label":"Opal Mirror Lens Fishing and Water Sunglasses","handle":"opal-mirror-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460698058990","label":"PolarChromic Blue Lens Fishing and Water Sunglasses","handle":"polarchromic-blue-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460698124526","label":"Black Lens Fishing and Water Sunglasses","handle":"black-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"460698157294","label":"Bronze Lens Fishing and Water Sunglasses","handle":"bronze-lens-fishing-and-water-sunglasses","sort_order":"best-selling"},{"value":"474893025518","label":"ExpertVoice Flash Deal Rx Options (Hidden)","handle":"expert-voice-flash-deal-rx-options-hidden","sort_order":"best-selling"},{"value":"474932936942","label":"Full Price Products + Lens Advisor for CS [hidden]","handle":"full-price-products-lens-advisor-hidden-for-warranty","sort_order":"best-selling"},{"value":"475956347118","label":"ExpertVoice Deal Days (Hidden)","handle":"expertvoice-deal-days-hidden","sort_order":"best-selling"}]},{"type":"pages","label":"Stories","status":"active","number":3},{"type":"products","label":"Products","status":"active","number":9}],"searchBoxOnclick":{"recentSearch":{"label":"Where you've been exploring","status":true,"number":"3"},"searchTermSuggestion":{"label":"See what the crew is searching for","status":true,"data":[],"backup":[],"type":"manually"},"productSuggestion":{"label":"Popular with the adventure crowd","status":true,"data":[],"backup":[],"type":"manually"}},"suggestionStyle":"style2","suggestionStyle1ProductItemType":"list","suggestionStyle1ProductPosition":"none","suggestionStyle1ProductPerRow":"1","suggestionStyle2ProductItemType":"list","suggestionStyle2ProductPosition":"right","suggestionStyle2ProductPerRow":"2","suggestionStyle3ProductItemType":"list","suggestionStyle3ProductPosition":"right","suggestionStyle3ProductPerRow":"3"},"filterSettings":{"showFilterOptionCount":true,"showRefineBy":true,"showOutOfStockOption":false,"showSingleOption":true,"keepToggleState":false,"changeMobileButtonLabel":false,"sortingAvailableFirst":false,"showLoading":true,"activeScrollToTop":true,"showVariantImageBasedOnSelectedFilter":"pf_opt_frame_color","productAndVariantAvailable":true,"availableAfterFiltering":false,"isShortenUrlParam":true,"filterTreeMobileStyle":"style3","filterTreeVerticalStyle":"style-default","filterTreeHorizontalStyle":"style1","stickyFilterOnDesktop":false,"stickyFilterOnMobile":false,"style":{"filterTitleTextColor":"#181818","filterTitleFontSize":"inherit","filterTitleFontWeight":"inherit","filterTitleFontTransform":"capitalize","filterTitleFontFamily":"inherit","filterOptionTextColor":"#181818","filterOptionFontSize":"inherit","filterOptionFontFamily":"inherit"},"filterLayout":"vertical","shortenUrlParamList":["pf_pt_product_type:product_type","pf_m_::rvw::helmet_type:helmet_type","pf_m_::rvw::apparel_type:apparel_type","pf_m_::algolia::best_for:best_for","pf_m_::rvw::series:series","pf_m_::rvw::technology:technology","pf_m_::rvw::frame_fit:frame_fit","pf_p_price_range:price_range","pf_ps_on_sale:on_sale","pf_opt_lens_color:lens_color","pf_p_price:price","pf_opt_type:type1","pf_opt_frame_color:frame_color","pf_opt_color:color","pf_opt_strap_color:strap_color","pf_r_review_ratings:review_ratings","pf_opt_size:size","pf_m_::rvw::best_for:best_for1","pf_c_collection:collection","pf_t_special_deals:special_deals"]},"additionalElementSettings":{"customSortingList":"relevance|best-selling|price-ascending|price-descending|created-descending","enableCollectionSearch":false},"themeSettings":{"productItems":{"general":{"borderLayout":"noBorder","subLayout":"subLayout_1_2","backgroundColor":"#FFFFFF","backgroundColorOnHover":"#FFFFFF","borderColor":"#E8E8E1","borderColorOnHover":"#E8E8E1"},"productImg":{"elements":{"productSaleLabel":{"shape":"capsule","displayType":"text","displayOptions":"always","color":"#FFFFFF","backgroundColor":"#334FB4","fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontFamily":"inherit","fontStyle":"inherit","textTransform":"none","fontWeight":"inherit","isEnable":true},"productSoldOutLabel":{"hideOtherLabelsWhenSoldOut":true,"shape":"capsule","displayType":"text","displayOptions":"always","color":"#FFFFFF","backgroundColor":"#242833","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","textTransform":"none","fontWeight":"inherit","isEnable":true},"productCustomLabelByTag":{"shape":"capsule","color":"#FFFFFF","backgroundColor":"#00A47C","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","textTransform":"none","fontWeight":"inherit","isEnable":false}},"grid":{"top":{"direction":"horizontal","elements":{"left":["saleLabel","soldOutLabel","customLabelByTag"]}}},"aspectRatioType":"natural","hoverEffect":"zoom-in"},"styleSettings":{"selectOptionBtn":{"showOnHovering":false,"showOn":"desktopOnly","displayType":"text","shape":"rectangle","imgSrc":"https://boost-cdn-prod.bc-solutions.net/icon/add-to-cart.svg","iconPosition":"left","backgroundColor":"#ffffff","backgroundColorOnHover":"#ffffff","borderColor":"#181818","borderColorOnHover":"#181818","textColor":"#181818","textColorOnHover":"#181818","buttonPosition":"top","fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontFamily":"inherit","fontStyle":"inherit","textTransform":"none","alignment":"left","position":7,"buttonStyling":"outline","fontWeight":"inherit","width":"100%"},"qvBtn":{"showOn":"desktopOnly","showOnHovering":false,"displayType":"text","shape":"rectangle","imgSrc":"https://boost-cdn-prod.bc-solutions.net/icon/quick-view.svg","iconPosition":"left","backgroundColor":"#ffffff","backgroundColorOnHover":"#ffffff","borderColor":"#181818","borderColorOnHover":"#181818","textColor":"#181818","textColorOnHover":"#181818","fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontFamily":"inherit","fontStyle":"inherit","textTransform":"none","alignment":"left","position":8,"buttonStyling":"outline","fontWeight":"inherit","width":"100%"}},"productInfo":{"textAlign":"left","elements":{"title":{"color":"#181818","fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontFamily":"inherit","fontStyle":"inherit","textTransform":"capitalize","isEnable":true,"fontWeight":"inherit"},"vendor":{"color":"#181818","fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontFamily":"inherit","fontStyle":"inherit","textTransform":"capitalize","isEnable":false,"fontWeight":"inherit"},"price":{"showCentAsSuperscript":false,"showCurrencyCodes":false,"compareAtPricePosition":"right","showSavingDisplay":false,"priceColor":"#181818","priceFontSizeScale":100,"priceFontFamily":"inherit","priceFontStyle":"inherit","priceFontSize":"inherit","priceFontSizeTabletPortrait":"inherit","priceFontSizeTabletLandscape":"inherit","priceFontSizeMobile":"inherit","salePriceColor":"#181818","salePriceFontSizeScale":100,"salePriceFontFamily":"inherit","salePriceFontStyle":"inherit","salePriceFontSize":"inherit","salePriceFontSizeTabletPortrait":"inherit","salePriceFontSizeTabletLandscape":"inherit","salePriceFontSizeMobile":"inherit","compareAtPriceColor":"#898989","compareAtPriceFontSizeScale":100,"compareAtPriceFontFamily":"inherit","compareAtPriceFontStyle":"inherit","compareAtPriceFontSize":"inherit","compareAtPriceFontSizeTabletPortrait":"inherit","compareAtPriceFontSizeTabletLandscape":"inherit","compareAtPriceFontSizeMobile":"inherit","savingDisplayColor":"#DD3300","savingDisplayFontSizeScale":100,"savingDisplayFontFamily":"inherit","savingDisplayFontStyle":"inherit","savingDisplayFontSize":"inherit","savingDisplayFontSizeTabletPortrait":"inherit","savingDisplayFontSizeTabletLandscape":"inherit","savingDisplayFontSizeMobile":"inherit","isEnable":true,"priceFontWeight":"inherit","salePriceFontWeight":"inherit","compareAtPriceFontWeight":"inherit","savingDisplayFontWeight":"inherit"},"rating":false,"swatches.1":{"showOptionValueOnHovering":true,"shape":"circle","changeProductImageOn":"click","isEnable":true,"swatchType":"color","swatchBy":"product-image"},"swatches.2":{"showOptionValueOnHovering":true,"shape":"circle","changeProductImageOn":"click","isEnable":true,"swatchType":"frame_color","swatchBy":"product-image"},"selectOptionBtn":{"buttonType":"selectOptionBtn","action":"popup","isEnable":false},"swatches.3":{"showOptionValueOnHovering":true,"shape":"circle","changeProductImageOn":"click","isEnable":false},"qvBtn":{"buttonType":"qvBtn","isEnable":false},"wishlist":{"isEnable":false}}}},"additionalElements":{"pagination":{"paginationType":"load_more","alignment":"center","productCount":{"showProductCount":true,"position":"top","color":"#181818"},"button":{"shape":"rectangle","color":"#181818","borderColor":"#181818","textTransform":"none","fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontFamily":"inherit","fontStyle":"inherit","fontWeight":"inherit"}},"toolbar":{"layout":"2_1","filterText":{"color":"#181818","fontFamily":"inherit","fontStyle":"inherit","fontSizeScale":100,"textTransform":"capitalize","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"refineByText":{"color":"#181818","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","textTransform":"capitalize","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"elements":{"viewAs":{"fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","color":"#181818","fontFamily":"inherit","fontStyle":"inherit","textTransform":"capitalize","listType":"2,3,4columns","isEnable":false,"showListViewDefault":false,"fontWeight":"inherit"},"showLimitList":{"fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","color":"#181818","fontFamily":"inherit","fontStyle":"inherit","textTransform":"capitalize","isEnable":false,"fontWeight":"inherit"},"sorting":{"fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","color":"#181818","fontFamily":"inherit","fontStyle":"inherit","textTransform":"capitalize","isEnable":true,"fontWeight":"inherit"},"productCount":{"fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","color":"#181818","fontFamily":"inherit","fontStyle":"inherit","textTransform":"capitalize","isEnable":true,"fontWeight":"inherit"}}},"collectionHeader":{"isEnable":false,"layout":2,"contentPosition":"middle-left","elements":{"breadCrumb":{"showCollectionTitle":false,"showCollectionList":false,"showPagination":false,"placement":"on-top","alignment":"middle-left","fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontFamily":"inherit","fontStyle":"inherit","textTransform":"capitalize","color":"#181818","isEnable":false,"fontWeight":"inherit"},"collectionImage":{"size":"medium","parallaxEffect":false,"directionParallax":"vertical","isEnable":false},"collectionTitle":{"textAlign":"center","textTransform":"none","fontSizeScale":100,"fontSize":40,"fontSizeTabletPortrait":40,"fontSizeTabletLandscape":40,"fontSizeMobile":30,"fontFamily":"inherit","fontStyle":"inherit","collectionTitleColor":"#181818","isEnable":true,"fontWeight":"inherit"},"productCount":{"fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","textTransform":"capitalize","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","color":"#181818","isEnable":false,"fontWeight":"inherit"},"collectionDescription":{"fontSize":null,"fontSizeTabletPortrait":null,"fontSizeTabletLandscape":null,"fontSizeMobile":null,"isEnable":false}}}},"quickView":{"showProductImage":true,"thumbnailPosition":"bottomCenter","isEnableProductVendor":false,"showCurrencyCodes":false,"buttonOverall":{"shape":"rectangle","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"buyItNowBtn":{"enable":false,"color":"#ffffff","hoverColor":"#ffffff","backgroundColor":"#181818","hoverBackgroundColor":"#181818","borderColor":"#181818","hoverBorderColor":"#181818","textTransform":"none"},"addToCartBtn":{"color":"#181818","hoverColor":"#181818","backgroundColor":"#ffffff","hoverBackgroundColor":"#ffffff","borderColor":"#181818","hoverBorderColor":"#181818","textTransform":"none"}},"cart":{"enableCart":false,"cartStyle":"side","showCurrencyCodes":true,"enableWidgetRecommendation":false,"widgetRecommendationId":"","showCountdownTimer":false,"sideLayout":"one-column","autoOpenAjaxCartOnAddToCart":true,"generalLayout":{"shape":"rectangle","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"checkoutBtn":{"textTransform":"none","color":"#ffffff","hoverColor":"#ffffff","backgroundColor":"#181818","hoverBackgroundColor":"#181818","borderColor":"#181818","hoverBorderColor":"#181818"},"viewCartBtn":{"textTransform":"none","color":"#181818","hoverColor":"#181818","backgroundColor":"#ffffff","hoverBackgroundColor":"#ffffff","borderColor":"#181818","hoverBorderColor":"#181818"}},"productList":{"productsPerPage":24,"productsPerRowOnDesktop":3,"productsPerRowOnMobile":2},"searchPage":{"headerBackground":"#F6F6F8","elements":{"searchHeaderText":{"color":"#181818","textTransform":"none","fontSizeScale":100,"fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontFamily":"inherit","fontStyle":"inherit","fontWeight":"inherit"},"placeholderSearch":{"color":"#898989","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"scopedSuggestionLabel":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"scopedSuggestionItem":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","backgroundColor":"#E8E9EB","fontWeight":"inherit"},"titleTab":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"productCount":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"collectionAndPageTabTitle":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"collectionAndPageTabDescription":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"tipForYou":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"line":{"color":"#E8E8E1"}}},"filterTree":{"elements":{"refineBy":{"color":"#181818"},"filterTitle":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"filterOption":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"productCount":{"color":"#898989","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"line":{"color":"#E8E8E1"},"checkbox":{"color":"#E8E8E1"},"searchBox":{"color":"#E8E8E1"}}},"isw":{"backgroundSuggestion":"#FAFAFA","backgroundProducts":"#ffffff","hoverBackgroundSuggestion":"#E8E9EB","hoverBackgroundProducts":"#F8F8F8","elements":{"titleMultiElement":{"color":"#898989","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"results":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"didYouMean":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"didYouMeanResults":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","backgroundColor":"#F6F6F7","fontWeight":"inherit"},"productTitle":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"productVendor":{"color":"#898989","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"productPrice":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"productSalePrice":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"productCompareAtPrice":{"color":"#898989","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"productSKU":{"color":"#898989","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","fontWeight":"inherit"},"viewAllBtn":{"color":"#181818","textTransform":"capitalize","fontSizeScale":100,"fontFamily":"inherit","fontStyle":"inherit","fontSize":"inherit","fontSizeTabletPortrait":"inherit","fontSizeTabletLandscape":"inherit","fontSizeMobile":"inherit","backgroundColor":"#ffffff","hoverBackgroundColor":"#E8E9EB","fontWeight":"inherit"}}}},"currentAppIntegration":{"extraFeatures":{"reviewsio":{"connected":true,"firstConnectedAt":1780947609,"lastUpdatedAt":1784746707,"reRanking":true}},"reviews":"ReviewsIO"},"themeName":"dawn","srcThemeNameLib":"dawn"}
    
     || {};const template={};
    
    
      
      
        
    ;template["quickView"]=`<!-- TEMPLATE QUICK VIEW -->{% if product.original_images != nil %}{% assign imageArray = product.original_images %}{% else %}{% assign imageArray = product.images_info %}{% endif %}{% if imageArray.size == 0 %}{% assign imageArray = "no_image" | split: ' ' %}{% endif %}{% assign show_prev_next_btns = imageArray.size > 4 %}{% capture productData %}{"id": "{{ product.id }}","handle": "{{ product.handle }}","variantId": "{{ product.variant_id }}","splitProduct": "{{ product.split_product }}","variants": {{ product.variants | json | escape }},"tags": {{ product.tags | json | escape }},"images": {{ imageArray | json | escape }},"category": "{{ product.product_type | escape }}","tags" : {{ product.tags | json | escape }},"priceMin": "{{ product.price_min }}","options_with_values": {{ product.options_with_values | json | escape }}}{% endcapture %}{% if product.variants.size == 1 and product.variants[0].title == 'Default Title' %}{% assign isDefaultOption = true %}{% else %}{% assign isDefaultOption = false %}{% endif %}<div aria-modal="true" role="dialog" aria-label="Quick view detail for product {{ product.title | escape }}" class="boost-sd__modal" id="boost-sd__modal-quickview" data-product-id='{{ productData.id }}' data-product='{{ productData | json_encode }}'><div class="boost-sd__modal-backdrop"></div><div class="boost-sd__modal-container">  <div tabindex="-1" class="boost-sd__modal-wrapper">   <div class="boost-sd__quick-view" product-id="{{ product.id }}">    <div class="boost-sd__quick-view-product-image">     <div class="boost-sd__slider boost-sd__slider--flex-column">      <div class="boost-sd__thumbs-container boost-sd__thumbs-container--horizontal">       {% if show_prev_next_btns %}       <div class="boost-sd__thumbs-container-prev-button boost-sd__thumbs-container-prev-button--horizontal"><button type="button" aria-label="Previous" class="boost-sd__button boost-sd__button--circle boost-sd__button--full-width" style="padding: 0px;" disabled=""><span class="boost-sd__icon" style="margin: 0px;">          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 7" height="7" width="10" class="boost-sd__thumbs-container-button-icon">           <path stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" d="M0.764024 5.51189L5.00002 1.28789L9.23602 5.51189"></path>          </svg>         </span></button></div>       {% endif %}       <div class="boost-sd__thumbs-container-thumbs boost-sd__thumbs-container-thumbs--horizontal">        {% if request.previewMode == true %}        {% for image in imageArray limit: 4 %}        <div class="boost-sd__thumbs-container-thumbs-item">         <div class="boost-sd__slide">          <div class="boost-sd__product-image-wrapper boost-sd__product-image-wrapper--aspect-ratio-3-4">           <div class="boost-sd__product-image">            <img id="product-image-{{ product.id }}" class="boost-sd__product-image-img boost-sd__product-image-img--main" {% if image.src %} src="{{ image.src }}" {% else %} src="https://cdn.shopify.com/extensions/201f4d7b-8d39-43a4-82de-e6f412341695/0.0.0/assets/boost-pfs-no-image.jpg?v=1677838268" {% endif %} fetchpriority="auto" sizes="200px" decoding="async" loading="eager" alt="{{ product.title | escape }}" width="auto" height="auto" />           </div>          </div>         </div>        </div>        {% endfor %}        {% else %}        {% for image in imageArray %}        <div class="boost-sd__thumbs-container-thumbs-item">         <div class="boost-sd__slide">          <div class="boost-sd__product-image-wrapper boost-sd__product-image-wrapper--aspect-ratio-3-4">           <div tabindex="0" class="boost-sd__product-image">            <img id="product-image-{{ product.id }}" class="boost-sd__product-image-img boost-sd__product-image-img--main" {% if image.src %} src="{{ image.src }}" {% else %} src="https://cdn.shopify.com/extensions/201f4d7b-8d39-43a4-82de-e6f412341695/0.0.0/assets/boost-pfs-no-image.jpg?v=1677838268" {% endif %} fetchpriority="auto" sizes="200px" decoding="async" loading="eager" alt="Load image {{ forloop.index }} in slider for product {{ product.title | escape }}" width="auto" height="auto" />           </div>          </div>         </div>        </div>        {% endfor %}        {% endif %}       </div>       {% if show_prev_next_btns %}       <div class="boost-sd__thumbs-container-next-button boost-sd__thumbs-container-next-button--horizontal"><button type="button" aria-label="Next" class="boost-sd__button boost-sd__button--circle boost-sd__button--full-width" style="padding: 0px;"><span class="boost-sd__icon" style="margin: 0px;">          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 7" height="7" width="10" class="boost-sd__thumbs-container-button-icon">           <path stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" d="M0.764024 5.51189L5.00002 1.28789L9.23602 5.51189"></path>          </svg>         </span></button></div>       {% endif %}      </div>      <div class="slick-slider">       {% if request.previewMode == true %}       {% for image in imageArray limit: 1 %}       <div class="boost-sd__slide">        <div class="boost-sd__product-image-wrapper boost-sd__product-image-wrapper--aspect-ratio-3-4">         <div class="boost-sd__product-image-row boost-sd__product-image-row--top">          <div class="boost-sd__product-image-column boost-sd__product-image-column--in-top boost-sd__product-image-column--left">           {% assign hideOtherLabelsWhenSoldOut = true -%}           {% assign moneyFormat = request.money_format | strip_html -%}           {% assign removePriceDecimal = false -%}           {% assign showCentAsSuperscript = false -%}           {% assign decimalDelimiter = '' -%}           {% assign withoutTrailingZeros = true -%}           <div class="product-badges">            <div class="card__badge regios-dopp-generic-badge-container">             <span class="product-badge product-badge-regios regios-dopp-generic-badge badge"></span>            </div>            {% if hideOtherLabelsWhenSoldOut != true -%}            {% assign compareAtPriceMin = product.compare_at_price_min | default: 0 -%}            {% if compareAtPriceMin > product.price_min and compareAtPriceMin > 0 -%}            {% assign percent = compareAtPriceMin    | minus: product.price_min    | times: 100    | divided_by: compareAtPriceMin    | round   -%}            {% assign salePercent = percent | append: '%' -%}            {% assign saleAmount = compareAtPriceMin    | minus: product.price_min    | format_currency: moneyFormat,     showCentAsSuperscript,     removePriceDecimal,     decimalDelimiter,     withoutTrailingZeros   -%}            {% assign productItemSaleTranslated = 'productItem.productItemSale'    | translate: translations, 'Sale'    | replace: '{{salePercent}}', salePercent    | replace: '{{saleAmount}}', saleAmount   -%}            <div class="product-badge product-badge-sale boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--sale">             <span class="boost-sd__product-label-text">              <span>{{ productItemSaleTranslated }}</span>             </span>            </div>            {% endif -%}            {% if product.available == false -%}            <div class="product-badge product-badge-sold-out boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--soldout">             <span class="boost-sd__product-label-text">              {{- 'productItem.productItemSoldOut' | translate: translations, 'Sold out' -}}             </span>            </div>            {% endif -%}            {% else -%}            {% if product.available == false -%}            <div class="product-badge product-badge-sold-out boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--soldout">             <span class="boost-sd__product-label-text">              {{- 'productItem.productItemSoldOut' | translate: translations, 'Sold out' -}}             </span>            </div>            {% else -%}            {% assign compareAtPriceMin = product.compare_at_price_min | default: 0 -%}            {% if compareAtPriceMin > product.price_min and compareAtPriceMin > 0 -%}            {% assign percent = compareAtPriceMin     | minus: product.price_min     | times: 100     | divided_by: compareAtPriceMin     | round    -%}            {% assign salePercent = percent | append: '%' -%}            {% assign saleAmount = compareAtPriceMin     | minus: product.price_min     | format_currency: moneyFormat,      showCentAsSuperscript,      removePriceDecimal,      decimalDelimiter,      withoutTrailingZeros    -%}            {% assign translatedText = 'productItem.productItemSale'     | translate: translations, 'Sale'     | replace: '{{salePercent}}', salePercent     | replace: '{{saleAmount}}', saleAmount    %}            <div class="product-badge product-badge-sale boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--sale">             <span class="boost-sd__product-label-text">              <span>{{ translatedText }}</span>             </span>            </div>            {% endif -%}            {% endif -%}            {% endif -%}           </div>          </div>         </div>         <div class="boost-sd__product-image">          <img id="product-image-{{ product.id }}" class="boost-sd__product-image-img boost-sd__product-image-img--main" {% if image.src %} src="{{ image.src }}" {% else %} src="https://cdn.shopify.com/extensions/201f4d7b-8d39-43a4-82de-e6f412341695/0.0.0/assets/boost-pfs-no-image.jpg?v=1677838268" {% endif %} fetchpriority="auto" sizes="200px" decoding="async" loading="eager" alt="{{ product.title | escape }}" width="auto" height="auto" />         </div>        </div>       </div>       {% endfor %}       {% else %}       {% for image in imageArray %}       <div class="boost-sd__slide">        <div class="boost-sd__product-image-wrapper boost-sd__product-image-wrapper--aspect-ratio-3-4">         <div class="boost-sd__product-image-row boost-sd__product-image-row--top">          <div class="boost-sd__product-image-column boost-sd__product-image-column--in-top boost-sd__product-image-column--left">           {% assign hideOtherLabelsWhenSoldOut = true -%}           {% assign moneyFormat = request.money_format | strip_html -%}           {% assign removePriceDecimal = false -%}           {% assign showCentAsSuperscript = false -%}           {% assign decimalDelimiter = '' -%}           {% assign withoutTrailingZeros = true -%}           <div class="product-badges">            <div class="card__badge regios-dopp-generic-badge-container">             <span class="product-badge product-badge-regios regios-dopp-generic-badge badge"></span>            </div>            {% if hideOtherLabelsWhenSoldOut != true -%}            {% assign compareAtPriceMin = product.compare_at_price_min | default: 0 -%}            {% if compareAtPriceMin > product.price_min and compareAtPriceMin > 0 -%}            {% assign percent = compareAtPriceMin    | minus: product.price_min    | times: 100    | divided_by: compareAtPriceMin    | round   -%}            {% assign salePercent = percent | append: '%' -%}            {% assign saleAmount = compareAtPriceMin    | minus: product.price_min    | format_currency: moneyFormat,     showCentAsSuperscript,     removePriceDecimal,     decimalDelimiter,     withoutTrailingZeros   -%}            {% assign productItemSaleTranslated = 'productItem.productItemSale'    | translate: translations, 'Sale'    | replace: '{{salePercent}}', salePercent    | replace: '{{saleAmount}}', saleAmount   -%}            <div class="product-badge product-badge-sale boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--sale">             <span class="boost-sd__product-label-text">              <span>{{ productItemSaleTranslated }}</span>             </span>            </div>            {% endif -%}            {% if product.available == false -%}            <div class="product-badge product-badge-sold-out boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--soldout">             <span class="boost-sd__product-label-text">              {{- 'productItem.productItemSoldOut' | translate: translations, 'Sold out' -}}             </span>            </div>            {% endif -%}            {% else -%}            {% if product.available == false -%}            <div class="product-badge product-badge-sold-out boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--soldout">             <span class="boost-sd__product-label-text">              {{- 'productItem.productItemSoldOut' | translate: translations, 'Sold out' -}}             </span>            </div>            {% else -%}            {% assign compareAtPriceMin = product.compare_at_price_min | default: 0 -%}            {% if compareAtPriceMin > product.price_min and compareAtPriceMin > 0 -%}            {% assign percent = compareAtPriceMin     | minus: product.price_min     | times: 100     | divided_by: compareAtPriceMin     | round    -%}            {% assign salePercent = percent | append: '%' -%}            {% assign saleAmount = compareAtPriceMin     | minus: product.price_min     | format_currency: moneyFormat,      showCentAsSuperscript,      removePriceDecimal,      decimalDelimiter,      withoutTrailingZeros    -%}            {% assign translatedText = 'productItem.productItemSale'     | translate: translations, 'Sale'     | replace: '{{salePercent}}', salePercent     | replace: '{{saleAmount}}', saleAmount    %}            <div class="product-badge product-badge-sale boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--sale">             <span class="boost-sd__product-label-text">              <span>{{ translatedText }}</span>             </span>            </div>            {% endif -%}            {% endif -%}            {% endif -%}           </div>          </div>         </div>         <div class="boost-sd__product-image">          <img id="product-image-{{ product.id }}" class="boost-sd__product-image-img boost-sd__product-image-img--main" {% if image.src %} src="{{ image.src }}" {% else %} src="https://cdn.shopify.com/extensions/201f4d7b-8d39-43a4-82de-e6f412341695/0.0.0/assets/boost-pfs-no-image.jpg?v=1677838268" {% endif %} fetchpriority="auto" sizes="200px" decoding="async" loading="eager" alt="{{ product.title | escape }}" width="auto" height="auto" />         </div>        </div>       </div>       {% endfor %}       {% endif %}      </div>     </div>    </div>    <div tabindex="0" class="boost-sd__quick-view-product-info">     <h2 class="boost-sd__quick-view-title">{{ product.title | escape }}</h2>     {% capture showCurrencyCodes %}false{% endcapture %}     {% assign moneyFormat = request.money_format | strip_html -%}     {% if showCurrencyCodes == 'true' %}     {% assign moneyFormat = request.money_format_with_currency | strip_html -%}     {% endif %}     <div class="boost-sd__quick-view-price">      <span class="boost-sd__format-currency"><span class="">{{ product.price_min | format_currency: moneyFormat }}</span></span>     </div>     {% if isDefaultOption == false %}     {% for swatch in product.options_with_values %}     <div class="boost-sd__product-swatch">      <div class="boost-sd__product-swatch-title">{{ swatch.label | escape }}</div>      <div class="boost-sd__product-swatch-options">       {% for value in swatch.values %}       {% assign swatchBy = 'text' %}       {% assign backgroundSwatch = "background-color: " | append: value.title | strip_html | escape %}       {% assign domain = request.shop %}       {% assign imageName = value.title | strip_html | downcase | strip | escape %}       {% if imageName contains " " %}       {% assign imageName = imageName | replace: ' ', "-" %}       {% endif %}       {% if swatch.original_name == 'color' %}       {% assign url = "//" | append: domain | append: "/cdn/shop/files/" | append: imageName | append: ".png" %}       {% assign backgroundSwatch = backgroundSwatch | append: "; background-image: url('" | append: url | append: "');" %}       {% assign swatchBy = 'color-and-image' %}       {% endif %}       {% for variant in product.variants %}       {% assign options = variant.merged_options %}       {% if variant.original_merged_options != nil %}       {% assign options = variant.original_merged_options %}       {% endif %}       {% for option in options %}       {% assign currentOption = option | strip_html | downcase | strip | replace: 'color:', '' | escape %}       {% if currentOption contains " " %}       {% assign currentOption = currentOption | replace: ' ', "-" %}       {% endif %}       {% if currentOption == imageName and variant.image %}       {% assign backgroundSwatch = "background-image: url('" | append: variant.image | append: "');" %}       {% assign swatchBy = 'product-image' %}       {% endif %}       {% endfor %}       {% endfor %}       <div class="boost-sd__product-swatch-option" data-swatch-by='{{ swatchBy }}'>        <div class="boost-sd__radio">         <div class="boost-sd__tooltip">          {% if swatch.original_name == 'color' %}          <div class="boost-sd__tooltip-content">{{ value.title | strip_html | escape }}</div>          {% endif %}          <input id="product-swatch-qv-{{ product.id }}-{{ value.title | strip_html | escape }}" class="boost-sd__radio-input boost-sd__radio-input--hidden" type="radio" value="{{ value.title | strip_html | escape }}" checked="" />          {% if swatch.original_name == 'color' %}          <label role="radio" tabindex="0" aria-label="{{ swatch.original_name }}:{{ value.title }}" for="product-swatch-qv-{{ product.id }}-{{ value.title | strip_html | escape }}" data-swatch-value="{{ value.title | strip_html | escape }}" class="boost-sd__radio-label boost-sd__radio-label--hide-text boost-sd__radio-label--large" style="{{ backgroundSwatch }}">           {{ value.title | strip_html | escape }}          </label>          {% else %}          <label role="radio" tabindex="0" aria-label="{{ swatch.original_name }}:{{ value.title }}" for="product-swatch-qv-{{ product.id }}-{{ value.title | strip_html | escape }}" data-swatch-value="{{ value.title | strip_html | escape }}" class="boost-sd__radio-label boost-sd__radio-label--in-quick-view">           {{ value.title | strip_html | escape }}          </label>          {% endif %}         </div>        </div>       </div>       {% endfor %}      </div>     </div>     {% endfor %}     {% endif %}     <div class="boost-sd__quick-view-quantity">      <p class="boost-sd__quick-view-quantity-title">{{ "quickView.qvQuantity" | translate: translations, 'Quantity' }}</p>      <div class="boost-sd__input-number boost-sd__input-number--md">       <div class="boost-sd__input-number-btn-wrapper">        <button type="button" aria-label="Giảm số lượng" class="boost-sd__button boost-sd__button--full-width boost-sd__input-number-btn"><span>-</span></button>       </div>       <input type="number" aria-label="Số lượng sản phẩm" class="boost-sd__input-number-input" value="1" />       <div class="boost-sd__input-number-btn-wrapper">        <button type="button" aria-label="Tăng số lượng" class="boost-sd__button boost-sd__button--full-width boost-sd__input-number-btn"><span>+</span></button>       </div>      </div>      <div class="boost-sd__quick-view-quantity-error" style="color: red; font-size: 90%; display: none">{{ "quickView.qvQuantityError" | translate: translations, 'Please input quantity' }}</div>     </div>     <!-- TODO check preorder -->     <div class="boost-sd__quick-view-preorder">      <!-- TEMPLATE PRE_ORDER WITH PAYMENT -->      <!-- TODO check preorder -->      {% if product.variants %}      {% assign variants = product.variants %}      {% else %}      {% assign variants = variants %}      {% endif %}      {% for variant in variants %}      {% if variant.preorder %}      {% assign paymentType = variant.preorder.payment.type %}      {% assign discountType = variant.preorder.payment.discountType %}      {% assign discountValue = variant.preorder.payment.discountValue %}      {% assign originalPrice = variant.price %}      {% assign paymentLabel = '' %}      {% if paymentType == 'full' %}      {% assign paymentLabel = 'Full payment' %}      {% endif %}      {% if paymentType == 'partial' %}      {% assign paymentLabel = 'Partial payment' %}      {% endif %}      {% if paymentType == 'none' %}      {% assign paymentLabel = 'No payment' %}      {% endif %}      {% capture showCurrencyCodes %}false{% endcapture %}      {% assign moneyFormat = request.money_format | strip_html -%}      {% if showCurrencyCodes == 'true' %}      {% assign moneyFormat = request.money_format_with_currency | strip_html -%}      {% endif %}      {% assign moneyRate = request.currency_rate | strip_html -%}      {% if discountType == 'percentage' %}      {% assign percentNum = originalPrice | times: discountValue | divided_by: 100 %}      {% assign discountedPrice = originalPrice | times: 1.0 | minus: percentNum %}      {% elsif discountType == 'amount' %}      {% assign discountValue = discountValue | times: moneyRate %}      {% assign discountedPrice = originalPrice | times: 1.0 | minus: discountValue %}      {% else %}      {% assign discountedPrice = originalPrice %}      {% endif %}      {% assign removePriceDecimal = false -%}      {% assign showCentAsSuperscript = false -%}      {% assign decimalDelimiter = '' -%}      {% assign withoutTrailingZeros = true -%}      {% assign originalPriceFormat = originalPrice | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros -%}      {% assign discountedPriceFormat = discountedPrice | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros -%}      {% assign discountValueFormat = discountValue | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros %}      <div tabindex="0" role="region" aria-labelledby="preorder-title" aria-describedby="preorder-description" class="boost-sd__preorder" data-variant-id="{{ variant.id }}">       <div class="boost-sd__preorder-option">        <h2 id="preorder-title" class="boost-sd__preorder-title">{{ paymentLabel }}</h2>        <div aria-live="polite" id="preorder-description" class="boost-sd__preorder-discount">         {% if discountType == 'percentage' %}         <span class="boost-sd__preorder-save">Save {{ discountValue }}%</span>         {% elsif discountType == 'amount' %}         <span class="boost-sd__preorder-save">Save {{ discountValueFormat }}</span>         {% endif %}         <div class="boost-sd__preorder-price">          {% if discountType != 'none' %}          <span aria-label="Original Price: {{ originalPriceFormat }}" class="boost-sd__preorder-original-price">{{ originalPriceFormat }}</span>          {% endif %}          <span aria-label="Discounted Price: {{ discountedPriceFormat }}" class="boost-sd__preorder-discounted-price">{{ discountedPriceFormat }}</span>         </div>        </div>       </div>      </div>      {% endif %}      {% endfor %}      {% assign buttonLabel = 'Pre-Order' %}      {% assign preOrderButtonText = variants[0].preorder.settings.buttonText %}      {% assign preOrderDeliveryText = variants[0].preorder.settings.deliveryText %}      {% if preOrderButtonText and preOrderButtonText != '' %}      {% assign buttonLabel = preOrderButtonText %}      {% endif %}      <button type="button" aria-label='{{ buttonLabel }}' class="boost-sd__button boost-sd__button--border boost-sd__button--rectangle boost-sd__button--large boost-sd__button--preorder">       <span aria-hidden="true" class="boost-sd__button-text">        {{ buttonLabel }}       </span>      </button>      <p tabindex="0" class="boost-sd__preorder-note">       <strong class="boost-sd__preorder-note-title">Please note: </strong><span class="boost-sd__preorder-note-text">{{ preOrderDeliveryText }}</span>      </p>     </div>     <div class="boost-sd__quick-view-btn">      <button type="button" class="boost-sd__button boost-sd__button--border boost-sd__button--rectangle boost-sd__button--large boost-sd__btn-add-to-cart">       <span class="boost-sd__button-text">        {{ "productItem.atcAvailableLabel" | translate: translations, 'Add to cart' }}       </span>      </button>     </div>     <a class="boost-sd__quick-view-details-link" href="/products/{{ product.handle }}">{{ "quickView.qvViewFullDetails" | translate: translations, 'View full details' }}</a>    </div>   </div>   <button type="button" aria-label='{{ "close" | translate: translations, "Close" }}' class="boost-sd__button boost-sd__button--transparent boost-sd__button--float boost-sd__modal-close-btn">    <svg class="boost-sd__modal-close-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">     <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3536 5.35355C19.5488 5.15829 19.5488 4.84171 19.3536 4.64645C19.1583 4.45118 18.8417 4.45118 18.6464 4.64645L12 11.2929L5.35355 4.64645C5.15829 4.45118 4.84171 4.45118 4.64645 4.64645C4.45118 4.84171 4.45118 5.15829 4.64645 5.35355L11.2929 12L4.64645 18.6464C4.45118 18.8417 4.45118 19.1583 4.64645 19.3536C4.84171 19.5488 5.15829 19.5488 5.35355 19.3536L12 12.7071L18.6464 19.3536C18.8417 19.5488 19.1583 19.5488 19.3536 19.3536C19.5488 19.1583 19.5488 18.8417 19.3536 18.6464L12.7071 12L19.3536 5.35355Z" fill="#222222"></path>    </svg>   </button>  </div></div></div>`;
        
      
      
      
        
    ;template["cart"]=`<!-- TEMPLATE CART --><!-- This Template contains a few variables built from the client js side -->{% assign currentLocale = '' %}{% if locale != "" or locale != null %}{% assign currentLocale = locale %}{% endif %}`;
        
      
      
      
        
    ;template["refineBy"]=`<!-- TEMPLATE REFINE BY --><div class='boost-sd__refine-by-vertical-refine-by'><div class='boost-sd__refine-by-vertical-refine-by-title'>  <div class='boost-sd__refine-by-vertical-refine-by-heading'>   {{ 'refine' | translate: translations, 'Refine By' }}  </div>  <button type='button' aria-label='{{ "clearAll" | translate: translations, "Clear All" }}' id='boost-sd__button--clear-all-filters' class='boost-sd__button boost-sd__button--clear' data-metadata='{ "action": { "clearAllFilter": "" } }'>   <span class='boost-sd__button-text' data-metadata='{ "action": { "clearAllFilter": "" } }' aria-hidden='true'>    {{- 'clearAll' | translate: translations, 'Clear All' -}}   </span>  </button></div><div class='boost-sd__refine-by-vertical-refine-by-list'>  {% for refineByOption in refineBy.options %}  <button aria-label='Clear {{ refineByOption.data.label | escape }}: {% if refineByOption.type == "range" %}{% if refineByOption.data.key == "pf_p_price" or refineByOption.data.key == "pf_vp_variants_price" %}{{ refineByOption.data.value.lower | currency_format: refineByOption.data.moneyFormatValue }} to {{ refineByOption.data.value.upper | currency_format: refineByOption.data.moneyFormatValue }}{% else %}{{ refineByOption.data.value.lower | escape }} to {{ refineByOption.data.value.upper | escape }}{% endif %}{% else %}{{ refineByOption.data.valueDisplay | escape }}{% endif %}' metadata='{"action": { "clearFilter": {{ refineByOption.metaData | json | escape }} } }' class='boost-sd__refine-by-vertical-refine-by-item' id='{{ refineByOption.data.value | downcase | replace: " ", "-" | append: "-clear-filter" | simpleMd5 }}'>   <div metadata='{"action": { "clearFilter": {{ refineByOption.metaData | json | escape }} } }' class='boost-sd__refine-by-vertical-refine-by-type'>    <span metadata='{"action": { "clearFilter": {{ refineByOption.metaData | json | escape }} } }' class='boost-sd__refine-by-vertical-refine-by-option'>     {{ refineByOption.data.label | escape }}:    </span>    <span metadata='{"action": { "clearFilter": {{ refineByOption.metaData | json | escape }} } }' class='boost-sd__refine-by-vertical-refine-by-value'>     {% if refineByOption.type == 'range' %}     {% if refineByOption.data.key == 'pf_p_price' or refineByOption.data.key == 'pf_vp_variants_price' %}     {{ refineByOption.data.value.lower | currency_format: refineByOption.data.moneyFormatValue }}     -     {{ refineByOption.data.value.upper | currency_format: refineByOption.data.moneyFormatValue }}     {% else %}     {{ refineByOption.data.value.lower | escape }} - {{ refineByOption.data.value.upper | escape }}     {% endif %}     {% else %}     {% if refineByOption.data.valueDisplay contains ':' %}     {{ refineByOption.data.valueDisplay | split: ':' | last | escape }}     {% else %}     {{ refineByOption.data.valueDisplay | escape }}     {% endif %}     {% endif %}    </span>   </div>   <svg metadata='{"action": { "clearFilter": {{ refineByOption.metaData | json | escape }} } }' class='boost-sd__refine-by-vertical-refine-by-clear' xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12' role='img' aria-hidden='true' fill='#222'>    <path metadata='{"action": { "clearFilter": {{ refineByOption.metaData | json | escape }} } }' fill-rule="evenodd" clip-rule="evenodd" d="M7.41401 6.00001L11.707 1.70701C12.098 1.31601 12.098 0.684006 11.707 0.293006C11.316 -0.0979941 10.684 -0.0979941 10.293 0.293006L6.00001 4.58601L1.70701 0.293006C1.31601 -0.0979941 0.684006 -0.0979941 0.293006 0.293006C-0.0979941 0.684006 -0.0979941 1.31601 0.293006 1.70701L4.58601 6.00001L0.293006 10.293C-0.0979941 10.684 -0.0979941 11.316 0.293006 11.707C0.488006 11.902 0.744006 12 1.00001 12C1.25601 12 1.51201 11.902 1.70701 11.707L6.00001 7.41401L10.293 11.707C10.488 11.902 10.744 12 11 12C11.256 12 11.512 11.902 11.707 11.707C12.098 11.316 12.098 10.684 11.707 10.293L7.41401 6.00001Z" fill="#3D4246">    </path>   </svg>  </button>  {% endfor %} </div></div>`;
        
      
      
      
        
    ;template["filterOptionBoxItem"]=`<!-- This Template contains a few variables built from the client js side -->{% if request.previewMode == true %}<li class="boost-sd__filter-option-item boost-sd__filter-option-box-item"><button role='checkbox' aria-label='{{ value.key | escape_once | strip_html }}. Number of products: {{ value.doc_count }}' aria-checked='false' class='boost-sd__filter-option-item-button boost-sd__filter-option-item-button--as-button'>  <span class='boost-sd__filter-option-item-label'>   {% if option.displayAllValuesInUppercaseForm %}   {{ value.key | escape | upcase }}   {% else %}   {{ value.key | escape }}   {% endif %}  </span></button></li>{% else %}<li class='{{ className }}'><button role='checkbox' aria-label='Find product with {{ label | escape }} is {{ value.label | escape_once | strip_html }}. Number of products: {{ value.doc_count }}' aria-checked='{% if className contains "boost-sd__filter-option-box-item--selected" %}true{% else %}false{% endif %}' id='{{ actionId }}' class='boost-sd__filter-option-item-button boost-sd__filter-option-item-button--as-button' data-action='{{ dataAction }}'>  <span data-action='{{ dataAction }}' class='boost-sd__filter-option-item-label'>   {% if displayAllValuesInUppercaseForm %}   {{ value.label | escape | upcase }}   {% else %}   {{ value.label | escape }}   {% endif %}  </span></button></li>{% endif %}`;
        
      
      
      
        
    ;template["filterOptionListItem"]=`<!-- This Template contains a few variables built from the client js side -->{% if value.label != "[]" %}{% if request.previewMode == true %}<li class="boost-sd__filter-option-item boost-sd__filter-option-list-option-item"><button role="checkbox" aria-checked="false" aria-label="{{ value.key | escape_once }}. Number of products: {{ value.doc_count }}" class="boost-sd__filter-option-item-button boost-sd__filter-option-item-button--as-button boost-sd__filter-option-item-button--with-checkbox">  {% if option.filterType == "variants_price" or option.filterType == "price" %}  {% if value.from == 0 %}  {{ "under" | translate: translations, "Under" }}  {{ value.to | format_currency: option.moneyFormatValue }}  {% elsif value.to == nil %}  {{ "above" | translate: translations, "Above" }}  {{ value.from | format_currency: option.moneyFormatValue }}  {% elsif value.from != 0 and value.to != nil %}  {{ value.from | format_currency: option.moneyFormatValue }} - {{ value.to | format_currency: option.moneyFormatValue }}  {% endif %}  {% elsif option.filterType == "percent_sale" %}  {% if value.from == nil %}  {{ "under" | translate: translations, "Under" }}  {{ value.to }}  {% elsif value.to == nil %}  {{ "above" | translate: translations, "Above" }}  {{ value.from }}  {% elsif value.from != 0 and value.to != nil %}  {{ value.from }}% - {{ value.to }}%  {% endif %}  {% else %}  <span class="boost-sd__filter-option-item-label">   {% if option.displayAllValuesInUppercaseForm %}   {% if option.filterType == "stock" or option.filterType == "collection" %}   {{ value.label | upcase | escape }}   {% else %}   {{ value.key | upcase | escape }}   {% endif %}   {% else %}   {% if option.filterType == "stock" or option.filterType == "collection" %}   {{ value.label | escape }}   {% else %}   {{ value.key | escape }}   {% endif %}   {% endif %}  </span>  {% endif %}  {% if filterSettings.showFilterOptionCount %}  <span aria-hidden="true" class="boost-sd__filter-option-item-amount">({{ value.doc_count }})</span>  {% endif %} </button></li>{% else %}<li class='boost-sd__filter-option-item boost-sd__filter-option-list-option-item'><button role='checkbox' aria-checked='{% if className contains "boost-sd__filter-option-item-button--selected" %}true{% else %}false{% endif %}' aria-label='Find product with {{ label | escape }} is {{ value.label | escape_once | strip_html }}. Number of products: {{ value.doc_count }}' id='{{ actionId }}' class='{{ className }}' data-action='{{ dataAction }}'>  <span data-action='{{ dataAction }}' class='boost-sd__filter-option-item-label'>   {% if displayAllValuesInUppercaseForm %}   {{ value.label | upcase | escape }}   {% else %}   {{ value.label | escape }}   {% endif %}  </span>  {% if showDocCount %}  <span data-action='{{ dataAction }}' aria-hidden='true' class='boost-sd__filter-option-item-amount'>   ({{ value.doc_count }})</span>  {% endif %} </button></li>{% endif %}{% endif %}`;
        
      
      
      
        
    ;template["filterOptionSwatchItem"]=`<!-- This Template contains a few variables built from the client js side -->{% assign swatchListStyle = option.swatchStyle == 'circle-list' or option.swatchStyle == 'square-list' %}{% if request.previewMode == true %}{% assign swatchTyleClass = "" %}{% if swatchListStyle %}{% assign swatchTyleClass = "list" %}{% else %}{% assign swatchTyleClass = "grid" %}{% endif %}<li class='boost-sd__filter-option-item boost-sd__filter-option-swatch-item'><button title='{{ value.key | strip_html | escape }}. Number of products: {{ value.doc_count }}' role='checkbox' aria-checked='false' class='boost-sd__filter-option-item-button boost-sd__filter-option-item-button--as-button'>  <span class='boost-sd__filter-option-swatch-item-img boost-sd__filter-option-swatch-item-img--{{ swatchTyleClass }} boost-sd__filter-option-swatch-item-img--circle' style='background-color: {{ value.key | escape }};'></span>  {% if swatchListStyle %}  <span class='boost-sd__filter-option-item-label'>   {% if option.displayAllValuesInUppercaseForm %}   {{ value.key | escape | upcase }}   {% else %}   {{ value.key | escape }}   {% endif %}  </span>  <span aria-hidden='true' class='boost-sd__filter-option-item-amount'>({{ value.doc_count }})</span>  {% endif %} </button></li>{% else %}<li data-action='{{ dataAction }}' class='boost-sd__filter-option-item boost-sd__filter-option-swatch-item'><button role='checkbox' aria-checked='{% if className contains "boost-sd__filter-option-item-button--selected" %}true{% else %}false{% endif %}' title='Find product with {{ label | escape }} is {{ value.label | escape | strip_html }}. Number of products: {{ value.doc_count }}' id='{{ actionId }}' data-action='{{ dataAction }}' class='boost-sd__filter-option-item-button boost-sd__filter-option-item-button--as-button'>  {% if swatchValue.backgroundColor == nil %}  {% assign swatchBackgroundColor = "none" %}  {% else %}  {% assign swatchBackgroundColor = swatchValue.backgroundColor | strip_html %}  {% endif %}  {% if swatchValue.backgroundImage == nil %}  {% assign swatchBackgroundImage = "none" %}  {% else %}  {% assign swatchBackgroundImage = swatchValue.backgroundImage | strip_html %}  {% endif %}  <span data-action='{{ dataAction }}' class='{{ className }}' style='background-color: {{ swatchBackgroundColor }}; background-image: {{ swatchBackgroundImage }}'></span>  {% if swatchType == 'list' %}  <span data-action='{{ dataAction }}' class='boost-sd__filter-option-item-label'>   {% if option.displayAllValuesInUppercaseForm %}   {{ value.label | escape | upcase }}   {% else %}   {{ value.label | escape }}   {% endif %}  </span>  {% if showDocCount %}  <span data-action='{{ dataAction }}' aria-hidden='true' class='boost-sd__filter-option-item-amount'>({{ value.doc_count }})</span>  {% endif %}  {% endif %} </button></li>{% endif %}`;
        
      
      
      
        
    ;template["filterOptionMultiLevelCollectionItem"]=`<!-- This Template contains a few variables built from the client js side -->{% if request.previewMode == true %}<li class='boost-sd__filter-option-item boost-sd__filter-option-item-multilevel-collections {% if option.keepValuesStatic and value.doc_count == 0 %} boost-sd__filter-option-item-multilevel-collections--disabled {% endif %}'><div class='boost-sd__filter-option-item-multilevel-collections-firstlevel'>  <a title='Link to {{ value.displayName }}. Number of products: {{ value.doc_count }}' href='/bo-suu-tap/{{ value.handle }}' class='boost-sd__filter-option-item-button boost-sd__filter-option-item-button--as-link'>   <span class='boost-sd__filter-option-item-label'>    {% if option.displayAllValuesInUppercaseForm %}    {{ value.displayName | upcase }}    {% else %}    {{ value.displayName }}    {% endif %}   </span>  </a>  {% if showDocCount %}  <span role='text' aria-hidden='true' class='boost-sd__filter-option-item-amount'>({{ value.doc_count }})</span>  {% endif %}  {% if value.existedTags %}  <button type='button' aria-label='Expand/Collapse {{ value.displayName }}' class='boost-sd__button boost-sd__button--transparent'>   <svg class='boost-sd__arrow-icon boost-sd__arrow-icon--right' xmlns='http://www.w3.org/2000/svg' width='7' height='12' role='img' aria-label='Expand/Collapse {{ value.displayName }}' viewBox='0 0 7 12' fill='#222'>    <path class="boost-sd__arrow-icon-path" d="M6.58942 0.610713C6.26398 0.285274 5.73635 0.285274 5.41091 0.610713L0.611415 5.41021C0.455135 5.56649 0.366829 5.77895 0.366829 5.99996C0.366829 6.22098 0.454629 6.43294 0.610909 6.58922L5.41091 11.3892C5.73635 11.7147 6.26398 11.7147 6.58942 11.3892C6.91486 11.0638 6.91486 10.5362 6.58942 10.2107L2.37867 5.99996L6.58942 1.78922C6.91486 1.46379 6.91486 0.936153 6.58942 0.610713Z"></path>   </svg>  </button>  {% endif %} </div></li>{% else %}{% assign currentLocale = '' %}{% if locale != "" %}{% assign currentLocale = '/' | append: locale %}{% endif %}<li class='boost-sd__filter-option-item boost-sd__filter-option-item-multilevel-collections {% if option.keepValuesStatic and value.doc_count == 0 %} boost-sd__filter-option-item-multilevel-collections--disabled {% endif %}'><div class='boost-sd__filter-option-item-multilevel-collections-firstlevel'>  <a id='{{ actionId }}' metaData='{{ metaData | json | escape }}' title='Link to {{ value.displayName }}. Number of products: {{ value.doc_count }}' data-action='select-filter-item' href='{{ currentLocale }}/collections/{{ value.handle }}' class='{{ className }}'>   <span style='{{ styleOptionItem }}' data-metadata='{{ metaData | json | escape }}' class='boost-sd__filter-option-item-label'>    {% if option.displayAllValuesInUppercaseForm %}    {{ value.displayName | upcase }}    {% else %}    {{ value.displayName }}    {% endif %}   </span>   {% if showDocCount %}   <span role='text' aria-hidden='true' class='boost-sd__filter-option-item-amount'>({{ value.doc_count }})</span>   {% endif %}  </a>  {% if value.existedTags %}  <button aria-label='Expand/Collapse {{ value.displayName }}' id='{{ value.actionIdArrow }}' data-metadata='{{ value.metaDataArrow | json | escape }}' type='button' class='boost-sd__button boost-sd__button--transparent' style='padding-right: 0px;'>   <svg id='{{ value.targetIdArrow }}' data-metadata='{{ value.metaDataArrow | json | escape }}' class='boost-sd__arrow-icon boost-sd__arrow-icon--right' xmlns='http://www.w3.org/2000/svg' width='7' height='12' role='img' aria-label='Expand/Collapse {{ value.displayName }}' viewBox='0 0 7 12' fill='#222'>    <path data-metadata='{{ value.metaDataArrow | json | escape }}' class="boost-sd__arrow-icon-path" d="M6.58942 0.610713C6.26398 0.285274 5.73635 0.285274 5.41091 0.610713L0.611415 5.41021C0.455135 5.56649 0.366829 5.77895 0.366829 5.99996C0.366829 6.22098 0.454629 6.43294 0.610909 6.58922L5.41091 11.3892C5.73635 11.7147 6.26398 11.7147 6.58942 11.3892C6.91486 11.0638 6.91486 10.5362 6.58942 10.2107L2.37867 5.99996L6.58942 1.78922C6.91486 1.46379 6.91486 0.936153 6.58942 0.610713Z"></path>   </svg>  </button>  {% endif %} </div> {% if value.existedTags > 0 %} <ul id='{{ value.targetIdList }}' class='boost-sd__filter-option-item-multilevel-collections-listitem boost boost-sd__g-hide'>  {% for tag in value.tags %}  <li class='boost-sd__filter-option-item-multilevel-collections-secondlevel'>   <div class='boost-sd__filter-option-item boost-sd__filter-option-item-multilevel-collections-secondlevel-title'>    <a id='{{ tag.actionId }}' data-metadata='{{ tag.metaData | json | escape }}' title='Link to {{ tag.displayName }}' data-action='select-filter-item' href='{{ currentLocale }}/collections/{{ value.handle }}/{{ tag.tag }}' class='{{ tag.className }}'>     <span data-metadata='{{ tag.metaData | json | escape }}' class='boost-sd__filter-option-item-label'>      {% if option.displayAllValuesInUppercaseForm %}      {{ tag.displayName | upcase }}      {% else %}      {{ tag.displayName }}      {% endif %}     </span>    </a>    {% if tag.existedSubTags %}    <button aria-label='Expand/Collapse {{ tag.displayName }}' id='{{ tag.actionIdArrow }}' data-metadata='{{ tag.metaDataArrow | json | escape }}' type='button' class='boost-sd__button boost-sd__button--transparent' style='padding-right: 0px;'>     <svg id='{{ tag.targetIdArrow }}' data-metadata='{{ tag.metaDataArrow | json | escape }}' class='boost-sd__arrow-icon boost-sd__arrow-icon--right' xmlns='http://www.w3.org/2000/svg' width='7' height='12' role='img' aria-label='Expand/Collapse {{ tag.displayName }}' viewBox='0 0 7 12' fill='#222'>      <path data-metadata='{{ tag.metaDataArrow | json | escape }}' class="boost-sd__arrow-icon-path" d="M6.58942 0.610713C6.26398 0.285274 5.73635 0.285274 5.41091 0.610713L0.611415 5.41021C0.455135 5.56649 0.366829 5.77895 0.366829 5.99996C0.366829 6.22098 0.454629 6.43294 0.610909 6.58922L5.41091 11.3892C5.73635 11.7147 6.26398 11.7147 6.58942 11.3892C6.91486 11.0638 6.91486 10.5362 6.58942 10.2107L2.37867 5.99996L6.58942 1.78922C6.91486 1.46379 6.91486 0.936153 6.58942 0.610713Z"></path>     </svg>    </button>    {% endif %}   </div>   {% if tag.existedSubTags %}   <ul id='{{ tag.targetIdList }}' class='boost-sd__filter-option-item-multilevel-collections-thirdlevel boost-sd__g-hide'>    {% for subTag in tag.subTags %}    <li class='boost-sd__filter-option-item boost-sd__filter-option-item-multilevel-collections-thirdlevel-title'>     <a id='{{ subTag.actionId }}' data-metadata='{{ subTag.metaData | json | escape }}' title='Link to {{ subTag.displayName }}' data-action='select-filter-item' href='{{ currentLocale }}/collections/{{ value.handle }}/{{ subTag.tag }}' class='{{ subTag.className }}'>      <span data-metadata='{{ subTag.metaData | json | escape }}' class='boost-sd__filter-option-item-label'>       {% if option.displayAllValuesInUppercaseForm %}       {{ subTag.displayName | upcase }}       {% else %}       {{ subTag.displayName }}       {% endif %}      </span>     </a>    </li>    {% endfor %}   </ul>   {% endif %}  </li>  {% endfor %} </ul> {% endif %}</li>{% endif %}`;
        
      
      
      
        
    ;template["filterOptionMultiLevelTagItem"]=`<!-- This Template contains a few variables built from the client js side -->{% if request.previewMode == true %}<li class='boost-sd__filter-option-item boost-sd__filter-option-list-option-item'><button role='checkbox' aria-checked='false' aria-label='{{ value.displayName }}. Number of products: {{ value.doc_count }}' class='boost-sd__filter-option-item-button boost-sd__filter-option-item-button--as-button boost-sd__filter-option-item-button--with-checkbox'>  <span class='boost-sd__filter-option-item-label'>   {% if option.displayAllValuesInUppercaseForm %}   {{ value.displayName | upcase }}   {% else %}   {{ value.displayName }}   {% endif %}  </span></button> {% assign existedTags = value.subTags | size %} {% if existedTags > 0 %} <button type='button' aria-label='Expand/Collapse {{ value.displayName }}' class='boost-sd__button boost-sd__button--transparent boost-sd__filter-option-list-option-item-collapse-btn'>  <svg class='boost-sd__arrow-icon boost-sd__arrow-icon--right' xmlns='http://www.w3.org/2000/svg' width='7' height='12' role='img' aria-label='Expand/Collapse {{ value.displayName }}' viewBox='0 0 7 12' fill='#222'>   <path class="boost-sd__arrow-icon-path" d="M6.58942 0.610713C6.26398 0.285274 5.73635 0.285274 5.41091 0.610713L0.611415 5.41021C0.455135 5.56649 0.366829 5.77895 0.366829 5.99996C0.366829 6.22098 0.454629 6.43294 0.610909 6.58922L5.41091 11.3892C5.73635 11.7147 6.26398 11.7147 6.58942 11.3892C6.91486 11.0638 6.91486 10.5362 6.58942 10.2107L2.37867 5.99996L6.58942 1.78922C6.91486 1.46379 6.91486 0.936153 6.58942 0.610713Z">   </path>  </svg></button> {% endif %}</li>{% else %}<li class='boost-sd__filter-option-item boost-sd__filter-option-list-option-item'><button role='checkbox' aria-checked='{% if className contains "boost-sd__filter-option-item-button--selected" %}true{% else %}false{% endif %}' aria-label='Find product with {{ label | escape }} is {{ value.displayName | escape | strip_html }}. Number of products: {{ value.doc_count }}' data-metadata='{{ metaData | json | escape }}' id='{{ actionId }}' class='{{ className }}'>  <span style='{{ styleOptionItem }}' data-metadata='{{ metaData | json | escape }}' class='boost-sd__filter-option-item-label'>   {% if option.displayAllValuesInUppercaseForm %}   {{ value.displayName | upcase }}   {% else %}   {{ value.displayName }}   {% endif %}  </span>  {% if showProductCount %}  <span data-metadata='{{ metaData | json | escape }}' role='text' aria-hidden='true' class='boost-sd__filter-option-item-amount'>({{ value.doc_count }})</span>  {% endif %} </button> {% assign existedTags = value.subTags | size %} {% if existedTags > 0 %} <button aria-label='Expand/Collapse {{ value.displayName }}' type='button' data-metadata='{{ value.metaDataArrow | json | escape }}' id='{{ value.actionIdArrow }}' class='boost-sd__button boost-sd__button--transparent boost-sd__filter-option-list-option-item-collapse-btn'>  <svg id='{{ value.targetIdArrow }}' data-metadata='{{ value.metaDataArrow | json | escape }}' class='boost-sd__arrow-icon boost-sd__arrow-icon--right' xmlns='http://www.w3.org/2000/svg' width='7' height='12' role='img' aria-label='Expand/Collapse {{ value.displayName }}' viewBox='0 0 7 12' fill='{{ colorOptionItem }}'>   <path data-metadata='{{ value.metaDataArrow | json | escape }}' class="boost-sd__arrow-icon-path" d="M6.58942 0.610713C6.26398 0.285274 5.73635 0.285274 5.41091 0.610713L0.611415 5.41021C0.455135 5.56649 0.366829 5.77895 0.366829 5.99996C0.366829 6.22098 0.454629 6.43294 0.610909 6.58922L5.41091 11.3892C5.73635 11.7147 6.26398 11.7147 6.58942 11.3892C6.91486 11.0638 6.91486 10.5362 6.58942 10.2107L2.37867 5.99996L6.58942 1.78922C6.91486 1.46379 6.91486 0.936153 6.58942 0.610713Z"></path>  </svg></button><!-- style="display: none" --><ul id='{{ value.targetIdList }}' class='boost-sd__filter-option-list-option-item-sublist boost-sd__g-hide'>  {% for tag in value.subTags %}  <li class='boost-sd__filter-option-item boost-sd__filter-option-list-option-item'>   <button role='checkbox' aria-checked='{% if tag.className contains "boost-sd__filter-option-item-button--selected" %}true{% else %}false{% endif %}' aria-label='Find product with {{ label | escape }} is {{ tag.displayName | escape | strip_html }}. Number of products: {{ tag.doc_count }}' data-metadata='{{ tag.metaData | json | escape }}' id='{{ tag.actionId }}' class='{{ tag.className }}'>    <span style='{{ styleOptionItem }}' data-metadata='{{ tag.metaData | json | escape }}' class='boost-sd__filter-option-item-label'>     {% if option.displayAllValuesInUppercaseForm %}     {{ tag.displayName | upcase }}     {% else %}     {{ tag.displayName }}     {% endif %}    </span>    {% if showProductCount %}    <span data-metadata='{{ tag.metaData | json | escape }}' role='text' aria-hidden='true' class='boost-sd__filter-option-item-amount'>({{ tag.doc_count }})</span>    {% endif %}   </button>   {% assign existedSubTags = tag.subTags | size %}   {% if existedSubTags > 0 %}   <button aria-label='Expand/Collapse {{ tag.displayName }}' type='button' data-metadata='{{ tag.metaDataArrow | json | escape }}' id='{{ tag.actionIdArrow }}' class='boost-sd__button boost-sd__button--transparent boost-sd__filter-option-list-option-item-collapse-btn'>    <svg id='{{ tag.targetIdArrow }}' data-metadata='{{ tag.metaDataArrow | json | escape }}' class='boost-sd__arrow-icon boost-sd__arrow-icon--right' xmlns='http://www.w3.org/2000/svg' width='7' height='12' role='img' aria-label='Expand/Collapse {{ tag.displayName }}' viewBox='0 0 7 12' fill='{{ colorOptionItem }}'>     <path data-metadata='{{ tag.metaDataArrow | json | escape }}' class="boost-sd__arrow-icon-path" d="M6.58942 0.610713C6.26398 0.285274 5.73635 0.285274 5.41091 0.610713L0.611415 5.41021C0.455135 5.56649 0.366829 5.77895 0.366829 5.99996C0.366829 6.22098 0.454629 6.43294 0.610909 6.58922L5.41091 11.3892C5.73635 11.7147 6.26398 11.7147 6.58942 11.3892C6.91486 11.0638 6.91486 10.5362 6.58942 10.2107L2.37867 5.99996L6.58942 1.78922C6.91486 1.46379 6.91486 0.936153 6.58942 0.610713Z"></path>    </svg>   </button>   <!-- style="display: none" -->   <ul id='{{ tag.targetIdList }}' class='boost-sd__filter-option-list-option-item-sublist boost-sd__g-hide'>    {% for subTag in tag.subTags %}    <li class='boost-sd__filter-option-item boost-sd__filter-option-list-option-item'>     <button role='checkbox' aria-checked='{% if subTag.className contains "boost-sd__filter-option-item-button--selected" %}true{% else %}false{% endif %}' aria-label='Find product with {{ label | escape }} is {{ subTag.displayName | escape | strip_html }}. Number of products: {{ subTag.doc_count }}' id='{{ subTag.actionId }}' data-metadata='{{ subTag.metaData | json | escape }}' class='{{ subTag.className }}'>      <span style='{{ styleOptionItem }}' data-metadata='{{ subTag.metaData | json | escape }}' class='boost-sd__filter-option-item-label'>       {% if option.displayAllValuesInUppercaseForm %}       {{ subTag.displayName | upcase }}       {% else %}       {{ subTag.displayName }}       {% endif %}      </span>      {% if showProductCount %}      <span data-metadata='{{ subTag.metaData | json | escape }}' role='text' aria-hidden='true' class='boost-sd__filter-option-item-amount'>({{ subTag.doc_count }})</span>      {% endif %}     </button>    </li>    {% endfor %}   </ul>   {% endif %}  </li>  {% endfor %} </ul> {% endif %}</li>{% endif %}`;
        
      
      
      
        
    ;template["filterOptionRatingItem"]=`<!-- This Template contains a few variables built from the client js side -->{% if request.previewMode == true %}<li class='boost-sd__filter-option-item boost-sd__filter-option-rating-item'><button role='checkbox' aria-checked='false' aria-label='{{ value.key }} Stars. Number of products: {{ value.doc_count }}' class='boost-sd__filter-option-item-button boost-sd__filter-option-item-button--as-button boost-sd__filter-option-item-button--with-checkbox'>  <span role='presentation' class='boost-sd__filter-option-rating-item-presentation'>   {% for i in (0..4) %}   {% if i < value.from %}   <i class='boost-sd__filter-option-rating-item-icon-star boost-sd__filter-option-rating-item-icon-star--active' style='color: {{ starColor }} ;'></i>   {% else %}   <i class='boost-sd__filter-option-rating-item-icon-star' style='color: {{ starColor }} ;'></i>   {% endif %}   {% endfor %}   {% if showExactRating == false %}   <span>& Up</span>   {% endif %}  </span>  <span role='text' aria-hidden='true' class='boost-sd__filter-option-item-amount'>({{ value.doc_count }})</span></button></li>{% else %}<li data-value='{{ value.key }}' data-action='{{ dataAction }}' class='boost-sd__filter-option-item boost-sd__filter-option-rating-item'><button role='checkbox' aria-checked='{% if className contains "boost-sd__filter-option-item-button--selected" %}true{% else %}false{% endif %}' aria-label='{{ value.key }} Stars. Number of products: {{ value.doc_count }}' id='{{ actionId }}' data-action='{{ dataAction }}' class='{{ className }}'>  <span data-action='{{ dataAction }}' role='presentation' class='boost-sd__filter-option-rating-item-presentation'>   {% for i in (0..4) %}   {% if i < value.from %}   <i data-action='{{ dataAction }}' class='boost-sd__filter-option-rating-item-icon-star boost-sd__filter-option-rating-item-icon-star--active' style='color: {{ starColor }} ;'></i>   {% else %}   <i data-action='{{ dataAction }}' class='boost-sd__filter-option-rating-item-icon-star' style='color: {{ starColor }} ;'></i>   {% endif %}   {% endfor %}   {% if showExactRating == false %}   <span data-action='{{ dataAction }}'>& Up</span>   {% endif %}  </span>  {% if showDocCount %}  <span data-action='{{ dataAction }}' role='text' aria-hidden='true' class='boost-sd__filter-option-item-amount'>({{ value.doc_count }})</span>  {% endif %} </button></li>{% endif %}`;
        
      
      
      
        
    ;template["productPrice"]=`<!-- This Template contains a few variables built from the client js side -->{% assign removePriceDecimal = false -%}{% assign decimalDelimiter = '' -%}{% assign withoutTrailingZeros = true -%}{% assign showCentAsSuperscript = false -%}{% assign moneyFormat = request.money_format | strip_html -%}{% assign showSavingDisplay = false -%}{% assign minPrice = product.price_min | times: 1.0 -%}{% assign maxPrice = 0 -%}{% if product.price_max -%}{% assign maxPrice = product.price_max | times: 1.0 -%}{% endif -%}<!-- convert variable compareAtPriceMin to number -->{% assign compareAtPriceMin = 0 -%}{% if product.compare_at_price_min -%}{% assign compareAtPriceMin = product.compare_at_price_min | times: 1.0 -%}{% endif -%}<!-- Check if enable variant showing as an individual product -->{% if product.variant_id != '' and product.variant_id != blank -%}{% assign currentVariantId = product.variant_id | times: 1 -%}{% for variant in product.variants -%}{% if variant.id == currentVariantId -%}{% assign minPrice = variant.price | times: 1.0 -%}{% assign maxPrice = variant.price | times: 1.0 -%}{% if variant.compare_at_price and variant.compare_at_price != '0.0' -%}{% assign compareAtPriceMin = variant.compare_at_price | times: 1.0 -%}{% endif -%}{% break -%}{% endif -%}{% endfor -%}{% endif -%}{% assign isSale = false -%}{% assign salePercent = 0 -%}{% assign saleAmount = 0 -%}{% if compareAtPriceMin > minPrice -%}{% assign isSale = true -%}{% endif -%}{% assign compareAtPriceWithFormat = '' -%}{% unless compareAtPriceMin == null or compareAtPriceMin == 0 or isSale == false -%}<!-- calculate salePercent base on compareAtPriceMin and minPrice -->{% assign compare = compareAtPriceMin | minus: minPrice | times: 100 -%}{% if compareAtPriceMin > 0 %}{% assign salePercent = compare | divided_by: compareAtPriceMin | ceil | append: '%' -%}{% else %}{% assign salePercent = '0%' %}{% endif %}<!-- compareAtPriceWithFormat is compare price with PriceMin and format currency -->{% assign compareAtPriceWithFormat = compareAtPriceMin  | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros -%}{% assign saleAmount = compareAtPriceMin | minus: minPrice -%}{% endunless -%}<!-- Format price min -->{% assign priceMinWithFormat = minPrice | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros-%}<!-- Format price max -->{% assign priceMaxWithFormat = '' -%}{% if product.price_max and maxPrice > minPrice -%}{% assign priceMaxWithFormat = maxPrice  | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros -%}{% endif -%}<!-- priceMax used for multi variant price display where it can have min-max price with format and translation -->{% assign hasMultiVariantPrice = false -%}{% if translations.productItem.amount contains 'minPrice' -%}{% assign hasMultiVariantPrice = true -%}{% endif -%}{% assign isSamePrice = true -%}{% if minPrice != maxPrice or product.compare_at_price_min != product.compare_at_price_max -%}{% assign isSamePrice = false -%}{% endif -%}{% assign priceValueWithFormat = priceMinWithFormat -%}{% if isSamePrice == false and maxPrice > minPrice and hasMultiVariantPrice -%}{% assign priceValueWithFormat = 'productItem.amount'  | translate: translations, ''  | replace: '{{minPrice}}', priceMinWithFormat  | replace: '{{maxPrice}}', priceMaxWithFormat -%}{% endif -%}{% assign savingPriceWithFormat = '' -%}{% unless showSavingDisplay == false or saleAmount == 0 -%}{% assign saleAmountWithFormat = saleAmount  | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros -%}{% assign savingPriceWithFormat = 'productItem.savingAmount'  | translate: translations, 'Save {{saleAmount}}'  | replace: '{{saleAmount}}', saleAmountWithFormat  | replace: '{{salePercent}}', salePercent -%}{% endunless -%}<!-- Price compare display top or bottom --><!-- Price compare display left or right --><div class="boost-sd__product-price-wrapper price price__container regios-dopp-generic-price-container {% if isSale %}price--on-sale{% endif %}"><div class="price__regular">  <span class="boost-sd__visually-hidden"> Regular price {{ priceValueWithFormat }} </span>  <span class="boost-sd__format-currency price-item price-item--regular regios-dopp-generic-price-item--regular font-semibold">   {% if priceValueWithFormat contains '€' or priceValueWithFormat contains 'EUR' %}   {{- priceValueWithFormat | replace: '€', '' | replace: ' EUR', '€ EUR' | append: '€' -}}   {% else %}   {{- priceValueWithFormat -}}   {% endif %}  </span></div><div class="price__sale">  <span class="boost-sd__visually-hidden">   Now on sale for {{ priceValueWithFormat -}}   {%- if savingPriceWithFormat != '' %}, saving {{ savingPriceWithFormat }}{% endif %}  </span>  <span class="boost-sd__format-currency price-item price-item--sale price-item--last regios-dopp-generic-price-item--sale capitalize">   {% if priceValueWithFormat contains '€' or priceValueWithFormat contains 'EUR' %}   {{- priceValueWithFormat | replace: '€', '' | replace: ' EUR', '€ EUR' | append: '€' -}}   {% else %}   {{- priceValueWithFormat -}}   {% endif %}  </span>  {% if compareAtPriceWithFormat != '' -%}  <span class="boost-sd__visually-hidden visually-hidden--inline">   Regular price {{ compareAtPriceWithFormat }}  </span>  <span>   <s class="boost-sd__format-currency price-item price-item--regular font-normal text-black/60 capitalize">    {{ compareAtPriceWithFormat }}   </s>  </span>  {% else %}  <span class="boost-sd__visually-hidden visually-hidden--inline"> Regular price {{ priceValueWithFormat }} </span>  <span>   <s class="boost-sd__format-currency price-item price-item--regular font-normal text-black/60 capitalize">    {% if priceValueWithFormat contains '€' or priceValueWithFormat contains 'EUR' %}    {{- priceValueWithFormat | replace: '€', '' | replace: ' EUR', '€ EUR' | append: '€' -}}    {% else %}    {{- priceValueWithFormat -}}    {% endif %}   </s>  </span>  {% endif -%}  {% if savingPriceWithFormat != '' -%}  <span aria-hidden="true" class="boost-sd__product-price--saving">   <span class="boost-sd__format-currency">{{ savingPriceWithFormat }}</span>  </span>  {% endif -%} </div></div>`;
        
      
      
      
        
    ;template["recommendation"]=`<!-- TEMPLATE RECOMMENDATION -->{% assign widgetNameTranslationLabel = 'recommendation.' | append: widgetId %}{% assign widgetTitle = '' %}{% if widgetDesignSettings.titleAlignment != '' %} {% assign widgetTitle = widgetTitle | append: 'boost-sd__recommendation-title--' | append: widgetDesignSettings.titleAlignment %}{% endif %}<div id='{{ widgetId }}' class='boost-sd__recommendation ' data-product-price='true'><div class='boost-sd__recommendation-title {{ widgetTitle }}'>  <span tabindex="0" role="heading" aria-level="2" class='boost-sd__recommendation-title-text'>   {{ widgetNameTranslationLabel | translate: translations, widgetName }}  </span></div> {% if widgetDesignSettings.layoutDisplay == 'carousel' %}  <!-- TEMPLATE RECOMMENDATION TYPE CAROUSEL --><div class="boost-sd__slider"><div class="boost-sd__slider-container">  {% for product in products %}   <div class="boost-sd__slide">    {% capture domain %}{{ widgetDesignSettings.tenantId }}{% endcapture %}    <!-- TEMPLATE GRID PRODUCT ITEM -->{% if product.original_images != null %} {% assign imageArray = product.original_images %}{% else %} {% assign imageArray = product.images_info %}{% endif %}{% assign productId = product.id %}{% if product.variant_id %} {% assign productId = product.variant_id %}{% endif %}{% assign filterOptionIdImageBaseOn = 'pf_opt_color' %}{% capture filterOptionIdImageBaseOn %}pf_opt_frame_color{% endcapture %}{% unless request[filterOptionIdImageBaseOn] %} {% assign filterOptionIdImageBaseOnArr = 'pf_opt_frame_color,pf_opt_color,pf_opt_lens_color' | split: ',' %} {% for item in filterOptionIdImageBaseOnArr %}  {% if request[item] %}   {% assign filterOptionIdImageBaseOn = item %}   {% break %}  {% endif %} {% endfor %}{% endunless %}{% assign optionName = filterOptionIdImageBaseOn | replace: 'pf_opt_', '' %}{% assign filterValues = request[filterOptionIdImageBaseOn] %}{% assign selectedVariantImageByFilterOption = null %}{% assign selectedVariantIdByFilterOption = null %}{% comment %} NEW LOGIC: Only find images based on filters IF that variant matches the item being displayed (for split products){% endcomment %}{% if product.variant_id %} {% assign targetVariantId = product.variant_id %} {% for variant in product.variants %}  {% if variant.id == product.variant_id %}   {% for filterValue in filterValues %}    {% assign optionNameValue = optionName | append: ':' | append: filterValue | strip %}    {% if variant.merged_options contains optionNameValue %}     {% if variant.image %}      {% assign selectedVariantImageByFilterOption = variant.image %}      {% assign selectedVariantIdByFilterOption = variant.id %}      {% break %}     {% endif %}    {% endif %}   {% endfor %}   {% if selectedVariantImageByFilterOption != null %}    {% break %}   {% endif %}  {% endif %} {% endfor %}{% else %} {% for item in product.variants %}  {% for filterValue in filterValues %}   {% assign optionNameValue = optionName | append: ':' | append: filterValue | strip %}   {% if item.merged_options contains optionNameValue %}    {% if item.image %}     {% assign selectedVariantImageByFilterOption = item.image %}     {% assign selectedVariantIdByFilterOption = item.id %}     {% break %}    {% endif %}   {% endif %}  {% endfor %}  {% if selectedVariantImageByFilterOption != null %}{% break %}{% endif %} {% endfor %}{% endif %}{% capture productVariants %} [ {% for variant in product.variants %}  {% assign preorder = '{}' %}  {% if variant.preorder and variant.preorder != nil %}  {% assign preorder = variant.preorder %}  {% else %}  {% assign preorder = '' %}  {% endif %}  {   "title": "{{ variant.title | escape }}",   "id": "{{ variant.id }}",   "available": {{ variant.available }},   "preorder": {{ preorder | json }},   "merged_options": {{ variant.merged_options | json | escape }}  }{% unless forloop.last %},{% endunless %} {% endfor %} ]{% endcapture %}{% capture productData %} {  "handle": "{{ product.handle }}",  "variantId": "{{ product.variant_id }}",  "splitProduct": "{{ product.split_product }}",  "variants": {{ productVariants }},  "priceMin": "{{ product.price_min }}",  "priceMax": "{{ product.price_max }}",  "compareAtPriceMin": "{{ product.compare_at_price_min }}",  "compareAtPriceMax": "{{ product.compare_at_price_max }}",  "images": {{ imageArray | json | escape }},  "options_with_values": {{ product.options_with_values | json | escape }},  "selectedVariantImageByFilterOption": "{{ selectedVariantImageByFilterOption | escape }}",  "category": "{{ product.product_type | escape }}",  "tags" : {{ product.tags | json | escape }},  "metaBadgeText": {{ product | product_metafield: 'rvw.badge_text' | json | escape }},  "metaBadgeAuto": {{ product | product_metafield: 'rvw.badge_auto' | json | escape }} }{% endcapture %}{% assign variantUrl = '' %}{% assign selectedVariantId = null %}{% if selectedVariantIdByFilterOption %} {% assign variantUrl = '?variant=' | append: selectedVariantIdByFilterOption %} {% assign selectedVariantId = selectedVariantIdByFilterOption %}{% elsif product.variant_id %} {% assign variantUrl = '?variant=' | append: product.variant_id %} {% assign selectedVariantId = product.variant_id %}{% elsif product.variants.first %} {% assign variantUrl = '?variant=' | append: product.variants.first.id %} {% assign selectedVariantId = product.variants.first.id %}{% else %} {% assign variantUrl = '' %}{% endif %}{% comment %} Regios Discount JSON {% endcomment %}{%- capture product_json -%} {  "productId": {{ product.id | json }},  "regularPriceInCents": {{ 100 | times: product.price_min | json }},  "variantId": {{ selectedVariantId | json }},  "collectionIds": {{ product.collections | map: "id" | json }},  "compareAtPriceInCents": {{ 100 | times: product.compare_at_price_min | json }},  "handle": {{ product.handle | json }},  "tags": {{ product.tags | json }},  "url": "/products/{{ product.handle }}",  "vendor": {{ product.vendor | json }},  "variants": [   {%- for variant in product.variants -%}    { "id": {{ variant.id | json }}, "title": {{ variant.title | default: '' | json }}, "priceInCents": {{ 100 | times: variant.price | json }}, "compareAtPriceInCents": {{ 100 | times: variant.compare_at_price | json }} }{%- unless forloop.last -%},{%- endunless -%}   {%- endfor -%}  ] }{%- endcapture -%}{%- capture borderLayoutSetting %}noBorder{% endcapture -%}{% if borderLayoutSetting == 'noPadding' %} {% assign borderLayoutItem = 'no-padding' %}{% elsif borderLayoutSetting == 'hasPadding' %} {% assign borderLayoutItem = 'border-has-padding' %}{% elsif borderLayoutSetting == 'noPaddingImage' %} {% assign borderLayoutItem = 'border-no-padding-image' %}{% else %} {% assign borderLayoutItem = 'no-border' %}{% endif %}{% assign productLocale = '' %}{% if request.current_locale != '' or request.current_locale != null or request.current_locale != null %} {% assign productLocale = request.current_locale %}{% endif %}<div class="boost-sd__product-item boost-sd__product-item--{{ borderLayoutItem }} boost-sd__product-item-grid-view-layout" id="{{ product.id }}" data-product-id="{{ productId }}" data-product='{{ productData | json_encode }}' data-no-redirect="true"><product-card  class="card-wrapper product-card-wrapper algolia-product-card underline-links-hover"  data-variant_details="{{ product | product_metafield: 'rvw.variant_details' }}"  data-variant-id="{{ selectedVariantId }}" >  <div   class="card card--standard"   data-regios-dopp-generic-product-id="{{ product.id }}"   data-regios-tile-data='{{ product_json | strip_newlines | replace: '"', '&quot;' }}'   data-variant-id="{{ selectedVariantId }}"  >   <!-- TEMPLATE GRID PRODUCT ITEM - PRODUCT IMAGE -->{%- capture aspectRatioSetting %}natural{% endcapture -%}{% capture hoverEffect %}zoom-in{% endcapture %}{% assign productImages = product.images_info %}{% if product.split_product %} {% assign productImages = product.original_images %}{% endif %}<div class="boost-sd__product-item-grid-view-layout-image"><div class="boost-sd__product-link-image">  <div style="position: relative">            {% assign effectClasses = '' %}   {% if hoverEffect == 'reveal-second-image-and-zoom-in' %}    {% assign effectClasses = effectClasses | append: 'boost-sd__product-image-wrapper--zoom-in' %}    {% if productImages.size > 1 %}     {% assign effectClasses = effectClasses | append: ' boost-sd__product-image-wrapper--has-second-image' %}    {% endif %}   {% endif %}   {% if hoverEffect == 'reveal-second-image' and productImages.size > 1 %}    {% assign effectClasses = effectClasses | append: 'boost-sd__product-image-wrapper--has-second-image' %}   {% endif %}   {% if hoverEffect == 'zoom-in' %}    {% assign effectClasses = effectClasses | append: 'boost-sd__product-image-wrapper--zoom-in' %}   {% endif %}                {% assign aspectRatio = '' -%}   {% if aspectRatioSetting == 'natural' -%}    {% assign imageWidth = product.images_info[0].width -%}    {% assign imageHeight = product.images_info[0].height -%}    {% assign aspectRatio = aspectRatio | append: 'aspect-ratio: ' | append: imageWidth | append: '/' | append: imageHeight -%}   {% endif -%}   <div class="boost-sd__product-image-wrapper {{ effectClasses }} boost-sd__product-image-wrapper--natural"    style="{{ aspectRatio }}">    <a aria-label="{{ product.title | escape }}" class="boost-sd__product-link boost-sd__product-image" {%- if request.previewMode != true %} href="{{ productLocale }}/products/{{ product.handle }}{{ variantUrl }}"{% endif -%}>     {% assign firstImageSrc = '' -%}     {% if selectedVariantImageByFilterOption != nil -%}      {% assign firstImageSrc = selectedVariantImageByFilterOption -%}     {% else -%}      {% assign firstImageSrc = product.images_info[0].src -%}     {% endif -%}     {% assign widthParam = "&width=" -%}     {% assign widths = "200,300,400,500,700,800" | split: "," -%}     {% if request.device contains 'mobile' -%}      {% assign maxWidth = 400 -%}     {% else -%}      {% assign maxWidth = 700 -%}     {% endif -%}     {% if request.productImageWidth != blank -%}      {% assign imageWidth = request.productImageWidth | plus: 0 -%}      {% if imageWidth > maxWidth -%}       {% assign maxWidth = imageWidth -%}      {% endif -%}     {% endif -%}     {% if product.images_info[0] -%}      {% capture srcset -%}      {% for width in widths -%}       {% assign widthNo = width | plus: 0 %}       {% if widthNo < maxWidth -%}        {{ firstImageSrc }}{{ widthParam }}{{ width }} {{ width }}w,        {% else -%}         {{ firstImageSrc }}{{ widthParam }}{{ maxWidth }} {{ maxWidth }}w        {% break -%}       {% endif -%}      {% endfor -%}     {% endcapture -%}     {% assign productPerRow = 4 -%}     {% if request.productPerRow != blank -%}      {% assign productPerRow = request.productPerRow | plus: 0 -%}     {% endif -%}      <img       id="product-image-{{ product.id }}"       class="boost-sd__product-image-img boost-sd__product-image-img--main"       {% if index and index < productPerRow -%}        loading="eager"       {% else -%}        loading="lazy"       {% endif -%}       decoding="async"       alt="{{ product.title | escape }}" src="{{ firstImageSrc }}&amp;width=200" srcset="{{ srcset }}"       width="auto"       height="auto"      />      {% if productImages.size > 1 and hoverEffect == 'reveal-second-image-and-zoom-in' or hoverEffect == 'reveal-second-image' %}       {% for image in productImages %}        {% if image.src contains product.images_info[0].src %}         {% assign secondImage = productImages[image.position] %}        {% endif %}       {% endfor %}        {% if secondImage -%}        {% assign secondImageSrc = secondImage.src -%}        {% capture secondImageSrcset -%}         {% for width in widths -%}          {% assign widthNo = width | plus: 0 -%}          {% if widthNo < maxWidth -%}           {{ secondImageSrc }}{{ widthParam }}{{ width }} {{ width }}w,           {% else -%}           {{ secondImageSrc }}{{ widthParam }}{{ maxWidth }} {{ maxWidth }}w           {% break -%}          {% endif -%}         {% endfor -%}        {% endcapture -%}        <img         width="auto"         height="auto"         {% if index and index < productPerRow -%}          loading="eager"         {% else -%}          loading="lazy"         {% endif -%}         class="boost-sd__product-image-img boost-sd__product-image-img--second"         alt="{{ product.title | escape }}"         aria-hidden="true"         src="{{ secondImage.src }}&amp;width=200" srcset="{{ secondImageSrcset }}">       {% endif -%}      {% endif %}     {% else -%}      <img       id="product-image-{{ product.id }}"       class="boost-sd__product-image-img boost-sd__product-image-img--main"       alt="{{ product.title | escape }}"       src="https://cdn.shopify.com/extensions/201f4d7b-8d39-43a4-82de-e6f412341695/0.0.0/assets/boost-pfs-no-image.jpg?v=1677838268"        width="auto"       height="auto"      />     {% endif -%}    </a>                                    <div class="boost-sd__product-image-row boost-sd__product-image-row--top ">                        <div class="boost-sd__product-image-column boost-sd__product-image-column--in-top boost-sd__product-image-column--left">        {% assign hideOtherLabelsWhenSoldOut = true -%}{% assign moneyFormat = request.money_format | strip_html -%}{% assign removePriceDecimal = false -%}{% assign showCentAsSuperscript = false -%}{% assign decimalDelimiter = '' -%}{% assign withoutTrailingZeros = true -%}<div class="product-badges"><div class="card__badge regios-dopp-generic-badge-container">  <span class="product-badge product-badge-regios regios-dopp-generic-badge badge"></span></div> {% if hideOtherLabelsWhenSoldOut != true -%}    {% assign compareAtPriceMin = product.compare_at_price_min | default: 0 -%}  {% if compareAtPriceMin > product.price_min and compareAtPriceMin > 0 -%}   {% assign percent = compareAtPriceMin    | minus: product.price_min    | times: 100    | divided_by: compareAtPriceMin    | round   -%}   {% assign salePercent = percent | append: '%' -%}   {% assign saleAmount = compareAtPriceMin    | minus: product.price_min    | format_currency: moneyFormat,     showCentAsSuperscript,     removePriceDecimal,     decimalDelimiter,     withoutTrailingZeros   -%}   {% assign productItemSaleTranslated = 'productItem.productItemSale'    | translate: translations, 'Sale'    | replace: '{{salePercent}}', salePercent    | replace: '{{saleAmount}}', saleAmount   -%}   <div class="product-badge product-badge-sale boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--sale">    <span class="boost-sd__product-label-text">     <span>{{ productItemSaleTranslated }}</span>    </span>   </div>  {% endif -%}      {% if product.available == false -%}   <div class="product-badge product-badge-sold-out boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--soldout">    <span class="boost-sd__product-label-text">     {{- 'productItem.productItemSoldOut' | translate: translations, 'Sold out' -}}    </span>   </div>  {% endif -%}     {% else -%}  {% if product.available == false -%}      <div class="product-badge product-badge-sold-out boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--soldout">    <span class="boost-sd__product-label-text">     {{- 'productItem.productItemSoldOut' | translate: translations, 'Sold out' -}}    </span>   </div>     {% else -%}      {% assign compareAtPriceMin = product.compare_at_price_min | default: 0 -%}   {% if compareAtPriceMin > product.price_min and compareAtPriceMin > 0 -%}    {% assign percent = compareAtPriceMin     | minus: product.price_min     | times: 100     | divided_by: compareAtPriceMin     | round    -%}    {% assign salePercent = percent | append: '%' -%}    {% assign saleAmount = compareAtPriceMin     | minus: product.price_min     | format_currency: moneyFormat,      showCentAsSuperscript,      removePriceDecimal,      decimalDelimiter,      withoutTrailingZeros    -%}    {% assign translatedText = 'productItem.productItemSale'     | translate: translations, 'Sale'     | replace: '{{salePercent}}', salePercent     | replace: '{{saleAmount}}', saleAmount    %}    <div class="product-badge product-badge-sale boost-sd__product-label boost-sd__product-label--text boost-sd__product-label--capsule boost-sd__product-label--sale">     <span class="boost-sd__product-label-text">      <span>{{ translatedText }}</span>     </span>    </div>   {% endif -%}        {% endif -%} {% endif -%}</div>       </div>                                   </div>               </div>   <!-- POPUP -->         <!-- POPUP -->  </div></div></div>   <!-- TEMPLATE GRID PRODUCT ITEM - PRODUCT INFO --><div class="boost-sd__product-info-wrapper"><div class="boost-sd__product-info boost-sd__product-info--left">  <!-- TEMPLATE PRODUCT SWATCH -->{% assign swatches = '' %}  {% assign swatches = 'swatch item 1' %} {% capture swatchType %}color{% endcapture %}{% capture swatchBy %}product-image{% endcapture %}{% capture swatchShape %}circle{% endcapture %}{% assign swatchShapeClasses = '' %}{% if swatchShape == 'box' %} {% assign swatchShapeClasses = swatchShapeClasses | append: 'boost-sd__radio-label--non-radius' %}{% endif %}{% if swatchShape == 'circle' %} {% assign swatchShapeClasses = swatchShapeClasses | append: 'boost-sd__radio-label--circle' %}{% endif %}{% assign hideTextClasses = '' %}{% if swatchBy != '' and swatchBy != 'text' %} {% assign hideTextClasses = hideTextClasses | append: 'boost-sd__radio-label--hide-text' %}{% endif %}<!-- unique swatch IDs for variant display as product mode -->{% assign swatchIdPrefix = product.id %}{% if product.variant_id and product.split_product %} {% assign swatchIdPrefix = product.id | append: '-variant-' | append: product.variant_id %}{% endif %}{% for swatch in product.options_with_values %} {% assign maxItem = 3 %} {% assign limitItem = 3 %} {% assign optionsLength = swatch.values | size %} {% if optionsLength == 4 %}  {% assign limitItem = optionsLength %} {% endif %} {% if swatch.name %}  {% if swatch.name == swatchType %}   {% assign request_filter = 'pf_opt_' | append: swatch.name | downcase %}   {% assign request_filter_values = request[request_filter] %}   <div    class="boost-sd__product-swatch boost-sd__product-swatch--full-width"   >    <div class="boost-sd__product-swatch-options">     {% for value in swatch.values limit: limitItem %}      <div       class="boost-sd__product-swatch-option {% if request.previewMode == true %}boost-sd__product-swatch-option--preview-mode{% endif %} {% if forloop.index >= maxItem and optionsLength > maxItem %}m-hide{% endif %}"       data-swatch-by="{{ swatchBy }}"      >       <div class="boost-sd__radio">        <div class="boost-sd__tooltip">                  <div          role="tooltip"          aria-hidden="true"          class="boost-sd__tooltip-content {% if request.previewMode == true %}boost-sd__tooltip-content--preview-mode{% endif %}"         >          {{ value.title | strip_html | escape }}         </div>                  <input          type="radio"          aria-checked="false"          id="product-swatch-{{ swatchIdPrefix }}-{{ value.title | strip_html | escape }}"          class="boost-sd__radio-input boost-sd__radio-input--hidden"          value="{{ value.title | strip_html | escape }}"          data-swatch-type="{{ swatch.name | escape }}"          name="{{ swatch.name | append: '-' | append: product.id | append: '-' | append: product.variant_id | downcase | replace: ' ', '-' }}"          {% if request_filter_values contains value.title %}           checked          {% endif %}         >         {% assign backgroundSwatch = '' %}         {% if swatchBy == 'color' %}          {% assign backgroundSwatch = backgroundSwatch           | append: 'background-color: '           | append: value.title           | strip_html           | escape          %}         {% endif %}         {% if swatchBy == 'image' %}          {% assign imageName = value.title | strip_html | downcase | strip | escape %}          {% if imageName contains ' ' %}           {% assign imageName = imageName | replace: ' ', '-' %}          {% endif %}          {% if swatch.name == 'size' %}           {% assign imageName = 'size-' | append: imageName %}          {% endif %}          {% assign url = '//'           | append: domain           | append: '/cdn/shop/files/'           | append: imageName           | append: '.png'          %}          {% assign backgroundColor = 'background-color: '           | append: value.title           | strip_html           | escape           | append: '; '          %}          {% assign backgroundSwatch = backgroundSwatch           | append: backgroundColor           | append: "background-image: url('"           | append: url           | append: "');"          %}         {% endif %}         {% if swatchBy == 'color-and-image' %}          {% assign imageName = value.title | strip_html | downcase | strip | escape %}          {% if imageName contains ' ' %}           {% assign imageName = imageName | replace: ' ', '-' %}          {% endif %}          {% if swatch.name == 'size' %}           {% assign imageName = 'size-' | append: imageName %}          {% endif %}          {% assign url = '//'           | append: domain           | append: '/cdn/shop/files/'           | append: imageName           | append: '.png'          %}          {% assign backgroundColor = 'background-color: '           | append: value.title           | strip_html           | escape           | append: '; '          %}          {% assign backgroundSwatch = backgroundSwatch           | append: backgroundColor           | append: "background-image: url('"           | append: url           | append: "');"          %}         {% endif %}         {% if swatchBy == 'product-image' %}          {% assign valueImage = value.image %}          {% assign urlImage = '' %}          {% assign imagesCopy = product.images_info %}          {% if product.split_product %}           {% assign imagesCopy = product.original_images %}          {% endif %}          {% for image in imagesCopy %}           {% assign imagePosition = image.position %}           {% if valueImage and imagePosition == valueImage %}            {% assign urlImage = urlImage | append: image.src %}           {% endif %}          {% endfor %}          {% if urlImage != '' %}           {% assign backgroundSwatch = backgroundSwatch            | append: "background-image: url('"            | append: urlImage            | append: "');"           %}          {% else %}           {% assign backgroundSwatch = backgroundSwatch | append: backgroundColor %}          {% endif %}         {% endif %}         <label          tabindex="0"          aria-label="{{ swatchType }}: {{ value.title | strip_html | escape }}"          for="product-swatch-{{ swatchIdPrefix }}-{{ value.title | strip_html | escape }}"          class="boost-sd__radio-label {{ swatchShapeClasses }} {{ hideTextClasses }}"          style="{{ backgroundSwatch }}"         >          {{ value.title | strip_html | escape }}         </label>        </div>       </div>      </div>     {% endfor %}     {% if optionsLength > maxItem %}      {% assign count = optionsLength | minus: limitItem %}      {% assign count_mobile = count | plus: 1 %}      {% if limitItem > maxItem %}       {% assign count_mobile = count_mobile | plus: 1 %}      {% endif %}      <button       type="button"       aria-label="Show more options"       class="boost-sd__product-swatch-more {% if swatchShape == 'box' %} boost-sd__product-swatch-more--non-radius {% endif %}{% if count == 0 %} d-hide{% endif %}"      >       {% if swatches == 'swatch item 1' %}        {% assign textswatchButtonText1Translated = 'productItem.swatchButtonText1'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count        -%}        {% assign textswatchButtonText1Translated_mobile = 'productItem.swatchButtonText1'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count_mobile        -%}        <span class="text-desktop">{{ textswatchButtonText1Translated }}</span>        <span class="text-mobile">{{ textswatchButtonText1Translated_mobile }}</span>       {% elsif swatches == 'swatch item 2' %}        {% assign textswatchButtonText2Translated = 'productItem.swatchButtonText2'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count        -%}        {% assign textswatchButtonText2Translated_mobile = 'productItem.swatchButtonText2'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count_mobile        -%}        <span class="text-desktop">{{ textswatchButtonText2Translated }}</span>        <span class="text-mobile">{{ textswatchButtonText2Translated_mobile }}</span>       {% else %}        {% assign textswatchButtonText3Translated = 'productItem.swatchButtonText3'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count        -%}        {% assign textswatchButtonText3Translated_mobile = 'productItem.swatchButtonText3'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count_mobile        -%}        <span class="text-desktop">{{ textswatchButtonText3Translated }}</span>        <span class="text-mobile">{{ textswatchButtonText3Translated_mobile }}</span>       {% endif %}      </button>     {% endif %}    </div>   </div>  {% endif %} {% endif %}{% endfor %}  {% assign swatches = 'swatch item 2' %} {% capture swatchType %}frame_color{% endcapture %}{% capture swatchBy %}product-image{% endcapture %}{% capture swatchShape %}circle{% endcapture %}{% assign swatchShapeClasses = '' %}{% if swatchShape == 'box' %} {% assign swatchShapeClasses = swatchShapeClasses | append: 'boost-sd__radio-label--non-radius' %}{% endif %}{% if swatchShape == 'circle' %} {% assign swatchShapeClasses = swatchShapeClasses | append: 'boost-sd__radio-label--circle' %}{% endif %}{% assign hideTextClasses = '' %}{% if swatchBy != '' and swatchBy != 'text' %} {% assign hideTextClasses = hideTextClasses | append: 'boost-sd__radio-label--hide-text' %}{% endif %}<!-- unique swatch IDs for variant display as product mode -->{% assign swatchIdPrefix = product.id %}{% if product.variant_id and product.split_product %} {% assign swatchIdPrefix = product.id | append: '-variant-' | append: product.variant_id %}{% endif %}{% for swatch in product.options_with_values %} {% assign maxItem = 3 %} {% assign limitItem = 3 %} {% assign optionsLength = swatch.values | size %} {% if optionsLength == 4 %}  {% assign limitItem = optionsLength %} {% endif %} {% if swatch.name %}  {% if swatch.name == swatchType %}   {% assign request_filter = 'pf_opt_' | append: swatch.name | downcase %}   {% assign request_filter_values = request[request_filter] %}   <div    class="boost-sd__product-swatch boost-sd__product-swatch--full-width"   >    <div class="boost-sd__product-swatch-options">     {% for value in swatch.values limit: limitItem %}      <div       class="boost-sd__product-swatch-option {% if request.previewMode == true %}boost-sd__product-swatch-option--preview-mode{% endif %} {% if forloop.index >= maxItem and optionsLength > maxItem %}m-hide{% endif %}"       data-swatch-by="{{ swatchBy }}"      >       <div class="boost-sd__radio">        <div class="boost-sd__tooltip">                  <div          role="tooltip"          aria-hidden="true"          class="boost-sd__tooltip-content {% if request.previewMode == true %}boost-sd__tooltip-content--preview-mode{% endif %}"         >          {{ value.title | strip_html | escape }}         </div>                  <input          type="radio"          aria-checked="false"          id="product-swatch-{{ swatchIdPrefix }}-{{ value.title | strip_html | escape }}"          class="boost-sd__radio-input boost-sd__radio-input--hidden"          value="{{ value.title | strip_html | escape }}"          data-swatch-type="{{ swatch.name | escape }}"          name="{{ swatch.name | append: '-' | append: product.id | append: '-' | append: product.variant_id | downcase | replace: ' ', '-' }}"          {% if request_filter_values contains value.title %}           checked          {% endif %}         >         {% assign backgroundSwatch = '' %}         {% if swatchBy == 'color' %}          {% assign backgroundSwatch = backgroundSwatch           | append: 'background-color: '           | append: value.title           | strip_html           | escape          %}         {% endif %}         {% if swatchBy == 'image' %}          {% assign imageName = value.title | strip_html | downcase | strip | escape %}          {% if imageName contains ' ' %}           {% assign imageName = imageName | replace: ' ', '-' %}          {% endif %}          {% if swatch.name == 'size' %}           {% assign imageName = 'size-' | append: imageName %}          {% endif %}          {% assign url = '//'           | append: domain           | append: '/cdn/shop/files/'           | append: imageName           | append: '.png'          %}          {% assign backgroundColor = 'background-color: '           | append: value.title           | strip_html           | escape           | append: '; '          %}          {% assign backgroundSwatch = backgroundSwatch           | append: backgroundColor           | append: "background-image: url('"           | append: url           | append: "');"          %}         {% endif %}         {% if swatchBy == 'color-and-image' %}          {% assign imageName = value.title | strip_html | downcase | strip | escape %}          {% if imageName contains ' ' %}           {% assign imageName = imageName | replace: ' ', '-' %}          {% endif %}          {% if swatch.name == 'size' %}           {% assign imageName = 'size-' | append: imageName %}          {% endif %}          {% assign url = '//'           | append: domain           | append: '/cdn/shop/files/'           | append: imageName           | append: '.png'          %}          {% assign backgroundColor = 'background-color: '           | append: value.title           | strip_html           | escape           | append: '; '          %}          {% assign backgroundSwatch = backgroundSwatch           | append: backgroundColor           | append: "background-image: url('"           | append: url           | append: "');"          %}         {% endif %}         {% if swatchBy == 'product-image' %}          {% assign valueImage = value.image %}          {% assign urlImage = '' %}          {% assign imagesCopy = product.images_info %}          {% if product.split_product %}           {% assign imagesCopy = product.original_images %}          {% endif %}          {% for image in imagesCopy %}           {% assign imagePosition = image.position %}           {% if valueImage and imagePosition == valueImage %}            {% assign urlImage = urlImage | append: image.src %}           {% endif %}          {% endfor %}          {% if urlImage != '' %}           {% assign backgroundSwatch = backgroundSwatch            | append: "background-image: url('"            | append: urlImage            | append: "');"           %}          {% else %}           {% assign backgroundSwatch = backgroundSwatch | append: backgroundColor %}          {% endif %}         {% endif %}         <label          tabindex="0"          aria-label="{{ swatchType }}: {{ value.title | strip_html | escape }}"          for="product-swatch-{{ swatchIdPrefix }}-{{ value.title | strip_html | escape }}"          class="boost-sd__radio-label {{ swatchShapeClasses }} {{ hideTextClasses }}"          style="{{ backgroundSwatch }}"         >          {{ value.title | strip_html | escape }}         </label>        </div>       </div>      </div>     {% endfor %}     {% if optionsLength > maxItem %}      {% assign count = optionsLength | minus: limitItem %}      {% assign count_mobile = count | plus: 1 %}      {% if limitItem > maxItem %}       {% assign count_mobile = count_mobile | plus: 1 %}      {% endif %}      <button       type="button"       aria-label="Show more options"       class="boost-sd__product-swatch-more {% if swatchShape == 'box' %} boost-sd__product-swatch-more--non-radius {% endif %}{% if count == 0 %} d-hide{% endif %}"      >       {% if swatches == 'swatch item 1' %}        {% assign textswatchButtonText1Translated = 'productItem.swatchButtonText1'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count        -%}        {% assign textswatchButtonText1Translated_mobile = 'productItem.swatchButtonText1'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count_mobile        -%}        <span class="text-desktop">{{ textswatchButtonText1Translated }}</span>        <span class="text-mobile">{{ textswatchButtonText1Translated_mobile }}</span>       {% elsif swatches == 'swatch item 2' %}        {% assign textswatchButtonText2Translated = 'productItem.swatchButtonText2'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count        -%}        {% assign textswatchButtonText2Translated_mobile = 'productItem.swatchButtonText2'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count_mobile        -%}        <span class="text-desktop">{{ textswatchButtonText2Translated }}</span>        <span class="text-mobile">{{ textswatchButtonText2Translated_mobile }}</span>       {% else %}        {% assign textswatchButtonText3Translated = 'productItem.swatchButtonText3'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count        -%}        {% assign textswatchButtonText3Translated_mobile = 'productItem.swatchButtonText3'         | translate: translations, '+{{count}}'         | replace: '{{count}}', count_mobile        -%}        <span class="text-desktop">{{ textswatchButtonText3Translated }}</span>        <span class="text-mobile">{{ textswatchButtonText3Translated_mobile }}</span>       {% endif %}      </button>     {% endif %}    </div>   </div>  {% endif %} {% endif %}{% endfor %}  <div class="boost-sd__product-info-content">   <a    aria-label="{{ product.title | escape }}"    class="boost-sd__product-link"    {% if request.previewMode != true %}     href="{{ productLocale }}/products/{{ product.handle }}{{ variantUrl }}"    {% endif %}   >    <div class="boost-sd__product-title" id="product-title-{{ product.id }}">     {{ product.title | escape }}    </div>   </a>         {% assign short_description = product | product_metafield: 'rvw.short_description' %}   {% if widgetId == null and short_description != blank %}    <div     class="boost-sd__product-short-description"     data-short-description="{{ short_description | escape }}"    ></div>   {% endif %}      <div class="boost-sd__product-price" id="product-price-{{ product.id }}">    <!-- This Template contains a few variables built from the client js side -->{% assign removePriceDecimal = false -%}{% assign decimalDelimiter = '' -%}{% assign withoutTrailingZeros = true -%}{% assign showCentAsSuperscript = false -%}{% assign moneyFormat = request.money_format | strip_html -%}{% assign showSavingDisplay = false -%}{% assign minPrice = product.price_min | times: 1.0 -%}{% assign maxPrice = 0 -%}{% if product.price_max -%} {% assign maxPrice = product.price_max | times: 1.0 -%}{% endif -%}<!-- convert variable compareAtPriceMin to number -->{% assign compareAtPriceMin = 0 -%}{% if product.compare_at_price_min -%} {% assign compareAtPriceMin = product.compare_at_price_min | times: 1.0 -%}{% endif -%}<!-- Check if enable variant showing as an individual product -->{% if product.variant_id != '' and product.variant_id != blank -%} {% assign currentVariantId = product.variant_id | times: 1 -%} {% for variant in product.variants -%}  {% if variant.id == currentVariantId -%}   {% assign minPrice = variant.price | times: 1.0 -%}   {% assign maxPrice = variant.price | times: 1.0 -%}   {% if variant.compare_at_price and variant.compare_at_price != '0.0' -%}    {% assign compareAtPriceMin = variant.compare_at_price | times: 1.0 -%}   {% endif -%}   {% break -%}  {% endif -%} {% endfor -%}{% endif -%}{% assign isSale = false -%}{% assign salePercent = 0 -%}{% assign saleAmount = 0 -%}{% if compareAtPriceMin > minPrice -%} {% assign isSale = true -%}{% endif -%}{% assign compareAtPriceWithFormat = '' -%}{% unless compareAtPriceMin == null or compareAtPriceMin == 0 or isSale == false -%} <!-- calculate salePercent base on compareAtPriceMin and minPrice --> {% assign compare = compareAtPriceMin | minus: minPrice | times: 100 -%} {% if compareAtPriceMin > 0 %}  {% assign salePercent = compare | divided_by: compareAtPriceMin | ceil | append: '%' -%} {% else %}  {% assign salePercent = '0%' %} {% endif %} <!-- compareAtPriceWithFormat is compare price with PriceMin and format currency --> {% assign compareAtPriceWithFormat = compareAtPriceMin  | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros -%} {% assign saleAmount = compareAtPriceMin | minus: minPrice -%}{% endunless -%}<!-- Format price min -->{% assign priceMinWithFormat = minPrice | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros-%}<!-- Format price max -->{% assign priceMaxWithFormat = '' -%}{% if product.price_max and maxPrice > minPrice -%} {% assign priceMaxWithFormat = maxPrice  | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros -%}{% endif -%}<!-- priceMax used for multi variant price display where it can have min-max price with format and translation -->{% assign hasMultiVariantPrice = false -%}{% if translations.productItem.amount contains 'minPrice' -%} {% assign hasMultiVariantPrice = true -%}{% endif -%}{% assign isSamePrice = true -%}{% if minPrice != maxPrice or product.compare_at_price_min != product.compare_at_price_max -%} {% assign isSamePrice = false -%}{% endif -%}{% assign priceValueWithFormat = priceMinWithFormat -%}{% if isSamePrice == false and maxPrice > minPrice and hasMultiVariantPrice -%} {% assign priceValueWithFormat = 'productItem.amount'  | translate: translations, ''  | replace: '{{minPrice}}', priceMinWithFormat  | replace: '{{maxPrice}}', priceMaxWithFormat -%}{% endif -%}{% assign savingPriceWithFormat = '' -%}{% unless showSavingDisplay == false or saleAmount == 0 -%} {% assign saleAmountWithFormat = saleAmount  | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros -%} {% assign savingPriceWithFormat = 'productItem.savingAmount'  | translate: translations, 'Save {{saleAmount}}'  | replace: '{{saleAmount}}', saleAmountWithFormat  | replace: '{{salePercent}}', salePercent -%}{% endunless -%}<!-- Price compare display top or bottom --><!-- Price compare display left or right --><div class="boost-sd__product-price-wrapper price price__container regios-dopp-generic-price-container {% if isSale %}price--on-sale{% endif %}"><div class="price__regular">  <span class="boost-sd__visually-hidden"> Regular price {{ priceValueWithFormat }} </span>  <span class="boost-sd__format-currency price-item price-item--regular regios-dopp-generic-price-item--regular font-semibold">   {% if priceValueWithFormat contains '€' or priceValueWithFormat contains 'EUR' %}    {{- priceValueWithFormat | replace: '€', '' | replace: ' EUR', '€ EUR' | append: '€' -}}   {% else %}    {{- priceValueWithFormat -}}   {% endif %}  </span></div><div class="price__sale">  <span class="boost-sd__visually-hidden">   Now on sale for {{ priceValueWithFormat -}}   {%- if savingPriceWithFormat != '' %}, saving {{ savingPriceWithFormat }}{% endif %}  </span>  <span class="boost-sd__format-currency price-item price-item--sale price-item--last regios-dopp-generic-price-item--sale capitalize">   {% if priceValueWithFormat contains '€' or priceValueWithFormat contains 'EUR' %}    {{- priceValueWithFormat | replace: '€', '' | replace: ' EUR', '€ EUR' | append: '€' -}}   {% else %}    {{- priceValueWithFormat -}}   {% endif %}  </span>  {% if compareAtPriceWithFormat != '' -%}   <span class="boost-sd__visually-hidden visually-hidden--inline">    Regular price {{ compareAtPriceWithFormat }}   </span>   <span>    <s class="boost-sd__format-currency price-item price-item--regular font-normal text-black/60 capitalize">     {{ compareAtPriceWithFormat }}    </s>   </span>  {% else %}   <span class="boost-sd__visually-hidden visually-hidden--inline"> Regular price {{ priceValueWithFormat }} </span>   <span>    <s class="boost-sd__format-currency price-item price-item--regular font-normal text-black/60 capitalize">     {% if priceValueWithFormat contains '€' or priceValueWithFormat contains 'EUR' %}      {{- priceValueWithFormat | replace: '€', '' | replace: ' EUR', '€ EUR' | append: '€' -}}     {% else %}      {{- priceValueWithFormat -}}     {% endif %}    </s>   </span>  {% endif -%}  {% if savingPriceWithFormat != '' -%}   <span aria-hidden="true" class="boost-sd__product-price--saving">    <span class="boost-sd__format-currency">{{ savingPriceWithFormat }}</span>   </span>  {% endif -%} </div></div>   </div>         <!-- PRODUCT INVENTORY -->              </div></div></div>  </div>  <template data-product-js>   {{ product | json | escape }}  </template></product-card></div>   </div>  {% endfor %}  {% assign numberOfProductPerRow = widgetDesignSettings.numberOfProductPerRow %}  {% assign numberOfRecommendProduct = widgetDesignSettings.numberOfRecommendProduct %}  {% if numberOfRecommendProduct < numberOfProductPerRow %}   {% assign sliderPages = 1 %}   {% assign disable = "disabled" %}  {% else %}   {% assign sliderPages = numberOfRecommendProduct | divided_by: numberOfProductPerRow | ceil %}   {% assign disable = "" %}  {% endif %} </div><div class="boost-sd__prev-button boost-sd__prev-button--inside">  <button type="button" aria-label="Previous" class="boost-sd__button boost-sd__button--circle boost-sd__slider-button" {{ disable }}>   <span class="boost-sd__icon">    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 7" height="7" width="10" class="boost-sd__prev-button-icon">     <path stroke-linejoin="round" stroke-linecap="round" stroke="#212121" d="M0.764024 5.51189L5.00002 1.28789L9.23602 5.51189"></path>    </svg>   </span>  </button></div><div class="boost-sd__next-button boost-sd__next-button--inside">  <button type="button" aria-label="Next" class="boost-sd__button boost-sd__button--circle boost-sd__slider-button" {{ disable }}>   <span class="boost-sd__icon" style="margin: 0px;">    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 7" height="7" width="10" class="boost-sd__next-button-icon">     <path stroke-linejoin="round" stroke-linecap="round" stroke="#212121" d="M0.764024 5.51189L5.00002 1.28789L9.23602 5.51189"></path>    </svg>   </span>  </button></div></div> {% else %}  <!-- TEMPLATE RECOMMENDATION TYPE BUNDLE -->{% assign bundleStyle = widgetDesignSettings.bundleStyle %}<div class="boost-sd__recommendation-bundle boost-sd__recommendation-bundle--{{ bundleStyle }}"><div class="boost-sd__recommendation-bundle-left">  <div class="boost-sd__recommendation-bundle-images boost-sd__recommendation-bundle-images--{{ bundleStyle }}">   {% for product in products %}    <div class="boost-sd__recommendation-bundle-image-item">     {% if product.checked %}      <a        aria-label="View product details for {{ product.title | escape }}"        class="boost-sd__product-link boost-sd__product-link-image"        href="/products/{{ product.handle }}">     {% endif %}      <div class="boost-sd__product-image-wrapper boost-sd__product-image-wrapper--full-box">       <div class="boost-sd__product-image {% unless product.checked %} boost-sd__product-image--blur {% endunless %}">        {% if product.images_info[0] %}         <img id="product-image-{{ product.id }}"          class="boost-sd__product-image-img boost-sd__product-image-img--main"          src="{{ product.images_info[0].src }}"          alt="{{ product.title | escape }}"           width="auto" height="auto" />        {% else %}         <img id="product-image-{{ product.id }}"          class="boost-sd__product-image-img boost-sd__product-image-img--main"          src="https://cdn.shopify.com/extensions/201f4d7b-8d39-43a4-82de-e6f412341695/0.0.0/assets/boost-pfs-no-image.jpg?v=1677838268"          alt="{{ product.title | escape }}"          width="auto" height="auto" />        {% endif %}       </div>      </div>     {% if product.checked %}      </a>     {% endif %}     {% if bundleStyle == 'style2' %}      <div       class="boost-sd__recommendation-bundle-item-info boost-sd__recommendation-bundle-item-info--{{ bundleStyle }}">       <div class="boost-sd__recommendation-bundle-item-info-content {% unless product.checked %} boost-sd__recommendation-bundle-item-info-content--blur {% endunless %}">        <div class="boost-sd__recommendation-bundle-item-title">         {% if forloop.index0 == 0 %}          <span role="text" tabindex="0">           <b>Sản phẩm này:</b> {{ product.title | escape }}          </span>         {% elsif product.checked %}          <a class="boost-sd__product-link" href="/products/{{ product.handle }}">           {{ product.title | escape }}          </a>         {% else %}          <span role="text" tabindex="0">{{ product.title | escape }}</span>         {% endif %}        </div>        {%- if product.selectedOption.title != 'Default Title' -%}         <div class="boost-sd__recommendation-bundle-dropdown-wrapper boost-sd__recommendation-bundle-dropdown-wrapper--{{ bundleStyle }}">          <div            {% if product.checked %} tabindex="0" {% endif %}           role="combobox"           aria-label="Select an option"           aria-expanded="false"           aria-haspopup="true"            data-id="boost-sd__dropdown-{{ widgetId }}"           data-product-id="{{ product.id }}"           id="boost-sd__dropdown-{{ widgetId }}"            class="boost-sd__dropdown {% unless product.checked %} boost-sd__dropdown--disabled {% endunless %}">           <div class="boost-sd__dropdown-selected-option">            <span              aria-label="Current option: {{ product.selectedOption.title | escape }}"             class="boost-sd__dropdown-option-text">{{ product.selectedOption.title | escape }}</span>            <svg width="8" height="12" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">             <path              d="M7.09832 3.98009e-07L0.901685 -1.43717e-07C0.15069 -2.09371e-07 -0.269991 0.75351 0.193991 1.2676L3.29231 4.70055C3.65265 5.09982 4.34735 5.09982 4.70769 4.70055L7.80601 1.2676C8.26999 0.753511 7.84931 4.63664e-07 7.09832 3.98009e-07Z"              fill="#5C5F62"></path>            </svg>           </div>           <ul role="listbox"             data-id="boost-sd__dropdown-list-{{ widgetId }}"             id="boost-sd__dropdown-list-{{ widgetId }}"             class="boost-sd__dropdown-option-list">            {% for variant in product.variants %}            <li role="option"             aria-selected="{{ variant.title == product.selectedOption.title }}"              data-id="boost-sd__dropdown-option-{{ widgetId }}"             data-variant-id="{{ variant.id }}"             id="boost-sd__dropdown-option-{{ widgetId }}"              class="boost-sd__dropdown-option {% if variant.title == product.selectedOption.title %}boost-sd__dropdown-option--selected{% endif %}">             {{ variant.title | escape }}            </li>            {% endfor %}           </ul>          </div>         </div>        {% endif %}        <div class="boost-sd__recommendation-bundle-checkbox">         <button type="button"          aria-checked="{% if product.checked %} true {% else %} false {% endif %}"          aria-label="{% if product.checked %} Click to remove from bundle {% else %} Click to add to bundle {% endif %}"          class="boost-sd__recommendation-bundle-checkbox-box {% if product.checked %} boost-sd__recommendation-bundle-checkbox-box--checked {% endif %}"          data-id="boost-sd__checkbox-{{ widgetId }}"          id="boost-sd__checkbox-{{ widgetId }}-{{ product.id }}"         ></button>        </div>        <span role="text" tabindex="0" aria-label="Price: {{ product.selectedOption.price }}" class="boost-sd__format-currency">         <span>{{ product.selectedOption.price }}</span>        </span>       </div>      </div>     {% endif %}    </div>    {% unless forloop.last %}     <div      class="boost-sd__recommendation-bundle-plus-icon-wrapper boost-sd__recommendation-bundle-plus-icon-wrapper--{{ bundleStyle }}">      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">       <path fill-rule="evenodd" clip-rule="evenodd"        d="M15 7H9V1C9 0.448 8.553 0 8 0C7.447 0 7 0.448 7 1V7H1C0.447 7 0 7.448 0 8C0 8.552 0.447 9 1 9H7V15C7 15.552 7.447 16 8 16C8.553 16 9 15.552 9 15V9H15C15.553 9 16 8.552 16 8C16 7.448 15.553 7 15 7Z"        fill="#5C5F62"></path>      </svg>     </div>    {% endunless %}   {% endfor %}  </div>  {% if bundleStyle == 'style1' %}   {% for product in products %}    <div     class="boost-sd__recommendation-bundle-item-info boost-sd__recommendation-bundle-item-info--{{ bundleStyle }}">     <div class="boost-sd__recommendation-bundle-item-info-content {% unless product.checked %} boost-sd__recommendation-bundle-item-info-content--blur {% endunless %}">      <div class="boost-sd__recommendation-bundle-item-title">       <div class="boost-sd__recommendation-bundle-checkbox">        <button type="button"         aria-checked="{% if product.checked %} true {% else %} false {% endif %}"         aria-label="{% if product.checked %} Click to remove from bundle {% else %} Click to add to bundle {% endif %}"         class="boost-sd__recommendation-bundle-checkbox-box {% if product.checked %} boost-sd__recommendation-bundle-checkbox-box--checked {% endif %}"         data-id="boost-sd__checkbox-{{ widgetId }}"         id="boost-sd__checkbox-{{ widgetId }}-{{ product.id }}"        ></button>       </div>       {% if forloop.index0 == 0 %}        <span role="text" tabindex="0">         <b>Sản phẩm này:</b> {{ product.title | escape }}        </span>       {% elsif product.checked %}        <a class="boost-sd__product-link" href="/products/{{ product.handle }}">         {{ product.title | escape }}        </a>       {% else %}        <span role="text" tabindex="0">{{ product.title | escape }}</span>       {% endif %}      </div>      {%- if product.selectedOption.title != 'Default Title' -%}       <div class="boost-sd__recommendation-bundle-dropdown-wrapper boost-sd__recommendation-bundle-dropdown-wrapper--{{ bundleStyle }}">        <div          {% if product.checked %} tabindex="0" {% endif %}         role="combobox"         aria-label="Select an option"         aria-expanded="false"         aria-haspopup="true"          data-id="boost-sd__dropdown-{{ widgetId }}"         data-product-id="{{ product.id }}"         id="boost-sd__dropdown-{{ widgetId }}"          class="boost-sd__dropdown {% unless product.checked %} boost-sd__dropdown--disabled {% endunless %}">         <div class="boost-sd__dropdown-selected-option">          <span            aria-label="Current option: {{ product.selectedOption.title | escape }}"           class="boost-sd__dropdown-option-text">{{ product.selectedOption.title | escape }}</span>          <svg width="8" height="12" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">           <path            d="M7.09832 3.98009e-07L0.901685 -1.43717e-07C0.15069 -2.09371e-07 -0.269991 0.75351 0.193991 1.2676L3.29231 4.70055C3.65265 5.09982 4.34735 5.09982 4.70769 4.70055L7.80601 1.2676C8.26999 0.753511 7.84931 4.63664e-07 7.09832 3.98009e-07Z"            fill="#5C5F62"></path>          </svg>         </div>         <ul role="listbox"           data-id="boost-sd__dropdown-list-{{ widgetId }}"           id="boost-sd__dropdown-list-{{ widgetId }}"           class="boost-sd__dropdown-option-list">          {% for variant in product.variants %}          <li role="option"           aria-selected="{{ variant.title == product.selectedOption.title }}"            data-id="boost-sd__dropdown-option-{{ widgetId }}"           data-variant-id="{{ variant.id }}"           id="boost-sd__dropdown-option-{{ widgetId }}"            class="boost-sd__dropdown-option {% if variant.title == product.selectedOption.title %}boost-sd__dropdown-option--selected{% endif %}">           {{ variant.title | escape }}          </li>          {% endfor %}         </ul>        </div>       </div>      {% endif %}      <span role="text" tabindex="0" aria-label="Price: {{ product.selectedOption.price }}" class="boost-sd__format-currency">       <span>{{ product.selectedOption.price }}</span>      </span>          </div>    </div>   {% endfor %}  {% endif %} </div><div class="boost-sd__recommendation-bundle-right">  {% if hasSelectedProduct == true %}  <div role="text" tabindex="0" class="boost-sd__recommendation-bundle-total-price">   Total price:   <b class="boost-sd__recommendation-bundle-price-text">    <span class="boost-sd__format-currency">{{ totalPrice }}</span>   </b>  </div>  {% endif %}  <button type="button" {% if hasSelectedProduct == false %}disabled{% endif %}   class="boost-sd__button boost-sd__button--primary boost-sd__button--large boost-sd__button--round boost-sd__button--full-width boost-sd__btn-add-to-cart">   <span>Thêm vào giỏ hàng</span>  </button></div></div> {% endif %}</div><style> #{{ widgetId }} .boost-sd__recommendation-title {  color: {{ widgetDesignSettings.titleTextColor }};  font-family: {{ widgetDesignSettings.titleFont }};  font-size: {{ widgetDesignSettings.titleFontSize }}px;  text-transform: {{ widgetDesignSettings.titleTextTransform }};  font-weight: {{ widgetDesignSettings.titleFontWeight }};  font-style: {{ widgetDesignSettings.titleFontStyle }}; }</style>`;
        
      
      
      
        
    ;template["searchTabCollectionsContent"]=`<div role="tabpanel" class="boost-sd__search-result-panel-content"> {% assign currentLocale = '' %} {% if currentLocale != "" %} {% assign currentLocale = currentLocale %} {% endif %} {% for collection in collections %} <a tabindex="0" href="{{ currentLocale }}/collections/{{ collection.handle }}" class="boost-sd__search-result-panel-content-item">  {% if collection.image != null %}  <div class="boost-sd__search-result-panel-content-item-image">   <img src="{{ collection.image.src }}" width="auto" height="auto">  </div>  {% endif %}  <div class="boost-sd__search-result-panel-content-item-text">   <p class="boost-sd__search-result-panel-content-item-title">{{ collection.title | escape }}</p>   {% if collection.body_html != "" %}   <p class="boost-sd__search-result-panel-content-item-description">    {{ collection.body_html | strip_html | truncate: 270, '...' }}   </p>   {% endif %}  </div></a> {% endfor %} {% capture pageSize %} 25 {% endcapture %} {% assign pageSize = pageSize | plus: 0 %} {% if pageSize <= 0 %} {% assign pageSize = 1 %} {% endif %} {% if pageSize < totalCollection %} {% assign totalPage = totalCollection | divided_by: pageSize | ceil %} {% assign pagination = currentPage | pagination_list: totalPage | split: "," %} {% assign toProduct = currentPage | times: pageSize %} <div class="boost-sd__pagination boost-sd__pagination--center">  {% if currentPage != 1 %}  <button type="button" aria-label="previous page" class="boost-sd__pagination-button boost-sd__pagination-button--rectangle boost-sd__pagination-button--previous" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit; text-transform: none; border-color: transparent; border-width: 1px; border-style: solid;">   <span class="boost-sd__pagination-button-icon boost-sd__pagination-button-icon--left">    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 7 12" height="12" width="7">     <path d="M6.80474 0.528514C6.54439 0.268165 6.12228 0.268165 5.86193 0.528514L0.861929 5.52851C0.601579 5.78886 0.601579 6.21097 0.861929 6.47132L5.86193 11.4713C6.12228 11.7317 6.54439 11.7317 6.80474 11.4713C7.06509 11.211 7.06509 10.7889 6.80474 10.5285L2.27614 5.99992L6.80474 1.47132C7.06509 1.21097 7.06509 0.788864 6.80474 0.528514Z" clip-rule="evenodd" fill-rule="evenodd"></path>    </svg>   </span>  </button>  {% endif %}  {% for page_string in pagination %}  {% assign page = page_string | plus: 0 %}  {% if page == 0 %}  <button class="boost-sd__pagination-number boost-sd__pagination-number--disabled boost-sd__pagination-number--">...</button>  {% elsif page == request.page %}  <button class="boost-sd__pagination-number boost-sd__pagination-number-- boost-sd__pagination-number--active" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit;" data-page="{{ page }}">{{ page }}</button>  {% else %}  <button class="boost-sd__pagination-number boost-sd__pagination-number--" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit;" data-page="{{ page }}">{{ page }}</button>  {% endif %}  {% endfor %}  {% if currentPage != totalPage %}  <button type="button" aria-label="next page" class="boost-sd__pagination-button boost-sd__pagination-button--rectangle boost-sd__pagination-button--next" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit; text-transform: none; border-color: transparent; border-width: 1px; border-style: solid;">   <span class="boost-sd__pagination-button-icon boost-sd__pagination-button-icon--right">    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 7 12" height="12" width="7">     <path d="M0.195262 0.528514C0.455612 0.268165 0.877722 0.268165 1.13807 0.528514L6.13807 5.52851C6.39842 5.78886 6.39842 6.21097 6.13807 6.47132L1.13807 11.4713C0.877722 11.7317 0.455612 11.7317 0.195262 11.4713C-0.0650874 11.211 -0.0650874 10.7889 0.195262 10.5285L4.72386 5.99992L0.195262 1.47132C-0.0650874 1.21097 -0.0650874 0.788864 0.195262 0.528514Z" clip-rule="evenodd" fill-rule="evenodd"></path>    </svg>   </span>  </button>  {% endif %} </div> {% endif %}</div>`;
        
      
      
      
        
    ;template["searchTabPagesContent"]=`<div role="tabpanel" class="boost-sd__search-result-panel-content"> {% for page in pages %} <a tabindex="0" href="{{ page.url }}" class="boost-sd__search-result-panel-content-item">  {% if page.image != null %}  <div class="boost-sd__search-result-panel-content-item-image">   <img src="{{ page.image.src }}" width="auto" height="auto" alt="{{ page.title | escape }}">  </div>  {% endif %}  <div class="boost-sd__search-result-panel-content-item-text">   <p class="boost-sd__search-result-panel-content-item-title">{{ page.title | escape }}</p>   {% if collection.body_html != "" %}   <p class="boost-sd__search-result-panel-content-item-description">    {{ collection.body_html | strip_html | truncate: 270, '...' }}   </p>   {% endif %}  </div></a> {% endfor %} {% capture pageSize %} 25 {% endcapture %} {% assign pageSize = pageSize | plus: 0 %} {% if pageSize <= 0 %} {% assign pageSize = 1 %} {% endif %} {% if pageSize < totalPageTab %} {% assign totalPage = totalPageTab | divided_by: pageSize | ceil %} {% assign pagination = currentPage | pagination_list: totalPage | split: "," %} {% assign toProduct = currentPage | times: pageSize %} <div class="boost-sd__pagination boost-sd__pagination--center">  {% if currentPage != 1 %}  <button type="button" aria-label="previous page" class="boost-sd__pagination-button boost-sd__pagination-button--rectangle boost-sd__pagination-button--previous" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit; text-transform: none; border-color: transparent; border-width: 1px; border-style: solid;">   <span class="boost-sd__pagination-button-icon boost-sd__pagination-button-icon--left">    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 7 12" height="12" width="7">     <path d="M6.80474 0.528514C6.54439 0.268165 6.12228 0.268165 5.86193 0.528514L0.861929 5.52851C0.601579 5.78886 0.601579 6.21097 0.861929 6.47132L5.86193 11.4713C6.12228 11.7317 6.54439 11.7317 6.80474 11.4713C7.06509 11.211 7.06509 10.7889 6.80474 10.5285L2.27614 5.99992L6.80474 1.47132C7.06509 1.21097 7.06509 0.788864 6.80474 0.528514Z" clip-rule="evenodd" fill-rule="evenodd"></path>    </svg>   </span>  </button>  {% endif %}  {% for page_string in pagination %}  {% assign page = page_string | plus: 0 %}  {% if page == 0 %}  <button class="boost-sd__pagination-number boost-sd__pagination-number--disabled boost-sd__pagination-number--">...</button>  {% elsif page == request.page %}  <button class="boost-sd__pagination-number boost-sd__pagination-number-- boost-sd__pagination-number--active" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit;" data-page="{{ page }}">{{ page }}</button>  {% else %}  <button class="boost-sd__pagination-number boost-sd__pagination-number--" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit;" data-page="{{ page }}">{{ page }}</button>  {% endif %}  {% endfor %}  {% if currentPage != totalPage %}  <button type="button" aria-label="next page" class="boost-sd__pagination-button boost-sd__pagination-button--rectangle boost-sd__pagination-button--next" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit; text-transform: none; border-color: transparent; border-width: 1px; border-style: solid;">   <span class="boost-sd__pagination-button-icon boost-sd__pagination-button-icon--right">    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 7 12" height="12" width="7">     <path d="M0.195262 0.528514C0.455612 0.268165 0.877722 0.268165 1.13807 0.528514L6.13807 5.52851C6.39842 5.78886 6.39842 6.21097 6.13807 6.47132L1.13807 11.4713C0.877722 11.7317 0.455612 11.7317 0.195262 11.4713C-0.0650874 11.211 -0.0650874 10.7889 0.195262 10.5285L4.72386 5.99992L0.195262 1.47132C-0.0650874 1.21097 -0.0650874 0.788864 0.195262 0.528514Z" clip-rule="evenodd" fill-rule="evenodd"></path>    </svg>   </span>  </button>  {% endif %} </div> {% endif %}</div>`;
        
      
      
      
        
    ;template["searchTabCollectionsContentPagination"]=`{% assign pagination = currentPage | pagination_list: totalPage | split: "," %}{% assign toProduct = currentPage | times: pageSize %}<div class="boost-sd__pagination boost-sd__pagination--center"> {% if currentPage != 1 %} <button type="button" aria-label="previous page" class="boost-sd__pagination-button boost-sd__pagination-button--rectangle boost-sd__pagination-button--previous" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit; text-transform: none; border-color: transparent; border-width: 1px; border-style: solid;">  <span class="boost-sd__pagination-button-icon boost-sd__pagination-button-icon--left">   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 7 12" height="12" width="7">    <path d="M6.80474 0.528514C6.54439 0.268165 6.12228 0.268165 5.86193 0.528514L0.861929 5.52851C0.601579 5.78886 0.601579 6.21097 0.861929 6.47132L5.86193 11.4713C6.12228 11.7317 6.54439 11.7317 6.80474 11.4713C7.06509 11.211 7.06509 10.7889 6.80474 10.5285L2.27614 5.99992L6.80474 1.47132C7.06509 1.21097 7.06509 0.788864 6.80474 0.528514Z" clip-rule="evenodd" fill-rule="evenodd"></path>   </svg>  </span></button> {% endif %} {% for page_string in pagination %} {% assign page = page_string | plus: 0 %} {% if page == 0 %} <button class="boost-sd__pagination-number boost-sd__pagination-number--disabled boost-sd__pagination-number--">...</button> {% elsif page == request.page %} <button class="boost-sd__pagination-number boost-sd__pagination-number-- boost-sd__pagination-number--active" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit;" data-page="{{ page }}">{{ page }}</button> {% else %} <button class="boost-sd__pagination-number boost-sd__pagination-number--" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit;" data-page="{{ page }}">{{ page }}</button> {% endif %} {% endfor %} {% if currentPage != totalPage %} <button type="button" aria-label="next page" class="boost-sd__pagination-button boost-sd__pagination-button--rectangle boost-sd__pagination-button--next" style="color: rgb(122, 122, 122); background-color: rgba(0, 0, 0, 0); font-size: inherit; text-transform: none; border-color: transparent; border-width: 1px; border-style: solid;">  <span class="boost-sd__pagination-button-icon boost-sd__pagination-button-icon--right">   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 7 12" height="12" width="7">    <path d="M0.195262 0.528514C0.455612 0.268165 0.877722 0.268165 1.13807 0.528514L6.13807 5.52851C6.39842 5.78886 6.39842 6.21097 6.13807 6.47132L1.13807 11.4713C0.877722 11.7317 0.455612 11.7317 0.195262 11.4713C-0.0650874 11.211 -0.0650874 10.7889 0.195262 10.5285L4.72386 5.99992L0.195262 1.47132C-0.0650874 1.21097 -0.0650874 0.788864 0.195262 0.528514Z" clip-rule="evenodd" fill-rule="evenodd"></path>   </svg>  </span></button> {% endif %}</div>`;
        
      
      
      
        
    ;template["placeholderFilterTree"]=`<!-- TEMPLATE PLACEHOLDER --><!-- This is global variable filter settings layout --><div class='boost-sd-container'><div class='boost-sd-layout boost-sd-layout--has-filter-vertical'>  <div class='boost-sd-left boost-filter-tree-column'>   <!-- TEMPLATE FILTER TREE PLACEHOLDER -->   <div id="boost-sd__filter-tree-wrapper" class="boost-sd__filter-tree-wrapper">    <div class="boost-sd__filter-tree-vertical ">     <div class="boost-sd__filter-tree-vertical-placeholder">      <div class="boost-sd__filter-tree-vertical-placeholder-item">       <span class="boost-sd__placeholder-item" style="width:80%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:65%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:40%; border-radius: 0;"></span>      </div>      <div class="boost-sd__filter-tree-vertical-placeholder-item">       <span class="boost-sd__placeholder-item" style="width:80%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:65%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:40%; border-radius: 0;"></span>      </div>      <div class="boost-sd__filter-tree-vertical-placeholder-item">       <span class="boost-sd__placeholder-item" style="width:80%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:65%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:40%; border-radius: 0;"></span>      </div>      <div class="boost-sd__filter-tree-vertical-placeholder-item">       <span class="boost-sd__placeholder-item" style="width:80%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:65%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:40%; border-radius: 0;"></span>      </div>      <div class="boost-sd__filter-tree-vertical-placeholder-item">       <span class="boost-sd__placeholder-item" style="width:80%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:65%; border-radius: 0;"></span>       <span class="boost-sd__placeholder-item" style="width:40%; border-radius: 0;"></span>      </div>     </div>    </div>   </div>  </div>  <div class='boost-sd-right boost-product-listing-column'>   <!-- TEMPLATE TOOLBAR PLACEHOLDER-->   <div class="boost-sd__toolbar-container">    <div class="boost-sd__toolbar-inner">     <div class="boost-sd__toolbar-content">      <div class="boost-sd__toolbar boost-sd__toolbar--3_1">       <span class="boost-sd__toolbar-item boost-sd__placeholder-item" style="height: 28px; border-radius: 0;"></span>       <span class="boost-sd__toolbar-item boost-sd__placeholder-item" style="height: 28px; border-radius: 0; margin-bottom: 0"></span>       <span class="boost-sd__toolbar-item boost-sd__placeholder-item" style="height: 28px; border-radius: 0; margin-bottom: 0"></span>      </div>     </div>    </div>   </div>   <!-- TEMPLATE PRODUCT LIST PLACEHOLDER-->   <div class="boost-sd__product-list-placeholder boost-sd__product-list-placeholder--3-col">    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>    <div class="boost-sd__product-list-placeholder-item">     <span class="boost-sd__placeholder-item" style="width: 100%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 80%; border-radius: 0;"></span>     <span class="boost-sd__placeholder-item" style="width: 40%; border-radius: 0;"></span>    </div>   </div>   <div class="boost-sd__pagination boost-sd__pagination--center">    <span class="boost-sd__placeholder-item" style="height: 40px; border-radius: 0;"></span>   </div>  </div></div></div><style> .boost-sd__collection-header {  width: 100%;  height: 130px;  display: block;  background: -webkit-gradient(linear,    left top,    right top,    color-stop(8%, #eee),    color-stop(18%, #e6e6e6),    color-stop(33%, #eee));  background-color: #eee;  animation: banner-place-holder-shimmer 2s linear infinite forwards; } .boost-sd__collection-header:empty {  display: block; } .boost-sd__collection-header .boost-sd__placeholder-item {  height: 130px; } @media only screen and (min-width: 992px) {  .boost-sd__collection-header,  .boost-sd__collection-header .boost-sd__placeholder-item {   height: 150px;  } } @keyframes banner-place-holder-shimmer {  0% {   background-position: -1500px 0;  }  100% {   background-position: 1500px 0;  } } .boost-sd__in-collection-search {  margin-bottom: 20px;  margin-top: 20px;  width: 100%;  max-width: 100%;  display: flex;  position: relative; } .boost-sd__in-collection-search--horizontal {  margin: 20px auto 0;  max-width: 592px; } @media only screen and (min-width: 992px) {  .boost-sd__in-collection-search {   margin-bottom: 16px;   margin-top: 16px;  } } .boost-sd__filter-tree-vertical {  margin-top: 0;  margin-right: 0; } .boost-sd__filter-tree-vertical-placeholder {  background: transparent;  width: 100%;  max-width: 100%;  display: none; } .boost-sd__filter-tree-vertical-placeholder-list {  margin: 30px 10px 0;  padding: 0;  list-style: none; } .boost-sd__filter-tree-vertical-placeholder-item {  max-width: 100%;  padding: 20px 0;  display: block; } .boost-sd__filter-tree-vertical-placeholder-item:first-child {  padding-top: 0; } .boost-sd__filter-tree-vertical-placeholder-item:not(:last-child) {  border-bottom: 1px solid #ebebeb; } .boost-sd__filter-tree-vertical-placeholder-item::before, .boost-sd__filter-tree-vertical-placeholder-item::after, { display: none; } .boost-sd__filter-tree-horizontal-placeholder {  display: none; } @media only screen and (min-width: 992px) {  .boost-sd__filter-tree-vertical {   width: 272px;  }  .boost-sd-layout .boost-sd-left .boost-sd__filter-tree-wrapper .boost-sd__filter-tree-vertical {   margin-right: 16px;   margin-left: 0;  }  .boost-sd__filter-tree-vertical-placeholder,  .boost-sd__filter-tree-horizontal-placeholder {   display: inline-block;  }  .boost-sd-layout--has-filter-horizontal {   flex-wrap: wrap;   margin-top: 0;  }  .boost-sd-layout--has-filter-horizontal .boost-sd-left,  .boost-sd-layout--has-filter-horizontal .boost-sd-right {   flex: 0 0 100%;  }  .boost-sd__filter-tree-horizontal {   width: 100%;  }  .boost-sd__filter-tree-horizontal-placeholder {   padding: 16px 0;   border-top: 1px solid #ebebeb;   width: 100%;   max-width: 100%;   background: transparent;  }  .boost-sd__filter-tree-horizontal-placeholder-list {   margin: 0;   padding: 0;   list-style: none;   border-bottom: 1px solid #e8e9eb;  }  .boost-sd__filter-tree-horizontal-placeholder-item {   border: none;   display: inline-block;   margin-right: 35px;   position: relative;  }  .boost-sd__filter-tree-horizontal-placeholder-button {   width: auto;   height: auto;   display: inline-block;   position: relative;   padding: 5px 15px 5px 0;   margin: 0;   min-height: auto;   min-width: 0;   border-radius: 0;   box-shadow: none;   background: none;   border: none;   letter-spacing: normal;   text-align: left;   cursor: pointer;  }  .boost-sd__filter-tree-horizontal-placeholder-button .boost-sd__placeholder-item {   width: 80px;   height: 10px;   display: inline-block;   margin: 0 15px 0 0;  }  .boost-sd__filter-tree-horizontal-placeholder-icon {   transform: rotate(-90deg);  } } .boost-sd__in-collection-search {  margin-bottom: 20px;  margin-top: 20px;  width: 100%;  max-width: 100%;  display: flex;  position: relative; } .boost-sd__in-collection-search--horizontal {  margin: 20px auto 0;  max-width: 592px; } @media only screen and (min-width: 992px) {  .boost-sd__in-collection-search {   margin-bottom: 16px;   margin-top: 16px;  } } .boost-sd__toolbar-container {  width: 100%;  margin-bottom: 16px; } .boost-sd__toolbar-inner {  max-width: 1216px;  margin: 0 auto; } .boost-sd__toolbar-content {  border-bottom: 1px solid #ebebeb;  border-top: 1px solid #ebebeb;  padding: 16px 0; } .boost-sd__toolbar {  align-items: center;  width: 100%;  display: flex;  flex-wrap: wrap;  column-gap: 16px;  justify-content: space-between; } .boost-sd__toolbar .boost-sd__placeholder-item {  flex-basis: 45%; } .boost-sd__toolbar .boost-sd__placeholder-item:first-child {  flex-basis: 100%;  margin-bottom: 16px; } @media only screen and (min-width: 992px) {  .boost-sd__toolbar-content {   display: flex;   align-items: center;   border-bottom: none;   padding: 16px 0 16px;   border-top: 1px solid #ebebeb;   border-bottom: 0;  }  .boost-sd__toolbar {   flex-wrap: inherit;  }  .boost-sd__toolbar .boost-sd__placeholder-item {   flex-basis: auto;  }  .boost-sd__toolbar .boost-sd__placeholder-item:first-child {   flex-basis: auto;   margin-bottom: 0;  }  .boost-sd__toolbar--3_1 .boost-sd__toolbar-item {   flex: 1;  }  .boost-sd__toolbar--3_1 .boost-sd__toolbar-item:nth-child(2) {   justify-content: center;  }  .boost-sd__toolbar--3_1 .boost-sd__toolbar-item:nth-child(3) {   justify-content: end;  } } .boost-sd__product-list-placeholder {  gap: 16px;  margin-bottom: 32px;  flex-wrap: wrap;  width: 100%;  display: flex; } .boost-sd__product-list-placeholder--1-col .boost-sd__product-list-placeholder-item {  width: 100%; } .boost-sd__product-list-placeholder--2-col .boost-sd__product-list-placeholder-item, .boost-sd__product-list-placeholder--3-col .boost-sd__product-list-placeholder-item, .boost-sd__product-list-placeholder--4-col .boost-sd__product-list-placeholder-item, .boost-sd__product-list-placeholder--5-col .boost-sd__product-list-placeholder-item, .boost-sd__product-list-placeholder--6-col .boost-sd__product-list-placeholder-item {  width: calc(50% - 8px); } .boost-sd__product-list-placeholder .boost-sd__product-list-placeholder-item .boost-sd__placeholder-item:first-child {  height: 222px; } .boost-sd__placeholder-list-item {  background: rgba(0, 0, 0, 0.07);  min-width: 50px;  height: 20px;  animation: 2s infinite place-holder-animation;  display: inline-block; } .boost-sd__product-list-placeholder--list-view .boost-sd__product-list-placeholder-item {  flex-direction: row;  display: flex;  width: 100%; } .boost-sd__sd__placeholder-list-view-layout-info-group {  width: 100%;  padding-left: 16px;  display: flex;  flex-direction: column;  align-items: baseline;  gap: 16px;  text-align: left;  justify-content: center; } .boost-sd__placeholder-list-view-layout-image {  flex: 160px;  width: auto;  max-width: 160px;  height: 160px; } .boost-sd__pagination {  padding-top: 10px;  padding-bottom: 10px;  justify-content: center;  align-items: center;  display: flex; } @media only screen and (min-width: 576px) {  .boost-sd__product-list-placeholder {   gap: 32px;   margin-bottom: 64px;  }  .boost-sd__product-list-placeholder--3-col .boost-sd__product-list-placeholder-item,  .boost-sd__product-list-placeholder--4-col .boost-sd__product-list-placeholder-item,  .boost-sd__product-list-placeholder--5-col .boost-sd__product-list-placeholder-item,  .boost-sd__product-list-placeholder--6-col .boost-sd__product-list-placeholder-item {   width: calc(33.3333333333% - (32px - 32px / 3));  } } @media only screen and (min-width: 992px) {  .boost-sd__product-list-placeholder .boost-sd__placeholder-item:not(:last-child) {   margin-bottom: 8px;  }  .boost-sd__product-list-placeholder .boost-sd__placeholder-item:first-child {   margin-bottom: 16px;  }  .boost-sd__product-list-placeholder--3-col .boost-sd__product-list-placeholder-item .boost-sd__placeholder-item:first-child {   height: 382px;  }  .boost-sd__product-list-placeholder--4-col .boost-sd__product-list-placeholder-item .boost-sd__placeholder-item:first-child {   height: 275px;  }  .boost-sd__product-list-placeholder--5-col .boost-sd__product-list-placeholder-item .boost-sd__placeholder-item:first-child {   height: 215px;  }  .boost-sd__product-list-placeholder--6-col .boost-sd__product-list-placeholder-item .boost-sd__placeholder-item:first-child {   height: 175px;  }  .boost-sd__product-list-placeholder--3-col .boost-sd__product-list-placeholder-item {   width: calc(33.3333333333% - (32px - 32px / 3));  }  .boost-sd__product-list-placeholder--4-col .boost-sd__product-list-placeholder-item {   width: calc(25% - (32px - 32px / 4));  }  .boost-sd__product-list-placeholder--5-col .boost-sd__product-list-placeholder-item {   width: calc(20% - (32px - 32px / 5));  }  .boost-sd__product-list-placeholder--6-col .boost-sd__product-list-placeholder-item {   width: calc(16.6666667% - (32px - 32px / 6));  } } .boost-sd-container * {  box-sizing: border-box; } .boost-sd__placeholder-item {  background: rgba(0, 0, 0, 0.07);  border-radius: 50rem;  min-width: 50px;  max-width: 100%;  height: 20px;  animation: 2s infinite place-holder-animation;  display: inline-block; } .boost-sd__placeholder-item:empty {  display: block; } .boost-sd__placeholder-item:not(:last-child) {  margin-bottom: 18px; } .boost-sd-layout {  margin: 20px auto 0; } .boost-sd-left {  position: relative; } .boost-sd-layout .boost-sd-right {  width: 100%;  margin-bottom: 20px; } @keyframes place-holder-animation {  0% {   opacity: 1;  }  50% {   opacity: 0.5;  }  100% {   opacity: 1;  } } @media only screen and (min-width: 992px) {  .boost-sd-layout {   display: flex;   max-width: 1216px;  }  .boost-sd-layout .boost-sd-right {   flex: auto;   max-width: 100%;  } }</style>`;
        
      
      
      
        
    ;template["preOrder"]=`<!-- TEMPLATE PRE-ORDER APP BLOCK --><div class="boost-sd__product-form"><!-- Quantity Input --><div class="boost-sd__product-form-quantity">  <p id="quantity-title" class="boost-sd__product-form-quantity-title">   {{ "quickView.qvQuantity" | translate: translations, 'Quantity' }}  </p>  <div role="group" aria-labelledby="quantity-title" class="boost-sd__input-number boost-sd__input-number--md">   <div class="boost-sd__input-number-btn-wrapper">    <button type="button" aria-label="Giảm số lượng" aria-controls="item-quantity" class="boost-sd__button boost-sd__button--full-width boost-sd__input-number-btn">     <span aria-hidden="true">-</span>    </button>   </div>   <input id="item-quantity" type="number" aria-labelledby="quantity-title" aria-describedby="quantity-error" class="boost-sd__input-number-input" value="1" min="1" />   <div class="boost-sd__input-number-btn-wrapper">    <button type="button" aria-label="Tăng số lượng" aria-controls="item-quantity" class="boost-sd__button boost-sd__button--full-width boost-sd__input-number-btn">     <span aria-hidden="true">+</span>    </button>   </div>  </div>  <div aria-live="assertive" id="quantity-error" class="boost-sd__product-form-quantity-error">   {{ "quickView.qvQuantityError" | translate: translations, 'Please input quantity' }}  </div></div><div class="boost-sd__preorder-options">  <!-- TEMPLATE PRE_ORDER WITH PAYMENT -->  <!-- TODO check preorder -->  {% if product.variants %}  {% assign variants = product.variants %}  {% else %}  {% assign variants = variants %}  {% endif %}  {% for variant in variants %}  {% if variant.preorder %}  {% assign paymentType = variant.preorder.payment.type %}  {% assign discountType = variant.preorder.payment.discountType %}  {% assign discountValue = variant.preorder.payment.discountValue %}  {% assign originalPrice = variant.price %}  {% assign paymentLabel = '' %}  {% if paymentType == 'full' %}  {% assign paymentLabel = 'Full payment' %}  {% endif %}  {% if paymentType == 'partial' %}  {% assign paymentLabel = 'Partial payment' %}  {% endif %}  {% if paymentType == 'none' %}  {% assign paymentLabel = 'No payment' %}  {% endif %}  {% capture showCurrencyCodes %}false{% endcapture %}  {% assign moneyFormat = request.money_format | strip_html -%}  {% if showCurrencyCodes == 'true' %}  {% assign moneyFormat = request.money_format_with_currency | strip_html -%}  {% endif %}  {% assign moneyRate = request.currency_rate | strip_html -%}  {% if discountType == 'percentage' %}  {% assign percentNum = originalPrice | times: discountValue | divided_by: 100 %}  {% assign discountedPrice = originalPrice | times: 1.0 | minus: percentNum %}  {% elsif discountType == 'amount' %}  {% assign discountValue = discountValue | times: moneyRate %}  {% assign discountedPrice = originalPrice | times: 1.0 | minus: discountValue %}  {% else %}  {% assign discountedPrice = originalPrice %}  {% endif %}  {% assign removePriceDecimal = false -%}  {% assign showCentAsSuperscript = false -%}  {% assign decimalDelimiter = '' -%}  {% assign withoutTrailingZeros = true -%}  {% assign originalPriceFormat = originalPrice | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros -%}  {% assign discountedPriceFormat = discountedPrice | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros -%}  {% assign discountValueFormat = discountValue | format_currency: moneyFormat, showCentAsSuperscript, removePriceDecimal, decimalDelimiter, withoutTrailingZeros %}  <div tabindex="0" role="region" aria-labelledby="preorder-title" aria-describedby="preorder-description" class="boost-sd__preorder" data-variant-id="{{ variant.id }}">   <div class="boost-sd__preorder-option">    <h2 id="preorder-title" class="boost-sd__preorder-title">{{ paymentLabel }}</h2>    <div aria-live="polite" id="preorder-description" class="boost-sd__preorder-discount">     {% if discountType == 'percentage' %}     <span class="boost-sd__preorder-save">Save {{ discountValue }}%</span>     {% elsif discountType == 'amount' %}     <span class="boost-sd__preorder-save">Save {{ discountValueFormat }}</span>     {% endif %}     <div class="boost-sd__preorder-price">      {% if discountType != 'none' %}      <span aria-label="Original Price: {{ originalPriceFormat }}" class="boost-sd__preorder-original-price">{{ originalPriceFormat }}</span>      {% endif %}      <span aria-label="Discounted Price: {{ discountedPriceFormat }}" class="boost-sd__preorder-discounted-price">{{ discountedPriceFormat }}</span>     </div>    </div>   </div>  </div>  {% endif %}  {% endfor %}  {% assign buttonLabel = 'Pre-Order' %}  {% assign preOrderButtonText = variants[0].preorder.settings.buttonText %}  {% assign preOrderDeliveryText = variants[0].preorder.settings.deliveryText %}  {% if preOrderButtonText and preOrderButtonText != '' %}  {% assign buttonLabel = preOrderButtonText %}  {% endif %}  <button type="button" aria-label='{{ buttonLabel }}' class="boost-sd__button boost-sd__button--border boost-sd__button--rectangle boost-sd__button--large boost-sd__button--preorder">   <span aria-hidden="true" class="boost-sd__button-text">    {{ buttonLabel }}   </span>  </button>  <p tabindex="0" class="boost-sd__preorder-note">   <strong class="boost-sd__preorder-note-title">Please note: </strong><span class="boost-sd__preorder-note-text">{{ preOrderDeliveryText }}</span>  </p></div><!-- TEMPLATE ADD TO CART --><div class="boost-sd__purchase-options">  <button type="button" class="boost-sd__button boost-sd__button--border boost-sd__button--rectangle boost-sd__button--large boost-sd__button--purchase">   <span class="boost-sd__button-text">    {{ "productItem.atcAvailableLabel" | translate: translations, 'Add to cart' }}   </span>  </button></div></div>`;
        
      
      
      
        
    ;template["preOrderPlaceholder"]=`<!-- Placeholder for PreOrder --><div class="boost-sd__preorder-placeholder"><div class="boost-sd__preorder-placeholder-quantity-label">  <div class="boost-sd__placeholder-item" style="width: 65px; height: 20px;"></div></div><div class="boost-sd__preorder-placeholder-product-quantity">  <div class="boost-sd__placeholder-item" style="width: 160px; height: 38px;"></div></div><div class="boost-sd__preorder-placeholder-add-to-cart">  <div class="boost-sd__placeholder-item" style="width: 100%; height: 50px;"></div></div><div class="boost-sd__preorder-placeholder-buy-it-now">  <div class="boost-sd__placeholder-item" style="width: 100%; height: 50px;"></div></div></div>`;
        
      
      
      
        
    ;template["backInStock"]=`<!-- Popup Notify Me Form --><div role="dialog" aria-hidden="true" aria-labelledby="boost-sd__bis-popup-title" aria-describedby="boost-sd__bis-popup-description" id="boost-sd__bis-notify-popup" class="boost-sd__bis-notify-popup"><div class="boost-sd__bis-popup-backdrop"></div><div class="boost-sd__bis-popup-container">  <div class="boost-sd__bis-popup-heading">   <!-- Close Button -->   <button aria-label="Đóng cửa sổ" id="boost-sd__bis-close-popup" class="boost-sd__bis-close-button">    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label='{{ "close" | translate: translations, "Close" }}'>     <path d="M9.41385 8L15.7069 1.707C15.8944 1.51949 15.9997 1.26518 15.9997 1C15.9997 0.734825 15.8944 0.48051 15.7069 0.293002C15.5193 0.105494 15.265 0.000152588 14.9998 0.000152588C14.7347 0.000152588 14.4804 0.105494 14.2928 0.293002L7.99985 6.586L1.70685 0.293002C1.614 0.200157 1.50378 0.126509 1.38247 0.0762618C1.26117 0.0260146 1.13115 0.000152588 0.999849 0.000152588C0.868547 0.000152588 0.738531 0.0260146 0.617224 0.0762618C0.495916 0.126509 0.385694 0.200157 0.292849 0.293002C0.105341 0.48051 0 0.734825 0 1C0 1.26518 0.105341 1.51949 0.292849 1.707L6.58585 8L0.292849 14.293C0.105341 14.4805 0 14.7348 0 15C0 15.2652 0.105341 15.5195 0.292849 15.707C0.480357 15.8945 0.734673 15.9999 0.999849 15.9999C1.26503 15.9999 1.51934 15.8945 1.70685 15.707L7.99985 9.414L14.2928 15.707C14.3855 15.8002 14.4957 15.8741 14.617 15.9246C14.7383 15.9751 14.8684 16.001 14.9998 16.001C15.1313 16.001 15.2614 15.9751 15.3827 15.9246C15.504 15.8741 15.6142 15.8002 15.7069 15.707C15.7998 15.6142 15.8735 15.504 15.9238 15.3827C15.9742 15.2614 16 15.1313 16 15C16 14.8687 15.9742 14.7386 15.9238 14.6173C15.8735 14.496 15.7998 14.3858 15.7069 14.293L9.41385 8Z" fill="#5C5F62" />    </svg>   </button>   <!-- Title -->   <p id="boost-sd__bis-popup-title" class="boost-sd__bis-popup-title">Thông báo cho tôi</p>  </div>  <div class="boost-sd__bis-popup-content">   <!-- Description -->   <p id="boost-sd__bis-popup-description" class="boost-sd__bis-popup-description">    Nhận thông báo ngay khi sản phẩm này có hàng trở lại bằng cách đăng ký bên dưới!   </p>   <!-- Variant Selector -->   {% if filteredVariants.size > 0 and filteredVariants[0].title != 'Default Title' %}   <label for="boost-sd__bis-dropdown-variant" class="boost-sd__bis-dropdown-label">Chọn phiên bản</label>   <div aria-label="Select an option" role="combobox" aria-expanded="false" aria-haspopup="listbox" aria-controls="boost-sd__bis-dropdown-list" aria-activedescendant="" data-id="boost-sd__bis-dropdown-variant" id="boost-sd__bis-dropdown-variant" class="boost-sd__bis-dropdown-variant">    <div role="button" aria-labelledby="boost-sd__bis-dropdown-selected-option" aria-label="Nhấn để mở rộng danh sách" tabindex="0" id="boost-sd__bis-dropdown-selected-option" class="boost-sd__bis-dropdown-selected-option">     <span aria-label="Current option: {{ filteredVariants[0].title | escape }}" class="boost-sd__bis-dropdown-option-text" title="{{ filteredVariants[0].title | escape }}">      {{ filteredVariants[0].title | escape }}     </span>     <svg width="8" height="12" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">      <path d="M7.09832 3.98009e-07L0.901685 -1.43717e-07C0.15069 -2.09371e-07 -0.269991 0.75351 0.193991 1.2676L3.29231 4.70055C3.65265 5.09982 4.34735 5.09982 4.70769 4.70055L7.80601 1.2676C8.26999 0.753511 7.84931 4.63664e-07 7.09832 3.98009e-07Z" fill="#222222"></path>     </svg>    </div>    <ul role="listbox" aria-labelledby="boost-sd__bis-dropdown-selected-option" data-id="boost-sd__bis-dropdown-list" tabindex="-1" id="boost-sd__bis-dropdown-list" class="boost-sd__bis-dropdown-option-list">     {% for variant in filteredVariants %}     <li role="option" tabindex="-1" aria-selected="false" data-id="boost-sd__bis-dropdown-option-item-{{ forloop.index }}" id="boost-sd__bis-dropdown-option-item-{{ forloop.index }}" class="boost-sd__bis-dropdown-option-item" data-variant-id="{{ variant.id }}">      {{ variant.title | escape }}     </li>     {% endfor %}    </ul>   </div>   {% endif %}   <!-- Email Input -->   <label for="boost-sd__bis-email-input" class="boost-sd__bis-email-label">Email address</label>   <input type="email" aria-describedby="boost-sd__bis-email-error" id="boost-sd__bis-email-input" class="boost-sd__bis-email-input" placeholder="Nhập địa chỉ email của bạn" />   <span aria-live="polite" id="boost-sd__bis-email-error" class="boost-sd__bis-email-error">Vui lòng nhập địa chỉ email hợp lệ</span>   <!-- SMS Input -->   <label for="boost-sd__bis-phone-input" class="boost-sd__bis-phone-label">SMS</label>   <div class="boost-sd__bis-phone-container">    <button type="button" aria-haspopup="listbox" class="boost-sd__bis-phone-button">     <img id="boost-sd__bis-phone-selected-flag" class="boost-sd__bis-phone-selected-flag" src="{{ 'https://flagcdn.com/ca.svg' | asset_url }}" alt="Canada">     <svg width="8" height="12" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">      <path d="M7.09832 3.98e-07L0.901685 -1.43e-07C0.15069 -2.09e-07 -0.269991 0.75351 0.193991 1.2676L3.29231 4.70055C3.65265 5.09982 4.34735 5.09982 4.70769 4.70055L7.80601 1.2676C8.26999 0.753511 7.84931 4.63e-07 7.09832 3.98e-07Z" fill="#222222" />     </svg>    </button>    <input type="tel" aria-describedby="boost-sd__bis-phone-error" id="boost-sd__bis-phone-input" class="boost-sd__bis-phone-input" placeholder="(+1) XXX-XXXX" data-country-code="+1" data-country-format="(XXX) XXX-XXXX">   </div>   <div aria-expanded="false" class="boost-sd__bis-phone-dropdown" id="boost-sd__bis-phone-dropdown">    <input type="text" id="boost-sd__bis-search-country" class="boost-sd__bis-search-country" placeholder="Tìm kiếm quốc gia...">    <div id="boost-sd__bis-country-options" class="boost-sd__bis-country-options"></div>   </div>   <span aria-live="polite" id="boost-sd__bis-phone-error" class="boost-sd__bis-phone-error">Vui lòng nhập số điện thoại hợp lệ</span>   <!-- Submit Button -->   <button aria-disabled="true" id="boost-sd__bis-submit-button" class="boost-sd__bis-submit-button" disabled>    Notify me when available   </button>  </div></div></div><!-- Success Banner --><div aria-hidden="true" aria-live="polite" id="boost-sd__bis-success-banner" class="boost-sd__bis-success-banner"><svg id="boost-sd__bis-success-banner-icon" class="boost-sd__bis-success-banner-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0C4.486 0 0 4.486 0 10ZM15.2071 8.20711C15.5976 7.81658 15.5976 7.18342 15.2071 6.79289C14.8166 6.40237 14.1834 6.40237 13.7929 6.79289L9 11.5858L6.70711 9.29289C6.31658 8.90237 5.68342 8.90237 5.29289 9.29289C4.90237 9.68342 4.90237 10.3166 5.29289 10.7071L8.29289 13.7071C8.68342 14.0976 9.31658 14.0976 9.70711 13.7071L15.2071 8.20711Z" fill="white" /></svg><span id="boost-sd__bis-success-banner-text" class="boost-sd__bis-success-banner-text">Chúng tôi sẽ gửi thông báo cho bạn ngay khi có hàng</span></div>`;
        
      
      
      
        
    ;template["countdownTimer"]=`<!-- TEMPLATE COUNTDOWN TIMER INLINE --><div class="boost-sd__countdown-timer" data-campaign-id="{{ campaignId }}" {% if cta.type == 'entire' and cta.link %} data-timer-cta-link="{{ cta.link | escape }}" role="link" tabindex="0" aria-label="{{ header | strip_html | escape }}" style="cursor: pointer;" {% endif %}><div class="boost-sd__countdown-timer-content">  {% if header != blank %}  <div class="boost-sd__countdown-timer-header">   {{ header | strip_html | escape }}  </div>  {% endif %}  {% if upsellTitle != blank %}  <div class="boost-sd__countdown-timer-upsell">   {{ upsellTitle | strip_html | escape }}  </div>  {% endif %} </div><div class="boost-sd__countdown-timer-digits" role="timer" aria-live="off" aria-atomic="true" aria-label="Countdown timer">  <div class="boost-sd__countdown-timer-unit {% if hideDays %}boost-sd__countdown-timer-unit--hidden{% endif %}" data-timer-unit-days>   <span class="boost-sd__countdown-timer-value" data-timer-days>{{ days }}</span>   <span class="boost-sd__countdown-timer-label">{{ labels.days }}</span>  </div>  <span class="boost-sd__countdown-timer-separator {% if hideDays %}boost-sd__countdown-timer-separator--hidden{% endif %}" data-timer-separator-days aria-hidden="true">:</span>  <div class="boost-sd__countdown-timer-unit">   <span class="boost-sd__countdown-timer-value" data-timer-hours>{{ hours }}</span>   <span class="boost-sd__countdown-timer-label">{{ labels.hours | escape }}</span>  </div>  <span class="boost-sd__countdown-timer-separator" aria-hidden="true">:</span>  <div class="boost-sd__countdown-timer-unit">   <span class="boost-sd__countdown-timer-value" data-timer-minutes>{{ minutes }}</span>   <span class="boost-sd__countdown-timer-label">{{ labels.minutes | escape }}</span>  </div>  <span class="boost-sd__countdown-timer-separator" aria-hidden="true">:</span>  <div class="boost-sd__countdown-timer-unit">   <span class="boost-sd__countdown-timer-value" data-timer-seconds>{{ seconds }}</span>   <span class="boost-sd__countdown-timer-label">{{ labels.seconds | escape }}</span>  </div></div> {% if cta.type == 'button' and cta.link %} <div class="boost-sd__countdown-timer-cta">  <a href="{{ cta.link | escape }}" class="boost-sd__button boost-sd__countdown-timer-button">   {{ cta.buttonText | escape }}  </a></div> {% endif %}</div>`;
        
      
      
      
        
    ;template["countdownTimerPlaceholder"]=`<!-- TEMPLATE COUNTDOWN TIMER PLACEHOLDER --><div class="boost-sd__countdown-timer-pl"><div class="boost-sd__countdown-timer-pl-title skeleton">&nbsp;</div><div class="boost-sd__countdown-timer-pl-subtitle skeleton">&nbsp;</div><div class="boost-sd__countdown-timer-pl-digits">  <div class="boost-sd__countdown-timer-pl-box">   <div class="boost-sd__countdown-timer-pl-number skeleton">&nbsp;</div>   <div class="boost-sd__countdown-timer-pl-label skeleton">&nbsp;</div>  </div>  <div class="boost-sd__countdown-timer-pl-separator">:</div>  <div class="boost-sd__countdown-timer-pl-box">   <div class="boost-sd__countdown-timer-pl-number skeleton">&nbsp;</div>   <div class="boost-sd__countdown-timer-pl-label skeleton">&nbsp;</div>  </div>  <div class="boost-sd__countdown-timer-pl-separator">:</div>  <div class="boost-sd__countdown-timer-pl-box">   <div class="boost-sd__countdown-timer-pl-number skeleton">&nbsp;</div>   <div class="boost-sd__countdown-timer-pl-label skeleton">&nbsp;</div>  </div>  <div class="boost-sd__countdown-timer-pl-separator">:</div>  <div class="boost-sd__countdown-timer-pl-box">   <div class="boost-sd__countdown-timer-pl-number skeleton">&nbsp;</div>   <div class="boost-sd__countdown-timer-pl-label skeleton">&nbsp;</div>  </div></div><div class="boost-sd__countdown-timer-pl-button skeleton">&nbsp;</div></div><style> .boost-sd__countdown-timer-pl {  width: 100%;  max-width: 920px;  margin: 0 auto;  background: #f8f8f8;  border: 1px solid #dedede;  border-radius: 20px;  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);  padding: 24px 24px 20px;  text-align: center; } .boost-sd__countdown-timer-pl .skeleton {  position: relative;  overflow: hidden;  background: #dcdcdc; } .boost-sd__countdown-timer-pl .skeleton::after {  content: "";  position: absolute;  inset: 0;  transform: translateX(-100%);  background: linear-gradient(90deg,    rgba(255, 255, 255, 0) 0%,    rgba(255, 255, 255, 0.65) 50%,    rgba(255, 255, 255, 0) 100%);  animation: boost-sd-countdown-shimmer 1.4s infinite; } .boost-sd__countdown-timer-pl-title {  width: 220px;  height: 28px;  border-radius: 8px;  margin: 0 auto 8px; } .boost-sd__countdown-timer-pl-subtitle {  width: 150px;  height: 20px;  border-radius: 8px;  margin: 0 auto 20px; } .boost-sd__countdown-timer-pl-digits {  display: flex;  align-items: center;  justify-content: center;  gap: 4px; } .boost-sd__countdown-timer-pl-box {  flex: 1 1 0;  min-width: 60px;  max-width: 130px;  aspect-ratio: 11 / 9;  background: linear-gradient(180deg, #e8e8e8 0%, #ffffff 100%);  border-radius: 20px;  border: 1px solid #ececec;  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.55);  display: flex;  flex-direction: column;  align-items: center;  justify-content: center;  gap: 12px;  padding: 15px 0; } .boost-sd__countdown-timer-pl-separator {  font-weight: 400;  font-size: 20px;  line-height: 1;  color: #2a2a2a;  transform: translateY(-8px); } .boost-sd__countdown-timer-pl-number {  width: 50px;  height: 32px;  border-radius: 8px; } .boost-sd__countdown-timer-pl-label {  width: 40px;  height: 14px;  border-radius: 6px; } .boost-sd__countdown-timer-pl-button {  width: 100%;  height: 40px;  border-radius: 8px;  margin: 16px auto 0; } @keyframes boost-sd-countdown-shimmer {  100% {   transform: translateX(100%);  } } @media (max-width: 768px) {  .boost-sd__countdown-timer-pl {   padding: 16px 10px;  }  .boost-sd__countdown-timer-pl-subtitle {   margin: 0 auto 10px;  }  .boost-sd__countdown-timer-pl-separator {   transform: translateY(-10px);  } } @media (max-width: 520px) {  .boost-sd__countdown-timer-pl-separator {   display: none;  }  .boost-sd__countdown-timer-pl-title {   width: 180px;   height: 24px;  }  .boost-sd__countdown-timer-pl-subtitle {   width: 120px;   height: 16px;  } }</style>`;
        
      
    ;return{templateUrl:"https://services.mybcapps.com/bc-sf-filter/ssr-template",templateId,templateMetadata,template,templateSettings}}};TemplateManagement.moduleName="TemplateManagement";var TierDiscountBundle=class extends BoostTAEAppModule{constructor(){super(...arguments);this.initBlock=()=>{const tierDiscountBundleDom=document.querySelector(".boost-sd__widget-tier-discount-bundle");if(!tierDiscountBundleDom){return}this.block={id:tierDiscountBundleDom.id||"bc-tier-discount-bundle",document:tierDiscountBundleDom};this.backwardCompatibilityV1Module?.legacyAssignDefaultBlockAttributes(this.block,tierDiscountBundleDom,"tierDiscountBundle");this.TAEApp.registerBlock(this.block)}}get backwardCompatibilityV1Module(){return this.TAEApp.getModule(BackwardCompatibilityV1)}onModuleInit(){document.addEventListener("DOMContentLoaded",this.initBlock)}onModuleDestroy(){document.removeEventListener("DOMContentLoaded",this.initBlock)}};TierDiscountBundle.moduleName="TierDiscountBundle";var VolumeBundle=class extends BoostTAEAppModule{constructor(){super(...arguments);this.initBlock=()=>{const volumeBundleDom=document.querySelector(".boost-sd__widget-volume-bundle");if(!volumeBundleDom){return}this.block={id:volumeBundleDom.id||"bc-volume-bundle",document:volumeBundleDom};this.backwardCompatibilityV1Module?.legacyAssignDefaultBlockAttributes(this.block,volumeBundleDom,"volumeBundle");this.TAEApp.registerBlock(this.block)}}get backwardCompatibilityV1Module(){return this.TAEApp.getModule(BackwardCompatibilityV1)}onModuleInit(){document.addEventListener("DOMContentLoaded",this.initBlock)}onModuleDestroy(){document.removeEventListener("DOMContentLoaded",this.initBlock)}};VolumeBundle.moduleName="VolumeBundle";var application=new Application().loadModule(AppSettings).loadModule(ShopifyDataObject).loadModule(ShopifyMetafield).loadModule(TemplateManagement).loadModule(CollectionFilter).loadModule(AdditionalElement).loadModule(Search).loadModule(Recommendation).loadModule(Cart).loadModule(Analytics).loadModule(B2B).loadModule(BackInStock).loadModule(VolumeBundle).loadModule(TierDiscountBundle).loadModule(PredictiveBundle).loadModule(PreOrder).loadModule(CountdownTimer).loadModule(SimplifiedIntegration).loadModule(SEOEnhancement).loadModule(Fallback).loadModule(AssetFilesLoader).loadModule(BackwardCompatibilityV1);application.start();function getBoostTAE(){return application}})();</script><style>.boost-sd__filter-product-list img[loading=lazy]{display:none}</style><!-- END app block --><script src="<?php echo get_template_directory_uri(); ?>/assets/js/popup-block_d8cfef3c2a.js" type="text/javascript" defer></script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/popup-block_5049a65038.css" rel="stylesheet" type="text/css" media="all">







<style id="smith-render-fix">
    html, body {
        opacity: 1 !important;
        visibility: visible !important;
        background-color: #ffffff !important;
    }
    img {
        display: inline-block;
    }
</style>

<?php
// Yoast đã xuất title SEO; không để WordPress core in thêm title thứ hai.
if (defined('WPSEO_VERSION')) remove_action('wp_head', '_wp_render_title_tag', 1);
wp_head();
?>
</head><body class="gradient animate--hover-default template-index market-us">
<?php wp_body_open(); ?>

    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Chuyển đến nội dung chính
    </a><!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--23416231264494__header" class="shopify-section shopify-section-group-header-group section-header"><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/component-list-menu_ee5b2f3755.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/component-search_dfb9dc1357.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/component-menu-drawer_830e9c8340.css?ver=<?php echo rawurlencode(SMITH_THEME_VERSION); ?>" media="print" onload="this.media='all'">
<style id="smith-mobile-drawer-scroll-fix">
  @media (max-width: 1199px) {
    #Details-menu-drawer-container[open] > #menu-drawer {
      display: flex !important;
      flex-direction: column !important;
      position: fixed !important;
      inset: 0 !important;
      width: 100vw !important;
      height: 100dvh !important;
      max-height: 100dvh !important;
      z-index: 9999 !important;
      overflow: hidden !important;
    }
    #Details-menu-drawer-container[open] > #menu-drawer > .menu-drawer__drawer-header {
      flex: 0 0 auto !important;
    }
    #Details-menu-drawer-container[open] > #menu-drawer > .menu-drawer__inner-container {
      flex: 1 1 auto !important;
      min-height: 0 !important;
      height: calc(100dvh - 52px) !important;
      max-height: calc(100dvh - 52px) !important;
      position: relative !important;
      overflow: hidden !important;
    }
    #menu-drawer .menu-drawer__navigation-container {
      height: 100% !important;
      max-height: 100% !important;
      overflow-y: auto !important;
      -webkit-overflow-scrolling: touch !important;
      overscroll-behavior: contain !important;
      padding-bottom: max(3.5rem, env(safe-area-inset-bottom, 2.5rem)) !important;
    }
    #menu-drawer .menu-drawer__submenu {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
      bottom: 0 !important;
      background-color: rgb(var(--color-background)) !important;
      z-index: 2 !important;
      overflow: hidden !important;
    }
    #menu-drawer .menu-drawer__inner-submenu {
      height: 100% !important;
      max-height: 100% !important;
      overflow-y: auto !important;
      -webkit-overflow-scrolling: touch !important;
      overscroll-behavior: contain !important;
      display: flex !important;
      flex-direction: column !important;
    }
    #menu-drawer .menu-drawer__close-button {
      position: sticky !important;
      top: 0 !important;
      z-index: 5 !important;
      background-color: rgb(var(--color-background)) !important;
      flex: 0 0 auto !important;
      margin-top: 0 !important;
    }
    #menu-drawer .menu-drawer__submenu .menu-drawer__menu {
      flex: 1 1 auto !important;
      overflow-y: visible !important;
      padding-bottom: max(3.5rem, env(safe-area-inset-bottom, 2.5rem)) !important;
    }
  }
</style>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/component-cart-notificati_f270a5a0da.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/component-mini-cart_ab3b575a11.css" media="print" onload="this.media='all'"><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/component-mega-menu_1f7d933e1c.css" media="print" onload="this.media='all'">

  

  

  

  

  


<style>
  .list-menu__item--last summary > .header-item-link-or-text {
    margin-left: 0.5rem;
  }

  .list-menu__item--last summary > .header-item-link-or-text span {
    border-left: 1px solid rgb(var(--color-foreground));
    padding-left: 2.1rem;
  }

  @media (max-width: 1439px) {
    .market-germany .list-menu__item--last summary > .header-item-link-or-text,
    .market-austria .list-menu__item--last summary > .header-item-link-or-text {
      margin-left: 0.5rem;
    }

    .market-germany .list-menu__item--last summary > .header-item-link-or-text span,
    .market-austria .list-menu__item--last summary > .header-item-link-or-text span {
      padding-left: 1.2rem;
    }
  }

  header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
    padding: 0 15px;
    height: 4.4rem;
    background-color: rgb(var(--color-background));
  }

   header-drawer summary.header__icon--menu {
    padding-top: 0;
    padding-bottom: 0;
  }@media screen and (min-width: 1200px) {
      header-drawer {
        display: none;
      }
    }.menu-drawer-container {
    display: flex;
  }

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
    height: 100%;
  }

  .list-menu--inline details {
    height: 100%;
  }

  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
    height: 100%;
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  .flag-icon {
    position: relative;
    width: 1.9rem;
    line-height: 1.6rem;
    background-size: contain;
    background-repeat: no-repeat;
    display: inline-block;
    background-position: 50%;
    font-size: 1.4rem;
    vertical-align: middle;
  }

  .flag-icon::before {
    content: "";
  }

  .flag-icon-us {
    background-image: url('//www.smithoptics.com/cdn/shop/t/401/assets/flag-us.svg?v=91380558990351122511788382343');
  }

  .flag-icon-vn {
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 600"><rect width="900" height="600" fill="%23da251d"/><polygon points="450,120 487,234 607,234 510,305 547,420 450,349 353,420 390,305 293,234 413,234" fill="%23ffff00"/></svg>');
  }

  @media screen and (min-width: 1200px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
</style><style data-shopify="">.header {
    padding: 16px 1.5rem 16px 3rem;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }

  @media screen and (max-width: 1199px) {
    .header {
      padding: 0;
    }

    .header__heading {
      padding: 0 3rem;
    }
  }

  @media screen and (min-width: 1200px) {
    .header {
      height: 8.5rem;
    }

    .section-header {
      margin-bottom: 0px;
    }
  }

  @media screen and (min-width: 1200px) {
    .header {
      padding-top: 0;
      padding-bottom: 0;
    }
  }</style><script src="<?php echo get_template_directory_uri(); ?>/assets/js/cart_735bc78e29.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/cart-notification_4f133a7af2.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/mini-cart_99bfb614e8.js" defer></script>


  

  

  

  

  



<sticky-header data-sticky-type="always" class="header-wrapper color-scheme-1 gradient header-wrapper--border-bottom"><style>
    .flag-icon::before {
      content: ' ';
      display: block;
      width: 24px;
      height: 24px;
    }
  </style>

  <header>
    <div class="header-top">
      <div class="header-utils">
        
<span class="country-display-static text-sub-sm uppercase mb-1" style="display: inline-flex; align-items: center; gap: 6px; cursor: default; font-weight: 600; color: #181818; margin-right: 1.5rem;">
            <i class="flag-icon flag-icon-vn" style="box-shadow: 0 0 1px rgba(0,0,0,0.3); border-radius: 2px;"></i>
            <span class="text">VIỆT NAM</span>
          </span><a href="/trang/tim-cua-hang" class="text-sub-sm uppercase mb-1 hover:text-green!" style="margin-right: 1.5rem;">
            Tìm cửa hàng
          </a></div>
    </div>
    <div class="header header--middle-left header--mobile-center header--has-menu header--has-social header--has-account header--has-localizations">

<header-drawer data-breakpoint="tablet">
  <details id="Details-menu-drawer-container" class="menu-drawer-container">
    <summary class="header__icon header__icon--hamburger header__icon--menu header__icon--summary focus-inset" aria-label="Menu">
      <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-hamburger" viewbox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M3 4.75a.75.75 0 0 1 .75-.75h12.5a.75.75 0 0 1 0 1.5h-12.5a.75.75 0 0 1-.75-.75Z"></path><path fill="currentColor" fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h12.5a.75.75 0 0 1 0 1.5h-12.5a.75.75 0 0 1-.75-.75Z"></path><path fill="currentColor" fill-rule="evenodd" d="M3 15.25a.75.75 0 0 1 .75-.75h12.5a.75.75 0 0 1 0 1.5h-12.5a.75.75 0 0 1-.75-.75Z"></path></svg></span>
    </summary>
    <div id="menu-drawer" class="gradient menu-drawer motion-reduce color-scheme-1">
      <div class="menu-drawer__drawer-header"><div class="menu-drawer__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/smith-logo-desktop_ca5ba2fbd6.svg" alt="Smith Optics" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/smith-logo-desktop_c2cf15806a.svg 352w, <?php echo get_template_directory_uri(); ?>/assets/images/smith-logo-desktop_ca5ba2fbd6.svg 600w" width="600" height="148" loading="eager" class="header__heading-logo motion-reduce">
          </div><button class="close-menu header__icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-close" width="40" height="40" viewbox="0 0 40 40" fill="none">
  <path d="M28 28L12 12" stroke="currentColor" stroke-width="3" stroke-miterlimit="10" stroke-linecap="square"></path>
  <path d="M28 12L12 28" stroke="currentColor" stroke-width="3" stroke-miterlimit="10" stroke-linecap="square"></path>
</svg></button>
      </div>
      <div class="menu-drawer__inner-container">
        <div class="menu-drawer__navigation-container">
          <nav class="menu-drawer__navigation">
            <ul class="menu-drawer__menu has-submenu list-menu" role="list"><li><details id="Details-menu-drawer-menu-item-1">
                      <summary id="HeaderDrawer-featured" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                        Nổi bật
                        <span class="svg-wrapper menu-drawer__icon-chevron-right"><svg class="icon icon-chevron-right" fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"></path></svg></span>
                      </summary>
                      <div id="link-featured" class="menu-drawer__submenu has-submenu gradient motion-reduce" tabindex="-1">
                        <div class="menu-drawer__inner-submenu">
                          <button class="menu-drawer__close-button link link--text focus-inset text-sub-sm!" aria-expanded="true">
                            <span class="svg-wrapper menu-drawer__icon-chevron-right "><svg class="icon icon-chevron-right" fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"></path></svg></span>
                            Thể thao
                          </button>
                          <ul class="menu-drawer__menu list-menu" role="list" tabindex="-1"><li><a id="HeaderDrawer-sport-fishing" href="/bo-suu-tap/cau-ca" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Câu cá
                                  </a></li><li><a id="HeaderDrawer-sport-mountain-biking" href="/bo-suu-tap/xe-dap-leo-nui" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Xe đạp địa hình
                                  </a></li><li><a id="HeaderDrawer-sport-road-gravel-cycling" href="/bo-suu-tap/xe-dap-road-gravel" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Xe đạp đường trường &amp; gravel
                                  </a></li><li><a id="HeaderDrawer-sport-snow" href="/bo-suu-tap/truot-tuyet" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Thể thao tuyết
                                  </a></li><li><a id="HeaderDrawer-sport-running" href="/bo-suu-tap/chay-bo" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Chạy bộ
                                  </a></li><li><a id="HeaderDrawer-sport-beach-everyday" href="/bo-suu-tap/luot-song" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Biển &amp; hằng ngày
                                  </a></li><li><a id="HeaderDrawer-sport-hiking" href="/bo-suu-tap/leo-nui-da-ngoai" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Đi bộ đường dài
                                  </a></li></ul>
                        </div>
                      </div>
                    </details></li>
                    <li><details id="Details-menu-drawer-eyewear">
                      <summary id="HeaderDrawer-eyewear" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">Kính mắt <span class="svg-wrapper menu-drawer__icon-chevron-right"><svg class="icon icon-chevron-right" fill="none" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"/></svg></span></summary>
                      <div class="menu-drawer__submenu has-submenu gradient motion-reduce" tabindex="-1"><div class="menu-drawer__inner-submenu">
                        <button class="menu-drawer__close-button link link--text focus-inset" aria-expanded="true"><span class="svg-wrapper menu-drawer__icon-chevron-right"><svg class="icon icon-chevron-right" fill="none" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"/></svg></span>Kính mắt</button>
                        <ul class="menu-drawer__menu list-menu" role="list"><li><a href="/bo-suu-tap/kinh-ram" class="menu-drawer__menu-item link link--text list-menu__item">Kính râm</a></li><li><a href="/bo-suu-tap/kinh-co-do" class="menu-drawer__menu-item link link--text list-menu__item">Kính có độ</a></li><li><a href="/bo-suu-tap/kinh-mat" class="menu-drawer__menu-item link link--text list-menu__item">Xem tất cả kính mắt</a></li></ul>
                      </div></div>
                    </details></li>
                    <li><details id="Details-menu-drawer-helmets">
                      <summary id="HeaderDrawer-helmets" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">Mũ bảo hiểm <span class="svg-wrapper menu-drawer__icon-chevron-right"><svg class="icon icon-chevron-right" fill="none" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"/></svg></span></summary>
                      <div class="menu-drawer__submenu has-submenu gradient motion-reduce" tabindex="-1"><div class="menu-drawer__inner-submenu"><button class="menu-drawer__close-button link link--text focus-inset" aria-expanded="true"><span class="svg-wrapper menu-drawer__icon-chevron-right"><svg class="icon icon-chevron-right" fill="none" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"/></svg></span>Mũ bảo hiểm</button><ul class="menu-drawer__menu list-menu" role="list"><li><a href="/bo-suu-tap/mu-bao-hiem-xe-dap" class="menu-drawer__menu-item link link--text list-menu__item">Mũ bảo hiểm xe đạp</a></li><li><a href="/bo-suu-tap/mu-bao-hiem-truot-tuyet" class="menu-drawer__menu-item link link--text list-menu__item">Mũ bảo hiểm tuyết</a></li><li><a href="/bo-suu-tap/mu-bao-hiem" class="menu-drawer__menu-item link link--text list-menu__item">Xem tất cả mũ bảo hiểm</a></li></ul></div></div>
                    </details></li>
                    <li><details id="Details-menu-drawer-goggles">
                      <summary id="HeaderDrawer-goggles" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">Kính bảo hộ <span class="svg-wrapper menu-drawer__icon-chevron-right"><svg class="icon icon-chevron-right" fill="none" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"/></svg></span></summary>
                      <div class="menu-drawer__submenu has-submenu gradient motion-reduce" tabindex="-1"><div class="menu-drawer__inner-submenu"><button class="menu-drawer__close-button link link--text focus-inset" aria-expanded="true"><span class="svg-wrapper menu-drawer__icon-chevron-right"><svg class="icon icon-chevron-right" fill="none" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"/></svg></span>Kính bảo hộ</button><ul class="menu-drawer__menu list-menu" role="list"><li><a href="/bo-suu-tap/kinh-bao-ho-truot-tuyet" class="menu-drawer__menu-item link link--text list-menu__item">Kính bảo hộ tuyết</a></li><li><a href="/bo-suu-tap/kinh-bao-ho-xe-dap" class="menu-drawer__menu-item link link--text list-menu__item">Kính bảo hộ xe đạp</a></li><li><a href="/bo-suu-tap/kinh-bao-ho" class="menu-drawer__menu-item link link--text list-menu__item">Xem tất cả kính bảo hộ</a></li></ul></div></div>
                    </details></li>
                    <li><a id="HeaderDrawer-apparel" href="/bo-suu-tap/trang-phuc" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">Trang phục</a></li>
                    <li><a id="HeaderDrawer-accessories" href="/bo-suu-tap/phu-kien" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">Phụ kiện</a></li>
                    <li><details id="Details-menu-drawer-sport"><summary id="HeaderDrawer-sport" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">Thể thao <span class="svg-wrapper menu-drawer__icon-chevron-right"><svg class="icon icon-chevron-right" fill="none" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"/></svg></span></summary><div class="menu-drawer__submenu has-submenu gradient motion-reduce" tabindex="-1"><div class="menu-drawer__inner-submenu"><button class="menu-drawer__close-button link link--text focus-inset" aria-expanded="true"><span class="svg-wrapper menu-drawer__icon-chevron-right"><svg class="icon icon-chevron-right" fill="none" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"/></svg></span>Thể thao</button><ul class="menu-drawer__menu list-menu" role="list"><li><a href="/bo-suu-tap/cau-ca" class="menu-drawer__menu-item link link--text list-menu__item">Câu cá</a></li><li><a href="/bo-suu-tap/xe-dap-leo-nui" class="menu-drawer__menu-item link link--text list-menu__item">Xe đạp địa hình</a></li><li><a href="/bo-suu-tap/truot-tuyet" class="menu-drawer__menu-item link link--text list-menu__item">Thể thao tuyết</a></li><li><a href="/bo-suu-tap/chay-bo" class="menu-drawer__menu-item link link--text list-menu__item">Chạy bộ</a></li></ul></div></div></details></li>
                    <li><a id="HeaderDrawer-sale" href="/bo-suu-tap/giam-gia" class="menu-drawer__menu-item list-menu__item link link--text focus-inset "><span class="text-black! py-1 ">Giảm giá</span></a></li><li><details id="Details-menu-drawer-menu-item-9">
                      <summary id="HeaderDrawer-explore" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                        Khám phá
                        <span class="svg-wrapper menu-drawer__icon-chevron-right"><svg class="icon icon-chevron-right" fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"></path></svg></span>
                      </summary>
                      <div id="link-explore" class="menu-drawer__submenu has-submenu gradient motion-reduce" tabindex="-1">
                        <div class="menu-drawer__inner-submenu">
                          <button class="menu-drawer__close-button link link--text focus-inset text-sub-sm!" aria-expanded="true">
                            <span class="svg-wrapper menu-drawer__icon-chevron-right "><svg class="icon icon-chevron-right" fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"></path></svg></span>
                            Khám phá
                          </button>
                          <ul class="menu-drawer__menu list-menu" role="list" tabindex="-1"><li><a id="HeaderDrawer-explore-athletes" href="/trang/van-dong-vien" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Vận động viên
                                  </a></li><li><a id="HeaderDrawer-explore-stories" href="/bai-viet" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Câu chuyện
                                  </a></li><li><a id="HeaderDrawer-explore-technologies" href="/trang/cong-nghe" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Công nghệ
                                  </a></li><li><a id="HeaderDrawer-explore-smith-cycling" href="/trang/smith-xe-dap" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Smith Xe Đạp
                                  </a></li><li><a id="HeaderDrawer-explore-smith-snow" href="/trang/smith-truot-tuyet" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Smith Trượt Tuyết
                                  </a></li><li><a id="HeaderDrawer-explore-60-years-of-smith" href="/trang/ve-chung-toi" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    60 Năm Di Sản SMITH
                                  </a></li><li><a id="HeaderDrawer-explore-smith-x-quoc" href="/trang/smith-x-quoc" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Hợp tác SMITH x QUOC
                                  </a></li><li><a id="HeaderDrawer-explore-the-forecast" href="/trang/du-bao-the-forecast" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Dự báo thời tiết
                                  </a></li><li><a id="HeaderDrawer-explore-pyt-oaxaca" href="/trang/theo-duoi-dam-me-oaxaca" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Đam Mê - Oaxaca
                                  </a></li><li><a id="HeaderDrawer-explore-pyt-outer-banks" href="/trang/theo-duoi-dam-me-outer-banks" class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                    Đam Mê - Outer Banks
                                  </a></li></ul>
                        </div>
                      </div>
                    </details></li><li>
                  <a class="menu-drawer__menu-item list-menu__item link link--text focus-inset text-sub-sm! uppercase! " href="/trang/tim-cua-hang">
                    Tìm cửa hàng
                  </a>
                </li><li>
                  <div class="localization-selection-link menu-drawer__menu-item list-menu__item link link--text focus-inset" style="display: inline-flex; align-items: center; gap: 8px; cursor: default; font-weight: 600; pointer-events: none;">
                    <i class="flag-icon flag-icon-vn" style="box-shadow: 0 0 1px rgba(0,0,0,0.3); border-radius: 2px;"></i>
                    <span class="text">VIỆT NAM</span>
                  </div>
                </li></ul>
          </nav>
        </div>
      </div>
    </div>
  </details>
</header-drawer>
<h1 class="header__heading"><a href="/" class="header__heading-link link link--text focus-inset"><div class="header__heading-logo-wrapper">
              
              <picture><source media="(max-width: 1199px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/smith-logo-mobile_c64040eeb7.svg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/smith-logo-desktop_ca5ba2fbd6.svg" alt="Smith Optics" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/smith-logo-desktop_fbd87b1852.svg 130w, <?php echo get_template_directory_uri(); ?>/assets/images/smith-logo-desktop_88e13d8757.svg 195w, <?php echo get_template_directory_uri(); ?>/assets/images/smith-logo-desktop_e7ecb46c30.svg 260w" width="130" height="31.967213114754102" loading="eager" class="header__heading-logo motion-reduce" sizes="(max-width: 1199px) 72px, 130px">
              </source></picture>
            </div></a></h1>

<nav class="header__inline-menu hybrid-menu">
  <ul class="list-menu list-menu--inline" role="list"><li>
        
<header-menu>
              <details id="Details-HeaderMenu-1" class="mega-menu">
                <summary id="HeaderMenu-featured" class="header__menu-item list-menu__item link focus-inset text-base!">
                  <a href="/bo-suu-tap/san-pham-moi" class="header-item-link-or-text link--text">
                    <span>Nổi bật</span>
                  </a>
                </summary>
                <div id="MegaMenu-Content-1" class="mega-menu__content color-scheme-1 gradient motion-reduce" tabindex="-1">
                  <ul class="mega-menu__list page-width" role="list">
                      <li>
                        <a id="HeaderMenu-featured-in-the-spotlight" href="/" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Tiêu điểm
                        </a><ul class="list-unstyled" role="list"><li>
                                <a id="HeaderMenu-featured-in-the-spotlight-new-arrivals" href="/bo-suu-tap/san-pham-moi" class="mega-menu__link link text-sm!">
                                  Sản phẩm mới
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-in-the-spotlight-best-sellers" href="/bo-suu-tap/san-pham-ban-chay" class="mega-menu__link link text-sm!">
                                  Sản phẩm bán chạy
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-in-the-spotlight-gift-cards" href="/san-pham/the-qua-tang" class="mega-menu__link link text-sm!">
                                  Thẻ quà tặng
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-in-the-spotlight-sale" href="/bo-suu-tap/giam-gia" class="mega-menu__link link text-sm!">
                                  Giảm giá
                                </a>
                              </li></ul></li>
                      <li>
                        <a id="HeaderMenu-featured-collections" href="/" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Bộ sưu tập
                        </a><ul class="list-unstyled" role="list"><li>
                                <a id="HeaderMenu-featured-collections-4d-mag-series" href="/bo-suu-tap/dong-san-pham-4d-mag" class="mega-menu__link link text-sm!">
                                  Dòng sản phẩm 4D MAG
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-collections-guides-choice" href="/bo-suu-tap/bo-suu-tap-guides-choice" class="mega-menu__link link text-sm!">
                                  Lựa chọn của chuyên gia
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-collections-smith-x-quoc" href="/trang/smith-x-quoc" class="mega-menu__link link text-sm!">
                                  SMITH x QUOC
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-collections-archive-collection" href="/bo-suu-tap/bo-suu-tap-di-san" class="mega-menu__link link text-sm!">
                                  Bộ sưu tập Di sản
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-collections-lowdown-collection" href="/bo-suu-tap/bo-suu-tap-lowdown" class="mega-menu__link link text-sm!">
                                  Bộ sưu tập Lowdown
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-collections-core-collection" href="/bo-suu-tap/bo-suu-tap-cot-loi" class="mega-menu__link link text-sm!">
                                  Bộ sưu tập Cốt lõi
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-collections-ulterior-collection" href="/bo-suu-tap/bo-suu-tap-ulterior" class="mega-menu__link link text-sm!">
                                  Bộ sưu tập Ulterior
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-collections-shop-under-200" href="/bo-suu-tap/kinh-ram-duoi-200" class="mega-menu__link link text-sm!">
                                  Sản phẩm dưới 200 USD
                                </a>
                              </li></ul></li>
                      <li>
                        <a id="HeaderMenu-featured-technology" href="/" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Công nghệ
                        </a><ul class="list-unstyled" role="list"><li>
                                <a id="HeaderMenu-featured-technology-chromapop™-pro-photochromic" href="/bo-suu-tap/kinh-bao-ho?technology=ChromaPop+Pro+PhotoChromic" class="mega-menu__link link text-sm!">
                                  ChromaPop™ Pro PhotoChromic
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-technology-chromapop™-glass-polarchromic" href="/bo-suu-tap/kinh-ram-chromapop-glass-polarchromic" class="mega-menu__link link text-sm!">
                                  ChromaPop™ Glass PolarChromic
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-technology-chromapop™" href="/bo-suu-tap/kinh-ram-chromapop" class="mega-menu__link link text-sm!">
                                  ChromaPop™
                                </a>
                              </li><li>
                                <a id="HeaderMenu-featured-technology-photochromic" href="/bo-suu-tap/kinh-mat?technology=ChromaPop+PhotoChromic" class="mega-menu__link link text-sm!">
                                  PhotoChromic
                                </a>
                              </li></ul></li>
                      
<li class="mega-menu__feature-content"><section class="mega-menu__feature-content--body">
  <div class="mega-menu__feature-content--img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/asset_063b6b4ef8.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/asset_063b6b4ef8.jpg 285w" width="285" height="285" class="max-w-[unset]">
</div>
  <div class="mega-menu__feature-content--content">
    <h3 class="h5">
      Những Dặm Đường Tuyệt Vời Nhất Đang Chờ Đón
    </h3>

    <p class="leading-normal!">
      Sẵn sàng bứt phá với ưu đãi giảm 40% cho mũ bảo hiểm và kính đạp xe trước khi hết hàng.*
    </p><a href="/bo-suu-tap/giam-gia-xe-dap" class="btn btn-secondary mt-4 no-underline">
        Mua hàng giảm giá
      </a></div>
</section>
</li>
                      
                      

                      

                      

                  </ul>
                </div>
              </details>
              <div class="modal-overlay" aria-hidden="true"></div>
            </header-menu></li><li>
        
<header-menu>
              <details id="Details-HeaderMenu-2" class="mega-menu">
                <summary id="HeaderMenu-eyewear" class="header__menu-item list-menu__item link focus-inset text-base!">
                  <a href="/bo-suu-tap/kinh-mat" class="header-item-link-or-text link--text">
                    <span>Kính mắt</span>
                  </a>
                </summary>
                <div id="MegaMenu-Content-2" class="mega-menu__content color-scheme-1 gradient motion-reduce" tabindex="-1">
                  <ul class="mega-menu__list page-width" role="list">
                      <li>
                        <a id="HeaderMenu-eyewear-sunglasses" href="/bo-suu-tap/kinh-ram" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Kính râm
                        </a><ul class="list-unstyled" role="list"><li>
                                <a id="HeaderMenu-eyewear-sunglasses-best-sellers" href="/bo-suu-tap/kinh-ram-ban-chay" class="mega-menu__link link text-sm!">
                                  Sản phẩm bán chạy
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-sunglasses-sport-performance" href="/bo-suu-tap/kinh-ram-the-thao-hieu-nang-cao" class="mega-menu__link link text-sm!">
                                  Thể thao &amp; Hiệu năng
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-sunglasses-lifestyle" href="/bo-suu-tap/kinh-ram-lifestyle" class="mega-menu__link link text-sm!">
                                  Phong cách sống
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-sunglasses-photochromic" href="/bo-suu-tap/kinh-ram-photochromic" class="mega-menu__link link text-sm!">
                                  PhotoChromic
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-sunglasses-backcountry-sunglasses" href="/bo-suu-tap/kinh-ram-da-ngoai-backcountry" class="mega-menu__link link text-sm!">
                                  Kính râm dã ngoại
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-sunglasses-protective-eyewear" href="/bo-suu-tap/kinh-bao-ho-chuyen-dung" class="mega-menu__link link text-sm!">
                                  Kính bảo hộ chuyên dụng
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-sunglasses-replacement-lenses" href="/bo-suu-tap/trong-kinh-ram-thay-the" class="mega-menu__link link text-sm!">
                                  Tròng kính thay thế
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-sunglasses-shop-under-200" href="/bo-suu-tap/kinh-ram-duoi-200" class="mega-menu__link link text-sm!">
                                  Sản phẩm dưới 200 USD
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-sunglasses-shop-all-sunglasses" href="/bo-suu-tap/kinh-ram" class="mega-menu__link link text-sm!">
                                  Xem tất cả Kính râm
                                </a>
                              </li></ul></li>
                      <li>
                        <a id="HeaderMenu-eyewear-prescription" href="/bo-suu-tap/kinh-co-do" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Kính có độ
                        </a><ul class="list-unstyled" role="list"><li>
                                <a id="HeaderMenu-eyewear-prescription-prescription-sunglasses" href="/bo-suu-tap/kinh-ram-co-do" class="mega-menu__link link text-sm!">
                                  Kính râm có độ
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-prescription-prescription-glasses" href="/bo-suu-tap/kinh-can-co-do" class="mega-menu__link link text-sm!">
                                  Kính cận / Kính có độ
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-prescription-blue-light-glasses" href="/bo-suu-tap/kinh-chong-anh-sang-xanh" class="mega-menu__link link text-sm!">
                                  Kính lọc ánh sáng xanh
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-prescription-rx-sport-adapters" href="/bo-suu-tap/bo-chuyen-kinh-do-rx" class="mega-menu__link link text-sm!">
                                  Bộ chuyển kính thể thao Rx
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-prescription-how-it-works" href="/trang/kinh-mat-co-do" class="mega-menu__link link text-sm!">
                                  Cách thức hoạt động
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-prescription-shop-all-prescription" href="/bo-suu-tap/kinh-co-do" class="mega-menu__link link text-sm!">
                                  Xem tất cả Kính có độ
                                </a>
                              </li></ul></li>
                      <li>
                        <a id="HeaderMenu-eyewear-shop-all-eyewear" href="/bo-suu-tap/kinh-mat" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Xem tất cả Kính mắt
                        </a><ul class="list-unstyled" role="list"><li>
                                <a id="HeaderMenu-eyewear-shop-all-eyewear-find-your-perfect-fishing-lens" href="/trang/trac-nghiem-trong-kinh-cau-ca" class="mega-menu__link link text-sm!">
                                  Tìm tròng kính câu cá hoàn hảo
                                </a>
                              </li><li>
                                <a id="HeaderMenu-eyewear-shop-all-eyewear-sunglasses-finder-quiz" href="/trang/trac-nghiem-chon-kinh-ram" class="mega-menu__link link text-sm!">
                                  Trắc nghiệm chọn kính râm
                                </a>
                              </li></ul></li>
                      

                      
                      
<li class="mega-menu__feature-content"><section class="mega-menu__feature-content--body">
  <div class="mega-menu__feature-content--img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/asset_7106cacef6.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/asset_7106cacef6.jpg 285w" width="285" height="285" class="max-w-[unset]">
</div>
  <div class="mega-menu__feature-content--content">
    <h3 class="h5">
      Giới thiệu Riptide XL
    </h3>

    <p class="leading-normal!">
      Gọng kính cao cấp bạn luôn tin cậy trên mặt nước, nay có thêm kích cỡ lớn hơn.
    </p><a href="/san-pham/riptide-xl" class="btn btn-secondary mt-4 no-underline">
        Khám phá Riptide XL
      </a></div>
</section>
</li>
                      

                      

                  </ul>
                </div>
              </details>
              <div class="modal-overlay" aria-hidden="true"></div>
            </header-menu></li><li>
        
<header-menu>
              <details id="Details-HeaderMenu-3" class="mega-menu">
                <summary id="HeaderMenu-helmets" class="header__menu-item list-menu__item link focus-inset text-base!">
                  <a href="/bo-suu-tap/mu-bao-hiem" class="header-item-link-or-text link--text">
                    <span>Mũ bảo hiểm</span>
                  </a>
                </summary>
                <div id="MegaMenu-Content-3" class="mega-menu__content color-scheme-1 gradient motion-reduce" tabindex="-1">
                  <ul class="mega-menu__list page-width" role="list">
                      <li>
                        <a id="HeaderMenu-helmets-bike-helmets" href="/bo-suu-tap/mu-bao-hiem-xe-dap" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Mũ bảo hiểm Xe đạp
                        </a><ul class="list-unstyled" role="list"><li>
                                <a id="HeaderMenu-helmets-bike-helmets-mountain-biking" href="/bo-suu-tap/mu-bao-hiem-xe-dap-leo-nui" class="mega-menu__link link text-sm!">
                                  Xe đạp địa hình
                                </a>
                              </li><li>
                                <a id="HeaderMenu-helmets-bike-helmets-road-gravel" href="/bo-suu-tap/mu-bao-hiem-road-gravel" class="mega-menu__link link text-sm!">
                                  Đường trường &amp; Đường sỏi
                                </a>
                              </li><li>
                                <a id="HeaderMenu-helmets-bike-helmets-urban" href="/bo-suu-tap/mu-bao-hiem-xe-dap-do-thi" class="mega-menu__link link text-sm!">
                                  Đô thị
                                </a>
                              </li><li>
                                <a id="HeaderMenu-helmets-bike-helmets-kids-helmets" href="/bo-suu-tap/mu-xe-dap-tre-em" class="mega-menu__link link text-sm!">
                                  Mũ bảo hiểm trẻ em
                                </a>
                              </li><li>
                                <a id="HeaderMenu-helmets-bike-helmets-shop-all-bike-helmets" href="/bo-suu-tap/mu-bao-hiem-xe-dap" class="mega-menu__link link text-sm!">
                                  Xem tất cả Mũ xe đạp
                                </a>
                              </li></ul></li>
                      <li>
                        <a id="HeaderMenu-helmets-snow-helmets" href="/bo-suu-tap/mu-bao-hiem-truot-tuyet" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Mũ bảo hiểm Trượt tuyết
                        </a><ul class="list-unstyled" role="list"><li>
                                <a id="HeaderMenu-helmets-snow-helmets-all-mountain" href="/bo-suu-tap/mu-truot-tuyet-all-mountain" class="mega-menu__link link text-sm!">
                                  Đa địa hình
                                </a>
                              </li><li>
                                <a id="HeaderMenu-helmets-snow-helmets-freestyle" href="/bo-suu-tap/mu-truot-tuyet-freestyle" class="mega-menu__link link text-sm!">
                                  Tự do
                                </a>
                              </li><li>
                                <a id="HeaderMenu-helmets-snow-helmets-alpine-racing" href="/bo-suu-tap/mu-dua-tuyet-alpine" class="mega-menu__link link text-sm!">
                                  Đua tuyết Alpine
                                </a>
                              </li><li>
                                <a id="HeaderMenu-helmets-snow-helmets-kids-snow-helmets" href="/bo-suu-tap/mu-truot-tuyet-tre-em" class="mega-menu__link link text-sm!">
                                  Mũ trượt tuyết trẻ em
                                </a>
                              </li><li>
                                <a id="HeaderMenu-helmets-snow-helmets-shop-all-snow-helmets" href="/bo-suu-tap/mu-bao-hiem-truot-tuyet" class="mega-menu__link link text-sm!">
                                  Xem tất cả Mũ tuyết
                                </a>
                              </li></ul></li>
                      <li>
                        <a id="HeaderMenu-helmets-shop-all-helmets" href="/bo-suu-tap/mu-bao-hiem" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Xem tất cả Mũ bảo hiểm
                        </a></li>
                      

                      
                      

                      
<li class="mega-menu__feature-content"><section class="mega-menu__feature-content--body">
  <div class="mega-menu__feature-content--img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Nav_Pilot_d73b445519.jpg" alt="A man wears the Smith Pilot helmet on a white background." srcset="<?php echo get_template_directory_uri(); ?>/assets/images/Nav_Pilot_d73b445519.jpg 285w" width="285" height="285" class="max-w-[unset]">
</div>
  <div class="mega-menu__feature-content--content">
    <h3 class="h5">
      Sẵn sàng cho mọi chuyến phiêu lưu
    </h3>

    <p class="leading-normal!">
      Khám phá bộ đôi Pilot &amp; Syncline hoàn toàn mới, được thiết kế đồng bộ cho cả người mới và tay đua dày dạn kinh nghiệm.
    </p><a href="/bo-suu-tap/tao-bo-trang-bi-mtb" class="btn btn-secondary mt-4 no-underline">
        Tạo bộ trang bị MTB của bạn
      </a></div>
</section>
</li>
                      

                  </ul>
                </div>
              </details>
              <div class="modal-overlay" aria-hidden="true"></div>
            </header-menu></li><li>
        
<header-menu>
              <details id="Details-HeaderMenu-4" class="mega-menu">
                <summary id="HeaderMenu-goggles" class="header__menu-item list-menu__item link focus-inset text-base!">
                  <a href="/bo-suu-tap/kinh-bao-ho" class="header-item-link-or-text link--text">
                    <span>Kính bảo hộ</span>
                  </a>
                </summary>
                <div id="MegaMenu-Content-4" class="mega-menu__content color-scheme-1 gradient motion-reduce" tabindex="-1">
                  <ul class="mega-menu__list page-width" role="list">
                      <li>
                        <a id="HeaderMenu-goggles-snow-goggles" href="/bo-suu-tap/kinh-bao-ho-truot-tuyet" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Kính bảo hộ Trượt tuyết
                        </a><ul class="list-unstyled" role="list"><li>
                                <a id="HeaderMenu-goggles-snow-goggles-birdseye-vision" href="/bo-suu-tap/tam-nhin-birdseye" class="mega-menu__link link text-sm!">
                                  Tầm nhìn BirdsEye
                                </a>
                              </li><li>
                                <a id="HeaderMenu-goggles-snow-goggles-smith-mag" href="/bo-suu-tap/kinh-truot-tuyet-smith-mag" class="mega-menu__link link text-sm!">
                                  Smith MAG
                                </a>
                              </li><li>
                                <a id="HeaderMenu-goggles-snow-goggles-photochromic-goggles" href="/bo-suu-tap/kinh-bao-ho-truot-tuyet?technology=ChromaPop+Pro+PhotoChromic%2CChromaPop+PhotoChromic" class="mega-menu__link link text-sm!">
                                  Kính bảo hộ đổi màu
                                </a>
                              </li><li>
                                <a id="HeaderMenu-goggles-snow-goggles-squad" href="/bo-suu-tap/kinh-bao-ho-squad" class="mega-menu__link link text-sm!">
                                  Squad
                                </a>
                              </li><li>
                                <a id="HeaderMenu-goggles-snow-goggles-xl-goggles" href="/bo-suu-tap/kinh-bao-ho-co-lon-xl" class="mega-menu__link link text-sm!">
                                  Kính bảo hộ Cỡ lớn XL
                                </a>
                              </li><li>
                                <a id="HeaderMenu-goggles-snow-goggles-over-the-glasses-otg" href="/bo-suu-tap/kinh-truot-tuyet-trum-kinh-can-otg" class="mega-menu__link link text-sm!">
                                  Đeo ngoài kính cận (OTG)
                                </a>
                              </li><li>
                                <a id="HeaderMenu-goggles-snow-goggles-youth" href="/bo-suu-tap/kinh-truot-tuyet-tre-em" class="mega-menu__link link text-sm!">
                                  Trẻ em
                                </a>
                              </li><li>
                                <a id="HeaderMenu-goggles-snow-goggles-replacement-lenses" href="/bo-suu-tap/trong-kinh-truot-tuyet-thay-the" class="mega-menu__link link text-sm!">
                                  Tròng kính thay thế
                                </a>
                              </li><li>
                                <a id="HeaderMenu-goggles-snow-goggles-shop-all-snow-goggles" href="/bo-suu-tap/kinh-bao-ho-truot-tuyet" class="mega-menu__link link text-sm!">
                                  Xem tất cả Kính tuyết
                                </a>
                              </li></ul></li>
                      <li>
                        <a id="HeaderMenu-goggles-bike-goggles" href="/bo-suu-tap/kinh-bao-ho-xe-dap" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Kính bảo hộ xe đạp
                        </a><ul class="list-unstyled" role="list"><li>
                                <a id="HeaderMenu-goggles-bike-goggles-downhill-goggles" href="/bo-suu-tap/kinh-bao-ho-xe-dap" class="mega-menu__link link text-sm!">
                                  Kính bảo hộ đổ đèo
                                </a>
                              </li><li>
                                <a id="HeaderMenu-goggles-bike-goggles-replacement-lenses" href="/bo-suu-tap/trong-kinh-xe-dap-thay-the" class="mega-menu__link link text-sm!">
                                  Tròng kính thay thế
                                </a>
                              </li><li>
                                <a id="HeaderMenu-goggles-bike-goggles-shop-all-bike-goggles" href="/bo-suu-tap/kinh-bao-ho-xe-dap" class="mega-menu__link link text-sm!">
                                  Xem tất cả Kính xe đạp
                                </a>
                              </li></ul></li>
                      <li>
                        <a id="HeaderMenu-goggles-shop-all-goggles" href="/bo-suu-tap/kinh-bao-ho" class="mega-menu__link mega-menu__link--level-2 header-item-link-or-text link text-base!">
                          Xem tất cả Kính bảo hộ
                        </a></li>
                      

                      
                      

                      

                      
<li class="mega-menu__feature-content"><section class="mega-menu__feature-content--body">
  <div class="mega-menu__feature-content--img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/asset_0b7d6a811d.png" alt="Người đội mũ bảo hiểm Smith Hardline Mips màu đen cùng kính Rhythm MTB ngoài trời" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/asset_0b7d6a811d.png 285w" width="285" height="285" class="max-w-[unset]">
</div>
  <div class="mega-menu__feature-content--content">
    <h3 class="h5">
      Độc lập ấn tượng, kết hợp đỉnh cao.
    </h3>

    <p class="leading-normal!">
      Trải nghiệm sự kết hợp hoàn hảo giữa mũ bảo hiểm và kính bảo hộ SMITH mang lại cảm giác thoải mái và hiệu suất tối đa trên đường đua.
    </p><a href="/bo-suu-tap/kinh-bao-ho-xe-dap" class="btn btn-secondary mt-4 no-underline">
        Xem Kính bảo hộ MTB
      </a></div>
</section>
</li>
                  </ul>
                </div>
              </details>
              <div class="modal-overlay" aria-hidden="true"></div>
            </header-menu></li><li>
        
<a id="HeaderMenu-apparel" href="/bo-suu-tap/trang-phuc" class="header__menu-item list-menu__item link link--text focus-inset text-base! ">
            <span class="">Trang phục</span>
          </a></li><li>
        
<a id="HeaderMenu-accessories" href="/bo-suu-tap/phu-kien" class="header__menu-item list-menu__item link link--text focus-inset text-base! ">
            <span class="">Phụ kiện</span>
          </a></li><li>
        
<header-menu>
              <details id="Details-HeaderMenu-7" class="dropdown">
                <summary id="HeaderMenu-sport" class="header__menu-item list-menu__item link link--text focus-inset text-base!">
                  <a href="/" class="header-item-link-or-text" onclick="window.location.href='/';">
                    <span>Thể thao</span>
                  </a>
                </summary>
                <ul id="HeaderMenu-MenuList-7" class="header__submenu pb-2! hybrid-menu__content list-menu list-menu--disclosure color-scheme-1 gradient caption-large motion-reduce" role="list" tabindex="-1"><li>
                      <a id="HeaderMenu-sport-fishing" href="/bo-suu-tap/cau-ca" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Câu cá
                      </a>
                    </li><li>
                      <a id="HeaderMenu-sport-mountain-biking" href="/bo-suu-tap/xe-dap-leo-nui" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Xe đạp leo núi
                      </a>
                    </li><li>
                      <a id="HeaderMenu-sport-road-gravel-cycling" href="/bo-suu-tap/xe-dap-road-gravel" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Xe đạp đường trường &amp; đường sỏi
                      </a>
                    </li><li>
                      <a id="HeaderMenu-sport-snow" href="/bo-suu-tap/truot-tuyet" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Trượt tuyết
                      </a>
                    </li><li>
                      <a id="HeaderMenu-sport-running" href="/bo-suu-tap/chay-bo" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Chạy bộ
                      </a>
                    </li><li>
                      <a id="HeaderMenu-sport-beach-everyday" href="/bo-suu-tap/luot-song" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Lướt sóng &amp; Hàng ngày
                      </a>
                    </li><li>
                      <a id="HeaderMenu-sport-hiking" href="/bo-suu-tap/leo-nui-da-ngoai" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Leo núi &amp; Dã ngoại
                      </a>
                    </li></ul>
              </details>
            </header-menu></li><li>
        
<a id="HeaderMenu-sale" href="/bo-suu-tap/giam-gia" class="header__menu-item list-menu__item link link--text focus-inset text-base! ">
            <span class=" text-black!  py-1 px-3.25 ">Giảm giá</span>
          </a></li><li class="list-menu__item--last">
        
<header-menu>
              <details id="Details-HeaderMenu-9" class="dropdown">
                <summary id="HeaderMenu-explore" class="header__menu-item list-menu__item link link--text focus-inset text-base!">
                  <a href="/" class="header-item-link-or-text" onclick="window.location.href='/';">
                    <span>Khám phá</span>
                  </a>
                </summary>
                <ul id="HeaderMenu-MenuList-9" class="header__submenu pb-2! hybrid-menu__content list-menu list-menu--disclosure color-scheme-1 gradient caption-large motion-reduce" role="list" tabindex="-1"><li>
                      <a id="HeaderMenu-explore-athletes" href="/trang/van-dong-vien" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Vận động viên
                      </a>
                    </li><li>
                      <a id="HeaderMenu-explore-stories" href="/bai-viet" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Câu chuyện
                      </a>
                    </li><li>
                      <a id="HeaderMenu-explore-technologies" href="/trang/cong-nghe" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Công nghệ
                      </a>
                    </li><li>
                      <a id="HeaderMenu-explore-smith-cycling" href="/trang/smith-xe-dap" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Smith Xe Đạp
                      </a>
                    </li><li>
                      <a id="HeaderMenu-explore-smith-snow" href="/trang/smith-truot-tuyet" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Smith Trượt Tuyết
                      </a>
                    </li><li>
                      <a id="HeaderMenu-explore-60-years-of-smith" href="/trang/ve-chung-toi" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        60 Năm Di Sản SMITH
                      </a>
                    </li><li>
                      <a id="HeaderMenu-explore-smith-x-quoc" href="/trang/smith-x-quoc" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Hợp tác SMITH x QUOC
                      </a>
                    </li><li>
                      <a id="HeaderMenu-explore-the-forecast" href="/trang/du-bao-the-forecast" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Dự báo thời tiết
                      </a>
                    </li><li>
                      <a id="HeaderMenu-explore-pyt-oaxaca" href="/trang/theo-duoi-dam-me-oaxaca" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Đam Mê - Oaxaca
                      </a>
                    </li><li>
                      <a id="HeaderMenu-explore-pyt-outer-banks" href="/trang/theo-duoi-dam-me-outer-banks" class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                        Đam Mê - Outer Banks
                      </a>
                    </li></ul>
              </details>
              <div class="modal-overlay" aria-hidden="true"></div>
            </header-menu></li></ul>
</nav>



<link href="<?php echo get_template_directory_uri(); ?>/assets/css/component-product-badges_a3334cc12e.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/product-card_698d364696.js" defer></script>
<div class="header__search">
  <div class="search-block" aria-label="Tìm kiếm">
    <div class="search-block__content search-block__content-bottom" tabindex="-1" data-search-text="Search" data-recent-search-title="Tìm kiếm gần đây"><search-form class="search-block__form"><form action="/en-us/search" method="get" role="search" class="search search-block__form">
        <div class="field">
          <input class="search__input field__input focus:shadow-button-black!" id="Search-In-Modal" type="search" name="q" value="" maxlength="255" placeholder="Tìm kiếm...">
          <label class="field__label sr-only" for="Search-In-Modal">Tìm kiếm</label>
          <input type="hidden" name="options[prefix]" value="last">
          <button type="reset" class="reset__button field__button hidden!" aria-label="Xóa từ khóa tìm kiếm">
            <span class="svg-wrapper"><svg fill="none" stroke="currentColor" class="icon icon-close" viewbox="0 0 18 18"><circle cx="9" cy="9" r="8.5" stroke-opacity=".2"></circle><path stroke-linecap="round" stroke-linejoin="round" d="M11.83 11.83 6.172 6.17M6.229 11.885l5.544-5.77"></path></svg>
</span>
          </button>
          <button class="search__button field__button" aria-label="Tìm kiếm">
            <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-search" width="20" height="20" viewbox="0 0 20 20" fill="none">
  <path d="M17.0833 17.0833L12.5 12.5" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"></path>
  <path d="M8.33333 14.1667C11.555 14.1667 14.1667 11.555 14.1667 8.33333C14.1667 5.11167 11.555 2.5 8.33333 2.5C5.11167 2.5 2.5 5.11167 2.5 8.33333C2.5 11.555 5.11167 14.1667 8.33333 14.1667Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"></path>
</svg></span>
          </button>
        </div></form></search-form></div>
  </div>
</div>


      <div class="header__icons header__icons--localization header-localization">





<mini-cart>
  <details>
    <summary>
      <a href="/gio-hang" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble">
        
  <span class="svg-wrapper"><svg class="icon icon-cart-empty" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 34 26">
    <defs>
        <clippath id="Cartclip-path">
            <path id="Clip_6" data-name="Clip 6" d="M0,0H34V20H0Z" fill="none"></path>
        </clippath>
    </defs>
    <path id="Fill_1" data-name="Fill 1" d="M4,2A2,2,0,1,1,2,0,2,2,0,0,1,4,2" transform="translate(14 22)" fill="currentColor"></path>
    <path id="Fill_3" data-name="Fill 3" d="M4,2A2,2,0,1,1,2,0,2,2,0,0,1,4,2" transform="translate(21 22)" fill="currentColor"></path>
    <g id="Group_7" data-name="Group 7">
        <path id="Clip_6-2" data-name="Clip 6" d="M0,0H34V20H0Z" fill="none"></path>
        <g id="Group_7-2" data-name="Group 7" clip-path="url(#Cartclip-path)">
            <path fill="currentColor" id="Fill_5" data-name="Fill 5" d="M29.242,20h-17.1a1.038,1.038,0,0,1-1-.742L6.169,2.041H1.041A1.031,1.031,0,0,1,0,1.02,1.031,1.031,0,0,1,1.041,0H6.956a1.038,1.038,0,0,1,1,.742L12.93,17.959H28.455L31.582,7.143H14.676a1.021,1.021,0,1,1,0-2.041H32.959a1.048,1.048,0,0,1,.83.405,1,1,0,0,1,.171.894L30.243,19.258a1.038,1.038,0,0,1-1,.742" transform="translate(0)"></path>
        </g>
    </g>
</svg></span>


<span class="visually-hidden">Giỏ hàng</span>
        <span class="visually-hidden">Giỏ hàng</span></a>
    </summary>
    <div id="mini-cart" class="mini-cart">
<div class="loading__spinner dots hidden">
    <div class="dot1"></div>
    <div class="dot2"></div>
  </div><div class="mini-cart__inner gradient" role="dialog" aria-modal="true" aria-label="Your Cart" tabindex="-1">
        <div class="mini-cart__header">
          <div>
            <h2 class="mini-cart__header--text">Giỏ hàng của bạn</h2>
          </div>
          <div class="view-cart">
            <a href="/gio-hang" class="mini-cart__header--link link text-right uppercase" title="View cart">Xem giỏ hàng</a>
          </div>
        </div><mini-cart-items>
          <form action="/en-us/cart" id="MiniCart-Form" class="cart__contents mini-cart__form" method="post">
            <div id="MiniCart-CartItems" class="mini-cart__contents js-contents"><p class="empty-cart-message">Giỏ hàng của bạn đang trống</p></div>
          </form>
        </mini-cart-items></div>
    </div>
  </details>
</mini-cart>
</div>
    </div>


</header>
</sticky-header>


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Smith Optics",
      "logo": "https:\/\/www.smithoptics.com\/cdn\/shop\/files\/smith-logo-desktop.svg?v=1753119897\u0026width=600",
      "sameAs": [
        "https:\/\/www.facebook.com\/SmithOptics\/",
        "https:\/\/www.instagram.com\/smithoptics\/",
        "https:\/\/vimeo.com\/smithoptics"
      ],
      "url": "https:\/\/www.smithoptics.com\/en-us",
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+1-888-206-2995",
          "contactType": "Customer Service",
          "areaServed": "US",
          "availableLanguage": ["English"]
        }
      ]
    }
  </script>


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "Smith Optics",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https:\/\/www.smithoptics.com\/en-us\/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "url": "https:\/\/www.smithoptics.com"
    }
  </script>
<style> #shopify-section-sections--23416231264494__header #HeaderMenu-sale span, #shopify-section-sections--23416231264494__header #HeaderDrawer-sale, #shopify-section-sections--23416231264494__header #HeaderDrawer-sale + .menu-drawer__submenu .menu-drawer__close-button {color: #e12929; font-weight: 700;} </style></div><div id="shopify-section-sections--23416231264494__announcement-bar" class="shopify-section shopify-section-group-header-group announcement-bar-section"><link href="<?php echo get_template_directory_uri(); ?>/assets/css/component-slideshow_bbd9d7e7c6.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/component-slider_9343bf4299.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/component-announcement-ba_a14b719ac9.css" rel="stylesheet" type="text/css" media="all">

<style>
  /* Keep the announcement custom element sized to its closed 44px bar locally. */
  .announcement-bar-section > announcement-bar {
    height: auto !important;
  }
</style>

  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/component-list-social_4cdbe23a66.css" rel="stylesheet" type="text/css" media="all">

<announcement-bar class="utility-bar color-scheme-2 gradient utility-bar--bottom-border">
  <details>
    <summary class="page-width utility-bar__grid"><slideshow-component class="announcement-bar" role="region" aria-roledescription="Carousel" aria-label="Thanh thông báo">
          <div class="announcement-bar-slider slider-buttons">
            <button type="button" class="slider-button slider-button--prev slider-button--hide" name="previous" aria-label="Thông báo trước" aria-controls="Slider-sections--23416231264494__announcement-bar">
              <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-caret" viewbox="0 0 10 6"><path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd"></path></svg>
</span>
            </button>
            <div class="grid-flex grid--1-col slider slider--everywhere mb-0!" id="Slider-sections--23416231264494__announcement-bar" aria-live="polite" aria-atomic="true" data-autoplay="true" data-speed="5"><div class="slideshow__slide slider__slide grid__item grid--1-col" id="Slide-sections--23416231264494__announcement-bar-1" role="group" aria-roledescription="Thông báo" aria-label="1 of 3" tabindex="-1">
                    <div class="announcement-bar__announcement" role="region" aria-label="Thông báo"><p class="announcement-bar__message h5 font-normal">
                          <span class="text">Ưu đãi Ride More </span><span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-caret" viewbox="0 0 10 6"><path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd"></path></svg>
</span></p></div>
                  </div><div class="slideshow__slide slider__slide grid__item grid--1-col" id="Slide-sections--23416231264494__announcement-bar-2" role="group" aria-roledescription="Thông báo" aria-label="2 of 3" tabindex="-1">
                    <div class="announcement-bar__announcement" role="region" aria-label="Thông báo"><p class="announcement-bar__message h5 font-normal">
                          <span class="text">Bộ sưu tập tròng kính thay thế mới đã ra mắt </span><span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-caret" viewbox="0 0 10 6"><path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd"></path></svg>
</span></p></div>
                  </div><div class="slideshow__slide slider__slide grid__item grid--1-col" id="Slide-sections--23416231264494__announcement-bar-3" role="group" aria-roledescription="Thông báo" aria-label="3 of 3" tabindex="-1">
                    <div class="announcement-bar__announcement" role="region" aria-label="Thông báo"><p class="announcement-bar__message h5 font-normal">
                          <span class="text">Tìm chiếc kính hoàn hảo của bạn </span><span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-caret" viewbox="0 0 10 6"><path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd"></path></svg>
</span></p></div>
                  </div></div>
            <button type="button" class="slider-button slider-button--next slider-button--hide" name="next" aria-label="Thông báo tiếp theo" aria-controls="Slider-sections--23416231264494__announcement-bar">
              <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-caret" viewbox="0 0 10 6"><path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd"></path></svg>
</span>
            </button>
          </div>
        </slideshow-component></summary>
    <div class="announcement-bar__details-container">
      <div class="announcement-bar__details"><div class="announcement-bar__details_column"><h5>Ưu đãi Ride More</h5><div class="announcement-bar__description">Những dặm đường tuyệt vời nhất vẫn đang chờ phía trước. Sẵn sàng bứt phá với ưu đãi giảm 40% cho mũ bảo hiểm và kính đạp xe trước khi hết hàng.*</div><div>
                  <a href="/bo-suu-tap/giam-gia-xe-dap" class="announcement-bar__link link focus-inset">
                    Mua hàng giảm giá
                  </a>
                </div></div><div class="announcement-bar__details_column"><h5>Bộ sưu tập tròng kính thay thế mới đã ra mắt</h5><div class="announcement-bar__description">Từ phân cực đến ChromaPop™, tròng kính thay thế giúp cá nhân hóa tầm nhìn cho mọi điều kiện.</div><div>
                  <a href="/bo-suu-tap/trong-kinh-ram-thay-the" class="announcement-bar__link link focus-inset">
                    Mua tròng kính thay thế
                  </a>
                </div></div><div class="announcement-bar__details_column"><h5>Tìm chiếc kính hoàn hảo của bạn</h5><div class="announcement-bar__description">Nhận đề xuất kính râm cá nhân hóa phù hợp với khuôn mặt và nhu cầu phiêu lưu của bạn.</div><div>
                  <a href="/trang/trac-nghiem-chon-kinh-ram" class="announcement-bar__link link focus-inset">
                    Làm bài trắc nghiệm
                  </a>
                </div></div></div>
      <button class="announcement-bar__close svg-wrapper link" tabindex="0" aria-label="Đóng chi tiết thông báo"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-caret" viewbox="0 0 10 6"><path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd"></path></svg>
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-close" width="40" height="40" viewbox="0 0 40 40" fill="none">
  <path d="M28 28L12 12" stroke="currentColor" stroke-width="3" stroke-miterlimit="10" stroke-linecap="square"></path>
  <path d="M28 12L12 28" stroke="currentColor" stroke-width="3" stroke-miterlimit="10" stroke-linecap="square"></path>
</svg></button>
    </div>
  </details>
  <div class="modal-overlay" aria-hidden="true"></div>
</announcement-bar>


</div>
<!-- END sections: header-group -->

    
