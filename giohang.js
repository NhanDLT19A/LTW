document.addEventListener("DOMContentLoaded", () => {
    // Hàm để cập nhật tổng giá
    const updateTotal = () => {
      const rows = document.querySelectorAll(".cart__row");
      let total = 0;
  
      rows.forEach((row) => {
        const priceElement = row.querySelector("[data-label='Đơn giá'] .h3");
        const quantityElement = row.querySelector(".js-qty__num");
        const totalElement = row.querySelector("[data-label='Tổng giá'] .h3");
  
        if (priceElement && quantityElement && totalElement) {
          const price = parseFloat(priceElement.textContent.replace(/[₫,]/g, "")); // Lấy giá trị đơn giá và chuyển sang số
          const quantity = parseInt(quantityElement.value, 10); // Lấy số lượng và chuyển sang số nguyên
  
          const rowTotal = price * (quantity || 0); // Tính tổng giá của dòng hiện tại
          total += rowTotal; // Cộng tổng giá của dòng vào tổng toàn bộ giỏ hàng
  
          // Cập nhật tổng giá cho từng dòng
          totalElement.textContent = rowTotal.toLocaleString("vi-VN") + "₫";
        }
      });
  
      // Cập nhật tổng giá toàn bộ giỏ hàng
      const totalElement = document.querySelector(".cart__subtotal");
      if (totalElement) {
        totalElement.textContent = total.toLocaleString("vi-VN") + "₫";
      }
    };
  
    quantityInputs.forEach((input) => {
      input.addEventListener("input", (event) => {
        const productId = input.dataset.id; // Lấy ID sản phẩm từ thuộc tính data-id
        const quantity = parseInt(input.value, 10);
    
        if (!quantity || quantity <= 0) {
          input.value = 1; // Đảm bảo số lượng tối thiểu là 1
        }
    
        // Gửi dữ liệu lên server để cập nhật
        fetch('update_cart.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },  
          body: JSON.stringify({
            idSanpham: productId,
            quantity: quantity
          })
        })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              updateTotal(); // Cập nhật tổng giá sau khi server xử lý thành công
            } else {
              alert("Không thể cập nhật giỏ hàng: " + data.message);
            }
          })
          .catch(error => {
            console.error("Lỗi khi cập nhật giỏ hàng:", error);
          });
      });
    });
    
  
    // Gắn sự kiện lắng nghe cho các nút xóa
    removeButtons.forEach((button) => {
      button.addEventListener("click", (event) => {
        event.preventDefault();
        const row = button.closest(".cart__row");
        const productId = button.dataset.idS; // Lấy ID sản phẩm từ thuộc tính data-id
    
        if (row) {
          // Gửi yêu cầu xóa sản phẩm lên server
          fetch('remove_from_cart.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({ idSanpham: productId })
          })
            .then(response => response.json())
            .then(data => {
              if (data.success) {
                row.remove(); // Xóa dòng sản phẩm trên giao diện
                updateTotal(); // Cập nhật tổng giá sau khi xóa
              } else {
                alert("Không thể xóa sản phẩm: " + data.message);
              }
            })
            .catch(error => {
              console.error("Lỗi khi xóa sản phẩm:", error);
            });
        }
      });
    });
    
  
    // Tính tổng giá ban đầu khi tải trang
    updateTotal();
  });
  