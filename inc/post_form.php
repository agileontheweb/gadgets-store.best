<?php

function passDataForms(
                  $title_product, $form_short, $url_product_api, $selector_1, $selector_2, $selector_3,
                  $selector_value_1, $selector_value_2, $selector_value_3, $privacy, $quantity, $img,
                  $extra, $price, $upsell_page){

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if(isset($selector_1)){
        $selector = "true";
      }

      $selectors = "selector=$selector&selector_1=$selector_1&selector_value_1=$selector_value_1&selector_2=$selector_2&selector_value_2=$selector_value_2&selector_3=$selector_3&selector_value_3=$selector_value_3";

      $custom_params = "&img=$img&$selectors&title_product=$title_product&url_product_api=$url_product_api&privacy=$privacy&quantity=$quantity&price=$price&extra=$extra&upsell_page=$upsell_page&form_short=$form_short";
      header("Location: forms.php?$custom_params");
  }
}

function sendFormsUpsell(
                  $title_product,
                  $form_short,
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
    $form_short = $_POST["form_short"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $zipcode = $_POST["zipcode"];
    $quantity = $_POST["quantity"];
    $price = $_POST['price'];
    $upsell_page = $_POST['upsell_page'];


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
