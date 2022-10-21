 <?php

include '../koneksi-1.php';
$fetch_data = mysqli_query($koneksi,"SELECT * FROM `job_list` ORDER BY id DESC LIMIT 1");
      $data = array();
      while($get_data=mysqli_fetch_array($fetch_data)){

         $array = [
            'datetime'  => $get_data['datetime'],
            'company'   => $get_data['company'],
            'address'   => $get_data['address'],
            'well'      => $get_data['well'],
            'field'     => $get_data['field'],
            'location'  => $get_data['location'],
            'job_type'  => $get_data['job_type'],
            'ticket'    => $get_data['ticket'],
            'comment'   => $get_data['comment'],
            'jobname'   => $get_data['jobname'],
         ];
      }

         echo json_encode($array);
        
        ?>