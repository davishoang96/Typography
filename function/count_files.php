<?php
  $path = '../uploaded/';
  $dataToWrite = "";
  $handle = opendir($path);
  $i = 1;
  while ($file = readdir( $handle)) {
    if (substr($file, 0,1) != ".") {
      echo $file . "<br>";
      $dataToWrite .= $file . "\n";
    }
    ++$i;
  }
  closedir( $handle);
  $write = fopen ("../logs/uploaded_files.txt", 'w');
  fwrite($write, $dataToWrite);
  fclose($write);
 ?>
