<?php 


    /* Auteur:Zineb Ouzadar
       Objectif:construisez pas à pas une petite application web qui saisit, stocke, affiche et analyse les notes d'une classe. 
       Date:17/10/2026
    */
              
require_once 'config.php';
require_once 'exo2_flux.php';

             //Exercice 3.1 : Création

$notes = [
    "Mohamed" => 16,
    "Ahmed" => 14,
    "Hind" => 13,
    "Aicha" => 15,
    "Samir" => 13,
    "Zakaria" => 13,
    "Rafik" => 10,
    "Ilham" => 9,
    "Hamza" => 7,
    "Sami" => 7,
    "Noura" => 14
];

// Tableau indexé des modules
$modules = ["PHP", "C", "UML"];

// Affichage avec foreach
foreach ($modules as $module) {
    echo $module . "<br>";
}

echo "<hr>";

// Affichage avec les indices
for ($i = 0; $i < count($modules); $i++) {
    echo $i . " : " . $modules[$i] . "<br>";
}

?>
                   //Exercice 3.2 : Affichage HTML
       
       
<h2>Liste des notes</h2>

<table border="1" cellpadding="6">
    <tr>
        <th>Nom</th>
        <th>Note</th>
        <th>Mention</th>
    </tr>

    <?php foreach ($notes as $nom => $note): ?>
        <tr style="<?= $note < SEUIL ? 'color: red;' : '' ?>">
            <td><?= htmlspecialchars($nom) ?></td>
            <td><?= $note ?></td>
            <td><?= mention($note) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
          
<?php
                
// 1. Calculer les statistiques avec une boucle
$somme = 0;
$meilleure = reset($notes);
$faible = reset($notes);
$effectifs = [];

foreach ($notes as $nom => $note) {
    $somme += $note;

    if ($note > $meilleure) {
        $meilleure = $note;
    }

    if ($note < $faible) {
        $faible = $note;
    }

    $m = mention($note);

    if (isset($effectifs[$m])) {
        $effectifs[$m]++;
    } else {
        $effectifs[$m] = 1;
    }
}

$nombre = count($notes);
$moyenne = $somme / $nombre;

echo "<h2>Statistiques</h2>";
echo "Somme : $somme<br>";
echo "Moyenne : " . round($moyenne, 2) . "<br>";
echo "Meilleure note : $meilleure<br>";
echo "Plus faible note : $faible<br>";

// 2. Vérification avec les fonctions prédéfinies
echo "<h2>Vérification</h2>";
echo "Somme : " . array_sum($notes) . "<br>";
echo "Nombre d'apprenants : " . count($notes) . "<br>";
echo "Meilleure note : " . max($notes) . "<br>";
echo "Plus faible note : " . min($notes) . "<br>";

// 3. Nombre d'apprenants par mention
echo "<h2>Effectifs par mention</h2>";

foreach ($effectifs as $m => $nombre) {
    echo htmlspecialchars($m) . " : $nombre<br>";
}

                     // Exercice 3.4 : Tri

function afficher($tab) {
    foreach ($tab as $nom => $note) {
        echo "$nom : $note<br>";
    }
}

echo "<h2>Noms croissants</h2>";
ksort($notes);
afficher($notes);

echo "<h2>Notes décroissantes</h2>";
arsort($notes);
afficher($notes);

echo "<h2>Noms décroissants</h2>";
krsort($notes);
afficher($notes);

echo "<h2>Notes croissantes</h2>";
asort($notes);
afficher($notes);

echo "<h2>Modules triés</h2>";
sort($modules);
foreach ($modules as $module) {
    echo "$module<br>";
}
//sort() pour trier les valeurs par ordre croissant.
// l’ordre décroissant, on utilise rsort()

                    //Exercice 3.5 : Opérateurs de tableaux

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

var_dump($a + $b);
var_dump($a == $b);
var_dump($a === $b);

/*$a + $b : renvoie ["x" => 1, "y" => 2]. L’opérateur + réalise l’union des tableaux ; 
en cas de clé commune, il conserve la valeur du tableau de gauche.
$a == $b : renvoie true, car les deux tableaux ont les mêmes clés et les mêmes valeurs, même si l’ordre est différent.
$a === $b : renvoie false, car les tableaux doivent aussi avoir les mêmes éléments dans le même ordre.
*/
?>
