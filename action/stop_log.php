<?php
include '../koneksi-1.php';  
session_start();
if(isset($_POST['Submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $start=0;  
    $result = mysqli_query($koneksi, "UPDATE log_control SET log_status='$start' WHERE id='1'");
    if(!$result) 
    {
        echo '<script type="text/javascript">alert("Gagal memasukan data");</script>';
    }else{
        include 'log.php';  
        store_log('Stop Log','Stopped Log Control',$_SESSION['username']);
        header("location:../index.php?page=view_data");

    }
}
 echo $start;
?>