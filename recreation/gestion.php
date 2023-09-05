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
    <link rel="icon" href="../img/recreationcours.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portinfo - Gestion</title>
</head>
<body>
    <main class="gestion">
        <h1>Ici c'est l'admin qui gère les contenues ! 😤</h1>
        <h2><u>Ajouter une matière : </u></h2>
        <form action="../proc/recreationMatieresProc.php" method="post">
            <input type="text" name="nom" id="nom" placeholder="nom de la matière" required>
            <input type="text" name="emoji" id="emoji" placeholder="emoji de la matière" required>
            <input type="text" name="couleur" id="couleur" placeholder="couleurs en héxadecimale" required>
            <input type="submit" name="ajout" id="ajout">
        </form>
        <h2><u>Ajouter un cour :</u></h2>
        <h3>Ajouter un chapitre :</h3>
        <form action="../proc/recreationCoursAjoutChapitreProc.php" method="post">
            <input type="text" name="matiere" id="matiere" placeholder="Matière associée au chapitre" required>
            <input type="text" name="nom" id="nom" placeholder="Nom du chapitre" required>
            <input type="number" name="numero" id="numero" placeholder="Numéro du chapitre" required>
            <input type="submit" name="envoie" id="envoie">
        </form>
        <h3>Ajouter un contenu sur un chapitre :</h3>
        <form action="../proc/recreationCoursAjoutContenuProc.php" method="post">
            <input type="text" name="nom" id="nom" placeholder="Nom du contenu" required><br>
            <input type="text" name="matiere" id="matiere" placeholder="Matière associé au contenu" required><br>
            <input type="number" name="numero" id="numero" placeholder="Numéro du chapitre" required><br>
            <textarea name="contenu" id="contenu" cols="30" rows="10" placeholder="Contenue du chapitre en HTML" required></textarea><br>
            <input type="submit" name="envoie" id="envoie">
        </form>

        <h2><u>Ajouter un devoir :</u></h2>
        <h3>Ajouter une date de devoirs :</h3>
        <form action="../proc/recreationDevoirsAjoutDateProc.php" method="post">
            <input type="text" name="matiere" id="matiere" placeholder="Matière associer au devoir" required>
            <input type="text" name="date" id="date" placeholder="Date du devoir" required>
            <input type="submit" name="envoie" id="envoie">
        </form>
        
        <h3>Ajouter un contenu sur la date d'un devoirs :</h3>
        <form action="../proc/recreationDevoirsAjoutContenuProc.php" method="post">
            <input type="text" name="matiere" id="matiere" placeholder="Matière associer au contenu du devoir"><br>
            <input type="text" name="date" id="date" placeholder="Date associer au contenu du devoir"><br>
            <textarea name="contenu" id="contenu" cols="30" rows="10" placeholder="Contenu du devoir associer à la date et à la matière"></textarea><br>
            <input type="submit" name="envoie" id="envoie">
        </form>

        <h2><u>Ajouter un exercice :</u></h2>
        <h3>Ajouter une date d'exercice associer à la date d'un devoir :</h3>
        <form action="../proc/recreationExercicesAjoutDateProc.php" method="post">
            <input type="text" name="matiere" id="matiere" placeholder="Matière associer à l'exercice" required>
            <input type="text" name="date" id="date" placeholder="Date du devoir" required>
            <input type="submit" name="envoie" id="envoie">
        </form>
        <h3>Ajouter un contenu sur la date d'un exercice :</h3>
        <form action="../proc/recreationExercicesAjoutContenuProc.php" method="post">
            <input type="text" name="matiere" id="matiere" placeholder="Matière associer au contenu du devoir"><br>
            <input type="text" name="date" id="date" placeholder="Date associer au contenu du devoir"><br>
            <textarea name="contenu" id="contenu" cols="30" rows="10" placeholder="Contenu du devoir associer à la date et à la matière"></textarea><br>
            <input type="submit" name="envoie" id="envoie">
        </form>

        
    </main>
</body>
</html>
