<?php
include 'session.php';
 ?>
<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <title>ALEXIX</title>
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
  <center>
    <?php
    $Email =  $Password = $Money ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $Email = test_input($_POST["Email"]);
      $Password = test_input($_POST["Password"]);
      $Money = test_input($_POST["Money"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $_SESION[$Email]=$_POST["Email"];
    $_SESION[$Password]=$_POST["Password"];
    $_SESION[$Money]=$_POST["Money"];
    ?>
  <form action="magazin.php" class="container" method="post">
    <h1>Login</h1>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <br><br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br><br>
    <label for="money"><b>Money</b></label>
    <input type="number" placeholder="Enter count of money " name="money" required>
    <br><br>
    <button type="submit" class="button3">Login</button>
  </form>
  </center>
  <footer>
    <p> ALEXIX FASHION </p>
    <p> Contact </p>
    <p> E-mail: alekspav2004@gmail.com </p>
    <p> Phone number: 0876714631 </p>
    <p> Address: city of Vratsa, Kokiche Street 14 </p>
  </footer>
</body>
</html>
