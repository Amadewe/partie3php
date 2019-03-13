<?php
$numberOne = 0;
$numberTwo = 52;
$calcul = $numberOne * $numberTwo;
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
  <?php
  while ($numberOne <= 20) {
    echo 'on multiplie la première variable avec la seconde ' .$calcul . '. Numéro de ligne : ' . $numberOne. '<br/>';
    // variable plus ++ permet d'incrementer
    $numberOne++;
  }
  ?>
</body>
</html>
