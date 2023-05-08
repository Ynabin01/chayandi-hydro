
<section id="blog" class="blog-section relative-position" data-background="website/img/background/ft-bg.jpg">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="blog-left-content">
                    <div class="section-title-left">
                        <span class="title-tag"><img src="website/icon/icon5.svg" alt=""></span>
                        <h2>News</h2>
                    </div>
                    <div class="blog-text-details">
                        <p>Sagitis dia facilisis convalis eu dictum sed ipsum
                            tempore dui. Excepteur sint occaecat aidata non
                            proident quofficia deserunt mollit.</p> 
                        <div class="b-read-more-btn text-center text-uppercase">
                            <a href="/news">read more <i class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="blog-post-content clearfix">
                    @foreach ($newsevents as $newsevent)
                        <div class="blog-post-item">
                            <div class="blog-post-pic">
                                <img src="{{ $newsevent->banner_image ?? '' }}" alt="">
                                <a class="blog-linker" href="/{{$newsevent->nav_name}}"></a>
                            </div>
                            <div class="blog-post-text">
                                <h3><a href="#">{!! htmlspecialchars_decode($newsevent->long_content ?? '') !!}</a></h3>
                                <div class="blog-meta">
                                    <a href="#"><i class="icon-user"></i>{{ $newsevent->caption ?? '' }}</a>
                                    <a href="#"><i class="icon-calendar"></i>{!! htmlspecialchars_decode($newsevent->short_content ?? '') !!}</a>
                                </div>
                                <div class="blog-more text-uppercase">
                                    <a href="{{route('FullStoryRead', ['id' => $newsevent->id])}}">full story <i class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
</section>
