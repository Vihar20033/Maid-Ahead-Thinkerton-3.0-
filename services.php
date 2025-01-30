<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Available</title>
    <link rel="stylesheet" href="css/styles.css">
<style>
  body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #e2e7e7, #1CAD82);
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 90%;
    max-width: 1200px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px;
    text-align: center;
}

h1 {
    font-size: 32px;
    color: #444;
    margin-bottom: 10px;
}

p {
    font-size: 18px;
    color: #555;
    margin-bottom: 20px;
}

.services {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    width: 100%;
}

.service-box {
    background: #d6d6d3;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    text-align: center;
    width: 300px;
    transition: transform 0.3s ease-in-out;
}

.service-box:hover {
    transform: scale(1.05);
}

.service-box h2 {
    font-size: 22px;
    color: #333;
    margin-bottom: 10px;
}

.service-box p {
    font-size: 16px;
    color: #555;
    margin-bottom: 15px;
}

.btn {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 16px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #1CAD82;
}

.logout-btn {
    background-color: #dc3545;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 16px;
    margin-top: 20px;
    transition: background-color 0.3s;
}

.logout-btn:hover {
    background-color: #c82333;
}
.services-images{
    height: 200px;
    width: 200px;
}
.home-button {
    position: absolute;
    top: 20px;
    right: 20px;
    background: #007BFF;
    padding: 10px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

.home-button a {
    color: white;
    font-weight: bold;
    text-decoration: none;
}

.home-button:hover {
    background: #1CAD82;
}


    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Maid-Ahead Services</h1>
        <p>Choose from the services below:</p>

        <div class="services">
          
            <div class="service-box">
            <img src="images/housekeeping.png" class="services-images">
                <h2>Housekeeping</h2>
                <p>Professional cleaning services for your home.</p>
                <a href="housekeeping.php" class="btn">Explore</a>
            </div>

            <div class="service-box">
            <img src="images/babysitting.png" class="services-images">
                <h2>Babysitting</h2>
                <p>Reliable and trusted babysitters for your child.</p>
                <a href="babysitting.php" class="btn">Explore</a>
            </div>

            <div class="service-box">
            <img src="images/eldercare.png" class="services-images">
                <h2>Elderly Care</h2>
                <p>Compassionate care for senior family members.</p>
                <a href="elderlycare.php" class="btn">Explore</a>
            </div>
        </div>

        <div class="home-button">
    <a href="index.php">Home</a>
</div>

        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

</body>
</html>
