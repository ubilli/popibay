<?php
/**
 *
 * @author Udeme-Samuel <udemesamuel256@gmail.com> <(Popibay Founder/Developer)>
 * @license no-license
 * @copyright Popibay.com © 2015 A Jobinpal Company
 * --------------------------------------------------------
 * 
 */
class ImageUploadController extends \BaseController {

	// not working just a back up
	public function images(){
	  $files = Input::file('file');
	  // setting up rules

	  	if (Input::hasFile('file')) {

	  	 foreach ($files as $file) {
	  	  $destinationPath = 'public/pb-uploads/pet_images/'; // upload path
	      $extension = $file->getClientOriginalExtension(); // getting image extension
	      $original_name = $file->getClientOriginalName();
	      $random_number = rand(11111,99999);
	      $fileName = $random_number.'.'.$extension; // renaming image
	      $file->move($destinationPath, $fileName); //

	      /* <h5 class='hide'>Hidden Info</h5> */
	      /*echo "<h5 class='hide'>Hidden Info</h5><input name='image-info' type='hidden' value='{filename='".$fileName."',dest='".$destinationPath."',ran_num='".$random_number."',ext='".$extension."'}' />";*/

	      // originalname='".$original_name."'

	      // testing using the session method...
	      /*Session::put($original_name, "{newfilename='".$fileName."',dest='".$destinationPath."',ran_num='".$random_number."',ext='".$extension."'}");*/

	      Session::put($original_name, array('newfilename' => $fileName, 'dest' => $destinationPath, 'ran_num' => $random_number, 'ext' => $extension));

	      print_r(Session::get('$original_name'));
	  	 }
	}
}

	// new prototype controller for the image handler
	public function imagey(){

	  $all_inputs = Input::all();
	  $files = Input::file('file');

	  $app_token = Input::get('_token');
	  // setting up rules

	  	if (Input::hasFile('file')) {

	  	 foreach ($files as $file) {
	  	  $destinationPath = 'public/pb-uploads/pet_images/'; // upload path
	      $extension = $file->getClientOriginalExtension(); // getting image extension
	      $original_name = $file->getClientOriginalName();
	      $random_number = rand(11111,99999);
	      $fileName = $random_number.'.'.$extension; // renaming image
	      $file->move($destinationPath, $fileName); //

	      
	      /*
	      	There is a big bug here, we need dont know who our guest-member
	      	is because we dont have a valid id of the user at this image stage,
	      	so the way we can walk around this is since the user has gotten the 
	      	pet ad /post page we will consider the user a serious guest-member 
	      	so we will allow the guest-member upload their images with a 
	      	* confirm form resubmission plugin on the post page
	      	* add a laravel app token...
	      */

	      	$temp_image_upload = new Tempimageupload;
	      	$temp_image_upload->app_token = $app_token;
	      	$temp_image_upload->original_image_name = $original_name;
	      	$temp_image_upload->new_file_name = $fileName;
	      	$temp_image_upload->destination = $destinationPath;
	      	$temp_image_upload->ran_num = $random_number;
	      	$temp_image_upload->extension = $extension;
	      	$temp_image_upload->save();

	      	echo "<input id='image-upload-token' name='image-token' type='hidden' value='$app_token' />";
	  	 }
	}
}

	
	public function image(){

	  $all_inputs = Input::all();
	  $files = Input::file('file');

	  $app_token = Input::get('_token');
	  // setting up rules

	  	if (Input::hasFile('file')) {

	  	 foreach ($files as $file) {
	  	  $destinationPath = 'public/pb-uploads/pet_images/'; // upload path
	  	  $thumbnail_path = 'public/pb-uploads/pet_images_thumbnail/';
	  	  $popibay_watermark = 'public/pb-uploads/pet_images/popibay_white_logo_watermark/popibay_watermark_logo.png';
	  	  $popibay_watermark_new = 'public/pb-uploads/pet_images/popibay_white_logo_watermark/popibay_watermark_opacity_logo.png';
	      $extension = $file->getClientOriginalExtension(); // getting image extension
	      $original_name = $file->getClientOriginalName();
	      $random_number = rand(11111,99999);
	      $fileName = $random_number.'.'.$extension; // renaming image

	      // Image::make($file)->resize(600, 357)->insert($popibay_watermark_new,'center')->save($destinationPath.$fileName);

	      Image::make($file)->insert($popibay_watermark_new,'center')->save($destinationPath.$fileName);

	      Image::make($file)->resize(125, 155)->save($thumbnail_path.$fileName); // thumbnail image

	      $domain = 'http://popibay.com';
	      $destinationPath = '/pb-uploads/pet_images/'; // upload path
	  	  $thumbnail_path = '/pb-uploads/pet_images_thumbnail/';
	  	  $temp_id = rand(1,100);

	  	  // save temp_id value to session...

	  	  // $temp_saved_id = Petimage::where('temp_id','=',$temp_id)->first();
	      // $temp_saved_id = $temp_saved_id->temp_id;

	      $saved_temp_id = Session::get('saved_temp_id');

	      if ( isset($saved_temp_id) ) {
	      	
	      	$pet_image = new Petimage;
	      	$pet_image->temp_id = $saved_temp_id;
	      	$pet_image->petad_id = 0;
	      	$pet_image->original_name = $original_name;
	      	$pet_image->image_path = $domain.$destinationPath.$fileName;
	      	$pet_image->image_thumbnail_path = $domain.$thumbnail_path.$fileName;
	      	$pet_image->image_name = $fileName;
	      	$pet_image->save();

	      	exit;

	      }

	      // Save to image table...
	      $pet_image = new Petimage;
	      $pet_image->temp_id = $temp_id;
	      $pet_image->petad_id = 0;
	      $pet_image->original_name = $original_name;
	      $pet_image->image_path = $domain.$destinationPath.$fileName;
	      $pet_image->image_thumbnail_path = $domain.$thumbnail_path.$fileName;
	      $pet_image->image_name = $fileName;
	      $pet_image->save();

	      Session::put('saved_temp_id', $temp_id);

	  	 }
	}
}

	
	public function edit(){

	  $petad_id = Input::get('petad-id');
	  $all_inputs = Input::all();
	  $files = Input::file('file');

	  // setting up rules

	  	if (Input::hasFile('file')) {

	  	 foreach ($files as $file) {
	  	  $destinationPath = 'public/pb-uploads/pet_images/'; // upload path
	  	  $thumbnail_path = 'public/pb-uploads/pet_images_thumbnail/';
	  	  $popibay_watermark = 'public/pb-uploads/pet_images/popibay_white_logo_watermark/popibay_watermark_logo.png';
	  	  $popibay_watermark_new = 'public/pb-uploads/pet_images/popibay_white_logo_watermark/popibay_watermark_opacity_logo.png';
	      $extension = $file->getClientOriginalExtension(); // getting image extension
	      $original_name = $file->getClientOriginalName();
	      $random_number = rand(11111,99999);
	      $fileName = $random_number.'.'.$extension; // renaming image

	      // Image::make($file)->resize(600, 357)->insert($popibay_watermark_new,'center')->save($destinationPath.$fileName);

	      Image::make($file)->insert($popibay_watermark_new,'center')->save($destinationPath.$fileName);

	      Image::make($file)->resize(125, 155)->save($thumbnail_path.$fileName); // thumbnail image

	      $domain = 'http://popibay.com';
	      $destinationPath = '/pb-uploads/pet_images/'; // upload path
	  	  $thumbnail_path = '/pb-uploads/pet_images_thumbnail/';
	  	  $temp_id = rand(1,100);

	  	  	// save temp_id value to session...

	  	  $temp_saved_id = Petimage::where('petad_id','=',$petad_id)->first();
	  	  $temp_saved_id = $temp_saved_id->temp_id;

	  	  $saved_temp_id = $temp_saved_id;

	      	// if ( isset($saved_temp_id) ) {

	  	  $pet_image = new Petimage;
	  	  $pet_image->temp_id = $saved_temp_id;
	  	  $pet_image->petad_id = $petad_id;
	  	  $pet_image->original_name = $original_name;
	  	  $pet_image->image_path = $domain.$destinationPath.$fileName;
	  	  $pet_image->image_thumbnail_path = $domain.$thumbnail_path.$fileName;
	  	  $pet_image->image_name = $fileName;
	  	  $pet_image->save();

	  	  Session::put('saved_temp_id', $saved_temp_id);
		}
	}

}

	// not working just a back up
	public function deleteimages(){
		$removed_image = Input::get('removed_image'); //former name
		$added_images = Session::all();
		$added_image = Session::get($removed_image);
		$new_file_name = $added_image['newfilename'];


		$destinationPath = 'public/pb-uploads/pet_images/';

		/*
			TODO FOR THE IMAGE FILE
			-----------------------
			* Delete it from the /pet-image path
			* Delete it from the session
		*/



		// delete from the folder

		File::delete($destinationPath.$new_file_name);

		// Deleted the image from the session.

		Session::forget($removed_image);

	}

	// working 
	public function deleteimagess(){
		$removed_image = Input::get('removed_image'); //former name
		$destinationPath = 'public/pb-uploads/pet_images/';

		// check the file where it is in the database for the new name
		// using the former name as an id...

		$tempimageupload = Tempimageupload::where('original_image_name', '=', $removed_image)->first();

		$new_file_name = $tempimageupload->new_file_name;
		/*
			TODO FOR THE IMAGE FILE
			-----------------------
			* Delete it from the /pet-image path
			* Delete it from the database
		*/



		// delete from the folder

		File::delete($destinationPath.$new_file_name);

		// delete from the database

		Tempimageupload::where('original_image_name', '=', $removed_image)->delete();

	}

	public function deleteimage(){
		
		$removed_image = Input::get('removed_image'); //former name
		$destinationPath = 'public/pb-uploads/pet_images/'; // upload path
	  	$thumbnail_path = 'public/pb-uploads/pet_images_thumbnail/';
		$saved_temp_id = Session::get('saved_temp_id');

		$saved_img = Petimage::where('original_name', '=', $removed_image)->first();
		$image_name = $saved_img->image_name;

		File::delete($destinationPath.$image_name);
		File::delete($thumbnail_path.$image_name);

		$saved_img->delete();

		/*foreach ($saved_imgs as $saved_img) {
			
			$image_path = $saved_img->image_path;
			$image_thumbnail_path = $saved_img->image_thumbnail_path;
			$image_name = $saved_img->image_name;

			// return $image_path;

			// delete from the folder

			File::delete($destinationPath.$image_name);
			File::delete($thumbnail_path.$image_name);

			$saved_img->delete();

		}*/

	}


}