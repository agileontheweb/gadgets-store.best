<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {?>
	<link rel="stylesheet" href="<?php echo $projectPath ?>/css/GDPR-cookie.css">
	<link rel="stylesheet" href="<?php echo $projectPath ?>/bower_components/bootstrap/dist/css/bootstrap.css">
	<link href="<?php echo $projectPath ?>css/tailwind.css" rel="stylesheet">
<?php }else{ ?>
	<link href="<?php echo $projectPath ?>/dist/built.css" rel="stylesheet">
<?php }?>



<script src="https://kit.fontawesome.com/0669c88241.js" crossorigin="anonymous"></script>
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
