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

</form>
    <!-- /.center -->
  
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
