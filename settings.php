<?php
	if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
		$projectPath = "http://localhost:8888/gadgets-store.best/";
	}else{
	  $projectPath = "https://gadgets-store.best/";
	}
?>
