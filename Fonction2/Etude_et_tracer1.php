<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tracer1</title>
</head>
<body>
      
</body>
</html>
<?php
      $a = $_POST["A"];
      $b = $_POST["B"];
      $c = $_POST["C"];
      $d = $_POST["D"];
      $df = -$d/$c;
      echo("<h2 class = 'f1'>Fonction: f(x) = ($a*x+$b)/($c*x+$d)</h2>");
      echo("<h2 class = 'f1'>Domaine de definition: R\{$df}</h2>");
      echo "<h3>Tracer:</h3>";
      echo("<iframe src='Tableaux_de_variation.php?A=$a&B=$b&C=$c&D=$d' width='800' height='600'  frameborder='0'></iframe>");
      echo("<iframe src='tracer2.php?A=$a&B=$b&C=$c&D=$d' width='600' height='600'  frameborder='0'></iframe>");
?>