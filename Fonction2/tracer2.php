<?php
    $a = $_GET["A"];
    $b = $_GET["B"];
    $c = $_GET["C"];
    $d = $_GET["D"];
    $df = -$d/$c;
    header ("Content-type: image/png");
    $repair = imagecreate(600,600);
    $c1 = imagecolorallocate($repair,0,200,200);
    $noir = imagecolorallocate($repair,0,0,0);
    $rouge = imagecolorallocate($repair,255,0,0);
    $ver = imagecolorallocate($repair,0,255,0);
   
    //definire le repaire
    imagesetthickness($repair,2);
    imageline($repair,0,300,600,300,$noir);
    imageline($repair,300,0,300,600,$noir);
     


    //renomer notre repaire
    imagestring($repair,5,580,280,"x",$noir);
    imagestring($repair,5,310,10,"y",$noir);
    



    //numerotation du repaire
    $w=-6;
    for($i=0;$i<=600;$i+=50){
        if($w==0){
            imagestring($repair,5,$i,300,"$w",$noir);
        }else{
            imagestring($repair,5,$i,300," $w",$noir);
        }
        imagestring($repair,5,$i,292,"|",$noir);
        $w++;
    }

    $z=6;
    for($e=0;$e<=600;$e+=50){
        if($z==0){
           imagestring($repair,5,300,$e,"$z",$noir);
        }else{
           imagestring($repair,5,300,$e," $z",$noir);
        }
        imagestring($repair,5,293,$e,"-",$noir);
        $z--;
    }




    //tacer de l'asymptot vertical
    for($as=-20;$as<=20;$as+=0.001)
    {
      $a_x = $d/$c;

      //placement des point dans notre repair
      $ax_f = 300 + $as*50;
      $ay_f = 300 - $a_x*50;
      imagesetpixel($repair,$ay_f,$ax_f,$ver);
    }

    //tacer de l'asymptot horizontal
    for($as=-20;$as<=20;$as+=0.001)
    {
      $a_x = -$a/$c;

      //placement des point dans notre repair
      $ax_f = 300 + $a_x*50;
      $ay_f = 300 - $as*50;
      imagesetpixel($repair,$ay_f,$ax_f,$ver);
    }



    //tracer de la fonction   
    for($x=-400;$x<$df;$x+=0.001)
    {
         $y = ($a*$x + $b)/($c*$x + $d);

         //placement des point dans notre repair
         $x_f = 300 + $x*50;
         $y_f = 300 - $y*50;
         imagesetpixel($repair,$x_f,$y_f,$rouge);
         imagesetpixel($repair,$x_f,$y_f,$rouge); 
    }
    for($x=400;$x>$df;$x-=0.001)
    {
         $y = ($a*$x + $b)/($c*$x + $d);

         //placement des point dans notre repair
         $x_f = 300 + $x*50;
         $y_f = 300 - $y*50;
         imagesetpixel($repair,$x_f,$y_f,$rouge);
         imagesetpixel($repair,$x_f,$y_f,$rouge); 
    }
  
    
    imagepng($repair,"tracer1");
    imagepng($repair);
    imagedestroy($repair);
?>