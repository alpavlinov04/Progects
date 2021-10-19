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
    width: 80px;
    height: 80px;
    margin-right: 10px;
  }
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
    <?php
    $Name = $Country = $City = $Address = $PostsCode = "";

    $_SESION["Name"]=$_POST["Name"];
    $_SESION["Address"]=$_POST["Address"];
    $_SESION["Country"]=$_POST["Country"];
    ?>

    <form action="magazin.php" class="container" method="post">
      <h1>Cart</h1>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      <br><br>
      <label for="text"><b>Country</b></label>
      <input type="text" placeholder="Enter Country" name="country" required>
      <br><br>
      <label for="text"><b>City</b></label>
      <input type="text" placeholder="Enter City " name="city" required>
      <br><br>
      <label for="text"><b>Address</b></label>
      <input type="text" placeholder="Enter Address " name="address" required>
      <br><br>
      <label for="number"><b>Post Code</b></label>
      <input type="number" placeholder="Enter Post Code " name="postCode" required>
      <br><br>
      <button type="submit" class="button3">Login</button>
    </form>
    <br>
    <?php foreach ($products as $key => $product): ?>
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
              <img src="<?php print_r($_SESION['Cart'])['image']; ?>">
              <div>
                <p>"<?php print_r($_SESION['Cart'])['name']; ?>"</p>
                <small>Price: <?php print_r($_SESION['Cart'])['price']; ?></small>
                <br>
                <a href="">Remove</a>
              </td>
              </tr>
              <td><input type="number" value="1"</td>
              <td>"<?php print_r($_SESION['Cart'])['price']; ?>"</td>
            </table>
          </div>
        <?php endforeach; ?>
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
