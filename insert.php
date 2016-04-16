<?php

$reg_number = $_POST['reg_number'];
$date = $_POST['date'];
$picture = $_POST['pic'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hack16";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			}
mysqli_query($conn, "SET NAMES 'utf8'");
$query = mysqli_query($conn, "INSERT INTO `offences` (`reg_number`, `date`, `picture`) VALUES ('$reg_number', '$date', '$picture')");
mysqli_close($conn);
?>

