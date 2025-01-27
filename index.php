<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO MDZ</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="shortcut icon" href="./ASSET/algorithme.png" type="image/x-icon">
</head>
<body>
    <?php
    include_once __DIR__. '/template/header.inc.php';
    ?>
    <main>
        <section class="accueil">
                <h1> 
                    Je suis MODZINU Kofi Stéphane <br>
                    Developper Web Junior 
                </h1>
            <p>
            Je suis étudiant en BTS Services Informatiques aux Organisations (SIO) <br>
            option Solutions Logicielles et Applications Métiers (SLAM) à l’ITIC Paris.
        </p>
        <br>
    </section>
    <section class="education">
        <h1>Mes Etudes</h1>
        <div class="itic">
            <h2>
                ITIC PARIS
            </h2>
            <h3>
                BTS Services Informatiques aux Organisations (SIO) <br>
                Paris       09/2023 - 06/2025
            </h3>
            <ul>
                <li>Developpement web</li>
                <li>Gestion de base de données </li>
                <li>Configuration de routeur</li>
                <li>Technologies de virtualisation : VMWARE </li>
            </ul>
        </div>
        <div class="univ-lille">
            <h2>
                Université de Lille
            </h2>
            <h3>
                Licence Economie et Gestion <br>
                Lille       09/2022 - 06/2023
            </h3>
            <ul>
                <li>Microéconomie et Macroéconomie</li>
                <li>Mathématiques pour l'économie et la gestion</li>
                <li>Statistiques appliquées à l'économie et la gestion</li>
                <li>Gestion des entreprises</li>
            </ul>
            <div class="CL">
                <h2>
                    Lycée International Cours Lumière
            </h2>
            <h3>
                Baccalauréat Général<br>
                09/2019 - 06/2022
            </h3>
            <ul>
                <li>Mathématiques</li>
                <li>Physique - Chimie</li>
                <li>Sciences Economiques et Sociales</li>
            </ul>
        </div>
    </section>
    <section class="interet">
        <h1>Les coulisses de mon univers</h1>
        <ul>
            <li>
                <h4><strong>Basketball</strong></h4>
                <p>
                    Dix annéess de basket à mon actif. Une passion qui ne s’est jamais dementie
                    depuis 2014. 
                </p>
            </li>
            <li>
                <h4><strong>Gaming</strong></h4>
                <p>
                Le gaming est une passion qui m'anime depuis mes premières années. 
                J'ai grandi en jouant à de nombreux types de jeu sur nintendo et playstation
            </p>
            </li>
            <li>
                <h4><strong>Cuisine</strong></h4>
                <p>
                    La cuisine est pour moi bien plus qu'un simple loisir ; 
                    c'est une véritable passion qui me permet d'exprimer ma créativité.
                </p>
            </li>
            <li>
                <h4><strong>Natation</strong></h4>
                <p>
                De la peur de l'eau au primaire à la passion de la natation aujourd'hui.
                </p>
            </li>
            <li>
                <h4><strong>Automobile</strong></h4>
                <p>
                L'automobile est ancrée en moi depuis toujours. 
                J'ai grandi entourée de voitures et cette passion ne s'est jamais éteinte.
                </p>
            </li>
            <li>
                <h4><strong>Gym</strong></h4>
                <p>
                    J'ai découvert les joies de la gym et de la musculation il y a près de 3 ans 
                    et depuis, je ne peux plus m'en passer. Cette pratique m'apporte à la fois 
                    force physique et mentale.
                </p>
            </li>
        </ul>
    </section>
    <section class="contact">
        <ul>
            <li><img src="/FAVICON/GITHUB.png" alt="github"><br>github</li>
            <li><img src="/FAVICON/INSTAGRAM.png" alt="instagram"><br>instagram</li>
            <li><img src="/FAVICON/YOUTUBE.png" alt="youtube"><br>youtube</li>
        </ul>
    </section>
    <?php
    include_once __DIR__. '/template/footer.inc.php';
    ?>
    </main>
</body>
</html>