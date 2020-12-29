<?php
	if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
		$projectPath = "http://localhost:8888/gadgets-store.best/";
	}else{
	  $projectPath = "https://gadgets-store.best/";
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
										$quantity
										){

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if($selector == true){
				$selectors = "selector=$selector&selector_1=$selector_1&selector_1_value=$selector_1_value&selector_2=$selector_2&selector_2_value=$selector_2_value&selector_3=$selector_3&selector_3_value=$selector_3_value";
			}
			$custom_params = "title=$title&url_product_api=$url_product_api&$selectors&privacy=$privacy&quantity=$quantity";
			header("location: forms.php?$custom_params");
		}
	}
?>
