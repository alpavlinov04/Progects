<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <style>
  body {background-color: white;}
  h1 {color: black; text-align: center; font-family: cursive; font-size: 160%;}
  p {color: black; text-align: left;; font-family: cursive; font-size: 100%; text-align: center;}
  a{
    color: black; text-align: center; font-family: cursive; font-size: 160%;
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
  article {
    -webkit-flex: 4;
    -ms-flex: 4;
    flex: 4;
    background-color: white;
    padding: 10px;
  }

  </style>
  <meta charset="UTF-8">
  <title>ALEXIX</title>
</head>
<body>
  <header>
    <img src="Alex.jpg" alt="Alex logo" width="200" height="200">
    <h1>ALEXIX ONLAIN SHOP</h1>
    <p></p>
    <p align="right">
      <a class="button button1" href="aplication.php">Register form</a>
    </p>
  </header>
  <p></p>
  <article>
    <img src="Jacket.jpg" alt="Men's winter jacket" width="250" height="300">
    <a href="jaket.php">Men's winter jacket</a>
    <p></p>
    <img src = "Jacket2.jpg" alt = "Female winter jacket" width = "250" height="300">
    <a href="jaket2.php">Female's winter jacket</a>
    <p></p>
    <img src="T-shirt.jpg" alt="Men's T-shirt" width = "250" height="300">
    <a href="T-shirt.php"> Men's T-shirt</a>
    <p></p>
    <img src="T-shirt2.jpg" alt  = "Female T-shirt" width = "250" height="300">
    <a href="T-shirt2.php">Female T-shirt</a>
    <p></p>
    <img src="T-shirt3.jpg" alt  = "Girl's T-shirt" width = "250" height="300">
    <a href="T-shirt3.php">Girl's T-shirt</a>
    <p></p>
  </article>
  <footer>
    <p> ALEXIX FASHION </p>
    <p> Contack </p>
    <p> E-mail: alekspav2004@gmail.com </p>
    <p> Phone number: 0876714631 </p>
    <p> Address: city of Vratsa, Kokiche Street 14 </p>
  </footer>
</body>
</html>
