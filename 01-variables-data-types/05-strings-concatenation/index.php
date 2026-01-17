<?php
$title1 = 'This is ';
$title2 = 'Concatenation';

$firstName = 'John';
$lastName = 'Smith';

$fullName = $firstName . ' ' . $lastName;

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
      <h1 class="text-3xl font-semibold text-white">String Concatenation</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">

      <h1 class="text-2xl font-semibold text-gray-800 mb-4">
        <?= $title1 . $title2 ?>
      </h1>
      <p class="text-gray-700 leading-relaxed mb-2">
        <?= 'Say hello to ' . $fullName ?>
      </p>
      <p class="text-gray-700 leading-relaxed mb-2">
        <?= "Say hello again to $fullName" ?>
      </p>
      <p class="text-gray-700 leading-relaxed mb-4">
        <?= 'Escaping \'characters\'' ?>
      </p>


    </div>
  </div>
</body>

</html>