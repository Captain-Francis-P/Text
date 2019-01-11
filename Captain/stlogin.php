<?php
$choice = $_POST['st'];
$ussn = $_POST['ussn'];
$pass = $_POST['pass'];
include 'connect.php';
if($choice==='student')
{
	$stmt = $conn->prepare("select '$ussn' from student where pass='$pass'");
	$stmt->execute();
	$res = $stmt->rowCount();
	if($res) 
	{
		echo "<script> alert('Login Successful !');</script>";
		echo "<script> window.location='studentportal.php';</script>";
	} 
	else
	{
		echo "<script> alert('Invalid Credentials, Try Again!');</script>";
		echo "<script> window.location='stlogin.html';</script>";
	}
}
else
{
	$stmt = $conn->prepare("select '$ussn' from teacher where tpass='$pass'");
	$stmt->execute();
	$res = $stmt->rowCount();
	if($res) 
	{
		echo "<script> alert('Login Successful !');</script>";
		echo "<script> window.location='teacherportal.php';</script>";
	} 
	else
	{
		echo "<script> alert('Invalid Credentials, Try Again!');</script>";
		echo "<script> window.location='stlogin.html';</script>";
	}

}

?>