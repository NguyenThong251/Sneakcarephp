<?php
function getproducthome($idcatalog=0) {
    $sql= "SELECT * FROM product2 WHERE 1";
    if ( $idcatalog > 0) {
        $sql.=" AND idcatalog =".$idcatalog;
    }
    $sql.=" ORDER BY id DESC";
   
    return  get_all($sql);
}
function getproducthome_view() {
    
    $sql = "SELECT * FROM product2 WHERE view>0 ORDER BY view DESC";
   
    return  get_all($sql);
}
function getproducthome_hot() {
  
    $sql = "SELECT * FROM product2 WHERE hot>0 ORDER BY hot DESC";
  
    return  get_all($sql);
}
function getproductdetal($idproduct) {
    $sql = "SELECT * FROM product2 WHERE id=".$idproduct;
   
    return get_detal($sql);
};
function get_idcatalog($idproduct){


    $sql = "SELECT idcatalog FROM product2 WHERE id=".$idproduct;
   return get_one($sql);
};
function get_related_product($idproduct, $idcatalog) {
    $idcatalogString = implode(",", $idcatalog);
    $sql = "SELECT * FROM product2 WHERE idcatalog IN (" . $idcatalogString . ") AND id<>" . $idproduct . " ORDER BY id DESC";
    return get_all($sql);
}

// update,del,add product
function get_ten_file_hinh($id){
    $sql = "SELECT img FROM product2 WHERE id=".$id;
    $ten_file_hinh=get_one($sql);
    extract($ten_file_hinh);
   return $img;
};
function update_product($id,$idcatalog,$img_file,$name,$price){
    if ($img_file!="") {
        $sql = "UPDATE product2 SET name ='$name',img ='$img_file', idcatalog ='$idcatalog' , price ='$price' WHERE id=".$id;
    }else {
        
        $sql = "UPDATE product2 SET name ='$name', idcatalog ='$idcatalog' , price ='$price' WHERE id=".$id;
    }
    $conn = connectdb();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  }
  function detele_product($id){
    $sql = "DELETE FROM product2 WHERE id=".$id;
    //kiểm tra catalog có sản phẩm không 
    $conn = connectdb();
    $conn->exec($sql);
    $tb = "Xóa thành công ";
    return $tb;
  }
  function add_product($idcatalog,$img_file,$name,$price){
    $sql = "INSERT INTO product2 (idcatalog,name,img,price)
    VALUES ('$idcatalog','$name','$img_file','$price')";
    $conn = connectdb();
    $conn->exec($sql);
  };
?>