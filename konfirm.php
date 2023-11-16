<?php
include('koneksi.php');
session_start(); 
if (!isset($_SESSION['username'])) 
{
 echo "<script>alert('Maaf Anda Belum Melakukan Login. Silahkan Login Terlebih Dahulu');window.location='login.php';</script>";
 exit; 
}
if(!isset($_COOKIE['username'])) 
{ 
    session_destroy();
    echo "<script>alert('Maaf Anda Sudah 5 Menit Lebih Tidak Melakukan Aktivitas di Web ini. Silahkan Login Kembali');window.location='login.php';</script>"; 
}else{
    $username = $_COOKIE['username'];
    setcookie('username', $username, time() + 300);
}


?>