<?php
    include '../data/db.php';
    global $db;

    if (isset($_POST['envoie'])){
        if (!empty($_POST['matiere']) && !empty($_POST['nom']) && !empty($_POST['numero'])){
            $q = $db -> prepare('INSERT INTO recreation_cours_chapitres(matiere, nom, numero) VALUES(:matiere, :nom, :numero)');
            $q -> execute([
                'matiere' => "" . $_POST['matiere'],
                'nom' => "" . $_POST['nom'],
                'numero' => "" . $_POST['numero']
            ]);
            header('Location:../recreation');
        } else {
            header('Location:../recreation');
        }
    } else{
        header('Location:../recreation');
    }

?>