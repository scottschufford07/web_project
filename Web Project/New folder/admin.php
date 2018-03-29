<?php
echo "<body style='background: url(https://www.pinterest.com/typeahippie/backgrounds/);'>";

?>
</!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="./css/orderlist.css">
    <title> Eat Oye </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/adminn.css">

	<style>
		#frm
		{
			width: 500px;
		}
		#body
		{
			ackground-image: url("deals1.jpg");
    background-color: black;
		}
	</style>
</head>
<body>

	<div class="container">
	<br>
	<br>
	<br>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<form method="POST" action="./admin.php" enctype="multipart/form-data">
						<label class="form-group" >Item Name</label>
						<input type="text" name="name" class="form-control" id="frm" required>
						<br>
						<label class="form-group">Item Price</label>
						<input type="text" name="price" class="form-control" id="frm" required>
						<br>
						<label class="form-group">Item image</label>
						<input type="file" name="img" class="form-control" id="frm" required>
						<br>
						<button class="btn btn-primary" type="submit" name="submit" style="text-align:center; width:500px;">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
	if (isset($_POST["submit"])) {
		$name=$_POST["name"];
		$price=$_POST["price"];
		$img=$_FILES["img"]["name"];
		$targetfolder = "./img/";
		$targetfolder = $targetfolder . $img ;
		move_uploaded_file($_FILES['img']['tmp_name'], $targetfolder);
		$query="INSERT INTO food_items (Title,price,Img) VALUES ('$name','$price','$img')";
		include("./connections.php");
		if ($result) {
			echo "Uploaded";
		}
	}
	?>
</body>
</html>