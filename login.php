
<?php
// Define $username and $password
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect('localhost', 'root', '', 'hack16');
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection, "select * from login where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if ($rows >0) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username; // $username coming from the form, such as $_POST['username']
                                       // something like this is optional, of course
    header("location: log.php"); // Redirecting To Other Page
} else {
die(header("location:index.php?loginFailed=true&reason=password"));
}
mysqli_close($connection); // Closing Connection
?>
