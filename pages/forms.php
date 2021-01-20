<?php
  include("../settings.php");
  class FORMS {};
  redirect_has_bought();

  if(isset($_GET['form_short'])) {
    $form_short = $_GET['form_short'];
  }

  if(isset($_GET['title_product'])) {
    $title_product = $_GET['title_product'];
  }

  $url_product_api = $_GET['url_product_api'];
  $price = $_GET['price'];


  if(isset($_GET['selector'])) {
    $selector = $_GET['selector'];
  }else{
    $selector = false;
  }

  if($selector == true){
    $selector_1 = $_GET['selector_1'];
    $selector_2 = $_GET['selector_2'];
    $selector_3 = $_GET['selector_3'];
    $selector_value_1 = $_GET['selector_value_1'];
    $selector_value_2 = $_GET['selector_value_2'];
    $selector_value_3 = $_GET['selector_value_3'];
  }

  $quantity = $_GET['quantity'];
  $privacy = $_GET['privacy'];
  $extra = $_GET['extra'];
  $upsell_page = $_GET['upsell_page'];
  ?>

<!doctype html>
<html lang="it">
  <head>
    <title>Modulo acquisto - Gadgets Store - Prodotti scontati e in promozione</title>
    <meta name="description" content="Acquista online le migliori offerte e promozioni del momento, non perdere tra le varie categorie di prodotti: Salute e Benessere, Tecnologia e Formazione, Idee regalo utili e divertenti." >
    <?php include('../shared/meta.php'); ?>
  </head>
  <body>
    <?php if(! in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {?>
      <script>
        fbq('trackCustom', 'InitiateCheckout <?php echo $title_product ?>');
      </script>
    <?php } ?>

    <?php include("../shared/navbar.php") ?>
    <div>
      <h1 class="text-center text-2xl font-bold pt-12 text-gray-600">
        <span class="inline-block pb-3">Modulo Acquisto <strong class="text-green-500"><?php echo $title_product;?> </strong></span>
      </h1>
      <div class="max-w-screen-sm mx-auto mt-8 px-3">

        <?php

        if($form_short == "false"){?>
          <?php  include("form.php") ?>
        <?php }else{?>
          <?php include("form-short.php") ?>
        <?php } ?>


        <div class="max-w-screen-sm mx-auto">
          <p class="text-center text-4xl mt-3">
            <i class="fas fa-arrow-up"></i>
          </div>
          <p class="text-center text-2xl font-bold px-3 py-3">
            Compila il modulo qui sopra e non preoccuparti di altro, una opertatrice
            telefonica si incaricherà di chiamarti non appena possibile.
          </p>
          <?php include("icon-shipping.php") ?>
          <p class="text-center">
            <img src="<?php echo $projectPath?><?php echo $projectPathImg?>operatore-telefonico.jpg" class="w-full">
          </p>
        </div>
      </div>
    </div>
    <?php include("../shared/footer.php") ?>
    <?php include("../shared/px-hotjar.php") ?>
  </body>
</html>
<?PHP echo $form_short; ?>
