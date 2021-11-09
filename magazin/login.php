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
  <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: black;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
  padding: 16px;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
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


    <form action="magazin.php" class="container" method="post" style="border:1px solid #ccc">
      <div class="container">
      <h1>Login</h1>
      <p>Please fill in this form to create an account.</p>
    <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <br><br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <br><br>
      <label for="money"><b>Money</b></label>
      <br>
      <input type="number" placeholder="Enter count of money " name="money" min = "0" required>
      <br><br>
      <label>
  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
</label>
  <br><br>
  <div class="clearfix">
 <button type="button" class="cancelbtn">Cancel</button>
 <button type="submit" class="signupbtn">Sign Up</button>
</div>
</div>
    </form>
    <?php
    if(isset($_POST["Email"])){
    $Email =  $Password = $Money = "";
    $_SESION[$Email]=$_POST["Email"];
    $_SESION[$Password]=$_POST["Password"];
    $_SESION[$Money]=$_POST["Money"];
  }
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
