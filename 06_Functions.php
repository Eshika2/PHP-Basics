<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

function registerUser()
{
  echo 'User has been registered!';
}

// Running a function
registerUser();
echo '<hr>';

// Adding params
function registerUser2($username)
{
  echo "User ${username} has been registered!";
}

// Pass in an argument
registerUser2('Brad');
echo '<hr>';

// Returning values
function add($num1, $num2)
{
  return $num1 + $num2;
}

echo add(10,5);
echo '<hr>';

$sum = add(5, 5);
echo 'Sum: ' . $sum;
echo '<hr>';

// Adding default values
function subtract($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo 'Subtraction: ' . subtract();
echo '<hr>';

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo $add(5, 5);
echo '<hr>';

// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;

echo 'Multiplication: ' . $multiply(5, 5);