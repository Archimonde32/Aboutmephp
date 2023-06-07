<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/aboutme.css">
    <link rel="stylesheet" href="./css/mydreams.css">
    <link rel="stylesheet" href="./css/mypassion.css">
</head>

<body>
    <header>
        <?php include "./includes/header.html"?>
    </header>

    <?php include "./includes/navbar.html" ?>
<section>
    <?php
    if(isset($_GET["page"])){
    switch ($_GET["page"]) {
        case '1':
            include "./includes/about-me.html";
            break;
            case '2':
            include "./includes/my-dreams.html";
            break;
                case '3':
                include "./includes/my-passion.html";
                break;
            } 
    }else{
        include "./includes/home.html";

    }
    ?>
    </section>
    <footer>
        <p>©Création pour un projet de formation de DWWM à l'AFCI</p>
    </footer>
</body>

</html>