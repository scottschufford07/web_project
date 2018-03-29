<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" type="text/css" href="css/css2/css">
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Cart</title>
</head>
<body>
	<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li>
					<li class="filter"><a  href="../Food Order/index.php" data-type="all">Home</a></li> 
					<li class="filter"><a class="selected" href="index.php 	" data-type="all">All</a></li>

			
					
					<?php
					$counter=0;
					if (isset($_SESSION["cart"])) {
						$whereIn=implode(',', $_SESSION["cart"]);
						$query="SELECT * FROM food_items WHERE id IN($whereIn)";
						include("./connections.php");
						if ($result){
					 	while ($row=mysqli_fetch_array($result)){
					 		$counter++;
					 	}
					 }
					}

					?>
					<li class="filter"><a href="./cart.php">View Cart-&nbsp &nbsp<?php echo "<p style='font-size:22px; color: purple; display:inline;'>$counter</p>"; ?></a></li>
					<li class="filter"><a  href="./logout.php" style="margin-left: 700px;">Logout </a></li> 
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>