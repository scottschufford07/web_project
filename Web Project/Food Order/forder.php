<?php   include("./functions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food Items</title>

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

    <div class="brand">Food Items</div>
    
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
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->



           <?php
            include("./nav.php");
            ?>
            <!-- /.navbar-collapse -->

            


        </div>
        <!-- /.container -->
    </nav>
          <div class="container text-center"> <h1><b> Catagories </b> </h1></div> <br>
          <br>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                
  <form action="functions.php"  method ="POST">
  
        <?php 
        $query="SELECT * FROM categories" ;
        include("./connection.php");
while ($results= mysqli_fetch_array($result))
{
    ?>


    <div class="container-fluid , col-sm-5 col-md-4 col-xs-14 col-lg-3" >

    <div class="thumbnail " >
    
     <div class="caption">
    <strong>
        <h4><?php echo $results['Categoryname']."<br>"; ?></h4>
           <img src="./img/<?php  echo $results['CategoryImage'];?> "  style="width:304px;height:200px;" class="img-thumbnail" alt="" width="304" height="236"> 
        <p>
        <?php
          


    echo "Name :";
    echo $results['Categoryname']."<br>";
   

        
?>
</p>    
        </strong>

  
        
    
         <p>&nbsp&nbsp&nbsp&nbsp&nbsp <a href="functions.php?name=<?php echo $results['id']  ?>"  class="btn  "  name="submitcartbuy" role="button" value="Buy"><strong>Order</strong></a> 
                        
      </div>
    </div>
  </div>
   <?php
}
     ?> 
</form>
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

</body>

</html>
