
@extends("layouts.master")
 
@section('content')
	<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section position-relative"
		data-background="/website/img/background/bcbg.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="breadcrumb-content headline">
				<h2 class="breadcrumb-title"> Details </h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Home</a></li>
						<li class="breadcrumb-item active">Details Page</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End of breadcrumb section
	============================================= -->

	<!-- Start of about section
	============================================= -->

	<section class="section-content-block">
		<div class="container">
			<div class="row">
				{{-- {{ $detailspage }} --}}
				<div class="col-md-12 col-sm-12">
							<article class="post single-post-inner">
								<div class="post-inner-featured-content">
									<img alt="" src="{{ $detailspage->banner_image ?? '' }}">
								</div>
								<div class="single-post-inner-content">
									<p>
										{!! htmlspecialchars_decode($detailspage->short_content ?? '') !!}
									</p>
									<p>
										{!! htmlspecialchars_decode($detailspage->long_content ?? '') !!}
									</p>
									<div class="news-button"> <a href="/uploads/main_attachment/{{$detailspage->main_attachment ?? "" }}">Read more</a> </div>
								</div>
							</article> <!--  end single-post-container -->					 
					</div> <!--  end .single-post-container -->
			</div> <!--  end row  -->
		</div> <!--  end container -->
	</section> <!-- end .section-content-block  -->
	<!-- End of about section
	============================================ -->
    @endsection
