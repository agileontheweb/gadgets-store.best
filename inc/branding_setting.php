<?php
  session_start();
  $brand_name = "Gadgets Store";
  $brand_url = "gadgets-store.best/";
  $brand_slogan = "Prodotti Scontati e in Promozione";
  $fb_page = "https://www.facebook.com/GadgetsStoreBest/";
  $px_analytics = "G-EX9QLYLTWM";
  $px_hotjar = "2176744";
  $px_facebook = "148028286826820";
  $px_messanger = "100436285316093";
  $visited_newsletter_page = "";
  $store_link_upsell = "";
  $upsell = 0;
  $is_dev = 0;

  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

  if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ))) {
		$projectPath = "http://localhost:8888/" . $brand_url;
		$projectPathImg = "img/prodotti/";
    $is_localhost = 1;
  }elseif(strpos($url, "dev.") == true) {;
    $projectPath = "https://dev." . $brand_url;
		$projectPathImg = "dist/img/prodotti/";
    $is_dev = 1;
  }else{
    $projectPath = "https://" . $brand_url;
		$projectPathImg = "dist/img/prodotti/";
    $is_localhost = 0;
  }
?>
