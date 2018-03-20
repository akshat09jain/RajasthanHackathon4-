<?php
session_start();
ob_start();
error_reporting(0);
include "connection.php";
include "function.php";
nlogcheck();
?>
<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>DAM WATER ALERT PORATAL</title>
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
                    <li><a href="EBoards.php">DAM Control Boards</a></li>
					<li><a href="Users.php">Users</a></li>
					<li><a href="showEboards.php">Show</a></li>
					<li><a href="more.php">Search</a></li>
					<li><a href="#one" class="button">Login</a></li>
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
						<h1>One Portal - All Info</h1>
						<?php
                                if(isset($_REQUEST['msg']))
                                {
                                ?>
                                <text align="center"><font color="#CCCCCC"><?php echo $_REQUEST['msg']; ?></font></text>
                                <h3></h3>
                        <?php } ?>
					</header>
				</div>
				<a href="#one" class="more">Learn More</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="banner3.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Admin Login</h2>
							<p>Login as Admin</p>
						</header>
                            <?php
                                if(isset($_REQUEST['msg']))
                                {
                                ?>
                                <text align="center"><font color="#FF0000"><?php echo $_REQUEST['msg']; ?></font></text>
                                <h3></h3>
                            <?php } ?>
                            <form method="post" action="index_cs.php">
                                <div class="row uniform">
                                    <div class="12u$ 12u$(small)">
                                        <input type="text" name="uname" id="Uname" value="" placeholder="E-mail ID" required/>
                                    </div>
                                    <div class="12u 12u$(small)">
                                        <input type="password" name="lpass" id="lpassword" value="" placeholder="Password" required/>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                        <ul class="actions">
                                            <li><input type="submit" value="Log In" /></li>
                                            <li><input type="reset" value="Reset" class="alt" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>