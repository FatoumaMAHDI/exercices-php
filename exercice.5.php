<?php
/** ecrire un script qui genere un jour un mois et une année puis verifie 
 * si la date generer est valide ou pas
 */
define("min_annee",1);
define("max_annee",5000);
$annee=rand(min_annee,max_annee);
define("min_mois",1);
define("max_mois",12);
$mois=rand(min_mois,max_mois);
define("min_jours",1);
define("max_jours",31);
$jours=rand(min_jours,max_jours);
$nom_mois="";
switch($mois){
    case 1:
        $nom_mois="Janvier";
        break;
    case 2:
        $nom_mois="Fevrier";
        break;
    case 3:
        $nom_mois="Mars";
        break;
    case 4:
        $nom_mois="Avril";
        break;
    case 5:
        $nom_mois="Mai";
        break;
    case 6:
        $nom_mois="Juin";
        break;
    case 7:
        $nom_mois="Juillet";
        break;
    case 8:
        $nom_mois="Aout";
        break;
    case 9:
        $nom_mois="Septembre";
        break;
    case 10:
        $nom_mois="Octobre";
        break;
    case 11:
        $nom_mois="Novembre";
        break;
    case 12:
        $nom_mois="Decembre";
        break;
}


echo("Date : $jours / $nom_mois / $annee"); echo"<br>";


if ($mois==4 AND $jours==31){
    echo "La date n'est pas valide"; echo"<br>";
}
elseif ($mois==6 AND $jours==31){
    echo "La date n'est pas valide"; echo"<br>";
}
elseif ($mois==9 AND $jours==31){
    echo "La date n'est pas valide"; echo"<br>";
}
elseif ($mois==11 AND $jours==31){
    echo "La date n'est pas valide"; echo"<br>";
}
elseif($mois==2){
    if($jours==30 OR $jours==31){
        echo "La date n'est pas valide"; echo"<br>";
    }
    elseif($annee/100 AND $jours==29){
        echo "La date n'est pas valide"; echo"<br>";
    }
    elseif($annee%4!=0 AND $jours==29){
        echo "La date n'est pas valide"; echo"<br>";
    }
    elseif($annee%400!=0 AND $jours==29){
        echo "La date n'est pas valide"; echo"<br>";
    }
    else{
        echo"La date est valide";echo"<br>";
    }
}
else{
    echo"La date est valide";echo"<br>";
}


?>