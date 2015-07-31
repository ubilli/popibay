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
                    <li class="go-up-a-bit-20"><a href="../dashboard/mypets"><h5 class="text-left grey-color grow"> <i class="fa fa-paw"></i> My pets</h5></a></li>
                    <li class="go-up-a-bit-20"><a href="../dashboard/addpet"><h5 class="text-left grey-color grow"> <i class="fa fa-plus"></i> Add pet</h5></a></li>
                    <li class="go-up-a-bit-20"><a href="../dashboard/market"><h5 class="text-left grey-color grow"> <i class="fa fa-shopping-cart"></i> Market</h5></a></li>
                    <li class="go-up-a-bit-20"><a href="../dashboard/reports"><h5 class="text-left grey-color grow"> <i class="fa fa-bar-chart"></i> Reports</h5></a></li>
                </ul>
            </div>
    		</div>
    		<div class="small-12 medium-12 large-7 columns">
    			<div class="content-box go-up-a-bit-10">
    				<div class="row">
    					<div class="small-12 medium-12 large-12 columns">
    						<h3 class="text-left">
    							Add pet
    						</h3>
    						<hr>
                            <dl class="tabs" data-tab>
                              <dd class="active"><a href="#panel1">Pet information</a></dd>
                              <dd><a href="#panel2">Market information</a></dd>
                          </dl>
                          <div class="tabs-content">
                              <div class="content active" id="panel1">
                              <div class="panel">
                              <label for="#pn">
                              Pet name
                              <input id="pn" style="margin-bottom: 10px !important;" type="text" placeholder="Pet Name">
                              </label>
                              <label for="#pt">
                              Pet type
                              <select id="pt" style="margin-bottom: 10px !important;" name="" id="">
                                  <option value="">Pet Type</option>
                                  <option value="">pet type options</option>
                                  <option value="">pet type options</option>
                              </select>
                              </label>
                              <label for="#pb">
                              Pet breed
                              <input id="pb" style="margin-bottom: 10px !important;" type="text"
                              placeholder="Pet Breed">
                              </label>
                              <label for="#pa">
                              Pet age
                              <input id="pa" style="margin-bottom: 10px !important;" type="text"
                              placeholder="Pet Age">
                              </label>
                              <label for="#ps">
                              Pet sex
                              <select id="pt" style="margin-bottom: 10px !important;" name="" id="">
                                  <option value="">Pet Sex</option>
                                  <option value="">pet type options</option>
                                  <option value="">pet type options</option>
                              </select>
                              </label>
                              <label for="#pc">
                              Pet condition
                              <select id="pc" style="margin-bottom: 10px !important;" name="" id="">
                                  <option value="">Pet condition</option>
                                  <option value="">pet type options</option>
                                  <option value="">pet type options</option>
                              </select>
                              </label>
                              <label for="#pcd">
                              Pet condition description
                              <textarea name="" id="" cols="30" rows="10" placeholder="pet description"></textarea>
                              </label>
                              <label for="#pw">
                              Pet weight
                              <input id="pw" style="margin-bottom: 10px !important;" type="text"
                              placeholder="Pet Weight">
                              </label>
                              <label for="#pco">
                              Pet color
                              <input id="pco" style="margin-bottom: 10px !important;" type="color"
                              placeholder="Pet Color">
                              </label>
                              <h5 class="text-justify">
                                  Add jquery file uploader image. (also add information about the images and the specification they should be in.)
                              </h5>
                              </div>
                            </div>
                            <div class="content" id="panel2">
                            <div class="panel">
                                <label for="#pp"> Pet price
                                    <ul class="button-group">
                                      <li><select style="margin-bottom: 10px !important;" name="" id="pp">
                                          <option value="#">Currency one</option>
                                          <option value="#">Currency two</option>
                                          <option value="#">Currency three</option>
                                      </select></li>
                                      <li><input type="text"></li>
                                  </ul>
                              </label>
                              <label for="#pd"> Pet delivery method
                                  <select name="" style="margin-bottom: 10px !important;" id="pd">
                                      <option value="#">Currency one</option>
                                      <option value="#">Currency two</option>
                                      <option value="#">Currency three</option>
                                  </select>
                              </label>
                              <label for="#pd"> Pet tax fee
                                  <input style="margin-bottom: 10px !important;" type="text">
                              </label>
                              <label for="#pd"> Pet shipping fee
                                  <input style="margin-bottom: 10px !important;" type="text">
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
    				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, inventore sunt omnis a facilis tempore rerum necessitatibus reiciendis, praesentium ad voluptas molestiae commodi suscipit. Laudantium recusandae repudiandae quod veritatis repellendus.
    			</div>
    		</div>
    	</div>
    </div>
    <script>
    	document.title="Settings";
    </script>
@stop
