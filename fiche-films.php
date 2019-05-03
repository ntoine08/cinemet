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

    if(isset($_GET['id']))
    {
        try
        {
         $bdd = new PDO('mysql:host=localhost;dbname=cinemet', 'sunjian', 'ichigo08');
        }
        catch(Exception $e) 
        {
         die('Erreur '.$e->getMessage());
        }
     
       
        $reponse = $bdd->query('SELECT * FROM films,realisateur,acteur WHERE films.id='.$_GET["id"].' AND films.id_realisateur = realisateur.id AND acteur.id = films.id_acteur');
     
        while ($donnees = $reponse->fetch())
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
             
     
     
             <h4><?php echo $donnees['nom_film']; ?></h4>
    
             <!--partie descriptif film-->
     
             <div class="descriptif">
                 <img src="images/captain-marvel.jpg">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga error reiciendis repellat, aut quos
                     culpa
                     distinctio tempora a laudantium voluptatem eligendi possimus nesciunt quas maiores, asperiores
                     beatae
                     esse? Nulla, totam.
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
                     eligendi
                     repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
                     quis?
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
                     eligendi
                     repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
                     quis?
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
                     eligendi
                     repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
                     quis?
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita minus nisi sed cum, molestiae
                     voluptates est voluptatibus architecto iusto molestias esse sapiente hic nulla quasi vel aperiam a
                     ex tempora!</p>
             
     
                 <ul>
                     <li>Date de sortie: <?php echo $donnees['date_de_sortie_film'];?></li>
                     <li>Durée: <?php echo $donnees['duree_film'];?></li>
                     <li>Réalisateur: <?php echo $donnees['nom_realisateur'];?></li>
                     <li>Acteur: <?php echo $donnees['nom_acteur'];?></li>
                     <li>Genres: </li>
                     <li>Nationalité: </li>
                 </ul>
             </div>  
     
              <!--partie footer-->
     
              <footer id="footer">
                 <ul>
                     <li>AllocineMET</li>
                     <br>
                     <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
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
        $reponse->closeCursor();
    ?>

    <?php
    } 
    else 
    {
        echo 'pas de post';
    }
    ?>
  
    </body>