<?php 
require('connect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete = "DELETE FROM personne WHERE id = ?";
    if(isset($pdo)){
        $ps = $pdo->prepare($delete);
    }
$ps->execute([$id]);
header('location:index.php');
}