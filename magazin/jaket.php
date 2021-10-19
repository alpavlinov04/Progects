<?php
include 'session.php';
 ?>
<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <title>ALEXIX</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
  <?php
  $Size = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $Size = test_input($_POST["Size"]);
  }
  

  ?>
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
  <h2>Men's winter jacket</h2>
  <center>
    <img src="Jacket.jpg" alt="Men's winter jacket" width="auto" height="auto">
  </center>
  <p></p>
  <p>Very good men's winter jacket. Ideal for all winter conditions. With additional sweatshirt. Internal pocket. Ideally up to -15 degrees.</p>
  <p>Price BGN 90.</p>
  <br>
  <form method="post" action="Cart.php">
    Size:
    <input type="checkbox" name="S" value="">S
    <input type="checkbox" name="M" value="M">M
    <input type="checkbox" name="L" value="L">L
    <input type="checkbox" name="XL" value="XL">XL
    <input type="checkbox" name="XXL" value="XL">XXL
  </form>
  <form method="post" action="Cart.php">
    <input type="number" class="peaces"  min="0" max="100">
    <input type="hidden" name="custId" value="<?php echo $key; ?>">
    <button class="Cart"><i style='font-size:24px' class='fas'>&#xf217;</i></button>
  </form>
  <footer>
    <p> ALEXIX FASHION </p>
    <p> Contact </p>
    <p> E-mail: aleksaav2004@gmail.com </p>
    <p> ahone number: 0876714631 </p>
    <p> Address: city of Vratsa, Kokiche Street 14 </p>
  </footer>
</body>
</html>
