<?php
$reponse = $bdd->query('SELECT * FROM films,realisateur,acteur,genre WHERE films.ID_film ='.$_GET["ID_film"].' AND films.ID_realisateur = realisateur.ID_realisateur AND acteur.ID_acteur = films.id_acteur AND genre.ID_genre = films.ID_genre LIMIT 1');

$standard = $bdd->query('SELECT * FROM `films` ORDER BY `ID_film` ASC');

?> <!-- variable crée pour la requête SQL pour pouvoir afficher les données -->