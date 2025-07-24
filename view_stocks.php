<?php
// stocks.php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login_admin.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "secret_spoon;");

$result = $conn->query("SELECT * FROM stocks");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Stocks</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f5efe6;
            text-align: center;
        }
        table {
            margin: auto;
            width: 60%;
            border-collapse: collapse;
            background-color: white;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 12px;
        }
        th {
            background-color: #e6d4c5;
        }
    </style>
</head>
<body>
    <h2>📦 Current Inventory / Stock</h2>
    <table>
        <tr>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Unit</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['item_name']) ?></td>
            <td><?= $row['quantity'] ?></td>
            <td><?= $row['unit'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
