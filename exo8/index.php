<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie 7 Exercice 8</title>
</head>
<body>
<main>
            <div>
                <?php 
                //si les parametres ont été POSTés, on affiche le message
                if (isset($_POST['gender']) && isset($_POST['firstName']) && isset($_POST['lastName'])
                && $_POST['gender']!='' && $_POST['firstName']!='' && $_POST['lastName']!='' ){ ?>
                    <div>
                        <p>Hello <?= $_POST['gender'] ?> <b><?= $_POST['firstName'].' '.$_POST['lastName'].'. ' ?></b> Comment allez-vous?</p>
                        <p>
                            <?php
                                //si il y a un fichier joint
                                if (isset($_POST['file']) && $_POST['file']!='' ){
                                    $file = new SplFileInfo($_POST['file']); 
                                    //si pdf
                                    if ($file->POSTExtension()=='pdf'){
                                        echo 'Vous avez joint le fichier '.$_POST['file'];
                                    //ou
                                    }else{
                                        echo 'Le fichier que vous avez-joint n\'est pas au format pdf';
                                    }
                                //si il n'y a pas de fichier
                                }else{
                                   echo 'Vous n\'avez pas placé de fichier';
                                }
                            ?>
                        </p>
                        <a href="index.php" >Retour</a>
                    </div>             
                <?php
                //si les parametres n'ont pas été passés, on affiche le formulaire
                }else{ ?>
                    <form action="index.php" method="POST" name="userForm">
                        <select name="gender">
                            <option value="Monsieur">Monsieur</option>
                            <option value="Madame">Madame</option>
                        </select>
                        <p>Prénom:</p>
                        <input type="text" name="firstName">
                        <p>Nom:</p>
                        <input type="text" name="lastName">
                        <p>Fichier-joint ( format pdf ):</p>
                        <input type="file" name='file'>
                        <button type="submit">Valider</button>
                    </form>
                <?php } ?>
            </div>
</main>
</body>
</html>