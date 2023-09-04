<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="../img/recreationcours.png">
    <link rel="stylesheet" href="../styles/recreation.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBW/Récréation/</title>
</head>
<body>
    <header><a href="../"><h1>SBW/🪑/📚/</h1></a></header>
    
    <main>
        <div class="gauche">
            <h2>Matières</h2>

            <?php
                include '../data/db.php';
                global $db;
                
                $q = $db -> query('SELECT * FROM recreation_matieres ORDER BY id ASC');
                while ($matiere = $q -> fetch()){
                    echo '<form action="ouverture" method="post">';
                    echo '<input type="hidden" name="matiere" id="matiere" value="'. $matiere['nom'] .'">';
                    echo '<input type="hidden" name="emoji" id="emoji" value="'. $matiere['emoji'] .'">';
                    echo '<a href="#lol" onclick="this.parentNode.submit()" style="background-color: '. $matiere['couleur'] .';">'. $matiere['nom'] .' '. $matiere['emoji'] .'</a>';
                    echo '</form>';
                }
            ?>
            
        </div>
        <div class="droite">
            <h1 class="bienvenue">Bienvenue sur récréation📚 🔊❗ <br>
                Ici vous retrouverez l'hébergement de mes cours, devoirs et exercices fait en classe de 1ère Générale 🤠 <br>
            </h1>
            <hr>
            <h2>
                Comment ça marche ? : Choisissez une matière et sélectionnez une des sections : cours, devoirs ou exercices. <br>
                ➡️ Cours📗: Les prise de notes et cours retouchés. <br>
                ➡️ Devoirs📘 : Mon agenda avec les devoirs que j'ai reçu tout au long de l'année. <br>
                ➡️ Exercices📕 : Mes réponses aux devoirs que j'ai reçu, ceux-ci peuvent être faux ! ⚠️
                <br><br>
                Les Cours sont centrés sur mon orientation et mes choix de spécialités : Mathématiques, Numériques-Sciences-Informatique et Physique-Chimie,
                et bien entendu sur le BAC de français de cette année.
                <br><br>
                J'utilise dans mes contenus de nombreux emojis qui me permettent de faciliter la lisibilité et la compréhension de ceux-ci;
                ce n'est pas du goût de tous, mais c'est mon site après tout ! 😤
                <br><br>
                L'utilisation de l'application doit ce faire à plein écran, et est toujours composé de deux partie, navigation et affichage des contenues. <br>
                Des dépendances telles que KaTeX sont utilisés pour avoir une écriture mathématique sur certaines pages, je remercie leurs équipes pour ces services gratuits. 
            </h2>
        </div>
    </main>

    <footer><h2>Site web libre de droit | Code source : <a href="https://github.com/benstitousofiane/sbw" target="_blank"><img src="../img/githubicon.png" alt="Icone GitHub" width="22"></a></h2></footer>
</body>
</html>