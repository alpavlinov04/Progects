<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
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
  Name: <input type="text" name="Name">
  <br><br>
  E-mail: <input type="text" name="Email">
  <br><br>
  Password: <input type= "password" name = "Password">
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <br><br>
  <a href="magazin.php">Magazin</a>
</form>

</center>
</body>
</html>
