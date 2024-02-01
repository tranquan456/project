<?php
session_start();
include_once "../../model/pdo.php";
include_once "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
// $name_user=$_REQUEST['user'];
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
</head>

<body>
    <div class="row mb">
        <div class="boxtitle">Bình luận</div>
        <div class="boxcontent2  ">
            <table>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>' . $noidung . '</td>';
                    echo '<td>' . $user . '</td>';
                    echo '<td>' . $ngaybinhluan . '</td></tr>';
                }
                ?>
            </table>
        </div>
        <div class="boxfooter searbox">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                <input type="text" id="" placeholder="Nội dung bình luận" name="noidung">
                <input type="submit" value="Gửi bình luận" name="guibinhluan">
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['id'];
        $name_user = $_SESSION['user']['id'];

        // $name_user=$_POST['']
        $ngaybinhluan=date('d/m/Y');
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
    ?>
    </div>
</body>

</html>