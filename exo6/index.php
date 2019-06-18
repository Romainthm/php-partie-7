<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 7 exercice 6</title>
  </head>
  <body>
    <main>
            <div>
             
                <?php if (isset($_POST['gender']) && isset($_POST['firstName']) && isset($_POST['lastName'])
                && $_POST['gender']!='' && $_POST['firstName']!='' && $_POST['lastName']!='' ){ ?>
                    <div>
                        <p>Bonjour <b><?= $_POST['gender'].' '.$_POST['firstName'].' '.$_POST['lastName'].' ' ?></b>Bienvenue a vous</p>
                        <button><a href="index.php">Retour</a></button>
                    </div>
             
                <?php }else{ ?>
                    <form action="index.php" method="POST" name="userForm">
      
                        <select name="gender" class="mb-4">
                            <option value="Monsieur">Monsieur</option>
                            <option value="Madame">Madame</option>

                        </select>
                        
                        <p>Prénom :<input type="text" name="firstName"></p>
                        
                        <p>Nom :<input type="text" name="lastName"></p>
                        <button type="submit">Valider</button>
                    </form>
                <?php } ?>
            </div>
</main>
  </body>
</html>
