<?php
$usn = $_POST['usn'];

$csan = $_POST['csan'];
$asan = $_POST['asan'];
$san=($asan/$csan)*100;

$cweb = $_POST['cweb'];
$aweb = $_POST['aweb'];
$web=($aweb/$cweb)*100;

$caca = $_POST['caca'];
$aaca = $_POST['aaca'];
$aca=($aaca/$caca)*100;

$cusp = $_POST['cusp'];
$ausp = $_POST['ausp'];
$usp=($ausp/$cusp)*100;

$cml = $_POST['cml'];
$aml = $_POST['aml'];
$ml=($aml/$cml)*100;

$cmll = $_POST['cmll'];
$amll = $_POST['amll'];
$mll=($amll/$cmll)*100;

$cwebl = $_POST['cwebl'];
$awebl = $_POST['awebl'];
$webl=($awebl/$cwebl)*100;

include 'connect.php';
$stmt = $conn->prepare("update attendance_status set SAN='$san',ACA='$aca',WEB='$web',USP='$usp',ML='$ml',WEB_LAB='$webl',ML_LAB='$mll' where USN='$usn'");
$stmt->execute();
$res = $stmt->rowCount();
if($san>100 || $web>100 || $aca>100 || $usp>100 || $ml>100 || $mll>100 || $webl>100 )
{
	echo "<script> alert('Invalid Credentials !');</script>";
}
else
{
	if($res) 
	{
		echo "<script> alert('Updated Successfully !');</script>";
		echo "<script> window.location='updateas1.php';</script>";
	} 
	else
	{
		echo "<script> alert('Something went wrong !\nTry Again');</script>";
	}
}
?>
