@section('sidebar')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="popibay">
    <title> Popibay Admin login</title>

    <link rel="shortcut icon" href="pb-assets/img/favicon/popibay_favicon_70.png">

    <!-- Fontawesome -->
    <link href="pb-assets/frameworks/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Popibay -->
    <link href="pb-assets/css/pb.css" rel="stylesheet">

    <!-- JCarousel styles -->
    <link href="pb-assets/css/c-styles.css" rel="stylesheet">

    <!-- slick theme -->
    <link href="pb-assets/css/slick-theme.css" rel="stylesheet">

    <!-- doc css -->
    <link href="pb-assets/css/docs.css" rel="stylesheet">

    <!-- slick css -->
    <link href="pb-assets/css/slick.css" rel="stylesheet">

    <!-- icheck css -->
    <link href="pb-assets/css/skins/all.css" rel="stylesheet">

    <!-- hover css -->
    <link href="pb-assets/css/hover.csss" rel="stylesheet">

    <!-- Foundation -->
    <link rel="stylesheet" href="pb-assets/frameworks/foundation/css/foundation.min.css" />

    <!-- Modernizr -->
    <script src="pb-assets/frameworks/foundation/js/vendor/modernizr.js"></script>

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
    <div class="header">
      <div class="row">
        <div class="small-12 medium-12 large-12 columns pb-home-header">
          <a href="/">
          <img class="go-down-a-bit-10 show-for-medium-up" src="pb-assets/img/main_logo/popibay_logo_2.png" alt="popibay logo">
          <img class="go-down-a-bit-30 show-for-small-only" src="pb-assets/img/main_logo/popibay_logo_3.png" alt="popibay logo">
          </a>
        </div>
      </div>
    </div>

    @yield('content')
    
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
    <script src="pb-assets/js/jquery.js"></script>

    <!-- foundation js -->
    <script src="pb-assets/frameworks/foundation/js/foundation.min.js"></script>

    <!-- tooltip js -->
    <script src="pb-assets/frameworks/foundation/js/foundation/foundation.tooltip.js"></script>

    <!-- reveal js -->
    <script src="pb-assets/frameworks/foundation/js/foundation/foundation.reveal.js"></script>

    <!-- equalizer js -->
    <script src="pb-assets/frameworks/foundation/js/foundation/foundation.equalizer.js"></script>

    <!-- reveal js -->
    <script src="pb-assets/js/jcarousel.jss"></script>

    <!-- slick js -->
    <script src="pb-assets/js/slick.js"></script>

    <!-- icheck js -->
    <script src="pb-assets/js/icheck.min.js"></script>

    <!-- dropdown js -->
    <script src="pb-assets/frameworks/foundation/js/foundation/foundation.dropdown.js"></script>

    <!-- cropit js -->
    <script src="pb-assets/js/jquery.cropit.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- /*<script src="pb-assets/frameworks/bootstrap/dist/js/bootstrap.min.js"></script>*/ -->

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



      $('#image-cropper').cropit();

  // When user clicks select image button,
  // open select file dialog programmatically
  $('.select-image-btn').click(function() {
    $('.cropit-image-input').click();
  });
  /*
   * See http://www.htmllion.com/html5-range-input-with-css.html
   * for styling range input
   */

    </script>
  </body>
</html>
@show