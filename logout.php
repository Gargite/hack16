<?php 
session_start();
unset($_SESSION['loggedin']);
if ($_session) {
	echo "errorrrrrrrrrrrrrrr";
} else {
header("Location: index.php");
}
?>