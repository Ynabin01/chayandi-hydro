
@extends("layouts.master")

@section('content')
	<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section position-relative"
		data-background="/website/img/background/dark.jpg">
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
						<p>{{ $global_setting->page_description }}</p>
						<div class="el-contact-info">
							<div class="contact-address">
								<div class="contact-icon">
									<i class="icon-pin"></i>
								</div>
								<div class="contact-text pera-content headline">
									<h4>Corporate Office</h4>
									<p>{{ $global_setting->website_full_address }}</p>
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
									<p><STRONG>{{ $global_setting->phone }} <br></STRONG>
										{{ $global_setting->site_email }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="el-contact-form headline">
						<h3>Send a Message!</h3>
						<div class="contact-form-area contact-form">
							<form action="{{ route('contactstore') }}" method="post" action="https://cdn.bolvo.com/eltron/sendemail.php" id="contact-form" enctype='multipart/form-data'>
								@csrf
								<input class="" name="first_name" type="text" placeholder="Full Name">
								<input class="" name="email" type="email" placeholder="Email">
								<input class="" name="number" type="text" placeholder="Subject">
								<textarea id="message" name="message" placeholder="Comments*"></textarea>
								<div class="form-group">
									<input type="submit" class="btn btn-theme" value="Send Now" />
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

 