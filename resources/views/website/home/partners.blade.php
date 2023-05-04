


<section id="partner" class="partner-section">
	<div class="container">
        @if (isset($partners))
		<div id="partner-slide-id" class="partner-slider">
            @foreach ($partners as $partner)
			<div class="partner-img">
				<img src="{{ $partner->banner_image }}" alt="">
			</div>
            @endforeach
		</div>
        @endif
	</div>
</section>

 