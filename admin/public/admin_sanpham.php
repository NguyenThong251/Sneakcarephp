<?php
// Load danh sách
$select_html = '';
foreach ($catalog_list as $item) {
    $id = $item['id'];
    $catalog_name = $item['name']; // Renamed to avoid overwriting $name

    $select_html .= '<option value="' . $id . '">' . $catalog_name . '</option>';
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
                <a href="login.php" class="admin__option_item">
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
        <div class="sanpham">
            <?php
        if (isset($tb)) echo"<h3 class='error'>".$tb."</h3>"
        
        ?>
            <h2>Danh sách sản phẩm</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Danh muc</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                $i=1;
                foreach ($productlist as $item) {
                  extract($item);
                  if($img!="") $img='../'.PATH_IMG.$img;
                  $edit ="<a href='index.php?pg=updateproduct&id=".$id."'>Chỉnh sửa</a>";
                  $del ="<a href='index.php?pg=delproduct&id=".$id."'>Xóa</a>";
                  echo'    <tr>
                  <td>'.$i.'</td>
                  <td><img src="'.$img.'" alt="Sản phẩm"></td>
                  <td>'.$idcatalog.'</td>
                  <td>'.$name.'</td>
                  <td>$'.$price.'</td>
                  <td>
                  <button class="edit-btn">'.$edit.'</button>
                  <button class="delete-btn">'.$del.'</button>
              </td>
              </tr>';
              $i++;
                }
                
            
                ?>
                <!-- Thêm các dòng sản phẩm khác tại đây -->
            </table>
            <div class="product-form">
                <h2>Thêm sản phẩm</h2>
                <form class="form_sp" action="index.php?pg=addproduct" method="post" enctype="multipart/form-data">
                    <label for="product-img">Hình ảnh:</label>
                    <input type="file" name="product-img" id="product-img">

                    <label for="product-idcatalog">Danh mục:</label>
                    <select name="product-idcatalog">
                        <?=$select_html?>
                    </select>

                    <label for="product-name">Tên sản phẩm:</label>
                    <input type="text" id="product-name" name="product-name" required />


                    <label for="product-price">Giá:</label>
                    <input type="text" id="product-price" name="product-price" required />

                    <label for="product-description">Mô tả:</label>
                    <textarea id="product-description" name="product-description" required></textarea>

                    <button type="submit" name="btn_add">Thêm sản phẩm</button>
                </form>
            </div>
        </div>
</div>
</main>
</div>
</body>

</html>