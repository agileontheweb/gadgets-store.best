<?php
  function showFacebook(){
    if(class_exists('LANDING') || class_exists('FORMS') || class_exists('UPSELL')){
      echo "hidden";
    }
  }

  function colorBadge($color){
    if($color == "Amazon"){
      $color = "bg-yellow-500 text-yellow-100";
    }else{
      $color = "bg-red-600 text-red-100";
    }
    echo $color;
  }

  add_cookie_has_newsletter();
  function add_cookie_has_newsletter(){
    if (class_exists('NEWSLETTER')) {
      $has_newsletter = 'has_newsletter';
      setcookie("add_cookie_has_newsletter", $has_newsletter,time()+3600, '/');
    }
  }

  function howmanybuyer($peopleBuy){
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, "how_many_buyer") == true) {
      echo "A partire dal <span class='font-bold underline'>" . date(" m ") . ucfirst(strftime('%B')) . date(" Y ") . " più di  " . $peopleBuy . " persone </span> hanno acquistato questo prodotto";
    }
  }


  function showExtra(){
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, "progress_short") == true) {
      return true;
    }
  }
?>
