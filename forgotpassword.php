<?php
session_start(); // Start session at the beginning
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="styles/forgotpassword.css">
<body>
  <div class="wrapper">
    <?php
    // Include your database connection file
    include('database.php');

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve form data
      $firstName = $_POST['first-name'];
      $lastName = $_POST['last-name'];
      $email = $_POST['email'];
      $newPassword = $_POST['password'];
      $confirmPassword = $_POST['confirm_password'];

      // Validate the form data
      if (empty($firstName) || empty($lastName) || empty($email) || empty($newPassword) || empty($confirmPassword)) {
        echo '<script>alert("Please fill in all fields.");</script>';
      } else {
        // Additional length check for the new password
        if (strlen($newPassword) < 6) {
          echo '<script>alert("Password must be at least 6 characters.");</script>';
        } else {
          // Check if the new password and confirm password match
          if ($newPassword !== $confirmPassword) {
            echo '<script>alert("Passwords do not match.");</script>';
          } else {
            // Check if the user exists in the database
            $checkUserQuery = "SELECT * FROM users WHERE First_Name='$firstName' AND Last_Name='$lastName' AND email='$email'";
            $result = mysqli_query($conn, $checkUserQuery);

            if (mysqli_num_rows($result) > 0) {
              // User exists, update the password
              $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);
              $updatePasswordQuery = "UPDATE users SET password='$passwordHash' WHERE First_Name='$firstName' AND Last_Name='$lastName' AND email='$email'";

              if (mysqli_query($conn, $updatePasswordQuery)) {
                echo '<script>alert("Password updated successfully.");</script>';
                // Redirect or perform further actions after successful password update
                echo '<script>window.location.href = "index.php";</script>';
                exit(); // Make sure to exit after redirecting
              } else {
                echo '<script>alert("Error updating password: ' . mysqli_error($conn) . '");</script>';
              }
            } else {
              echo '<script>alert("User not found. Please check your information.");</script>';
            }
          }
        }
      }
    }
    ?>

    <form method="post" action="#">
      <h1>Forgot Password</h1>
      <div class="input-box">
        <input type="text" name="first-name" placeholder="First Name" required>
      </div>

      <div class="input-box">
        <input type="text" name="last-name" placeholder="Last Name" required>
      </div>

      <div class="input-box">
        <input type="text" name="email" placeholder="Email" required>
      </div>

      <div class="input-box">
        <input type="password" name="password" placeholder="New Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input-box">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <button type="submit" class="btn">Submit</button>
      <div class="register-link">
        <p><a href="index.php"> <- Return to Login Page</a></p>
      </div>
    </form>
  </div>
</body>
</html>
