<?php $currentPage = basename($_SERVER['PHP_SELF']);
?> 

<html>
    <head>
        <link rel="stylesheet" href="css/navbar.css" />
    </head>
</html>
<div class="navbar"> 
    <?php if ((empty($_SESSION['user'])) && ($currentPage === 'authentification.php'))  { // Si url de login et que non connecté, affichage de la nav accueil ?>
        <a href="index.php">Accueil</a>
    <?php } if ((empty($_SESSION['user'])) && ($currentPage === 'index.php')) {  // Si url d'accueil et que non connecté, affichage de la nav de connexion ?>
        <a href="authentification.php">Se connecter</a>
    <?php } ?>
    <?php if (!empty($_SESSION['user'])) { // Si l'utilisateur affichage de la nav accueil ?>
        <a href="index.php">Accueil</a>
        <a href=""> Shop </a>
        <a href=""> Déconnexion </a>
    <?php } ?>
</div>