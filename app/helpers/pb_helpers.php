<?php

/**
 * Helpers functions of Popibay application structure
 *
 * @author Udeme-Samuel <udemesamuel256@gmail.com> <(Popibay Founder/Developer)>
 * @license no-license
 * @copyright Popibay.com © 2015 A Jobinpal Company
 * --------------------------------------------------------
 * 
 * Reference from http://stackoverflow.com/questions/14902589/where-do-i-put-laravel-4-helper-functions-that-can-display-flash-messages
 * -- answered by Usman on stackoverflow http://stackoverflow.com/users/656489/usman
 * 
 */



if ( !function_exists( 'pb_large_nav_bar' ) ) {
	/**
	 * Holds the large navigation bar in the dashbord layout UI
	 * 
	 * @method pb_large_nav_bar function "no content"
	 * 
	 * @param home_link path "link to the dashboard/home"
	 * @param pet_link  path "link to the dashboard/pets"
	 * @param collections_link  path "link to the dashboard/collections"
	 * @param admirers_link path "link to the dashboard/admirers"
	 * @param breeders_link path "link to the dashboard/breeders"
	 * @param market_link path "link to the dashboard/market"
	 * 
	 */


	function pb_large_nav_bar($home_link,$pet_link,$collections_link,$admirers_link,$breeders_link,$market_link){
		// work on this place @ night today... Thanks udeme.samuel
		// will work on that later...
	}
}



if ( !function_exists( 'pb_user_name' ) ) {
	

	function pb_user_name(){
		$pb_user_name = Session::get('pb_user_name');
		if( isset($pb_user_name) ){
			echo $pb_user_name;
		}

		if( empty($pb_user_name) ){
			echo 'Popibay User';
		}
	}
}


if ( !function_exists( 'pb_user_email' ) ) {
	

	function pb_user_email(){
		$pb_user_email = Session::get('pb_user_email');
		if( isset($pb_user_email) ){
			echo $pb_user_email;
		}

		if( empty($pb_user_email) ){
			echo 'nouser@popibay.com';
		}
	}
}


if ( !function_exists( 'pb_session_credentials' ) ) {
	

	function pb_session_credentials(){
		$pbUserTable = User::where('email', '=', $pbloginEmail)->first();
		$pb_user_name = $pbUserTable->name;
		$pb_user_name_saved = Session::put('pb_user_name',$pb_user_name);
		$pb_user_email_saved = Session::put('pb_user_email',$pbloginEmail);
	}
}



if ( !function_exists( 'userid' ) ) {
	

	function userid(){
		$pbUserTable = User::where('email', '=', Session::get('pb_user_email'))->first();
		$pbUserId = $pbUserTable->id;
		return $pbUserId;
	}
}


if ( !function_exists( 'small_thumbnail' ) ) {
	

	function small_thumbnail( /* http | https */ $protocol)
	{
		$pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		$pbuserid = $pbuser->id;
		$profilepic = Profilepic::where('user_id', '=', $pbuserid)->first();
		$profilepic_count = Profilepic::where('user_id', '=', $pbuserid)->count();

		/*function base_url($protocol){
			return $protocol."://".$_SERVER['HTTP_HOST']."/";
		}*/

		$base_url = $protocol."://".$_SERVER['HTTP_HOST']."/";

		if ( $profilepic_count == 0 ) {
			// echo default image path

			//echo base_url("http")."pb-assets/img/main_logo/profile_pic_default_30.png";
			echo $base_url."pb-assets/img/main_logo/profile_pic_default_30.png";
		}else{
			$profilepic_path = $profilepic->profilepic_path;

			$haystack = "";
			$needles = $profilepic_path;

			$profilepic_path = substr_replace($needles, $haystack, 0,7);
			$profilepic_name = $profilepic->profilepic_name;
			$profilepic_30 = $profilepic->profilepic_30;

			// remove 

			// echo base_url("http").$profilepic_path.$profilepic_30.$profilepic_name;
			echo $base_url.$profilepic_path.$profilepic_30.$profilepic_name;;
		}

	}
}


if ( !function_exists( 'medium_thumbnail' ) ) {
	

	function medium_thumbnail( /* http | https */ $protocol)
	{
		$pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		$pbuserid = $pbuser->id;
		$profilepic = Profilepic::where('user_id', '=', $pbuserid)->first();
		$profilepic_count = Profilepic::where('user_id', '=', $pbuserid)->count();

		/*function base_url($protocol){
			return $protocol."://".$_SERVER['HTTP_HOST']."/";
		}*/

		$base_url = $protocol."://".$_SERVER['HTTP_HOST']."/";

		if ( $profilepic_count == 0 ) {
			// echo default image path

			//echo base_url("http")."pb-assets/img/main_logo/profile_pic_default_30.png";
			echo $base_url."pb-assets/img/main_logo/profile_pic_default_60.png";
		}else{
			$profilepic_path = $profilepic->profilepic_path;

			$haystack = "";
			$needles = $profilepic_path;

			$profilepic_path = substr_replace($needles, $haystack, 0,7);
			$profilepic_name = $profilepic->profilepic_name;
			$profilepic_60 = $profilepic->profilepic_60;

			// remove 

			// echo base_url("http").$profilepic_path.$profilepic_30.$profilepic_name;
			echo $base_url.$profilepic_path.$profilepic_60.$profilepic_name;;
		}

	}
}


if ( !function_exists( 'large_thumbnail' ) ) {
	

	function large_thumbnail( /* http | https */ $protocol)
	{
		$pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		$pbuserid = $pbuser->id;
		$profilepic = Profilepic::where('user_id', '=', $pbuserid)->first();
		$profilepic_count = Profilepic::where('user_id', '=', $pbuserid)->count();

		/*function base_url($protocol){
			return $protocol."://".$_SERVER['HTTP_HOST']."/";
		}*/

		$base_url = $protocol."://".$_SERVER['HTTP_HOST']."/";

		if ( $profilepic_count == 0 ) {
			// echo default image path

			//echo base_url("http")."pb-assets/img/main_logo/profile_pic_default_30.png";
			echo $base_url."pb-assets/img/main_logo/profile_pic_default.png";
		}else{
			$profilepic_path = $profilepic->profilepic_path;

			$haystack = "";
			$needles = $profilepic_path;

			$profilepic_path = substr_replace($needles, $haystack, 0,7);
			$profilepic_name = $profilepic->profilepic_name;
			$profilepic_60 = $profilepic->profilepic_60;

			// remove 

			// echo base_url("http").$profilepic_path.$profilepic_30.$profilepic_name;
			echo $base_url.$profilepic_path.$profilepic_name;;
		}

	}
}


if ( !function_exists( 'small_businesslogo_thumbnail' ) ) {
	

	function small_businesslogo_thumbnail( /* http | https */ $protocol)
	{
		$pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		$pbuserid = $pbuser->id;
		$businesslogo = Businesslogo::where('user_id', '=', $pbuserid)->first();
		$businesslogo_count = Businesslogo::where('user_id', '=', $pbuserid)->count();

		/*function base_url($protocol){
			return $protocol."://".$_SERVER['HTTP_HOST']."/";
		}*/

		$base_url = $protocol."://".$_SERVER['HTTP_HOST']."/";

		if ( $businesslogo_count == 0 ) {
			// echo default image path

			//echo base_url("http")."pb-assets/img/main_logo/business_logo_default.png";
			echo $base_url."pb-assets/img/main_logo/business_logo_default_40.png";
		}else{
			$businesslogo_path = $businesslogo->businesslogo_path;

			$haystack = "";
			$needles = $businesslogo_path;

			$businesslogo_path = substr_replace($needles, $haystack, 0,7);
			$businesslogo_name = $businesslogo->businesslogo_name;
			$businesslogo_40 = $businesslogo->businesslogo_40;

			// remove 

			// echo base_url("http").$profilepic_path.$profilepic_30.$profilepic_name;
			echo $base_url.$businesslogo_path.$businesslogo_40.$businesslogo_name;
		}

	}
}


if ( !function_exists( 'medium_businesslogo_thumbnail' ) ) {
	

	function medium_businesslogo_thumbnail( /* http | https */ $protocol)
	{
		$pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		$pbuserid = $pbuser->id;
		$businesslogo = Businesslogo::where('user_id', '=', $pbuserid)->first();
		$businesslogo_count = Businesslogo::where('user_id', '=', $pbuserid)->count();

		/*function base_url($protocol){
			return $protocol."://".$_SERVER['HTTP_HOST']."/";
		}*/

		$base_url = $protocol."://".$_SERVER['HTTP_HOST']."/";

		if ( $businesslogo_count == 0 ) {
			// echo default image path

			//echo base_url("http")."pb-assets/img/main_logo/business_logo_default.png";
			echo $base_url."pb-assets/img/main_logo/business_logo_default_80.png";
		}else{
			$businesslogo_path = $businesslogo->businesslogo_path;

			$haystack = "";
			$needles = $businesslogo_path;

			$businesslogo_path = substr_replace($needles, $haystack, 0,7);
			$businesslogo_name = $businesslogo->businesslogo_name;
			$businesslogo_80 = $businesslogo->businesslogo_80;

			// remove 

			// echo base_url("http").$profilepic_path.$profilepic_30.$profilepic_name;
			echo $base_url.$businesslogo_path.$businesslogo_80.$businesslogo_name;
		}

	}
}


if ( !function_exists( 'medium_wider_businesslogo_thumbnail' ) ) {
	

	function medium_wider_businesslogo_thumbnail( /* http | https */ $protocol)
	{
		$pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		$pbuserid = $pbuser->id;
		$businesslogo = Businesslogo::where('user_id', '=', $pbuserid)->first();
		$businesslogo_count = Businesslogo::where('user_id', '=', $pbuserid)->count();

		/*function base_url($protocol){
			return $protocol."://".$_SERVER['HTTP_HOST']."/";
		}*/

		$base_url = $protocol."://".$_SERVER['HTTP_HOST']."/";

		if ( $businesslogo_count == 0 ) {
			// echo default image path

			//echo base_url("http")."pb-assets/img/main_logo/business_logo_default.png";
			echo $base_url."pb-assets/img/main_logo/business_logo_default_180.png";
		}else{
			$businesslogo_path = $businesslogo->businesslogo_path;

			$haystack = "";
			$needles = $businesslogo_path;

			$businesslogo_path = substr_replace($needles, $haystack, 0,7);
			$businesslogo_name = $businesslogo->businesslogo_name;
			$businesslogo_180 = $businesslogo->businesslogo_180;

			// remove 

			// echo base_url("http").$profilepic_path.$profilepic_30.$profilepic_name;
			echo $base_url.$businesslogo_path.$businesslogo_180.$businesslogo_name;
		}

	}
}


if ( !function_exists( 'large_businesslogo_thumbnail' ) ) {
	

	function large_businesslogo_thumbnail( /* http | https */ $protocol)
	{
		$pbuser = User::where('email', '=', Session::get('pb_user_email'))->first();
		$pbuserid = $pbuser->id;
		$businesslogo = Businesslogo::where('user_id', '=', $pbuserid)->first();
		$businesslogo_count = Businesslogo::where('user_id', '=', $pbuserid)->count();

		/*function base_url($protocol){
			return $protocol."://".$_SERVER['HTTP_HOST']."/";
		}*/

		$base_url = $protocol."://".$_SERVER['HTTP_HOST']."/";

		if ( $businesslogo_count == 0 ) {
			// echo default image path

			//echo base_url("http")."pb-assets/img/main_logo/business_logo_default.png";
			echo $base_url."pb-assets/img/main_logo/business_logo_default.png";
		}else{
			$businesslogo_path = $businesslogo->businesslogo_path;

			$haystack = "";
			$needles = $businesslogo_path;

			$businesslogo_path = substr_replace($needles, $haystack, 0,7);
			$businesslogo_name = $businesslogo->businesslogo_name;
			$businesslogo_180 = $businesslogo->businesslogo_180;

			// remove 

			// echo base_url("http").$profilepic_path.$profilepic_30.$profilepic_name;
			echo $base_url.$businesslogo_path.$businesslogo_name;
		}

	}
}

?>