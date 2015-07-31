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
			<div class="reg-success-box go-down-a-bit-100">
				<h2 class="text-center main-color-no-hover">Registration Success</h2>
				<h5 class="text-justify">
					Welcome to Popibay we have just registered your
					details, We are almost true lets confirm your email address, Please go your email address then click on the link in the email to verify. 
				</h5>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	document.title="Welcome | Register on Popibay.";
</script>
@stop