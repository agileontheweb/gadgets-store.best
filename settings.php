<?php
	// ini_set('display_errors', '1');
	// ini_set('display_startup_errors', '1');
	// error_reporting(E_ALL);
	$brand_name = "Gadgets Store";
	$brand_url = "https://gadgets-store.best/";
	$brand_slogan = "Prodotti scontati e in promozione";

	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	$upsell;

	function colorBarTop(){
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		if (class_exists('LANDING') || class_exists('FORMS')) {
			$bg_color = "bg-red-500";
		}else{
			$bg_color = "bg-blue-500";
		}
		echo $bg_color;
	}

	function messageTop(){
		if (class_exists('LANDING') || class_exists('FORMS')) {
			$message = 'QUESTA OFFERTA SCADE TRA: <div class="inline-block ml-1 count-down font-bold"><span class="clock"></span></div>';
		}else{
			$message = "🚚 <span class='pl-3'>Spedizione Gratuita su quasi tutti i prodotti</span>";
		}
		echo $message;
	}

	function isUpsell(){
		if (strpos($url, "upsell") == true) {
			$upsell = true;
			return $upsell;
		}
	}

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
			$message = "Landing page mettere timer";
		}
	}

	function hideBarCounter(){
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		$upsell_params = "upsell";
		if (strpos($url, $upsell_params) == true && class_exists('LANDING')) {
			echo "hidden";
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

	function passDataForms(
										$title,
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
										$price,
										$img,
										$extra,
										$upsell_page
										){

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if($selector == true){
				$selectors = "selector=$selector&selector_1=$selector_1&selector_1_value=$selector_1_value&selector_2=$selector_2&selector_2_value=$selector_2_value&selector_3=$selector_3&selector_3_value=$selector_3_value";
			}

			$custom_params = "title=$title&url_product_api=$url_product_api&$selectors&privacy=$privacy&quantity=$quantity&price=$price&img=$img&extra=$extra&upsell_page=$upsell_page";
			header("location: forms.php?$custom_params");
		}
	}

	function sendFormsUpsell(
										$title,
										$name,
										$surname,
										$phone,
										$address,
										$city,
										$zipcode,
										$url_product_api,
										$quantity_upsell,
										$price
										){


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$title = $_POST["title"];
			$name = $_POST["name"];
			$surname = $_POST["surname"];
			$phone = $_POST["phone"];
			$address = $_POST["address"];
			$city = $_POST["city"];
			$zipcode = $_POST["zipcode"];
			$quantity_upsell = $_POST["quantity"];
			$price = $_POST['price'];

			$url = "https://network.worldfilia.net/manager/inventory/buy/$url_product_api.json";
			$ch = curl_init($url);
			$jsonData = array(
					'source_id' => '07ff46bb6597',
					'name' => $name . " " . $surname,
					'phone' => $phone,
					'quantity' => $quantity_upsell,
					'address' => $address,
					'zipcode' => $zipcode,
					'city' => $city
			);
			//Encode the array into JSON.
			$jsonDataEncoded = json_encode($jsonData);
			//Tell cURL that we want to send a POST request.
			curl_setopt($ch, CURLOPT_POST, 1);
			//Attach our encoded JSON string to the POST fields.
			curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
			//Set the content type to application/json
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			$output = curl_exec($ch);
			$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

			if ($httpcode == 200){
				header("Location: ordine-confermato.php?title=$title&price=$price&name=$name");
			}
		}
	}
?>
