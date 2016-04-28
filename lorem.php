<?php
include 'inc/config.php';

$contents = nl2br(file_get_contents('lorem.txt'));
$contents = explode('<br />'.PHP_EOL.'<br />'.PHP_EOL, $contents);

/*
1/ Pour chaque paragraphe créer une fichier txt :
faire une boucle sur le fichier content et à chaque passage de boucle créer une fichier loremX.txt dans le repertoire 'lorem'

2/ Pusher ça sur un dépot	*/

