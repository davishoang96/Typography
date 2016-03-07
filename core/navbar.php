<?php session_start();
error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
  <?php require_once "head.php"; ?>

  <body>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Typogit</a>
        </div>




        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <?php
                  if (isset($_SESSION['USERNAME'])) {
                    ?>
                    <a class="navbar-brand" href="insider.php">Insider</a>
                    <a class="navbar-brand" href="upload.php">Upload fonts</a>
                    <?php
                  } else {
                    echo "";
                  }
             ?>
            <a class="navbar-brand" href="#subscribe">Contact</a>
            <a class="navbar-brand" href="#download">Download</a>
            <?php
                  if (isset($_SESSION['USERNAME']) && ($_SESSION['LEVEL']) == '1') {
                  ?>
                  <a class="navbar-brand" href="function/admin.php">Administrator</a>
                  <?php
                } else {
                  echo "";
                }
            ?>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <!-- Change to logout if session exists -->
              <?php
              if (isset($_SESSION['USERNAME'])) {
                echo "<a class='navbar-brand' href='function/logout.php'>Logout <span class='spanclass'>" .$_SESSION['USERNAME']. "</span></a>";
              } else {
                echo "<a class='navbar-brand' href='function/login.php'>Login </a>";
              }
              ?>
          </ul>
        </div>
      </div>
    </nav>

  </body>
</html>
