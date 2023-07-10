!DOCTYPE html>
<html>
<head>
    <title>Inserer des donnees</title>
</head>
<body>
    <h1>Inserer des donnees</h1>
    <form method="post" action="<?php echo site_url('backoffice/RegimeController/C_plat'); ?>">
        <input type="text" name="nomPlat" placeholder="Entrez le nom du plat" required>
        <input type="radio" name="typeRegime" id="">Gain</
        <!-- Ajoutez d'autres champs de formulaire ici -->

        <input type="submit" value="Insérer">
    </form>
</body>
</html>