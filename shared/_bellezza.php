<div class="bg-pink-100">
  <h2 class="text-center text-2xl font-bold py-12 text-pink-600">
    <span class="inline-block border-b-4 border-pink-600 pb-3">Bellezza</span>
  </h2>
  <?php
    $xml = simplexml_load_file('xml/bellezza.xml');
    $list = $xml->record;
  ?>
  <div class="flex overflow-x-auto max-w-screen-lg mx-auto">
    <?php for ($i = 0; $i < count($list); $i++) {
      while($i <= 5){
        $i++;
      ?>
      <?php
        if(!empty($list[$i]->linkaffiliate) && !empty($list[$i]->link)){
          $value = $projectPath ."pages/" .$list[$i]->link;
          $target = false;
        }else{
          $value = $list[$i]->linkaffiliate;
          $target = true;
        }
       ?>
    <div class="p-2">
      <div class="bg-white rounded-lg shadow-xl">
        <div class="p-12">
          <a href="<?php echo $value ?>" <?php if($target == true){?> target="_blank" rel="nofollow" <?php }?>>
            <div>
              <?php generateImageSize($fullpath, $list[$i]->image,"jpg", $list[$i]->name, $env); ?>
            </div>
            <div class="text-center pt-3">
              <?php if($list[$i]->offer){?>
                <span class="<?php colorBadge($list[$i]->offer) ?> inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none rounded-full">
                  <?php echo $list[$i]->offer ?>
                </span>
              <?php } ?>
              <span class="block text-xs mt-2"><?php echo $list[$i]->prezzo ?></span>
            </div>
            <div class="mt-8 text-center">
              <h2 class="font-bold text-lg text-gray-700 mb-1 uppercase"><?php echo $list[$i]->name ?></h2>
              <p class="text-gray-600"><?php echo $list[$i]->description ?></p>
              <p  class="block mt-6 bg-pink-500 hover:bg-pink-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                Vedi
              </p>
            </div>
          </a>
        </div>
      </div>
    </div>
    <?php } } ?>
    <div class="p-2">
      <div class="bg-black text-white rounded-lg shadow-xl">
        <div class="p-12">
          <a href="prodotti-bellezza.php">
            <div>
             <img src="<?php echo $projectPath ?>/img/logo.png" alt="">
            </div>
            <div class="mt-8 text-center">
              <h2 class="font-bold text-lg mb-1 uppercase">Scopri altri prodotti in offerta</h2>
              <p class="block mt-6 text-black bg-white hover:bg-black border-4 hover:border-4 hover:border-red-400 hover:text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
                Vai
              </p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center py-12">
    <a href="prodotti-bellezza.php" class="inline-block border-2  p-3 rounded text-pink-500 border-pink-500 hover:bg-pink-500 hover:text-white">
      Vedi tutti
    </a>
  </div>
</div>
