<?php 
	// $username = $_GET["username"];
	include "admin/adminHeader.php";

?>
			<center>
				<h2>Search Buses</h2>
			</center>
			<form action="bus_details1.php" method="POST">
				From
				<input class="form-control" placeholder="Enter a city" type="text" name="Origin" >
				<br> To
				<input class="form-control" type="text" placeholder="Enter a city" name="Destination" >
				<br> Date of journey
				<input class="form-control" type="text" placeholder="dd-mm-yyy" name="Date" >
				<br> No of seats
				<input class="form-control" type="text" placeholder="Enter no of seats you want to book" name="Seats" >
				<br>
				<input class="btn btn-primary" type="submit" value="Search">
			</form>
			<br>
			<a href="#" class="image fit"><img src="images1/bus3.jpg" alt="" /></a>
			</div>

			<!-- Footer -->
			<?php
				include "footer.php";
			?>


