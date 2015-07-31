<?php

class PopibayForgotPasswordController extends \BaseController {
	
	function remember(){

		// check the email address given
		// if true send an email address with confirmation link
		// then return back to change password page.
		// then return to login page.

		$pbinput = Input::all();
		$pbemail = Input::get('email');

		$pbrules = array(
			'email'  => 'required|email',
			);

		$pbvalidator = Validator::make($pbinput, $pbrules);

		if ($pbvalidator->passes()) {

			if ( User::where('email', '=', $pbemail)->count() == 1) {
				
			/**
        	 * Goto the mail and database now...
        	 * 
        	 */

        	$confirmation_code = str_random(30);

        	$pbuser = User::where('email', '=', $pbemail)->first();
			$pbuserid = $pbuser->id;
        	// goto the database...
        	$forgotpassword = new Forgotpassword;
        	$forgotpassword->user_id = $pbuserid;
        	$forgotpassword->confirmed = 0;
        	$forgotpassword->confirmation_code = $confirmation_code;
        	$forgotpassword->save();

			$confirmation_code = array('confirmation_code' => $confirmation_code);
			Mail::send('emails.resetpassword', $confirmation_code, function($message)
			{
				$pbemail = Input::get('email');

				$pb_user_email = $pbemail;

				$message->from('security@popibay.com');
				$message->to($pbemail)->subject('Password Reset Confirmation ');
			});

			}else{
				return Redirect::to('/forgotpassword')-> with(array('message' => 'This email does not exits in our records.'));
			}
 			
			return Redirect::to('/forgotpassword')->with(array('welcome_back' => 'Success, An email has been sent.'));
		}else{
			return Redirect::to('/forgotpassword')-> with(array('message' => 'Email is required.'));
		}

	}
}

