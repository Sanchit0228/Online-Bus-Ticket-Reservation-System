<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Profile</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<style type="text/css">

input    {
width:375px;
display:block;
border: 1px solid #999;
height: 25px;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
input.button {
width:100px;
position:absolute;
right:20px;
bottom:20px;
background:#09C;
color:#fff;
font-family: Tahoma, Geneva, sans-serif;
height:30px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border: 1p solid #999;
}
input.button:hover {
background:#fff;
color:#09C;
}
form    {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:550px;
height:450px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: bold;
color: #000000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

input::-webkit-input-placeholder {
  color: 	#f00;
}
textarea#feedback {
width:375px;
height:150px;
}
textarea.message {
display:block;
}
h2{
	color:red;
}
h4
{
	color:white;
}
td{
	color:white;
}
		</style>
	</head>
	<body style="background:-webkit-linear-gradient(left top,BurlyWood,Chocolate,Darkkhaki,BlanchedAlmond,BurlyWood); background: linear-gradient(to bottom right,BurlyWood,CadetBlue,Darkkhaki,BlanchedAlmond,BurlyWood);">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">KING of KINGS</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="generic.php">Home</a></li>
					<!--	<li><a href="#book">Book Now</a></li>-->
						<li><a href="history1.php">Booking History</a></li>
						<li><a href="profile.php">View Profile</a></li>
				<!--		<li><a href="update.php">Update Profile</a></li>	-->
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</header>
			<div class="container">
				<?php session_start();?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<center><i><font  size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
						<br>
						<h3>Welcome to KING OF KINGS</h3>
					</header>			</div>
<center>	<h2>Your Profile</h2> </center>

<?php
include "include.php";
//$user=$_SESSION['user'];
//$Bus_id;
$sel="SELECT * FROM `user` where Username='".$_SESSION['username']."'" ;
$str= mysql_query($sel);
$rows= mysql_num_rows($str);
if($rows==0 || $rows>1)
{
	header('Refresh:5; url=web_home.php');

	echo '<h3 style= "text-align:center;"> <font color="red">Data Base Error </font></h3>';
	echo "<br>";
	echo '<p style= "text-align:center">Redirecting to the home page in 5 seconds</p>';
}
else
{

	while($row=mysql_fetch_array($str))
{
	echo '<div class="container">';
	echo '<h3 > <font color="red">Your Profile </font></h3>';
	echo '<table style="width:100%" align="center">';

	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>First Name:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Fname'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Last Name:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Lname'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Username:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Username'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Email:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Email'];
		echo "</td>";
	echo "</tr>";

	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Elementary/Primary school:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Security'];
		echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";
}
}
?>

<br>
<a href="#" class="image fit"><img src="images1/bus3.jpg" alt="" /></a>
</div>
		<!-- Footer --><footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
						<h3>KING of KINGS</h3>
							<ul class="alt">
								<li>Quick Search</li>
								<li>Online Bookings</li>
								<li>Pay Online</li>
								<li>Pay Less</li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Top Bus Routes</h3>
							<ul class="alt">
								<li>TATA - Ranchi</li>
								<li>TATA - Bhagalpur</li>
								<li>TATA - Kolkata</li>
								<li>TATA - Dhanbad</li>
							</ul>
						</section>
					<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
			<!--				<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
					-->		<ul class="tabular">
								<li>
									<h3>Address</h3>
									J Road<br>
									 831001
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">kingofkings@gmail.com</a>
								</li>
								<li>
									<h3>Phone</h3>
								(+91) 9709979557
								</li>
							</ul>
						</section>
					</center>
					</div>
					<ul class="copyright">
						<li>&copy; 2022 KING of KINGS. All rights reserved.</li>
			<!--			<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
				-->	</ul>
				</div>
			</footer>
	</body>
</html>
