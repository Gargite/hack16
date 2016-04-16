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
			<th> Брой нарушения</th>
			<th> Виж повече</th>
		</thead>
		<tbody>
			<tr>
				<td>ВР3055СА</td>
				<td>asoisa</td>
				<td><button class="btn btn-info">Виж</button></td>
			</tr>
			<tr>
				<td>ВР3355СА</td>
				<td>евф</td>
				<td><button class="btn btn-info">Виж</button></td>
			</tr>
			<tr>
				<td>ВР6455СА</td>
				<td>агдф</td>
				<td><button class="btn btn-info">Виж</button></td>
			</tr>
		</tbody>
	</table>
	</div>
</body>

</html>