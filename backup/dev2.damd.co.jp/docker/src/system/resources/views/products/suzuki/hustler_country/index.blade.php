@php
  $company_pass = 'product_images/suzuki/';
  $image_pass   = 'product_images/suzuki/hustler_country/images/';
  $manual_pass  = 'product_images/suzuki/hustler_country/manual/';
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
<title>HUSTLER COUNTRY SUZUKI | エアロパーツ、ドレスアップのダムド | DAMD Inc.</title>
<meta http-equiv="content-style-type" content="text/css" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />

<meta property="og:title" content="HUSTLER COUNTRY｜SUZUKI | DAMD Inc."/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="未だ見ぬカントリーロードを求めて。"/>
<meta property="og:url" content="http://www.damd.co.jp/products/suzuki/hustler_carabiner/"/>
<meta property="og:image" content="http://www.damd.co.jp/products/suzuki/hustler_carabiner/images/01.jpg">
<meta property="og:site_name" content="HUSTLER COUNTRY｜SUZUKI DAMD Inc."/>

<meta name="Keywords" content="HUSTLER COUNTRY,DAMD,SUZUKI" />

@include('shared.products.product_head')

<style>

.products .main_block .text p.logo img{
	max-height: 160px;
	margin-bottom: 0px;
}

.products .main_block .main_image{
	/*background: #f8dfaf;*/
	padding: 0 0 60px 0;
}
.products .main_block .text{
	 /*top: 55%;
   bottom: 160px;*/
}
.products .main_block .text p{
	color: #333;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
}

@media screen and (max-width: 800px) {
.products .main_block .main_image{
	/*padding: 0 0 180px 0;*/
}

.products .main_block .text p.logo img{
	max-height: 70px;
	margin-bottom: 0px;
}
.products .main_block .text{
	top: 40%;
}

}

</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51828010-1', 'damd.co.jp');
  ga('send', 'pageview');

</script>

</head><body id="damd_co_jp" class="products">

<!--#include virtual="/common/header.html" -->
@include('shared.products.header')

<div class="box title h2_main">
<div class="inner">
<h2>PRODUCTS</h2>
</div>
</div>
<div id="topic_path">
<ul class="inner">
  <li><a href="{{ url('/') }}">HOME</a></li>
  <li><a href="{{ url('/products') }}">PRODUCTS</a></li>
  <li><a href="{{ url('/products/suzuki') }}">SUZUKI</a></li>
  <li>HUSTLER COUNTRY</li>
</ul>
</div>


<div id="contents" class="clearfix">


<div class="main_block normal">
<div class="main_image">
<img src="{{ asset($image_pass.'main_image.jpg') }}" alt="">
</div>
<div class="text">
<!--<p class="logo"><img src="{{ asset($image_pass.'logo.png') }}" alt=""></p> -->
<p class="catch">
未だ見ぬカントリーロードを求めて

<p>気分は荒野を走り回るオフローダー。<br>
ちょっとやんちゃなのに、華奢なスタイル。<br>

<p>遊びの相棒ダムドハスラーのラインナップに、<br>
豪快なフォルムとキュートさが光る<br>
"カワイルド "な「COUNTRY」 が仲間入り！

<p>旅のサポートはお任せあれ！<br>
カントリーと荒れた道を軽やかに進もう！
						
							
</div>
<!--<div class="bottom"><img src="{{ asset($image_pass.'bg_arrow.jpg') }}" ></div> -->
</div>

<div class="inner">

<div class="box title">
<h3>HUSTLER COUNTRY</h3>
</div>
<!--

<p>ユルく、らしく。 -->
</p>

<div id="sliderWrap">
<ul class="bxslider">
<li><img src="{{ asset($image_pass.'1.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'2.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'3.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'4.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'5.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'DSC09161.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'DSC09126.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'DSC08887.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'DSC08769.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'DSC08998.jpg') }}" alt="" title=""></li>
<!--<li><img src="{{ asset($image_pass.'DSC00254.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'DSC00419.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'DSC00720.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'DSC08763.jpg') }}" alt="" title=""></li> -->

</ul>
<p class="caution">※ ルーフラックのカラーはブラックとなります。<div id="bx-pager">
  <a data-slide-index="0" href=""><img src="{{ asset($image_pass.'1.jpg') }}" alt=""></a>
  <a data-slide-index="1" href=""><img src="{{ asset($image_pass.'2.jpg') }}" alt=""></a>
  <a data-slide-index="2" href=""><img src="{{ asset($image_pass.'3.jpg') }}" alt=""></a>
  <a data-slide-index="3" href=""><img src="{{ asset($image_pass.'4.jpg') }}" alt=""></a>
  <a data-slide-index="4" href=""><img src="{{ asset($image_pass.'5.jpg') }}" alt=""></a>
  <a data-slide-index="5" href=""><img src="{{ asset($image_pass.'DSC09161.jpg') }}" alt=""></a>
  <a data-slide-index="6" href=""><img src="{{ asset($image_pass.'DSC09126.jpg') }}" alt=""></a>
  <a data-slide-index="7" href=""><img src="{{ asset($image_pass.'DSC08887.jpg') }}" alt=""></a>
  <a data-slide-index="8" href=""><img src="{{ asset($image_pass.'DSC08769.jpg') }}" alt=""></a>
  <a data-slide-index="9" href=""><img src="{{ asset($image_pass.'DSC08998.jpg') }}" alt=""></a>
  
<!--  <a data-slide-index="5" href=""><img src="{{ asset($image_pass.'DSC00254.jpg') }}" alt=""></a>
  <a data-slide-index="6" href=""><img src="{{ asset($image_pass.'DSC00419.jpg') }}" alt=""></a>
  <a data-slide-index="7" href=""><img src="{{ asset($image_pass.'DSC00720.jpg') }}" alt=""></a>
  <a data-slide-index="8" href=""><img src="{{ asset($image_pass.'DSC08763.jpg') }}" alt=""></a>
    -->
  
</div>
<div class="main_data">

<div class="banner center">
<a href="/complete/shoplist/"><img src="{{ asset($image_pass.'country_banner.png') }}" alt=""></a>
<!--<p><a href="https://www.damd.co.jp/news/9876/"><img src="{{ asset($image_pass.'hustler_seatcover_postpond.jpg') }}" alt=""></a> --> 
<!--<p><a href="https://www.damd.co.jp/news/8720/"><img src="{{ asset($image_pass.'caution.png') }}" alt=""></a></div>
 -->
 </div>
<div class="box title center">
<h4>エクステリア</h4>
</div>
 
<div class="accordion">



<p class="title">エクステリア＋ホイールセット </p>
<div class="detail">
<div class="image">
<p class="text">
カントリーの迫力満載なフェイスチェンジキットに加え、<br>
ボディサイドを彩るグレー×迷彩柄のステンシルステッカー、<br>
立体感のあるクラシックデザインが特徴のホイール「Cantabile」<br>
全てがセットになったエクステリア完全コンプリートキット。<br>
<!--<br>
<br>
【キット内容】<br>
ﾌｪｲｽﾁｪﾝｼﾞｷｯﾄ / COUNTRY★ｻｲﾄﾞｽﾃｯｶｰ <ｸﾞﾚｰ> <br>
ﾎｲｰﾙ DAMD Cantabile <15ｲﾝﾁ×5J +45> 4本ｾｯﾄ<br>-->

<br>
<!--<span class="red">
※ 塗装済み品の発売日は現在調整を行なっております。<br>
　未塗装品の場合、塗装業者様にて塗装をお願い申し上げます。<br>
　<a href="https://www.damd.co.jp/news/10212/" style="color:#FF3300; font-weight: bold; ">【タフト 用ボディキット塗装品発売延期のお詫びとご案内】</a></span><br>
<br> -->
<span class="caution">

【キット内容】<br>
ﾌｪｲｽﾁｪﾝｼﾞｷｯﾄ / COUNTRY★ｻｲﾄﾞｽﾃｯｶｰ <ｸﾞﾚｰ> <br>
ﾎｲｰﾙ DAMD Cantabile <15ｲﾝﾁ×5J +45> 4本ｾｯﾄ
<br><br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 在庫状況により各製品の納期が異なる可能性がございます。<br>
&nbsp;&nbsp;&nbsp;&nbsp;出荷時期に調整等は対応いたしかねます。予めご了承ください。<br>
※ 塗装済み品の場合、各ﾊﾟｰﾂの塗り分けは下記のとおりとなります。<br>
&nbsp;&nbsp;&nbsp;【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ<br>
&nbsp;&nbsp;&nbsp;【ﾎﾞﾝﾈｯﾄｶﾞｰﾆｯｼｭ】 ：ｶﾞﾝﾒﾀﾘｯｸ×ﾏｯﾄﾌﾞﾗｯｸ<br>
&nbsp;&nbsp;&nbsp;【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ×ﾏｯﾄﾌﾞﾗｯｸ<br>
&nbsp;&nbsp;&nbsp;【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×ｶﾞﾝﾒﾀﾘｯｸ<br>
※ Cantabileのﾎｲｰﾙｶﾗｰは、ｺﾞｰﾙﾄﾞ/ﾌﾞﾗｯｸ/ｼﾙﾊﾞｰの3色からご選択ください。<br>
※ 本ｷｯﾄにﾀｲﾔは付属しておりません。<br>
&nbsp;&nbsp;&nbsp;純正ﾀｲﾔへの巻き替え、または別途装着ﾀｲﾔをご用意ください。<br>
※ 本ﾊﾟｰﾂは純正ﾌﾛﾝﾄｶﾒﾗの移設に対応しておりますが、<br>
&nbsp;&nbsp;&nbsp;&nbsp;ﾊﾟｰﾂの一部がｶﾒﾗに映り込む可能性がございます。<br>
&nbsp;&nbsp;&nbsp;&nbsp;安全上の問題はございませんが、予めご了承ください。<br>
※ 車両登録前の本ﾊﾟｰﾂの架装はお控えください。<br>
※ 塗装・お取付後のｷｬﾝｾﾙ・返品・交換はお受けできかねます。<br>
</span>
</p>

<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'exterior_kit.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'exterior_kit.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'cantabile_image.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'cantabile_image.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<h5>Cantabile ４本セット</h5>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥280,000<span class="tax">¥308,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1235">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i>¥65,000<span class="tax">¥71,500（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
</table>

</div>


<!--<p class="title">エクステリア+ホイールセット</p>
<div class="detail">
<div class="image">
<p class="text">
クラシコの印象的な愛くるしいフェイスチェンジキットに加え、<br>
ボディサイドを彩るウッド調ストライプ、<br>
不朽の名作ホイールDEAN CROSS COUNTRYがセットになった<br>
エクステリア完全コンプリートキット。
<span class="caution">
【キット内容】<br>
ﾌｪｲｽﾁｪﾝｼﾞｷｯﾄ / ｳｯﾄﾞｽﾄﾗｲﾌﾟ <ﾅﾁｭﾗﾙ> <br>
DEAN CROSS COUNTRY 4本セット<br>
(ホイールサイズ : 15ｲﾝﾁ×4.5J +43)<br>
<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 塗装済み品の場合、各ﾊﾟｰﾂの塗り分けは下記のとおりとなります。<br>
　 【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>
　 【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>
　 【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>
※ DEAN Cross Countryのﾎｲｰﾙｶﾗｰはﾏｰｶﾞﾚｯﾄﾎﾜｲﾄとなります。<br>
※ 本キットにタイヤは付属しておりません。<br>
　 純正タイヤへの巻き替え、または別途装着タイヤをご用意ください。
<br>
※ 本ﾊﾟｰﾂは純正ﾌﾛﾝﾄｶﾒﾗの移設に対応しておりますが、<br>
　 ﾊﾟｰﾂの一部がｶﾒﾗに映り込む可能性がございます。<br>
　 安全上の問題はございませんが、予めご了承ください。<br>
※ 各パーツの詳細・注意事項は各パーツ項目にてご確認ください。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。
</span>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'classico_exterior.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'classico_exterior.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥300,000<span class="tax">¥330,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1147">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥55,000<span class="tax">¥60,500（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
</table>

</div> -->


<p class="title">フェイスチェンジキット　<a href="{{ asset($manual_pass.'hustler_country_fgfb.pdf') }}"><i class="fa fa-wrench"></i></a> <a href="{{ asset($manual_pass.'hustler_country_bc.pdf') }}"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
豪快なフォルムの中にキュートさが光る。<br>
存在感のあるグリルで、グッとオフロード感をUP。<br>
印象が大きく変わるフェイスチェンジキット。<br>
<br>

<!--【キット内容】<br>
ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ / ﾌﾛﾝﾄｸﾞﾘﾙ<br>
ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ / damd design ｴﾝﾌﾞﾚﾑ<br>
-->
 <span class="caution">
【キット内容】<br>
ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ / ﾎﾞﾝﾈｯﾄｶﾞｰﾆｯｼｭ / ﾌﾛﾝﾄｸﾞﾘﾙ<br>
ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ / DAMDｱﾒﾘｶﾝﾚﾀｰｴﾝﾌﾞﾚﾑ<br>
<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 在庫状況により各製品の納期が異なる可能性がございます。<br>
&nbsp;&nbsp;&nbsp;&nbsp;出荷時期に調整等は対応いたしかねます。予めご了承ください。<br>
※ 塗装済み品の場合、各ﾊﾟｰﾂの塗り分けは下記のとおりとなります。<br>
&nbsp;&nbsp;&nbsp;【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ<br>
&nbsp;&nbsp;&nbsp;【ﾎﾞﾝﾈｯﾄｶﾞｰﾆｯｼｭ】 ：ｶﾞﾝﾒﾀﾘｯｸ×ﾏｯﾄﾌﾞﾗｯｸ<br>
&nbsp;&nbsp;&nbsp;【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×ｶﾞﾝﾒﾀﾘｯｸ×ﾏｯﾄﾌﾞﾗｯｸ<br>
&nbsp;&nbsp;&nbsp;【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×ｶﾞﾝﾒﾀﾘｯｸ<br>
※ 本ﾊﾟｰﾂは純正ﾌﾛﾝﾄｶﾒﾗの移設に対応しておりますが、<br>
&nbsp;&nbsp;&nbsp;&nbsp;ﾊﾟｰﾂの一部がｶﾒﾗに映り込む可能性がございます。<br>
&nbsp;&nbsp;&nbsp;&nbsp;安全上の問題はございませんが、予めご了承ください。<br>
※ 車両登録前の本ﾊﾟｰﾂの架装はお控えください。<br>
※ 塗装・お取付後のｷｬﾝｾﾙ・返品・交換はお受けできかねます。

</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'023A4134_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'023A4134_1.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥158,000<span class="tax">¥173,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1236">見積もり</label> </td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i>¥65,000<span class="tax">¥71,500（税込）</span></td>
<td class="button">&nbsp;</td>
</tr>
</table>

</div> 



<!--<p class="title">コンプリートキット</p>
<div class="detail">
<div class="image">
<p class="text">
ハスラー本来が持つポップで柔らかい表情を引き出す、<br>
ネオクラシックフェイスで軽快なドライブを楽しもう！<br>
<br>
エクステリアからインテリアのシートカバーまで、<br>
CLASSICO<クラシコ>の全てを網羅したコンプリートキット。<br>
ホイールは不朽の名作DEAN CROSS COUNTRYセットアップ。
<span class="caution">
【キット内容】<br>
ﾌｪｲｽﾁｪﾝｼﾞｷｯﾄ / ｳｯﾄﾞｽﾄﾗｲﾌﾟ <ﾅﾁｭﾗﾙ> <br>
ｼｰﾄｶﾊﾞｰ CLASSICO <GRAY×CHECKED><br>
DEAN CROSS COUNTRY 4本セット<br>
(ホイールサイズ : 15ｲﾝﾁ×4.5J +43)<br>
<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 塗装済み品の場合、各ﾊﾟｰﾂの塗り分けは下記のとおりとなります。<br>
　 【ﾎﾞﾝﾈｯﾄﾌｰﾄﾞ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>
　 【ﾌﾛﾝﾄｸﾞﾘﾙ】 : 純正塗装色×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>
　 【ﾌﾛﾝﾄﾊﾞﾝﾊﾟｰ】 : ﾏｯﾄﾌﾞﾗｯｸ×粗目ﾏｯﾄｼﾙﾊﾞｰ<br>
※ DEAN Cross Countryのﾎｲｰﾙｶﾗｰはﾏｰｶﾞﾚｯﾄﾎﾜｲﾄとなります。<br>
※ 本ﾊﾟｰﾂは純正ﾌﾛﾝﾄｶﾒﾗの移設に対応しておりますが、<br>
　 ﾊﾟｰﾂの一部がｶﾒﾗに映り込む可能性がございます。<br>
　 安全上の問題はございませんが、予めご了承いただきますようお願い申し上げます。<br>
※ 各パーツの詳細・注意事項は各パーツ項目にてご確認ください。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。<br>
</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'classico_comp.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'classico_comp.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">2020年4月発売予定</td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1146">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥55,000<span class="tax">¥（税込）</span>	</td>
<td class="button">&nbsp;</td>
</tr> 
</table>
</div> -->


<p class="title">テールランプガーニッシュ　<a href="https://storage.googleapis.com/img-damd-co-jp/2023/07/8c83de40a89bfcb9a38e9226bbceee04.pdf"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
テールランプ内のメッキ部をブラックアウト。<br>
サイド部まで覆う形状により、<br>
ハスラーのリア周りをすっきりシンプルに。<br>
粗目マットブラック塗装でよりワイルドなリアビューへ。

<span class="caution">
※ ﾊﾟｰﾂの性質上、ｶﾊﾞｰのｻｲﾄﾞ部隙間からｳｨﾝｶｰの光が漏れます。<br>
&nbsp;&nbsp;&nbsp; 予めご了承の上、ご購入いただきますようお願い申し上げます。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 車両登録前の本ﾊﾟｰﾂの架装はお控えください。<br>
※ 塗装・お取付後のｷｬﾝｾﾙ・返品・交換はお受けできかねます。
</span>
</p>

<ul class="photo clearfix">
<!--<li><a href="{{ asset($image_pass.'CARABINA_khaki_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'CARABINA_khaki_2l.jpg') }}" alt="" title=""></a></li> -->
<li><a href="{{ asset($image_pass.'023A4273_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'023A4273_1.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">マットブラック塗装品</td>
<td class="price">¥29,000<span class="tax">¥31,900（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1231">見積もり</label> </td>
</tr>
</table>

</div> 





<p class="title">リアゲートガーニッシュ　<a href="https://storage.googleapis.com/img-damd-co-jp/2023/07/hustler-rear-gate-garnish_0712.pdf"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
粗目マットブラック塗装で仕上げられた<br>
横一文字の立体感あるパネルで、<br>
アメリカンピックアップのようなラギットスタイルをハスラーへ。

 <span class="caution">
※ CARABINAｴﾝﾌﾞﾚﾑは付属しておりません。<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 車両登録前の本ﾊﾟｰﾂの架装はお控えください。<br>
※ 塗装・お取付後のｷｬﾝｾﾙ・返品・交換はお受けできか
</span>
</p>
<ul class="photo clearfix">
<!--<li><a href="{{ asset($image_pass.'CARABINA_khaki_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'CARABINA_khaki_2.jpg') }}" alt="" title=""></a></li> -->
<li><a href="{{ asset($image_pass.'023A4264_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'023A4264_1.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<!--<tr>
<td class="item_name_sub">マットブラック塗装品</td>
<td class="price">¥39,000<span class="tax">¥42,900（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1232">見積もり</label> </td>
</tr> -->
<tr>
<td class="item_name_sub">マットブラック塗装品 <br class="sp"> 
&lt;エンブレム無し&gt;</td>
<td class="price">¥35,000<span class="tax">¥38,500（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1233">見積もり</label></td>
</tr>
</table>

</div> 


<p class="title">trip basket ルーフラック <a href="{{ asset($manual_pass.'roofrack.pdf') }}" target="_blank"><i class="fa fa-wrench"></i></a><a href="{{ asset($manual_pass.'roofrack-partslist.pdf') }}" target="_blank"><i class="fa fa-wrench"></i></a>　<span class="caution">HALF</span><a href="{{ asset($manual_pass.'roofrack_halfsize.pdf') }}" target="_blank"><i class="fa fa-wrench"></i></a><a href="{{ asset($manual_pass.'roofrack-partslist_halfsize.pdf') }}" target="_blank"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
インダストリアルなスチール製ルーフラックに、<br>
自然のぬくもりを感じるナチュラルウッドをセット。<br>
<br>
ウッドパネルにはラジアタパインと呼ばれる<br>
ニュージーランド産の松をアセチル化処理した、<br>
高耐久化天然木材 「アコヤ」を採用。<br>
<br>
無垢材の持つ風合い維持したまま、<br>
激しい温度の変化や乾燥などにも強い<br>
材質を使用しています。<br>
<br>
あなたとハスラーの思い出と共に、<br>
使い込むほど風合いに深みが出るアイテム。<br>
<br>
<strong>【待望のハーフサイズ登場！】</strong><br>
<br>
余ったスペースで、<br>
スキー板やサーフボードの積載が可能に。<br>
より遊びの幅が広がるハーフサイズがデビュー！
<br><br>
<span class="caution">
※ ﾙｰﾌﾗｯｸ本体/ｽﾁｰﾙ製 / ｶﾗｰはﾌﾞﾗｯｸとなります。<br>
&nbsp;&nbsp;&nbsp; ﾌﾙｻｲｽﾞ : 1350mm×1000mm×160mm / 重量 : 16kg<br>
&nbsp;&nbsp;&nbsp; ﾊｰﾌｻｲｽﾞ： 1350mm × 600mm × 160mm / 重量：13.5kg<br>
※ ﾍﾞｰｽｷｬﾘｱｷｯﾄでは、ﾙｰﾌﾗｯｸ単体に加えて<br>
&nbsp;&nbsp;&nbsp; MR52S/MR92S（ﾙｰﾌﾚｰﾙ無し車専用）ｶｰﾒｲﾄ社製<br>
&nbsp;&nbsp;&nbsp; INNOﾌｯﾄ(4個)とﾒｲﾝﾊﾞｰ(2本)が付属します。/ 重量 : 5kg<br>
※ 本製品は天然木材を使用している為、使用条件や経年劣化による<br>
&nbsp;&nbsp;&nbsp; 製品の反り、ヒビ割れ、日焼け等が発生する可能性がございます。<br>
&nbsp;&nbsp;&nbsp; 製品の性質上、そのような事例による返品·交換は致しかねます為、<br>
&nbsp;&nbsp;&nbsp; 予めご理解をいただいた上、ご購入をお願い申し上げます。<br>
※ 本製品はｽﾁｰﾙ製となり、防錆処理を施しておりますが、<br>
&nbsp;&nbsp;&nbsp; 長期間の継続使用ならびに使用環境等の要因により溶接部等へ<br>
&nbsp;&nbsp;&nbsp; 錆が発生する可能性がございます。予めご了承ください。<br>
※ 別途お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄·離島へお届けの場合、送料は着払いとなります。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装·お取付後のキャンセル·返品·交換はお受けできかねます。



</span>
</p>
<!--
<ul class="photo clearfix three">
<li><a href="{{ asset($image_pass.'TB-RR1_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'TB-RR1_1.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'TB-RR1_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'TB-RR1_2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'TB-RR1_3.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'TB-RR1_3.jpg') }}" alt="" title=""></a></li>
</ul>
-->
</div>
<table class="list">
<tr>
<td class="item_name_sub">ルーフラック（フルサイズ）
単体【TB-RR1】 <a href="{{ asset($image_pass.'TB-RR1_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($image_pass.'TB-RR1_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥59,000<span class="tax">¥64,900（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1133">見積もり</label>
<!--受注停止中 --></td>
</tr>
<tr>
<td class="item_name_sub">ベースキャリアキット（フルサイズ）
【TB-RRKMR】</td>
<td class="price">¥81,000<span class="tax">¥89,100（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1154">見積もり</label></td>
</tr>
<tr>
<td class="item_name_sub">ルーフラック（ハーフサイズ）
単体【TB-RR1】<!--  <a href="{{ asset($image_pass.'basket_half-size.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a>--></td>
<td class="price">¥56,000<span class="tax">¥61,600（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1298">見積もり</label>
<!--受注停止中 --></td>
</tr>
<tr>
<td class="item_name_sub">ベースキャリアキット（ハーフサイズ）
【TB-RRKMR】</td>
<td class="price">¥78,000<span class="tax">¥85,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1301">見積もり</label></td>
</tr>
<!--
<tr>
<td class="item_name_sub">ルーフラック (ハーフサイズ) 単体【TB-HR1】</td>
<td class="price">¥54,000<span class="tax">¥59,400（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1298">見積もり</label>
</td>
</tr>
<tr>
<td class="item_name_sub">キット (ハーフサイズ) 【TB-HRKMR】</td>
<td class="price">¥76,000<span class="tax">¥83,600	（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1301">見積もり</label>
</td>
</tr>
-->
</table>

</div> 




</div>




<div class="box title center">
<h4>インテリア</h4>
</div>

<div class="accordion">

<p class="title">シートカバー CARABINA</p>
<div class="detail">
<div class="image">
<p class="text">
懐かしく、優しい風合いの千鳥柄生地に、<br>
ダークグリーンの本革調PVCをコーディネート。<br>
暖かく、落ち着いたインテリア空間を演出します。
<span class="caution">
<span class="red">
※ 本製品はHYBRID Xﾀｰﾎﾞ / HYBRID Xｸﾞﾚｰﾄﾞの助手席側背面部に<br>
&nbsp;&nbsp;&nbsp; 標準装備されているﾊﾟｰｿﾅﾙﾃｰﾌﾞﾙへ対応しております。<br>
&nbsp;&nbsp;&nbsp; HYBIRID Gﾀｰﾎﾞ / HYBIRID G ｸﾞﾚｰﾄﾞにも装着は可能ですが、<br>
&nbsp;&nbsp;&nbsp; 助手席側背面部にﾊﾟｰｿﾅﾙﾃｰﾌﾞﾙ取付穴が標準で空いております為、<br>
&nbsp;&nbsp;&nbsp; 予めご了承の上、購入をご検討ください。<br>
</span>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。

</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'0L4A7390.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'0L4A7390.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'0L4A7404.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'0L4A7404.jpg') }}" alt="" title=""></a></li>
</ul>
</div><!--image -->
<table class="list">
<tr>
<td class="item_name_sub">BEIGE×HOUNDSTOOTH</td>
<td class="price">¥58,000<span class="tax">¥63,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1153">見積もり</label></td>
</tr>
</table>
</div><!--detail -->




</div>




</div>


</div>


<div class="sub_data accordion">

<h3 class="title">DATA</h3>
<div class="box detail">
<dl class="data clearfix">
<dt>形式
<dd>MR52S/MR92S
<dt>年式
<dd>2020.1〜	
<dt>ホイール
<dd>DAMD Cantabile 15inch×5J＋45
<dt>タイヤ
<dd>
OPEN COUNTRY 165/60R15	
<dt>サスペンション		
<dd>-					
</dl>
</div>

<h3 class="title">塗装色</h3>
<div class="box detail">
<h4>オリジナル塗装</h4>
<!--<ul>	
<li>マットブラック	
</ul> -->
<h4>純正色塗装</h4>
<ul>		
<li>クールカーキパールメタリック (ZVD)
<li>シフォンアイボリーメタリック (ZVG )
<li>オフブルーメタリック (ZYW )
<li>ピュアホワイトパール (ZVR)


</ul>
<p class="caution">※ 掲載のない純正塗装色は未塗装品をご購入いただき、お客様にて塗装のご手配を行って頂きますようお願い申し上げます。	
			
			
			
</div>


<h3 class="title">取り付け要項</h3>
<div class="box detail">
<ul>
<li>取り付け方法：両面テープ・専用ステー・ビス・ボルト／ナット類
<li>付属品：両面テープ・モール・ステー・ボルト／ナット・タッピングビス・プライマー等
<li>必要工具：脱脂剤（パーツクリーナー等）・ハサミ・ドライバー・スパナ・ドリル（タッピングビス下穴用）
</ul>
</div>

<h3 class="title">注意事項</h3>
<div class="box detail">
<ol>
<li>未塗装製品は、塗装前に必ず装着確認を行って下さい。</li>
<li>取り付け部品等は、開封後に必ずご確認をお願い致します。</li>
<li>取り付け作業は、安全な場所を確認後、施工してください。</li>
<li>専門業者での取り付け塗装をお勧め致します。</li>
</ol>
</div>

</div> 


<p class="clear">

<div class="movie-wrap clear">
<iframe width="560" height="315" src="https://www.youtube.com/embed/NfmE7A7SBkw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<p class="clear">

<section class="color" style="padding: 0;">
<p class="center"><img src="{{ asset($image_pass.'ttl_colorsample.png') }}" alt="" width="320"></p>
<ul class="list product column_3">
  
<li><a href="{{ asset($image_pass.'color/01.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/01.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/02.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/02.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/03.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/03.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/04.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/04.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/05.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/05.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'color/06.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'color/06.jpg') }}" alt="" title=""></a></li>
</ul>
</section>



</div><!--inner -->
</div><!--contents -->

</div>

<!--#include virtual="/common/footer.html" -->
@include('shared.products.footer')

<link rel="stylesheet" href="{{ asset('lib/bxslider/jquery.bxslider.css') }}">
<script src="{{ asset('lib/bxslider/jquery.bxslider.js') }}"></script>
<script src="{{ asset('lib/jquery.fitvids.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.bxslider').bxSlider({
    pagerCustom: '#bx-pager',
	mode: 'fade',
    controls: false,
	captions:true
});
});
</script>

<script>
jQuery(document).ready(function($) {
    //PC
    if (window.matchMedia( '(min-width: 800px)' ).matches) {
        /*$.ajax({
            url: 'pc.js',
            dataType: 'script',
            cache: false
       });*/
    //SP
    } else {
    $(document).ready(function() {
	$(".accordion .title").hover(function(){
		$(this).css("cursor","pointer"); 
	},function(){
		$(this).css("cursor","default"); 
		});
		
	$(".accordion .detail").css("display","none");
	
	$(".accordion .title").click(function(){
		$(this).next().slideToggle("fast");
		$(this).toggleClass("active"); 
		});
	
	});
  };
});
</script>


<!--<script>

$(window).on("load", function(){
    
    if (window.matchMedia( '(min-width: 800px)' ).matches) {
        
$.fancybox({
hideOnContentClick:true,
overlayShow:true,
type:'iframe',
width:600,
height:760,
href:'popup.html',
autoSize:false
}).click();


    } else {
		
$.fancybox({
hideOnContentClick:true,
overlayShow:true,
type:'iframe',
width:600,
height:420,
href:'popup.html',
autoSize:false
}).click();

  };
});
</script>-->

    
<!--#include virtual="/common/products_mitsumori.html" -->
@vite(['resources/js/form.js'])

<!--#include virtual="/common/products_modal.html" -->
</body>
</html>
