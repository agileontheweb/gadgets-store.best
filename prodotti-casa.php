<?php include("settings.php") ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Prodotti per la casa - Gadgets Store </title>
    <meta name="description" content="I migliori prodotti per la casa sul mercato in sconto al 50%. Scopri tutte le offerte del giorno. Spedizione gratuita. Pagamento alla consegna. Promozioni valide fino esaurimento scorte. Affrettati!">
    <?php include('shared/meta.php'); ?>
  </head>
  <body class="bg-gray-200">
    <script>
      fbq('track', 'Pagina Casa');
    </script>
    <?php include("shared/navbar.php") ?>

    <div class="pt-32">
      <h1 class="text-center text-2xl font-bold py-12 text-gray-600">
        <span class="inline-block border-b-4 border-gray-600 pb-3">Prodotti per la Casa</span>
      </h1>
      <div class="grid md:grid-cols-3 md:grid-rows-3 gap-4">
        <?php
        $xml = simplexml_load_file('xml/casa.xml');
        $list = $xml->record;
        for ($i = 0; $i < count($list); $i++) {?>
        <div class="p-1">
          <div class="bg-white rounded-lg shadow-xl">
            <div class="p-12">
              <div>
               <img src="<?php echo $projectPath ?><?php echo $projectPathImg ?><?php echo $list[$i]->image ?>" alt="<?php echo $list[$i]->name ?>" width="600" height="600">
              </div>
              <div class="mt-8 text-center">
                <h2 class="font-bold text-lg text-gray-700 mb-1 uppercase"><?php echo $list[$i]->name ?></h2>
                <p class="text-gray-600"><?php echo $list[$i]->description ?></p>
                <?php
                  if(empty($list[$i]->linkaffiliate)){
                    $value = $projectPath ."pages/" .$list[$i]->link;
                    $target = false;
                  }else{
                    $value = $list[$i]->linkaffiliate;
                    $target = true;
                  }
                 ?>
                <a href="<?php echo $value ?>" class="block mt-6 bg-gray-500 hover:bg-gray-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none" <?php if($target == true){?> target="_blank" rel="nofollow" <?php }?>>
                  Vedi
                </a>
              </div>
              <div class="text-center pt-3">
                <?php if($list[$i]->offer){?>
                  <span class="<?php colorBadge($list[$i]->offer) ?>  inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                    <?php echo $list[$i]->offer ?>
                  </span>
                <?php } ?>
                <span class="block text-xs mt-2"><?php echo $list[$i]->prezzo ?></span>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
      <?php include("shared/_ricevi_promozioni.php") ?>
    </div>
    <?php include("shared/footer.php") ?>
  </body>
</html>
