<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	include('header.php');
?>
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

