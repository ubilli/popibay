<?php
/**
 *
 * @author Udeme-Samuel <udemesamuel256@gmail.com> <(Popibay Founder/Developer)>
 * @license no-license
 * @copyright Popibay.com © 2015 A Jobinpal Company
 * --------------------------------------------------------
 * 
 */
class SettingsController extends \BaseController {


	// this is for the viewmore page for registered members...
	public function update(){

		$account_type = Input::get('account-type');
		$email = Input::get('email');
		$name = Input::get('name');
		$phone = Input::get('phone');
		$former_password = Input::get('former-password');
		$new_password = Input::get('new-password');
		$sess_email = Session::get('pb_user_email');

		$fake_sess_email = "udemesamuel256@ymail.com";


		// check if the former password matches the one in the database...

		$account = Account::where('email','=',$sess_email)->first();
		$user_password = $account->password;
		$existing_phone_number_two = $account->phone_number_two;
		$existing_phone_privacy = $account->phone_privacy;

		if ( $former_password == $user_password ) {

			$account->name = $name;
			$account->account_type = $account_type;
			$account->phone_number = $phone;
			$account->phone_number_two = $existing_phone_number_two;
			$account->phone_privacy = $existing_phone_privacy;
			$account->email = $email;
			$account->password = $new_password;
			$account->save();

			// for security purpose mail the user... do that in later version...

			return Redirect::to('/settings')->with(array('welcome_back' => 'Your account has been succesfully updated.')); 
		}else{
			return Redirect::to('/settings')->with(array('message' => 'Your password does not match with the one on our record.'));
		}

	}

}