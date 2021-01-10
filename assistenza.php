<?php
  include("settings.php");
?>

<!doctype html>
<html lang="it">
  <head>
    <title>Assistenza <?php echo $brand_name; ?> </title>
    <?php include('shared/meta.php'); ?>
  </head>
  <body class="bg-gray-100">
    <?php include("shared/navbar.php") ?>

    <div class="pt-32 px-3">
      <div class="max-w-screen-md mx-auto">
        <h1 class="text-2xl font-bold py-12">
          Assistenza <?php echo $brand_name; ?>
        </h1>
        <p class="font-bold">Il prodotto che hai ricevuto non era come volevi? Era difettoso?</p>
        <p class="font-bold">Vuoi fare reclamo per qualsiasi incoveniente?</p>
        <p class="py-3">
          <?php echo $brand_name; ?> non è il fornitore o produttore di nessuno dei prodotti
          che puoi trovare all'interno di questo sito internet gadget-store.best
          per maggiori informazioni ti rimandiamo alla pagina del nostro
          <a class="underline" href="disclaimer.php">disclaimer</a>.
        </p>

        <h1 class="text-xl font-bold">
          Come contattare l'azienda.
        </h1>

        <p class="py-3">
          Qui in basso puoi trovare l'elenco di tutti i prodotti proposti
          all'interno di questo sito internet con i riferimenti alla pagina ufficiale di
          ogni azienda che produce, spedisce o vende.
        </p>

        <p class="py-3 font-bold">
          Cerca il prodotto di tuo interesse e clicca sul link per andare al sito
          ufficiale dell'azienda.
        </p>

        <h2 class="text-2xl font-bold mt-10">
          Prodotti Tecnologia:
        </h2>

        <?php
          $xml_tecnologia = simplexml_load_file('xml/tecnologia.xml');
          $list = $xml_tecnologia->record;
          for ($i = 0; $i < count($list); $i++) {
            if(empty($list[$i]->linkaffiliate)){
              $value = $projectPath ."pages/" .$list[$i]->link;
              $target = false;
            }else{
              $value = $list[$i]->linkaffiliate;
              $target = true;
            }
           ?>
           <div class="py-3 border-b">
             <p class="font-bold"><?php echo $list[$i]->name ?></p>
             <a href="<?php echo $list[$i]->produttore ?>" class="underline" target="blank" rel="nofollow"><?php echo $list[$i]->produttore ?></a>
          </div>
        <?php  } ?>

        <h2 class="text-2xl font-bold mt-10">
          Prodotti Bellezza:
        </h2>

        <?php
          $xml_bellezza = simplexml_load_file('xml/bellezza.xml');
          $list = $xml_bellezza->record;
          for ($i = 0; $i < count($list); $i++) {
            if(empty($list[$i]->linkaffiliate)){
              $value = $projectPath ."pages/" .$list[$i]->link;
              $target = false;
            }else{
              $value = $list[$i]->linkaffiliate;
              $target = true;
            }
           ?>
           <div class="py-3 border-b">
             <p class="font-bold"><?php echo $list[$i]->name ?></p>
             <a href="<?php echo $list[$i]->produttore ?>" class="underline" target="blank" rel="nofollow"><?php echo $list[$i]->produttore ?></a>
          </div>
        <?php  } ?>


        <h2 class="text-2xl font-bold mt-10">
          Prodotti Benessere:
        </h2>

        <?php
          $xml_benessere = simplexml_load_file('xml/benessere.xml');
          $list = $xml_benessere->record;
          for ($i = 0; $i < count($list); $i++) {
            if(empty($list[$i]->linkaffiliate)){
              $value = $projectPath ."pages/" .$list[$i]->link;
              $target = false;
            }else{
              $value = $list[$i]->linkaffiliate;
              $target = true;
            }
           ?>
           <div class="py-3 border-b">
             <p class="font-bold"><?php echo $list[$i]->name ?></p>
             <a href="<?php echo $list[$i]->produttore ?>" class="underline" target="blank" rel="nofollow"><?php echo $list[$i]->produttore ?></a>
          </div>
        <?php  } ?>

        <h2 class="text-2xl font-bold mt-10">
          Prodotti Casa:
        </h2>

        <?php
          $xml_casa = simplexml_load_file('xml/casa.xml');
          $list = $xml_casa->record;
          for ($i = 0; $i < count($list); $i++) {
            if(empty($list[$i]->linkaffiliate)){
              $value = $projectPath ."pages/" .$list[$i]->link;
              $target = false;
            }else{
              $value = $list[$i]->linkaffiliate;
              $target = true;
            }
           ?>
           <div class="py-3 border-b">
             <p class="font-bold"><?php echo $list[$i]->name ?></p>
             <a href="<?php echo $list[$i]->produttore ?>" class="underline" target="blank" rel="nofollow"><?php echo $list[$i]->produttore ?></a>
          </div>
        <?php  } ?>
      </div>
    <?php include("shared/footer.php") ?>
  </body>
</html>
