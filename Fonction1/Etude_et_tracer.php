<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_tracer.css">
    <title>Etude et tracer</title>
</head>
<body>
   <?php
      $a = $_POST["A"];
      $b = $_POST["B"];
      $c = $_POST["C"];
      if(($a==0)&&($b==0)&& ($c==0)){
         echo("<h2 class = 'f1'>Fonction: f(x) = 0 </h2>");  
      }else if(($a==0)&&($b!=0)&& ($c!=0)){
         echo("<h2 class = 'f1'>Fonction: f(x) =$b*x+$c</h2>"); 
      }else if(($a!=0)&&($b==0)&& ($c==0)){
         if($a==1){
            echo("<h2 class = 'f1'>Fonction: f(x) = x<sup>2</sup></h2>");   
         }else{
            echo("<h2 class = 'f1'>Fonction: f(x) = $a*x<sup>2</sup></h2>");
         }
      }else if(($a!=0)&&($b==0)&& ($c!=0)){
         echo("<h2 class = 'f1'>Fonction: f(x) = $a*x<sup>2</sup>+$c</h2>"); 
      }else if(($a!=0)&&($b!=0)&& ($c!=0)){
         if($b==1){
            echo("<h2 class = 'f1'>Fonction: f(x) = $a*x<sup>2</sup>+x+$c</h2>");   
         }else{
            echo("<h2 class = 'f1'>Fonction: f(x) = $a*x<sup>2</sup>+$b*x+$c</h2>");
         }
      }else if(($a!=0)&&($b!=0)&& ($c==0)){
         echo("<h2 class = 'f1'>Fonction: f(x) = $a*x<sup>2</sup>+$b*x</h2>");
      }else if(($a==0)&&($b==0)&& ($c==0)){
         echo("<h2 class = 'f1'>Fonction: f(x) = $c</h2>");
      }
      echo("<h2 class = 'f1'>Domaine de definition: <span>R</span> </h2>");
      echo "<h3 class = 'TV'>Tableaux de variation:</h3>";
      echo("<iframe class = 'TV1' src='Tableau_de_variation.php?A=$a&B=$b&C=$c' width='800' height='600'  frameborder='0'></iframe>");
      echo "<h3 class = 'TR'>Tracer:</h3>";
      echo("<iframe class = 'TR1' src='tracer1.php?A=$a&B=$b&C=$c' width='600' height='600'  frameborder='0'></iframe>");
   ?>
</body>
</html>