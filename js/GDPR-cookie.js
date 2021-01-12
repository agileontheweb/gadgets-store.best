function gdprCookie(){
  var options = {
      title: 'Accetta Cookies & Privacy Policy',
      message: 'Utilizziamo i cookie per migliorare la navigazione ed esperienza del visitatore. Clicca su <strong>continua</strong> per proseguire.',
      delay: 600,
      expires: 1,
      link: 'cookie-policy.php',
      onAccept: function(){
          var myPreferences = $.fn.ihavecookies.cookie();
      },
      uncheckBoxes: true,
      acceptBtnLabel: 'Continua',
      moreInfoLabel: 'Maggiori informazioni'
  }

  $('body').ihavecookies(options);

  if ($.fn.ihavecookies.preference('marketing') === true) {
    console.log('This should run because marketing is accepted.');
  }

  $('#gdpr-cookie-accept').on('click', function(){
      $('body').ihavecookies(options, 'reinit');
  });
}
