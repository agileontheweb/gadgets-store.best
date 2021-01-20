<?php
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
  session_start();
  $upsell = false;

  if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
		$projectPath = "http://localhost:8888/" . $brand_url;
		$projectPathImg = "img/prodotti/";
	}else{
	  $projectPath = "https://" . $brand_url;
		$projectPathImg = "dist/img/prodotti/";
	}

?>
