@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="post-box-content">
				<div class="row">
					<div class="small-12 medium-12 large-8 columns">
						<h3 class="text-left main-color-no-hover"><i class="fa fa fa-times-circle"></i> Delete pet ad</h3>
						<hr>
						<?php
							$id = Input::get('id'); 
							$pet_ad = Petad::where('id','=', $id)->first();
						?>
						<div class="delete-ad-box">
							<h4 class="text-center main-dark-color-no-hover">Do you want to delete this pet ad?</h4>
							<hr>
							<div class="row">
								<div class="small-12 medium-12 large-3 offset-6 columns">
									<a href="/petads/delete/yes/?id={{$id}}" class="button tiny pb-button-two-sides-all wider-button"><i class="fa fa-check"></i> Yes</a>
								</div>
								<div class="small-12 medium-12 large-3 columns">
									<a href="/dashboard" class="button tiny pb-button-two-sides-all wider-button"><i class="fa fa-times-circle"></i> No</a>
								</div>
							</div>
						</div>

					</div>
					<div class="small-12 medium-12 large-4 columns">
						<div class="dash-menu">
							<h3 class="text-left main-color-no-hover"><i class="fa fa-tachometer"></i> Menu</h3>
							<hr>
							<ul class="no-bullet">
								<li><a href="/dashboard"><h5 class="text-left grey-color"><i class="fa fa-tags orange-text"></i> My pet ads</h5></a></li>
								<li><a href="petads/edit/?id="><h6 class="text-left main-color-no-hover active-dashboard-menu-link"><i class="fa fa-level-down orange-text"></i> Delete pet ad</h6></a></li>
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
  document.title="Popibay || Dashboard || Delete pets ad";
</script>
@stop