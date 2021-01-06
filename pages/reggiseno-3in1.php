<?php
  include("../settings.php");
  class LANDING {};
  $remaining_pieces = 7;
  isUpsell();

  $name = $_GET['name'];
  $surname = $_GET['surname'];
  $phone = $_GET['phone'];
  $address = $_GET['address'];
  $city = $_GET['city'];
  $zipcode = $_GET['zipcode'];

  $title_product = "Reggiseno Lovely bra 3 in 1";
  $url_product_api = "dmc_lovelybra3in1";
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
  $price = "18.00";
  $img = "../img/prodotti/reggiseno3in1.jpg";
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
    <title>Il reggiseno innovativo 3 in 1 che adorerari per tutta la vita - Gadgets Store - Prodotti scontati e in promozione</title>
    <meta name="description" content="Acquista online le migliori offerte e promozioni del momento, non perdere tra le varie categorie di prodotti: Salute e Benessere, Tecnologia e Formazione, Idee regalo utili e divertenti." >
    <?php include('../shared/meta.php'); ?>
  </head>
  <body class="landing-page">

    <?php if(! in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {?>
      <script>
        fbq('trackCustom', 'PageView Reggiseno 3in1 Page');
      </script>
    <?php } ?>

    <?php include("../shared/navbar.php") ?>

    <div>
      <form action="reggiseno-3in1.php" method="post">
        <div class="max-w-screen-md mx-auto px-3">
          <h1 class="text-center text-2xl font-bold pt-12">
            Sei stanca di quegli scomodi ferretti, che ti stringono e irritano la tua pelle?
            Da oggi c’è il reggiseno senza cuciture e senza ferretti
            di cui ti innamorerai!
          </h1>

          <p class="p-3">
            Il suo design innovativo avvolge il tuo seno e
            lo <strong>sostiene senza stringere e irritare la tua pelle</strong>.
            Grazie alle spalline più larghe di un normale reggiseno, Lovely Bra è
            super comodo e non lascia quei fastidiosi segni sul tuo corpo!
          </p>
          <img src="../img/prodotti/reggiseno3in1.jpg" alt="Smartwatch" class="mx-auto w-full">

          <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-6">
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                Comodissimo, perché senza ferretti
              </h3>
            </div>
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                Rivoluzionario effetto push-up
              </h3>
            </div>
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                Funzione contenitiva
              </h3>
            </div>
          </div>
          <h2 class="text-center p-3 font-bold text-2xl text-red-600">Acquista 3 pezzi a soli €59.90</h2>
          <div class="max-w-screen-sm mx-auto px-3">
            <?php include("../shared/progress-short.php") ?>
          </div>
          <p class="mx-auto text-center my-6">
            <button type="submit" class="btn-submit-to-forms font-bold inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
              Ordina Ora
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
              Lovely Bra ha 3 eleganti colori per tutte le occasioni (nero, bianco e beige).
              Inoltre, grazie al suo scollo a V è discreto e adatto a qualsiasi tipo di outfit!
              Usalo sotto una camicetta oppure per fare sport: il suo tessuto
              leggero e traspirante ti darà una sensazione di libertà e comfort assoluto!
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 text-white">
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="../img/prodotti/reggiseno-04.jpg" alt="Spalline Larghe" class="mx-auto">
                <h3 class="font-bold uppercase py-3">Spalline Larghe</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="../img/prodotti/reggiseno-05.jpg" alt="Tessuto leggero e traspirante" class="mx-auto">
                <h3 class="font-bold uppercase py-3">Tessuto leggero e traspirante</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="../img/prodotti/reggiseno-06.jpg" alt="Elastici contenitivi" class="mx-auto">
                <h3 class="font-bold uppercase py-3">Elastici contenitivi</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="../img/prodotti/reggiseno-07.jpg" alt="3 strati di materiale resistente" class="mx-auto">
                <h3 class="font-bold uppercase py-3">3 strati di materiale resistente</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="../img/prodotti/reggiseno-08.jpg" alt="Comoda chiusura laterale" class="mx-auto">
                <h3 class="font-bold uppercase py-3">Comoda chiusura laterale</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <img src="../img/prodotti/reggiseno-09.jpg" alt="Fasche effetto push-up" class="mx-auto">
                <h3 class="font-bold uppercase py-3">Fasche effetto push-up</h3>
              </div>
            </div>
          </div>

            <p class="mx-auto text-center my-6">
              <button type="submit" class="btn-submit-to-forms font-bold inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                Ordina Ora
              </button>
              <h2 class="text-center p-3 font-bold text-2xl text-red-600">Acquista 3 pezzi a soli €59.90</h2>
            </p>
          </div>


          <div class="bg-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-12">
                <span class="inline-block pb-3 uppercase">Pratico, comodo adatto per ogni occasione!</span>
              </h2>
              <p class="p-3 text-center">
                Lovely Bra è lavabile in lavatrice e, grazie ai suoi 3 strati,
                è super resistente e non perde né forma né colore.
              </p>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                <div class="flex-1 text-center p-6 border">
                  <h3 class="p-3 text-xl text-center">
                    Tessuto leggero e traspirante ti darà una sensazione di libertà e comfort assoluto.
                  </h3>
                  <img src="../img/prodotti/reggiseno-01.jpg" class="mx-auto" alt="leggero e traspirante">
                </div>
                <div class="flex-1 text-center p-6 border">
                  <h3 class="p-3 text-xl text-center">
                    Ha anche un effetto push-up che volumizza il tuo seno in 3 differenti livelli!
                  </h3>
                  <img src="../img/prodotti/reggiseno-03.jpg" class="mx-auto" alt="volumizza il tuo seno in 3 differenti livelli">
                </div>
              </div>
            </div>
          </div>

          <div class="bg-pink-700 text-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <p class="text-center">Ancora per pochi giorni LOVELY BRA è in offerta</p>
              <h2 class="text-center text-2xl font-bold pt-2">
                <span class="inline-block pb-3 uppercase">
                  COSA ASPETTI? APPROFITTA DELLA SUPER PROMO 3 LOVELY BRA A 59.90€!</span>
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
                <span class="inline-block pb-3 uppercase">SEMPLICE, FUNZIONALE, adatto a tutti!</span>
              </h2>
              <img src="../img/prodotti/reggiseno3in1-donna.jpg" class="mx-auto max-w-xs " alt="Cinturini">

              <table class="table-auto p-3 w-full mt-10">

                <thead class="text-left p-6">
                  <tr class="bg-black text-white">
                    <th></th>
                    <th class="text-center p-3">LOVELY BRA</th>
                    <th class="text-center p-3">REGGISENO NORMALE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-pink-600 text-white border-b">
                    <td class="p-3 font-bold">Senza ferretti e cuciture</td>
                    <td class="p-3 text-center"><i class="fas fa-check"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times"></i></td>
                  </tr>
                  <tr class="bg-pink-600 text-white border-b">
                    <td class="p-3 font-bold">Spalline larghe</td>
                    <td class="p-3 text-center"><i class="fas fa-check"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times"></i></td>
                  </tr>
                  <tr class="bg-pink-600 text-white border-b">
                    <td class="p-3 font-bold">3 Livelli di push-up</td>
                    <td class="p-3 text-center"><i class="fas fa-check"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times"></i></td>
                  </tr>
                  <tr class="bg-pink-600 text-white border-b">
                    <td class="p-3 font-bold">Funzione contenitiva</td>
                    <td class="p-3 text-center"><i class="fas fa-check"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times"></i></td>
                  </tr>
                  <tr class="bg-pink-600 text-white border-b">
                    <td class="p-3 font-bold">Chiusura laterale</td>
                    <td class="p-3 text-center"><i class="fas fa-check"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times"></i></td>
                  </tr>
                  <tr class="bg-pink-600 text-white border-b">
                    <td class="p-3 font-bold">3 Strati elastici</td>
                    <td class="p-3 text-center"><i class="fas fa-check"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times"></i></td>
                  </tr>
                  <tr class="bg-pink-600 text-white border-b">
                    <td class="p-3 font-bold">Adatto per lo sport</td>
                    <td class="p-3 text-center"><i class="fas fa-check"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times"></i></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>

          <div class="bg-pink-700 text-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <p class="text-center">Ancora per pochi giorni LOVELY BRA è in offerta</p>
              <h2 class="text-center text-2xl font-bold pt-2">
                <span class="inline-block pb-3 uppercase">
                  COSA ASPETTI? APPROFITTA DELLA SUPER PROMO 3 LOVELY BRA A 59.90€!</span>
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
