<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../img/existeiconerouge.png">
    <link rel="stylesheet" href="../styles/portinfo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portinfo - <?= $_POST['titre'] ?></title>
</head>
<body>
    <header>
        <a href="./" class="header"><h1>SBW /🪑/💻/📜</h1></a>
    </header>

    <main class="agrandit">
        <div class="gauche">
            <img src="<?= $_POST['image'] ?>" alt="Titre" width="425" style="border-radius:30px">
            <h2><?= $_POST['titre'] ?></h2>
        </div>
        <div class="droite">
            <h3>Description :</h3>
            <h2><?= $_POST['description'] ?></h2>
            <br>
            <h3>Lien du projet :</h3>
            <a href="<?= $_POST['lien'] ?>" target="_blank">Code Source (<?= $_POST['plateforme'] ?>)</a>
            <br>
            <h3>Langages utilisés :</h3>
            <h2><?= $_POST['langages'] ?></h2>
            <br>
            <h3>Dépendances du projet :</h3>
            <h2><?= $_POST['dependances'] ?></h2>
            <br>
            <h3>L'objectif :</h3>
            <h2><?= $_POST['objectif'] ?></h2>
        </div>
    </main>

    <footer>
        <h2>
            Site web libre de droit | Code source : <a href="https://github.com/benstitousofiane/sbw" target="_blank"><img src="../img/githubicon.png" alt="Icone GitHub" width="22"></a>
        </h2>
    </footer>
</body>
</html>