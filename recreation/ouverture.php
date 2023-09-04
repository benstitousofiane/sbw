<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="../img/recreationcours.png">
    <link rel="stylesheet" href="../styles/recreation.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBW/Récréation/<?= $_POST['matiere'] ?></title>
</head>
<body>
    <header><a href="./"><h1>SBW/🪑/📚/<?= $_POST['emoji'] ?>/📖➡️❓</h1></a></header>
    <main>
        <div class="gauche">
            <h2>
                Choisissez la section
            </h2>
            <form action="cours" method="post">
                <input type="hidden" name="mode" id="mode" value="chapitres">
                <input type="hidden" name="matiere" id="matiere" value="<?= $_POST['matiere'] ?>">
                <input type="hidden" name="emoji" id="emoji" value="<?= $_POST['emoji'] ?>">
                <a href="#lol" style="background-color: #18cd07;" onclick="this.parentNode.submit()">Cours📗</a>
            </form>
            <form action="devoirs" method="post">
                <input type="hidden" name="mode" id="mode" value="dates">
                <input type="hidden" name="matiere" id="matiere" value="<?= $_POST['matiere'] ?>">
                <input type="hidden" name="emoji" id="emoji" value="<?= $_POST['emoji'] ?>">
                <a href="#lol" style="background-color: #3a7dd5;" onclick="this.parentNode.submit()">Devoirs📘</a>
            </form>
            <form action="exercices" method="post">
                <input type="hidden" name="mode" id="mode" value="dates">
                <input type="hidden" name="matiere" id="matiere" value="<?= $_POST['matiere'] ?>">
                <input type="hidden" name="emoji" id="emoji" value="<?= $_POST['emoji'] ?>">
                <a href="#lol" style="background-color: #c92d2d;" onclick="this.parentNode.submit()">Exercices📕</a>
            </form>
        </div>

        <div class="droite">
            <h1 class="bienvenue">Bienvenue sur la matière <?= $_POST['matiere'] ?></h1>
        </div>
    </main>
    <footer><h2>Site web libre de droit | Code source : <a href="https://github.com/benstitousofiane/sbw" target="_blank"><img src="../img/githubicon.png" alt="Icone GitHub" width="22"></a></h2></footer>
    
    <script src="main.js"></script>
</body>
</html>