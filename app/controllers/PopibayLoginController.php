<?php

class PopibayLoginController extends \BaseController {
	
	public function logins(){
		
		$pblogin = Input::all(); // Unique value for validation
		$pbloginEmail = Input::get('email');
		$pbloginPassword = Input::get('password');

		// check if user has confirmed his/her email... 
		$pbuser = User::where('email', '=', $pbloginEmail)->first();
		$pbuserid = $pbuser->id;

		//echo "User id". $pbuserid;
		

		if (Auth::attempt(array('email' => $pbloginEmail, 'password' => $pbloginPassword)))
		{
			$pbUserTable = User::where('email', '=', $pbloginEmail)->first();
			$pb_user_name = $pbUserTable->name;
			$pb_user_name_saved = Session::put('pb_user_name',$pb_user_name);
			$pb_user_email_saved = Session::put('pb_user_email',$pbloginEmail);

			//save the incremental number of logins.

			$number_of_login = new Numberoflogins;
			$per_user_login = Numberoflogins::where('user_id', '=', $pbuserid)->count();
			$existingRow = Numberoflogins::where('user_id', '=', $pbuserid);
			$login_times = $number_of_login->no_of_logins;

			echo "login_times" . "=" . $login_times;

			if ( $per_user_login == 0 ) {
				// insert data...
				$login_times = $number_of_login->no_of_logins;

				$number_of_logins = new Numberoflogins;
				$number_of_logins->user_id = $pbuserid;
				$number_of_logins->increment('no_of_logins');
				$number_of_logins->save();
			}else{
				// update data...
				/*$number_of_logins = $existingRow;
				$number_of_logins->user_id = $pbuserid;
				$number_of_logins->no_of_logins = $login_times + 1;*/
				
				/*$Member = User::where('email', '=', $pbloginEmail)->first();
				$Member->user_id = $pbuserid;
				$Member->increment(1);
				$Member->save();*/
			}

			Session::put('session_email', $pbloginEmail);
			//return Redirect::intended('dashboard'); 

		}else{
			return Redirect::to('/login')-> with('message', 'Your username or password combination was incorrect');
		} 
	}


	public function login(){

    $rules = [
        'email' => 'required|exists:users',
        'password' => 'required'
    ];

    $input = Input::only('email', 'password');

    $validator = Validator::make($input, $rules);

    if($validator->fails())
    {
    	//dd($input);
        return Redirect::back()->withInput()->with($validator);
    }

    $credentials = [
        'email' => Input::get('email'),
        'password' => Input::get('password')
    ];

    // check if user is authentic
    $valid = Auth::validate($credentials);
    if ( ! $valid)
    {
    	//dd($input);
        return Redirect::back()
                ->withInput()
                ->with([
                    'message' => 'We were unable to sign you in. Incorrect email/password combination!'
                ]);
    }

    // user is valid, lets check a few things
    $user = User::where('email', '=', Input::get('email'))->first();
    $user_id = $user->id;

    $get_user_id = Userconfirmation::where('user_id', '=', $user_id)->first();
    $user_confirm = $get_user_id->confirmed;
    // check if user has confirmed their account
    if ( $user_confirm != 1 )
    {
        return Redirect::back()
                ->withInput()
                ->with([
                    'message' => 'You must confirm your account before you can use your dashboard.'
                ]);
    }


    // Store your session variables
    Session::put('pb_user_name',$user->name);
    Session::put('pb_user_email',Input::get('email'));

    // incase you decide to use 'Remember me?' checkbox on login
    $remember = Input::get('remember');

    // login the user
    Auth::login($user,$remember);
    // redirect to the page they were trying to view, or redirect to index
    return Redirect::intended('dashboard');

    // Use this if you want to redirect to a named route instead
    // return Redirect::intended(route('home'));

}
}