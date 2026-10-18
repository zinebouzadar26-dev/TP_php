  <?php 


    /* Auteur:Zineb Ouzadar
       Objectif:construisez pas à pas une petite application web qui saisit, stocke, affiche et analyse les notes d'une classe. 
       Date:17/10/2026
    */


require 'config.php';



          //Exercice 1.1 : Noms de variables
  // variable valides:
$x ;
$_x ;
$Prix_HT=60 ;
$tva = 20 ;
$état ;
/* variable en php peut pas commence par nombre
   ou contenir un espace ou des caractères spéciaux */
    /*`$a` et `$A` sont deux variables distinctes car 
   php sensible a la casse*/



            //Exercice 1.2 : Constantes
echo ETABLISSEMENT.<br>;
echo NOTE_MIN.<br>;
echo NOTE_MAX.<br>
echo SEUIL.<br>;

var_dump(defined('SEUIL'));
var_dump(defined('INCONNUE') );

             
              //Exercice 1.3 : Calcul
$Prix_TTC=$Prix_HT * (1 +($tva /100));
echo'Le prix TTC du produit est de'.$Prix_TTC ' €';


              //Exercice 1.4 : Types et conversions
            
$test = 42;
$test = (string) $test ;
var_dump($test);

var_dump((bool) 0);
var_dump((bool) 0.0);
var_dump((bool) "0");
var_dump((bool) "");
var_dump((bool) "abc");
var_dump((bool) []);
var_dump((bool) null);

var_dump((int) 3.9);
var_dump((int) "12abc");
var_dump((float) "1.5e3");
var_dump((int) true);

$decimal = 255;
$hexadecimal = 0xFF;
$octal = 0377;
$binaire = 0b11111111;

echo "Décimal : " . $decimal . "<br>";
echo "Hexadécimal : " . sprintf("%X", $hexadecimal) . "<br>";
echo "Octal : " . sprintf("%o", $octal) . "<br>";
echo "Binaire : " . sprintf("%b", $binaire) . "<br>";


              // Exercice 1.5 : Chaînes de caractères

$traitees = "égales à" ;
$ici = 2 ;

echo 'Ahmed a dit : "J\'ai un autre exemple ici "<br>';
echo 'Voulez-vous supprimer C:\\*.*? <br>';
echo 'Ceci n\'affichera pas \n de nouvelle ligne <br>';
echo 'Les variables ne seront pas $traitees $ici <br>';
echo "Les variables ne seront pas {$traitees } {$ici} <br>";

$chaine = "*Bonjour les développeurs*";
echo trim($chaine, "*") . "<br>";


$mot = "Bonjour";

for ($i = 0; $i < strlen($mot); $i++) {
    echo $mot[$i] . "<br>";
}





?>