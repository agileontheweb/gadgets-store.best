<?php
  include("../settings.php");
  if(isset($_GET['name'])) {$name = $_GET['name'];}
  if(isset($_GET['title'])) {$title = $_GET['title'];}
  if(isset($_GET['price'])) {$price = $_GET['price'];}
  $_SESSION['has_bought'] = "has_bought";
?>

<!doctype html>

<html lang="it">
  <head>
    <title>Ordine Confermato - Gadgets Store - Prodotti scontati e in promozione</title>
    <?php include('../shared/meta.php'); ?>
  </head>
  <body>

    <?php if(! in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {?>
      <script>
        // fbq('track', 'Purchase', {currency: "EUR", value: <?php echo $price; ?>});
      </script>
    <?php } ?>

    <div class="text-gray-600">
      <div class="max-w-screen-sm bg-white mx-auto px-3">
        <h1 class="text-center text-2xl font-bold pt-12">
          <span class="inline-block border-b-4 border-gray-600 pb-3">Grazie <?php echo $name ?> il tuo ordine è in fase di analisi.</span>
        </h1>
        <p class="bg-yellow-300 text-yellow-900 my-6 p-3 text-center rounded-md">Un operatore telefonico ti richiamerà a breve
          o nelle prossime ore per confermare i tuoi dati per la spedizione del
          prodotto: <strong><?php echo $title ?></strong>
        </p>
        <h2 class="text-center font-extrabold text-xl leading-tight my-3">
          Ultimo passo per ottenere il massimo dal tuo acquisto
        </h2>
        <p class="text-base py-2">
          Siamo davvero entusiasti che <strong>ogni mese centinaia di persone decidano
          di semplificare la loro vita acquistando i nostri esclusivi ed introvabili prodotti</strong>.
          Per questo motivo vorremmo restare in contatto con te e proporti nuovi
          prodotti esclusivi e in promozione.
        </p>

        <?php include("../shared/_mailerlite.php") ?>

      </div>
    </div>
  </div>
  <?php include("../shared/footer.php") ?>
  <?php include("../shared/px-hotjar.php") ?>
  </body>
</html>
