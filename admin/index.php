<?php 
    session_start();
    ob_start();
    include_once('../view/global.php');
    include_once('../model/connectdb.php');
    include_once('../model/danhmuc.php');
    include_once('../model/product.php');
    
    if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != 1)) {
        header('location: login.php');
    } else {
        
        $name_admin = $_SESSION['name'];
        $user_admin = $_SESSION['user'];
        $email_admin = $_SESSION['email'];
    }
    include_once "public/admin_header.php";
    if (isset($_GET['pg']) && ($_GET['pg'])) {
        switch ($_GET['pg']) {
            case 'danhmuc':
                $catalog_list = get_danhmuc();
                
                include_once "public/admin_danhmuc.php";
            break;
            case 'add_danhmuc':
                //lay data
                if (isset($_POST['btn-add'])&&($_POST['btn-add'])) {
                   $name = $_POST['category-name'];
                   add_catalog($name);

                }
                //load lại
                $catalog_list = get_danhmuc();
                include_once "public/admin_danhmuc.php";
            break;
            case 'delcatalog':
                $tb = ""; 
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $tb = detele_catalog($id);
                }
                // Load danh muc data
                $catalog_list = get_danhmuc();
                include_once "public/admin_danhmuc.php";
                break;
                
                
                
            break;
            case 'update':
                if (isset($_POST['btn-update'])&&($_POST['btn-update'])) {
                    
                    $id=$_POST['id'];
                    $name=$_POST['category-name'];
                    set_catalog($id,$name);
                    $catalog_list = get_danhmuc();
                   require_once "public/admin_danhmuc.php";
                
                }
                
                break;
            case 'updatecatalog':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $id=$_GET['id'];
                    $catalogone = get_catalog_one($id);
                    include_once "public/updatecatalog.php";
                }else{
                    include_once "public/404.php";
                }
                break;
            case 'product':
                $catalog_list = get_danhmuc();
                $productlist = getproducthome();
                include_once "public/admin_sanpham.php";
                break;
            case 'updateproduct':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $id=$_GET['id'];
                    $catalog_list = get_danhmuc();
                    $productone = getproductdetal($id);
                    include_once "public/updateproduct.php";
                }else{
                    include_once "public/404.php"; 
                }
            break;
            case 'updateproduct_done':
                
                if (isset($_POST['btn_update'])) {
                    $id=$_POST['id'];
                    $name=$_POST['product-name'];
                    $price=$_POST['product-price'];
                    $idcatalog=$_POST['product-idcatalog'];
                    //lay hinh
                    $img_file = $_FILES['product-img']['name'];  
                    if ($img_file!="") {
                       
                        //upload leen host
                        $target_file = "../".PATH_IMG. basename($_FILES["product-img"]["name"]);
                        move_uploaded_file($_FILES["product-img"]["tmp_name"], $target_file); 
                        //xoa hinh cu tren host
                        $hinhcu="../".PATH_IMG.$_POST['hinhcu'];
                        if (file_exists($hinhcu)) unlink($hinhcu); 
                        
                    } 
                    //update vo database
                      update_product($id,$idcatalog,$img_file,$name,$price);
                  
                }
              $productlist = getproducthome();
            //   header (' location: index.php?pg=product');
                include_once "public/admin_sanpham.php";
                break;    
                case 'delproduct':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $id = $_GET['id'];
                
                        // Kiểm tra sản phẩm có hình hay không
                        $ten_file_hinh = "../" . PATH_IMG. get_ten_file_hinh ($id);
                        if (file_exists( $ten_file_hinh)) {
                            unlink( $ten_file_hinh);
                        }
                       $tb = detele_product($id);
                        //xóa sản phẩm db

                        // if ($product) {
                        //     $img_file = $product['img'];
                
                        //     // Xóa sản phẩm trong database
                        //     detele_catalog($id);
                
                        //     // Xóa hình ảnh nếu có
                        //     if (!empty($img_file)) {
                        //         $hinh_file = "../" . PATH_IMG . $img_file;
                        //         if (file_exists($hinh_file)) {
                        //             unlink($hinh_file);
                        //         }
                        //     }
                        // }
                    }$catalog_list = get_danhmuc();
                    $productlist = getproducthome();
                    include_once "public/admin_sanpham.php";
                    break;
                case 'addproduct':
                    //lay data
                     
                if (isset($_POST['btn_add'])) {
                  
                    $name=$_POST['product-name'];
                    $price=$_POST['product-price'];
                    $idcatalog=$_POST['product-idcatalog'];
                    //lay hinh
                    $img_file = $_FILES['product-img']['name'];  
                    if ($img_file!="") {
                       
                        //upload leen host
                        $target_file = "../".PATH_IMG. basename($_FILES["product-img"]["name"]);
                        move_uploaded_file($_FILES["product-img"]["tmp_name"], $target_file); 
                       
                        
                    } 
                    //update vo database
                    add_product($idcatalog,$img_file,$name,$price);
                  
                }
                    //load lại
                    $productlist = getproducthome();
                    $catalog_list = get_danhmuc();
                    include_once "public/admin_sanpham.php";
                break;
            case 'order':
                include_once "public/admin_donhang.php";
                break;
            default:
                include_once "public/dashboard.php";
                break;
        }
    } else {
        include_once "public/dashboard.php";
    }
?>