<?php session_start() ?>

<?php 
    if (array_key_exists('isconnect', $_SESSION)){
        if ($_SESSION['state'] != 'admin'){
            header('Location:./');
        }
    } else {
        header('Location:./');
    }
?>
<!-- Mettre une condition si l'utilisateur est sous l'état 'admin' ou non -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="../img/existeiconerouge.png">
    <link rel="stylesheet" href="../styles/portinfo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portinfo - Gestion</title>
</head>
<body>
    <main class="gestion">
        <h1>Ici c'est l'admin qui gère les contenues ! 😤</h1>

        <form action="../proc/portinfoProc.php" method="post" id="formulaireChargement" required></textarea>
            <textarea cols="10" rows="1" name="titre" id="titre" placeholder="Titre du projet" required></textarea>
            <textarea cols="10" rows="1" name="emoji" id="emoji" placeholder="Emoji du projet" required></textarea>
            <textarea cols="10" rows="1" name="image" id="image" placeholder="Source image" required></textarea>
            <textarea cols="10" rows="1" name="description" id="description" placeholder="Description" required></textarea>
            <textarea cols="10" rows="1" name="plateforme" placeholder="Plateforme" required></textarea>
            <textarea cols="10" rows="1" name="lien" id="lien" placeholder="Lien du code source" required></textarea>
            <textarea cols="10" rows="1" name="langages" id="langages" placeholder="Langages Utilisés" required></textarea>
            <textarea cols="10" rows="1" name="dependances" id="dependances" placeholder="Dépendances de l'application" required></textarea>
            <textarea cols="10" rows="1" name="objectif" id="objectif" placeholder="Objectif"></textarea required>
            <textarea cols="10" rows="1" name="couleur" id="couleur" placeholder="Couleur en hexadécimale" required></textarea>
            <input type="submit" name="ajout" id="ajout" value="Ajouter">
        </form>
    </main>
</body>
</html>