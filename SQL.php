<!DOCTYPE HTML>
<html lang="bg" lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>Connection</h1>
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'recipies');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    echo "Connected successfully !";
  }
  ?>
  <h2>Insert, Select</h2>
  <?php
  $insert_query = "INSERT INTO `units`(`unit_name`) VALUES ('count')";
  echo'<br>';
  $result = mysqli_query($conn, $insert_query);
  if ($result) {
    echo 'You inserted row in DB successfully!';
  } else {
    echo "Try again!";
  }
  echo'<br>';
  echo'<br>';
  $select_query = 'SELECT * FROM `products` WHERE 1';
  $result = mysqli_query($conn, $select_query);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
      echo '<br>' . "Product id, product name and product image are: " . '<br>';
      var_dump($row);
      echo '<br>';
    }
  }
  echo'<br>';
  echo'<br>';
  $select_query = 'SELECT * FROM recipes WHERE date_deleted IS NULL';
  $results = mysqli_query($conn, $select_query);
  if (mysqli_num_rows($results) > 0) {
    while($row = mysqli_fetch_assoc($results)){
      echo '<br>' . "Recipie id, recipie name, recipie descr, prepair time, meal type id, data added, date date_modify and date delete are: " . '<br>';
      var_dump($row);
    }
  }
  echo'<br>';
  echo'<br>';
  ?>
  <h3>Form</h3>
  <form method="post">
    <p>Enter unit name</p>
    <input type="text" name="unit_name">
    <input type="submit" name="submit" value="save">
  </form>
  <?php
  if( isset($_POST['unit_name'])){
    $unit_name = $_POST['unit_name'];
    $insert_query = "INSERT INTO `units`(`unit_name`) VALUES ('$unit_name')";
    $result = mysqli_query($conn, $insert_query);
  }
  ?>

  <form method="post">
    <p>Enter product name</p>
    <input type="text" name="product_name">
    <input type="submit" name="submit" value="save">
  </form>

  <?php
  if(isset($_POST['product_name'])){
    $product_name = $_POST['product_name'];
    $insert_query = "INSERT INTO `products`(`product_name`) VALUES ('$product_name')";
    $result = mysqli_query($conn, $insert_query);
  }
  ?>

  <h4>Delete, Update</h4>
  <?php
  echo'<br>';
  $delete_query = 'DELETE FROM `products`  WHERE `product_name` = "m"';
  $results = mysqli_query($conn, $delete_query);
  if ($results) {
    echo 'You delete row in DB successfully!';
  } else {
    echo "Try again!";
  }

  echo'<br>';
  echo'<br>';
  ?>

  <?php
  $update_query = "UPDATE `products` SET `product_name`='Yoghurt' WHERE `product_name`='yoghurt'";
  $results = mysqli_query($conn, $update_query);
  if ($results) {
    echo 'You update row in DB successfully!';
  } else {
    echo "Try again!";
  }
  echo'<br>';
  echo'<br>';
  ?>
  <?php
  $update_query = "UPDATE `products` SET `product_name`='Eggs' WHERE `product_name`='eggs'";
  $results = mysqli_query($conn, $update_query);
  if ($results) {
    echo 'You update row in DB successfully!';
  } else {
    echo "Try again!";
  }
  echo'<br>';
  echo'<br>';
  ?>
  <?php
  $update_query = "UPDATE `products` SET `product_name`='Cucumbers' WHERE `product_name`='cucumbers'";
  $results = mysqli_query($conn, $update_query);
  if ($results) {
    echo 'You update row in DB successfully!';
  } else {
    echo "Try again!";
  }
  echo'<br>';
  echo'<br>';
  ?>
</body>
</html>
