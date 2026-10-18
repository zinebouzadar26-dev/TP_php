<?php

       /* Auteur:Zineb Ouzadar
          Objectif:construisez pas à pas une petite application web qui saisit, stocke, affiche et analyse les notes d'une classe. 
          Date:17/10/2026
       */
require_once'config.php';
                    //Exercice 2.1 : if / elseif / else

fonction mention($note){
    if ($note <=16){
        return "tres bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}
$notes = [18, 16, 13, 10, 6];

foreach ($notes as $note) {
    echo "Note : $note - Mention : " . mention($note) . "<br>";
}
                 //Exercice 2.2 : `switch`

$mois = date("m");

switch ($mois) {
    case "01":
        echo "Janvier";
        break;
    case "02":
        echo "Février";
        break;
    case "03":
        echo "Mars";
        break;
    case "04":
        echo "Avril";
        break;
    case "05":
        echo "Mai";
        break;
    case "06":
        echo "Juin";
        break;
    case "07":
        echo "Juillet";
        break;
    case "08":
        echo "Août";
        break;
    case "09":
        echo "Septembre";
        break;
    case "10":
        echo "Octobre";
        break;
    case "11":
        echo "Novembre";
        break;
    case "12":
        echo "Décembre";
        break;
    default:
        echo "Mois invalide";
}
//PHP continue à exécuter les instructions des case suivants, même si leur valeur ne correspond pas.

                 //Exercice 2.3 : Boucles
//1
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

//2
$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }
    $i += 2;
}

//3
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo "$i<br>";
}

//4
$i = 1;
while ($i <= 15) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break;

        case 10:
            echo "At 10; quitting<br>";
            break 2;
    }
    $i++;
}

//5
$i = 0;
do {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }

    $i += 2;
} while ($i <= 20);





























?>