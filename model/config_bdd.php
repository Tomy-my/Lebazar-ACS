<?php

$host = "localhost";
$dbname = "lebazar";
$admin = "root";
$pass = "";

try{

    $db = new PDO("mysql:host=$host;dbname=$dbname", $admin, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die(print_r("erreur bdd:" .$e->getMessage()));
} 