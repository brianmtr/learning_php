<?php
/*
On veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
*/

// et les fonctions
// $variable = demonstration($variable1, '1232');


//pour créer une entrée user
// $variable = readline();
// print_r($variable);
?>
<?php
//savoir si un mot est un palindrome
// $mot = readline('Veuillez entrer un mot');
// $reverse = strtolower (strrev($mot));
// if (strtolower($mot) === $reverse) {
//     echo 'Ce mot est un palindrome';
// } else {
//     echo "Ce mot n\'est pas un palindrome";
// }
?>

-----------------------------------

<?php
//Faire la moyenne d'un tableau
$notes = [10, 20, 13];
$sum = array_sum($notes) / 3;
$count = count($notes);
//ou
$sum = array_sum($notes);

echo "Vous avez " . round($sum / $count, 2);
?>

-----------------------------

<?php
//Faire la moyenne d'un tableau
$notes = [10, 20, 13];
$sum = array_sum($notes) / 3;
$count = count($notes);
//ou
$sum = array_sum($notes);

echo "Vous avez " . round($sum / $count, 2);
?>

-----------------------------

<?php
//var_dump($variable); var_dump affiche + d'infos sur la variable (type, valeur et le nombre de caractères)


// On demande à l'utilisateur de rentrer un creneaux
    // On vérifie que l'heure de début < l'heure de fin
    // On demande si on veut rajouter un nouveau creneaux (o/n)
// On demande à l'utilisateur de rentrer une heure
// On affiche l'état d'ouverture du magasin

$creneaux = [];

while (true) {
    $debut = (int)readline('Heure d\'ouverture : ');
    $fin = (int)readline('Heure de fermeture : ');
    if ($debut >= $fin) {
        echo "Le créneaux ne peut pas être enregistré car l'heure d'ouverture ($debut) est supérieur à l'heure de fermeture ($fin)";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('Entrer un nouveau créneau ? (n) : ');
        if ($action === 'n') {
            break;
        }
    }
}

// Le magasin est ouvert de 14h à 18h et de 9h à 12h

echo 'Le magasin est ouvert de';
foreach($creneaux as $k => $creneau) {
    if ($k > 0) {
        echo ' et de';
    }
    echo " {$creneau[0]}h à {$creneau[1]}h";
}

/*
$heure = (int)readline("A qu'elle heure voulez vous visiter le magasin ?");
$creneauTrouve = false;

foreach($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouve = true;
        break;
    }
}

if ($creneauTrouve) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Désolé, le magasin sera fermé :(';
}
*/
?>