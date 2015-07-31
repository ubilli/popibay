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
    							My account
    						</h3>
    						<hr>
                <h6 class="text-left">
                  Profile information
                </h6>
                <h4 class="text-left">Name</h4>
                <h4 class="text-left">Email</h4>
                <h4 class="text-left">Password</h4>
                <input type="text" placeholder="Phone number" style="margin-bottom: 10px !important;">
                <select name="Country" id="">
                  <option value="#">Country</option>
                  <option value="#">Countries</option>
                  <option value="#">Countries</option>
                  <option value="#">Countries</option>
                  <option value="#">Countries</option>
                  <option value="#">Countries</option>
                  <option value="#">Countries</option>
                  <option value="#">Countries</option>
                  <option value="#">Countries</option>
                  <option value="#">Countries</option>
                </select>
                <select name="Sex" id="">
                  <option value="#">Sex</option>
                  <option value="#">Male</option>
                  <option value="#">Female</option>
                </select>
                <h6 class="text-left">
                  Business information
                </h6>
                <input type="text" placeholder="Business Name" style="margin-bottom: 10px !important;">
                <input type="text" placeholder="Business Email" style="margin-bottom: 10px !important;">
                <input type="text" placeholder="Business Phone Number" style="margin-bottom: 10px !important;">
                <h6 class="text-left">
                  Profile images
                </h6>
                <h5 class="text-left">Profile picture</h5>
                <div class="profile-pic-center">
                </div>
                <h5 class="text-left">Business logo</h5>
                <div class="business-logo-pic">
                </div>
                <h5 class="text-left">Cover banner</h5>
                <div class="storefront-cover-banner go-up-a-bit-20">
                </div>
                <button class="wider-button">Update profile</button>
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
    	document.title="My Account";
    </script>
@stop
