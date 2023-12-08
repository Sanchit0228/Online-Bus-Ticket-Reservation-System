<?php 

    include "admin/adminHeader.php";
    echo "</section>";
    $maxId = $_GET["id"];

    include "include.php";

    $sql = "SELECT * FROM `booking` WHERE Booking_id = $maxId";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
			$bus_id = $row["Bus_id"];
			$sql2 = "SELECT Name, Origin, Destination, Arrival_time, Departure_time FROM bus WHERE Id = $bus_id";
			$result2 = mysqli_query($conn, $sql2);

			if(mysqli_num_rows($result2) == 0) {return;}
			while($row2 = mysqli_fetch_assoc($result2)) {
				$bus_name = $row2["Name"];
				$origin = $row2["Origin"];
				$destination = $row2["Destination"];
				$arrival = $row2["Arrival_time"];
				$departure = $row2["Departure_time"];
			}

            echo '<div class="container inside"><h3>Current Ticket</h3>';

			echo '<table style="width:100%" align="center">';

			echo "<tr>";
				echo "<td>";
				echo '<h4> <i>Date of Booking:</i></h4>';
				echo "</td>";

				echo "<td>";
				echo $row['Date'];
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
				echo '<h4> <i>Bus Name:</i></h4>';
				echo "</td>";

				echo "<td>";
				echo $bus_name;
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
				echo '<h4> <i>Origin:</i></h4>';
				echo "</td>";

				echo "<td>";
				echo $origin;
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
				echo '<h4> <i>Destination:</i></h4>';
				echo "</td>";

				echo "<td>";
				echo $destination;
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
				echo '<h4> <i>Arrival time:</i></h4>';
				echo "</td>";

				echo "<td>";
				echo $arrival;
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
				echo '<h4> <i>Departure time:</i></h4>';
				echo "</td>";

				echo "<td>";
				echo $departure;
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
				echo '<h4> <i>Date of journey:</i></h4>';
				echo "</td>";

				echo "<td>";
				echo $row['Date'];
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
				echo '<h4> <i>No of seats:</i></h4>';
				echo "</td>";

				echo "<td>";
				echo $row['Seats_no'];
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
				echo '<h4> <i>Total fare:</i></h4>';
				echo "</td>";

				echo "<td>";
				echo $row['Total_fare'];
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
				echo '<h4> <i>Bank:</i></h4>';
				echo "</td>";

				echo "<td>";
				echo $row['Bank'];
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
				echo '<h4> <i>Payment method:</i></h4>';
				echo "</td>";

				echo "<td>";
				echo $row['Payment_method'];
				echo "</td>";
			echo "</tr>";
			echo "</table>";
			echo "</div>";

				}
			}

		?>
		</div>

<?php

    include "footer.php";
?>