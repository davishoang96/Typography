<?php
  //Delete unwanted trash file of macosx
  $unwanted_filenames = array(
    '.DS_Store',
    '.localized',
    'Thumbs.db',
    'error_log'
    );

  $it = new RecursiveDirectoryIterator("../uploaded/");  // Set starting directory here
  foreach(new RecursiveIteratorIterator($it) as $file) {
    if (in_array(basename($file), $unwanted_filenames)) {
        @unlink($file);  // THe @ hides errors, remove if you want to see them
    }
  }
  // start scanning files
  $path = '../uploaded/';
  $dataToWrite = "";
  $handle = opendir($path);
  while ($file = readdir( $handle)) {
    if (substr($file, 0,1) != ".") {
      echo $file . "<br>";
      $dataToWrite .= $file . "\n";
    }
  }
  closedir( $handle);
  $write = fopen ("../logs/uploaded_files.txt", 'w'); 
  fwrite($write, $dataToWrite);
  fclose($write);

  //Count how many file then echo to alert
  $i = 0;
  $dir = '../uploaded/';
  if ($handle = opendir($dir)) {
      while (($file = readdir($handle)) !== false){
          if (!in_array($file, array('.', '..')) && !is_dir($dir.$file))
              $i++;
      }
  }
  // prints out how many were in the directory

  echo '<script type="text/javascript">alert("There were '.$i.' files in your directory");</script>';
  header('refresh: 0; url=admin.php');
 ?>
