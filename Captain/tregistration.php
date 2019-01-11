<?php
$key = $_POST['key'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$addr = $_POST['addr'];
$newpass = $_POST['newpass'];
$conpass = $_POST['conpass'];
include 'connect.php';
$k='VKITCSE';
$ssn1=$key[0].$key[1].$name[0].$name[1].$phone[0].$phone[1].$email[0].$email[1];
$ssn=strtoupper($ssn1);
if($key===$k)
{
$stmt = $conn->prepare("insert into teacher (tid,tname,tphone,temail,taddr,tpass) values ('$ssn','$name','$phone','$email','$addr','$newpass')");
$stmt->execute();
$res = $stmt->rowCount();
if($newpass===$conpass)
{
if($res) 
{
	echo '<script> alert("Regsitered Successfully !\n'.$ssn.' is your ESN\nRemember it to login from next time !");</script>';
	echo "<script> window.location='teacher.html';</script>";
} 
else
{
	echo "<script> alert('Something went wrong, Try Again!');</script>";
	echo "<script> window.location='teacher.html';</script>";
}
}else{
	echo "<script> alert('Passwords donot match !');</script>";
	echo "<script> window.location='tregistration.html';</script>";
}
}
else
{
	echo "<script> alert('Invalid Secret Key !');</script>";
	echo "<script> window.location='tregistration.html';</script>";
}
?>