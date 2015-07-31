@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
	<div class="wider-img-background-content-contact">
		<!-- <h1 class="text-center white-text text-shadow go-down-a-bit-40"><i class="fa fa-phone"></i> Contact us</h1> -->
		<h5 class="text-center white-text text-shadow go-down">Support, questions, issues, feedback, all can be resolved here if you just contact us.
		</h5>
	</div>
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<?php
			$welcome_back = Session::get('welcome_back');
			$message = Session::get('message');
			if ( isset($welcome_back) ) {
				echo '
				<div data-alert class="alert-box success radius">
					<h6 class="bolder-text text-center white-color">'.$welcome_back.'</h6>
					<a href="#" class="close">&times;</a>
				</div>
				';
			}

			if ( isset($message) ) {
				echo '
				<div data-alert class="alert-box alert radius">
					<h6 class="bolder-text text-center white-color">'.$message.'</h6>
					<a href="#" class="close">&times;</a>
				</div>       
				';
			}
			?>
			<div class="post-box-content">
				<div class="row">
					<div class="small-12 medium-12 large-8 columns">
						<h3 class="text-left pb-main-text-title-color"><i class="fa fa-phone"></i> Contact us</h3>
						<hr>
						{{ Form::open(array('route' => 'Contactus.sending')) }}
							<div class="settings-form-box">
								<div class="panel">
									<h6 class="text-justify">Note: Our Working hours is from 8am - 5pm and our support usaully takes 24 - 48 hours, Whatsapp mainly.</h6>
								</div>
								<label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Name </b></h6></label>
								<input name="name" required type="text" placeholder="Name" class="pb-text-box" style="margin-bottom:20px !important;">
								<label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Email</b></h6></label>
								<input name="email" required type="email" placeholder="Email" class="pb-text-box" style="margin-bottom:20px !important;">
								<label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Subject</b></h6></label>
								<input name="subject" required type="text" placeholder="Subject" class="pb-text-box" style="margin-bottom:20px !important;">
								<label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Message</b></h6></label>
								<textarea name="message" required placeholder="Your message" cols="30" rows="10"></textarea>
								<button style="margin-bottom: 20px !important; margin-top: 20px !important;" class="wider-button pb-button-two-sides-all" type="submit"><i class="fa fa-envelope-o white-text"></i> Contact us</button>
							</div>							
						{{ Form::close() }}
						<h4 class="text-left pb-main-text-title-color"><i class="fa fa-phone go-down-a-bit-20"></i> <i class="fa fa-whatsapp go-down-a-bit-20"></i> Phone & Whatsapp</h4>
						<ul class="inline-list">
							<li><h3 class="text-left"> +234(0)8160163221</h3></li>
							<li><h3 class="text-left"> +234(0)8128283993</h3></li>
						</ul>
					</div>
					<div class="small-12 medium-12 large-4 columns">
						<div class="dash-menu">
							<h3 class="text-left main-color-no-hover"><i class="fa fa-tachometer"></i> Menu</h3>
							<hr>
							<ul class="no-bullet">
								<li><a href="/faq"><h5 class="text-left grey-color"><i class="fa fa-question-circle orange-text"></i> FAQ</h5></a></li>
								<li><a href="/safety"><h5 class="text-left grey-color"><i class="fa fa-fire-extinguisher orange-text"></i> Safety brief </h5></a></li>
								<li><a href="/s3"><h5 class="text-left grey-color"><i class="fa fa-money orange-text"></i> Sell Sharp Sharp (S3) </h5></a></li>
								<li><a href="/contact"><h5 class="text-left active-dashboard-menu-link main-color-no-hover"><i class="fa fa-phone orange-text"></i> Contact us</h5></a></li>
								<li><a href="/about"><h5 class="text-left grey-color"><i class="fa fa-info-circle orange-text"></i> About Popibay</h5></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
  /* The document title */
  document.title="Popibay || Contact us.";
</script>
@stop