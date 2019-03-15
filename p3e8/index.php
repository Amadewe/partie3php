<?php $number = 200; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8 partie 3 php</title>
  </head>
  <body>
<p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
<!-- while peut se traduire par « tant que c'est vrai, exécute les instructions" -->
<!-- içi tant que la variable $number n'est pas inférieur ou égal à 0 alors affiche les chiffres de 12 en 12-->
<?php while ($number > 0)  { ?>
<p><?= $number -= 12 ?>Enfin !!!</p>
<?php } ?>
  </body>
</html>
