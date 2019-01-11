<?php
session_start();
$usn = $_POST['usn'];
$pass = $_POST['pass'];
include 'connect.php';
$stmt = $conn->prepare("select '$usn' from student where pass='$pass'");
$stmt->execute();
$res = $stmt->rowCount();
if($res) 
{	
	$_SESSION["usn"] = $usn;
	echo "<script> alert('Login Successful !');</script>";
	echo "<script> window.location='studentportal.php';</script>";
} 
else
{
	echo "<script> alert('Invalid Credentials, Try Again!');</script>";
	echo "<script> window.location='student.html';</script>";
}
?>