<?php

    define('HOST','localhost');
    define('DB_NAME','sbw');
    define('USER','root');
    define('PASS','');

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
    }

    catch(PDOException $e){
        echo 'Erreur de connexion à la base de donnée.'; 
    }
?>
