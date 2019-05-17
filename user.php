<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>connexion</title>
    <!--pour relier mon css-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>

<body> 
    <div> <!--pour rentrer le pseudo et le mot de passe-->

        <?php 
            include("connection.php"); // inclure la connection

            $pseudo = $_POST['pseudo'];
            $mdp = $_POST['mdp'];

            $co = $db->query('SELECT pseudo mdp FROM user WHERE pseudo = songoku AND mdp = dbz' array('pseudo' => $pseudo, 'mdp' =>$mdp));
            $co = $co=>fetch();

        ?>
        <form name="connexion" action="admin.php" method="POST">
            pseudo : <input name="pseudo" type="text" id="pseudo"><br>
            mot de passe : <input name="mdp" type="text" id="mdp"><br><br>

            <input type="submit" name="connexion" value="connexion"><!--bouton pour se connecter-->
        </form>

    </div>


</body>

</html>