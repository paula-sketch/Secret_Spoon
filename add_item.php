<?php
session_start();

// Optional: Only allow logged in users
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Connect to database
$conn = new mysqli("localhost", "root", "", "secret_spoon;");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $ingredients = trim($_POST["ingredients"]);
    $price = trim($_POST["price"]);

    if (!empty($name) && !empty($ingredients) && is_numeric($price)) {
        $stmt = $conn->prepare("INSERT INTO menu_items (name, ingredients, price) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $name, $ingredients, $price);
        $stmt->execute();

        $message = "✅ Menu item added successfully!";
    } else {
        $message = "❌ Please fill in all fields correctly.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Menu Item | Secret Spoon</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #fffaf0;
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
            padding: 30px;
        }

        form {
            max-width: 500px;
            margin: auto;
            background-color: #ffebcd;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #c7a17a;
        }

        input, textarea {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #d7ccc8;
            border-radius: 6px;
        }

        button {
            background-color: #8b5e3c;
            color: #e6ccb2;;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ddb892;
        }

        .message {
            margin-top: 15px;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #4e342e;
        }
    </style>
</head>
<body>

    <h2>🍽 Add New Menu Item</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Dish Name" required>
        <textarea name="ingredients" placeholder="Ingredients (comma-separated)" required></textarea>
        <input type="number" step="0.01" name="price" placeholder="Price (₱)" required>
        <button type="submit">Add Item</button>
    </form>

    <div class="message"><?= $message ?></div>

    <a href="menu.php">← Back to Menu</a>

</body>
</html>
