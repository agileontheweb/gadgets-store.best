$(document).ready(function(){
  countDown();
  $("#btn-primary-sub-menu, #btn-close").click(function() {
    $("#primary-sub-menu").toggle();
  });

  $(".btn-submit-to-forms").click(function() {
    console.log("Submit form");
    $('form').submit();
  });
});