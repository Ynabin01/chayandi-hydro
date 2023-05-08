<section id="features" class="features-section position-relative" data-background="website/img/background/ft-bg.jpg">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="section-title-middle text-center">

            <h2>project Upadate</h2>
        </div>
        <!-- /title -->
        <div class="features-content">
                <div class="row">
                    @foreach ($projectlist as $abc)		
                        <div class="col-md-4">
                            <div class="features-icon-text text-center position-relative">
                                <div class="features-icon">
                                    <img src="{{ $abc->banner_image ?? ''}}" alt="">
                                </div>
                                <div class="features-text headline pera-content">
                                    <h3>{{ $abc->caption ?? '' }}</h3>
                                    <p> {!! htmlspecialchars_decode($abc->short_content ?? '') !!} </p>
                                </div>
                                <div class="features-hover-content">
                                    <div class="features-hover-text headline pera-content">
                                        <h3>{{ $abc->caption ?? '' }}</h3>
                                        <p> {!! htmlspecialchars_decode($abc->long_content ?? '') !!} </p>
                                        <div class="fh-more">
                                            <a href="{{$abc->nav_name} ">Read More <img src="/website/img/arrow3.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>
</section>
