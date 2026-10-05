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

    <title> Rashai JSON </title>
    <meta charset='utf-8'>

    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 40px;
      }

      .form-container {
        width: 500px;
        padding: 20px;
        border: 1px solid #000;
      }

      label {
        display: inline-block;
        width: 190px;
        margin-bottom: 12px;
      }

      input, select {
        width: 250px;
        padding: 5px;
      }

      input[type='submit'], input[type='reset'] {
        width: auto;
        margin-top: 10px;
        margin-right: 10px;
        padding: 8px 15px;
      }
    </style>

  </head>

  <body>

    <h1>Student Information Form</h1>

    <p>Enter the information below and submit the form to display the data in JSON format.</p>

    <div class='form-container'>

      <!-- The form sends the eight fields to the PHP CGI program using POST. -->
      <form action='Rashai JSON CGI.php' method='post'>

        <label for='firstName'>First Name:</label>
        <input type='text' id='firstName' name='firstName' required><br>

        <label for='lastName'>Last Name:</label>
        <input type='text' id='lastName' name='lastName' required><br>

        <label for='email'>Email Address:</label>
        <input type='email' id='email' name='email' required><br>

        <label for='city'>City:</label>
        <input type='text' id='city' name='city' required><br>

        <label for='state'>State:</label>
        <input type='text' id='state' name='state' required><br>

        <label for='major'>Major:</label>
        <input type='text' id='major' name='major' required><br>

        <label for='classStanding'>Class Standing:</label>
        <select id='classStanding' name='classStanding' required>
          <option value=''>Select one</option>
          <option value='Freshman'>Freshman</option>
          <option value='Sophomore'>Sophomore</option>
          <option value='Junior'>Junior</option>
          <option value='Senior'>Senior</option>
        </select><br>

        <label for='favoriteProgrammingLanguage'>Favorite Programming Language:</label>
        <input type='text' id='favoriteProgrammingLanguage' name='favoriteProgrammingLanguage' required><br>

        <input type='submit' value='Submit'>
        <input type='reset' value='Reset'>

      </form>

    </div>

  </body>

</html>
