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

        input[type="text"], input[type="email"], textarea {
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
    <title>Contact Us</title>
    <script>
        function validateForm() {
            var name = document.forms["contactForm"]["name"].value;
            var email = document.forms["contactForm"]["email"].value;
            var message = document.forms["contactForm"]["message"].value;
            
            if (name == "") {
                alert("Please enter your name.");
                return false;
            }
            
            var emailRegex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
            if (!email.match(emailRegex)) {
                alert("Please enter a valid email address.");
                return false;
            }
            
            if (email == "") {
                alert("Please enter your email.");
                return false;
            }
            
            if (message == "") {
                alert("Please enter your message.");
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
            <div class="dropdown">
                <button class="dropbtn">FRUITS</button>
                <div class="dropdown-content">
                    <a href="blueberry.php">Blueberry</a>
                    <a href="pomegranet.php">Pomegranate</a>
                    <a href="kiwi.php">Kiwi</a>
                    <a href="apple.php">Apple</a>
                    <a href="orange.php">Orange</a>
                </div>
            </div>
            <a href="contact.php">CONTACT US</a>
            <a href="feedback.php">FEEDBACK</a>
            <a href="login.php">LOGIN</a>
            <a href="signup.php">SIGN UP</a>
        </div>

            <h1 style="font-size: 50px; font-family: cursive; color: black;">Contact Us</h1>
            <form class="contact-form" name="contactForm" onsubmit="return validateForm()" action="" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Enter Your Name" required><br><br>
                
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter Your Email" required><br><br>
                
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" placeholder="Enter Your Message" required></textarea><br><br>
                
                <input type="submit" name="submit" value="Submit">
                <h3>NutriFruit</h3>
            </form>

        <?php 
        include 'connection.php'; // Ensure the database connection is established

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // Insert query
            $insertquery = "INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$message')";
            $res = mysqli_query($conn, $insertquery); // Execute query

            // Check if query was successful
            if ($res) {
                echo "<script>alert('Thank you for contacting us! We will get back to you shortly.');</script>";
            } else {
                echo "<script>alert('Oops! Something went wrong. Please try again.');</script>";
            }
        }
        ?>
    </div>
</body>
</html>
