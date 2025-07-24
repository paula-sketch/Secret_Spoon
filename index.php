<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Secret Spoon - Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #fffaf0;
            font-family: 'Segoe UI', sans-serif;
            color: #4e342e;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 80px;
        }

        h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .nav-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .nav-buttons a {
            display: inline-block;
            background-color: #8b5e3c;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .nav-buttons a:hover {
            background-color: #ddb892;
        }

        .footer {
            margin-top: 100px;
            padding: 20px;
            font-size: 14px;
            background-color: #ffe0b2;
            color: #5d4037;
        }

        .welcome {
            font-size: 20px;
            margin-bottom: 10px;
            color: #6d4c41;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Secret Spoon 🍽️</h1>

        <?php if (isset($_SESSION['username'])): ?>
            <p class="welcome">Hello, You're now logged in.</p>
        <?php else: ?>
            <p class="welcome">You can now access admin dashboard.</p>
        <?php endif; ?>

        <p>Your favorite Filipino-American dishes are waiting for you.</p>

        <div class="nav-buttons">
    <a href="menu.php">View Menu</a>
    <a href="view_stocks.php">View Stocks</a>
    <a href="orders.php">View Orders</a>
    <a href="add_item.php">Add New Item</a>
    <a href="edit_item.php?id=1">Edit Menu Item</a>
     <a href="delete_item.php?id=<?php echo $row['id']; ?>">Delete</a>
    <a href="logout.php">Logout</a>
</div>

        </div>
    </div>

    <div class="footer">
        &copy; 2025 Secret Spoon. All rights reserved.
    </div>

</body>
</html>
