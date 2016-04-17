<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>
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
	<a href="logout.php"><button class="btn btn-danger">Отпиши се</button></a>
</head>

<body>
	<script type="text/javascript">
	$(document).ready(function() {
    $('#offenders').DataTable( {
        "order": [[ 1, "desc" ]]
    } );
} );
	</script>
	<div class="container">
	<table id="offenders" class="table table-hover" cellspacing="0" width="100%">
		<thead>
			<th>Регистрационен номер на Нарушител</th>
			<th>Брой Нарушения</th>
			<th>Виж Подробности</th>
<?php if ($_SESSION['username'] == 'admin')
{
	echo "<th>Изчисти Нарушения</th>";
} else {
	echo "<th>Добави Нарушение</th>";
}
?>
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
			if ($_SESSION['username'] == 'admin') {
			$sql = "SELECT COUNT(*) as cnt_all, reg_number FROM offences WHERE `date_paid` IS NULL GROUP BY reg_number ORDER BY cnt_all DESC";
			$result = mysqli_query($conn, $sql);
			foreach ($result as $key => $value) {
				echo "<tr>";
				echo "<td>" . $value['reg_number'] . "</td>";
				echo "<td>" . $value['cnt_all'] . "</td>";
				echo "<td><a href='one_offender.php?id=$value[reg_number]'><button class='btn btn-info'>Виж Повече</button></a></td>";
				echo "<td><a href='remove_offence.php?id=$value[reg_number]'><button class='btn btn-success'>Изчисти Нарушения</button></a></td>";
				echo "</tr>";
			}
			}else{
				$sql = "SELECT COUNT(*) as cnt_all, reg_number FROM offences WHERE `made_by` = '$_SESSION[username]' AND `date_paid` IS NULL AND DATE(`date`) = CURRENT_DATE GROUP BY reg_number ORDER BY cnt_all DESC";
			$result = mysqli_query($conn, $sql);
			foreach ($result as $key => $value) {
				echo "<tr>";
				echo "<td>" . $value['reg_number'] . "</td>";
				echo "<td>" . $value['cnt_all'] . "</td>";
				echo "<td><a href='one_offender.php?id=$value[reg_number]'><button class='btn btn-info'>Виж Повече</button></a></td>";
				echo "<td><a href='add_offence.php?id=$value[reg_number]'><button class='btn btn-success'>Добави Нарушение</button></a></td>";
				echo "</tr>";
			}
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
<?php
} else {
    echo "Моля впишете се, за да видите тази страница <br/>";
}
?>