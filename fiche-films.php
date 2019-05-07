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


    <!-- connection BDD -->
    <?php 


if(isset($_GET['ID_film'])) // pour vérifier que j'ai bien une valeur
{
    
    include("connection.php"); // inclure la connection
    include("requête.php");     // inclure la requête
    while ($donnees = $reponse->fetch()) //boucle while pour afficher les données
    {
        
?>

    <!--partie de la navbarre-->
    <ul class="index">
        <li><a class="accueil" href="index.php">CINEMET</a></li>
        <li><a href="films.php">FILMS</a></li>
        <li><a href="fiche-films.php">FICHE FILMS</a></li>
        <li><a href="réalisateurs.php">REALISATEURS</a></li>
        <li><a href="acteurs.php">ACTEURS</a></li>
    </ul>

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
        <ul>
            <li>AllocineMET</li>
            <br>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
        </ul>

        <ul>
            <li>Films à l'affiche</li><br>
            <li>Film 1</li><br>
            <li>Film 2</li><br>
            <li>Film 3</li><br>
            <li>Film 4</li>
        </ul>

        <ul>
            <li>Lien utiles</li><br>
            <li>Lorem Ipsum</li><br>
            <li>Lorem Ipsum</li><br>
            <li>Lorem Ipsum</li><br>
            <li>Lorem Ipsum</li>
        </ul>

        <ul>
            <li>Contact</li><br>
            <li>AllocineMET</li><br>
            <li>www.AllocineMET.net</li><br>
            <li>TEL +33 6 52 50 05 35</li><br>
            <li>TEL +33 6 87 26 69 70</li>
        </ul>

    </footer>
    <div class="footer-b">
        <hr>

        <p>© 2019 Copyright: AllocineMET</p>
        <ul>
            <li><img src="images/facebook.png"></li>
            <li><img src="images/linkedin.png"></li>
            <li><img src="images/twitter.png"></li>
            <li><img src="images/github.png"></li>
        </ul>

    </div>

    <?php
    
       
    ?>

    <?php
    }
    $reponse->closeCursor(); // pour fermer une fois qu'on aafficher tout ce qu'on voulais de la base de donnée
}

    ?>

</body>