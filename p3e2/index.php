<?php
// on crée nos deux variables
$numberOne = 0;
$numberTwo = 52;
// CORRECTION
// on initialise deux variables
$firstvar = 0;
//pour attribuer au hasard une valeur entre 1 et 100
//on utilise la fonction rand (min,max)
$secondvar = rand(1,100);
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
  <!-- içi tant que la variable $numberOne n'est pas égal ou sup à 20 alors : -->
  <?php  while ($numberOne < 20) { ?>
    <!-- on multiplie la 1er et la seconde variable avec * -->
    <p>On multiplie la première variable avec la seconde : <?= $numberOne * $numberTwo ?>. Numéro de ligne <?= $numberOne; ?></p>
  <!-- on incremente la 1er variable avec ++  -->
  <?php $numberOne++; } ?>
  <p>CORRECTION</p>
  <p>La valeur de la firstvar : <?= $firstvar ?></p>
  <p>La valeur de la secondvar : <?= $secondvar ?></p>
  <?php
  // On va créer une boucle qui vérifiera que firstvar n'est pas supérieur à 20
  // Comme le nombre d'itération n'est pas déterminé on va utiliser la boucle while
  while ($firstvar <= 20) {
    //On multiplie firstvar par secondvar et on l'affiche
    ?><p><?= $firstvar * $secondvar ?></p>
    <?php
    //on incrémente firstvar
    $firstvar++ ;
  }
   ?>
</body>
</html>
