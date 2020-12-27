<div class="bg-gray-200">
  <h2 class="text-center text-2xl font-bold py-12 text-gray-600">
    <span class="inline-block border-b-4 border-gray-600 pb-3">Per la casa</span>
  </h2>
  <?php
    $xml = simplexml_load_file('xml/casa.xml');
    $list = $xml->record;
  ?>

  <div class="flex overflow-x-auto max-w-screen-lg mx-auto">
    <?php for ($i = 0; $i < count($list); $i++) {
      while($i <= 5){
        $i++;
      ?>
    <div class="p-2">
      <div class="bg-white rounded-lg shadow-xl">
        <div class="p-12">
          <div>
           <img src="<?php echo $list[$i]->image ?>" alt="<?php echo $list[$i]->name ?>">
          </div>
          <div class="mt-8 text-center">
            <h1 class="font-bold text-lg text-gray-700 mb-1 uppercase"><?php echo $list[$i]->name ?></h1>
            <p class="text-gray-600"><?php echo $list[$i]->description ?></p>
            <a href="prodotti-per-la-casa.php" class="block mt-6 bg-gray-500 hover:bg-gray-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none" target="_blank" rel="nofollow">
              Vedi
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php } } ?>
    <div class="p-2">
      <div class="bg-black text-white rounded-lg shadow-xl">
        <div class="p-12">
          <div>
           <img src="<?php echo $projectPath ?>/img/logo.png" alt="">
          </div>
          <div class="mt-8 text-center">
            <h1 class="font-bold text-lg mb-1 uppercase">Scopri altri prodotti in offerta</h1>
            <a href="prodotti-per-la-casa.php" class="block mt-6 text-black bg-white hover:bg-black border-4 hover:border-4 hover:border-red-400 hover:text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
              Vai
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center py-12">
    <a href="prodotti-per-la-casa.php" class="bg-transparent hover:bg-gray-500 text-gray-700 font-semibold hover:text-white py-4 px-8 border border-gray-500 hover:border-transparent rounded">
    Vedi tutti
  </a>
  </div>
</div>
