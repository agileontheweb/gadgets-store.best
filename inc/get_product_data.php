<?php
$xml = simplexml_load_file($path_xml) or die("Error: Cannot create object");
foreach($xml->children() as $product) {
  if($product->attributes()->id == $id_temp){
    $title_product = $product->name;
    $average_rating = $product->average_rating;
    $form_short = $product->form_short;
    $url_product_api = $product->url_product_api;
    $privacy = $product->privacy;
    $quantity = $product->quantity;
    $price = $product->price_affiliate;
    $extra = $product->extra;
    $product_image = $product->image;
    $img = $projectPath . $projectPathImg . $product_image;

    foreach($product->children() as $selector) {
      if(!isset($selector)){
        $selector = null;
        $selector_1 = null;
        $selector_2 = null;
        $selector_3 = null;
        $selector_value_1 = null;
        $selector_value_2 = null;
        $selector_value_3 = null;
        $quantity_upsell = null;
      }else{
        #$selector = true;
        $selector_value_1 = $selector->selector_value_1;
        $selector_value_2 = $selector->selector_value_2;
        $selector_value_3 = $selector->selector_value_3;
        $selector_1 =  $selector->selector_1;
        $selector_2 =  $selector->selector_2;
        $selector_3 =  $selector->selector_3;
      }
    }
  }
}

include("is_upsell.php");
?>
