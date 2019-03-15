<?php $number = 1; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7 partie 3 php</title>
  </head>
  <body>
<p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
<?php while ($number <= 100) { ?>
  <!-- on faisant += 15 ça permet d'afficher seulement les chiffres de 15 en 15 jusqu'à 100. -->
  <p><?= $number += 15 ?> On tient le bon bout.</p>
<?php } ?>
  </body>
</html>
