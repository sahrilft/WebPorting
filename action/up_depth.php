<?php
include '../koneksi-1.php';  
session_start();
if(isset($_POST['Submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $dk = $_POST['depth_k_factor'];
    $dd = $_POST['depth_diameter'];
    
    $result = mysqli_query($koneksi, "UPDATE editable_1 SET depth_d_roll='$dd', depth_k_faktor='$dk'  WHERE id='1'");
    if(!$result) 
    {
        echo '<script type="text/javascript">alert("Gagal memasukan data");</script>';
    }else{
        include 'log.php';  
        store_log('Update','Updated | Setup Parameter - Depth Data',$_SESSION['username']);
        header("location:../index.php?page=setup_parameter");

    }
}

?>