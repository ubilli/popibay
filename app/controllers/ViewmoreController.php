<?php
/**
 *
 * @author Udeme-Samuel <udemesamuel256@gmail.com> <(Popibay Founder/Developer)>
 * @license no-license
 * @copyright Popibay.com © 2015 A Jobinpal Company
 * --------------------------------------------------------
 * 
 */
class ViewmoreController extends \BaseController {


	// this is for the viewmore page for registered members...
	public function replying(){

		// $pet_ad_id = Input::get('petad-id');
		$subject = Input::get('subject');
		$name = Input::get('name');
		$email = Input::get('email');
		$message = Input::get('message');
		$viewmore_id = Input::get('viewmore_id');


		$Repliedmessage = new Repliedmessage;
		$Repliedmessage->petad_id = $viewmore_id;
		$Repliedmessage->name = $name;
		$Repliedmessage->email = $email;
		$Repliedmessage->subject = $subject;
		$Repliedmessage->message = $message;
		$Repliedmessage->save();

		// mail the user of the email...

		$data = array('email' => $email, 'message' => $message);

		Mail::send('emails.repliedmessage', $data, function($message)
		{
			$name = Input::get('name');
			$email = Input::get('email');

			$message->from('notifications@popibay.com');
			$message->to($email, $name)->subject('An intrested buyer for your pet ad.');
		});

		return Redirect::to('/viewmore?id='.$viewmore_id)->with(array('welcome_back' => 'Your message has been sent to the seller.')); 


	}


	public function reporting(){

		// $pet_ad_id = Input::get('petad-id');
		$subject = Input::get('subject');
		$name = Input::get('name');
		$email = Input::get('email');
		$message = Input::get('message');
		$viewmore_id = Input::get('viewmore_id');
		$reason = Input::get('reason');


		$report = new Report;
		$report->petad_id = $viewmore_id;
		$report->name = $name;
		$report->email = $email;
		$report->message = $message;
		$report->reason = $message;
		$report->save();

		return Redirect::to('/viewmore?id='.$viewmore_id)->with(array('welcome_back' => 'Thanks for reporting, we will look into this issue.')); 


	}

}