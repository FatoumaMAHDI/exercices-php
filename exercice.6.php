<?php
/** ecrire un script qui genere un jour un mois et une année puis determine et affiche
 *  la date suivante et la date précédente
 */
define("min_annee",1);
define("max_annee",5000);
$annee=rand(min_annee,max_annee);
define("min_mois",1);
define("max_mois",12);
$mois=rand(min_mois,max_mois);

$jours="";
$nom_mois="";
switch($mois){
    case 1:
        $nom_mois="Janvier";
        $jours=rand(1,31);
        break;
    case 2:
        $nom_mois="Fevrier";
        $jours=rand(1,28);
        break;
    case 3:
        $nom_mois="Mars";
        $jours=rand(1,31);
        break;
    case 4:
        $nom_mois="Avril";
        $jours=rand(1,30);
        break;
    case 5:
        $nom_mois="Mai";
        $jours=rand(1,31);
        break;
    case 6:
        $nom_mois="Juin";
        $jours=rand(1,30);
        break;
    case 7:
        $nom_mois="Juillet";
        $jours=rand(1,31);
        break;
    case 8:
        $nom_mois="Aout";
        $jours=rand(1,31);
        break;
    case 9:
        $nom_mois="Septembre";
        $jours=rand(1,30);
        break;
    case 10:
        $nom_mois="Octobre";
        $jours=rand(1,31);
        break;
    case 11:
        $nom_mois="Novembre";
        $jours=rand(1,30);
        break;
    case 12:
        $nom_mois="Decembre";
        $jours=rand(1,31);
        break;
}
if($mois==2 and ($annee%4==0 or $annee%100==0 or $annee%400!=0)){
    $jours=rand(1,29);
}

$jours_suivant=$jours+1;
$jours_prec=$jours-1;


if($mois==2 and $jours==28){

    if($annee%4==0 or $annee%100==0 or $annee%400!=0 ){
        $jours_suivant=29;
    }
    else{
        $jours_suivant=1;
    }
}
elseif($mois==2 and $jours==29){
    $jours_suivant=1;
}
elseif($jours==30){
    if($mois==4){
        $jours_suivant=1;

    }
    elseif($mois==6){
        $jours_suivant=1;
        
    }
    elseif($mois==9){
        $jours_suivant=1;
        
    }
    elseif($mois==11){
        $jours_suivant=1;
        
    }
}
elseif($jours==31){
    $jours_suivant=1;
    
}
elseif($jours==1){
    if($mois==4){
        $jours_prec=30;
        
    }
    elseif($mois==6){
        $jours_prec=30;
        
    }
    elseif($mois==9){
        $jours_prec=30;
        
    }
    elseif($mois==11){
        $jours_prec=30;
        
    }
    elseif($mois==2){
        if($annee%4==0 or $annee%100==0 or $annee%400!=0){
            $jours_prec=29;
        }
        else{
            $jours_prec=28;
        }
    }
   
    else{
        $jours_prec=31;
        
    }
}


echo("Date Génerer : $jours / $nom_mois / $annee"); echo"<br>";
echo("Date Suivante : $jours_suivant / $nom_mois/ $annee"); echo"<br>";
echo("Date Précedente : $jours_prec / $nom_mois / $annee"); echo"<br>";

?>