<?php
include '../koneksi-1.php';  
session_start();
if(isset($_POST['Submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $ah = $_POST['ct_press_ah'];
    $al = $_POST['ct_press_al'];
    $rl = $_POST['ct_press_rl'];
    $kf = $_POST['ct_press_kf'];
    
    $result = mysqli_query($koneksi, "UPDATE editable_1 SET  ct_press_high='$ah', ct_press_low='$al', ct_press_k_faktor='$kf', ct_press_raw_low='$rl' WHERE id='1'");
    if(!$result) 
    {
        echo '<script type="text/javascript">alert("Gagal memasukan data");</script>';
    }else{
        
        include 'log.php'; 
        store_log('Update','Updated | Setup Parameter - CT Pressure',$_SESSION['username']);
        header("location:../index.php?page=setup_parameter");

    }
}

?>