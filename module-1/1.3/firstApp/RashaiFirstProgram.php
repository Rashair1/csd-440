<!DOCTYPE html>
<html lang="en">
<!--
Rashai Robertson
Bellevue University
CSD-440
August 16, 2026
Module 1
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Math</title>
    <link rel="stylesheet" href="main.css">

</head>
<body>
    <main>
        
        <?php
        // PHP snippet one
        // Welcomes users
        $welcomeMessage = "Welcome to my first PHP program!";
        ?>

        <!-- Calling PHP function to welcome users -->
        <h1><?php echo $welcomeMessage; ?></h1>
        <p>This page uses standard HTML together with PHP code.</p>

        
        <?php
        // PHP snippet two
        //It performs a simple math equation and displays the result.
        $firstNumber = 10;
        $secondNumber = 5;
        $total = $firstNumber + $secondNumber;


        // Calling PHP function to display calculation
        echo "<p class=\"result\">$firstNumber + $secondNumber = $total</p>";
        ?>

        <p>Testing out my PHP code to see if it's functioning correctly.</p>
    </main>
</body>
</html>
