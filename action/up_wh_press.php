<?php
include '../koneksi-1.php';  
session_start();
if(isset($_POST['Submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $ah = $_POST['wh_press_ah'];
    $al = $_POST['wh_press_al'];
    $kf = $_POST['wh_press_kf'];
    
    $result = mysqli_query($koneksi, "UPDATE editable_1 SET  hw_press_high='$ah', hw_press_low='$al', hw_press_k_faktor='$kf' WHERE id='1'");
    if(!$result) 
    {
        echo '<script type="text/javascript">alert("Gagal memasukan data");</script>';
    }else{
        
        include 'log.php'; 
        store_log('Update','Updated | Setup Parameter - WH Pressure',$_SESSION['username']);
        header("location:../index.php?page=setup_parameter");

    }
}

?>