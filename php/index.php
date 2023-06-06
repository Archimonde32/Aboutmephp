<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="./css/base.css">
</head>

<body>
    <header>
        <p><strong>Developpeur Web et Web Mobile</strong></p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit omnis explicabo hic accusamus, impedit neque.</p>
    </header>

    <nav class="topnav">
        <a href="/">Accueil</a>
        <a href="/?page=1">à Propos de moi</a>
        <a href="/?page=2">Mes rêves d'apprenant</a>
        <a href="/?page=3">Mes passions</a>
        <a href="CV.pdf" target="_blank">Mon CV</a>
    </nav>
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