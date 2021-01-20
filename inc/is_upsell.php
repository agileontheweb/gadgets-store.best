<?php



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
  sendFormsUpsell($title_product,
                  $form_short,
                  $name,
                  $surname,
                  $phone,
                  $address,
                  $city,
                  $zipcode,
                  $url_product_api,
                  $quantity_upsell,
                  $price);
}else{
  passDataForms($title_product,
                $form_short,
                $url_product_api,
                $selector_1,
                $selector_2,
                $selector_3,
                $selector_value_1,
                $selector_value_2,
                $selector_value_3,
                $privacy,
                $quantity,
                $price,
                $img,
                $extra,
                $upsell_page);
}
?>
