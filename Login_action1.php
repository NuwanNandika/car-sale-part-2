<?php



	//01. collect all data from the form
	
	$email = $_POST["email"];
	$pw = $_POST["pw"];
	


	// 02.Business logic Imlementation & Data login implementation


		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$con = mysqli_connect("localhost","root","","dbcarsale");
			if($con){
				//echo "Connected....";

				$sql="select * from Member where email='$email' AND password='$pw'";
				$result= mysqli_query($con, $sql );

				if($row= mysqli_fetch_array($result)){

					if (!isset($_SESSION)) {
						session_start();
					}
															//header file eke danawa......Login button eka langa
					$_SESSION["NAME"]=$row["name"];
					$_SESSION["ROLE"]=$row["role"];
					$_SESSION["UID"]=$row["id"];


					echo "<h1>Login Successful..!</h1>";
				}else{
					echo "<h1>Invalied Login..!</h1>";
				}

			}
		}
?>
