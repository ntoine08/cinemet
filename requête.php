<?php
$reponse = $bdd->query('SELECT * FROM films,realisateur,acteur,genre WHERE films.ID_film ='.$_GET["ID_film"].' AND films.ID_realisateur = realisateur.ID_realisateur AND acteur.ID_acteur = films.id_acteur AND genre.ID_genre = films.ID_genre LIMIT 1');

$standard = $bdd->query('SELECT * FROM `films` ORDER BY `ID_film` ASC');

$realisateur = $bdd->query('SELECT * FROM `realisateur` WHERE `ID_realisateur`AND`nom_realisateur`AND`nationalite_realisateur`AND`date_de_naissance_realisateur`AND`age_realisateur`AND`lieu_de_naissance_realisateur`AND`biographie_realisateur`AND`img_realisateur`');
?> <!-- variable crée pour la requête SQL pour pouvoir afficher les données -->