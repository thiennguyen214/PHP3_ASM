<a href="#" class="scrollup"><i class="fas fa-angle-double-up"></i>TOP</a>
<script type="text/html" id="tmpl-rtwpvg-slider-template">
      <# hasVideo = ( data.rtwpvg_video_link ) ? 'rtwpvg-gallery-video' : '' #>
      <# thumbnailSrc = ( data.rtwpvg_video_link ) ? data.video_thumbnail_src :
      data.gallery_thumbnail_src #> <# videoHeight = ( data.rtwpvg_video_width )
      ? data.rtwpvg_video_width : 'auto' #> <# videoWidth = (
      data.rtwpvg_video_height ) ? data.rtwpvg_video_height : '100%' #> <#
      swiperClass = ( rtwpvg.using_swiper ) ? 'swiper-slide' : '' #>

      <div class="rtwpvg-gallery-image  ">
        <# if(data.rtwpvg_video_link ) { #> <# if(data.rtwpvg_video_embed_type
        == 'video') { #>
        <div class="rtwpvg-single-video-container">
          <video
            disablePictureInPicture
            preload="auto"
            controls
            controlsList="nodownload"
            src=""
            poster=""
            style="width: ; height: ; margin: 0;padding: 0; background-color: #000"
          ></video>
        </div>
        <# } #> <# if(data.rtwpvg_video_embed_type == 'iframe') { #>
        <div class="rtwpvg-single-video-container">
          <iframe
            class="rtwpvg-lightbox-iframe"
            src=""
            style="width: ; height: ; margin: 0;padding: 0; background-color: #000"
            frameborder="0"
            webkitAllowFullScreen
            mozallowfullscreen
            allowfullscreen
          ></iframe>
        </div>
        <# } #> <# }else{ #> <# if( data.src ){ #>

        <div class="rtwpvg-single-image-container">
          <# if( data.srcset ){ #>
          <img
            class=""
            width=""
            height=""
            src=""
            alt=""
            title=""
            data-caption=""
            data-src=""
            data-large_image=""
            data-large_image_width=""
            data-large_image_height=""
            srcset=""
            sizes=""
            
          />
          <# }else{ #>
          <img
            class=""
            width=""
            height=""
            src=""
            alt=""
            title=""
            data-caption=""
            data-src=""
            data-large_image=""
            data-large_image_width=""
            data-large_image_height=""
            sizes=""
            
          />
          <# } #>
        </div>

        <# } #> <# } #>
      </div>
    </script>
<script type="text/html" id="tmpl-rtwpvg-thumbnail-template">
      <# hasVideo = ( data.rtwpvg_video_link ) ? 'rtwpvg-thumbnail-video' : ''
      #> <# if( data.gallery_thumbnail_src ) { #> <# swiperClass = (
      rtwpvg.using_swiper ) ? 'swiper-slide' : '' #>

      <div class="rtwpvg-thumbnail-image ">
        <div>
          <img width="" height="" src="" alt="" title="" />
        </div>
      </div>
      <# } #>
    </script>
<div id="fmp-cart-float-menu" class="fmp-cart-float-menu left_center style1">
    <div class="fmp-cart-float-inner">
        <span class="cart-icon">
            <span class="cart-icon-svg"></span>
            <span class="cart-number-wrapper">
                <span class="fmp-cart-icon-num"> 0 </span>
                <span class="item-label">Item</span>
            </span>
        </span>
        <span class="fmp-cart-icon-total">
            <span class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">&#36;</span>0.00</bdi></span>
        </span>
    </div>
</div>
<div class="fmp-drawer-container fmp-minicart-drawer style1 open-always">
    <span class="close"></span>
    <div id="fmp-side-content-area-id">
        <img class="loading-cart" src="/client/all/wp-content/plugins/tlp-food-menu/assets/images/mini-cart-loading.gif"
            alt="Loadding..." />
    </div>
</div>
<div class="drawer-overlay"></div>
<script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, "woocommerce-js");
        document.body.className = c;
    })();
</script>
<link rel="stylesheet" id="wc-blocks-style-css"
    href="/client/all/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocksde45.css?ver=wc-9.3.1"
    type="text/css" media="all" />
<link rel="stylesheet" id="owl-carousel-css"
    href="/client/all/wp-content/themes/panpie/assets/css/owl.carousel.minc6bd.css?ver=3.1.5" type="text/css"
    media="all" />
<link rel="stylesheet" id="owl-theme-default-css"
    href="/client/all/wp-content/themes/panpie/assets/css/owl.theme.default.minc6bd.css?ver=3.1.5" type="text/css"
    media="all" />
<script type="text/javascript" id="fm-frontend-js-extra">
    /* <![CDATA[ */
    var fmParams = {
        fm_date_format: "F j, Y",
        fm_time_format: "g:i a"
    };
    /* ]]> */
</script>
<script type="text/javascript" id="fm-ajax-minicart-js-extra">
    /* <![CDATA[ */
    var fmpMiniCartParamsPro = {
        nonceID: "fmp_nonce",
        nonce: "65bc332d39",
        ajaxurl: "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/panpie\/wp-admin\/admin-ajax.php",
        miniCartCustomSelector: "",
    };
    /* ]]> */
</script>
<script type="text/javascript" id="fmp-addon-js-extra">
    /* <![CDATA[ */
    var fmpAddonVar = {
        nonceID: "fmp_nonce",
        nonce: "65bc332d39",
        ajaxurl: "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/panpie\/wp-admin\/admin-ajax.php",
        singleAddToCartAjax: "",
    };
    /* ]]> */
</script>
<script type="text/javascript" src="/client/all/wp-content/plugins/food-menu-pro/assets/js/addon.min972f.js?ver=5.0.1"
    id="fmp-addon-js"></script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.minf297.js?ver=9.3.1"
    id="sourcebuster-js-js"></script>
<script type="text/javascript" id="wc-order-attribution-js-extra">
    /* <![CDATA[ */
    var wc_order_attribution = {
        params: {
            lifetime: 1.0000000000000000818030539140313095458623138256371021270751953125e-5,
            session: 30,
            base64: false,
            ajaxurl: "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/panpie\/wp-admin\/admin-ajax.php",
            prefix: "wc_order_attribution_",
            allowTracking: true,
        },
        fields: {
            source_type: "current.typ",
            referrer: "current_add.rf",
            utm_campaign: "current.cmp",
            utm_source: "current.src",
            utm_medium: "current.mdm",
            utm_content: "current.cnt",
            utm_id: "current.id",
            utm_term: "current.trm",
            utm_source_platform: "current.plt",
            utm_creative_format: "current.fmt",
            utm_marketing_tactic: "current.tct",
            session_entry: "current_add.ep",
            session_start_time: "current_add.fd",
            session_pages: "session.pgs",
            session_count: "udata.vst",
            user_agent: "udata.uag",
        },
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.minf297.js?ver=9.3.1"
    id="wc-order-attribution-js"></script>
<script type="text/javascript" id="rtwpvs-js-extra">
    /* <![CDATA[ */
    var rtwpvs_params = {
        is_product_page: "1",
        ajax_url: "\/demo\/wordpress\/themes\/panpie\/wp-admin\/admin-ajax.php",
        nonce: "c962365fd5",
        reselect_clear: "1",
        term_beside_label: "",
        archive_swatches: "1",
        enable_ajax_archive_variation: "",
        archive_swatches_enable_single_attribute: "",
        archive_swatches_single_attribute: "",
        archive_swatches_display_event: "click",
        archive_image_selector: ".wp-post-image, .attachment-woocommerce_thumbnail",
        archive_add_to_cart_text: "",
        archive_add_to_cart_select_options: "",
        archive_product_wrapper: ".rtwpvs-product,.product-item",
        archive_product_price_selector: ".price",
        archive_add_to_cart_button_selector: ".rtwpvs_add_to_cart, .add_to_cart_button",
        enable_variation_url: "1",
        enable_archive_variation_url: "",
        has_wc_bundles: "",
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/woo-product-variation-swatches/assets/js/rtwpvs.min432e.js?ver=1727279917"
    id="rtwpvs-js"></script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/woo-product-variation-swatches/assets/js/rtwpvs.min432e.js?ver=1727279917"
    id="rtwpvs-js"></script>
<script type="text/javascript" src="/client/all/wp-content/themes/panpie/assets/js/isotope.pkgd.minc6bd.js?ver=3.1.5"
    id="isotope-pkgd-js"></script>
<script type="text/javascript" src="/client/all/wp-content/themes/panpie/assets/js/popperc6bd.js?ver=3.1.5"
    id="popper-js"></script>
<script type="text/javascript" src="/client/all/wp-content/themes/panpie/assets/js/bootstrap.minc6bd.js?ver=3.1.5"
    id="bootstrap-js"></script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min5c23.js?ver=4.0.3-wc.9.3.1"
    id="select2-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript"
    src="/client/all/wp-content/themes/panpie/assets/js/jquery.countdown.minc6bd.js?ver=3.1.5" id="countdown-js">
</script>
<script type="text/javascript" src="/client/all/wp-content/themes/panpie/assets/js/js.cookie.minc6bd.js?ver=3.1.5"
    id="cookie-js"></script>
<script type="text/javascript"
    src="/client/all/wp-content/themes/panpie/assets/js/theia-sticky-sidebar.minc6bd.js?ver=3.1.5" id="theia-sticky-js">
</script>
<script type="text/javascript"
    src="/client/all/wp-content/themes/panpie/assets/js/jquery.magnific-popup.minc6bd.js?ver=3.1.5"
    id="magnific-popup-js"></script>
<script type="text/javascript" src="/client/all/wp-content/themes/panpie/assets/js/wow.minc6bd.js?ver=3.1.5"
    id="rt-wow-js"></script>
<script type="text/javascript" src="/client/all/wp-content/themes/panpie/assets/js/swiper.minc6bd.js?ver=3.1.5"
    id="swiper-slider-js"></script>
<script type="text/javascript" src="/client/all/wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js">
</script>
<script type="text/javascript" src="/client/all/wp-includes/js/masonry.min3a05.js?ver=4.2.2" id="masonry-js"></script>
<script type="text/javascript" id="panpie-main-js-extra">
    /* <![CDATA[ */
    var panpieObj = {
        stickyMenu: "1",
        meanWidth: "992",
        siteLogo: "<a href=\"https:\/\/radiustheme.com\/demo\/wordpress\/themes\/panpie\/\" alt=\"Panpie - Restaurant WordPress Theme\"><img width='92' height='39' loading='lazy' class='logo-small' src='https:\/\/radiustheme.com\/demo\/wordpress\/themes\/panpie\/wp-content\/themes\/panpie\/assets\/img\/logo.png' alt='Panpie - Restaurant WordPress Theme'><\/a>",
        extraOffset: "70",
        extraOffsetMobile: "52",
        rtl: "no",
        ajaxURL: "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/panpie\/wp-admin\/admin-ajax.php",
        nonce: "343618ad21",
    };
    /* ]]> */
</script>
<script type="text/javascript" src="/client/all/wp-content/themes/panpie/assets/js/mainc6bd.js?ver=3.1.5"
    id="panpie-main-js"></script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/tlp-food-menu/assets/js/ajax-mini-cart.min58e0.js?ver=5.1.4"
    id="fm-ajax-minicart-js"></script>
<script type="text/javascript" src="/client/all/wp-content/themes/panpie/assets/js/owl.carousel.minc6bd.js?ver=3.1.5"
    id="owl-carousel-js"></script>
