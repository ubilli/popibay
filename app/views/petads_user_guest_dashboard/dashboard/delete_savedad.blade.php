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
			<div class="post-box-content">
				<div class="row">
					<div class="small-12 medium-12 large-8 columns">
						<h3 class="text-left main-color-no-hover"><i class="fa fa fa-bookmark"></i> Unsave pet ad</h3>
						<hr>
						<?php
							$id = Input::get('id'); 
							$pet_ad = Petad::where('id','=', $id)->first();
						?>
						<div class="delete-ad-box">
							<h4 class="text-center main-dark-color-no-hover">Do you want to unsave this pet ad?</h4>
							<hr>
							<div class="row">
								<div class="small-12 medium-12 large-3 offset-6 columns">
									<a href="/viewmore/unsave/yes/?id={{$id}}" class="button tiny pb-button-two-sides-all wider-button"><i class="fa fa-check"></i> Yes</a>
								</div>
								<div class="small-12 medium-12 large-3 columns">
									<a href="/savedads" class="button tiny pb-button-two-sides-all wider-button"><i class="fa fa-times-circle"></i> No</a>
								</div>
							</div>
						</div>

					</div>
					<div class="small-12 medium-12 large-4 columns">
						<div class="dash-menu">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
  /* The document title */
  document.title="Popibay || Dashboard || Delete pet ad";
</script>
@stop