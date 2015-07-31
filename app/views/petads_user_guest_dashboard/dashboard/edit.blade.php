@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
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

			<?php
			$user_viewmore_id = Input::get('id');
			$sess_email = Session::get('pb_user_email');
			$user_id_main = User::where('email','=',$sess_email)->first();
			$user_id = $user_id_main->id;
			$user_id_name = $user_id_main->name;
			$user_id_phone = $user_id_main->phone;
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

			<div class="post-box-content">
				<div class="row">
					<style type="text/css">
						hr {
							border: solid #cccc33;
							border-width: 1px 0 0;
							clear: both;
							margin: 1.25rem 0 1.1875rem;
							height: 0;
						}
					</style>
					<div class="small-12 medium-12 large-8 columns">
						<h3 class="text-left main-color-no-hover"><i class="fa fa-pencil"></i> Edit pet ad</h3>
						<hr>
						<div class="petad-images-box go-up-a-bit-20">
							<h3 class="text-center main-dark-color-no-hover"><i class="fa fa-picture-o"></i> Pet ad images</h3>
							<hr>
							<center>
								<a title="Add new pet image" href="#" data-reveal-id="report-petad-form"><button class="button small pet-ad-member-header-button-two bolder-text"> <i class="fa fa-plus fa-2x"></i> </button></a>

								<div id="report-petad-form" class="reveal-modal tiny" data-reveal>
									<h4 class="text-center main-color-no-hover"><i class="fa fa-upload"></i> Add another pet image </h4>
									<hr>
									<div class="image-upload-box go-up-a-bit-20">
										<div class="client-upload-responses">
										</div>
										{{ Form::open(array('route' => 'Fileupload.image_edit','files'=> true,'class'=>'dropzone')) }}
										<div class="fallback">
											<input name="file" type="file" multiple/>
										</div>
										<input name="petad-id" type="hidden" value="{{$user_viewmore_id}}" />
										{{ Form::close() }}
									</div>
									<a class="close-reveal-modal">&#215;</a>
								</div> 
							</center>
							<?php

								foreach ($petimages as $petimage) {
									echo '<div class="petad-img-box">
									<div class="row">
										<div class="small-12 medium-12 large-3 columns">
											<div class="image-box">
												<img src="'.$petimage->image_thumbnail_path.'">
											</div>
										</div>
										<div class="small-12 medium-12 large-9 columns">
											<ul class="no-bullet go-up-a-bit-50">
												<li>
													<h5 class="text-left main-color-no-hover"> '.$petimage->original_name.'</h5>
												</li>
											</ul>
											<ul class="button-group">
												<li><a href="http://popibay.com/petads/edit/delete/image?id='.$petimage->id.'&petad_id='.$user_viewmore_id.'" class="button tiny pb-button-two-sides-all"><i class="fa fa-times-circle"></i> Delete</a></li>
											</ul>
										</div>
									</div>
								</div>';
								}
							?>
						</div>
						<?php
							$id = Input::get('id'); 

							$pet_ad = Petad::where('id','=', $id)->first();
						?>
						<div class="edit-petad-box">
							{{ Form::open(array('route' => 'Petad.edit')) }}
							<h5 class="text-left main-dark-color-no-hover"><i class="fa fa-info-circle"></i> Update this petad information.</h5>
							<hr>
							<!-- <label><h6 class="main-color-no-hover"><b><i class="fa fa-info-circle"></i> Pet category</b></h6></label>
							<input readonly type="text" placeholder="Pet category" class="" style="margin-bottom:20px !important;">
							<label><h6 class="main-color-no-hover"><b><i class="fa fa-info-circle"></i> Location </b></h6></label>
							<input readonly type="text" placeholder="Location" class="" style="margin-bottom:20px !important;">
							<label><h6 class="main-color-no-hover"><b><i class="fa fa-info-circle"></i> Area</b></h6></label>
							<input readonly type="text" placeholder="Area" class="" style="margin-bottom:20px !important;">
							<label><h6 class="main-color-no-hover"><b><i class="fa fa-info-circle"></i> Type of pet</b></h6></label> -->
							<select required name="pet-type">
								<option value="" default>Type of pet</option>
								<option value="dog">Dog</option>
								<option value="cat">Cat</option>
							</select>
							<input type="hidden" name="viewmore-id" value="{{$id}}">
							<label><h6 class="main-color-no-hover"><b><i class="fa fa-info-circle"></i> Pet ad title</b></h6></label>
							<input required name="pet-ad-title" type="text" placeholder="Pet ad title" class="" style="margin-bottom:20px !important;">
							<label><h6 class="main-color-no-hover"><b><i class="fa fa-info-circle"></i> Pet ad description</b></h6></label>
							<textarea required name="pet-description" id="" cols="20" rows="10" placeholder="Pet ad description"></textarea>
							<label><h6 class="main-color-no-hover"><b><i class="fa fa-info-circle"></i> Pet price</b></h6></label>
							<input required name="pet-price" type="text" placeholder="Pet price" class="" style="margin-bottom:20px !important;">
							<button style="margin-bottom: 50px !important;" class="wider-button pb-button-two-sides-all" type="submit"><i class="fa fa-info-circle white-text"></i> Update</button>
							{{ Form::close() }}
						</div>
					</div>
					<div class="small-12 medium-12 large-4 columns">
						<div class="dash-menu">
							<h3 class="text-left main-color-no-hover"><i class="fa fa-tachometer"></i> Menu</h3>
							<hr>
							<ul class="no-bullet">
								<li><a href="/dashboard"><h5 class="text-left grey-color"><i class="fa fa-tags orange-text"></i> My pet ads</h5></a></li>
								<li><a href="petads/edit/?id="><h6 class="text-left main-color-no-hover active-dashboard-menu-link"><i class="fa fa-pencil orange-text"></i> Edit pet ad</h6></a></li>
								<li><a href="/savedads"><h5 class="text-left grey-color"><i class="fa fa-bookmark orange-text"></i> Saved ads</h5></a></li>
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
  document.title="Popibay || Dashboard || Edit pets ad";
</script>
@stop