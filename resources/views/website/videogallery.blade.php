@extends('layouts.master')

@section('content')
     <!-- Breadcrumb area Start -->
     <section id="breadcrumb" class="breadcrumb-section position-relative" data-background="/website/img/background/bcbg.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="breadcrumb-content headline">
				<h2 class="breadcrumb-title">Video Gallery</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Gallery</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <div class="inner-page-content">
            <!-- Services Area Start -->
            <section class="services-area ptb--60">
                <div class="container">
                    <div class="row">
                        @foreach ($photos as $photo)
                        <div class="col-xl-4 col-lg-4 col-md-6 mb--30" style="margin-top: 31px; margin-bottom: 20px;">
                            <iframe width="100%" height="315" src="{{ $photo->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        @endforeach               
                    </div>
                </div>
            </section>
            <!-- Services Area End -->
        </div>
    </main>
    <!-- Main Content Wrapper End -->

@endsection
