@extends('template.master_realidea_storefront')
@section('content')
<div class="dashboard-content-store-front go-up-a-bit-20">
    <!-- <div class="row">
        <div class="small-12 medium-12 large-12 columns"> -->
            <div class="store-front-header-2">
                <!-- <div class="cropit-image-preview">
                
                </div> -->

                <!-- <input type="range" class="cropit-image-zoom-input" /> -->

                <!-- The actual file input will be hidden -->
                <!-- <input type="file" class="cropit-image-input" /> -->
                <!-- And clicking on this button will open up select file dialog -->
                <div class="uploader_click" data-reveal-id="myModal"><i class="fa fa-camera fa-5x"></i></i></div>
                <!-- end cropit -->

                <h4 class="text-left pet-seller-text-2 bolder-text">
                    Pet seller name
                </h4>
            </div>
            <!-- start modal -->
            <div id="myModal" class="reveal-modal" data-reveal>
              <h2 class="text-center main-color-no-hover">Pet Cover photo</h2>
              <hr>
              <div id="image-cropper">
              <div class="cropit-image-preview">
              </div>
              <input type="range" class="cropit-image-zoom-input" />
              <input type="file" class="cropit-image-input" />
              <div class="select-image-btn"><i class="fa fa-image"></i> Upload new photo</div>
              <div class="save-move-a-bit"><i class="fa fa-floppy-o"></i> Save</div>
              </div>
              <hr>
              <a class="close-reveal-modal">&#215;</a>
           </div>
          <!-- end modal -->
       <!--  </div>
           </div> -->
    <div class="row">
        <div class="small-12 medium-12 large-12 columns">
            <div class="store-front-header-buttom">
                <div class="row">
                    <div class="small-12 medium-12 large-5 columns">
                        <ul class="small-block-grid-2">
                          <li>
                              <div class="pet-manager-image">
                                <img src="<?php large_thumbnail('http') ?>" alt="store front profile photo." class="petstore-profile-pic">
                              </div>
                          </li>
                          <li>
                            <h5 class="text-center">Business name</h5>
                            <div class="pet-manager-business-image go-down-a-bit-10">
                            <img src="<?php large_businesslogo_thumbnail('http') ?>" alt="store front business logo" >
                            </div>
                        </li>
                    </ul>
                    </div>
                    <div class="small-12 medium-12 large-6 columns go-down-a-bit-50">
                        <ul class="inline-list">
                            <li><a href="#"><h3>About</h3></a></li>
                            <li><a href="#"><h3>History</h3></a></li>
                            <li><a href="#"><h3>wow</h3></a></li>
                            <li><a href="#"><h3>wow</h3></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="small-12 medium-12 large-12 columns">
            <div class="pet-show-glass">
                <div class="row">
                    <div class="small-12 medium-12 large-9 columns">
                        <div class="content-box">
                        </div>
                    </div>
                    <div class="small-12 medium-12 large-3 columns">
                        <div class="ad-box">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, inventore sunt omnis a facilis tempore rerum necessitatibus reiciendis, praesentium ad voluptas molestiae commodi suscipit. Laudantium recusandae repudiandae quod veritatis repellendus.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
