<?php
include('database.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    // Address fields
    $lotBlock = $_POST['lotBlock'];
    $street = $_POST['street'];
    $phase = $_POST['phase'];
    $province = $_POST['province'];
    $cityMunicipality = $_POST['cityMunicipality'];
    $barangay = $_POST['barangay'];

    // Validate the form data
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirm_password) || empty($province) || empty($cityMunicipality) || empty($barangay)) {
        echo '<script>alert("Please fill in all fields.");</script>';
    } else {
        // Additional length checks for first name, last name, and username
        if (strlen($email) < 6) {
            echo '<script>alert("First Name, Last Name must be at least 6 characters.");</script>';
        } else {
            // Additional password length check
            if (strlen($password) < 8) {
                echo '<script>alert("Password must be at least 8 characters.");</script>';
            } else {
                // Check if passwords match
                if ($password !== $confirm_password) {
                    echo '<script>alert("Passwords do not match.");</script>';
                } else {
                    // Check if username already exists in the database
                    $checkUsernameQuery = "SELECT * FROM users WHERE email='$email'";
                    $result = mysqli_query($conn, $checkUsernameQuery);

                    if (mysqli_num_rows($result) > 0) {
                        echo '<script>alert("Email already exists. Please choose a different email.");</script>';
                    } else {
                        // Hash the password
                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                        // Perform registration logic (insert into database)
                        $sql = "INSERT INTO users (First_Name, Last_Name, email, password) VALUES ('$firstName', '$lastName', '$email', '$passwordHash')";

                        if (mysqli_query($conn, $sql)) {
                            // Get the last inserted user ID
                            $userId = mysqli_insert_id($conn);

                            // Insert address data into the address table and link it to the user
                            $addressSql = "INSERT INTO address (user_id, lotBlock, street, phase, province, cityMunicipality, barangay) VALUES ('$userId', '$lotBlock', '$street', '$phase', '$province', '$cityMunicipality', '$barangay')";


                            if (mysqli_query($conn, $addressSql)) {
                                // Alert for successful registration
                                echo '<script>alert("You have registered successfully.");</script>';
                                // Redirect to login.php after successful registration
                                echo '<script>window.location.href = "index.php";</script>';
                            } else {
                                echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
                            }
                        } else {
                            echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
                        }
                    }
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="styles/register.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="main.js" defer></script>
</head>
<body>
<div class="wrapper">

  
  <form name="registrationForm" method="post" action="">
    <h1>Register</h1>
    <div class="input-box">
      <input type="text" class="form-control" name="FirstName" placeholder="First Name:" required autocomplete="off">
    </div>

    <div class="input-box">
      <input type="text" class="form-control" name="LastName" placeholder="Last Name:" required autocomplete="off">
    </div>

    <div class="input-box">
      <input type="text" class="form-control" name="email" placeholder="Email:" required autocomplete="off">
    </div>

    <div class="input-box">
      <input type="password" class="form-control" name="password" placeholder="Password:" required autocomplete="off">
      <i class='bx bxs-lock-alt'></i>
    </div>
    <div class="input-box">
      <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password:" required autocomplete="off">
      <i class='bx bxs-lock-alt'></i>
    </div>

    <!-- Address fields for Philippines -->
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="address-form floating-element">
            <div class="form-group">
              <select class="form-control" id="province" name="province" required>
                <option selected="" disabled>Select Province</option>
                <!-- Province options will be loaded dynamically -->
              </select>
            </div>
            <div class="form-group">
              <select class="form-control" id="cityMunicipality" name="cityMunicipality" required>
                <option selected="" disabled>Select City</option>
                <!-- City options will be loaded dynamically -->
              </select>
            </div>
            <div class="form-group">
              <select class="form-control" id="barangay" name="barangay" required>
                <option selected="" disabled>Select Barangay</option>
                <!-- Barangay options will be loaded dynamically -->
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="lotBlock" placeholder="Lot/Block" required autocomplete="off">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="street" placeholder="Street" required autocomplete="off">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phase" placeholder="Subdivision" required autocomplete="off">
            </div>
            <button type="submit" class="btn btn-dark">Register</button>
          </div>
          <div class="register-link">
            <p><a href="index.php"> <- Return to Login Page</a></p>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- JavaScript for dynamic loading of provinces, cities, and barangays -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
