<div class="relative pt-1  text-white p-3 my-3 text-red-600 progress-short">
  <div class="mt-1 h-2 bg-gray-200">
    <div id="progress-bar-animate" class="progress-bar-animate mt-2 bg-red-600 py-1 text-center h-2" style="width:100%" data-remaing-pieces="<?php remainingPieces(); ?>"></div>
  </div>

  <div class="mx-auto text-center">
    <p class="font-semibold text-white text-center text-red-600 inline-block">
      Disponibilità giornaliera
    </p>
    <div class="progress-short-number border rounded-md bg-red-600 mt-2 text-red-100 text-sm p-2 inline-block px-2">
      <?php echo remainingPieces(); ?>
    </div>
    pezzi
  </div>
</div>
