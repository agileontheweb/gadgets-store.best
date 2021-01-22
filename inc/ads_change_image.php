<?php

  function isADSimage(){
    echo $projectPath;
    echo $projectPathImg;    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, "ads-1") == true || strpos($url, "ads-2") == true || strpos($url, "ads-3") == true) {
      $isImgAds	= "true";
      return $isImgAds;
    }
  }

  function changeADSimage(){
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, "ads-1") == true) {
      $imgAds = "ads-1";
    }elseif (strpos($url, "ads-2") == true){
      $imgAds = "ads-2";
    }elseif (strpos($url, "ads-3") == true){
      $imgAds = "ads-3";
    }else{
      $imgAds = "";
    }
    echo $imgAds;
  }

?>
