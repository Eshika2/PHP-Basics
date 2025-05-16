<?php
    /* --------- Array Functions -------- */

    /*
    Functions to work with arrays
    https://www.php.net/manual/en/ref.array.php
    */
    
$fruits = ['apple', 'banana', 'orange'];
print_r($fruits);
echo '<hr>';

// Get array length
echo count($fruits);
echo '<hr>';

// Search array
echo in_array('apple', $fruits);
echo '<hr>';

// Add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi', 'Papaya'); // Adds to the beginning

print_r($fruits);
echo '<hr>';

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);

// Split into chunks of 2
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);
echo '<hr>';

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
echo '<hr>';

$arr4 = [...$arr1, ...$arr2]; // Use Spread
var_dump($arr4);
echo '<hr>';

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
print_r($c);
echo '<hr>';

// Array of keys
$keys = array_keys($c);
print_r($keys);
echo '<hr>';

// Flip keys with values
$flipped = array_flip($c);
var_dump($flipped);
echo '<hr>';

// Create array of numbers with range()
$numbers = range(1, 20);
print_r($numbers);
echo '<hr>';

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
  return "Number ${number} <br>";
}, $numbers);

print_r($newNumbers);
echo '<hr>';

// Filter array
$LessThan10 = array_filter($numbers, function ($number) {
    return $number < 10;
});
print_r($LessThan10);
echo '<hr>';

$lessThan10 = array_filter($numbers, fn($number) => $number < 10);
print_r($lessThan10);
echo '<hr>';

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);
?>