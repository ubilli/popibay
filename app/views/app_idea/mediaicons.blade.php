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
      <h1 class="text-center">
        Popibay media icons
      </h1>
      <div class="panel">
        Our media icons are to help you use popibay icons on your website and our icons on the web,
        they are free to download and at different sizes.
      </div>
      <div class="row">
        <div class="small-12 medium-12 large-3 columns go-down-a-bit-20">
          <h6 class="text-center"><img src="pb-assets/img/favicon/popibay_favicon_70.png" alt="Popibay favicon large 70"></h6>
          <h2 class="text-center">V Large icon</h2>
          <a download href="pb-assets/img/favicon/popibay_favicon_70.png" class="button wider-button">Download</a>
        </div>
        <div class="small-12 medium-12 large-3 columns go-down-a-bit-20">
          <h6 class="text-center go-down-a-bit-10"><img src="pb-assets/img/favicon/popibay_favicon_64.png" alt="Popibay favicon large 64"></h6>
          <h2 class="text-center">Large icon</h2>
          <a download href="pb-assets/img/favicon/popibay_favicon_64.png" class="button wider-button">Download</a>
        </div>
        <div class="small-12 medium-12 large-3 columns go-down-a-bit-20">
          <h6 class="text-center go-down-a-bit-40"><img src="pb-assets/img/favicon/popibay_favicon_32.png" alt="Popibay favicon large 32"></h6>
          <h2 class="text-center">Medium icon</h2>
          <a download href="pb-assets/img/favicon/popibay_favicon_32.png" href="#" class="button wider-button">Download</a>
        </div>
        <div class="small-12 medium-12 large-3 columns go-down-a-bit-20">
          <h6 class="text-center go-down-a-bit-50"><img src="pb-assets/img/favicon/popibay_favicon_16.png" alt="Popibay favicon large 16"></h6>
          <h2 class="text-center">Small icon</h2>
          <a download href="pb-assets/img/favicon/popibay_favicon_16.png" class="button wider-button">Download</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  /* The document title */
  document.title="Popibay media icons";
</script>
@stop