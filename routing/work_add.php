<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Job</title>
</head>
<?php 
    session_start();
    include 'header.php';


?>
<style>
    body{
        font-family: 'Poppins', sans-serif!important;
    }
    .bg-card-nav{
        background-color: #71f5c9;
    }
    .nav-pills .active{
        background-color: #71f5c9!important;
        color: black!important;
        border-bottom: 4px solid black;
    }
    .nav-item a{
        color: black!important;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 pb-1 col-lg-12 bg-card-nav" style="color:white!important">
            <ul class="nav pt-1 nav-pills justify-content-start">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=work_order" >Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?page=work_add">Add Data</a>
                </li>
              
            </ul>
                
        </div>  
    </div>
</div>
<body>
    
</body>
<?php 
    include 'footer.php';
?>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="plugins/hightchart/code/highcharts.js"></script>
<script src="plugins/hightchart/code/highcharts-more.js"></script>
<script src="plugins/hightchart/code/modules/exporting.js"></script>
<script src="plugins/hightchart/code/modules/export-data.js"></script>
<script src="plugins/hightchart/code/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

</html>