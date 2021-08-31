<?php 
$titre = "Inscription";
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
        include("controller/edit_annonce.php");

?>
<div class="page_addAnnonce">
    <div class="container_addAnnonce modif">
        <h2>Modification d'annonce</h2>
        <p id="accroche">Vous pouvez modifier autant de fois votre annonce gratuitement.</p>
        <form action="" method="post" enctype="multipart/form-data">
            
            <div class="double_input">
                <div class="container_titre">
                    <div class="ico_">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <input  type="text" name="titre" id="inputTitre" value="<?php echo $titre;?>" required pattern="^[A-Za-z '-]+$" maxlength="20">
                </div>
                <div class="container_categorie">
                    <div class="ico_"> 
                        <i class="far fa-list-alt"></i>
                    </div>
                    <select  name="categorie" id="inputCategorie">
                        <option value="<?php echo $categorie;?>"selected disabled><?php echo $categorie;?></option>
                        <option value="Voitures">Voitures</option>
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
                    <input  type="text" name="prix" id="inputPrix" value="<?php echo $prix;?>" required maxlength="10">
                </div>
                <div class="container_fake"></div>
            </div>

            <div class="container_image modif2">
                <div class="ico_">
                    <i class="far fa-images"></i>
                </div>
                <input  type="file" name="image_file" id="inputImage">
            </div>
            <img src="public/upload/<?php echo $image_file;?>" class="flm2">

            <div class="container_image">
                <div class="ico_">
                    <i class="far fa-images"></i>
                </div>
                <input  type="file" name="image_file2" id="inputImage">
            </div>
            <img src="public/upload/<?php echo $image_file2;?>" class="flm2">

            <div class="container_image">
                <div class="ico_">
                    <i class="far fa-images"></i>
                </div>
                <input  type="file" name="image_file3" id="inputImage">
            </div>
            <img src="public/upload/<?php echo $image_file3;?>" class="flm2">

            <div class="container_desc">
                <div class="ico_">
                    <i class="far fa-comment-alt"></i>
                </div>
                <textarea id="inputDesc" name="description"><?php echo $description;?></textarea>
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