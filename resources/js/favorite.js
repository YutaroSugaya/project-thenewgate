
require('./bootstrap');

$('.favorite').on('click', function(event) {
  event.stopPropagation();
  event.preventDefault();

  location.href = $(this).attr('data-url');
})