<?php

include '../koneksi-1.php';  
session_start();
date_default_timezone_set('Asia/Jakarta');
$date = date('Y-m-d H:i:s');
include 'log.php'; 
if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $roles = strtolower($_POST['roles']);

    $sql = "INSERT INTO account (id, username, password, created_date, roles)
            VALUES ('','$username','$password','$date','$roles')";

    if ($koneksi->query($sql) === TRUE) {
  
      store_log('Create','Created user with username ' . $username. ' & roles as '.$roles,$_SESSION['username']);
      echo '<script type="text/javascript">alert("Sukses memasukan data");window.location.href="../index.php?page=work_order";</script>';
    }else {
      print_r("Error: " . $sql . "<br>" . $koneksi->error);die();
    }
}
if(isset($_GET['user_id'])) { 

    $sql = "DELETE FROM planning WHERE id=".$_GET['user_id']."";

    if ($koneksi->query($sql) === TRUE) {
      //store_log('Delete','Deleted user with id ' .$_GET['user_id'],$_SESSION['username']);
      echo '<script type="text/javascript">alert("Sukses menghapus data");window.location.href="../index.php?page=work_order";</script>';
    }else {
      print_r("Error: " . $sql . "<br>" . $koneksi->error);die();
    }
}
if(isset($_GET['method']) && $_GET['method'] == 'update') { 

  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $roles = strtolower($_POST['roles']);
  $id = $_POST['id'];

  $sql = "UPDATE account SET username='$username', roles='$roles', updated_date='$date', password='$password' WHERE id='$id'";
  if ($koneksi->query($sql) === TRUE) {
    store_log('Update','Updated user with id ' .$id, $_SESSION['username']);
    echo '<script type="text/javascript">alert("Sukses mengubah data");window.location.href="../index.php?page=view_user";</script>';
  }else {
    print_r("Error: " . $sql . "<br>" . $koneksi->error);die();
  }
}

?>