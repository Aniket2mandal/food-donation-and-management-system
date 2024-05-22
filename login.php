<?php
include("config.php"); // Include database configuration file
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input (you can add more validation if needed)
    if (empty($email) || empty($password)) {
        // Redirect back to login page with error message if email or password is empty
        header("Location: login.html?error=empty_fields");
        exit;
    }

    // Query the database to fetch user with the provided email
    $query = "SELECT * FROM dine WHERE email='$email'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Check if a user with the provided email exists
        if (mysqli_num_rows($result) == 1) {
            // Fetch user data from the result
            $user = mysqli_fetch_assoc($result);
            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Password is correct, start a session
                session_start();
                // Store user data in session variables
                $_SESSION['email'] = $user['email'];
                // Redirect to dashboard or profile page
                header("Location: profile.html");
                exit;
            } else {
                // Incorrect password, redirect back to login page with error message
                header("Location: login.html?error=incorrect_password");
                exit;
            }
        } else {
            // User with the provided email does not exist, redirect back to login page with error message
            header("Location: login.html?error=user_not_found");
            exit;
        }
    } else {
        // Database query failed, redirect back to login page with error message
        header("Location: login.html?error=db_error");
        exit;
    }
}
?>

<?php
// Include database configuration file once
include("config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate input (you can add more validation if needed)
  if (empty($email) || empty($password)) {
    // Redirect back to login page with error message if email or password is empty
    header("Location: login.html?error=empty_fields");
    exit;
  }

  // ... rest of your code logic here ...
}
?>

