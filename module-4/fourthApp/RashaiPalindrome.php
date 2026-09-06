<!DOCTYPE html>
<html lang='en'>

<!--
Rashai Robertson
Bellevue University
CSD-440
August 30, 2026
Module 4
-->

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Test</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

<?php

    # Function used to test whether a string is a palindrome
    function palindromeTest($string){

        $reversedString = strrev($string);

        if($string == $reversedString){
            return 'Palindrome';
        }
        else{
            return 'Not a Palindrome';
        }
    }

    # Break line used to format the output
    $breakLine = '<br />';

    # Six strings to test
    $string_01 = 'racecar';
    $string_02 = 'level';
    $string_03 = 'madam';
    $string_04 = 'computer';
    $string_05 = 'school';
    $string_06 = 'program';

    # Test string 1
    echo('Original String: ' . $string_01 . $breakLine);
    echo('Reversed String: ' . strrev($string_01) . $breakLine);
    echo('Result: ' . palindromeTest($string_01) . $breakLine . $breakLine);

    # Test string 2
    echo('Original String: ' . $string_02 . $breakLine);
    echo('Reversed String: ' . strrev($string_02) . $breakLine);
    echo('Result: ' . palindromeTest($string_02) . $breakLine . $breakLine);

    # Test string 3
    echo('Original String: ' . $string_03 . $breakLine);
    echo('Reversed String: ' . strrev($string_03) . $breakLine);
    echo('Result: ' . palindromeTest($string_03) . $breakLine . $breakLine);

    # Test string 4
    echo('Original String: ' . $string_04 . $breakLine);
    echo('Reversed String: ' . strrev($string_04) . $breakLine);
    echo('Result: ' . palindromeTest($string_04) . $breakLine . $breakLine);

    # Test string 5
    echo('Original String: ' . $string_05 . $breakLine);
    echo('Reversed String: ' . strrev($string_05) . $breakLine);
    echo('Result: ' . palindromeTest($string_05) . $breakLine . $breakLine);

    # Test string 6
    echo('Original String: ' . $string_06 . $breakLine);
    echo('Reversed String: ' . strrev($string_06) . $breakLine);
    echo('Result: ' . palindromeTest($string_06) . $breakLine . $breakLine);

?>

</body>

</html>