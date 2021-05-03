<?php session_start();
if (empty($_SESSION['user'])) {
    header('Location :/');
}
?>

<html>
    <head>
        <title>authentification</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'navbar.php';?>
        <p> ici c l'authentifcation </p>
    </body>
</html>

