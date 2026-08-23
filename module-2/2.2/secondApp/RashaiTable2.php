<!DOCTYPE html>
<html lang="en">
<!--
Rashai Robertson
Bellevue University
CSD-440
August 23, 2026
Module 2
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

            <table border="1" width="500">

                <caption>
                    Random Numbers Generated Using PHP
                </caption>

                <thead>
                    <tr>
                        <td colspan="6">
                            Random Numbers 1 - 50
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
                            ?>

                                <td>
                                    <?php
                                        // Generate a random number from 1 to 50
                                        echo(rand(1, 50));
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
