<?php
$img = $_GET['img'];
$extra = $_GET["extra"];
$upsell_page = $_GET["upsell_page"];
$name = "";
$surname = "";
$phone = "";
$address = "";
$city = "";
$zipcode = "";
$title_product = $_GET['title_product'];
$form_short = $_GET['form_short'];

// if(isset($_GET['selector'])) {
//   $selector = $_GET['selector'];
// }else{
//   $selector = false;
// }

$url_remove_space = preg_replace('/\s+/', '', $title_product);
$url_for_facebook_event_purchase = strtolower($url_remove_space);

if(isset($_POST['submit'])){
  $title_product = $_POST["title_product"];
  $price = $_POST['price'];
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $zipcode = $_POST["zipcode"];
  $quantity = $_POST["quantity"];
  $url_product_api = $_POST["url_product_api"];
  $upsell_page = $_POST["upsell_page"];
  $url_for_facebook_event_purchase = $_POST["url_for_facebook_event_purchase"];
  sendRequest($title_product, $price, $name, $surname, $phone, $quantity, $address, $zipcode, $city, $url_product_api, $upsell_page, $url_for_facebook_event_purchase,$form_short);
}

function sendRequest($title_product, $price, $name, $surname, $phone, $quantity, $address, $zipcode, $city,$url_product_api, $upsell_page, $url_for_facebook_event_purchase,$form_short){

  $url = "https://network.worldfilia.net/manager/inventory/buy/$url_product_api.json";
  $ch = curl_init($url);
  $jsonData = array(
      'source_id' => '07ff46bb6597',
      'name' => $name . " " . $surname,
      'phone' => $phone,
      'quantity' => $quantity,
      'address' => $address,
      'zipcode' => $zipcode,
      'city' => $city
  );
  $jsonDataEncoded = json_encode($jsonData);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  $output = curl_exec($ch);
  $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  if ($httpcode == 200){
    if(!empty($upsell_page)){
      header("Location: $upsell_page?upsell&$url_for_facebook_event_purchase&title_product=$title_product&price=$price&name=$name&surname=$surname&phone=$phone&address=$address&city=$city&zipcode=$zipcode&form_short=$form_short");
    }else{
      header("Location: ordine-confermato.php?$url_for_facebook_event_purchase&price=$price&name=$name");
    }
  }
}
?>
