<?php
$host = 'localhost';      // or 127.0.0.1
$user = 'root';           // your MySQL username (default is root in XAMPP)
$password = '';           // your MySQL password (default is empty in XAMPP)
$database = 'secret_spoon;'; // your database name

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}
?>
