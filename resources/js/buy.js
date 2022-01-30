
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

  //クレジットカードの場合
  $('#payment_method').on('change',function() {
    let payment_method = $('#payment_method').val();
    if(payment_method !== "default") {
      console.log(payment_method);
      $('#check')
    }
  })
  
  //入力しないと進めないようにする
  let payment_method = $('#payment_method').val();
  let quantity = $('#quantity').val();
  if(quantity > 0) {
    console.log(quantity);
    if(payment_method !== "default" ) {
      console.log(payment_method);
      console.log("111");
      $('#check').prop('disabled', false);
    }
  }
  
})