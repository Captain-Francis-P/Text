<?php
$usn = $_POST['usn'];
$pass = $_POST['pass'];
include 'connect.php';
$stmt = $conn->prepare("select '$usn' from admin where pass='$pass'");
$stmt->execute();
$res = $stmt->rowCount();
if($res) 
{
	echo "<script> alert('Login Successful !');</script>";
	echo "<script> window.location='adminportal.html';</script>";
} 
else
{
	echo "<script> alert('Invalid Credentials, Try Again!');</script>";
}
?>