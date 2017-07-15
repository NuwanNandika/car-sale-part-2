<?php



	//01. collect all data from the form
	$name = $_POST["name"];
	$brand_id = $_POST["brand_id"];
	


	// 02.Business logic Imlementation & Data login implementation


			$con = mysqli_connect("localhost","root","","dbcarsale");
			if($con){
				//echo "Connected....";

				$sql="INSERT INTO Model(Name,Brand_id)"." VALUES('$name','$brand_id')";

				if(mysqli_query($con, $sql)){
					echo "<h1>Successful..!</h1>";
				}else{
					echo "Erroe : ".mysqli_error($con);
				}


			}else{
				echo "Connection Fail....";
			}

		


?>