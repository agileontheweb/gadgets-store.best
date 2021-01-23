<?php
  include("../settings.php");
  class LANDING {};
  redirect_has_bought();
  $path_xml = "../xml/casa.xml";
  $id_temp="fornetoo10in1";
  $upsell_page = "ups-affilacoltelli-nippo.php?upsell";
  include("../inc/get_product_data.php");
  include("../inc/is_upsell.php");
 ?>

<!doctype html>
<html lang="it">
  <head>
    <title>La padella / pentola della nuova linea Tognana è antiaderente e antigraffio | <?php echo $brand_slogan; ?></title>
    <meta name="description" content="In offerta Speciale l'innovativa padella della nuova linea Tognana in sconto 20%. Corpo in alluminio pressofuso con uno strato interno realizzato in microsfere di porcellana." >
    <?php include('../shared/meta.php'); ?>
  </head>
  <body class="landing-page">
    <?php if(isset($env)=="prod") {?>
      <script>
        fbq('trackCustom', 'PageView Fornetto 10in1 Page');
      </script>
    <?php } ?>

    <?php include("../shared/navbar.php") ?>

    <div class="text-xl leading-relaxed">
      <form action="padella-tognana-fornetto10in1.php" method="post">

        <?php include('valutazione_media.php'); ?>

        <div class="max-w-screen-md mx-auto px-3">
          <h1 class="text-center text-2xl pt-0 mb-6">
            Finalmente!! Tognana presenta <span class="font-bold">la nuova linea di padelle 10in1</span>,
            nata per offrire un’antiaderenza imbattibile e una cottura che
            <span class="font-bold">preserva il gusto naturale</span> e le proprietà organolettiche dei cibi.
          </h1>

          <?php
            generateImageSize($fullpath, "fornetto-tognana-rettangolare", "fornetto tognana rettangolare", $env);
          ?>


          <p class="py-3">
            Il Made in Italy si riconosce ancora una volta! Tognana marca <strong>riconosciuta a livello Internazionale
            con un indiscutibile primato</strong> presenta la nuova linea Sphera con un fornetto a <strong>
            doppia induzione che funge da fornetto, piastra, griglia, girafrittata e saltiera</strong>.

          </p>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-6">
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                 9 strati che rendono unico questo fornetto
              </h3>
            </div>
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                Antiaderenza imbattibile e ineguagliabile
              </h3>
            </div>
            <div class="flex-1 text-center uppercase font-bold border">
              <h3 class="p-3 text-xl text-center">
                Cottura che Preserva il gusto naturale
              </h3>
            </div>
          </div>
          <h2 class="text-center p-3 font-bold text-2xl text-red-600">
            Acquista a soli <span class="font-bold text-green-600">€69.90</span> invece di <strike>€89.90</strike>
          </h2>

          <div class="text-center">
            <?php howmanybuyer(1429) ?>.
          </div>

          <div class="max-w-screen-sm mx-auto px-3">
            <?php include("../shared/progress-short.php") ?>
          </div>

          <p class="mx-auto text-center my-6">
            <button type="submit" class="btn-animate btn-submit-to-forms font-bold inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
              Ordina Ora
            </button>
            <span class="block py-3">Spedizione gratuita</span>
          </p>
        </div>

        <div class="bg-gray-100 py-4">
          <div class="max-w-screen-md mx-auto px-3">
            <p class="p-1 text-center text-2xl">
              Esprimi tutta la tua creatività in cucina.
              <strong>Adatto per ogni occasione e ogni stagione.</strong>
           </p>

            <h2 class="text-center text-2xl font-bold pt-12">
              <span class="inline-block pb-3">CARATTERISTICHE</span>
            </h2>
            <p class="py-3">
              La padella è <strong>antiaderente e antigraffio</strong>.
              Ha un corpo in alluminio pressofuso con uno strato interno realizzato
              in <strong>microsfere di porcellana</strong>. E' Nikel e PFOA Free.
            </p>
            <p class="py-3">
              Può essere utilizzato su <strong>tutti i piani di cottura</strong> e può essere <strong>lavato
              in lavastoviglie</strong>. Può essere utilizzata per arrostire, grigliare,
              cuocere in umido e al vapore, friggere, rosolare carne pesce verdure e pasta.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 text-white">
              <div class="flex-1 text-center p-6  bg-white text-black">
                <?php generateImageSize($fullpath, "fornetto-tognana-safe-cooking", "Strato in microsfere di porcellana che garantisce un'antiaderenza superiore", $env); ?>
                <h3 class="font-bold uppercase py-3">Strato in microsfere di porcellana che garantisce un'antiaderenza superiore</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <?php generateImageSize($fullpath, "fornetto-tognana-resistente", "Resistente fino a 100.000 cicli di abrasione con utensili metallici", $env); ?>
                <h3 class="font-bold uppercase py-3">Resistente fino a 100.000 cicli di abrasione con utensili metallici.</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <?php generateImageSize($fullpath, "fornetto-tognana-soft-touch", "Manico in bakelite con design elegante, raffinato e brevettato. Finitura marmorea e inserti effetto acciaio satinato", $env); ?>
                <h3 class="font-bold uppercase py-3">Manico in bakelite con design elegante, raffinato e brevettato. Finitura marmorea e inserti effetto acciaio satinato.</h3>
              </div>
              <div class="flex-1 text-center p-6  bg-white text-black">
                <?php generateImageSize($fullpath, "fornetto-tognana-induction", "Performance eccellenti ad alte temperature anche su piano a induzione", $env); ?>
                <h3 class="font-bold uppercase py-3">Performance eccellenti ad alte temperature anche su piano a induzione.</h3>
              </div>
            </div>
          </div>

            <p class="mx-auto text-center my-6">
              <button type="submit" class="btn-animate btn-submit-to-forms font-bold inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                Ordina Ora
              </button>
              <h2 class="text-center p-3 font-bold text-2xl text-red-600">
                Acquista a soli <span class="font-bold text-green-600">€69.90</span> invece di <strike>€89.90</strike>
              </h2>
            </p>
          </div>


          <div class="bg-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <h2 class="text-center text-2xl font-bold pt-12">
                <span class="inline-block pb-3 uppercase">Pratico, comodo adatto per ogni occasione!</span>
              </h2>

              <p class="p-3 text-center">
              Entrambi i fornetti hanno la <strong>doppia induzione</strong> è sono utilizzabili
               per Alimenti, Cottura a gas, Cottura a induzione, Fornello elettrico,
               Lavastoviglie, Piastra radiante, Vetroceramica alogena.
              </p>
              <h4 class="p-3 text-2xl text-center">Scegli tra uno dei Due modelli, rettangolare o rotondo!</h4>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                <div class="flex-1 text-center p-6 border">
                  <h3 class="p-3 text-xl text-center">
                    <strong>Fornetto Rettangolare</strong> 30cmx22cm alto 7.50cm.
                  </h3>
                  <?php generateImageSize($fullpath, "fornetto-tognana-rettangolare", "Fornetto Tognana rettangolare", $env); ?>
                </div>
                <div class="flex-1 text-center p-6 border">
                  <h3 class="p-3 text-xl text-center">
                    <strong>Fornetto rotondo</strong> da 30cmX30cm.
                  </h3>
                  <?php generateImageSize($fullpath, "fornetto-tognana-tondo", "Fornetto Tognana tondo", $env); ?>
                </div>
              </div>
              <!-- <iframe class="w-full my-6" height="349" src="https://www.youtube.com/embed/KCZFo8uEZz0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>
          </div>

          <div class="bg-gray-700 text-white py-4">
            <div class="max-w-screen-md mx-auto px-3">
              <p class="text-center">Ancora per pochi giorni...</p>
              <h2 class="text-center text-2xl font-bold pt-2">
                <span class="inline-block pb-3 uppercase">
                  Acquista a soli €69.90 invece di <strike>€89.90</strike></span>
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
                <span class="inline-block pb-3 uppercase">SEMPLICE, FUNZIONALE + SPAZIO !</span>
              </h2>
              <?php generateImageSize($fullpath, "fornetto-tognana-strati", "Fornetto Strati", $env); ?>
              <h2 class="text-center text-2xl font-bold pt-12">
                9 STRATI CHE RENDONO UNICO IL FORNETTO TOGNANA
              </h2>
              <table class="table-auto p-3 w-full mt-10">
                <thead class="text-left p-6">
                  <tr class="bg-black text-white">
                    <th></th>
                    <th class="text-center p-3 text-xs text-green-400">FORNETTO TOGNANA</th>
                    <th class="text-center p-3 text-xs text-red-400">FORNETTI TRADIZIONALI</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-gray-700 text-white border-b">
                    <td class="p-3 font-bold text-xs">Rivestimento top</td>
                    <td class="p-3 text-center"><i class="fas fa-check text-green-400"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times text-red-400"></i></td>
                  </tr>
                  <tr class="bg-gray-700 text-white border-b">
                    <td class="p-3 font-bold text-xs">Rivestimento superior</td>
                    <td class="p-3 text-center"><i class="fas fa-check text-green-400"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times text-red-400"></i></td>
                  </tr>
                  <tr class="bg-gray-700 text-white border-b">
                    <td class="p-3 font-bold text-xs">Rivestimento extra</td>
                    <td class="p-3 text-center"><i class="fas fa-check text-green-400"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times text-red-400"></i></td>
                  </tr>
                  <tr class="bg-gray-700 text-white border-b">
                    <td class="p-3 font-bold text-xs">Rivestimento microsfere di porcellana</td>
                    <td class="p-3 text-center"><i class="fas fa-check text-green-400"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times text-red-400"></i></td>
                  </tr>
                  <tr class="bg-gray-700 text-white border-b">
                    <td class="p-3 font-bold text-xs">Rivestimento peel rough</td>
                    <td class="p-3 text-center"><i class="fas fa-check text-green-400"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times text-red-400"></i></td>
                  </tr>
                  <tr class="bg-gray-700 text-white border-b">
                    <td class="p-3 font-bold text-xs">Rivestimento primer</td>
                    <td class="p-3 text-center"><i class="fas fa-check text-green-400"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times text-red-400"></i></td>
                  </tr>
                  <tr class="bg-gray-700 text-white border-b">
                    <td class="p-3 font-bold text-xs">Alluminio forgiato (98% purezza)</td>
                    <td class="p-3 text-center"><i class="fas fa-check text-green-400"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times text-red-400"></i></td>
                  </tr>
                  <tr class="bg-gray-700 text-white border-b">
                    <td class="p-3 font-bold text-xs">Rivestimento esterno x-fusion resistente alle alte temperature</td>
                    <td class="p-3 text-center"><i class="fas fa-check text-green-400"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times text-red-400"></i></td>
                  </tr>
                  <tr class="bg-gray-700 text-white border-b">
                    <td class="p-3 font-bold text-xs">Fondo thermoradiante per induzione in acciaio inox</td>
                    <td class="p-3 text-center"><i class="fas fa-check text-green-400"></i></td>
                    <td class="p-3 text-center"><i class="fas fa-times text-red-400"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="max-w-screen-sm mx-auto px-3">
              <?#php include("../shared/progress-short.php") ?>
            </div>

            <div class="max-w-screen-md mx-auto px-3 mt-4 text-center">
              <?php howmanybuyer(973)?>.
              <?php include('valutazione_media.php'); ?>
            </div>
          </div>
          <?php include("icon-shipping.php") ?>
          <div class="bg-gray-700 text-white py-4">
            <div class="max-w-screen-md mx-auto px-3">

              <p class="text-center">Ancora per pochi giorni il Fornetto 10in1 è in offerta</p>
              <h2 class="text-center text-2xl font-bold pt-2">
                <span class="inline-block pb-3 uppercase">
                  Acquista a soli €69.90 invece di <strike>€89.90</strike>
                </span>
              </h2>
              <?php generateImageSize($fullpath, "fornetto-tognana-entrambi", "Tognana 2 padelle", $env); ?>
              <p class="mx-auto text-center">
                <button type="submit" class="btn-animate font-bold btn-submit-to-forms inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                  Clicca qui per compilare il modulo d'acquisto
                </button>
                <span class="block py-3">🚚 Spedizione gratuita</span>
              </p>
            </div>
          </div>
          <div class="max-w-screen-md mx-auto px-3 mt-10">
            <?php include("faq.php") ?>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php include("../shared/footer.php") ?>
  <?php include("../shared/px-hotjar.php") ?>
  </body>
</html>
