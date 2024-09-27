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

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 20px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    h1 {
        color: #333;
        font-size: 50px;
        font-family: 'Georgia', serif;
        text-align: center;
        margin-top: 40px;
    }

    form {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        max-width: 500px;
        margin: 40px auto;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="text"], input[type="email"], input[type="tel"], textarea {
        width: 100%;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    small {
        color: red;
        display: block;
        margin-bottom: 10px;
    }

    h3 {
        color: #4CAF50;
        text-align: center;
        margin-top: 20px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="topnav">
        <a href="index.php">HOME</a>
        <a href="about.php">ABOUT US</a>
        <div class="dropdown">
            <button class="dropbtn">FRUITS</button>
            <div class="dropdown-content">
                <a href="blueberry.php">Blueberry</a>
                <a href="Pomegranet.php">Pomegranate</a>
                <a href="kiwi.php">Kiwi</a>
                <a href="Apple.php">Apple</a>
                <a href="orange.php">Orange</a>
            </div>
        </div>
        <a href="contact.php">CONTACT US</a>
        <a href="#feedback">FEEDBACK</a>
        <a href="login.php">LOGIN</a>
        <a href="signup.php">SIGN UP</a>
    </div>

    
        <h1>FEEDBACK</h1>
        <form class="feedback-form" name="feedbackForm" onsubmit="return validateForm()" action="" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter Your Name" required>

            <label for="Mobile">Phone:</label>
            <input type="tel" pattern="[0-9]{10}" id="phone" name="phone" placeholder="Enter Your Phone Number" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
            <small>Please enter a valid email address.</small>

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Please Give Your Feedback Here" required></textarea>

            <input type="submit" name="submit" value="Submit">
            <h3>NutriFruit</h3>
        </form>
   
		
        <?php 
    include 'connection.php'; 

    if (isset($_POST['submit'])) {
       
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        
        $insertquery = "INSERT INTO feedback(name, phone, email, message) VALUES('$name', '$phone', '$email', '$message')";
        $res = mysqli_query($conn, $insertquery); 

        
        if ($res) {
            echo "<script>alert('Thank You for your feedback :)');</script>";
        } else {
            echo "<script>alert('Oops! Something went wrong');</script>";
        }
    }
?>

	   
	</form></center>

	
</body>
</html>