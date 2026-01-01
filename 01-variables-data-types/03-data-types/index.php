<?php
/*
  PHP Data Types:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource - an external resource such as a file.
*/

// String
$heading = 'Data Types in PHP';
$languageType = "PHP is a loosely type language.";

/* 
- var_dump gives:
  - the type of the variable 
  - its length (with a string, an array and an object) 
  - its content
*/
var_dump($heading);
echo '<br >';

// getType must be used with echo before it. It returns just the type.
echo getType($languageType);
echo '<br >';

// Integer
$year = 2026;
var_dump($year);
echo '<br >';

// Float
$pi = 3.142;
var_dump($pi);
echo '<br >';

// Boolean
$isLoaded = true;
var_dump($isLoaded);   // Returns 1 in the HTML
echo '<br >';

// Arrays
$pets = ['cat', 'dog', 'rabbit', 'hamster'];
var_dump($pets);
echo '<br >';

$mixUp = ['Bob', 55, false];
var_dump($mixUp);
print_r($mixUp); // print_r outputs raw text
echo '<br >';

// Objects
$grades = new stdClass();
$grades->Alice = 89;
$grades->Billy = 64;
$grades->Chloe = 76;
$grades->David = 93;
var_dump($grades);
echo '<br >';

// Null
$car = null;
var_dump($car); // nothing is shown in the HTML where this is called
echo '<br >';

// Resource

/* 
- fopen opens a "resource handle" which is basically a pointer to the file
- PHP says here is the handle to the file but I haven’t read anything from it yet.
*/
$file = fopen('test.txt', 'r');
var_dump($file);
echo '<br >';

// Two ways reading the file are:
$contentsDemoOne = fread($file, filesize('test.txt'));
var_dump($contentsDemoOne);
echo '<br >';
// or
$contentsDemoTwo = file_get_contents('test.txt');
var_dump($contentsDemoTwo);
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
      <h1 class="text-3xl font-semibold text-white">Data Types</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">

      <h2 class="text-2xl font-semibold text-red-800 mb-4">
        <?= $heading ?>
      </h2>
      <ul class="list-disc pl-6 space-y-1 text-grey-700">
        <li>
          <?php echo $languageType ?>
        </li>
        <li>
          <?= $year ?>
        </li>
        <li>
          <?php echo $pi ?>
        </li>
        <li>
          <?= $isLoaded ?>
        </li>
        <li>
          <?= $pets[2] ?>
        </li>
        <li>
          <?php echo $mixUp[1] ?>
        </li>
        <li>
          <?php echo $grades->Alice ?>
        </li>
        <li>
          <?= $grades->David ?>
        </li>
        <li>
          <?php echo $car ?>
        </li>
      </ul>
      <p class='p-2 bg-gray-100 my-2'>
        <span class='text-red-500 font-medium pr-2'>print_f: </span>
        <?php print_r($mixUp) ?>
      </p>
      <p class='p-2 bg-gray-100 my-2'>
        <span class='text-red-500 font-medium pr-2'>print_f: </span>
        <?= print_r($grades) ?>
      </p>
      <p class='p-2 bg-gray-100 my-2'>
        <?php echo $file ?>
      </p>
      <p class='p-2 bg-gray-100 my-2'>
        <span class='text-red-500 font-medium pr-2'>fread(): </span>
        <?php echo $contentsDemoOne ?>
      </p>
      <p class='p-2 bg-gray-100 my-2'>
        <span class='text-red-500 font-medium pr-2'>file_get_contents(): </span>
        <?= $contentsDemoTwo ?>
      </p>
    </div>
  </div>
</body>

</html>