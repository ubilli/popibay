<?php
/**
 *
 * @author Udeme-Samuel <udemesamuel256@gmail.com> <(Popibay Founder/Developer)>
 * @license no-license
 * @copyright Popibay.com © 2015 A Jobinpal Company
 * --------------------------------------------------------
 * 
 */
class UploadingController extends \BaseController {

	public function profilepic() {
	  // getting all of the post data
	  $file = array('image' => Input::file('image'));
	  // setting up rules
	  $rules = array('image' => 'required|mimes:jpeg,jpg,png|max:20kb'); //mimes:jpeg,bmp,png and for max size max:10000
	  // doing the validation, passing post data, rules and the messages
	  $validator = Validator::make($file, $rules);
	  if ($validator->fails()) {
	    // send back to the page with the input data and errors
	    return Redirect::to('dashboard/upload')->with('message','No image uploaded or does not support file type.( size: 200px by 200px )');
		}
	  else {
	    // checking file is valid.
	    if (Input::file('image')->isValid()) {

	      // check if profile pic exist @update else: update
	      $pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		  $pbuserid = $pbuser->id;

	      $profilepic_count = Profilepic::where('user_id', '=', $pbuserid)->count();

	      if ( $profilepic_count == 0 ) {
	      	// insert image 

	      $destinationPath = 'public/pb-uploads/profile_pic/'; // upload path
	      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
	      $original_name = Input::file('image')->getClientOriginalName();
	      $random_number = rand(11111,99999);
	      $fileName = $random_number.'.'.$extension; // renaming image
	      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
	      // sending back with message

	      // resize the file to 30 by 30, 60 by 60, 150 px 150px

	      // 30 by 30
	      $unresized_img = Image::make($destinationPath.$fileName);
	      $unresized_img->resize(30, 30);
	      $destinationPath_30 = 'public/pb-uploads/profile_pic/'.$random_number.'/';
	      File::makeDirectory($destinationPath_30, $mode = 0777, $recursive = false);
	      $unresized_img->save($destinationPath_30.'30_30_'.$fileName);

	      // 60 by 60
	      $unresized_img = Image::make($destinationPath.$fileName);
	      $unresized_img->resize(60, 60);
	      $destinationPath_30 = 'public/pb-uploads/profile_pic/'.$random_number.'/';
	      $unresized_img->save($destinationPath_30.'60_60_'.$fileName);

	      // move the large file to the current folder.
	      File::move($destinationPath.$fileName, $destinationPath_30.$fileName);

	      // save the files to the database.

	      $profilepic = new Profilepic();

	      $pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		  $pbuserid = $pbuser->id;

	      $profilepic->user_id = $pbuserid; 
		  $profilepic->profilepic_name = $fileName;
		  $profilepic->profilepic_path = $destinationPath_30;
		  $profilepic->profilepic_30 = "30_30_";
		  $profilepic->profilepic_60 = "60_60_";
		  $profilepic->profilepic_extension = $extension;
		  $profilepic->save();


	      Session::flash('welcome_back', 'Upload successfully'); 
	      return Redirect::to('dashboard/upload');
	      }else{
	      	// update image

	      	// delete the existing folder...

	      	$pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		    $pbuserid = $pbuser->id;

	      	$existing_profilepic = Profilepic::where('user_id', '=', $pbuserid)->first();

	      	$existing_profilepic_path = $existing_profilepic->profilepic_path;

	      	File::deleteDirectory($existing_profilepic_path, $preserve = false);

		      $destinationPath = 'public/pb-uploads/profile_pic/'; // upload path
		      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
		      $original_name = Input::file('image')->getClientOriginalName();
		      $random_number = rand(11111,99999);
		      $fileName = $random_number.'.'.$extension; // renaming image
		      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
		      // sending back with message

		      // resize the file to 30 by 30, 60 by 60, 150 px 150px

		      // 30 by 30
		      $unresized_img = Image::make($destinationPath.$fileName);
		      $unresized_img->resize(30, 30);
		      $destinationPath_30 = 'public/pb-uploads/profile_pic/'.$random_number.'/';
		      File::makeDirectory($destinationPath_30, $mode = 0777, $recursive = false);
		      $unresized_img->save($destinationPath_30.'30_30_'.$fileName);

		      // 60 by 60
		      $unresized_img = Image::make($destinationPath.$fileName);
		      $unresized_img->resize(60, 60);
		      $destinationPath_30 = 'public/pb-uploads/profile_pic/'.$random_number.'/';
		      $unresized_img->save($destinationPath_30.'60_60_'.$fileName);

		      // move the large file to the current folder.
		      File::move($destinationPath.$fileName, $destinationPath_30.$fileName);

		      // save the files to the database.

		      $pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
			  $pbuserid = $pbuser->id;

			  $profilepic = Profilepic::where('user_id', '=', $pbuserid)->first();

		      $profilepic->user_id = $pbuserid; 
			  $profilepic->profilepic_name = $fileName;
			  $profilepic->profilepic_path = $destinationPath_30;
			  $profilepic->profilepic_30 = "30_30_";
			  $profilepic->profilepic_60 = "60_60_";
			  $profilepic->profilepic_extension = $extension;
			  $profilepic->save();


		      Session::flash('welcome_back', 'Upload successfully | Updated'); 
		      return Redirect::to('dashboard/upload');

	      }
	    }
	    else {
	      // sending back with error message.
	      Session::flash('message', 'uploaded file is not valid');
	      return Redirect::to('dashboard/upload');
	    }
	  }
	}

	public function business_logo() {
	  // getting all of the post data
	  $file = array('image' => Input::file('image'));
	  // setting up rules
	  $rules = array('image' => 'required|mimes:jpeg,jpg,png|max:8kb'); //mimes:jpeg,bmp,png and for max size max:10000
	  // doing the validation, passing post data, rules and the messages
	  $validator = Validator::make($file, $rules);
	  if ($validator->fails()) {
	    // send back to the page with the input data and errors
	    return Redirect::to('dashboard/upload@businesslogo')->with('message','No image uploaded or does not support file type.( size: 300px by 135px )');
		}
	  else {
	    // checking file is valid.
	    if (Input::file('image')->isValid()) {

	      // check if profile pic exist @update else: update
	      $pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		  $pbuserid = $pbuser->id;

	      $profilepic_count = Businesslogo::where('user_id', '=', $pbuserid)->count();

	      if ( $profilepic_count == 0 ) {
	      	// insert image 

	      $destinationPath = 'public/pb-uploads/business_logo/'; // upload path
	      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
	      $original_name = Input::file('image')->getClientOriginalName();
	      $random_number = rand(11111,99999);
	      $fileName = $random_number.'.'.$extension; // renaming image
	      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
	      // sending back with message

	      // resize the file to 40 by 30, 80 by 50, 180 by 120px 
	      // default is 300px by 135px

	      // 40 by 30
	      $unresized_img = Image::make($destinationPath.$fileName);
	      $unresized_img->resize(40, 30);
	      $destinationPath_40 = 'public/pb-uploads/business_logo/'.$random_number.'/';
	      File::makeDirectory($destinationPath_40, $mode = 0777, $recursive = false);
	      $unresized_img->save($destinationPath_40.'40_30_'.$fileName);

	      // 80 by 50
	      $unresized_img = Image::make($destinationPath.$fileName);
	      $unresized_img->resize(80, 50);
	      $destinationPath_40 = 'public/pb-uploads/business_logo/'.$random_number.'/';
	      $unresized_img->save($destinationPath_40.'80_50_'.$fileName);

	      // 180 by 120
	      $unresized_img = Image::make($destinationPath.$fileName);
	      $unresized_img->resize(180, 120);
	      $destinationPath_40 = 'public/pb-uploads/business_logo/'.$random_number.'/';
	      $unresized_img->save($destinationPath_40.'180_120_'.$fileName);

	      // move the large file to the current folder.
	      File::move($destinationPath.$fileName, $destinationPath_40.$fileName);

	      // save the files to the database.

	      $businesslogo = new Businesslogo();

	      $pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		  $pbuserid = $pbuser->id;

	      $businesslogo->user_id = $pbuserid; 
		  $businesslogo->businesslogo_name = $fileName;
		  $businesslogo->businesslogo_path = $destinationPath_40;
		  $businesslogo->businesslogo_40 = "40_30_";
		  $businesslogo->businesslogo_80 = "80_50_";
		  $businesslogo->businesslogo_180 = "180_120_";
		  $businesslogo->businesslogo_extension = $extension;
		  $businesslogo->save();

	      Session::flash('welcome_back', 'Upload successfully'); 
	      return Redirect::to('dashboard/upload@businesslogo');
	      }else{
	      	// update image

	      	// delete the existing folder...

	      	$pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		    $pbuserid = $pbuser->id;

	      	$existing_businesslogo = Businesslogo::where('user_id', '=', $pbuserid)->first();

	      	$existing_businesslogo_path = $existing_businesslogo->businesslogo_path;

	      	File::deleteDirectory($existing_businesslogo_path, $preserve = false);

		      $destinationPath = 'public/pb-uploads/business_logo/'; // upload path
		      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
		      $original_name = Input::file('image')->getClientOriginalName();
		      $random_number = rand(11111,99999);
		      $fileName = $random_number.'.'.$extension; // renaming image
		      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
		      // sending back with message

		      // resize the file to 40 by 30, 80 by 50, 180 by 120px 
		      // default is 300px by 135px

		      // 40 by 30
		      $unresized_img = Image::make($destinationPath.$fileName);
		      $unresized_img->resize(40, 30);
		      $destinationPath_40 = 'public/pb-uploads/business_logo/'.$random_number.'/';
		      File::makeDirectory($destinationPath_40, $mode = 0777, $recursive = false);
		      $unresized_img->save($destinationPath_40.'40_30_'.$fileName);

		      // 80 by 50
		      $unresized_img = Image::make($destinationPath.$fileName);
		      $unresized_img->resize(80, 50);
		      $destinationPath_40 = 'public/pb-uploads/business_logo/'.$random_number.'/';
		      $unresized_img->save($destinationPath_40.'80_50_'.$fileName);

		      // 180 by 120
		      $unresized_img = Image::make($destinationPath.$fileName);
		      $unresized_img->resize(180, 120);
		      $destinationPath_40 = 'public/pb-uploads/business_logo/'.$random_number.'/';
		      $unresized_img->save($destinationPath_40.'180_120_'.$fileName);

		      // move the large file to the current folder.
		      File::move($destinationPath.$fileName, $destinationPath_40.$fileName);

		      // save the files to the database.

		      $businesslogo = Businesslogo::where('user_id', '=', $pbuserid)->first();

		      $pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
			  $pbuserid = $pbuser->id;

		      $businesslogo->user_id = $pbuserid; 
			  $businesslogo->businesslogo_name = $fileName;
			  $businesslogo->businesslogo_path = $destinationPath_40;
			  $businesslogo->businesslogo_40 = "40_30_";
			  $businesslogo->businesslogo_80 = "80_50_";
			  $businesslogo->businesslogo_180 = "180_120_";
			  $businesslogo->businesslogo_extension = $extension;
			  $businesslogo->save();

		      Session::flash('welcome_back', 'Upload successfully | Updated'); 
		      return Redirect::to('dashboard/upload@businesslogo');

	      }
	    }
	    else {
	      // sending back with error message.
	      Session::flash('message', 'uploaded file is not valid');
	      return Redirect::to('dashboard/upload@businesslogo');
	    }
	  }
	}

	public function addpetfiles() {

		$file = Input::get('files[]');
		return $file;
	}
}