<?php
  include("../settings.php");
  class LANDING {};
  redirect_has_bought();

  $title_product = "Smartwatch X-W 6.0";

  if (isUpsell() == true) {
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $city = $_GET['city'];
    $zipcode = $_GET['zipcode'];
  }

  $url_product_api = "bgood_xwatch6.0";
  $selector = true;
  $selector_1 = "1 XW6.0 €59.90";
  $selector_2 = "2 XW6.0 €79.90";
  $selector_3 = "3 XW6.0 €99.90";
  $selector_1_value = "1";
  $selector_2_value = "2";
  $selector_3_value = "3";
  $quantity_upsell = "1";
  $privacy = "https://www.ilmontestore.sm/privacy-policy/";
  $quantity = null;
  $price = "18.00";
  $img = $projectPath . $projectPathImg . "xw60-sceglistile.jpg";
  $extra = " - Colore e cinturini potrai deciderli al telefono.";
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
    <title><?php echo $title_product; ?> è l'innovativo smart watch con display in HD | <?php echo $brand_name; ?>  <?php echo $brand_slogan; ?></title>
    <meta name="description" content="Acquista online le migliori offerte e promozioni del momento, non perdere tra le varie categorie di prodotti: Salute e Benessere, Tecnologia e Formazione, Idee regalo utili e divertenti." >
    <?php include('../shared/meta.php'); ?>
  </head>
  <body class="landing-page">
    <?php if(! in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {?>
      <script>
        fbq('trackCustom', 'PageView XW6.0 Page');
      </script>
    <?php } ?>

    <?php include("../shared/navbar.php") ?>

    <div>
      <?php
        $text_price = "Lo smartwatch in sconto 50% acquista a soli €59.90!";
        include("upsell_message.php");
      ?>
      <form action="" method="post">

        <div class="max-w-screen-md mx-auto px-3">
          <h1 class="text-center text-2xl font-bold pt-12">
              Che tu sia uno sportivo, una manager, un ragazzo, una madre di famiglia,
              questo smartwatch è in grado di adattarsi perfettamente alle tue esigenze!
          </h1>

          <p class="p-3">
            Il nuovo smartwatch che sta <strong>sfidando le grandi
            multinazionali tecnologiche</strong> è diventato il gadget più in voga del momento
            per essere <strong>uno dei pochi
            smartwatch con funzioni biometriche</strong>. Grazie a questa nuova tecnologia
            puoi tenere sotto controllo la tua salute.
          </p>
          <img src="<?php echo $projectPath?><?php echo $projectPathImg?>xw60-sceglistile.jpg" alt="Smartwatch" class="mx-auto w-full">

          <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-6">
            <div class="flex-1 text-center uppercase font-bold">
              <h3 class="p-3 text-xl text-center">
                Parametri vitali
              </h3>
            </div>
            <div class="flex-1 text-center uppercase font-bold">
              <h3 class="p-3 text-xl text-center">
                Impermeabile
              </h3>
            </div>
            <div class="flex-1 text-center uppercase font-bold">
              <h3 class="p-3 text-xl text-center">
                Schermo hd
              </h3>
            </div>
          </div>
          <h2 class="text-center p-3 font-bold text-2xl text-red-600">Acquista a 59.90€ anziché 119€!</h2>
          <div class="max-w-screen-sm mx-auto px-3">
            <?php include("../shared/progress-short.php") ?>
          </div>
          <p class="mx-auto text-center my-6">
            <button type="submit" class="btn-submit-to-forms font-bold inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
              <?php if (isUpsell() == true) { ?>
                Aggiungi all'ordine
              <?php }else { ?>
                Ordina Ora
              <?php }?>
            </button>
            <span class="block py-3">Spedizione gratuita</span>
          </p>

        </div>

        <div class="bg-gray-100 py-4">
          <div class="max-w-screen-md mx-auto px-3">
            <h2 class="text-center text-2xl font-bold pt-12">
              <span class="inline-block pb-3">CARATTERISTICHE</span>
            </h2>
            <p class="p-3">
              Dotato di schermo capacitivo full touch HD dai colori brillanti e di <strong>
              una batteria a lunga durata</strong>, questo smartwatch che unisce
              il <strong>design alla praticità</strong>, con tante funzioni in un unico prodotto.
            </p>
            <p class="p-3">
              XW6.0 è lo smartwatch performante e intuitivo, che racchiude, con la sua avanzata tecnologia
               le funzionalità e le App di uno smartphone, insieme alle performance e alla praticità
               che solo uno smartwatch di alta tecnologia può dare!
            </p>
            <h2 class="text-center text-2xl font-bold pt-12">
              <span class="inline-block pb-3 uppercase">TANTE FUNZIONALITA' IN UN UNICO PRODOTTO</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 text-white">
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="<?php echo $projectPath?><?php echo $projectPathImg?>xw60-foto.jpg" alt="Smartwatch" class="mx-auto">
                <h3 class="font-bold uppercase py-3">FOTOGRAFIE</h3>
                <p>Scatta foto in remoto controllando il tuo smartphone via bluetooth direttamente dal tuo XW6.0.</p>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="<?php echo $projectPath?><?php echo $projectPathImg?>xw60-sonno.jpg" alt="Smartwatch" class="mx-auto">
                <h3 class="font-bold uppercase py-3">MONITOR DEL SONNO</h3>
                <p>Analizza la qualità del tuo sonno tutte le notti tramite report e statistiche. Una scarsa qualità del sonno è indice di cattiva salute.</p>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="<?php echo $projectPath?><?php echo $projectPathImg?>xw60-sedentario.jpg" alt="Smartwatch" class="mx-auto">
                <h3 class="font-bold uppercase py-3">ALLERTA SEDENTARIETA'</h3>
                <p>Tramite XW6.0 puoi impostare un promemoria che ti avvisa di muoverti dopo troppo tempo passato seduto.</p>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="<?php echo $projectPath?><?php echo $projectPathImg?>xw60-trova.jpg" alt="Smartwatch" class="mx-auto">
                <h3 class="font-bold uppercase py-3">TROVA DISPOSITIVO</h3>
                <p>Trova il tuo smartphone o il tuo orologio tramite questa funzione che lo fà suonare a distanza.</p>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6 text-white px-3">
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fas fa-running fa-2x"></i>
                <h3 class="font-bold uppercase py-3">CONTAPASSI</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fas fa-heartbeat fa-2x"></i>
                <h3 class="font-bold uppercase py-3">BATTITI CARDIACI</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fas fa-moon fa-2x"></i>
                <h3 class="font-bold uppercase py-3">MONITOR SONNO</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fab fa-app-store fa-2x"></i>
                <h3 class="font-bold uppercase py-3">APP E SOCIAL</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="far fa-bell fa-2x"></i>
                <h3 class="font-bold uppercase py-3">AVVISO INATTIVITÀ</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fas fa-road fa-2x"></i>
                <h3 class="font-bold uppercase py-3">DISTANZA</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fas fa-tint fa-2x"></i>
                <h3 class="font-bold uppercase py-3">PRESSIONE SANGUE</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fas fa-phone-alt fa-2x"></i>
                <h3 class="font-bold uppercase py-3">CHIAMATE E MESSAGGI</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="far fa-envelope fa-2x"></i>
                <h3 class="font-bold uppercase py-3">PROMEMORIA</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fas fa-dumbbell fa-2x"></i>
                <h3 class="font-bold uppercase py-3">SPORT</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fas fa-fire fa-2x"></i>
                <h3 class="font-bold uppercase py-3">CALORIE</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fas fa-lungs fa-2x"></i>
                <h3 class="font-bold uppercase py-3">LIVELLO OSSIGENO</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fas fa-search fa-2x"></i>
                <h3 class="font-bold uppercase py-3">TROVA DISPOSITIVO</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="far fa-clock fa-2x"></i>
                <h3 class="font-bold uppercase py-3">SVEGLIE</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-gray-900">
                <i class="fas fa-child fa-2x"></i>
                <h3 class="font-bold uppercase py-3">ERGONOMICO</h3>
              </div>
            </div>
          </div>

            <p class="mx-auto text-center my-6">
              <button type="submit" class="btn-submit-to-forms font-bold inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                <?php if (isUpsell() == true) { ?>
                  Aggiungi all'ordine
                <?php }else { ?>
                  Ordina Ora
                <?php }?>
              </button>
              <h2 class="text-center p-3 font-bold text-2xl text-red-600">Acquista a 59.90€ anziché 119€!</h2>
            </p>
          </div>


          <div class="bg-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-12">
                <span class="inline-block pb-3 uppercase">PRATICITÀ SENZA RINUNCIARE AL DESIGN E ALL'ELEGANZA</span>
              </h2>
              <p class="p-3 text-center">
                <strong>Scegli quello che ti identifica!</strong>
                È composto da una cassa completamente in metallo inossidabile,
                la quale <strong>può essere inserita in un ampia varietà di cinturini</strong> in gomma
                siliconica disponibili in tante bellissime colorazioni e modelli.
              </p>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                <div class="flex-1 text-center p-6 border">
                  <h3 class="p-3 text-xl text-center">Con l'aggiunta di soli 15€ puoi avere <strong>un'altro cinturino aggiuntivo</strong> in metallo del colore che desideri.</h3>
                  <img src="<?php echo $projectPath?><?php echo $projectPathImg?>xw60-cinturini.jpg" class="mx-auto" alt="Cinturini">
                </div>
                <div class="flex-1 text-center p-6 border">
                  <h3 class="p-3 text-xl text-center">Costruito in materiale interamente impermeabile e resistente a urti e polvere.</h3>
                  <img src="<?php echo $projectPath?><?php echo $projectPathImg?>xw60-water.jpg" class="mx-auto" alt="Cinturini">
                </div>
              </div>

              <p class="mx-auto text-center">
                <button type="submit" class="font-bold btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                  <?php if (isUpsell() == true) { ?>
                    Aggiungi all'ordine
                  <?php }else { ?>
                    Clicca qui per ordinare
                  <?php }?>
                </button>
                <span class="block py-3">Colore e cinturini potrai deciderli al telefono con l'operatrice</span>
              </p>
            </div>
          </div>

          <div class="bg-black text-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-12">
                <span class="inline-block pb-3 uppercase">SEMPLICE, FUNZIONALE, intuitivo, adatto a tutti!</span>
              </h2>
              <p class="p-3 text-center">
                Molte funzioni usate sul telefono possono essere trasferiti sullo
                smartwatch così che ci si possa dimenticare del cellulare.
                E’ compatibile con tutti i sistemi operativi, <strong>sia iOS che Android</strong>.
              </p>

              <img src="<?php echo $projectPath?><?php echo $projectPathImg?>xw60-tecno.jpg" class="mx-auto md:max-w-sm py-3" alt="Smartwatch">

              <p class="p-3 text-center">
                XW6.0 è provvisto di un'apposita APP semplice ed intuitiva che
                si installa sul tuo Smartphone. Tramite l'APP puoi tenere traccia
                e vedere in tempo reale tutti i dati provenienti dai sensori: passi,
                cronometro, notifiche, battiti, pressione e molto altro.
              </p>

              <div class="max-w-screen-sm mx-auto px-3">
                <h2 class="text-center p-3 font-bold text-2xl text-red-600">Acquista a 59.90€ anziché 119€!</h2>
                <p class="mx-auto text-center">
                  <button type="submit" class="font-bold btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                    <?php if (isUpsell() == true) { ?>
                      Aggiungi all'ordine
                    <?php }else { ?>
                      Clicca qui per compilare il modulo d'acquisto
                    <?php }?>
                  </button>
                  <span class="block py-3">🚚 Spedizione gratuita</span>
                </p>
                <?php include("../shared/progress-short.php") ?>

                <!-- <h4 class="text-center text-2xl py-4">
        					Compila il modulo, un'operatrice ti ricontatterà per confermare
        					l'ordine e ricevere il nuovo SmartWatch: XW6.0 a soli €59.90 invece di <strike>€119.00</strike>
        				</h4> -->
                <?#php include("form.php") ?>
              </div>
            </div>
          </div>


          <div class="bg-gray-100 py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-12">
                <span class="inline-block pb-3 uppercase">SEMPLICE, FUNZIONALE, intuitivo, adatto a tutti!</span>
              </h2>
              <?php include("recensioni.php") ?>
              <p class="mx-auto text-center">
                <button type="submit" class="font-bold btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                  <?php if ($upsell == true) { ?>
                    Aggiungi all'ordine
                  <?php }else { ?>
                    Clicca qui per compilare il modulo d'acquisto
                  <?php }?>
                </button>
                <span class="block py-3">Sconto 50%</span>
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
