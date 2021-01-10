<?php include("../settings.php") ?>
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

  $title_product = "Senti piú 30x";
  $url_product_api = "dmc_sentipiù30x";
  $selector = false;
  $selector_1 = null;
  $selector_2 = null;
  $selector_3 = null;
  $selector_1_value = null;
  $selector_2_value = null;
  $selector_3_value = null;
  $quantity_upsell = null;
  $privacy = "https://www.dmcshop.it/privacy-policy/";
  $quantity = 1;
  $price = "18.00";
  $img = "../img/prodotti/sentipiu-1.jpg";
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
    <title><?php echo $title_product; ?>  | <?php echo $brand_name; ?>  <?php echo $brand_slogan; ?></title>
    <meta name="description" content="Acquista online le migliori offerte e promozioni del momento, non perdere tra le varie categorie di prodotti: Salute e Benessere, Tecnologia e Formazione, Idee regalo utili e divertenti." >
    <?php include('../shared/meta.php'); ?>
  </head>
  <body>

    <?php if(! in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {?>
      <script>
        fbq('track', '<?php echo $title ?> Page');
      </script>
    <?php } ?>

    <form action="sentipiu30x.php" method="post"></form>

    <?php include("../shared/navbar.php") ?>
    <div class="pt-32">
      <h1 class="text-center text-2xl font-bold pt-12 text-gray-600">
        <span class="inline-block border-b-4 border-gray-600 pb-3">Senti più 30X</span>
      </h1>

      <div class="max-w-screen-md mx-auto">
        <p class="p-3">
          Con <strong>Senti più 30x</strong> torni a sentire i suoni che ami!
          La risata di tuo nipote, una bella canzone di un tempo o un film in
          televisione ci rendono felici e meritano di essere sentiti bene!
        </p>

        <p class="mx-auto text-center my-6">
          <a href="#" class="btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
            Ordina Ora
          </a>
        </p>
        <img src="../img/prodotti/sentipiu-1.jpg" alt="Senti più" class="mx-auto">
      </div>

      <div class="bg-blue-500 text-white py-4">
        <div class="max-w-screen-md mx-auto px-3">
          <h2 class="text-center text-2xl font-bold pt-12">
            <span class="inline-block border-b-4 border-blue-600 pb-3">CARATTERISTICHE</span>
          </h2>
          <p class="p-3">
            <strong>Senti Più 30x</strong> è l’innovativo amplificatore
            di suoni da inserire direttamente nel tuo orecchio per potere
            sentire meglio tutto ciò che ti circonda! Si chiama 30x perché amplifica
            i suoni 30 volte, in più è leggero e super discreto, così non
            dovrai vergognarti di avere un apparecchio acustico perché nessuno
            si accorgerà che lo stai indossando!
          </p>
          <p class="p-3">
          Un’altra comodità di Senti Più è che non ha bisogno di batterie
          perché ricaricabile, e la sua durata è di circa 10 ore. Ti basterà
          caricarlo prima di uscire per essere sempre pronto a cogliere i suoni
          che ti circondano, oppure puoi comprarne 2 ad un prezzo speciale per
          avere sempre un amplificatore carico!
          </p>


          <p class="p-3">
            <ul class="flex">
              <li class="flex-1 text-center p-3 font-bold uppercase">Amplifica i suoni fino a 30 volte</li>
              <li class="flex-1 text-center p-3 font-bold uppercase">Non servono batterie</li>
              <li class="flex-1 text-center p-3 font-bold uppercase">Leggero e discreto</li>
              <li class="flex-1 text-center p-3 font-bold uppercase">Durevole nel tempo</li>
            </ul>
          </p>

          <iframe height="349" class="w-full my-6" src="https://www.youtube.com/embed/Zw7_zWMkwMU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          <div class="py-8 px-8 mx-auto bg-white rounded-xl shadow-md space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
            <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:flex-shrink-0" src="../img/prodotti/sentipiu-1.jpg" alt="Senti più">
            <div class="text-center space-y-2 sm:text-left text-black">
              <div class="space-y-0.5">
                <p class="text-lg font-semibold">
                  Senti Più 30x
                </p>
              </div>
              <p>
                Adatto a <strong>uomini e donne che hanno problemi di
                udito</strong> e che vorrebbero sentire meglio i suoni che li circondano.
                Nella confezione, insieme alla base per la ricarica, troverai <strong>6
                gommini per adattare il prodotto a tutti i tipi di orecchie!</strong>
                Scegli se indossarlo nell’orecchio destro o in quello sinistro,
                SentiPiù 30x è b leggero e ti dimenticherai di averlo addosso!
                Per poterlo avere non servono prescrizioni o visite, e costa molto
                meno di un comune apparecchio acustico!


              </p>
            </div>
          </div>
          <p class="mx-auto text-center my-6">
            <a href="#" class="btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
              Ordina Ora
            </a>
          </p>
        </div>

        <div class="bg-white text-black py-4">
          <div class="max-w-screen-md mx-auto px-3">
            <h2 class="text-center text-2xl font-bold pt-12">
              <span class="inline-block border-b-4 border-gray-600 pb-3 uppercase">Il migliore qualità prezzo!</span>
            </h2>
            <p class="p-3 text-center">
              <strong>Senti più 30x</strong> è l'amplificatore di suoni portatile più amato dagli Italiani,
              creato per per soddisfare entrambi i sessi, non servono prescrizioni o visite mediche,
              questo oggetto lo puoi avere con estrema facilità grazie al pagamento a domicilio
              in un paio di giorni.
            </p>
            <img src="../img/prodotti/sentipiu-2.jpg" class="mx-auto" alt="Senti più">
            <div class="grid grid-cols-3 gap-4 mt-6">
              <div class="flex-1 text-center p-6  bg-blue-500 text-white">
                <h3 class="font-bold uppercase py-3">Amplifica fino a 30 volte</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-blue-500 text-white">
                <h3 class="font-bold uppercase py-3">Leggero e discreto</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-blue-500 text-white">
                <h3 class="font-bold uppercase py-3">Ricaricabile</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-blue-500 text-white">
                <h3 class="font-bold uppercase py-3">Per lui e per lei</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-blue-500 text-white">
                <h3 class="font-bold uppercase py-3">Adatto a tutte le orecchie</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-blue-500 text-white">
                <h3 class="font-bold uppercase py-3">Non serve prescrizione medica</h3>
              </div>
            </div>
            <p class="mx-auto text-center my-6">
              <a href="#" class="btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                Ordina Ora
              </a>
            </p>
          </div>
        </div>

        <div class="bg-white py-4">
          <div class="max-w-screen-md mx-auto px-3">
            <h2 class="text-center text-2xl font-bold pt-12 text-gray-600">
              <span class="inline-block border-b-4 border-gray-600 pb-3 uppercase">Non lasciarti sfuggire quest'occasione</span>
            </h2>
            <p class="p-3 text-center">
              Ancora per pochi giorni è in offerta a soli 69.90€ invece che 99.90€! Compila il modulo sottostante con i tuoi dati e attiva la promozione. La spedizione è gratuita e paghi direttamente alla consegna.
            </p>
          </div>

          <div class="max-w-full md:max-w-6xl mx-auto my-3 md:px-8">
          	<div class="relative block flex flex-col md:flex-row items-center">
          	  <div class="max-w-sm mx-auto">
          	    <div class="bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden">
                  <div class="text-sm leading-none rounded-t-lg bg-red-500 text-white text-black font-semibold uppercase py-4 text-center tracking-wide">
                    Offerta Lancio
                  </div>
          	      <div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
                		<h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">1 Senti PIù 30x</h1>
                	  <h2 class="text-sm text-gray-500 text-center">€ 69.90</h2>
                    <h3 class="text-sm text-gray-500 text-center text-red-600 pb-6 font-bold">Sconto 30%</h3>
                    <img class="mx-auto" src="../img/prodotti/sentipiu-3.jpg" alt="Senti piu">
                  </div>
                  <p class="text-center mt-4">Spedizione Gratuita</p>
                  <div class="block flex items-center p-8 pt-0  uppercase">
                    <a href="#" class="text-center btn-submit-to-forms mt-3 text-lg font-semibold bg-black w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700">
                       Ordina subito
                    </a>
                  </div>
                </div>
              </div>



          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("../shared/footer.php") ?>
  </body>
</html>
