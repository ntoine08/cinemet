<?php
    try
    {
     $bdd = new PDO('mysql:host=localhost;dbname=cinemets;charset=utf8mb4', 'sunjian', 'ichigo08', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e) 
    {
     die('Erreur '.$e->getMessage());
    }

    //variable pour poster les données
    $nomfilm = $_POST['nom_film'];
    $sortie = $_POST['date_de_sortie_film'];
    $duree = $_POST['duree_film'];
    $imgfilm = $_POST['img_film'];
    $nationalitefilm = $_POST['nationalite_film'];
    $synopsis = $_POST['synopsis_film'];

    // requête pour envoyer les données

    $sql = $bdd->prepare("INSERT INTO films (nom_film, date_de_sortie_film, duree_film, img_film, nationalite_film, synopsis_film) VALUES ('$nomfilm', '$sortie', '$duree', '$imgfilm', '$nationalitefilm', '$synopsis')");

    $sql->execute();

    echo "c'est super, c'est génial";

    
?>