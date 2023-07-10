<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Se connecter en tant qu'administrateur</title>
<?php $this->load->helper('url');?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition lockscreen">

    <section class="login-clean">
    <form action="<?php echo site_url("welcome/login"); ?>" method="post">
            <div class="illustration">
                <h1 style="color: var(--dark);font-size: 35px;">Connection en tant qu'admin</h1>
            </div>
            <div class="form-group">
                <p>Email</p><input name="email" class="form-control" type="email" value="admin@gmail.com">
            </div>
            <div class="form-group">
                <p>Mot de passe</p><input class="form-control" type="password" name="password" value="admin">
            </div>
            <div class="form-group">
				<button class="btn btn-primary btn-block" type="submit" style="background: rgb(158,244,71);">Se connecter</button>
			</div
            <?php if (isset($error)){  ?>
                <center><a class="alert-danger" href="#"><?= $error ?></a></center>
                
            <?php }   ?>
        </form>
    </section>

    <!-- /.center -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
