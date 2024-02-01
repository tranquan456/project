<?php
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id_sanpham desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function get_info_product()
{
    $sql = "select 
            sanpham.id_sanpham, sanpham.ten_sanpham, sanpham.mo_ta, sanpham.gia_sale, sanpham.gia, sanpham.trang_thai, sanpham.img, danhmuc.name
            from 
            sanpham left join danhmuc  on sanpham.iddm = danhmuc.id
            order by sanpham.id_sanpham desc";
    $list_product = pdo_query($sql);
    return  $list_product;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($keyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and ten_sanpham like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id_sanpham desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
// 
function loadone_sanpham($id){
    $sql = "select * from sanpham where id_sanpham = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function load_sanpham_cungloai($id, $iddm)
{
    
    $sql = "select * from sanpham where iddm=" . $iddm . " AND id_sanpham <>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm,$trangthai,$giasale){
    $sql="INSERT INTO `sanpham`(`img`, `ten_sanpham`, `trang_thai`, `mo_ta`, `gia`,`gia_sale`,`iddm`) VALUES ('$hinh','$tensp','$trangthai','$mota','$giasp',$giasale,'$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id_sanpham=".$id;
    pdo_execute($sql);
}
function update_sanpham($hinh,$tensp,$trangthai,$mota,$giasp,$giasale,$iddm,$id){
    if($hinh!=""){
        $sql="UPDATE `sanpham` SET `img`='$hinh',`ten_sanpham`='$tensp',`trang_thai`='$trangthai',`mo_ta`='$mota',`gia`='$giasp',`gia_sale`='$giasale',`iddm`='$iddm' where id_sanpham=".$id;
    }
    else
    $sql="UPDATE `sanpham` SET `ten_sanpham`='$tensp',`trang_thai`='$trangthai',`mo_ta`='$mota',`gia`='$giasp',`gia_sale`='$giasale',`iddm`='$iddm' where id_sanpham=".$id;
    
    pdo_execute($sql);
    }
    // function delete_sanphamdm($iddm){
    //     $sql="delete from sanpham where iddm=".$iddm;
    //     pdo_execute($sql);
    // }
    ?>
