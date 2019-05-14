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
        
    </ul>

    <!--PARTIE DESCRIPTIF DE L'ACTEUR-->



    <?php 

        include("connection.php"); // inclure la connection
        $realisateur = $bdd->query("SELECT * FROM `realisateur` WHERE realisateur.ID_realisateur = '.$_GET["ID_realisateur"].'");
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
                <p></p>
            </div>
            <div class="identité">
                <h6>Lieu de naissance</h6>
                <p></p>
            </div>
            <div class="identité">
                <h6>Nationalité</h6>
                <p></p>
            </div>
            <div class="identité">
                <h6>Filmographie</h6>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </div>
        </div>

        <div class="photo">
            <img src="réalisateurs/joe-russo.jpg" height="500">
        </div>
    </div>

    <div class="biographie">
        <h6>Biographie</h6>
        <p></p>
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
    }
    $reponse->closeCursor(); // pour fermer une fois qu'on a afficher tout ce qu'on voulais de la base de donnée
        }
    ?>


</body>

</html>