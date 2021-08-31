<?php 

require_once('./model/config_bdd.php');

if(isset($_REQUEST['id']))
{
    try
    {
        $id = $_REQUEST['id']; 
        $select_stmt = $db->prepare('SELECT * FROM annonce WHERE id =:id'); 
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

if(isset($_REQUEST['btn_update']))

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

        $directory="upload/";
		

		if(empty($titre)){
			$errorMsg="Please Enter titre";
		}

        if(empty($categorie)){
			$errorMsg="Please Enter ht";
		}

        if(empty($description)){
			$errorMsg="Please Enter eree";
		}


		if($image_file)
		{
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
			{	
				if(!file_exists($path)) 
				{
					if($size < 5000000) 
					{
						unlink($directory.$row['image']); 
						move_uploaded_file($temp, "upload/" .$image_file);	
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
		}
		else
		{
			$image_file=$row['image']; //Si aucune image est selectionné alors on laisse l'anciennce 
		}
	

        if($image_file2)
		{
			if($type2=="image/jpg" || $type2=='image/jpeg' || $type2=='image/png' || $type2=='image/gif') 
			{	
				if(!file_exists($path2)) 
				{
					if($size2 < 5000000) 
					{
						unlink($directory.$row['image']); 
						move_uploaded_file($temp2, "upload/" .$image_file2);	
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
		}
		else
		{
			$image_file2=$row['image']; //Si aucune image est selectionné alors on laisse l'anciennce 
		}

        if($image_file3)
		{
			if($type3=="image/jpg" || $type3=='image/jpeg' || $type3=='image/png' || $type3=='image/gif') 
			{	
				if(!file_exists($path3)) 
				{
					if($size3 < 5000000) 
					{
						unlink($directory.$row['image']); 
						move_uploaded_file($temp3, "upload/" .$image_file3);	
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
		}
		else
		{
			$image_file3=$row['image']; //Si aucune image est selectionné alors on laisse l'anciennce 
		}
		
		if(!isset($errorMsg))
		{
            $id_utilisateur =  $_SESSION['admin'];
			$update_stmt=$db->prepare('UPDATE annonce SET titre=:titre_up, categorie=:categorie_up, description=:description_up, image_file=:image_file_up, image_file2=:image_file2_up, image_file3=:image_file3_up, prix=:prix_up WHERE id=:id');				
            $update_stmt->bindParam(':titre_up',$titre);	
			$update_stmt->bindParam(':categorie_up',$categorie);	
			$update_stmt->bindParam(':description_up',$description);	
			$update_stmt->bindParam(':image_file_up',$image_file);	 
			$update_stmt->bindParam(':image_file2_up',$image_file3);	 
			$update_stmt->bindParam(':image_file3_up',$image_file2);	 
			$update_stmt->bindParam(':prix_up',$prix);
            $update_stmt->bindParam(':id',$id);	

		
			if($update_stmt->execute())
			{
				header("refresh:0;./account.php"); 
			}
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
} 