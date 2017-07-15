<!DOCTYPE html>

<html>
	<head>
		<title> Car Sale</title>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"></link>
	</head>
	<body>
		<div class="container">
		
			<?php include("include/header.php"); ?>

			<div class="row">
				<div class="col-md-10">
					<label>Brand</label>
				</div>
			</div>
			
			<div class="jumbotron">
				
				<?php
					require("include/Dbconnection.php");
					$sql = "SELECT * FROM car";
					$result = mysqli_query($con, $sql);
					while($row = mysqli_fetch_array($result)) {
				?>
				<div class="row" style="border-top:2px solid blue;border-bottom:2px solid blue;">
					<div class="col-md-3"> 
						<img class="img img-responsive" src="images/default.jpg"/> 

					</div>
					<div class="col-md-9"> 
						<h2><?=$row["title"] ?></h2>
						<h5>Price : <?=$row["price"] ?></h5>
						<h5>Year : <?=$row["year"] ?></h5>
						<h5>Milage : <?=$row["milage"] ?></h5>
						<a href="car_view.php?id=<?=$row["id"] ?>" class="btn btn-info"> VIEW </a>
					</div>
					
				</div>	
								
						
				<?php
					}
				?>
			</div>
			<?php include("include/footer.php"); ?>
		</div>	
	</body>
</html>