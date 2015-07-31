@extends('template.master_realidea')
@section('content')
<div class="dashboard-content go-up-a-bit-20">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="dc-notifier go-up-a-bit-20">
				<h3 class="text-center">
					App Notifier
				</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-12 large-2 columns">
    			<div class="pb-dashboard-menu">
                <ul class="no-bullet">
                    <li class="go-up-a-bit-20"><a href="../petstorefront">
                        <img class="store-front-icon" src="../pb-assets/img/main_logo/store_front_icon.png" alt="pet store front" title="store front">
                    </a></li>
                    <hr>
                    <li class="go-up-a-bit-20"><a href="../dashboard/mypets"><h5 class="text-left grey-color grow"> <i class="fa fa-paw"></i> My pets</h5></a></li>
                    <li class="go-up-a-bit-20"><a href="../dashboard/addpet"><h5 class="text-left main-color grow"> <i class="fa fa-plus"></i> Add pet</h5></a></li>
                    <li class="go-up-a-bit-20"><a href="../dashboard/market"><h5 class="text-left grey-color grow"> <i class="fa fa-shopping-cart"></i> Market</h5></a></li>
                    <li class="go-up-a-bit-20"><a href="../dashboard/reports"><h5 class="text-left grey-color grow"> <i class="fa fa-bar-chart"></i> Reports</h5></a></li>
                </ul>
            </div>
    		</div>
    		<div class="small-12 medium-12 large-7 columns">
    			<div class="content-box go-up-a-bit-10">
    				<div class="row">
    					<div class="small-12 medium-12 large-12 columns">
    						<h3 class="text-left grey-color-no-hover">
    							<i class="fa fa-paw"></i> Add pet
    						</h3>
    						<hr>
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
                            <dl class="tabs" data-tab>
                              <!-- <dd class="active"><a href="#panel1"><i class="fa fa-info-circle"></i> Pet information</a></dd>
                              <dd><a href="#panel2"><i class="fa fa-info-circle"></i> Market information</a></dd> -->
                          </dl>
                          {{Form::open(array('method'=>'post','route'=>'Addpet.pet','enctype'=>'multipart/form-data'))}}
                          <div class="tabs-content">
                              <div class="content active" id="panel1">
                              <div class="panel">
                              <label for="#pn">
                              <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is the name of your pet?">
                              <h5 class="grey-color-no-hover">
                              <i class="fa fa-info-circle"></i>
                              Pet name
                              </h5>
                              </span>
                              <input id="pn" style="margin-bottom: 10px !important;" type="text" placeholder="Pet Name e.g (Rocky)" name="pn" 
                              class="pb-text-box" required>
                              </label>
                              <label for="#pt">
                              <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is the type of your 
                              pet? Note: Popibay supports only dogs for now.">
                              <h5 class="grey-color-no-hover">
                              <i class="fa fa-info-circle"></i>
                              Pet type
                              </h5>
                              </span>
                              <select id="pt" style="margin-bottom: 10px !important;" name="pt" id="" required class="pb-text-box">
                                  <option default>Pet type</option>
                                  <option value="Dog">Dog</option>
                                  <option disabled>Cat</option>
                              </select>
                              </label>
                              <label for="#pb">
                              <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What kind of breed is your pet? e.g American bulldog">
                              <h5 class="grey-color-no-hover">
                              <i class="fa fa-info-circle"></i>
                              Pet breed
                              </h5>
                              </span>
                              <input id="pb" style="margin-bottom: 10px !important;" type="text"
                              placeholder="Pet breed e.g (American bulldog)" name="pb" class="pb-text-box" required>
                              </label>
                              <label for="#pa">
                              <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="How old is your pet?">
                              <h5 class="grey-color-no-hover">
                              <i class="fa fa-info-circle"></i>
                              Pet age
                              </h5>
                              </span>
                              <input id="pa" style="margin-bottom: 10px !important;" type="text"
                              placeholder="Pet age e.g (Young or old or 2years and 4weeks)" class="pb-text-box" name="pa" required>
                              </label>
                              <label for="#ps">
                              <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is your pet sex? e.g Male or Female">
                              <h5 class="grey-color-no-hover">
                              <i class="fa fa-info-circle"></i>
                              Pet sex
                              </h5>
                              </span>
                              <select required id="pt" style="margin-bottom: 10px !important;" name="ps" id="" class="pb-text-box">
                                  <option default>Pet sex</option>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                              </select>
                              </label>
                              <label for="#pc">
                              <span required data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is your pet present condition? Note: Pet Buyers will buy your pets if it is currently in a healthy condition.">
                              <h5 class="grey-color-no-hover">
                              <i class="fa fa-info-circle"></i>
                              Pet condition
                              </h5>
                              </span>
                              <select required id="pc" style="margin-bottom: 10px !important;" name="pc" id="pc" class="pb-text-box">
                                  <option default>Pet condition</option>
                                  <option value="sick">Sick</option>
                                  <option value="healthy">Healthy</option>
                              </select>
                              </label>
                              <label for="#pcd">
                              <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="Give a full description of your pet, why you are selling it, what does the pet do best.">
                              <h5 class="grey-color-no-hover">
                              <i class="fa fa-info-circle"></i>
                              Pet description 
                              </h5>
                              </span>
                              <textarea required name="pd" id="" cols="30" rows="10" placeholder="Pet description e.g Rocky is a handsome American Bulldog. He is 15 months. Our family circumstances have changed and we are no longer able to keep Rocky. We are looking for a permanent home for him. Rocky is great with children, has had obedience training (2 week doggie boot camp), loves to play, loves to be outside and loves his down time. He is such a fun dog. He is black and white and very muscular. His is not neutered, so he could potentially have beautiful puppies one day. And of course he is up to date with all his shots. Serious inquires only." class="pb-text-box"></textarea>
                              </label>
                              <label for="#pw">
                              <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is the pet weight? Note: Popibay needs this information when the seller is shiping to the buyer.">
                              <h5 class="grey-color-no-hover">
                              <i class="fa fa-info-circle"></i>
                              Pet weight
                              </h5>
                              </span>
                              <input required id="pw" style="margin-bottom: 10px !important;" type="text"
                              placeholder="Pet weight e.g (50kgm)" name="pw" class="pb-text-box">
                              </label>
                              <label for="#pco">
                              <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is color of your pet?">
                              <h5 class="grey-color-no-hover">
                              <i class="fa fa-info-circle"></i>
                              Pet color
                              </h5>
                              <input required id="pco" style="margin-bottom: 10px !important;" type="text"
                              placeholder="Pet color e.g (White or Black brown spots)" class="pb-text-box" name="pco">
                              </label>

                              <h4 class="text-left main-color-no-hover">Pet Images Specification</h4>
                              <hr>
                              <div class="panel">
                                <h5><i class="fa fa-check-circle"></i> Uploaded images should look like this.</h5>
                                <img src="../pb-assets/img/pet-image-spec/pet-image-specs.png" alt="Good image">
                                <h5><i class="fa fa-close"></i> Not like this</h5>
                                <img src="../pb-assets/img/pet-image-spec/pet-image-specs-bad.png" alt="Bad Image">
                              </div>
                              <!-- uploader -->
                              <!-- use manual uploader until ajax upload is fixed... -->
                              <input required type="file" name="files[]" multiple="multiple" title='Click to add Files'>
                              <!-- <div id="drag-and-drop-zone" class="uploader">
                                <div>Drag &amp; Drop Images Here</div>
                                <div class="or">-or-</div>
                                <div class="browser">
                                  <label>
                                    <span>Click to open the file Browser</span>
                                    <input type="file" name="files[]" multiple="multiple" title='Click to add Files'>
                                  </label>
                                </div>
                              </div>
                              <div class="panel callout radius">
                                <h4 class="main-color-no-hover">Uploading Progress</h4>
                                <hr>
                                <div id="file-upload-response">
                                </div>
                              </div>
 -->                              <!-- end uploader -->
                              <label for="#pc">
                              <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is your pet present condition? Note: Pet Buyers will buy your pets if it is currently in a healthy condition.">
                              <h5 class="grey-color-no-hover">
                              <i class="fa fa-info-circle"></i>
                              Post Options
                              </h5>
                              </span>
                              <select required id="pc" style="margin-bottom: 10px !important;" name="pps" id="" class="pb-text-box">
                                  <option default>Post Options</option>
                                  <option value="classified_ad">Post as a classified ad</option>
                                  <option value="post_to_shop" disabled>Post to shop. (Coming Soon)</option>
                              </select>
                              </label>

                              <label for="#pp"> 
                                  <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is the type of your 
                                  pet? Note: Popibay supports only dogs for now.">
                                  <h5 class="grey-color-no-hover">
                                    <i class="fa fa-info-circle"></i>
                                    Pet price
                                  </h5>
                                </span>
                                <ul class="button-group">
                                  <li><select style="margin-bottom: 10px !important;" id="pp" class="pb-text-box" >
                                    <option disabled>Currency</option>
                                    <option value="Dollars">$</option>
                                  </select></li>
                                  <li><input required type="text" name="pp" placeholder="Price" class="pb-text-box"></li>
                                </ul>
                              </label>

                              <button class="wider-button pb-button-two-sides-all">Add pet</button>
                              {{Form::close()}}
                              </div>
                            </div>
                            <div class="content" id="panel2">
                              <div class="panel">
                                <label for="#pp"> 
                                  <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is the type of your 
                                  pet? Note: Popibay supports only dogs for now.">
                                  <h5 class="grey-color-no-hover">
                                    <i class="fa fa-info-circle"></i>
                                    Pet price
                                  </h5>
                                </span>
                                <ul class="button-group">
                                  <li><select style="margin-bottom: 10px !important;" name="" id="pp" class="pb-text-box">
                                    <option value="#">Currency</option>
                                    <option value="#">Dollars</option>
                                    <option value="#">Pounds</option>
                                    <option value="#">Euro</option>
                                  </select></li>
                                  <li><input type="text" class="pb-text-box"></li>
                                </ul>
                              </label>
                              <label for="#pd">
                                <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is the name of your pet?">
                                  <h5 class="grey-color-no-hover">
                                    <i class="fa fa-info-circle"></i>
                                    Pet delivery method (Disabled Feature)
                                  </h5>
                                </span>
                                <select disabled name="" style="margin-bottom: 10px !important;" id="pd">
                                  <option value="#">Currency one</option>
                                  <option value="#">Currency two</option>
                                  <option value="#">Currency three</option>
                                </select>
                              </label>
                              <label for="#pd">
                                <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is the name of your pet?">
                                  <h5 class="grey-color-no-hover">
                                    <i class="fa fa-info-circle"></i>
                                    Pet tax fee (Disabled Feature)
                                  </h5>
                                </span>
                                <input disabled style="margin-bottom: 10px !important;" type="text">
                              </label>
                              <label for="#pd">
                                <span data-tooltip aria-haspopup="true" class="has-tip [tip-bottom]" title="What is the name of your pet?">
                                  <h5 class="grey-color-no-hover">
                                    <i class="fa fa-info-circle"></i>
                                    Pet shipping fee (Disabled Feature)
                                  </h5>
                                </span>
                                <input disabled style="margin-bottom: 10px !important;" type="text">
                              </label>
                              <button class="wider-button">Add pet</button>
                            </div>
                          </div>
                        </div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="small-12 medium-12 large-3 columns">
    			<div class="ad-box">
    				<h3 class="text-center go-down-a-bit-200 bolder-text white-text">Place your ads here.</h3>
    			</div>
    		</div>
    	</div>
    </div>
@stop