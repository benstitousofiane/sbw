<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="../img/existeiconerouge.png">
    <link rel="stylesheet" href="../styles/portinfo.css">
    <meta charset="UTF-8">
    <title>SBW - Portinfo</title>
</head>
<body>
    <header>
        <a href="../" class="header"><h1>SBW /🪑/💻/</h1></a>
    </header>
    <div class="messageContainer">
        <message>
            <h1>Le portfolio est géré depuis une base de données ! 🥸🗃️</h1>
        </message>
    </div>
    <main>
        <?php
            include '../data/db.php';
            global $db;

            $q = $db -> query("SELECT * FROM portinfo");
            while ($projet = $q -> fetch()){
                echo '<form action="agrandi.php" method="post">';
                echo '<input type="hidden" name="titre" id="titre" value="' . $projet['titre'] . '">';                
                echo '<input type="hidden" name="image" id="image" value="' . $projet['image'] . '">';
                echo '<input type="hidden" name="description" id="description" value="' . $projet['description'] . '">';
                echo '<input type="hidden" name="plateforme" id="plateforme" value="' . $projet['plateforme'] . '">';
                echo '<input type="hidden" name="lien" id="lien" value="' . $projet['lien'] . '">';
                echo '<input type="hidden" name="langages" id="langages" value="' . $projet['langages'] . '">';
                echo '<input type="hidden" name="dependances" id="dependances" value="' . $projet['dependances'] . '">';
                echo '<input type="hidden" name="objectif" id="objectif" value="' . $projet['objectif'] . '">';                
                echo '<a href="#lol" class="projet" style="background-color:' . $projet['couleur'] . '" onclick="this.parentNode.submit();"><img src="' . $projet['image'] . '" alt="' . $projet['titre'] . '" width="150"><h2>' . $projet['titre'] . '</h2></a>';
                echo '</form>';
            }
        ?>
        
    </main>
    <footer>
        <h2>
            Site web libre de droit | Code source : <a href="https://github.com/benstitousofiane/sbw" target="_blank"><img src="../img/githubicon.png" alt="Icone GitHub" width="22"></a>
        </h2>
    </footer>
</body>
</html>