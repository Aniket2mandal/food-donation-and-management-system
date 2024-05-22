<?php
include("config.php");

// Handle user registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Add your registration logic here
    // For example, insert the user data into the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
    $query = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashed_password')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Registration successful
        // Redirect to login page
        header("Location: login.html?registration=success");
        exit;
    } else {
        // Registration failed
        // Redirect back to registration page with error message
        header("Location: register.html?error=registration_failed");
        exit;
    }
}
?>
