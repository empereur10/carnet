<?php
    try {
        $pdo= new PDO('mysql:host=localhost;dbname=carne','root','');
    } catch (PDOException $th) {
       echo ("Erreur".$th->getMessage());
    }
    ?>