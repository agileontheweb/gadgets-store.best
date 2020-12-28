<div class="bg-blue-100">
  <h2 class="text-center text-2xl font-bold py-12 text-blue-600">
    <span class="inline-block border-b-4 border-blue-600 pb-3">Tecnologia</span>
  </h2>

  <?php
    $xml = simplexml_load_file('xml/tecnologia.xml');
    $list = $xml->record;
  ?>

  <div class="flex overflow-x-auto max-w-screen-lg mx-auto">
    <?php for ($i = 0; $i < count($list); $i++) {
      while($i <= 5){
        $i++;
      ?>
      <?php
        if(empty($list[$i]->linkaffiliate)){
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
          <div>
           <img src="<?php echo $list[$i]->image ?>" alt="<?php echo $list[$i]->name ?>" width="300" height="300">
          </div>
          <?php if($list[$i]->offer){?>
            <div class="text-center pt-3">
              <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                <?php echo $list[$i]->offer ?>
              </span>
            </div>
          <?php } ?>
          <div class="mt-8 text-center">
            <h1 class="font-bold text-lg text-gray-700 mb-1 uppercase"><?php echo $list[$i]->name ?></h1>
            <p class="text-gray-600"><?php echo $list[$i]->description ?></p>
            <a href="<?php echo $value ?>" class="block mt-6 bg-blue-500 hover:bg-blue-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none" <?php if($target == true){?> target="_blank" rel="nofollow" <?php }?>>
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
            <a href="prodotti-tecnologia.php" class="block mt-6 text-black bg-white hover:bg-black border-4 hover:border-4 hover:border-red-400 hover:text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
              Vai
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="text-center py-12">
    <a href="prodotti-tecnologia.php" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-4 px-8 border border-blue-500 hover:border-transparent rounded">
    Vedi tutti
  </a>
  </div>
</div>
