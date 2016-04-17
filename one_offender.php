<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>

<!DOCTYPE html>
<html>
<head>
<title>Паркинги и гаражи</title>
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
<?php 
	$id = $_GET['id'];
 ?>
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
			<th>Дата | Час</th>
			<th>Снимка</th>
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
			$sql = "SELECT * FROM offences WHERE reg_number = '$id'";
			$result = mysqli_query($conn, $sql);
			foreach ($result as $key => $value) {
				echo "<tr>";
				echo "<td>" . $value['reg_number'] . "</td>";
				echo "<td>" . $value['date'] . "</td>";
				echo "<td>". $value['picture'] ."</td>";
				echo "</tr>";
			}
		}else {
			$sql = "SELECT * FROM offences WHERE reg_number = '$id' AND `made_by` = '$_SESSION[username]'";
			$result = mysqli_query($conn, $sql);
			foreach ($result as $key => $value) {
				echo "<tr>";
				echo "<td>" . $value['reg_number'] . "</td>";
				echo "<td>" . $value['date'] . "</td>";
				echo "<td>". $value['picture'] ."</td>";
				echo "</tr>";
			}
		}
			mysqli_close($conn);
			 ?>		
		</tbody>
	</table>
	<div class="col-md-1 col-md-offset-11 col-sm-6 col-xs-10 col-xs-offset-1 back">
	<a href="show_all.php"><button class="btn btn-danger">Назад</button></a>
	</div>
</body>
</html>
<?php
} else {
    echo "Моля впишете се, за да видите тази страница <br/>";
}
?>

