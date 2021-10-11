<!DOCTYPE HTML>
<html>
<head>
  <style>
h1{
  {color: black; text-align: center; font-family: cursive; font-size: 160%;}
}
p{
  color: black; text-align: right; font-family: cursive; font-size: 120%; text-align: center;
}
  </style>
  <meta charset="UTF-8">
  <title>ALEXIX</title>
</head>
<body>
  <center>
  <img src="Alex.jpg" alt="Alex logo" width="200" height="200">
  <h1>ALEXIX ONLAIN SHOP</h1>
  </center>
  <p></p>
<center>
  <?php
  $Name = $Email =  $Password = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $Name = test_input($_POST["Name"]);
    $Email = test_input($_POST["Email"]);
    $Password = test_input($_POST["comment"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <h1>Register form</h1>
  <p>Name: <input type="text" name="Name"></p>
  <p>E-mail: <input type="text" name="Email"></p>
  <p>Password: <input type= "password" name = "Password"></p>
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <br><br>
  <a href="magazin.php">Magazin</a>
</form>

</center>
</body>
</html>
