<?php
	$img = $_GET['img'];
	$extra = $_GET["extra"];
	$upsell_page = $_GET["upsell_page"];
	$name = "";
	$surname = "";
	$phone = "";
	$address = "";
	$title_product = $_GET['title_product'];
	$form_short = $_GET['form_short'];

	$url_remove_space = preg_replace('/\s+/', '', $title_product);
	$url_for_facebook_event_purchase = strtolower($url_remove_space);

	if(isset($_POST['submit'])){
		$title_product = $_POST["title_product"];
		$price = $_POST['price'];
		$name = $_POST["name"];
		$surname = $_POST["surname"];
		$phone = $_POST["phone"];
		$address = $_POST["address"];
		$quantity = $_POST["quantity"];
		$url_product_api = $_POST["url_product_api"];
		$upsell_page = $_POST["upsell_page"];
		$url_for_facebook_event_purchase = $_POST["url_for_facebook_event_purchase"];
		sendRequest($title_product,$form_short,  $price, $name, $surname, $phone, $quantity, $address, $url_product_api, $upsell_page, $url_for_facebook_event_purchase);
	}

	function sendRequest($title_product, $form_short, $price, $name, $surname, $phone, $quantity, $address,$url_product_api, $upsell_page, $url_for_facebook_event_purchase){

		$url = "https://network.worldfilia.net/manager/inventory/buy/$url_product_api.json";
		$ch = curl_init($url);
		$jsonData = array(
				'source_id' => '07ff46bb6597',
				'name' => $name . " " . $surname,
				'phone' => $phone,
				'quantity' => $quantity,
				'address' => $address
		);
		$jsonDataEncoded = json_encode($jsonData);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$output = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		if ($httpcode == 200){
			if(!empty($upsell_page)){
				header("Location: $upsell_page?upsell&$url_for_facebook_event_purchase&title_product=$title_product&price=$price&name=$name&surname=$surname&phone=$phone&address=$address");
			}else{
				header("Location: ordine-confermato.php?$url_for_facebook_event_purchase&price=$price&name=$name");
			}
		}
	}
?>

	<form method="post" accept-charset="utf-8" role="form" action="form.php"
  	class="max-w-screen-md px-4 mx-auto px-3 bg-white border-4 border-dashed border-green-500">
		<p class="text-center py-3">Compila il modulo qui sotto per poter acquistare il prodotto.
			Un operatore ti ricontatterá a breve per confermare i tuoi dati.
			<strong>La Spedizione è gratuita.</strong>
		</p>

		<img src="<?php echo $img?>" class="mx-auto">
		<div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
		<input type="hidden" name="fingerprint" id="fingerprint" value="">
		<input type="hidden" name="source_id" id="source_id" value="07ff46bb6597">
		<input type="hidden" name="url_product_api" id="url_product_api" value="<?php echo $url_product_api;?>">
		<input type="hidden" name="title_product" id="title_product" value="<?php echo $title_product;?>">
		<input type="hidden" name="price" id="price" value="<?php echo $price;?>">
		<input type="hidden" name="upsell_page" id="upsell_page" value="<?php echo $upsell_page;?>">
		<input type="hidden" name="url_for_facebook_event_purchase" id="url_for_facebook_event_purchase" value="<?php echo $url_for_facebook_event_purchase;?>">

		<div class="form-group py-3">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nome</label>
			<input type="text" name="name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent" value="<?php echo $name; ?>" required="required"/ placeholder="Scrivi il tuo nome">
		</div>

		<div class="form-group py-3">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Telefono (Meglio Cellulare)</label>
			<input type="number" name="phone" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent" value="<?php echo $phone; ?>" required="required" placeholder="Scrivi il tuo telefono"/>
		</div>

		<div class="form-group py-3">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="address">Indirizzo e n. civico</label>
			<input type="text" name="address" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent" value="<?php echo $address ?>" required="required"  placeholder="Scrivi via e numero"/>
		</div>

		<?php if($selector==true) {?>
			<div class="form-group">
				<label class="block text-gray-700 text-sm font-bold mb-2" for="zipcode">Quantità  <?php echo $extra; ?></label>
				<select name="quantity" class=" mb-3 form-control block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline text-black" required="required">
					<option value="<?php echo $selector_value_1;?>" selected="selected"><?php echo $selector_1 ?></option>
					<option value="<?php echo $selector_value_2;?>"><?php echo $selector_2 ?></option>
					<option value="<?php echo $selector_value_3;?>"><?php echo $selector_3 ?></option>
				</select>
			</div>
		<?php }else{ ?>
			<input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
			<?php echo $extra; ?>
		<?php } ?>

		<p class="text-center p-3 text-xs">
			Cliccando "Completa l'acquisto" confermi di aver preso visione <a href="<?php echo $privacy ?>" target="_blank" class="underline">dell'informativa sulla privacy</a>.
		</p>
		<div class="text-center">
			<input type="submit"
							value="Completa l'acquisto"
							name="submit"
							class="inline-block mt-6 bg-yellow-500 hover:bg-yellow-400 text-white rounded-full px-12 py-3 shadow-xl focus:outline-none">
							<p class="text-center py-3">Un operatore ti ricontatterá a breve. <strong>Spedizione gratuita.</strong></p>
		</div>
		<!-- <input type="hidden" name="quantity" id="quantity" value="1"> -->
	</form>
