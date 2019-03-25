<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5 partie 3 php</title>
</head>
<body>
  <p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>
  <p>Avec la boucle for</p>
  <!-- for est un autre type de boucle, dans une forme un peu plus condensée et plus commode à écrire,
  ce qui fait que for est assez fréquemment utilisé. -->
  <!-- on initialise sa variable directement dans la condition -->
  <!-- la variable $number n'est pas supérieur ou égal à 15 alors on l'incremente d'1 "pas" -->
  <?php for ($number = 1; $number <= 15; $number ++) { ?>
    <p><?= $number ?> On y arrive presque.</p>
  <?php } ?>
</body>
</html>
