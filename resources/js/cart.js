
require('./bootstrap');

$(function() {
  $('.modal_pop').hide();
  //注文数と小計機能
  $('#quantity').on('change',function() {
    let quantity = $('#quantity').val();
    let product_price = $('#product_price').text();
    let product_subtotal = product_price * quantity;
    console.log(quantity);
    console.log(product_price);
    
    if(quantity > 0) {
      $('#product_subtotal').html(product_subtotal);
      console.log(product_subtotal);
    } else {
      
      $('.js-modal').fadeIn();
    
    }
  })
})