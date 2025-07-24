<?php
$servername = "localhost";
$username = "root";
$password = ""; // Leave blank for XAMPP
$database = "secret_spoon;";

// Create connection
$conn = new mysqli("localhost", "root", "", "secret_spoon;");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get orders
$sql = "SELECT customer_name, item_name, quantity, total_price, order_time FROM orders ORDER BY order_time DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Orders - Secret Spoon</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        @font-face {
            font-family: 'Pristina';
            src: local('Pristina');
        }
        .orders-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff6f0;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
            font-family: 'Pristina', cursive;
            text-align: center;
        }
        .orders-title {
            font-size: 40px;
            margin-bottom: 20px;
            color: #3e2723;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #d7ccc8;
        }
        th {
            background-color: #fbe9e7;
            color: #4e342e;
        }
        td {
            color: #5d4037;
        }
    </style>
</head>
<body>
    <div class="orders-container">
        <h1 class="orders-title">📦 Placed Orders</h1>

        <?php if ($result && $result->num_rows > 0): ?>
            <table>
                <tr>
                    <th>Customer Name</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Order Time</th>
                </tr>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row["customer_name"]) ?></td>
                        <td><?= htmlspecialchars($row["item_name"]) ?></td>
                        <td><?= $row["quantity"] ?></td>
                        <td>₱<?= number_format($row["total_price"], 2) ?></td>
                        <td><?= $row["order_time"] ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p>No orders yet.</p>
        <?php endif; ?>

        <?php $conn->close(); ?>
    </div>
</body>
</html>
