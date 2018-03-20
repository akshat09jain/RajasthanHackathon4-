<?php
session_start();
ob_start();
error_reporting(0);
include "connection.php";
$cos=$_REQUEST['cost'];
$pincode=$_REQUEST['rapin'];
$ran=$_REQUEST['range'];
$sql="select * from e_board where PanNo='$panno' or PinCode='$pincode' and ConsuptionRange='$ran'";
$result=mysqli_query($con,$sql);
$nums=mysqli_num_rows($result);;
if($nums>0)
{
	header("location:Eboards.php?msgc=* Pincode And Consuption Range Exists in Database.");
}
else
{
	$sql="select * from region where PinCode='$pincode'";
	$resulto=mysqli_query($con,$sql);
	$num_record=mysqli_num_rows($resulto);
	if($num_record>0)
	{
		$sql="INSERT INTO rate SET PinCode='".$pincode."',UnitCost='".$cos."',ConsuptionRange='".$ran."'";
		mysqli_query($con,$sql);
		header("location:index.php?nm=$cos");
	}
	else
	{
		header("location:Eboards.php?msgc=* Region is not available");
	}
}
?>