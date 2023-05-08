@php
    $normal_gallary_notice = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', 'Normal')
    
        ->orderBy('position', 'ASC')
        ->get();
    
    $menus = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', '!=', 'Job')
        ->where('page_type', '!=', 'Notice')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    $global_setting = App\Models\GlobalSetting::all()->first();
    if (isset($normal)) {
        $seo = $normal;
    } elseif (isset($job)) {
        $seo = $job;
    }
    
@endphp

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <!-----SEO--------->

    <title>{{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image"
        content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-----END SEO------->

    <meta charset="UTF-8">
	<title>Chhyangdi Hydropower Ltd.r</title>
	<link rel="shortcut icon" href="{{ $seo->favicon ?? '/uploads/icons/' . $global_setting->favicon }}" type="image/x-icon">
	<meta name="author" content="Templines">
	<meta name="description" content="Eltron - Alternative Energy HTML Template">
	<meta name="keywords"
		content="	alternative energy, ecology, energy business, green energy, heating, hydropower, nature energy, power saving, recycling, renewable energy, solar energy, Solar Panels, wing turbines">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/website/css/owl.carousel.css">
	<link rel="stylesheet" href="/website/css/fontawesome-all.css">
	<link rel="stylesheet" href="/website/css/simple-line-icons.css">
	<link rel="stylesheet" href="/website/css/animate.css">
	<link rel="stylesheet" href="/website/css/flaticon.css">
	<link rel="stylesheet" href="/website/css/bootstrap.min.css">
	<link rel="stylesheet" href="/website/css/video.min.css">
	<link rel="stylesheet" href="/website/css/lightbox.css">
	<link rel="stylesheet" href="/website/css/style.css">
</head>

<body>
    @if (Session::has('contact'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Sucessfully Applyed !!',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
	<!-- <div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div> -->
	<!-- Start of header section
	============================================= -->
	<header id="header_id" class="main_header header_style_one ">
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="header_top_contact ul-li clearfix">
							<ul>
								<li> <i class="icon-call-out"></i>{{ $global_setting->phone }}</li>
								<li> <i class="icon-envelope-letter"></i> {{ $global_setting->site_email }}</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="header_top_info float-right">
							<div class="top_info_item top_info_menu ul-li clearfix">
								<ul>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Media</a></li>
									<li><a href="#">FAQs</a></li>
								</ul>
							</div>
							<div class="top_info_item top_info_social ul-li clearfix">
								<ul>
									<li><a target="_blank" href="{{ $global_setting->facebook ?? '' }}"><i class="fab fa-facebook-f"></i></a></li>
									<li><a target="_blank" href="{{ $global_setting->twitter ?? '' }}"><i class="fab fa-twitter"></i></a></li>
									<li><a target="_blank" href="{{ $global_setting->extra_one ?? '' }}"><i class="fab fa-google-plus-g"></i></a></li>
									<li><a target="_blank" href="{{ $global_setting->linkedin ?? '' }}"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a target="_blank" href="#"><i class="fab fa-vimeo-v"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="site-main-menu clearfix">
			<div class="container">
				<div class="brand-logo float-left">
					<a href="#"><img src="{{ $seo->site_logo  ?? '/uploads/icons/' . $global_setting->site_logo }}" alt=""></a>
				</div>
				<nav class="main_navigation desktop-menu ul-li">
                    <ul id="main-nav" class="navbar-nav text-uppercase clearfix">
                        {{-- <li class="dropdown"> --}}
                            {{-- <a href="/">Home</a> --}}
							<!-- <ul class="dropdown-menu clearfix">
                                <li><a href="index.html">Home Page 1</a></li>
								<li><a href="index-2.html">Home Page 2</a></li>
							</ul> -->
						{{-- </li> --}}
                        {{-- @foreach ($menus as $menu)
						<li class="dropdown">
							<a href="#">About</a>
							<ul class="dropdown-menu clearfix">
                                <li><a href="/aboutus">About us</a></li>
								<li><a href="/messeges">Message From Chairman</a></li>
								<li><a href="/messeges">MD Message</a></li>
								<li><a href="/normal">Our Objectives</a></li>
								<li><a href="/team">Team</a></li>

							</ul>
						</li>
                        @endforeach --}}
                        
                        @foreach ($menus as $menu)
                        <li @if ($menu->childs->count() > 0) class = "dropdown" @endif
                            class="@if ($menu->childs->count() > 0) dropdown @endif"><a
                                href="@if($menu->nav_name=='aboutus' || $menu->nav_name=='notice' || $menu->nav_name=='notice' || $menu->nav_name=='gallery') # @elseif ($menu->nav_name=='news') /{{ $menu->nav_name }}?iam=news @else /{{ $menu->nav_name }} @endif">{{ $menu->caption }}</a>
                            @if ($menu->childs->count() > 0 && $menu->id != '2415' && $menu->id != '2537')
                                <ul class="dropdown-menu clearfix">
                                    @php $submenus = $menu->childs; @endphp

                                    @foreach ($submenus as $sub)
                                        <li><a
                                                href="/{{ $menu->nav_name }}/{{ $sub->nav_name }}">{{ $sub->caption }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach

						{{-- <li><a href="/project">Project</a></li>
						<li class="dropdown">
							<a href="">notice</a>
							<ul class="dropdown-menu clearfix">
								<li><a href="/news">Annual Reports</a></li>
								<li><a href="/news">Quarterly Reports</a></li>
								<li><a href="/news">Press Release</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="/news">News</a>

						</li>
						<li class="dropdown">
							<a href="#">Gallery</a>
							<ul class="dropdown-menu clearfix">
								<li><a href="#">Video Gallery</a></li>
								<li><a href="/photogallery">Photo Gallery</a></li>
							</ul>
						</li> --}}
						<li><a href="/contact">Contact</a></li>
					</ul>
				</nav>
				<!-- <div class="site-search-btn float-right">
					<div class="el-search position-relative">
						<i class="el-search-btn fas fa-search"></i>
						<div class="search-body">
							<div class="search-form">
								<form action="#">
									<input class="search-input" type="search" placeholder="Search Here">
									<div class="outer-close el-search-btn">
										<i class="fas fa-times"></i>
									</div>
									<button type="submit" class="search-close">
										<i class="fas fa-search"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
					<div class="con-btn text-center  text-uppercase">
						<a href="#">consultation <i class="flaticon-next"></i></a>
					</div>
				</div> -->
			</div>
		</div>
		<!-- desktop-menu -->
		<div class="el-mobile_menu relative-position">
			<div class="el-mobile_menu_button s2-open_mobile_menu">
				<i class="fas fa-bars"></i> 
			</div>
			<div class="el-mobile_menu_wrap">
				<div class="mobile_menu_overlay s2-open_mobile_menu"></div>
				<div class="el-mobile_menu_content">
					<div class="el-mobile_menu_close s2-open_mobile_menu">
						<i class="fas fa-arrow-circle-right"></i>
					</div>
					<div class="m-brand-logo text-center">
						<a href="#"><img src="website/img/logo/logo_chhyangdi (1).png" alt=""></a>
					</div>
					<!-- <div class="mobile-search">
						<form class="form-item position-relative" action="#" method="">
							<input type="search" placeholder="search...">
							<button type="submit"><i class="fas fa-search"></i></button>
						</form>
					</div> -->
					<nav class="el-mobile-main-navigation  clearfix ul-li">
						<ul id="main-nav" class="navbar-nav text-capitalize clearfix">
							<li class="dropdown">
								<a href="index.html">Home</a>

							</li>
							<li class="dropdown">
								<a href="about.html">About</a>
								<ul class="dropdown-menu clearfix">
									<li><a href="massege-char.html">Message From Chairman</a></li>
									<li><a href="massage-md.html">MD Message</a></li>
									<li><a href="objects.html">Our Objectives</a></li>
									<li><a href="tems.html">Team</a></li>
								</ul>
							</li>

							<li><a href="project.html">Project</a></li>
						<li class="dropdown">
							<a href="">notice</a>
							<ul class="dropdown-menu clearfix">
								<li><a href="/news">Annual Reports</a></li>
								<li><a href="/news">Quarterly Reports</a></li>
								<li><a href="/news">Press Release</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="/news">News</a>

						</li>
							<li class="dropdown">
								<a href="#">Gallery</a>
								<ul class="dropdown-menu clearfix">
									<li><a href="#">Video Gallery</a></li>
									<li><a href="/photogallery">Photo Gallery</a></li>
								</ul>
							</li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</nav>
					<div class="mobile-contact-info text-center ul-li-block">
						<ul>
							<li> <i class="icon-call-out"></i> +1 (700) 230-0035</li>
							<li> <i class="icon-envelope-letter"></i> support@eltron.com</li>
						</ul>
					</div>
					<div class="mobile-follow text-center ul-li">
						<span>Follow Eltron:</span>
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
						</ul>
					</div>
					<!-- <div class="mobile-consult-btn text-uppercase">
						<a href="#">Consultation</a>
					</div> -->
				</div>
			</div>
		</div>
	</header>
	<!-- End of header section
	============================================= -->
    @yield('content')

    {{-- slider --}}
    {{-- aboutone --}}
	{{-- projectupdates --}}
    {{-- blog --}}
    {{-- testimonial --}}
    {{-- partner --}}

 <!-- brand-section................ -->


	<!-- Start of Footer section
	============================================= -->
	<footer id="footer-id" class="footer-section">
		<!-- <div class="newslatter-section">
			<div class="container">
				<div class="newslatter-content clearfix">
					<div class="row">
						<div class="col-lg-6">
							<div class="newslatter-icon float-left">
								<i class="icon-envelope"></i>
							</div>
							<div class="newslatter-text">
								<h2>Signup For The Latest Updates</h2>
							</div>

						</div>
						<div class="col-lg-6">
							<div class="newslatter-form">
								<div class="newslatter-form position-relative">
									<form action="#">
										<input class="email" name="email" type="email">
										<div class="nws-button position-absolute text-capitalize">
											<button class="hover-btn" type="submit" value="Submit"> Subscribe <i
													class="flaticon-next"></i></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="footer-content">
			<div class="container">
				<div class="footer-contact-info">
					<div class="row">
						<div class="col-lg-3">
							<div class="footer-icon-text-contact-info headline pera-content">
								<p><i class="icon-pin"></i> Our Office Location</p>
								<h3>{{ $global_setting->website_full_address ?? '' }}</h3>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="footer-icon-text-contact-info headline pera-content">
								<p><i class="icon-call-in"></i> Any Questions?</p>
								<h3>{{ $global_setting->phone }},{{ $global_setting->phone_ne }}</h3>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="footer-icon-text-contact-info headline pera-content">
								<p><i class="icon-envelope-letter"></i> Send Email</p>
								<h3>{{ $global_setting->site_email }}</h3>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="footer-icon-text-contact-info headline pera-content">
								<p><i class="far fa-clock"></i> Monday to Friday</p>
								<h3>9:00 am - 6:00 pm</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-widget-area">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="footer-widget-item pera-content">
								<div class="footer-logo-widget">
									<a class="footer-logo" href="/"><img src="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}"
											alt=""></a>
									<p>{{ $seo->page_description ?? $global_setting->page_description }}</p>
									<div class="footer-social">
										<a target="_blank" href="{{ $global_setting->facebook ?? '' }}"><i class="fab fa-facebook-f"></i></a>
										<a target="_blank"href="{{ $global_setting->twitter ?? '' }}"><i class="fab fa-twitter"></i></a>
										<a target="_blank" href="{{ $global_setting->extra_one ?? '' }}"><i class="fab fa-google-plus-g"></i></a>
										<a target="_blank" href="{{ $global_setting->linkedin ?? '' }}"><i class="fab fa-linkedin-in"></i></a>
										<a target="_blank" href="#"><i class="fab fa-vimeo-v"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="footer-widget-item pera-content">
								<div class="footer-menu-widget ul-li-block">
									<h3 class="el-widget-title">About Company</h3>
									<ul>
										
										<li><a href="/aboutus/about-us">About Us</a></li>
										<li><a href="/aboutus/message">Message From CEO</a></li>
										{{-- <li><a href="#">Chairman md</a></li> --}}
										<li><a href="/aboutus/team">Team</a></li>

									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="footer-widget-item pera-content">
								<div class="footer-menu-widget ul-li-block">
									<h3 class="el-widget-title">Quick link</h3>
									<ul>
										<li><a href="/contact">Contact</a></li>
										<li><a href="/project">Project</a></li>
										<li><a href="/news">News</a></li>

									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="footer-widget-item pera-content">
								<div class="footer-location-widget ul-li-block">
									<h3 class="el-widget-title">Our Locations</h3>

									<div class="footer-map">
										<div class="earth3dmap-com">	
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.919309861214!2d85.3257905244078!3d27.719777524945005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1911fd1a25d7%3A0x36856671239b2d9d!2z4KSb4KSv4KS-4KSZ4KWN4KSm4KWAIOCkueCkvuCkh-CkoeCljeCksOCli-CkquCkvuCkteCksCDgpLLgpL8u!5e0!3m2!1sen!2snp!4v1683535330068!5m2!1sen!2snp" width="280" height="170" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright-text text-center">
			<p>© 2023 <a href="#">All Rights Reserved Chhyangdi Hydropower Ltd.</a></p>
			<div class="copyright-menu">
				<!-- <a href="#">Terms</a> -->
				<a href="#"> Powered by:</a>
				<a href="http://radiantnepal.com/">Radiant InfoTech Nepal</a>
			</div>
		</div>
	</footer>
	<!-- End of Footer section
	============================================= -->

	<!-- For Js Library -->
	<script src="/website/js/jquery.min.js"></script>
	<script src="/website/js/bootstrap.min.js"></script>
	<script src="/website/js/popper.min.js"></script>
	<script src="/website/js/owl.carousel.min.js"></script>
	<script src="/website/js/jarallax.js"></script>
	<script src="/website/js/jquery.magnific-popup.min.js"></script>
	<script src="/website/js/appear.js"></script>
	<script src="/website/js/imagesloaded.pkgd.min.js"></script>
	<script src="/website/js/masonry.pkgd.min.js"></script>
	<script src="/website/js/isotope.pkgd.min.js"></script>
	<script src="/website/js/lightbox.js"></script>
	<script src="/website/js/waypoints.min.js"></script>
	<script src="/website/js/jquery.counterup.min.js"></script>
	<script src="/website/js/tilt.jquery.min.js"></script>
	<script src="/website/js/wow.min.js"></script>
	<script src="/website/js/script.js"></script>
	<script src="/website/js/gmap3.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

  <!-- gllery js -->
  <script src="/website/js/gallery/picturefill.min.js"></script>
  <script src="/website/js/gallery/lightgallery.js"></script>
  <script src="/website/js/gallery/lg-pager.js"></script>
  <script src="/website/js/gallery/lg-autoplay.js"></script>
  <script src="/website/js/gallery/lg-fullscreen.js"></script>
  <script src="/website/js/gallery/lg-zoom.js"></script>
  <script src="/website/js/gallery/lg-hash.js"></script>
  <script src="/website/js/gallery/lg-share.js"></script>
  <!--End gllery js -->

  <!-- Custom Js -->
  <script src="/website/js/custom.js"></script>

  <script>
      lightGallery(document.getElementById('lightgallery'));

      $(function() {
      var selectedClass = "";
      $(".filter").click(function(){
      selectedClass = $(this).attr("data-rel");
      $("#lightgallery").fadeTo(100, 0.1);
      $("#lightgallery div").not("."+selectedClass).fadeOut().removeClass('animation');
      setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('animation');
      $("#lightgallery").fadeTo(300, 1);
      }, 300);
      });
      });
  </script>


    </body>

<!-- Mirrored from cdn.bolvo.com/eltron/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 09:17:07 GMT -->

</html>
