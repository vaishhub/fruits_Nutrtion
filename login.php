<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }

    .topnav {
        background-color: #333;
        overflow: hidden;
    }

    .topnav a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    h1 {
        color: #333;
        font-size: 50px;
        font-family: 'Georgia', serif;
        text-align: center;
    }

    form {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        max-width: 600px;
        margin: auto;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    small {
        color: red;
    }

    h3 {
        color: #4CAF50;
        text-align: center;
    }
</style>
<title>Login</title>
<script>
    function validateForm() {
        var email = document.forms["loginForm"]["email"].value;
        var password = document.forms["loginForm"]["password"].value;

        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!email.match(emailRegex)) {
            alert("Please enter a valid email address.");
            return false;
        }

        if (password == "") {
            alert("Please enter your password");
            return false;
        }

        return true;
    }
</script>
</head>
<body>
<div class="container">
  <div class="topnav">
      <a href="index.php">HOME</a>
      <a href="about.php">ABOUT US</a>
      <a href="contact.php">CONTACT US</a>
      <a href="signup.php">SIGN UP</a>
      <a href="login.php">LOGIN</a>
  </div>

  <center><h1>Login</h1></center>

  <form name="loginForm" onsubmit="return validateForm()" action="" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter Your Email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter Your Password" required><br><br>

    <input type="submit" name="submit" value="Login"><h3> NutriFruit </h3>
  </form>
</div>

<?php 
    include 'connection.php'; // Include your connection file

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Query to check if the user exists
        $query = "SELECT * FROM users WHERE email = '$email'";
        $res = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($res);

        if ($row) {
            // Verify password
            if (password_verify($password, $row['password'])) {
               
                session_start();
                $_SESSION['username'] = $row['username'];
                echo "<script>alert('Login Successful! Redirecting to home...');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
            } else {
                echo "<script>alert('Invalid password');</script>";
            }
        } else {
            echo "<script>alert('No user found with this email');</script>";
        }
    }
?>
</body>
</html>
