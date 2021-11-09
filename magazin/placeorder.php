<?php
include 'session.php';
?>
<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
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
body {font-family: Arial, Helvetica, sans-serif;}

form {
  border: 3px solid #f1f1f1;
  font-family: Arial;
}

.container {
  padding: 20px;
  background-color: #f1f1f1;
}

input[type=text], input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=checkbox] {
  margin-top: 16px;
}

input[type=submit] {
  background-color:black;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
main .placeorder h1 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
}
main .placeorder p {
	text-align: center;
}
</style>
    <title>ALEXIX</title>
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
    <div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed</h1>
    <p>Thank you for ordering with us, we'll contact you by email with your order details. Sorry if your order will be late. Because of covid-19 the orders sometimes is lating. Please accept our apologies!</p>
</div>
    <form action="magazin.php">
  <div class="container">
    <h2>Subscribe to our Newsletter</h2>
    <p>Lorem ipsum text about why you should subscribe to our newsletter blabla. Lorem ipsum text about why you should subscribe to our newsletter blabla.</p>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" >
    <input type="text" placeholder="Email address" name="mail" >
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  </div>

  <div class="container">
    <input type="submit" value="Subscribe">
  </div>
</form>
<footer>
  <p> ALEXIX FASHION </p>
  <p> Contact </p>
  <p> E-mail: alekspav2004@gmail.com </p>
  <p> Phone number: +359876714631 </p>
  <p> Address: City of Vratsa, Kokiche Street 14 </p>
</footer>
</body>
</html>
