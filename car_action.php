<?php
	
	//1. Collect all Data from Form
	$title = $_POST["title"];
	$brand = $_POST["brand_id"];
	$model = $_POST["model_id"];
	$price = $_POST["price"];
	$year = $_POST["year"];
	$milage = $_POST["milage"];
	$member = 1;
		
	require("include/Dbconnection.php");
	
	$sql = "INSERT INTO car(title, brand_id, model_id, price, year, milage, member_id, sold) "
		  ." VALUES('$title','$brand','$model','$price','$year','$milage','$member',0)";
	
	if(mysqli_query($con, $sql)){
		echo "<h1> Successfull!</h1>";
	}else {
		echo "Error : " . mysqli_error($con);
	}


	
		
	
	
	
	
?>