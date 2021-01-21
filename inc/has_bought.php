<?php

	function redirect_has_bought(){
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		if (strpos($url, "upsell?upsell") == true ) {

			if(isset($_SESSION['has_bought_upsell']) == true){
				echo "has_bought_upsell è gia settato ";
				header("Location: hai-gia-acquistato.php?price=$price&name=$name");
			}

			$_SESSION['has_bought_upsell'] = "has_bought_upsell";
			$store_link_upsell = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$_SESSION['store_link_upsell'] = $store_link_upsell;
		}

		if (isset($_SESSION['has_bought_upsell']) == true && class_exists('FORMS')) {
			$url = $_SESSION['store_link_upsell'];
			$_SESSION['has_bought_upsell_2_time'] = "has_bought_upsell_2_time";
			header("Location: $url");
			echo "form rimandare a upsell";
		}

		if (isset($_SESSION['has_bought_upsell_2_time']) == true && class_exists('UPSELL')) {
			echo "arrivo da form sono in upsell devo rimandare ad ordine confermato";
			header("Location: ordine-confermato.php?$url_for_facebook_event_purchase&price=$price&name=$name");
		}
	}

	function remove_session_has_bought(){
		unset($_SESSION['has_bought']);
		unset($_SESSION['has_bought_upsell']);
		unset($_SESSION['has_bought_upsell_2_time']);
	}
?>
