<!DOCTYPE HTML>
<html lang="bg" lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
  <style>
  body {
    font-family: 'Alegreya SC';font-size: 22px;
}
  </style>
</head>
<body>
  <h1>Connection</h1>

  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'recipies');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    echo "Connected successfully!";
  }
  session_set_cookie_params("18000");
  session_start();
  ?>

  <h2>Insert into recipies</h2>
  <form method="post">
    <p>Enter recipie name</p>
    <input type="text" name="recipie_name" required>
    <p>Enter recipie descr</p>
    <input type="text" name="recipie_descr" required>
    <p>Enter prep time</p>
    <input type="time" name="prep_time" required>
    <p>Enter date added</p>
    <input type="date" name="date_added" required>
    <p>Enter date modified</p>
    <input type="date" name="date_modified" required>
    <br><br>
    <input type="submit" name="submit" value="Insert">
  </form>
  <?php
  if( isset($_POST)){
    $recipie_name = $_POST['recipie_name'];
    $recipie_descr = $_POST['recipie_descr'];
    $prep_time = $_POST['prep_time'];
    $date_added = $_POST['date_added'];
    $date_modified = $_POST['date_modified'];
    $insert_query = "INSERT INTO `recipes`(`recipie_name`, `recipie_descr`, `prep_time`, `meal_type_id`, `date_added`, `date_modified`)
    VALUES ('$recipie_name','$recipie_descr','$prep_time', 1,'$date_added','$date_modified')";
    $result = mysqli_query($conn, $insert_query);
    if ($result) {
      echo 'You inserted row in DB successfully!';
    } else {
      echo "Try again!";
    }
  }
  echo '<br>';
  ?>
</body>
</html>
