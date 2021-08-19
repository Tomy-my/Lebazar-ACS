<?php 
$titre = "Connexion";

include('view/header.php');

    include('view/navigation.php');
?>
<div class="page_login">
    <div class="container_login">
        <h2>Bonjour !</h2>
        <p>Connectez-vous pour avoir accès à toutes nos fonctionnalités.</p>
        <form method="post">
            <div class="container_mail">
                <div class="ico_mail"><i class="fas fa-user"></i></div>
                <div class="input_mail"> 
                    <input onclick="EffectMail()" type="email" name="email" id="inputEmail" placeholder="E-mail de connexion" class="form-control" autocomplete="email" required>
                </div>
            </div>
            <div class="container_password">
                <div class="ico_password"><i class="fas fa-lock"></i></div>
                <div class="input_password"> 
                    <input onclick="EffectPassword()" type="password" name="password" id="inputPassword" placeholder="Mot de passe" class="form-control" autocomplete="current-password" required>
                </div>
            </div>

            <button class="btn btn-lg btn-primary" type="submit">
                Connexion
            </button>

                <!-- <div class="mb-3">
                    Attention &nbsp;<i class="fas fa-exclamation-triangle"></i> <br>vous êtes connecté en tant que : <br> {{ app.user.username }}  <a href="{{ path('app_logout') }}">Déconnexion</a> ou direction la page <a href="{{ path('produit_index') }}">Produit</a>
                </div> -->
        </form>
        <p id="redirec_register">Envie de vous inscrire ? <strong><a href="inscription">Créer un compte</a></strong></p>
    </div>

    <!-- <div class="banner">
        <img src="public/images/banner.svg" alt="bannière">
    </div> -->
</div>
<?php    
include('view/footer.php');    
?>
