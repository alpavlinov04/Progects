<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <title>ALEXIX</title>
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
    session_set_cookie_params("1800");
    session_start();
    $_SESION[$Email]=$_POST["Email"];
    $_SESION[$Password]=$_POST["Password"];
    $_SESION[$Money]=$_POST["Money"];
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <h1>Login</h1>
      <p>E-mail: <input type="email" name="Email"></p>
      <p>Password: <input type= "password" name = "Password"></p>
      <p>Your count of money: <input type="number" name="Money"></p>
      <br><br>
      <p href="magazin.php"><input type="submit" name="submit" value="Submit" href="magazin.php"></p>
      <br><br>
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
