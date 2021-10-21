<?php
/** ecrire un script qui genere trois nombres puis 
 * les tri dans l'ordre croissant puis dans l'ordre décroissant
 * 
 */
define("min",1);
define("max",100);
$A=rand(min,max);
$B=rand(min,max);
$C=rand(min,max);
echo $A; echo"<br>";
echo $B; echo"<br>";
echo $C; echo"<br>";

$ordre=array($A,$B,$C);

echo ("Triage dans l'ordre croissant : <br>");
SORT($ordre);
print_r($ordre); echo"<br>";

echo ("Triage dans l'ordre decroissant : <br>");
RSORT($ordre);
print_r($ordre); echo"<br>";
?>