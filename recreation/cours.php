<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Importationd de KaTeX -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.css" integrity="sha384-GvrOXuhMATgEsSwCs4smul74iXGOixntILdUW9XmUC6+HX0sLNAK3q71HotJqlAn" crossorigin="anonymous">

    <!-- The loading of KaTeX is deferred to speed up page rendering -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.js" integrity="sha384-cpW21h6RZv/phavutF+AuVYrr+dA8xD9zs6FwLpaCct6O9ctzYFfFr4dgmgccOTx" crossorigin="anonymous"></script>

    <!-- To automatically render math in text elements, include the auto-render extension: -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/contrib/auto-render.min.js" integrity="sha384-+VBxd3r6XgURycqtZ117nYw44OOcIax56Z4dCRWbxyPt0Koah1uHoK0o4+/RRE05" crossorigin="anonymous"
        onload="renderMathInElement(document.body);"></script>
        
    <link rel="icon" href="../img/recreationcours.png">
    <link rel="stylesheet" href="../styles/recreation.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBW/Récréation/<?= $_POST['matiere'] ?></title>
</head>
<body style="background-color: #18cd07;">
    <header>

    <?php 
        if ($_POST['mode'] == "chapitres"){
            echo '<form action="ouverture" method="post">';
            echo '<input type="hidden" name="matiere" id="matiere" value="'. $_POST['matiere'] .'">';
            echo '<input type="hidden" name="emoji" id="emoji" value="'. $_POST['emoji'] .'">';
            echo '<a href="#lol" onclick="this.parentNode.submit()"><h1>SBW/🪑/📚/'. $_POST['emoji'] .'/📖➡️📗/</h1></a>';
            echo '</form>';
        } else if ($_POST['mode'] == "contenus"){
            echo '<form action="cours" method="post">';
            echo '<input type="hidden" name="mode" id="mode" value="chapitres">';
            echo '<input type="hidden" name="matiere" id="matiere" value="'. $_POST['matiere'] .'">';
            echo '<input type="hidden" name="emoji" id="emoji" value="'. $_POST['emoji'] .'">';
            echo '<a href="#lol" onclick="this.parentNode.submit()"><h1>SBW/🪑/📚/'. $_POST['emoji'] .'/📖➡️📗/ '. $_POST['numero'] .'</h1></a>';
            echo '</form>';
        }
    ?>

    </header>
    <main>
        <div class="gauche">
            <?php
                include '../data/db.php';
                global $db;
                
                $matiere = $_POST['matiere'];

                if ($_POST['mode'] == "chapitres"){
                    echo '<h2>Choisissez un chapitre</h2>';
                    $q = $db -> query("SELECT * FROM recreation_cours_chapitres WHERE matiere = '$matiere'");
                    while ($chapitre = $q -> fetch()){
                        echo '<form action="cours" method="post">';
                        echo '<input type="hidden" name="nom" id="nom" value="'. $chapitre['nom'] .'">';
                        echo '<input type="hidden" name="mode" id="mode" value="contenus">';
                        echo '<input type="hidden" name="matiere" id="matiere" value="'. $_POST['matiere'] .'">';
                        echo '<input type="hidden" name="emoji" id="emoji" value="'. $_POST['emoji'] .'">';
                        echo '<input type="hidden" name="numero" id="numero" value="'. $chapitre['numero'] .'">';
                        echo '<a href="#lol" style="background-color : #084802" onclick="this.parentNode.submit()"> '. $chapitre['nom'] .' </a>';
                        echo '</form>';
                    }
                } else if ($_POST['mode'] == "contenus"){
                    echo '<h2>Choisissez une partie</h2>';
                    $numero = $_POST['numero'];
                    $q = $db -> query("SELECT * FROM recreation_cours_contenus WHERE matiere = '$matiere' AND numero = '$numero'");
                    while ($contenu = $q -> fetch()){
                        echo '<form action="cours" method="post">';
                        echo '<input type="hidden" name="nom" id="nom" value="'. $_POST['nom'] .'">';
                        echo '<input type="hidden" name="mode" id="mode" value="contenus">';
                        echo '<input type="hidden" name="contenu" id="contenu" value="'. $contenu['contenu'] .'">';
                        echo '<input type="hidden" name="matiere" id="matiere" value="'. $_POST['matiere'] .'">';
                        echo '<input type="hidden" name="emoji" id="emoji" value="'. $_POST['emoji'] .'">';
                        echo '<input type="hidden" name="numero" id="numero" value="'. $contenu['numero'] .'">';
                        echo '<a href="#lol" style="background-color : #084802" onclick="this.parentNode.submit()"> '. $contenu['nom'] .' </a>';
                        echo '</form>';
                    }
                }
            ?>
        </div>

        <div class="droite">
            <?php
                if ($_POST['mode'] == "chapitres"){
                    echo '<h1 class="bienvenue">'. $_POST['matiere'] .' - Cours</h1>';
                    echo '<hr>';
                    echo '<h2>Ici vous retrouverez les cours associez à cette matière.</h2>';
                } else if ($_POST['mode'] == "contenus"){
                    echo '<h1 class="bienvenue">'. $_POST['nom'] .'</h1>';
                    echo '<hr>';
                    
                    if (array_key_exists('contenu', $_POST)){
                        echo $_POST['contenu'];
                    } else{
                        echo '<h2>Bienvenue dans le chapitre ' . $_POST['numero'] . ', choisissez une partie du chapitre.</h2>';
                    }
                    
                }
            ?>
        </div>
    </main>
    <footer><h2>Site web libre de droit | Code source : <a href="https://github.com/benstitousofiane/sbw" target="_blank"><img src="../img/githubicon.png" alt="Icone GitHub" width="22"></a></h2></footer>
</body>
</html>