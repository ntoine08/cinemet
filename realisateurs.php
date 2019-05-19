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

    <!--PARTIE DESCRIPTIF DE L'ACTEUR-->

    <?php 

        include("connection.php"); // inclure la connection
        $realisateur = $bdd->query('SELECT * FROM `realisateur` WHERE ID_realisateur = '.$_GET["ID_realisateur"].'');
        //$realisateur = $bdd->query("SELECT * FROM `realisateur` WHERE ID_realisateur = 3");

        if(isset($_GET['ID_realisateur']));// pour vérifier que j'ai bien une valeur
        { 
            while ($donnes = $realisateur->fetch())
            {               

    ?>

    <div class="nom-acteur">
        <h5><?php echo $donnes['nom_realisateur']; ?></h5>
    </div>

    <div class="acteur">

        <div class="liste">
            <div class="identité">
                <h6>Date de naissance</h6>
                <p><?php echo $donnes['date_de_naissance_realisateur']; ?></p>
            </div>
            <div class="identité">
                <h6>Lieu de naissance</h6>
                <p><?php echo $donnes['lieu_de_naissance_realisateur']; ?></p>
            </div>
            <div class="identité">
                <h6>Nationalité</h6>
                <p><?php echo $donnes['nationalite_realisateur']; ?></p>
            </div>
            <div class="identité">
                <h6>Filmographie</h6>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </div>
        </div>

        <div class="photo">
            <img src="<?php echo $donnes['img_realisateur']; ?>" height="500">
        </div>
    </div>

    <div class="biographie">
        <h6>Biographie</h6>
        <p><?php echo $donnes['biographie_realisateur']; ?></p>
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

</html>