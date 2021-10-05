<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div>
    <h1>Foreach</h1>
    <?php
    $arr = [
      'John Smith' => '+1-555-8976',
      'Lisa Smith' => '+1-555-1234',
      'Sam Doe' => '+1-555-5030',
    ];
    print_r($arr);
    echo '<br>';
    $arrColor = [
      'Favourite color' => 'green',
      'Favourite col' => 'orange',
      'Favourite house' => 'aleks',
    ];
    print_r($arrColor);
    echo '<br><br>';

    $num = 1;
    $key = [
      "+1-555-5030",
      '+1-555-1234',
    ];
    $number = [
      "+1-555-8976",
    ];
    foreach($key as $value){
      echo "Phone number No " . $num++ ." is " . $value . '<br>';
    }
    foreach($number as $phone){
      echo "Phone number No " . $num ." is " . $phone . '<br>';
      $num++;
    }
    ?>
    <h2>While</h2>
    <?php
    $x = 1;
    while($x < 6){
      echo 'The number is ' . $x . '<br>';
      $x++;
    }
    echo '<br>';
    $y = 12;
    while($y > 6){
      echo 'The number is ' . $y . '<br>';
      $y--;
    }
    for ($x = 1; $x < 11; $x++) {
      echo "<p>The number is: $x </p>";
    }

    for ($x = 1; $x <= 10; $x++) {
echo ' <p> No ' . $x . ' : ';
for ($y = 1; $y <= 5; $y++) {
echo $y . ' , ';
}
echo ' </p> ';
}
    ?>
    <center>
    <h3>Arr Form</h3>
    <?php
    $arrForm = [
      'name' => 'Ivan Ivanov',
      'family' => [
        'wife' => 'Petq Ivanova',
        'son' => 'Aleks Ivanov',
        'daugther' => 'Viktoria Ivanova',
        'son_girlfriend' => 'Maraq Petrova',
        'daugther_boyfriend' => 'Niki Aleksandrov',
      ],
      'address' => [
        'city' => 'Vratsa',
        'street' => 'Demokracia',
        'number' => 33,
      ],
      'work' => [
        'dads_work' => 'Botevgrad_IMI',
        'moms_work' => 'Hospital',
      ],
    ];
    print_r($arrForm);
     ?>
   </center>
  </div>
</body>
</html>
