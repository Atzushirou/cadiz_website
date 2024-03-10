<?php
// Include your database connection file
include('database.php');

// Initialize the session

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the form data
    if (empty($email) || empty($password)) {
        echo '<script>alert("Please fill in both username and password.");</script>';
    } else {
        // Check username and password against database
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Verify the password
            if (password_verify($password, $row['password'])) {    
                // Password is correct, log in the user
                // Store user information in session variables
                $_SESSION["user"] = "yes";
                $_SESSION["user_id"] = $row["user_id"];
                $_SESSION["email"] = $row["email"];

                // Redirect to main_menu.php
                echo '<script>';
                echo 'alert("Login successful.");';
                echo 'window.location.href = "home.php";';
                echo '</script>';
                exit();
            } else {    
                echo '<script>alert("Incorrect password.");</script>'; 
            }
        } else {
            echo '<script>alert("Email does not exist.");</script>';
        }
    }
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/index.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="wrapper">
    <form method="post" action="#">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" name="email" placeholder="Email:" required autocomplete="off">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required autocomplete="off">
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="remember-forgot">
        <a href="forgotpassword.php">Forgot Password?</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Don't have an account? Register <a href="register.php">here.</a></p>
      </div>
    </form>
  </div>
</body>
</html>
