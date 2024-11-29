<?php
$a = $_GET["A"];
$b = $_GET["B"];
$c = $_GET["C"];
$d = $_GET["D"];
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
$f1 = $a/$c;
$f2=-$d/$c;
imagestring($repair,50,415,80,"$f2",$noir);
imageline($repair,415,120,410,550,$noir);
imageline($repair,420,120,415,550,$noir);
if($c<0){
    imagestring($repair,50,250,150,"+",$noir);
    imagestring($repair,50,600,150,"+",$noir);
    imagestring($repair,50,160,530,"$f1",$noir);
    imagestring($repair,50,390,210,"->",$noir);
    imagestring($repair,50,425,210,"$f1",$noir);
    imagestring($repair,50,730,530,"->",$noir);
}else{
    imagestring($repair,50,250,150,"-",$noir);
    imagestring($repair,50,600,150,"-",$noir);
    imagestring($repair,50,370,530,"$f1",$noir);
    imagestring($repair,50,160,210,"->",$noir);
    imagestring($repair,50,710,210,"$f1",$noir);
    imagestring($repair,50,425,530,"->",$noir);
}


imagepng($repair,"tableaux de variation.png");
imagepng($repair);
imagedestroy($repair);
?>