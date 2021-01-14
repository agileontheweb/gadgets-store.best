$(document).ready(function(){
  gdprCookie();
  countDown();

  if($('#myCarousel').lenght >= 0){
    $('#myCarousel').carousel();
  }

  if($("body").hasClass("landing-page")){
    showProgressBarRemaingPieces();
  }

  function showProgressBarRemaingPieces(){
    var observer = new IntersectionObserver(function(entries) {
  	if(entries[0].isIntersecting === true)
  		console.log('Element is fully visible in screen');
      animateProgressBar();
    }, { threshold: [0] });
    observer.observe(document.querySelector(".progress-short"));
  }

  const btns = document.querySelectorAll('.btn-animate');

  observer1 = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.intersectionRatio > 0) {
        console.log('in the view');
        $(".btn-animate").addClass("animate__animated animate__wobble");
      } else {
        $(".btn-animate").removeClass("animate__animated animate__wobble");
        console.log('out of view');
      }
    });
  });

  btns.forEach(btn => {
    observer1.observe(btn);
  });


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

  $("#btn-primary-sub-menu, #btn-close").click(function() {
    $("#primary-sub-menu").toggle();
  });

  $(".btn-submit-to-forms").click(function() {
    $(".loadingpage").show();
    $('form').submit();
  });
});
