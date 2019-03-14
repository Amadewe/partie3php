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
<?php
// '<= 10' permet d'afficher ma phrase jusqu'à 10
while ($number <= 10 && $number +=0.5) {
  echo 'resultat : ' .$number. '<br/>';
}
?>
  </body>
</html>
