<?php
  include("../settings.php");
  class LANDING {};
  add_cookie_has_bought();
  redirect_has_bought();

  $title_product = "Foot Energy";
  isUpsell();

  if ($upsell == true) {
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $city = $_GET['city'];
    $zipcode = $_GET['zipcode'];
  }

  $url_product_api = "nst_footenergy";
  $selector = false;
  $selector_1 = null;
  $selector_2 = null;
  $selector_3 = null;
  $selector_1_value = null;
  $selector_2_value = null;
  $selector_3_value = null;
  $quantity_upsell = null;
  $privacy = "https://www.ilmontestore.sm/privacy-policy/";
  $quantity = 1;
  $price = "17.00";
  $img = "../img/prodotti/footenergy-1.jpg";
  $extra = null;
  $upsell_page = "";

  if ($upsell == true) {
    sendFormsUpsell($title_product,$name,$surname,$phone,$address,$city,$zipcode,$url_product_api,$quantity_upsell,$price);
  }else{
    passDataForms($title_product,$url_product_api,$selector,$selector_1,$selector_2,$selector_3,$selector_1_value,$selector_2_value,$selector_3_value,$privacy,$quantity,$price,$img,$extra,$upsell_page);
  }

 ?>
<!doctype html>
<html lang="it">
  <head>
    <title>Il massaggiatore per piedi Foot Energy | <?php echo $brand_name; ?>  <?php echo $brand_slogan; ?></title>
    <meta name="description" content="Acquista online le migliori offerte e promozioni del momento, non perdere tra le varie categorie di prodotti: Salute e Benessere, Tecnologia e Formazione, Idee regalo utili e divertenti." >
    <?php include('../shared/meta.php'); ?>
  </head>
  <body class="landing-page">

    <?php if(! in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {?>
      <script>
        fbq('trackCustom', 'PageView Foot Energy');
      </script>
    <?php } ?>

    <?php include("../shared/navbar.php") ?>

    <div>
      <form action="" method="post">
        <div class="max-w-screen-md mx-auto px-3">
          <h1 class="text-center text-2xl font-bold pt-12">
            Soffri di piedi e gambe gonfie? Dopo poche ore le senti già pesanti e affaticate? Hai problemi di circolazione?
          </h1>

          <p class="p-3">
            Utilizzando Foot Energy ogni giorno potrai notare subito i
            benefici sul tuo corpo. I muscoli delle gambe saranno più rilassati
            e forti, la circolazione sanguigna migliorerà e non avvertirai più
            quella sgradevole sensazione di gonfiore e pesantezza a gambe e piedi.
            Prendersi cura del proprio corpo non è mai stato così rilassante!
          </p>
          <img src="../img/prodotti/footenergy-1.jpg" alt="Smartwatch" class="mx-auto max-w-lg w-full">

          <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-6">
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                MIGLIORA LA CIRCOLAZIONE
                <!-- Rafforzamento muscolare -->
              </h3>
            </div>
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                MIGLIORA IL TONO MUSCOLARE
                <!-- miglioramento della circolazione sanguigna -->
              </h3>
            </div>
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                COMODO E PORTATILE
                <!-- Prevenzione di atrofia muscolare -->
              </h3>
            </div>
          </div>
          <h2 class="text-center p-3 font-bold text-2xl text-red-600">
            Solo per oggi il MASSAGGIATORE PER PIEDI “EMS”  €69.00 invece di <strike>€230.00</strike>
          </h2>
          <div class="max-w-screen-sm mx-auto px-3">
            <?php include("../shared/progress-short.php") ?>
          </div>
          <p class="mx-auto text-center my-6">
            <button type="submit" class="btn-submit-to-forms font-bold inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
              Ordina Ora
            </button>
            <span class="block py-3">🚚  Spedizione gratuita pagamento alla consegna</span>
          </p>

        </div>

        <div class="bg-blue-100 py-4">
          <div class="max-w-screen-md mx-auto px-3">
            <h2 class="text-center text-2xl font-bold pt-12">
              <span class="inline-block pb-3">CARATTERISTICHE</span>
            </h2>
            <p class="p-3">
              Grazie alla tecnologia EMS (stimolazione muscolare elettrica) il
              tappetino Foot Energy è in grado di stimolare tendini, caviglie,
              piedi e perfino i muscoli del polpaccio. È progettato per permettere
              al muscolo di contrarsi e rilassarsi, tramite gli elettrodi
              predisposti sulla superficie, in modo tale da migliorare e stimolare la circolazione sanguigna.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 text-white">
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="../img/prodotti/footenergy-2.jpg" alt="Spalline Larghe" class="mx-auto">
                <h3 class="font-bold uppercase py-3">portatile e facile da usare</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="../img/prodotti/footenergy-3.jpg" alt="Tessuto leggero e traspirante" class="mx-auto">
                <h3 class="font-bold uppercase py-3">15 livelli di intensità</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="../img/prodotti/footenergy-4.jpg" alt="Elastici contenitivi" class="mx-auto">
                <h3 class="font-bold uppercase py-3">2 modalità selezionabili</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="../img/prodotti/footenergy-5.jpg" alt="3 strati di materiale resistente" class="mx-auto">
                <h3 class="font-bold uppercase py-3">Materiale di alta qualità</h3>
              </div>
            </div>

            <p class="p-3 mt-4 text-center text-2xl">
              Unità di controllo rimovibile, batteria ricaricabile con USB!
            </p>
          </div>
            <p class="mx-auto text-center my-3">
              <button type="submit" class="btn-submit-to-forms font-bold inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                Ordina Ora
              </button>
              <h2 class="text-center p-3 font-bold text-2xl text-red-600">Solo per oggi €69.00 invece di <strike>€230.00</strike></h2>
            </p>
          </div>


          <div class="bg-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-12">
                <span class="inline-block pb-3 uppercase">COS'È LA TECNOLOGIA EMS?</span>
              </h2>
              <p class="p-3 text-center">
                La stimolazione muscolare elettrica (EMS), nota anche come stimolazione elettrica neuromuscolare (NMES), è la stimolazione della contrazione muscolare mediante impulsi elettrici. Gli impulsi imitano il potenziale d'azione proveniente del sistema nervoso centrale, causando la contrazione dei muscoli.
                Lo SME ha dimostrato di essere abbastanza efficace come strumento proattivo per il rafforzamento muscolare.
              </p>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                <div class="flex-1 text-center p-6 border">
                  <h3 class="p-3 text-xl text-center">
                    Invia impulsi elettrici dall'unità di controllo rimovibile.
                  </h3>
                  <img src="../img/prodotti/footenergy-6.jpg" class="mx-auto" alt="leggero e traspirante">
                </div>
                <div class="flex-1 text-center p-6 border">
                  <h3 class="p-3 text-xl text-center">
                    Simula la sensazione di stimolare, massaggiare e
                    rilassare piedi, caviglie, tendini di Achille e muscoli del polpaccio.
                  </h3>
                  <img src="../img/prodotti/footenergy-7.jpg" class="mx-auto" alt="volumizza il tuo seno in 3 differenti livelli">
                </div>
              </div>
            </div>
          </div>

          <div class="bg-blue-700 text-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-2">
                <span class="inline-block pb-3 uppercase">
                  COSA ASPETTI? APPROFITTA DELLA SUPER PROMO a €69.00 invece di <strike>€230.00</strike>!</span>
              </h2>
              <p class="mx-auto text-center">
                <button type="submit" class="font-bold btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                  Clicca qui per compilare il modulo d'acquisto
                </button>
                <span class="block py-3">🚚 Spedizione gratuita</span>
              </p>
            </div>
          </div>

          <div class="bg-gray-100 py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-12">
                <span class="inline-block pb-3 uppercase">RILASSA LE TUE TENSIONI MUSCOLARI E MIGLIORA LA CIRCOLAZIONE SANGUIGNA</span>
              </h2>
              <img src="../img/prodotti/footenergy-8.jpg" class="mx-auto" alt="Cinturini">
            </div>
          </div>

          <div class="bg-blue-700 text-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-2">
                <span class="inline-block pb-3 uppercase">
                  COSA ASPETTI? APPROFITTA DELLA SUPER PROMO a €69.00 invece di <strike>€230.00</strike>!</span>
              </h2>
              <p class="mx-auto text-center">
                <button type="submit" class="font-bold btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                  Clicca qui per compilare il modulo d'acquisto
                </button>
                <span class="block py-3">🚚 Spedizione gratuita</span>
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
