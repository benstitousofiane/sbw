<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="img/existeiconejaune.png">
    <link rel="stylesheet" href="styles/style.css">
    <meta charset="UTF-8">
    <title>SBW - Accueil</title>
</head>
<body>
    <header>
        <?php 
        if (array_key_exists('isconnect', $_SESSION)){
            echo '<h1>SBW /🪑/</h1><a href="proc/deconnexionProc.php" class="jaune">'. $_SESSION['username'] . '/Déconnexion</a>';
        }else{
            echo '<h1>SBW /🪑/</h1><a href="compte/connexion.html" class="jaune">Connexion</a>';
        }
        ?>
    </header>
    <main>
        <h1>Sofiane Benstitou Website <br><br>
            Bienvenue sur Mon site web perso !🤯 <br>
            Élève en classe de 1ère Générale🐊👔
        </h1>
        <nav>
            <a href="portinfo/" class="rouge">Portinfo 💻</a><br>
            <a href="descartes/" class="violet">Descartes 🃏</a> <br>
            <a href="recreation/" class="vert">Récréation 📚</a><br>
            <a href="" class="bleu">Maths & Recherche (Bientôt) 🔢 </a><br>
        </nav>
        <h1>Me contacter sur Discord (ID) 📧 : <br>
            benstitousofiane
        </h1>
    </main>
    <footer>
        <h2>
            Site web libre de droit | Code source : <a href="https://github.com/benstitousofiane/sbw" target="_blank"><img src="img/githubicon.png" alt="Icone GitHub" width="22"></a>
        </h2>
    </footer>
</body>
</html>
