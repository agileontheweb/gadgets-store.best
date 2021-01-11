<?php
  include("../settings.php");
  class LANDING {};
  add_cookie_has_bought();
  redirect_has_bought();

  $title_product = "Drone X Tactical";
  isUpsell();
  if ($upsell == true) {
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $city = $_GET['city'];
    $zipcode = $_GET['zipcode'];
  }

  $url_product_api = "bgood_xdrone";
  $selector = true;
  $selector_1 = "1 Tactical Drone €99.00";
  $selector_2 = "2 Tactical Drone €159.00";
  $selector_3 = "1 Kit completo €169.00";
  $selector_1_value = "1";
  $selector_2_value = "2";
  $selector_3_value = "1k";
  $quantity_upsell = "1k";
  $privacy = "https://www.ilmontestore.sm/privacy-policy/";
  $quantity = null;
  $price = "20.00";
  $img = "../img/prodotti/drone-3.png";
  $extra = null;
  $upsell_page = "smartwatch-xwatch6.php?upsell";

  if ($upsell == true) {
    sendFormsUpsell($title_product,$name,$surname,$phone,$address,$city,$zipcode,$url_product_api,$quantity_upsell,$price);
  }else{
    passDataForms($title_product,$url_product_api,$selector,$selector_1,$selector_2,$selector_3,$selector_1_value,$selector_2_value,$selector_3_value,$privacy,$quantity,$price,$img,$extra,$upsell_page);
  }

?>

<!doctype html>
<html lang="it">
  <head>
    <title><?php echo $title_product; ?> | <?php echo $brand_name; ?>  <?php echo $brand_slogan; ?></title>
    <meta name="description" content="Acquista online le migliori offerte e promozioni del momento, non perdere tra le varie categorie di prodotti: Salute e Benessere, Tecnologia e Formazione, Idee regalo utili e divertenti." >
    <?php include('../shared/meta.php'); ?>
  </head>
  <body class="landing-page">

    <?php if(! in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {?>
      <script>
        fbq('trackCustom', 'PageView Drone X Tactical Page');
      </script>
    <?php } ?>

    <?php include("../shared/navbar.php") ?>
    <div>
      <?php
        $text_price = "Incredibile! Risparmia 99.00€ acquista a soli 169€!";
        include("upsell_message.php");
      ?>

      <form action="drone-x-tactical.php" method="post" accept-charset="utf-8" role="form">
        <div class="hidden">
          <div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
          <input type="hidden" name="fingerprint" id="fingerprint" value="">
          <input type="hidden" name="source_id" id="source_id" value="07ff46bb6597">
          <input type="text" name="title" value="<?php echo $title_product; ?>"/>
          <input type="text" name="name" value="<?php echo $name; ?>"/>
          <input type="text" name="surname" value="<?php echo $surname; ?>"/>
          <input type="text" name="phone" value="<?php echo $phone; ?>"/>
          <input type="text" name="address" value="<?php echo $address ?>"/>
          <input type="text" name="city" value="<?php echo $city; ?>"/>
          <input type="number" name="zipcode" value="<?php echo $zipcode; ?>"/>
        </div>

        <div class="max-w-screen-md mx-auto">
           <h1 class="text-center text-2xl font-bold pt-12 text-gray-600">
             <span class="inline-block border-b-4 border-gray-600 pb-3">IL NUOVO DRONE MILITARE</span>
           </h1>
          <p class="p-3">
            <strong>XTactical Drone</strong> è un drone progettato con precisione,
            specificamente pensato per volare facilmente, rendendo perfetto il
            volo in ambienti chiusi o all'aperto registrando fedelmente mentre si
            è in movimento. La sua <strong>struttura pieghevole e il suo design leggero</strong>
            lo rendono un oggetto essenziale per ogni avventura!
          </p>

          <img src="../img/prodotti/drone-1.png" alt="Drone">
          <h2 class="text-center p-3 font-bold text-2xl text-red-600"> Risparmia 99.00€ acquista a soli 169€!</h2>

          <div class="max-w-screen-sm mx-auto px-3 <?php echo showHideUpsell(true); ?>">
            <?php include("../shared/progress-short.php") ?>
          </div>
          <p class="mx-auto text-center my-6">
            <button type="submit" class="btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
              <?php if ($upsell == true) { ?>
                Aggiungi all'ordine
          		<?php }else { ?>
                Ordina Ora
              <?php }?>
            </button>
          </p>
        </div>

        <div class="bg-black text-white py-4">
          <div class="max-w-screen-md mx-auto px-3">
            <h2 class="text-center text-2xl font-bold pt-12">
              <span class="inline-block border-b-4 border-gray-600 pb-3">CARATTERISTICHE</span>
            </h2>
            <p class="p-3">
            Prodigio di ingegneria e di design, XTactical Drone è stato costruito per andare ovunque ti porti l'avventura. Ereditando le migliori qualità della serie XTactical, questo drone <strong>ultra-portatile</strong>
            e pieghevole mostra prestazioni di volo e <strong>funzionalità di alto livello</strong>, per un'esplorazione senza limiti.
            </p>

            <p class="p-3">
              <ul class="flex">
                <li class="flex-1 text-center p-3 font-bold uppercase text-sm">Pieghevole</li>
                <li class="flex-1 text-center p-3 font-bold uppercase text-sm">Leggero</li>
                <li class="flex-1 text-center p-3 font-bold uppercase text-sm">Durevole</li>
              </ul>
            </p>
            <iframe height="349" class="w-full my-6" src="https://www.youtube.com/embed/r_f9QHMw0VY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <div class="py-8 px-8 mx-auto bg-white rounded-xl shadow-md space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
              <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:flex-shrink-0" src="../img/prodotti/drone-mike-freizer.png" alt="Mike Freizer">
              <div class="text-center space-y-2 sm:text-left text-black">
                <div class="space-y-0.5">
                  <p class="text-lg font-semibold">
                    MIKE FREIZER
                  </p>
                  <p class="font-medium">
                    Fondatore di UltimateDroneMag
                  </p>
                </div>
                <p>
                  "Questo drone è uno dei migliori del suo genere presenti sul mercato: non esistono prodotti che reggano il suo confronto in termini di rapporto qualità/prezzo. L'ampia gamma di modalità di volo e la precisione dei comandi lo pongono allo stesso alto livello di alcuni dei modelli più costosi, restando comunque assolutamente conveniente. Sbaraglia tutta la concorrenza."
                </p>
              </div>
            </div>
            <p class="mx-auto text-center my-6">
              <button type="submit" class="btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                <?php if ($upsell == true) { ?>
                  Aggiungi all'ordine
                <?php }else { ?>
                  Ordina Ora
                <?php }?>
              </button>
            </p>
          </div>

          <div class="bg-white text-black py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-12">
                <span class="inline-block border-b-4 border-gray-600 pb-3 uppercase">Tra i più veloci per dimensioni!</span>
              </h2>
              <p class="p-3 text-center">
                <strong>XTactical Drone</strong> è il drone tra i più veloci
                tra quelli della sua taglia, con una distanza massima di trasmissione fino a 100 metri.
              </p>
              <img src="../img/prodotti/drone-2.png" class="mx-auto" alt="Drone">
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
                <div class="flex-1 text-center p-6  bg-gray-100">
                  <h3 class="font-bold uppercase py-3">Drone pieghevole</h3>
                  <p>Le eliche si piegano verso l'interno, per fare in modo che il drone possa essere trasportato più facilmente ed essere protetto meglio durante il trasporto</p>
                </div>
                <div class="flex-1 text-center p-6  bg-gray-100">
                  <h3 class="font-bold uppercase py-3">Sensore di gravità</h3>
                  <p>I sensori rilevano il suolo e altri ostacoli e modificano la traiettoria di volo automaticamente, in modo da evitare collisioni</p>
                </div>
                <div class="flex-1 text-center p-6  bg-gray-100">
                  <h3 class="font-bold uppercase py-3">Foto e video in HD</h3>
                  <p>Registra video in HD e scatta foto fino alla risoluzione di 720P</p>
                </div>
                <div class="flex-1 text-center p-6  bg-gray-100">
                  <h3 class="font-bold uppercase py-3">Replay Mode</h3>
                  <p>Riproduci i momenti salienti delle tue avventure epiche in movimento ad alta definizione</p>
                </div>
                <div class="flex-1 text-center p-6  bg-gray-100">
                  <h3 class="font-bold uppercase py-3">Modalità panoramica</h3>
                  <p>Scatta foto a 360 gradi dall'alto, schiacciando semplicemente un pulsante</p>
                </div>
                <div class="flex-1 text-center p-6  bg-gray-100">
                  <h3 class="font-bold uppercase py-3">Durata di volo aumentata</h3>
                  <p>Vola e filma fino a 10 minuti senza dover toccare terra o cambiare le batterie</p>
                </div>
              </div>
              <p class="mx-auto text-center my-6">
                <button type="submit" class="btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                  <?php if ($upsell == true) { ?>
                    Aggiungi all'ordine
                  <?php }else { ?>
                    Ordina Ora
                  <?php }?>
                </button>
              </p>
            </div>
          </div>

          <div class="bg-black text-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-12">
                <span class="inline-block border-b-4 border-gray-600 pb-3 uppercase">Facile da comandare</span>
              </h2>
              <p class="p-3 text-center">
                <strong>XTactical Drone</strong> vanta tutte le funzionalità necessarie a soddisfare i professionisti, ma è estremamente semplice da far volare e da comandare, persino per i principianti assoluti.
              </p>
              <img src="../img/prodotti/drone-3.png" class="mx-auto" alt="Drone">

              <p class="mx-auto text-center my-6">
                <button type="submit" class="btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                  <?php if ($upsell == true) { ?>
                    Aggiungi all'ordine
                  <?php }else { ?>
                    Ordina Ora
                  <?php }?>
                </button>
              </p>

              <p class="p-3 text-center">
                <strong>XTactical Drone</strong> è dotato di scatti fotografici integrati e preimpostati, come lo scatto a boomerang e quello ad asteroide; quindi, premendo solo un pulsante, persino il soggetto tecnicamente più a digiuno può avere un'impronta di qualità professionale
              </p>
              <img src="../img/prodotti/drone-4.png" class="mx-auto" alt="Drone">

              <p class="mx-auto text-center my-6">
                <button type="submit" class="btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                  <?php if ($upsell == true) { ?>
                    Aggiungi all'ordine
                  <?php }else { ?>
                    Ordina Ora
                  <?php }?>
                </button>
              </p>
            </div>
          </div>

          <div class="bg-gray-100 py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-12 text-black">
                <span class="inline-block border-b-4 border-gray-600 pb-3 uppercase">Creato da veri esperti</span>
              </h2>

              <div class="py-8 px-8 mx-auto bg-white rounded-xl shadow-md space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 mt-6">
                <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:flex-shrink-0" src="../img/prodotti/drone-logo-1.png" alt="logo">
                <div class="text-center space-y-2 sm:text-left text-black">
                  <p>
                    "La qualità di questo drone è sconvolgente, paragonata al prezzo che pagherai. Questo segna un punto di svolta nella vendita dei droni. Dal XTactical Drone si evince chiaramente che, adesso, è possibile acquistare un drone di alta gamma ad una frazione del costo di alcuni dei modelli di punta presenti sul mercato. Adesso, questa tecnologia è accessibile a tutti e non potremmo esserne più entusiasti!"
                  </p>
                </div>
              </div>

              <div class="py-8 px-8 mx-auto bg-white rounded-xl shadow-md space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 mt-6">
                <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:flex-shrink-0" src="../img/prodotti/drone-logo-2.png" alt="logo">
                <div class="text-center space-y-2 sm:text-left text-black">
                  <p>
                    "Siamo sempre alla ricerca del modo migliore di documentare le nostre fantastiche avventure, in modo da poterle condividere con i nostri clienti e seguaci. Abbiamo sperimentato i droni in passato, ma finora li avevamo sempre trovati eccessivamente complicati, sottopotenziati e troppo fragili da mettere in valigia. Il XTactical Drone ha completamente cambiato il modo in cui registriamo i nostri viaggi e, adesso, giriamo video di qualità professionale nella metà del tempo!".
                  </p>
                </div>
              </div>

              <div class="py-8 px-8 mx-auto bg-white rounded-xl shadow-md space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 mt-6">
                <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:flex-shrink-0" src="../img/prodotti/drone-logo-3.png" alt="logo">
                <div class="text-center space-y-2 sm:text-left text-black">
                  <p>
                    "Non farti ingannare dalle dimensioni compatte del drone: la potenza che custodisce può essere paragonata a quella della maggior parte dei dispositivi dalle dimensioni di due o tre volte maggiori di XTactical Drone. La sua ingegneria di precisione lo rende sia leggero che sorprendentemente robusto. La confezione è corredata di eliche di ricambio per ogni eventualità, ma non siamo del tutto sicuri che avrai mai bisogno di usarle!"
                  </p>
                </div>
              </div>

              <p class="mx-auto text-center my-6">
                <button type="submit" class="btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                  <?php if ($upsell == true) { ?>
                    Aggiungi all'ordine
                  <?php }else { ?>
                    Ordina Ora
                  <?php }?>
                </button>
              </p>
            </div>
          </div>

          <div class="bg-black py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-12 text-white">
                <span class="inline-block border-b-4 border-gray-600 pb-3 uppercase">Il Drone meglio valutato dai clienti su Internet</span>
              </h2>

              <img class="block mx-auto h-16 my-6" src="../img/prodotti/drone-rated-logo.png" alt="Logo">
              <div class="text-center">
                <img class="inline-block" src="../img/prodotti/star.png" alt="stella">
                <img class="inline-block" src="../img/prodotti/star.png" alt="stella">
                <img class="inline-block" src="../img/prodotti/star.png" alt="stella">
                <img class="inline-block" src="../img/prodotti/star.png" alt="stella">
                <img class="inline-block" src="../img/prodotti/star.png" alt="stella">
                5/5
              </div>

              <p class="mx-auto text-center my-6">
                <button type="submit" class="btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                  <?php if ($upsell == true) { ?>
                    Aggiungi all'ordine
                  <?php }else { ?>
                    Ordina Ora
                  <?php }?>
                </button>
              </p>
            </div>

            <div class="max-w-full md:max-w-6xl mx-auto my-3 md:px-8">
            	<div class="relative block flex flex-col md:flex-row items-center">
                <?php if (!$upsell == true) { ?>
                  <div class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-mr-4">
              	    <div class="bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden">
              	      <div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
                    		<h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">1 XTACTICAL DRONE</h1>
                    	  <h2 class="text-sm text-gray-500 text-center">€ 99.00</h2>
                        <h3 class="text-sm text-gray-500 text-center text-red-600 pb-6 font-bold">Sconto 50%</h3>
                        <img class="mx-auto" src="../img/prodotti/drone-5.png" alt="Drone">
                      </div>
                      <p class="text-center mt-4">Spedizione Gratuita</p>
                      <div class="block flex items-center p-8 pt-0  uppercase">

                        <button type="submit" class="text-center btn-submit-to-forms mt-3 text-lg font-semibold bg-black w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700">
                          <?php if ($upsell == true) { ?>
                            Aggiungi all'ordine
                         <?php }else { ?>
                            Ordina Subito
                          <?php }?>
                        </button>
                      </div>
                    </div>
                  </div>
                <?php }?>

                <div class="w-full sm:w-full max-w-md mx-auto sm:w-2/3 lg:w-1/3 sm:my-5 my-8 relative z-10 bg-white rounded-lg shadow-lg">
                  <div class="text-sm leading-none rounded-t-lg bg-red-500 text-white text-black font-semibold uppercase py-4 text-center tracking-wide">
                    Il più venduto
                  </div>
                  <div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
                    <h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                      1 XTACTICAL DRONE
                    </h1>
                    <h2 class="text-sm text-gray-500 text-center"><span class="text-3xl">€ 169.00</span></h2>
                    <h3 class="text-sm text-gray-500 text-center pb-6 text-red-600 pb-6 font-bold">Risparmi €99.00</h3>
                    <div class="flex justify-start sm:justify-start mt-3">
                      <ul>
                        <li class="flex items-center">
                          <div class="rounded-full p-2 fill-current text-green-700">
                          <svg
                            class="w-6 h-6 align-middle"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            >
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                          </svg>
                        </div>
                        <span class="text-gray-700 text-lg ml-3">+ 4 ELICHE DI RICAMBIO</span>
                      </li>
                        <li class="flex items-center">
                          <div class=" rounded-full p-2 fill-current text-green-700">
                            <svg
                            class="w-6 h-6 align-middle"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            >
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                          </div>
                          <span class="text-gray-700 text-lg ml-3">+ 2 BATTERIE</span>
                        </li>
                        <li class="flex items-center">
                          <div class=" rounded-full p-2 fill-current text-green-700">
                            <svg
                            class="w-6 h-6 align-middle"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            >
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                          </div>
                          <span class="text-gray-700 text-lg ml-3">+ CASE DA TRASPORTO</span>
                        </li>
                        <li class="flex items-center">
                          <div class=" rounded-full p-2 fill-current text-green-700">
                            <svg
                            class="w-6 h-6 align-middle"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            >
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                          </div>
                          <span class="text-gray-700 text-lg ml-3">+ CAVO RICARICA MULTIPLO</span>
                        </li>
                      </ul>
                    </div>
                    <img class="mx-auto" src="../img/prodotti/drone-kit.png" alt="Drone Kit">
                  </div>
                  <div class="block flex items-center p-8  uppercase">
                    <button type="submit" class="btn-submit-to-forms text-center mt-3 text-lg font-semibold bg-black w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700">
                      <?php if ($upsell == true) { ?>
                        Aggiungi all'ordine
                     <?php }else { ?>
                        Ordina Subito
                      <?php }?>
                    </button>
                  </div>
                </div>

                <?php if (!$upsell == true) { ?>
                  <div class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-ml-4">
                    <div class="bg-white  block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
                      <h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                        2 XTACTICAL DRONE
                      </h1>
                      <h2 class="text-sm text-gray-500 text-center">€ 159.00</h2>
                      <h3 class="text-sm text-gray-500 text-center pb-6 text-red-600 pb-6 font-bold">Risparmi €39.00</h3>
                      <img class="mx-auto" src="../img/prodotti/drone-5.png" alt="Drone">
                      <div class="block flex items-center p-8  uppercase">
                        <button type="submit" class="text-center btn-submit-to-forms mt-3 text-lg font-semibold bg-black w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700">
                          Ordina Subito
                        </button>
                      </div>
                    </div>
                  </div>
                <?php } ?>
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
