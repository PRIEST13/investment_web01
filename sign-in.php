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

//Start session
session_start();

// Database connection
include("Dbcon.php");

// Check if form is submitted
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Retrieve user from database
    $query = "SELECT * FROM users WHERE email = '$email' AND role = 'user'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Start session and redirect to user dashboard
            session_start();
            $_SESSION['username'] = $user['username'];
            header("Location: userdashboard.php");
            exit;
        } else {
            $message = "<div class='alert alert-danger m-auto w-50 mb-3' style='width:100%;'>
                          <strong>Danger!</strong> Incorrect password. Please check your login details.
                        </div>";
        }
    } else {
        $message = "<div class='alert alert-danger m-auto mb-3' style='width:100%;'>
                          <strong>Success!</strong> No username found.
                        </div>";
    }
}
?>

<!-- User Login Form -->
<div class="wrapper">

  <?php if (!empty($message)): ?>
          <div class="alert-container">
            <?php echo $message; ?>
          </div>
     <?php endif; ?>

  <form action="" method="POST">
    <h2>Sign-in as Users</h2>
    <div class="input-box">
      <input type="email" placeholder="Enter Email" name="email" required>
      <i class='bx bxs-envelope'></i>
    </div>
    <div class="input-box">
      <input type="password" placeholder="Password" name="password" required> 
      <i class='bx bxs-lock-alt'></i>
    </div>

    <div class="remember-forgot">
      <label><input type="checkbox">Remember Me</label>
      <a href="forgot.html">Forgot Password?</a>
    </div>
    <button type="submit" class="btn btn-warning" name="login_user">Login</button>
    <div class="register-link">
      <p>Don't have an account Singup As? <a href="Admin.php"> Admin</a> or <a href="signup.php">Users</a></p>

      <!-- <p>Already have an account? <a href="signup.php">Sign-up</a></p> -->
      <!-- <p>Already have an account sigin-in as ? <a href="Admin_signin.php">Admin</a> or as <a href="sign-in.php">Users</a></p> -->
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
