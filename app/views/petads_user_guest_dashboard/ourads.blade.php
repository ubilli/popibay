@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
<div class="row">
  <div class="small-12 medium-12 large-12 columns">
  	<div class="post-box-content">
  		<div class="row">
  			<div class="small-12 medium-12 large-12 columns">
  				<div class="search-ourads-options">
              <div class="row collapse">
              {{ Form::open(array('route' => 'Ourads.search')) }}
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
                {{ Form::close() }}
              </div>
  					<h4 class="text-center main-dark-color-no-hover">My ads + Their ads = Our ads | #WELOVEPETS | @mypopibay</h4>
  				</div>
  			</div>
  		</div>
  		<div class="row">
  			<div class="small-12 medium-12 large-8 columns">
  				<div class="search-ourads-ads-list">
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

              $petad_paginates = Petad::paginate(15);
              $petad_alls = $petad_paginates;
              //$petad_alls = Petad::all();
              $petad_count = Petad::all()->count();
              $naira = "₦";
            ?>

            <?php

              // $petad_count = 0;

              if ( $petad_count == 0 ) {
                
                echo '<div class="no-pet-ads">
                <h4 class="text-center"><i class="fa fa-tags fa-2x orange-text"></i></h4>
                <hr>
                <h3 class="text-center">Our ads has not been populated.</h3>
              </div>';
              }else{

                if ( $petad_count > 0 ) {

                  /*$image_thumbnail = Petimage::all();
                  $image_thumbnail_count = Petimage::all()->count();
                  $image_thumbnail = $image_thumbnail->image_thumbnail_path;

                  if ( $image_thumbnail_count == 0 ) {

                    $image_thumbnail = 'http://localhost:8000/pb-assets/img/pet-ads-img-default/image-bg-pet-ads-4.png';
                  }*/

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
            ?>

            <?php
              echo $petad_paginates->links();
            ?>
  				</div>
  			</div>
  			<div class="small-12 medium-12 large-4 columns">
  				<div class="our-ads-category-box">
            <div class="row">
              <div class="large-12 columns">
              <div class="row collapse">
                  {{ Form::open(array('route' => 'Ourads.search_price')) }}
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
                  {{ Form::close() }}
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
</script>
@stop