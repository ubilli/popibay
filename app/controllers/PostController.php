<?php
/**
 *
 * @author Udeme-Samuel <udemesamuel256@gmail.com> <(Popibay Founder/Developer)>
 * @license no-license
 * @copyright Popibay.com © 2015 A Jobinpal Company
 * --------------------------------------------------------
 * 
 */
class PostController extends \BaseController {


	public function petad(){

		$saved_temp_id = Session::get('saved_temp_id');
		
		// PET AD INFO
		$Categories = Input::get('categories');
		$Location = Input::get('location');
		$Area = Input::get('area');
		// $Pet_type = Input::get('pet-type');
		$Pet_ad_title = Input::get('pet-ad-title');
		$Pet_description = Input::get('pet-description');
		$Pet_price = Input::get('pet-price');
		$Negotiation = Input::get('negotiation');
		$Pet_breeder = Input::get('breeder');
		$Pet_post_status = 'pending';

		// USER ACCOUNT INFO
		$Account = Input::get('account');
		$Name = Input::get('name');
		$Phone_number = Input::get('phone-number');
		$Phone_number_two = Input::get('phone-number-two');
		$Phone_privacy = Input::get('phone-privacy');
		$Email = Input::get('email');
		$Password = Input::get('password');
		$Cpassword = Input::get('c-password');


		if ( Auth::check() == true ) {
			
			$user = User::where('email', '=', $Email)->first();
			$user_id = $user->id;


			$petad = new Petad;
			$petad->user_id = $user_id;
			$petad->temp_id = $saved_temp_id;
			$petad->categories = $Categories;
			$petad->location = $Location;
			$petad->area = $Area;
			// $petad->pet_type = $Pet_type;
			$petad->pet_ad_title = $Pet_ad_title;
			$petad->pet_description = $Pet_description;
			$petad->pet_price = $Pet_price;
			$petad->negotiation = $Negotiation;
			$petad->breeder = $Pet_breeder;
			// $petad->images = $Pet_images; // is an array
			$petad->status = $Pet_post_status;
			$petad->save();


			$saved_imgs = Petimage::where('temp_id','=',$saved_temp_id)->get();

			foreach ($saved_imgs as $saved_img) {
				$petad_id = Petad::where('temp_id','=',$saved_temp_id)->first();
				$petad_id = $petad_id->id;

				$saved_img->petad_id = $petad_id;
				$saved_img->save();


			}


			// Delete the saved_temp_id session...

			Session::forget('saved_temp_id');

			return Redirect::to('/dashboard')->with('welcome_back','Your post has been successfully added.');

		}else{
			
		
		// Goto the account table ... 

		$account = new Account;
		$account->account_type = $Account;
		$account->name = $Name;
		$account->phone_number = $Phone_number;
		$account->phone_number_two = $Phone_number_two;
		$account->phone_privacy = $Phone_privacy;
		$account->email = $Email;
		$account->password = Hash::make($Password);
		$account->save();

		// clone "account info" to user table

		$user = new User;
		$user->name = $Name;
		$user->email = $Email;
		$user->password = Hash::make($Password);
		$user->save();

		// goto the petads table ...

		$user = User::where('email', '=', $Email)->first();
		$user_id = $user->id;


		$petad = new Petad;
		$petad->user_id = $user_id;
		$petad->temp_id = $saved_temp_id;
		$petad->categories = $Categories;
		$petad->location = $Location;
		$petad->area = $Area;
		// $petad->pet_type = $Pet_type;
		$petad->pet_ad_title = $Pet_ad_title;
		$petad->pet_description = $Pet_description;
		$petad->pet_price = $Pet_price;
		$petad->negotiation = $Negotiation;
		$petad->breeder = $Pet_breeder;
		// $petad->images = $Pet_images; // is an array
		$petad->status = $Pet_post_status;
		$petad->save();


		$saved_imgs = Petimage::where('temp_id','=',$saved_temp_id)->get();

		foreach ($saved_imgs as $saved_img) {
			$petad_id = Petad::where('temp_id','=',$saved_temp_id)->first();
			$petad_id = $petad_id->id;

			$saved_img->petad_id = $petad_id;
			$saved_img->save();


		}


		// Delete the saved_temp_id session...

		Session::forget('saved_temp_id');



		// send the user a verification email

		$user_id = $user->id; 

		$confirmation_code = str_random(30);

		$pbconfirm = new Userconfirmation;
		$pbconfirm->user_id = $user_id;
		$pbconfirm->confirmed = 0;
		$pbconfirm->confirmation_code = $confirmation_code;
		$pbconfirm->save();

		$pbname = "";

		$confirmation_code = array('confirmation_code' => $confirmation_code, 'pb_username' => $pbname);
		Mail::send('emails.welcome', $confirmation_code, function($message)
		{
			$pbemail = Input::get('email');
			$pbname = Input::get('name');

			$pb_user_name = $pbname;
			$pb_user_email = $pbemail;

			$message->from('info@popibay.com');
			$message->to($pb_user_email, $pb_user_name)->subject('Welcome to Popibay ');
		});

		return Redirect::to('/regsuccess');


	}
}