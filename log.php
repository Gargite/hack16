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
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
<div style="text-align: center; font-size: 32px">
	Добре дошъл <?php echo $_SESSION['username']?>
</div>
	<br/>
	<div class="buttons">
	<?php if ($_SESSION['username'] == 'admin') {
		echo '<a href="show_all.php"><button class="btn btn-info">Виж Нарушители</button></a>';
	} else {
		echo '<a href="show_all.php"><button class="btn btn-info">Виж Нарушители</button></a>';
		echo " ";
		echo '<a href="form.php"><button class="btn btn-info">Регистрирай Нарушител</button></a>';
	}
	?>
	
	</div>
	</div>
</div>
</div>
</div>

</body>
</html>
<?php
} else {
    echo "Моля впишете се, за да видите тази страница <br/>";
}
?>




