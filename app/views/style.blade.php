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
	<input type="text" class="pb-text-box" placeholder="wow so cool...">
	<br>
	<input type="text" class="important-field pb-text-box" placeholder="wow so cool...">
	<br>
	<select name="" id="" class="pb-text-box">
		<option value="#"> options </option>
		<option value="#"> options </option>
		<option value="#"> options </option>
		<option value="#"> options </option> options 
	</select>
	<button class="pb-button-four-sides">test button</button>
	<br>
	<button class="pb-button-two-sides-right">test button</button>
	<br>
	<button class="pb-button-two-sides-all">test button</button>
	<br>
	<button class="button" data-dropdown="contentDrop" aria-controls="contentDrop" aria-expanded="false">Content Dropdown »</button>
	<div id="contentDrop" class="f-dropdown content medium" data-dropdown-content="" aria-hidden="true" tabindex="-1" style="position: absolute; left: -99999px; top: 316.765625px;">
		<h4>Title</h4>
		<p>Some text that people will think is awesome! Some text that people will think is awesome! Some text that people will think is awesome!</p>
		<img src="../assets/img/examples/comet.jpg" alt="a flying comment">
		<p>More test.</p>
		<button class="button" onclick="alert('This button can be replaced with an anchor with a role value of button if it\'s truly a hyperlink.');">Button
		</button></div>
	<br>
	<!-- <button class="button" data-dropdown="tinyDrop" aria-controls="tinyDrop" aria-expanded="false">Link Dropdown »</button>
	<ul id="tinyDrop" class="f-dropdown open" data-dropdown-content="" tabindex="-1" aria-hidden="false" style="position: absolute; left: 30px; top: 236px;">
		<li><a href="#">This is a link</a></li>
		<li><a href="#">This is another</a></li>
		<li><a href="#">Yet another</a></li>
	</ul> -->
	<br>
	<div class="user-img-icon-box" data-dropdown="tinyDrops" aria-controls="tinyDrop" aria-expanded="false">
	</div>
	<ul id="tinyDrops" class="f-dropdown" data-dropdown-content="" tabindex="-1" aria-hidden="false" style="position: absolute; left: 30px; top: 236px;">
		<li><a href="#">This is a link</a></li>
		<li><a href="#">This is another</a></li>
		<li><a href="#">Yet another</a></li>
	</ul>

<br>

<div id="image-cropper">
  <div class="cropit-image-preview">
  	
  </div>
  
  <input type="range" class="cropit-image-zoom-input" />
  
  <!-- The actual file input will be hidden -->
  <input type="file" class="cropit-image-input" />
  <!-- And clicking on this button will open up select file dialog -->
  <div class="select-image-btn">Select new image</div>
</div>

<!-- uploader -->
<div id="drag-and-drop-zone" class="uploader">
	<div>Drag &amp; Drop Images Here</div>
	<div class="or">-or-</div>
	<div class="browser">
		<label>
			<span>Click to open the file Browser</span>
			<input type="file" name="files[]" multiple="multiple" title='Click to add Files'>
		</label>
	</div>
</div>
<!-- end uploader -->

<?php
		//$Profilepic = new ProfilePicController();
		// $haystack = "";
		// $needles = "public/pb-uploads/profile_pic/79207/";
		// $cut = Str::startsWith($haystack, $needles);
		// echo substr_replace($needles, $haystack, 0,7);
		// echo "</br>";

		// echo base_path();
		echo $_SERVER['HTTP_HOST']."</br>";

		//function base_url(/* http | https*/ $protocol){
		//		return $protocol."://".$_SERVER['HTTP_HOST']."/";
		//	}

		// echo base_url("https");

		small_businesslogo_thumbnail('http');
?>

<img src="<?php large_businesslogo_thumbnail('http'); ?>" alt="">
<script type="text/javascript">
	document.title="Popibay styles";
</script>
@stop