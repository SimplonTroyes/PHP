<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $tabTemp = array("Jan" => 10, "Fev" => 12, "Mars" => 8);

    //echo $tabTemp["Jan"];

    foreach($tabTemp as $key=>$value){
      echo $key.'=>'.$value.'<br>';
    }




     ?>






  </body>
</html>
