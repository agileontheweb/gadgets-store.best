<div class="relative p-3 my-3 progress-short mx-auto text-center">
  <p class="font-semibold text-center inline-block">
    Disponibilità giornaliera: 100 pezzi
  </p>
  <div class="mt-1 h-2 bg-gray-200">
    <div id="progress-bar-animate" class="progress-bar-animate mt-2 bg-red-600 py-1 text-center h-2" style="width:100%" data-remaing-pieces="<?php remainingPieces(); ?>"></div>
  </div>
  <div class="mx-auto text-center text-red-600">
    Rimasti
    <div class="progress-short-number border rounded-md bg-red-600 mt-2 text-red-100 text-sm p-2 inline-block px-2">
      <?php echo remainingPieces(); ?>
    </div>
    pezzi
  </div>
</div>
