<?php
session_destroy();
session_start();
if(isset($_POST['Submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $date = date('Y-m-d H:i:s');
    $company = $_POST['company'];
    $address = $_POST['address'];
    $well = $_POST['well'];
    $field = $_POST['field'];
    $location = $_POST['location'];
    $job_type = $_POST['job_type'];
    $ticket = $_POST['ticket'];
    $comment = $_POST['comment'];
    $jobname = $_POST['jobname'];
         
    include '../koneksi-1.php';   
    $result = mysqli_query($koneksi, "INSERT INTO job_list VALUES('','$date','$company','$address','$well','$field','$location','$job_type','$ticket','$comment','$jobname')");
    if(!$result) {
        echo '<script type="text/javascript">alert("Gagal memasukan data");</script>';
    }else{
        include 'log.php'; 
        store_log('Create','Created job with name ' .$jobname.' and company name '.$company,$_SESSION['username']);

	    $_SESSION['data_start_job'] = $_POST;
	    $_SESSION['start_job'] = "true";
        header("location:../index.php?page=view_data");

    }
}

?>