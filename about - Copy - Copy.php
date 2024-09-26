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

        h2 {
            color: #4CAF50;
            text-align: center;
        }

        p {
            text-align: justify;
            max-width: 800px;
            margin: auto;
            line-height: 1.6;
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
    <title>About Us</title>
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

        <center>
            <h1>About Us</h1>
            <h2>Welcome to NutriFruit!</h2>
            <p>
                At NutriFruit, we are dedicated to providing you with the most comprehensive information about fruit nutrition. Our goal is to educate and inform you about the health benefits of various fruits, their nutritional values, and how to incorporate them into your daily diet.
            </p>
            <p>
                We believe that understanding the nutritional value of fruits can empower individuals to make healthier food choices. Our website features detailed articles, nutritional charts, and tips on how to enjoy fruits in creative and delicious ways.
            </p>
            <p>
                Whether you’re looking to enhance your diet, learn about specific fruits, or simply explore the world of nutrition, NutriFruit is here to guide you on your journey to a healthier lifestyle.
            </p>
           
    </div>
</body>
</html>
