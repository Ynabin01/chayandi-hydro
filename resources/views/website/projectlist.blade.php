
@extends("layouts.master")

@section('content')
	<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section position-relative"
		data-background="website/img/background/scbg.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="breadcrumb-content headline">
				<h2 class="breadcrumb-title">Project Updates</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Home</a></li>
						<li class="breadcrumb-item active">Project</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End of breadcrumb section
	============================================= -->

	<!-- Start of driven solution section
	============================================= -->
	<section id="driven-solution" class="driven-solution-section service-page-driven position-relative">
		<div class="container">
			<div class="section-title-left text-center">
				<span class="title-tag"><img src="/website/icon/icon5.svg" alt=""></span>
				<h2>PROJECT UPDATES</h2>
			</div>
			<!-- title -->
			<div class="features-content">
				@if (isset($projectlist)) 
					<div class="row">
						@foreach ($projectlist as $project)		
							<div class="col-md-4">
								<div class="features-icon-text text-center position-relative">
									<div class="features-icon">
										<img src="{{ $project->banner_image ?? ''}}" alt="">
									</div>
									<div class="features-text headline pera-content">
										<h3>{{ $project->caption ?? '' }}</h3>
										<p> {!! htmlspecialchars_decode($project->short_content ?? '') !!} </p>
									</div>
									<div class="features-hover-content">
										<div class="features-hover-text headline pera-content">
											<h3>{{ $project->caption ?? '' }}</h3>
											<p> {!! htmlspecialchars_decode($project->long_content ?? '') !!} </p>
											<div class="fh-more">
												<a href="{{route('ReadMore', ['id' => $project->id])}}">Read More <img src="/website/img/arrow3.png" alt=""></a>
												{{-- {{route('ReadMore', ['id' => $project->id])}} --}}
										    </div>
									    </div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				@endif
			</div>
		</div>
	</section>
	<!-- End of driven solution section
	============================================= -->
    @endsection
