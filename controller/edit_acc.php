<?php
require_once('./model/config_bdd.php');

if(isset($_SESSION['admin']))
{
    try
    {
        $id = $_SESSION['admin'];
        $select_stmt = $db->prepare('SELECT * FROM utilisateur WHERE id =:id'); 
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

if(isset($_REQUEST['btn_update_acc'])) 
{
try
{
    $prenom			= htmlspecialchars($_REQUEST['prenom']);	
    $nom			= htmlspecialchars($_REQUEST['nom']);	
    $naissance		= htmlspecialchars($_REQUEST['naissance']);	
    $pseudo			= htmlspecialchars($_REQUEST['pseudo']);	
    $email		    = htmlspecialchars($_REQUEST['email']);	
    
    if(!isset($errorMsg))
    {
        $update_stmt=$db->prepare('UPDATE utilisateur SET prenom=:prenom_up, nom=:nom_up, naissance=:naissance_up, pseudo=:pseudo_up, email=:email_up WHERE id=:id');			
        $update_stmt->bindParam(':prenom_up',$prenom);	
        $update_stmt->bindParam(':nom_up',$nom);	
        $update_stmt->bindParam(':naissance_up',$naissance);	
        $update_stmt->bindParam(':pseudo_up',$pseudo);	
        $update_stmt->bindParam(':email_up',$email);
        $update_stmt->bindParam(':id',$id);	
         
        if($update_stmt->execute())
        {
            header("refresh:0; account.php");
        }
    }
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

}


