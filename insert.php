<!DOCTYPE html>
<html>
<head>
    <title>Insert Form</title>
    <style>
        /* Reset default styles and set a background color */
        body {
            font-family: "Arial", sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        /* Container for the form and button */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Page title style */
        h1 {
            text-align: center;
            color: #007BFF;
        }

        /* Style for label elements */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Style for input elements */
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Style for the submit button */
        input[type="submit"] {
            width: 100%;
            padding: 12px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Add some space between the form elements */
        .form-group {
            margin-bottom: 20px;
        }

        /* Style for the back button */
        .back-button {
            text-align: center;
            margin-top: 20px;
        }

        /* Style for the button */
        .back-button a {
            text-decoration: none;
        }

        .back-button button {
            width: 100%;
            padding: 12px 20px;
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
        <h1>Listing Rice</h1>
        <form action="insert_action.php" method="post">
            <div class="form-group">
                <label for="farm_name">Farm name:</label>
                <input type="text" id="farm_name" name="farm_name" required>
            </div>

            <div class="form-group">
                <label for="rice_type">Rice type:</label>
                <input type="text" id="rice_type" name="rice_type" required>
            </div>

            <div class="form-group">
                <label for="rice_price">Rice price ($):</label>
                <input type="number" id="rice_price" name="rice_price" step="0.01" required>
            </div>

            <input type="submit" value="Submit">
        </form>

        <!-- Button to go back to the home page (index.html) -->
        <div class="back-button">
            <a href="index.html"><button>Go Back to Home Page</button></a>
        </div>
    </div>
</body>
</html>
