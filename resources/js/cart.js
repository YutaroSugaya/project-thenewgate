
require('./bootstrap');

$(function() {

  //注文数と小計機能
  $('.quantity-input').on('change',function() {

    
    let quantity = $('.quantity-input').val();
  //  // let id = $('.product').attr('value');
  //   //バリデーション
  //   console.log(quantity);
  //   let max_quantity = $('.quantity-input').attr('max');
  //   let min_quantity = $('.quantity-input').attr('min');
  //   if (quantity > 0 && quantity <= 10) {
  //     $(this).val(quantity);
  //   } else if (quantity <= 0 ) {
  //     $(this).val(min_quantity);
  //   } else {
  //     $(this).val(max_quantity);
  //   }

    // //小計
    // let product_price = $('.product_price').text();
    // debugger;
    // console.log(product_price);
    // let product_subtotal = product_price * quantity;
    // $('.product_subtotal').text(product_subtotal);
    if(quantity > 0) {

    } else {
      //カートから消す
      let clickEle = $(this);
      let cart_id = clickEle.attr('value');
      console.log(cart_id);
      $.ajax ({
        url: '/cart/delete/' + cart_id,
        type: 'GET',
        data: {
          id: cart_id, 
          '_method': "DELETE" 
        }
      })
      .done(function() {
        clickEle.parents('.product').remove();
        console.log(clickEle.parents('.product').attr('data'));
        toastr.success('削除しました');
      })
      .fail(function() {
        toastr.error('削除できませんでした');
      });
  }
  

  });

  $('.aiu').on('click',function() {
    $(this).children().toggleClass('isActive');
  })
  
})