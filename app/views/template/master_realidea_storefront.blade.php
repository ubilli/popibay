@section('sidebar')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="popibay">
    <meta name="description" content="Popibay is an online market, Pet management, Pet e-commerce that manages the Pet business from the Pet manager to the Pet buyer, Also it manages the life cycle of the Pet from the puppy stage to the stage of being sold out to the direct buyers, which notifies it buyers about each and every process of the puppy.">
    <meta name="keywords" content="popibay, dogs, puppies, pet business, e-commerce, puppies, pet managers, ebay, pet bay, olx, trade stable, jumia, konga, Buy, buy, sell, manage, escrow, escrow services,  services, sales, auction, facebook, twitter, google plus, instagram, google, alibaba, amazon, pets, dogs4sale, dogs for sale, security dogs,
    Breeder, breeders, Dog Management, Dog Market place, admire, Pet Profiling, Pet Market place, mypopibay">

    <title> My pet store. </title>

    <link rel="shortcut icon" href="../pb-assets/img/favicon/popibay_favicon_70.png">

    <!-- Fontawesome -->
    <link href="../pb-assets/frameworks/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Popibay -->
    <link href="../pb-assets/css/pb.css" rel="stylesheet">

    <!-- JCarousel styles -->
    <link href="../pb-assets/css/c-styles.css" rel="stylesheet">

    <!-- slick theme -->
    <link href="../pb-assets/css/slick-theme.css" rel="stylesheet">

    <!-- slick css -->
    <link href="../pb-assets/css/slick.css" rel="stylesheet">

    <!-- icheck css -->
    <link href="../pb-assets/css/skins/all.css" rel="stylesheet">

    <!-- hover css -->
    <link href="../pb-assets/css/hover.css" rel="stylesheet">

    <!-- Foundation -->
    <link rel="stylesheet" href="../pb-assets/frameworks/foundation/css/foundation.min.css" />

    <!-- Modernizr -->
    <script src="../pb-assets/frameworks/foundation/js/vendor/modernizr.js"></script>

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
	<!-- pb-header-ads -->
    <?php
    $Adcontent = Session::get('adcontent');
    if ( $Adcontent == true ) {
         echo '<div class="dashboard-header-ads">
        <div class="ad-board">
        <span class="close-adboard" title="close sponsored ad"><i class="fa fa-times fa-lg close-adboard-icon"></i></span>
        </div>
    </div>';
     } 
    ?>
    <!-- /end pb-header-ads -->
    <div class="dashboard-header">
        <div class="row">
            <div class="small-12 medium-12 large-3 columns">
                <a href="/dashboard">
                    <img class="go-down-a-bit-20 show-for-medium-up" src="pb-assets/img/main_logo/popibay_logo_2.png" alt="popibay logo">
                    <h3 class="text-left main-color">
                        <i class="fa fa-tachometer"></i> My Dashboard
                    </h3>
                    <img class="go-down-a-bit-20 show-for-small-only" src="pb-assets/img/main_logo/popibay_logo_3.png" alt="popibay logo">
                </a>
            </div>
            <div class="small-12 medium-12 large-6 columns">
                <div class="large-12 columns" style="margin-top: 30px !important;">
                  <div class="row collapse postfix-round">
                    <div class="small-9 columns">
                      <input class="pb-text-box search-box-height-custom" type="text" placeholder="Search for pets">
                  </div>
                  <div class="small-3 columns">
                      <button class="pb-button-two-sides-right"><i class="fa fa-search"></i></button>
                  </div>
              </div>
          </div>
            </div>
            <div class="small-12 medium-12 large-3 columns">
                <ul class="inline-list go-down-a-bit-30">
                    <li><h6 class="light-grey">
                    <?php 
                    $Petsellername = Session::get('pb_user_email');
                    $Username = User::where('email', '=', $Petsellername)->first();
                    echo $Username->name;

                    $Profilepic = new ProfilePicController();
                    ?>
                    </h6></li>
                    <li>
                        <!-- dropdown start -->
                        <div class="user-img-icon-box" data-dropdown="tinyDrops" aria-controls="tinyDrop" aria-expanded="false" data-options="align:left">
                        <img src="<?php $Profilepic->small_thumbnail(); ?>" alt="profile pic icon">
                        </div>
                        <ul id="tinyDrops" class="f-dropdown" data-dropdown-content="" tabindex="-1" aria-hidden="false" style="position: absolute; left: 30px; top: 236px;">
                            <li><a class="gudea-font grey-color" href="dashboard/settings" class=""><i class="fa fa-cogs"></i> Settings</a></li>
                            <li><a class="gudea-font grey-color" href="dashboard/account" class=""><i class="fa fa-user"></i> Account</a></li>
                            <li><a class="gudea-font grey-color" href="dashboard/logout" class=""><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                        <!-- dropdown end -->
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- content here -->
     @yield('content')
    <!-- /end content here -->

    <div class="inline-footer">
      <div class="row">
        <div class="small-12 medium-12 large-12 columns">
          <ul class="inline-list" id="inline-footer-links">
            <li><a href="">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="blog">Blog</a></li>
            <li><a href="forum">Forum</a></li>
            <li><a href="help">Help</a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="small-12 medium-12 large-12 columns">
        <ul class="inline-list" id="inline-footer-links">
            <li><a href="http://facebook.com/popibay"><i class="fa fa-facebook fa-lg"></i></a></li>
            <li><a href="http://twitter.com/@popibay"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li><a href="http://instagram.com/@popibay"><i class="fa fa-instagram fa-lg"></i></a></li>
            <li><a href="http://plus.google.com/popibay"><i class="fa fa-google-plus fa-lg"></i></a></li>
        </ul>
        </div>
      </div>
  
      <div class="row">
        <div class="small-12 medium-12 large-12 columns">
          <h6 class="text-center black-color font-exo2light">Copyright <i class="fa fa-copyright"></i> 2015 Popibay.com  | All rights reserved.</h6>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../pb-assets/js/jquery.js"></script>

    <!-- foundation js -->
    <script src="../pb-assets/frameworks/foundation/js/foundation.min.js"></script>

    <!-- tooltip js -->
    <script src="../pb-assets/frameworks/foundation/js/foundation/foundation.tooltip.js"></script>

    <!-- reveal js -->
    <script src="../pb-assets/frameworks/foundation/js/foundation/foundation.reveal.js"></script>

    <!-- equalizer js -->
    <script src="../pb-assets/frameworks/foundation/js/foundation/foundation.equalizer.js"></script>

    <!-- reveal js -->
    <script src="../pb-assets/js/jcarousel.jss"></script>

    <!-- slick js -->
    <script src="../pb-assets/js/slick.js"></script>

    <!-- icheck js -->
    <script src="../pb-assets/js/icheck.min.js"></script>

    <!-- cropit js -->
    <script src="pb-assets/js/jquery.cropit.min.js"></script>

    <script>
      $(document).foundation({
        tab: {
          callback : function (tab) {
            console.log(tab);
        }
    }
    });

  $('#image-cropper').cropit();

  // When user clicks select image button,
  // open select file dialog programmatically
  $('.select-image-btn').click(function() {
    $('.cropit-image-input').click();
  });

  $('.save-move-a-bit').click(function() {
    var imageData = $('#image-cropper').cropit('export');
      window.open(imageData);
  });
  </script>

    </body>
</html>
@show