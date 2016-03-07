<?php
session_start();
error_reporting(0);

if ($_SESSION['USERNAME']) {
  echo "";

} else {
  ?>
        <h1>Permission Denied</h1>
        <h1>You will be redirected in <span id="counter" style="color: red">5</span> second(s).</h1>
          <script type="text/javascript">
          function countdown() {
              var i = document.getElementById('counter');
              if (parseInt(i.innerHTML)<=0) {
                  location.href = 'index.php';
              }
              i.innerHTML = parseInt(i.innerHTML)-1;
          }
          setInterval(function(){ countdown(); },1000);
          </script>
  <?php
  header('refresh: 5; url=index.php');
  die();
}

?>

<!DOCTYPE html>
<html>
<?php require 'core/head.php'; ?>
<?php include 'core/navbar.php'; ?>
<head>
<style media="screen">
body{
  background: url(../img/register.jpg);
  background-size: cover;
  background-attachment: fixed;
}
h1,h2,h3,h4,p{
  color: black;
}
.panel-default {

  margin: auto;
  margin-top: 200px;
  width: 450px;
  padding-left: 20px;
  padding-right: 20px;
  -webkit-box-shadow: 7px 10px 38px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 7px 10px 38px 0px rgba(0,0,0,0.75);
  box-shadow: 7px 10px 38px 0px rgba(0,0,0,0.75);
}
</style>



</head>
<body>

  <div class="panel panel-default">
    <div class="panel-heading">
      <strong>Upload panel</strong>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" action="function/check_upload.php">
        <div class="col-lg-12" style="margin-top: -10px;">
          <h3 style="font-family: 'Pacifico', cursive;">Help us build this website</h3>
          <p style="font-family: 'Courgette', cursive;">
            By uploading your fonts
          </p>
        </div>
    <div class="col-lg-12">
      <div class="input-group">
        <input type="file" name="file" class="form-control" placeholder="Browse your file...">
        <span class="input-group-btn">
          <button class="btn btn-success" type="submit" name="submit" value="submit">Upload</button>
        </span>
      </div>
    </div>

  </form>
</div>
</div>

</body>
</html>
