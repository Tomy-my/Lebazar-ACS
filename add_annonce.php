<?php 
$titre = "Ajout d'annonce";

session_start();

if (empty($_SESSION['admin']))
{
    header('Location: login.php');
    exit();
}

else
{
    include('view/header.php');
    
        include('view/navigation.php');
    
    include("controller/add_annonce.php");
?>
<div class="page_addAnnonce">
    <div class="container_addAnnonce">
        <h2>Créer une nouvelle annonce</h2>
        <p id="accroche">Vous aurez 50% de chances en plus d’être contacté si votre annonce est dans la bonne catégorie.</p>
        <form action="" method="post" enctype="multipart/form-data">
            
            <div class="double_input">
                <div class="container_titre">
                    <div class="ico_">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <input  type="text" name="titre" id="inputTitre" placeholder="Titre de l'annonce" required pattern="^[A-Za-z '-]+$" maxlength="20">
                </div>
                <div class="container_categorie">
                    <div class="ico_">
                        <i class="far fa-list-alt"></i>
                    </div>
                    <select  name="categorie" id="inputCategorie">
                        <option selected disabled>Catégorie :</option>
                        <option value="Voiture">Voitures</option>
                        <option value="Moto">Motos</option>
                        <option value="Nautique">Nautiques</option>
                        <option value="Maison">Maisons</option>
                        <option value="Autre">Autres</option>
                    </select>
                </div>
            </div>
            <div class="double_input">
                <div class="container_prix">
                    <div class="ico_">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <input  type="text" name="prix" id="inputPrix" placeholder="Prix" required maxlength="10">
                </div>
                <div class="container_fake"></div>
            </div>

            <div class="container_image">
                <div class="ico_">
                    <i class="far fa-images"></i>
                </div>
                <input  type="file" name="image_file" id="inputImage">
            </div>

            <div class="container_image">
                <div class="ico_">
                    <i class="far fa-images"></i>
                </div>
                <input  type="file" name="image_file2" id="inputImage">
            </div>

            <div class="container_image">
                <div class="ico_">
                    <i class="far fa-images"></i>
                </div>
                <input  type="file" name="image_file3" id="inputImage">
            </div>

            <div class="container_desc">
                <div class="ico_">
                    <i class="far fa-comment-alt"></i>
                </div>
                <textarea id="inputDesc" name="description">Déscription de l'annonce... </textarea>
            </div>

            <button class="btn btn-lg btn-primary" type="submit" name="btn_insert_add_annonce">
                Publier l'annonce !
            </button>

        </form>
    </div>
</div>

<script type="text/javascript" src="./public/js/password.js"></script>

<?php    
include('view/footer.php');   
} 
?>