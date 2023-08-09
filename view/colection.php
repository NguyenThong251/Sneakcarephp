<?php
 $cataloglist='';
 foreach ($catalog_list as $item) {
    extract($item);
    $linkdetal='index.php?pg=colection&idcatalog='.$id;
    $cataloglist.=' <a class="main__left_collection-link" href="'.$linkdetal.'">
    <span class="main__left_collection-span">'.$name.'</span></a>';
 }

?>

<main class="main__shop grid">
    <!-- main__left -->
    <aside class="main__left grid__column-2">
        <div class="main__left_content">
            <div class="main__left_search">
                <i class="main__left_search-icon bi bi-search"></i>
                <input class="main__left_search-input" type="text" placeholder="Search" />
            </div>
            <section class="main__left_collection">
                <h3 class="main__left_collection-h3">Bộ sưu tập</h3>
                <?=$cataloglist?>

            </section>
            <section class="main__left_gender">
                <h3 class="main__left_gender-title">Giới tính</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Men
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                    <label class="form-check-label" for="flexCheckChecked">
                        Women
                    </label>
                </div>
            </section>
            <section class="main__left_size">
                <h3 class="main__left_size-title">Size</h3>
                <div class="main__left_size-container">
                    <div class="main__left_size-item">4</div>
                    <div class="main__left_size-item">4.5</div>
                    <div class="main__left_size-item">5</div>
                    <div class="main__left_size-item">5.5</div>
                    <div class="main__left_size-item">6</div>
                    <div class="main__left_size-item">6.5</div>
                    <div class="main__left_size-item">7</div>
                    <div class="main__left_size-item">7.5</div>
                    <div class="main__left_size-item">8</div>
                    <div class="main__left_size-item">8.5</div>
                    <div class="main__left_size-item">9</div>
                    <div class="main__left_size-item">9.5</div>
                </div>
            </section>
            <section class="main__left_colour">
                <h3 class="main__left_colour-title">Màu sắc</h3>
                <div class="main__left_colour-container">
                    <div class="main__left_colour-item"></div>
                    <div class="main__left_colour-item"></div>
                    <div class="main__left_colour-item"></div>
                    <div class="main__left_colour-item"></div>
                    <div class="main__left_colour-item"></div>
                    <div class="main__left_colour-item"></div>
                    <div class="main__left_colour-item"></div>
                    <div class="main__left_colour-item"></div>
                    <div class="main__left_colour-item"></div>
                    <div class="main__left_colour-item"></div>
                </div>
            </section>
        </div>
    </aside>
    <!-- main__right -->
    <aside class="main__right grid__column-10">
        <div class="section__title">
            <div class="section__title_header">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Rút gọn</option>
                    <option value="1">Giá: Cao-Thấp</option>
                    <option value="2">Giá: Thấp-Cao</option>
                    <option value="3">Mới nhất</option>
                </select>
            </div>
            <section class="section__title_main">
                <div class="section__title_main_container">
                    <?php     
foreach ($productlist as $item) {
    extract($item);
    if ($price>0) {
        $gia = ' 
        <span class="section__title_main_item-content-price">'.$price.'</span>';
      } else {
          $gia ='Đang cập nhật';
      }
    if ($price2>0) {
        $giacu = ' <h4 class="detal__container_right_total-price">'.$price2.'
        </h4>';
      } else {
          $giacu ='Đang cập nhật';
      }
    if ($new == 1) {
       $favorite = '<i class="explore__container-icon bi bi-heart"></i>';
    } else {
       $favorite=' ';
    }
    if($img!="") $img=PATH_IMG.$img;
    $link_productdetal='index.php?pg=productdetal&idproduct='.$id;
    echo '<div class="section__title_main_item">
    <div class="section__title_main_item-header">
        <a class="section__title_main_item-customer-link" href="'.$link_productdetal.'">
            <div class="section__title_main_item-customer">
                <img class="section__title_main_items-customer-main"
                    src="view/layout/img/icon customes.png" alt="" />
            </div>
        </a>
        <div class="section__title_main_items-icon">
            <i class="bi bi-heart"></i>
        </div>
    </div>
    <img src="'.$img.'" alt="" class="section__title_main_item_product" />
    <div class="section__title_main_item_product-items">
        <img src="view/layout/img/shopimg2.png" alt=""
            class="section__title_main_item_product-item" />
        <img src="view/layout/img/shopimg3.png" alt=""
            class="section__title_main_item_product-item" />
        <img src="view/layout/img/shopimg4.png" alt=""
            class="section__title_main_item_product-item" />
    </div>
    <img class="section__title_main_item-vectorbg" src="view/layout/img/vector bg.png" alt="" />
    <div class="section__title_main_item-content">
        <div class="section__title_main_item-content-header">
            <h3 class="section__title_main_item-content-h3">
               '.$name.'
            </h3>
            <div class="section__title_main_item-content-star">
                <i class="section__title_main_item-content-star-icon bi bi-star-fill"></i>
                <i class="section__title_main_item-content-star-icon bi bi-star-fill"></i>
                <i class="section__title_main_item-content-star-icon bi bi-star-fill"></i>
                <i class="section__title_main_item-content-star-icon bi bi-star-fill"></i>
                <i class="section__title_main_item-content-star-icon bi bi-star-half"></i>
            </div>
        </div>
       '.$gia.'
        <span class="section__title_main_item-content-brand">Brand Nike</span>
    </div>
    <a href="" class="section__title_main_item-cart-link">
        <div class="section__title_main_item-cart">
            <i class="section__title_main_item-cart-icon bi bi-cart-plus"></i>
        </div>
    </a>
</div>';
}


?>


                </div>
                <div class="section__directional">
                    <i class="section__directional-icon bi bi-arrow-left-circle-fill"></i>
                    <div class="section__directional_number section__directional_number-fisrt">
                        <span>1</span>
                    </div>
                    <div class="section__directional_number"><span>2</span></div>
                    <div class="section__directional_number"><span>...</span></div>
                    <div class="section__directional_number"><span>3</span></div>
                    <i class="section__directional-icon bi bi-arrow-right-circle-fill"></i>
                </div>
            </section>
            <section class="section__title_main">
                <h3 class="related__title">Thể loại liên quan</h3>
                <div class="related__container">
                    <a href="" class="related__container_link">
                        <div class="related__container_link-item">
                            <span class="related__container_link-content">Best Men’s Shoes
                            </span>
                        </div>
                    </a>
                    <a href="" class="related__container_link">
                        <div class="related__container_link-item">
                            <span class="related__container_link-content">New Men’s Shoes
                            </span>
                        </div>
                    </a>
                    <a href="" class="related__container_link">
                        <div class="related__container_link-item">
                            <span class="related__container_link-content">Men's Black Running Shoes
                            </span>
                        </div>
                    </a>
                    <a href="" class="related__container_link">
                        <div class="related__container_link-item">
                            <span class="related__container_link-content">Men's Joggers & Tracksuit Bottoms
                            </span>
                        </div>
                    </a>
                    <a href="" class="related__container_link">
                        <div class="related__container_link-item">
                            <span class="related__container_link-content">Men's Joggers & Tracksuit Bottoms
                            </span>
                        </div>
                    </a>
                    <a href="" class="related__container_link">
                        <div class="related__container_link-item">
                            <span class="related__container_link-content">Men's Cross Training Shoes
                            </span>
                        </div>
                    </a>
                    <a href="" class="related__container_link">
                        <div class="related__container_link-item">
                            <span class="related__container_link-content">Men's Crew Socks
                            </span>
                        </div>
                    </a>
                    <a href="" class="related__container_link">
                        <div class="related__container_link-item">
                            <span class="related__container_link-content">Turf Football Shoe
                            </span>
                        </div>
                    </a>
                </div>
            </section>
            <section class="section__title_trending">
                <div class="section__title_trending_header">
                    <h3 class="section__title_trending_title">Sản phẩm xu hướng</h3>
                    <div class="section__title_trending_directional">
                        <i class="section__title_trending-icon bi bi-arrow-left-circle-fill"></i>
                        <i class="section__title_trending-icon bi bi-arrow-right-circle-fill"></i>
                    </div>
                </div>
                <div class="section__title_trending_container">
                    <a href="" class="section__title_trending-item-link">
                        <div class="section__title_trending-item">
                            <img src="view/layout/img/product_shop1.png" alt="" class="section__title_trending-image" />
                            <div class="section__title_trending-item-content">
                                <span class="section__title_trending-item-content-span">Styling Tips</span>
                                <p class="section__title_trending-item-content-p">
                                    5 Golf Outfits for Women To Wear on the Green
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="section__title_trending-item-link">
                        <div class="section__title_trending-item">
                            <img src="view/layout/img/product_shop2.png" alt="" class="section__title_trending-image" />
                            <div class="section__title_trending-item-content">
                                <span class="section__title_trending-item-content-span">Styling Tips</span>
                                <p class="section__title_trending-item-content-p">
                                    5 Golf Outfits for Women To Wear on the Green
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="section__title_trending-item-link">
                        <div class="section__title_trending-item">
                            <img src="view/layout/img/product_shop3.png" alt="" class="section__title_trending-image" />
                            <div class="section__title_trending-item-content">
                                <span class="section__title_trending-item-content-span">Styling Tips</span>
                                <p class="section__title_trending-item-content-p">
                                    5 Golf Outfits for Women To Wear on the Green
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="section__title_trending-item-link">
                        <div class="section__title_trending-item">
                            <img src="view/layout/img/product_shop4.png" alt="" class="section__title_trending-image" />
                            <div class="section__title_trending-item-content">
                                <span class="section__title_trending-item-content-span">Styling Tips</span>
                                <p class="section__title_trending-item-content-p">
                                    5 Golf Outfits for Women To Wear on the Green
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </div>
    </aside>
</main>