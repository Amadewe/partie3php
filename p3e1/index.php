<?php
$display = 0;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1 partie 3 php</title>
</head>
<body>
  <p>Créer une variable et l'initialiser à 0.</p>
  <p>Tant que cette variable n'atteint pas 10, il faut :</p>
  <ul>
    <li>l'afficher</li>
    <li>l'incrementer</li>
  </ul>
  <!-- while peut se traduire par « tant que c'est vrai, exécute les instructions" -->
  <!-- içi tant que la variable $numberOne n'arrive pas égal ou sup à 20 alors : -->
  <?php
  while ($display <= 10) { ?>
    <p>J'affiche et j'incremente jusqu'à 10, nous sommes à la ligne : <?= $display ?></p>
    <!--variable plus ++ permet d'incrementer -->
    <?php $display++; } ?>
  </body>
  </html>
