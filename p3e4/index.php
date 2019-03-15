<?php
$number = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4 partie 3 php</title>
</head>
<body>
  <p>Créer une variable et l'initialiser à 1.</p>
  <p>Tant que cette variable n'atteint pas 10, il faut :</p>
  <ul>
    <li>l'afficher</li>
    <li>l'incrementer de la moitié de sa valeur</li>
  </ul>
  <p>Avec la boucle while</p>
  <!-- while peut se traduire par « tant que c'est vrai, exécute les instructions" -->
  <!-- içi tant que la variable $number n'est pas supérieur ou égal à 10 alors on l'incremente de la moitié de sa valeur d'ou +=0.5-->
  <?php while ($number <= 10) { ?>
    <p>resultat <?= $number += 0.5 ?></p>
    <?php } ?>
</body>
</html>
