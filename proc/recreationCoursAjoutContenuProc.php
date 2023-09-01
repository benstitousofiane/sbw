<?php
    include '../data/db.php';
    global $db;

    if (isset($_POST['envoie'])){
        if (!empty($_POST['matiere']) && !empty($_POST['nom']) && !empty($_POST['numero'])){
            $q = $db -> prepare('INSERT INTO recreation_cours_contenus(nom, matiere, numero, contenu) VALUES(:nom, :matiere, :numero, :contenu)');
            $q -> execute([
                'nom' => "" . $_POST['nom'],
                'matiere' => "" . $_POST['matiere'],
                'numero' => "" . $_POST['numero'],
                'contenu' => "" . $_POST['contenu']
            ]);
            header('Location:../recreation');
        } else {
            header('Location:../recreation');
        }
    } else {
        header('Location:../recreation');
    }



?>