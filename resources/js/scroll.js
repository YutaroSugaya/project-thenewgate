$(function() {

  let pageTop = $('#page-top');
  pageTop.hide();
  $(window).scroll(function() {
    if($(this).scrollTop() > 80) {
      pageTop.fadeIn(300);
    }else {
      pageTop.fadeOut(300);
    }
  })


  $('a[href^="#"]').on('click',function() {
    var speed = 400;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('html, body').animate({scrollTop:position}, speed, 'swing');
    return false;
  })
})