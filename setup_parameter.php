<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup Parameter</title>
</head>

<?php include 'header.php'; ?>
<style>
.gauge-size{
 width: 95%;
 height: 180px;
}
body{
    background-color: #2b2e39;
}

.disable { 
    pointer-events: none; 
    cursor: default; 
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 bg-ctdas-2" style="color:white!important">
            <ul class="nav pt-1 nav-pills  justify-content-end pt-2 pb-2">
                <li class="nav-item">
                    <a class="nav-link disabled" href="index.php?page=start_job" style="color:grey;">Start Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index.php?page=view_data" style="color:grey;">View Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?page=setup_parameter">Setup Parameter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index.php?page=report" style="color:grey;">Report</a>
                </li>
            </ul>

        </div>  
    </div>      
</div>  
<body>
    <div class="container">    
        <div class="row pt-3">
            <div class="col-3">
                <div class="card border-0" style="height: 350px;">
                    <div class="card-body bg-ctdas-2">
                        <div>List Parameter <br></div>
                        <ul class="nav nav-pills flex-column pt-4">
                          <li class="nav-item">
                            <a id="depth_btn" class="nav-link active"  href="#" onclick="ShowDepth()">CT Depth</a>
                          </li>
                          <li class="nav-item">
                            <a id="ct_press_btn" class="nav-link" href="#" onclick="ShowCTPress()">CT Press</a>
                          </li>
                          <li class="nav-item">
                            <a id="wh_press_btn" class="nav-link" href="#" onclick="ShowWHPress()">WH Press</a>
                          </li>
                          <li class="nav-item">
                            <a id="ct_h_btn" class="nav-link" href="#" onclick="ShowH()">CT Heavy Weight</a>
                          </li>
                          <li class="nav-item">
                            <a id="ct_l_btn" class="nav-link" href="#" onclick="ShowL()">CT Light Weight</a>
                          </li>
                          <li class="nav-item">
                            <a id="pump_btn" class="nav-link" href="#" onclick="ShowPump()">Pump Rate</a>
                          </li>
                          <li class="nav-item">
                            <a id="n2_btn" class="nav-link" href="#" onclick="ShowN2()">N2 Rate</a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-6"id="depth_form"style="display:block">
                <div class="card border-0" style="height: 350px;">
                    <div class="card-body bg-ctdas-2">
                        <?php 
                        $koneksi = mysqli_connect("portalmonitoring.tech", "u5416640_remote", "MCDdelivery#14045", "u5416640_ctdas");
                        $d1 = mysqli_query($koneksi,"SELECT * FROM `data_editable` ORDER BY id DESC LIMIT 1");
                        while($depth=mysqli_fetch_array($d1)){
                        ?>
                        <form action="action/up_depth.php" method="POST">   
                            <div style="margin-bottom: 20px;">Edit Parameter Depth</div>
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">K Factor</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="depth_k_factor" class="form-control btn-ctdas border-0" id="depth_k" value="<?php echo $depth['depth_k_factor'];?>">
                                </div>
                            </div> 
                            
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Diameter</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="depth_diameter" class="form-control btn-ctdas border-0" id="depth_d" value="<?php echo $depth['depth_d_roll']; ?>">
                                </div>
                            </div> 
                            <div class="col-sm-7" align="right">
                                <input type="submit" name="Submit" value="Submit" class="btn btn-ctdas">
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-6" id="ct_press_form" style="display:none">
                <div class="card border-0" style="height: 350px;">
                    <div class="card-body bg-ctdas-2">
                        <?php 
                        $koneksi = mysqli_connect("portalmonitoring.tech", "u5416640_remote", "MCDdelivery#14045", "u5416640_ctdas");
                        $d2 = mysqli_query($koneksi,"SELECT * FROM `data_editable` ORDER BY id DESC LIMIT 1");
                        while($ctpress=mysqli_fetch_array($d2)){
                        ?>
                        <form action="action/up_ct_press.php" method="POST">
                            <div style="margin-bottom: 20px;">Setup Parameter CT Pressure</div>
                            
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">High Range</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_ah" class="form-control btn-ctdas border-0" id="ct_press_ah" value="<?php echo $ctpress['ct_press_act_high'];?>">
                                </div>
                            </div>  
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Low Range</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_al" class="form-control btn-ctdas border-0" id="ct_press_al" value="<?php echo $ctpress['ct_press_act_low'];?>">
                                </div>
                            </div> 
                            
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">K Factor</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_kf" class="form-control btn-ctdas border-0" id="ct_press_kf" value="<?php echo $ctpress['ct_press_k_fact'];?>">
                                </div>
                            </div> 
                            <div class="col-sm-7" align="right">
                                <input type="submit" name="Submit" value="Submit" class="btn btn-ctdas">
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-6" id="wh_press_form" style="display:none">
                <div class="card border-0" style="height: 350px;">
                    <div class="card-body bg-ctdas-2">
                        <?php 
                        $koneksi = mysqli_connect("portalmonitoring.tech", "u5416640_remote", "MCDdelivery#14045", "u5416640_ctdas");
                        $d2 = mysqli_query($koneksi,"SELECT * FROM `data_editable` ORDER BY id DESC LIMIT 1");
                        while($ctpress=mysqli_fetch_array($d2)){
                        ?>
                        <form action="action/up_ct_press.php" method="POST">
                            <div style="margin-bottom: 20px;">Setup Parameter WH Pressure</div>
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">High Range</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_ah" class="form-control btn-ctdas border-0" id="ct_press_ah" value="<?php echo $ctpress['ct_press_act_high'];?>">
                                </div>
                            </div>  
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Low Range</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_al" class="form-control btn-ctdas border-0" id="ct_press_al" value="<?php echo $ctpress['ct_press_act_low'];?>">
                                </div>
                            </div> 
                            
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">K Factor</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_kf" class="form-control btn-ctdas border-0" id="ct_press_kf" value="<?php echo $ctpress['ct_press_k_fact'];?>">
                                </div>
                            </div> 
                            <div class="col-sm-7" align="right">
                                <input type="submit" name="Submit" value="Submit" class="btn btn-ctdas">
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-6" id="ct_h_form" style="display:none">
                <div class="card border-0" style="height: 350px;">
                    <div class="card-body bg-ctdas-2">
                        <?php 
                        $koneksi = mysqli_connect("portalmonitoring.tech", "u5416640_remote", "MCDdelivery#14045", "u5416640_ctdas");
                        $d2 = mysqli_query($koneksi,"SELECT * FROM `data_editable` ORDER BY id DESC LIMIT 1");
                        while($ctpress=mysqli_fetch_array($d2)){
                        ?>
                        <form action="action/up_ct_press.php" method="POST">
                            <div style="margin-bottom: 20px;">Setup Parameter CT Heavy Weight</div>
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">High Range</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_ah" class="form-control btn-ctdas border-0" id="ct_press_ah" value="<?php echo $ctpress['ct_press_act_high'];?>">
                                </div>
                            </div>  
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Low Range</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_al" class="form-control btn-ctdas border-0" id="ct_press_al" value="<?php echo $ctpress['ct_press_act_low'];?>">
                                </div>
                            </div> 
                            
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">K Factor</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_kf" class="form-control btn-ctdas border-0" id="ct_press_kf" value="<?php echo $ctpress['ct_press_k_fact'];?>">
                                </div>
                            </div> 
                            <div class="col-sm-7" align="right">
                                <input type="submit" name="Submit" value="Submit" class="btn btn-ctdas">
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-6" id="ct_l_form" style="display:none">
                <div class="card border-0" style="height: 350px;">
                    <div class="card-body bg-ctdas-2">
                        <?php 
                        $koneksi = mysqli_connect("portalmonitoring.tech", "u5416640_remote", "MCDdelivery#14045", "u5416640_ctdas");
                        $d2 = mysqli_query($koneksi,"SELECT * FROM `data_editable` ORDER BY id DESC LIMIT 1");
                        while($ctpress=mysqli_fetch_array($d2)){
                        ?>
                        <form action="action/up_ct_press.php" method="POST">
                            <div style="margin-bottom: 20px;">Setup Parameter CT Light Weight</div>
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">High Range</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_ah" class="form-control btn-ctdas border-0" id="ct_press_ah" value="<?php echo $ctpress['ct_press_act_high'];?>">
                                </div>
                            </div>  
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Low Range</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_al" class="form-control btn-ctdas border-0" id="ct_press_al" value="<?php echo $ctpress['ct_press_act_low'];?>">
                                </div>
                            </div> 
                            
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">K Factor</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_kf" class="form-control btn-ctdas border-0" id="ct_press_kf" value="<?php echo $ctpress['ct_press_k_fact'];?>">
                                </div>
                            </div> 
                            <div class="col-sm-7" align="right">
                                <input type="submit" name="Submit" value="Submit" class="btn btn-ctdas">
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-6" id="pump_form" style="display:none">
                <div class="card border-0" style="height: 350px;">
                    <div class="card-body bg-ctdas-2">
                        <?php 
                        $koneksi = mysqli_connect("portalmonitoring.tech", "u5416640_remote", "MCDdelivery#14045", "u5416640_ctdas");
                        $d2 = mysqli_query($koneksi,"SELECT * FROM `data_editable` ORDER BY id DESC LIMIT 1");
                        while($ctpress=mysqli_fetch_array($d2)){
                        ?>
                        <form action="action/up_ct_press.php" method="POST">
                            <div style="margin-bottom: 20px;">Setup Parameter Pump Rate</div>
                            
                            
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">K Factor</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_kf" class="form-control btn-ctdas border-0" id="ct_press_kf" value="<?php echo $ctpress['ct_press_k_fact'];?>">
                                </div>
                            </div> 
                            <div class="col-sm-7" align="right">
                                <input type="submit" name="Submit" value="Submit" class="btn btn-ctdas">
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-6" id="n2_form" style="display:none">
                <div class="card border-0" style="height: 350px;">
                    <div class="card-body bg-ctdas-2">
                        <?php 
                        $koneksi = mysqli_connect("portalmonitoring.tech", "u5416640_remote", "MCDdelivery#14045", "u5416640_ctdas");
                        $d2 = mysqli_query($koneksi,"SELECT * FROM `data_editable` ORDER BY id DESC LIMIT 1");
                        while($ctpress=mysqli_fetch_array($d2)){
                        ?>
                        <form action="action/up_ct_press.php" method="POST">
                            <div style="margin-bottom: 20px;">Setup Parameter N2 Rate</div>
                           
                            
                            <div class="mb-5 row" style="margin-bottom: 10px !important;">
                                <label for="inputPassword" class="col-sm-3 col-form-label">K Factor</label>
                                <div class="col-sm-8">
                                    <input type="number" step=0.01 name="ct_press_kf" class="form-control btn-ctdas border-0" id="ct_press_kf" value="<?php echo $ctpress['ct_press_k_fact'];?>">
                                </div>
                            </div> 
                            <div class="col-sm-7" align="right">
                                <input type="submit" name="Submit" value="Submit" class="btn btn-ctdas">
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-0" style="height: 350px;">
                    <div class="card-body bg-ctdas-2">
                        <div class="pb-4">Reset data</div>
                        <div class="d-grid gap-2">
                            <div class="ctdas-p-1" id ="id" style="visibility:"></div>
                            <button class="btn btn-ctdas" type="button"> Reset Pump Counter</button>
                            <button class="btn btn-ctdas" type="button"> Reser N2 Counter</button>
                            <button class="btn btn-ctdas" type="button"> Reset CT Depth</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-5">
                <div class="card border-0">
                    <div class="card-body bg-ctdas-2">
                        <table class="table" style="color: white;">
                          <thead>
                              <th scope="col">Unit</th>
                              <th scope="col">Raw Data</th>
                              <th scope="col">Unit</th>
                              <th scope="col">Min</th>
                              <th scope="col">Max</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>                              
                              <td>Pump Rate</td>
                              <td>0</td>
                              <td>bbl/min</td>
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr>                              
                              <td>N2 Rate</td>
                              <td>0</td>
                              <td>scf/min</td>
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr>                              
                              <td>WH Pressure</td>
                              <td>0</td>
                              <td>psi</td>
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr>                              
                              <td>CT Pressure</td>
                              <td id="ct_press_r"></td>
                              <td>psi</td>
                              <td id="ct_p_al"></td>
                              <td id="ct_p_ah"></td>
                            </tr>
                            <tr>                              
                              <td>CT Heavy Weight</td>
                              <td>0</td>
                              <td>lbs</td>
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr>                              
                              <td>CT Light Weight</td>
                              <td>0</td>
                              <td>lbs</td>
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr>                              
                              <td>CT depth</td>
                              <td id="depth_r">0</td>
                              <td>ft</td>
                              <td>0</td>
                              <td>0</td>
                            </tr>
                           

                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div style="color: white;">Realtime Information</div>
                <div class="row pt-4">
                    <div class="col-3">
                        <div class="card border-0">
                            <div class="card-body bg-ctdas-2" align="right">
                                <div class="pb-2">Pump Rate</div>
                                <h3><div id="pump-rate-l">0.00</div></h3>
                                <div>bbl/min</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0">
                            <div class="card-body bg-ctdas-2" align="right">
                                <div class="pb-2">N2 Rate</div>
                                <h3><div id="pump-rate-l">0.00</div></h3>
                                <div>scf/min</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0">
                            <div class="card-body bg-ctdas-2" align="right">
                                <div class="pb-2">CT H weight</div>
                                <h3><div id="pump-rate-l">0.00</div></h3>
                                <div>lbs</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0">
                            <div class="card-body bg-ctdas-2" align="right">
                                <div class="pb-2">CT L weight</div>
                                <h3><div id="pump-rate-l">0.00</div></h3>
                                <div>lbs</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row pt-3">
                    <div class="col-3">
                        <div class="card border-0">
                            <div class="card-body bg-ctdas-2" align="right">
                                <div class="pb-2">Depth</div>
                                <h3><div id="depth_a">0.00</div></h3>
                                <div>ft</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0">
                            <div class="card-body bg-ctdas-2" align="right">
                                <div class="pb-2">Speed</div>
                                <h3><div id="speed">0</div></h3>
                                <div>ft/min</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0">
                            <div class="card-body bg-ctdas-2" align="right">
                                <div class="pb-2">WH Pressure</div>
                                <h3><div id="pump-rate-l">0.00</div></h3>
                                <div>psi</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0">
                            <div class="card-body bg-ctdas-2" align="right">
                                <div class="pb-2">CT Pressure</div>
                                <h3><div id="ct_press_a">0.00</div></h3>
                                <div>psi</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
   
    </div>
</body>
<footer>
    <ul class="nav justify-content-center fixed-bottom noprint">
     <li class="nav-item noprint">
       <a class="nav-link active noprint" href="#" style="color: grey;">Portal Monitoring &copy 2021</a>
   </li>
</ul>
</footer>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="plugins/hightchart/code/highcharts.js"></script>
<script src="plugins/hightchart/code/highcharts-more.js"></script>
<script src="plugins/hightchart/code/modules/exporting.js"></script>
<script src="plugins/hightchart/code/modules/export-data.js"></script>
<script src="plugins/hightchart/code/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

<script>
   repeatAjax();
   function repeatAjax(){
       jQuery.ajax({
         type: "POST",
         url: 'data/setup_parameter.php',
         dataType: 'json',
         success: function(result) {
            console.log(result);
           jQuery('#depth_a').html(result['depth_a']);
           jQuery('#depth_r').html(result['depth_r']);
           jQuery('#ct_press_a').html(result['ct_press_a']);
           jQuery('#ct_press_r').html(result['ct_press_r']);
           jQuery('#ct_p_al').html(result['ct_p_al']);
           jQuery('#ct_p_ah').html(result['ct_p_ah']);
           jQuery('#speed').html(result['speed']);

           

       },
       complete: function() {
                setTimeout(repeatAjax,1000); //After completion of request, time to redo it after a second
            }
        });
   }
   
   function ShowDepth() {
        $("#depth_btn").addClass('active');
        $("#ct_press_btn").removeClass('active');
        $("#wh_press_btn").removeClass('active');
        $("#ct_h_btn").removeClass('active');
        $("#ct_l_btn").removeClass('active');
        $("#pump_btn").removeClass('active');
        $("#n2_btn").removeClass('active');
        document.getElementById("depth_form").style.display="block";
        document.getElementById("ct_press_form").style.display="none";
        document.getElementById("wh_press_form").style.display="none";
        document.getElementById("ct_h_form").style.display="none";
        document.getElementById("ct_l_form").style.display="none";
        document.getElementById("pump_form").style.display="none";
        document.getElementById("n2_form").style.display="none";
    }
    function ShowCTPress() {
        $("#depth_btn").removeClass('active');
        $("#ct_press_btn").addClass('active');
        $("#wh_press_btn").removeClass('active');
        $("#ct_h_btn").removeClass('active');
        $("#ct_l_btn").removeClass('active');
        $("#pump_btn").removeClass('active');
        $("#n2_btn").removeClass('active');
        document.getElementById("depth_form").style.display="none";
        document.getElementById("ct_press_form").style.display="block";
        document.getElementById("wh_press_form").style.display="none";
        document.getElementById("ct_h_form").style.display="none";
        document.getElementById("ct_l_form").style.display="none";
        document.getElementById("pump_form").style.display="none";
        document.getElementById("n2_form").style.display="none";
    }
    function ShowWHPress() {
        $("#depth_btn").removeClass('active');
        $("#ct_press_btn").removeClass('active');
        $("#wh_press_btn").addClass('active');
        $("#ct_h_btn").removeClass('active');
        $("#ct_l_btn").removeClass('active');
        $("#pump_btn").removeClass('active');
        $("#n2_btn").removeClass('active');
        document.getElementById("depth_form").style.display="none";
        document.getElementById("ct_press_form").style.display="none";
        document.getElementById("wh_press_form").style.display="block";
        document.getElementById("ct_h_form").style.display="none";
        document.getElementById("ct_l_form").style.display="none";
        document.getElementById("pump_form").style.display="none";
        document.getElementById("n2_form").style.display="none";
    }
    function ShowH() {
        $("#depth_btn").removeClass('active');
        $("#ct_press_btn").removeClass('active');
        $("#wh_press_btn").removeClass('active');
        $("#ct_h_btn").addClass('active');
        $("#ct_l_btn").removeClass('active');
        $("#pump_btn").removeClass('active');
        $("#n2_btn").removeClass('active');
        document.getElementById("depth_form").style.display="none";
        document.getElementById("ct_press_form").style.display="none";
        document.getElementById("wh_press_form").style.display="none";
        document.getElementById("ct_h_form").style.display="block";
        document.getElementById("ct_l_form").style.display="none";
        document.getElementById("pump_form").style.display="none";
        document.getElementById("n2_form").style.display="none";
    }
    function ShowL() {
        $("#depth_btn").removeClass('active');
        $("#ct_press_btn").removeClass('active');
        $("#wh_press_btn").removeClass('active');
        $("#ct_h_btn").removeClass('active');
        $("#ct_l_btn").addClass('active');
        $("#pump_btn").removeClass('active');
        $("#n2_btn").removeClass('active');
        document.getElementById("depth_form").style.display="none";
        document.getElementById("ct_press_form").style.display="none";
        document.getElementById("wh_press_form").style.display="none";
        document.getElementById("ct_h_form").style.display="none";
        document.getElementById("ct_l_form").style.display="block";
        document.getElementById("pump_form").style.display="none";
        document.getElementById("n2_form").style.display="none";
    }
    function ShowPump() {
        $("#depth_btn").removeClass('active');
        $("#ct_press_btn").removeClass('active');
        $("#wh_press_btn").removeClass('active');
        $("#ct_h_btn").removeClass('active');
        $("#ct_l_btn").removeClass('active');
        $("#pump_btn").addClass('active');
        $("#n2_btn").removeClass('active');
        document.getElementById("depth_form").style.display="none";
        document.getElementById("ct_press_form").style.display="none";
        document.getElementById("wh_press_form").style.display="none";
        document.getElementById("ct_h_form").style.display="none";
        document.getElementById("ct_l_form").style.display="none";
        document.getElementById("pump_form").style.display="block";
        document.getElementById("n2_form").style.display="none";
    }
    function ShowN2() {
        $("#depth_btn").removeClass('active');
        $("#ct_press_btn").removeClass('active');
        $("#wh_press_btn").removeClass('active');
        $("#ct_h_btn").removeClass('active');
        $("#ct_l_btn").removeClass('active');
        $("#pump_btn").removeClass('active');
        $("#n2_btn").addClass('active');
        document.getElementById("depth_form").style.display="none";
        document.getElementById("ct_press_form").style.display="none";
        document.getElementById("wh_press_form").style.display="none";
        document.getElementById("ct_h_form").style.display="none";
        document.getElementById("ct_l_form").style.display="none";
        document.getElementById("pump_form").style.display="none";
        document.getElementById("n2_form").style.display="block";
    }
</script>
</html>