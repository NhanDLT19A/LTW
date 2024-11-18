<?php
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
   
    <title>Giỏ hàng </title>
  </head>

  <body>
    <header>
      <div class="logo">
        <img src="hinhanh/logo.webp" />
      </div>
      <div class="menu">
        <li><a href="index.php">TRANG CHỦ</a></li>
        <li>
			<a href="menu/gateaux.html">BÁNH SINH NHẬT</a>
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
            <?php else: ?>
                <!-- Hiển thị icon đăng nhập nếu chưa đăng nhập -->
                <li><a class="fa fa-user" href="login.html"></a></li>
            <?php endif; ?>
        <li><a class="fa fa-shopping-bag" href="giohang.php"></a></li>
      </div>
    </header>
    
    <section class="giohang">
        <div class="wrapper">
            <h1>GIỎ HÀNG</h1>
            <form action="#" method="post" class="cart table-wrap">
				<table class="cart-table ">
					<thead class="cart__row">
						<tr><th colspan="2" class="text-center">Thông tin chi tiết sản phẩm</th>
						<th class="text-center">Đơn giá</th>
						<th class="text-center">Số lượng</th>
						<th class="text-right">Tổng giá</th>
					</tr></thead>
					<tbody>
						
						<tr class="cart__row ">
							<td data-label="Sản phẩm">
								<a href="/products/red-velvet-cake-chu-nhat" class="cart__image">
									
									<img src="//product.hstatic.net/1000313040/product/frame_fb_12_782aca394a634f6da114cbc484985496_medium.png" alt="RED VELVET CAKE CHỮ NHẬT">
								</a>
							</td>
							<td>
								<a href="/products/red-velvet-cake-chu-nhat" class="h4">
									RED VELVET CAKE CHỮ NHẬT
								</a>
								
								<br>
								<small>22cm x 32cm</small>
			

								<button class="cart__remove" onclick="removeItem(this)">Xóa</button>
							</td>
							<td data-label="Đơn giá">
								<span class="h3">
									730,000₫
								</span>
							</td>
							<td data-label="Số lượng">
                                <div class="js-qty">                               
                                    <input type="text" class="js-qty__num" value="1" min="1" data-id="" aria-label="quantity" pattern="[0-9]*" name="updates[]" id="updates_">                                  
                                </div>
							</td>
							<td data-label="Tổng giá" class="text-right">					
								<span class="h3">
									730,000₫
								</span>								
							</td>
						</tr>												
						
					</tbody>
				</table>
				<div class="cart__row__sum">
					<div class="twothirds"></div>
					<div class="onethirds ">
						<p >
							<span class="cart__subtotal-title">Tổng tiền</span>
							<span class="h3 cart__subtotal">1,060,000₫</span>
						</p>
						
						<p><em>Vận chuyển</em></p>
						<div class="btn ">

							<a class="checkout_btn " href="checkout.html">
								Thanh toán
							</a>

						</div>
					</div>
				</div>
			</form>
        </div>
    </section>
	<script src="giohang.js"></script>
  </body>
</html>
