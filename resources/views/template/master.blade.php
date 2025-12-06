<!DOCTYPE html>
<html lang="id" data-brk-skin="{{asset('brk-blue.css')}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Primary Meta Tags -->
    <title>@yield('title', 'Jasa Pembuatan Aplikasi & Website - PT Putra Wisanggeni Satu')</title>
    <meta name="title" content="@yield('meta_title', 'Jasa Pembuatan Aplikasi & Website - PT Putra Wisanggeni Satu')">
    <meta name="description" content="@yield('meta_description', 'PT Putra Wisanggeni Satu menyediakan jasa pembuatan aplikasi mobile, website, otomasi industri, IoT, dan pemasangan CCTV. Solusi teknologi terbaik untuk bisnis Anda.')">
    <meta name="keywords" content="@yield('meta_keywords', 'jasa pembuatan aplikasi mobile, jasa pembuatan website, otomasi industri, IoT, pemasangan CCTV, PT Putra Wisanggeni Satu')">
    <meta name="author" content="PT Putra Wisanggeni Satu">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Jasa Pembuatan Aplikasi & Website - PT Putra Wisanggeni Satu')">
    <meta property="og:description" content="@yield('og_description', 'PT Putra Wisanggeni Satu menyediakan jasa pembuatan aplikasi mobile, website, otomasi industri, IoT, dan pemasangan CCTV.')">
    <meta property="og:image" content="@yield('og_image', asset('img/favicon/android-chrome-512x512.png'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', 'Jasa Pembuatan Aplikasi & Website - PT Putra Wisanggeni Satu')">
    <meta property="twitter:description" content="@yield('twitter_description', 'PT Putra Wisanggeni Satu - Solusi teknologi terbaik untuk bisnis Anda')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('img/favicon/android-chrome-512x512.png'))">

    <meta name="format-detection" content="telephone=6282232469415">
    <meta name="theme-color" content="#2775FF">

    <!-- Additional SEO Meta Tags -->
    <meta name="geo.region" content="ID">
    <meta name="geo.placename" content="Indonesia">
    <meta name="language" content="Indonesian">
    <meta name="rating" content="general">
    <meta name="revisit-after" content="7 days">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/favicon/site.webmanifest')}}">

    <!-- Preconnect to external domains for faster loading -->
    <link rel="preconnect" href="https://use.fontawesome.com">
    <link rel="dns-prefetch" href="https://use.fontawesome.com">

    <!-- Critical CSS - load first -->
    <link rel="stylesheet" id="brk-direction-bootstrap" href="{{asset('css/assets/bootstrap.css')}}">
    <link rel="stylesheet" id="brk-skin-color" href="{{asset('css/skins/brk-blue.css')}}">
    <link id="brk-base-color" rel="stylesheet" href="{{asset('css/skins/brk-base-color.css')}}">

    <!-- Non-critical CSS - load with media print trick for async -->
    <link rel="stylesheet" id="brk-direction-offsets" href="{{asset('css/assets/offsets.css')}}" media="print" onload="this.media='all'">
    <link id="brk-css-min" rel="stylesheet" href="{{asset('css/assets/styles.min.css')}}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{asset('vendor/revslider/css/settings.css')}}" media="print" onload="this.media='all'">

    <!-- Font Awesome - defer loading -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" media="print" onload="this.media='all'">

    <noscript>
        <link rel="stylesheet" id="brk-direction-offsets" href="{{asset('css/assets/offsets.css')}}">
        <link id="brk-css-min" rel="stylesheet" href="{{asset('css/assets/styles.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/revslider/css/settings.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </noscript>

    @yield('additional_css')

    <!-- Enhanced Schema Markup - LocalBusiness + Organization -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": ["LocalBusiness", "Organization", "ProfessionalService"],
            "name": "PT Putra Wisanggeni Satu",
            "alternateName": "PT PWS",
            "image": "{{asset('img/favicon/android-chrome-512x512.png')}}",
            "logo": {
                "@type": "ImageObject",
                "url": "{{asset('img/favicon/android-chrome-512x512.png')}}",
                "width": "512",
                "height": "512"
            },
            "url": "{{ url('/') }}",
            "telephone": "+6282232469415",
            "email": "info@putrawisanggeni.com",
            "description": "PT Putra Wisanggeni Satu menyediakan solusi IoT, aplikasi mobile, website profesional, otomasi industri, dan CCTV dengan teknologi terkini dan tim berpengalaman.",
            "foundingDate": "2020",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Jl. Contoh No. 123",
                "addressLocality": "Jakarta",
                "addressRegion": "DKI Jakarta",
                "postalCode": "10110",
                "addressCountry": "ID"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "-6.2088",
                "longitude": "106.8456"
            },
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                    "opens": "08:00",
                    "closes": "17:00"
                }
            ],
            "priceRange": "$$",
            "areaServed": {
                "@type": "Country",
                "name": "Indonesia"
            },
            "sameAs": [
                "https://www.facebook.com/ptpws",
                "https://www.instagram.com/ptpws",
                "https://www.linkedin.com/company/ptpws",
                "https://twitter.com/ptpws"
            ],
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "reviewCount": "127",
                "bestRating": "5",
                "worstRating": "1"
            },
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Layanan Teknologi",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Internet of Things (IoT)",
                            "description": "Solusi IoT untuk menghubungkan perangkat, sistem monitoring real-time, automasi terintegrasi untuk smart home, smart farming, dan enterprise."
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Software Development",
                            "description": "Pembuatan aplikasi mobile Android & iOS, website profesional, sistem informasi custom, dan aplikasi enterprise."
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Otomasi Industri",
                            "description": "Solusi otomasi untuk industri dengan sistem SCADA, PLC, sensor IoT, dan monitoring terpusat untuk efisiensi operasional."
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "CCTV & Security System",
                            "description": "Instalasi CCTV profesional dengan remote monitoring, AI detection, cloud storage, dan sistem keamanan terintegrasi."
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Smart Home Solutions",
                            "description": "Implementasi smart home dengan kontrol otomatis lampu, AC, keamanan, dan integrasi IoT devices."
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Cloud Solutions",
                            "description": "Layanan cloud computing, hosting, data storage, dan infrastruktur IT berbasis cloud untuk skalabilitas bisnis."
                        }
                    }
                ]
            }
        }
    </script>

    <!-- WebSite Schema with SearchAction -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "PT Putra Wisanggeni Satu",
            "url": "{{ url('/') }}",
            "potentialAction": {
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "{{ url('/') }}/search?q={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            },
            "publisher": {
                "@type": "Organization",
                "name": "PT Putra Wisanggeni Satu",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{asset('img/favicon/android-chrome-512x512.png')}}"
                }
            }
        }
    </script>

    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "{{ url('/') }}"
                }
            ]
        }
    </script>

    @yield('additional_schema')

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
                <img class="brk-header-mobile__logo-1 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('img/footer/brk-logo-2.png')}}" alt="alt">
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
