<!--  -->
<div class="main__cart grid">
    <section class="main__cart-total">
        <div class="main__cart_total-left">
            <div class="cart_total-left-content">
                <div class="cart_total-left-nember">
                    <div class="cart_total-left-nember-item">
                        <h3 class="cart_total-lef-nember-title">
                            Miễn phí vận chuyển cho thành viên.
                        </h3>
                        <span class="cart_total-lef-nember-content">Trở thành Thành viên Nike để được vận chuyển nhanh
                            và miễn
                            phí.

                            <a href="#"> Tham gia với chúng tôi</a></span>
                    </div>
                </div>
                <div class="total__left_summary">
                    <h3 class="total__left_summary-title">Tóm tắt giỏ hàng</h3>
                    <span class="total__left_summary-content">
                        Kiểm tra mặt hàng của bạn và chọn vận chuyển của bạn để có
                        trải nghiệm tốt hơn
                    </span>
                </div>
                <div class="total__left_product">
                    <div class="total__left_product-container">
                        <?php
                        $tong = 0;
                        $total = 0;
                 
                       if (isset($_SESSION['giohang'])&&is_array($_SESSION['giohang'])) {
                        
                       foreach ($_SESSION['giohang'] as $item) {
                        $i=0;
                        $tong = 0;
                        $price = $item['price'];
$soluong = $item['soluong'];
                        $tt = $price * $soluong;
                $tong += $tt;
                $total = $tong - 7.00;
                        extract($item);
                        $tt=$price * $soluong;
                        $linkdel = "index.php?pg=delcart&ind=".$i;
                        $delcartall = "index.php?pg=delcartall"; 
                        echo '
                        <div class="total__left_product-item">
                        <div class="total__left_product-images">
                            <div class="total__left_product-image">
                                <img src='.$img.' alt="" />
                            </div>
                        </div>
                        <div class="total__left_product-content">
                            <h3 class="total__left_product-content-title">
                                '.$name.'
                            </h3>
                            <p class="total__left_product-content-size">42 EU - 9US</p>
                            <div class="total__left_product-content-quantity">
                                <span class="total__left_product-content-quantity-text">Quantity</span>
                                <input class="total__left_product-content-quantity-number" type="number" min="1" value="' .$soluong. '" data-index="' . $i . '"/>
                            </div>
                            <div class="total__left_product-content-price">
                                <p>$'.$price.'</p>
                            </div>
                        </div>
                        
                        <a href="'.$linkdel.'" class="total__left_product-delete">
                            <i class="total__left_product-delete-icon bi bi-trash3-fill"></i>
                        </a>
                    </div>
                    
                        ';
                        $i++;


                    }
                }else {
                    // Show message when the cart is empty
                    echo '<div class="empty-cart"><img class="empty_img-cart"  src="view/layout/img/empty-cart.webp" alt=""> </div>
               
                        ';
                        }
                        ?>
                        <a href="<?=$delcartall?>"><button class="delete">Xóa giỏ hàng</button></a>
                        <a href="./index.php"><button class="contine">tiếp tục đặt hàng</button></a>
                    </div>

                </div>
                <div class="total__left_shipping">
                    <h3 class="total__left_shipping_title">
                        Phương thức vận chuyển có sẵn
                    </h3>
                    <div class="total__left_shipping-item">
                        <div class="total__left_shipping-item-image">
                            <img src="view/layout/img/shipping1.png" alt="" class="total__left_shipping-item-img" />
                        </div>
                        <div class="total__left_shipping-item-content">
                            <h3 class="total__left_shipping-item-content-title">
                                Chuyển phát Fedex
                            </h3>
                            <span class="total__left_shipping-item-content-title-span">
                                Giao hàng tận nơi: 2-3 ngày làm việc</span>
                        </div>
                        <div class="total__left_shipping-item-right">
                            <h3 class="total__left_shipping-item-right-title">
                                Miễn phí
                            </h3>
                            <div class="total__left_shipping-item-right-icon">
                                <i class="bi bi-circle-fill"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="total__left_shipping_title">
                        Vận chuyển quốc tế có sẵn
                    </h3>
                    <div class="total__left_shipping-item">
                        <div class="total__left_shipping-item-image">
                            <img class="shipping2-img" src="view/layout/img/shipping2.png" alt=""
                                class="total__left_shipping-item-img" />
                        </div>
                        <div class="total__left_shipping-item-content">
                            <h3 class="total__left_shipping-item-content-title">
                                Chuyển Phát DHL
                            </h3>
                            <span class="total__left_shipping-item-content-title-span">Giao hàng tận nơi: 1-3 ngày làm
                                việc</span>
                        </div>
                        <div class="total__left_shipping-item-right">
                            <h3 class="total__left_shipping-item-right-title">
                                $ 12.00
                            </h3>
                            <div class="total__left_shipping-item-right-icon">
                                <i class="icon-shipping2 bi bi-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__cart_total-right">
            <div class="main__cart_total-right-container">
                <h3 class="main__cart_total-right-title">
                    Xem lại chi tiết đơn hàng
                </h3>
                <p class="main__cart_total-right-code-content">
                    Bạn có Mã khuyến mại không?
                </p>
                <div class="main__cart_total-right-code">
                    <input type="text" class="main__cart_total-right-code-input" placeholder="Code voucher" />
                    <a class="main__cart_total-right-code-link" href=""><button
                            class="main__cart_total-right-code-button">
                            Áp dụng
                        </button></a>
                </div>
                <div class="main__cart_total-right-subtotal">
                    <h3 class="main__cart_total-right-subtotal-content">
                        Tổng phụ
                    </h3>
                    <p class="main__cart_total-right-subtotal-price">$<?=$tong?></p>
                </div>
                <div class="main__cart_total-right-subtotal">
                    <h3 class="main__cart_total-right-subtotal-content">
                        Ước tính Vận Chuyển & Bàn Giao
                    </h3>
                    <p class="main__cart_total-right-subtotal-price">$7.00</p>
                </div>
                <div class="main__cart_total-right-subtotal">
                    <h3 class="main__cart_total-right-subtotal-content">
                        Thuế ước tính
                    </h3>
                    <p class="main__cart_total-right-subtotal-price">-</p>
                </div>
                <div class="main__cart_total-right-total">
                    <h3 class="main__cart_total-right-total-content">Tổng</h3>
                    <p class="main__cart_total-right-total-price">$<?=$total?></p>
                </div>
                <div class="main__cart_total-right-checkout">
                    <button id="checkoutt" class="main__cart_total-right-checkout-btn btn">
                        Thanh toán
                    </button>

                    <a href="" class="main__cart_total-right-checkout-link"><button
                            class="main__cart_total-right-checkout-btn btn">
                            Pay Pal
                        </button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- moresection -->
    <section class="explore">
        <div class="explore__title">
            <div class="explore__title-item">More to Explore</div>
            <div class="explore__title-all">
                <span> All products</span>
                <i class="explore__title-shop-icon bi bi-sliders"></i>
            </div>
        </div>
        <div class="explore__container">
            <div class="explore__container-items">
                <img src="view/layout/img/more1.png" alt="" class="explore__container-img" />
                <i class="explore__container-icon bi bi-heart"></i>
                <div class="explore__container-detal">
                    <div class="explore__container-title">
                        <h3 class="explore__container-title-item">Nike Womens 1</h3>
                        <div class="explore__container-title-star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <div class="explore__container-option">
                        <span class="explore__container-option-brand">Brand Nike</span>
                        <a href="#" class="explore__container-option-a"><i
                                class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                    </div>
                </div>
            </div>
            <div class="explore__container-items">
                <img src="view/layout/img/more2.png" alt="" class="explore__container-img" />
                <i class="explore__container-icon bi bi-heart"></i>
                <div class="explore__container-detal">
                    <div class="explore__container-title">
                        <h3 class="explore__container-title-item">Nike Womens 1</h3>
                        <div class="explore__container-title-star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <div class="explore__container-option">
                        <span class="explore__container-option-brand">Brand Nike</span>
                        <a href="#" class="explore__container-option-a"><i
                                class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                    </div>
                </div>
            </div>
            <div class="explore__container-items">
                <img src="view/layout/img/more3.png" alt="" class="explore__container-img" />
                <i class="explore__container-icon bi bi-heart"></i>
                <div class="explore__container-detal">
                    <div class="explore__container-title">
                        <h3 class="explore__container-title-item">Nike Womens 1</h3>
                        <div class="explore__container-title-star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </div>
                    </div>
                    <div class="explore__container-option">
                        <span class="explore__container-option-brand">Brand Nike</span>
                        <a href="#" class="explore__container-option-a"><i
                                class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                    </div>
                </div>
            </div>
            <div class="explore__container-items">
                <img src="view/layout/img/more4.png" alt="" class="explore__container-img" />
                <div class="explore__container-sale"><span> -30%</span></div>
                <i class="explore__container-icon bi bi-heart"></i>
                <div class="explore__container-detal">
                    <div class="explore__container-title">
                        <h3 class="explore__container-title-item">Nike Womens 1</h3>
                        <div class="explore__container-title-star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                        </div>
                    </div>
                    <div class="explore__container-option">
                        <span class="explore__container-option-brand">Brand Nike</span>
                        <a href="#" class="explore__container-option-a"><i
                                class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const quantityInputs = document.querySelectorAll(".total__left_product-content-quantity-number");
    const subtotalElement = document.querySelector(".main__cart_total-right-subtotal-price");
    const totalElement = document.querySelector(".main__cart_total-right-total-price");

    // Function to update item total and overall total
    function updateTotals() {
        let subtotal = 0;
        quantityInputs.forEach((input) => {
            const index = input.dataset.index;
            const price = parseFloat(<?php echo $_SESSION['giohang'][0]['price']; ?>);
            const quantity = parseInt(input.value);
            const itemTotal = price * quantity;
            subtotal += itemTotal;

            // Update the displayed item total price
            const itemTotalElement = input.parentElement.nextElementSibling.querySelector(
                ".total__left_product-content-price p");
            itemTotalElement.textContent = "$" + itemTotal.toFixed(2);
        });

        // Update the displayed subtotal and total
        const shippingCost = 7.00; // Estimated Shipping & Handling cost
        const total = subtotal - shippingCost;

        subtotalElement.textContent = "$" + subtotal.toFixed(2);
        totalElement.textContent = "$" + total.toFixed(2);
    }

    // Attach event listeners to quantity input fields
    quantityInputs.forEach((input) => {
        input.addEventListener("change", updateTotals);
    });

    // Call the updateTotals function initially to display the correct totals
    updateTotals();
});
</script>