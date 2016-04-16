<!DOCTYPE html>
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
<?php  date_default_timezone_set("Europe/Sofia");
$now =  date('m-d-Y | H:i'); ?>
<div class="container">
	<form class='form-group' method="post" action="insert.php">
	<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1">
	<fieldset class="form-group">
		<div class='form-group'>
		<label for="reg_number">Регистрационен номер: </label>
		<input class="form-control" id="reg_number"type='text' name='reg_number' required />
	</fieldset>
	</div>
	</div>
	<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1">
	<fieldset class="form-group">
		<label for="date">Дата: </label>
		<input type='text' name='date' class="form-control" id="date" value="<?php echo $now ?>" readonly/>
	</fieldset>
	</div>
	</div>
	<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1">
	<fieldset class="form-group">
	<input type="file" name="pic" required />
	</fieldset>
		<input type="submit" class="btn btn-info" value="Направи запис">
	</div>
	</div>
	</form>
	<div class="col-md-3 col-md-offset-7 col-sm-6 col-xs-10 col-xs-offset-1 back">
	<a href="log.php"><button class="btn btn-danger">Назад</button></a>
	</div>
	</div>
</body>
</html>


