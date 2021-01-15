<h2 class="text-center text-2xl font-bold">
  <span class="inline-block pb-3">Domande Frequenti</span>
</h2>
<div class="accordion" id="accordionExample">

  <div class="card">
    <div class="card-header" id="faq-0">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left font-bold" type="button" data-toggle="collapse" data-target="#collapse-0" aria-expanded="true" aria-controls="collapse-0">
          Come acquistare?
        </button>
      </h2>
    </div>

    <?php
    $getAffiliateLink = "";
    foreach($xml->children() as $record) {
      if($record->attributes()->id == $id ){
        $getAffiliateLink = $record->linkaffiliate;
      }
    }
    ?>

    <div id="collapse-0" class="collapse show" aria-labelledby="faq-0" data-parent="#accordionExample">
      <div class="card-body">
        <p>Per ordinare <?php echo $title_product ?> è necessario <button type="submit" class="underline font-bold text-blue-500">compilare il modulo</button>
          su questo sito autorizzato alla vendita di questo prodotto, oppure acquistare <a href="<?php echo $getAffiliateLink; ?>" class="underline font-bold text-blue-500" target="blank">dal sito ufficiale.</a></p>
        <i class="block text-sm mt-2">Devi inserire i tuoi dati anagrafici, l’indirizzo di spedizione, ed un recapito telefonico. Dopo l'invio del modulo
          di acquisto un operatore del servizio clienti provvederà a richiamarti in breve tempo per verificare insieme a te i dati inseriti e procedere all’invio del prodotto.</i>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="faq-1">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left font-bold" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
          Quanto Costa la spedizione?
        </button>
      </h2>
    </div>

    <div id="collapse-1" class="collapse" aria-labelledby="faq-1" data-parent="#accordionExample">
      <div class="card-body">
        Quasi tutti i prodotti all'interno di questo sito <strong>incudono le spese di spedizione completamente gratuite!</strong>
        Se la consegna è gratuita verrà segnalato nella pagina.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="faq-2">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left font-bold collapsed" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
          Si paga alla consegna?
        </button>
      </h2>
    </div>
    <div id="collapse-2" class="collapse" aria-labelledby="faq-2" data-parent="#accordionExample">
      <div class="card-body">
        Si, puoi pagare anche con carta di credito o paypal, ma per garantirti
        maggiore comodità e sicurezza <strong>puoi effettuare il Pagamento alla Consegna</strong>,
        potrai pagare direttamente al corriere quando arriverà a casa tua!
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="faq-3">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left font-bold collapsed" type="button" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
          In quanto tempo arriva?
        </button>
      </h2>
    </div>
    <div id="collapse-3" class="collapse" aria-labelledby="faq-3" data-parent="#accordionExample">
      <div class="card-body">
        I corrieri consegnano i pacchi sull'interna nazione <strong>in massimo 72 ore garantite</strong> isole comprese!
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="faq-4">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left font-bold collapsed" type="button" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
          Posso ricevere assistenza?
        </button>
      </h2>
    </div>
    <div id="collapse-4" class="collapse" aria-labelledby="faq-4" data-parent="#accordionExample">
      <div class="card-body">
        Certo! Se ancora hai dei dubbi che in questa pagina non sono stati risolti,
        puoi <button type="submit" class="underline">compilare il modulo</button> e un <strong>operatrice telefonica risponderà
          a tutte le tue domande prima dell’acquisto!</strong> Nel caso avessi già compilato il modulo, ti invitiamo
         a contattarci alla nostra <a href="<?php echo $fb_page; ?>" class="underline" target="blank">pagina Facebook</a>, oppure dalla pagina di <a href="<?php echo $projectPath ?>assistenza.php" class="underline" target="blank">assistenza.<a/>!
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="faq-5">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left font-bold collapsed" type="button" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
          È possibile fare il reso?
        </button>
      </h2>
    </div>
    <div id="collapse-5" class="collapse" aria-labelledby="faq-5" data-parent="#accordionExample">
      <div class="card-body">
        Si! Deve essere <strong>entro 30 giorni</strong> dalla ricezione del prodotto.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="faq-6">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left font-bold collapsed" type="button" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
          I miei dati sono al sicuro?
        </button>
      </h2>
    </div>
    <div id="collapse-6" class="collapse" aria-labelledby="faq-6" data-parent="#accordionExample">
      <div class="card-body">
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
