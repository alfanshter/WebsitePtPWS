<!DOCTYPE html>
<html lang="en" data-brk-skin="{{asset('brk-blue.css')}}">

<head>
    <title>PT Putra Wisanggeni Satu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="favicon.ico">
    <meta name="theme-color" content="#2775FF">
    <meta name="keywords" content="themeforest, theme, html, template">
    <meta name="description" content="themeforest, theme, html, template">
    <link rel="stylesheet" id="brk-direction-bootstrap" href="{{asset('css/assets/bootstrap.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" id="brk-skin-color" href="{{asset('css/skins/brk-blue.css')}}">
    <link id="brk-base-color" rel="stylesheet" href="{{asset('css/skins/brk-base-color.css')}}">
    <link rel="stylesheet" id="brk-direction-offsets" href="{{asset('css/assets/offsets.css')}}">
    <link id="brk-css-min" rel="stylesheet" href="{{asset('css/assets/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/revslider/css/settings.css')}}">


</head>

<body>
    <div class="brk-loader">
        <div class="brk-loader__loader"></div>
    </div>
    
    <style>
        #rev_slider_24_1_wrapper .tp-loader.spinner2 {
            background-color: #0071fc !important;
        }

        .icon__btn>.after {
            opacity: .08 !important
        }

        .icon__btn>.before {
            opacity: .05 !important
        }
    </style>
    <style>
        .mt--230 {
            margin-top: -230px
        }

        @media (max-width:991px) {
            .mt--230 {
                margin-top: 70px
            }
        }

        .mt--337 {
            margin-left: -337px
        }

        @media (max-width:1199px) {
            .mt--337 {
                margin-left: 0
            }
        }

        @media (min-width:1230px) {
            .image-map-creative_agency {
                width: 170%;
                left: -47%;
                top: 33px !important
            }

            [dir=rtl] .image-map-creative_agency {
                left: auto;
                right: -47%
            }

            .image-map-desc-creative_agency {
                padding-top: 21% !important;
                padding-bottom: 11% !important
            }
        }
    </style>
    <script>
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
    <div class="brk-header-mobile">
        <div class="brk-header-mobile__open brk-header-mobile__open_white">
            <span></span>
        </div>
        <div class="brk-header-mobile__logo">
            <!-- <a href="#">
                <img class="brk-header-mobile__logo-1 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('img/logo-2.png')}}" alt="alt">
                <img class="brk-header-mobile__logo-2 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('img/logo-dark-2.png')}}" alt="alt">
            </a> -->
        </div>
    </div>


    @include('template.header')

    <div id="top"></div>


    <div class="main-page">

        @yield('content')
       
        <!-- footer -->
        @include('template.footer')

    </div>

    <a href="#top" id="toTop"></a>
    <script defer="defer" src="{{asset('js/scripts.min.js')}}"></script>
    <script defer="defer" src="{{asset('vendor/revslider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script defer="defer" src="{{asset('vendor/revslider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script defer="defer" src="{{asset('vendor/revslider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script defer="defer" src="{{asset('vendor/revslider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script defer="defer" src="{{asset('vendor/revslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script defer="defer" src="{{asset('vendor/revslider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script defer="defer" src="{{asset('vendor/revslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script>
        var revapi24,
            tpj;
        (function() {
            if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
            else onLoad();

            function onLoad() {
                if (tpj === undefined) {
                    tpj = jQuery;
                    if ("on" == "on") tpj.noConflict();
                }
                if (tpj("#rev_slider_24_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_24_1");
                } else {
                    revapi24 = tpj("#rev_slider_24_1").show().revolution({
                        sliderType: "hero",
                        jsFileLocation: "vendor/revslider/js/",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 5000,
                        navigation: {},
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1200, 992, 768, 576],
                        gridheight: [1200, 768, 960, 720],
                        lazyType: "none",
                        parallax: {
                            type: "mouse",
                            origo: "slidercenter",
                            speed: 800,
                            speedbg: 0,
                            speedls: 0,
                            levels: [4, 6, 8, 10, 12, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                            disable_onmobile: "on"
                        },
                        shadow: 0,
                        spinner: "spinner2",
                        autoHeight: "off",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            disableFocusListener: false,
                        }
                    });
                }; /* END OF revapi call */
            }; /* END OF ON LOAD FUNCTION */
        }()); /* END OF WRAPPING FUNCTION */
    </script>
</body>

</html>