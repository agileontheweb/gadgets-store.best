<div class="hidden">
	<?#php include("shared/modal_mailerlite.php") ?>
</div>
<?php
if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
	$projectPath = "http://localhost:8888/gadgets-store.best/";
}else{
  $projectPath = "https://gadgets-store.best/";
}
?>

<div class="fixed left-0 right-0 mb-0 border-0 rounded-0 bg-black">
	<div class="bg-red-500 p-1 text-center text-white text-sm">
		Le offerte potrebbero terminare tra:
		<div class="inline-block ml-1 count-down font-bold"><span class="clock"></span></div>
	</div>

	<nav class="flex p-3">
	  <a class="flex navbar-brand" href="<?php echo $projectPath ?>">
     <img src="img/logo.png" class="w-20 h-20">
		 <span class="hidden">Gadgets Store</span>
	  </a>

		<div class="flex lg:hidden absolute right-10 pt-6">
			<a class="flex text-white" id="btn-primary-sub-menu" href="#">
			 <i class="fas fa-bars fa-2x"></i>
		  </a>
		</div>

		<div class="hidden lg:flex">
			<ul class="items-center flex">
				<li class="">
					<a class="px-3 text-white uppercase hover:text-red-500 mx-3 font-bold" href="prodotti-tecnologia.php">Tecnologia</a>
				</li>
				<li class="">
					<a class="px-3 text-white uppercase hover:text-red-500 mx-3 font-bold" href="prodotti-per-la-bellezza.php">Bellezza</a>
				</li>
				<li class="">
					<a class="px-3 text-white uppercase hover:text-red-500 mx-3 font-bold" href="prodotti-per-la-casa.php">Casa</a>
				</li>
				<!-- <li class="">
					<a class="px-3 text-white uppercase hover:text-red-500 mx-3 font-bold" href="http://bit.ly/2OPkFYk">Corsi di Formazione</a>
				</li> -->
			</ul>
	  </div>
		<div class="hidden lg:flex absolute p-2 right-10">
			<a href="newsletter.php" class="hover:bg-red-500 hover:text-white border-b-4 border-red-500 font-bold text-white px-3 py-3" data-toggle="modal" data-target="#signupropmotion">
				Sconti nella tua email
			</a>
		</div>
	</nav>

	<div class="hidden bg-white fixed z-10 top-0 left-0 right-0 bottom-0" id="primary-sub-menu">
		<a class="px-3 uppercase hover:text-red-500 mx-3 font-bold absolute right-1 mt-4" id="btn-close" href="#">
			<i class="fas fa-times fa-2x"></i>
		</a>
		<ul class="h-screen flex flex-wrap content-center ">
			<li class="py-3 w-full">
				<a class="px-3 uppercase hover:text-red-500 mx-3 font-bold" href="./">Home</a>
			</li>
			<li class="py-3 w-full">
				<a class="px-3 uppercase hover:text-red-500 mx-3 font-bold" href="prodotti-tecnologia.php">Tecnologia</a>
			</li>
			<li class="py-3 w-full">
				<a class="px-3 uppercase hover:text-red-500 mx-3 font-bold" href="prodotti-per-la-bellezza.php">Bellezza</a>
			</li>
			<li class="py-3 w-full">
				<a class="px-3 uppercase hover:text-red-500 mx-3 font-bold" href="prodotti-per-la-casa.php">Casa</a>
			</li>
		</ul>
	</div>
</div>
