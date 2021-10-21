<?php
/**ecrire un script qui genere deux points: un point A (xA,yA) et un point B (xB,yB)
* le script affiche les deux point et affiche la distance qu separe ces deux point
formule : racine carre
*/
define("min",1);
define("max",100);
$xA=rand(min,max);
$yA=rand(min,max);
$xB=rand(min,max);
$yB=rand(min,max);
echo("Point A($xA,$yA)"); echo"<br>";
echo("Point B($xB,$yB)"); echo"<br>";
$distance= sqrt(pow($xA-$xB,2)+pow($yA-$yB,2));
echo $distance;  echo"<br>";
?>
