<?php
session_start();
ob_start();
error_reporting(0);
include "connection.php";
include "function.php";
logcheck();
?>
<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>DAM INFORMATION PORATAL</title>
		<meta charset="utf-8" />
		<link rel="icon" href="images/favicon.ico" type="image/ico">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">One Portal <span>all INFORMATION</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="EBoards.php">Water Dam Boards</a></li>
					<li><a href="Users.php">Users</a></li>
					<li><a href="showEboards.php">Show</a></li>
					<li><a href="search.php">Search</a></li>
                                        <li><a href="logout.php" class="button">Logout</a></li>
				</ul>
			</nav>

		<!-- Content -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="post" class="wrapper bg-img" data-bg="banner2.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>All Details</h2>
						</header>
						
						<div class="box">
							<?php
								 if(isset($_REQUEST['id']))
                                {
								$panno=$_REQUEST['id'];
								include "connection.php";
								$sql="select * from e_board b inner join region r on b.PinCode=r.PinCode where PanNo='$panno'";
								$result=mysqli_query($con,$sql);
								while($arr=mysqli_fetch_array($result))
								{
								?>
								<table>
								<tr><td>Pan No</td><td><?php echo $arr['PanNo']; ?></td></tr>
								<tr><td>GSTIN</td><td><?php echo $arr['GSTIN']; ?></td></tr>
								<tr><td>Board Name</td><td><?php echo $arr['BoardName']; ?></td></tr>
								<tr><td>Phone Number</td><td><?php echo $arr['Phone']; ?></td></tr>
								<tr><td>Address</td><td><?php echo $arr['Address']; ?></td></tr>
								<tr><td>Pin Code</td><td><?php echo $arr['PinCode']; ?></td></tr>
								<tr><td>Dam Region Name</td><td><?php echo $arr['RegionName']; ?></td></tr>
								</table>
							<?php }}
								else{
										echo "No Data Found";
								}
							 ?>
							</div>
					</article>
				</div>
			</section>
			<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ab097b3d7591465c708b749/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>