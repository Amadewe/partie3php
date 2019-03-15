<?php
// on crée nos deux variables
$numberOne = 0;
$numberTwo = 52;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2 partie 3 php</title>
</head>
<body>
  <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.</p>
  <p>Tant que la première variable n'est pas supérieure à 20 :</p>
  <ul>
    <li>multiplier la première variable avec la deuxième</li>
    <li>afficher le résultat</li>
    <li>incrementer la première variable</li>
  </ul>
  <!-- while peut se traduire par « tant que c'est vrai, exécute les instructions" -->
  <!-- içi tant que la variable $numberOne n'arrive pas égal ou sup à 20 alors : -->
  <?php  while ($numberOne <= 20) { ?>
    <p>On multiplie la première variable avec la seconde : <?= $numberOne * $numberTwo ?>. Numéro de ligne <?= $numberOne++; ?></p>
 <!-- variable plus ++ permet d'incrementer  -->
  <?php } ?>
</body>
</html>
