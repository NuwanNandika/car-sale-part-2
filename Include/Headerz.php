	<div class="jumbotron" style="background-image:url('Images/car2.jpg'); color:white;">
		<h1> Car Sale</h1>
		<p>Find Your dream Car</p>
		<hr/>

		<?php

		if (!isset($_SESSION)) {
						session_start();
					}

		if (isset($_SESSION["UID"])) {
				//login wechcha aya

			echo "Hello " . $_SESSION["NAME"];

			?>
			<a href="logout.php" class="btn btn-success">Logout</a>

			<?php

			}else{
				//login nowechcha aya

		?>

		<a href="login.php" class="btn btn-primary">Logink</a>
		<a href="login.php" class="btn btn-success">Register</a>
	

	<?php
	}
	?>

	</div>