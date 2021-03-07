<?php
$server="localhost";
$user="root";
$pass="";
$db="itm";
$conn=new mysqli($server,$user,$pass,$db);
if($conn->connect_error)
echo "error".$conn->connect_error;
else
	echo "connected";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$un="'".$_POST['A']."'";
	$ps="'".$_POST['B']."'";
	$rtp="'".$_POST['C']."'";
	$fn="'".$_POST['D']."'";
	$ln="'".$_POST['E']."'";
	$ei="'".$_POST['F']."'";
	$ad="'".$_POST['G']."'";
	$pn="'".$_POST['H']."'";
	$pan="'".$_POST['I']."'";
	$vi="'".$_POST['J']."'";
	$ms="'".$_POST['K']."'";
	$gn="'".$_POST['L']."'";
	$ut="'".$_POST['M']."'";
	$c="'".$_POST['N']."'";
	$zc="'".$_POST['O']."'";
	$date="'".date('y-m-d')."'";
	$status=1;
	$sql="insert into nagendra
	(UserName,Passwords,RetypePassword,FirstName,LastName,EmailId,Address,
	PhoneNumber,PanNo,VoterId,MaritalStatus,Gender,UserType,Country,
	ZipCode,RegDate,Ustatus)
	values($un,$ps,$rtp,$fn,$ln,$ei,$ad,$pn,$pan,$vi,$ms,$gn,$ut,$c,$zc,$date,$status )";
	if($conn->query($sql)==true)
		echo "record inserted";
	else
		echo "some error occured".$conn->error;
	$conn-> close();
}
?>