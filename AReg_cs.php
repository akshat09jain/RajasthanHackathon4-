<?php
session_start();
ob_start();
error_reporting(0);
include "connection.php";
$email=$_REQUEST['aemailid'];
$name=$_REQUEST['adname'];
$passw=$_REQUEST['pass'];
$board=$_REQUEST['boardc'];
$branch=$_REQUEST['branchc'];
$sql="select * from admin where Email_id='$email'";
$result=mysqli_query($con,$sql);
$nums=mysqli_num_rows($result);;
if($nums>0)
{
	header("location:Eboards.php?msgad=* Email Id Should be different.");
}
else
{
	$sql="select * from e_board where PanNo='$board'";
	$resulto=mysqli_query($con,$sql);
	$num_record=mysqli_num_rows($resulto);
	if($num_record>0)
	{
		$sql="select * from e_board_branches where B_Code='$branch'";
		$resulto=mysqli_query($con,$sql);
		$num_record=mysqli_num_rows($resulto);
		if($num_record>0)
		{
			$sql="INSERT INTO admin SET Email_id='".$email."',Password='".$passw."',Name='".$name."',BoardCode='".$board."',BranchCode='".$branch."'";
			mysqli_query($con,$sql);
			header("location:index.php?nm=$email");
		}
		else
		{
			header("location:Eboards.php?msgad=* Branch is not available");
		}
	}
	else
	{
		header("location:Eboards.php?msgad=* Board is not available");
	}
}
?>