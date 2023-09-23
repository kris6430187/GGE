<!DOCTYPE html>
<html>
<head>
    <title>Farmer Listing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007BFF;
        }

        /* Style for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        /* Style for table headers */
        th {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
        }

        /* Style for table rows */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Style for table cells */
        td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        /* Style for the back button */
        .back-button {
            text-align: center;
            margin-top: 20px;
        }

        /* Style for the button */
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Farmer Listing</h1>

        <?php
        include 'db.include.php'; // DB Connection Details

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connect failed: " . $conn->connect_error);
        }

        // Create the SQL Statement
        $sql = "SELECT farm_id, farm_name, rice_type, rice_price FROM farmer";

        // Run the SQL Statement on the Server
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Found " . $result->num_rows . " rows";
        ?>
        <table>
            <tr>
                <th>Farm ID</th>
                <th>Farm Name</th>
                <th>Rice Type</th>
                <th>Rice Price ($)</th>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["farm_id"] . "</td>";
                echo "<td>" . $row["farm_name"] . "</td>";
                echo "<td>" . $row["rice_type"] . "</td>";
                echo "<td>" . $row["rice_price"] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <?php
        } else {
            echo "No result found";
        }
        $conn->close();
        ?>

        <!-- Back button to the home page -->
        <div class="back-button">
            <a href="index.html"><button>Go Back to Home Page</button></a>
        </div>
    </div>
</body>
</html>
