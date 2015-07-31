@extends('template.master_appidea')
@section('content')
<div class="background">
	<div class="row">
		<div class="post-box-content">
			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<h3 class="text-center go-down-a-bit-30 main-color-no-hover">Thank you for using Popibay.</h3>
					<h5 class="text-center go-down-a-bit-30 main-dark-color-no-hover">Please share Popibay with your friends.</h5>
					<hr>
					<ul class="inline-list go-up-a-bit-40" id="inline-footer-links">
						<li><a data-reveal-id="facebook-link-unavalable" target="_blank" href="http://facebook.com/popibay"><i class="fa fa-facebook fa-2x"></i></a></li>
						<div id="facebook-link-unavalable" class="reveal-modal tiny" data-reveal>
							<h3 class="text-center main-color-no-hover"><i class="fa fa-exclamation-circle"></i> Sorry this service is not available now.</h3>
							<a class="close-reveal-modal">&#215;</a>
						</div>
						<li><a data-reveal-id="twitter-link-unavalable" target="_blank" href="http://twitter.com/@popibay"><i class="fa fa-twitter fa-2x"></i></a></li>
						<div id="twitter-link-unavalable" class="reveal-modal tiny" data-reveal>
							<h3 class="text-center main-color-no-hover"><i class="fa fa-exclamation-circle"></i> Sorry this service is not available now.</h3>
							<a class="close-reveal-modal">&#215;</a>
						</div>
						<li><a data-reveal-id="google-link-unavalable" target="_blank" href="http://plus.google.com/popibay"><i class="fa fa-google-plus fa-2x"></i></a></li>
						<div id="google-link-unavalable" class="reveal-modal tiny" data-reveal>
							<h3 class="text-center main-color-no-hover"><i class="fa fa-exclamation-circle"></i> Sorry this service is not available now.</h3>
							<a class="close-reveal-modal">&#215;</a>
						</div>
					</ul>
					<h6 class="text-center grey-text go-up-a-bit-40">or</h6>
					<center>		
					<a title="Add new pet image" href="/"><button class="button small pet-ad-member-header-button-two bolder-text"> <i class="fa fa-home fa-2x"></i> </button></a>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
@stop