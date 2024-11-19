<?php
session_start(); // Bắt đầu session

// Kiểm tra xem người dùng đã đăng nhập chưa
$hoTen = isset($_SESSION['HoTen']) ? $_SESSION['HoTen'] : '';

// Giỏ hàng
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
// Kiểm tra nếu có yêu cầu xóa giỏ hàng
if (isset($_GET['delcart']) && $_GET['delcart'] == 1) {
  unset($_SESSION['cart']); // Xóa giỏ hàng
  header("Location: giohang.php"); // Chuyển hướng lại trang
  exit();
}


// Kiểm tra nếu có yêu cầu thêm sản phẩm vào giỏ hàng
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart']) && $_POST['add_to_cart'] == true) {
    // Lấy dữ liệu sản phẩm từ POST
    $tensp = htmlspecialchars(trim($_POST['tensp']));
    $dongia = floatval($_POST['dongia']);
    $hinhanh = htmlspecialchars(trim($_POST['hinhanh']));
    $soluong = intval($_POST['soluong']);

    // Kiểm tra nếu sản phẩm đã có trong giỏ hàng
    $product_exists = false;
    foreach ($cart as &$item) {
        // So sánh tên sản phẩm (tensp) và đơn giá (dongia) để xác định trùng lặp
        if ($item['tensp'] == $tensp && $item['dongia'] == $dongia) {
            $item['soluong'] += $soluong; // Tăng số lượng sản phẩm
            $product_exists = true;
            break;
        }
    }

    // Nếu sản phẩm chưa có trong giỏ hàng, thêm vào giỏ hàng
    if (!$product_exists) {
        $cart[] = [
            'tensp'   => $tensp,
            'dongia'  => $dongia,
            'hinhanh' => $hinhanh,
            'soluong' => $soluong
        ];
    }

    // Lưu giỏ hàng vào session
    $_SESSION['cart'] = $cart;
}

// Tính tổng tiền giỏ hàng
$totalPrice = 0;
foreach ($cart as $item) {
    $totalPrice += $item['dongia'] * $item['soluong'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="JS/jquery-3.7.1.min.js"></script>
    <script src="JS/Jquery.js"></script>
    <title>Giỏ hàng</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="hinhanh/logo.webp" alt="Logo" />
        </div>
        <div class="menu">
        <li><a href="index.php">TRANG CHỦ</a></li>
        <li>
          <a href="menu/gateaux.php">BÁNH SINH NHẬT</a>
          <ul class="sub-menu">
            <li><a href="menu/gateaux.php">Gateaux Kem Tươi</a></li>
            <li><a href="menu/gateauxbo.php">Gateaux Kem Bơ</a></li>
            <li><a href="menu/sinhnhat.php">Bánh Sinh Nhật </a></li>
            <li><a href="menu/mousse.php">Bánh Mousse</a></li>
          </ul>
        </li>
        <li>
          <a href="">BÁNH MỲ & BÁNH MẶN</a>
          <ul class="sub-menu">
            <li><a href="menu/banhmy.php">Bánh Mì</a></li>
            <li><a href="menu/banhman.php">Bánh Mặn</a></li>
          </ul>
        </li>
        <li>
          <a href="">COOKIES & MINICAKE</a>
          <ul class="sub-menu">
            <li><a href="menu/cookies.php">Cookies</a></li>
            <li><a href="menu/minicake.php">Mini Cake</a></li>
          </ul>
        </li>
      </div>
      <div class="others">
        <?php if ($hoTen != ''): ?>
                <!-- Hiển thị tên người dùng khi đã đăng nhập -->
                <li><a class="fa fa-user" ></a><?php echo $hoTen; ?></li> 
                <li><a href="logout.php">Đăng xuất</a></li> <!-- Thêm liên kết Đăng xuất -->
            <?php else: ?>
                <!-- Hiển thị icon đăng nhập nếu chưa đăng nhập -->
                <li><a class="fa fa-user" href="login.html"></a></li>
            <?php endif; ?>
        <li>
            <a class="fa fa-shopping-bag" href="giohang.php"><span id="countsp"></span></a>
        </li>
      </div>
    </header>

    <section class="giohang">
        <div class="wrapper">
            <h1>GIỎ HÀNG</h1>
            <form action="#" method="post" class="cart table-wrap">
                <?php if (!empty($cart)) { ?>
                    <table class="cart-table">
                        <thead class="cart__row">
                            <tr>
                                <th colspan="2" class="text-center">Thông tin chi tiết sản phẩm</th>
                                <th class="text-center">Đơn giá</th>
                                <th class="text-center">Số lượng</th>
                                <th class="text-right">Tổng giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cart as $item) { ?>
                                <tr>
                                    <td><img src="<?php echo htmlspecialchars($item['hinhanh']); ?>" alt="image" width="350"></td>
                                    <td><?php echo htmlspecialchars($item['tensp']); ?></td>
                                    <td><?php echo number_format($item['dongia'], 0, ',', '.'); ?> đồng</td>
                                    <td><?php echo htmlspecialchars($item['soluong']); ?></td>
                                    <td><?php echo number_format($item['dongia'] * $item['soluong'], 0, ',', '.'); ?> đồng</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="total-price">
                        Tổng tiền: <?php echo number_format($totalPrice, 0, ',', '.'); ?> đồng
                    </div>
                <?php } else { ?>
                    <p>Giỏ hàng của bạn hiện chưa có sản phẩm.</p>
                <?php } ?>

                <div class="cart__row__sum">
                    <div class="twothirds"></div>
                    <div class="onethirds">
                        <p>
                            <span class="cart__subtotal-title">Tổng tiền</span>
                            <span class="h3 cart__subtotal"><?php echo number_format($totalPrice, 0, ',', '.'); ?>₫</span>
                        </p>
                        <a href="giohang.php?delcart=1" class="btn">Xóa giỏ hàng</a>     
                        <div class="btn">
                            <a class="checkout_btn" href="checkout.html">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="giohang.js"></script>
</body>
</html>