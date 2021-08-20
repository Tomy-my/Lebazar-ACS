<?php 

require_once('./model/config_bdd.php');

if(isset($_REQUEST['btn_insert_register']))
{
	try
	{
		$prenom			= htmlspecialchars($_REQUEST['prenom']);	
		$nom			= htmlspecialchars($_REQUEST['nom']);	
		$naissance		= htmlspecialchars($_REQUEST['naissance']);	
		$pseudo			= htmlspecialchars($_REQUEST['pseudo']);	
		$email		    = htmlspecialchars($_REQUEST['email']);	
		$password		= htmlspecialchars(sha1($_REQUEST['password']));	
		$confirm		= htmlspecialchars($_REQUEST['confirm']);	
    
		if(empty($prenom)){
			$errorMsg="Prénom manquant";
		}

		else if(empty($nom)){
			$errorMsg="Nom manquant";
		}
        else if(empty($naissance)){
			$errorMsg="Date de naissance manquante";
		}
        else if(empty($pseudo)){
			$errorMsg="Pseudo manquant";
		}	
        else if(empty($email)){
			$errorMsg="Adresse E-mail manquante";
		}	
        else if(empty($password)){
			$errorMsg="Mot de passe manquant";
		}	
        else if( $_POST['confirm'] != $_POST['password'] )
        {
            $errorMsg="Les mots de passe ne sont pas identiques";
             
        }			
		
		if(!isset($errorMsg))
		{
			$insert_stmt=$db->prepare('INSERT INTO utilisateur(prenom,nom,naissance,pseudo,email,password) VALUES(:prenom,:nom,:naissance,:pseudo,:email,:password)');				
			$insert_stmt->bindParam(':prenom',$prenom);	
			$insert_stmt->bindParam(':nom',$nom);	
			$insert_stmt->bindParam(':naissance',$naissance);	
			$insert_stmt->bindParam(':pseudo',$pseudo);	
			$insert_stmt->bindParam(':email',$email);	
			$insert_stmt->bindParam(':password',$password);	
		
			if($insert_stmt->execute())
			{
				header("refresh:1;index.php"); 
			}
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
} 