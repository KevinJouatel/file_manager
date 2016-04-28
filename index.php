<?php
require_once 'inc/config.php';

$pictures = glob("img/*.jpg");

foreach ($pictures as $key => $picture) {
	$name_picture = basename($picture);
	// debug($name_picture);

	$query = $db->prepare('SELECT * FROM products WHERE picture LIKE :name_picture');
	$query->bindValue(':name_picture', $name_picture);
	$query->execute();
	$products = $query->fetchAll();

		foreach ($products as $key => $product) {
			$product_name = $product['name'];
			//debug($product_name);

			$new_name = slugify($product_name);
			echo $new_name.' : '.$name_picture.'<br>';

		$result = rename("img/".$name_picture, $new_name.'jpg');


		};

};

