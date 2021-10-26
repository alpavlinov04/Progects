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
    <?php
    $Email =  $Password = $Money = "";
    $_SESION[$Email]=$_POST["Email"];
    $_SESION[$Password]=$_POST["Password"];
    $_SESION[$Money]=$_POST["Money"];
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
