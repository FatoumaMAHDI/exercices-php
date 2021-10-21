<?php
/** ecrire un script qui genere une année et un mois puis determine 
 * et affiche le nombre de jour de ce mois dans cette année
 */
/**année bisextile divisible par 4 mais pas en debut de siecle(c a d ils ont deux 0 non divisible par 100 ex 2000 1800 1900)
si c'est divisible par 4 mais pas divisible par 100 mais si il est au debut du siecle il doit etre divisible par 400
*/
define("min_annee",1);
define("max_annee",5000);
$annee=rand(min_annee,max_annee);
define("min_mois",1);
define("max_mois",12);
$mois=rand(min_mois,max_mois);
$nom_mois="";
$jours="";
switch($mois){
    case 1:
        $nom_mois="Janvier";
        $jours=31;
        break;
    case 2:
        $nom_mois="Fevrier";
        break;
    case 3:
        $nom_mois="Mars";
        $jours=31;
        break;
    case 4:
        $nom_mois="Avril";
        $jours=30;
        break;
    case 5:
        $nom_mois="Mai";
        $jours=31;
        break;
    case 6:
        $nom_mois="Juin";
        $jours=30;
        break;
    case 7:
        $nom_mois="Juillet";
        $jours=31;
        break;
    case 8:
        $nom_mois="Aout";
        $jours=31;
        break;
    case 9:
        $nom_mois="Septembre";
        $jours=30;
        break;
    case 10:
        $nom_mois="Octobre";
        $jours=31;
        break;
    case 11:
        $nom_mois="Novembre";
        $jours=30;
        break;
    case 12:
        $nom_mois="Decembre";
        $jours=31;
        break;
}
if($mois==2){
    if($annee/4 OR $annee/400){
        $jours=29;
    }
    elseif($annee/100){
        $jours=28;
    }
    else{
    $jours=28;
    }
}
echo("Il ya $jours jours en $nom_mois $annee");
?>