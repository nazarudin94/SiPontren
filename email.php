<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// die('dsa');
//include librarry
include('email/vendor/phpmailer/Exception.php');
include('email/vendor/phpmailer/phpmailer/src/PHPMailer.php');
include('email/vendor/phpmailer/phpmailer/src/SMTP.php');
include 'koneksi.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

// print_r($nama);echo "<br>";
// print_r($email);echo "<br>";
// print_r($username);echo "<br>";
// print_r($password);
// die();
$query ="insert into user (username,password,nama,email)  values ('$username','$password','$nama','$email')";
$insert = mysqli_query($conn,$query);
// die($insert);
if ($insert) {
    $email_pengirim = 'latifnazarudin17@gmail.com';
    $nama_pengirim = 'admin ponpes xxx';
    $email_penerima = $_POST['email'];
    $subjek = 'terimakasih telah registrasi';
    $pesan ='silahkan kembali ke halaman login';

    $mail = new PHPMailer;
    $mail->isSMTP();

    $mail->Host ='smtp.gmail.com';
    $mail->Username=$email_pengirim;
    $mail->Password='mabsnjbavfyxrrgd';
    $mail->Port=465;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='ssl';
    $mail->SMTPDebug=0;


    $mail->setFrom($email_pengirim,$nama_pengirim);
    $mail->addAddress($email_penerima);
    $mail->isHTML(true);
    $mail->Subject =$subjek;
    $mail->Body=$pesan;
// die('dsa');

    $send = $mail->send();
    if ($send) {
        echo "<h1>Berhasil dikirim</h1>";
    }else{
        echo "<h1>email gagal dikirm</h1><br>error while sending'.$mail->getError()'";
    }
}

?>