<?php session_start();

    include '../data/db.php';
    global $db;

    if (isset($_POST['connexion'])){
        if (!empty($_POST['username']) && !empty($_POST['password'])){
            $q = $db -> prepare('SELECT * FROM users WHERE username = :username');
            $q -> execute(['username' => "" . $_POST['username']]);
            $result = $q -> fetch();

            if ($result == true){
                if (password_verify($_POST['password'], $result['password'])){
                    $_SESSION['isconnect'] = "true";
                    $_SESSION['username'] = $result['username'];
                    $_SESSION['state'] = $result['state'];
                    header("Location:../");
                } else{
                    header("Location:../compte/erreurConnexion.html");
                }
            } else{
                header("Location:../compte/erreurConnexion.html");
            }
            #procédure de connexion pour l'utilisateur avec le démarrage de la session
        }
    }

?>