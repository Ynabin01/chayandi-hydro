
@extends("layouts.master")

@section('content')
	<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section position-relative"
		data-background="website/img/background/bcbg.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="breadcrumb-content headline">
				<h2 class="breadcrumb-title"> Contact us</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Contact us</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End of breadcrumb section
	============================================= -->



	<!-- Start of Contact content
	============================================= -->
	<section id="contact-page-area" class="contact-page-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="contact-form-text headline pera-content">
						<h3>Have a question? Get a
							Free Consultation </h3>
						<p>Dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non
							proident suntin culpa qui officia deserunt mollitys.</p>
						<div class="el-contact-info">
							<div class="contact-address">
								<div class="contact-icon">
									<i class="icon-pin"></i>
								</div>
								<div class="contact-text pera-content headline">
									<h4>Corporate Office</h4>
									<p>68 Kings Street, Town Hall North Avenue,
										California 33089 - USA</p>
								</div>
							</div>
							<div class="contact-address">
								<div class="contact-icon">
									<i class="far fa-clock"></i>
								</div>
								<div class="contact-text pera-content headline">
									<h4>Customer Support</h4>
									<p>Monday - Friday 09:00 - 18:00 <br>
										Saturday - Sunday 10:00 - 16:00</p>
								</div>
							</div>
							<div class="contact-address">
								<div class="contact-icon">
									<i class="icon-call-in"></i>
								</div>
								<div class="contact-text pera-content headline">
									<h4>Contact us</h4>
									<p><STRONG>1-700-231-0025 <br></STRONG>
										support@eltron-energy.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="el-contact-form headline">
						<h3>Send a Message!</h3>
						<div class="contact-form-area contact-form">
							<form method="post" action="https://cdn.bolvo.com/eltron/sendemail.php" id="contact-form">
								<input class="" name="name" type="text" placeholder="Full Name">
								<input class="" name="email" type="email" placeholder="Email">
								<input class="" name="subject" type="text" placeholder="Subject">
								<textarea id="message" name="message" placeholder="Comments*"></textarea>
								<div class="sub-button  text-uppercase">
									<button type="submit" value="Submit">Send Message <img src="website/img/arrow3.png"
											alt=""></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of Contact content
	============================================= -->
	<!-- Start of Contact map section
	============================================= -->
	<div id="google-map">
		<div class="earth3dmap-com">
				<iframe
				src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7063.699821938295!2d85.32812!3d27.72192!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191141852d17%3A0xe43b257f0127e416!2sChhyangdi%20Hydropower%20Ltd.!5e0!3m2!1sen!2sus!4v1682880687509!5m2!1sen!2sus"
				width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>

		</div>


	</div><!-- /#google-map-->
		<!-- End Contact map section
	============================================= -->
		<!-- Start of Footer section
	============================================= -->
    @endsection



{{-- 

@extends('layouts.master')
@section('content')
    <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="/website/images/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="current"><span>Contact Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area End -->

    <main class="main-content-wrapper">
        <div class="inner-page-content">
            <!-- Contact Area Start -->
            <section class="contact-area ptb--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 mb-md--50">
                            <div class="heading mb--42">
                                <h2>Get In Touch</h2>
                                <hr class="delimeter">
                            </div>
                            <div class="contact-info mb--30">
                                <p><i class="fa fa-map-marker"></i>{{ $global_setting->website_full_address }} </p>
                                <p><i class="fa fa-phone"></i> <a
                                        href="tel:{{ $global_setting->phone }}">{{ $global_setting->phone }}</a>, <a
                                        href="tel:{{ $global_setting->phone_ne }}">{{ $global_setting->phone_ne }}</a></p>
                                <p><i class="fa fa-envelope"></i> <a
                                        href="mailto:{{ $global_setting->site_email }}">{{ $global_setting->site_email }}</a>
                                </p>
                                <p><i class="fa fa-envelope"></i> <a
                                        href="mailto:{{ $global_setting->page_description }}">{{ $global_setting->page_description }}</a>
                                </p>
                            </div>
                            <ul class="social social-outline">
                                <li class="social__item">
                                    <a href="{{ $global_setting->facebook ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->extra_one ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->twitter ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->linkedin ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 offset-lg-1">
                            <div class="heading mb--42">
                                <h2>Contact Us</h2>
                                <hr class="delimeter">
                            </div>
                            <form action="{{ route('contactstore') }}" class="form" method="post" id="contact-form"
                                enctype='multipart/form-data'>
                                @csrf
                                <input type="email" name="email" id="email" class="form__input mb--30"
                                    placeholder="Email*">
                                <input type="text" name="first_name" id="first_name" class="form__input mb--30"
                                    placeholder="Name*">
                                <textarea class="form__input form__input--textarea mb--30" placeholder="Message" id="con_message" name="message"></textarea>
                                <button type="submit" class="btn btn-shape-round form__submit">Send Request</button>
                                <div class="form__output"></div>

                                @if (Session::has('contact'))
                                    <p class="alert alert-info">{{ Session::get('contact') }}</p>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Area End -->

            <!-- Google Map Area Start -->
            <!-- Google Map -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.845659969248!2d85.31929851541567!3d27.722051231451736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1919f7dd0685%3A0xc59baa0caae9c83d!2sLazimpat%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1670754752618!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- Google Map Area End -->
        </div>
       
    </main>
@endsection --}}
