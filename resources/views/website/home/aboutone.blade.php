<section id="site-info" class="site-info-section">
    <div class="container">
        <div class="site-info-content">

        </div>
    </div>
</section>

<!-- Start of about section
	============================================= -->

	<section id="about" class="about-section">
		<div class="container">
			<div class="about-content">			
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="about-text">
							<div class="section-title-left">
								<span class="title-tag"><img src="website/icon/icon5.svg" alt="">About-Us</span>
								<h2>{{ $about->caption }}</h2>
							</div>
							<!-- title -->
							<div class="about-content pera-content">
								<div class="about-text1">
									<p>
										{!! htmlspecialchars_decode($about->short_content ?? '') !!}
									</p>
								</div>
								<div class="about-text2">
									<p>
										{!! htmlspecialchars_decode($about->long_content ?? '') !!}
									</p>
								</div>
								<div class="about-btn text-uppercase">
									<a  href="/gallery/video-gallery">
										<i class="fas fa-play-circle"></i>
										<span>how we generate energy </span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="about-img clearfix">
							<div class="abt-img-set" data-tilt data-tilt-max="10">
								<img src="{{ $about->banner_image ?? ''}}" alt="">
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




{{-- <section class="about-area ptb--60">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <div class="heading">
                    <h1 class="mb--18">{{ $about->caption ?? '' }}</h1>
                    <hr class="delimeter mx-auto mb--22">
                </div>
                <p class="mb--25 text-center">{{ $about->short_content }}
                    <br>
                    {{ $about->long_content }}
                </p>

                <a href="/about-one" class="btn">Read More</a>
            </div>
        </div>
    </div>
</section> --}}
