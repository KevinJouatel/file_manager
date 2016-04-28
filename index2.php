<?php
require_once 'inc/config.php';

$pictures = glob("img/*.jpg");

foreach ($pictures as $picture_path) {

		$picture_filename = basename($picture_path);

		$query = $db -> prepare('SELECT name, picture FROM products WHERE picture LIKE :picture');
		$query->bindValue(':picture', $picture_filename, PDO::PARAM_STR);
		$query->execute();
		$product = $query->fetch();

		$new_name = $product['name'];
		$new_name = str_replace(' ','-', $new_name);


		$old_name = $product['name'];

};
