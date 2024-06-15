<div class="modal estimate" style="">
<input id="modal-trigger" value="1" class="checkbox" type="checkbox">
<div class="modal-overlay">
<label for="modal-trigger" class="o-close"></label>
<div class="modal-wrap a-center">
<label for="modal-trigger" class="close">&#10006;</label>


{{-- <form action="/contact_2/" method="post"> --}}
{{ Form::open(['route' => 'cart.store']) }}


<h1><span class="parts_name" id="item_car_name"></span><span class="products_name" id="item_name"></span></h1>
<table class="list full">
<tr id="paint" style="display:none;">
<th>塗装</th>
<td>
<label><input type="radio" name="item_paint" id="radio" value="1"> 希望する</label>
<label><input type="radio" name="item_paint" id="radio" value="2"> 希望しない</label>
</td>
</tr>
<tr id="mount" style="display:none">
<th>取付</th>
<td>
<label><input type="radio" name="item_mount" id="radio" value="1"> 紹介店舗で取付</label>
<label><input type="radio" name="item_mount" id="radio" value="2"> ダムドで取付</label>
<label><input type="radio" name="item_mount" id="radio" value="3"> 希望しない</label>
</td>
</tr>
<tr id="place" style="display:none">
<th>送り先の<br>地域</th>
<td><select name="item_place" id="pref" class="select-box">
<option value="">選択</option>
<option value="" selected>都道府県</option>
<option value="1">北海道</option>
<option value="2">青森県</option>
<option value="3">岩手県</option>
<option value="4">宮城県</option>
<option value="5">秋田県</option>
<option value="6">山形県</option>
<option value="7">福島県</option>
<option value="8">茨城県</option>
<option value="9">栃木県</option>
<option value="10">群馬県</option>
<option value="11">埼玉県</option>
<option value="12">千葉県</option>
<option value="13">東京都</option>
<option value="14">神奈川県</option>
<option value="15">山梨県</option>
<option value="16">長野県</option>
<option value="17">新潟県</option>
<option value="18">富山県</option>
<option value="19">石川県</option>
<option value="20">福井県</option>
<option value="21">岐阜県</option>
<option value="22">静岡県</option>
<option value="23">愛知県</option>
<option value="24">三重県</option>
<option value="25">滋賀県</option>
<option value="26">京都府</option>
<option value="27">大阪府</option>
<option value="28">兵庫県</option>
<option value="29">奈良県</option>
<option value="30">和歌山県</option>
<option value="31">鳥取県</option>
<option value="32">島根県</option>
<option value="33">岡山県</option>
<option value="34">広島県</option>
<option value="35">山口県</option>
<option value="36">徳島県</option>
<option value="37">香川県</option>
<option value="38">愛媛県</option>
<option value="39">高知県</option>
<option value="40">福岡県</option>
<option value="41">佐賀県</option>
<option value="42">長崎県</option>
<option value="43">熊本県</option>
<option value="44">大分県</option>
<option value="45">宮崎県</option>
<option value="46">鹿児島県</option>
<option value="47">沖縄県</option>



</select>

<p class="caution" id="no_home" style="display:none">※ 本製品の配送は個人宅不可となります。<br>

    <span id="sender_exist">法人様宛または最寄りの<span id="sender">福山通運</span>営業所止めとなります。</span>

    <span id="sender_no" style="display: none">※ 本製品は法人宛配送のみのご対応となります。</span>

</td>

</tr>

</table>





<div id="total" style="display:none">

<div class="loading-img"><img src="/common/img/loading.gif">計算中</div>

<p class="total">合計金額<span class="price"> ¥<span id="item_total_view"></span></span></p>

<ul class="caution">

<li id="no_mount" style="display:none">※この商品は取り付け工賃が<b>別途お見積り</b>となります。
<li>※御見積もり金額は変更になる場合がございます。<br>
その場合、ご決済前に弊社より必ずご連絡いたします。
<li id="no_send" style="display:none">※御見積もり金額に送料は含まれません。<br>
沖縄離島の場合、送料は着払いとなります。
<li id="damd_mount" style="display:none;color:red;">※弊社でのお取り付けは、平日のみの対応となります。
</ul>



<p class="button"><button type="submit" class="btn size_m" id="toForm">購入フォーム</button></p>

<div class="loan">

<p class="lead">分割手数料無し！月払いでお支払いの負担を軽減！</p>

<p class="catch">ダムド 分割払いサポート</p>
<ul class="price">
<li id="loan6_wrap" style="display:none">月々¥<span id="loan6"></span><span class="sub">(6ヶ月)</span></li>
<li id="loan12_wrap" style="display:none">月々¥<span id="loan12"></span><span class="sub">(12ヶ月)</span></li>
<li id="loan18_wrap" style="display:none">月々¥<span id="loan18"></span><span class="sub">(18ヶ月)</span></li>
<li id="loan24_wrap" style="display:none">月々¥<span id="loan24"></span><span class="sub">(24ヶ月)</span></li>
<li id="loan36_wrap" style="display:none">月々¥<span id="loan36"></span><span class="sub">(36ヶ月)</span></li>
</ul>

<div class="howto-loan"><a href="https://www.damd.co.jp/lp/credit/" target="_blank">分割払いについて</a></div>

</div>



</div>



<span id="item_price" style="display:none;"></span>
<span id="item_p_cost" style="display:none;"></span>
<span id="item_paint" style="display:none;"></span>
<span id="item_paint_only" style="display:none;"></span>
<span id="item_m_cost" style="display:none;"></span>
<span id="item_tax" style="display:none;"></span>
<span id="item_class" style="display:none;"></span>
<span id="item_class_cost" style="display:none;"></span>
<span id="item_total" style="display:none;"></span>
<span id="item_no_home" style="display:none;"></span>
<span id="item_no_mount" style="display:none;"></span>
<span id="item_loan" style="display:none;"></span>



<!-- 送信見積データ -->
<input type="hidden" name="item_total" />
<input type="hidden" name="item_paint_only" />
<input type="hidden" name="item_loan6" />
<input type="hidden" name="item_loan12" />
<input type="hidden" name="item_loan18" />
<input type="hidden" name="item_loan24" />
<input type="hidden" name="item_loan36" />
<input type="hidden" name="item_id" />
<input type="hidden" name="item_price" />
<input type="hidden" name="item_p_cost" />
<input type="hidden" name="item_m_cost" />
<input type="hidden" name="item_class_cost" />

{{ Form::close() }}

</div>

</div>

</div>

