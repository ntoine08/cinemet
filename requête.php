<?php
$reponse = $bdd->query('SELECT * FROM films,realisateur,acteur WHERE films.id='.$_GET["id"].' AND films.id_realisateur = realisateur.id AND acteur.id = films.id_acteur');
?> <!-- variable crée pour la requête SQL pour pouvoir afficher les données -->