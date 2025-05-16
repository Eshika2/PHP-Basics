<?php
    /* ------- Outputting Content ------- */

    // Echo - Output strings, numbers, html, etc
    echo 'Hello';
    echo 123;
    echo '<h1>Hello</h1>';

    // print - Similar to echo, but a bit slower
    print 'print';
    echo '<br>';
    
    // print_r - Gives a bit more info. Can be used to print arrays
    print_r('print_r');
    echo '<br>';

    print_r([1, 2, 3]);
    echo '<br>';

    // var_dump - Even more info like data type and length
    var_dump('var_dump');
    echo '<br>';

    var_dump([1, 2, 3]);
    echo '<br>';

    // Escaping characters with a backslash
    echo "Is your name O\'reilly?";

    /* ------------ Comments ------------ */

    // This is a single line comment

    /*
        * This is a multi-line comment
        *
        * It can be used to comment out a block of code
        */

    // If there is more content after the PHP, such as this file, you do need the ending tag. Otherwise you do not.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>
<body>
    <h1><?php echo 'Eshika';?></h1>
    <h2><?= 'Dissanayake'?></h2>
</body>
</html>