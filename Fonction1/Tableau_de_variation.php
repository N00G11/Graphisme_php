<?php
   $a = $_GET["A"];
   $b = $_GET["B"];
   $c = $_GET["C"];
   header ("Content-type: image/png");
   $repair = imagecreate(800,600);
   $c1 = imagecolorallocate($repair,0,240,205);
   $noir = imagecolorallocate($repair,0,0,0);
   $rouge = imagecolorallocate($repair,255,0,0);
   
   imagesetthickness($repair,3);

   imageline($repair,50,50,750,50,$noir);
   imageline($repair,50,550,750,550,$noir);
   imageline($repair,50,50,50,550,$noir);
   imageline($repair,750,50,750,550,$noir);
   imageline($repair,50,120,750,120,$noir);
   imageline($repair,50,200,750,200,$noir);
   imageline($repair,150,50,150,550,$noir);
   imagestring($repair,50,100,80,"X",$noir);
   imagestring($repair,50,90,150,"f'(x)",$noir);
   imagestring($repair,50,90,350,"f(x)",$noir);
   imagestring($repair,50,160,80,"<-",$noir);
   imagestring($repair,50,725,80,"->",$noir);
   if($a == 0){
       if($b<0){
        imagestring($repair,50,400,150,"-",$noir);
        imagestring($repair,50,160,200,"->",$noir);
        imagestring($repair,50,725,530,"<-",$noir);
        imageline($repair,180,210,720,520,$noir);
        imageline($repair,720,500,720,520,$noir);
        imageline($repair,700,525,720,520,$noir);
       }else if($b>0){
        imagestring($repair,50,400,150,"+",$noir);
        imagestring($repair,50,160,525,"<-",$noir);
        imagestring($repair,50,725,220,"->",$noir);
        imageline($repair,180,520,720,230,$noir);
        imageline($repair,690,230,720,230,$noir);
        imageline($repair,710,250,720,230,$noir);
       }else{
        imagestring($repair,50,160,350,"<-",$noir);
        imagestring($repair,50,725,350,"->",$noir);
        imageline($repair,180,360,720,360,$noir);
        imageline($repair,700,340,720,360,$noir);
        imageline($repair,700,380,720,360,$noir);
       }
   }else{
   $f1 = (-$b)/(2*$a);
   imageline($repair,420,120,420,200,$noir);
   imagestring($repair,50,415,80,"$f1",$noir);
   imagestring($repair,50,416,150,"o",$noir);
   
   $f2 = $a*$f1*$f1 + $b*$f1 + $c;
   if($a < 0){
    imagestring($repair,50,250,150,"+",$noir);
    imagestring($repair,50,600,150,"-",$noir);
    imagestring($repair,50,160,525,"<-",$noir);
    imagestring($repair,50,411,210,"$f2",$noir);
    imagestring($repair,50,725,525,"<-",$noir);
    imageline($repair,165,520,430,250,$noir);
    imageline($repair,450,250,725,510,$noir);
    
    imageline($repair,400,250,430,250,$noir);
    imageline($repair,430,250,420,280,$noir);

    imageline($repair,725,510,725,480,$noir);
    imageline($repair,700,510,725,510,$noir);
   }else if($a > 0){
    imagestring($repair,50,250,150,"-",$noir);
    imagestring($repair,50,600,150,"+",$noir);  
    imagestring($repair,50,160,220,"->",$noir);
    imagestring($repair,50,725,220,"->",$noir);
    imagestring($repair,50,411,520,"$f2",$noir);

    imageline($repair,170,250,405,510,$noir);
    imageline($repair,420,510,720,250,$noir);
    imageline($repair,405,490,405,510,$noir);
    imageline($repair,390,510,405,510,$noir);
    imageline($repair,700,250,720,250,$noir);
    imageline($repair,720,270,720,250,$noir);
   }
   
   }
   imagepng($repair,"tableaux de variation.png");
   imagepng($repair);
   imagedestroy($repair);
?>