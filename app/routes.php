<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('app_idea.index');
});

Route::get('login', function()
{
	return View::make('app_idea.login');
});

Route::post('login@processing', array(
  'uses' => 'PopibayLoginController@login',
  'as' => 'Popibay.login'
));

Route::get('register', function()
{
	return View::make('app_idea.register');
});

Route::post('registration@processing', array(
  'uses' => 'PopibayRegisterController@register',
  'as' => 'Popibay.register'
));

Route::get('regsuccess', function()
{
	return View::make('app_idea.registrationsuccess');
});

Route::get('confirm/registration/{confirmationCode}', [
'as' => 'confirmation_path',
'uses' => 'RegConfirmationController@confirm'
]);

Route::get('reseting/password/{confirmationCode}', [
'as' => 'password_reset',
'uses' => 'PasswordResetController@check'
]);

Route::get('forgotpassword', function()
{
	return View::make('app_idea.forgotpassword');
});

Route::post('forgotpassword@processing', array(
  'uses' => 'PopibayForgotPasswordController@remember',
  'as' => 'Popibay.forgotpassword'
));

Route::get('passwordreset', function()
{
	return View::make('app_idea.passwordreset');
});

Route::post('passwordreset@processing', array(
  'uses' => 'PasswordResetController@change',
  'as' => 'Popibay.passwordreset'
));

Route::get('terms', function()
{
	return View::make('app_idea.terms');
});

Route::get('faq', function()
{
	return View::make('petads_user_guest_dashboard.faq');
});

Route::get('safety', function()
{
	return View::make('petads_user_guest_dashboard.safety');
});

Route::get('s3', function()
{
	return View::make('petads_user_guest_dashboard.s3');
});

Route::get('contact', function()
{
	return View::make('petads_user_guest_dashboard.contact');
});

Route::post('contactus@sending', array(
  'uses' => 'ContactUsController@send',
  'as' => 'Contactus.sending'
));

Route::get('about', function()
{
	return View::make('petads_user_guest_dashboard.about');
}); // work on the about page...

Route::get('findfriends', function()
{
	return View::make('app_idea.findfriends');
});

Route::get('mediaicons', function()
{
	return View::make('app_idea.mediaicons');
});

/* to test new plugins or so */
Route::get('test', function()
{
	
	echo $url = parse_url(getenv("CLEARDB_DATABASE_URL")). "</br>";
	echo $host = $url["host"]. "</br>";
	echo $username = $url["user"]. "</br>";       
	echo $password = $url["pass"]. "</br>"; 
	echo $database = substr($url["path"], 1). "</br>"; 
});
/* /end to test plugins */

Route::get('petads', function()
{
	return View::make('petads_user_guest_dashboard.index');
});

Route::get('ourads', function()
{
	return View::make('petads_user_guest_dashboard.ourads');
});

Route::get('ourads/searching', function()
{
	return View::make('petads_user_guest_dashboard.ourads_searching');
});

Route::post('ourads@searching', array(
  'uses' => 'SearchController@inner_search',
  'as' => 'Ourads.search'
));

Route::post('ourads@searching_price', array(
  'uses' => 'SearchController@price_search',
  'as' => 'Ourads.search_price'
));

Route::get('ad', function()
{
	return View::make('petads_user_guest_dashboard.ad');
});

Route::get('petads/location', function()
{
	return View::make('petads_user_guest_dashboard.location');
});

Route::get('petads/new_location', function()
{
	return View::make('petads_user_guest_dashboard.location_new');
});

Route::get('petads/lga', function()
{
	return View::make('petads_user_guest_dashboard.lga');
});

Route::get('petads/images', function()
{
	return View::make('petads_user_guest_dashboard.images');
});

Route::get('petads/post', function()
{
	return View::make('petads_user_guest_dashboard.post');
});

/* secured pages only for members */

Route::get('dashboard', function()
{
	return View::make('petads_user_guest_dashboard.dashboard.index');
})->before('auth');

Route::get('savedads', function()
{
	return View::make('petads_user_guest_dashboard.dashboard.savedads');
})->before('auth');

Route::get('savedad/delete', function()
{
	return View::make('petads_user_guest_dashboard.dashboard.delete_savedad');
})->before('auth');

Route::get('settings', function()
{
	return View::make('petads_user_guest_dashboard.dashboard.settings');
})->before('auth');

Route::post('settings@updating', array(
  'uses' => 'SettingsController@update',
  'as' => 'Settings.account'
));

Route::get('logout', function()
{
	Auth::logout();
	return View::make('petads_user_guest_dashboard.dashboard.logout');
})->before('auth');

Route::get('petads/edit', function()
{
	
	return View::make('petads_user_guest_dashboard.dashboard.edit');
})->before('auth');

Route::get('petads/edit/delete/image', function()
{
	$id = Input::get('id');
	$petad_id = Input::get('petad_id');
	
	$petimage = Petimage::where('id','=',$id)->first();
	
	$destinationPath = 'public/pb-uploads/pet_images/'; // upload path
	$thumbnail_path = 'public/pb-uploads/pet_images_thumbnail/';
	$image_name = $petimage->image_name;

	File::delete($destinationPath.$image_name);
	File::delete($thumbnail_path.$image_name);

	$petimage->delete();

	return Redirect::to('petads/edit/?id='.$petad_id)->with('welcome_back','You have successfully deleted an image.');

})->before('auth');

Route::post('petad@edit', array(
  'uses' => 'PetadController@edit',
  'as' => 'Petad.edit'
));

Route::get('petads/delete', function()
{
	return View::make('petads_user_guest_dashboard.dashboard.delete');
})->before('auth');


Route::get('petads/delete/yes/', function()
{
	$id = Input::get('id');

	if ( empty($id) )  {
	 	return Redirect::to('dashboard')->with('message','You have deleted nothing.');
	 }
	if ( isset($id) )  {
	 	
	 	$petad = Petad::where('id','=',$id)->first();
	 	$petad->delete();

	 	return Redirect::to('dashboard')->with('welcome_back','You have successfully deleted a pet ad.');
	 }  
})->before('auth');

Route::get('ourads/viewmore', function()
{
	return View::make('petads_user_guest_dashboard.dashboard.viewmore');
})->before('auth');

Route::post('viewmore@replying', array(
  'uses' => 'ViewmoreController@replying',
  'as' => 'Viewmore.reply'
));

Route::post('viewmore@reporting', array(
  'uses' => 'ViewmoreController@reporting',
  'as' => 'Viewmore.report'
));

Route::get('viewmore', function()
{
	return View::make('petads_user_guest_dashboard.viewmore');
});

Route::get('savingad', function()
{
	return View::make('petads_user_guest_dashboard.savingad');
});

Route::get('viewmore/save/yes/', function()
{
	$petad_id = Input::get('id'); // !!!important
	$sess_email = Session::get('pb_user_email');
	$user_id_main = User::where('email','=',$sess_email)->first();
	$user_id = $user_id_main->id; // !!!important

	if ( isset($petad_id) )  {
	 	
	 	// populate the save ads table

	 	// check if the petad has not been saved before...
	 	$savedads_count = Savead::where('petad_id','=',$petad_id)->count();

	 	if ( $savedads_count >= 1 ) {
	 		
	 		return Redirect::to('savingad?id='.$petad_id)->with('message','You have have saved this pet ad already.');
	 	}

	 	if ( $savedads_count == 0 ) {

	 		$Petad = Petad::where('id',$petad_id)->first();
	 		$savead_categories = $Petad->categories;
	 		$savead_location = $Petad->location;
	 		$savead_area = $Petad->area;
	 		$savead_pet_type = $Petad->pet_type;
	 		$savead_pet_ad_title = $Petad->pet_ad_title;
	 		$savead_description = $Petad->pet_description;
	 		$savead_pet_price = $Petad->pet_price;
	 		
	 		$savead = new Savead;
	 		$savead->petad_id = $petad_id;
	 		$savead->user_id = $user_id;
	 		$savead->categories = $savead_categories;
	 		$savead->location = $savead_location;
	 		$savead->area = $savead_area;
	 		$savead->pet_type = $savead_pet_type;
	 		$savead->pet_ad_title = $savead_pet_ad_title;
	 		$savead->pet_description = $savead_description;
	 		$savead->pet_price = $savead_pet_price;
	 		$savead->save();

	 		return Redirect::to('savingad?id='.$petad_id)->with('welcome_back','You have successfully saved a pet ad.');

	 	}

	 	
	 }  
})->before('auth');

Route::get('viewmore/unsave/yes/', function()
{
	$petad_id = Input::get('id'); // !!!important
	$sess_email = Session::get('pb_user_email');
	$user_id_main = User::where('email','=',$sess_email)->first();
	$user_id = $user_id_main->id; // !!!important

	if ( isset($petad_id) )  {
	 	
	 	// delete the saved ad...

		$savead = Savead::where('petad_id','=',$petad_id)->first();
		$savead_id = $savead->petad_id;
		$userid = Savead::where('user_id','=',$user_id)->first();
		$userid_id = $userid->user_id;

		$unsavead = Savead::where('petad_id','=',$petad_id)->orWhere('user_id','=',$user_id)->first();

		if ( ($savead_id == $petad_id ) && ($userid_id == $user_id ) ) {
			
			$savead->delete();
			return Redirect::to('savingad?id='.$petad_id)->with('welcome_back','You have successfully unsaved this pet ad.');
		}

	 }  
})->before('auth');

Route::get('unsavead', function()
{
	return View::make('petads_user_guest_dashboard.unsavead');
})->before('auth');



/* other routes */
Route::post('imageupload@processing', array(
  'uses' => 'ImageUploadController@image',
  'as' => 'Fileupload.image'
));

Route::post('imageupload@editing', array(
  'uses' => 'ImageUploadController@edit',
  'as' => 'Fileupload.image_edit'
));

Route::post('imageupload@deleting', array(
  'uses' => 'ImageUploadController@deleteimage',
  'as' => 'Fileupload.deleteimage'
));

Route::post('post@processing', array(
  'uses' => 'PostController@petad',
  'as' => 'Post.petad'
));



/* /end secured pages only for members */

/**
 * Authentify the dashboard pages except 
 * petstorefront page.
 * -------------------------------------
 * New update change (dashboard) to (dashboards)
 * due to new update for classified ads section on the app.
 */


Route::get('dashboards', function()
{
	return View::make('real_idea.index');
})->before('auth');

Route::get('dashboards/mypets', function()
{
	return View::make('real_idea.mypets');
})->before('auth');

Route::get('dashboards/addpet', function()
{
	return View::make('real_idea.addpet');
})->before('auth');

Route::post('addpet@processing', array(
  'uses' => 'AddPetController@pet',
  'as' => 'Addpet.pet'
));

Route::get('dashboards/market', function()
{
	return View::make('real_idea.market');
})->before('auth');

Route::get('dashboards/upload', function()
{
	return View::make('real_idea.uploadimage');
})->before('auth');

Route::get('dashboards/upload@businesslogo', function()
{
	return View::make('real_idea.uploadimage@businesslogo');
})->before('auth');

Route::get('dashboards/upload@coverphoto', function()
{
	return View::make('real_idea.uploadimage@coverphoto');
})->before('auth');

Route::get('dashboards/reports', function()
{
	return View::make('real_idea.reports');
})->before('auth');

Route::get('dashboards/settings', function()
{
	return View::make('real_idea.settings');
})->before('auth');

Route::get('dashboards/account', function()
{
	return View::make('real_idea.account');
})->before('auth');

Route::post('uploading@processing', array(
  'uses' => 'UploadingController@profilepic',
  'as' => 'Uploading.profilepic'
));

Route::post('uploading@processing', array(
  'uses' => 'UploadingController@business_logo',
  'as' => 'Uploading.businesslogo'
));

Route::post('uploading@processing', array(
  'uses' => 'UploadingController@addpetfiles',
  'as' => 'Uploading.addpetfiles'
));

/**
 * Give access to pestorefront page
 */

Route::get('petstorefront_backup', function()
{
	return View::make('real_idea.petstorefront');
});

Route::get('petstorefront', function()
{
	return View::make('real_idea.petstorefront2');
});

Route::get('admin@login', function()
{
	return View::make('admin.index');
});

Route::get('admin@dashboard', function()
{
	return View::make('admin.dashboard');
});

Route::get('admin@allusers', function()
{
	return View::make('admin.allusers');
});

Route::get('admin@petsellers', function()
{
	return View::make('admin.petsellers');
});

Route::get('admin@petbuyers', function()
{
	return View::make('admin.petbuyers');
});

Route::get('admin@petonline', function()
{
	return View::make('admin.petonline');
});

Route::get('style', function()
{
	return View::make('style');
});

Route::get('db', function()
{
	Schema::create('petad_images', function($table)
	{
		 $table->increments('id');
		 $table->integer('petad_id');
		 $table->integer('petimages_id');

		 $table->foreign('petad_id')->references('id')->on('petads');
		 $table->foreign('petimages_id')->references('id')->on('pet_images');
		 $table->timestamps();
	});
});

Route::get('seed', function()
{
	$faker = Faker\Factory::create();

	// seed into the pet ads table for working on the page...

	/*
	'user_id'
	'categories'
	'location'
	'area'
	'pet_type'
	'pet_ad_title'
	'pet_description'
	'pet_price'
	'negotiation'
	'breeder'
	*/

	$pet_ad_user_id = $faker->randomDigit;
	$pet_ad_cat = $faker->word;
	$pet_ad_images = '';
	$pet_ad_location = $faker->state;
	$pet_ad_area = $faker->city;
	$pet_ad_pet_type = $faker->word;
	$pet_ad_pet_ad_title = $faker->word;
	$pet_ad_pet_desc = $faker->text(200);
	$pet_ad_pet_price = $faker->numberBetween(100000, 300000);
	$pet_ad_pet_neg = $faker->word;
	$pet_ad_pet_breeder = $faker->word;
	$pet_ad_post_status = "pending";

	for ($i=0; $i < 7; $i++) {
		
		$pet_ad = new Ourads;
		$pet_ad->user_id = $pet_ad_user_id;
		$pet_ad->file_id = $pet_ad_images;
		$pet_ad->categories = $pet_ad_cat;
		$pet_ad->location = $pet_ad_location;
		$pet_ad->area = $pet_ad_area;
		$pet_ad->pet_type = $pet_ad_pet_type;
		$pet_ad->pet_ad_title = $pet_ad_pet_ad_title;
		$pet_ad->pet_description = $pet_ad_pet_desc;
		$pet_ad->pet_price = $pet_ad_pet_price;
		$pet_ad->negotiation = $pet_ad_pet_neg;
		$pet_ad->save();
	}
});

// method one for filters
// Route::get('filter', function()
// {
// 	return View::make('filter');
// })->before('auth');

Route::get('filter', ['before' => 'auth', function()
{
	return View::make('filter');
}]);

Route::get('inbound', function()
{
	
	$test = Input::get('mandrill_events');
	dd($test);

});

