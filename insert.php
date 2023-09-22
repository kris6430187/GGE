<!DOCTYPE html>
<html>
<head>
    <title>Insert Form</title>
</head>
<body>
    <h1>Insert Data</h1>
    <form action="insert_action.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="Gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br><br>

        <label for="birthyear">Birth Year:</label>
        <input type="text" id="birthyear" name="BirthYear" required><br><br>

        <label for="subscriptionyear">Subscription Year:</label>
        <input type="text" id="subscriptionyear" name="SubscriptionYear" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
