<h1>Liste des plats</h1>
<a href="<?php echo site_url('welcome/createPlat'); ?>">Ajouter un plat</a>
<table>
    <thead>
        
    </thead>
    <tbody>
        
    </tbody>
</table>

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
    <a span><b>Historique </b>de commande</span>
  </div>
 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card-body">
      <h2 style="text-align:center">Liste demande</h2> 

        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>Nom du plat</th>
            <th>Type de régime</th>
            <th>Actions</th>
        </tr>
            </thead>
          <tbody>
          <?php foreach ($plats as $plat): ?>
            <tr>
                <td><?php echo $plat->nomPlat; ?></td>
                <td><?php echo $plat->typeRegime; ?></td>
                <td>
                    <a href="<?php echo site_url('welcome/editPlat/' . $plat->idPlat); ?>">Modifier</a>
                    <a href="<?php echo site_url('welcome/deletePlat/' . $plat->idPlat); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
          </tbody>
          </table>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>