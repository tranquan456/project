<?php
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc ";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function loadone_taikhoan($id)
{
    $sql = "select * from taikhoan where id=" .$id;
    $tk = pdo_query_one($sql);
    return $tk;
}
function  insert_taikhoan($fullname,$email,$phone,$password,$role,$diachi)
{
    $sql = "INSERT INTO `taikhoan`(`user`, `pass`, `email`, `address`, `tel`, `role`) VALUES ('$fullname','$password','$email','$diachi','$phone','$role')";
    pdo_execute($sql);
}
function  insert_taikhoankh($fullname,$email,$phone,$password,$diachi)
{
    $sql = "INSERT INTO `taikhoan`(`user`, `pass`, `email`, `address`, `tel`) VALUES ('$fullname','$password','$email','$diachi','$phone')";
    pdo_execute($sql);
}
function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id=" . $id;
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user = '" . $user . "' AND pass = '" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email = '" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoankh($id, $user, $pass, $email, $address, $tel)
{
    $sql = "UPDATE taikhoan SET user='" . $user . "', pass='" . $pass . "', email='" . $email . "', address='" . $address . "', tel='" . $tel . "' WHERE id=" . $id;

    pdo_execute($sql);
}
function update_taikhoan($id,$fullname,$email,$phone,$password,$role,$diachi)
{
    $sql = "UPDATE taikhoan SET user='" . $fullname . "', pass='" . $password . "', email='" . $email . "', address='" . $diachi . "', tel='" . $phone. "',role='" . $role. "' WHERE id=" . $id;

    pdo_execute($sql);
}
function sendMail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) {
        sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
        return "Gửi email thành công";
    } else {
        return "Email bạn nhập ko có trong hệ thống";
    }
}

function sendMailPass($email, $username, $pass)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);


    // gửi mailtrap
    // $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = '12ed79a42d61df';                     //SMTP username
    // $mail->Password   = 'd75a337785e533';     

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'thanhtung2432004@gmail.com';                     //SMTP username
        $mail->Password   = 'kwjm vrkt xilq rcjn';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients ngưởi nhận
        $mail->setFrom('thanhtung2432004@gmail.com', 'Hacker');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'BAN YEU CAU LAY LAI MAT KHAU!';

        $mail->Body    = 'Mau khau cua ban la' . $pass . ' Nhé !';
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

?>