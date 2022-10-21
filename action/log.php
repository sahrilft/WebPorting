<?php
function store_log($action, $desc, $username){
	
	$koneksi = mysqli_connect("localhost", "user1", "user1", "ctdash");
	date_default_timezone_set('Asia/Jakarta');
	$date = date('Y-m-d H:i:s');
	$type = 'event';
    $sql = "INSERT INTO `activity_log`(`action`, `desc`, `created_at`, `username`, `type`) VALUES ('$action', '$desc', '2022-01-17 14:57:35', '$username', 'event')";
	  if ($koneksi->query($sql) === TRUE) {
  
		echo '<script type="text/javascript">alert("Sukses memasukan data");window.location.href="../index.php?page=view_user";</script>';
	  }else {
		print_r("Error: " . $sql . "<br>" . $koneksi->error);die();
	  }
}

?>