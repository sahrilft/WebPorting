	<?php 

// nama host, Username, password dan nama database
$koneksi = mysqli_connect("asnour.com", "u1677759_shrl", "allyoucan#3AT", "u1677759_porting");
// Periksa Koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();

}


?>