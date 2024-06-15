$(function(){
  var noMountDefo=0;

  $('.mitsumori').click(function(){


    var $item_id = $(this).data("item_id");

    $("#mount").hide();
    $("#place").hide();
    $("#total").hide();
    $("#loan6_wrap").hide();
    $("#loan12_wrap").hide();
    $("#loan18_wrap").hide();
    $("#loan24_wrap").hide();
    $("#loan36_wrap").hide();
    $("[name=item_total]").val("");
    $("[name=item_loan6]").val("");
    $("[name=item_loan12]").val("");
    $("[name=item_loan18]").val("");
    $("[name=item_loan24]").val("");
    $("[name=item_loan36]").val("");
    $("[name=item_id]").val("");

    //既に見積もり済みの場合もあるので、それぞれ初期化
    $("[name=item_paint]").removeAttr('checked');
    $("[name=item_mount]").removeAttr('checked');
    $("[name=item_place] option").attr("selected",false);

    //フォーム送信データようにIDを保存
    $("[name=item_id]").val($item_id);


    $.ajax({
      url: '../../api/items/' + $item_id,
      // url: '../../api/items/' + '3',
      type: 'GET',
    })
    .done( function(response){
      console.log(response);

      //ローディングイメージを隠す
      $(".loading-img").hide();

      $("#item_name").text(response["name"]);
      $("#item_car_name").text(response["car_name"]);

      //配送業者
      if(response["sender"]) {
        $("#sender").text(response["sender"]);
        $("#sender_no").hide();
      }else{
        $("#sender_exist").hide();
        $("#sender_no").show();
      }

      //塗装代
      $("#item_p_cost").text(response["paint_cost"]);

      //工賃
      $("#item_m_cost").text(response["m_cost"]);

      //金額（税抜き）
      $("#item_price").text(response["price"]);

      //個人宅不可フラグ
      //$("#item_no_home").text(response["item_no_home"]);
      if(response["no_home"]==1){
        //塗装無しの商品だった場合
        $("#no_home").show();
      }

      $("#item_no_mount").text(response["no_mount"]);


      //ローン表示設定
      $("#item_loan").text(response["loan"]);

      if(response["loan"]!=""){
        // カンマで分割し配列に格納
        var loanArray = (response["loan"]||'').split(",");
        for( var i=0 ; i<loanArray.length ; i++ ) {
          $("#loan"+loanArray[i]+"_wrap").show();
          console.log(loanArray[i]);
          //ret += '[' + (i+1) + '] ' + resArray[i] + "\n";
        }
      }else{
        $(".loan").hide();
      }


      //通常商品と、塗装無し/塗装品のみの判別
      if(response["no_paint"]==1||response["paint_only"]==1){

        //塗装無しの商品だった場合
        $("#paint").hide();
        $("#mount").show();

        if(response["no_paint"]==1){
          $("#item_paint").text(response["no_paint"]);
        }

        if(response["paint_only"]==1){
          $("[name=item_paint_only]").val(response["paint_only"]);
        }

      }else{
        $("#paint").show();
      }


      if(response["no_mount"]==1){

        //取り付け無しの商品だった場合、取り付け項目を非表示
        $("#mount").hide();

        //塗装がなしの商品の場合
        if(response["no_paint"]==1||response["paint_only"]==1){
          $("#place").show();
        }

        noMountDefo=1;

      }


      //アイテムの型
      $("#item_class").text(response["shipping_id"]);

    })
    .fail( (jqXHR, textStatus, errorThrown) => {
      alert('Ajax通信に失敗しました。');
      console.log("jqXHR          : " + jqXHR.status); // HTTPステータスを表示
      console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラーなどのエラー情報を表示
      console.log("errorThrown    : " + errorThrown.message); // 例外情報を表示
    });
  });


  //塗装制御
  $('[name=item_paint]').change(function() {
    //alert($(this).val());
    var itemPaintVal = $(this).val();
    if(itemPaintVal==1){
      //塗装有
      if(noMountDefo==1){
        //取り付けが無い商品
        $("#place").fadeIn("fast");
        $("#mount").hide();
        $("[name=item_mount]").prop('checked', false);
        $("#total").hide();
      }else{
        $("#mount").fadeIn("fast");
        $("#place").hide();
        $("[name=item_place]").val(0);
        $("#total").hide();
      }

    }else if(itemPaintVal==2){
      //塗装無
      $("#place").fadeIn("fast");
      $("#mount").hide();
      $("[name=item_mount]").prop('checked', false);
      $("[name=item_place]").val(0);
      $("#total").hide();
    }
  });


  //取付制御
  $('[name=item_mount]').change(function() {
    var itemMountVal = $(this).val();
    if(itemMountVal==1){
      $("#place").fadeIn("fast");
      $("#total").hide();
      $("#damd_mount").hide();
    }else if(itemMountVal==2){
      $("#total").fadeIn("fast");
      $("#place").hide();
      $("[name=item_place]").val(0);
      $("#damd_mount").show();
      //合計計算

      totalSum();

    }else if(itemMountVal==3){
      $("#place").fadeIn("fast");
      $("#total").hide();
      $("#damd_mount").hide();
    }
  });

  //地域選択制御(ajax含む)

  $('[name=item_place]').change(function() {
    $("#total").hide();
    var prefId = $(this).val();
    var secId = $("#item_class").text();
    console.log($(this));
    //alert(itemId);
      // Ajax通信を開始する

    if(prefId=="47" || prefId=="99"){
      //沖縄離島国外の場合は送料除外なのでajaxはせず、説明文を出力
      $("#no_send").show();
      $("#item_class_cost").text("0");
      //合計計算

      totalSum();
      $("#total").fadeIn("fast");

    }else{
      $("#no_send").hide();
      $.ajax({
        url: '../../api/shippings',
        type: 'get', // getかpostを指定(デフォルトは前者)
        data: { // 送信データを指定(getの場合は自動的にurlの後ろにクエリとして付加される)
          pref_id: prefId,
          shipping_id: secId
        },
      })

      // ・ステータスコードは正常で、dataTypeで定義したようにパース出来たとき
      .done(function (response) {

          console.log(response);
          $("#item_class_cost").text(response);

        //合計計算
        totalSum();

        $("#total").fadeIn("fast");

          //result = response["item_price"];



      })
      // ・サーバからステータスコード400以上が返ってきたとき
      // ・ステータスコードは正常だが、dataTypeで定義したようにパース出来なかったとき
      // ・通信に失敗したとき
      .fail(function () {
          $('#result').val('失敗');
          $('#detail').val('');
      });
    }
  });
});



//合計計算関数
function totalSum(){

  //消費税率設定
  var tax = 10;
  var total;
  var tax_view;
  var msg = "";
  var itemMCostView;
  
  
  
  //金額
  var itemPrice = Number($("#item_price").text());
  //塗装代
  var itemPCost = Number($("#item_p_cost").text());
  //工賃
  var itemMCost = Number($("#item_m_cost").text());
  //送料
  var itemCCost = Number($("#item_class_cost").text());
  

  //データ送信用セット
  $("[name=item_price]").val(itemPrice);
  $("[name=item_p_cost]").val(itemPCost);
  $("[name=item_m_cost]").val(itemMCost);
  $("[name=item_class_cost]").val(itemCCost);

  $('[name=shipping').val(itemCCost);
  

  //工賃が０の場合は必ず見積となる。
  if(itemMCost==0){
    msg = "<br>※工賃は別途お見積りとなります。"
    itemMCostView = "<br>取付工賃:お見積り";
    $("#no_mount").show();
  }else{
    itemMCostView = "<br>取付工賃:"+ itemMCost;
    $("#no_hide").show();
  }
  
  var itemPCostView;
  //塗装代がかかる商品で設定が0の場合
  if(Number($("#item_paint").text())!=1){
    if(itemPCost==0){
      msg = "<br>※工賃と塗装代は別途お見積りとなります。"
      itemPCostView = "<br>塗装料金:お見積り";
    }else{
      itemPCostView = "<br>塗装料金:"+ itemPCost;
    }
  }else{
    itemPCostView = "<br>塗装料金:"+ itemPCost;
  }
  
  
  //金額計算バリエーション
  
  //塗装あり　紹介展希望　
  
  if($("[name=item_paint]:checked").val()== 1 && $("[name=item_mount]:checked").val()== 1){
  //alert("1");
    total = itemPrice + itemPCost + itemMCost + itemCCost;
    tax_view = Math.floor(total*(tax/100));
    $("#price_info").html("(内訳)<br>本体価格:"+ itemPrice + itemPCostView + itemMCostView +"<br>送料:"+ itemCCost +"<br>消費税:"+ tax_view+msg);
  }
  
  //塗装あり　ダムド取付
  else if($("[name=item_paint]:checked").val()== 1 && $("[name=item_mount]:checked").val()== 2){
    //alert("2");
    total = itemPrice + itemPCost + itemMCost;
    tax_view = Math.floor(total*(tax/100));
    $("#price_info").html("(内訳)<br>本体価格:"+ itemPrice + itemPCostView +itemMCostView +"<br>消費税:"+ tax_view+msg);
  }
  
  //塗装あり　取付しない
  else if($("[name=item_paint]:checked").val()== 1 && $("[name=item_mount]:checked").val()== 3){
    //alert("3");
    total = itemPrice + itemPCost + itemCCost;
    tax_view = Math.floor(total*(tax/100));
    $("#price_info").html("(内訳)<br>本体価格:"+ itemPrice + itemPCostView +"<br>送料:"+ itemCCost +"<br>消費税:"+ tax_view+ msg +"<br>※工賃はご依頼予定の取付業者様にお問い合わせください。");
  }
  
  //塗装なし
  else if($("[name=item_paint]:checked").val()== 2){
    //alert("4");
    total = itemPrice + itemCCost;
    tax_view = Math.floor(total*(tax/100));
    $("#price_info").html("(内訳)<br>本体価格:"+ itemPrice +"<br>送料:"+ itemCCost +"<br>消費税:"+ tax_view+"<br>※工賃はご依頼予定の取付業者様にお問い合わせください。");
  }
  
  
  
  //塗装料金がかからない商品で紹介店希望
  else if(typeof $("[name=item_paint]:checked").val()== "undefined" && $("[name=item_mount]:checked").val()== 1){
    //alert("5");
  
    total = itemPrice + itemMCost + itemCCost;
    tax_view = Math.floor(total*(tax/100));
    $("#price_info").html("(内訳)<br>本体価格:"+ itemPrice + itemMCostView +"<br>送料:"+ itemCCost +"<br>消費税:"+ tax_view+msg);
  }
  
  //塗装料金がかからない商品でダムド取付希望
  else if(typeof $("[name=item_paint]:checked").val()== "undefined" && $("[name=item_mount]:checked").val()== 2){
    //alert("6");
    total = itemPrice + itemPCost + itemMCost;
    tax_view = Math.floor(total*(tax/100));
  
    $("#price_info").html("(内訳)<br>本体価格:"+ itemPrice +itemMCostView+ itemMCost +"<br>消費税:"+ tax_view+msg);
  }
  
  
  
  //塗装料金がかからない商品で取付なし
  
  else if(typeof $("[name=item_paint]:checked").val()== "undefined" && $("[name=item_mount]:checked").val()== 3){
    //alert("7");
    total = itemPrice + itemCCost;
    tax_view = Math.floor(total*(tax/100));
    $("#price_info").html("(内訳)<br>本体価格:"+ itemPrice +"<br>送料:"+ itemCCost + "<br>消費税:"+ tax_view);
  }else if($("[name=item_paint]:checked").val() === undefined && $("[name=item_mount]:checked").val() === undefined){
  
    //取り付けなし商品で塗装なしの場合
    //alert("8");
    total = itemPrice + itemCCost;
    tax_view = Math.floor(total*(tax/100));
    $("#price_info").html("(内訳)<br>本体価格:"+ itemPrice +"<br>送料:"+ itemCCost +"<br>消費税:"+ tax_view);
  }else if($("[name=item_mount]:checked").val() === undefined){
  
    //取り付けなし商品で塗装ありの場合
  
    //alert("9");
    total = itemPrice + itemPCost + itemCCost;
    tax_view = Math.floor(total*(tax/100));
    $("#price_info").html("(内訳)<br>本体価格:"+ itemPrice + itemPCostView +"<br>送料:"+ itemCCost +"<br>消費税:"+ tax_view);
  }
  
  
  
  //税加算
    total = Math.floor(total * ((tax/100)+1));
    $("#item_total_view").text(total.toLocaleString());
  
  
  
  //ローン計算
  //6回払い、12回払い、18回払い、24回払い、36回払い
  //表示するしないにかかわらずすべてを計算しておく
  var loan6 = Math.floor(total/6);
  $("#loan6").text(loan6.toLocaleString());
  var loan12 = Math.floor(total/12);
  $("#loan12").text(loan12.toLocaleString());
  var loan18 = Math.floor(total/18);
  $("#loan18").text(loan18.toLocaleString());
  var loan24 = Math.floor(total/24);
  $("#loan24").text(loan24.toLocaleString());
  var loan36 = Math.floor(total/36);
  $("#loan36").text(loan36.toLocaleString());
  
  
  //送信用データの用意
  $("[name=item_total]").val();
  $("[name=item_loan6]").val();
  $("[name=item_loan12]").val();
  $("[name=item_loan18]").val();
  $("[name=item_loan24]").val();
  $("[name=item_loan36]").val();
  $("[name=item_total]").val(total);
  $("[name=item_loan6]").val(loan6);
  $("[name=item_loan12]").val(loan12);
  $("[name=item_loan18]").val(loan18);
  $("[name=item_loan24]").val(loan24);
  $("[name=item_loan36]").val(loan36);
  
}