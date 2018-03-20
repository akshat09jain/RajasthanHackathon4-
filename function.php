<?php
function logcheck()
{
   if(!isset($_SESSION['aa']))
   {
	   header("location:index.php?msg=* First Login Than Try Again");
   }
}
function nlogcheck()
{
   if(isset($_SESSION['aa']))
   {
	   header("location:EBoards.php?mssg=* Already Logged In");
   }
}
?>