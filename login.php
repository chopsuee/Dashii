<?php
// Include connection file
include 'conn.php';

// Initialize session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $Username = $_POST['UserName'];
    $Password = $_POST['UserPassword'];

    // Sanitize user input
    $Username = mysqli_real_escape_string($conn, $Username);
    $Password = mysqli_real_escape_string($conn, $Password);

    // Query to check if the provided username and password match
    $query = "SELECT * FROM user WHERE UserName='$Username' AND UserPassword='$Password'";
    $result = mysqli_query($conn, $query);

    // Check if a row with the provided username and password exists
    if (mysqli_num_rows($result) == 1) {
        // Username and password match, login successful
        // Start a new session and store username in session variable
        $_SESSION['username'] = $Username;
        // Redirect to the dashboard or any other page after successful login
        header("Location: dashboard.php");
        exit();
    } else {
        // Username and password do not match, display error message
        $login_error = "Invalid username or password.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h2>Login</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="UserName">Username:</label><br>
        <input type="text" id="UserName" name="UserName"><br>
        <label for="UserPassword">Password:</label><br>
        <input type="password" id="UserPassword" name="UserPassword"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    // Display login error message if set
    if (isset($login_error)) {
        echo "<p>$login_error</p>";
    }
    ?>

</body>

</html>
