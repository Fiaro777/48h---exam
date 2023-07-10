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
                <h1 style="color: var(--dark);font-size: 35px;">Ajout de plat</h1>
            </div>
            <div class="form-group">
                <p>Nom du plat</p><input name="nomPlat" class="form-control" type="text" placeholder="soupe">
            </div>
            <div class="form-group">
                <p>Type de regime</p>
                <select name="" id="" class="form-control">
                    <option value="perte">Perte</option>
                    <option value="gain">Gain</option>
                </select>
            </div>
            <div class="form-group">
				<button class="btn btn-primary btn-block" type="submit" style="background: rgb(158,244,71);">Ajouter</button>
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
