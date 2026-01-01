<?php
// This is a comment that is executed on the server.

/*
    This 
    is
    a
    multi
    line
    comment
  */

echo 'Hello PHP World!';
echo '<br >';
print 'Hello from print';
echo '<br >';
echo 'You can ', 'echo multiple ', 'statements ', 'like this, ', ' but cannot', ' do the same', ' with print', ' which will', ' throw a', ' syntax error.';

/* 
    You do not need the ?> at the end if there is just PHP content.
    You do if there is something like HTML in the file.   
    It is the common convention to leave off the ?>
  */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="icon" href="./TheFavicon.png">
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
      <h4 class="text-md font-medium uppercase text-black">
        Variable and Data Types
      </h4>
      <h1 class="text-3xl font-semibold text-white">
        <?= 'PHP Tags, Printing & Comments' ?>
      </h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">

      <h1 class="text-2xl font-semibold text-gray-800 mb-4">
        <?php echo 'Introduction to PHP'; ?>
      </h1>
      <?php
        echo '
          <p class="text-gray-700 leading-relaxed mb-2">
            PHP is a widely used server-side scripting language designed for building dynamic and interactive web applications. It integrates smoothly with HTML and provides developers with a straightforward way to generate content on the server before sending it to the browser. 
          </p>
        '
      ?>

      <h2 class="text-2xl font-semibold text-gray-800 mb-4">
        Key Features of PHP
      </h2>

      <?=
        '<ul class="list-disc pl-6 space-y-1 text-gray-700">
          <li>Server-side execution for generating dynamic content</li>
          <li>Broad support for databases, including MySQL and PostgreSQL</li>
          <li>Extensive standard library and community-driven ecosystem</li>
          <li>Compatibility with major web servers and operating systems</li>
        </ul>'
      ?>

      <h2 class="text-2xl font-semibold text-gray-800 my-4">
        Actions
      </h2>

      <?php
        echo '
          <div class="flex gap-4">
            <button class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-300 transitioning">
              Learn More
            </button>
            <button class="px-4 py-2 bg-gray-900 text-white rounded hover:bg-gray-700 transitioning">
              Start a Project
            </button>
          </div>
        '
      ?>
    </div>
  </div>
</body>

</html>