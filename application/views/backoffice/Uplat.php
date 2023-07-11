<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ajouter un plat</title>
<?php $this->load->helper('url');?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition lockscreen">

   

</form>
    <!-- /.center -->
  
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>



<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ajouter un plat</title>
<?php $this->load->helper('url');?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition lockscreen">

    

</form>
    <!-- /.center -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>











<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>BackOffice Site de regime</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url("vendors/feather/feather.css"); ?>">
	<link rel="stylesheet" href= "<?php echo base_url("vendors/ti-icons/css/themify-icons.css"); ?>">
	<link rel="stylesheet" href=  "<?php echo base_url("vendors/css/vendor.bundle.base.css"); ?>">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href= "<?php echo base_url("css/vertical-layout-light/style.css"); ?>">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?php echo base_url("images/favicon.png"); ?>" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <div class="container-fluid page-body-wrapper">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      
    </nav>
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
     </div>
	 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Accueil</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link"  href="<?php echo site_url("welcome/historique"); ?>">Historique</a></li>
				<li class="nav-item"> <a class="nav-link"  href="<?php echo site_url("welcome/statistique"); ?>">Statistique</a></li>
				<li class="nav-item"> <a class="nav-link"  href="<?php echo site_url("welcome/activite"); ?>">Activités</a></li>
        <li class="nav-item"> <a class="nav-link"  href="<?php echo site_url("welcome/listPlat"); ?>">CRUD Plat</a></li>


              </ul>
            </div>
          </li>
        </ul>
      </nav>

			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-lg-6 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
									<table class="table">
										<center>
                            
                    <section class="content">
      <div class="container-fluid">
      <div class="card-body">
      <section class="login-clean">
    <form action="<?php echo site_url("welcome/storePlat"); ?>" method="post">
            <div class="illustration">
                <h1 style="color: var(--dark);font-size: 35px;">Modification de plat</h1>
            </div>
            <div class="form-group">
            <input type="text" name="nomPlat" id="nomPlat" class="form-control" value="<?php echo $plat->nomPlat; ?>" required>
            </div>
            <div class="form-group">
            <input type="text" name="typeRegime" id="typeRegime" class="form-control" value="<?php echo $plat->typeRegime; ?>" required>

            </div>
            <div class="form-group">
				<button class="btn btn-primary btn-block" type="submit" style="background: rgb(158,244,71);">Modifier</button>
			</div
            <?php if (isset($error)){  ?>
                <center><a class="alert-danger" href="#"><?= $error ?></a></center>
                
            <?php }   ?>
        </form>
    </section>
        
		</div>
	</div>
	</div>
    </div>
</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
  <script src= "<?php echo base_url("vendors/js/vendor.bundle.base.js"); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=  "<?php echo base_url("js/off-canvas.js"); ?>"></script>
  <script src="<?php echo base_url("js/hoverable-collapse.js"); ?>"></script>
  <script src= "<?php echo base_url("js/template.js"); ?>"></script>
  <script src= "<?php echo base_url("js/settings.js"); ?>"></script>
  <script src=  "<?php echo base_url("js/todolist.js"); ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>


