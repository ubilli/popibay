@extends('template.master_admin_login')
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
				<h2 class="text-center go-up-a-bit-20 main-color-no-hover">
					Administrator Login
				</h2>
				<form action="#">
					<input style="margin-bottom: 20px !important;" class="go-down-a-bit-20" type="email" required placeholder="Email (Someone@example.com)">
					<input style="margin-bottom: 10px !important;" class="go-down-a-bit-20" type="password" required placeholder="Password">
					<button style="margin-bottom: 50px !important;" class="wider-button" type="submit">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	document.title="Administrator Login";
</script>
@stop