<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Maid Service</title>
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
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            width: 90%;
            max-width: 1200px;
            align-items: center;
        }

        .left-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .maid_logo {
            width: 80%;
            max-width: 300px;
        }

        .form-container {
            background: #d6d6d3;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #444;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f9f9f9;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
            background: #fff;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #1CAD82;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .right-section img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <div class="container">
   
        <div class="left-section">
            <img class="maid_logo" src="images/maid_ahead_logo.png" alt="Maid Ahead Logo">
            <div class="form-container">
                <h1>Login</h1>
                <form action="index.php" method="POST">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    
                    <button type="submit">Login</button>
                </form>
                <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
            </div>
        </div>

      
        <div class="right-section">
            <img src="images/52062.png" alt="Decorative Big Image">
        </div>
    </div>
    
    
    <?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        $_SESSION['user_id'] = $user_id;
        header("Location: services.php"); // Redirect to services page
        exit();
    } else {
        echo "Invalid login credentials.";
    }

    $stmt->close();
    $conn->close();
}
?>

    
</body>
</html>
