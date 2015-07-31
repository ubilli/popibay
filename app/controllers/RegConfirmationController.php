<?php
/**
 * Registration Controller, Manages the confirmation link sent to the users 
 * who registered on Popibay.com/ for the first time.
 *
 * @author Udeme-Samuel <udemesamuel256@gmail.com> <(Popibay Founder/Developer)>
 * @license no-license
 * @copyright Popibay.com © 2015 A Jobinpal Company
 * --------------------------------------------------------
 * 
 */
class RegConfirmationController extends \BaseController {
	/**
	* Registration manages the confirmation link sent to the users 
 	* who registered for the first time.
	* ------------------------------------------------------------
	* 
	* @method confirm string 
	* 
	*/

	public function confirm($confirmation_code)
	{
		/**
		 * Check for confirmation link with code in the database 
		 * if true set the confirmation code field to null and 
		 * the confirmed feild to 1 then redirect to login page
		 * else redirect them to login with error message.
		 */

		if( $confirmed_code = Userconfirmation::where('confirmation_code', '=', $confirmation_code)->first() ){
			$user_id = $confirmed_code->user_id;
			$confirmed_code->user_id = $user_id; 
			$confirmed_code->confirmed = 1;
			$confirmed_code->confirmation_code = null;
			$confirmed_code->save(); 

			return Redirect::to('login')->with(array('welcome_back' => 'You have been confirmed please login.'));
			
			//return Redirect::to('login')->with(array('confirmed'=>'true','send_to'=>'chooseaccount'));
		}else{
			return Redirect::to('login')->with(array('message' => 'The verification link has expired or not correct. <a href="http://popibay.com">Register</a>'));
		}
		
	}
}