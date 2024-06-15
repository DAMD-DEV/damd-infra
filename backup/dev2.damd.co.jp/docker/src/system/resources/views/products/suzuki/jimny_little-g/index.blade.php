@php
  $company_pass = 'product_images/suzuki/';
  $image_pass   = 'product_images/suzuki/jimny_little-g/images/';
  $manual_pass  = 'product_images/suzuki/jimny_little-g/manual/';
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
<title>JIMNY “little G. STANDARD” SUZUKI | エアロパーツ、ドレスアップのダムド | DAMD Inc.</title>
<meta http-equiv="content-style-type" content="text/css" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />

<meta property="og:title" content="JIMNY “little G. STANDARD”｜SUZUKI | DAMD Inc."/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="細部までこだわりぬいたアイテムでベビーGの愛称をそのままパッケージ！ダムドが放つ、ジムニーのオマージュカスタム。 "/>
<meta property="og:url" content="https://www.damd.co.jp/products/suzuki/jimny_little-g/"/>
<meta property="og:image" content="https://www.damd.co.jp/products/suzuki/jimny_little-g/images/01.jpg"/>
<meta property="og:site_name" content="JIMNY “little G. STANDARD”｜SUZUKI | DAMD Inc."/>

@include('shared.products.product_head')

<style>

@media screen and (max-width: 800px) {
.detail table.list.stores td{
	display: block;
	width: 100%;
	text-align: center !important;
}
.detail table.list.stores td.item_name_sub{
	border-top: solid 1px #DDD;
}

.products .accordion .detail div.image ul.photo li, .products .accordion .detail div.image ul.photo.block li{
	display: block;
	width: 50%;
	float: left;
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
  <li>JIMNY “little G.”</li>
</ul>
</div>


<div id="contents" class="clearfix">

<div class="main_block normal">
    <div class="main_image"> <img src="{{ asset($image_pass.'main.jpg') }}" alt=""> </div>
    <div class="text">
      <p class="logo"><img src="{{ asset($image_pass.'logo.png') }}" alt=""></p>
      <p class="catch">都会派オフローダーの魔力</p>
      <p>ビル群やアスファルトを駆け抜け、<br>
荒ぶる山も乗り越える<br>
魅惑のクロスロード・ビークル。

<p>細部までこだわりぬいたアイテムで、<br>
ベビーGの愛称をそのままパッケージ！<br>
ダムドが放つ、ジムニーのオマージュカスタム。</p>
    </div>
  </div>
  

  
<div class="inner">

<div class="box title">
<h3>JIMNY “little G. STANDARD”</h3>
</div>

<!--<p>細部までこだわりぬいたアイテムでベビーGの愛称をそのままパッケージ！<br>
ダムドが放つ、ジムニーのオマージュカスタム。
</p>-->

<div id="sliderWrap">
<ul class="bxslider">
<li><img src="{{ asset($image_pass.'little-G_FRONT_MAIN_1.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'little-G_FRONT_MAIN_2.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'little-G_FRONT.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'little-G_SIDE.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'little-G_REAR.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'little-D_image_1.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'little-D_image_2.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'little-D_image_3.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'little-D_image_4.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'little-D_image_5.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'little-G_S_C_W_1.jpg') }}" alt="" title=""></li>
<li><img src="{{ asset($image_pass.'little-G_S_C_W_2.jpg') }}" alt="" title=""></li>
</ul>
<p class="caution">※イメージ画像です
<div id="bx-pager">
  <a data-slide-index="0" href=""><img src="{{ asset($image_pass.'little-G_FRONT_MAIN_1.jpg') }}" alt=""></a>
  <a data-slide-index="1" href=""><img src="{{ asset($image_pass.'little-G_FRONT_MAIN_2.jpg') }}" alt=""></a>
  <a data-slide-index="2" href=""><img src="{{ asset($image_pass.'little-G_FRONT.jpg') }}" alt=""></a>
  <a data-slide-index="3" href=""><img src="{{ asset($image_pass.'little-G_SIDE.jpg') }}" alt=""></a>
  <a data-slide-index="4" href=""><img src="{{ asset($image_pass.'little-G_REAR.jpg') }}" alt=""></a>
  <a data-slide-index="5" href=""><img src="{{ asset($image_pass.'little-D_image_1.jpg') }}" alt=""></a>
  <a data-slide-index="6" href=""><img src="{{ asset($image_pass.'little-D_image_2.jpg') }}" alt=""></a>
  <a data-slide-index="7" href=""><img src="{{ asset($image_pass.'little-D_image_3.jpg') }}" alt=""></a>
  <a data-slide-index="8" href=""><img src="{{ asset($image_pass.'little-D_image_4.jpg') }}" alt=""></a>
  <a data-slide-index="9" href=""><img src="{{ asset($image_pass.'little-D_image_5.jpg') }}" alt=""></a>
  <a data-slide-index="10" href=""><img src="{{ asset($image_pass.'little-G_S_C_W_1.jpg') }}" alt=""></a>
  <a data-slide-index="11" href=""><img src="{{ asset($image_pass.'little-G_S_C_W_2.jpg') }}" alt=""></a>
  
</div>
</div>


<!--<br><br>

<p class="catch center">現在開発中。<br>
2019年 発売予定。
<p class="center">販売価格・パーツ等 詳細は<br>
決まり次第 配信予定です 。
<p class="center">メールアドレスのご登録で、<br>「DAMD little G. / little D.」<br>の最新情報をお知らせします！

<br><br>

<p class="center"><a href="/jimny_info/" class="btn size_l">最新情報を受け取る</a></p>


<br><br> -->

<div class="main_data">

<div class="banner center"><a href="/complete/tax/"><img src="{{ asset($image_pass.'bnr_little-G_K.jpg') }}" alt=""></a></div>

<div class="box title center">
<h4>エクステリア</h4>
</div>
 
<div class="accordion">

<p class="title">little G. STANDARD コンプリートキット &amp; &quot;little G.&quot;ホイール<!--<a href="{{ asset($manual_pass.'05.pdf') }}"><i class="fa fa-wrench"></i></a> --></p>
<div class="detail">
<div class="image">
<p class="text">
little G.ホイールからエンブレムまで網羅した<br>
完全コンプリートパッケージ。<br>
ディテールにこだわった完成度の高い一台を仕立てます。
<span class="caution">
【キット内容】<br>
フロントグリル / フロントバンパ- / フェンダ-パネル<br>
サイドモ-ル / スペアタイヤカバ- ＜ステンレスバンド＞ <br>
G066エンブレム / little G. WHEEL 4本セット 【16×5.5J +20】<br>
<br>
【リアバンパーについて】<br>
イメージ画像ならびに弊社デモカーでは、<br>
純正リアバンパーのシボを落とし、ボディ色に塗装を行なっております。<br>
コンプリートキットにはリアバンパーは付属しておりませんので、<br>
現在装着されているリアバンパーをボディ色に塗装していただくか、<br>
下記「純正リアバンパー (塗装済品)」を別途ご購入下さい。<br>
<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ little G.ホイールはシルバ- ・ ブラックからお選び下さい。<br>
※ 付属のスペアタイヤカバーはステンレスバンド仕様となります。<br>
　 ブラックバンド仕様はご選択できません。予めご了承ください。<br>
※ 付属の網はブラックとなります。<br>
※ 各パーツの詳細・注意事項は各パーツ項目にてご確認ください。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。
</span>
</p>
<!--<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'Stainless-Window-Trim-Satin-silver.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'Stainless-Window-Trim-Satin-silver.jpg') }}" alt="" title=""></a></li>
</ul> -->
</div>
<table class="list">
<!--<tr>
<td class="item_name_sub">未塗装品素地【ホイール5本】</td>
<td class="price">¥340,000<span class="tax">¥（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="916">見積もり</label></td>
</tr> -->
<tr>
<td class="item_name_sub">未塗装品素地<br>
【ホイール4本】</td>
<td class="price">¥310,000<span class="tax">¥341,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="967">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥65,000<span class="tax">¥71,500（税込）</span>	</td>
<td class="button">&nbsp;</td>
</tr>
<tr>
<td class="item_name_sub">純正リアバンパー (塗装済品)</td>
<td class="price">¥78,000<span class="tax">¥85,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="920">見積もり</label></td>
</tr>
</table>
</div>



<p class="title">little G. STANDARD コンプリートキット<!--<a href="{{ asset($manual_pass.'05.pdf') }}"><i class="fa fa-wrench"></i></a> --></p>
<div class="detail">
<div class="image">
<p class="text">
エンブレムまで含めた"little G."コンプリートキット。<br>
※ボディキットのみとなり、.ホイールは付属しておりません。
<br>
<span class="caution">
【キット内容】<br>
フロントグリル / フロントバンパ- / フェンダ-パネル<br>
サイドモ-ル / スペアタイヤカバ- ＜ステンレスバンド＞ / G066エンブレム<br>
<br>
【リアバンパーについて】<br>
イメージ画像ならびに弊社デモカーでは、<br>
純正リアバンパーのシボを落とし、ボディ色に塗装を行なっております。<br>
コンプリートキットにはリアバンパーは付属しておりませんので、<br>
現在装着されているリアバンパーをボディ色に塗装していただくか、<br>
下記「純正リアバンパー (塗装済品)」を別途ご購入下さい。<br>
<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 付属のスペアタイヤカバーはステンレスバンド仕様となります。<br>
　 ブラックバンド仕様はご選択できません。予めご了承ください。<br>
※ 付属の網はブラックとなります。<br>
※ 各パーツの詳細・注意事項は各パーツ項目にてご確認ください。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。
</span>
</p>
<!--<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'Stainless-Window-Trim-Satin-silver.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'Stainless-Window-Trim-Satin-silver.jpg') }}" alt="" title=""></a></li>
</ul> -->
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥220,000<span class="tax">¥242,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="917">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥65,000<span class="tax">¥71,500（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
<tr>
<td class="item_name_sub">純正リアバンパー (塗装済品)</td>
<td class="price">¥78,000<span class="tax">¥85,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="920">見積もり</label></td>
</tr>
</table>
</div>



<p class="title">little G. STANDARD フロントグリル <a href="{{ asset($manual_pass.'jb64_74_G_fg_231006.pdf') }}"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
走りを予感させるスポーティーな開口部に、<br>
あえて別体としたメッキパーツを加え、<br>
高級感に満ちた高い質感を実現。<br>
被視認性の高い縦型LEDウィンカーとddエンブレムを付属。
<span class="caution">
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 網はブラックとなります。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。

</span>
</p>
<ul class="photo three clearfix">
<li><a href="{{ asset($image_pass.'little-G_FG_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'little-G_FG_1.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'little-G_FG_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'little-G_FG_2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'little-G_FG_3.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'little-G_FG_3.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥48,000<span class="tax">¥52,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="930">見積もり</label>  <!--2019年 秋 発売開始予定--></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥11,000<span class="tax">¥12,100（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
</table>
</div>



<p class="title">little G. STANDARD フロントバンパー <a href="{{ asset($manual_pass.'jb64_G_front_bumper_231006.pdf') }}"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
面構成にこだわったスケールダウンを感じさせない力強い造形。<br>
中央部のメッキパーツが重厚で気品あるフロントフェイスを演出します。
<span class="caution">
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 網はブラックとなります。<br>
※ フォグランプは純正を流用。<br>
  (XGｸﾞﾚ-ﾄﾞへ装着する場合別途ﾌｫｸﾞﾗﾝﾌﾟの購入が必要となります。）<br>
※ 塗装済品はボディ色×マットシルバーの２色塗り分けとなります。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。

</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'little-G_FB.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'little-G_FB.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥58,000<span class="tax">¥63,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="919">見積もり</label> <!--2019年 秋 発売開始予定--></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥23,000<span class="tax">¥25,300（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr> 
</table>
</div>



<p class="title">純正リアバンパー (純正塗装済品)<!--<a href="{{ asset($manual_pass.'05.pdf') }}"><i class="fa fa-wrench"></i></a> --></p>
<div class="detail">
<div class="image">
<p class="text">
純正リアバンパーのシボを落とし、<br>
ボディ色に仕上げたリアバンパー。<br>
一手間加えることで、よりまとまったリアビューへ。

<span class="caution">
<span class="red">※ 本製品は、2024年1月以降受注を開始している<br>
&nbsp;&nbsp;&nbsp;&nbsp;ﾘｱﾊﾟｰｷﾝｸﾞｾﾝｻｰ＜ﾊﾞｯｸｿﾅｰ＞装着車には対応しておりません。<br>
&nbsp;&nbsp;&nbsp;&nbsp;ご注文際は必ずご確認いただきますようお願い申し上げます。
</span>
<br>
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ こちらの製品は塗装済み設定のみとなります。<br>
※ お取付後のキャンセル・返品・交換はお受けできかねます。
</span>
</p>
<!--<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'Stainless-Window-Trim-Satin-silver.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'Stainless-Window-Trim-Satin-silver.jpg') }}" alt="" title=""></a></li>
</ul> -->
</div>
<table class="list">
<tr>
<td class="item_name_sub">&nbsp;</td>
<td class="price">¥78,000<span class="tax">¥85,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="920">見積もり</label> <!--2019年 秋 発売開始予定--></td>
</tr>
</table>
</div>



<p class="title">フェンダーパネル <a href="{{ asset($manual_pass.'jb64_G_FP_231006.pdf') }}"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
サイド部にボリューム与える、全８ピースのフェンダーパネル。<br>
ホイールアーチと前後バンパーとの繋がりにこだわり、<br>
存在感のあるたくましいサイドプロポーションを生み出します。
<span class="caution">
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'little-G_FP_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'little-G_FP_1.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'little-G_FP_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'little-G_FP_2.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地</td>
<td class="price">¥48,000<span class="tax">¥52,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="921">見積もり</label> <!--2019年 秋 発売開始予定--></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥20,000<span class="tax">¥22,000（税込）</span> </td>
<td class="button">&nbsp;</td>
</tr>
</table>
</div>


<div>
<p class="title">スペアタイヤカバー <a href="{{ asset($manual_pass.'jb64_74_G_TC.pdf') }}"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
中央部にddエンブレムを配し、特徴的なリアビューを再現。<br>
ステンレスバンドには盗難防止用の鍵も付属しています。<br>
<br>
DIYでも装着可能なライトアイテムに、<br>
ステンレスバンド部をピアノブラックで仕上げた<br>
特別仕様<ブラックバンド>が新たに登場！
<br>
<span class="caution">
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 塗装済み品はセンターディスク部がボディ色×ブラックとなります。<br>
※ 塗装済品はｾﾝﾀｰﾃﾞｨｽｸ部が純正塗装色×ﾋﾟｱﾉﾌﾞﾗｯｸとなります。<br>
※ ｽﾍﾟｱﾀｲﾔｶﾊﾞｰのｽﾃﾝﾚｽﾊﾞﾝﾄﾞ対応推奨ｻｲｽﾞ<br>
　 ＜195/80/R15 ﾀｲﾔ外径685mm～695mm/ﾀｲﾔ幅：175mm～195mm＞<br>
　 上記ｻｲｽﾞ内であってもﾀｲﾔ断面形状により装着に適さない場合や、<br>
　 ﾀｲﾔ幅がｽﾃﾝﾚｽﾊﾞﾝﾄﾞからはみ出す場合がございます。<br>
　 予めご了承の上、ご検討いただきますようお願い申し上げます。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。
</span>
</p>
<!--
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'little-G_ADV_T-C.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'little-G_ADV_T-C.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($image_pass.'little-G_T-C_black.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'little-G_T-C_black.jpg') }}" alt="" title=""></a></li>
</ul>
-->
</div>
<table class="list">
<tr>
<td class="item_name_sub">未塗装品素地 / ステンレスバンド　<a href="{{ asset($image_pass.'little-G_ADV_T-C.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥58,000<span class="tax">¥63,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="918">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥16,000<span class="tax">17,600（税込）</span></td>
<td class="button">&nbsp;</td>
</tr>
<tr>
<td class="item_name_sub">未塗装品素地 / ブラックバンド　<a href="{{ asset($image_pass.'little-G_T-C_black.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥68,000<span class="tax">¥74,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="1291">見積もり</label></td>
</tr>
<tr>
<td class="option">別途塗装代</td>
<td class="price option"><i class="fa fa-plus-circle"></i> ¥16,000<span class="tax">17,600（税込）</span></td>
<td class="button">&nbsp;</td>
</tr>
</table>
</div>
</div>


<p class="title">little G. STANDARD サイドモール <a href="{{ asset($manual_pass.'JB64_74-Side molding-partslist_1006.pdf') }}"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
シンプルなゴムサイドモールに、<br>
メイドインジャパンの高級ステンレスプレートを付属。<br>
各端末部にはエンドキャップを加え、細部まで妥協しない<br>
ダムドらしいアクセントパーツに仕上がりました。

<span class="caution">
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ お取付後のキャンセル・返品・交換はお受けできかねます。
</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'little-G_SM.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'little-G_SM.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">&nbsp;</td>
<td class="price">¥28,000<span class="tax">¥30,800（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="922">見積もり</label> <!--2019年 秋 発売開始予定--></td>
</tr>
</table>
</div>



<p class="title">G066エンブレム <a href="{{ asset($manual_pass.'jb64_74_G_emblem_1012.pdf') }}"><i class="fa fa-wrench"></i></a></p>
<div class="detail">
<div class="image">
<p class="text">
細部までこだわりぬきたいアナタに。<br>
軽自動車用のG066エンブレムを用意しました。
<span class="caution">
※ 別途送料・お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ お取付後のキャンセル・返品・交換はお受けできかねます。</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($image_pass.'little-G_G066.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($image_pass.'little-G_G066.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list">
<tr>
<td class="item_name_sub">&nbsp;</td>
<td class="price">¥2,800<span class="tax">¥3,080（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="923">見積もり</label> <!--2019年 秋 発売開始予定--></td>
</tr>
</table>
</div>




<p class="title">little G. ホイール ( 16×5.5J +20 )	 
<!-- <a href="{{ asset($manual_pass.'01.pdf') }}"><i class="fa fa-wrench"></i></a> --></p>
<div class="detail">
<img src="{{ asset($image_pass.'wheel_banner.jpg') }}" alt="">
<div class="image">
<p class="text">
目指したのはジムニーで他に類を見ないホイール。<br>
シンプルながらエッジの効いた曲面で構成され、<br>
純正同等サイズながら重厚で気品のあるホイールに。
<span class="caution">
※ 価格はホイールのみの税別価格となります。<br>
※ 個人宅への配送は不可となります。予めご了承下さい。<br>
※ １本〜３本ご注文の場合、別途送料が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
　 (5本セット、4本セットも送料が発生致します。)<br>
※ お取付後のキャンセル・返品・交換はお受けできかねます。<br>
※ デモカー装着タイヤ TOYO TIRE PROXES C1S 205/65R/16
</span>
</p>
<ul class="photo clearfix">
<!--<li>
<a href="{{ asset($image_pass.'DAMD-little-G_Wheel_Silver.jpg') }}" class="fancybox" title="" rel=""><img src="{{ asset($image_pass.'DAMD-little-G_Wheel_Silver.jpg') }}"><i class="fa fa-camera-retro"></i></a>
</li>
<li>
<a href="{{ asset($image_pass.'DAMD-little-G_Wheel_Black.jpg') }}" class="fancybox" title="" rel=""><img src="{{ asset($image_pass.'DAMD-little-G_Wheel_Black.jpg') }}"><i class="fa fa-camera-retro"></i></a>
</li> -->
<li>
<a href="{{ asset($image_pass.'little-G_WHEEL_S.jpg') }}" class="fancybox" title="" rel=""><img src="{{ asset($image_pass.'little-G_WHEEL_S.jpg') }}"><i class="fa fa-camera-retro"></i></a>
</li>
<li>
<a href="{{ asset($image_pass.'little-G_WHEEL_B.jpg') }}" class="fancybox" title="" rel=""><img src="{{ asset($image_pass.'little-G_WHEEL_S.jpg') }}"><i class="fa fa-camera-retro"></i></a>
</ul>
</div>
<h5>5本セット 【送料込み】	</h5>
<table class="list">
<tr>
<td class="item_name_sub">シルバー</td>
<td class="price">¥145,000<span class="tax">¥159,500（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="924">見積もり</label></td>
</tr>
<tr>
<td class="item_name_sub">ブラック </td>
<td class="price">¥150,000<span class="tax">¥165,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="925">見積もり</label></td>
</tr>
<tbody class="main">
</tbody>
</table>
<h5>4本セット 【送料込み】	</h5>
<table class="list">
<tr>
<td class="item_name_sub">シルバー</td>
<td class="price">¥116,000<span class="tax">¥127,600（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="929">見積もり</label> </td>
</tr>
<tr>
<td class="item_name_sub">ブラック </td>
<td class="price">¥120,000<span class="tax">¥132,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="927">見積もり</label></td>
</tr>
<tbody class="main">
</tbody>
</table>
<h5>単品 </h5>
<table class="list">
<tr>
<td class="item_name_sub">シルバー</td>
<td class="price">¥29,000<span class="tax">¥31,900（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="926">見積もり</label></td>
</tr>
<tr>
<td class="item_name_sub">ブラック </td>
<td class="price">¥30,000<span class="tax">¥33,000（税込）</span></td>
<td class="button"><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="928">見積もり</label></td>
</tr>
<tbody class="main">
</tbody>
</table>
</div>


</div>


<div class="box title center">
<h4>インテリア</h4>
</div>
<div class="accordion">


<p class="title">little G. シートカバー	<!-- <a href="{{ asset($manual_pass.'01.pdf') }}"><i class="fa fa-wrench"></i></a> --></p>
<div class="detail">
<div class="image">
<p class="text">
欧州高級車にも採用される高級素材<br>
ウルトラスエード®を贅沢に使用。<br>
重厚さと気品に満ちた上質な室内空間を演出します。<br>
座面と背もたれ部にはサイズ感にこだわったキルト加工を施し、<br>
メリハリのあるデザインとクッション製の高い座り心地を実現しました。
<span class="caution">※ XGグレードへの装着は不可となります。<br>
※ 別途送料·お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ お取付後のキャンセル・返品・交換はお受けできかねます。</span></p>
</div>
<table class="list">
<tr>
<td class="item_name_sub">WHITE <a href="{{ asset($image_pass.'little-G_S_C_W_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($image_pass.'little-G_S_C_W_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥58,000<span class="tax">¥63,800（税込）</span></td>
<td class="button"><!--<a href="https://damd.stores.jp/items/5d837635ff78bd7a09b8d410" target="_blank" class="btn size_ss">購入する</a> --><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="981">見積もり</label></td>
</tr>
<tr>
<td class="item_name_sub">BLACK <a href="{{ asset($image_pass.'little-G_S_C_B_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($image_pass.'little-G_S_C_B_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
<td class="price">¥58,000<span class="tax">¥63,800（税込）</span></td>
<td class="button"><!--<a href="https://damd.stores.jp/items/5d837523bc45ac3fca69bdf2" target="_blank" class="btn size_ss">購入する</a> --><label for="modal-trigger" class="btn size_ss mitsumori" data-item_id="982">見積もり</label></td>
</tr>
<tbody class="main">
</tbody>
</table>



<p class="title">アーセナルピラー<span class="new"><script>newUp(2023,9,8,"new")</script></span></p>
<div class="detail">
<div class="image">
<p class="text">
ピカティニーレールがセットされたミリタリーAピラー。<br>
遊び心をくすぐるラギットなデザインに、<br>
別売アタッチメントで用途に合わせたガジェット取付が可能。<br>
純正インテリアに合わせた表面仕上げとブラックカラーで、<br>
室内空間の引き締めも同時に叶えます。<br>
<br>
オプションアタッチメントを全て含めた<br>
フルアタッチメントキットもご用意。<br>
<br>
<span class="caution">
<strong>ﾌﾙｱﾀｯﾁﾒﾝﾄｷｯﾄ内容</strong><br>
ｱｰｾﾅﾙﾋﾟﾗｰ本体(L/R) / ｽﾏﾌｫﾎﾙﾀﾞｰ本体<br>
GO PROﾏｳﾝﾄ本体 / ｱｰﾑ×2 / ﾚｰﾙﾏｳﾝﾄ×2<br>
1inchｱﾙﾐﾎﾞｰﾙﾍｯﾄﾞ×2 / ﾌﾛﾝﾄﾋﾞｭｰﾐﾗｰ<br>
<br>
<strong>ｽﾏﾌｫﾎﾙﾀﾞｰｷｯﾄ内容</strong><br>
P45:V54<br>
ｽﾏﾌｫﾎﾙﾀﾞｰ本体 / ﾚｰﾙﾏｳﾝﾄ<br>
ｱｰﾑ / 1inchｱﾙﾐﾎﾞｰﾙﾍｯﾄﾞ<br>
<br>
<strong>GO PROﾏｳﾝﾄｷｯﾄ内容</strong><br>
GO PROﾏｳﾝﾄ本体 / ﾚｰﾙﾏｳﾝﾄ<br>
ｱｰﾑ / 1inchｱﾙﾐﾎﾞｰﾙﾍｯﾄﾞ<br>
<br>
※ ﾌﾛﾝﾄﾋﾞｭｰﾐﾗｰのお取付は、<br>
&nbsp;&nbsp;&nbsp; 助手席側ﾋﾟﾗｰ本体に穴開け加工が必要となります。<br>
※ GO PROﾏｳﾝﾄｷｯﾄにはGO PRO本体側に装着する<br>
&nbsp;&nbsp;&nbsp; 取付ﾏｳﾝﾄ・ｶﾞｼﾞｪｯﾄ等は含まれておりません。ご注意ください。<br>
※ 取付ｻｰﾋﾞｽの取付工賃は、純正ﾋﾟﾗｰとの交換及び<br>
&nbsp;&nbsp;&nbsp; ｵﾌﾟｼｮﾝｱﾀｯﾁﾒﾝﾄ品取付のみの工賃となります。<br>
&nbsp;&nbsp;&nbsp; 別途ﾊﾟｰﾂ(ﾂィｰﾀｰ等)が装着されていた場合の<br>
&nbsp;&nbsp;&nbsp; 取外し・移設、ｵﾌﾟｼｮﾝ品への車載器取付・配線等の<br>
&nbsp;&nbsp;&nbsp; 追加工賃は含まれておりません。<br>
&nbsp;&nbsp;&nbsp; 追加ｹｰｽが発生した場合は、別途追加工賃が発生いたします。<br>
&nbsp;&nbsp;&nbsp; 予めご了承ください。<br>
※ 別途お取付業者様でのお取付工賃が発生致します。<br>
※ 沖縄・離島へお届けの場合、送料は着払いとなります。<br>
※ 車両登録前の本パーツの架装はお控えください。<br>
※ 塗装・お取付後のキャンセル・返品・交換はお受けできかねます。
</span>
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($company_pass.'images/pillar_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/pillar_1.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/pillar_3-2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/pillar_3-2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/pillar_4-2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/pillar_4-2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/pillar_9.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/pillar_9.jpg') }}" alt="" title=""></a></li>
</ul>
</div><!--image -->
<table class="list stores">
<tbody><tr>
  <td class="item_name_sub">フルアタッチメントキット <a href="{{ asset($company_pass.'images/pillar_1.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
  <td class="price">
    ¥29,000<span class="tax">¥31,900（税込）</span></td>
  <td class="button"><div class="storesjp-button" data-storesjp-item="64eeb9855ddc5d0060cd94ee" data-storesjp-variation="64eeb9855ddc5d0060cd94ef" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
</tr>
  <tr>
    <td class="item_name_sub">ピラー本体 L/R <a href="{{ asset($company_pass.'images/pillar_2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($company_pass.'images/pillar_9.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥18,000<span class="tax">¥19,800（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64eeb839d952300033e7fb2f" data-storesjp-variation="64eeb839d952300033e7fb30" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">スマフォホルダーキット <a href="{{ asset($company_pass.'images/pillar_3.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($company_pass.'images/pillar_3-2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥5,800<span class="tax">¥6,380（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64eebd194fb490003d861dae" data-storesjp-variation="64eebd194fb490003d861daf" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">GO PROマウントキット <a href="{{ asset($company_pass.'images/pillar_4.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($company_pass.'images/pillar_4-2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥4,800<span class="tax">¥5,280（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64eebde32ce5f60029f291b9" data-storesjp-variation="64eebde32ce5f60029f291ba" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">フロントビューミラー <a href="{{ asset($company_pass.'images/pillar_5.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a> <a href="{{ asset($company_pass.'images/pillar_5-2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥2,800<span class="tax">¥3,080（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64eebc1f248f8c002b7992f9" data-storesjp-variation="64eebc1f248f8c002b7992fa" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">１inchアルミボールヘッド <a href="{{ asset($company_pass.'images/pillar_6.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥1,800<span class="tax">¥1,980（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64f4a4b4e47f10002ceb7a10" data-storesjp-variation="64f4a4b4e47f10002ceb7a11" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">ジョイントアーム単品 <a href="{{ asset($company_pass.'images/pillar_7.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥1,800<span class="tax">¥1,980（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64f4a5687beeeb0031bfe93f" data-storesjp-variation="64f4a5687beeeb0031bfe940" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
  <tr>
    <td class="item_name_sub">レールマウント単品 <a href="{{ asset($company_pass.'images/pillar_8.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i></a></td>
    <td class="price">
      ¥2,800<span class="tax">¥3,080（税込）</span></td>
    <td class="button"><div class="storesjp-button" data-storesjp-item="64f4a3e3e47f10002ceb79eb" data-storesjp-variation="64f4a3e3e47f10002ceb79ec" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script></td>
  </tr>
</tbody>
</table>
</div><!--detail -->





</div>



<p class="title">trip basket ドリンクホルダー【送料込】 <span class="sub green">ONLINE 限定</span></p>
<div class="detail">
<div class="image">
<p class="text">
天然木の無垢材と幾何学的な曲げ加工を施された<br>
ステンレス棒材が組み合わさった<br>
ナチュラルテイストのドリンクホルダー。<br>
<br>
缶、ペットボトル、紙パックまで<br>
多様なサイズのドリンクに対応し、<br>
底面のコースターには高耐久のコルクを使い、<br>
保温性の維持と振動音を防止しています。	

</p>
<ul class="photo clearfix">
<li><a href="{{ asset($company_pass.'images/drinkholder/DH-untenseki.png') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DH-untenseki.png') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DH-jyosyuseki.png') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DH-jyosyuseki.png') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DH-explain.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DH-explain.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DHLO2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DHLO2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DHNA.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DHNA.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DHTS2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DHTS2.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list stores">
<tr>
<td class="item_name_sub">NATURAL 【TB-DHNA】</td>
<td class="price">¥18,000<span class="tax">¥19,800（税込）</span> </td>
<td class="button">
<div class="storesjp-button" data-storesjp-item="625ea33388dc6522b9acb808" data-storesjp-variation="625ea33388dc6522b9acb80f" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>							
</td>
</tr>
<tr>
<td class="item_name_sub">LIGHT OAK 【TB-DHLO】</td>
<td class="price">¥18,000<span class="tax">¥19,800（税込）</span> </td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625ea33388dc6522b9acb808" data-storesjp-variation="625ea33388dc6522b9acb80e" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>							</td>
</tr>
<tr>
<td class="item_name_sub">DARK OAK 【TB-DHDO】</td>
<td class="price">¥18,000<span class="tax">¥19,800（税込）</span></td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625ea33388dc6522b9acb808" data-storesjp-variation="625ea33388dc6522b9acb810" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>							</td>
</tr>
<tr>
<td class="item_name_sub">TOBACCO SUNBURST 【TB-DHTSB】</td>
<td class="price">¥24,000<span class="tax">¥26,400（税込）</span></td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625f9e492023976e3a7cc086" data-storesjp-variation="625f9e492023976e3a7cc08a" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>							</td>
</tr>
</table>

</div>




<p class="title">trip basket ドリンクホルダー &amp; テーブル【送料込】 <span class="sub green">ONLINE 限定</span></p>
<div class="detail">
<div class="image">
<p class="text">
天然木材のドリンクホルダーとテーブルのセット。<br>
<br>
テーブルの固定は強力なネオジューム磁石を使用し、<br>
安全性を考慮しながら、取り外しも簡単。<br>
外したテーブルはドアポケットに収納することができます。<br>
<span class="caution">
※ 助手席エアバックの関係上、 走行中は必ずテーブルを取り外してご利用ください。						
</span>					
	
</p>
<ul class="photo clearfix">
<li><a href="{{ asset($company_pass.'images/drinkholder/DTimage.png') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTimage.png') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTimage2.png') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTimage2.png') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTNA.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTNA.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTNA2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTNA2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTLO.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTLO.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTLO2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTLO2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTDO.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTDO.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTDO2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTDO2.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTTS.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTTS.jpg') }}" alt="" title=""></a></li>
<li><a href="{{ asset($company_pass.'images/drinkholder/DTTS2.jpg') }}" class="fancybox" title="" rel="sheetcover"><i class="fa fa-camera-retro"></i><img src="{{ asset($company_pass.'images/drinkholder/DTTS2.jpg') }}" alt="" title=""></a></li>
</ul>
</div>
<table class="list stores">
<tr>
<td class="item_name_sub">NATURAL 【TB-DHTNA】</td>
<td class="price">¥25,000<span class="tax">¥27,500（税込）</span> </td>
<td class="button">
<div class="storesjp-button" data-storesjp-item="625f8d853463e757201c69c6" data-storesjp-variation="625f8d853463e757201c69d2" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>												
</td>
</tr>
<tr>
<td class="item_name_sub">LIGHT OAK 【TB-DHLO】</td>
<td class="price">¥25,000<span class="tax">¥27,500（税込）</span> </td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625f8d853463e757201c69c6" data-storesjp-variation="625f8d853463e757201c69d3" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>												</td>
</tr>
<tr>
<td class="item_name_sub">DARK OAK 【TB-DHDO】</td>
<td class="price">¥25,000<span class="tax">¥27,500（税込）</span></td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625f8d853463e757201c69c6" data-storesjp-variation="625f8d853463e757201c69d4" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>													</td>
</tr>
<tr>
<td class="item_name_sub">TOBACCO SUNBURST 【TB-DHTSB】</td>
<td class="price">¥30,000<span class="tax">¥33,000（税込）</span></td>
<td class="button"><div class="storesjp-button" data-storesjp-item="625fa08408e5e225c24efd3f" data-storesjp-variation="625fa14a6b87c37a9d2b4ce8" data-storesjp-name="damd" data-storesjp-layout="layout_c" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>													</td>
</tr>
</table>

</div>

</div>

</div>



<div class="sub_data accordion">

<h3 class="title">DATA</h3>
<div class="box detail">
<dl class="data clearfix">
<dt>形式
<dd>JB64
<dt>年式
<dd>2018.7〜
<dt>ホイール
<dd>DAMD little G Wheel 16inch×5.5J +20
<dt>タイヤ
<dd>TOYO TIRE PROXES C1S 205/65R/16
<dt>サスペンション
<dd>-
</dl>
</div>

<h3 class="title">塗装色</h3>
<div class="box detail">
<h4>オリジナル塗装</h4>
<ul>
<li>ピュアホワイトパール（ZVR）
<li>ブルーイッシュブラックパール3（ZJ3）
<li>ジャングルグリーン（ZZC）
<!--<li>ピュアホワイトパール（ZVR）			
<li>シルキーシルバーメタリック（Z2S）			
<li>ジャングルグリーン（ZZC）			
<li>ブルーイッシュブラックパール3（ZJ3）			
<li>ミディアムグレー（ZVL）			
<li>ブリスクブルーメタリック（ZWY）			
<li>シフォンアイボリーメタリック（ZVG）			
<li>キネティックイエロー（ZZB）		
<li>スペリアホワイト (26U) 	 -->	
</ul>
<p class="caution">
<strong>【掲載のない塗装色について】</strong><br>
<br>
設定のない塗装色は、未塗装品をご購入いただき、お客様にて塗装のご手配を行って頂きますようお願い申し上げます。<br>
<br>
<a href="/faq/#ewd-ufaq-faq-category-painting">未塗装品とは？</a><br>
<br> 
<strong>【塗装済品について】</strong><br>
<br>
塗装済商品の塗装色は、各自動車メーカー指定の色
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



<section class="color" style="padding: 0;">
<p class="center"><img src="{{ asset($image_pass.'colorsample_banner_G.jpg') }}" alt="" width="320"></p>
<ul class="list product column_3">
<li><a href="{{ asset($image_pass.'JIMNY_LITTLE-G_blue.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'JIMNY_LITTLE-G_blue.jpg') }}"></a></li>
<li><a href="{{ asset($image_pass.'JIMNY_LITTLE-G_gray.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'JIMNY_LITTLE-G_gray.jpg') }}"></a></li>
<li><a href="{{ asset($image_pass.'JIMNY_LITTLE-G_ivory.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'JIMNY_LITTLE-G_ivory.jpg') }}"></a></li>
<li><a href="{{ asset($image_pass.'SIERRA_LITTLE-G_green.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'SIERRA_LITTLE-G_green.jpg') }}"></a></li>
<li><a href="{{ asset($image_pass.'SIERRA_LITTLE-G_silver.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'SIERRA_LITTLE-G_silver.jpg') }}"></a></li>
<li><a href="{{ asset($image_pass.'SIERRA_LITTLE-G_yellow.jpg') }}" class="fancybox" rel="color"><img src="{{ asset($image_pass.'SIERRA_LITTLE-G_yellow.jpg') }}"></a></li>
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
height:390,
href:'popup.html',
autoSize:false
}).click();

  };
});
</script> -->

 


<!--#include virtual="/common/products_mitsumori.html" -->
@vite(['resources/js/form.js'])

<!--#include virtual="/common/products_modal.html" -->
</body>
</html>
