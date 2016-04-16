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
	
	
	
	
	<style> 
.fileUpload {
    position: relative;
    overflow: hidden;
	width:auto;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
	
	</style>
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
	<div class="fileUpload btn btn-success">
    <span>Добави снимка</span>
    <input type="file" class="upload" />
</div>
	</fieldset>
		<label for="exampleInoutName2"> <button type="submit" class="btn btn-primary">Направи запис</button></label>
	</div>
	</form>
</body>
</html>


