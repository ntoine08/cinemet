<?php
    try
    {
     $bdd = new PDO('mysql:host=localhost;dbname=cinemets;charset=utf8mb4', 'sunjian', 'ichigo08', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e) 
    {
     die('Erreur '.$e->getMessage());
    }

    /*récupération des valeurs de champs
    $nom_film = $_POST["nom_film"];
    $date_de_sortie_film = $_POST["date_de_sortie_film"];
    $duree_film = $_POST["duree_film"];
    $img_film = $_POST["img_film"];
    $nationalite_film = $_POST["nationalite_film"];
    $synopsis_film = $_POST["synopsis_film"];*/

    //création de la requête sql
    $sql = "INSERT INTO films (nom_film, date_de_sortie_film, duree_film, img_film, nationalite_film, synopsis_film) VALUES ('fff', '2019-04-10', '01h 41min', 'img/test.jpg', 'fr', 'franchement c'est trop bien comme film en pdo !')";

    $bdd -> exec ($sql);
    echo "c'est super, c'est génial";

    
?>