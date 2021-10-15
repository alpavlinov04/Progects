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
$Name =   $Country = $City = $Address = $PostsCode = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $Name = test_input($_POST["Name"]);
  $Country = test_input($_POST["Country"]);
  $City = test_input($_POST["City"]);
  $Address = test_input($_POST["Address"]);
  $PostsCode = test_input($_POST["PostsCode"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
session_set_cookie_params("1800");
session_start();
$_SESION[$Name]=$_POST["Name"];
$_SESION[$Address]=$_POST["Address"];
$_SESION[$Country]=$_POST["Country"];
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <h1>Cart</h1>
  <p>Name: <input type="name" name="Name"></p>
  <p>Country: <input type= "text" name = "Country"></p>
  <p>City: <input type="text" name="City"></p>
  <p>Address: <input type="text" name="Address"></p>
  <p>Post Code: <input type="number" name="Post Code"></p>
  <br><br>
  <p><input type="submit" name="submit" value="Submit" href="magazin.php"></p>
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
