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
                <a href="./account.php">
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
                <h4 id="pseudo_acc">Tomymy</h4>
                <button class="btn btn-edit_profil " type="submit" name="Modiffier le profil">Modiffier le profil</button></li>
            </div>

            <div class="my_annonce">
                <div class="container_myAnnonce">
                    <img src="public/images/2.png" alt="Aperçu de l'annonce">
                    <a href="#">
                        <div class="show_ico"><i class="fas fa-external-link-alt"></i></div>
                    </a>
                    <div class="textContent_My">
                        <h3>Titre de l'annonce</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, nulla quaerat rerum harum minima dolores </p>
                    </div>
                    <div class="btn-container-show">
                        <button class="btn btn-showAnnonce" type="submit" name="profil">Modifier</button>
                    </div>
                </div>

                <div class="container_myAnnonce">
                    <img src="public/images/2.png" alt="img" class="imgAnnonce">
                    <a href="#"><div class="show_ico"><i class="fas fa-external-link-alt"></i></div></a>
                    <div class="textContent_My">
                        <h3>Titre de l'annonce</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, nulla quaerat rerum harum minima dolores </p>
                    </div>
                    <div class="btn-container-show">
                        <button class="btn btn-showAnnonce" type="submit" name="profil">Modifier</button>
                    </div>
                </div>

                <div class="container_myAnnonce">
                    <img src="public/images/2.png" alt="img" class="imgAnnonce">
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
                    <img src="public/images/2.png" alt="img" class="imgAnnonce">
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
                    <img src="public/images/2.png" alt="img" class="imgAnnonce">
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
                    <img src="public/images/2.png" alt="img" class="imgAnnonce">
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