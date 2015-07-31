@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
<div class="row">
  <div class="small-12 medium-12 large-12 columns">
  <div class="category-box-location">
    <h3 class="text-center main-color-no-hover">Where is your pet ad located in Naija?</h3>
    <hr>
    <?php

      $categories = Input::get('cat');

      #BUG NOTICE HERE: $categories has quotes and i have not removed the quotes...
      switch ($categories) {
        case "dog":
          echo '
          <div class="pet-cat-picked-notifier">
            <i class="fa fa-heart"></i> Pet category <i class="fa fa-hand-o-right"></i> '. "Dog" .'
          </div>
          ';
          break;

          case "cat":
          echo '
          <div class="pet-cat-picked-notifier">
            <i class="fa fa-heart"></i> Pet category <i class="fa fa-hand-o-right"></i> '. "Cat" .'
          </div>
          ';
          break;

          case "rabbit":
          echo '
          <div class="pet-cat-picked-notifier">
            <i class="fa fa-heart"></i> Pet category <i class="fa fa-hand-o-right"></i> '. "Rabbit" .'
          </div>
          ';
          break;

          case "fish":
          echo '
          <div class="pet-cat-picked-notifier">
            <i class="fa fa-heart"></i> Pet category <i class="fa fa-hand-o-right"></i> '. "Fish" .'
          </div>
          ';
          break;

          case "other":
          echo '
          <div class="pet-cat-picked-notifier">
            <i class="fa fa-heart"></i> Pet category <i class="fa fa-hand-o-right"></i> '. "Other" .'
          </div>
          ';
          break;
        
        default :
          echo '
          <div class="pet-cat-not-picked-notifier">
            <i class="fa fa-times-circle-o"></i> Please go back and choose a pet category. <a href="/petads" class="white-text"><i class="fa fa-long-arrow-left"></i> Back</a>
          </div>
          <style type="text/css">
          	.states-in-nigeria-list {
          		display: none;
          	}
          </style>
          ';
      }
    ?>

    <div class="states-in-nigeria-list">
    <ul class="no-bullet go-down-a-bit-30">
      <li><a href="lga?cat={{ $categories }}&location=abia"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Abia
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=adamawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Adamawa
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=akwaibom"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Akwa Ibom <span class="label">Popular</span>
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=anambra"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Anambra
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=bauchi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Bauchi
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=bayelsa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Bayelsa
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=benue"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Benue
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=borno"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Borno
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=crossriver"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Cross River
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=delta"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Delta
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=ebonyi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Ebonyi
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=edo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Edo
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=ekiti"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Ekiti
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=enugu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Enugu
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=abuja"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Abuja <span class="label">Popular</span>
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=gombe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Gombe
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=imo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Imo
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=jigawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Jigawa
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=kaduna"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Kaduna
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=kano"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Kano
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=kastina"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Katsina
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=kebbi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Kebbi
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=kogi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Kogi
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=kwara"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Kwara
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=lagos"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Lagos <span class="label">Popular</span>
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=nasarawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Nasarawa
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=niger"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Niger
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=ogun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Ogun
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=ondo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Ondo
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=osun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Osun
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=oyo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Oyo
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=pleateau"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Plateau
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=rivers"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Rivers <span class="label">Popular</span>
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=sokoto"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Sokoto
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=taraba"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Taraba
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=yobe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Yobe
      </h5></a></li>
      <li><a href="lga?cat={{ $categories }}&location=zamfara"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
        Zamfara
      </h5></a></li>
    </ul>
    </div>

  </div>
  </div>
</div>
</div>
<script>
  /* The document title */
  document.title="Popibay || Where is your pet ad located in Naija?";
</script>
@stop