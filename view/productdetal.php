<?php
// echo var_dump($idcatalog);
// echo "lấy trước id catalog" .$idcatalog;
extract($detal);
// echo "lấy trước id extract detal" .$idcatalog;
if ($price>0) {
    $gia = ' <h4 class="detal__container_right_total-price">'.$price.'
    </h4>';
  } else {
      $gia ='Đang cập nhật';
  }
if ($price2>0) {
    $giacu = ' <h4 class="detal__container_right_total-price">'.$price2.'
    </h4>';
  } else {
      $giacu ='Đang cập nhật';
  }
  if($img!="") $img=PATH_IMG.$img;

?>
<div class="main__detal grid">
    <setion class="detal__container">
        <div class="detal__container_left">
            <div class="detal__container_left-item">
                <img src="<?=$img?>" alt="" class="detal__container_left-imgage" />
            </div>
            <div class="detal__container_left-item">
                <video src="view/layout/img/detal_video.webm" autoplay loop muted></video>
            </div>
            <div class="detal__container_left-item">
                <img src="view/layout/img/detal_img2.webp" alt="" class="detal__container_left-imgage" />
            </div>
            <div class="detal__container_left-item">
                <img src="view/layout/img/detalimg1.webp" alt="" class="detal__container_left-imgage" />
            </div>
        </div>
        <div class="detal__container_right">
            <div class="detal__container_right_content">
                <h3 class="detal__container_right_title"><?=$name?></h3>
                <h4 class="detal__container_right_slogan">
                    <?=$chitiet?>
                    Taking the classic look of heritage Nike Running into a new
                    realm, the NIKE AIR MAX Pre-Day bring
                    <a href="#">...Read More</a>
                </h4>
                <section class="detal__container_right-option">
                    <h3 class="detal__container_right-option-title">
                        SELECT OPTION :
                    </h3>
                    <div class="detal__container_right-option-images">
                        <img src="view/layout/img/detal_item1.png" alt="" class="detal__container_right-option-image" />
                        <img src="view/layout/img/detal_item2.png" alt="" class="detal__container_right-option-image" />
                        <img src="view/layout/img/detal_item3.png" alt="" class="detal__container_right-option-image" />
                    </div>
                    <h3 class="detal__container_right-option-color">
                        COLORWAY:
                        <span class="detal__container_right-option-color-opacity">
                            BLACK/ BLUNE</span>
                    </h3>
                    <div class="detal__container_right-option-size">
                        <h3 class="detal__container_right-option-size-title">
                            SELECT SIZE:
                        </h3>
                        <div class="detal__container_right-option-size-option">
                            <i class="detal__container_right-option-size-icon bi bi-arrow-left-circle-fill"></i>
                            <div class="detal__container_right-option-size-number">
                                1
                            </div>
                            <div class="detal__container_right-option-size-number">
                                2
                            </div>
                            <div class="detal__container_right-option-size-number">
                                3
                            </div>
                            <div class="detal__container_right-option-size-number">
                                4
                            </div>
                            <div class="detal__container_right-option-size-number">
                                5
                            </div>
                            <div class="detal__container_right-option-size-number">
                                6
                            </div>
                            <div class="detal__container_right-option-size-number">
                                7
                            </div>
                            <i class="detal__container_right-option-size-icon bi bi-arrow-right-circle-fill"></i>
                        </div>
                    </div>
                    <div class="detal__container_right_total">
                        <div class="detal__container_right_total_left">
                            <h3 class="detal__container_right_total-title">
                                PRICE
                            </h3>
                            <?=$gia?>
                        </div>
                        <div class="detal__container_right_total_left">
                            <h3 class="detal__container_right_total-title">
                                LAST SALE
                            </h3>
                            <?=$giacu?>
                        </div>
                        <a href="" class="detal__container_right_total-link"><button
                                class="detal__container_right_total-btn btn">
                                Mua ngay
                            </button></a>
                    </div>
                </section>
            </div>
        </div>
    </setion>
    <!-- available-form -->
    <section class="available-form">
        <div class="explore">
            <div class="explore__title">
                <div class="explore__title-item">Mẫu có sẵn</div>
                <div class="explore__title-all">
                    <span> Tất cả sản phẩm </span>
                    <i class="explore__title-shop-icon bi bi-sliders"></i>
                </div>
            </div>
            <div class="explore__container">
                <?php
                // if (isset($newproduct) && is_array($newproduct)){
                foreach ($related as $item) {
                   extract($item);
                   if ($price>0) {
                    $gia = '  <span class="priceold">'.$price.'</span>';
                  } else {
                      $gia ='Đang cập nhật';
                  }
                if ($price2>0) {
                    $giacu = ' <span class="priceold">'.$price2.'</span>';
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
                   echo '
                   <div class="explore__container-items">
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
            <span class="price">'.$gia.''.$giacu.'</span>
            
        </div>  
        <div class="explore__container-option">
            <span class="explore__container-option-brand">Thương hiệu Nike</span>
            <a href="#" class="explore__container-option-a"><i
                    class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
        </div>
    </div>
</div>';
                }
            //}
            // else {
            //     // Handle the case when $newproduct is not defined or not an array
            //     echo "No products found."; // or any other appropriate message
            // }
                ?>
            </div>
        </div>
    </section>
    <section class="review">
        <div class="review__title">
            <h3 class="review__title-h3">Customer Review</h3>
            <div class="review__container">
                <div class="review__item">
                    <div class="review__item_image">
                        <img src="view/layout/img/Mask group.png" alt="" />
                    </div>
                    <h3 class="review__item_name">Tyler Student</h3>
                    <div class="review__item_evaluate">
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-half"></i>
                    </div>
                    <span class="review__item_content">I like the novelty of my creation and the stories that make
                        up great works</span>
                </div>
                <div class="review__item">
                    <div class="review__item_image">
                        <img src="view/layout/img/Mask group.png" alt="" />
                    </div>
                    <h3 class="review__item_name">Tyler Student</h3>
                    <div class="review__item_evaluate">
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-half"></i>
                    </div>
                    <span class="review__item_content">I like the novelty of my creation and the stories that make
                        up great works</span>
                </div>
                <div class="review__item">
                    <div class="review__item_image">
                        <img src="view/layout/img/Mask group.png" alt="" />
                    </div>
                    <h3 class="review__item_name">Tyler Student</h3>
                    <div class="review__item_evaluate">
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-half"></i>
                    </div>
                    <span class="review__item_content">I like the novelty of my creation and the stories that make
                        up great works</span>
                </div>
                <div class="review__item">
                    <div class="review__item_image">
                        <img src="view/layout/img/Mask group.png" alt="" />
                    </div>
                    <h3 class="review__item_name">Tyler Student</h3>
                    <div class="review__item_evaluate">
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-fill"></i>
                        <i class="review__item_evaluate_icon bi bi-star-half"></i>
                    </div>
                    <span class="review__item_content">I like the novelty of my creation and the stories that make
                        up great works</span>
                </div>
            </div>
        </div>
        <div class="review__arrow">
            <i class="bi bi-arrow-left-circle"></i>

            <i class="bi bi-arrow-right-circle"></i>
        </div>
    </section>
    <section class="text-center">
        <h3 class="mb-5">Contact us</h3>

        <div class="row">
            <div class="col-lg-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5418207350936!2d106.68878397490775!3d10.769751189378605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3da67b38d5%3A0x173ccef2ae6a5d44!2sNike!5e0!3m2!1svi!2s!4v1685711690968!5m2!1svi!2s"
                    width="400" height="300" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-7">
                <form>
                    <div class="row row--contact">
                        <div class="col-md-9">
                            <div class="row mb-4 row-input">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">First name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <input type="email" id="form3Example2" class="form-control" />
                                        <label class="form-label" for="form3Example2">Email Address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example3" class="form-control" />
                                <label class="form-label" for="form3Example3">Subject</label>
                            </div>
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                <label class="form-label" for="form4Example3">Message</label>
                            </div>
                            <div class="detal__button">
                                <button type="submit" class="btn">Send</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="contact__icon bi bi-geo-alt-fill"></i>
                                    <p><small>New York, NY 10012, USA</small></p>
                                </li>
                                <li>
                                    <i class="contact__icon bi bi-telephone-fill"></i>
                                    <p><small>+ 01 234 567 89</small></p>
                                </li>
                                <li>
                                    <i class="contact__icon bi bi-envelope-fill"></i>
                                    <p><small>contact@gmail.com</small></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>