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
        <li><a href="fiche-films.php">FICHE FILMS</a></li>
        <li><a href="réalisateurs.php">REALISATEURS</a></li>
        <li><a href="acteurs.php">ACTEURS</a></li>
    </ul>

    <!--partie films-->

    <div class="films">
        <h1>NOS FILMS</h1>
        <div class="partie-films-a">
            <input type="search" id="site-search">
            <button>Rechercher</button>

            <!--pour le menu action-->
            <div class="dropdown">
                <button class="dropbtn">Action</button>
                <div class="dropdown-content">
                    <a href="#">Top 2019</a>
                    <a href="#">Meilleurs films</a>
                    <a href="#">BoSx office</a>
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
            <img src="affiches/affiche-avengers.jpg" width="20" height="20">
            <img src="affiches/affiche-convoi.jpg">
            <img src="affiches/affiche-dumbo.jpg">
            <img src="affiches/affiche-liz.jpg">
            <a href="fiche-films.php?id=1"><img src="affiches/affiche-marvel.jpg"></a>
            <img src="affiches/affiche-parc.jpg">
            <img src="affiches/affiche-simetierre.jpg">



        </div>
    </div>





        <!--partie footer-->

        <footer id="footer">
            <ul>
                <li>AllocineMET</li>
                <br>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam,
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
</body>

</html>