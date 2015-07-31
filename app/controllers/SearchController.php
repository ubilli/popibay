<?php
/**
 *
 * @author Udeme-Samuel <udemesamuel256@gmail.com> <(Popibay Founder/Developer)>
 * @license no-license
 * @copyright Popibay.com © 2015 A Jobinpal Company
 * --------------------------------------------------------
 * 
 */
class SearchController extends \BaseController {


	public function inner_search(){


		// get the input and search based on Location, Area, Name

		$search = Input::get('search');

		$search_terms = Petad::where('location', 'LIKE', '%'.$search.'%')->orWhere('area', 'LIKE', '%'.$search.'%')
		->orWhere('pet_price', 'LIKE', '%'.$search.'%')
		->orWhere('pet_ad_title', 'LIKE', '%'.$search.'%')
		->orWhere('categories', 'LIKE', '%'.$search.'%')
		->get();

		$search_terms_count = Petad::where('location', 'LIKE', '%'.$search.'%')->orWhere('area', 'LIKE', '%'.$search.'%')
		->orWhere('pet_price', 'LIKE', '%'.$search.'%')
		->orWhere('pet_ad_title', 'LIKE', '%'.$search.'%')
		->orWhere('categories', 'LIKE', '%'.$search.'%')
		->count();

		$petad_count = $search_terms_count;

		$is_member = '<li><a href="/dashboard"><button class="button tiny pet-ad-member-header-button-two bolder-text"> <i class="fa fa-tags"></i> My pet ads.</button></a></li><li><a href="/logout"><i class="fa fa fa-sign-out fa-2x white-text-link"></i></a></li>';
		$is_guest = "<li><a href='/login'><h6 class='white-text'><i class='fa fa-key fa-lg'></i> Log-in</h6></a></li>";

		$body_top = '<div class="background">
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<div class="post-box-content">
					<div class="row">
						<div class="small-12 medium-12 large-12 columns">
							<div class="search-ourads-options">
								<div class="row collapse">
									<form method="POST" action="http://localhost:8000/ourads@searching" accept-charset="UTF-8">
									<div class="small-9 columns">
										<input name="search" type="text" required placeholder="Search for pet ads based on location, area, name, price." class="search-ourads-categories-box">
									</div>
									<div class="small-3 columns">
										<button class="button small search-button-ourads wider-button" style="padding-top: 7px;
										padding-right: 30px;
										padding-bottom: 11px;
										padding-left: 1.75rem;
										font-size: 0.8125rem;"><i class="fa fa-search fa-lg"></i></button>
									</div>
									</form>
								</div>
								<h4 class="text-center main-dark-color-no-hover">My ads + Their ads = Our ads | #WELOVEPETS | @mypopibay</h4>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="small-12 medium-12 large-8 columns">
					



					<div class="search-ourads-ads-list">';

		$body_buttom = '</div>
					</div>
					<div class="small-12 medium-12 large-4 columns">
						<div class="our-ads-category-box">
							<div class="row">
								<div class="large-12 columns">
									<div class="row collapse">
										<form method="POST" action="http://localhost:8000/ourads@searching_price" accept-charset="UTF-8">
										<h5 class="text-left main-dark-color-no-hover"><i class="fa fa-search"></i> Price</h5>
										<div class="small-4 columns">
											<input required name="min" class="search-ourads-categories-box" type="text" placeholder="Min" />
										</div>
										<div class="small-4 columns">
											<input required name="max" class="search-ourads-categories-box" type="text" placeholder="Max" />
										</div>
										<div class="small-4 columns">
											<button class="button small search-button-ourads" style="padding-top: 7px;
											padding-right: 30px;
											padding-bottom: 11px;
											padding-left: 1.75rem;
											font-size: 0.8125rem;"><i class="fa fa-search fa-lg"></i></button>
										</div>
										</form>
									</div>
								</div>
							</div>
							<h5 class="text-left main-dark-color-no-hover"><i class="fa fa-search"></i> Search by:</h5>
							<ul class="no-bullet">
								<li><a href="/ourads/searching?search=newest"><h6 class="text-left grey-color">Newest</h6></a></li>
								<li><a href="/ourads/searching?search=oldest"><h6 class="text-left grey-color">Oldest</h6></a></li>
								<li><a href="/ourads/searching?search=cheapest"><h6 class="text-left grey-color">Cheapest</h6></a></li>
							</ul>
							<h3 class="text-left main-color-no-hover"><i class="fa fa-sliders"></i> Category</h3>
							<hr>
							<ul class="no-bullet">
								<li><a href="/ourads/searching?search=dog"><h5 class="text-left grey-color"><i class="fa fa-circle-thin orange-text"></i> Dog</h5></a></li>
								<!-- <li><a href="/ourads/searching?search=cat"><h5 class="text-left grey-color"><i class="fa fa-circle-thin orange-text"></i> Cat</h5></a></li> -->
							</ul>
							<h3 class="text-left main-color-no-hover"><i class="fa fa-map-marker"></i> Location</h3>
							<hr>
							<style type="text/css">
								.active {
									background: white !important;
								}

								.accordion .accordion-navigation>a, .accordion dd>a {
									background: #cccc33 !important;
									color: #222;
									padding: 1rem;
									display: block;
									border-top-left-radius: 5px !important;
									border-top-right-radius: 5px !important;
									font-family: "Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;
									font-size: 1rem;
								}

								.accordion .accordion-navigation>a:hover, .accordion dd>a:hover {
									background: rgba(137, 137, 32, 1) !important;
								}
							</style>
							<dl class="accordion" data-accordion>
								<dd class="accordion-navigation">
									<a href="#panel2"><h5 class="bolder-text white-text"><i class="fa fa-map-marker"></i> States in Nigeria</h5></a>
									<div id="panel2" class="content">
										<ul class="no-bullet go-down-a-bit-30">
											<li><a href="/ourads/searching?search=abia"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Abia 
											</h5></a></li>
											<li><a href="/ourads/searching?search=adamawa"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Adamawa 
											</h5></a></li>
											<li><a href="/ourads/searching?search=akwaibom"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Akwa Ibom 
											</h5></a></li>
											<li><a href="/ourads/searching?search=anambra"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Anambra 
											</h5></a></li>
											<li><a href="/ourads/searching?search=bauchi"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Bauchi 
											</h5></a></li>
											<li><a href="/ourads/searching?search=bayelsa"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Bayelsa 
											</h5></a></li>
											<li><a href="/ourads/searching?search=benue"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Benue 
											</h5></a></li>
											<li><a href="/ourads/searching?search=borno"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Borno 
											</h5></a></li>
											<li><a href="/ourads/searching?search=crossriver"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Cross River 
											</h5></a></li>
											<li><a href="/ourads/searching?search=delta"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Delta 
											</h5></a></li>
											<li><a href="/ourads/searching?search=ebonyi"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Ebonyi 
											</h5></a></li>
											<li><a href="/ourads/searching?search=edo"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Edo 
											</h5></a></li>
											<li><a href="/ourads/searching?search=ekiti"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Ekiti 
											</h5></a></li>
											<li><a href="/ourads/searching?search=enugu"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Enugu 
											</h5></a></li>
											<li><a href="/ourads/searching?search=abuja"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Abuja 
											</h5></a></li>
											<li><a href="/ourads/searching?search=gombe"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Gombe 
											</h5></a></li>
											<li><a href="/ourads/searching?search=imo"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Imo 
											</h5></a></li>
											<li><a href="/ourads/searching?search=jigawa"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Jigawa 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kaduna"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Kaduna 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kano"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Kano 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kastina"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Katsina 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kebbi"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Kebbi 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kogi"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i>
												Kogi 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kwara"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Kwara 
											</h5></a></li>
											<li><a href="/ourads/searching?search=lagos"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Lagos 
											</h5></a></li>
											<li><a href="/ourads/searching?search=nasarawa"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Nasarawa 
											</h5></a></li>
											<li><a href="/ourads/searching?search=niger"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Niger 
											</h5></a></li>
											<li><a href="/ourads/searching?search=ogun"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Ogun 
											</h5></a></li>
											<li><a href="/ourads/searching?search=ondo"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Ondo 
											</h5></a></li>
											<li><a href="/ourads/searching?search=osun"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Osun 
											</h5></a></li>
											<li><a href="/ourads/searching?search=oyo"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Oyo 
											</h5></a></li>
											<li><a href="/ourads/searching?search=plateau"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Plateau 
											</h5></a></li>
											<li><a href="/ourads/searching?search=rivers"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Rivers 
											</h5></a></li>
											<li><a href="/ourads/searching?search=sokoto"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Sokoto 
											</h5></a></li>
											<li><a href="/ourads/searching?search=taraba"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Taraba 
											</h5></a></li>
											<li><a href="/ourads/searching?search=yobo"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Yobe 
											</h5></a></li>
											<li><a href="/ourads/searching?search=zamfara"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Zamfara 
											</h5></a></li>
										</ul>
									</div>
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	/* The document title */
	document.title="Popibay || Classified pets ads || Your ads + Their ads = Our ads.";
</script>';
		
		$petad_alls = Petad::all();
		$naira = "₦";

		// header template...

		if ( Auth::check() == true ) {

			echo '<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="popibay">
				<meta name="description" content="Popibay is an online market, Pet management, Pet e-commerce that manages the Pet business from the Pet manager to the Pet buyer, Also it manages the life cycle of the Pet from the puppy stage to the stage of being sold out to the direct buyers, which notifies it buyers about each and every process of the puppy.">
				<meta name="keywords" content="popibay, dogs, puppies, pet business, e-commerce, puppies, pet managers, ebay, pet bay, olx, trade stable, jumia, konga, Buy, buy, sell, manage, escrow, escrow services,  services, sales, auction, facebook, twitter, google plus, instagram, google, alibaba, amazon, pets, dogs4sale, dogs for sale, security dogs,
				Breeder, breeders, Dog Management, Dog Market place, admire, Pet Profiling, Pet Market place">

				<title> Popibay || Posting your ad on Popibay.com </title>

				<link rel="shortcut icon" href="http://localhost:8000/pb-assets/img/favicon/popibay_favicon_70.png">

				<!-- Fontawesome -->
				<link href="http://localhost:8000/pb-assets/frameworks/font-awesome/css/font-awesome.min.css" rel="stylesheet">

				<!-- Popibay -->
				<link href="http://localhost:8000/pb-assets/css/pb.css" rel="stylesheet">

				<!-- JCarousel styles -->
				<link href="http://localhost:8000/pb-assets/css/c-styles.css" rel="stylesheet">

				<!-- slick theme -->
				<link href="http://localhost:8000/pb-assets/css/slick-theme.css" rel="stylesheet">

				<!-- slick css -->
				<link href="http://localhost:8000/pb-assets/css/slick.css" rel="stylesheet">

				<!-- icheck css -->
				<link href="http://localhost:8000/pb-assets/css/skins/all.css" rel="stylesheet">

				<!-- zino css silver theme -->
				<link href="http://localhost:8000/pb-assets/css/zino_css_themes/silver/zino.core.css" rel="stylesheet">

				<!-- zino css silver theme -->
				<link href="http://localhost:8000/pb-assets/css/zino_css_themes/silver/zino.selectbox.css" rel="stylesheet">

				<!-- hover css -->
				<link href="http://localhost:8000/pb-assets/css/hover.csss" rel="stylesheet">

				<!-- light slider css -->
				<link href="http://localhost:8000/pb-assets/css/lightslider.min.css" rel="stylesheet">


				<!-- Foundation -->
				<link rel="stylesheet" href="http://localhost:8000/pb-assets/frameworks/foundation/css/foundation.min.css" />

				<!-- Dropzone css -->
				<link rel="stylesheet" href="http://localhost:8000/pb-assets/css/dropzone.css" />

				<!-- Modernizr -->
				<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/vendor/modernizr.js"></script>

				<!-- Google+ login -->
				<script src="https://apis.google.com/js/client:platform.js" async defer></script>

			</head>
			<body>
				<!-- when there is no javascript  -->
				<noscript>
					<div class="pb-no-js">
						<div class="row">
							<!-- <div class="small-2 columns">
							<i class="fa fa-facebook fa-5x text-center"></i>
						</div> -->
						<div class="small-12 columns">
							<h4 class="show-for-medium-up text-center" id="pb-no-js-txt-err"><i class="fa fa-warning fa-lg"></i> Opps!!! It looks like your javascript is off. Please keep it on, Popibay needs it. </h4>
							<h4 class="show-for-small-only text-justify" id="pb-no-js-txt-err"><i class="fa fa-warning fa-lg"></i> Opps!!! It looks like your javascript is off. Please keep it on, Popibay needs it. </h4>
						</div>
					</div>
				</div>
			</noscript>
			<!-- /end when there is no javascript  -->
			<div class="header-petads">
				<div class="row">
					<div class="small-12 medium-12 large-2 columns pb-home-header">
						<a href="/">
							<img class="go-down-a-bit-10 show-for-medium-up pet-ad-header" src="http://localhost:8000/pb-assets/img/main_logo/popibay_white_logo_small.png" alt="popibay logo">
							<img class="go-down-a-bit-30 show-for-small-only" src="http://localhost:8000/pb-assets/img/main_logo/popibay_white_logo_small.png" alt="popibay logo">
						</a>
					</div>
					<div class="small-12 medium-12 large-5 columns">
						<div class="row">
							<div class="large-12 columns">
								<div class="row collapse go-down-a-bit-30">
									<div class="small-2 columns">
										<a href="/ourads" class="button postfix search-button-ourads"><h6 class="white-text bolder-text">Our ads</h6></a>
									</div>
									<form method="POST" action="http://localhost:8000/ourads@searching" accept-charset="UTF-8">
									<div class="small-7 columns">
										<input name="search" type="text" required placeholder="Search for pet ads based on location, area, name, price." class="search-input-gen">
									</div>
									<div class="small-3 columns">
										<button class="button small search-button-ourads" style="padding-top: 7px;
										padding-right: 30px;
										padding-bottom: 11px;
										padding-left: 1.75rem;
										font-size: 0.8125rem;"><i class="fa fa-search fa-lg"></i></button>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="go-down-a-bit-30 small-12 medium-12 large-5 columns">
						<ul class="inline-list">
							'. $is_member .'
							<li><a href="/petads"><button class="button tiny pb-button-two-sides-all-orange ad-post-button-text"> Post a pet ad</button></a></li>
						</ul>
					</div>
				</div>
			</div>';
		}else{

			echo '<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="popibay">
				<meta name="description" content="Popibay is an online market, Pet management, Pet e-commerce that manages the Pet business from the Pet manager to the Pet buyer, Also it manages the life cycle of the Pet from the puppy stage to the stage of being sold out to the direct buyers, which notifies it buyers about each and every process of the puppy.">
				<meta name="keywords" content="popibay, dogs, puppies, pet business, e-commerce, puppies, pet managers, ebay, pet bay, olx, trade stable, jumia, konga, Buy, buy, sell, manage, escrow, escrow services,  services, sales, auction, facebook, twitter, google plus, instagram, google, alibaba, amazon, pets, dogs4sale, dogs for sale, security dogs,
				Breeder, breeders, Dog Management, Dog Market place, admire, Pet Profiling, Pet Market place">

				<title> Popibay || Posting your ad on Popibay.com </title>

				<link rel="shortcut icon" href="http://localhost:8000/pb-assets/img/favicon/popibay_favicon_70.png">

				<!-- Fontawesome -->
				<link href="http://localhost:8000/pb-assets/frameworks/font-awesome/css/font-awesome.min.css" rel="stylesheet">

				<!-- Popibay -->
				<link href="http://localhost:8000/pb-assets/css/pb.css" rel="stylesheet">

				<!-- JCarousel styles -->
				<link href="http://localhost:8000/pb-assets/css/c-styles.css" rel="stylesheet">

				<!-- slick theme -->
				<link href="http://localhost:8000/pb-assets/css/slick-theme.css" rel="stylesheet">

				<!-- slick css -->
				<link href="http://localhost:8000/pb-assets/css/slick.css" rel="stylesheet">

				<!-- icheck css -->
				<link href="http://localhost:8000/pb-assets/css/skins/all.css" rel="stylesheet">

				<!-- zino css silver theme -->
				<link href="http://localhost:8000/pb-assets/css/zino_css_themes/silver/zino.core.css" rel="stylesheet">

				<!-- zino css silver theme -->
				<link href="http://localhost:8000/pb-assets/css/zino_css_themes/silver/zino.selectbox.css" rel="stylesheet">

				<!-- hover css -->
				<link href="http://localhost:8000/pb-assets/css/hover.csss" rel="stylesheet">

				<!-- light slider css -->
				<link href="http://localhost:8000/pb-assets/css/lightslider.min.css" rel="stylesheet">


				<!-- Foundation -->
				<link rel="stylesheet" href="http://localhost:8000/pb-assets/frameworks/foundation/css/foundation.min.css" />

				<!-- Dropzone css -->
				<link rel="stylesheet" href="http://localhost:8000/pb-assets/css/dropzone.css" />

				<!-- Modernizr -->
				<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/vendor/modernizr.js"></script>

				<!-- Google+ login -->
				<script src="https://apis.google.com/js/client:platform.js" async defer></script>

			</head>
			<body>
				<!-- when there is no javascript  -->
				<noscript>
					<div class="pb-no-js">
						<div class="row">
							<!-- <div class="small-2 columns">
							<i class="fa fa-facebook fa-5x text-center"></i>
						</div> -->
						<div class="small-12 columns">
							<h4 class="show-for-medium-up text-center" id="pb-no-js-txt-err"><i class="fa fa-warning fa-lg"></i> Opps!!! It looks like your javascript is off. Please keep it on, Popibay needs it. </h4>
							<h4 class="show-for-small-only text-justify" id="pb-no-js-txt-err"><i class="fa fa-warning fa-lg"></i> Opps!!! It looks like your javascript is off. Please keep it on, Popibay needs it. </h4>
						</div>
					</div>
				</div>
			</noscript>
			<!-- /end when there is no javascript  -->
			<div class="header-petads">
				<div class="row">
					<div class="small-12 medium-12 large-2 columns pb-home-header">
						<a href="/">
							<img class="go-down-a-bit-10 show-for-medium-up pet-ad-header" src="http://localhost:8000/pb-assets/img/main_logo/popibay_white_logo_small.png" alt="popibay logo">
							<img class="go-down-a-bit-30 show-for-small-only" src="http://localhost:8000/pb-assets/img/main_logo/popibay_white_logo_small.png" alt="popibay logo">
						</a>
					</div>
					<div class="small-12 medium-12 large-6 columns">
						<div class="row">
							<div class="large-12 columns">
								<div class="row collapse go-down-a-bit-30">
									<div class="small-2 columns">
										<a href="/ourads" class="button postfix search-button-ourads">Our ads</a>
									</div>
									<form method="POST" action="http://localhost:8000/ourads@searching" accept-charset="UTF-8">
										<div class="small-7 columns">
											<input name="search" type="text" required placeholder="Search for pet ads based on location, area, name, price." class="search-input-gen">
										</div>
										<div class="small-3 columns">
											<button class="button small search-button-ourads" style="padding-top: 7px;
											padding-right: 30px;
											padding-bottom: 11px;
											padding-left: 1.75rem;
											font-size: 0.8125rem;"><i class="fa fa-search fa-lg"></i></button>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
					<div class="go-down-a-bit-30 small-12 medium-12 large-4 columns">
						<ul class="inline-list">
							'. $is_guest .'
							<li><h6 class="white-text">|</h6></li>
							<li><a href="/petads"><button class="button tiny pb-button-two-sides-all-orange ad-post-button-text"> Post a pet ad</button></a></li>
						</ul>
					</div>
				</div>
			</div>';

		}


		// body template 

		echo $body_top;

		if ( $petad_count == 0 ) {
                
                echo '<div class="no-pet-ads">
                <h4 class="text-center"><i class="fa fa-search fa-2x orange-text"></i></h4>
                <hr>
                <h3 class="text-center">Your search result was not found for <b>" '.$search.' "</b>.</h3>
              </div>';
              }else{

                if ( $petad_count > 0 ) {

                  $petad_alls = $search_terms;

                  foreach ($petad_alls as $petad_all) {
                  	$image_thumbnail = Petimage::where('petad_id','=',$petad_all->id)->first();
                    $image_thumbnail = $image_thumbnail->image_thumbnail_path;
                    echo '
                    <a href="/viewmore?id='.$petad_all->id. '">
                      <div class="pet-ads-box">
                        <div class="row">
                          <div class="small-12 medium-12 large-3 columns">
                            <div class="image-box">
                              <img src="'.$image_thumbnail.'">
                            </div>
                          </div>
                          <div class="small-12 medium-12 large-9 columns">
                            <ul class="no-bullet">
                              <li>
                                <div class="row">
                                  <div class="small-12 medium-12 large-7 offset-1 columns">
                                    <h5 class="text-left main-color-no-hover">'.$petad_all->pet_ad_title. '</h5>
                                  </div>
                                  <div class="small-12 medium-12 large-4 columns">
                                    <h6 class="text-right main-dark-color-no-hover bolder-text">'. $naira.number_format($petad_all->pet_price). '</h6>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <h6 class="text-left">'.$petad_all->pet_description.'</h6>
                              </li>
                              <li>
                                <h6 class="text-left grey-text"><i class="fa fa-map-marker"></i> Location: '.$petad_all->location.' <i class="fa fa-long-arrow-right grey-text"></i> '.$petad_all->area.'</h6>
                              </li>
                              <li>
                                <h6 class="text-left grey-text"><i class="fa fa-clock-o"></i> Posted: '.\Carbon\Carbon::createFromTimeStamp(strtotime($petad_all->created_at))->diffForHumans().'</h6>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </a>';
                  }

                }
              }

        echo $body_buttom;

		// footer template...

		echo '<div class="inline-footer">
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<ul class="inline-list" id="inline-footer-links">
					<li><a href="/">Home</a></li>
					<li><a href="about">About</a></li>
					<li><a href="faq">FAQ / Help</a></li>
					<li><a href="contact">Contact</a></li> 
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<ul class="inline-list" id="inline-footer-links">
					<li><a target="_blank" href="http://facebook.com/popibay"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a target="_blank" href="http://twitter.com/@popibay"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a target="_blank" href="http://instagram.com/@popibay"><i class="fa fa-instagram fa-lg"></i></a></li>
					<li><a target="_blank" href="http://plus.google.com/popibay"><i class="fa fa-google-plus fa-lg"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<h6 class="text-center grey-color-no-hover font-exo2light">Copyright <i class="fa fa-copyright"></i> 2015 Popibay.com  | All rights reserved | A Jobinpal Enterprises product.</h6>
			</div>
		</div>
		</div>
		<!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
		<script src="http://localhost:8000/pb-assets/js/jquery.js"></script>

		<!-- jQuery ui  -->
		<script src="http://localhost:8000/pb-assets/js/jquery-ui.js"></script>

		<!-- foundation js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation.min.js"></script>

		<!-- foundation reveal js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.reveal.js"></script>

		<!-- tooltip js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.tooltip.js"></script>

		<!-- reveal js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.reveal.js"></script>

		<!-- equalizer js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.equalizer.js"></script>

		<!-- abide js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.abide.js"></script>

		<!-- orbit js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.orbit.js"></script>

		<!-- alert js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.alert.js"></script>
		
		<!-- accordion js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.accordion.js"></script>

		<!-- jcarousel js -->
		<script src="http://localhost:8000/pb-assets/js/jcarousel.jss"></script>

		<!-- slick js -->
		<script src="http://localhost:8000/pb-assets/js/slick.js"></script>

		<!-- icheck js -->
		<script src="http://localhost:8000/pb-assets/js/icheck.min.js"></script>

		<!-- scroll_to_fixed js -->
		<script src="http://localhost:8000/pb-assets/js/jquery-scrolltofixed-min.js"></script>

		<!-- jQuery populate plugin js -->
		<script src="http://localhost:8000/pb-assets/js/jquery.populate.min.js"></script>

		<!-- zenui select multiple plugin js -->
		<script src="http://localhost:8000/pb-assets/js/zino.selectbox.min.js"></script>

		<!-- drop zone js -->
		<script src="http://localhost:8000/pb-assets/js/dropzone.js"></script>

		<!-- jQuery Easy Confirm Dialog js -->
		<script src="http://localhost:8000/pb-assets/js/jquery.easy-confirm-dialog.js"></script>

		<!-- pb js -->
		<script src="http://localhost:8000/pb-assets/js/pb.js"></script>

		<!-- lightslider js -->
		<script src="http://localhost:8000/pb-assets/js/lightslider.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- /*<script src="http://localhost:8000/pb-assets/frameworks/bootstrap/dist/js/bootstrap.min.js"></script>*/ -->

		<script>
			$(document).foundation();
			$(".reg-form-err-exit").click(function(){
	        /*$("#form-err").removeClass( "reg-form-err" );
	        $("#form-err").addClass( "reg-form-err-hide" );
	        $("#form-err").css( "display", "none" );
	    });

			var form_err = document.getElementById("form-err");
			setTimeout(function(){
				$("#form-err").hide();
			},10000);
	      /*
	      Note that this code for hiding the form error 
	        box is not working please look @ it later...
	      */

	        /* CHOOSE ACCOUNT SWITCHES CONTROL */

	        /* This is for the pet manager click */
	        $("#pet-manager-switch").click(function(){
	        	var pmValue = $("#choose-account-pm")
	        	var isOn = $("#pet-manager-switch").is(":checked");
	        	if ( isOn == true ) {
	        		pmValue.val("PM");
	          //alert("it is true");
	        	}else{
	        		pmValue.val(null);
	        //alert("is null");
	        	}
	        });


	        /* This is for the pet buyer click */
	        $("#pet-buyer-switch").click(function(){
	        	var pbValue = $("#choose-account-pb");
	        	var isOn = $("#pet-buyer-switch").is(":checked");
	        	if ( isOn == true ) {
	        		pbValue.val("PB");
	          //alert("it is true");
	        	}else{
	        		pbValue.val(null);
	        //alert("is null");
	        	}
	        });

	        $("#choose-account-form").submit(function( event ){
	        //var e = event.preventDefault();
	        	pmValue = $("#choose-account-pm").val();
	        	pbValue = $("#choose-account-pb").val();
	        	pmValue_len = pmValue.length;
	        	pbValue_len = pbValue.length;

	        	if ( pmValue == 0  && pbValue == 0) {
	        		alert("Choose either Petmanager or Petbuyer to continue.");
	        		event.preventDefault();
	        	};

	        	if ( pmValue_len == 2  && pbValue_len == 2 ) {
	        		alert("Choose either Petmanager or Petbuyer to continue. The two options cannot be choosed.");
	        		event.preventDefault();
	        	};

	        });


	        $(".pet-shop-products").slick({
	        	centerMode: true,
	        	centerPadding: "60px",
	        	slidesToShow: 4,
	        	prevArrow:"<button type="button" class="slick-prev">Prev</button>",
	        	nextArrow:"<button type="button" class="slick-next">Next</button>",
	        	responsive: [
	        	{
	        		breakpoint: 768,
	        		settings: {
	        			arrows: true,
	        			centerMode: true,
	        			centerPadding: "40px",
	        			slidesToShow: 3
	        		}
	        	},
	        	{
	        		breakpoint: 480,
	        		settings: {
	        			arrows: true,
	        			centerMode: true,
	        			centerPadding: "40px",
	        			slidesToShow: 1
	        		}
	        	}
	        	]
	        });


	        $("input").iCheck({
	        	checkboxClass: "icheckbox_square-blue",
	        	radioClass: "icheckbox_square-blue",
	      increaseArea: "20%" // optional
	  });

	        /* scroll to fixed plugin iniciation */
	        $(".search-ourads-options").scrollToFixed({
	        	marginTop: $(".header-petads").outerHeight(true) + 5
	        });

	        dashboard_menu = $(".dash-menu");

	        dashboard_menu.scrollToFixed({
	        	marginTop: $(".header-petads").outerHeight(true) + 20
	        });

	        ad_contact_box = $(".ad-contact-box");

	        ad_contact_box.scrollToFixed({
	        	marginTop: $(".header-petads").outerHeight(true) + 20
	        });

	        our_ads_category_box = $(".our-ads-category-box");

	            /*our_ads_category_box.scrollToFixed({
	                marginTop: $(".header-petads").outerHeight(true) + 100
	            });*/


	var jssor_slider1 = new $JssorSlider$("slider1_container");


	</script>
	</body>
	</html>';
	}




	public function price_search(){

		$minimum = Input::get('min');
		$maximum = Input::get('max');

		if ( isset($minimum) && empty($maximum) ) {

			$search = $minimum;
			
			$search_terms = Petad::where('pet_price', 'LIKE', '%'.$search.'%')->get();

			$search_terms_count = Petad::where('pet_price', 'LIKE', '%'.$search.'%')->count();
		}


		if ( isset($maximum) && empty($minimum) ) {

			$search = $maximum;
			
			$search_terms = Petad::where('pet_price', 'LIKE', '%'.$search.'%')->get();

			$search_terms_count = Petad::where('pet_price', 'LIKE', '%'.$search.'%')->count();
		}


		if ( isset($maximum) && isset($minimum) ) {

			$search_terms = Petad::whereBetween('pet_price', array($minimum, $maximum))->get();

			$search_terms_count = Petad::whereBetween('pet_price', array($minimum, $maximum))->count();
		}

		$petad_count = $search_terms_count;

		$is_member = '<li><a href="/dashboard"><button class="button tiny pet-ad-member-header-button-two bolder-text"> <i class="fa fa-tags"></i> My pet ads.</button></a></li><li><a href="/logout"><i class="fa fa fa-sign-out fa-2x white-text-link"></i></a></li>';
		$is_guest = "<li><a href='/login'><h6 class='white-text'><i class='fa fa-key fa-lg'></i> Log-in</h6></a></li>";

		$body_top = '<div class="background">
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<div class="post-box-content">
					<div class="row">
						<div class="small-12 medium-12 large-12 columns">
							<div class="search-ourads-options">
								<div class="row collapse">
									<form method="POST" action="http://localhost:8000/ourads@searching" accept-charset="UTF-8">
									<div class="small-9 columns">
										<input name="search" type="text" required placeholder="Search for pet ads based on location, area, name, price." class="search-ourads-categories-box">
									</div>
									<div class="small-3 columns">
										<button class="button small search-button-ourads wider-button" style="padding-top: 7px;
										padding-right: 30px;
										padding-bottom: 11px;
										padding-left: 1.75rem;
										font-size: 0.8125rem;"><i class="fa fa-search fa-lg"></i></button>
									</div>
									</form>
								</div>
								<h4 class="text-center main-dark-color-no-hover">My ads + Their ads = Our ads | #WELOVEPETS | @mypopibay</h4>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="small-12 medium-12 large-8 columns">
					



					<div class="search-ourads-ads-list">';

		$body_buttom = '</div>
					</div>
					<div class="small-12 medium-12 large-4 columns">
						<div class="our-ads-category-box">
							<div class="row">
								<div class="large-12 columns">
									<div class="row collapse">
										<form method="POST" action="http://localhost:8000/ourads@searching_price" accept-charset="UTF-8">
										<h5 class="text-left main-dark-color-no-hover"><i class="fa fa-search"></i> Price</h5>
										<div class="small-4 columns">
											<input required name="min" class="search-ourads-categories-box" type="text" placeholder="Min" />
										</div>
										<div class="small-4 columns">
											<input required name="max" class="search-ourads-categories-box" type="text" placeholder="Max" />
										</div>
										<div class="small-4 columns">
											<button class="button small search-button-ourads" style="padding-top: 7px;
											padding-right: 30px;
											padding-bottom: 11px;
											padding-left: 1.75rem;
											font-size: 0.8125rem;"><i class="fa fa-search fa-lg"></i></button>
										</div>
										</form>
									</div>
								</div>
							</div>
							<h5 class="text-left main-dark-color-no-hover"><i class="fa fa-search"></i> Search by:</h5>
							<ul class="no-bullet">
								<li><a href="/ourads/searching?search=newest"><h6 class="text-left grey-color">Newest</h6></a></li>
								<li><a href="/ourads/searching?search=oldest"><h6 class="text-left grey-color">Oldest</h6></a></li>
								<li><a href="/ourads/searching?search=cheapest"><h6 class="text-left grey-color">Cheapest</h6></a></li>
							</ul>
							<h3 class="text-left main-color-no-hover"><i class="fa fa-sliders"></i> Category</h3>
							<hr>
							<ul class="no-bullet">
								<li><a href="/ourads/searching?search=dog"><h5 class="text-left grey-color"><i class="fa fa-circle-thin orange-text"></i> Dog</h5></a></li>
								<!-- <li><a href="/ourads/searching?search=cat"><h5 class="text-left grey-color"><i class="fa fa-circle-thin orange-text"></i> Cat</h5></a></li> -->
							</ul>
							<h3 class="text-left main-color-no-hover"><i class="fa fa-map-marker"></i> Location</h3>
							<hr>
							<style type="text/css">
								.active {
									background: white !important;
								}

								.accordion .accordion-navigation>a, .accordion dd>a {
									background: #cccc33 !important;
									color: #222;
									padding: 1rem;
									display: block;
									border-top-left-radius: 5px !important;
									border-top-right-radius: 5px !important;
									font-family: "Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;
									font-size: 1rem;
								}

								.accordion .accordion-navigation>a:hover, .accordion dd>a:hover {
									background: rgba(137, 137, 32, 1) !important;
								}
							</style>
							<dl class="accordion" data-accordion>
								<dd class="accordion-navigation">
									<a href="#panel2"><h5 class="bolder-text white-text"><i class="fa fa-map-marker"></i> States in Nigeria</h5></a>
									<div id="panel2" class="content">
										<ul class="no-bullet go-down-a-bit-30">
											<li><a href="/ourads/searching?search=abia"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Abia 
											</h5></a></li>
											<li><a href="/ourads/searching?search=adamawa"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Adamawa 
											</h5></a></li>
											<li><a href="/ourads/searching?search=akwaibom"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Akwa Ibom 
											</h5></a></li>
											<li><a href="/ourads/searching?search=anambra"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Anambra 
											</h5></a></li>
											<li><a href="/ourads/searching?search=bauchi"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Bauchi 
											</h5></a></li>
											<li><a href="/ourads/searching?search=bayelsa"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Bayelsa 
											</h5></a></li>
											<li><a href="/ourads/searching?search=benue"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Benue 
											</h5></a></li>
											<li><a href="/ourads/searching?search=borno"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Borno 
											</h5></a></li>
											<li><a href="/ourads/searching?search=crossriver"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Cross River 
											</h5></a></li>
											<li><a href="/ourads/searching?search=delta"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Delta 
											</h5></a></li>
											<li><a href="/ourads/searching?search=ebonyi"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Ebonyi 
											</h5></a></li>
											<li><a href="/ourads/searching?search=edo"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Edo 
											</h5></a></li>
											<li><a href="/ourads/searching?search=ekiti"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Ekiti 
											</h5></a></li>
											<li><a href="/ourads/searching?search=enugu"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Enugu 
											</h5></a></li>
											<li><a href="/ourads/searching?search=abuja"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Abuja 
											</h5></a></li>
											<li><a href="/ourads/searching?search=gombe"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Gombe 
											</h5></a></li>
											<li><a href="/ourads/searching?search=imo"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Imo 
											</h5></a></li>
											<li><a href="/ourads/searching?search=jigawa"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Jigawa 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kaduna"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Kaduna 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kano"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Kano 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kastina"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Katsina 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kebbi"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Kebbi 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kogi"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i>
												Kogi 
											</h5></a></li>
											<li><a href="/ourads/searching?search=kwara"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Kwara 
											</h5></a></li>
											<li><a href="/ourads/searching?search=lagos"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Lagos 
											</h5></a></li>
											<li><a href="/ourads/searching?search=nasarawa"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Nasarawa 
											</h5></a></li>
											<li><a href="/ourads/searching?search=niger"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Niger 
											</h5></a></li>
											<li><a href="/ourads/searching?search=ogun"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Ogun 
											</h5></a></li>
											<li><a href="/ourads/searching?search=ondo"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Ondo 
											</h5></a></li>
											<li><a href="/ourads/searching?search=osun"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Osun 
											</h5></a></li>
											<li><a href="/ourads/searching?search=oyo"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Oyo 
											</h5></a></li>
											<li><a href="/ourads/searching?search=plateau"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Plateau 
											</h5></a></li>
											<li><a href="/ourads/searching?search=rivers"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Rivers 
											</h5></a></li>
											<li><a href="/ourads/searching?search=sokoto"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Sokoto 
											</h5></a></li>
											<li><a href="/ourads/searching?search=taraba"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Taraba 
											</h5></a></li>
											<li><a href="/ourads/searching?search=yobo"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Yobe 
											</h5></a></li>
											<li><a href="/ourads/searching?search=zamfara"><h5 class="text-left grey-color pulse"><i class="fa fa-map-marker orange-text"></i> 
												Zamfara 
											</h5></a></li>
										</ul>
									</div>
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	/* The document title */
	document.title="Popibay || Classified pets ads || Your ads + Their ads = Our ads.";
</script>';
		
		$petad_alls = Petad::all();
		$naira = "₦";

		// header template...

		if ( Auth::check() == true ) {

			echo '<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="popibay">
				<meta name="description" content="Popibay is an online market, Pet management, Pet e-commerce that manages the Pet business from the Pet manager to the Pet buyer, Also it manages the life cycle of the Pet from the puppy stage to the stage of being sold out to the direct buyers, which notifies it buyers about each and every process of the puppy.">
				<meta name="keywords" content="popibay, dogs, puppies, pet business, e-commerce, puppies, pet managers, ebay, pet bay, olx, trade stable, jumia, konga, Buy, buy, sell, manage, escrow, escrow services,  services, sales, auction, facebook, twitter, google plus, instagram, google, alibaba, amazon, pets, dogs4sale, dogs for sale, security dogs,
				Breeder, breeders, Dog Management, Dog Market place, admire, Pet Profiling, Pet Market place">

				<title> Popibay || Posting your ad on Popibay.com </title>

				<link rel="shortcut icon" href="http://localhost:8000/pb-assets/img/favicon/popibay_favicon_70.png">

				<!-- Fontawesome -->
				<link href="http://localhost:8000/pb-assets/frameworks/font-awesome/css/font-awesome.min.css" rel="stylesheet">

				<!-- Popibay -->
				<link href="http://localhost:8000/pb-assets/css/pb.css" rel="stylesheet">

				<!-- JCarousel styles -->
				<link href="http://localhost:8000/pb-assets/css/c-styles.css" rel="stylesheet">

				<!-- slick theme -->
				<link href="http://localhost:8000/pb-assets/css/slick-theme.css" rel="stylesheet">

				<!-- slick css -->
				<link href="http://localhost:8000/pb-assets/css/slick.css" rel="stylesheet">

				<!-- icheck css -->
				<link href="http://localhost:8000/pb-assets/css/skins/all.css" rel="stylesheet">

				<!-- zino css silver theme -->
				<link href="http://localhost:8000/pb-assets/css/zino_css_themes/silver/zino.core.css" rel="stylesheet">

				<!-- zino css silver theme -->
				<link href="http://localhost:8000/pb-assets/css/zino_css_themes/silver/zino.selectbox.css" rel="stylesheet">

				<!-- hover css -->
				<link href="http://localhost:8000/pb-assets/css/hover.csss" rel="stylesheet">

				<!-- light slider css -->
				<link href="http://localhost:8000/pb-assets/css/lightslider.min.css" rel="stylesheet">


				<!-- Foundation -->
				<link rel="stylesheet" href="http://localhost:8000/pb-assets/frameworks/foundation/css/foundation.min.css" />

				<!-- Dropzone css -->
				<link rel="stylesheet" href="http://localhost:8000/pb-assets/css/dropzone.css" />

				<!-- Modernizr -->
				<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/vendor/modernizr.js"></script>

				<!-- Google+ login -->
				<script src="https://apis.google.com/js/client:platform.js" async defer></script>

			</head>
			<body>
				<!-- when there is no javascript  -->
				<noscript>
					<div class="pb-no-js">
						<div class="row">
							<!-- <div class="small-2 columns">
							<i class="fa fa-facebook fa-5x text-center"></i>
						</div> -->
						<div class="small-12 columns">
							<h4 class="show-for-medium-up text-center" id="pb-no-js-txt-err"><i class="fa fa-warning fa-lg"></i> Opps!!! It looks like your javascript is off. Please keep it on, Popibay needs it. </h4>
							<h4 class="show-for-small-only text-justify" id="pb-no-js-txt-err"><i class="fa fa-warning fa-lg"></i> Opps!!! It looks like your javascript is off. Please keep it on, Popibay needs it. </h4>
						</div>
					</div>
				</div>
			</noscript>
			<!-- /end when there is no javascript  -->
			<div class="header-petads">
				<div class="row">
					<div class="small-12 medium-12 large-2 columns pb-home-header">
						<a href="/">
							<img class="go-down-a-bit-10 show-for-medium-up pet-ad-header" src="http://localhost:8000/pb-assets/img/main_logo/popibay_white_logo_small.png" alt="popibay logo">
							<img class="go-down-a-bit-30 show-for-small-only" src="http://localhost:8000/pb-assets/img/main_logo/popibay_white_logo_small.png" alt="popibay logo">
						</a>
					</div>
					<div class="small-12 medium-12 large-5 columns">
						<div class="row">
							<div class="large-12 columns">
								<div class="row collapse go-down-a-bit-30">
									<div class="small-2 columns">
										<a href="/ourads" class="button postfix search-button-ourads"><h6 class="white-text bolder-text">Our ads</h6></a>
									</div>
									<form method="POST" action="http://localhost:8000/ourads@searching" accept-charset="UTF-8">
									<div class="small-7 columns">
										<input name="search" type="text" required placeholder="Search for pet ads based on location, area, name, price." class="search-input-gen">
									</div>
									<div class="small-3 columns">
										<button class="button small search-button-ourads" style="padding-top: 7px;
										padding-right: 30px;
										padding-bottom: 11px;
										padding-left: 1.75rem;
										font-size: 0.8125rem;"><i class="fa fa-search fa-lg"></i></button>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="go-down-a-bit-30 small-12 medium-12 large-5 columns">
						<ul class="inline-list">
							'. $is_member .'
							<li><a href="/petads"><button class="button tiny pb-button-two-sides-all-orange ad-post-button-text"> Post a pet ad</button></a></li>
						</ul>
					</div>
				</div>
			</div>';
		}else{

			echo '<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="popibay">
				<meta name="description" content="Popibay is an online market, Pet management, Pet e-commerce that manages the Pet business from the Pet manager to the Pet buyer, Also it manages the life cycle of the Pet from the puppy stage to the stage of being sold out to the direct buyers, which notifies it buyers about each and every process of the puppy.">
				<meta name="keywords" content="popibay, dogs, puppies, pet business, e-commerce, puppies, pet managers, ebay, pet bay, olx, trade stable, jumia, konga, Buy, buy, sell, manage, escrow, escrow services,  services, sales, auction, facebook, twitter, google plus, instagram, google, alibaba, amazon, pets, dogs4sale, dogs for sale, security dogs,
				Breeder, breeders, Dog Management, Dog Market place, admire, Pet Profiling, Pet Market place">

				<title> Popibay || Posting your ad on Popibay.com </title>

				<link rel="shortcut icon" href="http://localhost:8000/pb-assets/img/favicon/popibay_favicon_70.png">

				<!-- Fontawesome -->
				<link href="http://localhost:8000/pb-assets/frameworks/font-awesome/css/font-awesome.min.css" rel="stylesheet">

				<!-- Popibay -->
				<link href="http://localhost:8000/pb-assets/css/pb.css" rel="stylesheet">

				<!-- JCarousel styles -->
				<link href="http://localhost:8000/pb-assets/css/c-styles.css" rel="stylesheet">

				<!-- slick theme -->
				<link href="http://localhost:8000/pb-assets/css/slick-theme.css" rel="stylesheet">

				<!-- slick css -->
				<link href="http://localhost:8000/pb-assets/css/slick.css" rel="stylesheet">

				<!-- icheck css -->
				<link href="http://localhost:8000/pb-assets/css/skins/all.css" rel="stylesheet">

				<!-- zino css silver theme -->
				<link href="http://localhost:8000/pb-assets/css/zino_css_themes/silver/zino.core.css" rel="stylesheet">

				<!-- zino css silver theme -->
				<link href="http://localhost:8000/pb-assets/css/zino_css_themes/silver/zino.selectbox.css" rel="stylesheet">

				<!-- hover css -->
				<link href="http://localhost:8000/pb-assets/css/hover.csss" rel="stylesheet">

				<!-- light slider css -->
				<link href="http://localhost:8000/pb-assets/css/lightslider.min.css" rel="stylesheet">


				<!-- Foundation -->
				<link rel="stylesheet" href="http://localhost:8000/pb-assets/frameworks/foundation/css/foundation.min.css" />

				<!-- Dropzone css -->
				<link rel="stylesheet" href="http://localhost:8000/pb-assets/css/dropzone.css" />

				<!-- Modernizr -->
				<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/vendor/modernizr.js"></script>

				<!-- Google+ login -->
				<script src="https://apis.google.com/js/client:platform.js" async defer></script>

			</head>
			<body>
				<!-- when there is no javascript  -->
				<noscript>
					<div class="pb-no-js">
						<div class="row">
							<!-- <div class="small-2 columns">
							<i class="fa fa-facebook fa-5x text-center"></i>
						</div> -->
						<div class="small-12 columns">
							<h4 class="show-for-medium-up text-center" id="pb-no-js-txt-err"><i class="fa fa-warning fa-lg"></i> Opps!!! It looks like your javascript is off. Please keep it on, Popibay needs it. </h4>
							<h4 class="show-for-small-only text-justify" id="pb-no-js-txt-err"><i class="fa fa-warning fa-lg"></i> Opps!!! It looks like your javascript is off. Please keep it on, Popibay needs it. </h4>
						</div>
					</div>
				</div>
			</noscript>
			<!-- /end when there is no javascript  -->
			<div class="header-petads">
				<div class="row">
					<div class="small-12 medium-12 large-2 columns pb-home-header">
						<a href="/">
							<img class="go-down-a-bit-10 show-for-medium-up pet-ad-header" src="http://localhost:8000/pb-assets/img/main_logo/popibay_white_logo_small.png" alt="popibay logo">
							<img class="go-down-a-bit-30 show-for-small-only" src="http://localhost:8000/pb-assets/img/main_logo/popibay_white_logo_small.png" alt="popibay logo">
						</a>
					</div>
					<div class="small-12 medium-12 large-6 columns">
						<div class="row">
							<div class="large-12 columns">
								<div class="row collapse go-down-a-bit-30">
									<div class="small-2 columns">
										<a href="/ourads" class="button postfix search-button-ourads">Our ads</a>
									</div>
									<form method="POST" action="http://localhost:8000/ourads@searching" accept-charset="UTF-8">
										<div class="small-7 columns">
											<input name="search" type="text" required placeholder="Search for pet ads based on location, area, name, price." class="search-input-gen">
										</div>
										<div class="small-3 columns">
											<button class="button small search-button-ourads" style="padding-top: 7px;
											padding-right: 30px;
											padding-bottom: 11px;
											padding-left: 1.75rem;
											font-size: 0.8125rem;"><i class="fa fa-search fa-lg"></i></button>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
					<div class="go-down-a-bit-30 small-12 medium-12 large-4 columns">
						<ul class="inline-list">
							'. $is_guest .'
							<li><h6 class="white-text">|</h6></li>
							<li><a href="/petads"><button class="button tiny pb-button-two-sides-all-orange ad-post-button-text"> Post a pet ad</button></a></li>
						</ul>
					</div>
				</div>
			</div>';

		}


		// body template 

		echo $body_top;

		if ( $petad_count == 0 ) {
                
                echo '<div class="no-pet-ads">
                <h4 class="text-center"><i class="fa fa-search fa-2x orange-text"></i></h4>
                <hr>
                <h3 class="text-center">Your search result was not found for <b>" '.$search.' "</b>.</h3>
              </div>';
              }else{

                if ( $petad_count > 0 ) {

                  $petad_alls = $search_terms;

                  foreach ($petad_alls as $petad_all) {
                  	$image_thumbnail = Petimage::where('petad_id','=',$petad_all->id)->first();
                    $image_thumbnail = $image_thumbnail->image_thumbnail_path;
                    echo '
                    <a href="/viewmore?id='.$petad_all->id. '">
                      <div class="pet-ads-box">
                        <div class="row">
                          <div class="small-12 medium-12 large-3 columns">
                            <div class="image-box">
                              <img src="'.$image_thumbnail.'">
                            </div>
                          </div>
                          <div class="small-12 medium-12 large-9 columns">
                            <ul class="no-bullet">
                              <li>
                                <div class="row">
                                  <div class="small-12 medium-12 large-7 offset-1 columns">
                                    <h5 class="text-left main-color-no-hover">'.$petad_all->pet_ad_title. '</h5>
                                  </div>
                                  <div class="small-12 medium-12 large-4 columns">
                                    <h6 class="text-right main-dark-color-no-hover bolder-text">'. $naira.number_format($petad_all->pet_price). '</h6>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <h6 class="text-left">'.$petad_all->pet_description.'</h6>
                              </li>
                              <li>
                                <h6 class="text-left grey-text"><i class="fa fa-map-marker"></i> Location: '.$petad_all->location.' <i class="fa fa-long-arrow-right grey-text"></i> '.$petad_all->area.'</h6>
                              </li>
                              <li>
                                <h6 class="text-left grey-text"><i class="fa fa-clock-o"></i> Posted: '.\Carbon\Carbon::createFromTimeStamp(strtotime($petad_all->created_at))->diffForHumans().'</h6>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </a>';
                  }

                }
              }

        echo $body_buttom;

		// footer template...

		echo '<div class="inline-footer">
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<ul class="inline-list" id="inline-footer-links">
					<li><a href="/">Home</a></li>
					<li><a href="about">About</a></li>
					<li><a href="faq">FAQ / Help</a></li>
					<li><a href="contact">Contact</a></li> 
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<ul class="inline-list" id="inline-footer-links">
					<li><a target="_blank" href="http://facebook.com/popibay"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a target="_blank" href="http://twitter.com/@popibay"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a target="_blank" href="http://instagram.com/@popibay"><i class="fa fa-instagram fa-lg"></i></a></li>
					<li><a target="_blank" href="http://plus.google.com/popibay"><i class="fa fa-google-plus fa-lg"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<h6 class="text-center grey-color-no-hover font-exo2light">Copyright <i class="fa fa-copyright"></i> 2015 Popibay.com  | All rights reserved | A Jobinpal Enterprises product.</h6>
			</div>
		</div>
		</div>
		<!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
		<script src="http://localhost:8000/pb-assets/js/jquery.js"></script>

		<!-- jQuery ui  -->
		<script src="http://localhost:8000/pb-assets/js/jquery-ui.js"></script>

		<!-- foundation js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation.min.js"></script>

		<!-- foundation reveal js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.reveal.js"></script>

		<!-- tooltip js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.tooltip.js"></script>

		<!-- reveal js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.reveal.js"></script>

		<!-- equalizer js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.equalizer.js"></script>

		<!-- abide js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.abide.js"></script>

		<!-- orbit js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.orbit.js"></script>

		<!-- alert js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.alert.js"></script>
		
		<!-- accordion js -->
		<script src="http://localhost:8000/pb-assets/frameworks/foundation/js/foundation/foundation.accordion.js"></script>

		<!-- jcarousel js -->
		<script src="http://localhost:8000/pb-assets/js/jcarousel.jss"></script>

		<!-- slick js -->
		<script src="http://localhost:8000/pb-assets/js/slick.js"></script>

		<!-- icheck js -->
		<script src="http://localhost:8000/pb-assets/js/icheck.min.js"></script>

		<!-- scroll_to_fixed js -->
		<script src="http://localhost:8000/pb-assets/js/jquery-scrolltofixed-min.js"></script>

		<!-- jQuery populate plugin js -->
		<script src="http://localhost:8000/pb-assets/js/jquery.populate.min.js"></script>

		<!-- zenui select multiple plugin js -->
		<script src="http://localhost:8000/pb-assets/js/zino.selectbox.min.js"></script>

		<!-- drop zone js -->
		<script src="http://localhost:8000/pb-assets/js/dropzone.js"></script>

		<!-- jQuery Easy Confirm Dialog js -->
		<script src="http://localhost:8000/pb-assets/js/jquery.easy-confirm-dialog.js"></script>

		<!-- pb js -->
		<script src="http://localhost:8000/pb-assets/js/pb.js"></script>

		<!-- lightslider js -->
		<script src="http://localhost:8000/pb-assets/js/lightslider.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- /*<script src="http://localhost:8000/pb-assets/frameworks/bootstrap/dist/js/bootstrap.min.js"></script>*/ -->

		<script>
			$(document).foundation();
			$(".reg-form-err-exit").click(function(){
	        /*$("#form-err").removeClass( "reg-form-err" );
	        $("#form-err").addClass( "reg-form-err-hide" );
	        $("#form-err").css( "display", "none" );
	    });

			var form_err = document.getElementById("form-err");
			setTimeout(function(){
				$("#form-err").hide();
			},10000);
	      /*
	      Note that this code for hiding the form error 
	        box is not working please look @ it later...
	      */

	        /* CHOOSE ACCOUNT SWITCHES CONTROL */

	        /* This is for the pet manager click */
	        $("#pet-manager-switch").click(function(){
	        	var pmValue = $("#choose-account-pm")
	        	var isOn = $("#pet-manager-switch").is(":checked");
	        	if ( isOn == true ) {
	        		pmValue.val("PM");
	          //alert("it is true");
	        	}else{
	        		pmValue.val(null);
	        //alert("is null");
	        	}
	        });


	        /* This is for the pet buyer click */
	        $("#pet-buyer-switch").click(function(){
	        	var pbValue = $("#choose-account-pb");
	        	var isOn = $("#pet-buyer-switch").is(":checked");
	        	if ( isOn == true ) {
	        		pbValue.val("PB");
	          //alert("it is true");
	        	}else{
	        		pbValue.val(null);
	        //alert("is null");
	        	}
	        });

	        $("#choose-account-form").submit(function( event ){
	        //var e = event.preventDefault();
	        	pmValue = $("#choose-account-pm").val();
	        	pbValue = $("#choose-account-pb").val();
	        	pmValue_len = pmValue.length;
	        	pbValue_len = pbValue.length;

	        	if ( pmValue == 0  && pbValue == 0) {
	        		alert("Choose either Petmanager or Petbuyer to continue.");
	        		event.preventDefault();
	        	};

	        	if ( pmValue_len == 2  && pbValue_len == 2 ) {
	        		alert("Choose either Petmanager or Petbuyer to continue. The two options cannot be choosed.");
	        		event.preventDefault();
	        	};

	        });


	        $(".pet-shop-products").slick({
	        	centerMode: true,
	        	centerPadding: "60px",
	        	slidesToShow: 4,
	        	prevArrow:"<button type="button" class="slick-prev">Prev</button>",
	        	nextArrow:"<button type="button" class="slick-next">Next</button>",
	        	responsive: [
	        	{
	        		breakpoint: 768,
	        		settings: {
	        			arrows: true,
	        			centerMode: true,
	        			centerPadding: "40px",
	        			slidesToShow: 3
	        		}
	        	},
	        	{
	        		breakpoint: 480,
	        		settings: {
	        			arrows: true,
	        			centerMode: true,
	        			centerPadding: "40px",
	        			slidesToShow: 1
	        		}
	        	}
	        	]
	        });


	        $("input").iCheck({
	        	checkboxClass: "icheckbox_square-blue",
	        	radioClass: "icheckbox_square-blue",
	      increaseArea: "20%" // optional
	  });

	        /* scroll to fixed plugin iniciation */
	        $(".search-ourads-options").scrollToFixed({
	        	marginTop: $(".header-petads").outerHeight(true) + 5
	        });

	        dashboard_menu = $(".dash-menu");

	        dashboard_menu.scrollToFixed({
	        	marginTop: $(".header-petads").outerHeight(true) + 20
	        });

	        ad_contact_box = $(".ad-contact-box");

	        ad_contact_box.scrollToFixed({
	        	marginTop: $(".header-petads").outerHeight(true) + 20
	        });

	        our_ads_category_box = $(".our-ads-category-box");

	            /*our_ads_category_box.scrollToFixed({
	                marginTop: $(".header-petads").outerHeight(true) + 100
	            });*/


	var jssor_slider1 = new $JssorSlider$("slider1_container");


	</script>
	</body>
	</html>';

	}

}