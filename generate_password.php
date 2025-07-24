<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["plain_password"])) {
    $plain_password = $_POST["plain_password"];
    $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Generate Password Hash | Secret Spoon</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Pristina', cursive;
            background-color: #f5e9dc; /* Soft neutral beige */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 380px;
            text-align: center;
        }

        h2 {
            color: #5a3e36;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #4a3b2f;
            font-size: 18px;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #d9cfc1;
            border-radius: 8px;
            font-size: 16px;
            font-family: Arial, sans-serif;
        }

        input[type="submit"] {
            background-color: #7b5e57;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #5e463f;
        }

        .result {
            background-color: #f0f0f0;
            padding: 12px;
            border-radius: 8px;
            word-break: break-word;
            font-family: 'Courier New', monospace;
            font-size: 14px;
            color: #333;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #aaa;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🔐 Generate Password Hash</h2>
    <form method="post">
        <label for="plain_password">Enter Plain Password:</label>
        <input type="text" id="plain_password" name="plain_password" required>
        <input type="submit" value="Generate">
    </form>

    <?php if (!empty($hashed_password)): ?>
        <div class="result">
            <strong>Hashed Password:</strong><br>
            <?php echo htmlspecialchars($hashed_password); ?>
        </div>
    <?php endif; ?>

    <div class="footer">Secret Spoon | Admin Tool</div>
</div>

</body>
</html>
