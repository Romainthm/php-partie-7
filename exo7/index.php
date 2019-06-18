<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie 7 Exercice 7</title>
</head>
<body>
  <main>
    <div>
                
<?php
                if(isset($_FILES['avatar']))
                { 
                     $dossier = 'upload/';
                     $fichier = basename($_FILES['avatar']['name']);
                     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                     {
                          echo 'Upload effectué avec succès !';
                     }
                     else //Sinon (la fonction renvoie FALSE).
                     {
                          echo 'Echec de l\'upload !';
                     }
                }
                ?>
                <?php if (isset($_POST['gender']) && isset($_POST['firstName']) && isset($_POST['lastName'])
                && $_POST['gender']!='' && $_POST['firstName']!='' && $_POST['lastName']!='' && $_POST['avatar']!='' ){ ?>
                    <div>
                        <p>Bonjour <?= $_POST['gender'].' '.$_POST['firstName'].' '.$_POST['lastName'].' vous avez envoyé le fichié '.$_POST['avatar'].' '?></p>
                        <button><a href="index.php">Retour</a></button>
                    </div>
             
                <?php }else{ ?>
                    <form action="index.php" method="POST" name="userForm">
                        
                        <select name="gender">
                            <option value="Monsieur">Monsieur</option>
                            <option value="Madame">Madame</option>
                        </select>
                        <p>Prénom :<input type="text" name="firstName"></p>
                        
                        <p>Nom :<input type="text" name="lastName"></p>
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                        Fichier : <input type="file" name="avatar">
                        <button type="submit">Valider</button>
                    </form>
                <?php } ?>
            </div>
</main>
</body>
</html>
