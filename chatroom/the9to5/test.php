<?php
  $url = $_POST['url'];
  $a = $_POST['data1'];
  $b = $_POST['data2'];
  $f = fopen('saveFile.txt', 'w');
  fwrite($f, $url);
  fwrite($f, "\n");
  fwrite($f, $a);
  fwrite($f, "\n");
  fwrite($f, "$b");
  fclose();
?>
