<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "booking-data";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];
if ($username === 'shahab@12' && $password === '4439') {
    header("Location: fetch_data.html");
    exit();
} else {
    
    echo "Invalid username or password";
}

$conn->close();
?>
