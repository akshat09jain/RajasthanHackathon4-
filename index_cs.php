<?php
session_start();
ob_start();
error_reporting(0);
include "connection.php";
$user=$_REQUEST['uname'];
$pass=$_REQUEST['lpass'];
$sql="select * from admin where Email_id='$user' and Password='$pass'";
$result=mysqli_query($con,$sql);
$arr=mysqli_fetch_array($result);
$num_record=mysqli_num_rows($result);
if($num_record>0)
{
	$_SESSION['aa']=$arr['Email_id'];
	$_SESSION['bb']=$arr['Password'];
	$_SESSION['cc']=$arr['Name'];
	header("location:EBoards.php");
}
else
{
	header("location:index.php?msg=user id and password mistmatch");
}
?>