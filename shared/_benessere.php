<div class="bg-green-100">
  <h2 class="text-center text-2xl font-bold py-12 text-green-600">
    <span class="inline-block border-b-4 border-green-600 pb-3">Benessere</span>
  </h2>

  <?php
    $xml = simplexml_load_file('xml/benessere.xml');
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
            <a href="<?php echo $value ?>" class="" <?php if($target == true){?> target="_blank" rel="nofollow" <?php }?>>
              <div>
               <img src="<?php echo $projectPath ?><?php echo $projectPathImg ?><?php echo $list[$i]->image ?>" alt="<?php echo $list[$i]->name ?>" width="300" height="300">
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
                <p class="block mt-6 bg-green-500 hover:bg-green-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
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
          <a href="prodotti-benessere.php">
          <div>
           <img src="<?php echo $projectPath ?>/img/logo.png" alt="">
          </div>
          <div class="mt-8 text-center">
            <h2 class="font-bold text-lg mb-1 uppercase">Scopri altri prodotti in offerta</h2>
            <p class="block mt-6 text-black bg-white hover:bg-black border-4 hover:border-4 hover:border-red-400 hover:text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
              Vai
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center py-12">
    <a href="prodotti-benessere.php" class="inline-block border-2  p-3 rounded text-green-500 border-green-500 hover:bg-green-500 hover:text-white">
      Vedi tutti
    </a>
  </div>
</div>
