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
        <h1 class="text-2xl font-bold pt-12">
          Contatta <?php echo $brand_name; ?>
        </h1>
        <p class="py-3">
          Hai qualche domanda?<br>
          Puoi <a class="text-red-500 underline" href="mailto:ordini@gadgets-store.best">inviarci una email</a> e cercheremo di contattarti nel più breve tempo possibile.
        </p>
        <p class="py-3">
          <strong>Attenzione:</strong>
          Ricorda che questo sito web non è responsabile di prodotti difettosi,
          cambi o resi. <a class="underline" href="<?php echo $projectPath ?>/disclaimer.php">Vedi Disclaimer</a>
       </p>
       <p class="py-3">
         Questo sito web si occupa soltanto della promozione come affiliato di prodotti
         di aziende terze. Per conttatare direttamente l'azienda dovrai recarti sulla
         pagina ufficiale del venditore in base al prodotto che hai acquistato.
       </p>
       <p class="py-3">
         Per aiutarti a contattare l'azienda abbiamo preparato una pagina dedicata per
         contattare il fornitore.
         Accedi alla pagina di
         <a class="underline font-bold" href="<?php echo $projectPath ?>/assistenza.php">Assistenza</a>
         e cerca il prodotto di tuo interesse, troverai tutti i riferimenti dell'azienda.
       </p>

       I nostri contenuti sono solo a titolo informativo per prodotti alimentari
       ti invitiamo a consultre sempre il tuo medico o specialista prima di qualsiasi acquisto.
      </div>
    </div>

    <?php include("shared/footer.php") ?>
  </body>
</html>
