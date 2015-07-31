@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
<div class="row">
  <div class="small-12 medium-12 large-12 columns">
  <div class="category-box-location-petads">
    <h2 class="text-center main-color-no-hover">Choose a pet type.</h2>
    <hr>
    <ul class="no-bullet">
    	<li>
    		<a href="petads/location?cat=dog"><h4 class="text-left orange-text pulse"> <i class="fa fa-heart"></i> Dog </h4></a>
    	</li>
    	<!-- <li>
        <a href="petads/location?cat=cat"><h4 class="text-left orange-text pulse"> <i class="fa fa-heart"></i> Cat </h4></a>
      </li> -->
    </ul>
    <!-- <div class="cont-img">
    </div> -->
  </div>
  </div>
</div>
</div>
<script>
  /* The document title */
  document.title="Popibay || Choose a pet type.";
</script>
@stop