<?php

class PasswordResetController extends \BaseController {

	public function check($confirmation_code){

		if( $confirmed_code = Forgotpassword::where('confirmation_code', '=', $confirmation_code)->first() ){
			
			// delete the row of information.

			$user_id = $confirmed_code->user_id;

			// hash the email_id to prevent hacks

			Session::put('email_id', $user_id);

			Forgotpassword::where('user_id', '=', $user_id)->delete();

			
			return Redirect::to('/passwordreset')->with(array('welcome_back' => 'You have been confirmed please reset your password.','email_id' => $user_id));
			//return Redirect::to('login')->with(array('confirmed'=>'true','send_to'=>'chooseaccount'));
		}else{
			return Redirect::to('/forgotpassword')->with(array('message' => 'The verification link is expired or not correct. <a href="http://popibay.com/register">Register</a>'));
		}
	}

	public function change(){

		$allinputs = Input::all();
		$password = Input::get('password');
		$email_id = Input::get('email_id');

		$pbrules = array(
			'password' => 'required|alpha_num|min:8'
			);

		$pbvalidator = Validator::make($allinputs, $pbrules);

		if ($pbvalidator->passes()) {
        	
        	if ($email_id == null) {
        		return Redirect::to('/passwordreset')->with(array('message' => 'No email address is associated with this password reset request, and it has not been confirmed, Goto <a href="/forgotpassword">Forgot password</a> to add your email address.'));
        	}

        	$user = User::where('id', '=', $email_id)->first();

        	//dd($user);

			$user_name = $user->name;
			$user_email = $user->email;
        	
        	//$pbuser = new User;
			$user->name = $user_name;
			$user->email = $user_email;
			$user->password = Hash::make($password);
			$user->save();

			// mail user
			// $confirmation_code = array();
			$data = array();
			Mail::send('emails.passwordnotification', $data, function($message)
			{
				$email_id = Input::get('email_id');
				$user = User::where('id', '=', $email_id)->first();
				$user_name = $user->name;
				$user_email = $user->email;

				$pbemail = $user_email;

				$pb_user_email = $pbemail;

				$message->from('alerts@popibay.com');
				$message->to($pb_user_email, $user_name)->subject('Your password has been reseted.');
			});


			
			return Redirect::to('/login')->with(array('welcome_back' => 'Password sucessfully changed, please login.'));
		}else{
			return Redirect::to('/passwordreset')-> with(array('message' => 'Password must contain uppercase and lower case characters.'));
		}

	}

}
