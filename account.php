<?php 
$titre = "Compte";

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
    
    include("controller/edit_acc.php");
    
    // if (!isset($_REQUEST['update_id']))
    //    header("Location: account.php");

?>
    <div class="page_account">
        <div class="sous_nav">

            <div id="sn_annonce" >
                    <i class="fas fa-book-open"></i>&nbsp;
                    Annonce
                <hr id="hr_annonce">
            </div>

            <div id="sn_favoris" >
                    <i class="fas fa-heart"></i>&nbsp;
                    Favoris
                <hr id="hr_favoris">
            </div>

            <div id="sn_deco" >
                <a href="controller/logout.php">
                    <i class="fas fa-sign-out-alt"></i>&nbsp;
                    Déconnexion
                </a>
                <hr id="hr_deco">
            </div>

        </div>
        <div class="sous_container_settings">
            <div class="settings">
                <div class="img_profil" style="background-image: url('public/images/1.jpg');">
                    <div class="edit_picture">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="inputPseudo">
                        <label for="pseudo_acc">Pseudo</label>
                        <input type="text" name="pseudo" id="pseudo_acc" value="<?php echo $pseudo; ?>">
                    </div>
                    <div class="inputName">
                        <div class="inputPrenom_">
                            <label for="prenom_acc">Prénom</label>
                            <input type="text" name="prenom" id="prenom_acc" value="<?php echo $prenom; ?>">
                        </div>
                        <div class="inputNom_">
                            <label for="nom_acc">Nom</label>
                            <input type="text" name="nom" id="nom_acc" value="<?php echo $nom; ?>">
                        </div>
                    </div>
                    <div class="inputDate">
                        <i class="far fa-calendar-alt"></i>
                        <input type="date" name="naissance" id="date_acc" value="<?php echo $naissance; ?>">
                    </div>
                    <div class="inputMail">
                        <i class="far fa-envelope"></i>
                        <input type="email" name="email" id="mail_acc" value="<?php echo $email; ?>">
                    </div>
                    <div class="double_btn">
                        <button id="save_acc" name="btn_update_acc">Sauvegarder</button>
                        <a href="#"><button id="cancel_acc">Annuler</button></a>
                    </div>
                </form>
            </div>

            <div class="my_annonce">
                <?php
                    require_once("model/config_bdd.php");

                    $select_stmt=$db->prepare("SELECT * FROM annonce WHERE id_utilisateur = '".$_SESSION['admin']."' ORDER BY id DESC");
                    $select_stmt->execute();
                    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                    {
                ?>
                <div class="container_myAnnonce">
                    <img src="public/upload/<?php echo $row['image_file']; ?>" alt="Aperçu de l'annonce">
                    <a href="#">
                        <div class="show_ico"><i class="fas fa-external-link-alt"></i></div>
                    </a>
                    <div class="textContent_My">
                        <h3><?php echo $row['titre']; ?></h3>
                        <p class="flm"><?php echo $row['description']; ?></p>
                    </div>
                    <div class="btn-container-show">
                        <a href="modification.php?id=<?= $row['id']?>"><button class="btn btn-showAnnonce" type="submit" name="profil">Modifier</button></a>
                    </div>
                </div>
                <?php
                    }
                ?>
                <div class="container_myFavoris">
                    <img src="public/images/1.jpg" alt="img" class="imgAnnonce">
                    <a href="#"><div class="show_ico"><i class="fas fa-external-link-alt"></i></div></a>
                    <div class="textContent_My">
                        <h3>Titre de l'annonce</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, nulla quaerat rerum harum minima dolores </p>
                    </div>
                    <div class="btn-container-show">
                        <button class="btn btn-showAnnonce" type="submit" name="profil">Modifier</button>
                    </div>
                </div>

                <div class="container_myFavoris">
                    <img src="public/images/1.jpg" alt="img" class="imgAnnonce">
                    <a href="#"><div class="show_ico"><i class="fas fa-external-link-alt"></i></div></a>
                    <div class="textContent_My">
                        <h3>Titre de l'annonce</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, nulla quaerat rerum harum minima dolores </p>
                    </div>
                    <div class="btn-container-show">
                        <button class="btn btn-showAnnonce" type="submit" name="profil">Modifier</button>
                    </div>
                </div>

                <div class="container_myFavoris">
                    <img src="public/images/1.jpg" alt="img" class="imgAnnonce">
                    <a href="#"><div class="show_ico"><i class="fas fa-external-link-alt"></i></div></a>
                    <div class="textContent_My">
                        <h3>Titre de l'annonce</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, nulla quaerat rerum harum minima dolores </p>
                    </div>
                    <div class="btn-container-show">
                        <button class="btn btn-showAnnonce" type="submit" name="profil">Modifier</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./public/js/menu.js"></script>
<?php    
    include('view/footer.php');
}    
?>