@extends('layouts.master')

@section('content')

<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section position-relative" data-background="/website/img/background/bcbg.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="breadcrumb-content headline">
				<h2 class="breadcrumb-title">Photo Gallery</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Gallery</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->	

<!-- Start of about section
	============================================= -->
    @if (isset($photos))
        <section class="section-padding">
            <div class="container">
                <div class="gallery-view">
                    <div class="row" id="lightgallery"> 
                        @foreach ($photos as $photo )
                            <div class="item col-md-4" data-src="/uploads/photo_gallery/{{$photo->file}}" data-sub-html="<h4>Login Int'l</h4>">
                                <a href="">
                                    <img src="/uploads/photo_gallery/{{$photo->file}}" alt="Login Int'l"/>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
<!-- End of about section
	============================================= -->	
@endsection

 