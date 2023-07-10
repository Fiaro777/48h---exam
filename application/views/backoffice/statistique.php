<?php 
//       echo $this->session->userdata('name'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BackOffice du site Regime</title>
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
    <a span><b>Statistique </b>utilisateur</span>
  </div>
 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card-body">
      <h2 style="text-align:center">Inscrit</h2> 

        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>Nombre d'utilisateur</th>
            </tr>
            </thead>
          <tbody>
          <?php foreach($numUser as $row){ ?>
          <tr>
            <td><?php echo $row['numUser'] ?></td>

            <tr>
            <?php } ?>
          </tbody>
          </table>

<!-- -->

<section class="content">
      <div class="container-fluid">
      <div class="card-body">
      <h2 style="text-align:center">Actif</h2> 

        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>Nombre d'utilisateur actif</th>
            </tr>
            </thead>
          <tbody>
          <?php foreach($numUserActif as $row){ ?>
          <tr>
            <td><?php echo $row['actif'] ?></td>

            <tr>
            <?php } ?>
          </tbody>
          </table>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
