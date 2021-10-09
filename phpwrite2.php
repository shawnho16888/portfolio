<?php
  $myFile = "ttt.txt";

  $fh = fopen($myFile, 'w') or die("can't open file");
  //$stringData = $_POST["name"];
  $stringData = "Hello World!";
  fwrite($fh, $stringData);
  fclose($fh);
?>  
