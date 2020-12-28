
<!doctype html>
<html lang="it">
  <head>
    <title>Gadgets Store - Newsletter</title>
    <meta name="description" content="Iscriviti gratis e ricevi le migliori offerte del momento." >
    <?php include('shared/meta.php'); ?>
  </head>

  <style type="text/css">
  #mlb2-3260023.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p{
    color:red;
  }
  </style>

  <body class="bg-gray-100">
    <script>
      fbq('track', 'Pagina newsletter');
    </script>
    <?php include("shared/navbar.php") ?>

    <div class="pt-32">
      <h1 class="text-center text-2xl font-bold py-12 text-gray-600">
        Ricevi gratuitamente le <br><strong>migliori offerte e promozioni <br>in sconto del 50%</strong>.
      </h1>
      <div class="max-w-screen-sm bg-white mx-auto">
        <div id="mlb2-3260023" class="mx-1 p-12 border-dashed border-green-500 border-4 ml-form-embedContainer ml-subscribe-form ml-subscribe-form-3260023">
        <div class="ml-form-align-center">
          <div class="ml-form-embedWrapper embedForm">
            <div class="ml-form-embedBody ml-form-embedBodyDefault row-form">
              <div class="ml-form-embedContent" style="margin-bottom:0"></div>
               <p class="p-3">Inserisci nel riquadro qui sotto la tua email per ricevere le nostre migliori offerte.</p>
              <form class="ml-block-form" action="https://static.mailerlite.com/webforms/submit/o1w2v2" data-code="o1w2v2" method="post" target="_blank">
                <div class="ml-form-formContent">
                  <div class="ml-form-fieldRow ml-last-item">
                    <div class="ml-field-group ml-field-email ml-validate-email ml-validate-required">
                      <input type="email" class="py-4 px-2 border w-full form-control" data-inputmask="" name="fields[email]" placeholder="Scrivi la tua email" autocomplete="Scrivi la tua email">
                    </div>
                  </div>
                </div>
                <div class="ml-form-checkboxRow ml-validate-required py-5">
                  <label class="checkbox">
                    <input type="checkbox">
                    <div class="label-description inline-block"> <p>Clicca e consenti di voler ricevere le promozioni.</p></div>
                  </label>
                </div>
                <input type="hidden" name="ml-submit" value="1">
                <div class="ml-form-embedSubmit">
                  <button type="submit" class="primary uppercase font-bold block text-white bg-black hover:bg-white hover:text-black text-black rounded-full px-12 py-3 focus:outline-none w-full">Iscriviti</button>
                  <button disabled="disabled" style="display:none" type="button" class="loading"> <div class="ml-form-embedSubmitLoad"><div></div><div></div><div></div><div></div></div> </button>
                </div>
              </form>
            </div>
            <div class="ml-form-successBody row-success bg-green-100" style="display:none">
              <div class="ml-form-successContent text-green-600">
                <h4>Grazie!</h4>
                <p>La tua iscrizione è avvenuta con successo. Presto nuove promozioni nella tua email.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <?php include("shared/footer.php") ?>
    <script>
      function ml_webform_success_3260023(){var r=ml_jQuery||jQuery;r(".ml-subscribe-form-3260023 .row-success").show(),r(".ml-subscribe-form-3260023 .row-form").hide()}
    </script>
    <img src="https://track.mailerlite.com/webforms/o/3260023/o1w2v2?v1609088590" width="1" height="1" style="max-width:1px;max-height:1px;visibility:hidden;padding:0;margin:0;display:block" alt="." border="0">
    <script src="https://static.mailerlite.com/js/w/webforms.min.js?v28bf44f740701752bfc6767bc7e171d4" type="text/javascript"></script>
</html>
