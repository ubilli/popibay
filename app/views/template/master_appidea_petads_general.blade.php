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
    Breeder, breeders, Dog Management, Dog Market place, admire, Pet Profiling, Pet Market place">

    <title> Popibay || Posting your ad on Popibay.com </title>

    <link rel="shortcut icon" href="http://popibay.com/pb-assets/img/favicon/popibay_favicon_70.png">

    <!-- Fontawesome -->
    <link href="http://popibay.com/pb-assets/frameworks/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Popibay -->
    <link href="http://popibay.com/pb-assets/css/pb.css" rel="stylesheet">

    <!-- JCarousel styles -->
    <link href="http://popibay.com/pb-assets/css/c-styles.css" rel="stylesheet">

    <!-- slick theme -->
    <link href="http://popibay.com/pb-assets/css/slick-theme.css" rel="stylesheet">

    <!-- slick css -->
    <link href="http://popibay.com/pb-assets/css/slick.css" rel="stylesheet">

    <!-- icheck css -->
    <link href="http://popibay.com/pb-assets/css/skins/all.css" rel="stylesheet">

    <!-- zino css silver theme -->
    <link href="http://popibay.com/pb-assets/css/zino_css_themes/silver/zino.core.css" rel="stylesheet">

     <!-- zino css silver theme -->
    <link href="http://popibay.com/pb-assets/css/zino_css_themes/silver/zino.selectbox.css" rel="stylesheet">

    <!-- hover css -->
    <link href="http://popibay.com/pb-assets/css/hover.csss" rel="stylesheet">

    <!-- light slider css -->
    <link href="http://popibay.com/pb-assets/css/lightslider.min.css" rel="stylesheet">


    <!-- Foundation -->
    <link rel="stylesheet" href="http://popibay.com/pb-assets/frameworks/foundation/css/foundation.min.css" />

    {{-- Dropzone css --}}
    <link rel="stylesheet" href="http://popibay.com/pb-assets/css/dropzone.css" />

    <!-- Modernizr -->
    <script src="http://popibay.com/pb-assets/frameworks/foundation/js/vendor/modernizr.js"></script>

    <!-- Google+ login -->
    <script src="https://apis.google.com/js/client:platform.js" async defer></script>

  </head>
  <body>
    
    <div class="res-header">
      <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
          <nav class="tab-bar">
            <section class="left-small">
              <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
            </section>

            <section class="middle tab-bar-section">
              <a href="/">
              <img class="res-pb-logo" src="http://popibay.com/pb-assets/img/main_logo/popibay_white_logo_small.png" alt="popibay logo">
              </a>
            </section>
          </nav>

          <aside class="left-off-canvas-menu">
            <ul class="off-canvas-list">
              <li><label>Popibay</label></li>
              <li><a href="/"><i class="fa fa fa-home"></i> Home</a></li>
              <li><a href="/ourads"><i class="fa fa fa-tags"></i> Ourads</a></li>
              <li><a href="/petads"><i class="fa fa fa-tag"></i> Post a pet ad</a></li>
              <?php
                if ( Auth::check() == true ) {
                  echo '<li><a href="/logout"><i class="fa fa fa-sign-out"></i> Logout</a></li>';
                }else{
                  echo '<li><a href="/login"><i class="fa fa fa-key"></i> Login</a></li>';
                }
              ?>
            </ul>
          </aside>

          <a class="exit-off-canvas"></a>

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
    <div class="header-petads show-for-large-only">
      <div class="row">
        <div class="small-12 medium-12 large-2 columns pb-home-header">
          <a href="/">
          <img class="go-down-a-bit-10 show-for-medium-up pet-ad-header" src="http://popibay.com/pb-assets/img/main_logo/popibay_white_logo_small.png" alt="popibay logo">
          <img class="go-down-a-bit-30 show-for-small-only" src="http://popibay.com/pb-assets/img/main_logo/popibay_white_logo_small.png" alt="popibay logo">
          </a>
        </div>
        <div class="small-12 medium-12 large-5 columns">
          <div class="row">
            <div class="large-12 columns">
              <div class="row collapse go-down-a-bit-30">
                <div class="small-2 columns">
                  <a href="/ourads" class="button postfix search-button-ourads"><h6 class="white-text bolder-text">Our ads</h6></a>
                </div>
                {{ Form::open(array('route' => 'Ourads.search')) }}
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
                {{ Form::close() }}
              </div>
            </div>
          </div>
        </div>
        <div class="go-down-a-bit-30 small-12 medium-12 large-5 columns">
          <ul class="inline-list">
            <?php
              /*
              * Check if the user is a guest or a member
              *
              */

              if ( Auth::check() == true ) {
                echo '<li><a href="/dashboard"><button class="button tiny pet-ad-member-header-button-two bolder-text"> <i class="fa fa-tags"></i> My pet ads.</button></a></li>
                  <li><a href="/logout" title="Logout"><i class="fa fa fa-sign-out fa-2x white-text-link"></i></a></li>';
              }else{
                echo '<li><a href="/login"><h6 class="white-text"><i class="fa fa-key fa-lg"></i> Log-in</h6></a></li>';
              }
            ?>
            <!-- <li><h6 class="white-text">|</h6></li> -->
            <?php

              if ( Auth::check() == true ) {
                echo '<li><a href="/petads"><button class="bolder-text button tiny pb-button-two-sides-all-orange "> Post a pet ad</button></a></li>';
              }else{
                echo '<li><a href="/petads"><button class="bolder-text button tiny pb-button-two-sides-all-orange "> Post a pet ad</button></a></li>';
              }
            ?>
          </ul>
        </div>
      </div>
    </div>

    @yield('content')
    
    <div class="inline-footer">
      <div class="row">
        <div class="small-12 medium-12 large-12 columns">
          <ul class="inline-list" id="inline-footer-links">
            <li><a href="/">Home</a></li>
            <li><a href="http://popibay.com/about">About</a></li>
            <li><a href="http://popibay.com/faq">FAQ / Help</a></li>
            <li><a href="http://popibay.com/contact">Contact</a></li> 
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="small-12 medium-12 large-12 columns">
        <ul class="inline-list" id="inline-footer-links">
            <li><a target="_blank" href="https://www.facebook.com/mypopibay"><i class="fa fa-facebook fa-lg"></i></a></li>
            <li><a target="_blank" href="https://twitter.com/mypopibay"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li><a target="_blank" href="https://instagram.com/mypopibay/"><i class="fa fa-instagram fa-lg"></i></a></li>
            <li><a target="_blank" href="https://plus.google.com/+Popibay"><i class="fa fa-google-plus fa-lg"></i></a></li>
        </ul>
        </div>
      </div>
  
      <div class="row">
        <div class="small-12 medium-12 large-12 columns">
          <h6 class="text-center grey-color-no-hover font-exo2light">Copyright <i class="fa fa-copyright"></i> 2015 Popibay.com  | All rights reserved | A Jobinpal Enterprises product.</h6>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://popibay.com/pb-assets/js/jquery.js"></script>

    <!-- jQuery ui  -->
    <script src="http://popibay.com/pb-assets/js/jquery-ui.js"></script>

    <!-- foundation js -->
    <script src="http://popibay.com/pb-assets/frameworks/foundation/js/foundation.min.js"></script>

    <!-- foundation reveal js -->
    <script src="http://popibay.com/pb-assets/frameworks/foundation/js/foundation/foundation.reveal.js"></script>

    <!-- tooltip js -->
    <script src="http://popibay.com/pb-assets/frameworks/foundation/js/foundation/foundation.tooltip.js"></script>

    <!-- reveal js -->
    <script src="http://popibay.com/pb-assets/frameworks/foundation/js/foundation/foundation.reveal.js"></script>

    <!-- equalizer js -->
    <script src="http://popibay.com/pb-assets/frameworks/foundation/js/foundation/foundation.equalizer.js"></script>

    <!-- abide js -->
    <script src="http://popibay.com/pb-assets/frameworks/foundation/js/foundation/foundation.abide.js"></script>

    <!-- orbit js -->
    <script src="http://popibay.com/pb-assets/frameworks/foundation/js/foundation/foundation.orbit.js"></script>

    <!-- alert js -->
    <script src="http://popibay.com/pb-assets/frameworks/foundation/js/foundation/foundation.alert.js"></script>

    <!-- accordion js -->
    <script src="http://popibay.com/pb-assets/frameworks/foundation/js/foundation/foundation.accordion.js"></script>

    <!-- jcarousel js -->
    <script src="http://popibay.com/pb-assets/js/jcarousel.jss"></script>

    <!-- slick js -->
    <script src="http://popibay.com/pb-assets/js/slick.js"></script>

    <!-- icheck js -->
    <script src="http://popibay.com/pb-assets/js/icheck.min.js"></script>

    <!-- scroll_to_fixed js -->
    <script src="http://popibay.com/pb-assets/js/jquery-scrolltofixed-min.js"></script>

    <!-- jQuery populate plugin js -->
    <script src="http://popibay.com/pb-assets/js/jquery.populate.min.js"></script>

    <!-- zenui select multiple plugin js -->
    <script src="http://popibay.com/pb-assets/js/zino.selectbox.min.js"></script>

    <!-- drop zone js -->
    <script src="http://popibay.com/pb-assets/js/dropzone.js"></script>

    <!-- jQuery Easy Confirm Dialog js -->
    <script src="http://popibay.com/pb-assets/js/jquery.easy-confirm-dialog.js"></script>

    <!-- pb js -->
    <script src="http://popibay.com/pb-assets/js/pb.js"></script>

    <!-- lightslider js -->
    <script src="http://popibay.com/pb-assets/js/lightslider.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- /*<script src="http://popibay.com/pb-assets/frameworks/bootstrap/dist/js/bootstrap.min.js"></script>*/ -->

    <script>
      $(document).foundation();
      $('.reg-form-err-exit').click(function(){
        /*$('#form-err').removeClass( "reg-form-err" );
        $('#form-err').addClass( "reg-form-err-hide" );*/
        $('#form-err').css( "display", "none" );
        });

      var form_err = document.getElementById('form-err');
      setTimeout(function(){
        $('#form-err').hide();
      },10000);
      /*
      Note that this code for hiding the form error 
        box is not working please look @ it later...
      */

      /* CHOOSE ACCOUNT SWITCHES CONTROL */

      /* This is for the pet manager click */
      $("#pet-manager-switch").click(function(){
      var pmValue = $('#choose-account-pm')
      var isOn = $('#pet-manager-switch').is(':checked');
      if ( isOn == true ) {
          pmValue.val('PM');
          //alert('it is true');
      }else{
        pmValue.val(null);
        //alert('is null');
      }
      });

      /* This is for the pet buyer click */
      $("#pet-buyer-switch").click(function(){
      var pbValue = $('#choose-account-pb');
      var isOn = $('#pet-buyer-switch').is(':checked');
      if ( isOn == true ) {
          pbValue.val('PB');
          //alert('it is true');
      }else{
        pbValue.val(null);
        //alert('is null');
      }
      });

      $('#choose-account-form').submit(function( event ){
        //var e = event.preventDefault();
        pmValue = $('#choose-account-pm').val();
        pbValue = $('#choose-account-pb').val();
        pmValue_len = pmValue.length;
        pbValue_len = pbValue.length;
        
        if ( pmValue == 0  && pbValue == 0) {
          alert('Choose either Petmanager or Petbuyer to continue.');
          event.preventDefault();
        };

        if ( pmValue_len == 2  && pbValue_len == 2 ) {
          alert('Choose either Petmanager or Petbuyer to continue. The two options cannot be choosed.');
          event.preventDefault();
        };
        
      });


      $('.pet-shop-products').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 4,
        prevArrow:'<button type="button" class="slick-prev">Prev</button>',
        nextArrow:'<button type="button" class="slick-next">Next</button>',
        responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
        ]
      });


      $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'icheckbox_square-blue',
      increaseArea: '20%' // optional
    });

      /* scroll to fixed plugin iniciation */
      $('.search-ourads-options').scrollToFixed({
        marginTop: $('.header-petads').outerHeight(true) + 5
      });

      dashboard_menu = $('.dash-menu');

            dashboard_menu.scrollToFixed({
                marginTop: $('.header-petads').outerHeight(true) + 20
            });

      ad_contact_box = $('.ad-contact-box');

            ad_contact_box.scrollToFixed({
                marginTop: $('.header-petads').outerHeight(true) + 20
            });

      our_ads_category_box = $('.our-ads-category-box');

            /*our_ads_category_box.scrollToFixed({
                marginTop: $('.header-petads').outerHeight(true) + 100
            });*/

      
      var jssor_slider1 = new $JssorSlider$('slider1_container');


    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-59188294-1', 'auto');
      ga('send', 'pageview');

    </script>
  </body>
</html>
@show
