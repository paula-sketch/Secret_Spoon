<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "secret_spoon;");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<span style='color:red;'>❌ Invalid item ID.</span>";
    exit;
}

$id = intval($_GET['id']);
$message = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dish = $conn->real_escape_string($_POST['dish']);
    $name = $conn->real_escape_string($_POST['name']);
    $ingredients = $conn->real_escape_string($_POST['ingredients']);
    $price = floatval($_POST['price']);
    $drinks = $conn->real_escape_string($_POST['drinks']);
    $service = $conn->real_escape_string($_POST['service']);

    $sql = "UPDATE edit_item SET 
        dish='$dish', 
        name='$name', 
        ingredients='$ingredients', 
        price=$price, 
        drinks='$drinks', 
        service='$service' 
        WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: menu.php?updated=1");
        exit;
    } else {
        $message = "<span style='color:red;'>❌ Error updating item: " . $conn->error . "</span>";
    }
}

// Fetch item data
$result = $conn->query("SELECT * FROM edit_item WHERE id=$id");
if ($result->num_rows != 1) {
    echo "<span style='color:red;'>❌ Item not found.</span>";
    exit;
}
$item = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Menu Item</title>
    <style>
        body {
            font-family: Pristina;
            background-color: #fffaf0;
            padding: 40px;
        }
        form {
            max-width: 600px;
            margin: auto;
            background: #ffebcd;
            padding: 25px;
            box-shadow: 0 0 10px #c7a17a;;
            border-radius: 12px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border-radius: 6px;
            border: 1px solid #d7ccc8;
        }
        input[type="submit"] {
            background-color: #8b5e3c;
            color: #e6ccb2;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #ddb892;
        }
    </style>
</head>
<body>

<<h1 style="text-align: center; font-family: 'Pristina', cursive; font-size: 40px; color: #5a3e36;">
    ✨ Edit Menu Item ✨
</h1>
<?php echo $message; ?>
<form method="post" action="">
    <label>Dish:</label>
    <input type="text" name="dish" value="<?php echo htmlspecialchars($item['dish']); ?>" required>

    <label>Name:</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($item['name']); ?>" required>

    <label>Ingredients:</label>
    <textarea name="ingredients" required><?php echo htmlspecialchars($item['ingredients']); ?></textarea>

    <label>Price (₱):</label>
    <input type="number" step="0.01" name="price" value="<?php echo $item['price']; ?>" required>

    <label>Drinks:</label>
    <input type="text" name="drinks" value="<?php echo htmlspecialchars($item['drinks']); ?>">

    <label>Service:</label>
    <input type="text" name="service" value="<?php echo htmlspecialchars($item['service']); ?>">

    <input type="submit" value="Update Item">

    <?php
// Assume you already have a connection and query result
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td><a href='edit_item.php?id=1 " . $row['id'] . "'>Edit</a></td>";
    echo "</tr>";
}
?>

</form>

</body>
</html>


