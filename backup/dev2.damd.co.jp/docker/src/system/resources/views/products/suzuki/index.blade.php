@php
  $company_pass = 'product_images/suzuki/';
  $company_url  = 'products/suzuki/';
@endphp


<!DOCTYPE html>
<html lang="ja">

<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GRN430XGCP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GRN430XGCP');
</script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SUZUKI｜PRODUCT｜エアロパーツ、ドレスアップのダムド | DAMD Inc.</title>

<!--#include virtual="/common/meta.html" -->
@include('shared.products.meta')

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

@vite(['resources/css/base.css', 'resources/css/style.css', 'resources/js/update.js'])

{{-- <link rel="stylesheet" type="text/css" href="../../css/base.css" />
<link rel="stylesheet" type="text/css" href="../../css/style.css" /> --}}

<!--<link rel="stylesheet" media="screen and (max-width: 640px)" href="../css/mobile.css" />  -->

{{-- <script src="../../js/jquery-1.10.2.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  

<script type="text/javascript" src="../../js/heightLine.js"></script>

{{-- <link rel="stylesheet" type="text/css" href="../../fancybox/jquery.fancybox.css" media="screen" />
<script src="../../fancybox/jquery.fancybox.js"></script>
<script src="../../fancybox/jquery.mousewheel-3.0.6.pack.js"></script> --}}
<link rel="stylesheet" href="{{ asset('lib/fancybox/jquery.fancybox.css') }}">
<script src="{{ asset('lib/fancybox/jquery.fancybox.js') }}"></script>
<script src="{{ asset('lib/fancybox/jquery.mousewheel-3.0.6.pack.js') }}"></script>

<script src="../../fancybox/fancyboxck.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.fancybox').fancybox();
});
</script>
{{-- <script src="../../js/fancybox.js"></script> --}}
<script src="{{ asset('js/fancybox.js') }}"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51828010-1', 'damd.co.jp');
  ga('send', 'pageview');

</script>

</head><body>

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
<li><a href="../">PRODUCTS</a></li>
<li>SUZUKI</li>
</ul>
</div>

<div id="wrapper">

<div id="contents" class="clearfix">

<div class="products suzuki">


<ul class="list product column_3 heightLineParent">


<li>
<div class="box title">
<h3>
JIMNY SIERRA<span class="mark up"><script>newUp(2023,10,6,"new")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_sierra_little-g_aventura/') }}"><img src="{{ asset($company_pass.'jimny_sierra_little-g_aventura/images/thum.jpg') }}" alt=""></a></p>
<p class="type">
JB74<br>
JIMNY “ little G. AVENTURA”</p>
</li>
    
<li>
<div class="box title">
<h3>
JIMNY<span class="mark up"><script>newUp(2023,9,15,"new")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_little-g_traditional/') }}"><img src="{{ asset($company_pass.'jimny_little-g_traditional/images/thum.jpg') }}" alt=""></a></p>
<p class="type">
JB64<br>
JIMNY “ little G. TRADITIONAL”</p>
</li>
    

<li>
<div class="box title">
<h3>
JIMNY SIERRA<span class="mark up"><script>newUp(2023,10,6,"up")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_sierra_little-g_advance/') }}"><img src="{{ asset($company_pass.'jimny_sierra_little-g_advance/images/thum.jpg') }}" alt=""></a></p>
<p class="type">
JB74<br>
JIMNY “ little G. ADVANCE”</p>
</li>

<li>
<div class="box title">
<h3>
JIMNY SIERRA<span class="mark up"><script>newUp(2023,9,15,"up")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_sierra_little-g_traditional/') }}"><img src="{{ asset($company_pass.'jimny_sierra_little-g_traditional/images/thum.jpg') }}" alt=""></a></p>
<p class="type">
JB74<br>
JIMNY “ little G. TRADITIONAL”</p>
</li>

<li>
<div class="box title">
<h3>EVERY / EVERY WAGON<span class="mark new"><script>newUp(2023,9,28,"up")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'every_little-d/') }}"><img src="{{ asset($company_pass.'every_little-d/images/thum.jpg') }}" alt=""></a></p>
<p class="type">
DA17V / DA17W			<br>
EVERY / EVERY WAGON little D.</p>
</li>


<li>
<div class="box title">
<h3>SPACIA GEAR <span class="mark new"><script>newUp(2022,03,01,"up")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'spaciagear_nomad/') }}"><img src="{{ asset($company_pass.'spaciagear_nomad/images/thum.jpg') }}" alt=""></a></p>
<p class="type">
MK53S<br>
SPACIA GEAR NOMAD</p>
</li>




<li>
<div class="box title">
<h3>HUSTLER<span class="mark new"><script>newUp(2022,12,20,"new")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'hustler_country/') }}"><img src="{{ asset($company_pass.'hustler_country/images/thum.jpg') }}" alt=""></a></p>
<p class="type">
MR52S/MR92S<br>
HUSTLER COUNTRY</p>
</li>

<li>
<div class="box title">
<h3>HUSTLER<span class="mark new"><script>newUp(2020,12,20,"up")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'hustler_carabina/') }}"><img src="{{ asset($company_pass.'hustler_carabina/images/CARABINA3-2.jpg') }}" alt=""></a></p>
<p class="type">
MR52S/MR92S<br>
HUSTLER CARABINA</p>
</li>

<li>
<div class="box title">
<h3>HUSTLER<span class="mark new"><script>newUp(2020,12,20,"up")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'hustler_classico/') }}"><img src="{{ asset($company_pass.'hustler_classico/images/classcio3-2.jpg') }}" alt=""></a></p>
<p class="type">
MR52S/MR92S<br>
HUSTLER CLASSICO
</p>
</li>


<li>
<div class="box title">
<h3>JIMNY SIERRA<span class="mark new"><script>newUp(2020,11,30,"new")</script></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_sierra_little-b/') }}"><img src="{{ asset($company_pass.'jimny_sierra_little-b/images/thumnail.jpg') }}" alt=""></a></p>
<p class="type">
JB74<br>
JIMNY "little B."
</p>
</li>

<li>
<div class="box title">
<h3>
JIMNY SIERRA<span class="mark new"><script>newUp(2020,11,30,"new")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_sierra_theroots/') }}"><img src="{{ asset($company_pass.'jimny_sierra_theroots/images/thumnail.jpg') }}" alt=""></a></p>
<p class="type">
JB74<br>
JIMNY the ROOTS.
</p>
</li>

<li>
<div class="box title">
<h3>JIMNY<span class="mark new"><script>newUp(2020,7,3,"up")</script></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_little-b/') }}"><img src="{{ asset($company_pass.'jimny_little-b/images/R-standard-s.jpg') }}" alt=""></a></p>
<p class="type">
JB64<br>
JIMNY "little B."
</p>
</li>

<li>
<div class="box title">
<h3>
JIMNY<span class="mark new"><script>newUp(2020,7,3,"up")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_theroots/') }}"><img src="{{ asset($company_pass.'jimny_theroots/images/R-standard-s.jpg') }}" alt=""></a></p>
<p class="type">
JB64<br>
JIMNY the ROOTS.
</p>
</li>

<li>
<div class="box title">
<h3>
JIMNY SIERRA<span class="mark up"><script>newUp(2023,4,21,"up")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_sierra_little-g/') }}"><img src="{{ asset($company_pass.'jimny_sierra_little-g/images/01-2.jpg') }}" alt=""></a></p>
<p class="type">
JB74<br>
JIMNY “little G. STANDARD”</p>
</li>

<li>
<div class="box title">
<h3>JIMNY SIERRA<span class="mark up"><script>newUp(2019,10,11,"up")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_sierra_little-d/') }}"><img src="{{ asset($company_pass.'jimny_sierra_little-d/images/01-2.jpg') }}" alt=""></a></p>
<p class="type">
JB74<br>
JIMNY "little D."
</p>
</li>


<li class="">
<div class="box title">
<h3>JIMNY<span class="mark up"><script>newUp(2023,4,21,"up")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_little-g/') }}"><img src="{{ asset($company_pass.'jimny_little-g/images/01-2.jpg') }}" alt=""></a></p>
<p class="type">
JB64<br>
JIMNY “little G. STANDARD”</p>
</li>

<li class="">
<div class="box title">
<h3>JIMNY<span class="mark up"><script>newUp(2019,10,11,"up")</script></span></h3>
</div>
<p class="image"><a href="{{ url($company_url.'jimny_little-d/') }}"><img src="{{ asset($company_pass.'jimny_little-d/images/01-2.jpg') }}" alt=""></a></p>
<p class="type">
JB64<br>
JIMNY "little D."
</p>
</li>


<li class="">
<div class="box title">
<h3>LAPIN<span class="mark up">
<script>newUp(2024,03,14,"new")</script></span></h3>
</div>
<p class="image"><a href="{{ url('petit') }}"><img src="{{ asset($company_pass.'images/thum_lapin.jpg') }}" alt=""></a></p>
<p class="type">
HE33S<br>
Petit DAMD
</p>
</li>


<li class="">
<div class="box title">
<h3>WAGON R<span class="mark up"><script>newUp(2024,03,14,"new")</script></span></h3>
</div>
<p class="image"><a href="{{ url('petit') }}"><img src="{{ asset($company_pass.'images/thum_wgnr_smile.jpg') }}" alt=""></a></p>
<p class="type">
MX81S/MX91S<br>
Petit DAMD
</p>
</li>




<li class="en_none">
<div class="box title">
<h3>EVERY</h3>
</div>
<p class="image"><a href="{{ url($company_url.'every_conceptb_2/') }}"><img src="{{ asset($company_pass.'images/EVERY_ConceptB_type2.jpg') }}" alt="EVERY"></a></p>
<p class="type">DA64W/DA64V<br>
Concept B type2
</p>
</li>

<li class="en_none">
<div class="box title">
<h3>EVERY</h3>
</div>
<p class="image"><a href="{{ url($company_url.'every_conceptb/') }}"><img src="{{ asset($company_pass.'images/D_every.jpg') }}" alt="EVERY"></a></p>
<p class="type">DA64W<br>
Concept B type1</p>
</li>

<li class="en_none">
<div class="box title">
<h3>EVERY</h3>
</div>
<p class="image"><a href="{{ url($company_url.'every_locoboy/') }}"><img src="{{ asset($company_pass.'images/EVERY_LocoBoy_type2.jpg') }}" alt="EVERY"></a></p>
<p class="type">DA52,62<br>
Locoboy type2
</p>
</li>


<!--
<li class="en_none">
<div class="box title">
<h3>WAGON R</h3>
</div>
<p class="image"><a href="{{ url($company_url.'wagonr_mh_stingray/') }}"><img src="{{ asset($company_pass.'images/WAGONR_STINGRAY.jpg') }}" alt="WAGON R"></a></p>
<p class="type">MH23S<br>
STINGRAY
</p>
</li>


<li class="en_none">
<div class="box title">
<h3>WAGON R</h3>
</div>
<p class="image"><a href="{{ url($company_url.'wagonr_mh_se/') }}"><img src="{{ asset($company_pass.'images/WAGONR_MH.jpg') }}" alt="WAGON R"></a></p>
<p class="type">MH23S</p>
</li>


<li class="en_none">
<div class="box title">
<h3>WAGON R</h3>
</div>
<p class="image"><a href="{{ url($company_url.'wagon-r_mh_conceptb_2/') }}"><img src="{{ asset($company_pass.'images/WAGONR_ConceptB_type2.jpg') }}" alt="WAGON R"></a></p>
<p class="type">MH21S<br>
Concept B type2</p>
</li>

<li class="en_none">
<div class="box title">
<h3>WAGON R</h3>
</div>
<p class="image"><a href="{{ url($company_url.'wagon-r_mh_conceptb/') }}"><img src="{{ asset($company_pass.'images/WAGONR_ConceptB_type1.jpg') }}" alt="WAGON R"></a></p>
<p class="type">MH21S<br>
Concept B type1</p>
</li>

<li class="en_none">
<div class="box title">
<h3>WAGON R</h3>
</div>
<p class="image"><a href="{{ url($company_url.'wagon-r_rr_chromeheart/') }}"><img src="{{ asset($company_pass.'images/WAGONR_MH_CHROMEHEART.jpg') }}" alt="WAGON R"></a></p>
<p class="type">MH21S<br>
CHROME HEART
</p>
</li>


<li class="en_none">
<div class="box title">
<h3>WAGON R</h3>
</div>
<p class="image"><a href="{{ url($company_url.'wagon-r_mc_evolution/') }}"><img src="{{ asset($company_pass.'images/WAGONR_MC_StylingEffect.jpg') }}" alt="WAGON R"></a></p>
<p class="type">MC11S,21S/12S,22S<br>
&nbsp;
</p>
</li>


<li class="en_none">
<div class="box title">
<h3>WAGON R</h3>
</div>
<p class="image"><a href="{{ url($company_url.'wagon-r_mc_heartbeat2/') }}"><img src="{{ asset($company_pass.'images/WAGONR_MC_HeatBeat2.jpg') }}" alt="WAGON R"></a></p>
<p class="type">MC11S,21S/12S,22S<br>
Heart Beat 2
</p>
</li>

<li class="en_none">
<div class="box title">
<h3>WAGON R</h3>
</div>
<p class="image"><a href="{{ url($company_url.'wagon-r_mc_streetslider/') }}"><img src="{{ asset($company_pass.'images/WAGONR_MC_streetslider.jpg') }}" alt="WAGON R"></a></p>
<p class="type">MC11S,21S/12S,22S<br>
Street Slider
</p>
</li>

<li class="en_none">
<div class="box title">
<h3>WAGON R</h3>
</div>
<p class="image"><a href="{{ url($company_url.'wagon-r_ct_heartbeat/') }}"><img src="{{ asset($company_pass.'images/WAGONR_CT_HeatBeat.jpg') }}" alt="WAGON R"></a></p>
<p class="type">CT/CV<br>
Heart Beat
</p>
</li>

<li class="en_none">
<div class="box title">
<h3>WAGON R</h3>
</div>
<p class="image"><a href="{{ url($company_url.'wagon-r_ct_heartbeat2/') }}"><img src="{{ asset($company_pass.'images/WAGONR_CT_HeatBeat2.jpg') }}" alt="WAGON R"></a></p>
<p class="type">CT/CV<br>
Heart Beat2</p>
</li>
-->

<!--<li>
<div class="box title">
<h3>WAGON R</h3>
</div>
<p class="image"><a href="wagonr06_se.html"><img src="wagonr06_se/kc_dtm_b.jpg" alt="WAGON R"></a></p>
<p class="type">CT/CV<br>
DTM typeB</p>
</li>
 -->
 
 <!--
<li class="en_none">
<div class="box title">
<h3>Kei</h3>
</div>
<p class="image"><a href="{{ url($company_url.'kei/') }}"><img src="{{ asset($company_pass.'images/Kei_Evolution.jpg') }}" alt="Kei"></a></p>
<p class="type">HN11S,21S<br>
Evolution　前期</p>
</li>
-->
<li class="en_none">
<div class="box title">
<h3>LAPIN</h3>
</div>
<p class="image"><a href="{{ url($company_url.'lapin_locoboy_type2_m_l/') }}"><img src="{{ asset($company_pass.'images/LAPIN_LocoBoytype2_L.jpg') }}" alt="LAPIN"></a></p>
<p class="type">HE21S<br>
Locoboy type2　後期
</p>
</li>

<!--
<li class="en_none">
<div class="box title">
<h3>LAPIN</h3>
</div>
<p class="image"><a href="{{ url($company_url.'lapin_se/') }}"><img src="{{ asset($company_pass.'images/LAPIN_ancel.jpg') }}" alt="LAPIN"></a></p>
<p class="type">HE21S<br>
ancel
</p>
</li>
-->

<li class="en_none">
<div class="box title">
<h3>LAPIN</h3>
</div>
<p class="image"><a href="{{ url($company_url.'lapin_locoboy_type2_m_b/') }}"><img src="{{ asset($company_pass.'images/LAPIN_LocoBoytype2_F.jpg') }}" alt="LAPIN"></a></p>
<p class="type">HE21S<br>
Locoboy type2　前期</p>
</li>

<li class="en_none">
<div class="box title">
<h3>LAPIN</h3>
</div>
<p class="image"><a href="{{ url($company_url.'lapin_locoboy') }}"><img src="{{ asset($company_pass.'images/LAPIN_LocoBoy.jpg') }}" alt="LAPIN"></a></p>
<p class="type">HE21S<br>
Locoboy　前期</p>
<p class="type">&nbsp; </p>
</li>



</ul>

</div><!--products -->

</div><!--contents -->

</div><!--wrapper -->

<!--#include virtual="/common/footer.html" -->
@include('shared.products.footer')

<!--#include virtual="/common/products_mitsumori.html" -->
<script type="text/javascript" src="../../../common/js/form.js"></script>

<!--#include virtual="/common/products_modal.html" -->
</body>
</html>
