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

	<h2>Login Form</h2>
	<hr/>

		<form action="Login_action.php" method="post">

			<label>Email</label>
			<input type="email" name="email" class="form-control"><br/>

			<label>Password</label>
			<input type="password" name="pw" class="form-control"><br/>

			<input type="button" value="cancle" id="bt"/>
    				<input type="submit" value="Log in" id="btn"/>
		</form>
	</div>

	<?php include("Include/Footer.php");?>

</div>

</body>
</html>