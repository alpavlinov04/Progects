<?php
include 'session.php';
 ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>ALEXIX</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <a class="button button2" href="Cart.php" align="center">Cart</a>
  <a class="button button1" href="login.php" align="center">Login</a>

  <ul>
    <li><a class="active" href="magazin.php">Home</a></li>
    <li><a href="Contact.php">Contact</a></li>
  </ul>

  <header>
    <h1>ALEXIX ONLINE SHOP</h1>
    <div class="logo">
    <img src="Alex.jpg" alt="Alex logo" width="125">
  </div>
    <p></p>

  </header>
  <p></p>
  <article>
    <div class="center">
    <?php foreach ($products as $key => $product): ?>
      <table>
        <tr>
      <div class="responsive">
        <div class="gallery">

          <a target="_blank" href="<?php echo $product['link']; ?>">
          <div class="desc"><img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="250" height="300"></div>
          <a href="<?php echo $product['link']; ?>">"<?php echo $product['name']; ?>"</a>
          <br>
          <a><?php echo $product['price']; ?></a>

        </div>
      </div>
      <div class="clearfix"></div>
    <?php endforeach; ?>
  </div>

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
