<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
  'http://www.w3.org/TR/1999/REC-html-19991224/strict.dtd'>

<html>

  <body bgcolor='ffa07a'>

    <center>

    <?php

      print("<br /> Hidden Input <br />");
      $hiddenInput = $_POST["hiddenInput"];
      print("<br />\$hiddenInput = $hiddenInput<br />");

      print("<br />---------------------------------------------------------------------------------------------<br />");

      print("<br /> Select <br />");
      $select = $_POST["select"];
      print("<br />\$select = $select<br />");

      print("<br />---------------------------------------------------------------------------------------------<br />");

      print("<br /> Text Area <br />");
      $textarea = $_POST["textarea"];
      print("<br />\$textarea = $textarea<br />");

      print("<br />---------------------------------------------------------------------------------------------<br />");

      print("<br /> Radio Button <br />");
      $radioButton = $_POST["radioButton"];
      print("<br />\$radioButton = $radioButton<br />");

      print("<br />---------------------------------------------------------------------------------------------<br />");

      print("<br />Print Check Boxes <br />");

      if(!empty($_POST["checkBox_1"])){

        foreach($_POST["checkBox_1"] as $box){

          print("\$box = $box <br />\n");
        }
      }
      else{

        print("<br />No check boxes selected.<br />");
      }

      print("<br />---------------------------------------------------------------------------------------------<br />");

      print("<br /> Password <br />");
      $password_1 = $_POST["password_1"];
      print("<br />\$password_1 = $password_1<br />");

    ?>

  </center>

</body>
</html>