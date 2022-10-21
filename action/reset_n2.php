<?php
include '../koneksi-1.php';  
session_start();
if(isset($_POST['Submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $start=1;  
    $result = mysqli_query($koneksi, "UPDATE editable_1 SET n2_total='$start' WHERE id='1'");
    if(!$result) 
    {
        echo '<script type="text/javascript">alert("Gagal memasukan data");</script>';
    }else{
        include 'log.php'; 
        store_log('Start Log','Reset Total N2',$_SESSION['username']);
        header("location:../index.php?page=setup_parameter");

    }
}
 echo $start;
?>