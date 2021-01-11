$(document).ready(function(){
  countDown();
  showProgressBarRemaingPieces();

  function showProgressBarRemaingPieces(){
    var observer = new IntersectionObserver(function(entries) {
  	if(entries[0].isIntersecting === true)
  		console.log('Element is fully visible in screen');
      animateProgressBar();
    }, { threshold: [0] });

    observer.observe(document.querySelector(".progress-short"));

    function animateProgressBar(){
      flag=true;
      remaing_pieces = $(".progress-bar-animate").data("remaing-pieces");

      $({someValue: 100}).animate({someValue: remaing_pieces}, {
      	duration: 3000,
      	easing:'swing',
      	step: function() {
      	   $('.progress-short-number').text(Math.ceil(this.someValue));
           $(".progress-bar-animate").width(this.someValue + '%');
      	}
      });
    }
  }



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
