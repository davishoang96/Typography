<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <?php require_once "head.php"; ?>
  <head>
    <style media="screen">
      a{
        font-family: 'Ubuntu', sans-serif;
      }
      #brand{
        font-family: 'Lobster', cursive;
        font-size: 30px;
      }
      #session{
        font-family: 'Lobster', cursive;
        font-size: 20px;
      }
    </style>
  </head>
  <body>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <ul class="nav navbar-nav navbar-left">
              <a id="brand" href="../index.php" class="navbar-brand">Typogit</a>
          </ul>


        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="list_user.php">User's database</a></li>
                <li><a href="list_subscriber.php">Subscriber's idea</a></li>
                <li><a href="add_moderator.php">Add Moderators</a></li>
                <li><a href="count_files.php">Check uploaded files</a></li>
              </ul>

            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php echo"<a class='navbar-brand' href='logout.php'>Logout  <span id='session' class='spanclass'>" .$_SESSION['USERNAME']. "</span></a>" ?>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </body>
</html>
