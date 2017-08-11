$('.screenRap div span').click(function() {
  $(this).parent().addClass('active');
});
$('.screenRap div a').click(function() {
  $(this).parent().parent().removeClass('active');
});