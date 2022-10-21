<?php
//setting header to json
header('Content-Type: application/json');

//database
include 'koneksi-1.php';
//get connection



//query to get data from the table
$result = mysqli_query($koneksi,"SELECT * FROM score ORDER BY playerid");

//execute query


//loop through the returned data
$data = array();
foreach ($result as $row) {
  $a['x'] = $row['score'];
  $a['y'] = $row['score'];

  array_push($data, $a);
}

//free memory associated with result

//now print the data
print json_encode($data);