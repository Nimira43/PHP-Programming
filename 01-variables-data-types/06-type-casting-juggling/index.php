<?php
$number1 = 5;
$number2 = 10;
$number3 = '20';
var_dump($number3);
echo '<br >';
$number4 = '25';
$number5 = 0;

// Implicit Conversion
$result1 = $number1 + $number2;
var_dump($result1);
echo '<br >';

// int (string to int)
$result2 = $number1 + $number3;
var_dump($result2);
echo '<br >';

// int (strings to int)
$result3 = $number4 + $number3;
var_dump($result3);
echo '<br >';

// Concatenation
// string (ints to string)
$result4 = $number1 . $number2;
var_dump($result4);
echo '<br >';
// string (int to string)
$result5 = $number1 . $number3;
var_dump($result5);
echo '<br >';
$result6 = $number4 . $number3;
var_dump($result6);
echo '<br >';

// Uncaught TypeError: Unsupported operand types: string + int

/*
$fruit = 'orange';
$result7 = $fruit + $number1;
var_dump($result7);
echo '<br >';
*/

$bool1 = true; // true = 1
$bool2 = false; // false = 0
$null = null; // null = 0

// int (bool to int)
$result8 = $number1 + $bool1;
var_dump($result8);
echo '<br >';
$result9 = $number1 + $bool2;
var_dump($result9);
echo '<br >';

// int (null to int)
$result10 = $number1 + $null;
var_dump($result10);
echo '<br >';

// Explicit Conversion
$result11 = (string) $number1;
var_dump($result11);
echo '<br >';
$result12 = (int) $number3;
var_dump($result12);
echo '<br >';
$result13 = (bool) $number1;
var_dump($result13);
echo '<br >';
$result14 = (bool) $number5;
var_dump($result14);
echo '<br >';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="icon" href="../../99-favicon/TheFavicon.png">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    .transitioning {
      transition: all 0.5s ease-in-out;
    }
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP</title>
</head>

<body class="bg-gray-100">
  <header class="bg-orange-500 p-4">
    <div class="container mx-auto">
      <h4 class="text-md font-medium uppercase text-black">Variables and Data Types</h4>
      <h1 class="text-3xl font-semibold text-white">Type Casting & Juggling</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
      <p class="text-gray-700 leading-relaxed mb-2">
        Adding two ints
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        <?= $number1 . ' + ' . $number2 . ' = ' . $result1 ?>
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        Adding an int to a string number
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        <?= $number1 . ' + ' . $number3 . ' = ' . $result2 ?>
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        Adding two string numbers
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        <?= $number4 . ' + ' . $number3 . ' = ' . $result3 ?>
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        Concatenation
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        <?= $number1 . ' . ' . $number2 . ' = ' . $result4 ?>
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        <?= $number1 . ' . ' . $number3 . ' = ' . $result5 ?>
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        <?= $number4 . ' . ' . $number3 . ' = ' . $result6 ?>
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        Adding Booleans
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        <?= $number1 . ' + ' . $bool1 . ' = ' . $result8 ?>
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        <?= $number1 . ' + ' . $bool2 . ' = ' . $result9 ?>
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        Adding Null
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        <?= $number1 . ' + ' . $null . ' = ' . $result10 ?>
      </p>
    </div>
  </div>
</body>

</html>