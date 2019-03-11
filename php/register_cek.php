<?php
session_start();
include "config.php";
//include "../library/function_antiinjection.php";
$username = $_POST['username'];
$nama_lengkap = $_POST['namalengkap'];
$email = $_POST['email'];
$password = md5($_POST['pass']);
$phone = $_POST['phone'];

$sql="INSERT INTO tblusers(username,nama_lengkap,password,role_id,flag_active,inserted_date,updated_date,email,no_hp)  
VALUES('$username','$nama_lengkap','$password',1,1,NOW(),NOW(),'$email','$phone')";
$data=mysqli_query($mysqli,$sql);

if($data) {
    echo "ok";
}else{
    echo "<b>Salah Register!</b>!";
}

?>