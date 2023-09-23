<!DOCTYPE html>
<html>
<head>
    <title>Insert Result</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your existing CSS file here -->
    <style>
        /* Additional styles for this page only */
        .back-button {
            text-align: center;
            margin-top: 20px;
        }

        .back-button a {
            text-decoration: none;
        }

        .back-button button {
            width: auto; /* Allow the button to expand based on content */
            padding: 10px 20px; /* Adjust padding for button size */
            background-color: #007BFF; /* Button background color */
            color: white; /* Text color */
            border: none; /* Remove the border */
            border-radius: 5px; /* Add rounded corners */
            cursor: pointer; /* Show a pointer cursor on hover */
            margin-top: 20px; /* Add space above the button */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Congratulations on your listing</h1>
        
        <div class="result-message">
            <?php
            include 'db.include.php';

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connect failed: " . $conn->connect_error);
            }

            // Taking values from the form data (input)
            $farm_name = $_REQUEST['farm_name'];
            $rice_type = $_REQUEST['rice_type'];
            $rice_price = $_REQUEST['rice_price'];

            // Performing insert query execution, excluding UID
            $sql = "INSERT INTO Farmer (farm_name, rice_type, rice_price) 
                    VALUES ('$farm_name', '$rice_type', $rice_price)";

            $result = $conn->query($sql);

            if ($result) {
                echo "Rice listed successfully!";
            } else {
                echo "Rice listed not completed!";
            }

            $conn->close();
            ?>
        </div>

        <!-- Button to go back to the home page (index.html) -->
        <div class="back-button">
            <a href="index.html"><button>Go Back to Home Page</button></a>
        </div>
    </div>
</body>
</html>
