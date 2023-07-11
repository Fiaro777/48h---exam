



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
        <h2><a href="<?php echo site_url("welcome/deconnexion"); ?>"><button type="button" class="btn btn-success btn-rounded btn-fw">deconnexion</button></a></h2></br>


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
								<h4 class="card-title">Liste de client</h4>
									<div class="table-responsive">
									<table class="table">
										<center>
                            
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Regime</th>
                    <th>Prix</th>
                    <th>Client</th>
                    <th>Date</th>
                    </tr>
                    </thead>
                  <tbody>
                  <?php foreach($historique as $row){ ?>
                  <tr>
                    <td><?php echo $row['regime'] ?></td>
                    <td><?php echo $row['prixRegime'] ?> Ar</td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['dateCommande'] ?></td>
                    <tr>
                    <?php } ?>
          </tbody>
          </table>
										</center>
									</table>
							</div>
						</div>
					</div>
			</div>
			
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


