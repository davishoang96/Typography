<?php
session_start();
error_reporting(0);

  if ($_SESSION['USERNAME'] && ($_SESSION['LEVEL']) == '1') {
    echo "welcome, ".$_SESSION['USERNAME']. "!";

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
    header('refresh: 5; url=../index.php');
    die(); // Prevent PHP processing the code below after failure
  }

?>
<!DOCTYPE html>
<html>
  <?php require "../core/head.php"; ?>
  <head>
  <style media="screen">
  table, th, tr, td {
    margin: auto;
    margin-top: 100px;
    border: 1px solid black;
    text-align: center;
  }

  tr:nth-child(even) {
    background-color: rgb(32, 124, 21);
    color: black;
  }
  tr:nth-child(odd) {
    background-color: rgb(34, 154, 180);
    color: black;
  }
  body{
    background: url(../img/register.jpg);
    background-size: cover;
  }

  </style>
  </head>
  <body>
    <?php

      include "../core/admin_navbar.php";
      include("connecttk.php");
      $sql="select * from subscribers";
      $result=mysql_query($sql,$conn);
      ?>
        <table>
        <tr>
        <th>No.</th>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>MESSAGE</th>
        <th>DELETE</th>
        </tr>;
      <?php
        $i = 1;
        while ($row = mysql_fetch_row($result)) {
      ?>
        <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row[0] ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td><button style="color:red" class="js-delete" data-id="<?php echo $row[0] ?>">Delete</button></td>
        </tr>
        <?php
          ++$i;
          }
        echo '</table>';
        ?>


    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
        $(document).on('click', '.js-delete', function(e){
            e.preventDefault();

            var id = $(this).attr('data-id');
            var tr = $(this).parent().parent();
            tr.remove();

            $.ajax({
                type: 'POST',
                url: "delete_subscribe.php",
                data: {
                  makh: id,
                },
            }).done(function() {
                //console.log(data);
                //tr.remove();
                //alert('Da xoa phong ban');
                //window.location.href = 'xoaphongban.php';
            });
        });
    </script>
  </body>
</html>
