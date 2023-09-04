<?php
    include '../data/db.php';
    global $db;

    if (isset($_POST['envoie'])){
        if (!empty($_POST['matiere']) && !empty($_POST['date'])){
            $q = $db -> prepare('INSERT INTO recreation_exercices_dates(matiere, date) VALUES(:matiere, :date)');
            $q -> execute([
                'matiere' => "" . $_POST['matiere'],
                'date' => "" . $_POST['date']
            ]);
            header("Location:../recreation");
        } else{
            header("Location:../recration");
        }
    } else {
        header("Location:../recration");
    }
    

?>