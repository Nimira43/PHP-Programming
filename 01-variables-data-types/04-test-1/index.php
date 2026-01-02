<?php

// SECTION A — PHP TAGS, PRINTING & COMMENTS
//===========================================================

/*
1. Write the correct PHP opening tag.

<?php

Also see tag in line 1 of this file.
*/

//-----------------------------------------------------------

// 2. What is the difference between echo and print? Give two differences.

echo 'Good morning. ', 'How are you today?';
echo '<br >';
print 'Good morning. How are you today?';
echo '<br >';

// With echo you can output multiple statements. 

/* 
With print you cannot. It will throw a syntax error. For example:

Parse error: syntax error, unexpected token "," in C:\laragon\www\php-sandbox\index.php on line 106

See Outputs in HTML below.
*/

//-----------------------------------------------------------

/*
3. Write a single‑line comment and a multi‑line comment in PHP.

This very block here with the question and this answer is an example of a multi-line comment...
*/

// ...whilst this is an example of a single-line comment.

//------------------------------------------------------------

/*
4. Why is it common to omit the closing ?> tag in pure PHP files?

If a file contains just PHP then you can omit the closing  ?> tag. If a file contains HTML though, you will need to end the PHP block of code with ?> before it.
*/

//============================================================
// SECTION B — VARIABLES
//============================================================

// 5. Write three valid PHP variable names and one invalid one. Explain why the invalid one fails.

$variableName = 'variableName is camelCase';
$variable_name = 'variable_name is snake_case';
$VariableName = 'variableName is PascalCase';

// These are not the same variable. They are all different. 

// See Outputs in HTML below...

/*
Invalid Variable Name:

$1variableInvalid = 'Invalid variable name';

$1variableInvalid is an invalid variable name because it starts with a number and will throw a parse error: syntax error like this:

Parse error: syntax error, unexpected integer "1", expecting variable or "{" or "$" in C:\laragon\www\php-sandbox\index.php on line 38
*/

//-----------------------------------------------------------

// 6. What is the difference between $name and $Name in PHP?

// They are two different variable names - letter casing matters in PHP.

$name = 'lenny';
$Name = 'Lenny';

//----------------------------------------------------------

// 7. Create three variables: $title, $year, and $pi, and echo them inside HTML.

$title = 'Test 1';
$year = 'year';
$pi = 3.142;

// See Outputs in HTML below...

//===========================================================
// SECTION C — DATA TYPES
//===========================================================

/*
8. For each of the following values, state the PHP data type:
  
  a) "Hello"                    String                
  b) 42                         Integer
  c) 3.14                       Float
  d) true                       Boolean 
  e) ['a', 'b', 'c']            Array
  f) new stdClass()             Object
  g) null                       null

*/
//-----------------------------------------------------------

/* 
9. What does var_dump() show that echo does not?

var_dump() shows the data type of the variable and it's content. With strings, arrays and objects it'll also show length or size.

echo simply display the content of the variable.
*/

$differentBetweenVarDumpAndEcho = 'var_dump shows type info, echo shows content of variable.';

var_dump($differentBetweenVarDumpAndEcho);
echo '<br >';
echo $differentBetweenVarDumpAndEcho;
echo '<br >';

//-----------------------------------------------------------

/* 
10. What does gettype() return?

gettype() or getType() will simply return the data type. You must use echo before it...

*/

$getTypeExample = 'getTypeExample';
echo getType($getTypeExample);
echo '<br >';

//===========================================================
//SECTION D — ARRAYS
//===========================================================

// 11. Create an array of three animals and echo the second one.

$animals = ['lion', 'elephant', 'deer'];
echo $animals[1];
echo '<br >';

//----------------------------------------------------------

// 12. What is the difference between var_dump($array) and print_r($array)?

var_dump($animals);
echo '<br >';
print_r($animals);
echo '<br >';

// print_r shows raw text, var_dump doesn't - it gives data type and content. var_dump also gices size or length of the variable when it's an array, object or string.

//==========================================================
// SECTION E — OBJECTS
//==========================================================

// 13. Create a stdClass object called $grades with two properties: Alice and Bob. Give Alice 90 and Bob 72.

$grades = new stdClass();
$grades->Alice = 90;
$grades->Bob = 72;

var_dump($grades);
echo '<br >';

//---------------------------------------------------------

// 14. Echo Bob’s grade.

echo $grades->Bob;
echo '<br >';

//=========================================================
// SECTION F — NULL
//=========================================================

// 15. Create a variable set to null and explain what happens when you echo it.

$nullVariable = null;
var_dump($nullVariable);
echo '<br >';

// null holds literally nothing. It's like a placeholder. For example say you have three variables for firstname, middlename and lastname. Not everyone has a middlename...

$firstName = 'John ';
$middleName = null;
$lastName =  'Doe';

echo $firstName;
echo $middleName;
echo $lastName;
echo '<br >';

//===========================================================
// SECTION G — RESOURCES
//===========================================================

/* 
16. What does fopen() return? Explain in your own words.

fopen is called a resource handler which is a pointer to a file.

*/

$file = fopen('testExample.txt', 'r');
var_dump($file);
echo '<br >';

// resource(3) of type (stream)

//------------------------------------------------------------

/* 
17. Why does echo $file output something like Resource id #3?

Each resource in PHP has an id. Behind the scenes PHP uses resources to function. Not all resources may be shown hence why echo $file return an id of 3. The first two resources are there but hidden.  

*/

//-----------------------------------------------------------

// 18. Write code that reads the contents of test.txt using file_get_contents().

$contentsOfTestFile = file_get_contents('test.txt');
echo $contentsOfTestFile;
echo '<br >';

//============================================================
// SECTION H — THE MIND GRENADE (STRING CONCATENATION)
//============================================================

/* 

19. Create two variables:

  $firstName = "Lenny";
  $lastName = "The Cat";

Then output: Lenny The Cat

You must do it using string concatenation, not interpolation.

*/

$firstName = 'Lenny';
$lastName = 'The Cat';

echo $firstName . ' ' . $lastName;
echo '<br >';

//============================================================
// SECTION I — BONUS
//============================================================

/* 20. Explain why <?= print_r($value) ?> sometimes outputs a 1 at the end.

By default, this function sends its output directly to the browser (or terminal) and then returns a boolean true to indicate it finished successfully, hence 1 = true.

*/

$value = 50;
echo print_r($value); // prints 501

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
      <h4 class="text-xl font-medium uppercase text-black">Variable and Data Types</h4>
      <h1 class="text-3xl font-semibold text-white">Test 1</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">

      <h1 class="text-2xl font-semibold text-gray-800 mb-4">
        Outputs
      </h1>

      <div class='p-2 bg-gray-50'>
        <h2 class="text-lg font-medium text-red-600 mb-2">
          Using echo and print...
        </h2>
        <p class="text-gray-700 leading-relaxed">
          <?php echo 'Good morning. ', 'How are you today?' ?>
        </p>
        <p class="text-gray-700 leading-relaxed mb-4">
          <?php print 'Good morning. How are you today?' ?>
        </p>
      </div>

      <div class='p-2 bg-blue-50'>
        <h2 class="text-lg font-medium text-red-600 mb-2">
          Three valid PHP variable names...
        </h2>
        <ul class="list-disc pl-6 space-y-1 text-gray-700">
          <li><?= $variableName ?></li>
          <li><?= $variable_name ?></li>
          <li><?= $VariableName ?></li>
        </ul>
      </div>

      <div class='p-2 bg-gray-50'>
        <h2 class="text-lg font-medium text-red-600 mb-2">
          Letter casing matters in PHP...
        </h2>
        <p class="text-gray-700 leading-relaxed">
          <?= $name ?>
        </p>
        <p class="text-gray-700 leading-relaxed mb-4">
          <?= $Name ?>
        </p>
      </div>

      <div class='p-2 bg-blue-50'>
        <h2 class="text-lg font-medium text-red-600 mb-2">
          Output $title, $year and $pi...
        </h2>
        <p class="text-gray-700 leading-relaxed">
          <?= $title ?>
        </p>
        <p class="text-gray-700 leading-relaxed">
          <?= $year ?>
        </p>
        <p class="text-gray-700 leading-relaxed mb-4">
          <?= $pi ?>
        </p>
      </div>
    </div>
  </div>
</body>

</html>