@extends('template.master_appidea')
@section('content')
<style type="text/css">
	.content-one {
		width: 100%;
		min-height: 700px;
		background: rgb(238, 238, 238);
		border-bottom: #cccc33 thin solid;
		background-size: cover;
		/* margin-top: 100px; */
		/* position: absolute; */
		padding: 20px;
		z-index: -1;
	}

	.go-down-a-bit-10{
		margin-top: 10px !important;
	}

	.go-down-a-bit-20{
		margin-top: 20px !important;
	}

	.go-down-a-bit-30{
		margin-top: 30px !important;
	}

	.go-down-a-bit-40{
		margin-top: 40px !important;
	}

	.go-down-a-bit-50{
		margin-top: 50px !important;
	}

	.go-down-a-bit-60{
		margin-top: 60px !important;
	}

	.go-down-a-bit-100{
		margin-top: 100px !important;
	}

	.go-down-a-bit-200{
		margin-top: 200px !important;
	}


	.go-up-a-bit-10{
		margin-bottom: 10px !important;
	}

	.go-up-a-bit-20{
		margin-bottom: 20px !important;
	}

	.go-up-a-bit-30{
		margin-bottom: 30px !important;
	}

	.go-up-a-bit-40{
		margin-bottom: 40px !important;
	}

	.go-up-a-bit-50{
		margin-bottom: 50px !important;
	}

	.go-up-a-bit-100{
		margin-bottom: 100px !important;
	}
</style>
<div class="content-one">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="login-or-reg-box go-down-a-bit-100">
				<?php
                  $sess_message = Session::get('message');
                  if( isset($sess_message) == true ){
                    echo'
                    <div data-alert class="alert-box alert radius">
                    '. $sess_message . '
                    	<a href="#" class="close">&times;</a>
                    </div>';
                  }
                ?>
				<h1 class="text-center go-up-a-bit-20 main-color-no-hover">
					Register
				</h1>
				{{ Form::open(array('route' => 'Popibay.register','method' => 'POST')) }}
					<!-- <div class="name-field"> -->
					<input name="name" style="margin-bottom: 20px !important;" class="go-down-a-bit-20 pb-text-box" type="text" required placeholder="Name e.g Obi eze">
					<!-- <small class="error">Name is required.</small>
					</div> -->
					<!-- <div class="email-field"> -->
					<input name="email" style="margin-bottom: 20px !important;" class="go-down-a-bit-20 pb-text-box" type="email" required placeholder="Email (Someone@example.com)">
					<!-- <small class="error">An email address is required.</small>
					</div> -->
					<!-- <div class="password-field"> -->
					<input name="password" style="margin-bottom: 20px !important;" class="go-down-a-bit-20 pb-text-box" type="password" required placeholder="Password">
					<!-- <small class="error">Password is required (Min:8)and must contain numbers, upper case and lower case characters.</small>
					</div> -->
					<!-- <div class="confirm-password-field"> -->
					<input name="password_confirmation" data-equalto="password" style="margin-bottom: 20px !important;" class="go-down-a-bit-20 pb-text-box" type="password" required placeholder="Confirm Password">
					<!-- <small class="error">The password did not match</small>
					</div> -->
					<label for="terms" class="go-up-a-bit-20">
						<input required type="checkbox" id="terms"> By clicking this checkbox you have agree to our <a href="/terms" class="orange-text-link">terms and conditions</a>.
					</label>
					<button style="margin-bottom: 50px !important;" class="wider-button pb-button-two-sides-all" type="submit">Register</button>
					<h5 class="text-center grey-color-no-hover"> Already have an account ?<a href="/login" class="orange-text-link"> Login.</a></h5>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	document.title="Welcome | Register on Popibay.";
</script>
@stop