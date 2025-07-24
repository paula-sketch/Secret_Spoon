<?php
include 'db_connection.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "❌ Invalid or missing item ID.";
    exit();
}

$id = (int) $_GET['id'];

// Check if item exists
$check_sql = "SELECT * FROM menu_items WHERE id = ?";
$stmt = $conn->prepare($check_sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "❌ Item not found in the database.";
    exit();
}

// Proceed to delete
$delete_sql = "DELETE FROM menu_items WHERE id = ?";
$delete_stmt = $conn->prepare($delete_sql);
$delete_stmt->bind_param("i", $id);
$delete_sql = "UPDATE menu_items SET deleted = 1 WHERE id = ?";

if ($delete_stmt->execute()) {
    header("Location: index.php?deleted=1");
    exit();
} else {
    echo "❌ Failed to delete item.";
}
?>
