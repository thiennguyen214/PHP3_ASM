<script type="text/javascript">
    /* <![CDATA[ */
    window._wpemojiSettings = {
        baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
        ext: ".png",
        svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
        svgExt: ".svg",
        source: {
            concatemoji: "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/panpie\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2",
        },
    };
    /*! This file is auto-generated */
    !(function(i, n) {
        var o, s, e;

        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: new Date().valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t));
            } catch (e) {}
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                e.fillText(t, 0, 0);
            var t = new Uint32Array(
                    e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                ),
                r =
                (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(n, 0, 0),
                    new Uint32Array(
                        e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                    ));
            return t.every(function(e, t) {
                return e === r[t];
            });
        }

        function u(e, t, n) {
            switch (t) {
                case "flag":
                    return n(
                            e,
                            "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                            "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                        ) ?
                        !1 :
                        !n(
                            e,
                            "\ud83c\uddfa\ud83c\uddf3",
                            "\ud83c\uddfa\u200b\ud83c\uddf3"
                        ) &&
                        !n(
                            e,
                            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                            "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                        );
                case "emoji":
                    return !n(
                        e,
                        "\ud83d\udc26\u200d\u2b1b",
                        "\ud83d\udc26\u200b\u2b1b"
                    );
            }
            return !1;
        }

        function f(e, t, n) {
            var r =
                "undefined" != typeof WorkerGlobalScope &&
                self instanceof WorkerGlobalScope ?
                new OffscreenCanvas(300, 150) :
                i.createElement("canvas"),
                a = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
            return (
                e.forEach(function(e) {
                    o[e] = t(a, e, n);
                }),
                o
            );
        }

        function t(e) {
            var t = i.createElement("script");
            (t.src = e), (t.defer = !0), i.head.appendChild(t);
        }
        "undefined" != typeof Promise &&
            ((o = "wpEmojiSettingsSupports"),
                (s = ["flag", "emoji"]),
                (n.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }),
                (e = new Promise(function(e) {
                    i.addEventListener("DOMContentLoaded", e, {
                        once: !0
                    });
                })),
                new Promise(function(t) {
                    var n = (function() {
                        try {
                            var e = JSON.parse(sessionStorage.getItem(o));
                            if (
                                "object" == typeof e &&
                                "number" == typeof e.timestamp &&
                                new Date().valueOf() < e.timestamp + 604800 &&
                                "object" == typeof e.supportTests
                            )
                                return e.supportTests;
                        } catch (e) {}
                        return null;
                    })();
                    if (!n) {
                        if (
                            "undefined" != typeof Worker &&
                            "undefined" != typeof OffscreenCanvas &&
                            "undefined" != typeof URL &&
                            URL.createObjectURL &&
                            "undefined" != typeof Blob
                        )
                            try {
                                var e =
                                    "postMessage(" +
                                    f.toString() +
                                    "(" + [JSON.stringify(s), u.toString(), p.toString()].join(
                                        ","
                                    ) +
                                    "));",
                                    r = new Blob([e], {
                                        type: "text/javascript"
                                    }),
                                    a = new Worker(URL.createObjectURL(r), {
                                        name: "wpTestEmojiSupports",
                                    });
                                return void(a.onmessage = function(e) {
                                    c((n = e.data)), a.terminate(), t(n);
                                });
                            } catch (e) {}
                        c((n = f(s, u, p)));
                    }
                    t(n);
                })
                .then(function(e) {
                    for (var t in e)
                        (n.supports[t] = e[t]),
                        (n.supports.everything =
                            n.supports.everything && n.supports[t]),
                        "flag" !== t &&
                        (n.supports.everythingExceptFlag =
                            n.supports.everythingExceptFlag && n.supports[t]);
                    (n.supports.everythingExceptFlag =
                        n.supports.everythingExceptFlag && !n.supports.flag),
                    (n.DOMReady = !1),
                    (n.readyCallback = function() {
                        n.DOMReady = !0;
                    });
                })
                .then(function() {
                    return e;
                })
                .then(function() {
                    var e;
                    n.supports.everything ||
                        (n.readyCallback(),
                            (e = n.source || {}).concatemoji ?
                            t(e.concatemoji) :
                            e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                }));
    })((window, document), window._wpemojiSettings);
    /* ]]> */
</script>
<script type="text/template" id="tmpl-variation-template">
    <div class="woocommerce-variation-description"></div>
    <div class="woocommerce-variation-price"></div>
    <div class="woocommerce-variation-availability"></div>
  </script>
<script type="text/template" id="tmpl-unavailable-variation-template">
    <p role="alert">Sorry, this product is unavailable. Please choose a different combination.</p>
  </script>

<script type="text/template" id="tmpl-rtwpvs-variation-template">
    
    <div class="woocommerce-variation-availability"></div>
  </script>
<script type="text/javascript" src="/client/all/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js">
</script>
<script type="text/javascript" id="jquery-js-after">
    /* <![CDATA[ */
    jQuery(function($) {
        if (!window.Waypoint) {
            // if Waypoint is not available, then we MUST remove our class from all elements because otherwise BGs will never show
            $(
                ".elementor-section.lazy-background,.elementor-column-wrap.lazy-background"
            ).removeClass("lazy-background");
            if (window.console && console.warn) {
                console.warn(
                    "Waypoint library is not loaded so backgrounds lazy loading is turned OFF"
                );
            }
            return;
        }
        $(".lazy-background").each(function() {
            var $section = $(this);
            new Waypoint({
                element: $section.get(0),
                handler: function(direction) {
                    //console.log( [ 'waypoint hit', $section.get( 0 ), $(window).scrollTop(), $section.offset() ] );
                    $section.removeClass("lazy-background");
                },
                offset: $(window).height() *
                    1.5, // when item is within 1.5x the viewport size, start loading it
            });
        });
    });

    /* ]]> */
</script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minae06.js?ver=2.7.0-wc.9.3.1"
    id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        ajax_url: "\/demo\/wordpress\/themes\/panpie\/wp-admin\/admin-ajax.php",
        wc_ajax_url: "\/demo\/wordpress\/themes\/panpie\/?wc-ajax=%%endpoint%%",
        i18n_view_cart: "View cart",
        cart_url: "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/panpie\/cart\/",
        is_cart: "",
        cart_redirect_after_add: "no",
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minf297.js?ver=9.3.1"
    id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min266f.js?ver=2.1.4-wc.9.3.1"
    id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="woocommerce-js-extra">
    /* <![CDATA[ */
    var woocommerce_params = {
        ajax_url: "\/demo\/wordpress\/themes\/panpie\/wp-admin\/admin-ajax.php",
        wc_ajax_url: "\/demo\/wordpress\/themes\/panpie\/?wc-ajax=%%endpoint%%",
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minf297.js?ver=9.3.1"
    id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="/client/all/wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js">
</script>
<script type="text/javascript" id="wp-util-js-extra">
    /* <![CDATA[ */
    var _wpUtilSettings = {
        ajax: {
            url: "\/demo\/wordpress\/themes\/panpie\/wp-admin\/admin-ajax.php",
        },
    };
    /* ]]> */
</script>
<script type="text/javascript" src="/client/all/wp-includes/js/wp-util.min109c.js?ver=6.6.2" id="wp-util-js"></script>
<script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {
        wc_ajax_url: "\/demo\/wordpress\/themes\/panpie\/?wc-ajax=%%endpoint%%",
        i18n_no_matching_variations_text: "Sorry, no products matched your selection. Please choose a different combination.",
        i18n_make_a_selection_text: "Please select some product options before adding this product to your cart.",
        i18n_unavailable_text: "Sorry, this product is unavailable. Please choose a different combination.",
        ajax_url: "\/demo\/wordpress\/themes\/panpie\/wp-admin\/admin-ajax.php",
        i18n_view_cart: "View cart",
        i18n_add_to_cart: "Add to cart",
        i18n_select_options: "Select options",
        cart_url: "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/panpie\/cart\/",
        is_cart: "",
        cart_redirect_after_add: "no",
        enable_ajax_add_to_cart: "yes",
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.minf297.js?ver=9.3.1"
    id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        ajax_url: "\/demo\/wordpress\/themes\/panpie\/wp-admin\/admin-ajax.php",
        wc_ajax_url: "\/demo\/wordpress\/themes\/panpie\/?wc-ajax=%%endpoint%%",
        cart_hash_key: "wc_cart_hash_994194cd4b606816f63169fbef7a072e",
        fragment_name: "wc_fragments_994194cd4b606816f63169fbef7a072e",
        request_timeout: "5000",
    };
    /* ]]> */
</script>
<script type="text/javascript"
    src="/client/all/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minf297.js?ver=9.3.1"
    id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"></script>
<link rel="https://api.w.org/" href="/client/all/wp-json/index.html" />
<meta name="generator" content="WordPress 6.6.2" />
<meta name="generator" content="WooCommerce 9.3.1" />
<link rel="canonical" href="index.html" />
<link rel="preload" href="/client/all/wp-content/themes/panpie/assets/webfonts/fa-brands-400.woff2" as="font"
    type="font/woff2" crossorigin />
<link rel="preload" href="/client/all/wp-content/themes/panpie/assets/webfonts/fa-regular-400.woff2" as="font"
    type="font/woff2" crossorigin />
<link rel="preload" href="/client/all/wp-content/themes/panpie/assets/webfonts/fa-solid-900.woff2" as="font"
    type="font/woff2" crossorigin />
