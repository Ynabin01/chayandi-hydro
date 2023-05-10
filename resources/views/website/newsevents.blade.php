@extends("layouts.master")

@section('content')

    <!-- Start of breadcrumb section
	============================================= -->
    <section id="breadcrumb" class="breadcrumb-section position-relative"
        data-background="/website/img/background/dark.jpg">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="breadcrumb-content headline">
                @if (isset($slug1))
                <h2 class="breadcrumb-title">{{ $slug1->caption ?? $slug1 }}</h2>
                @endif
                <div class="breadcrumb_item ul-li">
                    @if (isset($slug1))
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">{{ $slug1->caption ?? $slug1 }}</li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
	============================================= -->

    <section id="blog" class="blog-section relative-position" data-background="/website/img/background/ft-bg.jpg">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
{{--                     
                    <div class="new-left-content">
                        <h2>News</h2>
                    </div> --}}
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="blog-post-content">
                        <div class="row">  
                           
                            @foreach ($newsevents as $newsevent)
                            <div class="col-lg-4">
                                <div class="blog-post-item" style="width: 100%; margin-bottom: 27px;">
                                    <div class="blog-post-pic">
                                        <img src="{{ $newsevent->banner_image ?? '' }}" alt="">
                                        <a class="blog-linker" href="{{route('FullStoryRead', ['id' => $newsevent->id])}}"></a>
                                    </div>
                                    <div class="blog-post-text">
                                        <h3><a href=" ">{!! htmlspecialchars_decode($newsevent->long_content ?? '') !!}</a></h3>
                                        <div class="blog-meta">
                                            <a href="#"><i class="icon-user"></i>{{ $newsevent->caption ?? '' }}</a>
                                            <a href="#"><i class="icon-calendar"></i>{!! htmlspecialchars_decode($newsevent->short_content ?? '') !!} </a>
                                        </div>
                                        <div class="blog-more text-uppercase">
                                            <a href="@if (request()->query('iam') == 'news')  {{route('FullStoryRead', ['id' => $newsevent->childs->first->id ?? ""])}} @else {{route('FullStoryRead', ['id' => $newsevent->id])}} @endif ">full story <i class="flaticon-next"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
