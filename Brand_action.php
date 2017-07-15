<?php



	//01. collect all data from the form
	$name = $_POST["name"];
	


	// 02.Business logic Imlementation & Data login implementation


			$con = mysqli_connect("localhost","root","","dbcarsale");
			if($con){
				//echo "Connected....";

				$sql="INSERT INTO Brand(Name)"." VALUES('$name')";

				if(mysqli_query($con, $sql)){
					echo "<h1>Successful..!</h1>";
				}else{
					echo "Erroe : ".mysqli_error($con);
				}


			}else{
				echo "Connection Fail....";
			}

		


?>