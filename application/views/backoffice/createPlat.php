!DOCTYPE html>
<html>
<head>
    <title>Inserer des donnees</title>
</head>
<body>
    <h1>Inserer des donnees</h1>
    <form method="post" action="<?php echo site_url('backoffice/RegimeController/C_plat'); ?>">
        <input type="text" name="nomPlat" placeholder="Entrez le nom du plat" required>
            <!-- Ajoutez d'autres champs de formulaire ici -->
  <label>
    <input type="radio" name="choix" value="gain" checked>
    Gain
  </label>
  <br>
  <label>
    <input type="radio" name="choix" value="perte">
    Perte
  </label>
  <input type="number" name="prixPlat" placeholder="Entrez le prix du plat" required>

  <br>

        <input type="submit" value="Insérer">
    </form>
</body>
</html>