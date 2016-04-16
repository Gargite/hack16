<!DOCTYPE html>
<html>
<head>
	<title>ОП Паркинги и Гаражи</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<script type="text/javascript">
		$(document).ready(function() {
    $('#offenders').DataTable();
} );
	</script>
	<div class="container">
	<table id="offenders" class="table table-hover" cellspacing="0" width="100%">
		<thead>
			<th>Регистрационен номер на Нарушител</th>
			<th> Дата</th>
		</thead>
		<tbody>
			<?php 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "hack16";
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "SELECT count()* FROM offences group by $reg_number = reg_number";
			$result = mysqli_query($conn, $sql);
			foreach ($result as $key => $value) {
				echo "<tr>";
				echo "<td>" . $value['reg_number'] . "</td>";
				echo "<td>" . $value['date'] . "</td>";
				// echo "<td><a href='one_offender.php?id=$value[reg_number]'><button class='btn btn-info'>Виж Повече</button></a></td>";
				echo "</tr>";
			}
			mysqli_close($conn);
			 ?>
				</tbody>
	</table>
	<br/>
	<br/>
	<div class="col-md-1 col-md-offset-11 col-sm-6 col-xs-10 col-xs-offset-1 back">
	<a href="log.php"><button class="btn btn-danger">Назад</button></a>
	</div>
	</div>
</body>

</html>