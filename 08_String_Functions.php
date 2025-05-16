<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string);
echo '<hr>';

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');
echo '<hr>';

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');
echo '<hr>';

// Reverse a string
echo strrev($string);
echo '<hr>';

// Convert all characters to lowercase
echo strtolower($string);
echo '<hr>';

// Convert all characters to uppercase
echo strtoupper($string);
echo '<hr>';

// Uppercase the first character of each word
echo ucwords($string);
echo '<hr>';

// String replace
echo str_replace('World', 'Everyone', $string);
echo '<hr>';

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo '<hr>';

echo substr($string, 5);
echo '<hr>';

// Starts with
if (str_starts_with($string, 'Hel')) {
  echo 'YES';
} else {
  echo 'NO';
}
echo str_starts_with($string, 'Hell') ? 'Yes' : 'No';
echo '<hr>';

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}  else {
  echo 'NO';
}
echo '<hr>';

// HTML Entities
$string2 = '<h1>Hello <br> World</h1>';
echo htmlentities($string2);
echo '<hr>';

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Eshika', 'nice guy');
echo '<hr>';

printf('1 + 1 = %f', 1 + 1); // float
echo '<hr>';
