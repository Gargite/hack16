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
<script type="text/javascript" href="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<link rel="stylesheet" href="css/styles.css">
<a href="logout.php"><button class="btn btn-danger">Отпиши се</button></a>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hack16";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			}
$reg_number = mysqli_real_escape_string($conn, $_POST['reg_number']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$user = mysqli_real_escape_string($conn, $_SESSION['username']);
$picture = mysqli_real_escape_string($conn, $_POST['pic']);
if(strlen($reg_number)>0 && strlen($date)>0 && strlen($user)>0 && strlen($picture)>0)
{
mysqli_query($conn, "SET NAMES 'utf8'");
$query = mysqli_query($conn, "INSERT INTO `offences` (`reg_number`, `date`, `made_by`, `picture`) VALUES ('$reg_number', '$date', '$user', '$picture')");
if($query)
{?>
<div class= "success">
<div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">
Успешно въведохте Нарушителят!
</div>
<br/>
<div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">
<a href="log.php"><button class="btn btn-danger">Назад</button></a>
</div>
</div>
<?php
}
else
{
echo "Възникна грешка, моля опитайте по- късно";

}
mysqli_close($conn);
}
?>
</body>
</html>
<?php
} else {
    echo "Моля впишете се, за да видите тази страница <br/>";
}
?>

