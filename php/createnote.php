<?php
session_start();
ob_start();
include_once("config.php");
if(isset($_SESSION['username']) and isset($_SESSION['password']))
{
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    //include "../library/function_antiinjection.php";
    $title = $_POST['title'];
    $notes = $_POST['notes'];
    $sql = "SELECT * FROM tblusers WHERE username='$username' AND password='$password' AND flag_active=1";
    $cekuser = mysqli_query($mysqli, $sql);
    //var_dump($sql);exit;
    $jmluser = mysqli_num_rows($cekuser);
    $data = mysqli_fetch_array($cekuser);
    if($jmluser > 0) {
        $username = $data['username'];
        $namalengkap= $data['nama_lengkap'];
        $password= $data['password'];
        $iduser = $data['user_id'];
        $idrole = $data['role_id'];
        $email = $data['email'];

        $sql = "INSERT INTO tblnotes (user_id, role_id, nama_lengkap, username, title, notes, created_date, updated_date, email) VALUES 
        ('$iduser','$idrole','$namalengkap','$username','$title','$notes',NOW(),NOW(),'$email')";
        mysqli_query($mysqli, $sql);

        //var_dump($sql); exit();
        echo "ok";
    }    
}


?>