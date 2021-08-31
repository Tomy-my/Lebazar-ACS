<?php 

require_once('./model/config_bdd.php');

if(isset($_REQUEST['btn_insert_add_annonce']))
{
	try
	{
		$titre			= $_REQUEST['titre'];	
		$categorie		= $_REQUEST['categorie'];	
		$description	= $_REQUEST['description'];	
		$prix	        = $_REQUEST['prix'];	

			
		$image_file	    = $_FILES["image_file"]["name"];
		$image_file2	= $_FILES["image_file2"]["name"];
		$image_file3	= $_FILES["image_file3"]["name"];

		$type		    = $_FILES["image_file"]["type"];	
		$type2		    = $_FILES["image_file2"]["type"];	
		$type3		    = $_FILES["image_file3"]["type"];

		$size		    = $_FILES["image_file"]["size"];
		$size2		    = $_FILES["image_file2"]["size"];
		$size3		    = $_FILES["image_file3"]["size"];

		$temp		    = $_FILES["image_file"]["tmp_name"];
		$temp2		    = $_FILES["image_file2"]["tmp_name"];
		$temp3		    = $_FILES["image_file3"]["tmp_name"];
		
		$path="public/upload/".$image_file; 
		$path2="public/upload/".$image_file2; 
		$path3="public/upload/".$image_file3; 
		

		if(empty($titre)){
			$errorMsg="Please Enter titre";
		}

        if(empty($categorie)){
			$errorMsg="Please Enter ht";
		}

        if(empty($description)){
			$errorMsg="Please Enter eree";
		}


		if(empty($image_file)){
			$errorMsg="Please Select Image";
		}
		else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
		{	
			if(!file_exists($path)) //Regarde si l'image existe dans /upload 
			{
				if($size < 5000000) //Fichié maximum
				{
					move_uploaded_file($temp, "public/upload/" .$image_file); 
				}
				else
				{
					$errorMsg="Image trop grosse, maximum 5mb"; 
				}
			}
			else
			{	
				$errorMsg="Image déjà existante"; 
			}
		}
		else
		{
			$errorMsg="Mauvais format d'image ! choissiez seulement [JPG] - [JPEG] - [PNG] - [GIF]"; 
		}

        if(empty($image_file2)){
			$errorMsg="Please Select Image";
		}
		else if($type2=="image/jpg" || $type2=='image/jpeg' || $type2=='image/png' || $type2=='image/gif') 
		{	
			if(!file_exists($path2)) //Regarde si l'image existe dans /upload 
			{
				if($size2 < 5000000) //Fichié maximum
				{
					move_uploaded_file($temp2, "public/upload/" .$image_file2); 
				}
				else
				{
					$errorMsg="Image trop grosse, maximum 5mb"; 
				}
			}
			else
			{	
				$errorMsg="Image déjà existante"; 
			}
		}
		else
		{
			$errorMsg="Mauvais format d'image ! choissiez seulement [JPG] - [JPEG] - [PNG] - [GIF]"; 
		}

        if(empty($image_file3)){
			$errorMsg="Please Select Image";
		}
		else if($type3=="image/jpg" || $type3=='image/jpeg' || $type3=='image/png' || $type3=='image/gif') 
		{	
			if(!file_exists($path3)) //Regarde si l'image existe dans /upload 
			{
				if($size2 < 5000000) //Fichié maximum
				{
					move_uploaded_file($temp3, "public/upload/" .$image_file3); 
				}
				else
				{
					$errorMsg="Image trop grosse, maximum 5mb"; 
				}
			}
			else
			{	
				$errorMsg="Image déjà existante"; 
			}
		}
		else
		{
			$errorMsg="Mauvais format d'image ! choissiez seulement [JPG] - [JPEG] - [PNG] - [GIF]"; 
		}
		
		if(!isset($errorMsg))
		{
            $id_utilisateur =  $_SESSION['admin'];
			$insert_stmt=$db->prepare('INSERT INTO annonce(id_utilisateur,titre,categorie,description,image_file,image_file2,image_file3,prix) VALUES(:id_utilisateur,:titre,:categorie,:description,:image_file,:image_file2,:image_file3,:prix)');				
            $insert_stmt->bindParam(':id_utilisateur',$id_utilisateur);	 
            $insert_stmt->bindParam(':titre',$titre);	
			$insert_stmt->bindParam(':categorie',$categorie);	
			$insert_stmt->bindParam(':description',$description);	
			$insert_stmt->bindParam(':image_file',$image_file);	 
			$insert_stmt->bindParam(':image_file2',$image_file3);	 
			$insert_stmt->bindParam(':image_file3',$image_file2);	 
			$insert_stmt->bindParam(':prix',$prix);	 
		
			if($insert_stmt->execute())
			{
				header("refresh:0;./index.php"); 
			} 
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
} 