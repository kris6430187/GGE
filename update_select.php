<?php
if (!isset($_GET["uid"])) {
    echo "Back to <a href='update.php'>update page</a><br><br>";
    die("Parameter uid not submitted to page!");
} else {
    $selected_uid = $_GET["uid"];
}

include 'db.include.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connect failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Members WHERE UID = " . $selected_uid;
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $UID = $row["UID"];
    $email = $row["email"];
    $Gender = $row["Gender"];
    $BirthYear = $row["BirthYear"];
    $SubscriptionYear = $row["SubscriptionYear"];
} else {
    print_r("no result found");
}

if ($Gender == 'M') {
    $GenderM = 'selected';
    $GenderF = '';
} else {
    $GenderM = '';
    $GenderF = 'selected';
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Gender</title>
</head>
<body>
    <h1>Update Gender</h1>
    <form action="update_action.php" method="post">
    <table>
        <tr>
            <td>UID:</td>
            <td><?php echo $selected_uid; ?></td>
            <input type="hidden" id="uid" name="uid" value="<?php echo $selected_uid; ?>">
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $email; ?></td>
            <td><input type="hidden" name="email" value="<?php echo $email; ?>"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <select name="Gender" id="Gender">
                    <option value="M" <?php echo $GenderM; ?>>M</option>
                    <option value="F" <?php echo $GenderF; ?>>F</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Birth Year:</td>
            <td><?php echo $BirthYear; ?></td>
            <td><input type="hidden" name="BirthYear" value="<?php echo $BirthYear; ?>"></td>
        </tr>
        <tr>
            <td>Subscription Year:</td>
            <td><?php echo $SubscriptionYear; ?></td>
            <td><input type="hidden" name="SubscriptionYear" value="<?php echo $SubscriptionYear; ?>"></td>
        </tr>
    </table>
    <input type="submit" value="Update">
</form>
</body>
</html>
