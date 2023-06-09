<section id="features" class="features-section position-relative" data-background="/website/img/background/aa1.webp">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="section-title-middle text-center" style="margin-top: -58px; margin-bottom: -26px;">

            <h2>Project Updates</h2>
        </div>
        <!-- /title -->
        <div class="features-content">
                <div class="row" style="margin-bottom: -38px;">
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
                                            <a href="{{route('ReadMore', ['id' => $abc->id])}}"> Read More <img src="/website/img/arrow3.png" alt=""></a>
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
 