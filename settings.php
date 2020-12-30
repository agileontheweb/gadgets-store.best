<?php
#ini_set('display_errors', '1');
#ini_set('display_startup_errors', '1');
#error_reporting(E_ALL);


	if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
		$projectPath = "http://localhost:8888/gadgets-store.best/";
	}else{
	  $projectPath = "https://gadgets-store.best/";
	}

	function fixedNavbar(){
		echo "fixed";
		if(class_exists('LANDING') || class_exists('FORMS')){
			echo "relative";
		}
	}

	function showFacebook(){
		if(class_exists('LANDING') || class_exists('FORMS')){
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

	function passDataForms($title,
										$url_product_api,
										$selector,
										$selector_1,
										$selector_2,
										$selector_3,
										$selector_1_value,
										$selector_2_value,
										$selector_3_value,
										$privacy,
										$quantity,
										$price
										){

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if($selector == true){
				$selectors = "selector=$selector&selector_1=$selector_1&selector_1_value=$selector_1_value&selector_2=$selector_2&selector_2_value=$selector_2_value&selector_3=$selector_3&selector_3_value=$selector_3_value";
			}
			$custom_params = "title=$title&url_product_api=$url_product_api&$selectors&privacy=$privacy&quantity=$quantity&price=$price";
			header("location: forms.php?$custom_params");
		}
	}
?>
