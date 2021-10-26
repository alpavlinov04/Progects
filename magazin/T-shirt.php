<?php
include 'session.php';
?>
<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <title>ALEXIX</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .checked {
    color: orange;
  }
  * {box-sizing: border-box}
  body {font-family: Verdana, sans-serif; margin:0}
  .mySlides {display: none}
  img {vertical-align: middle;}

  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }


  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }


  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }


  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active, .dot:hover {
    background-color: #717171;
  }


  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
  }
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
  <?php
  $Size = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $Size = test_inaut($_POST["Size"]);
  }
  $_SESSION['Size'] = $_POST['Size'];
  ?>
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
  <h2>Men's T-shirt</h2>
  <center>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="T-shirt.jpg" style="width:auto">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="menT-shirt2.jpg" style="width:40%">

      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="menT-shirt3.jpg" style="width:40%">
      </div>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
  </script>
</center>
<p></p>
<p>Very good men's t-shirt. With print 'A.V.E.R.I'. 100% cotton.</p>
<p style="text-align:left">8 лв.</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Size:
  <input type="checkbox" name="S" value="">S
  <input type="checkbox" name="M" value="M">M
  <input type="checkbox" name="L" value="L">L
  <input type="checkbox" name="XL" value="XL">XL
  <input type="checkbox" name="XXL" value="XL">XXL
</form>
<form method="post" action="Cart.php">
  <input type="number" class="peaces"  min="0" max="100">
  <input type="hidden" name="custId" value="<?php echo $key; ?>">
  <button class="Cart" href="Cart.php"><i style='font-size:24px' class='fas'>&#xf217;</i></button>
</form>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<?php
$tshirt = array(
  'name' => "Mens T-shirt",
  'price' => "8 BGN",
  'image' => "T-shirt.jpg",
  'link' => "T-shirt.php",
  'Size' => "Size",
);
$_SESSION['cart'] = $tshirt;
array_push($tshirt, $cart);
?>
<footer>
  <p> ALEXIX FASHION </p>
  <p> Contact </p>
  <p> E-mail: alekspav2004@gmail.com </p>
  <p> Phone number: +359876714631 </p>
  <p> Address: City of Vratsa, Kokiche Street 14 </p>
</footer>
</body>
</html>
