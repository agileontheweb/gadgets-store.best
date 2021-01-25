<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="dns-prefetch" href="//static.hotjar.com">
<link rel="dns-prefetch" href="https://in.hotjar.com">
<link rel="dns-prefetch" href="//www.google-analytics.com">
<link rel="dns-prefetch" href="//www.facebook.com">

<?php
	include("favicon.php");
	if($env=="dev" || $env=="prod"){?>
		<link rel="stylesheet" href="<?php echo $projectPath ?>dist/css.min.css">
	<?php }else{ ?>
		<link rel="stylesheet" href="<?php echo $projectPath ?>css/GDPR-cookie.css">
		<link rel="stylesheet" href="<?php echo $projectPath ?>css/tab.css">

		<link rel="stylesheet" href="<?php echo $projectPath ?>css/tailwind.css">
		<link rel="stylesheet" href="<?php echo $projectPath ?>css/carousel.css">
	<?php }

	if(isset($env)=="prod"){
		include('px-facebook.php');
		include('px-analytics.php');
		include("px-hotjar.php");
	}
	include('opengraph.php');
?>
