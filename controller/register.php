<?php 

require_once('./model/config_bdd.php');

if(isset($_REQUEST['btn_insert_register']))
{
	try
	{
		$prenom			= $_REQUEST['prenom'];	
		$nom			= $_REQUEST['nom'];	
		$naissance		= $_REQUEST['naissance'];	
		$pseudo			= $_REQUEST['pseudo'];	
		$email		    = $_REQUEST['email'];	
		$password		= sha1($_REQUEST['password']);	

		
		if(empty($prenom)){
			$errorMsg="Please Enter titre";
		}

		else if(empty($nom)){
			$errorMsg="Please Select Image";
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