<?php

        try
        {
         $bdd = new PDO('mysql:host=localhost;dbname=cinemet', 'sunjian', 'ichigo08');
        }
        catch(Exception $e) 
        {
         die('Erreur '.$e->getMessage());
        }
    
?>