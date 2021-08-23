<?php 
$titre = "Accueil";

include('view/header.php');

    include('view/navigation.php');
?>
<div class="welcome">
    <h1>Bienvenu sur votre tout nouveau marché en ligne numéro <span id="orange">1</span></h1>
    <h2><span id="underline">Créez</span> , <span id="underline">Vendez</span>  , <span id="underline">Achetez</span>  en toute sécurité avec Le<span id="B">b</span>azar</h2>
</div>

<div class="btn_container_add">
    <button class="btn btn-add btn-primary" type="submit" name="btn_insert_register">
    <i class="far fa-plus-square"></i>&nbsp; Créer une nouvelle annonce
    </button>
</div>

<div class="banner">
    <img src="public/images/banner.svg" alt="bannière">
</div>

<div class="titre_newAnnonce">
    <h3><i class="fas fa-bullhorn"></i>&nbsp; Nouvelles annonces publiées</h3>
</div>

<div class="container_newAnnonce">
    
</div>

 

<?php    
include('view/footer.php');    
?>
