
require('./bootstrap');

$(function() {
  
  $('#shipping_address').on('change',function() {
    let shipping_address = $('#shipping_address').val();
    console.log(shipping_address);
    if(shipping_address === "other_address") {
        $('#shipping_form').fadeIn('slow');
    } else {
      $('#shipping_form').fadeOut('slow');
    }
  })

})