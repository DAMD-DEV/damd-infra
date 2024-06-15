<div id="footer">
<div class="inner">
<ul class="bottom_navi clearfix">
<li><a href="/news/">INFO</a>
  <ul>
  <li><a href="/news/">TOPICS</a></li>
  <li><a href="/journal/">JOURNAL</a></li>
  <li><a href="https://rodrip.jp/" target="_blank">RENT A CAR</a></li>
  <li><a href="/autosalon/2024/">EVENT</a></li>
  <li><a href="/lp/neo/">e-Motorsports</a></li>
  </ul>
</li>

<li><a href="/music/">DAMD MUSIC</a></li>
<li><a href="#" style="cursor: default">PRODUCT</a>
  <ul>
  <li><a href="/products/">BODY KIT & INTERIOR</a></li>
  <li><a href="/steering/">STEERING WHEEL</a></li>
  <li><a href="/wheels/">WHEELS</a></li>
  <!--<li><a href="#">COMPLETE CAR</a></li>-->
  <li><a href="/howto/">HOW TO BUY</a></li>
  <li><a href="/overseas/">INTERNATIONAL DEALER	</a></li>
  </ul>
</li>
<li><a href="#" style="cursor: default">COMPANY</a>
  <ul>
  <li><a href="/company/about/">ABOUT</a></li>
  <!--<li><a href="/company/works/">WORK</a></li> -->
  <li><a href="/company/history/">HISTORY</a></li>
  <li><a href="/company/recruit/">RECRUIT</a></li>
  </ul>
</li>

<li><a href="#" style="cursor: default">GALLERY</a>
  <ul>
  <li><a href="/gallery/movie/">MOVIE</a></li>
  <li><a href="/gallery/instagram/">INSTAGRAM	</a></li>
  <!--<li><a href="#">CATALOG</a></li>-->
  </ul>
<li><a href="https://damd.stores.jp/" target="_blank">ONLINE STORE</a></li>
<li><a href="/contact/">CONTACT</a>
<ul>
<li><a href="/faq/">FAQ</a></li>
</ul>
</li>

</ul>

<div class="box social">
<ul>
<li><a href="https://www.instagram.com/damd_inc/" target="_blank"><i class="fab fa-instagram"></i></a></li>
<li><a href="https://www.facebook.com/DAMD.PRESS" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="https://www.youtube.com/channel/UCQq_SpiAggfOSDhOqe7pJ5g" target="_blank"><i class="fab fa-youtube"></i></a></li>
<li><a href="https://twitter.com/DAMDInc" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M18.205 2.25h3.308l-7.227 8.26l8.502 11.24H16.13l-5.214-6.817L4.95 21.75H1.64l7.73-8.835L1.215 2.25H8.04l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"/></svg></a></li>

<li><a href="/contact/"><i class="fa fa-envelope"></i></a></li>

</ul>
</div>

<ul class="sub_navi">
<li><a href="/privacy/">PRIVACY POLICY</a></li>
<li><a href="/rule/">特定商取引法に関する表記</a></li>
</ul>
<p class="copy">Copyright (C) <script type='text/javascript'>myDate = new Date();myYear = myDate.getFullYear();document.write(myYear);</script> DAMD Inc. All Rights Reserved. </p>
</div><!--innner -->
</div>

@include('shared.products.modal')

{{-- @vite(['resources/js/mitsumori.js']) --}}

@vite(['resources/js/mitsumori2.js'])



{{-- <link rel="stylesheet" type="text/css" media="all" href="/lib/stellarnav/stellarnav.css">
<script type="text/javascript" src="/lib/stellarnav/stellarnav.min.js"></script> --}}
<link rel="stylesheet" href="{{ asset('lib/stellarnav/stellarnav.css') }}">
<script type="text/javascript" src="{{ asset('lib/stellarnav/stellarnav.min.js') }}"></script>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery('.stellarnav').stellarNav({
				theme: 'light'
			});
		});
        $.ajax({
          url: '/login/check_session.php',
          type: 'post', // getかpostを指定(デフォルトは前者)
          dataType: 'html', // 「json」を指定するとresponseがJSONとしてパースされたオブジェクトになる
          /*data: { // 送信データを指定(getの場合は自動的にurlの後ろにクエリとして付加される)
            id: itemId
          },*/
        })
                // ・ステータスコードは正常で、dataTypeで定義したようにパース出来たとき
                .done(function (response) {
                  //console.log("okk");
                  if(response=="ok"){
                    $("#login_btn a").text("MY PAGE").attr("href","/mypage/");
                    //$("#damd_id_btn").hide();
                  }else{
                    //$("#damd_id_btn").show();
                    $("#login_btn a").text("LOGIN").attr("href","/login/");
                  }

                })
                // ・サーバからステータスコード400以上が返ってきたとき
                // ・ステータスコードは正常だが、dataTypeで定義したようにパース出来なかったとき
                // ・通信に失敗したとき
                .fail(function () {
                  //console.log("aaa");
                });
</script>



{{-- <script src=" /js/jquery.tile.js"></script> --}}
@vite(['resources/js/jquery.tile.js'])
<script>
jQuery(document).ready(function($) {
  //PC
  if (window.matchMedia( '(min-width: 800px)' ).matches) {
    $(window).on('load',function() {
     $("#contents ul.list.product.column_3.heightLineParent li").tile(3);
     $("#contents ul.list.product.column_4.heightLineParent li").tile(4);
     });
  //SP
  } else {
    $(window).on('load',function() {
     $("#contents ul.list.product.column_3.heightLineParent li").tile(2);
     $("#contents ul.list.product.column_4.heightLineParent li").tile(2);
  });
  };
});
</script>
