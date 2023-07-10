<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <section class="login-clean">
    <form action="<?php echo site_url("frontoffice/LoginClientController/login"); ?>" method="post">
            <div class="illustration">
                <h1 style="color: var(--dark);font-size: 35px;">Login client</h1>
            </div>
            <div class="form-group">
                <p>Email</p><input name="contact" class="form-control" type="email">
            </div>
            <div class="form-group">
                <p>Mot de passe</p><input class="form-control" type="password" name="mdp">
            </div>
            <div class="form-group">
				<button class="btn btn-primary btn-block" type="submit" style="background: rgb(158,244,71);">Se connecter</button>
			</div
            <?php if (isset($error)){  ?>
                <center><a class="alert-danger" href="#"><?= $error ?></a></center>
                
            <?php }   ?>
        </form>
    </section>