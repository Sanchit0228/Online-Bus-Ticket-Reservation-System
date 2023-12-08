<?php 
    include "admin/adminHeader.php";
    echo "</section>";
    include "include.php";

    $sql = "SELECT MAX(Booking_id) FROM Booking";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $maxId = $row["MAX(Booking_id)"];
        }
?>

<div class="success">
    <div class="message">
        Payment Successful
    </div>
    <h4>
        <a href="viewCurrent.php?id=<?php echo $maxId; ?>">View Ticket</a>
    </h4>
</div>
</div>

<?php
    } else {
        echo "No MAX ID in the List";
        return;
    }
    include "footer.php";
?>