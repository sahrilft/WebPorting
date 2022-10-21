 <?php

include '../koneksi-1.php';
$fetch_data = mysqli_query($koneksi,"SELECT * FROM `realtime_1` WHERE id=1 LIMIT 1");
      $data = array();
      while($get_data=mysqli_fetch_array($fetch_data)){

         $array = [
            'depth_r'         => $get_data['depth_Raw'],
            'speed'           => $get_data['speed'],
            'depth_a'         => $get_data['depth_actual'],
            'ct_press_r'      => $get_data['ct_press_raw'],
            'ct_press_a'      => $get_data['ct_press_actual'],
            'wh_press_r'      => $get_data['wh_press_raw'],
            'wh_press_a'      => $get_data['wh_press_actual'],
            'ct_l_r'          => $get_data['ct_l_weigh_raw'],
            'ct_l_a'          => $get_data['ct_l_weigh_act'],
            'ct_h_r'          => $get_data['ct_h_weigh_raw'],
            'ct_h_a'          => $get_data['ct_h_weigh_act'],
            'pump_a'          => $get_data['pump_rate'],
            'pump_r'          => $get_data['pump_raw'],
            'n2_r'            => $get_data['n2_raw'],
            'n2_a'            => $get_data['n2_rate'],
            
            
         ];
      }

         echo json_encode($array);
        
        ?>