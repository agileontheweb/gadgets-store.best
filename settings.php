<?php
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
	setlocale(LC_ALL, 'it_IT');

	include("inc/branding_setting.php");

	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

  if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ))) {
		$projectPath = "http://localhost:8888/" . $brand_url;
		$projectPathImg = "img/prodotti/";
    $env = "localhost";
  }elseif(strpos($url, "dev.") == true) {;
    $projectPath = "https://dev." . $brand_url;
		$projectPathImg = "dist/img/";
    $env = "dev";
  }else{
    $projectPath = "https://" . $brand_url;
		$projectPathImg = "dist/img/";
		$env = "prod";
  }

	$fullpath = $projectPath . $projectPathImg;


	function generateImageSize($fullpath, $image, $extension, $alt, $env, $custom_class= ''){
		$add_class = isset($custom_class) ? $custom_class : $default;

		if($env=="dev" || $env=="prod"){
			echo "<img src=".$fullpath.$image.".".$extension."
						srcset='" . $fullpath . $image. "-small.jpg 320w,"
											. $fullpath . $image. "-medium.jpg 640w,"
											. $fullpath . $image. "-large.jpg 1200w'
											alt='".$alt."' class='mx-auto' width='640' height='640'>";
		}else{
			echo "<img src=" . $fullpath . $image . ".".$extension." class='mx-auto $add_class'>"	;
		}
  }


	include("inc/ads_change_image.php");
	include("inc/extra.php");
	include("inc/has_bought.php");
	include("inc/remaining_pieces.php");
	include("inc/navbar.php");
	include("inc/post_form.php");
?>
