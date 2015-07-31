@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
<div class="row">
  <div class="small-12 medium-12 large-12 columns">
    <div class="post-box-content">
    <?php
        $welcome_back = Session::get('welcome_back');
        $message = Session::get('message');
        if ( isset($welcome_back) ) {
          echo '
          <div data-alert class="alert-box success radius">
            <h6 class="text-center white-color">'.$welcome_back.'</h6>
            <a href="#" class="close">&times;</a>
          </div>
          ';
        }

        if ( isset($message) ) {
          echo '
          <div data-alert class="alert-box alert radius">
            <h6 class="text-center white-color">'.$message.'</h6>
            <a href="#" class="close">&times;</a>
          </div>       
          ';
        }
      ?>
      <div class="row">
        <div class="small-12 medium-12 large-6 columns">
          <div class="image-instructions-one">
          </div>
          <div class="image-instructions-two">
          </div>
          <div class="image-instructions-three">
          </div>
          <div class="image-instructions-four">
          </div>
        </div>
        <div class="small-12 medium-12 large-6 columns">
          <div class="vertical-line">
          <h2 class="text-left orange-text"><i class="fa fa-money"></i> Sell your pet</h2>
          <hr>
          <?php
            $categories = Input::get('cat');
            $location = Input::get('location');
            $area = Input::get('lga');

            $area_lowercase = strtolower(str_replace("_", " ", $area));
          ?>
          <div class="selected-options-display go-up-a-bit-20">
            <ul class="no-bullet">
              <li><h6 class="text-left"><i class="fa fa-check-square-o main-color-no-hover"></i> Category: <b class="text-transform-capitalise">{{$categories}}</b></h6></li>
              <li><h6 class="text-left"><i class="fa fa-check-square-o main-color-no-hover"></i> Location: <b class="text-transform-capitalise">{{$location}}</b></h6></li>
              <li><h6 class="text-left"><i class="fa fa-check-square-o main-color-no-hover"></i> Area: <b class="text-transform-capitalise">{{$area_lowercase}}</b></h6></li>
              <li><button href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="button small upload-image-button wider-button">Change</button><br>
                <ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true" tabindex="-1">
                  <li><a href="/petads">Pet category</a></li>
                  <li><a href="/petads/location?cat={{$categories}}">Location</a></li>
                  <li><a href="/petads/lga?cat={{$categories}}&location={{$location}}">Area</a></li>
                </ul>
                </li>
            </ul>
          </div>
          <h4 class="text-left orange-text"><i class="fa fa-image"></i> Add photos of your pet</h4>
          <hr>
          <ul class="no-bullet">
            <li>
              <h6 class="text-left main-color-no-hover">IMAGE REQUIREMENTS
            </li>
            <li>
              <h6 class="text-left grey-text"><i class="fa fa-asterisk"></i> Image type must be ( Jpeg,Jpg,Png ).</h6>
            </li>
            <li>
              <h6 class="text-left grey-text"><i class="fa fa-asterisk"></i> Image size must be 3mb maximum.</h6>
            </li>
            <li>
              <h6 class="text-left grey-text"><i class="fa fa-asterisk"></i> Total maximum image upload per post is 5 images.</h6>
            </li>
          </ul>
          <div class="image-upload-box go-up-a-bit-20">
            <div class="client-upload-responses">
            </div>
            {{ Form::open(array('route' => 'Fileupload.image','files'=> true,'class'=>'dropzone')) }}
              <div class="fallback">
                <input name="file" type="file" multiple/>
              </div>
            {{ Form::close() }}
          </div>
          {{ Form::open(array('route' => 'Post.petad','files'=> false,'id' => 'main-form')) }}
          <div class="hidden-inputs">
            <input type="hidden" value="{{ $categories }}" name="categories" />
            <input type="hidden" value="{{ $location }}" name="location" />
            <input type="hidden" value="{{ $area_lowercase }}" name="area" />
          </div>
          <h4 class="text-left orange-text"><i class="fa fa-info-circle"></i> Put your pet information</h4>
          <hr>
          <h6 class="text-left">All fields marked with * are important</h6>
          <!-- <select required name="pet-type" class="go-up-a-bit-50">
            <option default value="">* Type of pet</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
          </select> -->
          <input required name="pet-ad-title" type="text" placeholder="* Ad Title" class="pb-text-box">
          <textarea required name="pet-description" rows="8" class="go-down-a-bit-20 go-up-a-bit-20" placeholder="* Description"></textarea>
          <ul class="large-block-grid-2">
            <li><input required name="pet-price" type="text" placeholder="* Price (₦)" class="pb-text-box"></li>
            <!-- <li><label><input name="pet-is-negotiable" value="0" type="checkbox" class="negotiable"> Negotiable</label></li> -->
            <li>
              <select required name="negotiation" class="go-up-a-bit-50">
              <option default value="">* Negotiation</option>
                <option value="negotiable">Negotiable</option>
                <option value="not-negotiable">Not Negotiable</option>
              </select>
            </li>
          </ul>
          <select name="user-a-pet-breeder" class="go-up-a-bit-50">
          <option default value=""> Are you a pet breeder?</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
          <h4 class="text-left orange-text"><i class="fa fa-info-circle"></i> My information</h4>
          <hr>
          <select required name="account" class="go-up-a-bit-50">
            <option default value="">* Account</option>
            <option value="personal">Personal</option>
            <option value="business">Business</option>
          </select>
          <input required name="name" style="margin-bottom:20px !important;" type="text" placeholder="* Your name" class="pb-text-box go-up-a-bit-20">
          <input required name="phone-number" style="margin-bottom:20px !important;" type="text" placeholder="* Your phone number" class="pb-text-box go-up-a-bit-20">
          <input name="phone-number-two" style="margin-bottom:20px !important;" type="text" placeholder=" Your phone number" class="pb-text-box go-up-a-bit-20">
          <!-- increment phone number -->
          <!-- <center><button id="add" title="Add more than one phone number" type="button" class="button small upload-image-button"><i class="fa fa-plus fa-lg"></i></button></center>
          <div class="added-phone-numbers">
          </div> -->
          <!-- /end increment phone number -->
          <select required name="phone-privacy" class="go-up-a-bit-50">
            <option default value="">* Make my phone number public</option>
            <option value="show-phone-number">Show phone number</option>
            <option value="hide-phone-number">Hide phone number</option>
          </select>

          <?php

            if ( Auth::check() == true ) {
                
              }else{
                echo '<input required name="email" style="margin-bottom:20px !important;" type="email" placeholder="* Email address" class="pb-text-box go-up-a-bit-20">
                <h6 class="text-left grey-text"><i class="fa fa-asterisk"></i> Password must contain uppercase, lowercase and numbers characters and a minimum lenght of 8.</h6>
                <input id="password" required name="password" style="margin-bottom:20px !important;" type="password" placeholder="* Password" class="pb-text-box go-up-a-bit-20">
                <input id="confirm_password" required name="c-password" style="margin-bottom:20px !important;" type="password" placeholder="* Confirm password" class="pb-text-box go-up-a-bit-20">';
              }
          ?>
          <!-- <input required name="email" style="margin-bottom:20px !important;" type="email" placeholder="* Email address" class="pb-text-box go-up-a-bit-20">
          <h6 class="text-left grey-text"><i class="fa fa-asterisk"></i> Password must contain uppercase, lowercase and numbers characters and a minimum lenght of 8.</h6>
          <input id="password" required name="password" style="margin-bottom:20px !important;" type="password" placeholder="* Password" class="pb-text-box go-up-a-bit-20">
          <input id="confirm_password" required name="c-password" style="margin-bottom:20px !important;" type="password" placeholder="* Confirm password" class="pb-text-box go-up-a-bit-20"> -->
          <button style="margin-bottom: 50px !important;" class="small button pb-button-two-sides-all-orange" type="submit">Post a pet ad</button>
          {{ Form::close() }}
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
  /* The document title */
  document.title="Popibay || Sell your pet.";
</script>
@stop