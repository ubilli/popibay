@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="post-box-content">
				<h3 class="text-center orange-text"><i class="fa fa-image"></i> Add photos of your pet</h3>
				<hr>
				<div class="row">
					<div class="small-12 medium-12 large-7 columns">
						<div class="image-instructions-one-for-images-page">
						</div>
					</div>
					<div class="small-12 medium-12 large-5 columns">
						<div class="vertical-line">
							<ul class="no-bullet">
								<li>
									<h6 class="text-left main-color-no-hover go-down-a-bit-30">IMAGE REQUIREMENTS
									</li>
									<li>
										<h6 class="text-left grey-text"><i class="fa fa-asterisk"></i> Image type must be ( Jpeg,Jpg,Png ).</h6>
									</li>
									<li>
										<h6 class="text-left grey-text"><i class="fa fa-asterisk"></i> Image size must be 3mb maximum.</h6>
									</li>
									<li>
										<h6 class="text-left grey-text"><i class="fa fa-asterisk"></i> Total maximum image upload per post is 5 images.</h6>
									</li>
								</ul>
								<div class="image-upload-box go-up-a-bit-20">
									{{ Form::open(array('route' => 'Fileupload.image','files'=> true,'class'=>'dropzone')) }}
									<div class="fallback">
										<input name="file" type="file" multiple />
									</div>
									{{ Form::close() }}
									<div class="hidden-inputs">
									</div>
								</div>
							</div>
						</div>
				</div>
				<div class="row">
					<div class="small-12 medium-12 large-3 offset-6 columns">
						{{-- /petads/lga?cat=$categories&location=$location --}}
						<a title="Back" href="#" class="button wider-button pb-button-two-sides-all go-down-a-bit-50"><i class="fa fa-arrow-left fa-lg"></i></a>
						}
					</div>
					<div id="next-box" class="small-12 medium-12 large-3 columns">
						<a title="Next" href="#" class="button wider-button pb-button-two-sides-all go-down-a-bit-50"><i class="fa fa-arrow-right fa-lg"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
  /* The document title */
  document.title="Popibay || Upload your pet images...";
</script>
@stop