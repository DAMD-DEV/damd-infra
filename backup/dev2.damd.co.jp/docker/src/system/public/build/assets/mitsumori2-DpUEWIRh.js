$(function(){var l=0;$(".mitsumori").click(function(){var t=$(this).data("item_id");$("#mount").hide(),$("#place").hide(),$("#total").hide(),$("#loan6_wrap").hide(),$("#loan12_wrap").hide(),$("#loan18_wrap").hide(),$("#loan24_wrap").hide(),$("#loan36_wrap").hide(),$("[name=item_total]").val(""),$("[name=item_loan6]").val(""),$("[name=item_loan12]").val(""),$("[name=item_loan18]").val(""),$("[name=item_loan24]").val(""),$("[name=item_loan36]").val(""),$("[name=item_id]").val(""),$("[name=item_paint]").removeAttr("checked"),$("[name=item_mount]").removeAttr("checked"),$("[name=item_place] option").attr("selected",!1),$("[name=item_id]").val(t),$.ajax({url:"../../api/items/"+t,type:"GET"}).done(function(e){if(console.log(e),$(".loading-img").hide(),$("#item_name").text(e.name),$("#item_car_name").text(e.car_name),e.sender?($("#sender").text(e.sender),$("#sender_no").hide()):($("#sender_exist").hide(),$("#sender_no").show()),$("#item_p_cost").text(e.paint_cost),$("#item_m_cost").text(e.m_cost),$("#item_price").text(e.price),e.no_home==1&&$("#no_home").show(),$("#item_no_mount").text(e.no_mount),$("#item_loan").text(e.loan),e.loan!="")for(var i=(e.loan||"").split(","),o=0;o<i.length;o++)$("#loan"+i[o]+"_wrap").show(),console.log(i[o]);else $(".loan").hide();e.no_paint==1||e.paint_only==1?($("#paint").hide(),$("#mount").show(),e.no_paint==1&&$("#item_paint").text(e.no_paint),e.paint_only==1&&$("[name=item_paint_only]").val(e.paint_only)):$("#paint").show(),e.no_mount==1&&($("#mount").hide(),(e.no_paint==1||e.paint_only==1)&&$("#place").show(),l=1),$("#item_class").text(e.shipping_id)}).fail((e,i,o)=>{alert("Ajax通信に失敗しました。"),console.log("jqXHR          : "+e.status),console.log("textStatus     : "+i),console.log("errorThrown    : "+o.message)})}),$("[name=item_paint]").change(function(){var t=$(this).val();t==1?l==1?($("#place").fadeIn("fast"),$("#mount").hide(),$("[name=item_mount]").prop("checked",!1),$("#total").hide()):($("#mount").fadeIn("fast"),$("#place").hide(),$("[name=item_place]").val(0),$("#total").hide()):t==2&&($("#place").fadeIn("fast"),$("#mount").hide(),$("[name=item_mount]").prop("checked",!1),$("[name=item_place]").val(0),$("#total").hide())}),$("[name=item_mount]").change(function(){var t=$(this).val();t==1?($("#place").fadeIn("fast"),$("#total").hide(),$("#damd_mount").hide()):t==2?($("#total").fadeIn("fast"),$("#place").hide(),$("[name=item_place]").val(0),$("#damd_mount").show(),r()):t==3&&($("#place").fadeIn("fast"),$("#total").hide(),$("#damd_mount").hide())}),$("[name=item_place]").change(function(){$("#total").hide();var t=$(this).val(),e=$("#item_class").text();console.log($(this)),t=="47"||t=="99"?($("#no_send").show(),$("#item_class_cost").text("0"),r(),$("#total").fadeIn("fast")):($("#no_send").hide(),$.ajax({url:"../../api/shippings",type:"get",data:{pref_id:t,shipping_id:e}}).done(function(i){console.log(i),$("#item_class_cost").text(i),r(),$("#total").fadeIn("fast")}).fail(function(){$("#result").val("失敗"),$("#detail").val("")}))})});function r(){var l=10,t,e,i="",o,a=Number($("#item_price").text()),m=Number($("#item_p_cost").text()),_=Number($("#item_m_cost").text()),n=Number($("#item_class_cost").text());$("[name=item_price]").val(a),$("[name=item_p_cost]").val(m),$("[name=item_m_cost]").val(_),$("[name=item_class_cost]").val(n),$("[name=shipping").val(n),_==0?(i="<br>※工賃は別途お見積りとなります。",o="<br>取付工賃:お見積り",$("#no_mount").show()):(o="<br>取付工賃:"+_,$("#no_hide").show());var c;Number($("#item_paint").text())!=1&&m==0?(i="<br>※工賃と塗装代は別途お見積りとなります。",c="<br>塗装料金:お見積り"):c="<br>塗装料金:"+m,$("[name=item_paint]:checked").val()==1&&$("[name=item_mount]:checked").val()==1?(t=a+m+_+n,e=Math.floor(t*(l/100)),$("#price_info").html("(内訳)<br>本体価格:"+a+c+o+"<br>送料:"+n+"<br>消費税:"+e+i)):$("[name=item_paint]:checked").val()==1&&$("[name=item_mount]:checked").val()==2?(t=a+m+_,e=Math.floor(t*(l/100)),$("#price_info").html("(内訳)<br>本体価格:"+a+c+o+"<br>消費税:"+e+i)):$("[name=item_paint]:checked").val()==1&&$("[name=item_mount]:checked").val()==3?(t=a+m+n,e=Math.floor(t*(l/100)),$("#price_info").html("(内訳)<br>本体価格:"+a+c+"<br>送料:"+n+"<br>消費税:"+e+i+"<br>※工賃はご依頼予定の取付業者様にお問い合わせください。")):$("[name=item_paint]:checked").val()==2?(t=a+n,e=Math.floor(t*(l/100)),$("#price_info").html("(内訳)<br>本体価格:"+a+"<br>送料:"+n+"<br>消費税:"+e+"<br>※工賃はご依頼予定の取付業者様にお問い合わせください。")):typeof $("[name=item_paint]:checked").val()>"u"&&$("[name=item_mount]:checked").val()==1?(t=a+_+n,e=Math.floor(t*(l/100)),$("#price_info").html("(内訳)<br>本体価格:"+a+o+"<br>送料:"+n+"<br>消費税:"+e+i)):typeof $("[name=item_paint]:checked").val()>"u"&&$("[name=item_mount]:checked").val()==2?(t=a+m+_,e=Math.floor(t*(l/100)),$("#price_info").html("(内訳)<br>本体価格:"+a+o+_+"<br>消費税:"+e+i)):typeof $("[name=item_paint]:checked").val()>"u"&&$("[name=item_mount]:checked").val()==3||$("[name=item_paint]:checked").val()===void 0&&$("[name=item_mount]:checked").val()===void 0?(t=a+n,e=Math.floor(t*(l/100)),$("#price_info").html("(内訳)<br>本体価格:"+a+"<br>送料:"+n+"<br>消費税:"+e)):$("[name=item_mount]:checked").val()===void 0&&(t=a+m+n,e=Math.floor(t*(l/100)),$("#price_info").html("(内訳)<br>本体価格:"+a+c+"<br>送料:"+n+"<br>消費税:"+e)),t=Math.floor(t*(l/100+1)),$("#item_total_view").text(t.toLocaleString());var d=Math.floor(t/6);$("#loan6").text(d.toLocaleString());var h=Math.floor(t/12);$("#loan12").text(h.toLocaleString());var f=Math.floor(t/18);$("#loan18").text(f.toLocaleString());var v=Math.floor(t/24);$("#loan24").text(v.toLocaleString());var s=Math.floor(t/36);$("#loan36").text(s.toLocaleString()),$("[name=item_total]").val(),$("[name=item_loan6]").val(),$("[name=item_loan12]").val(),$("[name=item_loan18]").val(),$("[name=item_loan24]").val(),$("[name=item_loan36]").val(),$("[name=item_total]").val(t),$("[name=item_loan6]").val(d),$("[name=item_loan12]").val(h),$("[name=item_loan18]").val(f),$("[name=item_loan24]").val(v),$("[name=item_loan36]").val(s)}