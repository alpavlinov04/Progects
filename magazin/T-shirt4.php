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
    $Size = test_inaut($_POST["Size"]);
  }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
   ?>
  <a class="button button2" href="" align="center">Cart</a>
  <a class="button button1" href="aplication.php" align="center">Register form</a>
  <ul>
    <li><a class="active" href="magazin.php">Home</a></li>
    <li><a href="Contact.php">Contact</a></li>
  </ul>

  <header>
    <h1>ALEXIX ONLINE SHOP</h1>
    <img src="Alex.jpg" alt="Alex logo" width="100" height="100">
    <p></p>

  </header>
  <p></p>
  <h2>Boy's T-shirt</h2>
  <center>
    <img src="T-shirt4.jpg" alt  = "Boy's T-shirt" width = "auto" height="auto">
  </center>
  <p></p>
  <p>Very good boy's t-shirt. With print. 100% cotton.</p>
  <p>Price BGN 5.</p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Size:
    <input type="checkbox" name="" value="">S
    <input type="checkbox" name="M" value="M">M
    <input type="checkbox" name="L" value="L">L
    <input type="checkbox" name="XL" value="XL">XL
  </form>
  <form method="post" action="...addCart.php">
    <input type="number" class="peaces" placeholder="Pcs" min="0" max="100">
    <input type="hidden" name="custId" value="<?php echo $key; ?>">
    <button class="Cart"><i style='font-size:24px' class='fas'>&#xf217;</i></button>
  </form>
  <footer>
    <p> ALEXIX FASHION </p>
    <p> Contact </p>
    <p> E-mail: alekspav2004@gmail.com </p>
    <p> Phone number: 0876714631 </p>
    <p> Address: city of Vratsa, Kokiche Street 14 </p>
  </footer>
</body>
</html>