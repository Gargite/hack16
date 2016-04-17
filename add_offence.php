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
$reg_number = $_GET['id'];
$date = date('Y-m-d H:i:s');
mysqli_query($conn, "SET NAMES 'utf8'");
$query = mysqli_query($conn, "INSERT INTO `offences` (`reg_number`, `date`, `made_by`) VALUES ('$reg_number', '$date', '$_SESSION[username]')");
if($query){
	?>

<div class= "success">
<div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">
Успешно въведохте Нарушителят!
</div>
<br/>
<div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">
</div>
</div>
<?php
}
else
{
echo "Възникна грешка, моля опитайте по- късно";

}
mysqli_close($conn);
?>
<?php require_once('footer.php');?>
</body>
</html>
<?php
} else {
    echo "Моля впишете се, за да видите тази страница <br/>";
}
?>

