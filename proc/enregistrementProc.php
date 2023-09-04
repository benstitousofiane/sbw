<?php

    include '../data/db.php';
    global $db;
    $hashedPassword = password_hash("" . $_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]);

    $c = $db -> prepare('SELECT username FROM users WHERE username = :username');
    $c -> execute(['username' => "" . $_POST['username']]);
    $result = $c -> rowCount();

    if ($result != 0){
        header("Location:../compte/erreurEnregistrementUtilisateur.html");
    }


    if (isset($_POST['enregistrement'])){
        if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['passwordConfirm']) && $_POST['password'] == $_POST['passwordConfirm']){
            $q = $db -> prepare('INSERT INTO users(username, password) VALUES(:username, :password)');
            $q -> execute([
                'username' => "" . $_POST['username'],
                'password' => "" . $hashedPassword
            ]);
            header("Location:../compte/succesEnregistrement.html");

        } else{
            header("Location:../compte/erreurEnregistrementMotDePasse.html");
        }
    }

?>