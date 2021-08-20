<?php 
$titre = "Inscription";

include('view/header.php');

    include('view/navigation.php');
?>
<div class="page_register">
    <div class="container_register">
        <h2>Créer un nouveau compte</h2>
        <p id="accroche">Inscrivez vous afin d'avoir accès à toutes nos fonctionnalités.</p>
        <form method="post">
            <div class="container_prenom">
                <div class="ico_"><i class="fas fa-user"></i></div>
                <div class="input_mail"> 
                    <input onclick="EffectMail()" type="text" name="prenom" id="inputPrenom" placeholder="Prénom" class="form-control" required>
                </div>
            </div>
            <div class="container_nom">
                <div class="ico_password"><i class="far fa-address-card"></i></div>
                <div class="input_password"> 
                    <input onclick="EffectPassword()" type="text" name="nom" id="inputNom" placeholder="Nom" class="form-control" required>
                </div>
            </div>
            <div class="container_date">
                <div class="ico_"><i class="far fa-calendar-alt"></i></div>
                <div class="input_mail"> 
                    <input onclick="EffectMail()" type="date" name="email" id="inputDate" class="form-control"required>
                </div>
            </div>
            <div class="container_pseudo">
                <div class="ico_"><i class="fas fa-globe-europe"></i></div>
                <div class="input_mail"> 
                    <input onclick="EffectMail()" type="text" name="pseudo" id="inputPseudo" placeholder="Pseudo" class="form-control" required>
                </div>
            </div>
            <div class="container_mail">
                <div class="ico_"><i class="far fa-envelope"></i></div>
                <div class="input_mail"> 
                    <input onclick="EffectMail()" type="email" name="email" id="inputEmail" placeholder="E-mail" class="form-control" autocomplete="email" required>
                </div>
            </div>
            <div class="container_password">
                <div class="ico_"><i class="fas fa-lock"></i></div>
                <div class="input_password"> 
                    <input onclick="EffectPassword()" type="password" name="password" id="inputPassword" placeholder="Mot de passe" class="form-control" autocomplete="current-password" required>
                </div>
            </div>
            <div class="contraintes_mdp">
                <p>Fiabilité du mot de passe :</p>
                <div class="slider_mdp">
                    <div class="int_slider"></div>
                </div>
            </div>
            <div class="container_passwordCheck">
                <div class="ico_"><i class="fas fa-lock"></i></div>
                <div class="input_password"> 
                    <input onclick="EffectPassword()" type="password" name="password" id="inputPasswordCheck" placeholder="Comfirme le mot de passe" class="form-control" autocomplete="current-password" required>
                </div>
            </div>
            <span id="message">Attention &nbsp;<i class="fas fa-exclamation-triangle"></i><br>Les 2 mots de passe ne correspondent pas</span><br />
            <!-- <p>Attention &nbsp;<i class="fas fa-exclamation-triangle"></i>  -->

            <button class="btn btn-lg btn-primary" type="submit">
                Créer votre compte
            </button>
            <p id="condition">En vous inscrivant vous acceptez les conditions d'utilisation du site Le<span id="B">b</span>azar.</p>
        </form>
    </div>
</div>

<script type="text/javascript" src="./public/js/password.js"></script>

<?php    
include('view/footer.php');    
?>