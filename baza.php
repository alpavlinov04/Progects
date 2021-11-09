<!DOCTYPE HTML>
<html lang="bg" lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'recipies');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    echo "Connected successfully !";
  }
  ?>
  <form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label">Enter product name</label>
      <input type="text" name="product_name" class="form-control">
    </div>
    <div class="form-group">
      <label for="product-image">Product image</label>
      <input type="file" id="product-image" name="product_image">
    </div>
    <button type="submit" class="btn btn-default">Save</button>
  </form>
  <?php
  if(isset($_POST['but_upload'])){

  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
        $insert_query = "Insert into products(product_name) values('".$name."')";
        mysqli_query($con,$query);
     }

  }

}


  ?>
</body>
</html>
