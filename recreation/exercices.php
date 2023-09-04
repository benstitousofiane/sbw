<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="../img/recreationexercices.png">
    <link rel="stylesheet" href="../styles/recreation.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBW/Récréation/<?= $_POST['matiere'] ?></title>
</head>
<body style="background-color: #c92d2d;">
    <header>
        <form action="ouverture" method="post">
            <input type="hidden" name="matiere" id="matiere" value="<?= $_POST['matiere'] ?>">
            <input type="hidden" name="emoji" id="emoji" value="<?= $_POST['emoji'] ?>">
            <a href="#lol" onclick="this.parentNode.submit()"><h1>SBW/🪑/📚/<?= $_POST['emoji'] ?>/📖➡️📕</h1></a>
        </form>
    </header>
    <main>
        <div class="gauche" style="background-color: #8d1f1f;">
            <h2>
                Choisissez la date
            </h2>
            <form action="">
                <a href="#lol" style="background-color: #440e0e;">Exercices 01/01/2024 - ...</a>
            </form> -->
            <!-- Afficher les chapitres les une à la suite des autres -->
        <!-- </div>

        <div class="droite" style="background-color: #9b2323;">
            <h1 class="bienvenue"><?= $_POST['matiere'] ?> - Exercices</h1>
        </div>
    </main>
    <footer><h2>Site web libre de droit | Code source : <a href="https://github.com/benstitousofiane/sbw" target="_blank"><img src="../img/githubicon.png" alt="Icone GitHub" width="22"></a></h2></footer>
</body>
</html> -->

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
        
    <link rel="icon" href="../img/recreationexercices.png">
    <link rel="stylesheet" href="../styles/recreation.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBW/Récréation/<?= $_POST['matiere'] ?></title>
</head>
<body style="background-color: #c92d2d;">
    <header>

    <?php 
        if ($_POST['mode'] == "dates"){
            echo '<form action="ouverture" method="post">';
            echo '<input type="hidden" name="matiere" id="matiere" value="'. $_POST['matiere'] .'">';
            echo '<input type="hidden" name="emoji" id="emoji" value="'. $_POST['emoji'] .'">';
            echo '<a href="#lol" onclick="this.parentNode.submit()"><h1>SBW/🪑/📚/'. $_POST['emoji'] .'/📖➡️📕/</h1></a>';
            echo '</form>';
        } else if ($_POST['mode'] == "contenus"){
            echo '<form action="exercices" method="post">';
            echo '<input type="hidden" name="mode" id="mode" value="dates">';
            echo '<input type="hidden" name="matiere" id="matiere" value="'. $_POST['matiere'] .'">';
            echo '<input type="hidden" name="emoji" id="emoji" value="'. $_POST['emoji'] .'">';
            echo '<a href="#lol" onclick="this.parentNode.submit()"><h1>SBW/🪑/📚/'. $_POST['emoji'] .'/📖➡️📕/ '. $_POST['date'] .'</h1></a>';
            echo '</form>';
        }
    ?>

    </header>
    <main>
        <div class="gauche" style="background-color : #8d1f1f">
            <?php
                include '../data/db.php';
                global $db;
                
                $matiere = $_POST['matiere'];

                if ($_POST['mode'] == "dates"){
                    echo '<h2>Choisissez une date</h2>';
                    $q = $db -> query("SELECT * FROM recreation_exercices_dates WHERE matiere = '$matiere' ORDER BY id DESC");
                    while ($exercice = $q -> fetch()){
                        echo '<form action="exercices" method="post">';
                        echo '<input type="hidden" name="date" id="date" value="'. $exercice['date'] .'">';
                        echo '<input type="hidden" name="mode" id="mode" value="contenus">';
                        echo '<input type="hidden" name="matiere" id="matiere" value="'. $_POST['matiere'] .'">';
                        echo '<input type="hidden" name="emoji" id="emoji" value="'. $_POST['emoji'] .'">';
                        echo '<a href="#lol" style="background-color : #440e0e" onclick="this.parentNode.submit()"> '. $exercice['date'] .' </a>';
                        echo '</form>';
                    }
                }
                else if ($_POST['mode'] == "contenus"){
                    echo "<h2>Lisez l'exercice</h2>";
                }
            ?>
        </div>

        <div class="droite" style="background-color: #9b2323">
            <?php
                if ($_POST['mode'] == "dates"){
                    echo '<h1 class="bienvenue">'. $_POST['matiere'] .' - Devoirs</h1>';
                    echo '<hr>';
                    echo '<h2>Ici vous retrouverez les devoirs associez à cette matière.</h2>';
                } else if ($_POST['mode'] == "contenus"){
                    $date = $_POST['date'];
                    $q = $db -> query("SELECT * FROM recreation_exercices_contenus WHERE matiere = '$matiere' AND date = '$date'");

                    $devoir = $q -> fetch();

                    echo '<h1 class="bienvenue">'. $devoir['matiere'] . ' - ' . $devoir['date'] .'</h1>';
                    echo '<hr>';
                    echo $devoir['contenu'];
                    
                }
            ?>
        </div>
    </main>
    <footer><h2>Site web libre de droit | Code source : <a href="https://github.com/benstitousofiane/sbw" target="_blank"><img src="../img/githubicon.png" alt="Icone GitHub" width="22"></a></h2></footer>
</body>
</html>