@extends('template.master_realidea')
@section('content')
<div class="dashboard-content go-up-a-bit-20">
	<div class="row">
    		<div class="small-12 medium-12 large-12 columns">
    			<div class="content-box go-up-a-bit-10">
    				<h3 class="text-center">Upload your account images</h3>
    				<hr>
    				<div class="row">
    					<div class="small-12 medium-12 large-3 columns">
    					<div class="upload-menu-links">
    						<ul class="no-bullet">
    							<li><a href="../dashboard/upload" class="grey-color"><h5 class="text-left menu-link-one-default"><i class="fa fa-camera"></i> Profile image</a></h5></li>
    							<li><a href="../dashboard/upload@businesslogo" class="grey-color"><h5 class="text-left menu-link-one"><i class="fa fa-picture-o"></i> Business Logo</a></h5></li>
    							<li><a href="../dashboard/upload@coverphoto" class="grey-color"><h5 class="text-left menu-link-three-default"><i class="fa fa-picture-o"></i> Cover photo</a></h5></li>
    						</ul>
    					</div>
    					</div>
    					<div class="small-12 medium-12 large-9
    					 columns">
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
    					 <div class="upload-preview-with-button-business-logo">
    					 	<div class="row">
    					 		<div class="small-12 medium-12 large-9 columns">
    					 			<div class="image-preview-business-logo">
    					 				<img src="<?php large_businesslogo_thumbnail('http') ?>" alt="default business logo image">
    					 			</div>
    					 		</div>
    					 		<div class="small-12 medium-12 large-3 columns">
                                    {{ Form::open(array('route' => 'Uploading.businesslogo','files'=> true)) }}
    					 			<input type="file" name="image">
    					 			<button class="pb-button-two-sides-all wider-button go-down-a-bit-50"><i class="fa fa-camera fa-lg"></i></button>
                                    {{ Form::close() }}
    					 		</div>
    					 	</div>
    					 </div>
    					 <hr>
    					 <div class="row go-up-a-bit-10">
    					 	<div class="small-12 medium-12 large-4 columns">
    					 		<img src="../pb-assets/img/main_logo/business_logo_size.png" alt="">
    					 	</div>
    					 	<div class="small-12 medium-12 large-8 columns">
    					 		<h5 class="text-justify grey-color-no-hover">
    					 			The image must 7kb (300px by 135px) be the image extensions 
    					 			can be .jpg, .png, .jpeg.
    					 		</h5>
    					 	</div>
    					 </div>
    					 <div class="row go-down-a-bit-100">
    					 	<div class="small-12 medium-12 large-12 large-centered columns">
    					 	<div class="skeleton-center">
    					 		<ul class="button-group">
    					 			<li><a href="../dashboard/upload" class="button pb-button-two-sides-all">Back</a></li>
    					 			<li><a href="../dashboard/upload@coverphoto" class="button pb-button-two-sides-all">Next</a></li>
    					 		</ul>
    					 	</div>
    					 	</div>
    					 </div>
    					 </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
@stop
