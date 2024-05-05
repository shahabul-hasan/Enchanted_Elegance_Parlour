<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking-data";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `booking-shahab`"; 
$result = $conn->query($sql);

if ($result === false) {
    echo "Error executing the query: " . $conn->error;
} elseif ($result->num_rows > 0) {
    echo "<table class='booking-table'>";
    echo "<tr><th>Booking Id</th><th>Phone</th><th>Name</th><th>Email</th><th>Time</th><th>Date</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["booking_id"] . "</td>";
        echo "<td>" . $row["Phone"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["time"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found";
}

$conn->close();
?>
