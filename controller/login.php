  
<?php
session_start();
if(isset($_POST['submit'])){
 if(isset($_POST['email']) and !empty($_POST['email'])){
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
   if(isset($_POST['password']) and !empty($_POST['password'])){

        require "./model/config_bdd.php";

        $password =sha1($_POST['password']);

        $getdata = $db->prepare("SELECT id, email FROM utilisateur WHERE email=? and password = ?");
        $getdata->execute(array($_POST['email'], $password));

        $rows = $getdata->rowCount();
        $row = $getdata->fetch(PDO::FETCH_ASSOC);
 
        if($rows==true){

            $_SESSION['admin']=$row['id'];
            
            header("Location:./account.php");

        }else{
            $erreur = "E-mail ou mot de passe inconnus";
        }

        }else{
            $erreur = "Veuillez saisir votre mot de passe";
        }

        }else{
            $erreur = "Veuillez saisir une adresse mail valide";
        }    

        }else{
         $erreur = "Veuillez saisir un nom d'utilisateur valide";
}
}