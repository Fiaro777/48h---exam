<?php 
//       echo $this->session->userdata('name'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Achat Vente</title>
<?php $this->load->helper('url');?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a span><b>Achat </b>Vente</span>
  </div>
 
  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
<body>
                <li class="nav-item"> <a class="nav-link"  href="<?php echo site_url("welcome/logAdmin"); ?>">ADMIN</a></li>
				<li class="nav-item"> <a class="nav-link"  href="<?php echo site_url("welcome/logClient"); ?>">CLIENT</a></li>
</body>


  </div>
  <!-- /.lockscreen-item -->
  
  <div class="text-center">
	  <!-- user connect -->
    <a href="<?= base_url() ?>accueil/fournisseur">Se connecter en tant qu'utilisateur</a> 
    <center>--OU--
</center>
    <a href="<?= base_url() ?>welcome/logAdmin">Se connecter en tant qu'admin</a>
  </div>
 
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
