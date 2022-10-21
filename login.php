<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
<style>
.gauge-size{
 width: 95%;
 height: 180px;
}
body{
    background-color: #F8F9FA;
}
.card{

    border-radius: 2em;
}
#card-porting{
   height : 400px; 
   background: rgb(177,255,190);
   background: linear-gradient(305deg, rgba(177,255,190,1) 0%, rgba(185,255,247,1) 100%);
}
</style>
<body>
    <div class="container px-2 px-sm-2 px-lg-5">
        <div class="px-2 px-sm-2 px-lg-5" style="padding-top: 30vh;">
            <center>
               <div class="card border-0" style="height : 400px; max-width: 100vh; background-color: white;">
                  <div class="card-body p-0">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-4 d-sm-none d-lg-block d-none">
                            <div class="card border-0" id="card-porting">
                              <div class="card-body" style="padding-top: 120px;">
                                 <center>
                                     <img src="assets/img/logo/logo-pm.png" alt="" width="100px">
                                     <h5>Portal Monitoring</h5>
                                 </center>
                              </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-8  pt-5">
                            <center>
                                <div style="font-size: 30px"><i class="fas fa-camera"></i> CompanyName</div>
                                <form action="login-controller.php" method="post" class="pt-5">
                                    <div class="input-group mb-4" style="width: 60%;">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i> </span>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username">
                                    </div>
                                    <div class="input-group mb-4" style="width: 60%;">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="*********" aria-label="Username" aria-describedby="basic-addon1" name="password">
                                    </div>
                                  <button type="submit" class="btn btn-primary border-0" style="width: 30%; background-color: #BBF9F9; color: black;">Login</button>
                                </form>
                                <br>
                                <?php 
                                  if(isset($_GET['pesan'])){
                                    if($_GET['pesan'] == "gagal"){
                                      echo "<div class='' style='color:red;'>Wrong id/password</div>";
                                    }else if($_GET['pesan'] == "logout"){
                                      echo "<div class='' style='color:green;'>Logout Success</div>";
                                    }else if($_GET['pesan'] == "belum_login"){
                                      echo "<div class='' style='color:white;'>Login in. To see it in action.</div>";
                                    }
                                  }
                                  ?> 
                            </center>
                        </div>
                    </div>
                  </div>
                </div>  
            </center>
           
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



</html>