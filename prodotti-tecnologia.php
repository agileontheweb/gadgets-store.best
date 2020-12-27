<!doctype html>
<html lang="en">
  <head>
    <title>Prodotti tecnologici - Gadgets Store </title>
    <meta name="description" content="" >
    <?php include('shared/meta.php'); ?>
  </head>
  <body class="bg-blue-100">
    <?php include("shared/navbar.php") ?>

    <div class="pt-32">
      <h1 class="text-center text-2xl font-bold py-12 text-blue-600">
        <span class="inline-block border-b-4 border-blue-600 pb-3">Prodotti tecnologici</span>
      </h1>
      <div class="grid md:grid-cols-3 md:grid-rows-3 gap-4">
        <?php
        $xml = simplexml_load_file('xml/tecnologia.xml');
        $list = $xml->record;
        for ($i = 0; $i < count($list); $i++) {?>

        <div class="p-1">
          <div class="bg-white rounded-lg shadow-xl">
            <div class="p-12">
              <div>
               <img src="<?php echo $list[$i]->image ?>" alt="<?php echo $list[$i]->name ?>" width="600" height="600">
              </div>
              <div class="mt-8 text-center">
                <h1 class="font-bold text-lg text-gray-700 mb-1 uppercase"><?php echo $list[$i]->name ?></h1>
                <p class="text-gray-600"><?php echo $list[$i]->description ?></p>
                <a href="<?php echo $list[$i]->link ?>" class="block mt-6 bg-blue-500 hover:bg-blue-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none" target="_blank" rel="nofollow">
                  Vedi
                </a>
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
