<?php
function loadall_binhluan($idpro)
{
    $sql = "
         SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
          LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
          LEFT JOIN sanpham ON binhluan.idpro = sanpham.id_sanpham
          WHERE sanpham.id_sanpham=$idpro;
      ";
    if ($idpro > 0) {
        $sql .= " AND idpro='" . $idpro . "'";
    }
    $sql .= " ORDER BY id DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}
function get_info_binhluan()
{
    $sql = "select 
            binhluan.id, binhluan.noidung, binhluan.ngaybinhluan, sanpham.ten_sanpham,taikhoan.user
            from binhluan
            left join sanpham  on binhluan.idpro= sanpham.id_sanpham
            left join taikhoan  on binhluan.iduser= taikhoan.id
            order by binhluan.id desc";
    $listbinhluan = pdo_query($sql);
    return  $listbinhluan;
}
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $ngaybinhluan = date('Y-m-d');
    $sql = "insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function delete_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}

// để bỏ dàng buộc khóa ngoại khi xóa sp nó sẽ xóa tất cả bình luận rồi đc gọi vào file xóa sp  
function delete_binhluan_by_idpro($idpro)
{
    $sql = "delete from binhluan where idpro=" . $idpro;
    pdo_execute($sql);
}