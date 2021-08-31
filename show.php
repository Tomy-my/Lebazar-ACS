<?php 
$titre = "Inscription";

include('view/header.php');

    include('view/navigation.php');
    
    require_once "model/config_bdd.php";

    if(isset($_REQUEST['id']))
    {
        try
        {
            $id = $_REQUEST['id']; 
            // $select_stmt = $db->prepare('SELECT * FROM annonce WHERE id =:id'); 
            $select_stmt = $db->prepare("SELECT * FROM annonce INNER JOIN utilisateur ON id_utilisateur = utilisateur.id WHERE annonce.id =:id "); 

            $select_stmt->bindParam(':id',$id);
            $select_stmt->execute(); 
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
        }
        catch(PDOException $e)
        {
            $e->getMessage();
        }
        
    }
?>
    <div class="page_annonce">
        <div class="annonce">
            <div class="annonceAll">
                <div class="_annonce">
                    <div class="_imgAnnonce" style="background-image: url('public/upload/<?php echo $row['image_file']; ?>');"> </div>
                    <div class="_txtAnnonce">
                        <div class="top">
                            <h2><?php echo $row['titre']; ?></h2>
                            <h3><?php echo $row['prix']; ?> €</h3>
                        </div>
                        <div class="middle">
                            <div class="_catAnnonce">
                                <?php echo $row['categorie']; ?>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                <?php echo $row['description']; ?>
                            </p>
                        </div>
                        <div class="_copyright">
                            <?php echo $row['prenom']; ?>&nbsp;<?php echo $row['nom']; ?>&nbsp;&nbsp;&nbsp;12/02/2020
                        </div>
                    </div>
                </div>
        </div> 

<?php    
include('view/footer.php');    
?>