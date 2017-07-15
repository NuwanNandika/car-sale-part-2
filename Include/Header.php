<div class="jumbotron" style="background-image:url('images/header.jpg'); color:blue;">
	<h1> Car Sale</h1>
	<p> Find Your Dream Car</p>
	<hr/>
	<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	if (isset($_SESSION["UID"])) {
		//Logged in members
		echo "Hello" . $_SESSION["NAME"] ;
		if ($_SESSION["ROLE"]=="a") {
			?>
				<a href="brand_list.php" class="btn btn-success"> Brands </a>
				<a href="model_list.php" class="btn btn-success"> Models </a>
				<a href="car_list.php" class="btn btn-success"> Cars </a>
			<?php
		}
		if ($_SESSION["ROLE"]=="m") {
			?>
			<a href="car.php" class="btn btn-success"> Post your car </a>
			<?php
		}
		?>
		<a href="logout.php" class="btn btn-success"> Login </a>
		<?php
	}else {
		//Other members
	?>
	<a href="login.php" class="btn btn-success"> Login </a>
	<a href="register.php" class="btn btn-success"> Register </a>
	<?php
	}
	 ?>

</div>
