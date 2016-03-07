
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


<!doctype html>
<html>
<?php require 'core/head.php';
include 'core/navbar.php';
?>
<head>
  <link rel="stylesheet" href="css/insider.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <!-- Main container -->
  <div class="page-container">

    <!-- bloc-0 -->
    <div class="bloc l-bloc bgc-white" data-stellar-background-ratio="0.5">
      <div class="container bloc-lg">
        <div class="row">
          <div class="col-sm-12">
            <div id="carousel-1" class="carousel slide" data-ride="carousel" style="width: 800; height: 400">
              <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0">
                </li>
                <li data-target="#carousel-1" data-slide-to="1">
                </li>
                <li data-target="#carousel-1" data-slide-to="2">
                </li>
                <li data-target="#carousel-1" data-slide-to="3" class="active">
                </li>
                <li data-target="#carousel-1" data-slide-to="4">
                </li>
              </ol>
              <div class="carousel-inner">
                <div class="item">
                  <img src="img/joker-typography.jpg" />
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="img/ws_Periodic_Table_of_Typefaces_1920x1080.jpg" />
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="img/design-typography-i_00445838.jpg" />
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item active">
                  <img src="img/nature_typography-1920x1080.jpg" />
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="img/typography-photo.jpg" />
                  <div class="carousel-caption">
                  </div>
                </div>
              </div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><span class="fa fa-chevron-right"></span><span class="sr-only">Next</span></a>
            </div>
            <h3 class="mg-md text-left" id="introhead">
              A Standard Post
            </h3>
            <p id="intro">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- bloc-0 END -->

    <!-- Footer - bloc-1 -->
    <div class="max" data-stellar-background-ratio="0.5">
      <div class="container bloc-lg b-divider">
        <div class="row">
          <div class="col-sm-12">
            <h2 id="introhead" class="text-center mg-md">
              Gallery
            </h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="thumbnail">
              <img src="img/walk.jpg" class="img-responsive img-rounded" style="width: 270px ; height: 150px"/></a>
              <div class="caption">
                <h3>Walkon</h3>
                <p>
                  Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.
                </p>
                <a class="btn btn-primary" href="/images/myw3schoolsimage.jpg" download="w3logo">Download</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="thumbnail">
              <img src="img/stellar.jpg" class="img-responsive img-rounded" style="width: 270px ; height: 150px" /></a>
              <div class="caption">
                <h3>Stellar</h3>
                <p>
                  Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.
                </p>
                <a class="btn btn-primary" href="/images/stellar.jpg" download="w3logo">Download</a></div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="thumbnail">
                <img src="img/shumi.jpg" class="img-responsive img-rounded" style="width: 270px ; height: 150px"/></a>
                <div class="caption">
                  <h3>Shumi</h3>
                  <p>
                    Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.
                  </p>
                  <a class="btn btn-primary" href="/images/myw3schoolsimage.jpg" download="w3logo">Download</a></div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="thumbnail">
                  <img src="img/ilerons.jpg" class="img-responsive img-rounded" style="width: 270px ; height: 150px"/></a>
                  <div class="caption">
                    <h3>Ailerons</h3>
                    <p>
                      Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.
                    </p>
                    <a class="btn btn-primary" href="/images/myw3schoolsimage.jpg" download="w3logo">Download</a>          </div>
                  </div>
                </div>
              </div>
              <div class="row voffset">
                <div class="col-md-3">
                  <div class="thumbnail">
                    <img src="img/ADA.jpg" class="img-responsive img-rounded" style="width: 270px ; height: 150px"/></a>
                    <div class="caption">
                      <h3>ADA</h3>
                      <p>
                        Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.
                      </p>
                      <a class="btn btn-primary" href="/images/myw3schoolsimage.jpg" download="w3logo">Download</a>          </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="thumbnail">
                      <img src="img/debby.jpg" class="img-responsive img-rounded" style="width: 270px ; height: 150px"/></a>
                      <div class="caption">
                        <h3>Debby</h3>
                        <p>
                          Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.
                        </p>
                        <a class="btn btn-primary" href="file/Debby.zip" download="Debby.zip">Download</a>          </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="thumbnail">
                        <img src="img/beyno.jpg" class="img-responsive img-rounded" style="width: 270px ; height: 150px"/></a>
                        <div class="caption">
                          <h3>Beyno</h3>
                          <p>
                            Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.
                          </p>
                          <a class="btn btn-primary" href="/images/myw3schoolsimage.jpg" download="w3logo">Download</a>                        </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="thumbnail">
                          <img src="img/ansley.jpg" class="img-responsive img-rounded" style="width: 270px ; height: 150px"/></a>
                          <div class="caption">
                            <h3>Ansley</h3>
                            <p>
                              Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.
                            </p>
                            <a class="btn btn-primary" href="/images/myw3schoolsimage.jpg" download="w3logo">Download</a>          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Footer - bloc-1 END -->
                </div>
                <!-- Main container END -->

              </body>
              </html>
              <script src="js/jquery.stellar.min.js" charset="utf-8"></script>
              <script type="text/javascript">
                $.stellar();
              </script>
