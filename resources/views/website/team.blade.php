@extends("layouts.master")

@section('content')
@include('website.breadcrumb')
	<!-- Start of breadcrumb section
        ============================================= -->
	{{-- <section id="breadcrumb" class="breadcrumb-section position-relative"
		data-background="/website/img/background/bcbg.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="breadcrumb-content headline">
				<h2 class="breadcrumb-title"> TEAM MEMBERS</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">TEAM MEMBERS</li>
					</ul>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End of breadcrumb section
	============================================= -->

	<!-- TEAM SECTION 01 -->

    @if (@isset($teams))
    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-left text-center" style="margin-bottom: 39px;">
				<span class="title-tag"><img src="/website/icon/icon5.svg" alt=""></span>
				<h2>TEAM MEMBERS</h2>
			</div>
                    <div class="row g-5">
                        @foreach ($teams as $team)
                            <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                <div class="team-item bg-light rounded overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="{{$team->banner_image ?? ''}}" alt="">
                                        <div class="team-social">
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-center py-4 card-name-box">
                                        <h4 class="text-primary">{{$team->caption ?? ''}}</h4>
                                        <p class="text-uppercase m-0">{{$team->short_content ?? ''}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
        </div>
    </div>
    @endif
    @endsection
