<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>CINEMET</title>
    <!--pour relier mon css-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>

<body>

    <!--partie de la navbarre-->
    <ul class="index">
        <li><a class="accueil" href="index.php">CINEMET</a></li>
        <li><a href="films.php">FILMS</a></li>
        <li><a class="conn" href="user.php">CONNEXION</a></li>
    </ul>

    <!-- connection BDD -->
    <?php 

if(isset($_GET['ID_film'])); // pour vérifier que j'ai bien une valeur
{   
    include("connection.php"); // inclure la connection
    include("requete.php");     // inclure la requête
    while ($donnees = $reponse->fetch()) //boucle while pour afficher les données
    {       
?>

    <!--partie titre film-->

    <h4><?php echo $donnees['nom_film']; ?></h4> <!-- echo pour afficher le nom du film-->

    <!--partie descriptif film-->

    <div class="descriptif">
        <img src="<?php echo $donnees['img_film']; ?>">
        <p><?php echo $donnees['synopsis_film'];?></p>

        <ul>
            <li>Date de sortie: <?php echo $donnees['date_de_sortie_film'];?></li>
            <li>Durée: <?php echo $donnees['duree_film'];?></li>
            <li>Réalisateur: <?php echo $donnees['nom_realisateur'];?></li>
            <li>Acteur: <?php echo $donnees['nom_acteur'];?></li>
            <li>Genres: <?php echo $donnees['nom_genre'];?></li>
            <li>Nationalité: <?php echo $donnees['nationalite_film'];?></li>
        </ul>
    </div>

    <!--partie footer-->

    <footer id="footer">
         
         <ul class="premierul"> <!-- première liste pour le copyright-->
         <li>© 2019 Copyright: AllocineMET</li>
         </ul>

         <ul class="deuxiemeul"> <!-- 2eme liste pour les coordonnées-->
             <li>Contact</li><br>
             <li>AllocineMET</li><br>
             <li>12, rue des cacahuètes</li><br>
             <li>www.AllocineMET.net</li><br>
             <li>TEL +33 6 52 50 05 35</li><br>
             <li>TEL +33 6 87 26 69 70</li>
         </ul>

        
         <ul class="troisiemeul"> <!-- 3eme liste pour les logos-->
             <li><a href="https://www.facebook.com/"><img src="images/facebook.png"></a>&nbsp<a href="https://twitter.com/"><img src="images/twitter.png"></a></li>
             <li><a href="https://fr.linkedin.com/"><img src="images/linkedin.png"></a>&nbsp<a href="https://github.com/"><img src="images/github.png"></a></li>
             
         </ul>
     </footer>


    </div>

    <?php
    }
    $reponse->closeCursor(); // pour fermer une fois qu'on a afficher tout ce qu'on voulais de la base de donnée
}

    ?>
</body>