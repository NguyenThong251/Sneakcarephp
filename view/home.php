<div class="app__container grid">
    <!-- slider -->
    <div class="slider">
        <div class="slider__background">
            <img src="view/layout/img/slider img.png" alt="" class="slider__background-img" />
        </div>
        <div class="slider__arrow">
            <i class="slider__arrow-icon bi bi-arrow-left-circle-fill"></i><i
                class="slider__arrow-icon bi bi-arrow-right-circle-fill"></i>
        </div>
        <button class="slider__search">
            <input type="text" placeholder="Search" class="slider__search-content" />
            <i class="slider__search-icon bi bi-search"></i>
        </button>
        <div class="slider__option">
            <div class="slider__option-item"></div>
            <div class="slider__option-item"></div>
            <div class="slider__option-item"></div>
        </div>
    </div>
    <!-- interest -->
    <div class="interest interest__container">
        <div class="interest__container-item">
            <div class="interest__container-icon">
                <img src="view/layout/img/policy.png" alt="" />
            </div>
            <div class="interest__container-content">
                <h3>Chính sách bảo hành an toàn</h3>
                <span>1 đổi 1 hoàn tiền 100%</span>
            </div>
        </div>
        <div class="interest__container-item">
            <div class="interest__container-icon">
                <img src="view/layout/img/support.png" alt="" />
            </div>
            <div class="interest__container-content">
                <h3>Hỗ trợ 24/24</h3>
                <span>Liên hệ chúng tôi ngay bây giờ</span>
            </div>
        </div>
        <div class="interest__container-item">
            <div class="interest__container-icon">
                <img src="view/layout/img/Delivery.png" alt="" />
            </div>
            <div class="interest__container-content">
                <h3>Chuyển phát nhanh</h3>
                <span>Giao hàng nhanh theo đơn hàng</span>
            </div>
        </div>
    </div>
    <!-- Treding -->
    <div class="section__trending">
        <div class="trending__content">
            <h3>Xu hướng</h3>
        </div>
        <div class="trending__container">
            <div class="trending__container-item">
                <img src="view/layout/img/trending image1.png " alt="" class="trending__container-img" />
                <a href="#">
                    <button class="trending__container-btn">Mua</button></a>
            </div>
            <div class="trending__container-item">
                <img src="view/layout/img/trending image2.png " alt="" class="trending__container-img" />
                <a href="#">
                    <button class="trending__container-btn">Mua</button></a>
            </div>
        </div>
    </div>
    <!-- slogan -->
    <div class="content__slogan">
        <h1 class="content__slogan-h1">MANG LẠI NĂNG LƯỢNG</h1>
        <span class="content__slogan-span">Nâng tầm phong cách của bạn với tất cả sự thoải mái và màu sắc của
            Air Max SC.</span>
        <a href=""><button class="content__slogan-btn">Mua tất cả Air Max</button></a>
    </div>
    <!-- Popular -->
    <div class="popular">
        <div class="popular__title">
            <div class="popular__title-item">Sản phẩm bán chạy</div>
            <div class="popular__title-shop">
                <span> Mua tất cả</span>
                <i class="popular__title-shop-icon bi bi-arrow-left-circle-fill"></i><i
                    class="popular__title-shop-icon bi bi-arrow-right-circle-fill"></i>
            </div>
        </div>
        <div class="popular__content">


            <?php
foreach ($hotproduct as $item) {
    extract($item);
    if ($price2>0) {
      $giacu = ' <span class="priceold">'.$price2.'</span>';
    } else {
        $giacu =' ';
    }
    if ($new == 1) {
       $favorite = '<i class="explore__container-icon bi bi-heart"></i>';
    } else {
       $favorite=' ';
    }
    if($img!="") $img=PATH_IMG.$img;
    echo '  <div class="popular__content-items">
  
    <img src="'.$img.'" alt="" class="popular__content-items-img" />
    
    <div class="icon__popular">
        <i class="popular__content-items-icon bi bi-bag-check-fill"></i>
    </div>
    <div class="popular__content-items-detail">
        <h3 class="popular__content-items-h3">'.$name.'</h3>

        <input class="product__quatity" type="number" name="soluong" id="" min="1" value="1" />
     
    

        <div class="popular__content-detail">
            <span class="popular__content-gender">Giày nam</span>
            <div class="popular__content-price">'.$price.'<span>$</span></div>
        </div>
        <form action="index.php?pg=addcart" method="post">
        <input type="hidden" name="id" value="'.$id.'">
        <input type="hidden" name="name" value="'.$name.'">
        <input type="hidden" name="price" value="'.$price.'">
        <input type="hidden" name="img" value="'.$img.'">
        <input type="hidden" name="soluong" value="1">
        <input type="submit" name="addcart" value="Add cart" class="btn-buy">
        </form>;
    </div>
</div>';
}


?>





        </div>
    </div>
    <!-- more explore -->
    <div class="explore">
        <div class="explore__title">
            <div class="explore__title-item">Mới nhất</div>
            <div class="explore__title-all">
                <span>Tất cả sản phẩm </span>
                <div class="explore__title-shop-icon-main">
                    <i class="explore__title-shop-icon bi bi-sliders"></i>
                </div>
            </div>
        </div>
        <div class="explore__container">
            <?php
foreach ($newproduct as $item) {
    extract($item);
    if ($price2>0) {
      $giacu = ' <span class="priceold">'.$price2.'</span>';
    } else {
        $giacu =' ';
    }
    if ($new == 1) {
       $favorite = '<i class="explore__container-icon bi bi-heart"></i>';
    } else {
       $favorite=' ';
    }
    if($img!="") $img=PATH_IMG.$img;
    $link_productdetal='index.php?pg=productdetal&idproduct='.$id;
    echo ' <div class="explore__container-items">
    <a href="'.$link_productdetal.'" class="popular__content-items_parent">
    <img src="'.$img.'" alt="" class="explore__container-img" />
    </a>
   '.$favorite.'
    <div class="explore__container-detal">
        <div class="explore__container-title">
            <a href="'.$link_productdetal.'" class="explore__container-title-item">'.$name.'</a>
            <div class="explore__container-title-star">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
            </div>
        </div>
        <div class="price__option">
            <span class="price">'.$price.'</span>
            '.$giacu.'
        </div>  
        <div class="explore__container-option">
            <span class="explore__container-option-brand">Thương hiệu Nike</span>
            <a href="#" class="explore__container-option-a"><i
                    class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
        </div>
    </div>
</div>';
}


?>

        </div>
    </div>



    <div class="popular">
        <div class="popular__title">
            <div class="popular__title-item">Sản phẩm xu hướng</div>
            <div class="popular__title-shop">
                <span> Mua tất cả</span>
                <i class="popular__title-shop-icon bi bi-arrow-left-circle-fill"></i><i
                    class="popular__title-shop-icon bi bi-arrow-right-circle-fill"></i>
            </div>
        </div>
        <div class="popular__content">


            <?php
foreach ($viewproduct as $item) {
    extract($item);
    if ($price2>0) {
      $giacu = ' <span class="priceold">'.$price2.'</span>';
    } else {
        $giacu =' ';
    }
    if ($new == 1) {
       $favorite = '<i class="explore__container-icon bi bi-heart"></i>';
    } else {
       $favorite=' ';
    }
    if($img!="") $img=PATH_IMG.$img;
    echo '  <div class="popular__content-items">
  
    <img src="'.$img.'" alt="" class="popular__content-items-img" />
    
    <div class="icon__popular">
        <i class="popular__content-items-icon bi bi-bag-check-fill"></i>
    </div>
    <div class="popular__content-items-detail">
        <h3 class="popular__content-items-h3">'.$name.' ('.$view.')</h3>

        <input class="product__quatity" type="number" name="soluong" id="" min="1" value="1" />
        <input type="hidden" name="id" value="1">
        <input type="hidden" name="tensp" value="Nike Air Max 90">
        <input type="hidden" name="gia" value="180">
        <input type="hidden" name="hinh" value="popular image1.png">

        <div class="popular__content-detail">
            <span class="popular__content-gender">Giày nam</span>
            <div class="popular__content-price">'.$price.'<span>$</span></div>
        </div>
        <input type="submit" name="addcart" value="Mua ngay" class="btn-buy"></input>

    </div>
</div>';
}


?>





        </div>
    </div>
    <!-- essential -->



    <div class="essential">
        <h3 class="essential__content">Mua sắm những thứ cần thiết</h3>
        <div class="essential__title">
            <div class="essential__title-content">
                <img src="view/layout/img/Essential image1.png" alt="" class="essential__title-image" />
                <a href="#">
                    <button class="essential__container-btn--fisrt">
                        Cửa hàng
                    </button></a>
                <div class="essential__title-banrd">
                    <span>Quần áo</span>
                </div>
            </div>
            <div class="essential__title-content">
                <img src="view/layout/img/Essential image2.png" alt="" class="essential__title-image" /><a href="#">
                    <button class="essential__container-btn">Cửa hàng</button></a>
                <div class="essential__title-banrd">
                    <span>Giày</span>
                </div>
            </div>
            <div class="essential__title-content">
                <img src="view/layout/img/Essential image3.png" alt="" class="essential__title-image" />
                <a href="#">
                    <button class="essential__container-btn">Cửa hàng</button></a>
                <div class="essential__title-banrd">
                    <span>Phụ kiện</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Icons for Any Season -->
    <div class="season">
        <h3 class="season__content_h3">Biểu tượng cho bất kỳ mùa nào</h3>
        <div class="season__container">
            <a href="./page/detal.html">
                <div class="season__container-items">
                    <img src="view/layout/img/season 1.png" alt="" class="season__container-image" />
                    <div class="season__content">
                        <h3 class="season__content-banrd">Air Jordan</h3>
                        <span class="season__content-price">180$</span>
                        <div class="cartoverlay">
                            <div class="cartoverlay__icon">
                                <i class="fas fa-shopping-cart"></i>
                                <i class="bi bi-heart-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="./page/detal.html">
                <div class="season__container-items">
                    <img src="view/layout/img/season 2.png" alt="" class="season__container-image" />
                    <div class="season__content">
                        <h3 class="season__content-banrd">Yeezy</h3>
                        <span class="season__content-price">150$</span>
                        <div class="cartoverlay">
                            <div class="cartoverlay__icon">
                                <i class="fas fa-shopping-cart"></i>
                                <i class="bi bi-heart-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="./page/detal.html">
                <div class="season__container-items">
                    <img src="view/layout/img/season 3.png" alt="" class="season__container-image" />
                    <div class="season__content">
                        <h3 class="season__content-banrd">Bape</h3>
                        <span class="season__content-price">190$</span>
                        <div class="cartoverlay">
                            <div class="cartoverlay__icon">
                                <i class="fas fa-shopping-cart"></i>
                                <i class="bi bi-heart-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- voucher -->
    <div class="voucher grid">
        <a href="#" class="voucher__link">
            <div class="voucher__container">
                <img src="view/layout/img/voucher1.png" alt="" class="voucher__image" />
                <h3 class="voucher__content">
                    Mua sắm phong cách dành riêng cho thành viên.
                </h3>
            </div>
        </a>
        <a href="#" class="voucher__link">
            <div class="voucher__container">
                <img src="view/layout/img/voucher2.png" alt="" class="voucher__image" />
                <h3 class="voucher__content">
                    Miễn phí giao hàng tiêu chuẩn cho tất cả các đơn hàng.
                </h3>
            </div>
        </a>
        <a href="#" class="voucher__link">
            <div class="voucher__container">
                <img src="view/layout/img/voucher3.png" alt="" class="voucher__image" />
                <h3 class="voucher__content">Tùy chỉnh giày so-you của bạn.</h3>
            </div>
        </a>
    </div>
</div>