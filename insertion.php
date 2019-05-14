<?php
    $cnx = mysql_connect("localhost", "sunjian", "ichigo08"); // inclure la connection

    //SÉLECTION DE LA BASE DE DONNÉES
    $db = mysql_select_db("cinemets");

    //récupération des valeurs de champs
    $nom_film = $_POST["nom_film"];
    $date_de_sortie_film = $_POST["date_de_sortie_film"];
    $duree_film = $_POST["duree_film"];
    $img_film = $_POST["img_film"];
    $nationalite_film = $_POST["nationalite_film"];
    $synopsis_film = $_POST["synopsis_film"];

    //création de la requête sql
    $sql = "INSERT INTO films (nom_film, date_de_sortie_film, duree_film, img_film, nationalite_film, synopsis_film) VALUES ('$nom_film', '$date_de_sortie_film', '$duree_film', '$img_film', '$nationalite_film', '$synopsis_film')";

    //execution de la requête
    $requete = mysql_query($sql, $cnx) or die(mysql_error());

    //affichage des résultats, pour savoir si ça a marché
    if($requete)
    {
        echo("insertion correcte");
    }
    else
    {
        echo("insertion echec");
    }

?>