<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 7 exercice 5</title>
  </head>
  <body>
    <main>
        
     <form action="index.php" method="POST">
         <label for="civilité">
             <select name="cvl" id="civilité">
                 <option value="Mr">Mr</option>
                 <option value="Mme">Mme</option>
             </select>
         </label>
        <p>Votre Nom : <input type="text" name="nom" /></p>
        <p>Votre Prénom : <input type="text" name="prenom" /></p>
        <p><input type="submit" value="OK"></p>
     </form>
       Bonjour, <?php echo htmlspecialchars($_POST['cvl']).' '.($_POST['nom']) .' '. ($_POST['prenom']); ?>
    </main>
  </body>
</html>
