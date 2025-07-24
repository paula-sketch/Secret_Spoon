<?php
session_start();
include 'db_connection.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ? AND role = 'admin'");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

if ($user = mysqli_fetch_assoc($result)) {
    if (password_verify($password, $user["password"])) {
        $_SESSION["admin"] = $user["username"];
        header("Location: index.php");
        exit();
    } else {
        $error = "❌ Invalid admin credentials.";
    }
} else {
    $error = "❌ Invalid admin credentials.";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secret Spoon Admin Login</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fffaf0;
            margin: 0;
        }

        header {
            background-color: #b08968;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-family: 'Pristina', cursive;
            font-size: 28px;
            font-weight: bold;
        }

        .login-container {
            background-color: white;
            max-width: 450px;
            margin: 80px auto;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #8b5e3c;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ffab91;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #555;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    🍽️ Secret Spoon - Admin Login
</header>

<div class="login-container">
    <h2>Login to Admin Panel</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </form>
    <a class="back-link" href="login_admin.php">Login as Admin</a>
</div>

</body>
</html>
