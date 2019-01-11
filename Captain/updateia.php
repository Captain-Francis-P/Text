<?php
$usn = $_POST['usn'];

$ia = $_POST['iam'];

$san1a = $_POST['san1a'];
$san1b = $_POST['san1b'];
$san1c = $_POST['san1c'];
$sansum1 = $san1a+$san1b+$san1c;

$san2a = $_POST['san2a'];
$san2b = $_POST['san2b'];
$san2c = $_POST['san2c'];
$sansum2 = $san2a+$san2b+$san2c;

$san1;
if($sansum1>$sansum2)
	$san1=$sansum1;
else
	$san1=$sansum2;

$san3a = $_POST['san3a'];
$san3b = $_POST['san3b'];
$san3c = $_POST['san3c'];
$sansum3 = $san3a+$san3b+$san3c;

$san4a = $_POST['san4a'];
$san4b = $_POST['san4b'];
$san4c = $_POST['san4c'];
$sansum4 = $san4a+$san4b+$san4c;

$san2;
if($sansum3>$sansum4)
	$san2=$sansum3;
else
	$san2=$sansum4;
$san=$san1+$san2;


$web1a = $_POST['web1a'];
$web1b = $_POST['web1b'];
$web1c = $_POST['web1c'];
$websum1 = $web1a+$web1b+$web1c;

$web2a = $_POST['web2a'];
$web2b = $_POST['web2b'];
$web2c = $_POST['web2c'];
$websum2 = $web2a+$web2b+$web2c;

$web1;
if($websum1>$websum2)
	$web1=$websum1;
else
	$web1=$websum2;


$web3a = $_POST['web3a'];
$web3b = $_POST['web3b'];
$web3c = $_POST['web3c'];
$websum3 = $web3a+$web3b+$web3c;

$web4a = $_POST['web4a'];
$web4b = $_POST['web4b'];
$web4c = $_POST['web4c'];
$websum4 = $web4a+$web4b+$web4c;

$web2;
if($websum3>$websum4)
	$web2=$websum3;
else
	$web2=$websum4;
$web=$web1+$web2;


$aca1a = $_POST['aca1a'];
$aca1b = $_POST['aca1b'];
$aca1c = $_POST['aca1c'];
$acasum1 = $aca1a+$aca1b+$aca1c;

$aca2a = $_POST['aca2a'];
$aca2b = $_POST['aca2b'];
$aca2c = $_POST['aca2c'];
$acasum2 = $aca2a+$aca2b+$aca2c;

$aca1;
if($acasum1>$acasum2)
	$aca1=$acasum1;
else
	$aca1=$acasum2;

$aca3a = $_POST['aca3a'];
$aca3b = $_POST['aca3b'];
$aca3c = $_POST['aca3c'];
$acasum3 = $aca3a+$aca3b+$aca3c;

$aca4a = $_POST['aca4a'];
$aca4b = $_POST['aca4b'];
$aca4c = $_POST['aca4c'];
$acasum4 = $aca4a+$aca4b+$aca4c;

$aca2;
if($acasum3>$acasum4)
	$aca2=$acasum3;
else
	$aca2=$acasum4;
$aca=$aca1+$aca2;


$usp1a = $_POST['usp1a'];
$usp1b = $_POST['usp1b'];
$usp1c = $_POST['usp1c'];
$uspsum1 = $usp1a+$usp1b+$usp1c;

$usp2a = $_POST['usp2a'];
$usp2b = $_POST['usp2b'];
$usp2c = $_POST['usp2c'];
$uspsum2 = $usp2a+$usp2b+$usp2c;

$usp1;
if($uspsum1>$uspsum2)
	$usp1=$uspsum1;
else
	$usp1=$uspsum2;

$usp3a = $_POST['usp3a'];
$usp3b = $_POST['usp3b'];
$usp3c = $_POST['usp3c'];
$uspsum3 = $usp3a+$usp3b+$usp3c;

$usp4a = $_POST['usp4a'];
$usp4b = $_POST['usp4b'];
$usp4c = $_POST['usp4c'];
$uspsum4 = $usp4a+$usp4b+$usp4c;

$usp2;
if($uspsum3>$uspsum4)
	$usp2=$uspsum3;
else
	$usp2=$uspsum4;
$usp=$usp1+$usp2;


$ml1a = $_POST['ml1a'];
$ml1b = $_POST['ml1b'];
$ml1c = $_POST['ml1c'];
$mlsum1 = $ml1a+$ml1b+$ml1c;

$ml2a = $_POST['ml2a'];
$ml2b = $_POST['ml2b'];
$ml2c = $_POST['ml2c'];
$mlsum2 = $ml2a+$ml2b+$ml2c;

$ml1;
if($mlsum1>$mlsum2)
	$ml1=$mlsum1;
else
	$ml1=$mlsum2;

$ml3a = $_POST['ml3a'];
$ml3b = $_POST['ml3b'];
$ml3c = $_POST['ml3c'];
$mlsum3 = $ml3a+$ml3b+$ml3c;

$ml4a = $_POST['ml4a'];
$ml4b = $_POST['ml4b'];
$ml4c = $_POST['ml4c'];
$mlsum4 = $ml4a+$ml4b+$ml4c;

$ml2;
if($mlsum3>$mlsum4)
	$ml2=$mlsum3;
else
	$ml2=$mlsum4;
$ml=$ml1+$ml2;


// $mll1a = $_POST['mll1a'];
// $mll1b = $_POST['mll1b'];
// $mll1c = $_POST['mll1c'];
// $mllsum1 = $mll1a+$mll1b+$mll1c;

// $mll2a = $_POST['mll2a'];
// $mll2b = $_POST['mll2b'];
// $mll2c = $_POST['mll2c'];
// $mllsum2 = $mll2a+$mll2b+$mll2c;

// $mll1;
// if($mllsum1>$mllsum2)
// 	$mll1=$mllsum1;
// else
// 	$mll1=$mllsum2;

// $mll3a = $_POST['mll3a'];
// $mll3b = $_POST['mll3b'];
// $mll3c = $_POST['mll3c'];
// $mllsum3 = $mll3a+$mll3b+$mll3c;

// $mll4a = $_POST['mll4a'];
// $mll4b = $_POST['mll4b'];
// $mll4c = $_POST['mll4c'];
// $mllsum4 = $mll4a+$mll4b+$mll4c;

// $mll2;
// if($mllsum3>$mllsum4)
// 	$mll2=$mllsum3;
// else
// 	$mll2=$mllsum4;
// $mll=$mll1+$mll2;


// $webl1a = $_POST['webl1a'];
// $webl1b = $_POST['webl1b'];
// $webl1c = $_POST['webl1c'];
// $weblsum1 = $webl1a+$webl1b+$webl1c;


// $webl2a = $_POST['webl2a'];
// $webl2b = $_POST['webl2b'];
// $webl2c = $_POST['webl2c'];
// $weblsum2 = $webl2a+$webl2b+$webl2c;

// $webl1;
// if($weblsum1>$weblsum2)
// 	$webl1=$weblsum1;
// else
// 	$webl1=$weblsum2;

// $webl3a = $_POST['webl3a'];
// $webl3b = $_POST['webl3b'];
// $webl3c = $_POST['webl3c'];
// $weblsum3 = $webl3a+$webl3b+$webl3c;

// $webl4a = $_POST['webl4a'];
// $webl4b = $_POST['webl4b'];
// $webl4c = $_POST['webl4c'];
// $weblsum4 = $webl4a+$webl4b+$webl4c;

// $webl2;
// if($weblsum3>$weblsum4)
// 	$webl2=$weblsum3;
// else
// 	$webl2=$weblsum4;
// $webl=$webl1+$webl2;

include 'connect.php';

if($ia==='1')
{
	$stmt = $conn->prepare("update iamarks_1 set SAN1='$san',ACA1='$aca',WEB1='$web',USP1='$usp',ML1='$ml' where USN='$usn'");
}
elseif ($ia==='2') 
{
	$stmt = $conn->prepare("update iamarks_2 set SAN2='$san',ACA2='$aca',WEB2='$web',USP2='$usp',ML2='$ml' where USN='$usn'");
}
else
{
	$stmt = $conn->prepare("update iamarks_3 set SAN3='$san',ACA3='$aca',WEB3='$web',USP3='$usp',ML3='$ml' where USN='$usn'");
}
$stmt->execute();
$res = $stmt->rowCount();
if($res) 
	{
		echo "<script> alert('Updated Successfully !');</script>";
		echo "<script> window.location='updateia1.php';</script>";
	} 
	else
	{
		echo "<script> alert('Something went wrong !\nTry Again');</script>";
	}
?>