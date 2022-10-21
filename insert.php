 
  <?php  
 $connect = mysqli_connect("localhost", "muslimpride", "islamituindah", "efk_rig_3");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $name = mysqli_real_escape_string($connect, $_POST["name"]);  
      $query = "UPDATE dash_id SET dash_name='$name'";  
       if(mysqli_query($connect, $query))
            {
             echo 'Image Inserted into Database';
            }
            
     
      

 }  
 ?>