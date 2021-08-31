<?php
$titre = "Inscription";

include('view/header.php');

include('view/navigation.php');

require_once("model/config_bdd.php");


?>
<div class="page_annonce">
    <div class="_sous_nav">

        <div id="annonce_sn_annonce">
            <i class="far fa-list-alt"></i>&nbsp;
            Annonce
            <hr id="hr_annonce" style="background-color: #f50;">
        </div>

        <div id="catCar">
            <i class="fas fa-car-side"></i>&nbsp;
            Voitures
            <hr id="hr_catCar">
        </div>

        <div id="catBike">
            <i class="fas fa-motorcycle"></i>&nbsp;
            Motos
            <hr id="hr_catBike">
        </div>

        <div id="catBoat">
            <i class="fas fa-anchor"></i>&nbsp;
            Nautiques
            <hr id="hr_catBoat">
        </div>

        <div id="catHouse">
            <i class="fas fa-building"></i>&nbsp;
            Maisons
            <hr id="hr_catHouse">
        </div>

        <div id="catOther">
            <i class="fas fa-folder-open"></i>&nbsp;
            Autres
            <hr id="hr_catOther">
        </div>
    </div>


    <div class="annonce">
        <div class="annonceAll">
            <?php

            $select_stmt = $db->prepare("SELECT annonce.id AS id_select, titre, categorie, description, image_file, prix, prenom, nom FROM annonce INNER JOIN utilisateur ON id_utilisateur = utilisateur.id ORDER BY annonce.id DESC");
            $select_stmt->execute();

            while ($rowAll = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="_annonce">
                    <div class="_imgAnnonce" style="background-image: url('public/upload/<?php echo $rowAll['image_file']; ?>');"> </div>
                    <div class="_txtAnnonce">
                        <div class="top">
                            <h2><a href="show.php?id=<?= $rowAll['id_select']?>"><?php echo $rowAll['titre']; ?></a></h2>
                            <h3><?php echo $rowAll['prix']; ?> €</h3>
                        </div>
                        <div class="middle">
                            <div class="_catAnnonce">
                                <?php echo $rowAll['categorie']; ?>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                <?php echo $rowAll['description']; ?>
                            </p>
                        </div>
                        <div class="_copyright">
                            <?php echo $rowAll['prenom']; ?>&nbsp;<?php echo $rowAll['nom']; ?>&nbsp;&nbsp;&nbsp;12/02/2020
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>


        <div class="ct_annonceCar">
            <?php

            $select_stmt = $db->prepare("SELECT annonce.id AS id_select, titre, categorie, description, image_file, prix, prenom, nom FROM annonce INNER JOIN utilisateur ON id_utilisateur = utilisateur.id WHERE categorie LIKE 'Voiture' ORDER BY annonce.id DESC");
            $select_stmt->execute();

            while ($row2 = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="_annonce">
                    <div class="_imgAnnonce" style="background-image: url('public/upload/<?php echo $row2['image_file']; ?>');"> </div>
                    <div class="_txtAnnonce">
                        <div class="top">
                            <h2><a href="show.php?id=<?= $row2['id_select']?>"><?php echo $row2['titre']; ?></a></h2>
                            <h3><?php echo $row2['prix']; ?> €</h3>
                        </div>
                        <div class="middle">
                            <div class="_catAnnonce">
                                <?php echo $row2['categorie']; ?>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                <?php echo $row2['description']; ?>
                            </p>
                        </div>
                        <div class="_copyright">
                            <?php echo $row2['prenom']; ?>&nbsp;<?php echo $row2['nom']; ?>&nbsp;&nbsp;&nbsp;12/02/2020
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="ct_annonceBike">
            <?php

            $select_stmt = $db->prepare("SELECT annonce.id AS id_select, titre, categorie, description, image_file, prix, prenom, nom FROM annonce INNER JOIN utilisateur ON id_utilisateur = utilisateur.id WHERE categorie LIKE 'Moto' ORDER BY annonce.id DESC");
            $select_stmt->execute();

            while ($row3 = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="_annonce">
                    <div class="_imgAnnonce" style="background-image: url('public/upload/<?php echo $row3['image_file']; ?>');"> </div>
                    <div class="_txtAnnonce">
                        <div class="top">
                            <h2><a href="show.php?id=<?= $row3['id_select']?>"><?php echo $row3['titre']; ?></a></h2>
                            <h3><?php echo $row3['prix']; ?> €</h3>
                        </div>
                        <div class="middle">
                            <div class="_catAnnonce">
                                <?php echo $row3['categorie']; ?>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                <?php echo $row3['description']; ?>
                            </p>
                        </div>
                        <div class="_copyright">
                            <?php echo $row3['prenom']; ?>&nbsp;<?php echo $row3['nom']; ?>&nbsp;&nbsp;&nbsp;12/02/2020
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="ct_annonceBoat">
            <?php

            $select_stmt = $db->prepare("SELECT annonce.id AS id_select, titre, categorie, description, image_file, prix, prenom, nom FROM annonce INNER JOIN utilisateur ON id_utilisateur = utilisateur.id WHERE categorie LIKE 'Nautique' ORDER BY annonce.id DESC");
            $select_stmt->execute();

            while ($row4 = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="_annonce">
                    <div class="_imgAnnonce" style="background-image: url('public/upload/<?php echo $row4['image_file']; ?>');"> </div>
                    <div class="_txtAnnonce">
                        <div class="top">
                            <h2><a href="show.php?id=<?= $row4['id_select']?>"><?php echo $row4['titre']; ?></a></h2>
                            <h3><?php echo $row4['prix']; ?> €</h3>
                        </div>
                        <div class="middle">
                            <div class="_catAnnonce">
                                <?php echo $row4['categorie']; ?>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                <?php echo $row4['description']; ?>
                            </p>
                        </div>
                        <div class="_copyright">
                            <?php echo $row4['prenom']; ?>&nbsp;<?php echo $row4['nom']; ?>&nbsp;&nbsp;&nbsp;12/02/2020
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="ct_annonceHouse">
            <?php

            $select_stmt = $db->prepare("SELECT annonce.id AS id_select, titre, categorie, description, image_file, prix, prenom, nom FROM annonce INNER JOIN utilisateur ON id_utilisateur = utilisateur.id WHERE categorie LIKE 'Maison' ORDER BY annonce.id DESC");
            $select_stmt->execute();

            while ($row5 = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="_annonce">
                    <div class="_imgAnnonce" style="background-image: url('public/upload/<?php echo $row5['image_file']; ?>');"> </div>
                    <div class="_txtAnnonce">
                        <div class="top">
                            <h2><a href="show.php?id=<?= $row5['id_select']?>"><?php echo $row5['titre']; ?></a></h2>
                            <h3><?php echo $row5['prix']; ?> €</h3>
                        </div>
                        <div class="middle">
                            <div class="_catAnnonce">
                                <?php echo $row5['categorie']; ?>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                <?php echo $row5['description']; ?>
                            </p>
                        </div>
                        <div class="_copyright">
                            <?php echo $row5['prenom']; ?>&nbsp;<?php echo $row5['nom']; ?>&nbsp;&nbsp;&nbsp;12/02/2020
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="ct_annonceOther">
            <?php

            $select_stmt = $db->prepare("SELECT annonce.id AS id_select, titre, categorie, description, image_file, prix, prenom, nom FROM annonce INNER JOIN utilisateur ON id_utilisateur = utilisateur.id WHERE categorie LIKE 'Autre' ORDER BY annonce.id DESC");
            $select_stmt->execute();

            while ($row6 = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="_annonce">
                    <div class="_imgAnnonce" style="background-image: url('public/upload/<?php echo $row6['image_file']; ?>');"> </div>
                    <div class="_txtAnnonce">
                        <div class="top">
                            <h2><a href="show.php?id=<?= $row6['id_select']?>"><?php echo $row6['titre']; ?></a></h2>
                            <h3><?php echo $row6['prix']; ?> €</h3>
                        </div>
                        <div class="middle">
                            <div class="_catAnnonce">
                                <?php echo $row6['categorie']; ?>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                <?php echo $row6['description']; ?>
                            </p>
                        </div>
                        <div class="_copyright">
                            <?php echo $row6['prenom']; ?>&nbsp;<?php echo $row6['nom']; ?>&nbsp;&nbsp;&nbsp;12/02/2020
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="./public/js/cat.js"></script>

<?php
include('view/footer.php');
?>