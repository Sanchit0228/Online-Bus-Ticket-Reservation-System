<?php include "admin/adminHeader.php"; ?>
<center>	<h2>Your Profile</h2> </center>

<?php
include "include.php";
$sel="SELECT * FROM `user` where Username='".$_SESSION['username']."'" ;
$str= mysqli_query($conn,$sel);
$rows= mysqli_num_rows($str);
if($rows==0 || $rows>1)
{
	header('Refresh:5; url=index.php');

	echo '<h3 style= "text-align:center;"> <font color="red">Data Base Error </font></h3>';
	echo "<br>";
	echo '<p style= "text-align:center">Redirecting to the home page in 5 seconds</p>';
}
else
{

	while($row=mysqli_fetch_array($str))
{
	echo '<div class="container">';
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
	<ul class="tabular">
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
	</ul>
				</div>
			</footer>
	</body>
</html>
