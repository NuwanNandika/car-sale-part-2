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

	<h2>Member List</h2>
	<hr/>

		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>JOIN_DATE</th>
					<th>ROLE</th>
				</tr>
			</thead>

			<tbody>
			<?php

				require ("Include/Dbconnection.php");
				$sql="select * from Member";
				/*$con = mysqli_connect("localhost","root","","dbcarsale");
				if($con){*/

				$result=mysqli_query($con, $sql);
				while($row = mysqli_fetch_array($result)){
					
			?>
				<tr>
					<td><?=$row["Id"] ?></td>
					<td><?=$row["Name"] ?></td>
					<td><?=$row["Email"] ?></td>
					<td><?=$row["Join_Date"] ?></td>
					<td><?=$row["Role"] ?></td>
					<td>
						<a href="brand_view.phpid=<?=$row["id"] ?>" class="btn btn-info">VIEW</a>
						<a href="brand_edit.phpid=<?=$row["id"] ?>" class="btn btn-warning">EDIT</a>
						<a href="brand_delete.phpid=<?=$row["id"] ?>" class="btn btn-danger">DELETE</a>
					</td>
					
				</tr>

				<?php
						}
					//}
				

				?>
			</tbody>
		</table>
	</div>

	
<?php include("Include/Footer.php");?>

</div>

</body>
</html>