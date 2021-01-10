<?php include("settings.php") ?>
<!doctype html>
<html lang="it">
  <head>
    <?php include('shared/meta.php'); ?>
  </head>
  <body class="bg-gray-100">
    <?php include("shared/navbar.php") ?>

    <div class="pt-32 px-3">
      <div class="max-w-screen-md mx-auto">
        <h1 class="text-2xl font-bold py-12">
          Disclaimer <?php echo $brand_name; ?>.
        </h1>
        <p class="my-3">
          I contenuti all'interno di <?php echo $brand_url; ?> sono esclusivamente
          da considerarsi a titolo informativo.
          Le nostre categorie di prodotti spaziano a 360 gradi, puoi trovare informazioni
          editoriali e recensioni, ma non è <?php echo $brand_url; ?> o qualsiasi membro
          all'interno di questa piattaforma a rendersi responsabile di qualsiasi prodotto
          in quanto nessun prodotto è di nostra proprietà. Solo ci limitiamo ad
          inviare i nostri visitatori su pagine di altre aziende.
        </p>
        <p>
          Le informazioni spiegate in ogni singolo prodotto o recensione sono state
          acquisite dalla stessa pagina ufficiale del propietario del prodotto.
          <br>
          <?php echo $brand_url; ?> non è responsabile riguardo l’accuratezza,
          completezza o veridicità di tutto il materiale pubblicato e neanche per
          qualsiasi eventuale danno arrecato.
        </p>
      </div>
    </div>
    <?php include("shared/footer.php") ?>
  </body>
</html>
