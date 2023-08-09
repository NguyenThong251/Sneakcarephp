<?php

session_start();
ob_start();
include "view/global.php";
include_once "model/danhmuc.php";
include_once "model/connectdb.php";
include_once "model/product.php";
//connect db
//$dssp = getproducthome(); // Retrieve the list of products and store it in $dssp
//echo var_dump($dssp); // Output the content of $dssp using var_dump
include_once "view/header.php";

if (isset($_GET['pg'])&&($_GET['pg'])) {
    switch ($_GET['pg']) {
        case 'colection':
            
            if (isset($_GET['idcatalog'])&&($_GET['idcatalog'])>0) {
               $idcatalog=$_GET['idcatalog'];
            }else{
                $idcatalog =0;
            }
            $productlist=getproducthome($idcatalog);
            // $dsdm= get_danhmuc();
            $catalog_list= get_danhmuc();
            include_once "view/colection.php";
            break;
        case 'productdetal':
            if (isset($_GET['idproduct'])&&($_GET['idproduct']>0)) {
                // $hotproduct = getproducthome_hot();
                $idproduct = $_GET['idproduct'];
                $detal = getproductdetal($idproduct);
                $idcatalog = get_idcatalog($idproduct);
                $related = get_related_product($idproduct,$idcatalog);
                include_once "view/productdetal.php";
            } 
            else {
              header('location: index.php');
            }
            // include_once "view/productdetal.php";
                break;      
        case 'service':
            include_once "view/service.php";
            break;
        case 'delcart':
            if (isset($_GET['ind'])&&($_GET['ind']>=0)) {
                array_splice($_SESSION['giohang'],$_GET['ind'],1);
                header('location: index.php?pg=view_cart');
            }
           
            
            break;
        case 'delcartall':
            if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                // Remove all items from the cart
                unset($_SESSION['giohang']);
            }
            
            header('location: index.php?pg=view_cart');
            break;
        case 'view_cart':
            include_once "view/view_cart.php";
            break;            
         case 'addcart':
            if (isset($_POST['addcart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $soluong = $_POST['soluong'];
                $price = $_POST['price'];
                $fl = 0;
                if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                    for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
                        if ($_SESSION['giohang'][$i]['id'] == $id) {
                            $fl = 1;
                            $soluongnew = $soluong + $_SESSION['giohang'][$i]['soluong'];
                            $_SESSION['giohang'][$i]['soluong'] = $soluongnew;
                            break;
                        }
                    }
                }

                if($fl==0){
                $sp = ["id" => $id, "name" => $name, "img" => $img, "soluong" => $soluong, "price" => $price];
        
                $_SESSION['giohang'][] = $sp;
            }
                // Redirect to the cart page
                header('location: index.php?pg=view_cart');
                // exit();
            }
         
        break;
         case 'contact':
            include_once "view/contact.php";
        break;
        case 'about':
            include_once "view/about.php";
            break;
        default:
        $newproduct = getproducthome(0);
        $hotproduct = getproducthome_hot();
        $viewproduct =getproducthome_view();
         include_once "view/home.php";
            break;
    }
} else {
    $newproduct = getproducthome(0);
    $hotproduct = getproducthome_hot();
    $viewproduct =getproducthome_view();
    include_once "view/home.php";
}
// ob_end_flush();
// ob_end_clean(); 
include_once "view/footer.php";



?>