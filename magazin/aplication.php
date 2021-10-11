<?php
session_start();
?>
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
  header {
    background-color: #FFFFCC;
    padding: 5px;
    text-align: center;
    font-size: 20px;
    color: black;
  }
  footer {
    background-color: #FFFFCC;
    padding: 10px;
    text-align: center;
    color: white;
  }
  .button {
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .button1:hover {
    background-color: #800000;
    color: white;
  }
  .button1 {background-color: #FF3300;}
  </style>
  <meta charset="UTF-8">
  <title>ALEXIX</title>
</head>
<body>
  <header>
    <img src="Alex.jpg" alt="Alex logo" width="200" height="200">
    <h1>ALEXIX ONLAIN SHOP</h1>
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

    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <h1>Register form</h1>
      <p>Name: <input type="text" name="Name"></p>
      <p>E-mail: <input type="text" name="Email"></p>
      <p>Password: <input type= "password" name = "Password"></p>
      <br><br>
      <p><input type="submit" name="submit" value="Submit"></p>
      <br><br>
      <a class="button button1" href="magazin.php">Go to magazin</a>
    </form>

  </center>
  <footer>
    <p> ALEXIX FASHION </p>
    <p> Contack </p>
    <p> E-mail: alekspav2004@gmail.com </p>
    <p> Phone number: 0876714631 </p>
    <p> Address: city of Vratsa, Kokiche Street 14 </p>
  </footer>
</body>
</html>
