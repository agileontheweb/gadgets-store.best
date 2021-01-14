<div id="reviews" class="py-3">
  <h2 class="text-center font-extrabold text-3xl leading-tight py-4">
    Recensioni <span class="text-orange-700 underline">clienti</span>
  </h2>
  <?php
    $url_remove_space = preg_replace('/\s+/', '', $title_product);
  	$category_title_product = strtolower($url_remove_space);
  ?>
  <div class="flex flex-no-wrap overflow-x-auto">
    <?php
    foreach($xml->children() as $record) {
      foreach($record->children() as $recensione) {

        if($recensione->attributes()->category == $category_title_product){ ?>
        <div class="w-3/5 md:w-2/5 flex-none mx-1 py-4 overflow-hidden shadow-lg mt-6 bg-white">
          <img src="<?php echo $projectPath?><?php echo $projectPathImg?><?php echo $recensione->img?>" class="w-20 h-20 rounded-full mx-auto" alt="">
          <div class="px-6 py-4 text-center">
            <div class="font-bold text-xl mb-2"><?php echo $recensione->name; ?></div>
            <div class="flex">
              <div class="mx-auto">
                <i class="fas fa-star fa-1x text-yellow-500"></i>
                <i class="fas fa-star fa-1x text-yellow-500"></i>
                <i class="fas fa-star fa-1x text-yellow-500"></i>
                <i class="fas fa-star fa-1x text-yellow-500"></i>
                <i class="fas fa-star fa-1x text-yellow-500"></i>
              </div>
            </div>
            <p class="leading-normal text-sm">
              <?php echo $recensione->description ?>
            </p>
          </div>
        </div>
          <?php
        }
      }
    }
    ?>
  </div>
</div>
