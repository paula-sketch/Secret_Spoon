<!DOCTYPE html>
<html>
<head>
    <title>Register | Secret Spoon</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Pristina&display=swap" rel="stylesheet">
</head>
<body>

<h2>📝 Register to Secret Spoon</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Enter username" required>
    <input type="email" name="email" placeholder="Enter email" required>
    <input type="password" name="password" placeholder="Enter password" required>
    <button type="submit">Register</button>
</form>

<a href="menu.php">🍽 View Menu</a>

<?php
// CONNECT TO DATABASE
$conn = new mysqli("localhost", "root", "", "secret_spoon;");
if ($conn->connect_error) {
    die("<p style='color:red;'>Connection failed: " . $conn->connect_error . "</p>");
}

// HANDLE FORM SUBMISSION
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["username"], $_POST["email"], $_POST["password"])) {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // ✅ Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:red;'>❌ Invalid email format</p>";
        exit();
    }

    // ❌ Check for duplicate email
    $check = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "<p style='color:red;'>❌ Email is already registered</p>";
        exit();
    }

    // ✅ Insert new user
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    
    if ($stmt->execute()) {
        echo "<p style='text-align:center; color:green;'>✅ Registered successfully!</p>";
        // Optional: Redirect to login page or menu
        // header("Location: login.php");
        // exit();
    } else {
        echo "<p style='color:red;'>❌ Error registering user.</p>";
    }

    $stmt->close();
    $check->close();
}
$conn->close();
?>
</body>
</html>
