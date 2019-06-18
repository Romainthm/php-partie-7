<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 7 exercice 5</title>
  </head>
  <body>
    <main>
     <form>
        Bonjour, <?php echo htmlspecialchars($_POST['cvl']).' '.($_POST['nom']) .' '. ($_POST['prenom']); ?>
     </form>
    </main>
  </body>
</html>
