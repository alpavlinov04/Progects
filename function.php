<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
  <div style = "background-color: black;font-size: 160%; text-align: center; font-family: courier;">
  <center>
    <?php
    function printHelloWorld($tag, $color){
      echo "<$tag style = 'color: " . $color . "'>";
      echo "Hello world!";
      echo "</$tag>";
    }
    $tag = 'h1';
    $color = 'green';

    printHelloWorld($tag, $color);
    ?>
  </center>
  <?php
function printText($tag, $color, ){
  echo "<$tag style = 'color: " . $color . "'>";
  echo "Hello my name is Aleks and this is my test page!";
  echo "</$tag>";
}
$tag = 'text';
$color = 'white';
printText($tag, $color);
  ?>


</div>

<?php
$cookieNamed = "Aleks";
$cookieTime = "0.5";
setcookie($cookieNamed, $cookieTime, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookieNamed])) {
   echo "Cookie named '" . $cookieNamed . "' is not set!";
} else {
   echo "Cookie '" . $cookieTime . "' is set!<br>";
   echo "Value is: " . $_COOKIE[$cookieNamed];
}
?>
</body>
</html>
