<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
</head>
<body>
    <h1>Order Details</h1>
    <?php
        $selected_order = $_POST['select_all'];
        $quantity = $_POST['quantity'];
        $cash = $_POST['cash'];
        echo "<p><b>Selected Order:</b> $selected_order</p>";
        echo "<p><b>Quantity:</b> $quantity</p>";
        echo "<p><b>Cash:</b> $cash</p>";
    ?>
</body>
</html<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canteen Order System</title>
</head>
<body>
    <h1>Register Here</h1>
    <form action="register.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Register">
    </form>
    <?php
        if (isset($_POST['username']) && isset($_POST['password'])) {
            header("refresh:3; url=login.php");
        }
    ?>
</body>
</html>