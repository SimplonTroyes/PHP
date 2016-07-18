<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">
    <title>Echiquier</title>
  </head>
  <body>
    <p>
      Echiquier
    </p>
    <table>

    </table>
    <?php
    echo '<table border="1px">';
      for($i=0;$i<8;$i++){
        echo '<tr>';
        for($j=0;$j<8;$j++){
          if(($i+$j)%2 == 0){
            echo '<td width="25px" height="25px" style="background-color:black;"></td>';
          } else {
            echo '<td width="25px" height="25px"></td>';
          }
        }
      echo '</tr>';
      }
    echo '</table>';

    ?>


  </body>
</html>
