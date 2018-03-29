  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/admin.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
    <div class="navbar-header">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">MegaMenu</a>
  </div>
  <div class="collapse navbar-collapse js-navbar-collapse">
    <ul class="nav navbar-nav" style="display: inline;">
      <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
        
        <ul class="dropdown-menu mega-dropdown-menu row">
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">New in Stores</li>                            
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Dresses</li>
              <li><a href="#">Unique Features</a></li>
              <li><a href="#">Image Responsive</a></li>
              <li><a href="#">Auto Carousel</a></li>
              <li><a href="#">Newsletter Form</a></li>
              <li><a href="#">Four columns</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Tops</li>
              <li><a href="#">Good Typography</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Jackets</li>
              <li><a href="#">Easy to customize</a></li>
              <li><a href="#">Glyphicons</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Pants</li>
              <li><a href="#">Coloured Headers</a></li>
              <li><a href="#">Primary Buttons & Default</a></li>
              <li><a href="#">Calls to action</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Accessories</li>
              <li><a href="#">Default Navbar</a></li>
              <li><a href="#">Lovely Fonts</a></li>
              <li><a href="#">Responsive Dropdown </a></li>             
              <li class="divider"></li>
                            <li class="dropdown-header">Newsletter</li>
                            <form class="form" role="form">
                              <div class="form-group">
                                <label class="sr-only" for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">                                                              
                              </div>
                              <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </form>                                                       
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div><!-- /.nav-collapse -->
              </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
