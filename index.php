<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Document</title>
</head>
<body>
 <div>
 <?php
 $first_name = "Pesho";
 $last_name = "Petrov";
 echo '<p>First name: ' . $first_name . '</p>';
 echo 'Last name: ' . $last_name . '<br>'. '<br>';

 $color = "red";
echo "My car is: " . $color . "<br>";
echo "My house is: " . $color . "<br>";
echo "My boat is: " . $color . "<br><br>";

$i = 3;
switch ($i) {
 case 2:
 echo "i is less than 3 but not negative". '<br>';
 break;
 case 3:
 echo "i is 3". '<br>';
default:
 echo "i is not equal to 0, 1, 2 or 3" . '<br>';
}

// $cars = array("Volvo" . '<br>', "BMW" . '<br>', "Toyota");
$cars = [
  'dd' => 'ddfd',
  'dfdf' => 'df',
];
var_dump($cars);
echo "<br>";
print_r($cars);
echo "<br>";

echo "<br>";
echo "<br>";
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}
echo "<br>";
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message() . '<br>';

echo "<br>";

echo(min(0, 150, 30, 20, -8, -200));
echo(max(0, 150, 30, 20, -8, -200));

echo "<br>";

echo (sqrt(64) . '<br>');
echo (sqrt(9) . '<br>');
echo "<br>";
function writeMsg() {
  echo "Hello world!" . '<br>';
}
writeMsg();
echo "<br>";
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Aleks","2000");
familyName("Ivan","1980");
familyName("Kai Jim","1999");
echo "<br>";
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
echo "<br>";

$ages = ["Joe"=> "19", "Ben"=> "22", "Aleks"=>"17"];
$ages['Joe'] = "20";
$ages['Ben'] = "27";
print_r($ages);
echo "<br>";
 ?>
   <a href="aplication.php">My second php</a>
 </div>
</body>
</html>
