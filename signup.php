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

    input[type="text"], input[type="email"], input[type="password"] {
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
<title>Sign Up</title>
<script>
    function validateForm() {
        var username = document.forms["signupForm"]["username"].value;
        var email = document.forms["signupForm"]["email"].value;
        var password = document.forms["signupForm"]["password"].value;
        var confirmPassword = document.forms["signupForm"]["confirm_password"].value;

        if (username == "") {
            alert("Please enter your username");
            return false;
        }

        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!email.match(emailRegex)) {
            alert("Please enter a valid email address.");
            return false;
        }

        if (password == "") {
            alert("Please enter your password");
            return false;
        }

        if (confirmPassword != password) {
            alert("Passwords do not match");
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
  </div>

  <center><h1>Sign Up</h1></center>

  <form name="signupForm" onsubmit="return validateForm()" action="" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="Enter Your Username" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter Your Email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter Your Password" required><br><br>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Your Password" required><br><br>
       
  
    <input type="submit" name="submit" value="Sign Up">
  <h3> NutriFruit </h3>
  </form>
</div>

<?php 
    include 'connection.php'; // Connection file

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

        // Insert query
        $insertquery = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        $res = mysqli_query($conn, $insertquery);

        if ($res) {
            
            echo "<script>alert('Registration Successful!...');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Oops! Something went wrong.');</script>";
        }
    }
?>

</body>
</html>
