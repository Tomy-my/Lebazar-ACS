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
                <a href="./index.php">
                    <i class="fas fa-book-open"></i>&nbsp;
                    Annonce
                </a>
                <hr>
            </div>

            <div id="sn_favoris" >
                <a href="./index.php">
                    <i class="fas fa-heart"></i>&nbsp;
                    Favoris
                </a>
                <hr>
            </div>

            <div id="sn_deco" >
                <a href="./account.php">
                    <i class="fas fa-sign-out-alt"></i>&nbsp;
                    Déconnexion
                </a>
                <hr>
            </div>

        </div>
            <div class="sous_container_settings">
                <div class="settings">
                    <div class="img_profil">
                        <div class="edit_picture">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                    </div>
                    <h4 id="pseudo_acc">Pseudonyme</h4>
                    <hr>
                    <ul>
                        <li>Prénom&nbsp;Nom</li>
                        <li>Adresse E-mail</li>
                        <li>Naissance : 25/02/1548</li>
                    </ul>
                    <button class="btn btn-edit_profil btn-primary" type="submit" name="Modiffier le profil">Modiffier le profil</button>
                </div>
                <div class="my_annonce">
                    <div class="container_myAnnonce">
                        <img src="public/images/2.png" alt="img" class="imgAnnonce">
                        <div class="bottom">
                        <h3>Titre de l'annonce</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, nulla quaerat rerum harum minima dolores </p>
                        </div>
                        <div class="btn-container-show">
                        <button class="btn btn-showAnnonce btn-primary" type="submit" name="profil">Voir l'annonce</button>
                        </div>
                    </div>
 
                    <div class="container_myAnnonce">
                        <img src="public/images/2.png" alt="img" class="imgAnnonce">
                        <div class="bottom">
                        <h3>Titre de l'annonce</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, nulla quaerat rerum harum minima dolores </p>
                        </div>
                        <div class="btn-container-show">
                        <button class="btn btn-showAnnonce btn-primary" type="submit" name="profil">Voir l'annonce</button>
                        </div>
                    </div>

                    <div class="container_myAnnonce">
                        <img src="public/images/1.jpg" alt="img" class="imgAnnonce">
                        <div class="bottom">
                        <h3>Titre de l'annonce</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, nulla quaerat rerum harum minima dolores </p>
                        </div>
                        <div class="btn-container-show">
                        <button class="btn btn-showAnnonce btn-primary" type="submit" name="profil">Voir l'annonce</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<?php    
    include('view/footer.php');
}    
?>