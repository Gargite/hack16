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
	<form class='form-group'>
	<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1">
	<fieldset class="form-group">
		<div class='form-group'>
		<label for="exampleInoutName2">Регистрационен номер: </label>
		<input class="form-control" id="exampleInoutName2"type='text' name='regnumebr' required />
	</fieldset>
	</div>
	</div>
	<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1">
	<fieldset class="form-group">
		<label for="exampleInoutName2">Дата: </label>
		<input type='text' name='date' class="form-control" id="exampleInoutName2" value="<?php echo $now ?>" readonly/>
	</fieldset>
	</div>
	</div>
	<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1">
	<fieldset class="form-group">
	<input type="file" name="pic" required />
	</fieldset>
		<label for="exampleInoutName2"> <button type="submit" class="btn btn-primary">Направи запис</button></label>
	</div>
	</div>
	</form>
	</div>
</body>
</html>


