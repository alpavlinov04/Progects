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
  * {box-sizing: border-box;}

  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
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
    float: right;
  }
  .button:hover {
    background-color: white;
    color: black;
  }
  .button {background-color: black;}
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

    <h3>Contact Form</h3>

    <div class="container">
      <form action="magazin.php">
        <label for="fname" required>First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

        <label for="country" required>Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="usa">Bulgaria</option>
          <option value="usa">Spain</option>
          <option value="usa">Italy</option>
          <option value="usa">France</option>
          <option value="usa">Russia</option>
          <option value="usa">Turkey</option>
        </select>

        <label for="subject" required>Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Send">
      </form>
    </div>

  </article>
  <footer>
    <p> ALEXIX FASHION </p>
    <p> Contact </p>
    <p> E-mail: alekspav2004@gmail.com </p>
    <p> Phone number: +359876714631 </p>
    <p> Address: City of Vratsa, Kokiche Street 14 </p>
    <p><a href="https://www.instagram.com/al.pavlinov/">Instagram: al.pavlinov</p></a>
  </footer>
</body>
</html>
