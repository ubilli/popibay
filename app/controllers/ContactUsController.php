<?php
/**
 *
 * @author Udeme-Samuel <udemesamuel256@gmail.com> <(Popibay Founder/Developer)>
 * @license no-license
 * @copyright Popibay.com © 2015 A Jobinpal Company
 * --------------------------------------------------------
 * 
 */
class ContactUsController extends \BaseController {

	public function send(){

		$name = Input::get('name');
		$email = Input::get('email');
		$subject = Input::get('subject');
		$message = Input::get('message');

		$data = array('name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message);

		Mail::send('emails.contactus', $data, function($message)
		{
			$name = Input::get('name');
			$email = 'info@popibay.com';
			$subject = Input::get('subject');

			$message->to($email, $name)->subject($subject);
		});

		return Redirect::to('/contact')->with(array('welcome_back' => 'Your message has been sent to our support center, you will soon get a response from us, Thank you.')); 
	}

}