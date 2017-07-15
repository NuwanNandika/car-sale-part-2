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
	<div class="jumbotron" style="background-image:url('Images/car2.jpg'); color:white;">
		<h1> Car Sale</h1>
		<p>Find Your Car Model</p>
		<hr/>

		<a href="login.php" class="btn btn-primary">Login</a>
		<a href="login.php" class="btn btn-success">Register</a>
	</div>

	<div class="jumbotron">

	<h2>Model Form</h2>
	<hr/>

		<form action="Model_action.php" method="post">

			<label>Brand</label>
			<select name="brani_id" class="form-control">
				<option value="1">Toyota</option>
				<option value="1">Honad</option>
				<option value="1">L</option>
				<option value="1">Toyota</option>
			</select><br/>
			<label>Name</label>
			<input type="text" name="name" class="form-control"><br/>

			<input type="button" value="Reset" id="bt"/>
    				<input type="submit" value="Submit" id="btn"/>
		</form>
	</div>

	<div class="jumbotron" style="background:#0091DC; color:#b2c2;">
		<p>ABC-car sale</p>
	</div>

</div>

</body>
</html>