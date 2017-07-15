<?php



	//01. collect all data from the form
	$name = $_POST["name"];
	$email = $_POST["email"];
	$pw = $_POST["pw"];
	$con_pw = $_POST["con_pw"];


	// 02.Business logic Imlementation & Data login implementation

	if($pw==$con_pw){

		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$con = mysqli_connect("localhost","root","","dbcarsale");
			if($con){
				//echo "Connected....";

				$sql="INSERT INTO Member(Name, Email, Password, Join_Date, Role, Active)"." VALUES('$name','$email',md5('$pw'),now(),'m','1')";

				if(mysqli_query($con, $sql)){
					echo "<h1>Successful..!</h1>";
				}else{
					echo "Erroe : ".mysqli_error($con);
				}


			}else{
				echo "Connection Fail....";
			}

		}else{
			echo "Invalid Email";
		}


	}else{
		echo "Passwod and confirm mismatch";
	}


?>