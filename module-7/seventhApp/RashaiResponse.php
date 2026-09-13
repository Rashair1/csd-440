<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
  'http://www.w3.org/TR/1999/REC-html-19991224/strict.dtd'>

  <!--
    Rashai Robertson
    Bellevue University
    CSD-440
    September 13, 2026
    Module Assignment 7
  -->

<html>

  <head>

    <title> Rashai Form Response </title>

  </head>

  <body bgcolor='f0f8ff'>

    <center>

      <h1>Student Information Response</h1>

      <?php


        $errors = array();

        if($_SERVER["REQUEST_METHOD"] == "POST"){

          $fullName = trim($_POST["fullName"] ?? "");
          $email = trim($_POST["email"] ?? "");
          $age = trim($_POST["age"] ?? "");
          $height = trim($_POST["height"] ?? "");
          $birthDate = trim($_POST["birthDate"] ?? "");
          $classification = trim($_POST["classification"] ?? "");
          $onlineStudent = trim($_POST["onlineStudent"] ?? "");

          if($fullName == ""){
            $errors[] = "Full Name was not entered.";
          }

          if($email == ""){
            $errors[] = "Email Address was not entered.";
          }
          elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Email Address was not entered correctly.";
          }

          if($age == ""){
            $errors[] = "Age was not entered.";
          }
          elseif(filter_var($age, FILTER_VALIDATE_INT) === false || $age < 1 || $age > 120){
            $errors[] = "Age must be a whole number between 1 and 120.";
          }

          if($height == ""){
            $errors[] = "Height was not entered.";
          }
          elseif(!is_numeric($height) || $height <= 0){
            $errors[] = "Height must be a number greater than zero.";
          }

          if($birthDate == ""){
            $errors[] = "Birth Date was not entered.";
          }

          if($classification == ""){
            $errors[] = "Student Classification was not selected.";
          }

          if($onlineStudent != "Yes" && $onlineStudent != "No"){
            $errors[] = "Online Student selection was not entered.";
          }

          if(empty($errors)){

            print("<h2>Form Submitted Successfully</h2>");
            print("<table border='1' cellpadding='8' cellspacing='0'>");
            print("<tr><th>Field</th><th>Data Entered</th></tr>");
            print("<tr><td>Full Name</td><td>" . htmlspecialchars($fullName) . "</td></tr>");
            print("<tr><td>Email Address</td><td>" . htmlspecialchars($email) . "</td></tr>");
            print("<tr><td>Age</td><td>" . htmlspecialchars($age) . "</td></tr>");
            print("<tr><td>Height</td><td>" . htmlspecialchars($height) . " inches</td></tr>");
            print("<tr><td>Birth Date</td><td>" . htmlspecialchars($birthDate) . "</td></tr>");
            print("<tr><td>Student Classification</td><td>" . htmlspecialchars($classification) . "</td></tr>");
            print("<tr><td>Online Student</td><td>" . htmlspecialchars($onlineStudent) . "</td></tr>");
            print("</table>");
          }
          else{

            print("<h2>Error - Please Correct the Following</h2>");

            foreach($errors as $error){
              print("<p>" . htmlspecialchars($error) . "</p>");
            }
          }
        }
        else{
          print("<h2>Error</h2>");
          print("<p>The form must be submitted before viewing this page.</p>");
        }

      ?>

      <p>
        <a href='RashaiForm.html'>Return to Form</a>
      </p>

    </center>

  </body>
</html>
