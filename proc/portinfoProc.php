<?php
    include '../data/db.php';
    global $db;
    if (isset($_POST['ajout'])){
        if (!empty($_POST['titre']) && !empty($_POST['image']) && !empty($_POST['description']) && !empty($_POST['plateforme']) && !empty($_POST['lien']) && !empty($_POST['langages']) && !empty($_POST['dependances']) && !empty($_POST['objectif']) && !empty($_POST['couleur'])){ 
            $q = $db -> prepare('INSERT INTO portinfo(titre, image, description, plateforme, lien, langages, dependances, objectif, couleur) VALUES(:titre, :image, :description, :plateforme, :lien, :langages, :dependances, :objectif, :couleur)');
            $q -> execute([
                'titre' => "" . $_POST['titre'], 
                'image' => "" . $_POST['image'], 
                'description' => "" . $_POST['description'], 
                'plateforme' => "" . $_POST['plateforme'], 
                'lien' => "" . $_POST['lien'], 
                'langages' => "" . $_POST['langages'], 
                'dependances' => "" . $_POST['dependances'], 
                'objectif' => "" . $_POST['objectif'], 
                'couleur' => "" . $_POST['couleur']
            ]);
            header('Location:../portinfo');
        } else {
            header('Location:../portinfo');
        }
    } else {
        header('Location:../portinfo/');
    }

?>