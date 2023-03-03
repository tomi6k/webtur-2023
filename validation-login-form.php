<?php   

include 'dbconnect.php'; 

 $user = $_POST["username"];
 $pass = $_POST["password"];

$sql="SELECT * FROM `users` WHERE username = '$user' and passw = '$pass'";
$result=mysqli_query($conn, $sql);

$filas=mysqli_num_rows($result);
 	if($filas>0) {
 	header("location:admin.php");
 }
 else
 	header("location:login-error.html");

?>