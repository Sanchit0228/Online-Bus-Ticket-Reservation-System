<?php 
	include "admin/adminHeader.php"; 
	echo "</section>";
	include "include.php";

	if(isset($_GET['Total_fare'])) {
		$total_fare = $_GET['Total_fare'];
		//echo $total_fare;
		$_SESSION["total_fare"] = $total_fare;
	}
	
	if(isset($_GET['Seats_no'])) {
		$total_seats = $_GET['Seats_no'];
		//echo $total_seats;
		$_SESSION["total_seats"] = $total_seats;
	}

	if(isset($_GET['Bus_id'])) {
		$bus_id = $_GET['Bus_id'];
		//echo $bus_id;
		$_SESSION["bus_id"] = $bus_id;
	}	

	if(isset($_POST["submit"])) {

		$ins = "INSERT INTO `booking`(`user`,`Bus_id`,`Seats_no`,`Total_fare`,`Bank`,`Payment_method`) VALUES('".$_SESSION['username']."','".$_SESSION["bus_id"]."','".$_SESSION["total_seats"]."','".$_SESSION["total_fare"]."','".$_POST['Bank']."','".$_POST['Payment_method']."')";
		
		$total_seats = $_SESSION['total_seats'];
		$bus_id = $_SESSION['bus_id'];

		$upd = "UPDATE bus SET seats = (seats-$total_seats) WHERE Id = $bus_id";
	
		mysqli_query($conn,$ins) or die(mysqli_error($conn));
		mysqli_query($conn,$upd) or die(mysqli_error($conn));

		echo "<script>location.href='success.php'</script>";
	}?>
	<center>	
		<h2>Payment</h2>
	</center>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
 		 Select a bank
		<select name="Bank" class="form-control">
			<option value="PNB">PNB</option>
			<option value="SBI">SBI</option>
			<option value="HDFC">HDFC Bank</option>
			<option value="ICICI">ICICI Bank.</option>
			<option value="Axis">Axis Bank.</option> 
		</select>
		<br>
		Choose a payment method
		<select name="Payment_method" class="form-control">
			<option value="Net Banking">Net Banking</option>
			<option value="Debit card">Debit card</option>
		</select>
		<br>
		<p> <i>Total Fare: <?php echo $_SESSION["total_fare"] ?></i></p>
		<br>
		<input class="btn btn-primary" type="submit" value="Submit" name="submit">
	</form>
	<br>
	<a href="#" class="image fit"><img src="images1/bus3.jpg" alt="" /></a>
	</div>
<!-- Footer -->
<?php include "footer.php"; ?>