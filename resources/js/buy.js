
require('./bootstrap');

$(function() {
  //新規住所の場合
  $('#shipping_address').on('change',function() {
    let shipping_address = $('#shipping_address').val();
    console.log(shipping_address);
    if(shipping_address === "other_address") {
        $('#shipping_form').fadeIn('slow');
    } else {
      $('#shipping_form').fadeOut('slow');
    }
  })

//注文数が0以下の場合
  $('#quantity').on('change',function() {
    let quantity = $('#quantity').val();
    console.log(quantity);
    if(quantity <= 0) {
      $('#product').fadeOut('slow');
      let attention = '<h5>商品を削除しました</h5>'
      $('#product').append(attention);
      $('#product').fadeIn('slow');

    }

  })
  //入力しないと進めないようにする
  $('#payment_method').on('change',function() {
    let payment_method = $('#payment_method').val();
    if(payment_method !== "default") {
      $('#check').prop('disabled', false);
      console.log(payment_method);

      //クレジットカードの場合
      if(payment_method === "http://localhost:8888/buy/check/credit" ) {
        $('#check').attr('onclick','location.href="http://localhost:8888/buy/check/credit"');      
      }
      //paypalの場合
      if(payment_method === "http://localhost:8888/buy/check/paypal" ) {
        $('#check').attr('onclick','location.href="http://localhost:8888/buy/check/paypal"');      
      }
      //代金引換の場合
      if(payment_method === "http://localhost:8888/buy/check/cash" ) {
        $('#check').attr('onclick','location.href="http://localhost:8888/buy/check/cash"');      
      }

    }else {
      console.log(payment_method);
      $('#check').prop('disabled', true);
    }
  })
  
  if(quantity <= 0) {
  }
  
})