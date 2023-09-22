<?php
include 'db.include.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connect failed: " . $conn->connect_error);
}

// Taking values from the form data (input)
$email = $_REQUEST['email'];
$gender = $_REQUEST['Gender'];
$BirthYear = $_REQUEST['BirthYear'];
$SubscriptionYear = $_REQUEST['SubscriptionYear'];

// Performing insert query execution, excluding UID
$sql = "INSERT INTO Members (email, Gender, BirthYear, SubscriptionYear) 
        VALUES ('$email', '$gender', $BirthYear, $SubscriptionYear)";

$result = $conn->query($sql);

if ($result) {
    echo "Insert completed successfully!";
} else {
    echo "Insert Not Completed!";
}

$conn->close();
?>
