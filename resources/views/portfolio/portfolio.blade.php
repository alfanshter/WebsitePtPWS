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
					
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370 iot" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/iot-2.png')}}" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									Smart Farming
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
								sensor untuk memantau kadar air secara real-time, mengoptimalkan irigasi, dan meningkatkan efisiensi serta hasil panen.
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="{{asset('img/portfolio/iot-2.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-8 col-md-6 brk-grid__item brk-grid__item_height-370 software" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/software_1.png')}}" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									Simantab Indibiduan
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
								aplikasi pelaporan dan informasi bencana di Kabupaten Pasuruan, menampilkan lokasi, jenis bencana, foto, dan komentar masyarakat secara real-time.
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="{{asset('img/portfolio/software_1.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370  otomatisasi" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/otoindu-3.png')}}" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									CCTV Perumahan
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
								Pemasangan CCTV Hikvision di perumahan untuk keamanan optimal, memantau area secara real-time dengan kualitas video jernih.
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="{{asset('img/portfolio/otoindu-3.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370  otomatisasi" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/otoindu-5.png')}}" data-brk-library="component__content_slider,fancybox,anime">
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
									<a href="{{asset('img/portfolio/otoindu-5.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370 cctv" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/cctv-3.png')}}" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									CCTV Perumahan
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
								Pemasangan CCTV Hikvision di perumahan untuk keamanan optimal, memantau area secara real-time dengan kualitas video jernih.
							
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="{{asset('img/portfolio/cctv-3.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				

					<div class="col-xl-6 col-lg-8 col-md-6 brk-grid__item brk-grid__item_height-370 software" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/software_2.png')}}" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									Belka
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
								layanan servis kendaraan yang datang langsung ke lokasi pelanggan. Kami menangani perbaikan, perawatan, dan darurat kendaraan dengan cepat, praktis, dan profesional.								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="{{asset('img/portfolio/software_2.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-8 col-md-6 brk-grid__item brk-grid__item_height-370 software" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/software_3.png')}}" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									IKI ONLINE
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
								layanan transportasi yang menawarkan perjalanan aman, cepat, dan nyaman. Dengan pemesanan mudah melalui aplikasi, IKI Online menyediakan solusi mobilitas praktis untuk kebutuhan harian Anda.				</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="{{asset('img/portfolio/software_3.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-8 col-md-6 brk-grid__item brk-grid__item_height-370 software" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/software_4.png')}}" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									Management Perusahaan
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
								Aplikasi absensi dan manajemen perusahaan memudahkan pencatatan kehadiran, pengelolaan karyawan, serta monitoring kinerja secara real-time. Solusi praktis untuk efisiensi operasional perusahaan.				</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="{{asset('img/portfolio/software_4.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370  iot" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/iot-3.png')}}" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									SmartFarming Warna Daun
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
								Smart Farming Warna Daun memantau warna daun untuk mendeteksi kesehatan tanaman, kebutuhan air, dan kekurangan nutrisi secara cepat.
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="{{asset('img/portfolio/iot-3.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					

					<div class="col-xl-6 col-lg-8 col-md-6 brk-grid__item brk-grid__item_height-370  cctv" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/cctv-1.png')}}" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									CCTV Kandang Ayam
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
								Pemasangan CCTV Hikvision di kandang ayam untuk memantau keamanan dan kondisi ayam secara real-time, memastikan lingkungan yang aman dan produktif.						</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="{{asset('img/portfolio/cctv-1.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370 cctv" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/cctv-2.png')}}" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									CCTV Bangunan
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
								Pemasangan CCTV di toko bangunan untuk meningkatkan keamanan, memantau aktivitas pelanggan dan staf, serta mencegah tindakan kriminal di area toko.
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="{{asset('img/portfolio/cctv-2.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370  iot" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/iot-1.png')}}" data-brk-library="component__content_slider,fancybox,anime">
							<div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
							<div class="post-filmstrip__content text-center">
								<h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
									SmartFarming Greenhouse
								</h3>
								<div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
								mengoptimalkan kondisi lingkungan dengan teknologi untuk meningkatkan efisiensi dan hasil pertanian di dalam rumah kaca.
								</div>
								<div class="links">
									<a href="#" class="links__permalink bg-white-20">
										<i class="fas fa-link"></i>
									</a>
									<a href="{{asset('img/portfolio/iot-1.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370 otomatisasi" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/otoindu-1.png')}}" data-brk-library="component__content_slider,fancybox,anime">
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
									<a href="{{asset('img/portfolio/otoindu-1.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370  otomatisasi" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/otoindu-2.png')}}" data-brk-library="component__content_slider,fancybox,anime">
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
									<a href="{{asset('img/portfolio/otoindu-2.png')}}" class="links__view fancybox">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 brk-grid__item brk-grid__item_height-370  otomatisasi" data-brk-hover3d='{"imgWrapper": ".post-filmstrip", "caption": ".post-filmstrip__content"}'>
						<div class="post-filmstrip text-center brk-base-box-shadow lazyload" data-bg="{{asset('img/portfolio/otoindu-4.png')}}" data-brk-library="component__content_slider,fancybox,anime">
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
									<a href="{{asset('img/portfolio/otoindu-4.png')}}" class="links__view fancybox">
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