<!DOCTYPE html>
<html lang='en'>
    <!--
      Rashai Robertson
      Professor Darrell Payne
      Bellevue University
      CSD 440
      Module 10
     -->
  <head>

    <title> Rashai JSON CGI </title>
    <meta charset='utf-8'>

    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 40px;
      }

      .output {
        width: 600px;
        padding: 20px;
        border: 1px solid #000;
        background-color: #f4f4f4;
      }

      .error {
        width: 600px;
        padding: 20px;
        border: 1px solid #000;
        background-color: #f4f4f4;
      }

      pre {
        white-space: pre-wrap;
        word-wrap: break-word;
      }
    </style>

  </head>

  <body>

    <?php
      # This program receives the form data, validates it, and stores it in an associative array.

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $firstName = trim($_POST['firstName'] ?? '');
        $lastName = trim($_POST['lastName'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $city = trim($_POST['city'] ?? '');
        $state = trim($_POST['state'] ?? '');
        $major = trim($_POST['major'] ?? '');
        $classStanding = trim($_POST['classStanding'] ?? '');
        $favoriteProgrammingLanguage = trim($_POST['favoriteProgrammingLanguage'] ?? '');

        # Verify that all eight fields contain data and that the email is valid.
        if ($firstName != '' && $lastName != '' && $email != '' && $city != '' &&
            $state != '' && $major != '' && $classStanding != '' &&
            $favoriteProgrammingLanguage != '' && filter_var($email, FILTER_VALIDATE_EMAIL)) {

          # Store the submitted values in a PHP associative array.
          $studentData = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'city' => $city,
            'state' => $state,
            'major' => $major,
            'classStanding' => $classStanding,
            'favoriteProgrammingLanguage' => $favoriteProgrammingLanguage
          );

          # The json_encode() function is used to encode a value to JSON format.
          $jsonData = json_encode($studentData, JSON_PRETTY_PRINT);

          if ($jsonData !== false) {

            echo '<h1>JSON Output</h1>';
            echo '<div class="output">';
            echo '<pre>' . htmlspecialchars($jsonData) . '</pre>';
            echo '</div>';

          } else {

            echo '<h1>Error</h1>';
            echo '<div class="error">Unable to encode the submitted data into JSON format.</div>';
          }

        } else {

          echo '<h1>Error</h1>';
          echo '<div class="error">Please complete all eight fields and enter a valid email address.</div>';
        }

      } else {

        echo '<h1>Error</h1>';
        echo '<div class="error">The form was not submitted correctly.</div>';
      }

    ?>

    <p><a href='Rashai JSON.php'>Return to Form</a></p>

  </body>

</html>
