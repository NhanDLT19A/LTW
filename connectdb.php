<?php
$servername = "localhost";
$username = "root"; // Thay đổi theo username của bạn
$password = ""; // Thay đổi theo password của bạn
$dbname = "web"; // Thay đổi tên database của bạn

// Kết nối với MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
