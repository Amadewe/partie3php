<?php $number = 20; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6 partie 3 php</title>
  </head>
  <body>
    <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
    <!-- while peut se traduire par « tant que c'est vrai, exécute les instructions" -->
    <!-- içi tant que la variable $number n'est pas inférieur ou égal à 0 alors on la décrémente d'1-->
    <?php while ($number > 0) { ?>
      <p><?= $number -= 1 ?> C'est preque bon.</p>
    <?php } ?>
  </body>
</html>
