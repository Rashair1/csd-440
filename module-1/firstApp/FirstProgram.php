<?php
/*
 * File: FirstProgram.php
 * Author: Rashai
 * Date: August 13, 2026
 * Purpose: Demonstrates basic PHP embedded in a standard HTML document.
 *          The program displays a welcome message and performs a simple calculation.
 */

// PHP Snippet 1: Store values that will be displayed in the page heading.
$pageTitle = "My First PHP Program";
$welcomeMessage = "Welcome to my first PHP program!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 40px;
            color: #222;
        }

        main {
            max-width: 650px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.12);
        }

        h1 {
            margin-top: 0;
        }

        .result {
            padding: 12px;
            background: #eef4ff;
            border-radius: 6px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <main>
        <h1><?php echo $welcomeMessage; ?></h1>
        <p>This page uses standard HTML together with PHP code.</p>

        <?php
        // PHP Snippet 2: Perform a simple calculation and display the result.
        $firstNumber = 10;
        $secondNumber = 5;
        $total = $firstNumber + $secondNumber;

        echo "<p class=\"result\">$firstNumber + $secondNumber = $total</p>";
        ?>

        <p>If you can see the welcome message and the calculation above, the PHP code is functioning correctly.</p>
    </main>
</body>
</html>
