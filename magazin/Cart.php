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
  cart-page{
    margin: 80px auto;
  }
  table{
    width: 100%;
    border-collapse: collapse;
  }
  .car-info{
    display: flex;
    flex-wrap: wrap;
  }
  th{
    text-align: left;
    padding: 5px;
    color: #fff;
    background: #ff523b;
    font-weight: normal;
  }
  td{
    padding: 10px 5px;
  }
  td input{
    width: 40px;
    height: 30px;
    padding: 5px;
  }
  th a{
    color: #ff523b;
    font-size: 12px;
  }
  td img{
    width: 120px;
    height: 150px;
    margin-right: 10px;
  }
  .button3:hover {
    background-color: #FFFFCC;
    color: black;
  }
  .button3 {background-color: white;}

  </style>
</head>
<body>
  <a class="button button2" href="Cart.php" align="center">Cart</a>
  <a class="button button1" href="login.php" align="center">Login</a>
  <ul>
    <li><a class="active" href="magazin.php">Home</a></li>
    <li><a href="Contact.php">Contact</a></li>
  </ul>

  <header>
    <h1>ALEXIX ONLINE SHOP</h1>
    <div class="logo">
      <img src="Alex.jpg" alt="Alex logo" width="125">
    </div>
    <p></p>

  </header>
  <p></p>
  <center>
    <form action="cart.php" method="get">
      <div class="small-container cart-page">
        <table>
          <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
          </tr>
          <tr>
            <td>
              <div class="cart-info">
                <img src="<?php echo $cart['image']; ?>">
                <div>
                  <p>"<?php echo $cart['name']; ?>"</p>
                  <small>Price: <?php echo $cart['price']; ?></small>
                  <br>
                  <a href="">Remove</a>
                </td>
              </tr>
              <td><input type="number" value=" " min="0" max="100"</td>
              <td>"<?php echo $cart['price']; ?>"</td>
            </table>
          </div>
        </form>
          <a href="finish.php"><button type="submit" class="button3">Finish</button></a>

      <footer>
        <p> ALEXIX FASHION </p>
        <p> Contact </p>
        <p> E-mail: alekspav2004@gmail.com </p>
        <p> Phone number: +359876714631 </p>
        <p> Address: City of Vratsa, Kokiche Street 14 </p>
      </footer>
    </body>
    </html>
