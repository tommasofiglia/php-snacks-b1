<?php

$matches = [
  [
    'casa' => 'Olimpia Milano',
    'ospite' => 'Cantù',
    'punticasa' => rand(60, 120),
    'puntiospite' => rand(60, 120)
  ],
  [
    'casa' => 'Trieste',
    'ospite' => 'Varese',
    'punticasa' => rand(60, 120),
    'puntiospite' => rand(60, 120)
  ],
  [
    'casa' => 'Cremona',
    'ospite' => 'Virtus Bologna',
    'punticasa' => rand(60, 120),
    'puntiospite' => rand(60, 120)
  ],
  [
    'casa' => 'Brescia',
    'ospite' => 'Universo Treviso',
    'punticasa' => rand(60, 120),
    'puntiospite' => rand(60, 120)
  ],
  [
    'casa' => 'Trento',
    'ospite' => 'Dinamo Sassari',
    'punticasa' => rand(60, 120),
    'puntiospite' => rand(60, 120)
  ],
  [
    'casa' => 'Reggiana',
    'ospite' => 'VL Pesaro',
    'punticasa' => rand(60, 120),
    'puntiospite' => rand(60, 120)
  ],
  [
    'casa' => 'Venezia',
    'ospite' => 'Fortitudo Bologna',
    'punticasa' => rand(60, 120),
    'puntiospite' => rand(60, 120)
  ]
];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
      foreach ($matches as $match) {
        echo $match['casa'] . ' - ' . $match['ospite'] . ' | ' . $match['punticasa'] . ' - ' . $match['puntiospite'] . '<br>';
      }
      ?>
    </p>
  </body>
</html>
