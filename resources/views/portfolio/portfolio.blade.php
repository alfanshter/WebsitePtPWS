@extends('template.master')

@section('title', 'Portfolio')

@section('content')
<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-bg="img/1920x258_1.jpg" data-brk-library="component__breadcrumbs_css">
		<span class="brk-abs-bg-overlay brk-bg-grad opacity-80"></span>
		<div class="breadcrumbs__wrapper">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6">
						<div class="d-flex justify-content-lg-end justify-content-start pr-40 pr-xs-0 breadcrumbs__title">
							<h2 class="brk-white-font-color font__weight-semibold font__size-48 line__height-68 font__family-montserrat">
								Our Services
							</h2>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="pt-25 pb-35 position-static position-lg-relative breadcrumbs__subtitle">
							<h3 class="brk-white-font-color font__family-montserrat font__weight-medium font__size-18 line__height-21 text-uppercase mb-15">
								Check all our services
							</h3>
							<ol class="breadcrumb font__family-montserrat font__size-15 line__height-16 brk-white-font-color">
								<li>
									<a href="#">Menu</a>
									<i class="fal fa-chevron-right icon"></i>
								</li>
								<li class="active">Portfolio</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-wrapper mb-70">
		<div class="brk-light-gradient-0deg-100 brk-border-btn pb-110" data-brk-library="component__portfolio_masonry" style="margin-bottom: -150px;">
			<div class="d-flex pl-15 pr-15">
				<ul class="brk-filters brk-filters_style-2 font__size-14 font__weight-semibold line__height-16 text-uppercase mx-auto d-inline-flex brk-base-font-color pl-35 pr-35 mt-70 mt-lg-0 mb-20 mb-lg-60">
					<li class="brk-filters__item active" data-filter="*">
						<span>All</span>
					</li>
					<li class="brk-filters__item" data-filter=".software">
						<span>Software</span>
					</li>
					<li class="brk-filters__item" data-filter=".cctv">
						<span>CCTV</span>
					</li>
					<li class="brk-filters__item" data-filter=".otomatisasi">
						<span>Otomatisasi Industri</span>
					</li>
					<li class="brk-filters__item" data-filter=".iot">
						<span>IoT</span>
					</li>
				</ul>
			</div>
			<div class="container">
				<div class="brk-grid row">
					<div class="brk-grid__sizer"></div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370 cctv iot" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="img/400x400_1.jpg" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									7 Signs
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
									The web is both an interactive and virtually unlimited medium, meaning
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="img/400x400_1.jpg" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-8 col-md-6 brk-grid__item brk-grid__item_height-370 software cctv" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="img/800x800_1.jpg" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									Smartly Coded & Maintained.
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
									The web is both an interactive and virtually unlimited medium, meaning that your own little corner of it has great potential.
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="img/800x800_1.jpg" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370 otomatisasi iot" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="img/400x800_1.jpg" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									Scalable
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
									The web is both an interactive and virtually unlimited medium, meaning
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="img/400x800_1.jpg" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-8 col-md-6 brk-grid__item brk-grid__item_height-370 software cctv" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="img/800x400_1.jpg" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									Smartly Coded & Maintained.
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
									The web is both an interactive and virtually unlimited medium, meaning that your own little corner of it has great potential.
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="img/800x400_1.jpg" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370 otomatisasi iot" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="img/home-page/isotope-3.jpg" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									Scalable
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
									The web is both an interactive and virtually unlimited medium, meaning.
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="img/home-page/isotope-3.jpg" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370 cctv iot" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="img/home-page/isotope-1.jpg" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									7 Signs
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
									The web is both an interactive and virtually unlimited medium, meaning
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="img/home-page/isotope-1.jpg" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370 otomatisasi iot">
						<div class="brk-hosted-video" data-brk-library="component__media_embeds,fancybox">
							<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/home-page/isotope-3.jpg" alt="alt" class="brk-hosted-video__img lazyload">
							<div class="brk-hosted-video__body">
								<a class="icon__btn icon__btn_reverse icon__btn-circled icon__btn-lg fancybox brk-hosted-video__btn" href="http://dev.nikadevs.com/berserk-data/Placeholder_Video.mp4" data-brk-library="component__button">
									<span class="before"></span>
									<i class="fa fa-play" aria-hidden="true"></i>
									<span class="after"></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370 cctv iot" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="img/home-page/isotope-1.jpg" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									7 Signs
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
									The web is both an interactive and virtually unlimited medium, meaning
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="img/home-page/isotope-1.jpg" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-8 col-md-6 brk-grid__item brk-grid__item_height-370 software cctv" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="img/home-page/isotope-2.jpg" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									Smartly Coded & Maintained.
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
									The web is both an interactive and virtually unlimited medium, meaning that your own little corner of it has great potential.
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="img/home-page/isotope-2.jpg" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<button class="btn btn-inside-out btn-lg btn-inside-out-invert btn-dark-shadow-small font__weight-bold pr-65 pl-65 ml-auto mr-auto mt-0 mb-0 border-radius-30 brk-load-button" data-brk-library="component__button">
						<span class="before">load more</span><span class="text">Click Me</span><span class="after">load more</span>
					</button>
				</div>
			</div>
		</div>
	</div>

    @endsection