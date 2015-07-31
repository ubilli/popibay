$(document).ready(function() {
        $('#lightSlider').lightSlider({
            gallery:true,
            item:1,
            thumbItem:5,
            slideMargin: 20,
            speed:500,
            auto:false,
            loop:true,
            adaptiveHeight:true,
            // utoWidth:true,
            enableTouch:true,
            prevHtml: '<i class="fa fa-chevron-circle-left shadow fa-3x white-text"></i>',
            nextHtml: '<i class="fa fa-chevron-circle-right shadow fa-3x white-text"></i>',
            onSliderLoad: function() {
                $('#lightSlider').removeClass('cS-hidden');
            }     
        });
    });


show_phonenumber = $("#show-number-button");

show_phonenumber.click(function(){
  
  default_text = "Contact number.";
  hidden_phonenumber = $("#pet-ad-phone");
  hidden_phonenumber_value = $("#pet-ad-phone").val();
  response_box = $('#response-phone-number');
  whatsapp_icon = "<i class='fa fa-whatsapp'></i>";
  phone_icon = "<i class='fa fa-phone-square'></i>";

  // check if the input value is empty or null...
  if ( hidden_phonenumber.val().length == 0 ) {
    response_box.html(default_text);
  }else{
    response_box.html(phone_icon + ' ' + whatsapp_icon + ' ' + hidden_phonenumber_value);
  }
});






/*var myDropzone = new Dropzone(".dropzone", { url: "http://localhost:8000/imageupload@processing"});

Dropzone.options.myDropzone = {
  success:function(){
    alert();
  }
};*/



  var myDropzone = new Dropzone(".dropzone");

  Dropzone.options.myDropzone = false;
  myDropzone.on("success", function(event) {
    
    var image_box = $('.image-upload-box');

    var dropzone = $('.dropzone');

    var alert_box = $('.alert-box');

    var hidden_input_box = $('.hidden-inputs');

    var server_responses_box = $('.server-responses-hidden-inputs');

    var client_success_responses = $('.client-upload-responses');

    // extra data for image upload page...

    var hidden_input_box = $('#next-box');

    response_text = "<div data-alert class='alert-box success radius bolder-text'><i class='fa fa-check'></i> The image has been uploaded sucessfully.<a href='#' class='close'>&times;</a></div>";

    // dropzone.fadeIn('slow').before(response_text);

    client_success_responses.fadeIn('slow').html(response_text);

    setTimeout(function(){
      var alert_box = $('.alert-box');
      alert_box.fadeOut('slow');
    },2000);

   var file_name_id = event.name;

   // hidden_input_box.append('<input type="hidden" value="'+ file_name_id +'" name="images" />');

   var server_response = event.xhr.response;
   server_responses_box.html(server_response);
    // append the hidden input box.
    // hidden_input_box.append(event.xhr.responseText);

  });


  myDropzone.on("removedfile", function(event) {
    removed_file = event.name;
    removed_file_hidden_input = $("[value='"+ removed_file +"']");
    removed_file_hidden_input.detach();
    var client_success_responses = $('.client-upload-responses');

    var image_upload_token_value = $('#image-upload-token').val();

    $.ajax({
     url: "http://localhost:8000/imageupload@deleting",
     global: false,
     method:'post',
     data:{'removed_image':removed_file}
     // data:{'image_upload_token':image_upload_token_value}
    });


    var image_box = $('.image-upload-box');

    var dropzone = $('.dropzone');

    var alert_box = $('.alert-box');

    var hidden_input_box = $('.hidden-inputs');

    response_text = "<div data-alert class='alert-box alert radius bolder-text'><i class='fa fa-times'></i> Image deleted.<a href='#' class='close'>&times;</a></div>";

    // dropzone.fadeIn('slow').before(response_text);
    client_success_responses.fadeIn('slow').html(response_text);

    setTimeout(function(){
      var alert_box = $('.alert-box');
      alert_box.fadeOut('slow');
    },2000);
  });

  myDropzone.on("maxfilesreached", function(event) {
    var image_box = $('.image-upload-box');

    var dropzone = $('.dropzone');

    var alert_box = $('.alert-box');

    var hidden_input_box = $('.hidden-inputs');

    var client_success_responses = $('.client-upload-responses');

    response_text = "<div data-alert class='alert-box alert radius bolder-text'><i class='fa fa-times'></i> Error, you have uploaded more than 5 images.<a href='#' class='close'>&times;</a></div>";

    // dropzone.fadeIn('slow').before(response_text);

    client_success_responses.fadeIn('slow').html(response_text);

    setTimeout(function(){
      var alert_box = $('.alert-box');
      alert_box.fadeOut('slow');
    },2000);
  });


  myDropzone.on("error", function(event) {
    var image_box = $('.image-upload-box');

    var dropzone = $('.dropzone');

    var alert_box = $('.alert-box');

    var hidden_input_box = $('.hidden-inputs');

    var client_success_responses = $('.client-upload-responses');

    response_text = "<div data-alert class='alert-box alert radius bolder-text'><i class='fa fa-times'></i> An error occured, while uploading your image.<a href='#' class='close'>&times;</a></div>";

    // dropzone.fadeIn('slow').before(response_text);

    client_success_responses.fadeIn('slow').html(response_text);

    setTimeout(function(){
      var alert_box = $('.alert-box');
      alert_box.fadeOut('slow');
    },2000);

  });



/*var add = $('#add');
var new_phone_number = $('#new-phone-number');
var remove = $('#remove');

var new_phone_number_html = '<div id="new-phone-number" class="large-12 columns-phone-add"><div class="row collapse"><div class="small-10 columns"><input type="text" placeholder="New phone number" class="search-input-style-categories-box"></div><div class="small-2 columns"><a id="remove" href="#" class="button tiny upload-image-button"><i class="fa fa-minus fa-lg"></i></a></div></div></div>';

add.click(function(){
  var add = $('#add');
  var new_phone_number = $('#new-phone-number');
  var remove = $('#remove');
  var increment = 1;
  var new_phone_number_html = '<input id="number_of_clicks_+'increment'+" type="hidden" value="increment" /><div id="new-phone-number" class="large-12 columns-phone-add"><div class="row collapse"><div class="small-10 columns"><input type="text" placeholder="New phone number" class="search-input-style-categories-box"></div><div class="small-2 columns"><a id="remove" href="#" class="button tiny search-button-style"><i class="fa fa-minus fa-lg"></i></a></div></div></div>';
  var phone_number_box = $('.added-phone-numbers');

  add.after(new_phone_number_html);
});*/

/*pet-is-negotiable
personal
business*/


//This code is working but has a few bug to work on.
/*window.onbeforeunload = function(){
// Check the state of the form

var form_changed = $('#main-form').submit();
if(form_changed == false){
  return true;
}else{
  return false;
}
};*/


/* This for the password confirmation field */

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


