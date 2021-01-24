<h2 class="text-center text-2xl font-bold">
  <span class="inline-block pb-3">Domande Frequenti</span>
</h2>

<?php
$getAffiliateLink = "";
foreach($xml->children() as $record) {
  if($record->attributes()->id == $id_temp ){
    $getAffiliateLink = $record->linkaffiliate;
  }
}
?>

<div class="row">
  <div class="col">
    <div class="tabs">
      <div class="tab w-full text-white overflow-hidden">
        <input type="checkbox" id="chck1" class="absolute opacity-0" checked>
        <label class="tab-label flex p-4 bg-gray-800 hover:bg-gray-900 font-bold cursor-pointer justify-between" for="chck1">Come acquistare?</label>
        <div class="tab-content max-h-0 bg-white text-gray-900 transition-all">
          Per ordinare <?php echo $title_product ?> è necessario <button type="submit" class="underline font-bold text-blue-500">compilare il modulo</button>
            su questo sito autorizzato alla vendita di questo prodotto, oppure acquistare <a href="<?php echo $getAffiliateLink; ?>" class="underline font-bold text-blue-500" target="blank">dal sito ufficiale.</a>
          <i class="block text-sm mt-2">Devi inserire i tuoi dati anagrafici, l’indirizzo di spedizione, ed un recapito telefonico. Dopo l'invio del modulo
            di acquisto un operatore del servizio clienti provvederà a richiamarti in breve tempo per verificare insieme a te i dati inseriti e procedere all’invio del prodotto.</i>
        </div>
      </div>
      <div class="tab w-full text-white overflow-hidden">
        <input type="checkbox" id="chck2" class="absolute opacity-0">
        <label class="tab-label flex p-4 bg-gray-800 hover:bg-gray-900 font-bold cursor-pointer justify-between" for="chck2">Quanto Costa la spedizione?</label>
        <div class="tab-content max-h-0 bg-white text-gray-900 transition-all">
          Quasi tutti i prodotti all'interno di questo sito <strong>incudono le spese di spedizione completamente gratuite!</strong>
          Se la consegna è gratuita verrà segnalato nella pagina.
        </div>
      </div>

      <div class="tab w-full text-white overflow-hidden">
        <input type="checkbox" id="chck3" class="absolute opacity-0">
        <label class="tab-label flex p-4 bg-gray-800 hover:bg-gray-900 font-bold cursor-pointer justify-between" for="chck3">Si paga alla consegna?</label>
        <div class="tab-content max-h-0 bg-white text-gray-900 transition-all">
          Si, puoi pagare anche con carta di credito o paypal, ma per garantirti
          maggiore comodità e sicurezza <strong>puoi effettuare il Pagamento alla Consegna</strong>,
          potrai pagare direttamente al corriere quando arriverà a casa tua!
        </div>
      </div>

      <div class="tab w-full text-white overflow-hidden">
        <input type="checkbox" id="chck4" class="absolute opacity-0">
        <label class="tab-label flex p-4 bg-gray-800 hover:bg-gray-900 font-bold cursor-pointer justify-between" for="chck4">In quanto tempo arriva?</label>
        <div class="tab-content max-h-0 bg-white text-gray-900 transition-all">
          I corrieri consegnano i pacchi sull'interna nazione <strong>in massimo 72 ore garantite</strong> isole comprese!
        </div>
      </div>

      <div class="tab w-full text-white overflow-hidden">
        <input type="checkbox" id="chck4" class="absolute opacity-0">
        <label class="tab-label flex p-4 bg-gray-800 hover:bg-gray-900 font-bold cursor-pointer justify-between" for="chck4">  Posso ricevere assistenza?</label>
        <div class="tab-content max-h-0 bg-white text-gray-900 transition-all">
          Certo! Se ancora hai dei dubbi che in questa pagina non sono stati risolti,
          puoi <button type="submit" class="underline">compilare il modulo</button> e un <strong>operatrice telefonica risponderà
            a tutte le tue domande prima dell’acquisto!</strong> Nel caso avessi già compilato il modulo, ti invitiamo
           a contattarci alla nostra <a href="<?php echo $fb_page; ?>" class="underline" target="blank">pagina Facebook</a>, oppure dalla pagina di <a href="<?php echo $projectPath ?>assistenza.php" class="underline" target="blank">assistenza.<a/>!
        </div>
      </div>

      <div class="tab w-full text-white overflow-hidden">
        <input type="checkbox" id="chck5" class="absolute opacity-0">
        <label class="tab-label flex p-4 bg-gray-800 hover:bg-gray-900 font-bold cursor-pointer justify-between" for="chck5">È possibile fare il reso?</label>
        <div class="tab-content max-h-0 bg-white text-gray-900 transition-all">
          Si! Deve essere <strong>entro 30 giorni</strong> dalla ricezione del prodotto.
        </div>
      </div>

      <div class="tab w-full text-white overflow-hidden">
        <input type="checkbox" id="chck6" class="absolute opacity-0">
        <label class="tab-label flex p-4 bg-gray-800 hover:bg-gray-900 font-bold cursor-pointer justify-between" for="chck6">I miei dati sono al sicuro?</label>
        <div class="tab-content max-h-0 bg-white text-gray-900 transition-all">
          Assolutamente si, questo sito è sicuro e puoi vederlo dal <strong>lucchetto verde "https"</strong>
          che si trova nella barra degli indirizzi del tuo browser,
          questo garantisce che i tuoi dati vengano inviati in
          totale sicurezza agli operatori telefonici che si incaricheranno di richiamarti per
          accertarsi che tu sia una persona reale e confermare i dati per l'invio del prodotto. Puoi leggere per approfondire l’argomento sulla
          <a href="<?php echo $privacy?>" class="underline" target="blank">Privacy Policy e Cookie Policy</a> oltre alle Condizioni per la Vendita Online
        </div>
      </div>
    </div>
  </div>

</div>
