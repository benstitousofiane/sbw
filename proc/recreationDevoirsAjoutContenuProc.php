<?php
    include '../data/db.php';
    global $db;

    if (isset($_POST['envoie'])){
        if (!empty($_POST['matiere']) && !empty($_POST['date']) && !empty($_POST['contenu'])){
            $q = $db -> prepare('INSERT INTO recreation_devoirs_contenus(matiere, date, contenu) VALUES(:matiere, :date, :contenu)');
            $q -> execute([
                'matiere' => "" . $_POST['matiere'],
                'date' => "" . $_POST['date'],
                'contenu' => "" . $_POST['contenu']
            ]);
            header("Location:../recreation");
        } else{
            header("Location:../recration");
        }
    } else {
        header("Location:../recration");
    }
    

?>