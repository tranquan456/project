<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "../model/cart.php";
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "listdm":
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case "xoadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case "adddm":
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tendm'];
                    insert_danhmuc($tenloai);
                    $thongbao="thêm thành công";
                }
                include "danhmuc/add.php";
                break;   
            case "suadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case "updatedm":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['namedm'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            /*Product*/
            case "listsp":
              $listsp=get_info_product();
              include "sanpham/list.php";
              break;
            case "xoasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsp=get_info_product();
                include "sanpham/list.php";
                break;
            case "addsp":
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $giasale=$_POST['giasale'];
                    $mota=$_POST['mota'];
                    $trangthai=$_POST['trangthai'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir.basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                      insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm,$trangthai,$giasale);
                    $thongbao="thêm thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/add.php";
                break;   
            case "suasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case "updatesp":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $giasale=$_POST['giasale'];
                    $mota=$_POST['mota'];
                    $trangthai=$_POST['trangthai'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir.basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                      update_sanpham($hinh,$tensp,$trangthai,$mota,$giasp,$giasale,$iddm,$id);
                    
                }
                $listdanhmuc=loadall_danhmuc();
                $listsp=get_info_product();
                include "sanpham/list.php";
                break;
                case "dstk":
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
                    case 'themtk':
                        if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                            $fullname=$_POST['fullname'];
                            $email=$_POST['email'];
                            $phone=$_POST['phone'];
                            $password=$_POST['password'];
                            $role=$_POST['role'];
                            $diachi=$_POST['diachi'];
                            insert_taikhoan($fullname,$email,$phone,$password,$role,$diachi);
                            $thongbao="thêm thành công";
                        }
                       include "taikhoan/add.php";
                        break;
                    case 'xoatk':
                        if (isset($_GET['id']) && ($_GET['id']) > 0) {
                            delete_taikhoan($_GET['id']);
                        }
                        $listtaikhoan = loadall_taikhoan("", 0);
                        include_once "taikhoan/list.php";
                        break;
                        case "suatk":
                            if(isset($_GET['id'])&&($_GET['id']>0)){
                                $taikhoan=loadone_taikhoan($_GET['id']);
                            }
                            include "taikhoan/update.php";
                            break;
                        case "updatetk":
                            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                                $id=$_POST['id'];
                                $fullname=$_POST['fullname'];
                                $email=$_POST['email'];
                                $phone=$_POST['phone'];
                                $password=$_POST['password'];
                                $role=$_POST['role'];
                                $diachi=$_POST['diachi'];
                                update_taikhoan($id,$fullname,$email,$phone,$password,$role,$diachi);
                            }
                            $listtaikhoan=loadall_taikhoan();
                            include "taikhoan/list.php";
                            break;
            case "dsbl":
                $listbinhluan=get_info_binhluan();
                include "binhluan/list.php";
                break;
                case "suatt":
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $tt=loadone_bill($_GET['id']);
                    }
                    include "quanlidonhang/update.php";
                    break;
                case "updatett":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $trangthai=$_POST['trangthai'];
                    $id=$_POST['id'];
                    updatetrangthai($id,$trangthai);
                    $thongbao="cập nhật thành công";
                }
                $listbill=loadall_bill(0);
                include "quanlidonhang/list.php";
                break;
            case "thongke":
                $listthongke=loadall_thongke();
                include "thongke/list.php";
                break;
            case "bieudo":
                    $listthongke=loadall_thongke();
                    include "thongke/bieudo.php";
                    break;
            case "listbill":
                $listbill=loadall_bill(0);
                include "quanlidonhang/list.php";
                break;
            case "ctdh":
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $ttdh=loadone_bill($_GET['id']);
                        $ctdh=loadall_ctdh($_GET['id']);
                    }
                    include "quanlidonhang/donhang.php";
                    break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
