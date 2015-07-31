@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
<div class="row">
  <div class="small-12 medium-12 large-12 columns">
  	<div class="post-box-content">
  		<div class="row">
  			<div class="small-12 medium-12 large-8 columns">
  				<h3 class="text-left main-color-no-hover"><i class="fa fa-bookmark"></i> Saved ads</h3>
  				<hr>
          <?php
          $sess_email = Session::get('pb_user_email');
          $user_id = User::where('email','=',$sess_email)->first();
          $user_id = $user_id->id;
          $saved_ad_count = Savead::where('user_id','=',$user_id)->count();
          $saved_ad_lists = Savead::paginate(5);
          $pet_ad_lists = $saved_ad_lists;
          $naira = "₦";
          ?>

          <?php

            if ( $saved_ad_count == 0 ) {
                echo '<div class="no-pet-ads">
              <h4 class="text-center"><i class="fa fa-bookmark orange-text"></i></h4>
              <h3 class="text-center">You have not saved any pet ad to your dashboard.</h3>
              <h5 class="text-center">Click the (<b>Saved this ad</b>) button to save a pet ad.</h5>
              <center>
                <a href="/ourads">
                <button id="save-pet-ad" style="" class="no-margin small pb-button-two-sides-all-save-ads bolder-text" type="button"><i class="fa fa-star-o fa-lg"></i> Save this ad</button>
                </a>
              </center>
            </div>';
            }


            if ( $saved_ad_count > 0 ) {

              foreach ($pet_ad_lists as $pet_ad_list) {

                $petad_id = $pet_ad_list->petad_id;
                $image_thumbnail = Petimage::where('petad_id','=',$petad_id)->first();
                $image_thumbnail_count = Petimage::where('petad_id','=',$petad_id)->count();
                $image_thumbnail = $image_thumbnail->image_thumbnail_path;

                if ( $image_thumbnail_count == 0 ) {

                  $image_thumbnail = 'http://popibay.com/pb-assets/img/pet-ads-img-default/image-bg-pet-ads-4.png';
                }


                echo '<a href="/viewmore?id='.$pet_ad_list->petad_id.'">
                <div class="pet-ads-box">
                <div class="row">
                  <div class="small-12 medium-12 large-3 columns">
                    <div class="image-box">
                      <img src="'.$image_thumbnail.'">
                    </div>
                  </div>
                  <div class="small-12 medium-12 large-9 columns">
                    <div class="pet-ad-status '.$pet_ad_list->status. '" title="'.$pet_ad_list->status. '">
                      <h6 class="text-center white-text postion-circle"><i class="fa fa-circle fa-lg"></i></h6>
                    </div>
                    <ul class="no-bullet">
                      <li>
                        <h4 class="text-left main-color-no-hover">'.$pet_ad_list->pet_ad_title. '</h4>
                      </li>
                      <li>
                        <h5 class="text-left">'. $naira.number_format($pet_ad_list->pet_price).'</h5>
                      </li>
                      <li>
                        <h6 class="text-left">'.\Carbon\Carbon::createFromTimeStamp(strtotime($pet_ad_list->created_at))->diffForHumans().'</h6>
                      </li>
                    </ul>
                    <ul class="button-group">
                      <li><a href="savedad/delete?id='.$pet_ad_list->petad_id.'" class="button tiny pb-button-two-sides-left"><i class="fa fa-times"></i> Unsave</a></li>
                      <li><a href="/viewmore?id='.$pet_ad_list->petad_id.'" class="button tiny pb-button-two-sides-right"><i class="fa fa-plus-square"></i> View more</a></li>
                    </ul>
                  </div>
                </div>
                </div></a>';
              }

              echo $pet_ad_lists->links();
            }
          ?>
  			</div>
  			<div class="small-12 medium-12 large-4 columns">
  				<div class="dash-menu">
  					<h3 class="text-left main-color-no-hover"><i class="fa fa-tachometer"></i> Menu</h3>
  					<hr>
  					<ul class="no-bullet">
  						<li><a href="/dashboard"><h5 class="text-left grey-color"><i class="fa fa-tags orange-text"></i> My pet ads</h5></a></li>
  						<li><a href="/savedads"><h5 class="text-left main-color-no-hover active-dashboard-menu-link"><i class="fa fa-bookmark orange-text"></i> Saved ads</h5></a></li>
  						<li><a href="/settings"><h5 class="text-left grey-color"><i class="fa fa-cogs orange-text"></i> Settings</h5></a></li>
  						<li><a href="/logout"><h5 class="text-left grey-color"><i class="fa fa-sign-out orange-text"></i> Logout</h5></a></li>
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
  document.title="Popibay || Dashboard || Saved ads";
</script>
@stop