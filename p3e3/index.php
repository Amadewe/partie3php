<?php
$numberOne = 100;
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
  <?php
  while ($numberOne >= 10) {
    echo 'on multiplie la première variable avec la seconde ' . $numberOne * $numberTwo . '. Numéro de ligne : ' . $numberOne. '<br/>';
    // variable plus -- permet décrementer
    $numberOne--;
  }
  ?>
</body>
</html>
