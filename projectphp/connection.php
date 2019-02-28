<?php 
$server ="localhost";
$username ="Admin";
$password = "passward";
$db = "6470";

$conn = mysqli_connect($server, $username ,$password , $db);
if (!$conn) {
	die("Db connection failed :" . mysqli_connect_error());
}else{
	// echo "<h1>success</h1>";
}
?>