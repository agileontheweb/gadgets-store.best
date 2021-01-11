<?php
  include("settings.php");
  class NEWSLETTER {};
?>
<!doctype html>
<html lang="it">
  <head>
    <title>Gadgets Store - Newsletter</title>
    <meta name="description" content="Iscriviti gratis e ricevi le migliori offerte del momento." >
    <?php include('shared/meta.php'); ?>
  </head>

  <style type="text/css">
  #mlb2-3260023.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p{
    color:red;
  }
  </style>

  <body class="bg-gray-100">
    <script>
      fbq('track', 'Pagina newsletter');
    </script>
    <?php include("shared/navbar.php") ?>

    <div class="pt-32">
      <h1 class="text-center text-2xl font-bold py-12 text-gray-600">
        Ricevi gratuitamente le <br><strong>migliori offerte e promozioni <br>in sconto</strong> nella tua email!
      </h1>
      <div class="max-w-screen-sm bg-white mx-auto">
        <?php include("shared/_mailerlite.php") ?>
      </div>
      </div>
    </div>
    <?php include("shared/footer.php") ?>
</html>
