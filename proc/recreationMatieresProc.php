<?php
    include '../data/db.php';
    global $db;

    if (isset($_POST['ajout'])){
        if (!empty($_POST['nom']) && !empty($_POST['emoji']) && !empty($_POST['couleur'])){
            $q = $db -> prepare('INSERT INTO recreation_matieres(nom, emoji, couleur) VALUES(:nom, :emoji, :couleur)');
            $q -> execute([
                'nom' => "" . $_POST['nom'],
                'emoji' => "" . $_POST['emoji'],
                'couleur' => "" . $_POST['couleur']
            ]);
            header('Location:../recreeation');
        }
        header('Location:../recreation');
    } else{
        header('Location:../recreation');
    }

?>