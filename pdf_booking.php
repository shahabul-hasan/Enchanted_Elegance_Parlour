<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <link rel="stylesheet" type="text/css" href="pdf_booking.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["Phone"])) {
            $Phone = $_GET["Phone"];
            // Query to retrieve booking details based on phone number
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "booking-data";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection Failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM `booking-shahab` WHERE Phone = '$Phone'";
            $result = $conn->query($sql);

            if ($result) {
                if ($result->num_rows > 0) {
                    echo "<h2>Booking Details</h2>";
                    echo "<table>";
                    echo "<tr><th>Booking ID</th><th>Name</th><th>Email</th><th>Date</th><th>Time</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["booking_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["date"] . "</td><td>" . $row["time"] . "</td></tr>";
                    }
                    echo "</table>";
                    echo "<br><br><button onclick=\"window.location.href = 'index.php';\">Go Back Home</button>";
                } else {
                    echo "No bookings found for phone number: $Phone";
                }
            } else {
                echo "Error executing query: " . $conn->error;
            }

            // Close database connection
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
