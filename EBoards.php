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
		<link rel="icon" href="images/favicon.ico" type="image/ico">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Portal <span>for all information about DAM's</span></a></div>
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
						<table border="0"><tr><td><h1>Welcome:</h1></td><td><h1><font color="#993333"><?php echo $_SESSION['cc']; ?></font></h1></td></tr></table>
						<?php
                                                        if(isset($_REQUEST['mssg']))
                                                        {
                                                        ?>
                                                        <text align="center"><font color="#CCCCCC"><?php echo $_REQUEST['mssg']; ?></font></text>
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
							<h2>Board Registration Form</h2>
							<p>Form For Registering New Board Team</p>
						</header>
                            <?php
                                if(isset($_REQUEST['msg']))
                                {
                                ?>
                                <text align="center"><font color="#FF0000"><?php echo $_REQUEST['msg']; ?></font></text>
                                <h3></h3>
                            <?php } ?>
                            <form method="post" action="Eboards_cs.php">
                                <div class="row uniform">
                                    <div class="6u 12u$(xsmall)">
                                        <input type="text" name="pan" id="panno" value="" placeholder="PAN NO." required/>
                                    </div>
                                    <div class="6u$ 12u$(xsmall)">
                                        <input type="text" name="gst" id="gstin" value="" placeholder="GSTIN" required/>
                                    </div>
                                    <div class="12u$ 12u$(small)">
                                        <input type="text" name="bname" id="boardname" value="" placeholder="BOARD NAME" required/>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                        <textarea name="baddress" id="address" placeholder="Enter Address" rows="2" required></textarea>
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                        <input type="text" name="phone" id="phoneno" value="" placeholder="Phone No." required/>
                                    </div>
                                    <div class="6u$ 12u$(xsmall)">
                                        <input type="text" name="pin" id="pincode" value="" placeholder="Pin Code" required/>
                                    </div>
                                    <div class="6u$ 12u$(small)">
                                        <input type="checkbox" id="human" name="human" checked required>
                                        <label for="human">I am a human and not a robot</label>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                        <ul class="actions">
                                            <li><input type="submit" value="Submit" /></li>
                                            <li><input type="reset" value="Reset" class="alt" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
					</article>
				</div>
				<a href="#two" class="more">Learn More</a>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="banner5.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Branch Registration Form</h2>
							<p>Form For Registering New Sub-Team</p>
						</header>
                            <?php
                                if(isset($_REQUEST['msgb']))
                                {
                                ?>
                                <text align="center"><font color="#FF0000"><?php echo $_REQUEST['msgb']; ?></font></text>
                                <h3></h3>
                            <?php } ?>
                            <form method="post" action="EBranch_cs.php">
                                <div class="row uniform">
                                    <div class="6u 12u$(xsmall)">
                                        <input type="text" name="bcode" id="branchcode" value="" placeholder="Branch Code" required/>
                                    </div>
                                    <div class="6u$ 12u$(xsmall)">
										<input type="text" name="brname" id="branchname" value="" placeholder="Branch Name" required/>
                                    </div>
									<div class="6u 12u$(xsmall)">
                                        <input type="text" name="bphone" id="bphoneno" value="" placeholder="Phone No." required/>
                                    </div>
                                    <div class="6u$ 12u$(xsmall)">
										<input type="email" name="bemail" id="bemailid" value="" placeholder="Branch Email" required/>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                        <textarea name="braddress" id="baddress" placeholder="Enter Address" rows="2" required></textarea>
                                    </div>
                                    <div class="6u 12u$(xsmall)">
                                        <input type="text" name="bpanno" id="boardpanno" value="" placeholder="Board Pan No." required/>
                                    </div>
                                    <div class="6u$ 12u$(xsmall)">
                                        <input type="text" name="bpin" id="bpincode" value="" placeholder="Pin Code" required/>
                                    </div>
                                    <div class="6u$ 12u$(small)">
                                        <input type="checkbox" id="human" name="human" checked required>
                                        <label for="human">I am a human and not a robot</label>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                        <ul class="actions">
                                            <li><input type="submit" value="Submit" /></li>
                                            <li><input type="reset" value="Reset" class="alt" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
					</article>
				</div>
				<a href="#three" class="more">Learn More</a>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper post bg-img" data-bg="banner4.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Add Region Form</h2>
							<p>Form For Adding New Dam Region</p>
						</header>
                            <?php
                                if(isset($_REQUEST['msgt']))
                                {
                                ?>
                                <text align="center"><font color="#FF0000"><?php echo $_REQUEST['msgt']; ?></font></text>
                                <h3></h3>
                            <?php } ?>
                            <form method="post" action="Region_cs.php">
                                <div class="row uniform">
								<div class="6u$ 12u$(xsmall)">
                                        <input type="text" name="rpin" id="rpincode" value="" placeholder="Pin Code" required/>
                                    </div>
                                    <div class="6u$ 12u$(xsmall)">
										<input type="text" name="rname" id="regionname" value="" placeholder="Dam Region Name" required/>
                                    </div>
                                    <div class="6u$ 12u$(small)">
                                        <input type="checkbox" id="human" name="human" checked required>
                                        <label for="human">I am a human and not a robot</label>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                        <ul class="actions">
                                            <li><input type="submit" value="Submit" /></li>
                                            <li><input type="reset" value="Reset" class="alt" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
					</article>
				</div>
				<a href="#four" class="more">Learn More</a>
			</section>
		<!-- Four -->
			<section id="four" class="wrapper post bg-img" data-bg="banner6.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Admin Regestration Form</h2>
							<p>Form For Adding New Faces as admin</p>
						</header>
                            <?php
                                if(isset($_REQUEST['msgad']))
                                {
                                ?>
                                <text align="center"><font color="#FF0000"><?php echo $_REQUEST['msgad']; ?></font></text>
                                <h3></h3>
                            <?php } ?>
                            <form method="post" action="AReg_cs.php">
                                <div class="row uniform">
								<div class="6u$ 12u$(xsmall)">
                                        <input type="text" name="adname" id="adminname" value="" placeholder="Enter Name" required/>
                                    </div>
                                    <div class="6u$ 12u$(xsmall)">
										<input type="email" name="aemailid" id="aemialid" value="" placeholder="Enter Email Id" required/>
                                    </div>
									 <div class="6u$ 12u$(xsmall)">
										<input type="password" name="pass" id="passw" value="" placeholder="Enter Password" required/>
                                    </div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="boardc" id="boardcode" value="" placeholder="Enter Board Code" required/>
                                    </div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="branchc" id="branchcode" value="" placeholder="Enter Branch Code" required/>
                                    </div>
                                    <div class="6u$ 12u$(small)">
                                        <input type="checkbox" id="human" name="human" checked required>
                                        <label for="human">I am a human and not a robot</label>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                        <ul class="actions">
                                            <li><input type="submit" value="Sign UP" /></li>
                                            <li><input type="reset" value="Reset" class="alt" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
					</article>
				</div>
				<a href="#five" class="more">Learn More</a>
			</section>
			<!--FIVE-->
			<section id="five" class="wrapper post bg-img" data-bg="banner7.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Flow Rate Form</h2>
							<p>Form For Adding/Editing New flow Rates/Timings for a Region</p>
						</header>
                            <?php
                                if(isset($_REQUEST['msgc']))
                                {
                                ?>
                                <text align="center"><font color="#FF0000"><?php echo $_REQUEST['msgc']; ?></font></text>
                                <h3></h3>
                            <?php } ?>
                            <form method="post" action="Rate_cs.php">
                                <div class="row uniform">
								<div class="6u$ 12u$(xsmall)">
                                        <input type="text" name="rapin" id="rapincode" value="" placeholder="Pin Code" required/>
                                    </div>
                                    <div class="6u$ 12u$(xsmall)">
										<input type="text" name="cost" id="ucost" value="" placeholder="Water Amount" required/>
                                    </div>
									 <div class="6u$ 12u$(xsmall)">
										<input type="text" name="range" id="crange" value="" placeholder="New Timings" required/>
                                    </div>
                                    <div class="6u$ 12u$(small)">
                                        <input type="checkbox" id="human" name="human" checked required>
                                        <label for="human">I am a human and not a robot</label>
                                    </div>
                                    <!-- Break -->
                                    <div class="12u$">
                                        <ul class="actions">
                                            <li><input type="submit" value="Submit" /></li>
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