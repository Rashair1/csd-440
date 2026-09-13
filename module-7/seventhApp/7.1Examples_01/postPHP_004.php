<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
  'http://www.w3.org/TR/1999/REC-html-19991224/strict.dtd'>

<html>

  <body bgcolor='ffa07a'>

    <center>

    <?php

      print("<br /><br />\n\nPrint Check Boxes<br /><br />\n\n");

      if(!empty($_POST["checkBox_1"])){

        foreach($_POST["checkBox_1"] as $box){

          print("\$box = $box <br />\n");
        }
      }
      else{

        print("No check boxes selected.<br />\n");
      }

    ?>

  </center>

</body>
</html>