@extends('template.master_appidea')
@section('content')
<style type="text/css">
  .content {
    background: none repeat scroll 0% 0% rgba(230, 227, 227, 1);
}

#inline-footer-links>li>a{
  color: rgba(104, 104, 17, 1);
  font-family: 'Montserrat_Alternates';
}

#inline-footer-links>li>a:hover{
  color: #cccc33;
}

#inline-footer-links>li>a:focus{
  color: #cccc33;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Gudea";
}

#ymail-ico,
#gmail-ico,
#wmail-ico,
#mmail-ico,
#aolmail-ico{
  color: #cccc33;
  cursor: pointer;
}

#ymail-ico:hover{
    color: purple;
    -webkit-transition: 250ms linear color;
  -moz-transition: 250ms linear color;
  transition: 250ms linear color;
}

#gmail-ico:hover{
    color: red;
    -webkit-transition: 250ms linear color;
  -moz-transition: 250ms linear color;
  transition: 250ms linear color;
}

#wmail-ico:hover{
    color: blue;
    -webkit-transition: 250ms linear color;
  -moz-transition: 250ms linear color;
  transition: 250ms linear color;
}

#mmail-ico:hover{
    color: blue;
    -webkit-transition: 250ms linear color;
  -moz-transition: 250ms linear color;
  transition: 250ms linear color;
}

#aolmail-ico:hover{
    color: rgba(16, 237, 16, 1);
    -webkit-transition: 250ms linear color;
  -moz-transition: 250ms linear color;
  transition: 250ms linear color;
}

#tell-but {
    font-family: "Montserrat_Alternates";
    background: #898920;
}

#pb-tell-section{
  color: #cccc33;
}

</style>
<div class="content">
<div class="row">
  <div class="small-12 small-centered large-12 large-centered columns">
    <div id="email-con-box" class="[radius round] go-up-a-bit-20">
      <h3 id="pb-tell-section" class="text-center"> Tell a Friend </h3>
      <h5 class="text-center">
       Hi user, tell a friend about popibay and its awesome 
       service to you and your pets. 
      </h5>
      <h6 class="text-center"><b>Import Contacts</b></h6>
      <div class="row">
      <div class="small-12 medium-12 large-12 columns">      
          <ul class="inline-list">
            <li>
            <span data-tooltip class="has-tip grow" title="Yahoo mail">
            <i id="ymail-ico" class="fa fa-yahoo fa-3x"></i></li>
            </span>
            <li>
            <span data-tooltip class="has-tip grow" title="Google mail">
            <i id="gmail-ico" class="fa fa-google fa-3x"></i></li>
            </span>
            <li>
            <span data-tooltip class="has-tip grow" title="Windows mail">
            <i id="wmail-ico" class="fa fa-windows fa-3x"></i></li>
            </span>
            <li>
            <span data-tooltip class="has-tip grow" title="Mail.com mail">
            <i id="mmail-ico" class="fa fa-envelope fa-3x"></i></li>
            </span>
            <li>
            <span data-tooltip class="has-tip grow" title="AOL mail">
            <i id="aolmail-ico" class="fa fa-envelope-o fa-3x"></i></li>
            </span>
          </ul>
        </div>
      </div>
      <h6 class="text-center"><b>or</b></h6>
      <form data-abide method="post" action="">
        <div class="row">
          <div class="large-6 large-centered columns">
            <div class="row collapse">
            <!-- Udeme note that this part of the code is not working... -->
            {{ Form::open(array()) }}
              <div class="small-10 columns email-field">
                <input name="friendemail" required type="email" placeholder="Your friend email address ">
                <small class="error">An email address is required.</small>
              </div>
              <div class="small-2 columns">
                <!-- <a href="#" class="button postfix" type="submit">Go</a> -->
                <button id="tell-but" type="submit" class="button postfix [radius round]">Send</button>
              </div>
              {{ Form::close() }}
            </div>
          </div>
      </form>
      <h5 class="text-center"><a href="" class="button [radius round]"> Goto my page </a></h5>
    </div>
  </div>
</div>
<script>
  /* The document title */
  document.title="Tell a Friend.";
</script>
@stop