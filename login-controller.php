<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi-1.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
// fungsi md5 di atas untuk enkripsi kedalam bentuk md5

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from web_demo_login where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// cek jika username dan password yang di input di temukan, buat session dan alihkan halaman ke halaman admin(folder admin),
// jika tidak, alihkan kembali ke halaman depan sambil mengirim pesan gagal
if($cek > 0){
	$row = mysqli_fetch_array($data);

	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['roles'] = $row['role'];

	//include 'action/log.php';  
	//store_log('Login',$username. ' login to application',$_SESSION['username']);

	if($row['role'] == 'superadmin'){
		header("location:index.php?page=view_user");
	}else{
		header("location:index.php");
	}

}else{

	header("location:login.php?pesan=gagal");
}

?>
