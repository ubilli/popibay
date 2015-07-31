@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
<div class="row">
  <div class="small-12 medium-12 large-12 columns">
    <?php
    $welcome_back = Session::get('welcome_back');
    $message = Session::get('message');
    if ( isset($welcome_back) ) {
      echo '
      <div data-alert class="alert-box success radius">
        <h6 class="text-center white-color">'.$welcome_back.'</h6>
        <a href="#" class="close">&times;</a>
      </div>
      ';
    }

    if ( isset($message) ) {
      echo '
      <div data-alert class="alert-box alert radius">
        <h6 class="text-center white-color">'.$message.'</h6>
        <a href="#" class="close">&times;</a>
      </div>       
      ';
    }
    ?>
  	<div class="post-box-content">
  		<div class="row">
  			<div class="small-12 medium-12 large-8 columns">
  				<h3 class="text-left main-color-no-hover"><i class="fa fa-cogs"></i> Settings</h3>
  				<hr>
          {{ Form::open(array('route' => 'Settings.account')) }}
          <div class="settings-form-box">
            <h5 class="text-center main-dark-color-no-hover"><i class="fa fa-info-circle"></i> Update your information.</h5>
            <hr>
            <label><h6 class="main-color-no-hover"><b><i class="fa fa-user"></i> Account type</b></h6></label>
            <select required name="account-type">
              <option value="">Account type</option>
              <option value="personal">Personal</option>
              <option value="business">Business</option>
            </select>
            <label><h6 class="main-color-no-hover"><b><i class="fa fa-envelope-o"></i> Email address</b></h6></label>
            <input name="email" required type="email" placeholder="Email address" class="pb-text-box" style="margin-bottom:20px !important;">
            <label><h6 class="main-color-no-hover"><b><i class="fa fa-user"></i> Name</b></h6></label>
            <input name="name" required type="text" placeholder="Name" class="pb-text-box" style="margin-bottom:20px !important;">
            <label><h6 class="main-color-no-hover"><b><i class="fa fa-user"></i> Phone number</b></h6></label>
            <input name="phone" required type="text" placeholder="Phone number" class="pb-text-box" style="margin-bottom:20px !important;">
            <label><h6 class="main-color-no-hover"><b><i class="fa fa-lock"></i> Password</b></h6></label>
            <input name="former-password" required type="password" placeholder="Former password" class="pb-text-box" style="margin-bottom:20px !important;">
            <input name="new-password" required type="password" placeholder="New password" class="pb-text-box" style="margin-bottom:20px !important;">
            <button style="margin-bottom: 50px !important;" class="wider-button pb-button-two-sides-all" type="submit"><i class="fa fa-info-circle white-text"></i> Update</button>
          </div>
          {{ Form::close() }} 
  			</div>
  			<div class="small-12 medium-12 large-4 columns">
  				<div class="dash-menu">
  					<h3 class="text-left main-color-no-hover"><i class="fa fa-tachometer"></i> Menu</h3>
  					<hr>
  					<ul class="no-bullet">
  						<li><a href="/dashboard"><h5 class="text-left grey-color"><i class="fa fa-tags orange-text"></i> My pet ads</h5></a></li>
  						<li><a href="/savedads"><h5 class="text-left grey-color"><i class="fa fa-bookmark orange-text"></i> Saved ads</h5></a></li>
  						<li><a href="/settings"><h5 class="text-left main-color-no-hover active-dashboard-menu-link"><i class="fa fa-cogs orange-text"></i> Settings</h5></a></li>
  						<li><a href="/logout"><h5 class="text-left grey-color"><i class="fa fa-sign-out orange-text"></i> Logout</h5></a></li>
  					</ul>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</div>
</div>
<script>
  /* The document title */
  document.title="Popibay || Dashboard || Settings";
</script>
@stop