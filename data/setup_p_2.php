 <?php

include '../koneksi-1.php';
$fetch_data = mysqli_query($koneksi,"SELECT * FROM `editable_1` WHERE id=1 LIMIT 1");
      $data = array();
      while($get_data=mysqli_fetch_array($fetch_data)){

         $array = [
            'ct_press_al'      => $get_data['ct_press_low'],
            'ct_press_ah'      => $get_data['ct_press_high'],
            'wh_press_al'      => $get_data['hw_press_low'],
            'wh_press_ah'      => $get_data['hw_press_high'],
            'ct_l_al'          => $get_data['ligh_weigh_low'],
            'ct_l_ah'          => $get_data['ligh_weigh_high'],
            'ct_h_al'          => $get_data['hevy_weigh_low'],
            'ct_h_ah'          => $get_data['hevy_weigh_high'],
            
            
         ];
      }

         echo json_encode($array);
        
        ?>