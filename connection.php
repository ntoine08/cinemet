<?php

        try
        {
         $bdd = new PDO('mysql:host=localhost;dbname=cinemets;charset=utf8mb4', 'sunjian', 'ichigo08', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exception $e) 
        {
         die('Erreur '.$e->getMessage());
        }
    // générique pour pouvoir me connecter à la bdd
?>