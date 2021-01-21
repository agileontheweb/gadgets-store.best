<?php
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
	setlocale(LC_ALL, 'it_IT');

	if(!in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
		$is_localhost = "false";
	}else{
		$is_localhost = "true";
	}

	include("inc/branding_setting.php");
	include("inc/ads_change_image.php");
	include("inc/extra.php");
	include("inc/has_bought.php");
	include("inc/remaining_pieces.php");
	include("inc/navbar.php");
	include("inc/post_form.php");
?>
