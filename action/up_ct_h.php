<?php
include '../koneksi-1.php';  
session_start();
if(isset($_POST['Submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $ah = $_POST['ct_h_ah'];
    $al = $_POST['ct_h_al'];
    $kf = $_POST['ct_h_kf'];
    
    $result = mysqli_query($koneksi, "UPDATE editable_1 SET  hevy_weigh_high='$ah', hevy_weigh_low='$al', hevy_weigh_k_faktor='$kf' WHERE id='1'");
    if(!$result) 
    {
        echo '<script type="text/javascript">alert("Gagal memasukan data");</script>';
    }else{
        
        include 'log.php'; 
        store_log('Update','Updated | Setup Parameter - CT Heavy Weight',$_SESSION['username']);
        header("location:../index.php?page=setup_parameter");

    }
}

?>