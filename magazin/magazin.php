<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>ALEXIX</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <a class="button button2" href="" align="center">Cart</a>
  <a class="button button1" href="aplication.php" align="center">Register form</a>

  <ul>
    <li><a class="active" href="magazin.php">Home</a></li>
    <li><a href="Contact.php">Contact</a></li>
  </ul>

  <header>
    <h1>ALEXIX ONLINE SHOP</h1>
    <img src="Alex.jpg" alt="Alex logo" width="200" height="200">
    <p></p>

  </header>
  <p></p>
  <article>
    <?php
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
      ?>
    <?php foreach ($products as $key => $product): ?>
      <div class="responsive">
        <div class="gallery">
          <div class="desc"><img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="250" height="300"></div>
          <a href="<?php echo $product['link']; ?>">"<?php echo $product['name']; ?>"</a>
          <br>
          <a><?php echo $product['price']; ?></a>
        </div>
      </div>
      <div class="clearfix"></div>

    <?php endforeach; ?>
  </article>
  <footer>
    <p> ALEXIX FASHION </p>
    <p> Contact </p>
    <p> E-mail: alekspav2004@gmail.com </p>
    <p> Phone number: 0876714631 </p>
    <p> Address: city of Vratsa, Kokiche Street 14 </p>
  </footer>
</body>
</html>
