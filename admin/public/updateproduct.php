<?php 
extract($productone);

if ($img != "") {
    $img = '../' . PATH_IMG . $img;
    if (file_exists($img)) {
        $hinh = "<img src='$img'>";
    } else {
        $hinh = "";
    }
}

// Load danh sách
$select_html = '';
foreach ($catalog_list as $item) {
    $id = $item['id'];
    $catalog_name = $item['name']; // Renamed to avoid overwriting $name
    if ($id == $idcatalog) {
        $selected = "selected";
    } else {
        $selected = "";
    }
    $select_html .= '<option value="' . $id . '"' . $selected . '>' . $catalog_name . '</option>';
}
?>

<div class="container">
    <aside>
        <div class="admin__content">
            <div class="admin__header">
                <img class="admin__header_img" src="../view/layout/img/logo.png" alt="" />
                <h3 class="admin__header_content">Trang quản lí</h3>
            </div>
            <div class="admin__option">
                <a href="index.php?pg=danhmuc" class="admin__option_item">
                    <i class="admin__option_icon bi bi-bookmarks-fill"></i>
                    <span class="admin__option_text">Danh mục sản phẩm</span>
                </a>
                <a href="index?pg=product" class="admin__option_item admin__option_item--active">
                    <i class="admin__option_icon bi bi-bag-fill"></i>
                    <span class="admin__option_text">Sản phẩm</span>
                </a>
                <a href="index?pg=order" class="admin__option_item">
                    <i class="admin__option_icon bi bi-receipt"></i>
                    <span class="admin__option_text">Đơn hàng</span>
                </a>
                <a href="index.php" class="admin__option_item">
                    <i class="admin__option_icon bi bi-box"></i>
                    <span class="admin__option_text">Dashboard</span>
                </a>
                <div class="admin__acount_page">
                    <span class="admin__option_text">ACCOUNT PAGES</span>
                </div>
                <a href="#" class="admin__option_item">
                    <i class="admin__option_icon bi bi-person-fill"></i>
                    <span class="admin__option_text">Profile</span>
                </a>
                <a href="#" class="admin__option_item">
                    <i class="admin__option_icon bi bi-box-arrow-in-left"></i>
                    <span class="admin__option_text">Sign In</span>
                </a>
                <a href="#" class="admin__option_item">
                    <i class="admin__option_icon bi bi-box-arrow-in-right"></i>
                    <span class="admin__option_text">Sign Up</span>
                </a>
            </div>
        </div>
    </aside>
    <main>

        <div class="product-form">
            <h2>Thêm sản phẩm</h2>
            <form class="form_sp" action="index.php?pg=updateproduct_done" method="post" enctype="multipart/form-data">
                <label for="product-img">Hình ảnh:</label>
                <input type="file" name="product-img" id="product-img">
                <?=$hinh?>
                <label for="product-idcatalog">Danh mục:</label>
                <select name="product-idcatalog">
                    <?=$select_html?>
                </select>

                <label for="product-name">Tên sản phẩm:</label>
                <input type="text" id="product-name" name="product-name" value="<?=$name?>" required />


                <label for="product-price">Giá:</label>
                <input type="text" id="product-price" name="product-price" value="<?=$price?>" required />

                <label for="product-description">Mô tả:</label>
                <textarea id="product-description" name="product-description" required></textarea>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="hidden" name="hinhcu" value="<?=$img?>">
                <button type="submit" name="btn_update">Cập nhật</button>
            </form>
        </div>
</div>
</main>
</div>
</body>

</html>