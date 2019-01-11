<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
include 'connect.php';
$stmt = $conn->prepare("insert into feedback (name,email,message) values ('$name','$email','$message')");
$stmt->execute();
$res = $stmt->rowCount();
if($res) 
{
	echo "<script> alert('Your feedback has been accepted successfully !');</script>";
	echo "<script> window.location='contact.html';</script>";
} 
else
{
	echo "<script> alert('Something went wrong, Try Again!');</script>";
	echo "<script> window.location='contact.html';</script>";
}
?>