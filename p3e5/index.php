<?php $number = 1; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5 partie 3 php</title>
  </head>
  <body>
<p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>
<!-- while peut se traduire par « tant que c'est vrai, exécute les instructions" -->
<!-- içi tant que la variable $number n'est pas supérieur ou égal à 15 alors on l'incremente sa valeur d'1-->
<?php while ($number <= 15) { ?>
  <p><?= $number += 1 ?> On y arrive presque.</p>
  <?php } ?>
  </body>
</html>
