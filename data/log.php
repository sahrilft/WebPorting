 <?php

include '../koneksi-1.php';
 $d = mysqli_query($koneksi,"SELECT * FROM `log_control` LIMIT 1");
 $data = array();
 $data1 = array();
 $data2 = array();

 
 
 while($t=mysqli_fetch_array($d)){
   
   $test  = $t['hour'];
   $test1 = $t['min'];
   $test2 = $t['sec'];
   

   $data[] = $test;
   $data1[] = $test1;
   $data2[] = $test2;

   
   
   
}
$res = array($data,$data1,$data2);
echo json_encode($res);

?>