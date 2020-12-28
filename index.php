<?php include("../settings.php") ?>
<!doctype html>
<html lang="it">
  <head>
    <title>Gadgets Store - Prodotti scontati e in promozione</title>
    <meta name="description" content="Acquista online le migliori offerte e promozioni del momento, non perdere tra le varie categorie di prodotti: Salute e Benessere, Tecnologia e Formazione, Idee regalo utili e divertenti." >
    <?php include('shared/meta.php'); ?>
  </head>
  <body>
    <script>
      fbq('track', 'Home Page');
    </script>
    <?php include("shared/navbar.php") ?>
    <div class="pt-32">
      <?php include("shared/_tecnologia.php") ?>
      <?php include("shared/_ricevi_promozioni.php") ?>
      <?php include("shared/_benessere.php") ?>
      <?php include("shared/_ricevi_promozioni.php") ?>
      <?php include("shared/_bellezza.php") ?>
      <?php include("shared/_ricevi_promozioni.php") ?>
      <?php include("shared/_perlacasa.php") ?>
      <?php include("shared/_amazon.php") ?>
    </div>
    <?php include("shared/footer.php") ?>
  </body>
</html>
