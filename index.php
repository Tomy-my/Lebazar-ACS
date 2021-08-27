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
    <a href="add_annonce.php">
        <button class="btn btn-add btn-primary" type="submit" name="btn_insert_register">
            <i class="far fa-plus-square"></i>&nbsp; Créer une nouvelle annonce
        </button>
    </a>
</div>

<div class="banner">
    <img src="public/images/banner.svg" alt="bannière">
</div>


    <div class="titre_newAnnonce">
        <h3><i class="fas fa-bullhorn"></i>&nbsp; Nouvelles annonces publiées</h3>
    </div>
</a>

<div class="container_newAnnonce">
    <?php
        require_once("model/config_bdd.php");

        $select_stmt=$db->prepare("SELECT * FROM annonce INNER JOIN utilisateur ON id_utilisateur = utilisateur.id ORDER BY annonce.id DESC LIMIT 3");
        $select_stmt->execute();

        while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
    {
    ?>
        <div class="new_show_annonce">
            <img class="show_img" src="public/upload/<?php echo $row['image_file']; ?>" alt="Aperçu de l'annonce">
            <a href="#">
                <div class="show_ico"><i class="fas fa-external-link-alt"></i></div>
            </a>
            <div class="container_txt">
                <h3><?php echo $row['titre']; ?></h3>
                <div class="ct_categorie">
                    <?php echo $row['categorie']; ?>
                </div>
                <p><?php echo $row['prix']; ?></p>
                <div class="ct_name">
                    <?php echo $row['prenom']; ?>
                    <?php echo $row['nom']; ?>
                </div>
                <p><?php echo $row['description']; ?></p>
            </div>
        </div>

    <?php
    }
    ?>
</div>
 
<?php    
include('view/footer.php');    
?>
