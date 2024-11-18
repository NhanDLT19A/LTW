<?php
session_start();
session_unset(); // Hủy tất cả các biến session
session_destroy(); // Hủy session

// Chuyển hướng về trang chủ sau khi đăng xuất
header('Location: index.php');
exit();
?>
