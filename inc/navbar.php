<?php
function colorBarTop(){
  if (class_exists('LANDING') || class_exists('FORMS')) {
    $bg_color = "bg-red-500";
  }elseif (class_exists('UPSELL')){
    $bg_color = "bg-red-800";
  }else{
    $bg_color = "bg-blue-500";
  }
  echo $bg_color;
}

function messageTop(){
  if (class_exists('LANDING') || class_exists('FORMS')) {
    $message = 'QUESTA OFFERTA SCADE TRA: <div class="inline-block ml-1 count-down font-bold"><span class="clock"></span></div>';
  }elseif(class_exists('UPSELL')){
    $message = "<span class='pl-3'>❌ ATTENZIONE NON CHIUDERE QUESTA PAGINA ❌</span>";
  }else{
    $message = "🚚 <span class='pl-3'>Spedizione Gratuita su tanti prodotti</span>";
  }
  echo $message;
}

function fixedNavbar(){
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $fb_params = "fbclid";
  if (strpos($url, $fb_params) == true && class_exists('LANDING')) {
    echo " fixed top-0";
  }elseif(class_exists('LANDING') || class_exists('FORMS')){
    echo " relative";
  }else{
    echo "fixed ";
  }
}

function addMarginTop(){
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $fb_params = "fbclid";
  if (strpos($url, $fb_params) == true && class_exists('LANDING')) {
    echo " mt-20";
  }else{
    echo "mt-10 ";
  }
}

function showNavBar(){
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $fb_params = "fbclid";
  $upsell_params = "upsell";
  if (strpos($url, $fb_params) == true && class_exists('LANDING')) {
    echo "hidden";
  }
  if(class_exists('FORMS') || class_exists('UPSELL')) {
    echo "hidden";
  }
  if (strpos($url, $upsell_params) == true && class_exists('LANDING')) {
    echo "hidden";
  }
}

function hideBarCounter(){
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $upsell_params = "upsell";
  if (strpos($url, $upsell_params) == true && class_exists('LANDING')) {
    echo "hidden";
  }
}
?>
