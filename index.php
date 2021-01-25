<?php
  include("settings.php");
  remove_session_has_bought();
?>
<!doctype html>
<html lang="it">
  <head>
    <title><?php echo $brand_name; ?> - <?php echo $brand_slogan; ?></title>
    <meta name="description" content="Acquista online le migliori offerte e promozioni
    del momento. Sfoglia tra le varie categorie di prodotti: Salute e Benessere, Tecnologia
    e Formazione, Idee regalo utili e divertenti." >
    <?php include('shared/meta.php'); ?>
  </head>
  <body>
    <?#php include("shared/px-messanger.php") ?>
    <?php if(isset($env)=="prod"){?>
      <script>
        fbq('track', 'Home Page');
      </script>
    <?php } ?>

    <?php include("shared/navbar.php") ?>
    <div class="pt-24">
      <h1 class="py-6 text-center text-3xl md:text-2xl px-3 border">
        Tanti <strong><?php echo $brand_slogan; ?></strong> da prendere al volo !
      </h1>
      <?php include("shared/_tecnologia.php") ?>
      <?php include("shared/_ricevi_promozioni.php") ?>
      <?php include("shared/_bellezza.php") ?>
      <?php include("shared/_ricevi_promozioni.php") ?>
      <?php include("shared/_benessere.php") ?>
      <?php include("shared/_ricevi_promozioni.php") ?>
      <?php include("shared/_perlacasa.php") ?>
      <?php include("shared/_amazon.php") ?>
    </div>
    <?php include("shared/footer.php") ?>
  </body>
</html>
