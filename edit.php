<?php
require ('connect.php');
$query="SELECT * FROM personne";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(isset($pdo)){ 
        $ps = $pdo ->prepare($query);
    }
    $ps->execute([$id]);
    $etudiant= $ps->fetch();
    $nom = $etudiant['nom'];
    $prenom= $etudiant['prenom'];
    $pays= $etudiant['pays'];
    $genre= $etudiant['genre'];
    $mail= $etudiant['mail'];
    $phone= $etudiant['phone'];
    $annee= $etudiant['annee'];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/edit.css">
    <title>edit</title>
</head>

<body>
    <div class="container">
        <div class="head">
            <header>
                <h1>Mes contact</h1>
                
            </header>
            <div></div>
        </div>
        <div class="corps">
            
            <div class="right">
                <h2 class="titlemodifie">Modifier un contact</h2>
                <form action="traitement.php" method="post">
                    <div class="item">
                        <div class="inputlist"> 
                            <label for="nom">Nom</label>
                            <input type="text" value="<?=$nom?>" name="nom" id="non"required>
                        </div>
                        <div>
                            <label for="prenom">Prénom</label>
                            <input type="text" value="<?=$prenom?>" name="prenom" id="prenom"required>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inputlist">
                            <label for="">Pays</label>
                            <input type="text"  value="<?=$pays?>" name="pays" id="pays"required>
                               
                        </div>
                        <div>
                            <label for="genre">Genre</label>
                            <input type="text" value="<?=$genre?>"  name="genre" id="genre"required>
                                
                        </div>
                    </div>
                    <div class="item">
                        <div class="inputlist">
                            <label for="mail">E-mail</label>
                            <input type="email" value="<?=$mail?>" name="mail" id="email"required>
                        </div>
                        <div>
                            <label for="phone">Téléphone</label>
                            <input type="tel" value="<?=$phone?>" name="phone" id="phone"required>
                        </div>
                    </div>
                    <div class="date">
                        <label for="annee">Date de naissance</label>
                        <input type="date" value="<?=$annee?>" name="annee" id="annee" required>
                    </div>
                    <div class="btn">
                        
                        <button class="btn-submit" id="btn-submit" type="submit">Ajouter ce contact</button>
                        <button class="btn-reset" id="btn-cancel" type="reset">Annuler</button>
                    </div>

                </form>
            </div>
    </div>
    
</body>

</html>