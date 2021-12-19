
require('./bootstrap');

$(function() {
  $('#shipping_address').on('change',function() {
    let shipping_address = $('#shipping_address').val();
    if(shipping_address === "other_address") {
      let html = 
      `
      <div class="row">
        <div class="form-group col-12">
          <label class="label">お名前</label>
          <input id="shipping_name" type="text" class="form-control" placeholder="お名前" name="shipping_name" required>
      </div>
      </div>
      <div class="row">
        <div class="form-group col-12">
          <label class="label">郵便番号</label>
          <input id="shipping_post_code" type="text" class="form-control" placeholder="●◆▲-○□▶︎☆" name="shipping_post_code" required>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-12">
          <label class="label">住所</label>
          <input id="shipping_address" type="text" class="form-control" placeholder="◯◯県×x市▶︎◆" name="shipping_address" required>
        </div>
      </div>
      `;
      let shipping_form = $(html).hide().appendTo('.shipping_form').fadeIn(1500);
      $('.shipping_form').append(shipping_form);
      /*  $('.shipping_form').prepend(html).animate({
        'marginBottom':'50px'
      },1000); */
      return
    } else {
      $('.shipping_form').fadeOut(500);
      return
    }
    
  })

})