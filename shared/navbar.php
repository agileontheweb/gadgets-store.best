<div class="hidden loadingpage fixed h-full w-full flex items-center justify-center bg-opacity-80 bg-black z-30">
	<div class="z-10 px-6 text-center text-white text-md font-bold text-2xl">
		Caricando il modulo d'ordine...
		<p class="text-sm text-yellow-300">..attendere...</p>
	</div>
</div>

<div class="<?php fixedNavbar();?> left-0 right-0 mb-0 border-0 rounded-0 bg-black z-20">
	<div class="uppercase font-bold <?php echo colorBarTop(); ?> py-3 text-center text-white text-xs sm:text-sm <?php hideBarCounter(); ?>">
		<?php messageTop(); ?>
	</div>


	<nav class="flex p-1 <?php showNavBar();?>">
		  <a class="flex navbar-brand cursor-pointer" href="<?php echo $projectPath ?>">
	     <img src="<?php echo $projectPath ?>/img/logo.png" class="w-14 h-14 md:w-16 md:h-16">
			 <span class="hidden"><?php echo $brand_name; ?></span>
		  </a>

			<div class="flex lg:hidden absolute right-10 pt-3 md:pt-6">
				<a class="flex text-white" id="btn-primary-sub-menu" href="#">
				 <i class="fas fa-bars fa-2x"></i>
			  </a>
			</div>

			<div class="hidden lg:flex">
				<ul class="items-center flex">
					<li class="">
						<a class="hover:cursor-pointer text-white uppercase hover:text-red-500 mx-3 font-bold" href="<?php echo $projectPath ?>prodotti-tecnologia.php">Tecnologia</a>
					</li>
					<li class="">
						<a class="text-white uppercase hover:text-red-500 mx-3 font-bold" href="<?php echo $projectPath ?>prodotti-bellezza.php">Bellezza</a>
					</li>
					<li class="">
						<a class=" text-white uppercase hover:text-red-500 mx-3 font-bold" href="<?php echo $projectPath ?>prodotti-benessere.php">Benessere</a>
					</li>
					<li class="">
						<a class=" text-white uppercase hover:text-red-500 mx-3 font-bold" href="<?php echo $projectPath ?>prodotti-casa.php">Casa</a>
					</li>
				</ul>
		  </div>
			<div class="hidden lg:flex absolute right-10">
				<a href="<?php echo $projectPath ?>newsletter.php" class="hover:bg-red-500 hover:text-white border-b-4 border-red-500 font-bold text-white px-3 py-3">
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
				<a class="px-3 uppercase hover:text-red-500 mx-3 font-bold" href="<?php echo $projectPath ?>prodotti-tecnologia.php">Tecnologia</a>
			</li>
			<li class="py-3 w-full">
				<a class="px-3 uppercase hover:text-red-500 mx-3 font-bold" href="<?php echo $projectPath ?>prodotti-bellezza.php">Bellezza</a>
			</li>
			<li class="py-3 w-full">
				<a class="px-3 uppercase hover:text-red-500 mx-3 font-bold" href="<?php echo $projectPath ?>prodotti-benessere.php">Benessere</a>
			</li>
			<li class="py-3 w-full">
				<a class="px-3 uppercase hover:text-red-500 mx-3 font-bold" href="<?php echo $projectPath ?>prodotti-casa.php">Casa</a>
			</li>
		</ul>
	</div>
</div>
