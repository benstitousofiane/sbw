<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../styles/descartes.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBW/Descartes</title>
</head>
<body>
    <header>
        <?php 
        if (array_key_exists('isconnect', $_SESSION)){
            echo '<a href="../"><h1>SBW/🪑/🃏/</h1></a><a href="../proc/deconnexionProc.php" class="violet">'. $_SESSION['username'] . '/Déconnexion</a>';
        }else{
            echo '<a href="../"><h1>SBW/🪑/🃏/</a><a href="../compte/connexion.html" class="violet">Connexion</a>';
        }
        ?>
    </header>
    
    <main>
            <?php 
                if (!array_key_exists('isconnect', $_SESSION)){
                    echo "<div id='translated'>";
                    echo "<h1 id='connexionRequest'>Veuillez vous connecter pour pouvoir utiliser <u>correctement</u> l'application</h1>";
                    echo "</div>";
                } else {
                    include '../data/db.php';
                    global $db;
                    echo "<div class='center'>";
                    echo "<h1>Bienvenue sur Descartes🃏➡️🧠, choisissez une session de flashcards</h1>";
                    echo "<br><br>";
                    echo "<form action='../descartes/gestion.php' method='post'>";
                    echo "<input type='hidden' name='mode' id='mode' value='projet'>";
                    echo "<a href='#lol' onclick='this.parentNode.submit()' class='ajout'>📜✍️ Ajouter un nouveau ✨projet✨</a>";
                    echo "</form>";
                    echo "<h2 class='projet'>Vos projets :</h2>";
                    echo "<hr>";
                    echo "</div>";
                    $username = $_SESSION['username'];
                    $q = $db -> query("SELECT * FROM descartes_projets WHERE proprietaire = '$username'");
                    $result = $q -> rowCount();
                    if ($result != 0){
                        while ($projet = $q -> fetch()){
                            echo "<form action='../descartes/gestion.php' method='post'>";
                            echo "<input type='hidden' name='mode' id='mode' value='cartes'>";
                            echo "<input type='hidden' name='nom' id='nom'>";
                            echo "<input type='hidden' name='proprietaire' id='proprietaire'>";
                            echo "<a href='#lol' class='projet' onclick='this.parentNode.submit()'><h2 style='background-color : #9a4ae5'>Nom : " . $projet['nom'] . "</h2> <h2 style='background-color :#9a4ae5'>propriétaire : " .$projet['proprietaire'] . "</h2><h2 style='background-color : #9a4ae5'>Date de création : " . $projet['date'] . "</h2></a>";
                            echo "</form>";
                        }
                    } else{
                        echo "<h2>Il n'y a pas encore de projet existant.</h2>";
                    }
                }
            ?>
    </main>
    <footer>
        <h2>
            Site web libre de droit | Code source : <a href="https://github.com/benstitousofiane/sbw" target="_blank"><img src="../img/githubicon.png" alt="Icone GitHub" width="22"></a> |Qui est-ce ? : <a class="footer" href="https://fr.wikipedia.org/wiki/Ren%C3%A9_Descartes" target="_blank">René Descartes</a>
        </h2>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>