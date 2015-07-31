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
  			<div class="small-12 medium-12 large-12 columns">
  				<h3 class="text-left main-color-no-hover"><i class="fa fa-tags"></i> Our ads <i class="fa fa-long-arrow-right"></i> Viewmore</h3>
  				<hr>
          <?php
            $user_viewmore_id = Input::get('id');
            $sess_email = Session::get('pb_user_email');

            if ( isset($sess_email) ) {
                $user_id_main = User::where('email','=',$sess_email)->first();
                $user_id = $user_id_main->id;
                $user_id_name = $user_id_main->name;
                $user_id_phone = Account::where('email','=',$sess_email)->first();
                $user_id_phone = $user_id_phone->phone_number;
                $user_id_email = $user_id_main->email;
              }else{
                $petad_user = Petad::where('id','=',$user_viewmore_id)->first();
                $petad_user_id = $petad_user->user_id;
                $user_id_main = User::where('id','=',$petad_user_id)->first();
                $user_id = $user_id_main->id;
                $user_id_name = $user_id_main->name;
                $user_id_email = $user_id_main->email;
                $user_id_phone = Account::where('email','=',$user_id_email)->first();
                $user_id_phone = $user_id_phone->phone_number;
              }

            $viewmore_id = Input::get('id');
            $petad_paginate = Petad::where('id', '=', $viewmore_id)->paginate(5);
            $petad_data = Petad::where('id', '=', $viewmore_id)->first();
            $ourad_data = $petad_data;
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
                <div class="list-box-con-two-expand">
                  <button style="" class="no-margin wider-button small pb-button-two-sides-all bolder-text" type="button" data-reveal-id="reply-petad-form"><i class="fa fa-envelope"></i> Reply this pet ad.</button>
                  <div id="reply-petad-form" class="reveal-modal tiny" data-reveal>
                    <h4 class="text-center main-color-no-hover"><i class="fa fa-envelope"></i> Reply this pet ad.</h4>
                    {{ Form::open(array('route' => 'Viewmore.reply')) }}

                    <?php

                      if (Auth::check() == true)
                      {
                        echo '<!-- This is a member -->
                        <div class="view-more-reply-form-box">
                          <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Subject</b></h6></label>
                          <input required type="text" name="subject" placeholder="Subject" class="" style="margin-bottom:20px !important;">
                          <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Message</b></h6></label>
                          <input type="hidden" name="name" value="'.$user_id_name.'" />
                          <input type="hidden" name="email" value="'.$user_id_email.'" />
                          <input type="hidden" name="viewmore_id" value="'.$viewmore_id.'" />
                          <textarea required name="message" placeholder="Your message" cols="30" rows="10"></textarea>
                          <button style="margin-bottom: 20px !important; margin-top: 20px !important;" class="wider-button pb-button-two-sides-all" type="submit"><i class="fa fa-envelope-o white-text"></i> Reply </button>
                        </div>';
                      }else{
                        echo '<div class="view-more-reply-form-box">
                        <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Name</b></h6></label>
                        <input required type="text" name="name" placeholder="Name" class="" style="margin-bottom:20px !important;">
                        <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Email</b></h6></label>
                        <input required type="email" name="email" placeholder="Email" class="" style="margin-bottom:20px !important;">
                        <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Subject</b></h6></label>
                        <input required type="text" name="subject" placeholder="Subject" class="" style="margin-bottom:20px !important;">
                        <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Message</b></h6></label>
                        <input type="hidden" name="viewmore_id" value="'.$viewmore_id.'" />
                        <textarea required name="message" placeholder="Your message" cols="30" rows="10"></textarea>
                        <button style="margin-bottom: 20px !important; margin-top: 20px !important;" class="wider-button pb-button-two-sides-all" type="submit"><i class="fa fa-envelope-o white-text"></i> Reply </button>
                      </div>';
                      }
                    ?>         
                    {{ Form::close() }}
                    <a class="close-reveal-modal">&#215;</a>
                  </div>
                </div>
                <div class="list-box-con-two-expand">
                    <?php

                      $saved_petad_id = Savead::where('petad_id','=',$viewmore_id)->first();
                      //$saved_petad_id = $saved_petad_id->petad_id;
                      $saved_user_id = Savead::where('user_id','=',$user_id)->first();
                      //$saved_user_id = $saved_user_id->user_id;

                      $saved_petad_id_count = Savead::where('petad_id','=',$viewmore_id)->count();
                      $saved_user_id_count = Savead::where('user_id','=',$user_id)->count();


                      if ( Auth::check() == true ) {
                        // $saved_petad_id = $saved_petad_id->petad_id;
                        // $saved_user_id = $saved_user_id->user_id;

                        if ( ($saved_petad_id_count > 0) && ($saved_user_id_count > 0) ) {
                          
                          echo '<a href="/unsavead?id='.$viewmore_id.'"><button title="Click to unsave this pet ad" id="save-pet-ad" style="" class="no-margin wider-button small saved-petad-button bolder-text" type="button"><i class="fa fa-star fa-lg"></i> Saved</button></a>';

                        }else{

                          if ( ($saved_petad_id_count == 0) ) {

                          echo '<a href="/savingad?id='.$viewmore_id.'"><button id="save-pet-ad" style="" class="no-margin wider-button small pb-button-two-sides-all-save-ads bolder-text" type="button"><i class="fa fa-star-o fa-lg"></i> Save this ad</button></a>';
                          }
                        }
                        
                      }else{
                        echo '<a href="/login">
                        <button style="" class="no-margin wider-button small pb-button-two-sides-all-save-ads bolder-text" type="button"><i class="fa fa-star-o fa-lg"></i> Save this ad</button>
                      </a>';
                      }

                    ?>
                </div>
                <div class="list-box-con-two-expand">
                  <button style="" class="no-margin wider-button small pb-button-two-sides-all-alert bolder-text" type="button" data-reveal-id="report-petad-form"><i class="fa fa-exclamation-circle"></i> Report</button>
                  <div id="report-petad-form" class="reveal-modal tiny" data-reveal>
                    <h4 class="text-center main-color-no-hover"><i class="fa fa-exclamation-circle"></i> Report this pet ad.</h4>
                    {{ Form::open(array('route' => 'Viewmore.report')) }}
                    <?php

                      if (Auth::check() == true)
                      {
                        echo '<div class="view-more-reply-form-box">
                        <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Report Why?</b></h6></label>
                        <select required name="reason">
                          <option default value="">Report why?</option>
                          <option value="this is illegal or fraud">This is illegal or fraud</option>
                          <option value="this ad is spam">This ad is spam</option>
                          <option value="the price is wrong">The price is wrong</option>
                          <option value="wrong category">Wrong category</option>
                          <option value="seller ask for payment">Seller ask for payment.</option>
                        </select>
                         <input type="hidden" name="name" value="'.$user_id_name.'" />
                          <input type="hidden" name="email" value="'.$user_id_email.'" />
                          <input type="hidden" name="viewmore_id" value="'.$viewmore_id.'" />
                        <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Message</b></h6></label>
                        <textarea required name="message" placeholder="Your message" cols="30" rows="10"></textarea>
                        <button style="margin-bottom: 20px !important; margin-top: 20px !important;" class="wider-button pb-button-two-sides-all" type="submit"><i class="fa fa-exclamation-circle"></i> Report </button></div>';
                      }else{
                        echo '<div class="view-more-reply-form-box">
                        <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Name </b></h6></label>
                        <input required name="name" type="text" placeholder="Name" class="pb-text-box" style="margin-bottom:20px !important;">
                        <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Email</b></h6></label>
                        <input required name="email" type="text" placeholder="Email" class="pb-text-box" style="margin-bottom:20px !important;">
                        <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Report Why?</b></h6></label>
                        <select required name="reason">
                          <option default value="">Report why?</option>
                          <option value="this is illegal or fraud">This is illegal or fraud</option>
                          <option value="this ad is spam">This ad is spam</option>
                          <option value="the price is wrong">The price is wrong</option>
                          <option value="wrong category">Wrong category</option>
                          <option value="seller ask for payment">Seller ask for payment.</option>
                        </select>
                        <input type="hidden" name="viewmore_id" value="'.$viewmore_id.'" />
                        <label><h6 class="pb-main-text-title-color"><b><i class="fa fa-info-circle"></i> Message</b></h6></label>
                        <textarea required name="message" placeholder="Your message" cols="30" rows="10"></textarea>
                        <button style="margin-bottom: 20px !important; margin-top: 20px !important;" class="wider-button pb-button-two-sides-all" type="submit"><i class="fa fa-exclamation-circle"></i> Report </button>
                      </div>';
                      }

                    ?>         
                    {{ Form::close() }}
                    <a class="close-reveal-modal">&#215;</a>
                  </div>
                </div>
                <div class="list-box-con-two-expand">
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
            </div>
          </div>
        </div>
      </div>
      <h3 class="text-left main-color-no-hover"> <i class="fa fa-square"></i> Related pet ads</h3>
          <hr>
      <div class="row">
        <div class="small-12 medium-12 large-8 columns">
          <?php
              $user_viewmore_id = Input::get('id');
              $sess_email = Session::get('pb_user_email');

              if ( isset($sess_email) ) {
                $user_id_main = User::where('email','=',$sess_email)->first();
                $user_id = $user_id_main->id;
                $user_id_name = $user_id_main->name;
                $user_id_phone = $user_id_main->phone;
                $user_id_email = $user_id_main->email;
              }

              $petad_paginate = Petad::paginate(3);

              $search = $ourad_data->location;
              $search_terms = Petad::where('location', 'LIKE', '%'.$search.'%')->orWhere('area', 'LIKE', '%'.$search.'%')->orWhere('pet_price', 'LIKE', '%'.$search.'%')
              ->orWhere('pet_ad_title', 'LIKE', '%'.$search.'%')
              ->get();

              $search_terms_count = Petad::where('location', 'LIKE', '%'.$search.'%')->orWhere('area', 'LIKE', '%'.$search.'%')
              ->orWhere('pet_price', 'LIKE', '%'.$search.'%')
              ->orWhere('pet_ad_title', 'LIKE', '%'.$search.'%')
              ->count();

              $petad_paginate = Petad::where('location', 'LIKE', '%'.$search.'%')->orWhere('area', 'LIKE', '%'.$search.'%')->orWhere('pet_price', 'LIKE', '%'.$search.'%')
              ->orWhere('pet_ad_title', 'LIKE', '%'.$search.'%')->paginate(3);

              $petad_alls = $search_terms;
              $petad_count = $search_terms_count;
              $naira = "₦";
            ?>

            <?php


              if ( $petad_count == 0 ) {
                
                echo '<div class="no-pet-ads">
                <h1 class="text-center"><i class="fa fa-tags orange-text"></i></h1>
                <h3 class="text-center">No related pet ads was not found.</h3>
              </div>';
              }else{

                if ( $petad_count > 0 ) {

                  $image_thumbnail = Petimage::where('petad_id','=',$user_viewmore_id)->first();
                  $image_thumbnail_count = Petimage::where('petad_id','=',$user_viewmore_id)->count();
                  $image_thumbnail = $image_thumbnail->image_thumbnail_path;

                  if ( $image_thumbnail_count == 0 ) {

                    $image_thumbnail = 'http://popibay.com/pb-assets/img/pet-ads-img-default/image-bg-pet-ads-4.png';
                  }

                  foreach ($petad_alls as $petad_all) {
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
            ?>

            <?php
              // echo $petad_paginate->links();
            ?>
        </div>
        <div class="small-12 medium-12 large-4 columns">
          <div class="pet-ad-other-info-box">
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
  document.title="Popibay || Ourads || Viewmore";
</script>
@stop