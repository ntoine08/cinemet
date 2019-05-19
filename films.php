<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>NOS FILMS</title>
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

    <!--partie films-->

    <div class="films">
        <h1>NOS FILMS</h1>
        <div class="partie-films-a">
            <input type="search" id="site-search">
            <button>Rechercher</button>

            <!--pour le menu acteurs-->
            <div class="dropdown">
                <button class="dropbtn">Acteurs</button>
                <div class="dropdown-content">
                    <a href="acteurs.php?ID_acteur=1">Brie Larson</a>
                    <a href="acteurs.php?ID_acteur=2">Robert Downey jr</a>
                    <a href="acteurs.php?ID_acteur=3">Eva Green</a>
                    <a href="acteurs.php?ID_acteur=4">Marc Lavoine</a>
                    <a href="acteurs.php?ID_acteur=5">Jason Clark</a>
                    <a href="acteurs.php?ID_acteur=6">Atsumi Tanezaki</a>
                    <a href="acteurs.php?ID_acteur=7">Christian Clavier</a>
                </div>
            </div>

            <!--pour le menu RÉALISATEUR-->
            <div class="dropdown">
                <button class="dropbtn">Réalisateurs</button>
                <div class="dropdown-content">
                    <a href="realisateurs.php?ID_realisateur=1">Anna Boden</a>
                    <a href="realisateurs.php?ID_realisateur=2">Joe Russo</a>
                    <a href="realisateurs.php?ID_realisateur=3">Tim Burton</a>
                    <a href="realisateurs.php?ID_realisateur=4">David Feiss</a>
                    <a href="realisateurs.php?ID_realisateur=5">Kévin Kolsch</a>
                    <a href="realisateurs.php?ID_realisateur=6">Naoko Yamada</a>
                    <a href="realisateurs.php?ID_realisateur=7">Bertrand Blier</a>
                </div>
            </div>

            <!--pour le menu action-->
            <div class="dropdown">
                <button class="dropbtn">Action</button>
                <div class="dropdown-content">
                    <a href="#">Top 2019</a>
                    <a href="#">Meilleurs films</a>
                    <a href="#">Box office</a>
                    <a href="#">Tous les films</a>
                </div>
            </div>

            <!--pour le menu famille-->

            <div class="dropdown">
                <button class="dropbtn">Famille</button>
                <div class="dropdown-content">
                    <a href="#">Top 2019</a>
                    <a href="#">Meilleurs films</a>
                    <a href="#">Box office</a>
                    <a href="#">Tous les films</a>
                </div>
            </div>

            <!--pour le menu animation-->

            <div class="dropdown">
                <button class="dropbtn">Animation</button>
                <div class="dropdown-content">
                    <a href="#">Top 2019</a>
                    <a href="#">Meilleurs films</a>
                    <a href="#">Box office</a>
                    <a href="#">Tous les films</a>
                </div>
            </div>

            <!--pour le menu épouvante horreur-->

            <div class="dropdown">
                <button class="dropbtn">Epouvante-horreur</button>
                <div class="dropdown-content">
                    <a href="#">Top 2019</a>
                    <a href="#">Meilleurs films</a>
                    <a href="#">Box office</a>
                    <a href="#">Tous les films</a>
                </div>
            </div>

            <!--pour le menu science fiction-->

            <div class="dropdown">
                <button class="dropbtn">Science-fiction</button>
                <div class="dropdown-content">
                    <a href="#">Top 2019</a>
                    <a href="#">Meilleurs films</a>
                    <a href="#">Box office</a>
                    <a href="#">Tous les films</a>
                </div>
            </div>

            <!--pour le menu Drame-->

            <div class="dropdown">
                <button class="dropbtn">Drame</button>
                <div class="dropdown-content">
                    <a href="#">Top 2019</a>
                    <a href="#">Meilleurs films</a>
                    <a href="#">Box office</a>
                    <a href="#">Tous les films</a>
                </div>
            </div>

            <!--pour le menu comédie-->

            <div class="dropdown">
                <button class="dropbtn">Comédie</button>
                <div class="dropdown-content">
                    <a href="#">Top 2019</a>
                    <a href="#">Meilleurs films</a>
                    <a href="#">Box office</a>
                    <a href="#">Tous les films</a>
                </div>
            </div>
        </div>

        <!--bloc affiches-->

        <div class="partie-films-b">
            <h3>Nouveautés</h3>
            <a href="fiche-films.php?ID_film=2"><img src="affiches/affiche-avengers.jpg" width="20" height="20"></a> <!--href avec le php pour relier l'image à la base de donnée quand je clique dessus et afficher le bon film quand je clique dessus-->
            <a href="fiche-films.php?ID_film=7"><img src="affiches/affiche-convoi.jpg"></a>
            <a href="fiche-films.php?ID_film=3"><img src="affiches/affiche-dumbo.jpg"></a>
            <a href="fiche-films.php?ID_film=6"><img src="affiches/affiche-liz.jpg"></a>
            <a href="fiche-films.php?ID_film=1"><img src="affiches/affiche-marvel.jpg"></a>
            <a href="fiche-films.php?ID_film=4"><img src="affiches/affiche-parc.jpg"></a>
            <a href="fiche-films.php?ID_film=5"><img src="affiches/affiche-simetierre.jpg"></a>
        </div>
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
</body>

</html>