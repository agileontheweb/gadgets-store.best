$(document).ready(function(){
  countDown();

  var myCarousel = document.querySelector('#myCarousel')
  var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 2000,
    wrap: false
  })

  $("#btn-primary-sub-menu, #btn-close").click(function() {
    $("#primary-sub-menu").toggle();
  });

  $(".btn-submit-to-forms").click(function() {
    $(".loadingpage").show();
    $('form').submit();
  });
});
