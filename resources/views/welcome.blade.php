<!DOCTYPE html>
<html>
    <head>
        <title>Swipe</title>
        <script>

            window.initMap = function() {
                var myLatLng = {lat: -25.363, lng: 131.044};

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 4,
                    center: myLatLng
                });

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'Our location'
                });



                $('ul.nav').find('a').click(function(){
                    var $href = $(this).attr('href');
                    var $anchor = $('#'+$href).offset();
                    $('body').animate({ scrollTop: $anchor.top });
                    return false;
                });
            }
        </script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script type="application/javascript" src="js/jquery.min.js"></script>
        <script type="application/javascript" src="js/bootstrap.min.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM2ba2FEiJ_0wog025THyXxT2NLKg_aLc&callback=initMap"></script>
        <script type="text/javascript" src="js/collage.min.js"></script>

    </head>
    <body>
    <style>
        body{
            height:100%;
            min-height: 1024px;

            overflow-x: hidden;
        }

    </style>
    <div class="home">

        <nav class="navbar" style="background-color:navy; padding-bottom: 0%;">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img style="vertical-align: middle" src="images/swipelogo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#aboutus">About us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="http://www.tikiti.co.ke/">Events</a></li>
                        <li><a href="#talk">Talk to us</a></li>


                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div style= id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/woman2.jpg" alt="...">
                    <div class="carousel-caption">
                        <h1>Affordability</h1>
                    </div>
                </div>
                <div class="item">
                    <img src="images/woman2.jpg" alt="...">
                    <div class="carousel-caption">
                        <h1>Reliability</h1>
                    </div>
                </div>
                <div class="item">
                    <img src="images/woman2.jpg" alt="...">
                    <div class="carousel-caption">
                        <h1>Availability</h1>
                    </div>
                </div>

            </div>


        </div>

    </div>
    <div class="about" id="aboutus" style="text-align-last: center; padding-top:5%; padding-bottom: 5%; vertical-align: middle;">
        <div class="row">
            <div  class="col-sm-1">

            </div>
            <div class="col-sm-10">
                <h2> ABOUT SWYPE</h2>
                <H2><small>Giving you all access</small></H2>

                <p class="lead">
                    A leading payment gateway, cashlite and e-Ticketing solutions provider that offers an array of technological solutions & services for event ticketing, payment solutions and registration management.
                </p>
            </div>
            <div class="col-sm-1">

            </div>
            
        </div>
        <div class="row">
            <div class="col-sm-1">
                
            </div>
            <div class="col-sm-10">
                <div class="col-sm-5">
                    <img src="images/samsung.png" alt="">
                </div>
                <div class="col-sm-5" style="align-items: flex-start;">
                    <h3>How to create an account</h3>
                    <h4>Creating a Swype account is easy and free in 2 simple steps</h4>

                    Step 1: Dial *360*16# to register for Swype e-wallet
                    <br>
                    Step 2: Set a 4 digit pin
                    <br>
                    You can now transact using your Swype e-wallet
                    <br>

                </div>
            </div>
            <div  class="col-sm-1">
                
            </div>
        </div>
        <div class="row">
            <H2> We are cross platform</H2>
            <div class="col-sm-1">

            </div>
            <style>
                img {
                    width: 100%;
                }
            </style>
            <div class="col-sm-10" style="text-align-last: center;  vertical-align: middle;">
                <div class="col-sm-2">
                    <img src="images/airtel.jpeg" alt="">
                    <br>
                    Airtel
                </div>
                <div class="col-sm-2">
                    <img src="images/mpesa.png" alt="">
                    <br>
                    Mpesa
                </div>
                <div class="col-sm-2">

                    <img src="images/orange.png" alt="">
                    <br>
                    Orange
                </div>
                <div class="col-sm-2">
                    <img src="images/paypal.png" alt="">
                    <br>
                    Paypal
                </div>
                <div class="col-sm-2">
                    <img src="images/master.png" alt="">
                    <br>
                    Mastercard
                </div>

            </div>
            <div class="col-sm-1">

            </div>

        </div>
    </div>
    <br>
    <div id="services" style="text-align-last: center;  background-color: #5e5e5e; vertical-align: middle;"class="services">
        <div class="row">

            <div  class="col-sm-12">
                <h2>SERVICES</h2>
                <h3> GIVING YOU ALL ACCESS</h3>
                    <h4>Value beyond expectation</h4>
                <br>
                <div class="col-lg-3">
                    <img src="images/cash.png" alt="">
                    <h4>CASHLITE</h4>
                    Have your entertainment budget on a social e-wallet
                </div>
                <div class="col-lg-3">
                    <img src="images/ewallet.png" alt="">
                    <h4>E-WALLET</h4>
                    Have your entertainment budget on your social e-wallet

                </div>
                <div class="col-sm-3">
                    <img src="images/swypeTV.png" alt="">
                    <h4>SWYPE TV</h4>
                    Catch your favorite event online
                </div>
                <div class="col-sm-3">
                    <img src="images/ticketing.png" alt="">
                    <h4>E-TICKETING</h4>
                    Catch your favorite event online

                </div>

            </div>

        </div>

    </div>
    <br>
    <div class="events">

    </div>
    <br>

    <div class="FindUs" id="map" >


    </div>
    <div class="contact" id="talk">
        <div style="text-align-last: center; vertical-align: middle;">
            <h4>Talk to us</h4>
        </div>
      <div class="row">
           <div class="col-sm-2">

           </div>
          <div class="col-sm-4">
              <form class="" action="">
                  <div class="form-group">

                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                  </div>
                  <div class="form-group">

                      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                  </div>
                  <div class="form-group">

                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
                  </div>
                  <div class="form-group">

                      <Textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Message"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary btn-block ">Submit</button>
              </form>

          </div>
          <div class="col-sm-1">

          </div>
          <div class="col-sm-5">
             <div>
                  <span class="glyphicon glyphicon-map-marker" ></span> Galana plaza 8th floor
             </div>
              <br>
              <div>
                  <span class="glyphicon glyphicon-phone" ></span> +254 703 991 991
              </div>
              <br>

              <div>
                  <span class="glyphicon glyphicon-envelope" ></span> info@swype.co.ke
              </div>
              <br>
              <div>
                  <span class="glyphicon glyphicon-globe" ></span> www.swype.co.ke
              </div>
          </div>

      </div>

    </div>
    <div  class="container">

    </div>
    <br>
    <br>
    <br>
    <div class="footer" style="text-align-last: center;  bottom:0;
    padding-top:5%; background-color: #3c3c3c; color: whitesmoke; padding-bottom:0px; vertical-align: middle;" class="container-fluid">
     <p>
         <span>  <i class="fa fa-facebook fa-th-large" aria-hidden="true"></i> </span>     <span>  <i class="fa fa-twitter fa-th-large" aria-hidden="true"></i> </span>
         <br>
         Copyright  <span>  <i class="fa fa-copyright fa-th-large" aria-hidden="true"></i> </span>  2016 - Swype
     </p>
    </div>
    </body>
</html>
