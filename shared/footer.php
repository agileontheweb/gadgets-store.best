<footer class="bg-white mt-2">
  <div class="p-3">
    <div class="md:flex">
      <div class="mx-auto p-3 bg-blue-500 text-white hover:bg-blue-600 text-center <?php showFacebook() ?>">
        <a class="px-3" href="<?php echo $fb_page; ?>" target="blank">
          <small>
            <i class="fa fa-facebook"></i>
            Seguici su Facebook</small>
        </a>
      </div>
      <div class="mx-auto p-3">
        <a class="underline px-3 hover:text-red-500" href="<?php echo $projectPath ?>/cosa-e-gadgets-store.php"><small>Cos'è <?php echo $brand_name; ?></small></a>
        <a class="underline px-3 hover:text-red-500" href="<?php echo $projectPath ?>/cookie-policy.php"><small>Cookie Policy</small></a>
        <a class="underline px-3 hover:text-red-500" href="<?php echo $projectPath ?>/disclaimer.php"><small>Disclaimer</small></a>
        <a class="underline px-3 hover:text-red-500" href="<?php echo $projectPath ?>/contatti.php"><small>Contatti</small></a>
        <a class="underline px-3 hover:text-red-500" href="<?php echo $projectPath ?>/assistenza.php"><small>Assistenza</small></a>
      </div>
    </div>
    <hr>
    <p class="p-3 text-gray-500 text-center text-xs">
      Le informazioni contenute in questo sito web sono solamente a scopo
      informativo e non intendono sostituire il consulto da parte di un esperto.
      Le informazioni ed eventuali recensioni si basano su materiale di natura
      generica acquisite tramite il sito ufficiale del produttore e/o fornitore.
      Tutte informazioni reperibili di dominio pubblico e facilmente accessibili.
      Non è quindi possibile ritenere questo sito responsabile riguardo l’accuratezza,
      completezza o veridicità del materiale pubblicato né per eventuali danni
      fisici o morali derivanti dall’uso improprio dei contenuti pubblicati.
      <?php echo $brand_url; ?> non è produttore e/o fornitore dei prodotti che recensisce.
      Per le informazioni e le condizioni sulla privacy consultare i Termini e
      Condizioni del sito fornitore.
    </p>
  </div>
</footer>

<?php if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {?>
  <script src="<?php echo $projectPath ?>bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo $projectPath ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo $projectPath ?>js/jquery.ihavecookies.js"></script>
  <script src="<?php echo $projectPath ?>js/GDPR-cookie.js"></script>
  <script src="<?php echo $projectPath ?>bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>
  <script src="<?php echo $projectPath ?>js/countdown.js"></script>
  <script src="<?php echo $projectPath ?>js/main.js"></script>
<?php }else{ ?>
  <script src="<?php echo $projectPath ?>dist/built.js"></script>
<?php }?>
