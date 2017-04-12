<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SwapIt</title>
    <!-- bootstrap Vendor-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <!-- Font Awesome Vendor-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <!--Slider css-->
    <link rel="stylesheet" href="vendor/css/full-slider.css">
    <!--My css-->
    <link rel="stylesheet" href="vendor/css/style.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <img src="./vendor/img/logo/Swap-it.png" width="40px" height="40px" alt="SnapIt Logo">
              </a>
              <ul class="nav navbar-nav navbar-right b-reg">
                <li><a href="#" data-toggle="modal" data-target="#modalLogin">Login</a></li>
                <li><a href="#" data-toggle="modal" data-target="#modalRegister">Sign up</a></li>
              </ul>
            </div>
        </div>
    </nav>
    <!-- Modal Login Page-->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="">Login Page</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
         <!--Indicators -->
        <!-- <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol> -->

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('./vendor/img/slides/image01.jpg');"></div>
                <div class="carousel-caption">
                    <h2><span>Look for Items to trade</span></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('./vendor/img/slides/image02.jpg');"></div>
                <div class="carousel-caption">
                    <h2><span>Easiest form to trading from one person to another</span></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('./vendor/img/slides/image03.jpg');"></div>
                <div class="carousel-caption">
                    <h2><span>Its like Uber but for items.. <br>just kidding but you get the gist</span></h2>
                </div>
            </div>
        </div>
            <div class="get-start">
                <button type = "button" class = "btn btn-lg">Get Started</button>
            </div>
        <!--Controls
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>-->

    </header>



    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <script src="vendor/js/main.js"></script>
</body>

</html>
