<?php      
  include("functions.php");
  ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="./css/orderlist.css">

    <title> Eat Oye </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="./css/style.css">

</head>
<body>

    <div class="brand">Food Order System</div>
    <div class="address-bar"> Main Head Office Blue Area  Islamabad </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Eat Oay....!</a>
            </div>
            <?php
            include("./nav.php");
            ?>

          
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/hghdfgh.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/Deals1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/burger.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
            
                    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong> Our Best Deal </strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/Deals1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <p>This is our best deal for today.</p>
                    <p>Spicy Crunchy Burger with your favourite Drink.</p>
                    <p>  to Order </p>
                    <p><a href="../New Folder/index.php" class="btn btn-primary">Order now</a></p>
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Other
                        <strong>Deals</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/Deals1.jpg" alt="">
                    <h3>Hot n Spicy 
                        <small>Discounted Rate  150-Rs</small>
                        <p><a href="../New Folder/index.php" class="btn btn-primary">Order now</a></p>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/burger.jpg" alt="">
                    <h3>Crunch Burger 
                        <small>Price 200 </small>
                        <br>
                        <a href="../New Folder/index.php" class="btn btn-primary">Order now</a>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/kfc1.jpg" alt="">
                    <h3>Value Deal
                        <small>Price 300</small>
                        <br>
                        <a href="../New Folder/index.php" class="btn btn-primary">Order now</a>
                    </h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Visit Food Items 
                        <strong>to Order</strong>
                    </h2>
                    <hr>
                    
                    <ul id="orderlist">
                    </ul>                    
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Eat Oye 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
