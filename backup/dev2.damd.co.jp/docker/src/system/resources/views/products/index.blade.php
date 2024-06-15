<!DOCTYPE html>
<html lang="ja">
<head>
<title>PRODUCTS｜エアロパーツ、ドレスアップのダムド | DAMD Inc.</title>
<!--<meta name="viewport" content="width=device-width,initial-scale=1.0" /> -->

<!--#include virtual="/common/meta.html" -->
@include('shared.products.meta')

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

@vite(['resources/css/base.css', 'resources/css/style.css', 'resources/js/update.js'])

{{-- <link rel="stylesheet" type="text/css" href="../css/base.css" />
<link rel="stylesheet" type="text/css" href="../css/style.css" /> --}}
<link rel="stylesheet" href="{{ asset('lib/stellarnav/stellarnav.css') }}">
<link href="https://fonts.googleapis.com/css?family=Adamina|Anton|Graduate|Josefin+Sans" rel="stylesheet">


<!--<link rel="stylesheet" media="screen and (max-width: 640px)" href="../css/mobile.css" />  -->


{{-- <script src="../js/jquery-1.10.2.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  


{{-- <script type="text/javascript" src="../js/heightLine.js"></script> --}}


{{-- <link rel="stylesheet" type="text/css" href="../fancybox/jquery.fancybox.css" media="screen" /> --}}
{{-- <script src="../fancybox/jquery.fancybox.js"></script> --}}
{{-- <script src="../fancybox/jquery.mousewheel-3.0.6.pack.js"></script> --}}
<link rel="stylesheet" href="{{ asset('lib/fancybox/jquery.fancybox.css') }}">
<script src="{{ asset('lib/fancybox/jquery.fancybox.js') }}"></script>
<script src="{{ asset('lib/fancybox/jquery.mousewheel-3.0.6.pack.js') }}"></script>

<script src="../fancybox/fancyboxck.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.fancybox').fancybox();
});
</script>

{{-- <script src="../js/fancybox.js"></script> --}}
<script src="{{ asset('js/fancybox.js') }}"></script>

<script>

$(function() {
	var array = [
    "{{ asset('images_1/bg_products_86VANTAGEfrontbumper.jpg') }}",
    "{{ asset('images_1/bg_products_CX-3_frontunderspoiler.jpg') }}",
    "{{ asset('images_1/bg_products_frontunderspoiler.jpg') }}",
    "{{ asset('images_1/bg_products_LEVORGprogressive_fb.jpg') }}",
    "{{ asset('images_1/bg_products_s4rearbumper.jpg') }}"
	];

	var l = array.length;
	var r = Math.floor(Math.random()*l);
	var bgimgurl = array[r];
	$("#randomimg").css('background-image',('url("'+bgimgurl+'")'));
});

</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


  // ga('create', 'UA-51828010-1', 'damd.co.jp');
  // ga('send', 'pageview');

</script>

</head>


<body class="products">

<!--#include virtual="/common/header.html" -->
@include('shared.products.header')

<div class="box title h2_main">
  <div class="inner">
    <h2>PRODUCTS</h2>
  </div>
</div>


<div id="topic_path">

<ul class="inner">

<li><a href="../../">HOME</a></li>

<li>PRODUCTS</li>

</ul>

</div>



<div id="wrapper">



<div class="bg_image top" id="randomimg"></div>



<div id="contents" class="clearfix">



<div class="products index">



<ul class="products_top">

<li>

<a href="mazda/"><p class="image"><img src="{{ asset('images/logo_mazda.png') }}" alt="MAZDA"></p></a>

</li>

<li>

<a href="{{ url('products/subaru') }}"><p class="image"><img src="{{ asset('images/logo_subaru.png') }}" alt="SUBARU"></p></a>

</li>

<li>

<a href="{{ url('products/toyota') }}"><p class="image"><img src="{{ asset('images/logo_toyota.png') }}" alt="TOYOTA"></p></a>

</li>

<li>

<a href="{{ url('products/nissan') }}"><p class="image"><img src="{{ asset('images/logo_nissan.png') }}" alt="NISSAN"></p></a>

</li>

<li>

<a href="{{ url('products/mitsubishi') }}"><p class="image"><img src="{{ asset('images/logo_mitsubishi.png') }}" alt="MITSUBISHI"></p></a>

</li>

<li>

<a href="{{ url('products/honda') }}"><p class="image"><img src="{{ asset('images/logo_honda.png') }}" alt="HONDA"></p></a>

</li>

<li>

<a href="{{ url('products/suzuki') }}"><p class="image"><img src="{{ asset('images/logo_suzuki.png') }}" alt="SUZUKI"></p></a>

</li>

<li>

<a href="{{ url('products/daihatsu') }}"><p class="image"><img src="{{ asset('images/logo_daihatsu.png') }}" alt="DAIHATSU"></p></a>

</li>

</ul>



</div><!--steeling -->



</div><!--contents -->



</div><!--wrapper -->



<!--#include virtual="/common/footer.html" -->
@include('shared.products.footer')





</body>

</html>

