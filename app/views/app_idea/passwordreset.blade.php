@extends('template.master_appidea')
@section('content')
<style type="text/css">
	.content-one {
		width: 100%;
		min-height: 700px;
		background: rgb(238, 238, 238);
		border-bottom: #cccc33 thin solid;
		background-size: cover;
		margin-top: 100px;
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
				$welcome_back = Session::get('welcome_back');
				$message = Session::get('message');
				if ( isset($welcome_back) ) {
					echo '
					<div data-alert class="alert-box success radius">
						<h6 class="text-center white-text">'.$welcome_back.'</h6>
						<a href="#" class="close">&times;</a>
					</div>
					';
				}

				if ( isset($message) ) {
					echo '
					<div data-alert class="alert-box alert radius">
						<h6 class="text-justify white-text">'.$message.'</h6>
						<a href="#" class="close">&times;</a>
					</div>       
					';
				}
				?>
				<h1 class="text-center go-up-a-bit-20 main-color-no-hover">
					Password Reset
				</h1>
				{{ Form::open(array('route' => 'Popibay.passwordreset','method' => 'POST','data-abide' => '')) }}
					<div class="password-field">
					<input id="password" name="password" style="margin-bottom: 20px !important;" class="go-down-a-bit-20 pb-text-box" type="password" required placeholder="New password">
					<small class="error">Password is required (Min:8)and must contain numbers, upper case and lower case characters.</small>
					</div>
					<div class="password-confirmation-field">
					<input name="confirm_password" style="margin-bottom: 20px !important;" class="go-down-a-bit-20 pb-text-box" type="password" required data-equalto="password" placeholder="Confirm password">
					<small class="error">The password did not match</small>
					</div>
					<input type="hidden" name="email_id" value="{{Session::get('email_id')}}">
					<button style="margin-bottom: 50px !important;" class="wider-button pb-button-two-sides-all" type="submit">Reset password</button>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	document.title="Reset your password.";
</script>
@stop