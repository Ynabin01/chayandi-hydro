
@if (isset($sliders))

<section id="slider-eltron" class="slider-section slider-style-one">
    <div id="slider-main" class="slider-content owl-carousel">
        @foreach ($sliders as $slider)
        <div class="main-slider-img-text slide-type-one pera-content headline position-relative">
            <div class="slider-img-bg img-zooming" data-background="{{ $slider->banner_image }}"></div>
            <div class="background_overlay"></div>
            <div class="container">
                <div class="slider-content-box">
                    <span class="title-tag text-uppercase"><img src="website/icon/icon5.svg" alt=""> {!! htmlspecialchars_decode($slider->caption) !!}  </span>
                    <h1>
                        {!! htmlspecialchars_decode($slider->short_content) !!}  
                    </h1>
                    <p>{!! htmlspecialchars_decode($slider->long_content) !!} 
                    </p>
                    <div class="slide-btn-1">
                        <a href="/aboutus/about-us">Learn More <i class="flaticon-next"></i></a>
                        <a href="#">Talk With Us 01-4426483</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif









{{-- @if (isset($sliders))
    <section class="homepage-slider">
        <div class="element-carousel" data-slick-options='{
        "slidesToShow": 1,
        "autoplay": true
    }'>
            @foreach ($sliders as $slider)
                <div class="single-slide d-flex align-items-center"
                    style="background-image: url({{ $slider->banner_image }});">
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-lg-6 col-sm-8">
                                <div class="slider-content">
                                    <h1 class="heading__primary mb--3pt6" data-animation="fadeInUp" data-duration=".3s"
                                        data-delay=".3s">{{ $slider->caption }}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif
 --}}
