
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Adamina|Anton|Graduate|Josefin+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">

<script src="/j.wovn.io/1" data-wovnio="key=0Iggq_" async></script>


<header>
  <div class="inner clearfix">
    <h1 class="logo"><a href="/" target="_top"><img src="{{ asset('images_1/logo.png') }}" class="title" alt="logo:DAMD"></a></h1>
    <p class="catch">エアロパーツ、ドレスアップのダムド｜DAMD Inc</p>
    <nav id="main-nav" class="stellarnav">
      <ul>
        <li><a href="#" style="cursor: default">PRODUCT</a>
        <ul>
          <li>
            <a href="{{ url('/products') }}">BODY KIT & INTERIOR</a>
            <ul>
              <li>
                <a href="{{ url('/products/mazda') }}">MAZDA</a>
              </li>
              <li>
                <a href="{{ url('/products/subaru') }}">SUBARU</a>
              </li>
              <li>
                <a href="{{ url('/products/toyota') }}">TOYOTA</a>
              </li>
              <li>
                <a href="{{ url('/products/nissan') }}">NISSAN</a>
              </li>
              <li>
                <a href="{{ url('/products/mitsubishi') }}">MITSUBISHI</a>
              </li>
              <li>
                <a href="{{ url('/products/honda') }}">HONDA</a>
              </li>
              <li>
                <a href="{{ url('/products/suzuki') }}">SUZUKI</a>
              </li>
              <li>
                <a href="{{ url('/products/daihatsu') }}">DAIHATSU</a>
              </li>
            </ul>
          </li>
          <li><a href="#" style="cursor: default">STEERING WHEEL</a>
            <ul>
            <li><a href="/steering/">DAMD SPORTS STEERING WHEEL</a></li>
            <li><a href="/lp/dps/">DAMD PERFORMANCE STEERING WHEEL</a></li>
            <li class="en_none"><a href="/damdforyou/">DAMD for YOU</a></li>
            </ul>
          </li>
          <!--<li><a href="#">COMPLETE CAR</a></li>-->
          <li class="en_none"><a href="/howto/">HOW TO BUY</a></li>
          <li><a href="/wheels/">WHEELS</a></li>
          <li><a href="/overseas/">INTERNATIONAL DEALER	</a></li>
          </ul>
        </li>

        <li>
          <a href="#" style="cursor: default">INFO</a>
          <ul>
            <li><a href="/news/">TOPICS</a></li>
            <li><a href="/journal/">JOURNAL</a></li>
            <li><a href="https://rodrip.jp/" target="_blank">RENT A CAR <i class="far fa-window-restore"></i></a></li>
            <li><a href="/autosalon/2024/">EVENT</a></li>
            <li><a href="/lp/neo/">e-Motorsports</a></li>
            <!--<li><a href="/lp/party/">EVENT</a></li>-->
            <!--<li><a href="/lp/wrx/">#59 DAMD MOTUL ED WRX STI</a></li>-->
          </ul>
        </li>

        <li>
          <a href="/music/">DAMD MUSIC</a>
        </li>
        <li>
          <a href="#" style="cursor: default">COMPANY</a>
          <ul>
            <li><a href="/company/about/">ABOUT</a></li>
            <!--<li><a href="/company/works/">WORK</a></li> -->
            <li><a href="/company/history/">HISTORY</a></li>
            <li><a href="/company/recruit/">RECRUIT</a></li>
          </ul>
        </li>
        <li><a href="#" style="cursor: default">GALLERY</a>
          <ul>
          <li><a href="https://www.youtube.com/channel/UCQq_SpiAggfOSDhOqe7pJ5g" target="_blank">DAMD CLIP <i class="far fa-window-restore"></i></a></li>
          <li><a href="/gallery/instagram/">INSTAGRAM	</a></li>
          <!--<li><a href="#">CATALOG</a></li>-->
          </ul>
        </li>
        <li><a href="https://damd.stores.jp/" target="_blank">ONLINE STORE</a></li>
        <li><a href="/faq/">FAQ</a></li>
        <li><a href="/inquiry/">CONTACT</a></li>
        @auth
        <li class="damdid">
          <a href="{{ route('profile') }}">DAMD ID</a>
        </li>
        @else
        <li class="damdid">
          <a href="{{ route('login') }}">LOGIN</a>
        </li>
        @endauth
      </ul>
    </nav><!-- .stellar-nav -->
  </div>
</header>
