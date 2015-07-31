<?php
/**
 *
 * @author Udeme-Samuel <udemesamuel256@gmail.com> <(Popibay Founder/Developer)>
 * @license no-license
 * @copyright Popibay.com © 2015 A Jobinpal Company
 * --------------------------------------------------------
 * 
 */
class PetadController extends \BaseController {


	public function edit(){

		$pet_type = Input::get('pet-type');
		$edit_id = Input::get('viewmore-id');
		$pet_ad_title = Input::get('pet-ad-title');
		$pet_description = Input::get('pet-description');
		$pet_price = Input::get('pet-price');

		$petad = Petad::where('id','=', $edit_id)->first();
		$petad->pet_type = $pet_type;
		$petad->pet_ad_title = $pet_ad_title;
		$petad->pet_description = $pet_description;
		$petad->pet_price = $pet_price;
		$petad->save();

		return Redirect::to('petads/edit/?id='.$edit_id)-> with('welcome_back', 'Your pet ad has been succesfully updated.');

	}

}