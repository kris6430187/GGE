<?php
if (!isset($_POST["uid"])) {
    echo "Back to <a href='update.php'>update page</a><br><br>";
    die("Parameter uid not submitted to page!");
} else {
    $selected_uid = $_POST["uid"];
}

$Gender = $_POST["Gender"];

include 'db.include.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connect failed: " . $conn->connect_error);
}

// Prepare and execute the SQL update query to only update the "Gender" field
$stmt = $conn->prepare("UPDATE Members SET Gender=? WHERE uid=?");
$stmt->bind_param("si", $Gender, $selected_uid);

if ($stmt->execute()) {
    echo "Successful updated gender for UID = " . $selected_uid;
} else {
    echo "Error updating gender: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
