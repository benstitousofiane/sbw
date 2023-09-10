<?php session_start(); ?>

<?php
    include '../data/db.php';
    global $db;

    if (isset($_POST['envoie'])){
        if (!empty($_POST['nom'])){
            $q = $db -> prepare('INSERT INTO descartes_projets(nom, proprietaire) VALUES(:nom, :proprietaire)');
            $q -> execute([
                "nom" => "" . $_POST['nom'],
                "proprietaire" => "" . $_SESSION['username']
            ]);
            header('Location:../descartes/');
        } else{
            header('Location:../descartes/');
        }
    } else{
        header('Location:../descartes/');
    }
?>