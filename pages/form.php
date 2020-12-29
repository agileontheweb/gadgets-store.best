<?php

	if(isset($_POST['submit'])){
		$title = $_POST["title"];
		$name = $_POST["name"];
		$surname = $_POST["surname"];
		$phone = $_POST["phone"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$zipcode = $_POST["zipcode"];
		$quantity = $_POST["quantity"];
		$url_product_api = $_POST["url_product_api"];

		sendRequest($title, $name, $surname, $phone, $quantity, $address, $zipcode, $city, $url_product_api);
	}

	function sendRequest($title, $name, $surname, $phone, $quantity, $address, $zipcode, $city,$url_product_api){
		$url = "https://network.worldfilia.net/manager/inventory/buy/$url_product_api.json";
		//Initiate cURL.
		$ch = curl_init($url);
		//The JSON data.
		$jsonData = array(
				'source_id' => '07ff46bb6597',
				'name' => $name . " " . $surname,
				'phone' => $phone,
				'quantity' => $quantity,
				'address' => $address,
				'zipcode' => $zipcode,
				'city' => $city
		);
		//Encode the array into JSON.
		$jsonDataEncoded = json_encode($jsonData);
		//Tell cURL that we want to send a POST request.
		curl_setopt($ch, CURLOPT_POST, 1);
		//Attach our encoded JSON string to the POST fields.
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
		//Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$output = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		if ($httpcode == 200){
			header("Location: ordine-confermato.php?title=$title&name=$name&surname=$surname&phone=$phone&address=$address&city=$city&zipcode=$zipcode");
		}
	}

?>
	<form method="post" accept-charset="utf-8" role="form" action="form.php"
  	class="max-w-screen-md px-4 mx-auto px-3 bg-white border-4 border-dashed border-green-500">
		<p class="text-center py-3">Compila il modulo qui sotto per poter acquistare il prodotto.
			Un operatore ti ricontatterá a breve per confermare i tuoi dati.
			<strong>La Spedizione è gratuita.</strong>
		</p>
		<div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
		<input type="hidden" name="fingerprint" id="fingerprint" value="">
		<input type="hidden" name="source_id" id="source_id" value="07ff46bb6597">
		<input type="hidden" name="url_product_api" id="url_product_api" value="<?php echo $url_product_api;?>">
		<input type="hidden" name="title" id="title" value="<?php echo $title;?>">

		<div class="form-group py-3">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nome</label>
			<input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo $name; ?>" required="required"/ placeholder="Scrivi il tuo nome">
		</div>

		<div class="form-group py-3">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="surname">Cognome</label>
			<input type="text" name="surname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo $surname; ?>" required="required"/ placeholder="Scrivi il tuo cognome">
		</div>

		<div class="form-group py-3">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Telefono (Meglio Cellulare)</label>
			<input type="number" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo $phone; ?>" required="required" placeholder="Scrivi il tuo telefono"/>
		</div>

		<div class="form-group py-3">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="address">Indirizzo e n. civico</label>
			<input type="text" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo $address ?>" required="required"  placeholder="Scrivi via e numero"/>
		</div>

		<div class="flex flex-wrap -mx-3 form-group py-3">
			<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
				<label class="block text-gray-700 text-sm font-bold mb-2" for="city">Città</label>
				<input type="text" name="city" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo $city; ?>" required="required"/  placeholder="Scrivi la città">
			</div>
			<div class="w-full md:w-1/2 px-3">
				<label class="block text-gray-700 text-sm font-bold mb-2" for="zipcode">CAP</label>
				<input type="number"
								name="zipcode"
								class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
								value="<?php echo $zipcode; ?>"
								oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
								maxlength = "5"
								required="required"
								 placeholder="Inserisci il CAP" />
			</div>
		</div>
		<?php if($selector==true) {?>
			<div class="form-group">
				<label class="block text-gray-700 text-sm font-bold mb-2" for="zipcode">Quantità</label>
				<select name="quantity" class=" mb-3 form-control block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline text-black" required="required">
					<option value="<?php echo $selector_1_value;?>" selected="selected"><?php echo $selector_1 ?></option>
					<option value="<?php echo $selector_2_value;?>"><?php echo $selector_2 ?></option>
					<option value="<?php echo $selector_3_value;?>"><?php echo $selector_3 ?></option>
				</select>
			</div>
		<?php }else{ ?>
			<input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
		<?php } ?>

		<!-- <div class="d-flex align-items-center" data-toggle="lightbox">
			<img name="img-product" data-jslghtbx="" class="mx-auto w-full" src="https://manager-uploads.s3.eu-central-1.amazonaws.com/upload/product_images/image/2891_ef800761b154da827ed64a33c5ff7f17_1556099516.jpg">
		</div>
		 -->
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