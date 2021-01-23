<div class="bg-gray-700">
  <h2 class="text-center text-2xl font-bold py-12 text-white">
    <span class="inline-block border-b-4 border-white pb-3">Amazon</span>
  </h2>
  <?php
    $xml = simplexml_load_file('xml/amazon.xml');
    $list = $xml->record;
  ?>
  <div class="max-w-screen-lg mx-auto">
    <div class="grid md:grid-cols-2 md:grid-rows-2 gap-4">
      <?php for ($i = 0; $i < count($list); $i++) { ?>
      <div class="p-2">
        <div class="bg-white rounded-lg shadow-xl">
          <div class="p-12">
            <div>
              <?php generateImageSize($fullpath, $list[$i]->image, $list[$i]->name, $env); ?>
            </div>
            <div class="mt-8 text-center">
              <h3 class="font-bold text-lg text-gray-700 mb-1 uppercase"><?php echo $list[$i]->name ?></h3>
              <p class="text-gray-600"><?php echo $list[$i]->description ?></p>
              <a href="<?php echo $list[$i]->link ?>" class="block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none" target="_blank" rel="nofollow">
                Vedi
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
