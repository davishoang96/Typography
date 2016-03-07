<?php

error_reporting(0);
require '../core/head.php';
require 'connecttk.php';

if (isset($_POST['Submit'])) {
    $username = $_POST['USERNAME'];



    //Inject SHA1 to database

    $username = strip_tags($username);
    $password = SHA1($_POST['PASSWORD']);

    if ($username == '' || $password == '') {
        echo "<script>alert('DONT LEAVE ANY BLANK')</script>";
    } else {
        $result = mysql_query("SELECT * FROM register WHERE USERNAME ='$username' AND PASSWORD = '$password' AND LEVEL ", $conn);
        if (mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
              //if level = 1 -> goto admin.php
                if ($row['USERNAME'] == $username && $row['PASSWORD'] == $password && $row['LEVEL'] == '1') {

                    $_SESSION['LEVEL'] = $row['LEVEL'];
                    $_SESSION['USERNAME'] = $row['USERNAME'];
                    header("location: admin.php"); 
                }
            }
        } $result = mysql_query("SELECT * FROM register WHERE USERNAME ='$username' AND PASSWORD = '$password' ", $conn);
        if (mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
              //if level = 0 -> goto index.php
                if ($row['USERNAME'] == $username && $row['PASSWORD'] == $password && $row['LEVEL'] == '0') {

                    $_SESSION['USERNAME'] = $username;
                    header("location: ../insider.php");

                }
            }

        } else {
          echo "<script>
            alert('Wrong password or username');
          </script>";
        }
    }
}

?>
