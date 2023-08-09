<div class="container">
    <aside>
        <div class="admin__content">
            <div class="admin__header">
                <img class="admin__header_img" src="../view/layout/img/logo.png" alt="" />
                <h3 class="admin__header_content">Trang quản lí</h3>
            </div>
            <div class="admin__option">
                <a href="index.php?pg=danhmuc" class="admin__option_item admin__option_item--active">
                    <i class="admin__option_icon bi bi-bookmarks-fill"></i>
                    <span class="admin__option_text">Danh mục sản phẩm</span>
                </a>
                <a href="index.php?pg=product" class="admin__option_item">
                    <i class="admin__option_icon bi bi-bag-fill"></i>
                    <span class="admin__option_text">Sản phẩm</span>
                </a>
                <a href="index.php?pg=order" class="admin__option_item">
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
        <?php
        if (isset($tb)) echo"<h3 class='error'>".$tb."</h3>"
        
        ?>
        <div class="danhmuc">
            <table>
                <tr>
                    <th>id</th>
                    <th>Tên danh mục</th>
                    <th>Mô tả</th>
                    <th>Thao tác</th>
                </tr>
                <?php 
// Assuming $catalog_list is defined and contains the data fetched from the get_danhmuc() function.
// You should have something like $catalog_list = get_danhmuc(); before this block of code.

$i = 1;
foreach ($catalog_list as $item) {
    extract($item);
    $edit = "<a href='index.php?pg=updatecatalog&id=".$id."'>Sửa</a>";
    $del = "<a href='index.php?pg=delcatalog&id=".$id."'>Xóa</a>";
    echo '<tr class="category">
              <td>'.$i.'</td>
              <td>'.$name.'</td>
              <td class="mtdm">Mô tả danh mục 1</td>
              <td>
                  <button class="edit-btn">'.$edit.'</button>
                  <button class="delete-btn">'.$del.'</button>
              </td>
          </tr>';
    $i++;
}
?>



                </tr>
            </table>

            <form class="formmain" action="index.php?pg=add_danhmuc" method="post">
                <label for="category-name">Tên danh mục:</label>
                <input type="text" id="category-name" name="category-name" required>

                <label for="category-description">Mô tả:</label>
                <input type="text" id="category-description" name="category-description">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" class="add-category-btn" name="btn-add" value="Thêm">
            </form>
        </div>

    </main>
</div>
</body>

</html>