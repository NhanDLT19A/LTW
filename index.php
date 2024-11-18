<?php
include('connectdb.php');
session_start(); // Bắt đầu session

// Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['HoTen'])) {
    $hoTen = $_SESSION['HoTen']; // Lấy tên người dùng từ session
} else {
    $hoTen = ''; // Nếu chưa đăng nhập, để trống
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
   
    <title>Trang chủ</title>
  </head>

  <body>
    <header>
      <div class="logo">
        <img src="hinhanh/logo.webp" />
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
        <li><a class="fa fa-shopping-bag" href="giohang.php"></a></li>
      </div>
    </header>
    <section class="banner">
        <div class="slider-container">
            <div class="slider">
                <div class="slide"><img src="hinhanh/ms_banner_img2.jpg" alt="Slide 1"></div>
                <div class="slide"><img src="hinhanh/ms_banner_img4.jpg" alt="Slide 2"></div>
                <div class="slide"><img src="hinhanh/ms_banner_img2.jpg" alt="Slide 3"></div>
            </div>
            <div class="dots">
                <span class="dot" data-index="0"></span>
                <span class="dot" data-index="1"></span>
                <span class="dot" data-index="2"></span>
            </div>
        </div>
    
    </section>
    <section class="home-product">
        <div class="center-header">
            <h2>BÁNH SINH NHẬT</h2>
            <img  class="banh-icon" src="//theme.hstatic.net/1000313040/1000406925/14/home_line_collection1.png?v=2177" alt="icon banh">
        </div>
                <div class="flex-uniform">
                <?php 
                    // Truy vấn lấy tất cả sản phẩm
                    $sql = "SELECT * FROM products WHERE LoaiBanh = 'BanhSN'";
                    $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                // Tạo danh sách sản phẩm
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="card-wrapper">
                         <div class="card-product">
                             <div class="card-img">
                                <a href="#">
                                    <img class="img-card-product" src="<?php echo $row['HinhAnh']; ?>" alt="later">
                                </a>
                            </div>
                            <div class="card-title">
                                <a href="#">
                                    <?php echo $row['TenBanh']; ?>
                                </a>
                            </div>
                            <div class="card-price">
                                <div class="price">
                                    <?php echo number_format($row['Gia'], 0, ',', '.'); ?> đồng
                                </div>
                                <div class="action">
                                    <div class="btn-add-cart">
                                        <a class="fa fa-shopping-cart"></a>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                echo "Không có sản phẩm nào.";
            }
            ?>
            </div>
        <div class="btn-viewmore-tab text-center">
            <a class="btn-more" href="menu/sinhnhat.php">Xem thêm</a>
        </div>
    </section>
    <section class="home-product2">
        <div class="center-header">
            <h2>GATEAUX KEM TƯƠI</h2>
            <img  class="banh-icon" src="//theme.hstatic.net/1000313040/1000406925/14/home_line_collection1.png?v=2177" alt="icon banh">
        </div>
        <div class="flex-uniform">
        <?php 
                    // Truy vấn lấy tất cả sản phẩm
                    $sql = "SELECT * FROM products WHERE LoaiBanh = 'GateauxKT'";
                    $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                // Tạo danh sách sản phẩm
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="card-wrapper">
                         <div class="card-product">
                             <div class="card-img">
                                <a href="#">
                                    <img class="img-card-product" src="<?php echo $row['HinhAnh']; ?>" alt="later">
                                </a>
                            </div>
                            <div class="card-title">
                                <a href="#">
                                    <?php echo $row['TenBanh']; ?>
                                </a>
                            </div>
                            <div class="card-price">
                                <div class="price">
                                    <?php echo number_format($row['Gia'], 0, ',', '.'); ?> đồng
                                </div>
                                <div class="action">
                                    <div class="btn-add-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                echo "Không có sản phẩm nào.";
            }
            
            // Đóng kết nối
            $conn->close();
            ?>
        </div>
        <div class="btn-viewmore-tab text-center">
            <a class="btn-more" href="menu/gateaux.php">Xem thêm</a>
        </div>
    </section>
    <script src="slider.js"></script>
  </body>
</html>
