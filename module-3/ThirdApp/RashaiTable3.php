<!DOCTYPE html>
<html lang="en">

<!--
Rashai Robertson
Bellevue University
CSD-440
August 23, 2026
Module 3
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop Table</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <main>

        <h2>Random Number Table</h2>

        <?php
            // Load the external function file
            require("Function.php");
        ?>

        <table border="1" width="500">

            <caption>
                Random Number Sums Generated Using PHP
            </caption>

            <thead>
                <tr>
                    <td colspan="6">
                        Sum of Two Random Numbers
                    </td>
                </tr>
            </thead>

            <tbody>

                <?php
                    // Outer loop creates the table rows
                    for ($row = 0; $row < 6; ++$row) {
                ?>

                    <tr>

                        <?php
                            // Inner loop creates the columns
                            for ($column = 0; $column < 6; ++$column) {

                                // Generate two random numbers
                                $number1 = rand(1, 50);
                                $number2 = rand(1, 50);
                        ?>

                            <td>
                                <?php
                                    // Pass both random numbers to the function
                                    echo addNumbers($number1, $number2);
                                ?>
                            </td>

                        <?php
                            }
                        ?>

                    </tr>

                <?php
                    }
                ?>

            </tbody>

        </table>

    </main>

</body>

</html>