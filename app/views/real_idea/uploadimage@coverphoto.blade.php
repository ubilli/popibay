@extends('template.master_realidea')
@section('content')
<div class="dashboard-content go-up-a-bit-20">
    <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <div class="content-box go-up-a-bit-10">
                    <h3 class="text-center">Upload your account images</h3>
                    <hr>
                    <div class="row">
                        <div class="small-12 medium-12 large-3 columns">
                        <div class="upload-menu-links">
                            <ul class="no-bullet">
                                <li><a href="../dashboard/upload" class="grey-color"><h5 class="text-left menu-link-one-default"><i class="fa fa-camera"></i> Profile image</a></h5></li>
                                <li><a href="../dashboard/upload@businesslogo" class="grey-color"><h5 class="text-left menu-link-one-default"><i class="fa fa-picture-o"></i> Business Logo</a></h5></li>
                                <li><a href="../dashboard/upload@coverphoto" class="grey-color"><h5 class="text-left menu-link-one"><i class="fa fa-picture-o"></i> Cover photo</a></h5></li>
                            </ul>
                        </div>
                        </div>
                        <div class="small-12 medium-12 large-9
                         columns">
                         <div class="upload-preview-with-button-business-logo">
                            <div class="row">
                                <div class="small-12 medium-12 large-9 columns">
                                    <div class="image-preview-business-logo">
                                        <img class="preview-img-business-logo" src="../pb-assets/img/main_logo/cover_photo_default.png" alt="default image">
                                    </div>
                                </div>
                                <div class="small-12 medium-12 large-3 columns">
                                    <input type="file">
                                    <button class="pb-button-two-sides-all wider-button go-down-a-bit-50"><i class="fa fa-camera fa-lg"></i></button>
                                </div>
                            </div>
                         </div>
                         <hr>
                         <div class="row go-up-a-bit-10">
                            <div class="small-12 medium-12 large-4 columns">
                                <img src="../pb-assets/img/main_logo/cover_photo_size.png" alt="">
                            </div>
                            <div class="small-12 medium-12 large-8 columns">
                                <h5 class="text-justify grey-color-no-hover">
                                    The image must 200kb be the image extensions 
                                    can be .jpg, .png, .jpeg, .gif, .bmp.
                                </h5>
                            </div>
                         </div>
                         <div class="row go-down-a-bit-100">
                            <div class="small-12 medium-12 large-12 large-centered columns">
                            <div class="skeleton-center">
                                <ul class="button-group">
                                    <li><a href="../dashboard/upload@businesslogo" class="button pb-button-two-sides-all">Back</a></li>
                                    <li><a href="#" class="disabled button pb-button-two-sides-all">Next</a></li>
                                </ul>
                            </div>
                            </div>
                         </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
