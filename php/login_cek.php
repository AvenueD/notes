<?php
session_start();
include "config.php";
//include "../library/function_antiinjection.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$cekuser = mysqli_query($mysqli, "SELECT * FROM tblusers WHERE username='$username' AND password='$password' AND flag_active=1");
$jmluser = mysqli_num_rows($cekuser);
$data = mysqli_fetch_array($cekuser);

if($jmluser > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['namalengkap'] = $data['nama_lengkap'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['iduser'] = $data['user_id'];
    $_SESSION['idrole'] = $data['role_id'];

    $_SESSION['timeout'] = time()+5000;
    $_SESSION['login'] = 1;
    echo "ok";
}else{
    echo "<b>Username</b> and <b>password</b> do not match!";
}

?>