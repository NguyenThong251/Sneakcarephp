<?php

function get_danhmuc() {
  $sql = "SELECT * FROM catalog ORDER BY name";
  $result = get_all($sql); if ($result !== false && !empty($result)) {
    return $result;
} else {
    // If there's an error or no data, you can return an empty array or handle the error accordingly.
    return array();
}
}
function get_catalog_one($id){
  $sql ="SELECT * FROM catalog WHERE id =".$id;
  return get_one($sql);
}
function set_catalog($id, $name){
  $sql = "UPDATE catalog SET name ='$name' WHERE id=".$id;
  $conn = connectdb();
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}
function detele_catalog($id){
  $sql = "DELETE FROM catalog WHERE id=".$id;
  //kiểm tra catalog có sản phẩm không 
$dssp =getproducthome($id);
if(count($dssp)>0){
  $tb = "Danh mục nay hiện có ".count($dssp)." sản phẩm bạn không được phép xóa!";
} else {
  $conn = connectdb();
  $conn->exec($sql);
  $tb = "Xóa thành công ";
}
  return $tb;
}
function add_catalog($name){
  $sql = "INSERT INTO catalog (name)
  VALUES ('$name')";
  $conn = connectdb();
  $conn->exec($sql);
};
?>