<?php
require ('connect.php');
if (isset($_POST['nom'],$_POST['prenom'],$_POST['pays'],$_POST['genre'],$_POST['mail'],$_POST['phone'],$_POST['annee'])) {
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $pays=$_POST['pays'];
    $genre=$_POST['genre'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];
    $annee=$_POST['annee'];

    $save='INSERT INTO `personne`( `nom`, `prenom`, `pays`, `genre`, `mail`, `phone`, `annee`)  VALUES (?,?,?,?,?,?,?)';
    if(isset($pdo)){
        $ps=$pdo->prepare($save);
    }
    
    $ps->execute([$nom,$prenom,$pays,$genre,$mail,$phone,$annee]);
     header('Location:index.php');
    # code...
}
 ?>