<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'infant';

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die('Error:') . mysqli_error($conn);
} else {
    // echo "Database connected successfully.";
}
?>