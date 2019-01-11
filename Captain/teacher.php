<?php
session_start(); 
$esn = $_POST['esn'];
$pass = $_POST['pass'];
include 'connect.php';
$stmt = $conn->prepare("select '$esn' from teacher where tpass='$pass'");
$stmt->execute();
$res = $stmt->rowCount();
if($res) 
{
	$_SESSION["tname"] = $esn;
	echo "<script> alert('Login Successful !');</script>";
	echo "<script> window.location='teacherportal.php';</script>";
} 
else
{
	echo "<script> alert('Invalid Credentials, Try Again!');</script>";
	echo "<script> window.location='teacher.html';</script>";
}
?>