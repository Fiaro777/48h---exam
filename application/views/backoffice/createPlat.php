<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <section class="login-clean">
    <form action="<?php echo site_url("backoffice/LoginAdminController/login"); ?>" method="post">
            <div class="illustration">
                <h1 style="color: var(--dark);font-size: 35px;">Ajouter plat</h1>
            </div>
            <div class="form-group">
                <p>Nom plat</p><input name="contact" class="form-control" type="email" value="admin@gmail.com">
            </div>
            <div class="form-group">
                <p>Mot de passe</p><input class="form-control" type="password" name="mdp" value="admin">
            </div>
            <div class="form-group">
				<button class="btn btn-primary btn-block" type="submit" style="background: rgb(158,244,71);">Se connecter</button>
			</div
            <?php if (isset($error)){  ?>
                <center><a class="alert-danger" href="#"><?= $error ?></a></center>
                
            <?php }   ?>
        </form>
    </section>