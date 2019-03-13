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
<?php
// '<= 10' permet d'afficher ma phrase jusqu'à 10
while ($display <= 10) {
  echo 'j\'affiche et j\'incremente jusqu\'à 10, c\'est la ligne numéro : ' .$display. '<br/>';
  // varible plus ++ permet d'incrementer
  $display++;
}
?>
  </body>
</html>
