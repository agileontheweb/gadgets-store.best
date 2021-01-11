<?php include("settings.php") ?>
<!doctype html>
<html lang="it">
  <head>
    <title>Cos'è <?php echo $brand_name; ?> </title>
    <?php include('shared/meta.php'); ?>
  </head>
  <body class="bg-gray-100">
    <?php include("shared/navbar.php") ?>

    <div class="pt-32 px-3">
      <div class="max-w-screen-md mx-auto">
        <h1 class="text-2xl font-bold pt-12">
          <?php echo $brand_name; ?>
        </h1>
        <p class="py-3">
          <?php echo $brand_url; ?> è un raccoglitore di offerte e promozioni di aziende
          terze. Su questo sito promuoviamo prodotti di vario genere.
        </p>
        <p class="py-3">
          Segui la <a class="text-red-500 underline" href="https://www.facebook.com/GadgetsStoreBest" target="blank">nostra pagina Facebook</a>.
        </p>
      </div>
    <?php include("shared/footer.php") ?>
  </body>
</html>
