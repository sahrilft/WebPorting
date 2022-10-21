<?php 
include 'koneksi-1.php';  
include 'action/log.php';   
// mengaktifkan session
session_start();
//store_log('Logout',$_SESSION['username']. ' logout from application',$_SESSION['username']);
// menghapus semua session yang ada
session_destroy();

// mengalihkan halaman kembali ke halaman login sambil mengirimkan pesan logout melalui url 
header("location:login.php?pesan=logout");
?>