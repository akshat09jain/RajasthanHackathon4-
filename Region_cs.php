<?php
session_start();
ob_start();
error_reporting(0);
include "connection.php";
$name=$_REQUEST['rname'];
$pincode=$_REQUEST['rpin'];
$sql="select * from region where PinCode='$pincode' or RegionName='$name'";
$result=mysqli_query($con,$sql);
$nums=mysqli_num_rows($result);;
if($nums>0)
{
	header("location:Eboards.php?msgt=* Pincode or Region Name Should be different.");
}
else
{
	$sql="INSERT INTO region SET PinCode='".$pincode."',RegionName='".$name."'";
	mysqli_query($con,$sql);
	header("location:index.php?nm=$pincode");
}
?>