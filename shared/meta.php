<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="dns-prefetch" href="//static.hotjar.com">
<link rel="dns-prefetch" href="https://in.hotjar.com">
<link rel="dns-prefetch" href="//www.google-analytics.com">
<link rel="dns-prefetch" href="//www.facebook.com">

<?php
	if($env=="dev" || $env=="prod"){?>
		<link rel="stylesheet" href="<?php echo $projectPath ?>dist/css.min.css">
	<?php }else{ ?>
		<link rel="stylesheet" href="<?php echo $projectPath ?>css/GDPR-cookie.css">
		<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->
		<!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"> -->
		<link rel="stylesheet" href="<?php echo $projectPath ?>css/tab.css">
		<link rel="stylesheet" href="<?php echo $projectPath ?>dist/css.min.css">
	<?php }

	if(isset($env)=="prod"){
		include('px-facebook.php');
		include('px-analytics.php');
		include("px-hotjar.php");
	}
	include('opengraph.php');
?>
