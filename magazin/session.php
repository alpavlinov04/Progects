<?php
session_set_cookie_params("1800");
session_start();

$products = [
  'p1' => [
    'price' => '90 BGN',
    'image' => 'Jacket.jpg',
    'link' => 'jaket.php',
    'name' => 'Mens winter jacket',
  ],
  'p2' => [
    'price' => '60 BGN',
    'image' => 'Jacket2.jpg',
    'link' => 'jaket2.php',
    'name' => 'Womans winter jacket',
  ],
  'p3' => [
    'price' => '8 BGN',
    'image' => 'T-shirt.jpg',
    'link' => 'T-shirt.php',
    'name' => 'Mens T-shirt',
  ],
  'p4' => [
    'price' => '9 BGN',
    'image' => 'T-shirt2.jpg',
    'link' => 'T-shirt2.php',
    'name' => 'Womens T-shirt',
  ],
  'p5' => [
    'price' => '5 BGN',
    'image' => 'T-shirt3.jpg',
    'link' => 'T-shirt3.php',
    'name' => 'Girls T-shirt',
  ],
  'p6' => [
    'price' => '5 BGN',
    'image' => 'T-shirt4.jpg',
    'link' => 'T-shirt4.php',
    'name' => 'Boys T-shirt',
  ],
];

$cart = [];
?>
