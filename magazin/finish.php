<?php
include 'session.php';
?>
<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <title>ALEXIX</title>
  <style>
  div.scrollmenu {
    background-color: #FFFFCC;
    overflow: auto;
    white-space: nowrap;
  }
  
  div.scrollmenu a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px;
    text-decoration: none;
  }

  div.scrollmenu a:hover {
    background-color: #777;
  }
  </style>
</head>
<body>
  <a class="button button2" href="Cart.php" align="center">Cart</a>
  <a class="button button1" href="login.php" align="center">Login</a>
  <div class="scrollmenu">
    <a href="magazin.php">Home</a>
    <a href="Contact.php">Contact</a>
  </div>

  <header>
    <h1>ALEXIX ONLINE SHOP</h1>
    <div class="logo">
      <img src="Alex.jpg" alt="Alex logo" width="125">
    </div>
    <p></p>

  </header>
  <p></p>
  <center>


    <form action="magazin.php" class="container" method="post">
      <h1>Cart</h1>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      <br><br>
      <label for="text"><b>Country</b></label>
      <input type="text" placeholder="Enter Country" name="country" required>
      <br><br>
      <label for="text"><b>City</b></label>
      <input type="text" placeholder="Enter City " name="city" required>
      <br><br>
      <label for="text"><b>Address</b></label>
      <input type="text" placeholder="Enter Address " name="address" required>
      <br><br>
      <label for="number"><b>Post Code</b></label>
      <input type="number" placeholder="Enter Post Code " name="postCode" required>
      <br><br>
      <button type="submit" class="button3">Finish</button>
    </form>
    <br><br>
    <?php
    $Name = $Country = $City = $Address = $PostsCode = "";

    $_SESSION["Name"]=$_POST["Name"];
    $_SESSION["Address"]=$_POST["Address"];
    $_SESSION["Country"]=$_POST["Country"];
    ?>
  </center>
  <footer>
    <p> ALEXIX FASHION </p>
    <p> Contact </p>
    <p> E-mail: alekspav2004@gmail.com </p>
    <p> Phone number: +359876714631 </p>
    <p> Address: City of Vratsa, Kokiche Street 14 </p>
  </footer>
</body>
</html>
