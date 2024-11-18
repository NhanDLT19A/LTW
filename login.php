<?php
session_start(); // Bắt đầu session

// Kết nối cơ sở dữ liệu
include('connectdb.php');

// Kiểm tra nếu người dùng đã submit form đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Truy vấn để kiểm tra tên đăng nhập và mật khẩu
    $sql = "SELECT * FROM user WHERE Username = '$username' AND Password = '$password'";
    $result = $conn->query($sql);

    // Kiểm tra nếu có kết quả
    if ($result->num_rows > 0) {
        // Lấy thông tin người dùng từ database
        $row = $result->fetch_assoc();

        // Lưu thông tin người dùng vào session
        $_SESSION['idUser'] = $row['idUser'];
        $_SESSION['HoTen'] = $row['HoTen'];

        // Chuyển hướng tới trang chủ 
        header('Location: index.php');
        exit();
    } else {
        // Nếu đăng nhập thất bại, thông báo lỗi
        echo "Tên đăng nhập hoặc mật khẩu không chính xác.";
    }
}
?>