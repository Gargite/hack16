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
date_default_timezone_set("Europe/Sofia");
$date = date('d-m-Y | H:i:s'); 
$query = mysqli_query($conn, "UPDATE `offences` SET `date_paid` = '$date' WHERE `reg_number` = '$reg_number' ");
if($query)
{?>
<div class= "success">
<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
Успешно изчистихте Нарушенията на <?php echo $reg_number;?>!
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

