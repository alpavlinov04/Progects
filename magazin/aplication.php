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
    $Name = $Email =  $Password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $Name = test_input($_POST["Name"]);
      $Email = test_input($_POST["Email"]);
      $Password = test_input($_POST["Password"]);
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
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <h1>Register form</h1>
      <p>Name: <input type="text" name="Name"></p>
      <p>E-mail: <input type="text" name="Email"></p>
      <p>Password: <input type= "password" name = "Password"></p>
      <br><br>
      <p><a href="login.php"><input type="submit" name="submit" value="Submit"></a></p>
      <br><br>
    </form>
    <p>Or you have acount</p>
    <a class="button button1" href="login.php" align="center">Login</a>
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
