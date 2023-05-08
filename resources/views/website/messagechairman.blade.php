@extends("layouts.master")

@section('content')
@include('website.breadcrumb')
<!-- Start of breadcrumb section
    ============================================= -->
	{{-- <section id="breadcrumb" class="breadcrumb-section position-relative" data-background="/website/img/background/bcbg.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="breadcrumb-content headline">
				<h2 class="breadcrumb-title"> Message</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Home</a></li>
						<li class="breadcrumb-item active">Message</li>
					</ul>
				</div>
			</div>
		</div>
	</section> --}}
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of about section
	============================================= -->
	<section class="section-padding bg-light-white">
        <div class="container">
            <div class="section-title text-center position-relative pb-3  mx-auto">
                <!-- <h5 class="fw-bold text-primary">Chairman Message</h5> -->

            </div>
            <div class="massagefromch">
                <div class="row">
                {{-- @foreach ($messagechairman as $msg )        --}}
                    <div class="col-lg-12">
                        <div class="post-details mb-md-80">
                            <!-- post quote -->
                            <blockquote class="bg-orange">
                                {{-- <cite class="text-black">by Chairman</cite> --}}
                                <h3 class="fw-600 text-blue">{{ $messagechairman->caption ?? '' }}</h3>
                            </blockquote>
                            <figure class="image-alignment left">
                                <img src="{{ $messagechairman->banner_image ?? '' }}" class="image-fit" alt="">
                            </figure>
                            <p class="fw-500 mb-xl-10" style="margin-top: 20px;"> @php echo $messagechairman->short_content; @endphp</p>
                            <p class="fw-500 mb-xl-10">
                                @php echo $messagechairman->long_content; @endphp</p> 
                        </div>
                    </div>
                {{-- @endforeach    --}}
                </div>
            </div>
        </div>
    </section>
<!-- End of about section
@endsection
