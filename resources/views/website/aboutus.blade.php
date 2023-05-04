@extends("layouts.master")

@section('content')
<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section position-relative" data-background="website/img/background/bcbg.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="breadcrumb-content headline">
				<h2 class="breadcrumb-title"> About Us</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">About Us</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of about section
	============================================= -->
	<section id="about" class="about-section about-page-about">
		<div class="container">
			<div class="about-content">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="about-text">
							<div class="section-title-left">
								<span class="title-tag"><img src="website/icon/icon5.svg" alt="">Who We Are</span>
								<h2>Use Natural Resources
									Integrated Services And
								Solutions For Industry</h2>
							</div>
							<!-- title -->
							<div class="about-content pera-content">
								<div class="about-text1">
									<p>
										At dolore magna aliqua enim veniam quis nostrud minim exercitation
										ulamco aliquip exa commodo consequat duis aute irure dolor reprehen
										derit voluptate cillum dole afugiat nula pariatur vitae.
									</p>
								</div>
								<div class="about-text2">
									<p>
										Sagittis dia facilisis convalis dictumst sed ipsum tempore. Excepteur sint
										occaecat aidata non proident qu officia deserunt mollit anim.
									</p>
								</div>
								<div class="about-btn text-uppercase">
									<a href="#">
										<i class="fas fa-play-circle"></i>
										<span>how we generate energy</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="about-img clearfix">
							<div class="abt-img-set" data-tilt data-tilt-max="10">
								<img src="website/img/about/ab1.jpg" alt="">
							</div>
							<div class="abt-img-set" data-tilt data-tilt-max="10">
								<img src="website/img/about/ab2.jpg" alt="">
							</div>
							<div class="abt-img-set" data-tilt data-tilt-max="10">
								<img src="website/img/about/ab3.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of about section
	============================================= -->

@endsection
