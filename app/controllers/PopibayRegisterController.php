<?php
/**
 * Popibay is a classified pet ad marketplace.
 * ----------------------------------------------------------------
 * developer :: popibay technical team developers@popibay.com
 * company   :: A product of Jobinpal.
 */
class PopibayRegisterController extends BaseController {

	public function register(){
		/**
		 * Register form variables
		 * 
		 * @var $pbregisterName string "The name of the full new user"
		 * @var $pbregisterEmail string "The email of the new user"
		 * @var $pbregisterPassword string "The password of the new user"
		 * @var $pbregisterCpassword string "The confirmed password of the new users"
		 * 
		 */

		$pbregister = Input::all(); // Unique value for validation
		$pbregisterName = Input::get('name');
		$pbregisterEmail = Input::get('email');
		$pbregisterPassword = Input::get('password');
		$pbregisterCpassword = Input::get('password_confirmation');
		
		/**
		 * Validate the form variables
		 * 
		 * @var $pbregister string "All the input in the form..."
		 * @var $pbrules string "Our rules to validate the form"
		 *
		 */

		$pbrules = array(
			'name'   => 'required|min:2|max:32',
			'email'  => 'required|email',
			'password' => 'required|alpha_num|min:8'
			); // Unique value for validation

		/**
		 * Call the Validate class
		 * 
		 * @class Validate class "using the Validate::make()"
		 * @var $pbvalidator class "holds the class"
		 * 
		 */

		$pbvalidator = Validator::make($pbregister, $pbrules);

		/**
		 * Check if the new/anoynomous user passes the validation
		 * 
		 */

		if ($pbvalidator->passes()) {
        	
        	/**
        	 * Goto the mail and database now...
        	 * 
        	 */

        	//$confirmation_code = str_random(30);

        	$pbuser = new User;
			$pbuser->name = Input::get('name');
			$pbuser->email = Input::get('email');
			$pbuser->password = Hash::make(Input::get('password'));
			$pbuser->save();


			/* save cofirmation code */
			$pbemail = $pbuser->email;
			$pbname = $pbuser->name;

			$email = Input::get('email');

			$users = User::where('email', '=', $email)->first();

			$user_id = $users->id; // am not sure if it will return the user value...

			$confirmation_code = str_random(30);
			
			$pbconfirm = new Userconfirmation;
			$pbconfirm->user_id = $user_id;
			$pbconfirm->confirmed = 0;
			$pbconfirm->confirmation_code = $confirmation_code;
			$pbconfirm->save();

			/*$user = User::find($user_id);
			$username = $user->name;
			$useremail = $user->email;
			$userpassword = $user->password;
			$userlogintimes = $user->no_of_logins;
			///////////////////////////////////////////
			$user->name = $username;
			$user->email = $useremail;
			$user->password = $userpassword;
			$user->no_of_logins = 0;
			$user->confirmed = 1;
			$user->save();*/

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

			
			return Redirect::to('/regsuccess')->with(array($confirmation_code));
		}else{
			return Redirect::to('/register')-> with(array('message' => 'Password must contain uppercase and lower case characters.'));
		}
}
}