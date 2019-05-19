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

    <!--partie du premier slider-->

    <!-- Flickity HTML init -->

    <div class="carousel" data-flickity='{ "lazyLoad": true }'>
        <div class="carousel-cell">
            <img class="carousel-cell-image" data-flickity-lazyload="images/avengers-endgame.jpg" alt="tulip" />
        </div>
        <div class="carousel-cell">
            <img class="carousel-cell-image" data-flickity-lazyload="images/captain-marvel.jpg" alt="grapes" />
        </div>
        <div class="carousel-cell">
            <img class="carousel-cell-image" data-flickity-lazyload="images/dumbo.jpg" alt="raspberries" />
        </div>
        <div class="carousel-cell">
            <img class="carousel-cell-image" data-flickity-lazyload="images/le-parc-des-merveilles.jpg" alt="wolf" />
        </div>
        <div class="carousel-cell">
            <img class="carousel-cell-image" data-flickity-lazyload="images/liz-et-l'oiseau-bleu.jpg" alt="sea" />
        </div>
        <div class="carousel-cell">
            <img class="carousel-cell-image" data-flickity-lazyload="images/simetierre.jpg" alt="leaf droplets" />
        </div>
    </div>


    <!--partie du 2eme slider à l'affiche-->

    <div class="slide-d">
        <h1>A L'AFFICHE</h1>

        <div class="carousel mt-5" data-flickity>
            <div class="carousel-cell"><img class="img_caroussel" width="500px" src="affiches/affiche-avengers.jpg">
            </div>
            <div class="carousel-cell"><img class="img_caroussel" width="500px" src="affiches/affiche-convoi.jpg"></div>
            <div class="carousel-cell"><img class="img_caroussel" width="500px" src="affiches/affiche-dumbo.jpg"></div>
            <div class="carousel-cell"><img class="img_caroussel" width="500px" src="affiches/affiche-liz.jpg"></div>
            <div class="carousel-cell"><img class="img_caroussel" width="500px" src="affiches/affiche-marvel.jpg"></div>

            <div class="carousel-cell"><img class="img_caroussel" width="500px" src="affiches/affiche-parc.jpg"></div>
            <div class="carousel-cell"><img class="img_caroussel" width="500px" src="affiches/affiche-simetierre.jpg">
            </div>

        </div>
    </div>

    <!--partie paralax-->

    <div class="parallax"></div>

    <!--partie allocinemet-->
    <h2>ALLOCINEMET</h2>

    <div class="allo">

        <div class="salle"><img src="images/salle.jpg" height="400"></div>
        <div class="salle-b">
            <h3>LOREM IPSUM</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga error reiciendis repellat, aut quos
                culpa
                distinctio tempora a laudantium voluptatem eligendi possimus nesciunt quas maiores, asperiores
                beatae
                esse? Nulla, totam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
                eligendi
                repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
                quis?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
                eligendi
                repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
                quis?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
                eligendi
                repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
                quis?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita minus nisi sed cum, molestiae
                voluptates est voluptatibus architecto iusto molestias esse sapiente hic nulla quasi vel aperiam a
                ex tempora!</p>
        </div>
    </div>

    <!--partie footer-->

    <footer id="footer">

        <ul class="premierul">
            <!-- première liste pour le copyright-->
            <li>© 2019 Copyright: AllocineMET</li>
        </ul>

        <ul class="deuxiemeul">
            <!-- 2eme liste pour les coordonnées-->
            <li>Contact</li><br>
            <li>AllocineMET</li><br>
            <li>12, rue des cacahuètes</li><br>
            <li>www.AllocineMET.net</li><br>
            <li>TEL +33 6 52 50 05 35</li><br>
            <li>TEL +33 6 87 26 69 70</li>
        </ul>


        <ul class="troisiemeul">
            <!-- 3eme liste pour les logos-->
            <li><a href="https://www.facebook.com/"><img src="images/facebook.png"></a>&nbsp<a
                    href="https://twitter.com/"><img src="images/twitter.png"></a></li>
            <li><a href="https://fr.linkedin.com/"><img src="images/linkedin.png"></a>&nbsp<a
                    href="https://github.com/"><img src="images/github.png"></a></li>

        </ul>
    </footer>

</body>

</html>