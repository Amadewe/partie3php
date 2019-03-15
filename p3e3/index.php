<?php
$numberOne = 100;
// création d'une variable
//on l'initialise notre variable $numberTwo par un chiffre compris entre 1 et 100
$numberTwo = 52;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2 partie 3 php</title>
</head>
<body>
  <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.</p>
  <p>Tant que la première variable n'est pas inférieur ou égal à 10 :</p>
  <ul>
    <li>multiplier la première variable avec la deuxième</li>
    <li>afficher le résultat</li>
    <li>décrémenter la première variable</li>
  </ul>
  <!-- while peut se traduire par « tant que c'est vrai, exécute les instructions" -->
  <!-- içi tant que la variable $numberOne n'est pas inférieur ou égal à 10 alors : -->
  <?php  while ($numberOne >= 10) { ?>
  <!-- on multiplie la $numberOne avec $numberTwo -->
    <p>On multiplie la première variable avec la seconde <?= $numberOne * $numberTwo ?>. Numéro de ligne : <?= $numberOne-- ?></p>
    <!--variable plus - - permet décrementer -->
  <?php } ?>
</body>
</html>
