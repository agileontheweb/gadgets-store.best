<?php
  include("../settings.php");
?>
<!doctype html>
<html lang="it-IT">
<head>
  <meta charset="UTF-8">
  <title><?php echo $brand_name; ?>  <?php echo $brand_slogan; ?></title>
  <?php include('../shared/meta.php'); ?>
</head>

<body>
  <div class="bg-green-500 mx-auto px-4 pt-1">
    <?php if(isset($_COOKIE["add_cookie_has_newsletter"]) == "has_newsletter"){ ?>
      <p class="py-3 px-3 text-white font-bold text-center">
        Hai già acquistato questo prodotto.
      </p>
    <?php }else{ ?>
      <p class="py-3 px-3 text-white font-bold text-center">
        Hai già effettuato l'acquisto, attendi che una operatrice ti contatti.
      </p>
    <?php }?>
  </div>

	<div class="text-center leading-tight my-3 max-w-4xl mx-auto px-4">
    <?php if(isset($_COOKIE["add_cookie_has_newsletter"]) == "has_newsletter"){ ?>
      <h3 class="text-2xl py-3">
        Vuoi acquistare altri prodotti?
      </h3>
      <p class="py-3 px-3 text-center">
        Dalla home page del sito puoi consultare tanti altri prodotti in sconto.
      </p>
      <a href="<?php echo $projectPath ?>" class="inline-block bg-yellow-500 text-white px-6 py-3 rounded-lg text-xl mt-5">
        Vai alla home
      </a>

      <h3 class="text-2xl py-3 border-t mt-10">
        Vuoi ricevere promozioni scontate al 50%?
      </h3>
      <p class="py-3 px-3 text-center">
        Ricevi gratuitamente le migliori promozioni online scontate al 50% nella tua
        casella email.
      </p>
      <a href="<?php echo $projectPath ?>/newsletter.php" class="inline-block bg-yellow-500 text-white px-6 py-3 rounded-lg text-xl mt-5">
        Iscriviti
      </a>
    <?php }else{ ?>
      <h3 class="text-2xl py-3">
        Nell'attesa...
      </h3>
      <p class="py-3 px-3 text-center">
        Che ne dici di ricevere gratuitamente le migliori promozioni online scontate al 50% nella tua
        casella email...
      </p>
      <a href="<?php echo $projectPath ?>/newsletter.php" class="inline-block bg-yellow-500 text-white px-6 py-3 rounded-lg text-xl mt-5">
        Iscriviti
      </a>
    <?php }?>

	</div>
</body>
