<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Signup</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-state=1"/> 
		

		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./css/bootstrap.css">
		<script src="./js/jquery-3.1.1.min.js"></script>
		<script src="./bootstrap/js/bootstrap.js"></script>



		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	</head>


<body>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <a href="#" class="navbar-brand">Signup for Order</a>

  <!--  <button class="navbar-toggle" data-toggle="collapse" data-targer="#navHeaderCollapse"> -->

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navHeaderCollapse">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
    </button>


    <div class="collapse navbar-collapse " id="navHeaderCollapse">
      <ul class="nav navbar-nav ">


          <li ><a href="index.php">Home</a></li>


      </ul>
<ul class="nav navbar-nav navbar-right">
  
  <li><a href="login.php"><span  class="glyphicon glyphicon-log-in" ></span> Login</a></li>
  <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
  </ul>

    </div>



  </div>


</div>

    <div class="wrapper container-fluid">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Register Here</h2>
      <input type="text" class="form-control" name="firstname" placeholder="First Name" required="" autofocus="" />
      <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="" autofocus="" />
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>   
    </form>
  </div>
  
  
</body>
</html>
