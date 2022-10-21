<?php
include '../koneksi-1.php';  
session_start();
if(isset($_POST['Submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $ah = $_POST['ct_l_ah'];
    $al = $_POST['ct_l_al'];
    $kf = $_POST['ct_l_kf'];
    
    $result = mysqli_query($koneksi, "UPDATE editable_1 SET  ligh_weigh_high='$ah', ligh_weigh_low='$al', ligh_weigh_k_faktor='$kf' WHERE id='1'");
    if(!$result) 
    {
        echo '<script type="text/javascript">alert("Gagal memasukan data");</script>';
    }else{
        
        include 'log.php'; 
        store_log('Update','Updated | Setup Parameter - CT Light Weight',$_SESSION['username']);
        header("location:../index.php?page=setup_parameter");

    }
}

?>