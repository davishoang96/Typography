<?php
session_start();
error_reporting(0);

  if ($_SESSION['USERNAME']) {
    echo "welcome, ".$_SESSION['USERNAME']. "!";

  } else {
    //Countdown function for intruders
    ?>
          <h1>You must logged in</h1>
          <h1>Redirected in <span id="counter" style="color: red">5</span> second(s).</h1>
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
