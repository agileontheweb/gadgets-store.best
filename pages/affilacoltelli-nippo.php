<?php
  include("../settings.php");
  class UPSELL {};
  redirect_has_bought();

  $title_product = "Affila Coltelli Nippo";
  isUpsell();
  if (isUpsell() == true) {
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $city = $_GET['city'];
    $zipcode = $_GET['zipcode'];
  }

  $url_product_api = "dmc_nippoaffilacoltelli";
  $selector = false;
  $selector_1 = null;
  $selector_2 = null;
  $selector_3 = null;
  $selector_1_value = null;
  $selector_2_value = null;
  $selector_3_value = null;
  $quantity_upsell = null;
  $privacy = "https://webshopitaly.sm/documenti/2-privacy-policy";
  $quantity = 1;
  $price = "16.00";
  $img = $projectPath . $projectPathImg . "affilacoltelli-1.jpg";
  $extra = null;
  $upsell_page = "";

  if (isUpsell() == true) {
    sendFormsUpsell($title_product,$name,$surname,$phone,$address,$city,$zipcode,$url_product_api,$quantity_upsell,$price);
  }else{
    passDataForms($title_product,$url_product_api,$selector,$selector_1,$selector_2,$selector_3,$selector_1_value,$selector_2_value,$selector_3_value,$privacy,$quantity,$price,$img,$extra,$upsell_page);
  }

 ?>
<!doctype html>
<html lang="it">
  <head>
    <title>Nippo il rivoluzionario affilacoltelli | <?php echo $brand_slogan; ?></title>
    <meta name="description" content="In offerta Speciale l'innovativa padella della nuova linea Tognana in sconto 20%. Corpo in alluminio pressofuso con uno strato interno realizzato in microsfere di porcellana." >
    <?php include('../shared/meta.php'); ?>
  </head>
  <body class="landing-page">
    <?php if(! in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {?>
      <script>
        fbq('trackCustom', 'PageView Fornetto 10in1 Page');
      </script>
    <?php } ?>

    <?php include("../shared/navbar.php") ?>

    <div class="">
      <?php
        $text_price = "L'affilacoltelli Nippo, Semplice, Sicuro, Efficace!";
        include("upsell_message.php");
      ?>
      <form action="" method="post">

        <div class="max-w-screen-md mx-auto px-3 mt-10">
          <h1 class="text-center text-2xl pt-0 mb-6">
            Nippo il <strong>rivoluzionario affilacoltelli!</strong>
          </h1>
          <p class="py-3">
            <strong>Affila come rasoi le lame dei coltelli che hai in cucina</strong>,
            facendole tornare come nuove in pochi secondi. Basta passare la lama
            del coltello una o più volte fra i due bracci a molla per ottenere
            un’affilatura perfetta. Facile, veloce, sicuro.
          </p>

          <img src="<?php echo $projectPath?><?php echo $projectPathImg?>affilacoltelli-1.jpg" alt="Affilacoltelli" class="mx-auto max-w-xs">

          <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-6">
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                 Affinatura fine
              </h3>
            </div>
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                Lucidatura
              </h3>
            </div>
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                Affilatura
              </h3>
            </div>
          </div>
          <h2 class="text-center p-3 font-bold text-2xl text-red-600">
            NON LASCIARTI SFUGGIRE QUESTA SUPER OFFERTA
            Aggiungi al tuo ordine a soli <span class="font-bold text-green-600">€49.90</span> invece di <strike>€79.90</strike>
          </h2>
          <p class="mx-auto text-center my-6">
            <button type="submit" class="btn-animate btn-submit-to-forms font-bold inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
              <?php if (isUpsell() == true) { ?>
                Aggiungi all'ordine
              <?php }else { ?>
                Ordina Ora
              <?php }?>
            </button>
          </p>
        </div>

        <div class="bg-gray-100 py-4">
          <div class="max-w-screen-md mx-auto px-3">
            <p class="p-1 text-center text-2xl">
              <strong>Facilissimo da usare e molto resistente, affila velocemente
                in totale sicurezza per poi tagliare qualsiasi cosa.</strong>
            </p>

            <h2 class="text-center text-2xl font-bold pt-12">
              <span class="inline-block pb-3">Perchè aggiungerlo all'ordine?</span>
            </h2>
            <p class="py-3">
              L’uso di coltelli non affilati, rovinati o spuntati, può essere pericoloso.
              Con NIPPO invece, i tuoi vecchi coltelli tornano, in pochi secondi,
              affilati come rasoi, pronti per tagliare, affettare, sfilettare e sminuzzare
              con facilità e precisione proprio come appena tirati fuori dalla scatola.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mt-6 text-white">
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="<?php echo $projectPath?><?php echo $projectPathImg?>affilacoltelli-2.jpg" alt="Strato in microsfere di porcellana che garantisce un'antiaderenza superiore" class="mx-auto">
                <h3 class="font-bold uppercase py-3">Posiziona la punta in su del coltello per la manutenzione quotidiana.</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="<?php echo $projectPath?><?php echo $projectPathImg?>affilacoltelli-3.jpg" alt="Resistente fino a 100.000 cicli di abrasione con utensili metallici" class="mx-auto">
                <h3 class="font-bold uppercase py-3">Muovi la lama del coltello avanti e dietro per rendere affilatissime le lame dei tuoi coltelli.</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="<?php echo $projectPath?><?php echo $projectPathImg?>affilacoltelli-4.jpg" alt="Manico in bakelite con design elegante, raffinato e brevettato. Finitura marmorea e inserti effetto acciaio satinato" class="mx-auto">
                <h3 class="font-bold uppercase py-3">Posizionando il coltello con la punta in giù potraiaffilare le lame molto opache o danneggiate.</h3>
              </div>
            </div>
          </div>
        </div>
          <div class="bg-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <p class="mx-auto text-center my-6">
                <button type="submit" class="btn-submit-to-forms font-bold inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                  <?php if (isUpsell() == true) { ?>
                    Aggiungi all'ordine
                  <?php }else { ?>
                    Ordina Ora
                  <?php }?>
                </button>
                <h2 class="text-center p-3 font-bold text-2xl text-red-600">
                  NON LASCIARTI SFUGGIRE QUESTA SUPER OFFERTA
                  Aggiungi al tuo ordine a soli <span class="font-bold text-green-600">€49.90</span> invece di <strike>€79.90</strike>
                </h2>

                <a class="block underline text-center" href="ordine-confermato.php?name=<?php echo $name ?>">
                  No, grazie. Comprendo che lasciando questa pagina, perderò quest' unica offerta.
                </a>

              </p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php include("../shared/footer.php") ?>
  <?php include("../shared/px-hotjar.php") ?>
  </body>
</html>
