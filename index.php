<?php
require ('connect.php');
$query="SELECT * FROM personne";
$ps=$pdo->prepare($query);
$ps->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="head">
            <header>
                <h1>Mes contact</h1>
                <a href="#" class="ajouter ajout">Ajouter</a>
            </header>
            <div></div>
        </div>
        <div class="corps">
            <div class="left">
                
                <?php while($user = $ps->fetch()){ ?>
                <div class="contact-item">
                    <img src="images/glm.jpg" alt="">
                    <div >
                        <h2 ><?= $user['nom'] ?><?= $user['prenom'] ?></h2>
                        <p ><?= $user['pays'] ?></p>
                        <p class="block color-grise" ><?= $user['genre'] ?></p>
                        <p class="block color-grise" ><?= $user['mail'] ?></p>
                        <p class="color-grise"><?= $user['phone'] ?> <span><?= $user['annee'] ?> ans</span></p>
                    </div>
                    <div class="actions">
                        <a  href="edit.php?id=<?=$user['id']?>" class="btn-edit" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="btn-edit" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                        <a  href="delete.php?id=<?=$user['id']?>"class="btn-delete" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <?php } ?>
                
            </div>

            <div class="right">
                <h2 class="titleadd">Ajouter un contact</h2>
                <h2 class="titlemodifie">Modifier un contact</h2>
                <form action="traitement.php" method="post">
                    <div class="item">
                        <div class="inputlist"> 
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="non"required>
                        </div>
                        <div>
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom"required>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inputlist">
                            <label for="">Pays</label>
                            <select type="text"  name="pays" id="pays"required>
                                <option value="angola">Angola</option>
                                <option value="Drc">RDC</option>
                            </select>
                        </div>
                        <div>
                            <label for="genre">Genre</label>
                            <select type="text"  name="genre" id="genre"required>
                                <option value="Masculin">M</option>
                                <option value="f">F</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inputlist">
                            <label for="mail">E-mail</label>
                            <input type="email" name="mail" id="email"required>
                        </div>
                        <div>
                            <label for="phone">Téléphone</label>
                            <input type="tel" name="phone" id="phone"required>
                        </div>
                    </div>
                    <div class="date">
                        <label for="annee">Date de naissance</label>
                        <input type="date" name="annee" id="annee" required>
                    </div>
                    <div class="btn">
                        
                        <button class="btn-submit" id="btn-submit" type="submit">Ajouter ce contact</button>
                        <button class="btn-reset" id="btn-cancel" type="reset">Annuler</button>
                    </div>

                </form>
            </div>
    </div>
    <script src="js/style.js"></script>
</body>

</html>