<?php 
include 'conn.php';

$Fname = $_POST['FirstName'];
$Lname = $_POST['LastName'];
$Username = $_POST['UserName'];
$Password = $_POST['UserPassword'];

// Check if the username already exists
$check_username_query = "SELECT * FROM user WHERE UserName='$Username'";
$check_username_result = mysqli_query($conn, $check_username_query);

if(mysqli_num_rows($check_username_result) > 0) {
    // Username already in use, display a warning message or handle it as needed
    echo "<script>alert('Username already in use. Please choose a different username.');</script>";
    // Redirect back to the registration page or handle it as needed
    echo "<script>window.location='create_acc.php';</script>";
} else {
    // Username is available, proceed with insertion
    $Insertsql = "INSERT INTO user (Firstname, LastName, UserName, UserPassword) VALUES ('$Fname', '$Lname', '$Username', '$Password')";
    mysqli_query($conn, $Insertsql);
    echo "<script>alert('New user added.');</script>";
    echo "<script>window.location='index.php';</script>";
}
?>
