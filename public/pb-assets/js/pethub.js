jQuery(document).ready(function () 
{
	$( "#pb-msg-setting-list" ).click(function() 
	{
		$( "#pb-msg-setting-list" ).css("box-shadow", "none");
	  $( "#dropdown" ).fadeToggle( "fast", "linear",function()
	  	{
	  		$( "#pb-msg-setting-list" ).css("box-shadow", "0px 0px 2px grey");
	  	});
	  
	});

	/* this is for the message button */
	$( "div#pb-msg-setting" ).click(function() 
	{
		$( "#pb-msg-setting" ).css("box-shadow", "none");
	  $( "#messages" ).fadeToggle( "fast", "linear",function()
	  	{
	  		$( "div#pb-msg-setting" ).css("box-shadow", "0px 0px 2px grey");
	  	});
	});

	$('#pb-msg-setting-user-icon').click(function()
	{
		document.location="myaccount";
	});

	/* this for the profile pic hover */
	$('#pb-dashboard-user-image,#pb-dashboard-user-profile-img,#pb-dashboard-user-profile-hover,#pb-dashboard-user-change-pic-link').hover(function()
		{
			$( '#pb-dashboard-user-profile-hover,#pb-dashboard-user-change-pic-link' ).show();
		});

	$('#pb-dashboard-user-image').mouseout(function()
		{
			$( '#pb-dashboard-user-profile-hover,#pb-dashboard-user-change-pic-link' ).hide();
		});

	
});