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
  $_SESION['Size'] = $_POST['Size'];
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
  <h2>Girl's T-shirt</h2>
  <center>
    <img src="T-shirt3.jpg" alt  = "Girl's T-shirt" width = "auto" height="auto">
  </center>
  <p></p>
  <p>Very good girl's t-shirt. With print. 100% cotton.</p>
  <p>Price BGN 5.</p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Size:
    <input type="checkbox" name="S" value="">S
    <input type="checkbox" name="M" value="M">M
    <input type="checkbox" name="L" value="L">L
    <input type="checkbox" name="XL" value="XL">XL
  </form>
  <form method="post" action="Cart.php">
    <input type="number" class="peaces"  min="0" max="100">
    <input type="hidden" name="custId" value="<?php echo $key; ?>">
    <button class="Cart" href="Cart.php"><i style='font-size:24px' class='fas'>&#xf217;</i></button>
  </form>
  <?php
  if($Money < $products['price'])
  {
    echo "You don't have inafe many!";
  }
  ?>
  <?php
  $tshirt3 = array([
    'name' => "Girls T-shirt",
    'price' => "5 BGN",
    'image' => "T-shirt3.jpg",
    'link' => "T-shirt3.php",
    'Size' => "Size",
    ]);
    $_SESION['cart'] = $tshirt3;
    array_push($tshirt3, $cart);
    ?>
    <footer>
      <p> ALEXIX FASHION </p>
      <p> Contact </p>
      <p> E-mail: alekspav2004@gmail.com </p>
      <p> Phone number: +359876714631 </p>
      <p> Address: City of Vratsa, Kokiche Street 14 </p>
    </footer>
  </body>
  </html>
