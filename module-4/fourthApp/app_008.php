<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> substr_replace () </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      # substr_replace ()
      $string_01 = 'This is a great day to work with PHP.';
      $breakLine = '<br />';

      echo($string_01 . $breakLine . $breakLine);

      $replacedString = substr_replace($string_01, 'week', 16, 3);

      echo($replacedString . $breakLine . $breakLine);

      $replacedString = substr_replace($string_01, 'month', 16, 3);

      echo($replacedString . $breakLine . $breakLine);

    ?>

  </body>

</html>