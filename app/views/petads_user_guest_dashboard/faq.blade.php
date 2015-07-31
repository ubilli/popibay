@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
	<div class="wider-img-background-content">
		<h1 class="text-center white-text text-shadow go-down-a-bit-40"><i class="fa fa-question-circle"></i> Serve yourself here.</h1>
		<h5 class="text-center white-text">Here you can find answers to our most frequently asked questions and how to use Popibay.
		</h5>
	</div>
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="post-box-content">
				<div class="row">
					<div class="small-12 medium-12 large-8 columns">
						<h3 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> Frequently asked questions</h3>
						<hr>
						<ul class="no-bullet">
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> How to post a pet ad?</h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										Posting a pet ad on Popibay is free, fast, simple, Just click the orange <b class="orange-text">"Post a pet ad"</b> button at the header and follow the simple wizard, then fill in the complete and correct information.
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> How to remove a pet ad?</h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										To remove a pet ad, please log-in to your dashboard and click on the option <b class="orange-text">"remove pet ad"</b>.

										Tip: you can find your ad easily by logging in to your account and visiting your <b class="orange-text">"My ads"</b> page!
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> How to edit a pet ad?</h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										To edit a pet ad, please go to your dashboard and click on the <b class="orange-text">"edit"</b> option.
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> How to change my password?</h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										Goto settings link on your dashboard and update your password information.
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> How long will will my ad live on popibay.</h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										Pet ads on popibay, live for one month after which it will be automatically deleted
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> I can't find my posted pet ad?</h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										To have a classic, secure and safe experience on popibay, we will verify all first time posters from Lagos, Abuja, and Port Harcourt, Akwa-ibom by visits within 2days.

										Our pet ads are reviewed against fraud and spam so if you are a verified poster it can take up to 1 day or less before a pet ad is published on the site. If you still can't find your ad after 1 day or less, it may have violated our posting rules. If your pet ad was not approved, you will recieve our message explianing why your ad is not published and what you should do.

										After waiting for 24 hours and you got no response from us, it means you must have given us the wrong contact details, just contact our support email. <a href="mailto:support@popibay.com"><i class="fa fa-envelope orange-text-link"></i></a>
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> Your support center just call me for a pet ad i never posted. Whats wrong?</h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										Please we are sorry if that happens, just contact us <a href="mailto:support@popibay.com"><i class="fa fa-envelope orange-text-link"></i></a> and we will fix that issue right away.
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> I have not recieved calls or responses based on my published pet ad?</h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										Just read <i class="fa fa-arrow-right orange-text"></i> edit and apply the sell sharp sharp (s3) page. <a href="/s3"><i class="fa fa-external-link-square orange-text-link"></i></a>
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> How does Popibay makes revenue? </h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										Basically buying and selling is free, and will always be free on popibay, but in later years as we scale up, a freemium model will be introduced which include targeted adverts on most pages then premium pet ads listing will be on suscribtion basics or paid basics. As we scale, we will intoduced other platforms to target the pets market.
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> What are the rules for posting on Popibay? </h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										It's is simple if you follow our rules.
									</h6>
									<ul class="no-bullet">
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No offensive pictures</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No text in the title or description that is not related to the advertised item or service</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No item or service that is illegal in Nigeria</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No item or service that is not located in Nigeria</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No invalid phone number or email address</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No invalid phone number or email address</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No unrealistic offer</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No unoffensive language</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No text in the title or description that is not related to the advertised item or service</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No pictures that do not match or clearly show the advertised item or service</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No web link that is not relevant to the advertised item or service</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i> No the same content as another live ad, or the same content as another ad that was posted within the last 48 hours</h6></li>
										<li><h6 class="text-left"><i class="fa fa-circle-thin"></i>No the same content as another live ad, or the same content as another ad that was posted within the last 48 hours</h6></li>
									</ul>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> How to Register on popibay? </h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										Registering for an account on Popibay is simple, fast and completely free. You can either go to the <a href="/register" class="orange-text-link">Register</a> page and fill out your details, or you can create an account automatically by posting an ad.

										Once you have signed up, a link will be sent to your email with instructions on how to verify your email address.
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> How to log in to popibay? </h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										To log in to your account, simply go to the Log in page and enter your email and account password.

										To log out of your account, simply click the <b class="orange-text">"Log out"</b> option on your dashboard.
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> How to change my account details? </h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										To change the details on your account, log in to your dashboard and go to your <b class="orange-text">"Settings"</b> page.
									</h6>
								</div>
							</li>
							<li><h5 class="text-left pb-main-text-title-color"><i class="fa fa-question-circle"></i> How to change my account details? </h5></li>
							<li>
								<div class="faq-answer-box">
									<h6 class="text-justify">
										To change the details on your account, log in to your dashboard and go to your <b class="orange-text">"Settings"</b> page.
									</h6>
								</div>
							</li>
						</ul>
					</div>
					<div class="small-12 medium-12 large-4 columns">
						<div class="dash-menu">
							<h3 class="text-left main-color-no-hover"><i class="fa fa-tachometer"></i> Menu</h3>
							<hr>
							<ul class="no-bullet">
								<li><a href="/faq"><h5 class="text-left main-color-no-hover active-dashboard-menu-link"><i class="fa fa-question-circle orange-text"></i> FAQ</h5></a></li>
								<li><a href="/safety"><h5 class="text-left grey-color"><i class="fa fa-fire-extinguisher orange-text"></i> Safety brief </h5></a></li>
								<li><a href="/s3"><h5 class="text-left grey-color"><i class="fa fa-money orange-text"></i> Sell Sharp Sharp (S3) </h5></a></li>
								<li><a href="/contact"><h5 class="text-left grey-color"><i class="fa fa-phone orange-text"></i> Contact us</h5></a></li>
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
  document.title="Popibay || Frequently asked questions";
</script>
@stop