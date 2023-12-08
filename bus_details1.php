<?php 
	// $username = $_GET["username"];
	include "admin/adminHeader.php" 
	
?>
</div>

<?php
	$from = $_POST["Origin"];
	$to = $_POST["Destination"];
	$date = $_POST["Date"];
	$seats = $_POST["Seats"];

	// and Date='".$date."'

	include "include.php";

	$sql="SELECT * FROM `bus` where Origin='".$from."' and Destination='".$to."' and Seats >= ".$seats."  " ;
	$str= mysqli_query($conn,$sql) or die(mysqli_error($conn));

	$rows = mysqli_num_rows($str) ;
	if($rows == 0)
	{
		echo '<h3 style= "text-align:center;"> <font color="red">No available Buses </font></h3>';
		echo "<br>";
	}
	else
	{
		echo '<h3 style= "text-align:center;"> <font color="red"><center>Available Buses </center></font></h3>';
		echo '<table align="center" border=1 >
				<tr>
					<th> Id </th>
					<th> Name of the bus</th>
					<th> Available seats </th>
					<th> Origin </th>
					<th> Destination </th>
					<th> Date of journey</th>
					<th> Arrival time </th>
					<th> Departure time </th>
					<th> Fare </th>
					<th> Book </th>
				</tr>';

	while($row = mysqli_fetch_array($str))
	{
		// print_r($row);
		$Bus_id = $row['Id'];
		$Total_fare = $row['Fare'] * $seats;
		echo "<tr>";

		echo "<td>".$row['Id']."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Seats']."</td>";
		echo "<td>".$row['Origin']."</td>";
		echo "<td>".$row['Destination']."</td>";
		echo "<td>".$row['Date']."</td>";
		echo "<td>".$row['Arrival_time']."</td>";
		echo "<td>".$row['Departure_time']."</td>";
		echo "<td>".$row['Fare']."</td>";
		echo "<td>";
		echo '<a href="payment1.php?Seats_no='.$seats.'&Bus_id='.$Bus_id.'&Total_fare='.$Total_fare.'">Book Now</a>';
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
	}
	?>
	<br>
	<a href="#" class="image fit"><img src="images1/bus3.jpg" alt="" /></a>
	</div>
<!-- Footer -->
<?php 
	include "footer.php";
?>