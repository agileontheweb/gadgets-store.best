<?php include("../settings.php") ?>
<?php
  $title = $_GET['title'];
  $url_product_api = $_GET['url_product_api'];
  $selector = $_GET['selector'];
  $selector_1 = $_GET['selector_1'];
  $selector_2 = $_GET['selector_2'];
  $selector_3 = $_GET['selector_3'];
  $selector_1_value = $_GET['selector_1_value'];
  $selector_2_value = $_GET['selector_2_value'];
  $selector_3_value = $_GET['selector_3_value'];
  $quantity = $_GET['quantity'];
  $privacy = $_GET['privacy'];
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
        fbq('track', '<?php echo $title ?> Page CheckIn');
      </script>
    <?php } ?>

    <?php include("../shared/navbar.php") ?>
    <div class="pt-32">
      <h1 class="text-center text-2xl font-bold pt-12 text-gray-600">
        <span class="inline-block pb-3">Modulo Acquisto <strong class="text-green-500"><?php echo $title;?> </strong></span>
      </h1>
      <div class="max-w-screen-sm mx-auto mt-8 px-3">
        <?php include("form.php") ?>
      </div>
    </div>
    <?php include("../shared/footer.php") ?>
  </body>
</html>
