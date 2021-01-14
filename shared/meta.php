<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="<?php echo $projectPath ?>css/GDPR-cookie.css">
	<!-- <link rel="stylesheet" href="<?#php echo $projectPath ?>bower_components/bootstrap/dist/css/bootstrap.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

	<!-- <link href="<?#php echo $projectPath ?>css/tailwind.css" rel="stylesheet"> -->


<meta property="og:url"                content="https://www.gadgets-store.best" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="Gadgets Store - Acquista Prodotti Online" />
<meta property="og:description"        content="I prodotti più interessanti con le migliori promozioni del momento le troviamo noi!" />
<!-- <meta property="og:image"              content="https://gadgets-store.best/img/share-image-facebook.jpg" /> -->

<?php
if( !in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
	include('px-facebook.php');
	include('px-analytics.php');
	include("px-hotjar.php");
}
?>
