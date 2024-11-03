<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>royalsset</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/validation.css">
  <link rel="icon" type="X-icon" href="img/logo3.jpg">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>

<?php
// Database connection
include("Dbcon.php");

// Initialize the message variable

$message = "";

// Check if form is submitted
if (isset($_POST['register_admin'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['cpassword'];

    // Validate password match
    if ($password !== $confirm_password) {
        $message = "<div class='alert alert-danger m-auto mb-3'  style='width:100%;'>
                      <strong>Error!</strong> Passwords do not match.
                    </div>";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert user data into the database
        $query = "INSERT INTO admin (username, email, password, role) VALUES ('$username', '$email', '$hashed_password', 'admin')";
        if (mysqli_query($conn, $query)) {
            $message = "<div class='alert alert-success m-auto mb-3' style='width:100%;'>
                          <strong>Success!</strong>You have Registered successful as an Admin. Please <a href='Admin_signin.php'>Login</a>.
                        </div>";
        } else {
            $message = "<div class='alert alert-danger m-auto w-50 mb-3'>
                          <strong>Error!</strong> " . mysqli_error($conn) . "
                        </div>";
        }
    }
}
?>

<!-- User Registration Form -->
<div class="wrapper">

       <?php if (!empty($message)): ?>
          <div class="alert-container">
            <?php echo $message; ?>
          </div>
     <?php endif; ?>

  
  <form action="" method="POST">
    <h2>Signup</h2>
    <div class="input-box">
      <input type="text" placeholder="Username" name="username" required> 
      <i class='bx bxs-user'></i> 
    </div>
    <div class="input-box">
      <input type="email" placeholder="Enter Email" name="email" required>
      <i class='bx bxs-envelope'></i>
    </div>
    <div class="input-box">
      <input type="password" placeholder="Password" name="password" required> 
      <i class='bx bxs-lock-alt'></i>
    </div>
    <div class="input-box">
      <input type="password" placeholder="Confirm Password" name="cpassword" required> 
      <i class='bx bxs-lock-alt'></i>
    </div>

    <div class="remember-forgot">
      <label><input type="checkbox">Remember Me</label>
      <a href="forgot.html">Forgot Password?</a>
    </div>
    <button type="submit" class="btn btn-warning" name="register_admin">Signup</button>
    <div class="register-link">
      <p>Already have an account sigin-in as ? <a href="Admin_signin.php">Admin</a> or as <a href="sign-in.php">Users</a></p>

    </div>
    <div class="back">
      <a type="button" class="btn btn-danger" href="index.html">Back</a>
    </div>
  </form>


</div>

<script type="text/javascript" src="js/jquery.slim.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
