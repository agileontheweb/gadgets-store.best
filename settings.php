<?php
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
	setlocale(LC_ALL, 'it_IT');

	include("inc/branding_setting.php");
	include("inc/ads_change_image.php");

	function isUpsell(){
	  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	  if (strpos($url, "upsell") == true) {
	    $upsell = "true";
	    if (isUpsell() == true) {
	      $name = $_GET['name'];
	      $surname = $_GET['surname'];
	      $phone = $_GET['phone'];
	      $address = $_GET['address'];
	      $city = $_GET['city'];
	      $zipcode = $_GET['zipcode'];
	    }
	    return $upsell;
	  }
	}

	function showHideUpsell($toggle){
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		$upsell_params = "upsell";

		if($toggle==true){
			echo "hidden";
		}
		if (!strpos($url, $upsell_params) == true && class_exists('LANDING')) {
			echo "hidden";
		}
	}

	include("inc/extra.php");
	include("inc/has_bought.php");
	include("inc/remaining_pieces.php");
	include("inc/navbar.php");
	include("inc/post_form.php");
?>
