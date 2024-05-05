<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking-data";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST["booking_id"], $_POST["Phone"], $_POST["name"], $_POST["email"], $_POST["date"], $_POST["time"])) {
        $booking_id = $_POST["booking_id"];
        $Phone = $_POST["Phone"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $date = $_POST["date"];
        $time = $_POST["time"];

            // Validate if the selected date is not in the past
            $currentDate = date("Y-m-d");
            if ($date < $currentDate) {
                echo "Error: You cannot book a date in the past.";
                exit();
            }

            // Validate if the selected time slot is available for the selected date
           // $sql = "SELECT * FROM 'booking-shahab' WHERE date = '$date' AND time = '$time'";
            $sql = "SELECT * FROM `booking-shahab` WHERE date = '$date' AND time = '$time'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "Error: This time slot for the selected date is already booked.";
                exit();
            }

        // Prepare and execute the database insertion
        $sql = "INSERT INTO `booking-shahab`(`booking_id`, `Phone`, `name`, `email`, `date`, `time`)
             VALUES ('$booking_id', '$Phone', '$name', '$email', '$date', '$time')";

        if ($conn->query($sql) === TRUE) {
            echo "Booking Successfully";
            echo "<br><br><br><button onclick=\"window.location.href = 'pdf_booking.php?Phone=$Phone';\">Show Booking Details</button>";
            echo "<br><br><br><button onclick=\"window.location.href = 'index.php';\">Go Back Home</button>";
    
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
            
        }
    } else {
        echo "Error: One or more required fields are missing.";
       
        
    }
}

$conn->close();
?>
