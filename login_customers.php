<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "secret_spoon;");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"];

    // Check if email exists
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Set session variables
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $username;

            // Redirect to menu or dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "❌ Incorrect password.";
        }
    } else {
        $error = "❌ Email not found.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | Secret Spoon</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Pristina&display=swap" rel="stylesheet">
</head>
<body>

<h2>🔐 Login to Secret Spoon</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <button type="submit">Login</button>
</form>

<a href="register.php">📝 Don't have an account? Register</a><br>
<a href="menu.php">🍽 View Menu as Guest</a>

<?php
if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>

</body>
</html>
