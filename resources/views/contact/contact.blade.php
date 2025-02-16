@extends('template.master')

@section('title', 'Contact')

@section('content')

<div class="main-wrapper">
	<main class="main-container">

		<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-bg="img/contact-us/1920x260_1.jpg" data-brk-library="component__breadcrumbs_css">
			<span class="brk-abs-bg-overlay brk-base-bg-gradient-right-100 opacity-90"></span>
			<div class="breadcrumbs__wrapper">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-lg-6">
							<div class="d-flex justify-content-lg-end justify-content-start pr-40 pr-xs-0 breadcrumbs__title">
								<h2 class="brk-white-font-color font__weight-semibold font__size-48 line__height-68 font__family-montserrat">
									Contact Us
								</h2>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="pt-25 pb-35 position-static position-lg-relative breadcrumbs__subtitle">
								<h3 class="brk-white-font-color font__family-montserrat font__weight-medium font__size-18 line__height-21 text-uppercase mb-15">
									Apakah ada pertanyaan? Silahkan hubungi kontak kami
								</h3>
								<ol class="breadcrumb font__family-montserrat font__size-15 line__height-16 brk-white-font-color">
									<li>
										<a href="#">Menu</a>
										<i class="fal fa-chevron-right icon"></i>
									</li>
									<li class="active">Contact</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="pt-80 pb-25">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<form id="contactForm" class="brk-subscribe-mail brk-subscribe-mail_dark brk-form-strict pt-15 wow fadeInLeft">
							<div class="row">
								<div class="col-12 col-md-6">
									<input type="text" id="name" placeholder="Your Name">
								</div>
								<div class="col-12 col-md-6">
									<input type="text" id="email" placeholder="Your Mail">
								</div>
								<div class="col-12">
									<textarea id="message" class="bordered-bottom" placeholder="Your Question" style="min-height: 110px;"></textarea>
								</div>
							</div>
							<div class="text-center">
								<button type="button" onclick="sendEmail()" class="btn btn-inside-out btn-lg btn-icon border-radius-30 mt-25 btn-shadow">
									<i class="fas fa-shopping-basket icon-inside"></i>
									<span class="before">send a message</span><span class="text">send a message</span><span class="after">send a message</span>
								</button>
							</div>
						</form>

						<script>
							function sendEmail() {
								var name = document.getElementById("name").value;
								var email = document.getElementById("email").value;
								var message = document.getElementById("message").value;

								var mailtoLink = "mailto:putrawisanggenisatu@gmail.com" +
									"?subject=New Message from " + encodeURIComponent(name) +
									"&body=Name: " + encodeURIComponent(name) +
									"%0D%0AEmail: " + encodeURIComponent(email) +
									"%0D%0AMessage: " + encodeURIComponent(message);

								window.location.href = mailtoLink;
							}
						</script>

					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-5">
						<div class="wow fadeInRight">
							<h1 class="font__family-montserrat font__size-56 line__height-60 font__weight-thin mb-30">
								Butuh Bantuan? <br>
								<span class="font__weight-bold">Hubungi Kami</span>
							</h1>
							<p class="brk-dark-font-color font__size-14 line__height-26 mb-35">Kami siap membantu Anda! Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami. Tim kami akan dengan senang hati memberikan solusi terbaik untuk Anda. </p>
							<p class="font__family-open-sans font__weight-bold font__size-14 mb-15">
								<i class="brk-footer-icon text-middle fa fa-envelope line__height-24 brk-base-font-color"></i>
								<a href="mailto:putrawisanggenisatu@gmail.com" class="show-inline-block">putrawisanggenisatu@gmail.com</a>
							</p>
							<p class="font__family-open-sans font__weight-bold font__size-14 mb-15">
								<i class="brk-footer-icon text-middle fas fa-map-marker-alt line__height-24 brk-base-font-color"></i>
								<span>Jalan Raya Wonosari, Kec. Gondangwetan, Kab. Pasuruan , 67174, Indonesia</span>
							</p>
							<p class="font__family-open-sans font__weight-bold font__size-14 mb-15">
								<i class="brk-footer-icon text-middle fa fa-phone line__height-24 brk-base-font-color"></i>
								<a href="#" class="show-inline-block">082232469415</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="position-relative pt-lg-160 pt-80 pb-80 wow fadeInUp">
			<span class="brk-svg-pattern-container brk-svg-pattern-container-24 brk-svg-pattern-container_top" data-brk-library="component__svg_pattern">
				<svg viewBox="0 0 1922 150">
					<defs>
						<path id="path-id-24-1" d="M1921 873.998v-150H-1z" />
					</defs>
					<g>
						<g transform="translate(1 -724)">
							<use fill="#fff" xlink:href="#path-id-24-1" />
						</g>
					</g>
				</svg>
			</span>
			<div class="brk-abs-overlay brk-base-bg-gradient--30deg"></div>
			<div class="container">
				<h2 class="font__family-montserrat font__weight-bold font__size-56 line__height-60 brk-white-font-color mb-20 text-center wow fadeInUp">FAQ - Pertanyaan Umum</h2>
				<p class="font__size-16 line__height-26 text-white opacity-80 maxw-770 mb-60 text-center wow fadeInUp">Temukan jawaban untuk pertanyaan umum Anda di sini. Jika masih ada hal yang ingin ditanyakan, jangan ragu untuk menghubungi kami!</p>
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="wow fadeInLeft">
							<div class="pl-20 pr-20">
								<div class="mb-90" data-brk-library="component__accordions">
									<div class="accordion accordion-simple accordion-simple-scale" role="tablist" aria-multiselectable="true">
										<div class="card expanded">
											<div class="card-header card-header-sm text-center" role="tab" id="headingOne6">
												<h5 class="mb-0 font__family-montserrat font__weight-semibold letter-spacing-20 font__size-16 line__height-16 position-relative">
													<span class="arrow"></span>
													<a data-toggle="collapse" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">Bagaimana cara kerja sama dengan kami ?
													</a>
												</h5>
												<a class="card-toggle-icon brk-base-font-color" data-toggle="collapse" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
													<i class="fab fa-delicious"></i>
												</a>
											</div>
											<div id="collapseOne6" class="collapse show" role="tabpanel" aria-labelledby="headingOne6">
												<div class="card-block text-center font__family-open-sans bg-position_bottom-right bg-norepeat">
													<div class="row">
														<div class="col-sm-12">
															<img class="mb-20 rounded-circle lazyload" alt="alt" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('img/contact/accordion-bg-image-02.jpg')}}">
															<p class="mt-1 font__family-open-sans letter-spacing-40 font__size-16 line__height-26">
																Untuk bekerja sama dengan kami, Anda bisa menghubungi tim kami melalui email atau telepon. Kami akan mendiskusikan kebutuhan Anda, memberikan solusi yang sesuai, dan menyusun perjanjian kerja sama yang jelas agar proyek berjalan lancar.

															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header card-header-sm text-center" role="tab" id="headingTwo6">
												<h5 class="mb-0 font__family-montserrat font__weight-semibold letter-spacing-20 font__size-16 line__height-16 position-relative">
													<span class="arrow"></span>
													<a data-toggle="collapse" href="#collapseTwo6" aria-expanded="true" aria-controls="collapseTwo6">Apa saja layanan yang tersedia?

													</a>
												</h5>
												<a class="card-toggle-icon brk-base-font-color" data-toggle="collapse" href="#collapseTwo6" aria-expanded="true" aria-controls="collapseTwo6">
													<i class="far fa-gem"></i>
												</a>
											</div>
											<div id="collapseTwo6" class="collapse" role="tabpanel" aria-labelledby="headingTwo6">
												<div class="card-block text-center font__family-open-sans bg-cover">
													<div class="row">
														<div class="col-sm-12">
															<p class="mt-1 font__family-open-sans font__size-16">
																Kami menyediakan berbagai layanan di bidang teknologi, termasuk:

																Pengembangan Aplikasi (Mobile Apps, Software Apps, Web Apps)
																Pemasangan dan Pemeliharaan CCTV
																Servis dan Perbaikan Komputer
																Otomatisasi Industri (SmartFarming, ATS, Stabilizer Industri, Controller PLC)
																Internet of Things (IoT) dan sistem cerdas lainnya
															</p>

														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header card-header-sm text-center" role="tab" id="headingThree6">
												<h5 class="mb-0 font__family-montserrat font__weight-semibold letter-spacing-20 font__size-16 line__height-16 position-relative">
													<span class="arrow"></span>
													<a data-toggle="collapse" href="#collapseThree6" aria-expanded="true" aria-controls="collapseThree6">Berapa lama estimasi pengerjaan proyek?


													</a>
												</h5>
												<a class="card-toggle-icon brk-base-font-color" data-toggle="collapse" href="#collapseThree6" aria-expanded="true" aria-controls="collapseThree6">
													<i class="fab fa-gg"></i>
												</a>
											</div>
											<div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree6">
												<div class="card-block text-center font__family-open-sans bg-cover">
													<div class="row">
														<div class="col-sm-12">
															<p class="mt-1 font__family-open-sans font__size-16">
																Waktu pengerjaan proyek tergantung pada kompleksitas dan cakupan pekerjaan. Secara umum:

																Aplikasi Mobile/Web: 1 - 6 bulan
																Pemasangan CCTV & Servis Komputer: 1 - 7 hari
																Proyek Otomatisasi & IoT: 1 - 3 bulan
																Untuk estimasi lebih akurat, silakan konsultasikan kebutuhan Anda dengan tim kami. </p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h3 class="font__family-montserrat font__size-40 line__height-48 text-uppercase font__weight-bold text-white pl-lg-100 mb-30"><span class="font__weight-light">Inovasi <br></span>Technology <br> Terbaik</h3>
							<p class="font__size-16 line__height-26 pl-lg-100 mb-90 text-white opacity-80 pr-lg-25">Kami menghadirkan solusi cerdas seperti Smart Farming, Otomatisasi Industri & IoT, Stabilizer & ATS, serta sistem kendali PLC & SCADA. Dengan teknologi mutakhir, kami membantu bisnis beroperasi lebih efisien, stabil, dan inovatif. 🚀</p>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="wow fadeInRight">
							<h3 class="font__family-montserrat font__size-40 line__height-48 text-uppercase font__weight-bold text-white mb-30 pl-lg-30 pt-35">
								<span class="font__weight-light">Call to <br></span>Action <br> (CTA)
							</h3>
							<p class="font__size-16 line__height-26 mb-90 text-white opacity-80 pl-lg-30 pr-lg-100">Tertarik untuk bekerja sama dengan kami? Hubungi kami sekarang untuk konsultasi gratis!</p>
							<div class="frame-image img-double-bigger" data-brk-library="component__image_frames">
								<div class="img">
									<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('img/contact/370x540_1.jpg')}}" alt="alt" class="lazyload">
								</div>
								<div class="img">
									<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('img/contact/540x370_1.jpg')}}" alt="alt" class="lazyload">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="brk-map" data-height="520" data-brk-library="component__map">
				<div class="brk-map__section">
					<div class="brk-map__canvas" data-address="Jalan Wonosari, Wonosari , Kec. Gondangwetan , Kab Pasuruan, Indonesia" data-zoom="13" data-type="roadmap" data-marker="{{asset('img/contact/marker.png')}}" data-offset-lat="0.0047" data-style="silver" data-lat="-7.712521" data-lng="112.915191">
					</div>
				</div>
				<div class="brk-map__infoicon brk-map__infoicon_layout-one text-center">
					<span class="marker">
						<img src="{{asset('img/contact/marker.png')}}" alt="alt">
					</span>
					<h4 class="font__family-montserrat font__weight-bold font__size-21 line__height-22">Pasuruan, Indonesia</h4>
					<div class="brk-map__infoicon--text">
						<ul class="font__size-15 line__height-21">
							<li class="brk-dark-font-color">
								<i class="fas fa-phone brk-base-font-color font__size-13"></i>
								<a href="tel:6282232469415">+6282 232 469 415</a>
							</li>
							<li class="brk-dark-font-color">
								<i class="far fa-clock brk-base-font-color font__size-13"></i>
								<span>Senin - Sabtu 08:00-16:00<br>Minggu TUTUP</span>
							</li>
						</ul>
					</div>
					<a href="https://www.google.com/maps/dir/?api=1&destination=-7.712521,112.915191" 
   class="btn border-radius-25 font__family-open-sans font__weight-bold btn-inside-out" 
   data-brk-library="component__button"
   target="_blank">
    <span class="before">Get directions</span>
    <span class="text">Get directions</span>
    <span class="after">Get directions</span>
</a>
				</div>
			</div>
		</section>
	</main>
</div>

@endsection