



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
        <li class="nav-item"> <a class="nav-link"  href="<?php echo site_url("welcome/listPlat"); ?>">CRUD Regime</a></li>
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
										<center>
                            
                    <section class="content">
      <div class="container-fluid">
      <div class="card-body">
      <section class="login-clean">
    <form action="<?php echo site_url("welcome/storeRegime"); ?>" method="post">
            <div class="illustration">
                <h1 style="color: var(--dark);font-size: 35px;">Ajout de regime</h1>
            </div>
            <div class="form-group">
                <p>Type de regime</p>
                <select name="" id="" class="form-control">
                    <option value="perte">Perte</option>
                    <option value="gain">Gain</option>
                </select>
            </div>

            <div class="form-group">
            <p>Plats</p>
                <select name="idPlat" id="" class="form-control">
                <?php foreach ($plats as $plat): ?>
                    <option value="<?php echo $plat->idPlat?>"><?php echo $plat->nomPlat?></option>
                    <?php endforeach; ?>
                  </select>

            <div class="form-group">
                <p>Activite sportif</p>
                <select name="idSport" id="" class="form-control">
                <?php foreach ($sports as $sport): ?>
                    <option value="<?php echo $sport->idSport?>"><?php echo $sport->nomSport?></option>
                    <?php endforeach; ?>
                  </select>
            </div>

            <div class="form-group">
                <p>Durée du sport</p><input name="dureeSport" class="form-control" type="number" placeholder="Durée de l'activité">
            </div>

            <div class="form-group">
                <p>Poids minimal </p><input name="minPoids" class="form-control" type="number" placeholder="Poids minimal a perdre ou a gagner">
            </div>

            <div class="form-group">
                <p>Poids maximal </p><input name="maxPoids" class="form-control" type="number" placeholder="Poids maximal a perdre ou a gagner">
            </div>

            <div class="form-group">
                <p>Prix du regime </p><input name="prixRegime" class="form-control" type="number" placeholder="prix du regime">
            </div>


            <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit" style="background: rgb(158,244,71);">Ajouter</button>
            </div>  
							</div>
						</div>
					</div>
			</div>
          </form>

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





