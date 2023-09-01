<!DOCTYPE html>
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
            </form>
            <!-- Afficher les chapitres les une à la suite des autres -->
        </div>

        <div class="droite" style="background-color: #9b2323;">
            <h1 class="bienvenue"><?= $_POST['matiere'] ?> - Exercices</h1>
        </div>
    </main>
    <footer><h2>Site web libre de droit | Code source : <a href="https://github.com/benstitousofiane/sbw" target="_blank"><img src="../img/githubicon.png" alt="Icone GitHub" width="22"></a></h2></footer>
</body>
</html>