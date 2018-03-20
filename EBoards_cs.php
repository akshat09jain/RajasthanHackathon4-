<?php
session_start();
ob_start();
error_reporting(0);
include "connection.php";
$panno=$_REQUEST['pan'];
$gstin=$_REQUEST['gst'];
$name=$_REQUEST['bname'];
$address=$_REQUEST['baddress'];
$phoneno=$_REQUEST['phone'];
$pincode=$_REQUEST['pin'];
$sql="select * from e_board where PanNo='$panno' or GSTIN='$gstin' or BoardName='$name'";
$result=mysqli_query($con,$sql);
$nums=mysqli_num_rows($result);;
if($nums>0)
{
	header("location:Eboards.php?msg=* PanNO, GSTIN or BoardName Should be different.");
}
else
{
	$sql="select * from region where PinCode='$pincode'";
	$resulto=mysqli_query($con,$sql);
	$num_record=mysqli_num_rows($resulto);
	if($num_record>0)
	{
		$sql="INSERT INTO e_board SET PanNo='".$panno."',GSTIN='".$gstin."',BoardName='".$name."',Phone='".$phoneno."',Address='".$address."',PinCode='".$pincode."'";
		mysqli_query($con,$sql);
		header("location:index.php?nm=$panno");
	}
	else
	{
		header("location:Eboards.php?msg=* Region is not available");
	}
}
?>