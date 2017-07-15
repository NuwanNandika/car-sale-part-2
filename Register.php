<!DOCTYPE html>
<html>
<head>
	<title>Car Sale</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</head>
<body>

<div class="container">
	<?php include("Include/Header.php");?>

	<div class="jumbotron">

	<h2>Registration Form</h2>
	<hr/>

		<form action="register_action.php" method="post">

			<label>Name</label>
			<input type="text" name="name" class="form-control"><br/>

			<label>Email</label>
			<input type="Email" name="email" class="form-control"><br/>

			<label>Password</label>
			<input type="password" name="pw" class="form-control"> <br/>

			<label>Confrim-Password</label>
			<input type="password" name="con_pw" class="form-control"> <br/>
			<input type="button" value="Reset" id="bt"/>
    				<input type="submit" value="Submit" id="btn"/>
		</form>
	</div>

	<?php include("Include/Footer.php");?>
</div>

</body>
</html>