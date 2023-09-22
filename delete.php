<?php
include 'db.include.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connect failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Members";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>UID</th><th>Email</th><th>Gender</th><th>Birth Year</th><th>Subscription Year</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["UID"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["Gender"] . "</td>";
        echo "<td>" . $row["BirthYear"] . "</td>";
        echo "<td>" . $row["SubscriptionYear"] . "</td>";
        echo "<td><a href='delete_action.php?uid=" . $row["UID"] . "'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

$conn->close();
?>
