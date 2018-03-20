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
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Portal <span>for all information about dissimention of dams</span></a></div>
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

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="banner.jpg">
				<div class="inner">
					<header>
						<table border="0"><tr><td><h1>Welocome:</h1></td><td><h1><font color="#993333"><?php echo $_SESSION['cc']; ?></font></h1></td></tr></table>
					</header>
				</div>
				<a href="#one" class="more">Learn More</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
				<div class="inner"">
					<article class="box">
						<header>
							<h2>Dam Regions List</h2>
							<p>Dam Available Regions</p>
						</header>
						<div class="table-wrapper"  style="overflow-y: scroll; height:400px;">
									<table>
										<thead>
											<tr>
												<th><div align="center">S.No</div></th>
												<th><div align="center">Dam Region Name</div></th>
												<th><div align="center">Pin Code</div></th>
												<th><div align="center">More</div></th>
											</tr>
										</thead>
										<tbody>
											 <?php
												 $count=1;
												 include "connection.php";
												$sql="select * from region";
												$result=mysqli_query($con,$sql);
												while($arr=mysqli_fetch_array($result))
												{
												?>
												<tr>
												<td><?=$count++; ?></td>
												<td><?php echo $arr['RegionName']; ?></td>
												<td><?php echo $arr['PinCode']; ?></td>
												<td><a href="cost.php?id=<?php echo $arr['PinCode']; ?>" class="button alt icon fa-check">Show Flow Details</a></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
					</article>
				</div>
				<a href="#two" class="more">Learn More</a>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="banner5.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Boards</h2>
							<p>List Of All Boards</p>
						</header>
						<div>
							<form method="post" action="more.php">
							<input type="text" name="id" placeholder="Search by Id">
							<input type="submit" value="Search" class="button special icon fa-search">
							</form>
						</div>
						<div class="table-wrapper"  style="overflow-y: scroll; height:400px;">
									<table>
										<thead>
											<tr>
												<th><div align="center">Sr.No</div></th>
												<th><div align="center">Pan No</div></th>
												<th><div align="center">GSTIN</div></th>
												<th><div align="center">Board Name</div></th>
												<th><div align="center">More</div></th>>
											</tr>
										</thead>
										<tbody>
											 <?php
												 $count=1;
												 include "connection.php";
												$sql="select * from e_board";
												$result=mysqli_query($con,$sql);
												while($arr=mysqli_fetch_array($result))
												{
												?>
												<tr>
												<td><?=$count++; ?></td>
												<td><?php echo $arr['PanNo']; ?></td>
												<td><?php echo $arr['GSTIN']; ?></td>
												<td><?php echo $arr['BoardName']; ?></td>
												<td><a href="more.php?id=<?php echo $arr['PanNo']; ?>" class="button alt icon fa-check">Show More</a></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
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