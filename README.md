# gadgets-store.best
# Il progetto si basa sulla vendita di prodotti in Affiliazione.

##### PRODOTTI #####
# Prodotti presi dai Network di Affiliazione Worldfilia
# Prodotti presi dai Network di Affiliazione Amazon

##### FUNZIOMAMENTO PROGETTO #####
# Il progetto è costruito in PHP, Tailwind, Bootstrap, Grunt.
# Attraverso il file setting.php setto i dati generali del Brand e dei vari pixel Facebook, Analytics, Hotjar
# I prodotti vengono presi dai vari XML divisi per categorie.
# Vengono fatti dei cicli Each o for per prendere i dati e popolare i prodotti.
# Le pagina sono esclusivamente Landing page con le stesse fuzionaltà.

##### MOSTRARE COUNTER TERSIMONI SCARSITY #####
# Aggiungendo i paramentri: how_many_buyer (mostro quantità compratori)
# Aggiungendo i paramentri: progress_short (mostro la quantità di pezzi rimasta)

##### PROGRESS SHORT #####
# Questo scala durante la giornata usando la funzione remainingPieces()

##### STAGING #####
# Prima di mettere in produzione le prove si fanno attraverso il sotto dominio dev.nomesito.com
# Usare Grunt per generare e fare il Push sul server

##### PRODUZIONE #####
# Prima di mettere in produzione eseguire grunt default per generare le immagini compresse

##### ADS #####
# Aggiungendo nel url i parametri fbclid si disattivano parti di template, quelle per non fare uscire
# dalla pagina. Questo si attiva quando si arriva sulla landing page da una inserzione di FB.
# Aggiungendo nel url i parametri ads-1 ads-2 ads-3 si concatena l'immagine corretta per l'ADS
