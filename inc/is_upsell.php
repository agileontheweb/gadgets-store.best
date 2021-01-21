<?php
$upsell_page_landing = "";
function isUpsell(){
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  if (strpos($url, "upsell") == true) {
    $upsell = "true";
    return $upsell;
  }
}
isUpsell();

if (isUpsell() == true) {
  $name = $_GET['name'];
  $surname = $_GET['surname'];
  $phone = $_GET['phone'];
  $address = $_GET['address'];
  $city = $_GET['city'];
  $zipcode = $_GET['zipcode'];

}

if (isUpsell() == true) {
  sendFormsUpsell($title_product, $form_short, $name, $surname, $phone, $address, $city, $zipcode,
                  $url_product_api, $quantity_upsell, $price, $upsell_page);

}else{
  passDataForms($title_product, $form_short, $url_product_api, $selector_1, $selector_2, $selector_3,
                $selector_value_1, $selector_value_2, $selector_value_3, $privacy, $quantity, $img,
                $extra, $price, $upsell_page);
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

?>
