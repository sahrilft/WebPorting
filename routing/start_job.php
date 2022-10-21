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
    .card-menu{
        color:white; 
        background: rgb(55,255,242);
        background: linear-gradient(150deg, rgba(55,255,242,1) 0%, rgba(167,255,191,1) 100%);
    }
    .card-lost{
        color: white;
        background-color: white;
    }
</style>

<body>

<div class="container" style="padding-top: 150px;">
    
    <div class="row mx-0 mx-sm-0 mx-lg-5">
        <div class="col-5 col-sm-5 col-md-4 col-lg-2 pb-2 d-none d-md-none d-sm-none d-lg-block"></div>

        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pb-4">
            <div class="card border-0 shadow-sm" >
                <div class="card-body px-5 py-2" align="center" style="padding-top: 30px!important;">
                    <a href="index.php?page=work_order">
                        <div class="card border-0 rounded-3" >
                            <div class="card-body py-3 card-menu rounded-3" align="center" style="font-size: 30px">
                                <img src="assets/img/icon/wo.png" alt="" height="50px">
                            </div>
                            
                        </div>
                    </a>
                    <div class="pt-2"> <b>Production<br>Planning</b></div>

                </div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pb-4">
            <div class="card border-0 shadow-sm" >
                <div class="card-body px-5 py-2" align="center" style="padding-top: 30px!important;">
                    <a href="index.php?page=kpi">
                    <div class="card border-0 rounded-3" >
                        <div class="card-body py-3 card-menu rounded-3" align="center" style="font-size: 30px">
                            <img src="assets/img/icon/oee.png" alt="" height="50px">
                        </div>

                    </div>
                </a>
                    <div class="pt-2"> <b>KPI Dash</b></div>
                    <div>OEE</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pb-4">
            <div class="card border-0 shadow-sm" s>
                <div class="card-body px-5 py-2" align="center" style="padding-top: 30px!important;">
                    <div class="card border-0 rounded-3" >
                        <div class="card-body py-3 card-menu rounded-3" align="center" style="font-size: 30px">
                            <img src="assets/img/icon/analytic.png" alt="" height="50px">
                        </div>

                    </div>
                    <div class="pt-2"> <b>Analytic</b></div>
                    <div>Production</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pb-4">
            <div class="card border-0 shadow-sm" s>
                <div class="card-body px-5 py-2" align="center" style="padding-top: 30px!important;">
                    <div class="card border-0 rounded-3" >
                        <div class="card-body py-3 card-menu rounded-3" align="center" style="font-size: 30px">
                            <img src="assets/img/icon/report.png" alt="" height="50px">
                        </div>

                    </div>
                    <div class="pt-2"> <b>Report</b></div>
                    <div>LPH</div>
                </div>
            </div>
        </div>

        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pb-2 d-none d-sm-none d-lg-block"></div>

    </div>
    <div class="row mx-0 mx-sm-0 mx-lg-5">
        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pb-2 d-none d-sm-none d-lg-block"></div>

        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pb-4">
            <div class="card border-0 shadow-sm" >
                <div class="card-body px-5 py-2" align="center" style="padding-top: 30px!important;">
                    <div class="card border-0 rounded-3 pt-3 pb-5" >
                        <div class="card-body py-3 card-lost rounded-3" align="center" style="font-size: 30px">
                            <img src="assets/img/icon/add.png" alt="" height="50px">
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pb-4">
            <div class="card border-0 shadow-sm" >
                <div class="card-body px-5 py-2" align="center" style="padding-top: 30px!important;">
                    <div class="card border-0 rounded-3 pt-3 pb-5" >
                        <div class="card-body py-3 card-lost rounded-3" align="center" style="font-size: 30px">
                            <img src="assets/img/icon/add.png" alt="" height="50px">
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pb-4">
            <div class="card border-0 shadow-sm" >
                <div class="card-body px-5 py-2" align="center" style="padding-top: 30px!important;">
                    <div class="card border-0 rounded-3 pt-3 pb-5" >
                        <div class="card-body py-3 card-lost rounded-3" align="center" style="font-size: 30px">
                            <img src="assets/img/icon/add.png" alt="" height="50px">
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pb-4">
            <div class="card border-0 shadow-sm" >
                <div class="card-body px-5 py-2" align="center" style="padding-top: 30px!important;">
                    <div class="card border-0 rounded-3 pt-3 pb-5" >
                        <div class="card-body py-3 card-lost rounded-3" align="center" style="font-size: 30px">
                            <img src="assets/img/icon/add.png" alt="" height="50px">
                        </div>
                    </div>                        
                </div>
            </div>
        </div>


        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pb-2 d-none d-sm-none d-lg-block"></div>

    </div>
</div>
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