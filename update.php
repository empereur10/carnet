<?php
require ('connection.php');
if (isset($_POST['nom'],$_POST['prenom'],$_POST['sexe'])) {
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $pays=$_POST['pays'];
    $genre=$_POST['genre'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];
    $annee=$_POST['annee'];
    $id=$_POST['id'];


    $update='UPDATE personne SET non=?,prenom=?,pays=?,genre=?,mail=?,phone=?,annee=? WHERE id=?';
    if(isset($pdo)){
        $ps=$pdo->prepare($update);
    }
    $ps->execute([$nom,$prenom,$pays,$genre,$mail,$phone,$annee,$id]);
    header('Location:index.php');
    # code...
}