<?php session_start(); ?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <link rel="stylesheet" href="../styles/descartes.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBW/Descartes/Gestion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.css" integrity="sha384-GvrOXuhMATgEsSwCs4smul74iXGOixntILdUW9XmUC6+HX0sLNAK3q71HotJqlAn" crossorigin="anonymous">

    <!-- Import de katex -->
    <!-- The loading of KaTeX is deferred to speed up page rendering -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.js" integrity="sha384-cpW21h6RZv/phavutF+AuVYrr+dA8xD9zs6FwLpaCct6O9ctzYFfFr4dgmgccOTx" crossorigin="anonymous"></script>

    <!-- To automatically render math in text elements, include the auto-render extension: -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/contrib/auto-render.min.js" integrity="sha384-+VBxd3r6XgURycqtZ117nYw44OOcIax56Z4dCRWbxyPt0Koah1uHoK0o4+/RRE05" crossorigin="anonymous"
        onload="renderMathInElement(document.body);"></script>

    <!-- import de katex.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.css" integrity="sha384-pRsDYiLLocCzWnUN/YEr9TBTTaZOUi5x8adKfqi6Qt44lDaFkoP++x1j2ohSMtdf" crossorigin="anonymous">
</head>
<body>
    <?php
        if (array_key_exists('isconnect', $_SESSION)){
            if ($_POST['mode'] == 'projet'){
                echo '
                <header>
                    <a href="../descartes/"><h1>SBW/🪑/🃏/</h1></a>
                </header>';

                echo "<article>";
                echo "<main id='gestion'>";
                echo "<h1 id='gestionText'>ÉCRIVEZ LE NOM DU PROJET <br>";
                echo "</h1>";
                echo "</main>";
                echo "<form action='../proc/descartesProjetAjout.php' method='post'>";
                echo "<input type='text' name='nom' id='nom' placeholder='Nom du Projet'>";
                echo "<input type='submit' name='envoie' id='envoie' placeholder='Ajouter le projet'>";
                echo "</form>";
                echo "</article>";

                echo "<footer>";
                echo "<h2>Site web libre de droit | Code source : <a href='https://github.com/benstitousofiane/sbw' target='_blank'><img src='../img/githubicon.png' alt='Icone GitHub' width='22'></a> |Qui est-ce ? : <a class='footer' href='https://fr.wikipedia.org/wiki/Ren%C3%A9_Descartes' target='_blank'>René Descartes</a></h2>";
                echo "</footer>";

            } else if ($_POST['mode'] == 'cartes'){
                echo '
                <header>
                    <a href="../descartes/"><h1>SBW/🪑/🃏/</h1></a>
                </header>';
                echo "<article>";
                echo "<main id='gestion'>";
                echo "<h1 id='gestionText'>ÉCRIVEZ UNE QUESTION <br>";
                echo "</h1>";
                echo "</main>";
                // echo "<form action='METTRE UN PROC' method='post'>";
                // echo "<input type='submit' name='envoie' id='envoie' value='Ajouter la carte'>";
                echo "<input type='text' name='question' id='question' placeholder='Écrivez ici la question'>";
                echo "<input type='hidden' name='reponse' id='reponse' placeholder='Écrivez ici la réponse'>";
                // echo "</form>";
                echo "<button id='changerMode' onclick='changeMode()'>Mode réponse</button>";
                echo "</article>";
                echo "<footer>";
                echo "<h2>Site web libre de droit | Code source : <a href='https://github.com/benstitousofiane/sbw' target='_blank'><img src='../img/githubicon.png' alt='Icone GitHub' width='22'></a> |Qui est-ce ? : <a class='footer' href='https://fr.wikipedia.org/wiki/Ren%C3%A9_Descartes' target='_blank'>René Descartes</a></h2>";
                echo "</footer>";
            }
        } else {
            header("Location:../descartes/");
        }

    ?>
    
    <!-- suppression du "defer" sur katex.js pour que le render fonctionne-->
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.js" integrity="sha384-tMzugJpfLv7v0f+KXzNMqNCC6sVzLMM3sCnZDgzy0lcO/0h3sAkEBg/URFcV0JpE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>