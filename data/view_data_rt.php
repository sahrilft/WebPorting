 <?php

 include '../koneksi-1.php';
 $d = mysqli_query($koneksi,"SELECT * FROM `realtime_1` LIMIT 1");
 $data = array();
 $data1 = array();
 $data2 = array();
 $data3 = array();
 $data4 = array();
 $data5 = array();
 $data6 = array();
 $data7 = array();
 $data8 = array();
 $data9 = array();



 while($t=mysqli_fetch_array($d)){

   $test  = number_format($t['depth_actual'], 2, '.', '');
   $test1 = number_format($t['speed'], 2, '.', '');
   $test2 = number_format($t['ct_press_actual'], 2, '.', '');
   $test3 = number_format($t['wh_press_actual'], 2, '.', '');
   $test4 = number_format($t['ct_h_weigh_act'], 2, '.', '');
   $test5 = number_format($t['ct_l_weigh_act'], 2, '.', '');
   $test6 = number_format($t['pump_rate'], 2, '.', '');
   $test7 = number_format($t['n2_rate'], 2, '.', '');
   $test8 = number_format($t['total_n2'], 2, '.', '');
   $test9 = number_format($t['total_pump'], 2, '.', '');
   $datedb =$t['datetime'];



   $data = $test;
 $data1 = $test1;
 $data2 = $test2;
 $data3 = $test3;
 $data4 = $test4;
 $data5 = $test5;
 $data6 = $test6;
 $data7 = $test7;
 $data8 = $test8;
 $data9 = $test9;



}
$datenow = date('Y-m-d H:i:s');
$datec = strtotime($datenow)-10;
$datenow = strtotime($datenow);
$datecomp = strtotime($datedb);


if ($datecomp > $datec) {
   $res = array($data,$data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9);
}else{
    $res = array(0,0,0,0,0,0,0,0,0,0);
}

echo json_encode($res);


?>