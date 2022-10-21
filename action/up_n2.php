<?php
include '../koneksi-1.php';  
session_start();
if(isset($_POST['Submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    
    $dk = $_POST['n2_k'];
    
    $result = mysqli_query($koneksi, "UPDATE editable_1 SET  n2_rate_K_faktor='$dk'  WHERE id='1'");
    if(!$result) 
    {
        echo '<script type="text/javascript">alert("Gagal memasukan data");</script>';
    }else{
        include 'log.php';  
        store_log('Update','Updated | Setup Parameter - N2 Rate',$_SESSION['username']);
        header("location:../index.php?page=setup_parameter");

    }
}

?>