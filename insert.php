<?php

$reg_number=$_POST['reg_number'];
$date=$_POST['date'];
$picture = $_POST['pic'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect('localhost', 'root', '', 'hack16');
// SQL query to fetch information of registerd users and finds user match.
mysqli_query($connection, "SET NAMES 'utf8'");
$query = mysqli_query($connection, "INSERT INTO `offenders` (`reg_number`, `date`, `picture`) VALUES ('$reg_number', '$date', '$picture')");
mysqli_close($connection); // Closing Connection
?>