@extends('layouts.master')
@section('content')
@include('website.breadcrumb')
{{-- <section id="breadcrumb" class="breadcrumb-section position-relative"
data-background="website/img/background/bcbg.jpg">
<div class="background_overlay"></div>
<div class="container">
    <div class="breadcrumb-content headline">
        <h2 class="breadcrumb-title"> About Us</h2>
        <div class="breadcrumb_item ul-li">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ul>
        </div>
    </div>
</div>
</section> --}}
<!-- End of breadcrumb section
============================================= -->
<!-- Start of about section
============================================= -->
<section class="section-content-block">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <article class="post single-post-inner">
                
                <div class="single-post-inner-content">
                    <p>
                        {{ $normal->short_content ?? ''}}  
                    </p>
                    <p>
                        {{ $normal->long_content ?? ''}}   
                    </p>
                    <!-- <div class="news-button"> <a href="notice-detail.html">Read more</a> </div> -->
                </div>
                <div class="post-inner-featured-content">
                    <img alt="" src="{{ $normal->banner_image ?? ''}}">
                </div>
            </article> <!--  end single-post-container -->
        </div> <!--  end .single-post-container -->
    </div> <!--  end row  -->
</div> <!--  end container -->
</section> <!-- end .section-content-block  -->
@endsection
