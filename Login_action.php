<?php
	//1. Collect all Data from Form
	$email = $_POST["email"];
	$pw = $_POST["pw"];
	//2.Business Login Implementation & Data Login Implementation
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){

			require("include/Dbconnection.php");
			$sql ="SELECT * FROM member WHERE email='$email' AND password=md5('$pw')";
			$result=mysqli_query($con, $sql);
			if($row=mysqli_fetch_array($result)){
				if (!isset($_SESSION)) {
					session_start();
				}
				$_SESSION["NAME"] = $row["Name"];
				$_SESSION["ROLE"] = $row["Role"];
				$_SESSION["UID"]=$row["id"];
				echo "<h1> Login Successfull!</h1>";
			}else {
				echo "<h1>Invalid Login...</h1>";
			}
		}
?>
