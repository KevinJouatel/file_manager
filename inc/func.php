<?php

function debug($tableau) {
	echo '<pre>'.print_r($tableau, true).'</pre>';
};

function slugify($text)
{
  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // replace non letter or digits by -
  $text = str_replace('~[^\pL\d]+~u', '-', $text);

  // remove unwanted characters
  $text = str_replace('~[^-\w]+~', '-', $text);

  // remove unwanted characters
  $text = str_replace("'", "_", $text);

  // remove unwanted characters
  $text = str_replace('@', '-', $text);

    // remove unwanted characters
  $text = str_replace('&', '-', $text);

    // remove unwanted characters
  $text = str_replace(' ', '-', $text);

     // remove unwanted characters
  $text = str_replace('- ', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);




  if (empty($text))
  {
    return 'n-a';
  }

  return $text;
};
