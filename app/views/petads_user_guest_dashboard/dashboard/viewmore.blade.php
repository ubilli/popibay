@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
  <!-- <div class="wider-img-background-content">
    <h1 class="text-center white-text text-shadow go-down-a-bit-40"><i class="fa fa-question-circle"></i> Serve yourself here.</h1>
    <h5 class="text-center white-text">Here you can find answers to our most frequently asked questions and how to use Popibay.
    </h5>
  </div> -->
<div class="row">
  <div class="small-12 medium-12 large-12 columns">
    <div class="post-box-content">
      <div class="row">
        <div class="small-12 medium-12 large-12 columns">
          <h3 class="text-left main-color-no-hover"><i class="fa fa-tags"></i> My pet ads <i class="fa fa-long-arrow-right"></i> Viewmore</h3>
          <hr>
          <?php
            $user_viewmore_id = Input::get('id');
            $sess_email = Session::get('pb_user_email');
            $user_id_main = User::where('email','=',$sess_email)->first();
            $user_id = $user_id_main->id;
            $user_id_name = $user_id_main->name;
            $user_id_phone = Account::where('email','=',$sess_email)->first();
            $user_id_phone = $user_id_phone->phone_number;
            $user_id_email = $user_id_main->email;
            $ourad_paginate = Petad::where('user_id', '=', $user_id)->paginate(5);
            $ourad_data = Petad::where('id', '=', $user_viewmore_id)->first();
            $naira = "₦"; 
            $fake_phonenumber = "0813222444455";
          ?>

          <?php

          $petimages = Petimage::where('petad_id','=',$user_viewmore_id)->get();
          $petimage_single = Petimage::where('petad_id','=',$user_viewmore_id)->first();
          $petimages_count = Petimage::where('petad_id','=',$user_viewmore_id)->count();
          
          $petimage_thumbnail_default = 'http://popibay.com/pb-assets/img/pet-ads-img-default/image-bg-pet-ads-4.png';
          $petimage_large_default = 'http://popibay.com/pb-assets/img/dogs/21.jpg';

          ?>

          <div class="row">
            <div class="small-12 medium-12 large-8 columns">
              <div class="pet-ad-title-box go-up-a-bit-10">
                <h4 class="text-left main-dark-color-no-hover">{{$ourad_data->pet_ad_title}}</h4>
                <ul class="small-block-grid-2">
                  <li><h6 class="text-center grey-text"><i class="fa fa-clock-o"></i> Posted: {{\Carbon\Carbon::createFromTimeStamp(strtotime($ourad_data->created_at))->diffForHumans()}}</h6></li>
                  <li><h6 class="text-center grey-text"><i class="fa fa-map-marker"></i> Location: {{$ourad_data->location}} <i class="fa fa-long-arrow-right grey-text"></i> {{$ourad_data->area}}</h6></li>
                </ul>
              </div>
              <div class="pet-ad-images-box go-up-a-bit-10">
                <ul id="lightSlider" class="gallery list-unstyled cS-hidden">
                  <?php

                  if ( $petimages_count > 0 ) {
                    foreach ($petimages as $petimage) {
                      
                      echo '<li data-thumb="'.$petimage->image_thumbnail_path.'"> 
                      <img src="'.$petimage->image_path.'" />
                      </li>';

                    }
                  }else{

                    $petimages = array('no-image-1','no-image-2','no-image-3','no-image-4','no-image-5');

                    foreach ($petimages as $petimage) {
                    echo '<li data-thumb="'.$petimage_thumbnail_default.'"> 
                      <img src="'.$petimage_large_default.'" />
                      </li>';
                    }

                  }

                  ?>
              </div>
              <div class="pet-ad-title-box go-up-a-bit-10">
                <h4 class="text-left main-dark-color-no-hover">Pet ad description</h4>
                <h6 class="text-justify">
                  {{$ourad_data->pet_description}}
                </h6>
                <hr>
                <ul class="inline-list go-down-a-bit-10" id="inline-footer-links">
                  <li><a data-reveal-id="facebook-link-unavalable" target="_blank" href="http://facebook.com/popibay"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <div id="facebook-link-unavalable" class="reveal-modal tiny" data-reveal>
                      <h4 class="text-center main-color-no-hover"><i class="fa fa-exclamation-circle"></i> Sorry this service is not available now.</h4>
                      <a class="close-reveal-modal">&#215;</a>
                    </div>
                    <li><a data-reveal-id="twitter-link-unavalable" target="_blank" href="http://twitter.com/@popibay"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <div id="twitter-link-unavalable" class="reveal-modal tiny" data-reveal>
                      <h4 class="text-center main-color-no-hover"><i class="fa fa-exclamation-circle"></i> Sorry this service is not available now.</h4>
                      <a class="close-reveal-modal">&#215;</a>
                    </div>
                    <li><a data-reveal-id="google-link-unavalable" target="_blank" href="http://plus.google.com/popibay"><i class="fa fa-google-plus fa-2x"></i></a></li>
                    <div id="google-link-unavalable" class="reveal-modal tiny" data-reveal>
                      <h4 class="text-center main-color-no-hover"><i class="fa fa-exclamation-circle"></i> Sorry this service is not available now.</h4>
                      <a class="close-reveal-modal">&#215;</a>
                    </div>
                  <li><a target="_blank" href="mailto:{{$user_id_email}}"><i class="fa fa-envelope-o fa-2x"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="small-12 medium-12 large-4 columns">
              <div class="pet-ad-other-info-box">
                <div class="pet-ad-price-header">
                  <h3 class="text-center white-text">{{$naira}}{{number_format($ourad_data->pet_price)}}</h3>
                </div>
                <div class="list-box-con">
                  <div class="row">
                    <div class="small-12 medium-12 large-2 columns">
                      <h4 class="text-left main-dark-color-no-hover"><i class="fa fa-user"></i></h4>
                    </div>
                    <div class="small-12 medium-12 large-10 columns">
                      <h4 class="text-left main-color-no-hover">{{$user_id_name}}</h4>
                    </div>
                  </div>
                </div>
                <div class="list-box-con-two">
                  <div class="row collapse">
                    <div class="small-3 large-8 columns">
                      <span class="prefix"><h5 class="position-text" id="response-phone-number"> Contact number. </h5></span>
                      <input type="hidden" value="{{$user_id_phone}}" id="pet-ad-phone">
                    </div>
                    <div class="small-9 large-4 columns">
                      <!-- <a id="show-number-button" href="" class="button postfix our-ads-button-style-right">Show</a> -->
                      <button id="show-number-button" type="button" class="button postfix our-ads-button-style-right">Show</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
<script>
  /* The document title */
  document.title="Popibay || My pet ads || Viewmore";
</script>
@stop