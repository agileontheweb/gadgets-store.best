<?php include("settings.php") ?>
<!doctype html>
<html lang="it">
  <head>
    <title>Contatti Gadgets Store </title>
    <?php include('shared/meta.php'); ?>
  </head>
  <body class="bg-gray-100">
    <?php include("shared/navbar.php") ?>

    <div class="pt-32 px-3">
      <div class="max-w-screen-md mx-auto">
        <h1 class="text-2xl font-bold py-12">
          Contatta <?php echo $brand_name; ?>
        </h1>
        <p class="py-3">
          Hai qualche domanda?<br>
          Puoi <a class="text-red-500 underline" href="mailto:ordini@gadgets-store.best">inviarci una email</a> e cercheremo di contattarti nel più breve tempo possibile.
        </p>
        <p class="py-3">
          <strong>Attenzione:</strong>
          Ricorda che questo sito web non è responsabile di prodotti difettosi o
          cambi, resi. Contatta direttamente la pagina ufficiale del venditore
          "il posto in cui hai acquistato" come riportato nel nostro Disclaimer.
          <br>
          I nostri contenuti sono solo a titolo informativo per prodotti alimentari
          ti invitiamo a consultre sempre il tuo medico o specialista prima di qualsiasi acquisto.
       </p>
      </div>
    </div>

    <?php include("shared/footer.php") ?>
  </body>
</html>
