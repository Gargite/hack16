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
$now =  date('m-d-Y:h:i'); ?>
	<form class='form-group'>
	<fieldset class="form-group">
		<div class='form-group'>
		<label for="exampleInoutName2">Регистрационен номер: <input class="form-control" id="exampleInoutName2"type='text' name='regnumebr'></label>
	</fieldset>
	<fieldset class="form-group">
		<label for="exampleInoutName2">Дата: <input type='text' name='date' class="form-control" id="exampleInoutName2" value="<?php echo $now ?>"></label>
	</fieldset>
	<fieldset class="form-group">
	<input type="file" name="pic">
	</fieldset>
		<label for="exampleInoutName2"> <button type="submit" class="btn btn-primary">Направи запис</button></label>
	</div>
	</form>
</body>
</html>


