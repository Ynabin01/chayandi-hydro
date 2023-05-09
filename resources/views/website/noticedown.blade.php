
@extends("layouts.master")

@section('content')

<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section position-relative" data-background="/website/img/background/dark.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="breadcrumb-content headline">
				<h2 class="breadcrumb-title"> News-download</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">News-download</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

    <section class="section-content-block">
        <div class="container">

            <div class="row">
                <iframe src="/uploads/main_attachment/{{$noticedown->main_attachment}}" width="100%" height="900px">
                </iframe>

            </div> <!--  end .row  -->

        </div> <!--  end container -->

    </section> <!-- end .section-content-block  -->

    @endsection

