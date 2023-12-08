<?php include "admin/adminHeader.php"; ?>
<center>	<h2>Booking History</h2> </center>
<?php
include "include.php";

$sel="SELECT * FROM `booking` where user='".$_SESSION['username']."' ORDER BY Booking_id DESC" ;
$str= mysqli_query($conn,$sel);
$rows= mysqli_num_rows($str);
if($rows==0 )
{
	echo '<h3 style= "text-align:center;"> <font color="red">You have not booked any buses </font></h3>';
	echo "<br>";
}
else
{
echo '<table align="center" border=1 >
<tr>
<th> Date and Time</th>
<th> Bus id  </th>
<th> No of seats</th>
<th> Total fare </th>
<th> Bank </th>
<th> Payment method </th>
<!--<th> Cancel now </th> -->
<th> View Ticket</th>
</tr>';
while($row=mysqli_fetch_array($str))
{
	$Date= $row['Date'];
	$Fare= $row['Total_fare'];
	$id= $row['Bus_id'];
	$req=$row['Seats_no'];
	$book_id=$row['Booking_id'];
	echo "<tr>";

	echo "<td>".$row['Date']."</td>";
	echo "<td>".$row['Bus_id']."</td>";
	echo "<td>".$row['Seats_no']."</td>";
	echo "<td>".$row['Total_fare']."</td>";
	echo "<td>".$row['Bank']."</td>";
	echo "<td>".$row['Payment_method']."</td>";
//	echo "<td>";
//	echo '<a href="cancel.php?Date='.$Date.' & Fare='.$Fare.'& id='.$id.'& req='.$req.'">Cancel Now</a>';
//	echo "</td>";
	echo "<td>";
	echo '<a href="view_ticket1.php?id='.$book_id.'">View Ticket</a>';
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
}
?>
			</section>

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
