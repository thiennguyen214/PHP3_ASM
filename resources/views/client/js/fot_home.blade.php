<link href="http://fonts.googleapis.com/css?family=Barlow:800%2C500%7CRoboto:400&amp;display=swap" rel="stylesheet"
    property="stylesheet" media="all" type="text/css" />
<script>
    if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            console.log(
                "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
            );
            console.log("To fix this, you can:");
            console.log(
                "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
            );
            console.log("2. Find the double jQuery.js inclusion and remove it");
            return "Double Included jQuery Library";
        }
    }
</script>
<link rel="preload" as="font" id="rs-icon-set-revicon-woff"
    href="/client/all/wp-content/plugins/revslider/sr6/assets/fonts/revicons/revicons90c6.woff?5510888" type="font/woff"
    crossorigin="anonymous" media="all" />
<link rel="preload" as="font" id="rs-icon-set-fa-icon-woff" type="font/woff2" crossorigin="anonymous"
    href="/client/all/wp-content/plugins/revslider/sr6/assets/fonts/font-awesome/fonts/fontawesome-webfont3e6e.woff2?v=4.7.0"
    media="all" />
<link rel="stylesheet" property="stylesheet" id="rs-icon-set-fa-icon-css"
    href="/client/all/wp-content/plugins/revslider/sr6/assets/fonts/font-awesome/css/font-awesome.css" type="text/css"
    media="all" />
<link rel="stylesheet" id="fluentform-elementor-widget-css"
    href="/client/all/wp-content/plugins/fluentform/assets/css/fluent-forms-elementor-widgetbb49.css?ver=5.2.2" type="text/css"
    media="all" />
<link rel="stylesheet" id="widget-image-css"
    href="/client/all/wp-content/plugins/elementor/assets/css/widget-image.min81e1.css?ver=3.24.2" type="text/css" media="all" />
<link rel="stylesheet" id="rs-plugin-settings-css"
    href="/client/all/wp-content/plugins/revslider/sr6/assets/css/rs632e1.css?ver=6.7.7" type="text/css" media="all" />
<style id="rs-plugin-settings-inline-css" type="text/css">
    #rev_slider_5_1_wrapper .hephaistos.tparrows {
        cursor: pointer;
        background: rgba(0, 0, 0, 0.5);
        width: 40px;
        height: 40px;
        position: absolute;
        display: block;
        z-index: 1000;
        border-radius: 50%;
    }

    #rev_slider_5_1_wrapper .hephaistos.tparrows.rs-touchhover {
        background: #000000;
    }

    #rev_slider_5_1_wrapper .hephaistos.tparrows:before {
        font-family: "revicons";
        font-size: 18px;
        color: #ffffff;
        display: block;
        line-height: 40px;
        text-align: center;
    }

    #rev_slider_5_1_wrapper .hephaistos.tparrows.tp-leftarrow:before {
        content: "\e82c";
        margin-left: -2px;
    }

    #rev_slider_5_1_wrapper .hephaistos.tparrows.tp-rightarrow:before {
        content: "\e82d";
        margin-right: -2px;
    }
</style>
<script type="text/javascript" src="/client/all/wp-content/themes/panpie/assets/js/jquery.counterup.minc6bd.js?ver=3.1.5"
    id="counterup-js"></script>
<script type="text/javascript" src="/client/all/wp-content/themes/panpie/assets/js/waypoints.minc6bd.js?ver=3.1.5"
    id="rt-waypoints-js"></script>
<script type="text/javascript" src="/client/all/wp-content/themes/panpie/assets/js/jquery.parallax-scrollc6bd.js?ver=3.1.5"
    id="parallax-scroll-js"></script>
    <script
    type="text/javascript"
    src="/client/all/wp-content/plugins/elementor/assets/js/webpack.runtime.min81e1.js?ver=3.24.2"
    id="elementor-webpack-runtime-js"
  ></script>
  <script
    type="text/javascript"
    src="/client/all/wp-content/plugins/elementor/assets/js/frontend-modules.min81e1.js?ver=3.24.2"
    id="elementor-frontend-modules-js"
  ></script>
  <script
    type="text/javascript"
    src="/client/all/wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3"
    id="jquery-ui-core-js"
  ></script>
  <script type="text/javascript" id="elementor-frontend-js-before">
    /* <![CDATA[ */
    var elementorFrontendConfig = {
      environmentMode: {
        edit: false,
        wpPreview: false,
        isScriptDebug: false,
      },
      i18n: {
        shareOnFacebook: "Share on Facebook",
        shareOnTwitter: "Share on Twitter",
        pinIt: "Pin it",
        download: "Download",
        downloadImage: "Download image",
        fullscreen: "Fullscreen",
        zoom: "Zoom",
        share: "Share",
        playVideo: "Play Video",
        previous: "Previous",
        next: "Next",
        close: "Close",
        a11yCarouselWrapperAriaLabel:
          "Carousel | Horizontal scrolling: Arrow Left & Right",
        a11yCarouselPrevSlideMessage: "Previous slide",
        a11yCarouselNextSlideMessage: "Next slide",
        a11yCarouselFirstSlideMessage: "This is the first slide",
        a11yCarouselLastSlideMessage: "This is the last slide",
        a11yCarouselPaginationBulletMessage: "Go to slide",
      },
      is_rtl: false,
      breakpoints: { xs: 0, sm: 480, md: 768, lg: 992, xl: 1440, xxl: 1600 },
      responsive: {
        breakpoints: {
          mobile: {
            label: "Mobile Portrait",
            value: 767,
            default_value: 767,
            direction: "max",
            is_enabled: true,
          },
          mobile_extra: {
            label: "Mobile Landscape",
            value: 880,
            default_value: 880,
            direction: "max",
            is_enabled: false,
          },
          tablet: {
            label: "Tablet Portrait",
            value: 991,
            default_value: 1024,
            direction: "max",
            is_enabled: true,
          },
          tablet_extra: {
            label: "Tablet Landscape",
            value: 1200,
            default_value: 1200,
            direction: "max",
            is_enabled: false,
          },
          laptop: {
            label: "Laptop",
            value: 1366,
            default_value: 1366,
            direction: "max",
            is_enabled: false,
          },
          widescreen: {
            label: "Widescreen",
            value: 2400,
            default_value: 2400,
            direction: "min",
            is_enabled: false,
          },
        },
      },
      version: "3.24.2",
      is_static: false,
      experimentalFeatures: {
        additional_custom_breakpoints: true,
        container_grid: true,
        e_swiper_latest: true,
        e_nested_atomic_repeaters: true,
        e_onboarding: true,
        home_screen: true,
        "ai-layout": true,
        "landing-pages": true,
        "link-in-bio": true,
        "floating-buttons": true,
      },
      urls: {
        assets:
          "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/panpie\/wp-content\/plugins\/elementor\/assets\/",
        ajaxurl:
          "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/panpie\/wp-admin\/admin-ajax.php",
      },
      nonces: { floatingButtonsClickTracking: "ddb4238d08" },
      swiperClass: "swiper",
      settings: { page: [], editorPreferences: [] },
      kit: {
        viewport_tablet: 991,
        active_breakpoints: ["viewport_mobile", "viewport_tablet"],
        global_image_lightbox: "yes",
        lightbox_enable_counter: "yes",
        lightbox_enable_fullscreen: "yes",
        lightbox_enable_zoom: "yes",
        lightbox_enable_share: "yes",
        lightbox_title_src: "title",
        lightbox_description_src: "description",
      },
      post: {
        id: 2302,
        title:
          "Panpie%20%E2%80%93%20Restaurant%20WordPress%20Theme%20%E2%80%93%20WordPress%20Theme",
        excerpt: "",
        featuredImage: false,
      },
    };
    /* ]]> */
  </script>
  <script
    type="text/javascript"
    src="/client/all/wp-content/plugins/elementor/assets/js/frontend.min81e1.js?ver=3.24.2"
    id="elementor-frontend-js"
  ></script>
  <script id="rs-initialisation-scripts">
    var tpj = jQuery;

    var revapi5;

    if (window.RS_MODULES === undefined) window.RS_MODULES = {};
    if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider51"] = {
      once:
        RS_MODULES.modules["revslider51"] !== undefined
          ? RS_MODULES.modules["revslider51"].once
          : undefined,
      init: function () {
        window.revapi5 =
          window.revapi5 === undefined ||
          window.revapi5 === null ||
          window.revapi5.length === 0
            ? document.getElementById("rev_slider_5_1")
            : window.revapi5;
        if (
          window.revapi5 === null ||
          window.revapi5 === undefined ||
          window.revapi5.length == 0
        ) {
          window.revapi5initTry =
            window.revapi5initTry === undefined
              ? 0
              : window.revapi5initTry + 1;
          if (window.revapi5initTry < 20)
            requestAnimationFrame(function () {
              RS_MODULES.modules["revslider51"].init();
            });
          return;
        }
        window.revapi5 = jQuery(window.revapi5);
        if (window.revapi5.revolution == undefined) {
          revslider_showDoubleJqueryError("rev_slider_5_1");
          return;
        }
        revapi5.revolutionInit({
          revapi: "revapi5",
          DPR: "dpr",
          sliderLayout: "fullwidth",
          visibilityLevels: "1240,1024,778,480",
          gridwidth: "1240,1024,778,480",
          gridheight: "920,800,550,720",
          lazyType: "smart",
          spinner: "spinner8",
          perspective: 600,
          perspectiveType: "global",
          onedpronmobile: true,
          editorheight: "920,800,550,720",
          responsiveLevels: "1240,1024,778,480",
          progressBar: { disableProgressBar: true },
          navigation: {
            wheelCallDelay: 1000,
            onHoverStop: false,
            arrows: {
              enable: true,
              style: "hephaistos",
              hide_onleave: true,
              animSpeed: "200ms",
              animDelay: "200ms",
              left: {
                anim: "zoomin",
                h_offset: -50,
              },
              right: {
                anim: "zoomin",
                h_offset: -50,
              },
            },
          },
          parallax: {
            levels: [
              2, 3, 5, 7, 9, 11, 15, 20, 25, 30, 47, 48, 49, 50, 51, 30,
            ],
            type: "mousescroll",
            origo: "slidercenter",
            speed: "0ms",
          },
          scrolleffect: {
            set: true,
            multiplicator: 1.3,
            multiplicator_layers: 1.3,
          },
          sbtimeline: {
            set: true,
          },
          viewPort: {
            global: true,
            globalDist: "-200px",
            enable: false,
          },
          fallbacks: {
            allowHTML5AutoPlayOnAndroid: true,
          },
        });
      },
    }; // End of RevInitScript

    if (window.RS_MODULES.checkMinimal !== undefined) {
      window.RS_MODULES.checkMinimal();
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness"
    }
  </script>