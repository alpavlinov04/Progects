<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<center>
<?php
$Name = $Email = $gender = $comment = $Website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $Name = test_input($_POST["Name"]);
  $Email = test_input($_POST["Email"]);
  $Website = test_input($_POST["Website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
session_set_cookie_params('1200');
session_start();
$_SESSION[$Name] = $_POST["Name"];
$_SESSION[$Email] = $_POST["Email"];
echo $_POST["Name"];
echo "<br>";
echo $_POST["Email"];

?>

<h2>PHP Form Validation</h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  Name: <input type="text" name="Name">
  <br><br>
  E-mail: <input type="text" name="Email">
  <br><br>
  Website: <input type="text" name="Website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <br><br>
  <a href="index.php">My first php</a>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $Name;
echo "<br>";
echo $Email;
echo "<br>";
echo $Website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo "<br>";
?>
</center>
</body>
</html>
