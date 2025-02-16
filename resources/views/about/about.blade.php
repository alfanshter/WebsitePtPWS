@extends('template.master')

@section('title', 'About')

@section('content')
<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-bg="img/1920x258_1.jpg" data-brk-library="component__breadcrumbs_css">
    <span class="brk-abs-bg-overlay brk-bg-grad opacity-80"></span>
    <div class="breadcrumbs__wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start pr-40 pr-xs-0 breadcrumbs__title">
                        <h2 class="brk-white-font-color font__weight-semibold font__size-48 line__height-68 font__family-montserrat">
                            About Us
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="pt-25 pb-35 position-static position-lg-relative breadcrumbs__subtitle">
                        <h3 class="brk-white-font-color font__family-montserrat font__weight-medium font__size-18 line__height-21 text-uppercase mb-15">
                            Selamat datang di PT Putra Wisanggeni Satu
                        </h3>
                        <ol class="breadcrumb font__family-montserrat font__size-15 line__height-16 brk-white-font-color">
                            <li>
                                <a href="#">Menu</a>
                                <i class="fal fa-chevron-right icon"></i>
                            </li>
                            <li class="active">About</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-wrapper">
    <main class="main-container pt-100">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="container">
                            <h3 class="font__family-montserrat font__size-28 font__weight-bold text-left">
                                <span class="heading__number">01</span> Tentang Perusahaan
                            </h3>
                        </div>
                        <p class="font__family-open-sans ml-10 font__size-15 line__height-24 brk-dark-font-color mt-20">PT Putra Wisanggeni Satu adalah perusahaan teknologi yang berkomitmen untuk memberikan solusi inovatif di bidang IoT, pengembangan aplikasi mobile, pembuatan website, otomatisasi industri, pemasangan CCTV, dan instalasi jaringan. Dengan tim ahli yang berpengalaman, kami siap membantu bisnis Anda tumbuh dan berkembang melalui teknologi terkini.</p>
                        <a href="#" class="btn btn-inside-out btn-lg border-radius-30 font__family-open-sans font__weight-bold btn-min-width-200 ml-0 mr-0 mt-25" data-brk-library="component__button">
                            <span class="before">Download Compro</span><span class="text">Click Me</span><span class="after">Download Compro</span>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-inline-5" data-brk-library="component__list">
                            <li class="font__family-montserrat font__size-16 font__weight-bold list-counter">
                                <span class="before"></span>
                                <a href="#">Tim Professional</a>
                                <img src="img/shape-1.png" alt="alt" class="list-shape">
                                <span class="after"></span>
                            </li>
                            <li class="font__family-montserrat font__size-16 font__weight-bold list-counter">
                                <span class="before"></span>Teknologi Terkini
                                <img src="img/shape-1.png" alt="alt" class="list-shape">
                                <span class="after"></span>
                            </li>
                            <li class="font__family-montserrat font__size-16 font__weight-bold list-counter">
                                <span class="before"></span>Layanan 24/7
                                <img src="img/shape-1.png" alt="alt" class="list-shape">
                                <span class="after"></span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="mt-100 mt-md-130">
                    <div class="container">
                        <h3 class="font__family-montserrat font__size-28 font__weight-bold text-left">
                            <span class="heading__number">02</span> Visi dan Misi
                        </h3>
                    </div>
                    <div class="container mt-70 mt-md-80">
                        <div class="accordion accordion-slider" role="tablist" aria-multiselectable="true" data-brk-library="component__accordions">
                            <div class="card expanded">


                                <div class="card">
                                    <div class="card-header text-left" role="tab" id="headingTwo">
                                        <span class="card-dash brk-base-bg-gradient-bottom"></span>
                                        <h5 class="mb-0 font__family-montserrat font__weight-semibold letter-spacing-20 font__size-16 line__height-16 brk-base-font-color text-uppercase">
                                            <a class="font__weight-medium card-title collapsed" data-toggle="collapse" data-parent=".accordion-slider" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fab fa-delicious"></i> Visi
                                            </a>
                                        </h5>
                                        <a class="card-toggle-icon collapsed" data-toggle="collapse" data-parent=".accordion-slider" href="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                                            <span class="before"></span><span class="after"></span>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-block text-left font__family-open-sans">
                                            <h4 class="font__family-montserrat font__weight-bold font__size-24 line__height-24">VISI
                                            </h4>
                                            <p class="mt-25 font__size-15">
                                                mejadi perusahaan dalam solusi teknologi yang inovatif, berkelanjuta, dan terpercaya di tingkat nasional maupun global.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header text-left" role="tab" id="headingThree">
                                        <span class="card-dash brk-base-bg-gradient-bottom"></span>
                                        <h5 class="mb-0 font__family-montserrat font__weight-semibold letter-spacing-20 font__size-16 line__height-16 brk-base-font-color text-uppercase">
                                            <a class="font__weight-medium card-title collapsed" data-toggle="collapse" data-parent=".accordion-slider" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fab fa-gg"></i> MISI
                                            </a>
                                        </h5>
                                        <a class="card-toggle-icon collapsed" data-toggle="collapse" data-parent=".accordion-slider" href="#collapseThree" aria-expanded="false" aria-controls="collapseOne">
                                            <span class="before"></span><span class="after"></span>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-block text-left font__family-open-sans">
                                            <h4 class="font__family-montserrat font__weight-bold font__size-24 line__height-24">Misi
                                            </h4>
                                            <ul class="list-inline-1" data-brk-library="component__list">
                                                <li class="font__family-montserrat font__size-14 list-counter">
                                                    <span class="before"></span>
                                                    <a href="#">Memberikan solusi berbasis teknologi yang efisien dan berkualitas.</a>
                                                </li>
                                                <li class="font__family-montserrat font__size-15 list-counter">
                                                    <span class="before"></span>Meningkatkan kepuasan pelanggan melalui layanan terbaik.
                                                </li>
                                                <li class="font__family-montserrat font__size-16 list-counter">
                                                    <span class="before"></span>Mengembangkan ekosistem digital yang modern dan berkelanjutan.
                                                </li>
                                                <li class="font__family-montserrat font__size-17 list-counter">
                                                    <span class="before"></span>Menjadi mitra strategis bagi pelaku industri
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="lazyload bg-norepeat bg-cover bg-position_center position-relative mt-80" data-bg="http://wp.berserk.nikadevs.com/wp-content/uploads/2018/08/progress-line-gb.jpg">
            <div class="brk-layer brk-bg-light-white-2 opacity-100 position-absolute"></div>

            <div class="container z-index-5 position-relative mb-80">
                <div class="container">
                    <h3 class="font__family-montserrat font__size-28 font__weight-bold text-left">
                        <span class="heading__number">03</span> Layanan Kami
                    </h3>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="progress__wrapper progress__minimal mt-100" data-brk-library="component__progress_bar">
                            <div>
                                <span class="font__family-open-sans font__size-13 font__weight-bold progress__bar-counter hide">80</span>
                            </div>
                            <div class="progress">
                                <div data-valuemax="100" data-valuemin="0" data-valuenow="100" class="progress__bar">
                                    <span class="circle"></span>
                                </div>
                            </div>
                            <h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
                                Programming
                            </h5>
                        </div>
                        <div class="progress__wrapper progress__minimal" data-brk-library="component__progress_bar">
                            <div>
                                <span class="font__family-open-sans font__size-13 font__weight-bold progress__bar-counter hide">60</span>
                            </div>
                            <div class="progress">
                                <div data-valuemax="100" data-valuemin="0" data-valuenow="92" class="progress__bar">
                                    <span class="circle"></span>
                                </div>
                            </div>
                            <h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
                                Electric
                            </h5>
                        </div>
                        <div class="progress__wrapper progress__minimal" data-brk-library="component__progress_bar">
                            <div>
                                <span class="font__family-open-sans font__size-13 font__weight-bold progress__bar-counter hide">93</span>
                            </div>
                            <div class="progress">
                                <div data-valuemax="100" data-valuemin="0" data-valuenow="98" class="progress__bar">
                                    <span class="circle"></span>
                                </div>
                            </div>
                            <h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
                                Maintenance
                            </h5>
                        </div>
                        <div class="progress__wrapper progress__minimal" data-brk-library="component__progress_bar">
                            <div>
                                <span class="font__family-open-sans font__size-13 font__weight-bold progress__bar-counter hide">72</span>
                            </div>
                            <div class="progress">
                                <div data-valuemax="100" data-valuemin="0" data-valuenow="92" class="progress__bar">
                                    <span class="circle"></span>
                                </div>
                            </div>
                            <h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
                                Mechanical
                            </h5>
                        </div>
                        <div class="progress__wrapper progress__minimal" data-brk-library="component__progress_bar">
                            <div>
                                <span class="font__family-open-sans font__size-13 font__weight-bold progress__bar-counter hide">72</span>
                            </div>
                            <div class="progress">
                                <div data-valuemax="100" data-valuemin="0" data-valuenow="94" class="progress__bar">
                                    <span class="circle"></span>
                                </div>
                            </div>
                            <h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
                                Design
                            </h5>
                        </div>
                        <div class="progress__wrapper progress__minimal" data-brk-library="component__progress_bar">
                            <div>
                                <span class="font__family-open-sans font__size-13 font__weight-bold progress__bar-counter hide">72</span>
                            </div>
                            <div class="progress">
                                <div data-valuemax="100" data-valuemin="0" data-valuenow="99" class="progress__bar">
                                    <span class="circle"></span>
                                </div>
                            </div>
                            <h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
                                Analytics
                            </h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3 class="font__family-montserrat font__size-21 font__weight-bold mb-25 mt-110">Layanan Kami</h3>
                        <ul class="list-inline-5" data-brk-library="component__list">
                            <li class="font__family-montserrat font__size-16 font__weight-bold list-counter">
                                <span class="before"></span>
                                <a href="#">Pengembangan Mobile Apps</a>
                                <img src="img/shape-1.png" alt="alt" class="list-shape">
                                <span class="after"></span>
                            </li>
                            <li class="font__family-montserrat font__size-16 font__weight-bold list-counter">
                                <span class="before"></span>Software & Web Development
                                <img src="img/shape-1.png" alt="alt" class="list-shape">
                                <span class="after"></span>
                            </li>
                            <li class="font__family-montserrat font__size-16 font__weight-bold list-counter">
                                <span class="before"></span>Pemasangan & Pemeliharaan CCTV
                                <img src="img/shape-1.png" alt="alt" class="list-shape">
                                <span class="after"></span>
                            </li>
                            <li class="font__family-montserrat font__size-16 font__weight-bold list-counter">
                                <span class="before"></span>Servis Komputer & IT Support
                                <img src="img/shape-1.png" alt="alt" class="list-shape">
                                <span class="after"></span>
                            </li>
                            <li class="font__family-montserrat font__size-16 font__weight-bold list-counter">
                                <span class="before"></span>Otomatisasi Industri & IOT
                                <img src="img/shape-1.png" alt="alt" class="list-shape">
                                <span class="after"></span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <section class="mt-70">
            <div class="container">
                <h3 class="font__family-montserrat font__size-28 font__weight-bold text-left">
                    <span class="heading__number">04</span> Management Kami
                </h3>
            </div>
            <div class="container mb-90 mt-120">
                <div class="brk-team-persone-table" data-brk-library="component__team">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-sm-6">
                            <div class="brk-team-persone-table__item lazyload" data-bg="img/390x390_1.jpg">
                                <span class="brk-base-gradient-persone-table brk-team-persone-table__overlay"></span>
                                <div class="brk-team-persone-table__title brk-team-persone-table__title_dark">
                                    <div class="brk-team-persone-table__name-position">
                                        <a href="#">
                                            <h4 class="font__family-montserrat font__weight-bold font__size-24 line__height-40">Mukhammad Alfan Nurdin
                                                S.Tr.T</h4>
                                        </a>
                                        <span class="font__family-montserrat font__weight-light font__size-15 line__height-21">Direktur Utama</span>
                                    </div>
                                </div>
                                <ul class="brk-team-persone-table__contacts">
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <a href="tel:88001234567">+62 856 550 21 997</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:admin@gmail.com">alfanno8@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <a href="#">alfanshter</a>
                                    </li>
                                </ul>
                                <div class="brk-elev brk-elev-1"></div>
                                <div class="brk-elev brk-elev-2"></div>
                                <div class="brk-elev brk-elev-3"></div>
                                <div class="brk-elev brk-elev-4"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="brk-team-persone-table__item lazyload" data-bg="img/390x390_2.jpg">
                                <span class="brk-base-gradient-persone-table brk-team-persone-table__overlay"></span>
                                <div class="brk-team-persone-table__title brk-team-persone-table__title_white">
                                    <div class="brk-team-persone-table__name-position">
                                        <a href="#">
                                            <h4 class="font__family-montserrat font__weight-bold font__size-24 line__height-40">Wahyu Iskandar
                                                S.E</h4>
                                        </a>
                                        <span class="font__family-montserrat font__weight-light font__size-15 line__height-21">Finance Manager</span>
                                    </div>
                                </div>

                                <div class="brk-elev brk-elev-1"></div>
                                <div class="brk-elev brk-elev-2"></div>
                                <div class="brk-elev brk-elev-3"></div>
                                <div class="brk-elev brk-elev-4"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="brk-team-persone-table__item lazyload" data-bg="img/390x390_3.jpg">
                                <span class="brk-base-gradient-persone-table brk-team-persone-table__overlay"></span>
                                <div class="brk-team-persone-table__title brk-team-persone-table__title_dark">
                                    <div class="brk-team-persone-table__name-position">
                                        <a href="#">
                                            <h4 class="font__family-montserrat font__weight-bold font__size-24 line__height-40">Rizki Mahmudi
                                                S.Kom</h4>
                                        </a>
                                        <span class="font__family-montserrat font__weight-light font__size-15 line__height-21">IT Manager</span>
                                    </div>
                                </div>

                                <div class="brk-elev brk-elev-1"></div>
                                <div class="brk-elev brk-elev-2"></div>
                                <div class="brk-elev brk-elev-3"></div>
                                <div class="brk-elev brk-elev-4"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="brk-team-persone-table__item lazyload" data-bg="img/390x390_4.jpg">
                                <span class="brk-base-gradient-persone-table brk-team-persone-table__overlay"></span>
                                <div class="brk-team-persone-table__title brk-team-persone-table__title_white">
                                    <div class="brk-team-persone-table__name-position">
                                        <a href="#">
                                            <h4 class="font__family-montserrat font__weight-bold font__size-24 line__height-40">Achmad Maharrudin
                                                S.E,.M.SM</h4>
                                        </a>
                                        <span class="font__family-montserrat font__weight-light font__size-15 line__height-21">Manager Operasional</span>
                                    </div>
                                </div>

                                <div class="brk-elev brk-elev-1"></div>
                                <div class="brk-elev brk-elev-2"></div>
                                <div class="brk-elev brk-elev-3"></div>
                                <div class="brk-elev brk-elev-4"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="brk-team-persone-table__item lazyload" data-bg="img/390x390_5.jpg">
                                <span class="brk-base-gradient-persone-table brk-team-persone-table__overlay"></span>
                                <div class="brk-team-persone-table__title brk-team-persone-table__title_dark">
                                    <div class="brk-team-persone-table__name-position">
                                        <a href="#">
                                            <h4 class="font__family-montserrat font__weight-bold font__size-24 line__height-40">M Zakaria Firmansyah
                                                S.T</h4>
                                        </a>
                                        <span class="font__family-montserrat font__weight-light font__size-15 line__height-21">Project Manager</span>
                                    </div>
                                </div>

                                <div class="brk-elev brk-elev-1"></div>
                                <div class="brk-elev brk-elev-2"></div>
                                <div class="brk-elev brk-elev-3"></div>
                                <div class="brk-elev brk-elev-4"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="brk-team-persone-table__item lazyload" data-bg="img/390x390_6.jpg">
                                <span class="brk-base-gradient-persone-table brk-team-persone-table__overlay"></span>
                                <div class="brk-team-persone-table__title brk-team-persone-table__title_white">
                                    <div class="brk-team-persone-table__name-position">
                                        <a href="#">
                                            <h4 class="font__family-montserrat font__weight-bold font__size-24 line__height-40">Aris Velani
                                                S.Sos</h4>
                                        </a>
                                        <span class="font__family-montserrat font__weight-light font__size-15 line__height-21">HRD</span>
                                    </div>
                                </div>

                                <div class="brk-elev brk-elev-1"></div>
                                <div class="brk-elev brk-elev-2"></div>
                                <div class="brk-elev brk-elev-3"></div>
                                <div class="brk-elev brk-elev-4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="ptable-top">
                        <svg viewBox="0 0 1920 1">
                             
                            <line x1="0" y1="1" x2="1920" y2="1" stroke-dasharray="8" />
                        </svg>
                    </div>
                    <div class="ptable-bottom">
                        <svg viewBox="0 0 1920 1">
                             
                            <line x1="0" y1="1" x2="1920" y2="1" stroke-dasharray="8" />
                        </svg>
                    </div>
                    <div class="ptable-right">
                        <svg viewBox="0 0 1 1920">
                             
                            <line x1="1" y1="0" x2="1" y2="1920" stroke-dasharray="8" />
                        </svg>
                    </div>
                    <div class="ptable-left">
                        <svg viewBox="0 0 1 1920">
                             
                            <line x1="1" y1="0" x2="1" y2="1920" stroke-dasharray="8" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <section>

            <div class="all-light mt-70 pt-80 pb-80 bg__style overlay__gradient overlay__gradient-left" data-brk-library="component__steps" style="background-image: url(img/about/bgsejarah.jpg);">
            <div class="container">
                <h3 class="font__family-montserrat font__size-28 font__weight-bold text-left">
                    <span class="heading__number">05</span> Sejarah Perusahaan
                </h3>
            </div><br><br>
                <div class="container mt-50">
                    <div class="tabs-wrapper maxw-970">
                        <div class="steps__wrapper-main steps__wrapper-history">
                            <div class="steps__progress"></div>
                            <ul class="steps__wrapper tabs" data-tabgroup="tab-group-4">
                                <li class="complete">
                                    <a href="#tab-4_1">
                                        <p class="font__family-open-sans font__weight-bold font__size-14 steps__title">2020
                                            <span class="after"></span>
                                        </p>
                                        <span class="steps__dot"></span>
                                    </a>
                                </li>
                                <li class="complete">
                                    <a href="#tab-4_2" class="active">
                                        <p class="font__family-open-sans font__weight-bold font__size-14 steps__title">2021
                                            <span class="after"></span>
                                        </p>
                                        <span class="steps__dot"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#tab-4_3">
                                        <p class="font__family-open-sans font__weight-bold font__size-14 steps__title">2022
                                            <span class="after"></span>
                                        </p>
                                        <span class="steps__dot"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#tab-4_4">
                                        <p class="font__family-open-sans font__weight-bold font__size-14 steps__title">2023
                                            <span class="after"></span>
                                        </p>
                                        <span class="steps__dot"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#tab-4_5">
                                        <p class="font__family-open-sans font__weight-bold font__size-14 steps__title">2024
                                            <span class="after"></span>
                                        </p>
                                        <span class="steps__dot"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="tab-group-4" class="tabgroup text-lg-left text-center mt-60">
                            <div id="tab-4_1">
                                <h4 class="font__family-montserrat font__weight-bold font__size-21">2020 Year</h4>
                                <p class="font__family-open-sans font__size-15 mt-20">Pada tahun 2020, perjalanan perusahaan dimulai dengan pendirian Iki Online di bawah naungan PT Sinar Muda Kreatif (PT SMK). Iki Online hadir sebagai solusi aplikasi digital yang bertujuan untuk memberikan layanan inovatif di berbagai bidang. Dengan semangat untuk menciptakan teknologi yang bermanfaat, tim mulai mengembangkan berbagai aplikasi yang dapat membantu bisnis dan masyarakat dalam mengakses layanan digital secara lebih efisien.</p>
                            </div>
                            <div id="tab-4_2">
                                <h4 class="font__family-montserrat font__weight-bold font__size-21">2021 Year</h4>
                                <p class="font__family-open-sans font__size-15 mt-20">Awal tahun 2021 menjadi periode penuh perubahan besar. Pada bulan Januari, PT Sinar Muda Kreatif mengalami pembekuan akta dan pembubaran anggota perusahaan. Namun, dari perubahan ini lahirlah PT Putra Wisanggeni Satu, yang resmi didirikan pada bulan April dengan struktur dan visi yang lebih matang. Dengan perombakan anggota perusahaan, PT Putra Wisanggeni Satu hadir dengan fokus yang lebih luas dalam dunia teknologi, bukan hanya pada pengembangan aplikasi, tetapi juga layanan berbasis digital lainnya yang lebih modern dan adaptif terhadap kebutuhan industri.</p>
                            </div>
                            <div id="tab-4_3">
                                <h4 class="font__family-montserrat font__weight-bold font__size-21">2022 Year</h4>
                                <p class="font__family-open-sans font__size-15 mt-20">ahun 2022 menjadi momen kebangkitan PT Putra Wisanggeni Satu dengan keberhasilan dalam pengembangan berbagai aplikasi digital. Beberapa aplikasi unggulan yang lahir di tahun ini antara lain:

                                    Lebu Digital, aplikasi yang menawarkan layanan digital inovatif untuk berbagai kebutuhan.
                                    Belka, platform yang memberikan solusi cerdas bagi pengguna.
                                    BSl App, aplikasi lain yang turut memperkuat ekosistem digital perusahaan.
                                    Kesuksesan ini membawa perusahaan ke tahap berikutnya, yaitu ekspansi ke pengadaan barang dan jasa komputer. Dengan melihat potensi pasar yang besar, PT Putra Wisanggeni Satu mulai merambah ke sektor ini, menyediakan berbagai perangkat keras dan lunak untuk memenuhi kebutuhan bisnis dan industri di era digital.</p>
                            </div>
                            <div id="tab-4_4">
                                <h4 class="font__family-montserrat font__weight-bold font__size-21">2023 Year</h4>
                                <p class="font__family-open-sans font__size-15 mt-20"> Pada tahun 2023, PT Putra Wisanggeni Satu semakin berkembang dengan menambahkan layanan baru di bidang otomatisasi industri dan Internet of Things (IoT). Tahun ini menjadi tonggak penting dalam perjalanan perusahaan, di mana kami mulai mengembangkan berbagai solusi canggih untuk meningkatkan efisiensi industri dan bisnis.

                                    Kami berhasil menciptakan berbagai produk inovatif, termasuk Smart Farming, sebuah sistem berbasis IoT yang membantu optimalisasi pertanian melalui sensor dan otomatisasi. Selain itu, kami juga menghadirkan Automatic Transfer Switch (ATS) dan Stabilizer Industri, yang dirancang untuk menjaga kestabilan daya listrik di lingkungan industri. Pengembangan Controller PLC juga menjadi salah satu pencapaian besar kami, memungkinkan berbagai sistem industri untuk bekerja lebih efisien dan terintegrasi.
                                </p>
                            </div>
                            <div id="tab-4_5">
                                <h4 class="font__family-montserrat font__weight-bold font__size-21">2024 Year</h4>
                                <p class="font__family-open-sans font__size-15 mt-20">
                                    Dengan fondasi yang telah dibangun, PT Putra Wisanggeni Satu terus berkomitmen untuk menghadirkan teknologi yang inovatif, efisien, dan dapat diandalkan. Masa depan perusahaan akan difokuskan pada pengembangan lebih lanjut di bidang digitalisasi industri, kecerdasan buatan (AI), dan solusi berbasis IoT yang lebih luas. Kami percaya bahwa dengan terus berinovasi, PT Putra Wisanggeni Satu dapat menjadi pemimpin dalam dunia teknologi di Indonesia dan berkontribusi dalam membangun ekosistem digital yang lebih maju. 🚀
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="overlay_after brk-bg-gradient-10deg-92"></span>
            </div>
        </section>
    </main>
</div>
<a href="#top" id="toTop"></a>
<script defer="defer" src="js/scripts.min.js"></script>

@endsection