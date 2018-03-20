<?php
session_start();
ob_start();
error_reporting(0);
include "connection.php";
$code=$_REQUEST['bcode'];
$name=$_REQUEST['brname'];
$phone=$_REQUEST['bphone'];
$email=$_REQUEST['bemail'];
$address=$_REQUEST['braddress'];
$pan=$_REQUEST['bpanno'];
$pincode=$_REQUEST['bpin'];
$sql="select * from e_board_branches where B_Code='$code' or B_Name='$name'";
$result=mysqli_query($con,$sql);
$nums=mysqli_num_rows($result);;
if($nums>0)
{
	header("location:Eboards.php?msgb=* BCode or BranchName Should be different.");
}
else
{
	$sql="select * from region where PinCode='$pincode'";
	$resulto=mysqli_query($con,$sql);
	$num_record=mysqli_num_rows($resulto);
	if($num_record>0)
	{
	
		$sql="select * from e_board where PanNo='$pan'";
		$resultop=mysqli_query($con,$sql);
		$num_recordq=mysqli_num_rows($resultop);
		if($num_recordq>0)
		{
			$sql="INSERT INTO e_board_branches SET B_Code='".$code."',B_Name='".$name."',PhoneNo='".$phone."',Email='".$email."',Address='".$address."',BoardPanNo='".$pan."',PinCode='".$pincode."'";
			mysqli_query($con,$sql);
			header("location:index.php?nm=$code");
		}
		else
		{
			header("location:Eboards.php?msgb=* Board is not available");
		}
	}
	else
	{
		header("location:Eboards.php?msgb=* Region is not available");
	}
}
?>