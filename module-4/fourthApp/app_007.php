<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> strtok() </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      # strtok()
      $string_01 = 'This is a great day to work with PHP.';
      $stringToken = strtok($string_01, ' ');
      $breakLine = '<br />';

      while($stringToken !== false){

        echo($stringToken . $breakLine);
        $stringToken = strtok(' ');
      }

    ?>

  </body>

</html>