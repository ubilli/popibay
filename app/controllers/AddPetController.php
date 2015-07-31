<?php
/**
 *
 * @author Udeme-Samuel <udemesamuel256@gmail.com> <(Popibay Founder/Developer)>
 * @license no-license
 * @copyright Popibay.com © 2015 A Jobinpal Company
 * --------------------------------------------------------
 * 
 */
class AddPetController extends \BaseController {

	public function pet(){

		$Inputs = Input::all();
		$Pn = Input::get('pn'); // important 
		$Pt = Input::get('pt');
		$Pb = Input::get('pb');
		$Pa = Input::get('pa');
		$Ps = Input::get('ps');
		$Pc = Input::get('pc');
		$Pd = Input::get('pd'); // important 
		$Pw = Input::get('pw');
		$Pco = Input::get('pco');
		$Pps = Input::get('pps');
		$Pp = Input::get('pp'); // important

		$Petimages = Input::file('files'); // important

		// validate the inputs in later version.

		// process the images first

		foreach ($Petimages as $Petimage) {
			
		// getting all of the post data
		$file = array('image' => $Petimage);
	  	// setting up rules
	  	$rules = array('image' => 'required|mimes:jpeg,jpg,png|max:700kb'); //mimes:jpeg,bmp,png and for max size max:10000
	  	// doing the validation, passing post data, rules and the messages

	  	$validator = Validator::make($file, $rules);

	  	if ($validator->fails()) {
	    // send back to the page with the input data and errors
	    return Redirect::to('dashboard/addpet')->with('message','No image uploaded or does not support file type.( size: 1000px by 500px )');
		}else{

		// checking file is valid.
	    if ($Petimage->isValid()) {

	      // check if profile pic exist @update else: update
	      $pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		  $pbuserid = $pbuser->id;

	      $profilepic_count = Petimage::where('user_id', '=', $pbuserid)->count();

	      if ( $profilepic_count == 0 ) {
	      	// insert image 

	      $destinationPath = 'public/pb-uploads/pet_images/'; // upload path
	      $extension = $Petimage->getClientOriginalExtension(); // getting image extension
	      $original_name = $Petimage->getClientOriginalName();
	      $random_number = rand(11111,99999);
	      $fileName = $random_number.'.'.$extension; // renaming image
	      $Petimage->move($destinationPath, $fileName); // uploading file to given path
	      // sending back with message

	      return "it worked so cool...";

	      // work on this part untill you have found how to manage
	      // multiple uploads... for the main time work on the pets.

	    }
		}

		}



	}

	
}
}