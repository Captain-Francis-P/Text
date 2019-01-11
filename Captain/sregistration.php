<?php
$usn = $_POST['usn'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$addr = $_POST['addr'];
$newpass = $_POST['newpass'];
$conpass = $_POST['conpass'];
include 'connect.php';
$stmt = $conn->prepare("insert into student (usn,name,phone,email,addr,pass) values ('$usn','$name','$phone','$email','$addr','$newpass')");
$stmt->execute();
$res = $stmt->rowCount();
if($newpass===$conpass)
{
if($res) 
{
	echo "<script> alert('Registered Successfully !');</script>";
	echo "<script> window.location='student.html';</script>";
} 
else
{
	echo "<script> alert('Something went wrong, Try Again!');</script>";
	echo "<script> window.location='student.html';</script>";
}
}else{
	echo "<script> alert('Passwords donot match !');</script>";
	echo "<script> window.location='sregistration.html';</script>";
}
?>