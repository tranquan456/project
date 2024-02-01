<!-- Phần giỏ hàng -->
<?php
if (!function_exists('viewcart')) {
    function viewcart($del)
    {
        
        $tong = 0;
        $i = 0;
        if ($del == 1) {
            $xoasp_th = ' <th>Thao tác</th>';
            $xoasp_td2 = '<td></td>';
        } else {
            $xoasp_th = '';
            $xoasp_td2 = '';
        }

        echo '
            <tr>
            <th>STT</th>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Size</th>
            <th>Thành Tiền</th>
           ' . $xoasp_th . '
            <th></th>
        </tr>';

        foreach ($_SESSION['mycart'] as $cart) {
            $hinh="upload/".$cart[2];
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
        
            $i++;
            if ($del == 1) {
                $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
            } else {
                $xoasp_td = '';
            }
?>
<tr>
    <td><?php echo $i ?></td>
    <td><img style="height: 120px;width: 120px;" src="<?php echo $hinh?>" alt=""></td>
    <td><?php echo $cart[1] ?></td>
    <td><?php echo $cart[3] ?></td>
    <td><?php echo $cart[4] ?></td>
    <td><?php echo $cart[6] ?></td>
    <td><?php echo $ttien ?></td>
    <?php echo $xoasp_td ?>
</tr>
<?php
        }
        echo '
        <tr>
            <td colspan="6"> <h2>Tổng đơn hàng</h2></td>
            <td style="font-weight: bold; font-size: 13px;">' . $tong . '</td>
           ' . $xoasp_td2 . '
        </tr>';
    }
}

// Các hàm khác...

if (!function_exists('tongdonhang')) {
    function tongdonhang()
    {
        $tong = 0;
        foreach ($_SESSION['mycart'] as $cart) {
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
        }
        return $tong;
    }
}
if (!function_exists('insert_bill')) {
    function insert_bill($iduser,$name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
    {
        $sql = "insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values ('$iduser','$name',' $email',' $address','$tel','$pttt',' $ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInssertId($sql);
    }
}

if (!function_exists('insert_cart')) {
    function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien,$size, $idbill)
    {
        $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,size,idbill) values ('$iduser', '$idpro','$img','$name','$price', '$soluong','$thanhtien','$size','$idbill')";
        return pdo_execute($sql);
    }
}

if (!function_exists('loadone_bill')) {
    function loadone_bill($id)
    {
        $sql = "select*from bill where id=" . $id;
        $bill = pdo_query_one($sql);
        return $bill;
    }
}

if (!function_exists('loadone_cart')) {
    function loadone_cart($idbill)
    {
        $sql = "select * from cart where idbill=" . $idbill;
        $ctdh = pdo_query($sql);
        return $ctdh;
    }
}
if (!function_exists('loadall_ctdh')) {
    function loadall_ctdh($idbil)
    {
        $sql = "select * from cart where idbill=" . $idbil;
        $cart = pdo_query($sql);
        return $cart;
    }
}

if (!function_exists('loadall_cart_count')) {
    function loadall_cart_count($idbill){
        $sql= "select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return sizeof($bill);
    }
}

function updatetrangthai($id,$trangthai){
   $sql="UPDATE `bill` SET `bill_status`='".$trangthai."' WHERE id=".$id;
   pdo_execute($sql);
}
function loadall_bill($iduser=0){
    $sql= "select * from bill where 1";
    if($iduser>0) $sql.=" AND iduser=".$iduser;
    $sql.=" order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}

function delete_bill($id)
{
    $sql = "delete from bill where id=" . $id;
    pdo_execute($sql);
}



function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới !";
            break;
        case '1':
            $tt = "Đang xử lý !";
            break;
        case '2':
            $tt = "Đang giao hàng !";
            break;
        case '3':
            $tt = "Đã giao hàng !";
            break;
        case '4':
            $tt = "Hoàn tất!";
            break;
        default:
        $tt="Đơn hàng mới ";
        break;
    }
    return $tt;
}
?>