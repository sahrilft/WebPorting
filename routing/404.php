
<style>
	body{
		background-color: #2b2e39;
		
	}
		input.button {
	  border-radius: 100rem;
	  padding: 1rem;
	  font-size: 1rem;
	  padding: .5rem 3rem;
	  color: $color-black;
	  box-shadow: 0 0 6px 0 rgba(157, 96, 212, 0.5);
	  border: solid 3px transparent;
	  background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(228deg, rgba(109,237,197,1) 0%, rgba(62,152,232,1) 100%);
	  background-origin: border-box;
	  background-clip: content-box, border-box;
	  box-shadow: 2px 1000px 1px #fff inset;
	}

	input.button:hover {
	  box-shadow: none;
	  color: white;
	}
	.disable { 
    pointer-events: none; 
    cursor: default; 
	}
</style>
<?php include 'header.php'; ?>
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
                    <a class="nav-link " href="index.php?page=setup_parameter" style="color:grey;">Setup Parameter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index.php?page=report" style="color:grey;">Report</a>
                </li>
				<?php if($_SESSION['roles']=='superadmin'){ ?>
					<li class="nav-item">
                    <a class="nav-link " href="index.php?page=view_user" style="color:grey;">Create User</a>
                </li>
				<?php } ?>
            </ul>

        </div>  
    </div>      
</div>	
<body style="background-color: #2b2e39;background-color: #2b2e39; color: grey;">
	<div class="row" style="padding-top: 180px;">
		<div class="col-12 col-md-12 col-lg-6" >
			<center>
				<img src="assets/img/page/iconx.png" alt="" width="60%">
				<br>
				<br>
				<br>
				<h5 style="color: grey;"><i>Web Under Development</i></h5>

			</center>


		</div>
		<div class="col-lg-6 col-md-12 pt-5 " >
			<h1 style="font-size: 100px;"><b>404</b></h1>
			<h5><i><b>Sorry this page is not available or under development</b></i></h5>
			<p><i><b>But you can click the button below to go back to the homepage.</b></i></p>
			<br>
			<br>

			<form>
			 <input class="button btn-ctdas" type="button" value="Go back!" onclick="history.back()">
			</form>
		</div>

	</div>
</body>
<footer>
	<ul class="nav justify-content-center fixed-bottom">
	  <li class="nav-item">
	    <a class="nav-link active" href="#" style="color: grey;">Lestari Elektrik Otomasi &copy 2021</a>
	  </li>
	</ul>
</footer>