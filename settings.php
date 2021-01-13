<?php
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
	$brand_name = "Gadgets Store";
	$brand_url = "https://gadgets-store.best/";
	$brand_slogan = "Prodotti Scontati e in Promozione";
	$fb_page = "https://www.facebook.com/GadgetsStoreBest/";
	$px_analytics = "G-EX9QLYLTWM";
	$px_hotjar = "2176744";
	$px_facebook = "148028286826820";
	$px_messanger = "100436285316093";
	$visited_newsletter_page = "";

	session_start();

	if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
		$projectPath = "http://localhost:8888/gadgets-store.best/";
		$projectPathImg = "img/prodotti/";
	}else{
	  $projectPath = "https://gadgets-store.best/";
		$projectPathImg = "dist/img/prodotti/";
	}

	function add_cookie_has_bought(){
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		if (strpos($url, "upsell?upsell") == true) {
			$has_bought = 'Ha comprato';
			setcookie("add_cookie_has_bought", $has_bought,time()+3600, '/');
		}
	}

	add_cookie_has_newsletter();
	function add_cookie_has_newsletter(){
		if (class_exists('NEWSLETTER')) {
			$has_newsletter = 'has_newsletter';
			setcookie("add_cookie_has_newsletter", $has_newsletter,time()+3600, '/');
		}
	}

	function redirect_has_bought(){
		if(isset($_COOKIE["add_cookie_has_bought"]) == "has_bought"){
			header("Location: hai-gia-acquistato.php");
		}
	}

	function remove_cookie_has_bought(){
		setcookie("add_cookie_has_bought", '', 1, '/');
	}

	$upsell = false;

	function colorBarTop(){
		if (class_exists('LANDING') || class_exists('FORMS')) {
			$bg_color = "bg-red-500";
		}else{
			$bg_color = "bg-blue-500";
		}
		echo $bg_color;
	}

	function remainingPieces(){
		date_default_timezone_set('Europe/Rome');
		$current_time = date("h:i a");
		$date1 = DateTime::createFromFormat('h:i a', $current_time);

		$_01_am = DateTime::createFromFormat('h:i a', "01:00 am");
		$_02_am = DateTime::createFromFormat('h:i a', "02:00 am");
		$_03_am = DateTime::createFromFormat('h:i a', "03:00 am");
		$_04_am = DateTime::createFromFormat('h:i a', "04:00 am");
		$_05_am = DateTime::createFromFormat('h:i a', "05:00 am");
		$_06_am = DateTime::createFromFormat('h:i a', "06:00 am");
		$_07_am = DateTime::createFromFormat('h:i a', "07:00 am");
		$_08_am = DateTime::createFromFormat('h:i a', "08:00 am");
		$_09_am = DateTime::createFromFormat('h:i a', "09:00 am");
		$_10_am = DateTime::createFromFormat('h:i a', "10:00 am");
		$_11_am = DateTime::createFromFormat('h:i a', "11:00 am");
		$_12_am = DateTime::createFromFormat('h:i a', "12:00 am");

		$_01_pm = DateTime::createFromFormat('h:i a', "01:00 pm");
		$_02_pm = DateTime::createFromFormat('h:i a', "02:00 pm");
		$_03_pm = DateTime::createFromFormat('h:i a', "03:00 pm");
		$_04_pm = DateTime::createFromFormat('h:i a', "04:00 pm");
		$_05_pm = DateTime::createFromFormat('h:i a', "05:00 pm");
		$_06_pm = DateTime::createFromFormat('h:i a', "06:00 pm");
		$_07_pm = DateTime::createFromFormat('h:i a', "07:00 pm");
		$_08_pm = DateTime::createFromFormat('h:i a', "08:00 pm");
		$_09_pm = DateTime::createFromFormat('h:i a', "09:00 pm");
		$_10_pm = DateTime::createFromFormat('h:i a', "10:00 pm");
		$_11_pm = DateTime::createFromFormat('h:i a', "11:00 pm");
		$_12_pm = DateTime::createFromFormat('h:i a', "12:00 pm");

		if ($date1 >= $_12_am && $date1 <= $_01_am){
		 echo(rand(60,55));
		}elseif ($date1 >= $_01_am && $date1 <= $_02_am){
		 echo(rand(60,55));
	 	}elseif ($date1 >= $_02_am && $date1 <= $_03_am){
		 echo(rand(55,60));
	 }elseif ($date1 >= $_03_am && $date1 <= $_04_am){
		 echo(rand(55,60));
	 }elseif ($date1 >= $_04_am && $date1 <= $_05_am){
		 echo(rand(55,60));
	 }elseif ($date1 >= $_05_am && $date1 <= $_06_am){
		 echo(rand(55,60));
	 }elseif ($date1 >= $_07_am && $date1 <= $_08_am){
		 echo(rand(55,60));
	 }elseif ($date1 >= $_09_am && $date1 <= $_10_am){
		 echo(rand(55,60));
	 }elseif ($date1 >= $_10_am && $date1 <= $_11_am){
		 echo(rand(55,60));
	 }elseif ($date1 >= $_11_am && $date1 <= $_12_am){
		 echo(rand(55,60));
	 }elseif ($date1 >= $_12_am && $date1 <= $_01_pm){
		 echo(rand(50,55));
	 }elseif ($date1 >= $_01_pm && $date1 <= $_02_pm){
		 echo(rand(50,55));
	 }elseif ($date1 >= $_02_pm && $date1 <= $_03_pm){
		 echo(rand(45,50));
	 }elseif ($date1 >= $_03_pm && $date1 <= $_04_pm){
		 echo(rand(40,45));
	 }elseif ($date1 >= $_04_pm && $date1 <= $_05_pm){
		 echo(rand(35,40));
	 }elseif ($date1 >= $_05_pm && $date1 <= $_06_pm){
		 echo(rand(30,35));
	 	}elseif ($date1 >= $_06_pm && $date1 <= $_07_pm){
		 echo(rand(25,30));
	 	}elseif ($date1 >= $_07_pm && $date1 <= $_08_pm){
			echo(rand(20,25));
		}elseif ($date1 >= $_08_pm && $date1 <= $_09_pm){
		 echo(rand(16,19));
 	 	}elseif ($date1 >= $_09_pm && $date1 <= $_10_pm){
		 echo(rand(15,20));
	 	}elseif ($date1 >= $_10_pm && $date1 <= $_11_pm){
		 echo(rand(05,10));
	 	}elseif ($date1 >= $_11_pm && $date1 <= $_12_pm){
	 		echo(rand(05, 10));
	 	}else{
		 echo(rand(05,10));
	 	}

	}

	function messageTop(){
		if (class_exists('LANDING') || class_exists('FORMS')) {
			$message = 'QUESTA OFFERTA SCADE TRA: <div class="inline-block ml-1 count-down font-bold"><span class="clock"></span></div>';
		}else{
			$message = "🚚 <span class='pl-3'>Spedizione Gratuita su tanti prodotti</span>";
		}
		echo $message;
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

	function isUpsell(){
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		if (strpos($url, "upsell") == true) {
			$upsell = true;
			return $upsell;
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
										$title_product,
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

			$custom_params = "&$selectors&title_product=$title_product&url_product_api=$url_product_api&privacy=$privacy&quantity=$quantity&price=$price&img=$img&extra=$extra&upsell_page=$upsell_page";
			header("location: forms.php?$custom_params");

		}
	}

	function sendFormsUpsell(
										$title_product,
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

			$title_product = $_POST["title"];
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
				header("Location: ordine-confermato.php?title=$title_product&price=$price&name=$name");
			}
		}
	}
?>
