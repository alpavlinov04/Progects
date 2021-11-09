<?php
include 'session.php';
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>ALEXIX</title>
  <link rel="stylesheet" href="style.css">
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
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
  }

  .price {
    color: grey;
    font-size: 22px;
  }

  .card button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }

  .card button:hover {
    opacity: 0.7;
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
  <article>
    <div class="center">
      <?php foreach ($products as $key => $product): ?>
        <table>
          <tr>
            <div class="card">
              <a target="_blank" href="<?php echo $product['link']; ?>">
                <div class="desc"><img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="250" height="300"></div>
                <a href="<?php echo $product['link']; ?>">"<?php echo $product['name']; ?>"</a>
                <br>
                <a><?php echo $product['price']; ?></a>
                <p><a href="Cart.php"><button>Add to Cart</button></a></p>
                <?php
                if(isset($_POST['carts'])){
                  $carts = $_POST['carts'];
                  $insert_query = "INSERT INTO `carts`('cart_name', 'cart_prize', 'cart_size', 'cart_quantiy', 'cart_image', 'link') VALUES ($carts)";
                  $result = mysqli_query($con, $insert_query);
                }
                 ?>
              </div>
              <div class="clearfix"></div>
            <?php endforeach; ?>
          </div>
        </article>
        <footer>
          <p> ALEXIX FASHION </p>
          <p> Contact </p>
          <p> E-mail: alekspav2004@gmail.com </p>
          <p> Phone number: +359876714631 </p>
          <p> Address: City of Vratsa, Kokiche Street 14 </p>
        </footer>
      </body>
      </html>
